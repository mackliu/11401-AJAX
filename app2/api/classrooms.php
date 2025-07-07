<?php include_once "db.php";

$sql="select classroom from students group by classroom";
$classrooms=q($sql);


header('Content-Type: application/json;');
echo json_encode($classrooms);

