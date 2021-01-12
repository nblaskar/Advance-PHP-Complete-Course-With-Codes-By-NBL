<?php
//Validate Email Using Filter
// $email='contact@nbl.com';
// $vEmail=filter_var($email, FILTER_VALIDATE_EMAIL);
// if($vEmail == FALSE){
//     echo "Invalid Email <br>";
// } else{
//     echo "Email is Valid ".$vEmail."<br>";
// }

//Senitize Email Using Filter
// $email='cont//act@nbl(()).com';
// $sEmail=filter_var($email, FILTER_SANITIZE_EMAIL);
// echo "Email is: ".$sEmail."<br>";

//Validation and Senitization
$email='conta///ct@nbl.com';
$sEmail=filter_var($email, FILTER_SANITIZE_EMAIL);
$vEmail=filter_var($sEmail, FILTER_VALIDATE_EMAIL);
if($vEmail == FALSE){
    echo "Invalid Email <br>";
} else{
    echo "Validated and Sanitized Email: ".$vEmail."<br>";
}

?>