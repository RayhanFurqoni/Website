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
    <link rel="stylesheet" href="qr.css">
</head>
<body >
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
                <main role="main" class="col-md-10 ml-sm-auto" style="background-color:whitesmoke;padding-right:0px !important; padding-left:0px !important">
                    <div class="custom-form-container" id="judulHlm">
                        <div class="container" style="padding-top:10px">
                            <div class="text-center mb-4">
                                <h3 style="margin-top: 10px;font-size:35px">QR Code</h3>
                                <p class="text-muted" style="font-size:15px">Silahkan Scan QR untuk absensi</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="qrcode">
          <img class="myImg" src="https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=http://10.217.19.211/img/post.php?" alt="silahkan scan QR Code" />
          <div id="myModal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-content" id="img01">
            <div id="caption"></div>
          </div>
          <script>
            // Get the modal
            var modal = document.getElementById("myModal");
    
            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementsByClassName("myImg")[0];
            var modalImg = document.getElementById("img01");
            var captionText = document.getElementById("caption");
            img.onclick = function(){
              modal.style.display = "block";
              modalImg.src = this.src;
              captionText.innerHTML = this.alt;
            }
    
            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];
    
            // When the user clicks on <span> (x), close the modal
            span.onclick = function() { 
              modal.style.display = "none";
            }
        </script>
          
                    <footer style="background-color:whitesmoke; color: black;">
                        <p>&copy; <?php echo date("Y"); ?> Built by Rayhan,Tegar,dan Farhan</p>
                    </footer>
                </main>
            </div>
        </div>
    </main>
</body>
</html>

