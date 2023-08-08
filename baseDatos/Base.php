<?php
//24 references 
function OpenDB()
{
    return mysqli_connect("localhost", "root", "proyecto", " ");
}
//21 references
function CloseDB($enlace)
{
    mysqli_close($enlace);
}
?>