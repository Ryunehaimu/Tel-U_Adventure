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
                <p class="title">User</p>
                <p style="color:white" class="name"><?= $this->session->userdata('nama'); ?></p>
            </div>
        </div>
        <div class="nav" style="margin-left:-5px">
            <div class="menu">
                <p class="title">Main</p>
                <ul style="margin-left:-20px">
                    <li class="active">
                        <a href="<?= base_url("user") ?>">
                            <i class="icon ph-bold ph-house-simple"></i>
                            <span class="text">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url("user/map") ?>">
                            <i class="fa-solid fa-map"></i>
                            <span class="text">Map</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="menu">
            <p class="title">Account</p>
                <ul style="margin-left:-20px">
                    <li>
                        <a href="<?= base_url("user/setting") ?>">
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