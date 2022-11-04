<?php
    function encrypt($data) {
        $res = openssl_pkey_new();

        // Get private key
        openssl_pkey_export($res, $privatekey);
    
        // Get public key
        $publickey = openssl_pkey_get_details($res);
        $publickey = $publickey["key"];

        openssl_public_encrypt($data, $crypttext, $publickey);
        $encryptedText = base64_encode($crypttext);

        $privatekey = base64_encode($privatekey);

        save_encrypted_file_and_key($encryptedText,$privatekey,"files/");


    }

    function decrypt($data, $secret) {
        $key = base64_decode($secret);
        $data = base64_decode($data);
        $original = openssl_decrypt($data,'DES-EDE3',$key,OPENSSL_RAW_DATA);
        return $original;
    }

    function save_encrypted_file_and_key($data,$key,$path){
        $file = fopen($path."encrypted.txt",'w');
        fwrite($file,$data);
        fclose($file);

        $key_file = fopen($path."key.txt",'w');
        fwrite($key_file,$key);
        fclose($key_file);
    }
?>
