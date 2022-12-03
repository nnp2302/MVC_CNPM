<div class="theme-settings card bg-gray-800 pt-2 collapse" id="theme-settings">
  <div class="card-body bg-gray-800 text-white pt-4">
    <button type="button" class="btn-close theme-settings-close" aria-label="Close" data-bs-toggle="collapse" href="#theme-settings" role="button" aria-expanded="false" aria-controls="theme-settings"></button>
    <div class="d-flex justify-content-between align-items-center mb-3">
      <p class="m-0 mb-1 me-4 fs-7">ONI<span role="img" aria-label="gratitude">💛</span></p>
    </div>
    <div>
      <a href="<?php echo _WEB_ROOT; ?>" class="nav-link d-inline-flex align-items-center justify-content-center w-100">
        <img src="<?php echo _WEB_ROOT; ?>/app/public/assets/img/logo_oni.jpg" height="30%" width="30%" style="border-radius: 60%;" alt="ONI">
      </a>
    </div>
    <p class="fs-7 text-gray-300 text-center">Dự án CNPM</p>
  </div>
</div>

<div class="card theme-settings bg-gray-800 theme-settings-expand" id="theme-settings-expand">
  <div class="card-body bg-gray-800 text-white rounded-top p-3 py-2">
    <span class="fw-bold d-inline-flex align-items-center h6">
      <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path>
      </svg>
      Copyright by ONI
    </span>
  </div>
</div>

<footer class="bg-white rounded shadow p-5 mb-4 mt-4">
  <div class="row">
    <div class="col-12 col-md-4 col-xl-6 mb-4 mb-md-0">
      <p class="mb-0 text-center text-lg-start">© 2019-<span class="current-year"></span> <a class="text-primary fw-normal" href="https://facebook.com/nnp2302" target="_blank">ONI</a></p>
    </div>
    <div class="col-12 col-md-8 col-xl-6 text-center text-lg-start">
      <!-- List -->
      <ul class="list-inline list-group-flush list-group-borderless text-md-end mb-0">
        <li class="list-inline-item px-0 px-sm-2">

          <a href="" data-bs-toggle="modal" data-bs-target="#thong-tin">Thông tin gara</a>
        </li>
        <li class="list-inline-item px-0 px-sm-2">
          <a href="https://facebook.com/nnp2302" target="_blank">Chủ gara</a>
        </li>
        <li class="list-inline-item px-0 px-sm-2">
          <a href="" data-bs-toggle="modal" data-bs-target="#lien-lac" >Liên hệ</a>
        </li>
      </ul>
    </div>
  </div>
  <div class="modal fade" id="thong-tin" tabindex="-1" aria-labelledby="thong-tin" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="h6 modal-title">Thông tin gara</h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p class="h5 mb-3">Gara báo đời</p>
          <p class="lead">Cheetah</p>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="lien-lac" tabindex="-1" aria-labelledby="lien-lac" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="h6 modal-title">Thông tin liên lạc</h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p class="lead">Gọi 0696969696 để gặp Nguyễn Ngọc Phương</p>

        </div>
      </div>
    </div>
  </div>
</footer>
</main>