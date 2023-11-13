<div class="card" style="widht:1600px;height:400px;margin-top:50px">

            <div class="row">
                <div class="col-md-8">
                    <h3 style="padding:40px;">Master Data-Laporan Barang Ditemukan</h3>
                </div>
                <div class="col-md-4 d-flex justify-content-end" style="padding:40px">
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
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Barang Ditemukan</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="namaBarang" class="form-label">Nama Barang</label>
                                    <input class="form-control" id="namaBarang">
                                </div>
                                <div class="mb-3">
                                    <label for="jenisBarang" class="form-label">Jenis Barang</label>
                                    <input class="form-control" id="jenisBarang">
                                </div>
                                <div class="mb-3">
                                    <label for="tanggal" class="form-label">Tanggal Ditemukan</label>
                                    <input type="date" class="form-control" id="tanggal" >
                                </div>
                                <div class="mb-3">
                                    <label for="deskripsiBarang" class="form-label">Deskripsi Barang</label>
                                    <input class="form-control" id="deskripsiBarang">
                                </div>
                                <div class="mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <input class="form-control" id="status">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" id="saveLaporanBarangHilang" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Modal hapus-->
                    
            <!--Modal Edit-->
            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel">Edit Laporan Barang Ditemukan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                        </div>
                        <div class="modal-body">
                            <!-- Form for editing user -->
                            <form id="editForm">
                                <div class="form-group">
                                    <label for="editNamaBarang">Nama Barang:</label>
                                    <input type="text" class="form-control" id="editNamaBarang" required>
                                </div>
                                <div class="form-group">
                                    <label for="editJenisBarang">Jenis Barang:</label>
                                    <input type="text" class="form-control" id="editJenisBarang" required>
                                </div>
                                <div class="form-group">
                                    <label for="editTanggal">Tanggal:</label>
                                    <input type="date" class="form-control" id="editTanggal" required>
                                </div>
                                <div class="form-group">
                                    <label for="editDeskripsiBarang">Deskripsi Barang:</label>
                                    <input type="text" class="form-control" id="editDeskripsiBarang" required>
                                </div>
                                <div class="form-group">
                                    <label for="editStatus">Status:</label>
                                    <input type="text" class="form-control" id="editStatus" required>
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
                            <h5 class="modal-title" id="deleteModalLabel">Hapus Barang Ditemukan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Apakah anda yakin menghapus barang ini?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="button" class="btn btn-danger" id="confirmDelete" data-bs-dismiss="modal" aria-label="Close">Hapus</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container" style="padding:40px">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Jenis Barang</th>
                    <th scope="col">Tanggal Ditemukan</th>
                    <th scope="col">Deskripsi Barang</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody id="userTableBody">
                </tbody>  
              </table>
            </div>
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
            let cell6 = newRow.insertCell(5);
            let cell7 = newRow.insertCell(6);

            cell1.innerHTML = user.no;
            cell2.innerHTML = user.namaBarang;
            cell3.innerHTML = user.jenisBarang;
            cell4.innerHTML = user.tanggal;
            cell5.innerHTML = user.deskripsiBarang;
            cell6.innerHTML = user.status;

            // Tombol Edit
            let editButton = document.createElement("button");
            editButton.type = "button";
            editButton.className = "btn btn-primary";
            editButton.innerHTML = '<img src="<?=base_url("application/assets/img/edit putih.png")?>">';
            editButton.addEventListener("click", function() {
                editUser(user.no - 1);
            });
            cell7.appendChild(editButton);

            // Tombol Delete
            let deleteButton = document.createElement("button");
            deleteButton.type = "button";
            deleteButton.className = "btn btn-danger";
            deleteButton.innerHTML = '<img src="<?=base_url("application/assets/img/hapus putih.png")?>">';
            deleteButton.addEventListener("click", function() {
                openDeleteModal(user.no - 1);
            });
            cell7.appendChild(deleteButton);
        }

        document.getElementById('saveLaporanBarangHilang').addEventListener('click', function() {
            var namaBarang = document.getElementById('namaBarang').value;
            var jenisBarang = document.getElementById('jenisBarang').value;
            var tanggal = document.getElementById('tanggal').value;
            var deskripsiBarang = document.getElementById('deskripsiBarang').value;
            var status = document.getElementById('status').value;

            var user = {
                no: users.length + 1,
                namaBarang: namaBarang,
                jenisBarang: jenisBarang,
                tanggal: tanggal,
                deskripsiBarang: deskripsiBarang,
                status: status
            };

            // Tambahkan user ke dalam tabel
            addUserToTable(user);

            // Tambahkan user ke dalam array users
            users.push(user);

            // Kosongkan input dalam modal
            document.getElementById('namaBarang').value = '';
            document.getElementById('jenisBarang').value = '';
            document.getElementById('tanggal').value = '';
            document.getElementById('deskripsiBarang').value = '';
            document.getElementById('status').value = '';
        });

        document.addEventListener('click', function(e) {
            if (e.target && e.target.classList.contains('btn-danger')) {
                openDeleteModal(e.target.parentNode.parentNode.cells[0].innerText - 1);
            }
        });

        function openDeleteModal(index) {
            $('#deleteModal').modal('show');
            document.getElementById("confirmDelete").onclick = function () {
                deleteBarang(index);
                $('#deleteModal').modal('hide');
            };
        }

        function deleteBarang(index) {
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
            console.log(user);
            console.log(index);
            document.getElementById('editNamaBarang').value = user.namaBarang;
            document.getElementById('editJenisBarang').value = user.jenisBarang;
            document.getElementById('editTanggal').value = user.tanggal;
            document.getElementById('editDeskripsiBarang').value = user.deskripsiBarang;
            document.getElementById('editStatus').value = user.status;

            $('#editModal').modal('show');

            document.getElementById("saveEdit").onclick = function () {
                saveEdit(index);
                $('#editModal').modal('hide');
            };
        }

        function saveEdit(index) {
            let newNamaBarang = document.getElementById("editNamaBarang").value;
            let newJenisBarang = document.getElementById("editJenisBarang").value;
            let newTanggal = document.getElementById("editTanggal").value;
            let newDeskripsiBarang = document.getElementById("editDeskripsiBarang").value;
            let newStatus = document.getElementById("editStatus").value;

            users[index].namaBarang = newNamaBarang;
            users[index].jenisBarang = newJenisBarang;
            users[index].tanggal = newTanggal;
            users[index].deskripsiBarang = newDeskripsiBarang;
            users[index].status = newStatus;
            refreshTable();
        }

        document.addEventListener("DOMContentLoaded", function () {
            // Sample initial data
            users = [
                { no:"1", namaBarang: "KTM", jenisBarang:"Kertu", tanggal:"2003-11-07", deskripsiBarang:"KTM TELYU", status:"belum ditemukan"},
            ];

            // Populate the table
            refreshTable();
        });

    </script>