<?php
    require_once "./encryption.php";
    require_once "./file_handler.php";
    
    // Upload a file
    $encrypted_text = read_file(upload_file('file','files',true));

    encrypt($encrypted_text);

    ?>
<br><br><br>
<a href="download.php?file=encrypted.txt">Download encrypted file</a>
<br><br><br>
<a href="download.php?file=key.txt">Download key</a>