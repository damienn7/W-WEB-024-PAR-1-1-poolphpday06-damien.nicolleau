<?php

function my_generate_file (string $name)
{
    $file=fopen(
        "$name.txt",
        "x"
    );

    if($file)
    {
        return false;
    }
    else
    {
        return true;
    }
}


//my_generate_file("test");