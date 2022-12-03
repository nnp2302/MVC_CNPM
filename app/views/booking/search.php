<?php //var_dump($search); ?>
<div class="card border-0 shadow mb-4">
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-centered table-nowrap mb-0 rounded">
      <thead class="thead-light">
            <tr>
              <th>Tên khách hàng</th>
              <th>Số điện thoại</th>
              <th>Biển số xe</th>
              <th>Tên xe</th>
              <th>Thời gian đặt lịch</th>
              <th>Ngày</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($search as $key => $value) {
              echo "<tr>" ;
              echo "<td>".$value['ten']."</td>" ;
              echo "<td>".$value['sdt']."</td>" ;
              echo "<td>".$value['bienso']."</td>" ;
              echo "<td>".$value['tenxe']."</td>" ;
              echo "<td>".$value['thoigiandat']."</td>" ;
              echo "<td>".$value['ngay']."</td>" ;
              echo "</tr>" ;
            }            
            ?>
          </tbody>
      </table>
    </div>
  </div>
</div>