<?php 

  require_once 'db1.php';

  function display_data(){
    global $con;
    $query = "select * from customers";
    $data = mysqli_query($con,$query);
    return $data;
  }

?>