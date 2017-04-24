<?php
//print_r($_POST);
if(gettype($_POST['Selected'])=="array"){
    $a=array();
foreach($_POST['Selected'] as $val){

 $id_c=$val;
 array_push($a,$id_c);
 //$query="update table set status='Active' where id='".$id_c."'";
}
print_r($a);
}



?>
