<?php

session_start();

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
            height:38.5rem;
        }
        img{
            margin-top: 2.7%;
            margin-bottom: 1%;
        }
        img:hover{
            -webkit-transform: scale(1.1);
            transform: scale(1.3);
            -webkit-transition: .3s ease-in-out;
            transition: .3s ease-in-out;
        }
        .hoVer:hover{
            -webkit-transform: scale(1.1);
            transform: scale(1.3);
            -webkit-transition: .3s ease-in-out;
            transition: .3s ease-in-out;
        }
        .card{
            width: 60vh;
            height: 70vh;
            border-radius: 15%;
            background-color: rgba(0, 0, 0, 0);
            box-shadow: 
                0 5px 9px 0 rgba(0, 0, 0, 0.2), 
                0 6px 20px 0 rgba(0, 0, 0, 0.20);
        }
    </style>
</head>
<body>
    <div class="wrapper">
    <div class="po">
        <center>
            <img src="doc/boww.png" width="80" alt="">
            <div class="card">
                <div class="card-body">
                    <form action="log/enlog.php" method="post">
                        <div class="d-flex mt-3">
                            <h3 class="fw-bold">&emsp;&emsp;&emsp;&ensp;⨍l❀𝒢in ౨ৎ</h3>
                        </div>
                        <hr class="divider">
                        <div class="col mt-2 mb-3" style="font-family:'Courier New', Courier, monospace;">
                            <label for="form-label" class="fw-bold mb-1">Username</label>
                            <input type="text" name="usn" class="form-control rounded-3" placeholder="000000" required>
                        </div>
                        <div class="col mt-2 mb-3" style="font-family:'Courier New', Courier, monospace;">
                            <label for="form-label" class="fw-bold mb-1">Passwword</label>
                            <input type="password" name="password" class="form-control rounded-3" placeholder="*****" required> 
                        </div><br>
                        <div class="mt-3 d-flex" style="margin-left: 15%;margin-right:15%">
                            <a href="homePage.php" class="hoVer btn btn text-center fw-bold shadow" style="width:100px;background-color:#F6E6CB;border-radius:12px">Nuh uh</a>&emsp;
                            <button type="submit" class="hoVer btn btn text-center fw-bold shadow" style="width:100px;background-color:#FF5580;color:white;border-radius:12px">oK :3</button>
                        </div>
                    </form>
                </div>
            </div>
        </center>
    </div>
    </div>
</body>
</html>