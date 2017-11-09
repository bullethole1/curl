<?php
$username = "root";
$password = "root";
$database = "curl";
$server = "localhost";

If(isset($_POST['submit'])){
    try {
        $conn = new PDO("mysql:host=$server;dbname=$database", $username, $password);

        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // prepare sql and bind parameters
        $stmt = $conn->prepare("INSERT INTO curlform (name, email, birthday)
        VALUES (:name, :email, :birthday)");
        $name = $_POST['name'];
        $email = $_POST['email'];
        $birthday = $_POST['birthday'];

        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':birthday', $birthday);

        $stmt->execute();
        echo "New records created successfully";
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
}