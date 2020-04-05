<?php
    $_kullanicieposta = "b1812100001@sakarya.edu.tr";
    $_kullanicisifre = "123";
	if($_POST['eposta']){ // Eğer girdi adında bir POST varsa
		$_eposta = $_POST["eposta"]; // POST'u değişkene aktar
		//echo $_eposta; // değişken değerini ekrana yazdır
    }
    if($_POST['sifre']){ // Eğer girdi adında bir POST varsa
		$_sifre = $_POST["sifre"]; // POST'u değişkene aktar
		//echo $_sifre; // değişken değerini ekrana yazdır
    }

    if ( filter_var($_eposta, FILTER_VALIDATE_EMAIL) ){ 
        //print 'e-posta gecerli';

        if(strcmp($_kullanicieposta, $_eposta) == 0   && strcmp($_kullanicisifre, $_sifre) == 0){
            echo " Hosgeldin b1812100001";
        }
        else{
            header ("Location:giris.html");
        }

     } else {
        echo 'e-posta gecersiz!';
        header("refresh:2;url=giris.html");
        die("          2 Saniye içerisinde giriş sayfaya yönlendirilecektir.");
     }
    

    
    
    

?>