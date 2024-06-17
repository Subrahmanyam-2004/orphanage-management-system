<?php

$username="root";
$password="";
$server='localhost';
$db="ananda marga orphanage";

$con=mysqli_connect($server,$username,$password,$db);

if(!$con)
{
    ?>

    <script>
        alert('No Connection');
    </script>

    <?php
}


