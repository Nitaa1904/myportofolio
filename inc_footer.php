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
              I am a student focusing on web development, I have handled various challenging projects that expanded my technical knowledge and skills.
              </p>
              <a href="https://wa.me/6288239561942" class="btn btn-danger">Lets Talk</a>
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
              <a href="#projek" class="text-link">Project</a>
              <a href="#introduction" class="text-link">My Story</a>
              <a href="#" class="text-link">Blog</a>
          </div>
            <div class="col d-flex justify-content-end">
            <p>&copy; <span id="yearFooter"></span> nitaaa2024</p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            const currentYear = new Date().getFullYear();
            document.getElementById('year').textContent = currentYear;
            document.getElementById('yearFooter').textContent = currentYear;
        });
    </script>