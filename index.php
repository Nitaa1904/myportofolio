<?php include_once("inc_header.php")?>
<?php include_once("koneksi.php")?>
    <section class="container-fluid">
    <div class="introduction" id="introduction">
    <?php
    // Mengambil data dari tabel introduction
    $sql = "SELECT * FROM introduction LIMIT 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Mengambil data
        $row = $result->fetch_assoc();
        ?>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="content">
                        <div class="nama">
                            <h1><?php echo htmlspecialchars($row['nama']); ?></h1>
                            <hr class="custom-hr">
                            <div class="sosial-media">
                                <ul class="sosial-media ms-auto">
                                    <li class="sosial-media-item">
                                        <a class="sosial-media-link" href="https://github.com/Nitaa1904" target="_blank">
                                            <img src="img/github.png" alt="Github" class="img-fluid" />
                                        </a>
                                    </li>
                                    <li class="sosial-media-item">
                                        <a class="sosial-media-link" href="https://www.instagram.com/nfm_194/" target="_blank">
                                            <img src="img/ig.png" alt="Instagram" class="img-fluid" />
                                        </a>
                                    </li>
                                    <li class="sosial-media-item">
                                        <a class="sosial-media-link" href="https://www.linkedin.com/in/nitafitrotul1904" target="_blank">
                                            <img src="img/LinkedIn.png" alt="LinkedIn" class="img-fluid" />
                                        </a>
                                    </li>
                                    <li class="sosial-media-item">
                                        <a class="sosial-media-link" href="mailto:nitafitrotul1904@gmail.com">
                                            <img src="img/email.png" alt="Email" class="img-fluid" />
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="gambar-profile">
                            <img src="img/marah.png" alt="gambar-profile" style="width: 800px; height: 450px;" />
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="content-introduction">
                        <h4>Introduction</h4>
                        <h2><?php echo htmlspecialchars($row['job']); ?></h2>
                        <p><?php echo htmlspecialchars($row['konten']); ?></p>
                        <a href="<?php echo htmlspecialchars($row['cv']); ?>" class="btn btn-danger">Download CV</a>
                    </div>
                </div>
            </div>
        </div>
        <?php
    } else {
        echo "0 results";
    }
    ?>
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
                      <div class="col-md">
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
                    <div class="card" style="overflow: hidden;"> <!-- Ubah width dari 18rem menjadi 20rem -->
                        <img src="<?php echo htmlspecialchars($service['image_url']); ?>" class="card-img-top" alt="..." style="height: 10rem; object-fit: cover;">
                        <div class="card-body" style="display: flex; flex-direction: column; justify-content: space-between; height: 12rem;">
                            <div>
                                <h5 class="card-title" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                    <?php echo htmlspecialchars($service['title']); ?>
                                </h5>
                                <p class="card-text" style="flex-grow: 1; overflow: hidden; text-overflow: ellipsis;">
                                    <?php echo htmlspecialchars($service['deskripsi']); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            </div>

          </div>
        </div>
      </div>

      <!-- Projek -->
      <div class="projek" id="projek">
    <?php
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
                <?php foreach($projek as $project): ?>
                    <div class="col-md-4 mb-4 d-flex align-items-stretch"> <!-- col-md-4 akan membagi row menjadi 3 kolom, mb-4 memberikan margin bawah -->
                        <div class="card text-right" style="width: 100%; height: 30rem; overflow: hidden;">
                            <img src="<?php echo htmlspecialchars($project['image_url']); ?>" class="card-img-top" alt="..." style="height: 65%; object-fit: cover;">
                            <div class="card-body" style="height: 50%; display: flex; flex-direction: column; justify-content: space-between;">
                                <div>
                                    <h5 class="card-title text-white" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                        <?php echo htmlspecialchars($project['title']); ?>
                                    </h5>
                                    <p class="card-text" style="flex-grow: 1; overflow: hidden; text-overflow: ellipsis;">
                                        <?php echo htmlspecialchars($project['description']); ?>
                                    </p>
                                </div>
                                <a href="<?php echo htmlspecialchars($project['link']); ?>" class="btn btn-danger">Lihat Project</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <?php
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
        <div id="sertifikat-section" class="content-section">
            <div class="row">
                <?php foreach($sertifikat as $cert): ?>
                    <div class="col-md-4 mb-4 d-flex align-items-stretch"> <!-- col-md-4 untuk membagi baris menjadi tiga kolom pada layar medium dan lebih besar -->
                        <div class="card text-right" style="width: 100%; height: 30rem; overflow: hidden;">
                            <img src="<?php echo htmlspecialchars($cert['image_url']); ?>" class="card-img-top" alt="..." style="height: 50%; object-fit: cover;">
                            <div class="card-body" style="height: 50%; display: flex; flex-direction: column; justify-content: space-between;">
                                <div>
                                    <h5 class="card-title text-white" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                        <?php echo htmlspecialchars($cert['title']); ?>
                                    </h5>
                                    <p class="card-text" style="flex-grow: 1; overflow: hidden; text-overflow: ellipsis;">
                                        <?php echo htmlspecialchars($cert['description']); ?>
                                    </p>
                                </div>
                                <a href="<?php echo htmlspecialchars($cert['link']); ?>" class="btn btn-danger">Lihat Sertifikat</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
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
                      <?php
                          $sql = "SELECT * FROM Education";
                          $result = $conn->query($sql);

                          if ($result->num_rows > 0) {
                              while($row = $result->fetch_assoc()) {
                                  echo '<div class="isi">';
                                  echo '<h4 class="text-start">' . $row["institution"] . '</h4>';
                                  echo '<h6 class="text-start">' . $row["department"] . '</h6>';
                                  echo '<p class="text-start">' . $row["description"] . '</p>';
                                  echo '<hr class="custom-hr">';
                                  echo '</div>';
                              }
                          }
                          ?>
                    </div>
                    <div id="organization-section" class="content-section scrollable">
                        <?php
                        $sql = "SELECT * FROM Organization";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo '<div class="isi">';
                                echo '<h4 class="text-start">' . $row["name"] . '</h4>';
                                echo '<h6 class="text-start">' . $row["role"] . '</h6>';
                                echo '<p class="text-start">' . $row["description"] . '</p>';
                                echo '<hr class="custom-hr">';
                                echo '</div>';
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </section>

    <?php include_once("inc_footer.php")?>
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
  </body>
</html>
<?php
$conn->close();
?>