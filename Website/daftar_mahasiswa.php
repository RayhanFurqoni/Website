<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "get_test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the database
$sql = "SELECT * FROM data";
$result = $conn->query($sql);

$rowNumber = 1;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main menu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <link rel="stylesheet" href="daftar_mahasiswa.css">

</head>

<body>
    <main>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color: #272829 !important">
            <div class="container-fluid">
                <a class="navbar-brand" href="#" style="color:#FFF6E0;font-size:25px;font-family: Arial, Helvetica, sans-serif;padding-left:13px">Manajemen Absensi</a>
                <a class="nav-link" href="dashboard.php" style="color:#FFF6E0" onclick="showLogoutAlert(event)">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="row">
                <nav id="sidebar" class="col-md-2 bg-dark text-light py-3" style="background: repeating-linear-gradient(20deg, #272829, #61677A 398px) !important">
                    <div class="sidebar-sticky">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="dashboard.php" style="color:#FFF6E0">
                                    <i class="fas fa-tachometer-alt"></i> Dashboard
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="qr.php" style="color:#FFF6E0">
                                    <i class="fa-solid fa-qrcode"></i> QR Code
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="daftar_mahasiswa.php" style="color:#FFF6E0">
                                    <i class="fas fa-users"></i> Daftar Mahasiswa
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="dashboard.php" style="color:#FFF6E0" onclick="showLogoutAlert(event)">
                                    <i class="fas fa-sign-out-alt"></i> Logout
                                </a>
                            </li>
                            <li class="nav-item">

                            </li>
                        </ul>
                    </div>
                </nav>
                <main role="main" class="col-md-10 ml-sm-auto" style="background-color:#D8D9DA;padding-right:0px !important; padding-left:0px !important">
                    <div class="custom-form-container" id="judulHlm">
                        <div class="container" style="padding-top:10px">
                            <div class="text-center mb-4">
                                <h3 style="margin-top: 10px;font-size:35px">Absensi Mahasiswa</h3>
                                <p class="text-muted" style="font-size:15px">Daftar yang sudah absen</p>
                            </div>
                        </div>
                    </div>
                    <table class="table table-hover text-center" style="background-color:#FFFFFF" id="table-container">

                        <thead class="table-dark" style="color:#FFF6E0">

                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">NIM</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Absen At</th>
                            </tr>
                        <tbody id="list"></tbody>

                        </thead>
            </div>
    </main>

    </div>
    </div>
    </main>
    <script>
        // Get the list element in http://192.168.1.186/img/api.php
        const tableBody = document.getElementById("list");

        const getData = () => {
            fetch("http://10.217.19.211/api.php")
                .then((response) => response.json())
                .then((data) => {
                    tableBody.innerHTML = "";
                    let rowNumber = 1; // Inisialisasi counter untuk nomor baris
                    data.forEach((item) => {
                        const row = document.createElement("tr");

                        // Tambahkan sel untuk nomor baris
                        const numberCell = document.createElement("td");
                        numberCell.textContent = rowNumber++;
                        row.appendChild(numberCell);

                        const nimCell = document.createElement("td");
                        nimCell.textContent = item.nim;
                        row.appendChild(nimCell);

                        const namaCell = document.createElement("td");
                        namaCell.textContent = item.nama;
                        row.appendChild(namaCell);

                        const absenAtCell = document.createElement("td");
                        absenAtCell.textContent = item.absen_at;
                        row.appendChild(absenAtCell);

                        tableBody.appendChild(row);
                    });
                })
                .catch((error) => {
                    console.error("Terjadi kesalahan:", error);
                });
        };

        // Call getData function
        getData();
        // Refresh getData function every 5 seconds
        setInterval(getData, 5000);
    </script>
</body>

</html>