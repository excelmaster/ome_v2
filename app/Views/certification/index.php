<?php
$this->extend('templates/template_new', $site);
$this->section('content');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certification</title>
</head>
<body>
    Hola <?php print_r($nombre['fullname']) ?>, por fin lo lograste
</body>
</html>
