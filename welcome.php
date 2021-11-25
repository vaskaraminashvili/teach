<?php


pd($_GET);
$name = $_GET['name'];
$email = $_GET['email'];

echo $name;
echo "<br>";
echo $email;











    function pd($obj)
    {

        print "<div align='left'><font face='Verdana' color='//536f8c' size='3'><pre>";
        print_r($obj);
        print "</pre></font></div>";
        die;

    }
