<div class="row">
  <div class="col-12 mb-4">
    <div class="card border-0 shadow components-section">
      <div class="card-body">
        <form method="post" action="<?php _WEB_ROOT ?>/tao-phieu-bao-duong">
          <!-- Form-->
          <div class="row mb-4">
            <div class="col-lg-4 col-sm-6">
              <div class="mb-4">
                <label for="text">Tên khách hàng</label>
                <input type="text" class="form-control" id="text" placeholder="Chưa có thông tin" name="ten" value="<?php if(isset($search['ten'])) echo $search['ten'] ?>" required readonly>
              </div>
              <div class="mb-4">
                <label for="text">Số điện thoại</label>
                <input type="text" class="form-control" id="text" maxlength="10" placeholder="Chưa có thông tin" name="sdt" value="<?php if(isset($search['sdt'])) echo $search['sdt'] ?>" required readonly>
              </div>
              <div class="mb-4">
                <label for="date">Đặt lịch vào ngày</label>
                <input type="date" class="form-control" id="text" aria-describedby="emailHelp" name="ngay" value="<?php if(isset($search['ngay'])) echo $search['ngay'] ?>" required readonly>
              </div>
              <div class="mb-4">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Chưa có thông tin" name="email" value="<?php if(isset($search['email'])) echo $search['email'] ?>" readonly>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6">
              <div class="mb-4">
                <label for="text">Loại xe</label>
                <input type="text" class="form-control" id="text" placeholder="Chưa có thông tin" name="loaixe" value="<?php if(isset($search['loaixe'])) echo $search['loaixe'] ?>" required readonly>
              </div>
              <div class="mb-4">
                <label for="text">Hãng xe</label>
                <input type="text" class="form-control" id="text" placeholder="Chưa có thông tin" name="hangxe" value="<?php if(isset($search['hangxe'])) echo $search['hangxe'] ?>" required readonly>
              </div>
              <div class="mb-4">
                <label for="text">Biển số xe</label>
                <input type="text" class="form-control" id="text" placeholder="Chưa có thông tin" name="bienso" value="<?php if(isset($search['bienso'])) echo $search['bienso'] ?>" required readonly>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <!-- Checkboxes -->
              <div class="mb-3">
                <span class="h6 fw-bold">Nhu cầu</span>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="defaultCheck10" <?php if(!empty($search['suachua'])) echo 'checked' ?> name="suachua" onClick="return false">
                <label class="form-check-label" for="defaultCheck10">
                  Sửa chữa
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="defaultCheck20"<?php if(!empty($search['baoduong'])) echo 'checked' ?> name="baoduong" onClick="return false">
                <label class="form-check-label" for="defaultCheck20">
                  Bảo dưỡng
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="defaultCheck20"<?php if(!empty($search['nangcap'])) echo 'checked' ?> name="nangcap" onClick="return false">
                <label class="form-check-label" for="defaultCheck20">
                  Nâng cấp phụ tùng
                </label>
              </div>
            </div>
            
            <div class="my-4">
              <label for="ghichu">Ghi chú</label>
              <textarea class="form-control" placeholder="Ghi chú..." id="ghichu" rows="3" name="ghichu"></textarea>
            </div>
            <div class="mb-4">
              <button class="btn btn-primary animate-up-2" value="<?php if(isset($search['idkh'])) echo $search['idkh'] ?>" name="idkh" type="submit">Lập phiếu bảo dưỡng</button>
            </div>
          </div>
        </form> <!-- End Form-->
      </div>
    </div>
  </div>
</div>