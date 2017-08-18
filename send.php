
<?php
$user = 'kylewilson';
$password = 'kw121889';
$mysql = 'mysql:host=159.203.251.4;dbname=login;port=80';
$dbh = new PDO($mysql, $user, $password);



if (!$dbh)
{
    echo "Please try later.";
}
else
{
    echo "We did it.";
}
?>
