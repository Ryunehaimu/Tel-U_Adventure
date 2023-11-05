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
                            <h3>Gedung</h3>
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
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
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
                                                    <label for="inputnamagendung">Nama Gedung</label>
                                                    <input type="text" class="form-control" id="namagedung" placeholder="namagedung">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputdeskripsigendung">Deskripsi Gedung</label>
                                                    <input type="text" class="form-control" id="deskripsigedung" row="3" placeholder="Deskrispis gedung">
                                                </div>
                                                <div class="from-group">
                                                    <label for="inputketerangan">Keterangan</label>
                                                    <input type="text" class="form-control" id="keterangan" row="3" placeholder="Keterangan">
                                                </div>
                                                <script>
                                                    document.addEventListener("DOMContentLoaded", function() {
                                                        const inputGambar = document.getElementById("inputGroupFile04");
                                                        const namaGedungInput = document.getElementById("namagedung");
                                                        const deskripsiGedungInput = document.getElementById("deskripsigedung");
                                                        const keteranganInput = document.getElementById("keterangan");
                                                        const tableBody = document.getElementById("tableBody");

                                                        document.getElementById("submitButton").addEventListener("click", function() {
                                                            const gambarValue = inputGambar.value;
                                                            const namaGedungValue = namaGedungInput.value;
                                                            const deskripsiGedungValue = deskripsiGedungInput.value;
                                                            const keteranganValue = keteranganInput.value;

                                                            // Buat baris baru untuk tabel
                                                            const newRow = tableBody.insertRow();
                                                            const cell1 = newRow.insertCell(0);
                                                            const cell2 = newRow.insertCell(1);
                                                            const cell3 = newRow.insertCell(2);
                                                            const cell4 = newRow.insertCell(3);
                                                            const cell5 = newRow.insertCell(4);
                                                            const cell6 = newRow.insertCell(5);
                                                            const cell7 = newRow.insertCell(6);

                                                            // Tambahkan checkbox pada baris pertama
                                                            const checkbox = document.createElement("input");
                                                            checkbox.type = "checkbox";
                                                            cell1.appendChild(checkbox);

                                                            // Isi sel-sel dengan nilai yang dimasukkan
                                                            cell2.textContent = gambarValue; // Gantilah dengan data sesuai kebutuhan
                                                            cell3.textContent = namaGedungValue;
                                                            cell4.textContent = deskripsiGedungValue;
                                                            cell5.textContent = keteranganValue;

                                                            // Tambahkan status dan action pada baris ke-6 dan ke-7
                                                            if (tableBody.rows.length === 6) {
                                                                cell6.textContent = "Status"; // Gantilah dengan data status sesuai kebutuhan
                                                            }
                                                            if (tableBody.rows.length === 7) {
                                                                cell7.innerHTML = '<button class="btn btn-danger">Delete</button>';
                                                            }

                                                            // Kosongkan input setelah data ditambahkan
                                                            inputGambar.value = "";
                                                            namaGedungInput.value = "";
                                                            deskripsiGedungInput.value = "";
                                                            keteranganInput.value = "";
                                                        });
                                                    });
                                                </script>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Submit</button>
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
                                    <th scope="col">Nama Gedung</th>
                                    <th scope="col">Deskripsi Gedung</th>
                                    <th scope="col">Keterangan</th>
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
                                    <td>KU1</td>
                                    <td>gedung kelas panas</td>
                                    <td>banyak pohon tapi panas</td>
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
                                    <td>tult</td>
                                    <td>gedung baru + paling elit</td>
                                    <td>paling elit tapi parkiran sulit</td>
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
                                    <td>Rektorat</td>
                                    <td>gedung rektor</td>
                                    <td>ya gedung rektor</td>
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
</body>

</html>