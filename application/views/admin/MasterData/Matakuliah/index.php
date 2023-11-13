        <div class="card" style="widht:1600px;height:400px;margin-top:50px">

        <div class="row">
            <div class="col-md-6">
                <h3 style="padding:40px;">Master Data - Matakuliah</h3>
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
                                    <label for="nama" class="form-label">Nama Matkul</label>
                                    <input class="form-control" id="nama">
                                </div>
                                <div class="mb-3">
                                    <label for="nim" class="form-label">Kode Matkul</label>
                                    <input class="form-control" id="nim">
                                </div>
                                <div class="mb-3">
                                    <label for="angkatan" class="form-label">Dosen Pengampu</label>
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
                                    <label for="editName">Nama Matkul:</label>
                                    <input type="text" class="form-control" id="editName" required>
                                </div>
                                <div class="form-group">
                                    <label for="editNim">Kode Matkul:</label>
                                    <input type="text" class="form-control" id="editNim" required>
                                </div>
                                <div class="form-group">
                                    <label for="editAngkatan">Dosen Pengampu:</label>
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
                <table class="table table-bordered" id="dataTabel">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Matkul</th>
                            <th scope="col">Kode Matkul</th>
                            <th scope="col">Dosen Pengampu</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead >
                    <tbody id="userTableBody">
                    </tbody>  
                </table>
            </div>
        </div>
    </div>
    <!-- Tambahkan JavaScript untuk menangani saat tombol "Save changes" pada modal "Tambah User" ditekan -->
    <script>
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
                { no:"1", name: "PBO", nim: "PB29WN", angkatan: "YLS" },
            ];

            // Populate the table
            refreshTable();
        });
    </script>