<?php
include('header.php');
?>

<div class="container mt-3">
   <?php
   if ($books->getAllCategory()->num_rows > 0) {
      foreach ($books->getAllCategory() as $cat) {
   ?>
         <div class="row mt-4">
            <h3><?= $cat['name'] ?></h3>
            <?php
            if ($books->getBooksByCategory($cat['id'])->num_rows > 0) {
               foreach ($books->getBooksByCategory($cat['id']) as $row) {
            ?>
                  <div class="col-md-3 my-3">
                     <div class="card">
                        <img src="img/Books/<?= $row['image'] ?>" class="card-img-top" style="height:380px;" alt="<?= $row['book_name'] ?>">
                        <div class="card-body">
                           <h5 class="card-title"><?= $row['book_name'] ?></h5>
                           <span>Stock : <?= $row['stock'] ?></span>
                           <div class="d-flex align-self-end justify-content-between">
                              <button class="btn btn-primary btn-pinjam" <?php if ($row['stock'] == 0) {
                                                                              echo 'disabled';
                                                                           } ?>>Pinjam</button>
                              <button class="btn btn-warning">Kembalikan</button>
                           </div>

                        </div>
                     </div>
                  </div>
            <?php
               }
            }
            ?>
         </div>
   <?php
      }
   }
   ?>
</div>

<?php
include('footer.php');
?>