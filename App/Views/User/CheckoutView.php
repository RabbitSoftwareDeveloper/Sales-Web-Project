<?php require_once "HeaderView.php"; ?>
<?php
  $html_cart="";
  $tongtien=0;
//   $tongcong=0;
  if(count($_SESSION["giohang"])>0){
    foreach ($_SESSION["giohang"] as $item) {
      $tt=$item["Soluong"]*$item["GiaSP"];
    //   $tongcong+=$tt+$item["PhiVanChuyen"];
      $tongtien+=$tt;
      $html_cart.='<tr >
              <td class="product-thumbnail">
                <img src="Public/template/assets/images/'.$item["HinhAnhSP"].'" alt="Image" class="img-fluid" style="max-width: 200px;">
              </td>
              
              
              <td>
                <div class="input-group mb-3 d-flex align-items-center quantity-container" style="max-width: 120px;">
                  
                  <input type="text" onkeyup="kiemtrasoluong(this)" class="form-control text-center quantity-amount" value="'.$item["Soluong"].'" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                  
                  <input type="hidden" value="'.$item["IDSP"].'">
                </div>

              </td>
              
            </tr>';
    }
    
  }
?>

    
<div class="contact-page section">
      <div class="container">
        
        <p class="fs-2">Rabbit Store</p>
        <span class="breadcrumb"><a href="<?=BASE_PATH?>cart">Giỏ hàng</a> /
            <?php 
            if($titlepage!="") echo $titlepage;
            else echo "Rabit Vivu";
            ?>
        </span>
        <div class="row  ">
        <div class="col-lg-7 border-end">
            <div class="row mb-3">
                
                <span>Thông tin giao hàng</span>
                
                <form action="" method="post">
                <div class="col-md-12 py-3">
                    <input type="text" name="username" id="username" class="form-control"  placeholder="Họ tên *">
                </div>
                <div class="col-md-12 py-3">
                    <div class="row">
                    <div class="col-md-8 ">
                        <input type="text" name="email" id="email"  pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email *">                        
                    </div>
                    <div class="col-md-4 ">
                        <input type="text" name="sdt" id="sdt"  class="form-control"  placeholder="Số điện thoại *">
                    </div>
                    </div>
                </div>
                <div class="col-md-12 py-3">
                    <input type="text" class="form-control"  placeholder="Địa chỉ *">
                </div>
                <div class="col-md-12 py-3">
                    <div class="row">
                    <div class="col-md-6 ">
                        <select class="form-select" id="quocgia" name="quocgia" >
                            <option value="1">Chọn quốc gia</option>
                            <option value="2">Việt Nam</option>
                            <option value="3">Nhật</option>
                            <option value="3">Đài Loan</option>
                        </select>                    
                    </div>
                    <div class="col-md-6 ">
                        <select class="form-select" id="tinhthanh" name="tinhthanh" >
                            <option value="1">Chọn tỉnh / thành</option>
                            <option value="2">TP. HCM</option>
                            <option value="3">Đắk Lắk</option>
                            <option value="4">BD</option>
                        </select>
                    </div>
                    </div>
                        
                        
                </div>
                <div class="col-md-12 py-3">
                    <div class="row">
                        <div class="col-md-6 ">
                            <select class="form-select" id="quanhuyen" name="quanhuyen" >
                                <option value="1">Chọn quận / huyện</option>
                                <option value="2">Eakar</option>
                                <option value="3">Quận 12</option>
                                <option value="4">Gò Vấp</option>
                            </select>                        
                        </div>
                        <div class="col-md-6 ">
                            <select class="form-select" id="phuongxa" name="phuongxa" >
                                <option value="1">Chọn phường / xã</option>
                                <option value="2">CưPrông</option>
                                <option value="3">NTS</option>
                                <option value="4">CVPMQT</option>
                            </select>
                        </div>
                    </div>
                        
                        
                </div>
                </form>
            </div>
            <div class="row mb-3">
                <span>Phương thức vận chuyển</span>
                <div class="col-md-12 py-3">
                        <div class="border border-dark-subtle text-center">
                            <div class="py-5">
                            <i class="fa-solid fa-truck"></i>
                            <p>Vui lòng chọn tỉnh / thành để có danh sách phương thức vận chuyển.</p>
                            </div>
                        </div>
                </div>
            </div>
            <div class="row mb-3">
                <span>Phương thức thanh toán</span>
                <div class="col-md-12 py-3">
                    <div class="border border-dark-subtle">
                        <div class="row text-center">
                            <div class="col-md-6 py-3 ">
                                <a href="<?=BASE_PATH?>cart/checkout/online">
                                <button type="submit"  class="btn btn-primary py-2" name="momo"><i class="fa-solid fa-credit-card"></i> Thanh toán Momo</button>
                                </a>
                            </div>
                            <div class="col-md-6 py-3 ">
                               <button type="submit" herf="<?=BASE_PATH?>cart/checkout/online" class="btn btn-success p-y2" name="vnpay">Thanh toán VNPay</button>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-12 ">
                    <div class="row">
                        <div class="col-md-8 ">
                            <a href="<?=BASE_PATH?>cart">Giỏ hàng</a>                        
                        </div>
                        <div class="col-md-4 ">
                            <button type="submit" name="hoantat" class="btn btn-primary">Hoàn tất đơn hàng</button>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
        
        <div class="col-lg-4 mt-5">
            <div class="row mb-5">
            <table class="table">
              
              <tbody>
              <?= $html_cart?>
              </tbody>
            </table>
                    
                        
            </div>
                <div class="row">
                        <div class="col-md-12">
                          <label class="text-black h4" for="coupon">Mã giảm giá</label>
                          <p>Nhập mã phiếu giảm giá của bạn nếu bạn có.</p>
                        </div>
                        <div class="col-md-8 mb-3 mb-md-0">
                          <input type="text" class="form-control py-3" id="coupon" placeholder="Mã giảm giá">
                        </div>
                        <div class="col-md-4">
                          <div class="main-button">
                            <a href="property-details.html">Áp dụng</a>
                          </div>
                        </div>
                </div> 
                    <hr>
                <div class="row ms-5 mb-3 mt-4 ">
                        <div class="row mb-3">
                             <div class="col-md-6">
                              <span class="text-black">Tạm tính:</span>
                            </div>
                            <div class="col-md-6 text-right">
                              <span><?=number_format($tongtien,0,",",".")?> ₫</span>
                            </div>
                        </div>
                    <div class="row mb-2">
                        <div class="col-md-6">
                          <span class="text-black">Phí vận chuyển:</span>
                        </div>
                        <div class="col-md-6 text-right">
                            <span>--</span>
                          
                        </div>
                    </div>
                    
                </div>
                <hr>
                <div class="row ms-5 mb-3 mt-4 ">
                        <div class="row">
                             <div class="col-md-6">
                              <span class="text-black">Tổng cộng:</span>
                            </div>
                            <div class="col-md-6 text-right">
                                <p class="fs-4"><?=number_format($tongtien,0,",",".")?>₫</p>
                            </div>
                        </div>
                </div>
              
            
          
          
        </div>
        
          
        </div>
        
      </div>
</div>
</div>
<?php require_once "FooterView.php"; ?>