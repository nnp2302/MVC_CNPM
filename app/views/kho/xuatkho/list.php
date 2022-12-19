<div class="pb-4">
</div>
<div class="card border-0 shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-centered table-nowrap mb-0 rounded">
                <thead class="thead-light">
                    <tr>
                        <th>Mã phiếu</th>
                        <th>Mã thợ máy</th>
                        <th>Mã phiếu bảo dưỡng</th>
                        <th>Tình trạng phụ tùng</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($list as $key => $value) {
                        echo '<tr class="">';
                        echo "<td>" . $value['MaPhieu'] . "</td>";
                        echo "<td>" . $value['MaThoMayNhanXe'] . "</td>";
                        echo "<td>" . $value['MaPhieuBaoDuong'] . "</td>";
                        echo "<td>" . $value['TinhTrangPhuTung'] . "</td>";
                        echo '<td><button class="btn btn-gray-800 mx-1 animate-up-2 edit" value="' . $value['MaPhieu'] . '"><a style="color:white;" href="'._WEB_ROOT.'/xuat-kho/'.$value['MaPhieu'].'">Xem yêu cầu</a></button></td>';
                        echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>