<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta http-equiv="refresh" content="10"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="design.css">
    <script src="https://kit.fontawesome.com/e73faf0a36.js" crossorigin="anonymous"></script>
    <title>Display</title>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
</head>
<body onload="loadDoc()">
    <div class="sendbox">
        <div>
            <button onclick="goback()" class="go"><a><i class="fa-solid fa-arrow-left"></i></a></button>
        </div>
        <div class="sec1">Receiver Section</div>
        <div class="gap">
            <div><input id="box" class="incoming" placeholder="wait for new signal"></div>
            <br>
            <br>
            <div><button onclick="vivration()" id="autoclick" class="commonbtn1">Start</button></div>
        </div>
    </div>

    <script type="text/javascript">

        function loadDoc() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("box").value = this.responseText;
                // document.getElementById("box").innerHTML = this.responseText;
            }
        };
            xhttp.open("GET", "refresh.php", true);
            xhttp.send();
        }

        loadDoc();
        setInterval(function(){
            loadDoc();
        },5000);
    </script>

    <script>
        var button= document.getElementById("autoclick");
        setInterval(function () {
            button.click();
            // alert (a);
        },3000);
        // function vivrate(ms){
        //     navigator.vibrate(ms);
        // };
        function vivration(){
            var a=document.getElementById("box").value;
            if(a==1){
                navigator.vibrate([200, 100]);
            }
            if(a==2){
                navigator.vibrate([200, 100, 200, 100]);
            }
            if(a==3){
                navigator.vibrate([200, 100, 200, 100, 200, 100]);
            }
            if(a==4){
                navigator.vibrate([200, 100, 200, 100, 200, 100, 200, 100]);
            }
        };

        function goback(){
            window.location="index.php";
        }
        
    </script>


</body>
</html>

    