<div class="boxright">

  <div class="mb tai_khoan">
    <div class="box_title">TÀI KHOẢN</div>
    <?php include "view/dang_nhap.php" ?>
    
  </div>
  <div class="mb">
    <div class="box_title">DANH MỤC</div>
    <div class="box_content2 product_portfolio">
      <ul>
        <?php foreach ($danh_muc as $values) :
          extract($values);
        ?>
          <li><a href="index.php?act=loadsanphamcungdanhmuc&iddm=<?= $id ?>"><?= $name ?></a></li>
        <?php endforeach ?>
        
      </ul>
    </div>
    <div class="box_search">
      <form action="index.php?act=tim_kiem" method="post">
        <input type="text" name="tukhoa" id="" placeholder="Từ khóa tìm kiếm">
        <input type="submit" value="Tìm kiếm" name="timkiem">
      </form>
    </div>
  </div>
  <!-- DANH MỤC SẢN PHẨM BÁN CHẠY -->
  <div class="mb">
    <div class="box_title">SẢN PHẨM BÁN CHẠY</div>
    <div class="box_content">
      <?php foreach ($sanpham_ban_chay as $values) :
        extract($values);
        $hinh = $img_path . $img;
      ?>
        <div class="selling_products" style="width:100%;">
          <img src="<?= $hinh ?>" alt="anh">
          <a href="index.php?act=ctsanpham&idsp=<?= $id ?>"><?= $name ?></a>
        </div>
      <?php endforeach ?>
  
    </div>
  </div>
</div>
</div>