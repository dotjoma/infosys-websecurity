<?php
    require_once("./database/db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Bank System</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Global CSS -->
    <link rel="stylesheet" href="./resources/css/app.css">
</head>
<body>
    <!-- Navigation Bar -->
    <?php require_once("./resources/components/navigation.php"); ?>

    <!-- Hero Section -->
    <?php require_once("./resources/components/herosection.php"); ?>

    <!-- Features Section -->
    <?php require_once("./resources/components/featuressection.php"); ?>

    <!-- CTA Section -->
    <?php require_once("./resources/components/ctasection.php"); ?>

    <!-- Footer -->
    <?php require_once("./resources/components/footer.php"); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./resources/js/app.js"></script>
</body>
</html>