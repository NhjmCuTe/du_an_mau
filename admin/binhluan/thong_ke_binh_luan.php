<div class="row2">
    
    <div class="row2 font_title">
        <h1>THÔNG KÊ BÌNH LUẬN</h1>
    </div>
    <div class="row2 form_content ">
        <form action="#" method="POST">
            <div class="row2 mb10 formds_loai">
                <table>
                    <tr>
                        <!-- <th></th> -->
                        <th>TÊN HÀNG</th>
                        <th>SỐ BÌNH LUẬN</th>
                        <th>MỚI NHẤT</th>
                        <th>CŨ NHẤT</th>
                        <th></th>
                    </tr>
                    <?php foreach ($thong_ke_binh_luan as $values) : extract($values)?>
                        <tr>
                            <!-- <td><input type="checkbox" name="" id=""></td> -->
                            <td><?= $name ?></td>
                            <td><?= $sl_binhluan ?></td>
                            <td><?= $moi_nhat ?></td>
                            <td><?= $cu_nhat ?></td>
                            <td><a href="index.php?act=chi_tiet_binh_luan&id_sp=<?= $id ?>" ><input type="button" value="Chi tiết"></a>
                                <!-- <a href="index.php?act=danhmuc&iddm_xoa=<?= $id ?>" onclick="return confirm('bạn có chắc là muốn xóa')"><input type="button" value="Xóa"></a> -->
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
            <!-- <div class="row mb10 ">
                <input class="mr20" type="button" value="CHỌN TẤT CẢ">
                <input class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
                <a href="index.php?act=them_danhmuc"> <input class="mr20" type="button" value="NHẬP THÊM"></a>
            </div> -->
        </form>
    </div>
</div>