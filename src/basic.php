<?php

# gettype
$num = 10;
if (gettype($num) == "integer"){
    echo "integer";
}
else {
    echo "not integer";
}
echo "<br />";

# settype
settype($num, "string");
echo var_dump($num);
echo "<br />";

# variable variables
$title = "hello";
$$title = "world";
echo $hello;
?>