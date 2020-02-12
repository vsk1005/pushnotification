<?php

mysql_connect("localhost","root","") or die ("Cannot Connect to Server");
mysql_select_db("notification") or die("Cannot select DB");

$vSQL = "Select * From tbladvertistment ";
//echo $vSQL;
$rs = mysql_query($vSQL);

    while($row = mysql_fetch_array($rs)){
        echo $row["Descriptions"];
    }

?>