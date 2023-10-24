<main class="catalog  mb ">

  <div class="boxleft">
    <div class="  mb">
      <?php extract($sanpham_1);
      $hinh = $img_path . $img;
      ?>
      <div class="box_title"><?= $name ?></div>
      <div class="box_content">
        <img src="<?= $hinh ?>" width="400px" id="img">
        <p><?= $mota ?></p>
      </div>
    </div>

    <div class="mb">
      <div class="box_title">BÌNH LUẬN</div>
      <div class="box_content2  product_portfolio binhluan ">
        <table style="text-align: center;">
          <tr>
            <th>Nội dung</th>
            <th>Người bình luận</th>
            <th>Thời gian</th>
          </tr>
          <?php foreach ($binh_luan as $values) :;
            extract($values) ?>
            <tr>

              <td><?= $noidung ?></td>
              <td><?= $user ?></td>
              <td><?= $ngaybinhluan ?></td>

            <?php endforeach ?>
            </tr>
            
        </table>
      </div>
      <div class="box_search">
        <form action="index.php?act=ctsanpham&idsp=<?= $sanpham_1['id'] ?>" method="POST">
          <input type="hidden" name="idpro" value="<?= $sanpham_1['id']  ?>">
          <input type="text" name="noidung" id="binhluan">
          <input type="submit" name="guibinhluan" value="Gửi bình luận" onclick="return check_binh_luan()">
          <h4 style="color: red;" id="err"><?= isset($thong_bao_binh_luan) ? $thong_bao_binh_luan : '' ?></h4>
        </form>
        <script>
          function check_binh_luan() {
            var binhluan = document.getElementById('binhluan').value;
            var err = document.getElementById('err');

            if (binhluan == '') {
              err.innerText = "vui lòng nhập bình luận";

              return false;
            } else {
              err.innerText = "";

            }
          }
        </script>
      </div>

    </div>

    <div class=" mb">
      <div class="box_title">SẢN PHẨM CÙNG LOẠI</div>
      <div class="box_content">
        <?php foreach ($sp_cung_loai as $values) : ?>
          <li><a href="index.php?act=ctsanpham&idsp=<?= $values['id'] ?>"><?= $values['name'] ?></a></li>
        <?php endforeach ?>
    
      </div>
    </div>
  </div>
  <?php include "view/box_right.php" ?>
  
</main>