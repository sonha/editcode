<?php
$directory = "demo/";
        //get all text files with a .txt extension.
        $texts = glob($directory . "*.php");
        //print each file name
        $name_arr = array();
        foreach($texts as $text)
        {
            $name_arr[] =  $text;
        }
        var_dump($name_arr);
        die();
?>
