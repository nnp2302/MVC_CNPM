<div class="pb-4">
</div>
<div class="card border-0 shadow mb-4">
    <form action="<?php echo _WEB_ROOT ?>/xac-nhan-thanh-toan" method="post">
        <div class="card-body">
        <div class="row mb-4">
            <div class="col-lg-4 col-sm-6">
                <div class="mb-4">
                    <label for="text">Mã hóa đơn</label>
                    <input type="text" class="form-control" name="MaHoaDon" id="text" placeholder="Chưa có thông tin" value="<?php if (isset($hoadon['MaHoaDon'])) echo $hoadon['MaHoaDon'] ?>" required readonly>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="mb-4">
                    <label for="text">Mã phiếu nhận xe</label>
                    <input type="text" class="form-control" id="text" placeholder="Chưa có thông tin" value="<?php if (isset($hoadon['MaPhieuTiepNhanXe'])) echo $hoadon['MaPhieuTiepNhanXe'] ?>" required readonly>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="mb-4">
                    <label for="text">Tổng tiền</label>
                    <input type="text" class="form-control" id="text" placeholder="Chưa có thông tin" value="<?php if (isset($hoadon['TongTien'])) echo $hoadon['TongTien'] ?>" required readonly>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="mb-4">
                    <label for="text">Phương thức thanh toán</label>
                    <select class="form-select mb-0" name="HinhThucThanhToan">
                        <option value="1">Tiền mặt</option>
                        <option value="2">Tài khoản ngân hàng</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="mb-4 mt-4">
              <button type="submit" class="btn btn-primary animate-up-2"  id="submitBtn">Xác nhận thanh toán</button>
            </div>
        </div>
    </form>
    
</div>