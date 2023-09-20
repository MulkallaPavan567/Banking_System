<?php 
  require_once 'index.html';
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <title>View All Transactions</title>
</head>
<body class="bg-white">
    <!--<div class="container">-->
      <div class="row mt-5">
        <div class="col">
          <div class="card mt-5">
            <div class="card-header">
              <h2 class="display-6 text-center">View All Transactions</h2>
            </div>
            <div class="card-body">
              <table class="table table-bordered text-center">
                <tr class="bg-dark text-white">
                  <td> ID </td>
                  <td> Sender Name </td>
                  <td> Receiver Name </td>
                  <td> Amount </td>                  
                </tr>
                <tr>
                <?php 
                //require_once 'index.html';
                require_once 'config/db1.php';
                $query = "select * from transfer";
                $data = mysqli_query($con,$query);
                $total = mysqli_num_rows($data);

                if($total!=0)
                {
                    while($result = mysqli_fetch_assoc($data))
                    {
                        echo"
                        <tr>
                        <td>".$result['trans_id']."</td>
                        <td>".$result['sender_name']."</td>
                        <td>".$result['receiver_name']."</td>
                        <td>".$result['amount']."</td>
                        </tr>
                        ";
                    }
                }
                else
                {
                    echo "No records found";
                }
                ?>
                
              </table>
            </div>
          </div>
        </div>
      </div>
    <!--</div>-->
</body>
</html>