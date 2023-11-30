<?php
    $host = "containers-us-west-128.railway.app";
    $username = "root";
    $password = "MfAgNNKdgle56W4cHlAB";
    $dbName = "libreria";
    $port = 7423;

    try {
        $conn = new PDO("mysql:host=$host;port=$port;dbname=$dbName", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        die();
    }
?>

<?php
try {
    // Ruta a la base de datos SQLite
    $dbPath = 'ruta/a/tu/base-de-datos.db';

    // Crear una nueva conexión a la base de datos SQLite
    $db = new PDO('sqlite:' . $dbPath);

    // Configurar para que PDO lance excepciones en caso de errores
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo 'Conexión exitosa a la base de datos SQLite';

    // Puedes realizar consultas y otras operaciones aquí

    // Cerrar la conexión cuando hayas terminado
    $db = null;
} catch (PDOException $e) {
    // En caso de error, mostrar el mensaje de error
    echo 'Error de conexión: ' . $e->getMessage();
}
?>

