<?php 
include '../App/products/getproduct.php';
include '../App/config.php';
include '../inc/header.php';


?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="container-fluid">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Category</th> 
                <th scope="col">Name</th> 
                <th scope="col">Price</th> 
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1 ; ?>
                <?php while($product = mysqli_fetch_array($result)) : ?>
                  <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $product['category'] ?></td>
                    <td><?= $product['NAME'] ?></td>
                    <td><?= $product['price'] ?></td>
                    <td class="d-flex">
                        <a href="./edit.php?id=<?=$product['id']?>" class="btn btn-primary">Edit</a>
                        <a href="<?= APP_URL . '/App/products/delproduct.php?id=' . $product['id'] ?>" class="btn btn-danger">Delet</a>
                    </td>
                  </tr>
                <?php endwhile; ?>
            </tbody>
          </table>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include '../inc/footer.php'; ?>