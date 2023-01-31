<?php

    $connect=mysqli_connect('localhost','root','','magic') or die('Connection Error!');

    // fetching last or latest row of the table
    $check=mysqli_query($connect,"SELECT * FROM `userinput` ORDER BY id DESC LIMIT 1");

    // put last row as a varibale of array 
    $sqll=mysqli_fetch_row($check);

    if($sqll[2]==1){
        // echo 100;
        if($sqll[1]==1){
            echo '<script>
                    setTimeout(function () {
                        navigator.vibrate([200, 100]);
                    },1500);
                </script>';
        }
        if($sqll[1]==2){
            echo '<script>
                    setTimeout(function () {
                        navigator.vibrate([200, 100, 200, 100]);
                    },1500);
                </script>';
        }
        if($sqll[1]==3){
            echo '<script>
                    setTimeout(function () {
                        navigator.vibrate([200, 100, 200, 100, 200, 100]);
                    },1500);
                </script>';
        }
        if($sqll[1]==4){
            echo '<script>
                    setTimeout(function () {
                        navigator.vibrate([200, 100, 200, 100, 200, 100, 200, 100]);
                    },1500);
                </script>';
        }

        $check = mysqli_query($connect,"SELECT * FROM `userinput`");
        $count=mysqli_num_rows($check);
        $update = mysqli_query($connect,"UPDATE `userinput` SET bool=0 WHERE id='$count'");
    }
    else{
        // echo -1;
        echo 'No new command';
    }

    // echo $sqll[2];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="refresh" content="5">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="p1.css"> -->
    <title>Receiving End</title>
</head>
<body>
    <!-- <button class="startbtn" onclick="vivrate(200)">Start</button> -->
    
</body>
</html>
