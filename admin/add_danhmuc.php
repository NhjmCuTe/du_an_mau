<div class="row2">
    
    <div class="row2 font_title">
        <h1>THÊM MỚI LOẠI HÀNG HÓA</h1>
    </div>
    <div class="row2 form_content ">
        <form action="index.php?act=them_danh_muc" method="POST">
            <!-- <div class="row2 mb10 form_content_container">
                <label> Mã loại </label> <br> -->
                <?php  if(isset($load_1_danhmuc)){
                    extract($load_1_danhmuc);
                }
                 ?>
                <input type="text" name="iddm" placeholder="nhập vào mã loại" value="<?= isset($id)?$id:$id='' ?>">
            <!-- </div> -->
            <div class="row2 mb10">
                <label>Tên loại </label> <br>
                <input type="text" name="tendanhmuc" placeholder="nhập vào tên" value="<?= isset($name)?$name: $name='' ?>">
            </div>
            <div class="row mb10 ">
                <input class="mr20" type="submit" name="themdanhmuc" value="THÊM MỚI">
                <input class="mr20" type="reset" value="NHẬP LẠI">

                <a href="index.php?act=danhmuc"><input class="mr20" type="button" value="DANH SÁCH"></a>
            </div>
        </form>
    </div>
</div>