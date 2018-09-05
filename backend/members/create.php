<?php require('../../connection/connection.php'); ?>
<?php 
if(isset($_POST['AddForm']) && $_POST['AddForm'] == "INSERT"){
  $sql= "INSERT INTO members(account, password, name, phone, mobile, birthday, gender, email, zipcode, county, district, address, vip, money, created_at) VALUES(:account,:password,:name,:phone,:mobile,:birthday,:gender,:email,:zipcode,:county,:district,:address,:vip,:money,:created_at)";


  $sth = $db ->prepare($sql);
  $sth ->bindParam(":account", $_POST['account'], PDO::PARAM_STR);
  $sth ->bindParam(":password", $_POST['password'], PDO::PARAM_STR);
  $sth ->bindParam(":name", $_POST['name'], PDO::PARAM_STR);
  $sth ->bindParam(":phone", $_POST['phone'], PDO::PARAM_STR);
  $sth ->bindParam(":mobile", $_POST['mobile'], PDO::PARAM_STR);
  $sth ->bindParam(":birthday", $_POST['birthday'], PDO::PARAM_STR);
  $sth ->bindParam(":gender", $_POST['gender'], PDO::PARAM_STR);
  $sth ->bindParam(":email", $_POST['email'], PDO::PARAM_STR);
  $sth ->bindParam(":zipcode", $_POST['zipcode'], PDO::PARAM_STR);
  $sth ->bindParam(":county", $_POST['county'], PDO::PARAM_STR);
  $sth ->bindParam(":district", $_POST['district'], PDO::PARAM_STR);
  $sth ->bindParam(":address", $_POST['address'], PDO::PARAM_STR);
  $sth ->bindParam(":vip", $_POST['vip'], PDO::PARAM_STR);
  $sth ->bindParam(":money", $_POST['money'], PDO::PARAM_STR);
  $sth ->bindParam(":created_at", $_POST['created_at'], PDO::PARAM_STR);
  $sth ->execute();
  print_r($_POST['members']) ;

  header('Location: list.php');
}  ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="../css/theme.css" type="text/css">
  <script src="../../js/validator.js"></script>
</head>
  

<body>
<?php require_once('../function/backend_nav.php'); ?>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="">會員新增管理</h1>
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
            <li class="breadcrumb-item">最新消息管理</li>
            <li class="breadcrumb-item active">新增</li>
          </ul>
          <a href="list.php" class="btn btn-outline-primary m-2">回上一頁</a>
        </div>
      </div>
   
      <div class="row">
        <div class="col-md-12">
          <form class="" action="create.php" method="post" data-toggle="validator">

             <div class="form-group form-row">
              <label class="col-sm-2 col-form-label">姓名</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="name" data-error="請撰寫姓名" required>
                <div class="help-block with-errors alert-warning" ></div>
                </div>
            </div>
          <div class="form-group form-row">
              <label class="col-sm-2 col-form-label">帳號</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="account" data-error="請新增帳號" required>
                <div class="help-block with-errors  alert-warning" ></div>
                </div>
            </div>
            <div class="form-group form-row">
              <label class="col-sm-2 col-form-label">密碼</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="password" data-error="請新增密碼" required>
                <div class="help-block with-errors alert-warning" ></div>
                </div>
            </div>
            <div class="form-group form-row">
              <label class="col-sm-2 col-form-label">市內電話</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="phone" > </div>
            </div>
            <div class="form-group form-row">
              <label class="col-sm-2 col-form-label">手機號碼</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="mobile" data-error="請填寫手機號碼" required>
                <div class="help-block with-errors alert-warning"  ></div>
                </div>
            </div>
            <div class="form-group form-row">
              <label class="col-sm-2 col-form-label">生日</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="birthday" > </div>
            </div>
            <div class="form-group form-row">
              <label class="col-sm-2 col-form-label">性別</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="gender"> 
                </div>
            </div>
            <div class="form-group form-row">
              <label class="col-sm-2 col-form-label">信箱</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="email" data-error="請填寫mail" required>
                <div class="help-block with-errors alert-warning" ></div>
              </div>
            </div>
            <div class="form-group form-row">
              <label class="col-sm-2 col-form-label">郵遞區號</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="zipcode">
              </div>
            </div>
            <div class="form-group form-row">
              <label class="col-sm-2 col-form-label">城市</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="county">

                </div>
            </div>
            <div class="form-group form-row">
              <label class="col-sm-2 col-form-label">區域</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="district" >
                </div>
            </div>
            <div class="form-group form-row">
              <label class="col-sm-2 col-form-label">地址</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="address">
                </div>
            </div>
            <div class="form-group form-row">
              <label class="col-sm-2 col-form-label">會員</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="vip">
                </div>
            </div>
            <div class="form-group form-row">
              <label class="col-sm-2 col-form-label">購物金</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="money" > </div>
            </div>
            <div class="col-md-12 text-right">
              <input type="reset" class="btn btn-primary" value="取消並回上一頁">
              <button type="submit" class="btn btn-primary">確認送出</button>
              <input type="hidden" name="AddForm" value="INSERT">
              <input type="hidden" name="created_at" value=" <?php echo date('Y-m-d H'); ?> ">
            </div>
          </form>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12"> </div>
      </div>
    </div>
  </div>
  <div class="py-5 bg-olivia text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-3 text-center">
          <p>© Copyright 2018 MacroViz - All rights reserved.</p>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <pingendo onclick="window.open('https://pingendo.com/', '_blank')" style="cursor:pointer;position: fixed;bottom: 10px;right:10px;padding:4px;background-color: #00b0eb;border-radius: 8px; width:250px;display:flex;flex-direction:row;align-items:center;justify-content:center;font-size:14px;color:white">Made with Pingendo Free&nbsp;&nbsp;
    <img src="https://pingendo.com/site-assets/Pingendo_logo_big.png" class="d-block" alt="Pingendo logo" height="16">
    <script src="../../js/validator.js" ></script>  
  </pingendo>
</body>

</html>