<?
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization");
header("Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS");

$name = $_POST["name"];
$email = $_POST["email"];
$tel = $_POST["phone"];


if($name=="" or $email=="" or $tel==""){
    echo "Внесіть дані у всі поля відмічені *";
}

else{
    
    $to = "andrii.plyuta@gmail.com"; 
    $subject = "Замовлення ціни внесення ЗЗР дронами"; 
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers .= "From: <info@hannover-agro.in.ua>\r\n";
    $message .= "Хто замовив: ".$name."\r\n";
    $message .= "Почта: ".$email."\r\n";
    $message .= "Телефон: ".$tel."\r\n";



    $send = mail($to, $subject, $message, $headers);

 
    if ($send == "true")
    {
        echo "<p style='color: green;'>Дякуємо, Ваш запит надіслано.\r\n</p>";
    }
    else
    {
        echo "<p style='color: red;'>Ой, виникла помилка, спробуйте ще раз!</p>";
    }
}
?>