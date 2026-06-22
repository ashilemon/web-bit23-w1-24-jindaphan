<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ผลลัพธ์</title>

<style>
    body{
        margin:0;
        font-family:'Segoe UI',sans-serif;
        background:linear-gradient(135deg,#ffd6ec,#e6d6ff,#fff0b3);
        min-height:100vh;
        display:flex;
        justify-content:center;
        align-items:center;
    }

    .container{
        background:rgba(255,255,255,.9);
        width:400px;
        padding:35px;
        border-radius:25px;
        border:4px solid #f8c8ff;
        text-align:center;
        box-shadow:0 10px 30px rgba(180,120,255,.25);
    }

    h1{
        color:#8a4fff;
    }

    .result{
        margin:20px 0;
        font-size:24px;
        font-weight:bold;
        color:#ff6fa5;
    }

    a{
        display:inline-block;
        text-decoration:none;
        background:linear-gradient(90deg,#ffb3d9,#d8b4ff,#ffe08a);
        color:#5b3a8f;
        padding:10px 20px;
        border-radius:12px;
        font-weight:bold;
    }

    a:hover{
        opacity:.9;
    }
</style>
</head>

<body>

<div class="container">
    <h1>ผลการคำนวณ</h1>

    <?php
        $p_l = $_POST["p_l"];

        $total = $p_l / 3.785;
        echo "<div class='result'>แกลลอน : ".$total."</div>";
    ?>
    <a href="index.php">กลับไปหน้าแรก</a>
</div>

</body>
</html>