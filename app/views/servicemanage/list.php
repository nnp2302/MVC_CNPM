<div class="pb-4">
    <button class="btn btn-secondary d-inline-flex align-items-center me-2 " data-bs-toggle="modal" data-bs-target="#add">
        <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
        </svg>
        Thêm dịch vụ
    </button>
</div>
<div class="card border-0 shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-centered table-nowrap mb-0 rounded">
                <thead class="thead-light">
                    <tr>
                        <th>Mã dịch vụ</th>
                        <th>Tên dịch vụ</th>
                        <th>Giá</th>
                        <th>Tùy chọn</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($servicelist as $key => $value) {
                        echo '<tr class="">';
                        echo "<td>" . $value['MaDichVu'] . "</td>";
                        echo "<td>" . $value['TenDichVu'] . "</td>";
                        echo "<td>" . $value['Gia'] . "</td>";
                        echo '<td><button class="btn btn-gray-800 mx-1 animate-up-2 edit" value="' . $value['MaDichVu'] . '" data-bs-toggle="modal" data-bs-target="#edit">Sửa</button><button class="btn btn-danger animate-up-2 delete" value="' . $value['MaDichVu'] . '"data-bs-toggle="modal" data-bs-target="#delete">Xóa</button></td>';
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Modal them dịch vụ -->
<div class="modal fade" id="add" tabindex="-1" aria-labelledby="modal-form-signup" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card p-3 p-lg-4">
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center text-md-center mb-4 mt-md-0">
                        <h1 class="mb-0 h4">Thêm dịch vụ</h1>
                    </div>
                    <form action="<?php echo _WEB_ROOT ?>/them-dich-vu" method="post" class="mt-4">
                        <!-- End of Form -->
                        <!-- Form -->
                        <div class="form-group mb-4">
                            <label for="ten">Tên dịch vụ</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="ten" name="TenDichVu" required>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="gioitinh">Giá</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="gioitinh" name="Gia" required>
                            </div>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-gray-800">Thêm dịch vụ</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal sửa dịch vụ-->
<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="modal-form-signup" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card p-3 p-lg-4">
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center text-md-center mb-4 mt-md-0">
                        <h1 class="mb-0 h4">Sửa dịch vụ</h1>
                    </div>
                    <form action="<?php echo _WEB_ROOT ?>/sua-dich-vu" method="post" class="mt-4">
                        <!-- Form -->
                        <div class="form-group mb-4">
                            <label for="idnhanvien">Mã dịch vụ</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="idnhanvien-edit" name="MaDichVu" autofocus="" readonly>
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <label for="chucvu">Tên Dịch Vụ</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="chucvu" name="TenDichVu" required>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="gioitinh">Giá</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="gioitinh" name="Gia" required>
                            </div>
                        </div>
                        <!-- End of Form -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-gray-800">Sửa</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Xóa dịch vụ-->
<div class="modal fade" id="delete" tabindex="-1" aria-labelledby="modal-form-signup" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card p-3 p-lg-4">
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center text-md-center mb-4 mt-md-0">
                        <h1 class="mb-0 h4">Xóa dịch vụ</h1>
                    </div>
                    <form action="<?php echo _WEB_ROOT ?>/xoa-dich-vu" method="post" class="mt-4">
                        <!-- Form -->
                        <div class="form-group mb-4">
                            <label for="idnhanvien">Mã dịch vụ</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="idnhanvien-delete" name="MaDichVu" autofocus="" readonly>
                            </div>
                        </div>
                        <!-- End of Form -->
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-danger">Xóa</button>
                            <button class="btn" type="button" class="btn-close ms-auto btn-gray-200" data-bs-dismiss="modal" aria-label="Close">Hủy</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var btn_edit = document.querySelectorAll(".edit");
    var btn_delete = document.querySelectorAll(".delete");
    var idnhanvien_edit = document.getElementById('idnhanvien-edit');
    var idnhanvien_delete = document.getElementById('idnhanvien-delete');

    btn_edit.forEach(element => {
        element.onclick = function() {
            idnhanvien_edit.value = element.value;
        }
    });

    btn_delete.forEach(element => {
        element.onclick = function() {
            idnhanvien_delete.value = element.value;
        }
    });
</script>