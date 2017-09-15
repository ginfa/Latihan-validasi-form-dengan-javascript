<html>
<head>
    <title>Pengulangan </title>
</head>
<body>
<?php
for($x=1;$x<101;$x++)
{
    if($x == 1){
        echo "<font size=$x> mulai   </font><br>";
    }elseif($x == 100 ){
    echo "<font size=$x> selesai   </font><br>";
    }elseif($x % 3 == 0 && $x % 5 == 0){
        echo "<font size=$x> gema insani   </font><br>";
    }elseif($x % 3 == 0 ){
        echo "<font size=$x> gema   </font><br>";
    }
    elseif($x % 5 == 0){
        echo "<font size=$x> insani   </font><br>";
    }else{
        echo "<font size=$x>  $x  </font><br>";
}


}
?>


</body>
</html>

