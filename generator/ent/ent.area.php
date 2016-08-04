<?php
require_once dirname(__FILE__)."/../fgta/FGTA_Generator.inc.php";

$gen = new FGTA_Generator();
$gen->TARGET = dirname(__FILE__)."/../apps";
$gen->Folder = "ent";
$gen->fileidentifier = "area";
$gen->JSClassName = "AreaClass";


$gen->HEADER = array(
    'TABLE' => 'MST_AREA',
    'PK' => 'AREA_ID',
    'AUTOINCREMENT' => false,
    'FIELDS' => array(

		'AREA_ID' =>['label'=>'ID', 'control'=>'textbox','isList'=>1, 'isSearch'=>0, 'isForm'=>1],
		'AREA_NAME' =>['label'=>'NAME', 'control'=>'textbox','isList'=>1, 'isSearch'=>1, 'isForm'=>1],


     )
);


$gen->Generate();

echo "\r\n\r\n";

?>
