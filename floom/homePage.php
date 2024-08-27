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
        h1{
            font-size: 85px;
            margin: auto;
            height: 50vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        img:hover{
            -webkit-transform: scale(1.1);
            transform: scale(1.3);
            -webkit-transition: .3s ease-in-out;
            transition: .3s ease-in-out;
        }
    </style>
</head>
<body>
    <div class="wrapper">
    <header>
        <center><img src="doc/love.png" width="50" height="50" alt="flume">
        <h4 style="font-family: silkscreen, sans-serif;font-size:35px">Floom</h4></center>
    </header>
    <div class="po">
        <center>
            <h1 class="text"><b>𝒽i!! ⨍i❀re!! ✶</b></h1>
            <h3>your personal diary :3</h3>
            <p style="font-family: 'Courier New', Courier, monospace;"><b>by sasa.</b></p>
        </center>
    </div>
    <footer id="footer">
        <center>
            <a href="login.php"><img src="doc/star.png" width="60" height="60" alt=""></a>
        </center>
    </footer>
    </div>
</body>
</html>