<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./application/style/sidebar.css" />
</head>

<body>
    <div class="container">
        <div class="sidebar active" style="z-index: 1;">
            <div class="menu-btn">
                <i class="ph-bold ph-caret-left"></i>
            </div>
            <div class="head">
                <div class="user-img">
                    <img src="./application/assets/img/Fadhil.png" alt="" />
                </div>
                <div class="user-details">
                    <p class="title">Admin e</p>
                    <p class="name">Fadhil</p>
                </div>
            </div>
            <div class="nav">
                <div class="menu">
                    <p class="title">Main</p>
                    <ul>
                        <li class="active">
                            <a href="#">
                                <i class="icon ph-bold ph-house-simple"></i>
                                <span class="text">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon ph-bold ph-file-text"></i>
                                <span class="text">Master Data</span>
                                <i class="arrow ph-bold ph-caret-down"></i>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="/application/views/admin/MasterData/user/User.html">
                                        <span class="text">User</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="text">Achievment</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="text">Mata Kuliah</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="text">Gedung</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Laporan Barang Hilang.html">
                                        <span class="text">Laporan Barang Hilang</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Laporan Barang DItemukan.html">
                                        <span class="text">Laporan Barang Ditemukan</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="menu">
                <p class="title">Account</p>
                <ul>
                    <li>
                        <a href="#">
                            <i class="icon ph-bold ph-gear"></i>
                            <span class="text">Settings</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon ph-bold ph-info"></i>
                            <span class="text">help</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon ph-bold ph-sign-out"></i>
                            <span class="text">Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Memuat library JavaScript Bootstrap (diletakkan sebelum penutup tag body) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js" integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="./application/style/script.js"></script>
</body>

</html>