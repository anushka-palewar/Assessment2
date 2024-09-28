<?php
include 'C:\Users\cw\Herd\Assessment2\includes\functions.php'; // Ensure this connects to your database

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Prepare and execute deletion
    $stmt = $pdo->prepare("DELETE FROM contacts WHERE id = ?");
    $stmt->execute([$id]);

    header('Location: index.php');
    exit;
} 
?>

