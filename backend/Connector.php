<?php
require "FastQL/Connect.php";
require "FastQL/CRUD.php";

Connect::setHostname("localhost");
Connect::setDbPort("3306");
Connect::setDbUsername("root");
Connect::setDbPassword("");
Connect::setDbName("noteapp");

$noteapp = new Connect();
$pdo = $noteapp->isConnect();
$CRUD = new CRUD($pdo);
?>