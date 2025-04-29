<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message'])) {
        die("Toate câmpurile sunt obligatorii!");
    }
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);
    $entry = "$name, $message\n";
    $fileName = "date.txt";

    $txt = fopen("$fileName", "a") or die("Fisier inaccesibil!");
    fwrite($txt, $entry);
    fclose($txt);

    require 'output.php';
}
?>