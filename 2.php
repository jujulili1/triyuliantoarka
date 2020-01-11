<?php 


$USERNAME = "yulianto";
$PASSWORD = "TRIYE1!";


if (!preg_match("/^[a-z]/",$USERNAME)) {
    echo "Username Harus Diawali Oleh Huruf Kecil";
}
else if (preg_match("/@./",$USERNAME)){
    echo "Format Username Salah";
}

else if (strlen ($PASSWORD)>(7)) 
{ echo "Password Hanya Boleh 7 Karakter";
}
else if (preg_match("/[a-z]{6}/",$PASSWORD)) 
{ echo "Password Hanya Boleh 5 Karakter Huruf Besar";
}
else if (preg_match("/[1-9]{3}/",$PASSWORD)) 
{ echo "Password Hanya Boleh 1 Karakter Angka";
}

else if (preg_match("/[!@#$%^&*]{3}/",$PASSWORD)) 
{ echo "Password Hanya Boleh 1 Karakter Simbol";
}
else {echo "Username Benar & Password Benar";
}




?>