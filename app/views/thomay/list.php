<div class="pb-4">
</div>
<div class="card border-0 shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-centered table-nowrap mb-0 rounded">
                <thead class="thead-light">
                    <tr>
                        <th>Mã phiếu</th>
                        <th>Mã nhân viên</th>
                        <th>Mã khách hàng</th>
                        <th>Tên khách hàng</th>
                        <th>Biển số</th>
                        <th>Số điện thoại</th>
                        <th>Sữa chữa</th>
                        <th>Bảo dưỡng</th>
                        <th>Nâng cấp</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($phieubaoduong as $key => $value) {
                        echo '<tr class="">';
                        echo "<td>" . $value['id'] . "</td>";
                        echo "<td>" . $value['idnv'] . "</td>";
                        echo "<td>" . $value['idkh'] . "</td>";
                        echo "<td>" . $value['ten'] . "</td>";
                        echo "<td>" . $value['bienso'] . "</td>";
                        echo "<td>" . $value['sdt'] . "</td>";
                        echo "<td>" . $value['suachua'] . "</td>";
                        echo "<td>" . $value['baoduong'] . "</td>";
                        echo "<td>" . $value['nangcap'] . "</td>";
                        echo '<td><button class="btn btn-gray-800 mx-1 animate-up-2 edit" value="' . $value['id'] . '"><a style="color:white;" href="'._WEB_ROOT.'/lap-phieu-tiep-nhan-xe/'.$value['id'].'">Tiếp nhận</a></button></td>';
                        echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>