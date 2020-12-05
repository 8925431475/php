<?php

$name=$_POST['name1'];

$date=$_POST['date1'];

$mail=$_POST['email1'];

$pass1=$_POST['pass1'];

$pass2=$_POST['pass2'];


if(!empty($name)||!empty($date)||!empty($mail)||!empty($pass1)||!empty($pass2))
{

    $localhost="localhost";

    $db="root";

    $dbpa="";

    $dbname="mini";

    $con=new mysqli($localhost,$db,$dbpa,$dbname);

    if(mysqli_connect_error())
    {
        die('connection error('.mysqli_connect_errno.')'.mysqli_connect_error());
        }

    else
    {

        $out="INSERT Into personal(name2,date2,email2,pass2,pass3) values(?,?,?,?,?)";

        $stm=$con->prepare($out);

        $stm->bind_param("sssss",$name,$date,$mail,$pass1,$pass2);

        $stm->execute();

        echo" success";

    }  
    
    
    
    
    $stm->close();

    $con->close();

    die();
}







?>
