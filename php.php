<?php
    if ( filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) ){ 
        //print 'e-posta gecerli';

        echo $_POST["adi"] ."<br>". $_POST["email"] ."<br>".$_POST["mesaj"];

    } else {
        echo 'e-posta gecersiz!';
        header("refresh:2;url=iletisim.html");
        die("          2 Saniye içerisinde giriş sayfaya yönlendirilecektir.");
    }


    ?>
