<?php
require "database.php";
$tav = new Database();
// $tav->insert('CRUD', ["UserName" => "vivek", "age" => 15, "phone" => "655656", "password" => "hbigu"]);
// $tav->update('CRUD', ["UserName" => "viveddddk", "age" => 1985, "phone" => "6596526656", "password" => "hbi65gu"], "id = '308'");
// $tav->delete('CRUD', "id = '308'");
// $tav->show('SELECT * FROM CRUD');
// $tav->select('CRUD', '*', null, null, 2);


$tav->getdata('CRUD',  null,  10);

$tav->pagination('CRUD', null,  10);
