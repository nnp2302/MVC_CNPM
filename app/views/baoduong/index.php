<div class="row">
  <div class="col-12 mb-4">
    <div class="card border-0 shadow components-section">
      <div class="card-body">
          <!-- Form-->
          <div class="row mb-4">
            <div class="col-lg-4 col-sm-6">
              <div class="mb-4">
                <label for="text">Tên khách hàng</label>
                <input type="text" class="form-control" id="text" placeholder="Chưa có thông tin" value="<?php if(isset($search['Ten'])) echo $search['Ten'] ?>" required readonly>
              </div>
              <div class="mb-4">
                <label for="text">Số điện thoại</label>
                <input type="text" class="form-control" id="text" maxlength="10" placeholder="Chưa có thông tin" value="<?php if(isset($search['SDT'])) echo $search['SDT'] ?>" required readonly>
              </div>
              <div class="mb-4">
                <label for="date">Đặt lịch vào ngày</label>
                <input type="date" class="form-control" id="text" aria-describedby="emailHelp" value="<?php if(isset($search['NgayDat'])) echo $search['NgayDat'] ?>" required readonly>
              </div>
              <div class="mb-4">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Chưa có thông tin" value="<?php if(isset($search['Email'])) echo $search['Email'] ?>" readonly>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6">
              <div class="mb-4">
                <label for="text">Loại xe</label>
                <input type="text" class="form-control" id="text" placeholder="Chưa có thông tin" value="<?php if(isset($search['LoaiXe'])) echo $search['LoaiXe'] ?>" required readonly>
              </div>
              <div class="mb-4">
                <label for="text">Hãng xe</label>
                <input type="text" class="form-control" id="text" placeholder="Chưa có thông tin"value="<?php if(isset($search['HangXe'])) echo $search['HangXe'] ?>" required readonly>
              </div>
              <div class="mb-4">
                <label for="text">Biển số xe</label>
                <input type="text" class="form-control" id="text" placeholder="Chưa có thông tin" value="<?php if(isset($search['BienSo'])) echo $search['BienSo'] ?>" required readonly>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <!-- Checkboxes -->
              <div class="mb-3">
                <span class="h6 fw-bold">Nhu cầu</span>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="defaultCheck10" <?php if(!empty($search['SuaChua'])) echo 'checked' ?> onClick="return false">
                <label class="form-check-label" for="defaultCheck10">
                  Sửa chữa
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="defaultCheck20"<?php if(!empty($search['BaoDuong'])) echo 'checked' ?> onClick="return false">
                <label class="form-check-label" for="defaultCheck20">
                  Bảo dưỡng
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="defaultCheck20"<?php if(!empty($search['NangCap'])) echo 'checked' ?> onClick="return false">
                <label class="form-check-label" for="defaultCheck20">
                  Nâng cấp phụ tùng
                </label>
              </div>
            </div>
            <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <label for="checkName">Dịch vụ sử dụng</label>
                            <select class="form-select mb-0" id="LoaiDichVu">
                                <!--</option>-->
                                <option value="DV00000001">Dịch vụ 1</option>
                                <option value="DV00000002">Dịch vụ 2</option>
                                <option value="DV00000003">Dịch vụ 3</option>
                                <option value="DV00000004">Dịch vụ 4</option>
                                <option value="DV00000005">Dịch vụ 5</option>
                                <option value="DV00000006">Dịch vụ 6</option>
                                <option value="DV00000007">Dịch vụ 7</option>
                                <option value="DV00000008">Dịch vụ 8</option>
                                <option value="DV00000009">Dịch vụ 9</option>
                                <option value="DV00000010">Dịch vụ 10</option>
                            </select>
                        </div>
                        <div class="col-lg-4 col-sm-6 d-flex align-items-center">
                            <div>
                                <div class="btn btn-primary" id="addButton">Thêm</div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-centered table-nowrap mb-0 rounded" id="table">
                                    <thead class="thead-light">
                                        <tr>
                                            <th class="border-0 rounded-start">#</th>
                                            <th class="border-0">Tên dịch vụ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
            <div class="my-4">
              <label for="ghichu">Ghi chú</label>
              <textarea class="form-control" placeholder="Ghi chú..." id="ghichu" rows="3" name="ghichu"></textarea>
            </div>
            <div class="mb-4">
              <button class="btn btn-primary animate-up-2"  name="MaLichDat" id="submitBtn">Lập phiếu bảo dưỡng</button>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    var i = 1;
    var addButton = document.getElementById("addButton");
    var dichvu = [];
    addButton.onclick = function() {
        let dv = {};
        var LoaiDichVu = document.getElementById("LoaiDichVu");
        //Thêm json tình trạng xe
        dv.MaDichVu =LoaiDichVu.value;
            var innerHtml = '<!-- Item -->' +
                '<tr>' +
                '<td>' + (i++) + '</td>' +
                '<td>' +
                LoaiDichVu.value +
                '</td>' +
                '</tr>' +
                '<!-- End of Item -->'
            var table = document.getElementById("table");
            table.innerHTML += innerHtml;
            var options = LoaiDichVu.querySelectorAll('option');
            options.forEach(element => {
                if (element.value == LoaiDichVu.value) {
                    element.disabled = true;
                    LoaiDichVu.value = null;
                }
            });
        //Thêm vào danh sách json
        dichvu.push(dv);
        console.log(dichvu);
    }
    document.getElementById("submitBtn").onclick = function(){
      thongtin = {};
      thongtin.MaLichDat=<?php if(isset($search['MaLichDat'])) echo $search['MaLichDat'] ?>;
      thongtin.GhiChu = document.getElementById('ghichu').value;
      $.ajax({
            url: "<?php echo _WEB_ROOT;?>/tao-phieu-bao-duong",
            method: "post",
            data: {
                dichvu: dichvu,
                thongtin: thongtin
            },
            success: function(res) {
                console.log(res);
            }
        });
    }
</script>