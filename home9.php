<!DOCTYPE html>

<head>
    <title>calculator</title>
</head>

<?php
$currentPage= $_SERVER['SCRIPT_NAME'];
echo $currentPage;
$first =' ';
$first = $_POST['first'];
$second=' ';
$second= $_POST['second'];
$op =' ';
$op = $_POST['op'];
$res = '';

    switch ($op) {
        case "Add":
           $res = $first+ $second;
            break;
        case "Subtract":
           $res = $first - $second;
            break;
        case "Divide":
            $res =($first / $second);
            break;
             case "Multiply":
            $res = $first* $second;
    }


?>

<body>
    <div id="calc1">
    <h1>PHP- Simple Calculator Program</h1>
      <form action="" method="post" id="calc">
            <p>
                <input type="number" name="first" id="first" required="required" value="<?php echo $first; ?>" /> <b>First Number</b>
            </p>
            <p>
                <input type="number" name="second" id="second" required="required" value="<?php echo $second; ?>" /> <b>Second Number</b>
            </p>
            <p>
                <input readonly="readonly" name="result" value="<?php echo $res; ?>"> <b>Result</b>
            </p>
            <input type="submit" name="op" value="Add" />
            <input type="submit" name="op" value="Subtract" />
            <input type="submit" name="op" value="Multiply" />
            <input type="submit" name="op" value="Divide" />
      </form>
    </div>
</body>
</html>