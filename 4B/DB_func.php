<?php

class Database
{
   protected $host = 'localhost';
   protected $user = 'root';
   protected $pass = 'root';
   protected $dbnm = 'perpustakaan';

   public $con;

   function __construct()
   {
      $this->con = new mysqli($this->host, $this->user, $this->pass, $this->dbnm);
   }
}

class Books extends Database
{
   function getAllBooks()
   {
      $sql = "SELECT books.id AS book_id, books.name AS book_name, stock, categories.id AS category_id, categories.name AS category_name, description FROM books join categories on books.category_id = categories.id;";
      return $this->con->query($sql);
   }

   function getBooksByCategory($cat_id)
   {
      $sql = "SELECT books.name as book_name, image, stock FROM books join categories on books.category_id = categories.id WHERE categories.id = $cat_id";
      return $this->con->query($sql);
   }

   function getAllCategory()
   {
      $sql = "SELECT * FROM categories";
      return $this->con->query($sql);
   }

   function storeBook($name, $stock, $image, $decription, $category_id)
   {
      $sql = "INSERT INTO books (name, stock, image, description, category_id) 
        VALUE ('$name', '$stock', '$image', '$decription', '$category_id');";

      $this->con->query($sql);
      header('Location: manage_data.php');
   }

   function storeCategory($name)
   {
      $sql = "INSERT INTO categories (name) VALUE ('$name')";
      $this->con->query($sql);
      header('Location: manage_data.php');
   }

   function updateBook($id, $name, $stock, $image, $decription, $category_id)
   {
      $sql = "UPDATE books SET name='$name', stock='$stock', image='$image', description='$decription', category_id='$category_id' WHERE id = '$id'";

      $this->con->query($sql);
      header('Location: manage_data.php');
   }

   function updateCategory($id, $name)
   {
      $sql = "UPDATE categories SET name='$name' WHERE id = '$id'";

      $this->con->query($sql);
      header('Location: manage_data.php');
   }


   function destroyBook($id)
   {
      $sql = "DELETE FROM books WHERE id = $id";
      $this->con->query($sql);
      header('Location: manage_data.php');
   }

   function destroyCategory($id)
   {
      $sql = "DELETE FROM categories WHERE id = $id";
      $this->con->query($sql);
      header('Location: manage_data.php');
   }
}

$books = new Books();

if (isset($_GET['func'])) {
   switch (htmlspecialchars($_GET['func'])) {
      case 'createBook':
         if (isset($_POST['addproduct'])) {
            $bookname = $_POST['name'];
            $stock = $_POST['stock'];
            $category = $_POST['category'];
            $desc = $_POST['desc'];
            $image = $_FILES["image"]["name"];

            $path = "img/Books/";
            $path = $path . basename($_FILES['image']['name']);
            if (move_uploaded_file($_FILES['image']['tmp_name'], $path)) {
               $books->storeBook($bookname, $stock, $image, $desc, $category);
            } else echo "error";
         }
         break;

      case 'createCategory':
         if (isset($_POST['addcategory'])) {
            $name = $_POST['newcat'];

            $books->storeCategory($name);
         }
         break;

      case 'updateBook':
         if (isset($_POST['editproduct'])) {
            $id = $_POST['editproduct'];
            $bookname = $_POST['name'];
            $stock = $_POST['stock'];
            $category = $_POST['category'];
            $desc = $_POST['desc'];
            $image = $_FILES["image"]["name"];

            $path = "img/Books/";
            $path = $path . basename($_FILES['image']['name']);
            if (move_uploaded_file($_FILES['image']['tmp_name'], $path)) {
               $books->updateBook($id, $bookname, $stock, $image, $desc, $category);
            } else echo "error";
         }
         break;

      case 'updateCat':
         if (isset($_POST['editcat'])) {
            $id = $_POST['editcat'];
            $name = $_POST['catname'];
            // var_dump($id, $name);
            $books->updateCategory($id, $name);
         }
         break;

      case 'deleteData':
         if (isset($_POST['deleteproduct'])) {
            $id = $_POST['deleteproduct'];

            if ($_POST['tipe'] == 'category') {
               $books->destroyCategory($id);
            } else {
               $books->destroyBook($id);
            }
         }
         break;
   }
}
