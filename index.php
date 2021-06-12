<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/style.css?v=<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="css/navbar.css?v=<?php echo time(); ?>">

<title>Basic Banking System</title>

</head>

<body>
    <?php
        include 'navbar.php';
    ?>

    <div class="maincontainer">

<!-- Introduction section -->
        <div class="row intro py-1">
            <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                    <h3>Welcome to</h3>
                    <h1><span>S</span>parks <span>F</span>oundation <span>B</span>ank</h1>
                </div>
            </div>
            <div class="col-sm-12 col-md img text-center image">
                <img src="img/sparksbank.png" class="">
            </div>
        </div>

<!-- Activity section -->
    <div class="row activity text-center">
        <div class="col-md act">
            <img src="img/user.png" class="img-fluid">
            <br>
            <a href="createuser.php"><button>Create User</button></a>
        </div>
            <div class="col-md act">
                <img src="img/money.png" class="img-fluid">
                <br>
                <a href="transfermoney.php"><button>Make a Transaction</button></a>
            </div>
            <div class="col-md act">
                <img src="img/history.png" class="img-fluid">
                <br>
                <a href="transactionhistory.php"><button>Transaction History</button></a>
            </div>
        </div>
        
    </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>