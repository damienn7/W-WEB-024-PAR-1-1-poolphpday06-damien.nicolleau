<?php

function write_into_my_file(string $str, string $file, bool $append = false)
{
    if(file_exists($file))
    {
        if($append==true)
        {
            $handle=fopen($file,"a+");
            $write=fwrite($handle,$str);
            fclose($handle);
        }
        else{
            $handle=fopen($file,"w+");
            $write=fwrite($handle,$str);
            fclose($handle);
        }
        return true;
    }
    else
    {
        return false;
    }
}

//write_into_my_file("toto", "/Users/frimousse/W-WEB-024-PAR-1-1-poolphpday06-damien.nicolleau/test.txt",false);