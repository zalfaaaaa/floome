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
    <!-- UIkit JS -->
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.19.4/dist/js/uikit.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.19.4/dist/js/uikit-icons.min.js"></script>
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
        /* h1{
            font-size: 85px;
            margin: auto;
            height: 55vh;
            display: flex;
            align-items: center;
            justify-content: center;
        } */
        .po{
            animation: fadeIn 3s; 
        }
        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }
        /* .kontrakan{
            width: 80%;
            height: 700px;
            margin: auto;
            border: 8px;
        } */
        /* .item{
            width: 150px;
            height: 150px;
            padding: 1em;
            font-weight: 700;
            text-align: center;
        }
        .kontrakan{
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            align-items: flex-start;
            flex-wrap: wrap;
            gap: 5em;
        } */
        img:hover{
            -webkit-transform: scale(1.1);
            transform: scale(1.3);
            -webkit-transition: .3s ease-in-out;
            transition: .3s ease-in-out;
        }
        .imG{
            -webkit-transform: scale(1);
            transform: scale(1);
            -webkit-transition: .3s ease-in-out;
            transition: .3s ease-in-out;
        }
        .imG:hover{
            -webkit-transform: scale(1.1);
            transform: scale(1.2);
        }
        a{
            text-decoration: none;
            color: black;
            font-family: silkscreen, sans-serif ;
        }
        .col{
            margin-top: 40px;
        }
        .link{
            color: black;
        }
        .link:hover{
            color: #0002A1;
            font-size: 20px;
            -webkit-transform: scale(1);
            transform: scale(1);
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
        <div class="container container-md text-center">
            <div class="row">
                <div class="col">
                    <img src="doc/fishputer.png" class="imG" width="190" height="190" alt="">
                    <center><a href="movie.php" class="link uk-animation-shake">movie</a></center>
                </div>
                <div class="col">
                    <img src="doc/comic.png" class="imG" width="190" height="190" alt="">
                    <center><a href="au.php" class="link">comic/manhwa</a></center>
                </div>
                <div class="col">
                    <img src="doc/mushroomHouse.png" class="imG" width="190" height="190" alt="">
                    <center><a href="food.php" class="link">hangout</a></center>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <img src="doc/sonny.png" class="imG" width="190" height="190" alt="">
                    <center><a href="au.php" class="link">alternative universe</a></center>
                </div>
                <div class="col">
                    <img src="doc/booK.png" class="imG" width="190" height="190" alt="">
                    <center><a href="novel.php" class="link">novel</a></center>
                </div>
                <!-- <div class="col mt-3">
                    <img src="doc/mushroomHouse.png" class="imG" width="190" height="190" alt="">
                    <center><a href="food.php">hangout</a></center>
                </div> -->
            </div>
        </div>
        <!-- <div class="kontrakan">
            <div class="item item-1">
                <img src="doc/fishputer.png" width="190" height="190" alt="">
                <center><a href="movie.php">movie</a></center>
            </div>
            <div class="item item-2">
                <img src="doc/book.png" width="190" height="190" alt="">
                <center><a href="au.php">alternative universe</a></center>
            </div>
            <div class="item item-3">
                <img src="doc/ramen.png" width="190" height="190" alt="">
                <center><a href="food.php">hangout</a></center>
            </div>
        </div> -->
    </main>
    <footer id="footer">
        <center>
            <a href="menu.php"><img src="doc/star.png" width="60" height="60" alt=""></a>&emsp;
        </center>
    </footer>
    </div>
</body>
</html>