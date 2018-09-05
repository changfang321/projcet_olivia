<nav class="navbar navbar-expand-md bg-primary navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="../news/list.php">
        <img src="../../images/cherry-blossom-L.png" alt="" width=18%> Oivia House </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item :hover active">
            <a class="nav-link" href="../news/list.php"><i class="fa fa-lg fa-bullhorn" ></i>最新消息管理</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="../page/list.php"><i class="fa fa-lg fa-book" ></i>頁面管理</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="../product_categories/list.php"><i class="fa fa-lg fa-shopping-cart" ></i>產品管理</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="../members/list.php"><i class="fa fa-lg fa-address-book" ></i>會員管理</a>
          </li>
          <li class="nav-item dropdown active" >
            <a class="nav-link dropdown-toggle btn btn-outline-primary-nav" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-briefcase fa-lg" ></i>訂單管理 </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="../customer_orders/list.php?status=0">未付款</a>
              <a class="dropdown-item" href="../customer_orders/list.php?status=1">已付款</a>
              <a class="dropdown-item" href="../customer_orders/list.php?status=2">已出貨</a>
              <a class="dropdown-item" href="../customer_orders/list.php?status=3">已送達</a>
              <a class="dropdown-item" href="../customer_orders/list.php?status=99">取消訂單</a>
            </div>
          </li>
        </ul>
        <a class="btn navbar-btn ml-2 text-white btn-secondary" href ="../logout.php">
          <i class="fa d-inline fa-lg fa-user-circle-o"></i>&nbsp;登出</a>
      </div>
    </div>
  </nav>