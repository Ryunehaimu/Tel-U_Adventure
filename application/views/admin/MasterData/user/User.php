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
                            <form class="was-validated" novalidate>
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah User</h1>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama</label>
                                        <input class="form-control" id="nama" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nim" class="form-label">Nim</label>
                                        <input class="form-control" id="nim" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="angkatan" class="form-label">Angkatan</label>
                                        <input class="form-control" id="angkatan" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" id="saveUserBtn" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                            <!-- <form action="/action_page.php" class="was-validated">
                                <div class="mb-3 mt-3">
                                <label for="uname" class="form-label">Username:</label>
                                <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="mb-3">
                                <label for="pwd" class="form-label">Password:</label>
                                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="myCheck"  name="remember" required>
                                <label class="form-check-label" for="myCheck">I agree on blabla.</label>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Check this checkbox to continue.</div>
                                </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            </form> -->
                        </div>
                    </div>
                </div>
            </div>
            <!--Modal Edit-->
            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel">Edit User</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Form for editing user -->
                            <form id="editForm">
                                <div class="form-group">
                                    <label for="editName">Nama:</label>
                                    <input type="text" class="form-control" id="editName" required>
                                </div>
                                <div class="form-group">
                                    <label for="editNim">NiM:</label>
                                    <input type="text" class="form-control" id="editNim" required>
                                </div>
                                <div class="form-group">
                                    <label for="editAngkatan">Angkatan:</label>
                                    <input type="text" class="form-control" id="editAngkatan" required>
                                </div>
                                <button type="button" class="btn btn-primary" id="saveEdit">Save Changes</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- deletemodal -->
            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteModalLabel">Hapus User</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>apakah anda yakin menghapus user ini?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="button" class="btn btn-danger" id="confirmDelete">hapus</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container" style="padding:40px">
                <table id="example" class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIM</th>
                            <th>Angkatan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="userTableBody">
                        <?php
                        $count = 0;
                        foreach ($datauser as $row) {
                            $count++;
                        ?>
                            <tr>
                                <td><?= $count ?></td>
                                <td><?= $row->Nama ?></td>
                                <td><?= $row->NIM ?></td>
                                <td><?= $row->Angkatan ?></td>
                                <td>
                                    <!-- Edit button -->
                                    <button type="button" class="btn btn-primary" onclick="editUser(<?= $count - 1 ?>)">
                                        <img src="<?= base_url("application/assets/img/edit putih.png") ?>">
                                    </button>
                                    
                                    <!-- Delete button -->
                                    <button type="button" class="btn btn-danger" onclick="openDeleteModal(<?= $count - 1 ?>)">
                                        <img src="<?= base_url("application/assets/img/hapus putih.png") ?>">
                                    </button>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('saveUserBtn').addEventListener('click', saveUser);
        function editUser(index) {

            $('#editModal').modal('show');
            console.log("Edit user with index: " + index);
        }

        function openDeleteModal(index) {
            $('#deleteModal').modal('show');
            console.log("Delete user with index: " + index);
        }
        function saveUser() {
            var nama = document.getElementById('nama').value;
            var nim = document.getElementById('nim').value;
            var angkatan = document.getElementById('angkatan').value;

            $.ajax({
                type: "POST",
                url: "your_server_endpoint",
                data: {
                    nama: nama,
                    nim: nim,
                    angkatan: angkatan
                },
                success: function (response) {
                    $('#User').modal('hide');
                    console.log("User added successfully");
                },
                error: function (error) {
                    console.error("Error adding user:", error);
                }
            });
        }
    </script>