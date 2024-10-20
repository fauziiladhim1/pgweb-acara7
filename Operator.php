<!DOCTYPE html>
<html>
<body>
    <?php
    $x = 20;
    $y = 5;

    echo $x + $y . "<br>";
    echo $x - $y . "<br>";
    echo $x * $y . "<br>";
    echo $x / $y . "<br>";
    echo $x % $y . "<br>";
    echo $x ** $y . "<br><br>";

    $x = 50;
    echo $x;
    echo "<br>";

    $x = 30;
    $x += 100;

    echo $x;
    echo "<br>";
    echo "<br>";

    $x = 200;
    $y = "200";

    var_dump($x == $y);
    echo "<br>";
    var_dump($x === $y);
    echo "<br>";
    var_dump($x != $y);
    echo "<br>";
    var_dump($x <> $y);
    ?>
</body>
</html>