<?php 
  require_once 'index.html';
  ?>
<!DOCTYPE html>
<head>
  <title>Booking_Details</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
  <style>
    #section {
      padding-top: 20px;
      padding-bottom: 250px;
      padding-left: 120px;
    }
    #header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px;
            background-color: #D7E0E0;
            color: rgb(3, 3, 3);
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }
  </style>
</head>
<body>
  <div id="section">
   
  <h1>View Customer Information </h1><br>
          <form action="" method="post" > 
            <center>
          <label for="mobile"><b>CUSTOMER ID : </b></label>
          <input type="text" name="search" max="10" placeholder="enter the customer id" ><br><br>
            <input type="submit"  value="search"></center>
        </form> 
<?php
    require_once 'index.html';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      //Retrieve form data
      $id = $_POST['search'];

      //Connect to the database
      $conn = new mysqli("127.0.0.1:3308", "root", "", "banking_system");

      //Check connection
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

      //Retrieve data from the database by using id
      $sql = "SELECT * FROM customers WHERE id = '$id'";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
        //output data of each row
        while ($row = mysqli_fetch_assoc($result))   //to fetch a single row from the result set returned by MySQL database query
        {
          //echo "<div style='background-color: lightgreen; padding: 10px; border: solid lightcoral;'>";
          echo " <p style='font-weight: bold; font-size:38px;'> 
            ID : " . $row["id"] . "<br>";
          echo "Fullname  : " . $row["name"] . "<br>";
          echo "Email  : " . $row["email"] . "<br>";
          echo "Balance  : " . $row["balance"] . "<br>";
          echo "</p>";
          echo "</div>";
        }
      } else {
        echo "<script> alert('No users found with the given id')</script>";
      }

      mysqli_close($conn);
    }

    ?>

</div>
</body>

</html>