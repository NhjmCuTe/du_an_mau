<div class="row2">
    <div class="row mb10 form_content">
        <input class="mr20" type="button" value="CHỌN TẤT CẢ">
        <input class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
        <a href="index.php?act=them_sanpham"> <input class="mr20" type="button" value="NHẬP THÊM"></a>
    </div>
    <div class="row2 font_title">
        <form action="index.php?act=san_pham" method="post">
            <select name="iddm" id="">
                <option value="">Tất cả</option>
                <?php foreach ($all_danhmuc as $values) : extract($values) ?>
                    <option value="<?= $id ?>"><?= $name ?></option>
                <?php endforeach ?>
            </select>
            <input type="text" name="tukhoa" id="" placeholder="Nhập tên sản phẩm">
            <input type="submit" value="Tìm">
        </form>
        <h1>DANH SÁCH HÀNG HÓA</h1>
    </div>
    <div class="row2 form_content ">
        <form action="#" method="POST">
            <div class="row2 mb10 formds_loai">
                <table>
                    <tr>
                        <th></th>
                        <th>MÃ SẢN PHẨM</th>
                        <th>TÊN SẢN PHẨM</th>
                        <th>GIÁ</th>
                        <th>HÌNH ẢNH</th>
                        <th>MÔ TẢ</th>
                        <th>DANH MỤC</th>
                        <th>LƯỢT XEM</th>

                        <th></th>
                    </tr>
                    <?php foreach ($all_sanpham as $values) : extract($values) ?>
                        <tr>

                            <td><input type="checkbox" name="" id=""></td>
                            <td><?= $id ?></td>
                            <td><?= $name ?></td>
                            <td><?= $price ?></td>
                            <td><img src="../<?= $img_path . $img ?>" alt="" width="100px"></td>
                            <td><?= $mota ?></td>
                            <td><?= $namedm ?></td>
                            <td><?= $luotxem ?></td>

                            <td><a href="index.php?act=edit_sanpham&idsp_edit=<?= $id ?>" onclick="return confirm('bạn có chắc là muốn sửa')"><input type="button" value="Sửa"></a>
                                <a href="index.php?act=san_pham&idsp_xoa=<?= $id ?>" onclick="return confirm('bạn có chắc là muốn xóa')"><input type="button" value="Xóa"></a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                    <!-- <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>001</td>
                        <td>Đồng hồ</td>
                        <td><input type="button" value="Sửa"> <input type="button" value="Xóa"></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>001</td>
                        <td>Đồng hồ</td>
                        <td><input type="button" value="Sửa"> <input type="button" value="Xóa"></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>001</td>
                        <td>Đồng hồ</td>
                        <td><input type="button" value="Sửa"> <input type="button" value="Xóa"></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>001</td>
                        <td>Đồng hồ</td>
                        <td><input type="button" value="Sửa"> <input type="button" value="Xóa"></td>
                    </tr> -->


                </table>
            </div>
            <div class="row mb10 ">
                <input class="mr20" type="button" value="CHỌN TẤT CẢ">
                <input class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
                <a href="index.php?act=them_sanpham"> <input class="mr20" type="button" value="NHẬP THÊM"></a>
            </div>
        </form>
    </div>
</div>