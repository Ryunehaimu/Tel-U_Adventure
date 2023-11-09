<nav class="navbar bg-body-tertiary" style="background-color:white;">
            <div class="container-fluid">
                <a class="navbar-brand"></a>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </nav>

        <div class="card" style="widht:1600px;height:400px;margin-top:50px">

            <div class="row">
                <div class="col-md-6">
                    <h3 style="padding:40px;">Master Data-User</h3>
                </div>
                <div class="col-md-6 d-flex justify-content-end" style="padding:40px">
                    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#User">
                        + Tambah</button>
                </div>
            </div>
            <!-- Modal -->
            <div class="row">
                <div class="modal fade" id="User" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah User</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input class="form-control" id="nama">
                                </div>
                                <div class="mb-3">
                                    <label for="nim" class="form-label">Nim</label>
                                    <input class="form-control" id="nim">
                                </div>
                                <div class="mb-3">
                                    <label for="angkatan" class="form-label">Angkatan</label>
                                    <input class="form-control" id="angkatan">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" id="saveUser" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Modal hapus-->
                    
            <div class="row">
                <div class="modal fade" id="Delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Data</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-12">
                                    <p>Apakah kamu yakin?</p>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" style="background-color:red;">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container" style="padding:40px">
                <table class="table" id="dataTabel">
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
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#User"><img src="<?=base_url("application/assets/img/edit putih.png")?>"></button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Delete"><img src="<?=base_url("application/assets/img/hapus putih.png")?>"></button>
                            </td>
                        </tr>  
                </table>
            </div>
        </div>
    </div>
    <!-- Tambahkan JavaScript untuk menangani saat tombol "Save changes" pada modal "Tambah User" ditekan -->
    <script>
        document.getElementById('saveUser').addEventListener('click', function() {
            var nama = document.getElementById('nama').value;
            var nim = document.getElementById('nim').value;
            var angkatan = document.getElementById('angkatan').value;

            // Tambahkan data ke dalam tabel
            var table = document.getElementById('dataTabel').getElementsByTagName('tbody')[0];
            var newRow = table.insertRow(table.rows.length);
            var cell1 = newRow.insertCell(0);
            var cell2 = newRow.insertCell(1);
            var cell3 = newRow.insertCell(2);
            var cell4 = newRow.insertCell(3);
            var cell5 = newRow.insertCell(4);
            cell1.innerHTML = table.rows.length;
            cell2.innerHTML = nama;
            cell3.innerHTML = nim;
            cell4.innerHTML = angkatan;
            cell5.innerHTML = '<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#User"><img src="<?=base_url("application/assets/img/edit putih.png")?>"></button> ' + '<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Delete"><img src="<?=base_url("application/assets/img/hapus putih.png")?>"></button>';

            // Kosongkan input dalam modal
            document.getElementById('nama').value = '';
            document.getElementById('nim').value = '';
            document.getElementById('angkatan').value = '';
        });
        function deleteRow(button) {
            var row = button.parentNode.parentNode.parentNode;
            row.parentNode.removeChild(row);
        }
    </script>
