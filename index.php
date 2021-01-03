<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Library</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <h1>Library</h1>
    <div align="right" style="padding: 10px;">
        <a href="choose-file-form.php" class="like-red-button">
            Загрузить файл
        </a>
    </div>
 <table border="1">
     <tr><th>Название файла</th><th>Описание</th><th></th></tr>
 
<?php
$folderName = "files";
$dir = new DirectoryIterator($folderName);
foreach ($dir as $fileinfo) {
    if (!$fileinfo->isDot()) {
        $fileName = $fileinfo->getFilename();
        //omit description
        if (substr($fileName, -4) == "desc") {
            continue;
        }
        
        echo "<tr>";
        
        //form name
        echo "<td>" . $fileName . "</td>";
        
        //form a description
        $descriptionFileName = $fileName . ".desc";
        //path to description
        $path_to_desc = "./files/" . $descriptionFileName;
        $description = "К сожалению, описания нет.";
        if (file_exists($path_to_desc)) {
            $description = file_get_contents($path_to_desc);            
        }
        echo "<td>" . $description . "</td>";
                
        // form a link
        echo "<td><a href=\"./" . $folderName 
            . '/' . $fileName 
            . "\">открыть/скачать</a></td>";
        echo "</tr>";
    }
}
?> 
</table>

</body>
</html>