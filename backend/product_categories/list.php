<?php 
require_once('../function/login_check.php');
require('../../connection/connection.php');


$query = $db->query("SELECT * FROM product_categories ORDER BY product_categories_id ASC");
$data = $query->fetchAll(PDO::FETCH_ASSOC);

$totalRows = count($data);

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="../css/theme.css" type="text/css"> 
  
</head>

<body>
<?php require_once('../function/backend_nav.php'); ?>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="">產品分類管理</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-left">
          <ul class="breadcrumb" style="margin-bottom: 0px; margin-top: 0px;">
            <li class="breadcrumb-item">
              <a href="#">主控台</a>
            </li>
            <li class="breadcrumb-item active">產品分類管理</li>
          </ul>
          <a href="create.php" class="btn btn-outline-primary m-2">新增</a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
        <hr>
            <?php if($totalRows > 0){ ?>
          <table class="table">
            <thead>
              <tr>
                <th width="15%">類別圖片</th>
                <th>類別名稱</th>
                <th width="30%">操作</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($data as $category){  ?>
              <tr>
                <td><img src="../../uploads/category/<?php echo $category['picture'];  ?>"  width="200" alt=""></td>
                <td><?php echo $category['category']; ?></td>
                <td>
                  <a href="../products/list.php?product_categories_id=<?php echo $category['product_categories_id']; ?>" class="btn btn-outline-primary">產品管理</a>
                  <a href="edit.php?product_categories_id=<?php echo $category['product_categories_id']; ?>" class="btn btn-outline-primary">編輯</a>
                  <a href="delete.php?product_categories_id=<?php echo $category['product_categories_id']; ?>" class="btn btn-outline-primary" onclick="if(!confirm('是否確定刪除此筆資料?刪除後無法回復')){return false;};">刪除</a>
                </td>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
          <?php }else{ ?>
              <p>
                目前無資料，請新增一筆。
              </p>
              <?php } ?>
        </div>
      </div>
          </div>
  <div class="py-5 bg-olivia text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-3 text-center">
          <p>© Copyright 2018 Olivia_House - All rights reserved.</p>
        </div>
      </div>
    </div>
   </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>