<div class="pb-4">
    <button class="btn btn-secondary d-inline-flex align-items-center me-2 " data-bs-toggle="modal" data-bs-target="#add">
        <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
        </svg>
        Thêm nhân viên
    </button>
</div>
<div class="card border-0 shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-centered table-nowrap mb-0 rounded">
                <thead class="thead-light">
                    <tr>
                        <th>ID</th>
                        <th>Họ</th>
                        <th>Tên</th>
                        <th>Giới tính</th>
                        <th>Chức vụ</th>
                        <th>Tùy chọn</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($stafflist as $key => $value) {
                        echo '<tr class="">';
                        echo "<td>" . $value['MaNhanVien'] . "</td>";
                        echo "<td>" . $value['Ho'] . "</td>";
                        echo "<td>" . $value['Ten'] . "</td>";
                        echo "<td>" . $value['GioiTinh'] . "</td>";
                        echo "<td>" . $value['ChucVu'] . "</td>";
                        echo '<td><button class="btn btn-gray-800 mx-1 animate-up-2 edit" value="' . $value['MaNhanVien'] . '" data-bs-toggle="modal" data-bs-target="#edit">Sửa</button><button class="btn btn-danger animate-up-2 delete" value="' . $value['MaNhanVien'] . '"data-bs-toggle="modal" data-bs-target="#delete">Xóa</button></td>';
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Modal sửa nhân viên -->
<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="modal-form-signup" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card p-3 p-lg-4">
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center text-md-center mb-4 mt-md-0">
                        <h1 class="mb-0 h4">Sửa nhân viên</h1>
                    </div>
                    <form action="<?php echo _WEB_ROOT ?>/sua-nhan-vien" method="post" class="mt-4">
                        <!-- Form -->
                        <div class="form-group mb-4">
                            <label for="idnhanvien">Mã nhân viên</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="idnhanvien-edit" name="id" autofocus="" readonly>
                            </div>
                        </div>
                        <!-- End of Form -->
                        <div class="form-group">
                            <!-- Form -->
                            <div class="form-group mb-4">
                                <label for="ho">Họ nhân viên</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="ho" name="ho" required>
                                </div>
                            </div>
                            <!-- End of Form -->
                            <!-- Form -->
                            <div class="form-group mb-4">
                                <label for="ten">Tên nhân viên</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="ten" name="ten" required>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="gioitinh">Giới tính</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="gioitinh" name="gioitinh" required>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="chucvu">Chức vụ</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="chucvu" name="chucvu" required>
                                </div>
                            </div>
                            <!-- End of Form -->
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-gray-800">Sửa</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Thêm nhân viên -->
<div class="modal fade" id="add" tabindex="-1" aria-labelledby="modal-form-signup" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card p-3 p-lg-4">
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center text-md-center mb-4 mt-md-0">
                        <h1 class="mb-0 h4">Thêm nhân viên</h1>
                    </div>
                    <form action="<?php echo _WEB_ROOT ?>/them-nhan-vien" method="post" class="mt-4">
                        <!-- Form -->
                        <div class="form-group">
                            <!-- Form -->
                            <div class="form-group mb-4">
                                <label for="ho">Họ nhân viên</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="ho" name="ho" required>
                                </div>
                            </div>
                            <!-- End of Form -->
                            <!-- Form -->
                            <div class="form-group mb-4">
                                <label for="ten">Tên nhân viên</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="ten" name="ten" required>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="gioitinh">Giới tính</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="gioitinh" name="gioitinh" required>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="chucvu">Chức vụ</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="chucvu" name="chucvu" required>
                                </div>
                            </div>
                            <!-- End of Form -->
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-gray-800">Sửa</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Xóa nhân viên -->
<div class="modal fade" id="delete" tabindex="-1" aria-labelledby="modal-form-signup" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card p-3 p-lg-4">
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center text-md-center mb-4 mt-md-0">
                        <h1 class="mb-0 h4">Xóa nhân viên</h1>
                    </div>
                    <form action="<?php echo _WEB_ROOT ?>/xoa-nhan-vien" method="post" class="mt-4">
                        <!-- Form -->
                        <div class="form-group mb-4">
                            <label for="idnhanvien">Mã nhân viên</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="idnhanvien-delete" name="id" autofocus="" readonly>
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
        element.onclick = function(){
            idnhanvien_edit.value = element.value;
        }
    });
    
    btn_delete.forEach(element => {
        element.onclick = function(){
            idnhanvien_delete.value = element.value;
        }
    });
</script>