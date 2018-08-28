 <?php
$xml=simplexml_load_file("CID10.xml") or die("Error: Cannot create object");
print_r("<pre>");
print_r($xml);
print_r("</pre>");
?> 