<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f5f5f5;
            margin: 0;
        }
 
        .calculator {
            width: 260px;
            background-color: #333;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
 
        input[type="text"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 10px;
            font-size: 24px;
            border: 1px solid #ddd;
            border-radius: 5px;
            text-align: right;
        }
 
        .buttons {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
        }
 
        input[type="submit"] {
            padding: 20px;
            font-size: 18px;
            background-color: #333;
            border: 1px solid #ddd;
            border-radius: 5px;
            cursor: pointer;
        }
 
        input[type="submit"]:hover {
            background-color: #ddd;
        }
        #C-button {
            background-color: yellow;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <form method="post">
            <input type="text" name="display" value="<?php echo isset($_POST['display']) ? $_POST['display'] : ''; ?>" readonly>
            <div class="buttons">
                <input type="submit" name="button" value="7">
                <input type="submit" name="button" value="8">
                <input type="submit" name="button" value="9">
                <input type="submit" name="button" value="/">
               
                <input type="submit" name="button" value="4">
                <input type="submit" name="button" value="5">
                <input type="submit" name="button" value="6">
                <input type="submit" name="button" value="*">
               
                <input type="submit" name="button" value="1">
                <input type="submit" name="button" value="2">
                <input type="submit" name="button" value="3">
                <input type="submit" name="button" value="-">
               
                <input type="submit" name="button" value="0">
                <input type="submit" name="button" value=".">
                <input type="submit" name="button" value="=">
                <input type="submit" name="button" value="+">
                <input id="C-button" type="submit" name="button" value="C" >
            </div>
        </form>
    </div>
 
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $display = isset($_POST['display']) ? $_POST['display'] : '';
        $button = isset($_POST['button']) ? $_POST['button'] : '';
 
        if ($button == 'C') {
            $display = '';
        } elseif ($button == '=') {
            try {
                $display = eval('return ' . $display . ';');
            } catch (Throwable $e) {
                $display = 'Error';
            }
        } else {
            $display .= $button;
        }
    }
    ?>
</body>
</html>
 
has context menu