<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./application/Style/Styledb.css">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/mdb.min.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Gedung', 'Pengunjung perhari'],
                ['GKU', 11],
                ['TULT', 2],
                ['FEB', 2],
                ['FKB', 2],
                ['FIK', 7]
            ]);

            var options = {
                title: ''
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data, options);

            var data = google.visualization.arrayToDataTable([
                ['Gedung', 'Pengunjung perhari'],
                ['GKU', 11],
                ['TULT', 2],
                ['FEB', 2],
                ['FKB', 2],
                ['FIK', 7]
            ]);

            var options = {
                title: ''
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart1'));

            chart.draw(data, options);
        }
    </script>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <aside id="sidebar">
            <div class="h-100">
                <div class="sidebar-logo">
                    <a href="#">TelU-Adventure</a>
                </div>
                <!-- Sidebar Navigation -->
                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Menu
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="fa-regular fa-user pe-2"></i>
                            Profile
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#pages" aria-expanded="false" aria-controls="pages">
                            <i class="fa-regular fa-file-lines pe-2"></i>
                            Master Data
                        </a>
                        <ul id="pages" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Achievment</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Gedung</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class=" sidebar-link">User</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Laporan Barang</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Mata Pelajaran</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="./application/views/admin/dashboard.php" class="sidebar-link collapsed">
                            <i class="fa-solid fa-sliders pe-2"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed">
                            <i class="fa-solid fa-right-from-bracket" style="padding-right: 6px;"></i>
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
        <!-- Main Component -->
        <div class="main">
            <nav class="navbar navbar-expand px-3 border-bottom">
                <!-- Button for sidebar toggle -->
                <button class="btn" type="button" data-bs-theme="light">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
            <main class="content px-3 py-2" style="padding: 100px;">
                <div class="container-fluid">
                    <div class="mb-3">
                        <h3>Dashboard</h3>
                    </div>
                </div>
                <div class="pie">
                    <div class="card" style="width: 450px; height: 350px;">
                        <div class="card-body">
                            <h5 class="card-title">Statistik Pengunjung</h5>
                            <div class="card-text">
                                <div id="piechart" style="width: 430px; height: 300px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <script src="script.js"></script>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="/application/Style/script.js"></script>
</body>

</html>