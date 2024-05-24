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
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
    <section class="container-fluid">
      <div class="introduction" id="introduction">
        <?php
        // Mengambil data dari tabel introduction
        $sql = "SELECT * FROM introduction LIMIT 1";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Mengambil data
            $row = $result->fetch_assoc();
        } else {
            echo "0 results";
        }
        ?>
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="content">
                <div class="nama">
                  <h1>
                    <?php echo htmlspecialchars($row['nama']); ?>
                  </h1>
                  <hr class="custom-hr">
                  <div class="sosial-media">
                      <ul class="sosial-media ms-auto">
                          <li class="sosial-media-item">
                              <a class="sosial-media-link" href="#">
                                  <img src="img/fb.png" alt="Facebook" class="img-fluid" />
                              </a>
                          </li>
                          <li class="sosial-media-item">
                              <a class="sosial-media-link" href="#">
                                  <img src="img/ig.png" alt="Instagram" class="img-fluid" />
                              </a>
                          </li>
                          <li class="sosial-media-item">
                              <a class="sosial-media-link" href="#">
                                  <img src="img/LinkedIn.png" alt="LinkedIn" class="img-fluid" />
                              </a>
                          </li>
                          <li class="sosial-media-item">
                              <a class="sosial-media-link" href="#">
                                  <img src="img/email.png" alt="Email" class="img-fluid" />
                              </a>
                          </li>
                      </ul>
                  </div>
                </div>
                <div class="gambar-profile">
                  <img src="img/nita.png" alt="gambar-profile " />
                </div>
              </div>
            </div>
            <div class="col">
              <div class="content-introduction">
                <h4>introduction</h4>
                <h2>
                  <?php echo htmlspecialchars($row['job']); ?>
                </h2>
                <p>
                  <?php echo htmlspecialchars($row['konten']); ?>
                </p>
                <button type="button" class="btn btn-danger">
                  Download CV
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="skill" id="skill">
          <?php

          // Mengambil data dari tabel skill
          $sql = "SELECT * FROM skill";
          $result = $conn->query($sql);

          $images = [];
          if ($result->num_rows > 0) {
              // Mengambil semua data gambar
              while($row = $result->fetch_assoc()) {
                  $images[] = $row['image_url'];
              }
          } else {
              echo "0 results";
          }
          ?>
          <div class="container justify-content-center align-items-center">
              <div class="skill-deskripsi">
                  <h2>What I am Capable of?</h2>
              </div>
              <div class="row">
                  <?php foreach($images as $image_url): ?>
                      <div class="col-md-3">
                          <div class="skill-item">
                              <img src="<?php echo htmlspecialchars($image_url); ?>" class="img-fluid" alt="Skill Image">
                          </div>
                      </div>
                  <?php endforeach; ?>
              </div>
          </div>
      </div>

      <!-- service -->
      <div class="service" id="service">
          <?php

          $sql = "SELECT * FROM service";
          $result = $conn->query($sql);

          $services = [];
          if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                  $services[] = $row;
              }
          } else {
              echo "0 results";
          }
          ?>
        <div class="container">
          <div class="row">
            <div class="col-12 justify-content-end">
              <div class="text-right" >Services of my skills</div>
            </div>
            <div
              class="col-12 col-md-4 d-flex justify-content-center align-items-center"
            >
              <h2>
                My Services <br />For Help <br />
                Your Business
              </h2>
            </div>
            <div class="col-12 col-md-8">
              <div class="card-container" id="cardContainer">
                <?php foreach($services as $service): ?>
                <div class="card">
                  <img src="<?php echo htmlspecialchars($service['image_url']); ?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo htmlspecialchars($service['title']); ?></h5>
                    <p class="card-text"><?php echo htmlspecialchars($service['deskripsi']); ?></p>
                    <a href="#" class="btn btn-danger">See More</a>
                  </div>
                </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Projek -->
      <div class="projek" id="projek">
        <?php
        // Mengambil data dari tabel projek
        $sql_projek = "SELECT * FROM projek";
        $result_projek = $conn->query($sql_projek);

        $projek = [];
        if ($result_projek->num_rows > 0) {
            while($row_projek = $result_projek->fetch_assoc()) {
                $projek[] = $row_projek;
            }
        } else {
            echo "0 results";
        }

        // Mengambil data dari tabel sertifikat
        $sql_sertifikat = "SELECT * FROM sertifikat";
        $result_sertifikat = $conn->query($sql_sertifikat);

        $sertifikat = [];
        if ($result_sertifikat->num_rows > 0) {
            while($row_sertifikat = $result_sertifikat->fetch_assoc()) {
                $sertifikat[] = $row_sertifikat;
            }
        } else {
            echo "0 results";
        }
        ?>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>Selected Project</h2>
                    <p>My experience in building several projects</p>
                </div>
                <div class="col d-flex justify-content-end">
                    <div class="text-right">
                        <a href="#projek-section" class="btn btn-transparent btn-block" onclick="showSection('projek')">Project</a>
                        <a href="#sertifikat-section" class="btn btn-transparent btn-block" onclick="showSection('sertifikat')">Certification</a>
                    </div>
                </div>
            </div>
            <div id="projek-section" class="content-section active">
                <div class="row">
                    <div class="col">
                    <?php foreach($services as $projek): ?>
                        <div class="card text-right" style="width: 25rem; height: 30rem">
                            <img src="<?php echo htmlspecialchars($projek['image_url']); ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-white"><?php echo htmlspecialchars($projek['title']); ?></h5>
                                <p class="card-text">
                                <?php echo htmlspecialchars($projek['deskripsi']); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 25rem; height: 30rem">
                            <img src="https://placehold.co/600x400" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-white">Lorem</h5>
                                <p class="card-text">
                                    This is a longer card with supporting text below as a
                                    natural lead-in to additional content. This content is a
                                    little bit longer.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 25rem; height: 30rem">
                            <img src="https://placehold.co/600x400" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-white">Lorem</h5>
                                <p class="card-text">
                                    This is a longer card with supporting text below as a
                                    natural lead-in to additional content. This content is a
                                    little bit longer.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sertifikat-section" class="content-section">
              <div class="row">
                <div class="col">
                    <div class="card text-right" style="width: 25rem; height: 30rem">
                        <img src="https://placehold.co/600x400" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-white">DICODING</h5>
                            <p class="card-text">
                                This is a longer card with supporting text below as a
                                natural lead-in to additional content. This content is a
                                little bit longer.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 25rem; height: 30rem">
                        <img src="https://placehold.co/600x400" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-white">Lorem</h5>
                            <p class="card-text">
                                This is a longer card with supporting text below as a
                                natural lead-in to additional content. This content is a
                                little bit longer.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 25rem; height: 30rem">
                        <img src="https://placehold.co/600x400" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-white">Lorem</h5>
                            <p class="card-text">
                                This is a longer card with supporting text below as a
                                natural lead-in to additional content. This content is a
                                little bit longer.
                            </p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
      </div>
      <div class="story" id="story">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-end">
                    <div class="text-right">
                        <a href="#education-section" class="btn btn-transparent btn-block" onclick="showSection('education')">Education</a>
                        <a href="#organization-section" class="btn btn-transparent btn-block" onclick="showSection('organization')">Organization</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
                    <h2>Education And <br />Organization</h2>
                </div>
                <div class="col-12 col-md-6">
                    <div id="education-section" class="content-section active">
                        <div class="isi">
                            <h4 class="text-start">Institut Teknologi Telkom Purwokerto</h4>
                            <h6 class="text-start">Jurusan Software Engineering</h6>
                            <p class="text-start">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <hr class="custom-hr">
                        </div>
                        <div class="isi">
                            <h4 class="text-start">Institut Teknologi Telkom Purwokerto</h4>
                            <h6 class="text-start">Jurusan Software Engineering</h6>
                            <p class="text-start">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <hr class="custom-hr">
                        </div>
                    </div>
                    <div id="organization-section" class="content-section scrollable">
                        <div class="isi">
                            <h4 class="text-start">Organization Name 1</h4>
                            <h6 class="text-start">Role</h6>
                            <p class="text-start">Description of your role and achievements in the organization.</p>
                            <hr class="custom-hr">
                        </div>
                        <div class="isi">
                            <h4 class="text-start">Organization Name 2</h4>
                            <h6 class="text-start">Role</h6>
                            <p class="text-start">Description of your role and achievements in the organization.</p>
                            <hr class="custom-hr">
                        </div>
                        <div class="isi">
                            <h4 class="text-start">Organization Name 3</h4>
                            <h6 class="text-start">Role</h6>
                            <p class="text-start">Description of your role and achievements in the organization.</p>
                            <hr class="custom-hr">
                        </div>
                        <div class="isi">
                            <h4 class="text-start">Organization Name 4</h4>
                            <h6 class="text-start">Role</h6>
                            <p class="text-start">Description of your role and achievements in the organization.</p>
                            <hr class="custom-hr">
                        </div>
                        <!-- Add more organization items as needed -->
                    </div>
                </div>
            </div>
        </div>
      </div>
    </section>

    <footer>
      <div class="footer">
        <div class="container">
          <div class="row">
            <div class="col-md-6 text-md-left">
              <h2>
                IT'S NOT NOW <br />THEN <br />
                WHEN
              </h2>
            </div>
            <div class="col-md-6 text-md-left">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
              <button type="button" class="btn btn-danger">Lets Talk</button>
            </div>
          </div>
        </div>
        <hr class="custom-hr">
        <div class="container">
          <div class="row">
            <div class="col">
              <img src="img/13.png" alt="" width="40" height="40">
            </div>
            <div class="col text-center">
              <a href="#" class="text-link">Project</a>
              <a href="#" class="text-link">My Story</a>
              <a href="#" class="text-link">Blog</a>
          </div>
            <div class="col d-flex justify-content-end">
              <p class="text-md-right">Copyright@nitaaa2024</p>
            </div>
          </div>
        </div>
      </div>

    <!-- JS -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"

      
    ></script>
    <script>
      function showSection(sectionId) {
          // Hide all content sections
          var sections = document.querySelectorAll('.content-section');
          sections.forEach(function (section) {
              section.classList.remove('active');
          });
  
          // Show the selected content section
          var selectedSection = document.getElementById(sectionId + '-section');
          selectedSection.classList.add('active');
      }
    </script>
    <?php
    $conn->close();
    ?>
  </body>
</html>