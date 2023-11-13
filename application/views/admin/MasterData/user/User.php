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
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
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
                                    <button type="button" id="saveUser" class="btn btn-primary">Save changes</button>
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
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Tambahkan JavaScript untuk menangani saat tombol "Save changes" pada modal "Tambah User" ditekan -->
    <script>
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
            }

            form.classList.add('was-validated')
        }, false)
        })

        let users = [];

        function addUserToTable(user) {
            let tableBody = document.getElementById("userTableBody");
            let newRow = tableBody.insertRow();
            let cell1 = newRow.insertCell(0);
            let cell2 = newRow.insertCell(1);
            let cell3 = newRow.insertCell(2);
            let cell4 = newRow.insertCell(3);
            let cell5 = newRow.insertCell(4);

            cell1.innerHTML = user.no;
            cell2.innerHTML = user.name;
            cell3.innerHTML = user.nim;
            cell4.innerHTML = user.angkatan;

            // Tombol Edit
            let editButton = document.createElement("button");
            editButton.type = "button";
            editButton.className = "btn btn-primary";
            editButton.innerHTML = '<img src="<?=base_url("application/assets/img/edit putih.png")?>">';
            editButton.addEventListener("click", function() {
                editUser(user.no - 1);
            });
            cell5.appendChild(editButton);

            // Tombol Delete
            let deleteButton = document.createElement("button");
            deleteButton.type = "button";
            deleteButton.className = "btn btn-danger";
            deleteButton.innerHTML = '<img src="<?=base_url("application/assets/img/hapus putih.png")?>">';
            deleteButton.addEventListener("click", function() {
                openDeleteModal(user.no - 1);
            });
            cell5.appendChild(deleteButton);
        }

        document.getElementById('saveUser').addEventListener('click', function() {
            var nama = document.getElementById('nama').value;
            var nim = document.getElementById('nim').value;
            var angkatan = document.getElementById('angkatan').value;

            var user = {
                no: users.length + 1,
                name: nama,
                nim: nim,
                angkatan: angkatan
            };

            // Tambahkan user ke dalam tabel
            addUserToTable(user);

            // Tambahkan user ke dalam array users
            users.push(user);

            // Kosongkan input dalam modal
            document.getElementById('nama').value = '';
            document.getElementById('nim').value = '';
            document.getElementById('angkatan').value = '';
        });

        document.addEventListener('click', function(e) {
            if (e.target && e.target.classList.contains('btn-danger') && e.target.innerText === 'Delete') {
                deleteRow(e.target);
            }
        });

        function openDeleteModal(index) {
            $('#deleteModal').modal('show');
            document.getElementById("confirmDelete").onclick = function () {
                deleteUser(index);
                $('#deleteModal').modal('hide');
            };
        }

        function deleteUser(index) {
            users.splice(index, 1);
            refreshTable();
        }

        function refreshTable() {
            let tableBody = document.getElementById("userTableBody");
            tableBody.innerHTML = "";

            for (let i = 0; i < users.length; i++) {
                addUserToTable(users[i]);
            }
        }

        function editUser(index) {
            let user = users[index];
            document.getElementById("editName").value = user.name;
            document.getElementById("editNim").value = user.nim;
            document.getElementById("editAngkatan").value = user.angkatan;

            $('#editModal').modal('show');

            document.getElementById("saveEdit").onclick = function () {
                saveEdit(index);
                $('#editModal').modal('hide');
            };
        }

        function saveEdit(index) {
            let newName = document.getElementById("editName").value;
            let newNim = document.getElementById("editNim").value;
            let newAngkatan = document.getElementById("editAngkatan").value;

            users[index].name = newName;
            users[index].nim = newNim;
            users[index].angkatan = newAngkatan;
            refreshTable();
        }

        document.addEventListener("DOMContentLoaded", function () {
            // Sample initial data
            users = [
                { no:"1", name: "Gyaat", nim: "212121", angkatan: "1998" },
            ];

            // Populate the table
            refreshTable();
        });
    </script>