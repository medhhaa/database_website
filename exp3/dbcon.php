<?
    $server="localhost";
    $uname="root";
    $pwd="";
    $db="ip3";
    $conn=mysqli_connect($server,$uname,$pwd,$db);
    if(!$conn)
    {
        die("Connection Unsuccessful".mysqli_connect_error()) ;
    }
    return $conn;
?>