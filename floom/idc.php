<?php

session_start();

include('log/connect.php');
$query = $hiu->query('SELECT * FROM `account`')->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css -->  
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- font --> 
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Silkscreen:wght@400;700&display=swap" rel="stylesheet">
    <!-- icon --> 
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title>floomsa</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        html{
            height: 100%;
            box-sizing: border-box;
        }
        body{
            position: relative;
            font-family: 'Poppins', sans-serif;
            height: 100%;
            min-height: 100%;
            display: flex;
            flex-direction: column;
            margin: 0%;
        }
        header{
            background-color: white;
            box-shadow: 
                10px 10px rgba(0, 0, 0, 0.1)
        }
        #footer{
            margin-top: auto;
            background-color: #FF407D ;
            font-size: 18px;
            padding: 20px;
            text-align: center;
            position: absolute;
            right: 0%;
            left: 0%;
            box-shadow: 
                -15px -15px 15px rgba(0, 0, 0, 0.2)
        }
        .wrapper{
            animation: fadeIn 3s;
        }
        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }
        .po{
            width: 100%;
            background: linear-gradient(#F3EDC8, #F3EDC8, #FF407D);
            max-width: calc(var(--max-img) * var(--scale));
            background-repeat: no-repeat;
            background-size :100% 100%;
            padding: 12px 20px; 
        }
        #photo:hover{
            -webkit-transform: scale(1.1);
            transform: scale(1.3);
            -webkit-transition: .3s ease-in-out;
            transition: .3s ease-in-out;
        }
        .card{
            padding: 16px;
            width: 152vh;
            height: 99vh;
            border-radius: 2%;
            background: linear-gradient(pink, white, pink);
            box-shadow: 
                0 5px 9px 0 rgba(0, 0, 0, 0.2), 
                0 6px 20px 0 rgba(0, 0, 0, 0.20);
        }
        .container{
            margin-top: 5%;
            margin-bottom: 5%;
            margin-left: 15%;
            margin-right: 20%;
        }
        #pict{
            filter: grayscale(25%);
            filter: hue-rotate(-6.5deg);
            box-shadow: 
                0 5px 9px 0 rgba(0, 0, 0, 0.2), 
                0 6px 20px 0 rgba(0, 0, 0, 0.20);
            border: 10px dotted #FF407D;
            margin-top: 5%;
            margin-bottom: 5%;
            margin-right: 2%;
        }
        h2{
            font-weight: bolder;
            font-family: 'Times New Roman', Times, serif;
        }
        .box{
            margin-top: 4%;
            margin-bottom: 4%;
            margin-left: 2%;
        }
        p{
            font-family:'Times New Roman', Times, serif;
        }
    </style>
</head>
<body>
    <div class="wrapper">
    <header>
        <center><img src="doc/love.png" id="photo" width="50" height="50" alt="flume">
        <h4 style="font-family: silkscreen, sans-serif;font-size:35px">Floom</h4></center>
    </header>
    <div class="po">
        <div class="container">
            <div class="card">
                <b><h1 style="font-family: silkscreen, sans-serif;"><img src="doc/boww.png" width="80" alt="" id="photo" style="transform: rotate(-20deg);">&emsp;Identity C⚝rd ༄   ༘   .ೃ࿔   ࿐ ࿔ ₊˚ 𓂃˖𝜗𝜚 </h1></b>
                <div class="foto" style="">
                    <img src="doc/zalfa.jpeg" align="right" width="270" height="360" alt="pas photo" id="pict">
                    <div class="box">
                        <h2>Personal Data</h2>
                        <p>Name : <?=$query['name']?></p>
                        <p>Username : <?=$query['username']?></p>
                        <p>Password : <?=$query['password']?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer id="footer">
        <center>
            <a href="menu.php"><img src="doc/star.png" width="60" height="60" alt="" ></a>
        </center>
    </footer>
    </div>
</body>
</html>