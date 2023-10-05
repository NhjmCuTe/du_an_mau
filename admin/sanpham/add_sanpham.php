<div class="row2">

    <div class="row2 font_title">
        <h1>THÊM MỚI HÀNG HÓA</h1>
    </div>
    <div class="row2 form_content ">
        <form action="index.php?act=them_danh_muc" method="POST" enctype="multipart/form-data">
            <div class="row2 mb10 form_content_container">
                <label> Mã sản phẩm </label> <br>
                <?php if (isset($load_1_danhmuc)) {
                    extract($load_1_danhmuc);
                }
                ?>
                <input type="text" disabled name="iddm" placeholder="Tự động" value="<?= isset($id) ? $id : $id = '' ?>">
            </div>
            <div class="row2 mb10">
                <label>Tên sản phẩm </label> <br>
                <input type="text" name="tendanhmuc" placeholder="nhập vào tên" value="<?= isset($name) ? $name : $name = '' ?>">
                <label>Giá</label> <br>
                <input type="text" name="tendanhmuc" >
                <label>Ảnh </label> <br>
                <input type="file" name="tendanhmuc" placeholder="nhập vào tên" value="<?= isset($name) ? $name : $name = '' ?>">
                <label>Mô tả </label> <br>
                <input type="text" name="tendanhmuc" placeholder="nhập vào tên" value="<?= isset($name) ? $name : $name = '' ?>">
                <select name="iddm" id="">
                    <?php foreach ($all_danhmuc as $values) : ?>
                        <option value="<?= $values['id'] ?>"><?= $values['name'] ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="row mb10 ">
                <input class="mr20" type="submit" name="themdanhmuc" value="THÊM MỚI">
                <input class="mr20" type="reset" value="NHẬP LẠI">

                <a href="index.php?act=san_pham"><input class="mr20" type="button" value="DANH SÁCH"></a>
            </div>
        </form>
    </div>
</div>