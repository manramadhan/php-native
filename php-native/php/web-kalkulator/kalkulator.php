<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
    background: aliceblue;
    font-family: sans-serif;
}

.calculator{
    width: 330px;
    background: mediumblue;
    margin: 100px auto;
    padding: 10px 15px 40px 15px;
    border-radius: 5px;
    box-shadow: 0px 5px 15px 0px #E1E1E1;
}

.angka{
    width: 300px;
    margin: 5px;
    border: none;
    font-size: 14px;
    border-radius: 5px;
    padding: 10px;
}

.opt{
    font-size: 14px;
    border: none;
    width: 245px;
    margin: 5px;
    border-radius: 5px;
    padding: 10px;
}

.button{
    background: #EC5055;
    border-top: none;
    border-right: none;
    border-left: none;
    border-radius: 5px;
    padding: 10px 15px;
    color: #eee;
    font-size: 13px;
    border-bottom: 4px solid #BF203D;
}

.brand{
    color: #eee;
    font-size: 10px;
    float: right;
    text-decoration: none;
    margin: 10px;
}

.title{
    text-align: center;
    color: #eee;
    font-weight: normal;
}


    </style>
</head>
<body>
<?php
$results = "";
if (isset($_POST['count'])) {
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $operation = $_POST['operation'];

    if (is_numeric($angka1) && is_numeric($angka2)) {
        switch ($operation) {
            case 'Addition':
                $results = $angka1 + $angka2;
                break;
            case 'Subtraction':
                $results = $angka1 - $angka2;
                break;
            case 'Multiplication':
                $results = $angka1 * $angka2;
                break;
            case 'Division':
                if ($angka2 != 0) {
                    $results = $angka1 / $angka2;
                } else {
                    $results = "Error: Division by zero";
                }
                break;
            default:
                $results = "Invalid Operation";
                break;
        }
    } else {
        $results = "Please enter valid numbers.";
    }
}
?>
<div class="calculator">
    <h1 class="title">KALKULATOR </h1>
    <form method="post" action="">
        <input type="text" name="angka1" class="angka" autocomplete="off" placeholder="Enter the first number" value="<?php echo isset($angka1) ? $angka1 : ''; ?>">
        <input type="text" name="angka2" class="angka" autocomplete="off" placeholder="Enter the second number" value="<?php echo isset($angka2) ? $angka2 : ''; ?>">
        <select class="opt" name="operation">
            <option value="Addition" <?php echo isset($operation) && $operation == 'Addition' ? 'selected' : ''; ?>>+</option>
            <option value="Subtraction" <?php echo isset($operation) && $operation == 'Subtraction' ? 'selected' : ''; ?>>-</option>
            <option value="Multiplication" <?php echo isset($operation) && $operation == 'Multiplication' ? 'selected' : ''; ?>>x</option>
            <option value="Division" <?php echo isset($operation) && $operation == 'Division' ? 'selected' : ''; ?>>/</option>
        </select>
        <input type="submit" name="count" value="Hitung" class="button">
    </form>
    <input type="text" value="<?php echo $results; ?>" class="angka" readonly>
</div>  
</body>
</html>
