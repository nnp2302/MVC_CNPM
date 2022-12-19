
<?php
  if(isset($message)){
    $this->render('pop-up-errors/success',$data);
  }
?>
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
                <input type="text" class="form-control" id="text" placeholder="Nguyễn Văn A" value="<?php echo $_SESSION['user']['Ho'] . ' ' . $_SESSION['user']['Ten'] ?>" required readonly>
                <small id="emailHelp" class="form-text text-muted">Chúng tôi sẽ gọi quý khách bằng tên này</small>
              </div>
              <div class="mb-4">
                <label for="text">Số điện thoại</label>
                <input type="text" class="form-control" id="text" maxlength="10" placeholder="0123456789" value="<?php echo $_SESSION['user']['SDT'] ?>" required readonly>
                <small id="emailHelp" class="form-text text-muted">Chúng tôi sẽ liên lạc với quý khách khi tới lịch</small>
              </div>
              <div class="mb-4">
                <label for="date">Đặt lịch vào ngày</label>
                <input type="date" min="<?php echo date('Y-m-d') ?>" max="<?php echo date('Y-m-d', strtotime(date('Y-m-d') . '+30 days')) ?>" class="form-control" id="text" aria-describedby="emailHelp" name="ngaydat" required>
                <small id="emailHelp" class="form-text text-muted">Quý khách có thể tới gara bất cứ lúc nào trong ngày này</small>
              </div>
              <div class="mb-4">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Cập nhật email ở thông tin" readonly>
                <small id="emailHelp" class="form-text text-muted">Chúng tôi có thể liên lạc với quý khách thông qua email (tùy chọn)</small>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6">
              <div class="mb-4">
                <label for="hangxe">Hãng xe</label>
                <select class="form-select mb-0" id="hangxe" aria-label="Gender select example" name="HangXe" required>
                  <option value="">--Chọn hãng xe--</option>
                  <option value="Mercedes">Mercedes</option>
                  <option value="Audi">Audi</option>
                </select>
              </div>
              <div class="mb-4">
                <label for="loaixe">Loại xe</label>
                <select id="loaixe" class="form-select mb-0" aria-label="Gender select example" name="LoaiXe" required>
                  <option value="">--Chọn loại xe--</option>
                </select>
              </div>
                <div class="mb-4">
                  <label for="text">Biển số xe</label>
                  <input type="text" class="form-control" id="text" placeholder="00-A0-00000" name="BienSo" required>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <!-- Checkboxes -->
                <div class="mb-3">
                  <span class="h6 fw-bold">Nhu cầu</span>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="defaultCheck10" name="suachua">
                  <label class="form-check-label" for="defaultCheck10">
                    Sửa chữa
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="defaultCheck20" name="baoduong">
                  <label class="form-check-label" for="defaultCheck20">
                    Bảo dưỡng
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="defaultCheck20" name="nangcap">
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


<script>
  var hangxe = document.getElementById("hangxe");
  var loaixe_array = [];
  var loaixe = document.getElementById("loaixe");
  var value;
  hangxe.onchange = function(){
    value = document.getElementById("hangxe").value;
    options = loaixe.querySelectorAll('option');
    options.forEach(element => {
      element.remove();
    });
    switch (value) {
      case "Mercedes":
        loaixe_array = ['EQS',"A-Class","C-Class","E-Class","S-Class","Maybach S-Class","GLA SUV",'GLB','GLC','GLC Coupé','GLE','GLS','G-Class','Maybach GLS'];
        break;
      case "Audi":
        loaixe_array = ['A4','A6','A7','A8','Q2','Q3','Q5','Q7','Q8'];
        break;
      default:
        loaixe_array = [];
        break;
      }
      let option = document.createElement('option');
      option.text = '--Chọn loại xe--';
      option.value = '';
      loaixe.add(option);
    loaixe_array.forEach(value => {
      let option = document.createElement('option');
      option.text = value;
      option.value = value;
      loaixe.add(option);
    });

  }
</script>
