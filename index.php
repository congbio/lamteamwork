
<?php
    require_once('model/connect.php');
    $prd = 0;
    if (isset($_SESSION['cart']))
    {
        $prd = count($_SESSION['cart']);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Fashion MyLiShop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Fashion MyLiShop - fashion mylishop"/>
    <meta name="description" content="Fashion MyLiShop - fashion mylishop" />
    <meta name="keywords" content="Fashion MyLiShop - fashion mylishop" />
    <meta name="author" content="Hôih My" />
    <meta name="author" content="Y Blir" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="icon" type="image/png" href="images/logohong.png">

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" type="text/css" href="admin/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'> -->

    <!-- customer js -->
    <script src='js/wow.js'></script>
    <script type="text/javascript" src="js/mylishop.js"></script>
    <!-- customer css -->
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
<style>
    img {
    width: 50%;
}
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
    <!-- button top -->
    <a href="view-cart.php" style="padding:20px;backgound:black;">xem giỏ hàng</a>
    <a href="#" class="back-to-top"><i class="fa fa-arrow-up"></i></a>



    <div class="main">

        <div class="container">
        	<div class="row">
            	<div class="col-md-12 col-sm-12 col-xs-12">
                	<div class="product-main">

                        <!-- sản phẩm mới -->
                    	<div class="title-product-main">
                        	<h3 class="section-title">Sản phẩm mới</h3>
                    	</div>
                        <div class="content-product-main">
                            <div class="row">
                                <?php
                                    $sql = "SELECT id,image,name,price FROM products WHERE category_id=3 AND status = 0";
                                    $result = mysqli_query($conn,$sql);

                                    while ($kq = mysqli_fetch_assoc($result)) {

                                ?>
                                        <div class="col-md-3 col-sm-6 text-center">
                                            <div class="thumbnail">
                                                <div class="hoverimage1">
                                                    <img src= "<?php echo $kq['image']; ?>" alt="Generic placeholder thumbnail" width="100%" height="300">
                                                </div>
                                                <div class="name-product">
                                                    <?php echo $kq['name']; ?>
                                                </div>
                                                <div class="price">
                                                    Giá: <?php echo $kq['price']; ?><sup> đ</sup>
                                                </div>
                                                <div class="product-info">
                                                    <a href="addcart.php?id=<?php echo $kq['id']; ?>">
                                                        <button type="button" class="btn btn-primary">
                                                            <label style="color: red;">&hearts;</label> Mua hàng  <label style="color: red;">&hearts;</label>
                                                        </button>
                                                    </a>
                                                    <a href="detail.php?id=<?php echo $kq['id']; ?>">
                                                        <button type="button" class="btn btn-primary">
                                                            <label style="color: red;">&hearts;</label> Chi Tiết <label style="color: red;">&hearts;</label>
                                                        </button>
                                                    </a>
                                                </div><!-- /product-info -->
                                            </div><!-- /thumbnail -->
                                        </div><!-- /col -->
                                    <?php } ?>
                            </div><!-- /row -->
                        </div><!-- /sản phẩm mới -->

                        <!-- Thời Trang Nam -->
                        <div class="title-product-main">
                            <h3 class="section-title">Thời Trang Nam</h3>
                        </div>
                        <div class="content-product-main">
                            <div class="row">
                                <?php
                                    $sql = "SELECT id,image,name,price FROM products WHERE category_id=1 LIMIT 8";
                                    $result = mysqli_query($conn,$sql);

                                    while ($kq = mysqli_fetch_assoc($result)) {

                                ?>
                                        <div class="col-md-3 col-sm-6 text-center">
                                            <div class="thumbnail">
                                                <div class="hoverimage1">
                                                    <img src= "<?php echo $kq['image']; ?>" alt="Generic placeholder thumbnail" width="100%" height="300">
                                                </div>
                                                <div class="name-product">
                                                    <?php echo $kq['name']; ?>
                                                </div>
                                                <div class="price">
                                                    Giá: <?php echo $kq['price']; ?><sup> đ</sup>
                                                </div>
                                                <div class="product-info">
                                                    <a href="addcart.php?id=<?php echo $kq['id']; ?>">
                                                        <button type="button" class="btn btn-primary">
                                                            <label style="color: red;">&hearts;</label> Mua hàng  <label style="color: red;">&hearts;</label>
                                                        </button>
                                                    </a>
                                                    <a href="detail.php?id=<?php echo $kq['id'] ?>">
                                                        <button type="button" class="btn btn-primary">
                                                            <label style="color: red;">&hearts;</label> Chi Tiết <label style="color: red;">&hearts;</label>
                                                        </button>
                                                    </a>
                                                </div><!-- /product-info -->
                                            </div><!-- /thumbnail -->
                                        </div><!-- /col -->
                                    <?php } ?>
                            </div><!-- /row -->
                        </div><!-- /Thời Trang Nam -->

                        <!-- Thời Trang Nữ -->
                        <div class="title-product-main">
                            <h3 class="section-title">Thời Trang Nữ</h3>
                        </div>
                        <div class="content-product-main">
                            <div class="row">
                                <?php
                                    $sql = "SELECT id,image,name,price FROM products WHERE category_id=2 LIMIT 8";
                                    $result = mysqli_query($conn,$sql);

                                    while ($kq = mysqli_fetch_assoc($result)) {

                                ?>
                                        <div class="col-md-3 col-sm-6 text-center">
                                            <div class="thumbnail">
                                                <div class="hoverimage1">
                                                    <img src= "<?php echo $kq['image']; ?>" alt="Generic placeholder thumbnail" width="100%" height="300">
                                                </div>
                                                <div class="name-product">
                                                    <?php echo $kq['name']; ?>
                                                </div>
                                                <div class="price">
                                                    Giá: <?php echo $kq['price']; ?><sup> đ</sup>
                                                </div>
                                                <div class="product-info">
                                                    <a href="addcart.php?id=<?php echo $kq['id']; ?>">
                                                        <button type="button" class="btn btn-primary">
                                                            <label style="color: red;">&hearts;</label> Mua hàng  <label style="color: red;">&hearts;</label>
                                                        </button>
                                                    </a>
                                                    <a href="detail.php?id=<?php echo $kq['id'] ?>">
                                                        <button type="button" class="btn btn-primary">
                                                            <label style="color: red;">&hearts;</label> Chi Tiết <label style="color: red;">&hearts;</label>
                                                        </button>
                                                    </a>
                                                </div><!-- /product-info -->
                                            </div><!-- /thumbnail -->
                                        </div><!-- /col -->
                                    <?php } ?>
                            </div><!-- /row -->
                        </div><!-- /Thời Trang Nữ -->

                	</div> <!-- /product-main -->
            	</div> <!-- /col -->

            </div><!-- /row -->
        </div><!-- /container -->
    </div>
    <!-- /main -->

    <!-- partner -->
    <div class="container">
        <div class="title-product-main">
            <h3 class="section-title">Hãng Thời Trang Nổi Tiếng</h3>
        </div>
        <?php include("model/partner.php"); ?>
    </div>
    <!-- /partner -->

    <!-- footer -->
    <div class="container">
        <?php include("model/footer.php"); ?>
    </div>
    <!-- /footer -->

<script>
    new WOW().init();
</script>
<script type="text/javascript" src="https://forum.vietdesigner.net/data/codes/snowstorm.js"></script>
</body>
</html>