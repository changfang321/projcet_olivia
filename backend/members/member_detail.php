<?php require('../../connection/connection.php'); ?>
<?php 

if(isset($_POST['EditForm']) && $_POST['EditForm'] == "UPDATE"){
  $sql= " UPDATE members SET  
  account=:account,
  password=:password,
  name=:name,
  phone=:phone,
  mobile=:mobile,
  birthday=:birthday,
  gender=:gender,
  email=:email,
  zipcode=:zipcode,
  county=:county,
  district=:district,
  address=:address,
  vip=:vip,
  money=:money,
  created_at=:created_at,
  updated_at=:updated_at    WHERE  members_id=:members_id" ;



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
  $sth ->bindParam(":updated_at", $_POST['updated_at'], PDO::PARAM_STR);
  $sth ->bindParam(":members_id", $_POST['members_id'], PDO::PARAM_INT);
  $sth ->execute();

  header('Location: list.php');

  
} else {

  $query = $db->query("SELECT * FROM members WHERE members_id =".$_GET['members_id']);
  $members = $query->fetch(PDO::FETCH_ASSOC);

} ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="../css/theme.css" type="text/css"> </head>
 

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
            <li class="breadcrumb-item">會員管理</li>
            <li class="breadcrumb-item active">編輯</li>
          </ul>
          <a href="list.php" class="btn btn-outline-primary m-2">回上一頁</a>
        </div>
      </div>
   
      <div class="row">
        <div class="col-md-12">
          <form class="" action="edit.php" method="post" data-toggle="validator">
          <div class="form-group form-row">
              <label class="col-sm-2 col-form-label">帳號</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="account" value="<?php echo $members['account']; ?>"  data-error="請修改帳號" required>
                <div class="help-block with-errors" alert-danger></div>
                </div>
            </div>
            <div class="form-group form-row">
              <label class="col-sm-2 col-form-label">密碼</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="password" value="<?php echo $members['password']; ?>" data-error="請修改密碼" required>
                <div class="help-block with-errors" alert-danger></div>
                </div>
            </div>
            <div class="form-group form-row">
              <label class="col-sm-2 col-form-label">姓名</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="name" value="<?php echo $members['name']; ?>" data-error="請修改姓名" required>
                <div class="help-block with-errors" alert-danger></div>
                </div>
            </div>
            <div class="form-group form-row">
              <label class="col-sm-2 col-form-label">市內電話</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="phone" value="<?php echo $members['phone']; ?>" > </div>
            </div>
            <div class="form-group form-row">
              <label class="col-sm-2 col-form-label">手機號碼</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="mobile" value="<?php echo $members['mobile']; ?>" data-error="請修改手機號碼" required>
                <div class="help-block with-errors" alert-danger></div>
                </div>
            </div>
            <div class="form-group form-row">
              <label class="col-sm-2 col-form-label">生日</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="birthday" value="<?php echo $members['birthday']; ?>" data-error="請修改生日" required>
                <div class="help-block with-errors" alert-danger></div>
                </div>
            </div>
            <div class="form-group form-row">
              <label class="col-sm-2 col-form-label">性別</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="gender" value="<?php echo $members['gender']; ?>" data-error="請修改性別" required>
                <div class="help-block with-errors" alert-danger></div>
                </div>
            </div>
            <div class="form-group form-row">
              <label class="col-sm-2 col-form-label">信箱</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="email" value="<?php echo $members['email']; ?>" > </div>
            </div>
            <div class="form-group form-row">
              <label class="col-sm-2 col-form-label">郵遞區號</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="zipcode" value="<?php echo $members['zipcode']; ?>" > </div>
            </div>
            <div class="form-group form-row">
              <label class="col-sm-2 col-form-label">城市</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="county" value="<?php echo $members['county']; ?>" data-error="請修改城市" required>
                <div class="help-block with-errors" alert-danger></div>
                </div>
            </div>
            <div class="form-group form-row">
              <label class="col-sm-2 col-form-label">區域</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="district" value="<?php echo $members['district']; ?>" data-error="請改區域" required>
                <div class="help-block with-errors" alert-danger></div>
                </div>
            </div>
            <div class="form-group form-row">
              <label class="col-sm-2 col-form-label">地址</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="address" value="<?php echo $members['address']; ?>" data-error="請修改地址" required>
                <div class="help-block with-errors" alert-danger></div>
                </div>
            </div>
            <div class="form-group form-row">
              <label class="col-sm-2 col-form-label">會員</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="vip" value="<?php echo $members['vip']; ?>" data-error="請修改會員等級" required>
                <div class="help-block with-errors" alert-danger></div>
                </div>
            </div>
            <div class="form-group form-row">
              <label class="col-sm-2 col-form-label">金額</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="money" value="<?php echo $members['money']; ?>" > </div>
            </div>
            <div class="form-group form-row">
              <label class="col-sm-2 col-form-label">新增日期</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="created_at"value="<?php echo $members['created_at']; ?>" > </div>
            </div>
            <div class="form-group form-row">
              <label class="col-sm-2 col-form-label">更新日期</label>
              <div class="col-sm-10">
                <textarea row="8" class="form-control" name="updated_at"value="<?php echo $members['updated_at']; ?>"  ></textarea>
              </div>
            </div>
            <div class="col-md-12 text-right">
              <input type="reset" class="btn btn-primary" value="取消">
              <button type="submit" class="btn btn-primary">確認送出</button>
              <input type="hidden" name="members_id" value="<?php echo $members['members_id']; ?>">
              <input type="hidden" name="updated_at" value=" <?php echo date('Y-m-d H:i:s'); ?> ">
              <input type="hidden" name="EditForm" value="UPDATE">
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