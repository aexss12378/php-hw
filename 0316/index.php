<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: #f2f2f2;
        }
        form {
            margin: 50px auto;
            padding: 20px;  
            width: 300px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        input[type="text"] {
            width: 90%;
            padding: 10px;
            margin-bottom: 20px;
            border: none;
            border-bottom: 1px solid #ccc;
            font-size: 16px;
            color: #333;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form action="check.php" method="post">
        <label for="id">帳戶:</label>
        <input type="text" id="id" name="id">
        <br><br>
        <label for="pwd">密碼:</label>
        <input type="text" id="pwd" name="pwd">
        <br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>