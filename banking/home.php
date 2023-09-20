<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banking</title> 
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <style>
        
        #header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px;
            background-color: #D7E0E0;
            color: rgb(3, 3, 3);
        }

    </style>
    <body>

    <!-- AOS Animations -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <!-- Bootstrap Scirpt -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script>
        AOS.init();
    </script>


    <div id="header">
        <div id="img_left">
            <img src="logo.png" alt="University of Hyderabad">
        </div>
        <div id="title">
            <h1>The Sparks Foundation</h1>
            <h2>Banking System</h2>
        </div>
        <div id="img_right">
            <img src="bank4.jpg" alt="bank">
        </div>
    </div>
    <div id="navigation" class="btn-group1">
        <button onclick="window.location.href='home.php'">Home</button>
        <button onclick="window.location.href='All_Customers.php'">View All Customers</button>
        <button onclick="window.location.href='view_customer.php'">View a Customer</button>
        <!--<button onclick="window.location.href='customers.php'">Select Receiver</button>-->
        <button onclick="window.location.href='transfers_money.php'">Transfer Money</button>
    </div>
    <br>
    <h1>Welcome to Banking System</h1><br>

    <!-- Carousel -->
        <div id="demo" class="carousel slide" data-bs-ride="carousel">
        <!-- Indicators -->
        <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>

        <!-- Slideshow -->
        
        <div class="carousel-inner">
        <div class="carousel-item active">
            
            <img src="bank1.jpg" alt="Bank" class="d-block" style="width:100%">
            <div class="carousel-caption">
            <h3>Bank</h3>
            <p>Your trust, our Responsibility!</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="bank2.webp" alt="Chicago" class="d-block" style="width:100%">
            <div class="carousel-caption">
            <h3>Investment Services</h3>
            <p>Invest your money in mutual funds, stocks, bonds, etc., </p>
            </div> 
        </div>
        <div class="carousel-item">
            <img src="bank3.jpg" alt="New York" class="d-block" style="width:100%">
            <div class="carousel-caption">
            <h3>Internet Banking</h3>
            <p>Now perform your transactions from your own place</p>
            </div>  
        </div>
        </div>

        <!-- Left and right controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
        </button>
        </div>
    <!--End of the Carousel -->
    </body>
</html>
