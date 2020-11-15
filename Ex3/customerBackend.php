<?php
    echo "<body background='img/bc.jpg'></body>";
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    $ps=$_POST["password"];

    $option=$_POST["op"];
    $option2=" ";
    $c=$_POST["Cokenum"];
    $p=$_POST["Pokernum"];
    $m=$_POST["mp3num"];

    $pc=2*$c;
    $pp=3.99*$p;
    $pm=78*$m;

    $total=$pc+$pp+$pm+$option;
    if($option=="0")
    {
        $option2="Free 7 day";
    }
    else if($option=="50")
    {
        $option2="$50.00 over night";
    }
    else if($option=="5")
    {
        $option2="$5.00 three day";
    }

    echo "<center><h2>Thanks for your shopping!</h2></center><br>";
    echo "<center>Your password:" .$ps. "</center><br>";
    echo "<center>Your receipt:</center><br>";
    echo "<center><table bgcolor=#C1FFE4 border=2>
    <tr>
        <td></td>
        <td>Quantity</td>
        <td>Price </td>
        <td>Total</td>
    </tr>

    <tr>
        <td>Coke(500ml)</td>
        <td bgcolor=#DCB5FF>$c</td>
        <td bgcolor=#DCB5FF>$2.00</td>
        <td bgcolor=#DCB5FF>$$pc</td>
    </tr>

    <tr>
        <td>Bicycle Poker</td>
        <td bgcolor=#DCB5FF>$p</td>
        <td bgcolor=#DCB5FF>$3.99</td>
        <td bgcolor=#DCB5FF>$$pp</td>
    </tr>
    
    <tr>
        <td>Sony Walkman</td>
        <td bgcolor=#DCB5FF>$m</td>
        <td bgcolor=#DCB5FF>$78.00</td>
        <td bgcolor=#DCB5FF>$$pm</td>
    </tr>
    
    <tr>
        <td>Shipping</td>
        <td colspan=2 bgcolor=#DCB5FF>$option2 </td>
        <td bgcolor=#DCB5FF>$$option</td>
    </tr>

    <tr>
        <td align=center colspan=3>Total Cost</td>
        <td >$$total</td>
    </tr>
    </center>
    </table>";

?>

