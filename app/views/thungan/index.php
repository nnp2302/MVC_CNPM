<div class="pb-4">
</div>
<div class="card border-0 shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-centered table-nowrap mb-0 rounded">
                <thead class="thead-light">
                    <tr>
                        <th>Mã hóa đơn</th>
                        <th>Mã phiếu tiếp nhận xe</th>
                        <th>Tổng tiền</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($hoadon as $key => $value) {
                        echo '<tr class="">';
                        echo "<td>" . $value['MaHoaDon'] . "</td>";
                        echo "<td>" . $value['MaPhieuTiepNhanXe'] . "</td>";
                        echo "<td>" . $value['TongTien'] . "</td>";
                        echo '<td><button class="btn btn-gray-800 mx-1 animate-up-2 edit" value="' . $value['MaHoaDon'] . '"><a style="color:white;" href="'._WEB_ROOT.'/xac-nhan-hoa-don/'.$value['MaHoaDon'].'">Xử lí thanh toán</a></button></td>';
                        echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>