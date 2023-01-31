<?php

    $connect=mysqli_connect('localhost','root','','magic') or die('Connection Error!');

    if(isset($_POST['userbtn'])){

        $val = $_POST['val'];
        $check = mysqli_query($connect,"SELECT * FROM `userinput`");

        $id=mysqli_num_rows($check)+1;
        $insert = mysqli_query($connect,"INSERT INTO `userinput` VALUES('$id','$val','1')");

        // echo '<script>
        //     navigator.vibrate([200, 100]);
        // </script>';

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
    <title>Sending End</title>
</head>
<body>
    <div class="sendbox">
        <div>
            <button onclick="goback()" class="go"><a><i class="fa-solid fa-arrow-left"></i></a></button>
        </div>
        <div class="sec">Sender Section</div>
        <div>
            <form action="sender.php" method="post">
                <!-- <input type="number" name="val" required> -->
                <div class="box1">
                    <div>
                        <select name="val" class="dropbox">
                            <option> </option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>
                    <div>
                        <button type="submit" name="userbtn" class="commonbtn1" onclick="viv(200)">Submit</button>
                    </div>
                </div>
            </form>
        <div>
    </div>

    <script>
        function viv(ms){
            navigator.vibrate(ms);
        }

        function goback(){
            window.location="index.php";
        }
    </script>

</body>
</html>
