<?php 

include '../App/config.php';
include '../inc/header.php'; 
include '../App/db.php';

$id = $_GET['id'];
// validation number | 

// $query = "SELECT * FROM `categories` WHERE `id` = $id";

// $result = mysqli_query($conn, $query);

// $category = mysqli_fetch_assoc($result);

$category = Database::fetchOne('categories', $id);


?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Starter Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="container-fluid">
            <form action="../App/categories/editCategory.php" method="post">
              <div class="mb-4">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" value="<?= $category['NAME'] ?? '' ?>">
                <input type="hidden" class="form-control" name="id" value="<?= $category['id'] ?? '' ?>">
              </div>
              <div class="text-end mb-5">

                <button type="submit" class="btn btn-primary">submit</button>
              </div>
            </form>
          </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include '../inc/footer.php'; ?>