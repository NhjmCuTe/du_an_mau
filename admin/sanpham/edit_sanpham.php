<div class="row2">

    <div class="row2 font_title">
        <h1>SỬA HÀNG HÓA</h1>
    </div>
    <div class="row2 form_content ">
        <form action="index.php?act=edit_sanpham" method="POST" enctype="multipart/form-data">
            <div class="row2 mb10 form_content_container">
                <label> Mã sản phẩm </label> <br>
                <?php if (isset($load_1_sanpham)) {
                    extract($load_1_sanpham);
                }
                ?>
                <input type="text" placeholder="Tự động" value="<?= isset($id) ? $id : $id = '' ?>" disabled>
                <input type="hidden" name="idsp" value="<?= isset($id) ? $id : $id = '' ?>">
            </div>
            <div class="row2 mb10">

                <label>Tên sản phẩm </label> <br>
                <input type="text" name="tensanpham" placeholder="nhập vào tên" value="<?= isset($name) ? $name : $name = '' ?>">
                <label>Giá</label> <br>
                <input type="text" name="gia" value="<?= isset($price) ? $price : $price = '' ?>">
                <label>Ảnh </label> <br>
                <input type="file" name="img">
                <input type="hidden" name="img" value="<?= isset($img) ? $img : $img = '' ?>">
                <img src="../<?= $img_path ?><?= isset($img) ? $img : $img = '' ?>" width="200px" alt="">
                <label>Mô tả </label> <br>
                <input type="text" name="mota" placeholder="nhập vào tên" value="<?= isset($mota) ? $mota : $mota = '' ?>">
                <label>Danh mục </label> <br>
                <select name="iddm" id="">
                    <option value="">Chọn dạnh mục</option>
                    <?php foreach ($all_danhmuc as $values) : ?>
                        <option value="<?= $values['id'] ?>" <?= isset($iddm) && $values['id'] == $iddm ? 'selected' : '' ?>><?= $values['name'] ?></option>
                    <?php endforeach ?>

                </select>
            </div>
            <div class="row mb10 ">
                <input class="mr20" type="submit" name="editsanpham" value="SỬA">
                <input class="mr20" type="reset" value="NHẬP LẠI">

                <a href="index.php?act=san_pham"><input class="mr20" type="button" value="DANH SÁCH"></a>
                <?= isset($thong_bao_san_pham) ? $thong_bao_san_pham : '' ?>
            </div>
        </form>
    </div>
</div>