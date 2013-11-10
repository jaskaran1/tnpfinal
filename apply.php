<?php

   session_start();
 
   echo $_POST['pid'];
   echo $_SESSION['login'];

   $con = mysqli_connect('localhost','root','universe','mydb');
   $sql = "insert into studcomp (sid,cid) values (".$_SESSION['login'].",".$_POST['pid'].");";

 
   
   echo $sql;
   mysqli_query($con, $sql);
   mysqli_close($con);
 
   header("Location: index.php");
  ?>   
   
