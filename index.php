<?php

    if(isset($_POST['senderbtn'])){
        echo '<script>
                window.location="sender.php";
            </script>';
    }

    if(isset($_POST['receiverbtn'])){
        echo '<script>
                window.location="display.php";
            </script>';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="design.css">
    <script src="https://kit.fontawesome.com/e73faf0a36.js" crossorigin="anonymous"></script>
    <title>Magic</title>
</head>
<body>
    <div class="outbox">
        <div class="heading">Play With Vivration</div>
        <form action="index.php" method="post">
            <div class="press">If you are a sender</div>
            <button name="senderbtn" class="commonbtn">Sender</button>
        </form>
        <br>
        <form action="index.php" method="post">
            <div class="press">If you are a receiver</div>
            <button name="receiverbtn" class="commonbtn">Receiver</button>
        </form>
    </div>
</body>
</html>