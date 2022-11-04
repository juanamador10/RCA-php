<?php

function upload_file($field_name,$path_to_save, $show_confirmation){
    $filename=$_FILES[$field_name]['name'];
    $tmp_location=$_FILES[$field_name]['tmp_name'];
    if(!file_exists($path_to_save)){
        mkdir($path_to_save,0777,true);
    }
     if(file_exists($path_to_save)){
            if(move_uploaded_file($tmp_location,$path_to_save.'/'.$filename)){
                if($show_confirmation){
                    echo "File uploaded successfully";
                }
                return $path_to_save.'/'.$filename;
            }else{
                echo "File cannot be uploaded";
            }
    }
}


function read_file($path){
    $file = fopen($path,'r');
    $text = "";
    while (!feof($file)){
        $text .= fgets($file);
    }
    fclose($file);
    return $text;
}