<div class="row2">
    
    <div class="row2 font_title">
        <h1>THÊM MỚI TÀI KHOẢN</h1>
    </div>
    <div class="row2 form_content ">
        <form action="index.php?act=them_taikhoan" method="POST" enctype="multipart/form-data">
            <div class="row2 mb10 form_content_container">
                <label> Mã khách hàng </label> <br>
                
                <input type="text" disabled  placeholder="Tự động">
            </div>
            <div class="row2 mb10">
                <label>Họ và tên </label> <br>
                <input type="text" name="ten" placeholder="nhập vào tên" required >
                <label>Số điện thoại </label> <br>
                <input type="text" name="sdt" placeholder="nhập vào số điện thoại"required >
                <label>Tên đăng nhập </label> <br>
                <input type="text" name="user" placeholder="nhập vào user" required >
                <label>Mật khẩu </label> <br>
                <input type="text" name="pass" placeholder="nhập vào mật khẩu"required >
                <label>Xác nhận mật khẩu </label> <br>
                <input type="text" name="" placeholder="nhập lại mật khẩu"required >
                <label>Địa chỉ email </label> <br>
                <input type="text" name="email" placeholder="nhập vào email" required>
                <label>Địa chỉ </label> <br>
                <input type="text" name="diachi" placeholder="nhập vào địa chỉ"required >
                <label>Hình ảnh </label> <br>
                <input type="file" name="anh" required>
                <label>Vai trò</label> <br>
                <input type="radio" name="vaitro" id="" checked value="0">Khách hàng
                <input type="radio" name="vaitro" id="" value="1">Quản trị
            </div>
            <div class="row mb10 ">
                <input class="mr20" type="submit" name="themtaikhoan" value="THÊM MỚI">
                <input class="mr20" type="reset" value="NHẬP LẠI">

                <a href="index.php?act=tai_khoan"><input class="mr20" type="button" value="DANH SÁCH"></a>
                <h4 style="color: green;"><?= isset($thong_bao_tai_khoan) ? $thong_bao_tai_khoan : '' ?></h4>
                <h4 style="color: red;"><?= isset($thong_bao_tai_khoan_that_bai) ? $thong_bao_tai_khoan_that_bai : '' ?></h4>
            </div>
        </form>
    </div>
</div>