<?php 
$json=file_get_contents('cid10.json');
$cid=json_decode($json);
foreach ($cid as $key => $value) {
	print_r('<pre>');
	print_r($value);
	print_r('</pre>');
}
 ?>