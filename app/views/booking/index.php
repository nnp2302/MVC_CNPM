<div class="row">
  <div class="col-12 mb-4">
    <div class="card border-0 shadow components-section">
      <div class="card-body">
        <form method="post" action="<?php _WEB_ROOT ?>/tao-lich-dat">
          <!-- Form-->
          <div class="row mb-4">
            <div class="col-lg-4 col-sm-6">
              <div class="mb-4">
                <label for="text">Tên khách hàng</label>
                <input type="text" class="form-control" id="text" placeholder="Nguyễn Văn A" name="ten" required>
                <small id="emailHelp" class="form-text text-muted">Chúng tôi sẽ gọi quý khách bằng tên này</small>
              </div>
              <div class="mb-4">
                <label for="text">Số điện thoại</label>
                <input type="text" class="form-control" id="text" maxlength="10" placeholder="0123456789" name="sdt" required>
                <small id="emailHelp" class="form-text text-muted">Chúng tôi sẽ liên lạc với quý khách khi tới lịch</small>
              </div> 
              <div class="mb-4">
                <label for="date">Đặt lịch vào ngày</label>
                <input type="date" min="<?php echo date('Y-m-d') ?>" max="<?php echo date('Y-m-d',strtotime(date('Y-m-d').'+30 days')) ?>" class="form-control" id="text" aria-describedby="emailHelp" name="ngay" required>
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
                <input type="text" class="form-control" id="text" placeholder="G63" name="loaixe" required>
              </div>
              <div class="mb-4">
                <label for="text">Hãng xe</label>
                <input type="text" class="form-control" id="text" placeholder="Mercedes" name="hangxe" required>
              </div>
              <div class="mb-4">
                <label for="text">Biển số xe</label>
                <input type="text" class="form-control" id="text" placeholder="00-A0-00000" name="bienso" required>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <!-- Checkboxes -->
              <div class="mb-3">
                <span class="h6 fw-bold">Nhu cầu</span>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox"  id="defaultCheck10" name="suachua">
                <label class="form-check-label" for="defaultCheck10">
                  Sửa chữa
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox"  id="defaultCheck20" name="baoduong">
                <label class="form-check-label" for="defaultCheck20">
                  Bảo dưỡng
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox"  id="defaultCheck20" name="nangcap">
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