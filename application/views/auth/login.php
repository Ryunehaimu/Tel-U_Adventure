<body>
    <div class="login">
        <div class="div">
            <img class="logo-telkom" src="./application/assets/img/Logo_Telkom_University_potrait2 3.png" />
            <img class="adventure" src="./application/assets/img/Adventure.png" />
            <p class="text-wrapper">Jelajahi TelU dengan TelU Adventure</p>
            <div class="text-wrapper-2">Welcome back</div>
            <div class="text-wrapper-3">Username</div>
            <div class="row">
                <div class="col-md-6">
                    <?= $this->session->flashdata("message") ?>
                </div>
            </div>
            <form class="loginform" method="post" action="<?= base_url('auth'); ?>">
                <div class="Username">
                    <input style="width: 480px; height: 60px;padding: 30px; font-family: 'Inter', sans-serif;font-size: 18px;font-weight: normal;color: #999;" type="text" id="username" name="username" placeholder="Masukkan username SSO">
                    <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="Password">
                    <input style="width: 480px; height: 60px;padding: 30px; font-family: 'Inter', sans-serif;font-size: 18px;font-weight: normal;color: #999;" type="password" id="password" name="password" placeholder="Masukkan password">
                    <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <input class="checkbox" type="checkbox" id="checkbox" name="checkbox" />
                <button class="tombol-tanpa-border">Lupa password?</button>
                <button type="submit" class="buttonlgn" id="buttonlgn">Login</button>
            </form>
            <div class="text-wrapper-5">Password</div>
            <div class="text-wrapper-6">Remember me</div>
            <div class="carosel">
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./application/assets/img/DSC_0218.JPG" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./application/assets/img/DSC_0216.JPG" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./application/assets/img/DSC_0220.JPG" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</html>