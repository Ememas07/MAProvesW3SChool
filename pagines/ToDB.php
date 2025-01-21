<?php
// Database connection details
$host = "localhost";
$dbname = "formularisphp";
$username = "marcmas";
$password = "marcmas";

try {
    // Establish the database connection
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if form is submitted
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Get form data
        $nom = $_POST['nom'];
        $cognoms = $_POST['cognoms'];
        $dni = $_POST['idni'];
        $usuari = $_POST['username'];
        $password = $_POST['clau'];
        $email = $_POST['email'];
        $sexe = $_POST['sex'];
        $pais = $_POST['pais_code'];
        $codi_postal = $_POST['zip_code'];
        $interessos = $_POST['interessos'];
        $comentaris = $_POST['coment'];

        // Prepare SQL statement
        $sql = "INSERT INTO formularisprova1 (Nom, Cognom, DNI, Usuari, Password, Email, Sexe, Pais, `Codi Postal`, Interessos, Comentaris) 
                VALUES (:nom, :cognoms, :dni, :usuari, :password, :email, :sexe, :pais, :codi_postal, :interessos, :comentaris)";
        $stmt = $pdo->prepare($sql);

        // Bind parameters
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':cognoms', $cognoms);
        $stmt->bindParam(':dni', $dni);
        $stmt->bindParam(':usuari', $usuari);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':sexe', $sexe);
        $stmt->bindParam(':pais', $pais);
        $stmt->bindParam(':codi_postal', $codi_postal);
        $stmt->bindParam(':interessos', $interessos);
        $stmt->bindParam(':comentaris', $comentaris);

        // Execute statement
        $stmt->execute();

        echo "";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
