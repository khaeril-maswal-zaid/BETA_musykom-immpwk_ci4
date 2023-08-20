    <header class="navbar navbar-dark sticky-top bg-danger flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 text-center" href="/adminppc/<?= url_title($adminlogin['nama'], '-', true) ?>"><?= BRAND ?></a>
      <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </header>

    <!-- tag penutup ada di footer-admin -->
    <div class="container-fluid">
      <!-- tag penutup ada di footer-admin -->
      <div class="row">


        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
          <div class="position-sticky">

            <div class="d-flex flex-column flex-shrink-0 p-3">
              <ul class="list-unstyled ps-0">
                <li class="mb-1">
                  <button class="btn btn-toggle align-items-center rounded collapsed active" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
                    <span data-feather="home" class="mx-1"></span> Home
                  </button>
                  <div class="collapse" id="home-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                      <li><a href="/adminppc/<?= url_title($adminlogin['nama'], '-', true) ?>" class="link-dark rounded"><span data-feather="home" class="mx-1"></span>Home</a></li>
                      <li><a href="/webmail" class="link-dark rounded"><span data-feather="mail" class="mx-1"></span>Email</a></li>
                    </ul>
                  </div>
                </li>

                <hr>


                <li class="mb-1">
                  <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#Konfigurasi-collapse" aria-expanded="false">
                    <span data-feather="settings" class="mx-1"></span> Data <?= BRAND; ?>
                  </button>
                  <div class="collapse" id="Konfigurasi-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                      <li><a href="<?= URL ?>admin/hasil-pemilihan" class="link-dark rounded"><span data-feather="user" class="mx-1"></span>Hasil Pemilihan</a></li>
                      <li><a href="<?= URL ?>admin/data-pemilih" class="link-dark rounded"><span data-feather="user" class="mx-1"></span>Data Pemilih</a></li>
                      <li><a href="<?= URL ?>admin/data-formatur" class="link-dark rounded"><span data-feather="user" class="mx-1"></span>Data Formatur</a></li>
                    </ul>
                  </div>
                </li>

                <hr>

                <li class="mb-1">
                  <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#Konfigurasi-collapse" aria-expanded="false">
                    <span data-feather="settings" class="mx-1"></span>Configurasi
                  </button>
                  <div class="collapse" id="Konfigurasi-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                      <li><a href="#" class="link-dark rounded"><span data-feather="user" class="mx-1"></span>Admin</a></li>
                      <li>
                        <form action="<?= URL ?>admin/start-biliksuara" method="post">
                          <button type="submit" class="link-dark rounded border-0" value="true">Start Bilik Suara</button>
                        </form>
                      </li>
                    </ul>
                  </div>
                </li>

              </ul>

              <div class="dropdown profil-admin m-4">
                <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="/assets/img/admin/" alt="" width="50" height="50" class="rounded-circle me-2" class="img-thumbnail">
                  <strong>xx</strong>
                </a>
                <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                  <li><a class="dropdown-item" href="#">New project...</a></li>
                  <li><a class="dropdown-item" href="#">Settings</a></li>
                  <li><a class="dropdown-item" href="#">Profile</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="/">Sign out</a></li>
                </ul>
              </div>
            </div>

          </div>
        </nav>