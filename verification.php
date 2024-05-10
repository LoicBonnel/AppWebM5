<?php
session_start();
include_once ('DB.php');
// Vérification si les données POST sont reçues
if (isset($_POST['username'], $_POST['password'])) {

    // Utilisation de requêtes préparées pour empêcher les injections SQL
    $db = new mysqli($db_host, $db_username, $db_password, $db_name);

    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    // Préparation de la requête SQL avec une requête préparée
    $stmt = $db->prepare("SELECT COUNT(*) AS count FROM users WHERE username=? AND password=?");
    $stmt->bind_param("ss", $_POST['username'], sha1($_POST['password']));
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $count = $row['count'];

    // Vérification si l'utilisateur existe dans la base de données
    if ($count != 0) {
        $_SESSION['username'] = $_POST['username'];
        header('Location: principale.php');
        exit();
    } else {
        // Redirection avec un message d'erreur en cas d'authentification invalide
        header('Location: login.php?erreur=1');
        exit();
    }
} else {
    // Redirection si les données POST ne sont pas reçues
    header('Location: login.php');
    exit();
}
?>