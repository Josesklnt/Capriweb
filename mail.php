<?php
$errorMSG = "";

if (empty($_POST["name"])) {
    $errorMSG = "Name is required ";
} else {
    $name = $_POST["name"];
}

if (empty($_POST["email"])) {
    $errorMSG = "Email is required ";
} else {
    $email = $_POST["email"];
}

if (empty($_POST["subject"])) {
    $errorMSG = "Subject is required ";
} else {
    $subject = $_POST["subject"];
}

if (empty($_POST["phone"])) {
    $errorMSG = "phone is required ";
} else {
    $phone = $_POST["phone"];
}

if (empty($_POST["message"])) {
    $errorMSG = "Message is required ";
} else {
    $message = $_POST["message"];
}


$emailto = "ventas@capriweb.net";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Phone: ";
$Body .= $phone;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";


// send email
$success = mail($emailto, $subject, $Body);


if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Algo esta mal :(";
    } else {
        echo $errorMSG;
    }
}
?>