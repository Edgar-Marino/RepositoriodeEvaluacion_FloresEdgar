<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
$empleados = array(
    array("Ana", 2000),
    array("Cesar", 1500),
    array("Manuel", 1800),
    array("Jorge", 1600),
    array("Jose", 1200),
);
array_push($empleados, array("Pedro", 2800));
array_push($empleados, array("Lucía", 3200));
usort($empleados, function($a, $b) {
    return $a[1] <=> $b[1];
});
foreach ($empleados as $empleado) {
    echo "Empleado: " . $empleado[0] . ", Sueldo: " . $empleado[1] . " ";
}
?>
</body>
</html>