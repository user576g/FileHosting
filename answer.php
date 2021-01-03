<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload file</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <script src="script.js" defer></script>
</head>
<body>

<?php

$uploaddir = './files/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

echo '<pre>';
$result = "fail";
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "<h1>Успех!</h1>";
    echo "Файл корректен и был успешно загружен.\n";
    file_put_contents($uploadfile . ".desc", $_POST['description']);
    $result = "success";
} else {
    echo "Возможная атака с помощью файловой загрузки!\n"
        . "Большой размерфайла.\n"
        . "Размер файла больше чем 10M байт.";
}
print "</pre>";
setcookie("result", $result);
?>
    <a href="." class="like-red-button">Вернутся к библиотеке</a><br>
    <a href="./choose-file-form.php" id="retry-id" class="like-red-button">
        Попробывать ещё раз
    </a>
</body>
</html>
    

        
