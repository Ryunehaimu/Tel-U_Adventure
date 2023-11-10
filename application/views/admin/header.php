<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $title; ?>
    </title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap');
        dialog {
            width: 300px; 
            height: 200px; 
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 20px;
            border: 1px solid #ccc;
        }
    </style>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('application/style/sidebar.css') ?>" />
    <!-- <link rel="stylesheet" href="<?= base_url('application/style/style.css') ?>" kontol penyebab masalah ngenteke wektu 4 jam genti seng lio ternyata masalah e iki1   /> -->
</head>

<body>