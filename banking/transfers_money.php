<?php
require_once 'index.html';

$host = "localhost";
$port = 3308;
$user = "root";
$password = "";
$db = "banking_system";

$connection = mysqli_connect($host, $user, $password, $db, $port);
if (!$connection) {
    die("Could not connect: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['sender']) && isset($_POST['receiver']) && isset($_POST['amount'])) {
        $sender_name = $_POST['sender'];
        $receiver_name = $_POST['receiver'];
        $amount = $_POST['amount'];

        // Fetch the sender's balance from the database
        $query = "SELECT balance FROM customers WHERE name = '$sender_name'";
        $result = mysqli_query($connection, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $sender_balance = $row['balance'];

            if ($sender_name == $receiver_name) {
                $error_message = "Sender and receiver cannot be the same.";
            } elseif (!is_numeric($amount) || $amount <= 0) {
                $error_message = "Please enter a valid amount greater than 0.";
            } elseif ($sender_balance < $amount) {
                $error_message = "Insufficient balance. Sender does not have enough funds.";
            } else {
                // Fetch the receiver's ID based on the name
                $query = "SELECT id FROM customers WHERE name = '$receiver_name'";
                $result = mysqli_query($connection, $query);

                if ($result && mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    $receiver_id = $row['id'];

                    // Continue with the transfer
                    $query = "INSERT INTO transfer (sender_name, receiver_name, amount) VALUES ('$sender_name', '$receiver_name', '$amount')";
                    $result = mysqli_query($connection, $query);

                    if ($result) {
                        // Update sender and receiver balances
                        $query = "UPDATE customers SET balance = balance - '$amount' WHERE name = '$sender_name'";
                        $result = mysqli_query($connection, $query);

                        $query = "UPDATE customers SET balance = balance + '$amount' WHERE name = '$receiver_name'";
                        $result = mysqli_query($connection, $query);

                        header("Location: transaction.php");
                        exit;
                    } else {
                        $error_message = "Transfer failed. Please try again later.";
                    }
                } else {
                    $error_message = "Receiver not found.";
                }
            }
        } else {
            $error_message = "Error fetching sender's balance.";
        }
    } else {
        $error_message = "Invalid form data submitted.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Transfer Money</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
        h1 {
            color: #333;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Transfer Money</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="sender">Sender:</label>
        <select name="sender" id="sender">
            <?php
            $query = "SELECT name FROM customers";
            $result = mysqli_query($connection, $query);

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='{$row['name']}'>{$row['name']}</option>";
            }
            ?>
        </select>
        <br>

        <label for="receiver">Receiver:</label>
        <select name="receiver" id="receiver">
            <?php
            $query = "SELECT name FROM customers";
            $result = mysqli_query($connection, $query);

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='{$row['name']}'>{$row['name']}</option>";
            }
            ?>
        </select>
        <br>

        <label for="amount">Amount:</label>
        <input type="text" name="amount" id="amount" placeholder="amount in Rupees">
        <br>

        <input type="submit" value="Transfer">
    </form>
    <?php
    if (isset($error_message)) {
        echo "<div class='error'>$error_message</div>";
    }
    ?>
</body>
</html>
