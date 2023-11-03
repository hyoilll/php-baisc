<html>
    <head>
        <meta charset="utf-8" />
    </head>
    <body>
        <?php
            // temp dirから保存先のdirに移動させる必要があるので、移動さきのPathを指定する。
            $uploaddir = '/var/www/html/uploads/';
            $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
            
            echo '<pre>';
            if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
                echo "File is valid, and was successfully uploaded.\n";
            } else {
                echo "Possible file upload attack!\n";
            }
            
            echo 'Here is some more debugging info:';
            print_r($_FILES);

            // ファイルパスの確認
            echo 'Checking file path: ' . $uploadfile . "\n";
            if (file_exists($uploadfile)) {
                echo 'File exists on the server.\n';
            } else {
                echo 'File does not exist on the server.\n';
            }

            // パーミッションの確認
            echo 'File permissions: ' . substr(sprintf('%o', fileperms($uploadfile)), -4) . "\n";

            
            print "</pre>";
        ?>
        <img src="/uploads/<?=$_FILES["userfile"]["name"]?>" />
    </body>
</html>

<!-- file send document -->
<!-- https://www.php.net/manual/ja/features.file-upload.post-method.php -->

<!-- error code -->
<!-- https://www.php.net/manual/ja/features.file-upload.errors.php -->