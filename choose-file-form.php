<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload file</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<a href="." style="display: block; text-align: start;">
    &ltНа главную страницу
</a>
<br>
<!-- Тип кодирования данных, enctype, ДОЛЖЕН БЫТЬ указан ИМЕННО так -->
<form enctype="multipart/form-data" action="answer.php" method="POST">
  <label for="desc_id">Укажите описание к файлу:</label><br>
  <textarea name="description" cols="50" rows="10" id="desc_id"
      placeholder="Введите описание..." required></textarea>
   
    
  <!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла -->
  <input type="hidden" name="MAX_FILE_SIZE" value="10000000"/><br>
  <br>
  <label for="inp_file_id">Укажите расположение файла:</label><br>
  <!-- Название элемента input определяет имя в массиве $_FILES -->
  <input name="userfile" type="file" id="inp_file_id"/><br>
  <br>
  <input type="submit" value="Отправить файл" class="like-red-button"/>
</form>    

</body>
</html>
    

        
