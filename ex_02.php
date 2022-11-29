<?php

function my_cat_files(string $file_path)
{   
    $contents="";
    $paths=func_get_args();
    $num=func_num_args();
    $i=0;
    foreach($paths as $value)
    {
        $handle = fopen($value, "rb");
        if($handle)
        {
        $content = fread($handle, filesize($value));
            if($i>0 && $i<$num)
            {
                $contents.="\n_____\n".$content;
                echo "2";
            }
            else
            {
                $contents.=$content;
                echo "1";
            }
            fclose($handle);
        }
        $i++;
    }
    echo $contents;
    return $contents;
}

//my_cat_files("/Users/frimousse/W-WEB-024-PAR-1-1-poolphpday06-damien.nicolleau/test","/Users/frimousse/W-WEB-024-PAR-1-1-poolphpday06-damien.nicolleau/ex_01.php");


