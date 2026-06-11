<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        body {
            background-color: #1a1a1a;
            color: #e0c3fc; 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

        h1 {
            color: #d16ba5; 
            font-weight: 600;
        }

        h2 {
            color: #a97bff;
        }

        form {
            background-color: #2b2b2b;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.4);
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            color: #f0a6ca; 
        }

        input[type="number"] {
            padding: 8px 10px;
            border-radius: 6px;
            border: none;
            margin-bottom: 10px;
            width: 100%;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #d16ba5;
            color: #fff;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #a64ca6; 
        }

        a {
            color: #a97bff;
            margin-top: 10px;
            display: inline-block;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .result {
            margin-top: 20px;
            text-align: center;
        }
        .line{
            padding: 5px;
            border-bootom: 1px solid #ddd;
        }

    </style>
</head>
<body>

<div class="container">

<?php
    echo "<h1>W1 – jindaphan janthai BIT.2/3 No.24</h1>";
?>

<a href="index.php">index loop</a>

<form action="">
    <label for="">เลขแม่สูตรคูณ</label>
    <input type="number" name="num" id="">
    <input type="submit" value="คำนวณ">
</form>

<?php
if(isset($_GET["num"])){
    $num = $_GET["num"];

    echo "<div class='result'><h2>สูตรคูณแม่ " . $num . "</h2>";

    $i = 1;
    while( $i<=12){
        $i++;
        echo $num . " x " . $i . " = " . $num * $i . "<br>";
    }

    
}
?>

</body>
</html>