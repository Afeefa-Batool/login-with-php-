<?php

$id=$_POST["loginid"];
$pass=$_POST["password"];

if($id=="abcd" && $pass="1234")
{
header(location:index.php);
}
else
{

    header(location:portfolio.php);
}
