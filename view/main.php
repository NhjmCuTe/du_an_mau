<main class="catalog  mb ">

   <div class="boxleft">
      <div class="banner">
         <img id="banner" src="./img/anh0.jpg" alt="">
         <button class="pre" onclick="pre()">&#10094;</button>
         <button class="next" onclick="next()">&#10095;</button>
      </div>

      <div class="items">
         <?php foreach ($sanpham_new as $values):;
            extract($values);
            $anh = $img_path . $img;

         ?>
            <div class="box_items">
               <div class="box_items_img">
                  <img src="<?= $anh ?>" alt="">
                  <div class="add" href="">ADD TO CART</div>
               </div>
               <a class="item_name" href="index.php?act=ctsanpham&idsp=<?=$id?>"><?= $name ?></a>
               <p class="price">$<?= $price ?></p>
            </div>
         <?php endforeach ?>
         <!-- <div class="box_items">
            <div class="box_items_img">
               <img src="img/iphoneX.jpg" alt="">
               <div class="add" href="">ADD TO CART</div>
            </div>
            <a class="item_name" href="">SamSung J4</a>
            <p class="price">$4000</p>

         </div>
         <div class="box_items">
            <div class="box_items_img">
               <img src="img/iphoneX.jpg" alt="">
               <div class="add" href="">ADD TO CART</div>
            </div>
            <a class="item_name" href="">SamSung J4</a>
            <p class="price">$4000</p>

         </div>
         <div class="box_items">
            <div class="box_items_img">
               <img src="./img/item1.jpg" alt="">
               <div class="add" href="">ADD TO CART</div>
            </div>
            <a class="item_name" href="">SamSung J4</a>
            <p class="price">$4000</p>

         </div>
         <div class="box_items">
            <div class="box_items_img">
               <img src="./img/item0.jfif" alt="">
               <div class="add" href="">ADD TO CART</div>
            </div>
            <a class="item_name" href="">SamSung J4</a>
            <p class="price">$4000</p>

         </div>
         <div class="box_items">
            <div class="box_items_img">
               <img src="./img/galaxyJ4.jfif" alt="">
               <div class="add" href="">ADD TO CART</div>
            </div>
            <a class="item_name" href="">SamSung J4</a>
            <p class="price">$4000</p>

         </div>
         <div class="box_items">
            <div class="box_items_img">
               <img src="./img/iphoneX.jpg" alt="">
               <a class="add" href="">ADD TO CART</a>
            </div>
            <a class="item_name" href="">SamSung J4</a>
            <p class="price">$4000</p>

         </div>
         <div class="box_items">
            <div class="box_items_img">
               <img src="./img/item0.jfif" alt="">
               <div class="add" href="">ADD TO CART</div>
            </div>
            <a class="item_name" href="">SamSung J4</a>
            <p class="price">$4000</p>

         </div>
         <div class="box_items">
            <div class="box_items_img">
               <img src="./img/anh5.jpg" alt="">
               <div class="add"><a href="danhsach.html">ADD TO CART</a></div>
            </div>
            <a class="item_name" href="">SamSung J4</a>
            <p class="price">$4000</p>

         </div> -->



      </div>
   </div>
   <?php include "view/box_right.php"; ?>
</main>
<!-- BANNER 2 -->