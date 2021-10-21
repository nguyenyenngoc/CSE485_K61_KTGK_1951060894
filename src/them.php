<?php 
$conn = mysqli_connect('localhost', 'root', '', 'hienmau');
if (!$conn) {
    die("Kết nối thất bại  .Kiểm tra lại các tham số    khai báo kết nối");
}

    if(isset($_POST['them'])) {
        $fullName = $_POST['fullName'];
        $tuoi = $_POST['tuoi'];
        $nhommau = $_POST['nhommau'];
        $slcannhanmau = $_POST['slcannhanmau'];
        $gioitinh = $_POST['gioitinh'];
        $ngaydk = $_POST['ngaydk'];
        $sdt = $_POST['sdt'];

        $sql_insert = "INSERT into blood_recipient ( reci_name, reci_age, reci_bgrp, reci_bqnty, reci_sex, reci_reg_date, reci_phno)
            values (' $fullName', '$tuoi','$nhommau','$slcannhanmau','$gioitinh','$ngaydk', '$sdt')";
            
        mysqli_query($conn,$sql_insert);
        header('location: index.php');

    }
?>

    <?php
        include('header.php');
    ?>
    <div class="container">
        <form class="mt-4" method="POST" action="">
            <div class="mb-3">
                <label for="fullName" class="form-label">Họ và Tên</label>
                <input type="text" name="fullName" class="form-control" id="fullName" >
            </div>
            <div class="mb-3">
                <label for="tuoi" class="form-label">Tuổi </label>
                <input type="text" name="tuoi" class="form-control" id="tuoi" >
            </div>
            <div class="mb-3">
                <label for="nhommau" class="form-label">Nhóm máu</label>
                <input type="text" name="nhommau" class="form-control" id="nhommau" >
            </div>
            <div class="mb-3">
                <label for="slcannhanmau" class="form-label">Số lượng cần nhận máu</label>
                <input type="text" name="slcannhanmau" class="form-control" id="slcannhanmau" >
            </div>
            <div class="mb-3">
                <label for="gioitinh" class="form-label">Giới tính</label>
                <input type="text" name="gioitinh" class="form-control" id="gioitinh" >
            </div>
            <div class="mb-3">
                <label for="ngaydk" class="form-label">Ngày đăng kí nhận máu </label>
                <input type="date" name="ngaydk" class="form-control" id="ngaydk" >
            </div>
            <div class="mb-3">
                <label for="sdt" class="form-label">SĐT</label>
                <input type="text" name="sdt" class="form-control" id="sdt">
            </div>
            <button type="submit" class="btn btn-primary mt-3 mb-4" name="them">Thêm</button>
        </form>
    </div>
<?php 
include('./footer.php');
?>
