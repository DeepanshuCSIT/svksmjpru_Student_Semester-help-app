<?php

$server = "sql104.epizy.com";
$user = "epiz_32916476";
$password = "1OjZc55sYHBIs";
$db = "epiz_32916476_signup";

$con = mysqli_connect($server,$user,$password,$db);

if($con){
    ?>
     <script>
         alert("connection successfully");
         </script>
    <?php
}else
{
    ?>
    <script>
        alert(" No connection successfully");
   </script>
  <?php
}

?> 