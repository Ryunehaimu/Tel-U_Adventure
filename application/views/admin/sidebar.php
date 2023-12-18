<nav class="navbar bg-body-tertiary" style="background-color:white;width: 100%;height:80px;potition:fixed !important;box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
    <div class="container-fluid">
        <a class="navbar-brand"></a>
    </div>
</nav>
<div class="container">
    <div class="sidebar active" style="top:0px">
        <div class="menu-btn">
            <i class="ph-bold ph-caret-left"></i>
        </div>
        <div class="head">
            <div class="user-img">
                <img src="<?= base_url("application/assets/img/Fadhil.png") ?>" alt="" />
            </div>
            <div class="user-details">
                <p class="title">Admin e</p>
                <p style="color:white" class="name">Fadhil</p>
            </div>
        </div>
        <div class="nav" style="margin-left:-5px">
            <div class="menu">
                <p class="title">Main</p>
                <ul style="margin-left:-20px">
                    <li class="active">
                        <a href="<?= base_url("admin") ?>">
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
                                <a href="<?= base_url("admin/user") ?>">
                                    <span class="text">User</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url("con_achievement") ?>">
                                    <span class="text">Achievment</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url("con_matkul") ?>">
                                    <span class="text">Mata Kuliah</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url("con_gedung") ?>">
                                    <span class="text">Gedung</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url("con_hilang") ?>">
                                    <span class="text">Laporan Barang Hilang</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url("con_temu") ?>">
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
                <ul style="margin-left:-20px">
                    <li>
                        <a href="<?= base_url("admin/setting") ?>">
                            <i class="icon ph-bold ph-gear"></i>
                            <span class="text">Settings</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?=base_url("Welcome")?>">
                            <i class="icon ph-bold ph-sign-out"></i>
                            <span class="text">Logout</span>
                        </a>
                    </li>
                </ul>
                <dialog id="logoutModal" class="logout-dialog">
                    <div>
                        <p>Apakah Anda yakin ingin logout?</p>
                        <button id="logoutYes">Iya</button>
                        <button id="logoutNo">Tidak</button>
                    </div>
                </dialog>

        </div>
    </div>