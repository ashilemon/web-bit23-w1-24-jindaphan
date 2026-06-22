<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แปลงลิตรเป็นแกลลอน</title>

    <style>
        body{
            margin:0;
            font-family:'Segoe UI',sans-serif;
            background: linear-gradient(135deg,#ffd6ec,#e6d6ff,#fff0b3);
            min-height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
        }

        .container{
            background:rgba(255,255,255,0.9);
            width:420px;
            padding:35px;
            border-radius:25px;
            border:4px solid #f8c8ff;
            box-shadow:0 10px 30px rgba(180,120,255,.25);
            text-align:center;
        }

        h1{
            color:#8a4fff;
            margin-bottom:10px;
        }

        h2{
            color:#ff7eb6;
            font-size:20px;
            margin-bottom:25px;
        }

        label{
            color:#7a5cff;
            font-weight:bold;
            font-size:18px;
        }

        input[type=text]{
            width:90%;
            padding:12px;
            margin:15px 0;
            border:2px solid #e7b7ff;
            border-radius:12px;
            background:#fff9fd;
            font-size:16px;
        }

        input[type=text]:focus{
            outline:none;
            border-color:#b78dff;
        }

        input[type=submit]{
            background:linear-gradient(90deg,#ffb3d9,#d8b4ff,#ffe08a);
            border:none;
            padding:12px 30px;
            border-radius:15px;
            font-size:16px;
            font-weight:bold;
            cursor:pointer;
            color:#5b3a8f;
            transition:.3s;
        }

        input[type=submit]:hover{
            transform:scale(1.05);
            box-shadow:0 5px 15px rgba(0,0,0,.15);
        }
    </style>
</head>

<body>

<div class="container">
    <h1>งานที่ 2 จินดาพรรณ BIT.2/3 เลขที่ 24</h1>
    <h2>แปลงลิตรเป็นแกลลอน</h2>

    <form action="result.php" method="post">
        <label>ลิตร</label><br>
        <input type="numer" name="p_l"><br>

        <input type="submit" value="คำนวณ">
    </form>
</div>

</body>
</html>