<?php
include 'config.php';

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];
    $npaginas = $_POST['npaginas'];

    try {
        $sql = "INSERT INTO libros(nombre, descripcion, precio, stock, npaginas) VALUES (:nombre, :descripcion, :precio, :stock, npaginas)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['nombre' => $nombre, 'descripcion' => $descripcion, 'precio' => $precio, 'stock' => $stock, npaginas => $npaginas]);

        $message = 'libro añadido con éxito!';
    } catch (PDOException $e) {
        $message = 'Error al añadir el libro: ' . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir libro</title>
</head>
<body>
<h2>Añadir nuevo libro</h2>

<?php if (!empty($message)): ?>
    <p><?= $message ?></p>
<?php endif; ?>

<form action="create.php" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" required>
    <br>
    <label for="descripcion">Descripción:</label>
    <textarea name="descripcion" id="descripcion"></textarea>
    <br>
    <label for="precio">Precio:</label>
    <input type="text" name="precio" id="precio" required>
    <br>
    <label for="stock">Stock:</label>
    <input type="number" name="stock" id="stock" required>
    <br>
    <label for="npaginas">Número de páginas:</label>
    <input type="number" name="npaginas" id="npaginas" required>
    <input type="submit" value="Añadir libro">
</form>

</body>
</html>
