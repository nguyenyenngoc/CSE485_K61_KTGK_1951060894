<?php 
$conn = mysqli_connect('localhost', 'root', '', 'hienmau');
if (!$conn) {
    die("Kết nối thất bại  .Kiểm tra lại các tham số    khai báo kết nối");
}

    if(isset($_POST['sua'])) {
        $fullName = $_POST['fullName'];
        $tuoi = $_POST['tuoi'];
        $nhommau = $_POST['nhommau'];
        $slcannhanmau = $_POST['slcannhanmau'];
        $gioitinh = $_POST['gioitinh'];
        $ngaydk = $_POST['ngaydk'];
        $sdt = $_POST['sdt'];
        $id = $_POST['id'];

        $sql_update = "UPDATE  blood_recipient set reci_name = '$fullName', reci_age = '$tuoi', reci_bgrp ='$nhommau', reci_bqnty = '$slcannhanmau',
                        reci_sex ='$gioitinh', reci_reg_date = '$ngaydk', reci_phno = '$sdt' 
                        set reci_id = '$id' ";
            
        mysqli_query($conn, $sql_update);
        header('location: index.php');

    }
?>

    <?php
        include('header.php');
    ?>
    <div class="container">
        <?php 
            $conn = mysqli_connect('localhost', 'root', '', 'hienmau');
            if (!$conn) {
                die("Kết nối thất bại  .Kiểm tra lại các tham số    khai báo kết nối");
            }
            
            $id = $_GET['reci_id'];
            $sql = "SELECT * from blood_recipient where reci_id = $id";

            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            
        ?>
        <form class="mt-4" method="POST" action="">
            <div class="mb-3">
                <label for="fullName" class="form-label">Họ và Tên</label>
                <input type="text" name="fullName" class="form-control" id="fullName" value="<?php echo $row['reci_name'] ?>">
            </div>
            <div class="mb-3">
                <label for="tuoi" class="form-label">Tuổi </label>
                <input type="text" name="tuoi" class="form-control" id="tuoi" value="<?php echo $row['reci_age'] ?>" >
            </div>
            <div class="mb-3">
                <label for="nhommau" class="form-label">Nhóm máu</label>
                <input type="text" name="nhommau" class="form-control" id="nhommau" value="<?php echo $row['reci_bgrp'] ?>">
            </div>
            <div class="mb-3">
                <label for="slcannhanmau" class="form-label">Số lượng cần nhận máu</label>
                <input type="text" name="slcannhanmau" class="form-control" id="slcannhanmau" value="<?php echo $row['reci_bqnty'] ?>">
            </div>
            <div class="mb-3">
                <label for="gioitinh" class="form-label">Giới tính</label>
                <input type="text" name="gioitinh" class="form-control" id="gioitinh" value="<?php echo $row['reci_sex'] ?>" >
            </div>
            <div class="mb-3">
                <label for="ngaydk" class="form-label">Ngày đăng kí nhận máu </label>
                <input type="date" name="ngaydk" class="form-control" id="ngaydk" value="<?php echo $row['reci_reg_date'] ?>" >
            </div>
            <div class="mb-3">
                <label for="sdt" class="form-label">SĐT</label>
                <input type="text" name="sdt" class="form-control" id="sdt" value="<?php echo $row['reci_phno'] ?>">
            </div>
            <input type="hidden" value="<?php echo  $id; ?>" name="id">
            <button type="submit" class="btn btn-primary mt-3 mb-4" name="sua">Lưu  </button>
        </form>
        <?php }
            }
        ?>
    </div>
<?php 
include('./footer.php');
?>