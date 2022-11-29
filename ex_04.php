<?php
$xmlstr="<webacademie><staff>
<title> Staff Samung Campus</title>
<personnes>
<personne>
<name>Francois-Afif Benthanane</name>
<poste>Fondateur</poste></personne>
<personne>
<name>Sophie Viger</name>
<poste>Directrice</poste>
</personne>
<personne>
<name>Michel Girard</name>
<poste>Responsable Pedagogique</poste>
</personne>
<personne>
<name>Sylvain Peigne</name>
<poste>Pangolin</poste>
</personne>
</personnes>
</staff>
</webacademie>";
$node="name";

function display_xml_nodes(string $xmlstr, string $node)
{   
    $xml = new SimpleXMLElement($xmlstr);
    //var_dump($xml);
    //$arr=$xml->staff->personnes->personne;
    $arr=array_count_values($xml);
    var_dump($arr);
    foreach($arr as $value)
    {
        print "$value";
    }

}


//$res=display_xml_nodes($xmlstr,$node);
//var_dump($res);

//phpinfo();