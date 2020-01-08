<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TUẤN NGỌC</title>
    <link rel="shortcut icon" href="./images/favicon.ico" />

    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="./js/store_account.js"></script>
    <script type="text/javascript" src="./js/store_contact.js"></script>
</head>

<body>


    <div class="page">
        {{-- section 1 --}}
        <div class="row section-1">
            <div class="col-md-8 section-1_middle">
                <img class="image" src="../images/bg_tn.jpg">

            </div>

        </div>
        {{-- end section 1 --}}



        {{-- section-description --}}
        <div class="row">

            <div class="col-md-8 section-des">
                <div class="section-des_logo">
                    <img class="des-logo" src="../images/logo_tuan.jpg">
                </div>

                <div class="des-content">
                    <h4>Kết Bạn Ngay Với Zalo</h4>
                    <a href="http://zalo.me/0833666666" style="color:white"><h4>Tuấn Ngọc : 0833.666.666</h4></a>
                </div>
            </div>
        </div>
        {{-- end section description --}}



        {{-- section 2 --}}
        <div class="row b_section-2">

            <div class="col-md-8 section-2_middle">
                <div class="section-2-all">

                    <div class="section-2_content">
                        <h1>HỆ THỐNG GAME - TỔNG ĐẠI LÝ - TUẤN NGỌC</h1>
                    </div>

                    <div class="section-2_logo">
                        <span class="s-2"> <img class="s-2_logo" src="../images/fan.png"> </span>
                        <span class="s-2"> <img class="s-2_logo" src="../images/loc79.png"> </span>
                    </div>

                    <div class="section-2_about">
                        <h1>LiÊN HỆ VỚI CHÚNG TÔI </h1>

                    </div>
                    <div class="section-2_video">
                        <video width="80%" id="video_auto" controls autoplay muted>
                            <source src="../images/video.mp4" type="video/mp4">
                        </video>
                    </div>
                    {{-- <script>
                        jQuery( document ).ready(function($) {
                            $("#video_auto")[0].play();
                        });
                    </script> --}}

                    <div class="section-2_buy">
                        <h1>HƯỚNG DẪN MUA BÁN</h1>
                    </div>

                    <div class="section-2_info">
                        <div class="info_bank">
                            <h3> SỐ TÀI KHOẢN NGÂN HÀNG, MOMO </h3>
                            <p> Nội dung bắt buộc: </p>
                            <p> Tên game + Tên nhân vật </p>
                            <p> Ví dụ: FAN emgaihanoi </p>
                        </div>

                        <div class="row section-2_bank">
                            <div class="col-md-6 bank_left">
                                <h4>TÀI KHOẢN NGÂN HÀNG</h4>
                                <p>Trần Văn Mạnh</p>
                                <p> Techcombank: 19035125243011</p>
                                <p> BIDV: 19910000764094</p>
                                <p> Vietcombank: 0711000318433</p>
                                <p> VietinBank: 109870906680</p>
                                <p> AgriBank: 1300206424240</p>
                                <p> SACOMBANK: 02008350963</p>
                                <p> VP Bank: 197385073</p>
                                <p> MB Bank: 0640114548005</p>
                            </div>
                            <div class="col-md-6 bank_right ">
                                <h4> TÀI KHOẢN MOMO</h4>
                                <p> Liên hệ hotline</p>
                                <p><a style="color:white" href="tel:0833666666">0833.666.666</a></p>
                                
                            </div>
                        </div>

                        <div class=" section-2-price">

                            <div class="price-content">
                                <h4> BẢNG GIÁ MUA BÁN </h4>
                            </div>

                            <div class="price-table_1">
                                <table class="table table-dark table-hover">
                                    <thead>
                                      <tr>
                                        <th>BÁN RA</th>
                                        <th>Giá</th>
                                        <th>Ví Dụ</th>
                                      </tr>
                                    </thead>
                                    <thead style=" text-align: center;">
                                        <tr>
                                          <td>Nhận Tối Thiểu 100k VND</td>

                                        </tr>
                                      </thead>
                                    <tbody>
                                      <tr>
                                        <td>< 200K</td>
                                        <td>100</td>
                                        <td>(100.000 VNĐ = 100.000 tiền game)</td>
                                      </tr>
                                      <tr>
                                        <td>>= 200K</td>
                                        <td>85</td>
                                        <td>(850.000 VNĐ = 1.000.000 tiền game)</td>
                                      </tr>
                                    </tbody>
                                  </table>
                            </div>

                            <div class="price-table_2">
                                <table class="table table-dark table-hover">
                                    <thead>
                                      <tr>
                                        <th>MUA VÀO</th>
                                        <th>Giá</th>
                                        <th>Ví Dụ</th>
                                      </tr>
                                    </thead>
                                    <thead style=" text-align: center;">
                                        <tr>
                                          <td>Nhận Tối Thiểu 300k Game</td>

                                        </tr>
                                      </thead>
                                    <tbody>
                                      <tr>
                                        <td>< 10tr game</td>
                                        <td>80</td>
                                        <td>(1.000.000 tiền game = 800.000 VNĐ)</td>
                                      </tr>
                                      <tr>
                                        <td>>= 10tr game</td>
                                        <td>81</td>
                                        <td>(10.000.000 tiền game = 8.100.000 VNĐ)</td>
                                      </tr>
                                    </tbody>
                                  </table>
                            </div>

                        </div>

                    </div>


                </div>

            </div>

        </div>
        {{-- end section 2 --}}


        {{--  register code --}}
        <div class="row register">

          <div class="col-md-8">
            <div class="register_content">

                <div class="register-content_left">
                    <div class="l1">
                        <h4>CHỈ CÒN LẠI</h4>
                        <h3>38</h3>
                        <h2>GIFT CODE VIP</h2>

                    </div>

                    <div class="l2">
                        <p>Đăng ký nhận code ngay trước khi hết hạn.</p>
                    </div>

                    <div class="l3">
                        <h2>NHANH TAY LÊN !</h2>
                    </div>

                </div>

                <div class="register-content_right">
                    <div class="r1">
                        <h3>Đăng ký ngay nhận code VIP</h3>
                        <p>Sau khi đăng ký nhận Code VIP trải nghiệm game, bộ phận CSKH của Đại Lý TUẤN NGỌC sẽ gửi Code tới số điện thoại Zalo đã được đăng ký, vui lòng để ý phần Kết Bạn ở Zalo để nhận Code.</p>
                    </div>
                    <div class="container" style="text-align: center;">
                        <form action="account/store" method="get">
                          <div class="form-group">
                            <input type="text" class="form-control"  placeholder="Tên Nhân Vật ..."  id="text_user_name" name="user_name">
                          </div>
                          <div class="form-group">
                         
                            <input type="tel" class="form-control"  placeholder="SĐT Zalo ..."  id="text_number_phone" name="number_phone">
                          </div>

                          <button type="submit" id="store_account" class="btn btn-primary">Nhận Ngay</button>
                        </form>
                      </div>
                </div>

            </div>
          </div>

        </div>



        {{-- end register code --}}

  
   
      
        {{-- isoical --}}
        <div class="isoical">

            <div class="col-md-12 isoical_content">
                <div class="isoical-1">
                    <h3>THÔNG TIN LIÊN HỆ</h3>
                    <h4><a style="color:white" href="tel:0833666666">- 0833.666.666</a></h4>
                    <h4><a style="color:white" href="tel:0843198888">- 0843.19.8888</a></h4>

                </div>
                <div class="isoical-2">
                    <h3>THEO DÕI TUẤN NGỌC</h3>
                    <div class="isoical-2_image">
                       <a href="https://www.facebook.com/tuanngocdailydoithuongonlineuytin"><img class="icon_isoical" src="../images/icon_fb.png" alt="Italian Trulli"></a> 
                    </div>

                </div>
                <div class="isoical-3">
                    <h3>CHỨNG NHẬN VỀ CHÚNG TÔI</h3>
                    <div class="isoical-2_image">
                        <img class="icon_isoical" src="../images/logo_tuan.jpg" alt="Italian Trulli">
                    </div>
                </div>
            </div>
        </div>
        {{--  end isoical --}}


        {{-- footer --}}
        <div class="row footer">
            <div class="footer_content">
                <h1>©2020 HỆ THỐNG GAME - TỔNG ĐẠI LÝ - TUẤN NGỌC</h1>
            </div>
        </div>
        {{-- end footer --}}
    <div class="calll">
        <a href="tel:0833666666"><img class="image_hotline" src="../images/phone_hotline.png" alt="hotline"></a> 
    </div>
           <!-- Load Facebook SDK for JavaScript -->
           <div id="fb-root"></div>
           <script>
             window.fbAsyncInit = function() {
               FB.init({
                 appId            : '1430707053762200',
                 autoLogAppEvents : true,
                 xfbml            : true,
                 version          : 'v5.0'
               });
             };
     
        (function(d, s, id) {
             var js, fjs = d.getElementsByTagName(s)[0];
             if (d.getElementById(id)) return;
             js = d.createElement(s); js.id = id;
             js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
             fjs.parentNode.insertBefore(js, fjs);
           }(document, 'script', 'facebook-jssdk'));</script>
     
           <!-- Your customer chat code -->
           <div class="fb-customerchat"
             attribution=setup_tool
             {{-- page_id="1618735408372301" --}}
             page_id="1766729226911214" 
             
            theme_color="#0084ff"
            logged_in_greeting="Xin chào, mình có thể giúp gì cho bạn?"
            logged_out_greeting="Xin chào, mình có thể giúp gì cho bạn?">
           </div>
     
         {{--  end fb--}}


    </div>
            {{--  Chat--}}
            {{-- <div class="chat_contact">
                <div class="chat_c">
                    <button  class="chat_c_b" data-toggle="modal" data-target="#myModal">Ngoại tuyến</button>
                </div>
    
                <div class="modal" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content">
    
                            <!-- Modal Header -->
                            <div class="modal-header chat_header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="chat_header-1"> Ngoại tuyến</h4>
                                <h4 class="chat_header-2">Bạn vui lòng điền vào biểu mẫu dưới đây và chúng tôi sẽ liên hệ
                                    lại với bạn ngay khi có thể.</h4>
                            </div>
    
                            <!-- Modal body -->
                            <div class="modal-body chat_body">
                                <div class="chat_body-1" id="load_submit_success">
                                    <form action="contact/store" method="get">
                                        <div class="form-group">
    
                                            <input type="name" class="form-control" id="text_name" placeholder="Tên...">
                                        </div>
                                        <div class="form-group">
    
                                            <input type="email" class="form-control" id="text_email" placeholder="Email...">
                                        </div>
                                        <div class="form-group">
    
                                            <input type="text" class="form-control textarea" name="content"
                                                id="text_content" placeholder="Lời nhắn ...">
                                        </div>
                                        <button id="submit_contact" type="submit" class="btn btn-primary chat_button">
                                            Gửi</button>
                                    </form>
                                </div>
                            </div>
    
                            <!-- Modal footer -->
                            <div class="modal-footer">
    
                            </div>
    
                        </div>
                    </div>
                </div>
            </div>
     --}}
            {{--  --}}

    {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script> --}}
</body>

</html>
