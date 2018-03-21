<?php
$inputadi=strip_tags($_POST["adi"]);
$inputsoyadi=strip_tags($_POST["soyadi"]);
$inputemail=$_POST["email"];
$inputpassword=$_POST["password"];

echo "<b>Girdiginiz Bilgileri Lutfen Kontrol Ediniz</b>";
echo "</br>";

echo "<b>Adi: </b>";
echo $inputadi;
echo "</br>";
echo "<b>Soyadi: </b>";
echo $inputsoyadi;
echo "</br>";
echo "<b>Eposta: </b>";
echo $inputemail;
echo "</br>";
$emailtype=strstr($inputemail,"@");



if ($emailtype=="@gmail.com") {
	echo "Lutfen www.oys2.deu.edu.tr Adresinden Giris Yapiniz. ";
	
	
}
else {
	if ($emailtype=="@hotmail.com") {
		echo "Lutfen www.oys.deu.edu.tr Adresinden Giris Yapiniz. ";
		
	}
	else{
		echo "Lutfen sadece Hotmail ve Google adreslerinizle giris yapiniz. ";
	}
}

?>