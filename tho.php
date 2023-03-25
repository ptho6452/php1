<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="styles.css">

    <title>Document</title>


</head>
<header>
<div class="header">
        <div class="image">
            <img class="img" src="https://ephoto360.com/uploads/effect-data/ephoto360.com/i66ln8t31/9-min62442a1fbb3f9.jpg" alt="">
        </div>
        <div class="menu">
            <ul>
                <li><a href="banggiaphucvu.php">BẢNG GIÁ PHỤC VỤ</a></li>
                <li><a href="aodoikham.php">ÁO ĐỐI KHÂM</a></li>
                <li><a href="aogiaolinh.php">ÁO GIAO LĨNH</a></li>
                <li><a href="aonhatbinh.php">ÁO NHẬT BÌNH</a></li>
                <li><a href="aotac.php">ÁO TẮC</a></li>
                <li><a href="aonguthan.php">ÁO NGŨ THÂN</a></li>
                <li><a href="blog.php">BLOG</a></li>
                <li><a href="lienhe.php">LIÊN HỆ</a></li>
            </ul>
        </div>
        <div class="function">
            <div class="functionsearch">
                <div class="search">
                    <i  class="fa-sharp fa-solid fa-magnifying-glass" data-toggle="modal" data-target="#myModal"></i>
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Tìm kiếm</h4>
                                </div>
                                <div class="modal-body">
                                    <input class="input" type="search" name="search" value="" placeholder="Nhập từ khóa">
                                    <button class="button" type="submit" name="submit">Tìm kiếm</button>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="button" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="button"><a  href="themgiohang.php">Giỏ hàng <i class="fa-sharp fa-solid fa-cart-shopping"></i> </a></button>
            <button class="button"><a  href="signin.php">Đăng nhập</a></button>
            <button class="button"><a  href="signin.php">Đăng ký</a></button>
        </div>
    </div>

</header>
<body>

<form method="POST" action="" class="one">

	    <h2>THANH TOÁN<h2>
        <div class="row">
            <div class="col-sm-6">
                    <input type="text" class="one1" name="name" size="30"  height="39px" placeholder="Name" >
                <br>
                
             
                    <input type="text"  class="one1"  name="phone" size="30" placeholder="Phone" >
               <br>
             
                 <input type="text" class="one1"  name="address" size="30"   placeholder="Địa chỉ" >
               <br>
              
                    <input type="text"  class="one1"  name="prices" size="30"  placeholder="Giá" >
                <br>
                    <div id="row1" class="row">
                        <div class="col-sm-6">
                            <input type="datetime"  class="one1"   name="checkout" size="10"  placeholder="ngày đặt" >
                        </div>
                        <div class="col-sm-6">
                            <input type="datetime"  class="one1"   name="checkout" size="10"  placeholder="ngày trả" >
                        </div>
                    </div> <br>
                
                <div class="row">
                <div class="col-sm-6">
                    <div id="thanhtoan" >Thanh Toán</div >
                </div >
                <div class="col-sm-6">
                    <button id="button1" >Thanh toán trực tiếp
                </div >  <br>
                <div>
                    <input type="button"  id="one2"  id size="30" value="Đồng ý">
                </div>
            </div>
            <div class="col-sm-6">
				<img src="" alt="" id="img1">

            </div>
            
           

        </div >      


  </form>
</body>
</html>
