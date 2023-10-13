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
                <input type="text" name="ten" placeholder="nhập vào tên" >
                <label>Số điện thoại </label> <br>
                <input type="text" name="sdt" placeholder="nhập vào số điện thoại" >
                <label>Mật khẩu </label> <br>
                <input type="text" name="pass" placeholder="nhập vào mật khẩu" >
                <label>Xác nhận mật khẩu </label> <br>
                <input type="text" name="" placeholder="nhập lại mật khẩu" >
                <label>Địa chỉ email </label> <br>
                <input type="text" name="email" placeholder="nhập vào email" >
                <label>Địa chỉ </label> <br>
                <input type="text" name="diachi" placeholder="nhập vào địa chỉ" >
                <label>Hình ảnh </label> <br>
                <input type="file" name="anh">
                <label>Vai trò</label> <br>
                <input type="radio" name="vaitro" id="" checked value="0">Khách hàng
                <input type="radio" name="vaitro" id="" value="1">Quản trị
            </div>
            <div class="row mb10 ">
                <input class="mr20" type="submit" name="themtaikhoan" value="THÊM MỚI">
                <input class="mr20" type="reset" value="NHẬP LẠI">

                <a href="index.php?act=tai_khoan"><input class="mr20" type="button" value="DANH SÁCH"></a>
                <?= isset($thong_bao_tai_khoan) ? $thong_bao_tai_khoan : '' ?>
            </div>
        </form>
    </div>
</div>