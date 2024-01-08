<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Style -->
    <link rel="stylesheet" href="./application/style/style.css" />
    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">
    <title>
        <?= $title; ?>
    </title>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Style -->
    <link rel="stylesheet" href="./application/style/stylelanding.css" />
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand" href="#" style="padding: 20px;margin-left:-80px">
                    <img src="<?= base_url("application/assets/img/Logo_Telkom_University_potrait2 3.png")?>" alt="Logo" width="60" height="40" class="d-inline-block align-text-top">
                    <img style="padding-left:10px;" src="<?= base_url("application/assets/img/Adventure.png")?>" width="130" height="20">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="padding-left:250px">
                    <div class="navbar-nav ml-auto" style="margin-left: 560px;padding:5px">
                        <a class="nav-link active" href="<?= base_url("user/") ?>">Map</a>
                        <a class="nav-link" href="<?= base_url("user/feedback") ?>">FEEDBACK</a>

                        <!-- Dropdown Profil -->
                        <div class="dropdown">
                            <a href="#" id="profilDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 80px; height: 80px;padding-left:20px;">
                                <img id="profil" src="<?= base_url('application/assets/gambar/profil') ?>/<?= $this->session->userdata('img'); ?>" width="50" height="50">
                            </a>
                            <div class="dropdown-menu" aria-labelledby="profilDropdown">
                                <a class="dropdown-item" href="<?= base_url("user/setting") ?>">Profil Saya</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?=base_url("Welcome")?>">Keluar</a>
                            </div>
                            <dialog id="logoutModal" class="logout-dialog">
                                <div>
                                    <p>Apakah Anda yakin ingin logout?</p>
                                    <button id="logoutYes">Iya</button>
                                    <button id="logoutNo">Tidak</button>
                                </div>
                            </dialog>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        