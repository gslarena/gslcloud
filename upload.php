<?php
echo <<<_END
<html>
<head><title>Upload your files</title>
</head>
<body>
<form method='post' action='upload.php' enctype='multipart/form-data'>
Please Select Files: <input type='file' name='filename' size = '50'>
<input type= 'submit' value= 'Upload!!'>
</form>
_END;

if($_FILES) {
        $fname = $_FILES['filename']['name'];
        move_uploaded_file($_FILES['filename']['tmp_name'], "database/$fname");
        $fh = fopen("database.txt",'a+') ;
        fwrite($fh,$fname."\n");
        fclose($fh);

echo "<br><br> <h1><a href = download.php> Go to download Page </a> </h1>";
}
echo "</body></html>";
?>