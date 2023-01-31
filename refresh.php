<?php

    $connect=mysqli_connect('localhost','root','','magic') or die('Connection Error!');

    // fetching last or latest row of the table
    $check=mysqli_query($connect,"SELECT * FROM `userinput` ORDER BY id DESC LIMIT 1");

    // put last row as a varibale of array 

    $sqll=mysqli_fetch_row($check);


    if($sqll[2]==1){
        echo $sqll[1];
        $check = mysqli_query($connect,"SELECT * FROM `userinput`");
        $count=mysqli_num_rows($check);
        $update = mysqli_query($connect,"UPDATE `userinput` SET bool=0 WHERE id='$count'");
    }
    

    // $sqll=mysqli_fetch_array($check);
    // echo $sqll["pulse"];
    

?>