<?php require_once "HeaderView.php"; ?>

<?php
extract($data["My_Profile"]);
?>

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
            <a href="<?=BASE_PATH?>profile/lichsumuahang">
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
                
                <h3 class="mt-3 text-center">Tổng quan</h3>
                  
                  <div class="col-lg-4 mt-3 text-center ">
                    <h6>Họ & Tên</h6>
                    <p class="mt-3"><?= $username ?></p>
                  </div>
                  <div class="col-lg-4 mt-3 text-center">
                    <h6>Email</h6>
                    <p class="mt-3"><?= $email ?></p>
                  </div>
                  <div class="col-lg-4  mt-3 text-center">
                    <h6>Nhóm khách hàng</h6>
                    <?php if($_SESSION['user']['Role']<1): ?>
                    <p class="mt-3">Admin</p>
                    <?php else: ?>
                    
                    <p class="mt-3">Member</p>
                    <?php endif; ?>
                  </div>
    
                
              </div>
              <hr>
              <div class="row">
                  <div class="col-lg-6  mt-2 ">
                    <div class="row">
                        <img class="rounded-circle border ms-3 mb-3 border-3" src="<?=BASE_PATH?>Public/template/assets/images/<?= $HinhAnh ?>" alt="<?= $username ?>" style="max-width: 150px; max-height: 150px">
                      <div>
                        <form action="" method="post">
                          <fieldset>
                          <button type="button" class="btn btn-outline-primary">Sửa ảnh đại diện</button>
                          <input type="file" name="HinhAnh" require hidden>
                          </fieldset>
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 py-3 mt-2">
                    <div class="row">
                    <p>Vui lòng chọn ảnh nhỏ hơn 5MB <br>
                    Chọn hình ảnh phù hợp, không phản cảm</p>
                    </div>
                  </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-lg-6 ">
                <form class="ms-3 py-2" action="" method="post">
                  <fieldset>
                    <h4>Cá nhân</h4>
                    <div class="py-2">
                      <input type="text" class="form-control" name="username" placeholder="Họ & Tên" value="<?= $username ?>">
                    </div>
                    
                    <div class="py-2">
                      <input type="text" class="form-control" name="SoDienThoai" placeholder="Số điện thoại" value="">
                    </div>
                    <div class="py-2">
                      <select class="form-select"  >
                        <option selected >Giới tính</option>
                        <option value="1">Nam</option>
                        <option value="2">Nữ</option>
                      </select>
                    </div>
                    <div class="py-2">
                      <select class="form-select"  >
                        <option selected >Tỉnh/ Thành phố</option>
                        <option value="1">Nam</option>
                        <option value="2">Nữ</option>
                      </select>
                    </div>
                    <div class="py-2">
                      <select class="form-select"  >
                        <option selected >Quận/ Huyện</option>
                        <option value="1">Nam</option>
                        <option value="2">Nữ</option>
                      </select>
                    </div>
                    <div class="py-2">
                      <select class="form-select"  >
                        <option selected >Xã/ Phường</option>
                        <option value="1">Nam</option>
                        <option value="2">Nữ</option>
                      </select>
                    </div>
                    <div class="py-2">
                      <input type="text" class="form-control" name="username" placeholder="Số nhà / Đường" value="">
                    </div>
                    <div class="py-2">
                    <button type="submit" name="updatetaikhoan" class="btn btn-primary">Lưu thay đổi</button>
                    </div>
                    
                  </fieldset>
                </form>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>


    
<?php require_once "FooterView.php"; ?>