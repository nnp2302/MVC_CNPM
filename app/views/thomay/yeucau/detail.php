<div class="row mb-4">
    <div class="col-12">
        <div class="card border-0 shadow components-section">
            <div class="card-body">
                <!-- Form-->

                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="mb-4">
                            <label for="ten">Mã phiếu tiếp nhận</label>
                            <input type="text" class="form-control" id="text" value="<?php echo $id ?>" placeholder="Nguyễn Văn A" name="name" readonly>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <label for="TenPhuTung">Yêu cầu phụ tùng</label>
                        <select class="form-select mb-0" id="TenPhuTung">
                            <!--</option>-->
                            <option value="PT00000001">Phụ tùng 1</option>
                            <option value="PT00000002">Phụ tùng 2</option>
                            <option value="PT00000003">Phụ tùng 3</option>
                            <option value="PT00000004">Phụ tùng 4</option>
                            <option value="PT00000005">Phụ tùng 5</option>
                            <option value="PT00000006">Phụ tùng 6</option>
                            <option value="PT00000007">Phụ tùng 7</option>
                            <option value="PT00000008">Phụ tùng 8</option>
                            <option value="PT00000009">Phụ tùng 9</option>
                            <option value="PT00000010">Phụ tùng 10</option>
                        </select>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="mb-4">
                            <label for="qty">Số lượng</label>
                            <input type="number" class="form-control" id="qty" min=1 placeholder="Số lượng phụ tùng" name="car_type">
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
                                        <th class="border-0">Tên phụ tùng</th>
                                        <th class="border-0">Số lượng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>


                        <div class="mb-4">
                            <button id="submitBtn" class="btn btn-primary">Yêu cầu</button>
                        </div>

                        <p>Thợ yêu cầu: <b><?php echo $_SESSION['user']['id'] ?></b> </p>
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
    var yeucau = [];

    var submitBtn = document.getElementById("submitBtn");
    submitBtn.onclick = function() {
        postJson();
    }
    addButton.onclick = function() {
        let json = {};
        var TenPhuTung = document.getElementById("TenPhuTung");
        var qty = document.getElementById("qty");
        var textTenPhuTung = TenPhuTung.options[TenPhuTung.selectedIndex].text;
        //Thêm json tình trạng xe
        json.maphieutiepnhan = <?php echo $id ?>;
        json.maphutung = TenPhuTung.value;
        json.soluong = qty.value;
        //
        if (qty.value > 0) {
            var innerHtml = '<!-- Item -->' +
                '<tr>' +
                '<td>' + (i++) + '</td>' +
                '<td>' +
                textTenPhuTung +
                '</td>' +
                '<td>' +
                '<div class="row d-flex align-items-center">' +
                '<div class="col-12 col-xl-10 px-0 px-xl-1">' +
                qty.value + '%' +
                '<div class="progress progress-lg mb-0">' +
                '<div class="progress-bar bg-dark" role="progressbar" aria-valuenow="' + qty.value + '" aria-valuemin="0" aria-valuemax="100" style="width: ' + qty.value + '%;"></div>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '</td>' +
                '</tr>' +
                '<!-- End of Item -->'
            var table = document.getElementById("table");
            table.innerHTML += innerHtml;
            var options = TenPhuTung.querySelectorAll('option');
            options.forEach(element => {
                if (element.value == TenPhuTung.value) {
                    element.disabled = true;
                    TenPhuTung.value = null;
                }
            });
            qty.value = null;
            
        //Thêm vào danh sách json
        yeucau.push(json);
        console.log(yeucau);    
        }
    }

    // Hàm POST Json 
    function postJson() {
        $.ajax({
            url: "<?php echo _WEB_ROOT; ?>/tao-phieu-yeu-cau-phu-tung",
            method: "post",
            data: {
                yeucau: yeucau
            },
            success: function(res) {
                console.log(res);
            }
        });
    }
</script>