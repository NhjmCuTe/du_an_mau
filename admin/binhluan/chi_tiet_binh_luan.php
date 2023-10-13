<div class="row2">
    
    <div class="row2 font_title">
        <h1>CHI TIẾT BÌNH LUẬN</h1>
    </div>
    <h2>HÀNG HÓA: <?=$chi_tiet_binh_luan[0]['name'] ?></h2>
    <div class="row2 form_content ">
        <form action="#" method="POST">
            <div class="row2 mb10 formds_loai">
                
                <table>
                    <tr>
                        <!-- <th></th> -->
                        <th>NỘI DUNG</th>
                        <th>NGÀY BÌNH LUÂN</th>
                        <th>NGƯỜI BÌNH LUẬN</th>
                        <th></th>
                    </tr>
                    <?php foreach ($chi_tiet_binh_luan as $values) : extract($values)?>
                        <tr>
                            <!-- <td><input type="checkbox" name="" id=""></td> -->
                            <td><?= $noidung ?></td>
                            <td><?= $ngaybinhluan ?></td>
                            <td><?= $user ?></td>
                            <td>
                                <!-- <a href="index.php?act=chi_tiet_binh_luan&id_sp=<?= $id ?>" ><input type="button" value="Chi tiết"></a> -->
                                <a href="index.php?act=chi_tiet_binh_luan&id_sp=<?= $idpro ?>&id_binhluan=<?= $id ?>" onclick="return confirm('bạn có chắc là muốn xóa')"><input type="button" value="Xóa"></a>
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