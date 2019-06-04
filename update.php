<?php

  $pageTitle = 'Dollaby - Update';
  include 'init.php';

  $id=$_GET['id'];
  // $_POST['itemID'] = $id;
  include $tp1.'header.php';
  include $cl.'items.php';
  $obj = new items;
  $item=$obj->getResult($id);


 ?>

 <!-- Start Founder -->
 <div class="fouder">
   <!-- Start Body -->
   <div class="container">
     <div class="content">
       <div class="head text-center">
           <h2>Item Details</h2>
       </div>
       <div class="form">
         <form class="post" action="confirmEdit.php?id=<?php echo $id?>" method="post">
           <div class="form-group">
             <label>Model</label>
             <input class="form-control" type="text" name="model" autofocus required value="<?php echo $item['model']?>">
           </div>
           <div class="form-group">
             <label>Categories</label>
             <input list="categories" name="category" class="form-control" required value="<?php echo $item['category']?>">
             <datalist id="categories">
               <option value="Devices">
               <option value="Wallets">
               <option value="Books">
               <option value="Accessories">
               <option value="Personal Belongs">
             </datalist>
           </div>
           <div class="form-group">
             <label>Brand</label>
             <input class="form-control" type="text" name="brand"  required value="<?php echo $item['brand']?>">
           </div>
           <div class="form-group">
             <label>Price</label>
             <input class="form-control" type="number" name="price"  required value="<?php echo $item['price']?>">
           </div>
           <div class="form-group">
             <label for="description">Description</label>
             <textarea name="description" class="form-control" rows="5" required><?php echo $item['description']?></textarea>
           </div>
           <div class="d-flex file">
             <label for="photo">Item Photo</label>
             <div class="imageNext d-flex">
               <input type="file" name="image" value="<?php echo $item['imagePath']?>" id="imgInp" required>
               <div class="image">
                 <img id='blah' src="design/images/profiles/<?php echo $item['imagePath']?>" alt="">
               </div>
             </div>

           </div>
           <input type="submit" name="submit" value="Edit Now" class="btn second-back">
         </form>
       </div>
     </div>
   </div>
   <!-- End Body -->
 </div>
 <!-- End Header -->
 <?php include $tp1.'footer.php'; ?>
