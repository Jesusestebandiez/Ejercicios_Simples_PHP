<html>
    <body>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            select archivo to upload:
            <input type="submit" value="upload archivo" name="submit">
        </form>
    </body>
</html>

<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOK = 1;
$archivoFileType = strtolower(pathinfo($target_file, PATHINFOR_EXTENSION));
//check if archivo file is a actual archivo or fake archivo
if(isset($_POST["submit"])){
    if ($check !== false){
        echo "File is an arichvo - " . $check["mime"]. ".";
        $uploadOK = 1
    } else{
        echo "File is not an archivo.";
        $uploadOK = 0
    }
}
?>