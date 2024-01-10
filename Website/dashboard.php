<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main menu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <main>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color: #272829 !important">
            <div class="container-fluid">
                <a class="navbar-brand" href="#" style="color:#FFF6E0;font-size:25px;font-family: Arial, Helvetica, sans-serif;padding-left:13px">Manajemen Absensi</a>
                <a class="nav-link" href="" style="color:#FFF6E0" onclick="showLogoutAlert(event)">
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
                                <a class="nav-link" href="" style="color:#FFF6E0">
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
                <main role="main" class="col-md-10 ml-sm-auto" style="background-color:whitesmoke;padding-right:0px !important; padding-left:0px !important">
                    <div class="custom-form-container" id="judulHlm">
                        <div class="container" style="padding-top:10px">
                            <div class="text-center mb-4">
                                <h3 style="margin-top: 10px;font-size:35px">Dashboard</h3>
                                <p class="text-muted" style="font-size:15px">Ini adalah dashboard</p>
                            </div>
                        </div>
                    </div>
                    <div class="kotak" style="background-color:#D8D9DA;height: 11vw;width:100%; text-align: center;color:#FFF6E0; margin-bottom:100px;">
                        <div class="container mt-5">
                            <div class="row justify-content-center">
                                <div class="col-md-4 mb-3">
                                    <a href="qr.php" class="card bg-dark text-light">
                                        <div class="card-body" style="background-color:#272829;color:#FFF6E0">
                                            <h5 class="card-title">QR Code</h5>
                                            <i class="fa-solid fa-qrcode"></i>
                                            <p class="card-text"></p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <a href="daftar_mahasiswa.php" class="card bg-dark text-light">
                                        <div class="card-body" style="background-color:#272829;color:#FFF6E0">
                                            <h5 class="card-title">Daftar Mahasiswa</h5>
                                            <i class="icon fas fa-users"></i>
                                            <p class="card-text"></p>
                                        </div>
                                    </a>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <footer style="margin-top: 100px;">
                        <p>&copy; <?php echo date("Y"); ?> Built by Rayhan,Tegar,dan Farhan</p>
                    </footer>
                </main>
            </div>
        </div>
    </main>
</body>
</html>

