<?php

function my_cat_files(string $file_path)
{   
    $content="";
    $paths=func_get_args();
    foreach($paths as $value)
    {
        $handle = fopen($value, "rb");
        if($handle)
        {
        $content = fread($handle, filesize($value));
        $contents.=$content."\n_____\n";
        fclose($handle);
        }
    }
    //echo $contents;
    return $contents;
}

//my_cat_files("/Users/frimousse/W-WEB-024-PAR-1-1-poolphpday06-damien.nicolleau/test","/Users/frimousse/W-WEB-024-PAR-1-1-poolphpday06-damien.nicolleau/ex_01.php");


