<body>
    <div class="wrapper">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <!-- Main Component -->
        <div class="container-fluid">
            <div class="main">
                <nav class="navbar navbar-expand px-3 border-bottom">
                    <!-- Button for sidebar toggle -->
                    <button class="btn" type="button" data-bs-theme="light">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </nav>
                <main class="content px-3 py-2">
                    <div class="container-fluid">
                        <div class="mb-3">
                            <h3>Achievment</h3>
                        </div>
                    </div>
                    <!--NAVBAR-->
                    <nav class="navbar bg-body-tertiary" style="height: 100%;">
                        <div class="container-fluid">
                            <form class="d-flex" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                                <!--Form input Pop-up-->
                            </form>
                            <div>
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modaltambah" style="height: 10%;">+Add</button>
                            </div>
                            <div class="modal fade" id="modaltambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Masukan Data Baru</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container-fluid">
                                                <div class="from-group">
                                                    <label for="inputgambar">Input Gambar</label>
                                                    <div class="d-flex">
                                                        <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                                        <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Upload</button>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputnamaachievment">Nama Achievment</label>
                                                    <input type="text" class="form-control" id="namaachievment" placeholder="Nama Achievment">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputdeskripsiachievement">Deskripsi Achievment</label>
                                                    <input type="text" class="form-control" id="deskripsiachievment" row="3" placeholder="Deskrispis gedung">
                                                </div>
                                                <div class="from-group">
                                                    <label for="inputpoin">Pion</label>
                                                    <input type="text" class="form-control" id="poin" row="3" placeholder="Nilai Poin">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Sudmit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr class="text-center">
                                    <th scope="col">Check</th>
                                    <th scope="col">Img</th>
                                    <th scope="col">Nama Achievment</th>
                                    <th scope="col">Deskripsi Achievment</th>
                                    <th scope="col">Poin Achievment</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                                            <label class="form-check-label" for="flexCheckIndeterminate">
                                            </label>
                                        </div>
                                    </th>
                                    <td>img</td>
                                    <td>Pukul DD 1 kali</td>
                                    <td>memukul dd sepanyak lebih dari 1 kali</td>
                                    <td>1000000000 poin</td>
                                    <td>aktif</td>
                                    <td>
                                        <div class="btn-group">
                                            <button id="buttonaction" type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                                            <label class="form-check-label" for="flexCheckIndeterminate">
                                            </label>
                                        </div>
                                    </th>
                                    <td>img</td>
                                    <td>stalking dd lebih dari 1 hari</td>
                                    <td>mengikuti dd selama lebih dari 1 hari dimanapun kapanpun</td>
                                    <td>5000000000 poin</td>
                                    <td>aktif</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                                            <label class="form-check-label" for="flexCheckIndeterminate">
                                            </label>
                                        </div>
                                    </th>
                                    <td>img</td>
                                    <td>membuat dd kesal</td>
                                    <td>melakukan hal apapun yang dapat membuat dd kesal selama 1 hari penuh</td>
                                    <td>1000000000000000000 poin</td>
                                    <td>aktif</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Edite</a></li>
                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </main>
            </div>
        </div>
    </div>
    <script src="/application/style/script.js"></script>
</body>

</html>