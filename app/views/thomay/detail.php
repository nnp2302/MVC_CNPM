<div class="row mb-4">
    <div class="col-12">
        <div class="card border-0 shadow components-section">
            <div class="card-body">
                <!-- Form-->

                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="mb-4">
                                <label for="ten">Tên khách hàng</label>
                                <input type="text" class="form-control" id="text" value="<?php echo $phieubaoduong['Ten']?>" placeholder="Nguyễn Văn A" name="name" readonly>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="mb-4">
                                <label for="text">Loại xe</label>
                                <input type="text" class="form-control" id="text" value="<?php echo $phieubaoduong['LoaiXe']?>" placeholder="G63" name="car_type" readonly>
                            </div>
                            <div class="mb-4">
                                <label for="text">Hãng xe</label>
                                <input type="text" class="form-control" id="text" value="<?php echo $phieubaoduong['HangXe']?>" placeholder="Mercedes" name="brand" readonly>
                            </div>
                            <div class="mb-4">
                                <label for="text">Biển số xe</label>
                                <input type="text" class="form-control" id="bienso" value="<?php echo $phieubaoduong['BienSo']?>" placeholder="00-A0-00000" name="car_id" readonly>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <!-- Checkboxes -->
                            <div class="mb-3">
                                <span class="h6 fw-bold">Nhu cầu</span>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" onclick="return false;" <?php echo (!empty($phieubaoduong['SuaChua']))?'checked':'';?> id="defaultCheck10" name="fix">
                                <label class="form-check-label" for="defaultCheck10">
                                    Sửa chữa
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" onclick="return false;" <?php echo (!empty($phieubaoduong['BaoDuong']))?'checked':'';?> id="defaultCheck20" name="maintenance" disabled>
                                <label class="form-check-label" for="defaultCheck20">
                                    Bảo dưỡng
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" onclick="return false;" <?php echo (!empty($phieubaoduong['NangCap']))?'checked':'';?> id="defaultCheck20" name="upgrade" disabled>
                                <label class="form-check-label" for="defaultCheck20">
                                    Nâng cấp phụ tùng
                                </label>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="text">Ghi chú</label>
                            <input type="text" class="form-control" value="<?php echo $phieubaoduong['GhiChu']?>"  id="text" placeholder="Nội dung ghi chú..." name="car_id" readonly>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <label for="checkName">Đánh giá xe</label>
                            <select class="form-select mb-0" id="checkName">
                                <!--</option>-->
                                <option value="0">Lốp xe</option>
                                <option value="1">Kính</option>
                                <option value="2">Phanh xe</option>
                                <option value="3">Giảm chấn trước</option>
                                <option value="4">Đèn pha</option>
                                <option value="5">Mâm xe</option>
                                <option value="6">Dây cua-roa</option>
                                <option value="7">Hệ thống phun xăng</option>
                                <option value="8">Cần gạt nước</option>
                                <option value="9">Gioăng kính cửa sổ</option>
                                <option value="10">Giảm chấn sau</option>
                            </select>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="mb-4">
                                <label for="percent">Tình trạng</label>
                                <input type="number" class="form-control" id="percent" min=0 max=100 placeholder="Tình trạng theo phần trăm" name="car_type">
                            </div>
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
                                            <th class="border-0">Tên</th>
                                            <th class="border-0">Tình trạng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>


                            <div class="mb-4">
                                <button id="submitBtn" class="btn btn-primary">Nhận xe</button>
                            </div>

                            <p>Thợ tiếp nhận: <b><?php echo $_SESSION['user']['id']?></b> </p>
                            <!-- End Form-->
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
    var danhgia = [];

    var submitBtn = document.getElementById("submitBtn");
    submitBtn.onclick = function(){
        postJson();
    }
    addButton.onclick = function() {
        let json = {};
        var checkName = document.getElementById("checkName");
        var percent = document.getElementById("percent");
        var textCheckName = checkName.options[checkName.selectedIndex].text;
        //Thêm json tình trạng xe
        json.biensoxe = document.getElementById('bienso').value;
        json.noidung = textCheckName;
        json.tinhtrang = percent.value;
        json.thoigiandanhgia = Date.now();
        //
        if (percent.value != 0) {
            var innerHtml = '<!-- Item -->' +
                '<tr>' +
                '<td>' + (i++) + '</td>' +
                '<td>' +
                textCheckName +
                '</td>' +
                '<td>' +
                '<div class="row d-flex align-items-center">' +
                '<div class="col-12 col-xl-10 px-0 px-xl-1">' +
                percent.value + '%' +
                '<div class="progress progress-lg mb-0">' +
                '<div class="progress-bar bg-dark" role="progressbar" aria-valuenow="' + percent.value + '" aria-valuemin="0" aria-valuemax="100" style="width: ' + percent.value + '%;"></div>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '</td>' +
                '</tr>' +
                '<!-- End of Item -->'
            var table = document.getElementById("table");
            table.innerHTML += innerHtml;
            var options = checkName.querySelectorAll('option');
            options.forEach(element => {
                if (element.value == checkName.value) {
                    element.disabled = true;
                    checkName.value = null;
                }
            });
            percent.value = null;
        }
        //Thêm vào danh sách json
        danhgia.push(json);
        console.log(danhgia);
    }

    // Hàm POST Json 
    function postJson() {
        let thongtin = {};
        thongtin.MaPhieuBaoDuong = <?php echo $data['phieubaoduong']['MaPhieu'] ?>;
        $.ajax({
            url: "<?php echo _WEB_ROOT;?>/tao-phieu-tiep-nhan-xe",
            method: "post",
            data: {
                danhgia: danhgia,
                thongtin:thongtin
            },
            success: function(res) {
                console.log(res);
            }
        });
    }
</script>