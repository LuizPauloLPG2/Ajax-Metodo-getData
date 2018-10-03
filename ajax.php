<?php

require_once ("./conexao.php");

$sql = ("select * from tbprofissional");
$stmt = Db::_conexao()->prepare($sql);
$stmt->execute();
$stmt = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($stmt);
