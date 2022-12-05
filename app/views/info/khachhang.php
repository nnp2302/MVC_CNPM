<?php extract($_SESSION['user']); ?>
<div class="row">
  <div class="col-12 col-xl-8">
    <div class="card card-body border-0 shadow mb-4">
      <h2 class="h5 mb-4">Thông tin chung</h2>
      <form id="form_info" action="<?php echo _WEB_ROOT; ?>/cap-nhat-thong-tin" method="post">
        <div class="row">
          <div class="col-md-6 mb-3">
            <div>
              <label for="first_name">Họ</label>
              <?php echo '<input class="form-control" id="first_name" name="ho" type="text" placeholder="Chưa cập nhật" value="' . $ho . '" required>'; ?>
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <div>
              <label for="last_name">Tên</label>
              <?php echo '<input class="form-control" id="last-name" name="ten" type="text" placeholder="Chưa cập nhật" value="' . $ten . '" required>'; ?>
            </div>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-md-6 mb-3">
            <label for="birthday">Ngày sinh</label>
            <div class="input-group">
              <span class="input-group-text">
                <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                </svg>
              </span>
              <?php echo '<input data-datepicker="" class="form-control" id="birthday" name="ngaysinh" type="text" placeholder="Chưa có thông tin ngày sinh" value="' . date("m/d/Y", strtotime($ngaysinh)) . '" required>' ?>
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="gender">Giới tính</label>
            <select class="form-select mb-0" id="gender" aria-label="Gender select example" name="gioitinh">
              <?php
              echo '<option value="-1">Chưa cập nhật</option>';
              echo '<option value="0" ', $gioitinh == "0" ? "selected" : "", '>Nữ</option>';
              echo '<option value="1" ', $gioitinh == "1" ? "selected" : "", '>Nam</option>';
              echo '<option value="9" ', $gioitinh == "9" ? "selected" : "", '>Khác</option>'; ?>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <div class="form-group">
              <label for="email">Email</label>
              <?php echo '<input class="form-control" id="email" name="email" type="email" placeholder="Chưa có email" value="' . $email . '">'; ?>
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <div class="form-group">
              <label for="phone">Số điện thoại</label>
              <?php echo '<input class="form-control" id="phone" name="sdt" type="text" placeholder="Chưa cập nhật số điện thoại" value="' . $sdt . '" required>'; ?>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-9 mb-3">
            <div class="form-group">
              <label for="address">Địa chỉ</label>
              <input class="form-control" id="diachi" value="<?php echo $diachi; ?>" name="diachi" type="text" placeholder="Địa chỉ hiện tại của bạn">
            </div>
          </div>
        </div>
        <div class="mt-3">
          <button class="btn btn-gray-800 mt-2 animate-up-2" type="submit">Cập nhật thông tin</button>
        </div>

      </form>
    </div>
  </div>
</div>