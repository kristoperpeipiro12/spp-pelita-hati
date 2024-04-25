<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="{{ asset('UI/css/style.css') }}" />
  <link rel="stylesheet" href="{{ asset('UI/bootstrap-icons/font/bootstrap-icons.css') }}" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

  <title>Nav Custom</title>
</head>

<body>
  <nav class="nav-custom">
    <div class="nav-section">
      <div id="con-user" class="con-user hide">
        <div class="bio-user" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <div class="nav-img hide">
            <img src="{{ asset('UI/assets/avatar1.png') }}" alt="" />
          </div>
          <div class="con-name-user hide">
            <span class="nama-user">Bambang Pamungkas</span>
            <span class="role-user">Administrasi - 1</span>
          </div>
        </div>
      </div>

      <i id="btn-toggle-sidebar" class="bi bi-list hide" style="margin-left: 20px"></i>
      <div id="realtime" class="realtime hide">
        <span id="waktu"></span>
      </div>
    </div>
    <div class="nav-section">
      <div class="right-nav">
        <div class="slide-icon d-flex">
          <div class="con-icon bg-danger-subtle" data-bs-toggle="tooltip" data-bs-placement="bottom"
            data-bs-title="Notification">
            <i class="bi bi-bell text-danger"></i>
          </div>
          <div class="con-icon bg-primary-subtle" data-bs-toggle="tooltip" data-bs-placement="bottom"
            data-bs-title="Dashboard">
            <i class="bi bi-kanban text-primary"></i>
          </div>
          <div class="con-icon bg-success" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Whatsapp">
            <i class="bi bi-whatsapp text-white"></i>
          </div>
        </div>

        <div class="vertical-line"></div>
        <!-- <div class="con-icon bg-danger" style="margin: 0">
            <i class="bi bi-person text-white"></i>
          </div> -->
        <a href="#" class="d-flex align-items-center text-black text-decoration-none">
          <div class="nav-img">
            <img src="{{ asset('UI/assets/logoSekolah.png') }}" alt="" />
          </div>
          <span class="brand">SD PELITA HATI</span>
        </a>
      </div>
    </div>
  </nav>

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">
            IDENTITAS PENGGUNA
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body d-flex flex-column">
          <table>
            <tr>
              <td>Nama</td>
              <td>:</td>
              <td>Bambang Pamungkas</td>
            </tr>
            <tr>
              <td>Jenis Kelamin</td>
              <td>:</td>
              <td>Laki-laki</td>
            </tr>
            <tr>
              <td>Jabatan</td>
              <td>:</td>
              <td>Administrasi</td>
            </tr>
            <tr>
              <td class="align-top">Foto</td>
              <td class="align-top">:</td>
              <td class="">
                <img src="{{ asset('UI/assets/avatar1.png') }}" alt="" height="100px" />
              </td>
            </tr>
          </table>
        </div>
        <div class="modal-footer">
          <h5 class="w-100 text-center">SD KRISTEN PELITA HATI</h5>
        </div>
      </div>
    </div>
  </div>

  <div class="content">
    <div id="sidebar" class="side-bar hide">
      <div class="sidebar-title pt-2 pb-2 ps-1 fw-medium text-white">MENU UTAMA</div>
      <a href="#" class="text-decoration-none">
        <div class="sidebar-menu active">
          <div class="menu">
            <i class="bi bi-speedometer2"></i>
            Dashboard
          </div>
        </div>
      </a>
      <a href="#" class="text-decoration-none">
        <div class="sidebar-menu">
          <div class="menu">
            <i class="bi bi-whatsapp"></i>
            Whatsapp
          </div>
        </div>
      </a>
      <a href="#" class="text-decoration-none">
        <div class="sidebar-menu">
          <div class="menu">
            <i class="bi bi-cash-coin"></i>
            Tagihan
          </div>
        </div>
      </a>
      <a href="#" class="text-decoration-none">
        <div class="sidebar-menu">
          <div class="menu">
            <i class="bi bi-safe2"></i>
            Pemasukan
          </div>
        </div>
      </a>
      <a href="#" class="text-decoration-none">
        <div class="sidebar-menu">
          <div class="menu">
            <i class="bi bi-wallet2"></i>
            Pengeluaran
          </div>
        </div>
      </a>
      <a href="#" class="text-decoration-none">
        <div id="dropdown-tagihan" class="sidebar-menu menu-dropdown">
          <div class="menu">
            <i class="bi bi-database"></i>
            Master Data
          </div><i id="dd-md" class="bi bi-caret-left me-3"></i>
        </div>
      </a>
      <div id="con-sub-menu" class="con-sub-menu hide">
        <a href="#" class="text-decoration-none">
          <div class="sub-menu">
            <i class="bi bi-caret-right-fill"></i>Murid
          </div>
        </a>
        <a href="#" class="text-decoration-none">
          <div class="sub-menu">
            <i class="bi bi-caret-right-fill"></i>Yayasan
          </div>
        </a>
        <a href="#" class="text-decoration-none">
          <div class="sub-menu">
            <i class="bi bi-caret-right-fill"></i>Admin
          </div>
        </a>
      </div>
      <a href="#" class="text-decoration-none">
        <div class="sidebar-menu">
          <div class="menu">
            <i class="bi bi-info-circle"></i>
            Informasi
          </div>
        </div>
      </a>
      <div class="sidebar-menu footer-menu">
        <div class="menu">
          <i class="bi bi-box-arrow-left"></i>
          Log-Out
        </div>
      </div>
    </div>

    <div id="maincontent" class="main-content">
      <!-- ubah div dibawah ini untuk container tiap halaman -->
      <div class="dashboard"></div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="{{ asset('UI/js/script.js') }}"></script>
</body>

</html>