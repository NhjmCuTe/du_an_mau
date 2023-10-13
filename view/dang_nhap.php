<?php 
// var_dump($_SESSION);
if (!isset($_SESSION['user'])) : ?>
    <div class="box_content form_account">
        <form action="index.php?act=dang_nhap" method="POST">
            <h4>Tên đăng nhập </h4><br>
            <input type="text" name="user" id="">
            <h4>Mật khẩu</h4><br>
            <input type="password" name="pass" id=""><br>
            <input type="checkbox" name="" id="">Ghi nhớ tài khoản?
            <br><input type="submit" value="Đăng nhập" name="dangnhap"><br>
            <?= isset($thong_bao_dang_nhap) ? $thong_bao_dang_nhap : '' ?>
        </form>
        <li class="form_li"><a href="index.php?act=quenmatkhau">Quên mật khẩu</a></li>
        <li class="form_li"><a href="index.php?act=dangky">Đăng kí thành viên</a></li>

    </div>
<?php else : ?>
    <h4>Xin chào <?= isset($_SESSION['user'])?$_SESSION['user']['name']:'' ?></h4>
    <a href="index.php?act=dang_xuat">Đăng xuất</a><br>
    <a href="index.php?act=doi_mat_khau">Đổi mật khẩu</a><br>
    <a href="index.php?act=cap_nhat_tai_khoan&id=">Cập nhật tài khoản</a><br>
    <?php if(isset($_SESSION['user'])&&$_SESSION['user']['role']!=0){
        echo '<a href="admin">Quản trị</a>';
    } ?>
<?php endif ?>