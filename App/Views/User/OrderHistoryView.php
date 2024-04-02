<?php require_once "HeaderView.php"; ?>


<div class="page-heading header-text">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <span class="breadcrumb"><a href="index.php">Trang chủ</a> / 
                    <?php 
                    if($titlepage!="") echo $titlepage;
                    else echo "Rabit Vivu";
                    ?>
                </span>

                  <h3>
                    <?php 
                    if($titlepage!="") echo $titlepage;
                    else echo "Rabit Vivu";
                    ?>
                </h3>
                </div>
              </div>
            </div>
    </div>
    <div class="contact-page section">
      <div class="container ">
        <div class="row ">
            <div class="col-lg-3 shadow-lg bg-body-tertiary rounded " >
          <div class="col-lg-12 py-1  " >
              <a href="<?=BASE_PATH?>profile">
                <div class="p-3 "><i class="fa-solid fa-user me-2 "></i>Tài khoản</div>
              </a>
          </div>
          <hr>
          <div class="col-lg-12 py-1   ">
            <a href="<?=BASE_PATH?>profile/licsumuahang">
              <div class="p-3 "><i class="fa-brands fa-shopify"></i> Lịch sử đơn hàng</div>
            </a>
          </div> 
          <hr>
          <?php if($_SESSION['user']['Role']<1): ?>
            <div class="col-lg-12 py-1  ">
              <a href="<?=BASE_PATH?>admin/dashboard">
                <div class="p-3 "><i class="fa-solid fa-user-tie me-2"></i>Trang quản lý</div>
              </a>
            </div>   
            <hr>              
          <?php endif; ?>
          
          <div class="col-lg-12 py-1  ">
            <a href="<?=BASE_PATH?>logout">
              <div class="p-3 "><i class="fa-solid fa-arrow-right"></i> Đăng Xuất</div>
            </a>
          </div>
            </div>
        
        <div class="col-lg-8 ms-3 ">
          <div class="container ms-5 shadow-lg bg-body-tertiary rounded">
              <div class="row">
                
                <h3 class="mt-3 text-center">Lịch sử mua hàng</h3>

              </div>
          </div>
        </div>
            </div>
        </div>
    
    </div>



<?php require_once "FooterView.php"; ?>