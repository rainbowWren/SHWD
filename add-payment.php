<?php
//action="add-payment.php" method="POST"
    if (isset($_POST["card-name"])){
        require_once "inc/dbconn.inc.php";

       $sql = "INSERT INTO customerInfo(cardName) VALUES(?);";
       $statement = mysqli_stmt_init($conn);

       mysqli_stmt_prepare($statement, $sql);
       mysqli_stmt_bind_param($statement, 's', htmlspecialchars($_POST["card-name"]));
       if (mysqli_stmt_execute($statement)){
           header("location: checkout-shipping.php");
       } else{
           mysqli_error($conn);
       }
    }

    if (isset($_POST["card-number"])){
        require_once "inc/dbconn.inc.php";

       $sql = "INSERT INTO customerInfo(cardNumber) VALUES(?);";
       $statement = mysqli_stmt_init($conn);

       mysqli_stmt_prepare($statement, $sql);
       mysqli_stmt_bind_param($statement, 's', htmlspecialchars($_POST["card-name"]));
       if (mysqli_stmt_execute($statement)){
           header("location: checkout-shipping.php");
       } else{
           mysqli_error($conn);
       }
    }

    if (isset($_POST["expiration-date"])){
        require_once "inc/dbconn.inc.php";

       $sql = "INSERT INTO customerInfo(expirationDate) VALUES(?);";
       $statement = mysqli_stmt_init($conn);

       mysqli_stmt_prepare($statement, $sql);
       mysqli_stmt_bind_param($statement, 's', htmlspecialchars($_POST["expiration-date"]));
       if (mysqli_stmt_execute($statement)){
           header("location: checkout-shipping.php");
       } else{
           mysqli_error($conn);
       }
    }

    if (isset($_POST["cvv"])){
        require_once "inc/dbconn.inc.php";

       $sql = "INSERT INTO customerInfo(cvv) VALUES(?);";
       $statement = mysqli_stmt_init($conn);

       mysqli_stmt_prepare($statement, $sql);
       mysqli_stmt_bind_param($statement, 's', htmlspecialchars($_POST["cvv"]));
       if (mysqli_stmt_execute($statement)){
           header("location: checkout-shipping.php");
       } else{
           mysqli_error($conn);
       }
    }

    mysqli_close($conn);
?>