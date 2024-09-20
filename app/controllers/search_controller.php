<?php
include "../models/conexion.php";


$search = isset($_POST['search']) ? $_POST['search'] : '';

$conexionDB = new Conexion();
$conexion = $conexionDB->getConexion();

// Preparar la consulta SQL basada en el valor de búsqueda
if ($search === '') {
    $sql = "SELECT CATEGORIA, CODIGO, ESTADO, DESCRIPCION
            FROM CODIGOS co
            INNER JOIN CATEGORIAS c ON co.id_Categoria = c.id";
} else {
    $sql = "SELECT CATEGORIA, CODIGO, ESTADO, DESCRIPCION
            FROM CODIGOS co
            INNER JOIN CATEGORIAS c ON co.id_Categoria = c.id
            WHERE CODIGO LIKE ? OR ESTADO LIKE ?";
}

$stmt = $conexion->prepare($sql);

if ($search !== '') {
    $searchTerm = "%" . $search . "%";
    $stmt->bind_param('ss', $searchTerm, $searchTerm);
}

$stmt->execute();
$result = $stmt->get_result();

// Preparar el array de datos
$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

echo json_encode($data);

$conexionDB->closeConexion();
?>
