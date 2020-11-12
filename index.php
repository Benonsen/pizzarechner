<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taschenrechner</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="number" name="z1" step="0.01" ><br>
        <input type="number" name="z2" step="0.01"><br>
        <label>Rechenart</label><br>
        <input type="radio" name="op" value="+">
        <label> Addition</label>
        <input type="radio" name="op" value="-" checked>
        <label> Subtraktion</label><br>
        <input type="radio" name="op" value="*">
        <label> Multiplikation</label>
        <input type="radio" name="op" value="/" >
        <label> Division</label><br>
        
        <input type="submit" value="Berechnen">
        <input type="reset" value="Zurücksetzen">
    </form>
    <?php
        if(isset($_POST['z1'])){
            $z1 = $_POST['z1'];
            $z2 = $_POST['z2'];
            $op = $_POST['op'];
            /*
            if($op == "+"){
                echo $z1 + $z2;
            }else if ($op == "-"){
                echo $z1 - $z2; 
            }else if ($op == "*"){
                echo $z1 - $z2; 
            }else if($op == "/"){
                echo $z1 - $z2; 
            }
            */
            switch($op){
                case "+": echo $z1 + $z2; break;
                case "-": echo $z1 - $z2; break;
                case "*": echo $z1 * $z2; break;
                case "/": echo $z1 / $z2; break;
                default: echo "error";
            }
        }
    ?>
</body>
</html>