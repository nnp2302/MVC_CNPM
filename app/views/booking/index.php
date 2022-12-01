<nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
    <a class="navbar-brand me-lg-5" href="../index.html">
      <img class="navbar-brand-dark" src="../assets/img/brand/light.svg" alt="Volt logo" /> <img class="navbar-brand-light" src="../assets/img/brand/dark.svg" alt="Volt logo" />
    </a>
    <div class="d-flex align-items-center">
      <button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>

  <nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
    <div class="sidebar-inner px-4 pt-3">
      <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
        <div class="d-flex align-items-center">
          <div class="avatar-lg me-4">
            <img src="../assets/img/team/profile-picture-3.jpg" class="card-img-top rounded-circle border-white" alt="Bonnie Green">
          </div>
          <div class="d-block">
            <h2 class="h5 mb-3">Hi, <?php echo $user['_ten'] ?></h2>
            <a href="../pages/examples/sign-in.html" class="btn btn-secondary btn-sm d-inline-flex align-items-center">
              <svg class="icon icon-xxs me-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
              </svg>
              Sign Out
            </a>
          </div>
        </div>
        <div class="collapse-close d-md-none">
          <a href="#sidebarMenu" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation">
            <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
          </a>
        </div>
      </div>
      <ul class="nav flex-column pt-3 pt-md-0">
        <li class="nav-item">
          <a href="" class="nav-link d-flex align-items-center">
            <span class="sidebar-icon">
              <img src="../assets/img/brand/light.svg" height="20" width="20" alt="Volt Logo">
            </span>
            <span class="mt-1 ms-1 sidebar-text"><?php
                                                  switch ($user['_role']) {
                                                    case 'AD':
                                                      echo "Quản trị viên";
                                                      break;
                                                    case 'KH':
                                                      echo "Khách hàng";
                                                      break;
                                                    case 'KT':
                                                      echo "Kế toán";
                                                      break;
                                                    case 'TM':
                                                      echo "Thợ máy";
                                                      break;
                                                    case 'TT':
                                                      echo "Trưởng trạm";
                                                      break;
                                                    case 'BD':
                                                      echo "Thợ bảo dưỡng";
                                                      break;
                                                    case 'KO':
                                                      echo "Nhân viên kho";
                                                      break;
                                                    case 'TK':
                                                      echo 'Thủ kho';
                                                      break;
                                                  }
                                                  ?></span>
          </a>
        </li>
        <li class="nav-item ">
          <a href="../pages/settings.php" class="nav-link">
            <span class="sidebar-icon">
              <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path>
              </svg>
            </span>
            <span class="sidebar-text">Thông tin cá nhân</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <span class="sidebar-icon">
              <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z" clip-rule="evenodd"></path>              </svg>
            </span>
            <span class="sidebar-text">Thông báo</span>
          </a>
        </li>
        <li class="nav-item active ">
          <a href="" class="nav-link d-flex justify-content-between">
            <span>
              <span class="sidebar-icon">
                <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                </svg>
              </span>
              <span class="sidebar-text">Đặt lịch</span>
            </span>
          </a>
        </li>
        <li class="nav-item">
          <span class="nav-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#submenu-baoduong" aria-expanded="true">
            <span>
              <span class="sidebar-icon">
                <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z" clip-rule="evenodd"></path>
                  <path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z"></path>
                </svg>
              </span>
              <span class="sidebar-text">Lập biểu mẫu</span>
            </span>
            <span class="link-arrow">
              <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
              </svg>
            </span>
          </span>
          <div class="multi-level collapse" role="list" id="submenu-baoduong" aria-expanded="false" style="">
            <ul class="flex-column nav">
              <li class="nav-item">
                <a class="nav-link" href="../pages/lap-phieu/bao-duong.php">
                  <span class="sidebar-text">Phiếu bảo dưỡng</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../pages/lap-phieu/tiep-nhan-xe.php">
                  <span class="sidebar-text">Tiếp nhận xe</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../pages/lap-phieu/sua-chua.php">
                  <span class="sidebar-text">Phiếu sửa chữa</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">
                  <span class="sidebar-text">Phiếu xuất kho</span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <span class="nav-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#submenu-baocao" aria-expanded="true">
            <span>
              <span class="sidebar-icon">
                <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z" clip-rule="evenodd"></path>
                  <path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z"></path>
                </svg>
              </span>
              <span class="sidebar-text">Báo cáo</span>
            </span>
            <span class="link-arrow">
              <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
              </svg>
            </span>
          </span>
          <div class="multi-level collapse" role="list" id="submenu-baocao" aria-expanded="false" style="">
            <ul class="flex-column nav">
              <li class="nav-item">
                <a class="nav-link" href="">
                  <span class="sidebar-text">Tiếp nhận xe</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">
                  <span class="sidebar-text">Bảo dưỡng</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">
                  <span class="sidebar-text">Xuất kho</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">
                  <span class="sidebar-text">Dịch vụ</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">
                  <span class="sidebar-text">Doanh số</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">
                  <span class="sidebar-text">Kho</span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <span class="nav-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#submenu-tracuu" aria-expanded="true">
            <span>
              <span class="sidebar-icon">
                <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                </svg> </span>
              <span class="sidebar-text">Tra cứu</span>
            </span>
            <span class="link-arrow">
              <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
              </svg>
            </span>
          </span>
          <div class="multi-level collapse" role="list" id="submenu-tracuu" aria-expanded="false" style="">
            <ul class="flex-column nav">
              <li class="nav-item">
                <a class="nav-link" href="">
                  <span class="sidebar-text">Giá sản phẩm</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">
                  <span class="sidebar-text">Tình trạng xe</span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item ">
          <a href="../pages/dashboard/dashboard.html" class="nav-link">
            <span class="sidebar-icon">
              <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
              </svg>
            </span>
            <span class="sidebar-text">Bảng điều khiển</span>
          </a>
        </li>

        <li class="nav-item">
          <a href="https://oni2302.tech" target="_blank" class="nav-link d-flex align-items-center">
            <span class="sidebar-icon">
              <img src="../assets/img/logo_oni.jpg" height="32" width="32" style="border-radius: 50%;" alt="ONI">
            </span>
            <span class="sidebar-text">ONI</span>
          </a>
        </li>
        <!--
      <li class="nav-item">
        <a href="../pages/upgrade-to-pro.html"
          class="btn btn-secondary d-flex align-items-center justify-content-center btn-upgrade-pro">
          <span class="sidebar-icon d-inline-flex align-items-center justify-content-center">
            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z" clip-rule="evenodd"></path></svg>
          </span> 
          <span>Upgrade to Pro</span>
        </a>
      </li>-->
      </ul>
    </div>
  </nav>

  <main class="content">

    <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0">
      <div class="container-fluid px-0">
        <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
          <div class="d-flex align-items-center">
            <!-- Search form -->
            <form class="navbar-search form-inline" id="navbar-search-main">
              <div class="input-group input-group-merge search-bar">
                <span class="input-group-text" id="topbar-addon">
                  <svg class="icon icon-xs" x-description="Heroicon name: solid/search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                  </svg>
                </span>
                <input type="text" class="form-control" id="topbarInputIconLeft" placeholder="Search" aria-label="Search" aria-describedby="topbar-addon">
              </div>
            </form>
            <!-- / Search form -->
          </div>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center">
        <li class="nav-item dropdown">
          <a class="nav-link text-dark notification-bell unread dropdown-toggle" data-unread-notifications="true" href="#" role="button" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
            <svg class="icon icon-sm text-gray-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path></svg>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-center" style="display: none;">
          </div>
        </li>
        <li class="nav-item dropdown ms-lg-3">
          <a class="nav-link dropdown-toggle pt-1 px-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <div class="media d-flex align-items-center">
              <img class="avatar rounded-circle" alt="Image placeholder" src="../assets/img/team/profile-picture-3.jpg">
              <div class="media-body ms-2 text-dark align-items-center d-none d-lg-block">
                <span class="mb-0 font-small fw-bold text-gray-900"><?php echo $user['_ten']; ?></span>
              </div>
            </div>
          </a>
          <div class="dropdown-menu dashboard-dropdown dropdown-menu-end mt-2 py-1">
            <a class="dropdown-item d-flex align-items-center" href="#">
              <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path></svg>
              My Profile
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path></svg>
              Settings
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm0 2h10v7h-2l-1 2H8l-1-2H5V5z" clip-rule="evenodd"></path></svg>
              Messages
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-2 0c0 .993-.241 1.929-.668 2.754l-1.524-1.525a3.997 3.997 0 00.078-2.183l1.562-1.562C15.802 8.249 16 9.1 16 10zm-5.165 3.913l1.58 1.58A5.98 5.98 0 0110 16a5.976 5.976 0 01-2.516-.552l1.562-1.562a4.006 4.006 0 001.789.027zm-4.677-2.796a4.002 4.002 0 01-.041-2.08l-.08.08-1.53-1.533A5.98 5.98 0 004 10c0 .954.223 1.856.619 2.657l1.54-1.54zm1.088-6.45A5.974 5.974 0 0110 4c.954 0 1.856.223 2.657.619l-1.54 1.54a4.002 4.002 0 00-2.346.033L7.246 4.668zM12 10a2 2 0 11-4 0 2 2 0 014 0z" clip-rule="evenodd"></path></svg>
              Support
            </a>
            <div role="separator" class="dropdown-divider my-1"></div>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <svg class="dropdown-icon text-danger me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>                
              Logout
            </a>
          </div>
        </li>
      </ul>
        </div>
      </div>
    </nav>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
    </div>
    <div class="row">
      <div class="col-12 mb-4">
        <div class="card border-0 shadow components-section">
          <div class="card-body">
            <form>
              <!-- Form-->
              <div class="row mb-4">
                <div class="col-lg-4 col-sm-6">
                  <div class="mb-4">
                    <label for="text">Tên khách hàng</label>
                    <input type="text" class="form-control" id="text" placeholder="Nguyễn Văn A" name="name" required>
                    <small id="emailHelp" class="form-text text-muted">Chúng tôi sẽ gọi quý khách bằng tên này</small>
                  </div>
                  <div class="mb-4">
                    <label for="text">Số điện thoại</label>
                    <input type="text" class="form-control" id="text" placeholder="0123456789" name="phone_number" required>
                    <small id="emailHelp" class="form-text text-muted">Chúng tôi sẽ liên lạc với quý khách khi tới lịch</small>
                  </div>
                  <div class="mb-4">
                    <label for="date">Đặt lịch vào ngày</label>
                    <input type="date" class="form-control" id="text" aria-describedby="emailHelp" name="booking_date" required>
                    <small id="emailHelp" class="form-text text-muted">Quý khách có thể tới gara bất cứ lúc nào trong ngày này</small>
                  </div>
                  <div class="mb-4">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="example@email.com" name="email">
                    <small id="emailHelp" class="form-text text-muted">Chúng tôi có thể liên lạc với quý khách thông qua email (tùy chọn)</small>
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                  <div class="mb-4">
                    <label for="text">Loại xe</label>
                    <input type="text" class="form-control" id="text" placeholder="G63" name="car_type">
                  </div>
                  <div class="mb-4">
                    <label for="text">Hãng xe</label>
                    <input type="text" class="form-control" id="text" placeholder="Mercedes" name="brand">
                  </div>
                  <div class="mb-4">
                    <label for="text">Biển số xe</label>
                    <input type="text" class="form-control" id="text" placeholder="00-A0-00000" name="car_id">
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <!-- Checkboxes -->
                  <div class="mb-3">
                    <span class="h6 fw-bold">Nhu cầu</span>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck10" name="fix">
                    <label class="form-check-label" for="defaultCheck10">
                      Sửa chữa
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck20" name="maintenance">
                    <label class="form-check-label" for="defaultCheck20">
                      Bảo dưỡng
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck20" name="upgrade">
                    <label class="form-check-label" for="defaultCheck20">
                      Nâng cấp phụ tùng
                    </label>
                  </div>
                </div>
                <div class="mb-4">
                  <button class="btn btn-primary" type="submit">Đặt lịch</button>
                </div>
              </div>
            </form> <!-- End Form-->
          </div>
        </div>
      </div>
    </div>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">

    </div>
    <div class="theme-settings card bg-gray-800 pt-2 collapse" id="theme-settings">
      <div class="card-body bg-gray-800 text-white pt-4">
        <button type="button" class="btn-close theme-settings-close" aria-label="Close" data-bs-toggle="collapse" href="#theme-settings" role="button" aria-expanded="false" aria-controls="theme-settings"></button>
        <div class="d-flex justify-content-between align-items-center mb-3">
          <p class="m-0 mb-1 me-4 fs-7">Open source <span role="img" aria-label="gratitude">💛</span></p>
          <a class="github-button" href="https://github.com/themesberg/volt-bootstrap-5-dashboard" data-color-scheme="no-preference: dark; light: light; dark: light;" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star themesberg/volt-bootstrap-5-dashboard on GitHub">Star</a>
        </div>
        <a href="https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard" target="_blank" class="btn btn-secondary d-inline-flex align-items-center justify-content-center mb-3 w-100">
          Download
          <svg class="icon icon-xs ms-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M2 9.5A3.5 3.5 0 005.5 13H9v2.586l-1.293-1.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 15.586V13h2.5a4.5 4.5 0 10-.616-8.958 4.002 4.002 0 10-7.753 1.977A3.5 3.5 0 002 9.5zm9 3.5H9V8a1 1 0 012 0v5z" clip-rule="evenodd"></path>
          </svg>
        </a>
        <p class="fs-7 text-gray-300 text-center">Available in the following technologies:</p>
        <div class="d-flex justify-content-center">
          <a class="me-3" href="https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard" target="_blank">
            <img src="../assets/img/technologies/bootstrap-5-logo.svg" class="image image-xs">
          </a>
          <a href="https://demo.themesberg.com/volt-react-dashboard/#/" target="_blank">
            <img src="../assets/img/technologies/react-logo.svg" class="image image-xs">
          </a>
        </div>
      </div>
    </div>

    <div class="card theme-settings bg-gray-800 theme-settings-expand" id="theme-settings-expand">
      <div class="card-body bg-gray-800 text-white rounded-top p-3 py-2">
        <span class="fw-bold d-inline-flex align-items-center h6">
          <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path>
          </svg>
          Settings
        </span>
      </div>
    </div>

    <footer class="bg-white rounded shadow p-5 mb-4 mt-4">
      <div class="row">
        <div class="col-12 col-md-4 col-xl-6 mb-4 mb-md-0">
          <p class="mb-0 text-center text-lg-start">© 2019-<span class="current-year"></span> <a class="text-primary fw-normal" href="https://themesberg.com" target="_blank">ONI</a></p>
        </div>
        <div class="col-12 col-md-8 col-xl-6 text-center text-lg-start">
          <!-- List -->
          <ul class="list-inline list-group-flush list-group-borderless text-md-end mb-0">
            <li class="list-inline-item px-0 px-sm-2">
              <a href="https://themesberg.com/about">About</a>
            </li>
            <li class="list-inline-item px-0 px-sm-2">
              <a href="https://themesberg.com/themes">Themes</a>
            </li>
            <li class="list-inline-item px-0 px-sm-2">
              <a href="https://themesberg.com/blog">Blog</a>
            </li>
            <li class="list-inline-item px-0 px-sm-2">
              <a href="https://themesberg.com/contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </footer>
  </main>
