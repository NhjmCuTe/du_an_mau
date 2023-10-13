<div class="row2">
    
    <div class="row2 font_title">
        <h1>THÔNG KÊ HÀNG HÓA TỪNG LOẠI</h1>
    </div>
    <div class="row2 form_content ">
        <form action="#" method="POST">
            <div class="row2 mb10 formds_loai">
                <table>
                    <tr>
                        <!-- <th></th> -->
                        <th>LOẠI HÀNG</th>
                        <th>SỐ LƯỢNG</th>
                        <th>GIÁ CAO NHẤT</th>
                        <th>GIÁ THẤP NHẤT</th>
                        <th>GIÁ TRUNG BÌNH</th>
                        <th></th>
                    </tr>
                    <?php foreach ($thongke_hanghoa_theo_loai as $values) : extract($values)?>
                        <tr>
                            <!-- <td><input type="checkbox" name="" id=""></td> -->
                            <td><?= $name ?></td>
                            <td><?= $so_luong ?></td>
                            <td>$<?= $gia_max ?></td>
                            <td>$<?= $gia_min ?></td>
                            <td>$<?= $gia_avg ?></td>
                            <!-- <td><a href="index.php?act=edit_danhmuc&iddm_edit=<?= $id ?>" onclick="return confirm('bạn có chắc là muốn sửa')"><input type="button" value="Sửa"></a>
                                <a href="index.php?act=danhmuc&iddm_xoa=<?= $id ?>" onclick="return confirm('bạn có chắc là muốn xóa')"><input type="button" value="Xóa"></a>
                            </td> -->
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
                <!-- <input class="mr20" type="button" name="bieu_do" value="XEM BIỂU ĐỒ"> -->
                <!-- <input class="mr20" type="button" value="BỎ CHỌN TẤT CẢ"> -->
                <a href="index.php?act=bieu_do_hang_hoa"> <input class="mr20" type="button" value="XEM BIỂU ĐỒ"></a>
            </div>
        </form>
    </div>
</div>