<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    Masukan Jumlah Bintang 
        <input type="number" name="bintang" id="">
        <input type="submit" name="masukan" value="simpan">
    </form>
</body>
</html>

<?php
if (isset($_POST['masukan'])) {
$lk = $_POST['bintang'];
for($a=1; $a<=$lk; $a++){
    for($i=$lk; $i>=$a; $i-=1){
 echo "&nbsp";

}
for($a1=1;$a1<=$a;$a1++){
echo"*";
}
echo"<br>";
}
}

?>