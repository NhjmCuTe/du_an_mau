<div class="row2">
    
    <div class="row2 font_title">
        <h1>DANH SÁCH LOẠI HÀNG HÓA</h1>
    </div>
    <div class="row2 form_content ">
        <form action="#" method="POST">
            <div class="row2 mb10 formds_loai">
                <table>
                    <tr>
                        <th></th>
                        <th>MÃ KHÁCH HÀNG</th>
                        <th>TÊN TÀI KHOẢN</th>
                        <th>MẬT KHẨU</th>
                        <th>EMAIL</th>
                        <th>HÌNH ẢNH</th>
                        <th>ĐỊA CHỈ</th>
                        <th>VAI TRÒ</th>
                        <th></th>
                    </tr>
                    <?php foreach ($all_taikhoan as $values) : extract($values)?>
                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td><?= $id ?></td>
                            <td><?= $user ?></td>
                            <td><?= $pass ?></td>
                            <td><?= $email ?></td>
                            <td></td>
                            <td><?= $address ?></td>
                            <td><?= $tel ?></td>
                            
                            <td><a href="index.php?act=them_danhmuc&iddm_edit=<?= $id ?>" onclick="return confirm('bạn có chắc là muốn sửa')"><input type="button" value="Sửa"></a>
                                <a href="index.php?act=danhmuc&iddm_xoa=<?= $id ?>" onclick="return confirm('bạn có chắc là muốn xóa')"><input type="button" value="Xóa"></a>
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
                <a href="index.php?act=them_taikhoan"> <input class="mr20" type="button" value="NHẬP THÊM"></a>
            </div>
        </form>
    </div>
</div>