<div class="items">
   <?php foreach ($sanpham as $values) :;
      extract($values);
      $anh = $img_path . $img;

   ?>
      <div class="box_items">
         <div class="box_items_img">
            <img src="<?= $anh ?>" alt="">
            <div class="add" href="">ADD TO CART</div>
         </div>
         <a class="item_name" href="index.php?act=ctsanpham&idsp=<?= $id ?>"><?= $name ?></a>
         <p class="price">$<?= $price ?></p>
      </div>
   <?php endforeach ?>




</div>