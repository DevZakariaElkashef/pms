<?php 

include '../App/config.php';
include '../inc/header.php'; 
include '../App/categories/getCategories.php';


$id = $_GET['id'];
$product = Database::fetchOne('products', $id);

// echo $id;
// die;

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
            <form action="../App/products/editproduct.php" method="post">
              <div class="mb-4">
                <div class="form-group">
                  <label for="category_id">Category</label>
                  <select id="category_id" class="form-control" name="category_id">
                  <?php while($category = mysqli_fetch_array($result)) : ?>
                      <option 
                        value="<?= $category['id'] ?>"
                        <?php 
                        if($product['category_id'] == $category['id'])
                        echo 'selected'
                        ?>
                        > <?= $category['NAME'] ?> </option>
                    <?php endwhile; ?>
                  </select>
                </div>
              </div>
              <div class="mb-4">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" value="<?= $product['NAME'] ?? '' ?>">
              </div>
              <div class="mb-4">
                <label for="name">price</label>
                <input type="text" class="form-control" name="price" value="<?= $product['price'] ?? '' ?>">
              </div>
              <input type="hidden" name="id" value="<?= $product['id'] ?>">
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