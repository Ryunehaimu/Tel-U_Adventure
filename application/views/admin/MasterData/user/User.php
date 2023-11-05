    <div class="card" style="widht:1600px;height:400px">
        <h3>User</h3>
        <div class="row">
            <div class="col-md-4">
                <form>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="inputData" style="z-index: 0;" placeholder="Cari Nama Mahasiswa">
                        <div class="input-group-append">
                            <button type="button" class="btn btn-primary">
                                <img src="./application/assets/img/cari putih.png">
                                Cari
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-8 d-flex justify-content-end">
                <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#User">
                    <img src="./application/assets/img/tambah member putih.png">Tambah</button>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="User" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah User</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Nama</label>
                                <input class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Nim</label>
                                <input class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Angkatan</label>
                                <input class="form-control">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Nim</th>
                        <th scope="col">Angkatan</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Gyaat</td>
                        <td>212121</td>
                        <td>1998</td>
                        <td>
                            <button type="button" class="btn btn-primary"><img src="./application/assets/img/edit putih.png"></button>
                            <button type="button" class="btn btn-danger"><img src="./application/assets/img/hapus putih.png"></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>