<?php

include("config/konek.php");
    $barang=mysqli_query($mysqli,"SELECT COUNT(*) as Id_Pelanggan from pelanggan");
    $row = mysqli_fetch_array($barang);
    $jum_barang = $row['Id_Pelanggan'];

$result = mysqli_query($mysqli, "SELECT * FROM pelanggan");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;600;700&display=swap" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
      integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" />
    <link rel="stylesheet" href="daftar.css" />
    <title>Gracia Coffee</title>
  </head>
  <body>
    <div class="container">
      <div class="contentWrapper">
        <div class="loginSection">
          <div>
            <img src="./assets/logo.png" class="logo" alt="logo" />
            <h1 class="margin-bottom-200">Daftar</h1>

            <form method="POST">
              
              <h4 class="margin-bottom-100">Nama</h4>
              <input type="text" name="nama" id="nama" placeholder="Masukkan Nama" />

              <h4 class="margin-bottom-100">No. Telpon</h4>
              <input type="number" name="number" id="number" placeholder="Masukkan No. Telp" />

              <h4 class="margin-bottom-100">Email</h4>
              <input type="email" name="email" id="email" placeholder="Masukkan Email" />


              <h4 class="margin-bottom-100">Password</h4>
              <input type="password" name="password" id="password" placeholder="Masukkan Password" />
              <i class="fa-solid fa-eye" data-margin-left="margin-left" onclick="togglePassword()"></i>
              <i class="fa-solid fas fa-eye-slash" onclick="togglePassword()"></i>

              <button type="submit" name="reg" class="button margin-bottom-200">Daftar</button>
            </form>
          </div>

          <p>Belum punya akun? <a href="daftar.html" class="clr-brown"> Daftar sekarang</a></p>
        </div>

        <img src="./assets/kopi.png" class="img" alt="" />
      </div>
    </div>

    <?php
    if(isset($_POST['reg'])){
      if(!empty($_POST['nama']) && !empty($_POST['number']) && !empty($_POST['email']) && !empty($_POST['password'])){
        $nama=$_POST['nama'];
        $number=$_POST['number'];
        $email=$_POST['email'];
        $password=$_POST['password'];

        
        $query=mysqli_query($mysqli, "SELECT * FROM admin WHERE nama='".$nama."'");
        $numrows=mysqli_num_rows($query);
        if($numrows==0) {  
            $password = md5($password);
            $sql="INSERT INTO admin(nama, no_telp, email, password) VALUES('$nama','$number', '$email', '$password')";  

            $result=mysqli_query($mysqli, $sql);  
             if($result){  
                echo "<div class='position-absolute translate-middle start-50 col-md-12 col-sm-10 col-xs-10 ml-5 justify-content-center'>";
                echo "<div class='alert alert-primary mt-4 ml-5' role='alert'>";
                echo "<p><center>Data Telah Diinput</center></p>";
                echo  "</div>";
                echo "</div>";  
             } else {  
                 echo "<p><center>Data Gagal Masuk</center></p>";
                }  

             } else {  
                echo "<div class='position-absolute translate-middle start-50 col-md-12 col-sm-12 col-xs-12'>";
                 echo "<div class='alert alert-danger mt-4 ml-5' role='alert'>";
                 echo "<p><center>Terdapat data yang sama dengan user lain</center></p>";
                 echo   "</div>";
                 echo "</div>";
             }  

             } else {  
                echo "<div class='position-absolute translate-middle start-50 col-md-12 col-sm-12 col-xs-12'>";
                echo "<div class='alert alert-danger mt-4 ml-5' role='alert'>";
                echo "<p><center>Harap isi semua field</center></p>";
                echo   "</div>";
                echo "</div>";  
             }  
         }
        
        
        

?>
    <!-- <script src="main.js"></script> -->
  </body>
</html>
