<?php
function myfun(){
    SESSION_START();
    //CONNECT TO DB
    $con=mysqli_connect('localhost','root','','kaali');
    $queryTwo="SELECT * FROM Likes";
    $resulTwo=mysqli_query($con,$queryTwo);
    $row=mysqli_num_rows($resulTwo);
    if($row>0){
        echo $row;
    }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaali</title>
    <style>
        *{
            margin:0;
            padding:0;
            overflow-x:hidden;

        }
        #main{
            width: 100vw;
            height:100vh;
            Padding:10px;
            font-size:18px;
            font-family:'Fredoka One';
        }
        #imone{
            border-radius:20px;
            width: 30%;
        }
        button{
            cursor:pointer;
        }
    </style>
</head>
<body>
    <div id="main">
        <img src="Kaali.PNG" alt="" id="imone">
        <form action="op.php" method="POST">
            Likes : <?php myfun();?>
            <button>Like</button>
        </form>
    </div>
</body>
</html>