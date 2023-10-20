<div class="row2">

    <div class="row2 font_title">
        <h1>THÊM MỚI LOẠI HÀNG HÓA</h1>
    </div>
    <div class="row2 form_content ">
        <form action="index.php?act=them_danhmuc" method="POST">
            <div class="row2 mb10 form_content_container">
                <label> Mã loại </label> <br>
               
                <input type="text" disabled placeholder="Tự động" >
            </div>
            <div class="row2 mb10">
                <label>Tên loại </label> <br>
                <input type="text" name="tendanhmuc" placeholder="nhập vào tên" required >
            </div>
            <div class="row mb10 ">
                <input class="mr20" type="submit" name="themdanhmuc" value="THÊM MỚI">
                <input class="mr20" type="reset" value="NHẬP LẠI">

                <a href="index.php?act=danhmuc"><input class="mr20" type="button" value="DANH SÁCH"></a>
                <h4 style="color: green;"><?= isset($thong_bao_danh_muc) ? $thong_bao_danh_muc : '' ?></h4>
                <h4 style="color: red;"><?= isset($thong_bao_danh_muc_that_bai) ? $thong_bao_danh_muc_that_bai : '' ?></h4>
            </div>
        </form>
    </div>
</div>