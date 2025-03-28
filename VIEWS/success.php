<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>success</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');


        *{
            margin: 0;
            padding: 0;
            font-family: "Poppins", sans-serif;
        }
        body{
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
            background:rgba(14, 15, 15, 0.34);

        }
        div{
            position: relative;
            z-index: 2;
            height:300px;
            width: 450px;
            background:red;
            background:#fff;
            border-radius:8px;
            box-shadow: 2px 2px 5px #00000044,
                 -2px -2px 5px #00000044;
            display:flex;
            justify-content:center;
            align-items:center;

            flex-direction:column;

        }
        button{
            width: 80%;
            height:50px;
            border:none;
            box-shadow: 2px 2px 5px #00000044,
            -2px -2px 5px #00000044;
            border-radius:10px;
            background:rgba(24, 37, 150, 0.59);

        }
        a{
            width: 100%;
            height:100%;
            display:flex;
            justify-content:center;
            align-items:center;
            background:rgba(24, 41, 190, 0.97);
            color:#fff;
            border-radius:10px;
            text-decoration:none;
            font-size:20px;
            transition:0.5s ease-in-out;
        }
        a:hover{
            transform:translateY(-10px);
        }
        p{
            position: absolute;
            top:10px;
            color:rgba(28, 155, 11, 0.97);
            font-size:20px;
            font-weight:500;
        }
        
    </style>
</head>
<body>
    <div>
        <p>Sign Up success.Proceed to login</p>
  

    <button><a href="login.php">Login</a></button>

 

    </div>
</body>
</html>