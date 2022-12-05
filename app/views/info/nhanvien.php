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
        <div class="row">
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
          <div class="col-md-6 mb-3">
            <div>
              <label for="last_name">Chức vụ</label>
              <input class="form-control" id="last-name" type="text" placeholder="Chưa cập nhật" value="<?php echo (!empty($_SESSION['chucnang']))?$_SESSION['chucnang'][0]['tenchucvu']:'Vui lòng đăng nhập';?>" disabled>
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