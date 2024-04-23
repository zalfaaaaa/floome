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
        html{
            height: 100%;
            box-sizing: border-box;
        }
        body{
            position: relative;
            font-family: 'Poppins', sans-serif;
            background-image: linear-gradient(#F3EDC8, #F3EDC8, #FF407D);
            min-height: 100%;
            margin: 0%;
            padding-bottom: 6.74rem;
        }
        header{
            background-color: white;
            box-shadow: 
                15px 15px 15px rgba(0, 0, 0, 0.1)
        }
        #footer{
            background-color: #FF407D ;
            font-size: 18px;
            padding: 16px;
            text-align: center;
            position: absolute;
            right: 0%;
            left: 0%;
            bottom: 0%;
            box-shadow: 
                -15px -15px 15px rgba(0, 0, 0, 0.2)
        }
        main{
            margin: auto;
            margin-top: 5%;
            display: flex;
            align-items:start;
            justify-content: start;
        }
        .po{
            animation: fadeIn 3s; 
        }
        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
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
    <div class="po">
    <header>
        <center><img src="doc/love.png" width="50" height="50" alt="flume">
        <h4 style="font-family: silkscreen, sans-serif;font-size:35px">Floom</h4></center>
    </header>
    <main>
        <img src="doc/sonny.png" width="20%" height="20%" alt="">
    </main>
    <footer id="footer">
        <center>
            <a href="movie.php"><img src="doc/fishputer.png" width="60" height="60" alt=""></a>&emsp;
            <a href="comic.php"><img src="doc/booK.png" width="60" height="60" alt=""></a>&emsp;
            <a href="menu.php"><img src="doc/star.png" width="60" height="60" alt=""></a>&emsp;
            <a href="food.php"><img src="doc/mushroomHouse.png" width="60" height="60" alt=""></a>&emsp;
            <a href="au.php"><img src="doc/sonny.png" width="60" height="60" alt=""></a>
        </center>
    </footer>
    </div>
</body>
</html>