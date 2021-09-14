<?php

$con = new PDO("mysql:host=db;dbname=unialfa", "root", "nossasenha");


$rs = $con->prepare("SELECT topico FROM topico");
if($rs->execute()){
	if($rs->rowCount() > 0){
		while($row = $rs->fetch(PDO::FETCH_OBJ)){
			echo $row->topico . "<br />";
		}
	}
}


