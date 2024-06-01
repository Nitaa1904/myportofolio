<?php 
session_start();
include_once("koneksi.php");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nita Fitrotul Mar'ah</title>
    <link rel="stylesheet" href="css/style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />

    <script>
        function showSection(section) {
            document.querySelectorAll('.content-section').forEach(el => el.classList.remove('active'));
            document.getElementById(section + '-section').classList.add('active');
        }
    </script>
  </head>

  <body>
    <!-- Nav -->
    <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
      <div class="container">
          <a class="navbar-brand" href="#">
              <img src="img/13.png" alt="Bootstrap" width="50" height="50">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
              <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="#introduction">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#skill">Skill</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#service">Service</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#projek">Experience</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#story">Education</a>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Contact
                      </a>
                      <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="https://wa.me/6288239561942">WhatsApp</a></li>
                          <li><a class="dropdown-item" href="mailto: nitafitrotul1904@gmail.com">Email</a></li>
                      </ul>
                  </li>
              </ul>
          </div>
      </div>
    </nav>