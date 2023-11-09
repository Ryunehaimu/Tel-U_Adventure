    <div class="wrapper">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <!-- Main Component -->
        <div class="container-fluid">
        <div class="card">
        <div class="main">
            <main class="content px-3 py-2">
                <div class="container-fluid">
                    <div class="hgedung">
                        <h3>Gedung</h3>
                    </div>
                </div>
                <br>
                <!--NAVBAR-->
                <nav class="navbar bg-body-tertiary" style="height: 100%;">
                    <div class="container-fluid">
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <div class="d-flex justify-content-end">
                                <button class="btn btn-outline-success" type="submit" >Search</button>
                            </div>
                        </form>
                        <!--Form input Pop-up-->
                        <div class="justify-conten-end">
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modaltambah">+Add</button>
                        </div>
                        <div class="row">
                            <div class="modal fade" id="modaltambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalinputan">Masukan Data Baru</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <label for="inputgambar">Input Gambar</label>
                                                    <div class="d-flex">
                                                            <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                                            <button class="btn btn-outline-secondary" type="button" id="upload">Upload</button>
                                                    </div>
                                                </div>
                                                <div class="row" style="width: 103%;">
                                                    <label for="inputnamagendung">Nama Gedung</label>
                                                    <input type="text" class="form-control" id="namagedung" placeholder="namagedung">
                                                </div>
                                                <div class="row" style="width: 103%;">
                                                    <label for="inputdeskripsigendung">Deskripsi Gedung</label>
                                                    <input type="text" class="form-control" id="deskripsigedung" placeholder="Deskrispis gedung">
                                                </div>
                                                <div class="row" style="width: 103%;">
                                                    <label for="inputketerangan">Keterangan</label>
                                                    <input type="text" class="form-control" id="keterangan" placeholder="Keterangan">
                                                </div>                                    
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary" id="tambah" onclick="tambahdata">Sudmit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </nav>
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
                <br>
                <div class="table-responsive" style="padding: 40px;">
                    <table class="table text-center" id="tabel">
                        <thead class="table">
                            <tr class="text-center">
                                <th scope="col">Img</th>
                                <th scope="col">Nama Gedung</th>
                                <th scope="col">Deskripsi Gedung</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>img</td>
                                <td>KU1</td>
                                <td>gedung kelas panas</td>
                                <td>banyak pohon tapi panas</td>
                                <td style="text-align:center;">
                                    <button type="button" class="btn btn-primary" style="padding-right: 20px;">Edit</button>
                                    <button type="button" class="btn btn-danger">Delete</button>
                                    <button type="button" class="btn btn-info" style="padding-left: 20px;">Info</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
        </div>
        </div>
    </div>
    <script>
    window.onload = function() {
    document.getElementById("tambah").addEventListener('click', function() {
        var inputGambar = document.getElementById("inputGroupFile04").value;
        var namaGedungInput = document.getElementById("namagedung").value;
        var deskripsiGedungInput = document.getElementById("deskripsigedung").value;
        var keteranganInput = document.getElementById("keterangan").value;

        // Buat baris baru untuk tabel
        var table = document.querySelector('.table tbody');
        var newRow = table.insertRow(table.rows.length);
        var cell1 = newRow.insertCell(0);
        var cell2 = newRow.insertCell(1);
        var cell3 = newRow.insertCell(2);
        var cell4 = newRow.insertCell(3);
        var cell5 = newRow.insertCell(4);

        // Isi sel-sel dengan nilai yang dimasukkan
        cell1.textContent = inputGambar;
        cell2.textContent = namaGedungInput;
        cell3.textContent = deskripsiGedungInput;
        cell4.textContent = keteranganInput;
        cell5.innerHTML = '<button type="button" class="btn btn-primary" style="padding-right: 20px;">Edit</button>' +
                          '<button type="button" class="btn btn-danger">Delete</button>' +
                          '<button type="button" class="btn btn-info" style="padding-left: 20px;">Info</button>';

        // Reset nilai input setelah disimpan
        document.getElementById('inputGroupFile04').value = '';
        document.getElementById('namagedung').value = '';
        document.getElementById('deskripsigedung').value = '';
        document.getElementById('keterangan').value = '';
        });
    };
    </script>