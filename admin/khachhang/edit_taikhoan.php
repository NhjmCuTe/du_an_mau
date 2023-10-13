<div class="row2">

    <div class="row2 font_title">
        <h1>SỬA TÀI KHOẢN</h1>
    </div>
    <div class="row2 form_content ">
        <form action="index.php?act=edit_taikhoan" method="POST" enctype="multipart/form-data">
            <div class="row2 mb10 form_content_container">
                <label> Mã khách hàng </label> <br>
                <?php if (isset($load_1_taikhoan)) {
                    extract($load_1_taikhoan);
                } ?>
                <input type="text" disabled value="<?= isset($id) ? $id : '' ?>">
                <input type="hidden" name="id" value="<?= isset($id) ? $id : '' ?>">
            </div>
            <div class="row2 mb10">
                <label>Họ và tên </label> <br>
                <input type="text" name="ten" placeholder="nhập vào tên" value="<?= isset($user) ? $user : '' ?>">
                <label>Số điện thoại </label> <br>
                <input type="text" name="sdt" placeholder="nhập vào số điện thoại" value="<?= isset($tel) ? $tel : '' ?>">
                <label>Mật khẩu </label> <br>
                <input type="text" name="pass" placeholder="nhập vào mật khẩu" value="<?= isset($pass) ? $pass : '' ?>">
                <label>Xác nhận mật khẩu </label> <br>
                <input type="text" name="" placeholder="nhập lại mật khẩu" value="<?= isset($pass) ? $pass : '' ?>">
                <label>Địa chỉ email </label> <br>
                <input type="text" name="email" placeholder="nhập vào email" value="<?= isset($email) ? $email : '' ?>">
                <label>Địa chỉ </label> <br>
                <input type="text" name="diachi" placeholder="nhập vào địa chỉ" value="<?= isset($address) ? $address : '' ?>">
                <label>Hình ảnh </label> <br>
                <input type="file" name="anh">
                <input type="hidden" name="anh" value="<?= isset($img) ? $img : '' ?>">
                <img src=" ../<?= $img_path ?><?= isset($img) ? $img : '' ?>" width="100px" alt="">
                <label>Vai trò</label> <br>
                <input type="radio" name="vaitro" id="" <?= isset($role) && $role == 0 ? 'checked' : '' ?> value="0">Khách hàng
                <input type="radio" name="vaitro" id="" <?= isset($role) && $role == 1 ? 'checked' : '' ?> value="1">Quản trị
                <?= isset($thong_bao_vai_tro)?$thong_bao_vai_tro:''?>
            </div>
            <div class="row mb10 ">
                <input class="mr20" type="submit" name="edittaikhoan" value="SỬA">
                <input class="mr20" type="reset" value="NHẬP LẠI">

                <a href="index.php?act=tai_khoan"><input class="mr20" type="button" value="DANH SÁCH"></a>
                <?= isset($thong_bao_tai_khoan) ? $thong_bao_tai_khoan : '' ?>
            </div>
        </form>
    </div>
</div>