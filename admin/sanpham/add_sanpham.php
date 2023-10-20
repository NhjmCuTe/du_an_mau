<div class="row2">

    <div class="row2 font_title">
        <h1>THÊM MỚI HÀNG HÓA</h1>
    </div>
    <div class="row2 form_content ">
        <form action="index.php?act=them_sanpham" method="POST" enctype="multipart/form-data">
            <div class="row2 mb10 form_content_container">
                <label> Mã sản phẩm </label> <br>
                
                <input type="text" placeholder="Tự động" disabled>
            </div>
            <div class="row2 mb10">

                <label>Tên sản phẩm </label> <br>
                <input type="text" name="tensanpham" placeholder="nhập vào tên" required>
                <label>Giá</label> <br>
                <input type="text" name="gia" required>
                <label>Ảnh </label> <br>
                <input type="file" name="img" required>
                <label>Mô tả </label> <br>
                <input type="text" name="mota" placeholder="nhập vào tên" required>
                <label>Danh mục </label> <br>
                <select name="iddm" id="">
       
                    <?php foreach ($all_danhmuc as $values) : ?>
                        <option value="<?= $values['id'] ?>" <?= isset($iddm) && $values['id'] == $iddm ? 'selected' : '' ?>><?= $values['name'] ?></option>
                    <?php endforeach ?>

                </select>
            </div>
            <div class="row mb10 ">
                <input class="mr20" type="submit" name="themsanpham" value="THÊM MỚI">
                <input class="mr20" type="reset" value="NHẬP LẠI">

                <a href="index.php?act=san_pham"><input class="mr20" type="button" value="DANH SÁCH"></a>
                <?= isset($thong_bao_san_pham) ? $thong_bao_san_pham : '' ?>

            </div>
        </form>
    </div>
</div>