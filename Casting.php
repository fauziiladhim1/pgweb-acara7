<!DOCTYPE html>
<html>

<body>
    <pre>
<?php
$a = 10;       // Integer
$b = 8.56;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL
$a = (string) $a;
$b = (string) $b;
$c = (string) $c;
$d = (string) $d;
$e = (string) $e;
//To verify the type of any object in PHP, use the var_dump() function:
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
?> 
</pre>
    <p>Note that when casting a Boolean into string, 
    <strong>true</strong> becomes "1" and 
    <strong>false</strong> becomes an empty string "".</p>
</body>

</html>