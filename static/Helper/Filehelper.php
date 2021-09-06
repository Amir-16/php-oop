<?php

class FileHelper{

    static function hasData($filename) : bool {

        if(!file_exists($filename)){

            echo "$filename doesnot exist".PHP_EOL;
            return false;
        }

        $content = file_get_contents($filename);
        if(empty($content)){

            return false;
        }else{

            return true;
        }
    }
}

if(FileHelper::hasData("self.txt")){
    echo "get file Data";
}else{

    echo "file doesnot found ";
}