<div class="pb-4">
</div>
<div class="card border-0 shadow mb-4">
    <div class="card-body">
        <div class="row mb-4">
            <div class="col-lg-4 col-sm-6">
                <div class="mb-4">
                    <label for="text">Mã phiếu yêu cầu</label>
                    <input type="text" class="form-control" id="text" placeholder="Chưa có thông tin" value="<?php if (isset($list[0]['MaPhieuTiepNhan'])) echo $list[0]['MaPhieuTiepNhan'] ?>" required readonly>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-lg-4 col-sm-6">
                <div class="mb-4">
                    <label for="text">Mã phiếu yêu cầu</label>
                    <input type="text" class="form-control" id="text" placeholder="Chưa có thông tin" value="<?php if (isset($list[0]['MaPhieuTiepNhan'])) echo $list[0]['MaPhieuTiepNhan'] ?>" required readonly>
                </div>
            </div>
        </div>
        
        <div class="mb-4 mt-4">
              <button class="btn btn-primary animate-up-2"  name="MaLichDat" id="submitBtn"><a style="color:white" href="<?php echo _WEB_ROOT?>/xac-nhan/<?php echo $list[0]['MaPhieuTiepNhan'] ?>">Xác nhận đã xuất kho</a></button>
            </div>
    </div>
</div>