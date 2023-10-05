<div class="row2">
    
    <div class="row2 font_title">
        <h1>THÊM MỚI TÀI KHOẢN</h1>
    </div>
    <div class="row2 form_content ">
        <form action="index.php?act=them_danh_muc" method="POST" enctype="multipart/form-data">
            <div class="row2 mb10 form_content_container">
                <label> Mã khách hàng </label> <br>
                <?php  if(isset($load_1_danhmuc)){
                    extract($load_1_danhmuc);
                }
                 ?>
                <input type="text" disabled name="iddm" placeholder="Tự động" value="<?= isset($id)?$id:$id='' ?>">
            </div>
            <div class="row2 mb10">
                <label>Họ và tên </label> <br>
                <input type="text" name="tendanhmuc" placeholder="nhập vào tên" value="<?= isset($name)?$name: $name='' ?>">
                <label>Số điện thoại </label> <br>
                <input type="text" name="tendanhmuc" placeholder="nhập vào tên" value="<?= isset($name)?$name: $name='' ?>">
                <label>Mật khẩu </label> <br>
                <input type="text" name="tendanhmuc" placeholder="nhập vào tên" value="<?= isset($name)?$name: $name='' ?>">
                <label>Xác nhận mật khẩu </label> <br>
                <input type="text" name="tendanhmuc" placeholder="nhập vào tên" value="<?= isset($name)?$name: $name='' ?>">
                <label>Địa chỉ email </label> <br>
                <input type="text" name="tendanhmuc" placeholder="nhập vào tên" value="<?= isset($name)?$name: $name='' ?>">
                <label>Địa chỉ </label> <br>
                <input type="text" name="tendanhmuc" placeholder="nhập vào tên" value="<?= isset($name)?$name: $name='' ?>">
                <label>Hình ảnh </label> <br>
                <input type="file" name="tendanhmuc" value="<?= isset($name)?$name: $name='' ?>">
                <label>Vai trò</label> <br>
                <input type="radio" name="vaitro" id="" checked>Khách hàng
                <input type="radio" name="vaitro" id="">Quản trị
            </div>
            <div class="row mb10 ">
                <input class="mr20" type="submit" name="themdanhmuc" value="THÊM MỚI">
                <input class="mr20" type="reset" value="NHẬP LẠI">

                <a href="index.php?act=tai_khoan"><input class="mr20" type="button" value="DANH SÁCH"></a>
            </div>
        </form>
    </div>
</div>