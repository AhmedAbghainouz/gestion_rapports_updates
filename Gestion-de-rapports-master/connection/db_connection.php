<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=gestiondesrapports;port=3309", "root", "");
} catch (PDOException $e) {
    echo "error" . $e->getMessage();
}