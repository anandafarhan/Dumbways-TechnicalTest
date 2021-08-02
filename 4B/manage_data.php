<?php
include('header.php');
?>
<div class="container mt-3">
   <div class="row">
      <h3>Manage Buku</h3>
      <div class="col">
         <button class="btn btn-success mt-3" data-bs-toggle="modal" data-bs-target="#modalCreate">Tambah Buku</button>
      </div>
   </div>
   <div class="row mt-4">
      <div class="col">
         <table id="bookDataTable" class="table table-bordered table-hover">
            <thead>
               <tr>
                  <th scope="col" style="width: 20px;">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Stock</th>
                  <th scope="col">Category</th>
                  <th scope="col" style="width: 80px;">Action</th>
               </tr>
            </thead>
            <tbody>
               <?php
               $x = 0;
               if ($books->getAllBooks()->num_rows > 0) {
                  foreach ($books->getAllBooks() as $row) {
               ?>
                     <tr>
                        <th class="text-center"><?php echo $x += 1 ?></th>
                        <td><?php echo $row['book_name']; ?></td>
                        <td><?php echo $row['stock']; ?></td>
                        <td><?php echo $row['category_name']; ?></td>
                        <td>
                           <div class="btn-group me-2 d-flex justify-content-center" role="group">
                              <button type="button" class="btn btn-sm btn-warning edit" data-id="<?= $row['book_id']; ?>" data-name="<?= $row['book_name']; ?>" data-stock="<?= $row['stock']; ?>" data-desc="<?= $row['description']; ?>"><i class="bi-pencil-square"></i></button>
                              <button type="button" class="btn btn-sm btn-danger del" data-id="<?= $row['book_id']; ?>" data-product="<?= $row['book_name']; ?>"><i class="bi-trash-fill"></i></button>
                           </div>
                        </td>
                     </tr>
               <?php
                  }
               }
               ?>
            </tbody>
         </table>
      </div>
   </div>
</div>

<hr>

<div class="container mt-3">
   <div class="row">
      <h3>Manage Kategori</h3>
      <div class="col">
         <button class="btn btn-success mt-3" data-bs-toggle="modal" data-bs-target="#categoryModal">Tambah Kategori</button>
      </div>
   </div>
   <div class="row mt-4">
      <div class="col">
         <table id="categoryDataTable" class="table table-bordered table-hover">
            <thead>
               <tr>
                  <th scope="col" style="width: 20px;">#</th>
                  <th scope="col">Name Kategori</th>
                  <th scope="col" style="width: 80px;">Action</th>
               </tr>
            </thead>
            <tbody>
               <?php
               $x = 0;
               if ($books->getAllCategory()->num_rows > 0) {
                  foreach ($books->getAllCategory() as $row) {
               ?>
                     <tr>
                        <th class="text-center"><?php echo $x += 1 ?></th>
                        <td><?php echo $row['name']; ?></td>
                        <td>
                           <div class="btn-group me-2 d-flex justify-content-center" role="group">
                              <button type="button" class="btn btn-sm btn-warning edit" data-id="<?= $row['book_id']; ?>" data-name="<?= $row['book_name']; ?>" data-stock="<?= $row['stock']; ?>" data-desc="<?= $row['description']; ?>"><i class="bi-pencil-square"></i></button>
                              <button type="button" class="btn btn-sm btn-danger del" data-tipe="category" data-id="<?= $row['id']; ?>" data-product="<?= $row['name']; ?>"><i class="bi-trash-fill"></i></button>
                           </div>
                        </td>
                     </tr>
               <?php
                  }
               }
               ?>
            </tbody>
         </table>
      </div>
   </div>
</div>

<!-- Create Book Modal Start -->
<div class="modal fade" id="modalCreate" data-bs-backdrop="static" tabindex="-1">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title">Add Book</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <form method="POST" action="DB_Func.php?func=createBook" enctype="multipart/form-data">
            <div class="modal-body">
               <div class="mb-3">
                  <label for="ProductName" class="form-label">Book Name</label>
                  <input type="text" class="form-control" name="name" required>
               </div>
               <div class="mb-3">
                  <label for="stock" class="form-label">Stock</label>
                  <input type="number" class="form-control" name="stock" required>
               </div>
               <div class="mb-3">
                  <label for="category" class="form-label">Category</label>
                  <select class="form-select" aria-label="Category" name="category">
                     <?php
                     if ($books->getAllCategory()->num_rows > 0) {
                        foreach ($books->getAllCategory() as $cat) {
                     ?>
                           <option value="<?= $cat['id']; ?>"><?= $cat['name']; ?></option>
                     <?php
                        }
                     }
                     ?>
                  </select>
               </div>
               <div class="mb-3">
                  <label for="cost" class="form-label">Description</label>
                  <textarea class="form-control" name="desc" rows="3" required></textarea>
               </div>
               <div class="mb-3">
                  <label for="formFile" class="form-label">Image</label>
                  <input class="form-control" type="file" name="image" id="formFile">
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
               <button type="submit" class="btn btn-primary" name="addproduct">Save</button>
            </div>
         </form>
      </div>
   </div>
</div>
<!-- Create Book Modal End -->

<!-- Category Modal Start -->
<div class="modal fade" id="categoryModal" tabindex="-1">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title">Add Category</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <form method="POST" action="DB_Func.php?func=createCategory">
            <div class="modal-body">
               <div class="mb-3">
                  <label for="addCategory" class="col-form-label">Category:</label>
                  <input type="text" class="form-control" id="addCategory" name="newcat" required>
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
               <button type="submit" class="btn btn-primary" name="addcategory">Save</button>
            </div>
         </form>
      </div>
   </div>
</div>
<!-- Category Modal End -->

<!-- Edit Book Modal Start -->
<div class="modal fade" id="editModal" data-bs-backdrop="static" tabindex="-1">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title">Add Book</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <form method="POST" action="DB_Func.php?func=updateBook" enctype="multipart/form-data">
            <div class="modal-body">
               <div class="mb-3">
                  <label for="ProductName" class="form-label">Book Name</label>
                  <input type="text" class="form-control" name="name" id="name" required>
               </div>
               <div class="mb-3">
                  <label for="stock" class="form-label">Stock</label>
                  <input type="number" class="form-control" name="stock" id="stock" required>
               </div>
               <div class="mb-3">
                  <label for="category" class="form-label">Category</label>
                  <select class="form-select" aria-label="Category" name="category">
                     <?php
                     if ($books->getAllCategory()->num_rows > 0) {
                        foreach ($books->getAllCategory() as $cat) {
                     ?>
                           <option value="<?= $cat['id']; ?>"><?= $cat['name']; ?></option>
                     <?php
                        }
                     }
                     ?>
                  </select>
               </div>
               <div class="mb-3">
                  <label for="cost" class="form-label">Description</label>
                  <textarea class="form-control" name="desc" id="desc" rows="3" required></textarea>
               </div>
               <div class="mb-3">
                  <label for="formFile" class="form-label">Image</label>
                  <input class="form-control" type="file" name="image" id="formFile">
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
               <button type="submit" class="btn btn-primary" id="edid" name="editproduct">Save</button>
            </div>
         </form>
      </div>
   </div>
</div>
<!-- Edit Book Modal End -->

<!-- Destroy Data Modal Start -->
<div class="modal fade" id="modalDelete" tabindex="-1">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title">Delete Confirmation</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <form method="POST" action="DB_Func.php?func=deleteData">
            <div class="modal-body">
               <p>Are you sure want to delete <strong id="product"></strong> ?</p>
               <input type="hidden" name="tipe" id="tipe">
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
               <button type="submit" class="btn btn-danger" id="delid" name="deleteproduct">Delete!</button>
            </div>
         </form>
      </div>
   </div>
</div>
<!-- Destroy Data Modal End -->
<?php
include('footer.php');
?>