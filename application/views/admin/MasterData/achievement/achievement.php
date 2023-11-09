        <div class="card" style="widht:1600px;height:400px;margin-top:50px">

            <div class="row">
                <div class="col-md-6">
                    <h3 style="padding:40px;">Master Data - Achievement</h3>
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
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Achievement</h1>
                                <button type="button" class="btn-close" style="border:none" data-bs-dismiss="modal" aria-label="Close">X</button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="Achievement" class="form-label">Nama Achievement</label>
                                    <input class="form-control" id="Achievement">
                                </div>
                                <div class="mb-3">
                                    <label for="Deskripsi" class="form-label">Deskripsi Achievement</label>
                                    <input class="form-control" id="Deskripsi">
                                </div>
                                <div class="mb-3">
                                    <label for="Poin" class="form-label">Pion Achievement</label>
                                    <input class="form-control" id="Poin">
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
                                <button type="button" class="btn-close" style="border:none" data-bs-dismiss="modal" aria-label="Close">X</button>
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
                            <th scope="col">Nama Achievement</th>
                            <th scope="col">Deskripsi Achievement</th>
                            <th scope="col">Pion Achievement</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>aaaa</td>
                            <td>aaaaaaaaaaaaaaaaaaaaaaaaaaaaa</td>
                            <td>1000</td>
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
            var achievement = document.getElementById('Achievement').value;
            var deskripsi = document.getElementById('Deskripsi').value;
            var poin = document.getElementById('Poin').value;

            // Tambahkan data ke dalam tabel
            var table = document.getElementById('dataTabel').getElementsByTagName('tbody')[0];
            var newRow = table.insertRow(table.rows.length);
            var cell1 = newRow.insertCell(0);
            var cell2 = newRow.insertCell(1);
            var cell3 = newRow.insertCell(2);
            var cell4 = newRow.insertCell(3);
            cell1.innerHTML = achievement;
            cell2.innerHTML = deskripsi;
            cell3.innerHTML = poin;
            cell4.innerHTML = '<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#User"><img src="<?=base_url("application/assets/img/edit putih.png")?>"></button> ' + '<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Delete"><img src="<?=base_url("application/assets/img/hapus putih.png")?>"></button>';

            // Kosongkan input dalam modal
            document.getElementById('Achievement').value = '';
            document.getElementById('Deskripsi').value = '';
            document.getElementById('Poin').value = '';
        });
        function deleteRow(button) {
            var row = button.parentNode.parentNode.parentNode;
            row.parentNode.removeChild(row);
        }
    </script>