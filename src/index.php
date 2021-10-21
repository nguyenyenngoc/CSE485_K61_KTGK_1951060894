<?php
    include('header.php');

?>

    <div class="container">
       <a href="./them.php"> <button class="btn btn-success">Thêm</button></a>
        <div class="table">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Mã người nhận máu</th>
                        <th scope="col">Họ và tên</th>
                        <th scope="col">Tuổi </th>
                        <th scope="col">Nhóm máu</th>
                        <th scope="col">Số lượng máu cần nhận </th>
                        <th scope="col">Giới tính </th>
                        <th scope="col">Ngày đăng kí nhận máu </th>
                        <th scope="col">SĐT </th>
                        <th scope="col">Sửa</th>
                        <th scope="col">Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require('./config.php');
                    $sql = "SELECT * from blood_recipient";

                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                            <tr>
                                <td><?php echo $row['reci_id']; ?></td>
                                <td><?php echo $row['reci_name']; ?></td>
                                <td><?php echo $row['reci_age']; ?></td>
                                <td><?php echo $row['reci_bgrp']; ?></td>
                                <td><?php echo $row['reci_bqnty']; ?></td>
                                <td><?php echo $row['reci_sex']; ?></td>
                                <td><?php echo $row['reci_reg_date']; ?></td>
                                <td><?php echo $row['reci_phno']; ?></td>

                                <td><a href="sua.php?reci_id=<?php echo $row['reci_id']; ?>"><button class="btn btn-primary">sửa</button></a></td>
                                <td><a href="xoa.php?reci_id=<?php echo $row['reci_id']; ?>"><button class="btn btn-danger">xóa</button></a></td>
                            </tr>
                    <?php
                        
                        }
                    }

                    ?>
                </tbody>
            </table>
        </div>
    </div>


<?php
    include('footer.php');

?>

