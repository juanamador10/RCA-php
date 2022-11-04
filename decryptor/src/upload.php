<?php
    require_once "./encryption.php";
    require_once "./file_handler.php";

    $encrypted_text = read_file(upload_file('file','files',false));

    $key = read_file(upload_file('key','files',false));

    $result = decrypt($encrypted_text,$key);
    write_file($result);
    echo "<h2>The decrypted text is:</h2>";
    echo "<br>";
    echo $result;
?>
