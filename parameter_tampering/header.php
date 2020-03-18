<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>UTS CEH PRAKTEK</title>
    </head>
    <style type="text/css">
        h2{
            text-align: center;
        }
        div.name{
            width:50%;
            margin:auto;
        }
        h1{
            text-align: center;
            margin-bottom: 30px;
            margin-top: 30px;
        }
        .right{
            position: absolute;
            left: 65%;
        }
        .white
        {
            color: white;
        }
        .kanan{
            margin-left: auto;
        }
        .item{
            background-color: black;
        }
        .active{
            color:grey;
            text-decoration: none;
            font-size: 16px;
            padding: 8px;
            display: block;
        }
        .active:hover{
            text-decoration: none;
            color:white;
        }
        a.white{
            text-decoration: none;
            font-size: 16px;
            padding: 8px;
            display: block;
        }
        a.white:hover{
            text-decoration: none;
            color:lightgrey;
        }
        div.center{
            margin:auto;
            width:500px;
        }
        form{
            margin:auto;
        }
        button.black{
            background-color: lightgrey;
            color: white;
            width:100px;
            border-radius: 10%;
            margin-left: auto;
        }
        button:hover{
            background-color:grey;
            cursor:pointer;
        }
        div.email{
            width:49%;
            margin:auto;
            margin-top: 10px;
            margin-bottom: 10px;
        }
        div.password{
            width:60%;
            margin:auto;
        }
        div.submitdiv{
            width:100px;
            margin:auto;
            margin-top: 10px;
        }
        input.rounded{
            border-radius: 10%;
            box-shadow: 0px;
            width:200px;
            border:solid 1px lightgrey;
        }
        div.register{
            text-align: center;
            width: 50%;
        }
        a{
            text-decoration: none;
        }
        a:hover{
            text-decoration: none;
        }
        div.border{
            margin:auto;
            width:500px;
            border-radius: 6px;
            border:solid 2px lightgrey;
        }
    </style>
    <body>
        <nav class="navbar navbar-light navbar-expand-lg item">
            <a class="navbar-brand text-white" href="../index.php">UTS CEH</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav kanan">
                    <li class="nav-item">
                        <a href="../main/index.php" class="white">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="white" href="../cookie_tampering/index.php">Cookie Tampering</a>
                    </li>
                    <li class="nav-item">
                        <a class="active" href="../parameter_tampering/index.php">Parameter Tampering</a>
                    </li>
                    <li class="nav-item">
                        <a class="white" href="sql_injection/index.php">SQL Injection</a>
                    </li>
                    <li class="nav-item">
                        <a class="white" href="xss/index.php">XSS</a>
                    </li>
                </ul>
            </div>
        </nav>