<?php
   $this->load->view('landing_page/layout/header');
   ?>

<div class="wheel-start" style="background-image: url('images/bg1.jpeg');background-size: 100% 100%;">
            <!-- <img src="<?=base_url()?>" alt="" class="wheel-img"> -->
            <div class="container padd-lr0">
                <div class="col-lg-6 col-lg-push-6 ">
                    <header class="wheel-header marg-lg-b100 marg-lg-t200  marg-md-b0 marg-md-t0">
                        <h1>TRENDS  </h1>
                        <h2>Telkom Rental and Delivery Service</h2>
                        <span>Siap melayani kendaraan anda dengan aman dan nyaman</span>
                    </header>
                </div>
                <div class="col-lg-6 col-lg-pull-6  padd-lr0">
                    <div class="wheel-start-form">
                        <h2 style="color:white;font-weight: 600;margin-bottom:28px;">Trends Sewa Mobil</h2>
                        <form action="<?=base_url()?>users">
                            <label for="input-val11"><span>Company Name</span>
                            <input type="text" placeholder="Ex: Pt. Abc">
                            </label>
                            <label for="input-val12"><span>Lokasi Delivery</span>
                            <input type="text" id='input-val12' placeholder="ZIP, City, Airport or Address">
                            </label>
                            <div class="clearfix">
                                
                                    <div class="wheel-date">
                                            <span>Car Type</span>
                                            <select class="selectpicker">
                                                <option>SUV</option>
                                                <option>Luxury</option>
                                                <option>MVP</option>
                                                <option>BUS</option>
                                                <option>Cargo</option>   
                                            </select>
                                        </div>
                                        <div class="wheel-date">
                                            <span>Brand Car</span>
                                            <select class="selectpicker"> 
                                                <option>Toyota</option>
                                                <option>BMW</option>
                                                <option>Daihatsu</option>
                                                <option>Volvo</option>
                                                <option>Mitshubishi</option>
                                                <option>Suzuki</option>
                                                <option>Mercedes</option>
                                            </select>
                                        </div>
                                        <div class="wheel-date">
                                            <span>Variety Car</span>
                                            <select class="selectpicker">
                                                <option>Avanza</option>
                                                <option>Innova</option>
                                                <option>CRV</option>
                                                <option>BMW </option>
                                                <option>Pick Up</option>   
                                            </select>
                                        </div>
                                        <div class="wheel-date">
                                                <span>Color</span>
                                                <select class="selectpicker">
                                                    <option>Random</option>
                                                    <option>Black</option>
                                                    <option>Red</option>
                                                    <option>Silver</option>
                                                    <option>Blue</option>
                                                </select>
                                            </div>
                                            <!-- <div class="wheel-date">
                                                <span>Transmission</span>
                                                <select class="selectpicker">
                                                        <option>Matic</option>
                                                        <option>Manual</option>
                                                </select>
                                            </div> -->
                                <!-- <div class="wheel-date">
                                    <span>Pickup Date</span>
                                    <label for="input-val13" class="fa fa-calendar">
                                    <input  class="datetimepicker" id='input-val13' type="text" value="29 Apr">
                                    </label>
                                </div>
                                <div class="wheel-date ">
                                    <span>Pickup time</span>
                                    <label for="input-val14" class="fa fa-clock-o">
                                    <input class="timepicker" id='input-val14' type="text" value="18:00">
                                    </label>
                                </div>
                                <div class="wheel-date">
                                    <span>Return Date</span>
                                    <label for="input-val15" class="fa fa-calendar">
                                    <input  class="datetimepicker" id='input-val15' type="text" value="29 Apr">
                                    </label>
                                </div>
                                <div class="wheel-date">
                                    <span>Return Time</span>
                                    <label for="input-val16" class="fa fa-clock-o">
                                    <input class="timepicker" id='input-val16' type="text" value="18:00">
                                    </label>
                                </div>
                                <div class="wheel-date">
                                    <span>Plat</span>
                                    <select class="selectpicker">
                                            <option>Ganjil</option>
                                            <option>Genap</option>
                                    </select>
                                </div>
                                <div class="wheel-date">
                                        <span>Branding</span>
                                        <select class="selectpicker">
                                            <option>Tidak</option>
                                            <option>Ya</option>
                                        </select>
                                    </div> -->
                            </div>
                            <label for="input-val17" class="promo">
                            <input type="text" id='input-val17' placeholder="Note : Branding, Delivery time, etc">
                            </label>
                            <label for="input-val18" class="promo promo2">
                            <button class="wheel-btn" id="input-val18">Sewa</button>
                            </label>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- ////////////////////////////////////////////////////////////// -->
        <div class="wheel-bg2">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="wheel-header text-center marg-lg-t140 marg-lg-b340 marg-md-t140 marg-md-b140 marg-sm-t70 ">
                            <h5>Online Terbesar </h5>
                            <h3>Penyewaan <span>Mobil</span>  dan  <span>Kendaraan</span></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wheel-clients">
            <div class="container padd-lr0">
                <div class="row">
                    <div class="col-md-4 padd-r0 padd-md-lr15">
                        <div class="wheel-service-item text-center wheel-bg3">
                            <div class="wheel-service-logo">
                                <img src="<?=base_url()?>images/ico1.png" alt="">
                            </div>
                            <h5>Paling Terjangkau</h5>
                            <p>This is Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat </p>
                        </div>
                    </div>
                    <div class="col-md-4 padd-lr0 padd-md-lr15">
                        <div class="wheel-service-item text-center wheel-service-active wheel-bg4">
                            <div class="wheel-service-logo">
                                <img src="<?=base_url()?>images/ico2.png" alt="">
                            </div>
                            <h5>Nilai Terbaik</h5>
                            <p>This is of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat </p>
                        </div>
                    </div>
                    <div class="col-md-4 padd-l0 padd-md-lr15">
                        <div class="wheel-service-item  text-center wheel-bg5">
                            <div class="wheel-service-logo">
                                <img src="<?=base_url()?>images/ico3.png" alt="">
                            </div>
                            <h5>Excellent Service</h5>
                            <p>This is of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 ">
                    <div class="wheel-service-img">
                        <img src="<?=base_url()?>images/mobil.png" alt="" class="wheel-img">
                    </div>
                </div>
            </div>
        </div>
        <!-- /////////////////////////////////////////////////// -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="wheel-header wheel-testi-header text-center marg-lg-t155 marg-lg-b65 marg-md-t50  marg-md-b50">
                        <h3>Misi Kami adalah kepuasan <span>Client</span> </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="wheel-testimonial text-center">
                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                        <div class="wheel-testimonial-info">
                            <span>Rm. Advitor Juto Kusmono</span>
                            <img src="<?=base_url()?>images/l1.png" alt="">
                            <p> Manager Marketing & Business Development</p>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
        <!-- ////////////////////////////////////////////////////// -->
        <div class="wheel-deals text-center">
            <img src="<?=base_url()?>images/bg3.jpeg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="wheel-header">
                            <h5>Be with us </h5>
                            <h3>We offers great <span>deals</span></h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="wheel-deals-text">
                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                            <a href="" class="wheel-btn">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /////////////////////////////////////////////////////// -->
        <div class="wheel-news  wheel-bg2 ">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="wheel-header text-center marg-lg-t140 marg-lg-b90 marg-md-t50 ">
                            <h5>our Blog </h5>
                            <h3>the Latest <span>news </span></h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 padd-l0  padd-md-lr15">
                        <div class="wheel-news-item   wheel-bg1">
                            <i class="">20 January 2019</i>
                            <div class="wheel-news-item-img">
                                <img src="<?=base_url()?>images/gam6.jpeg" alt="">
                            </div>
                            <div class="wheel-news-text">
                                <h5><a href="#">Monotonectally build distinctive convergence and an attempt</a></h5>
                                <p>Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad...</p>
                                <a href="">Read More </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="wheel-news-item   wheel-bg1">
                            <i class="">20 January 2019</i>
                            <div class="wheel-news-item-img">
                                <img src="<?=base_url()?>images/gam5.jpeg" alt="">
                            </div>
                            <div class="wheel-news-text">
                                <h5><a href="#">Monotonectally build distinctive convergence and an attempt</a></h5>
                                <p>Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad...</p>
                                <a href="">Read More </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 padd-r0 padd-md-lr15">
                        <div class="wheel-news-item   wheel-bg1">
                            <i class="">20 January 2019</i>
                            <div class="wheel-news-item-img">
                                <img src="<?=base_url()?>images/gam4.jpeg" alt="">
                            </div>
                            <div class="wheel-news-text">
                                <h5><a href="#">Monotonectally build distinctive convergence and an attempt</a></h5>
                                <p>Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad...</p>
                                <a href="">Read More </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ////////////////////////////////////// -->
        <div class="container ">
            <div class="row">
                <div class="col-md-6 padd-lr0">
                    <div class="wheel-info-text2 marg-lg-t140 marg-lg-b150 marg-md-t100 marg-md-b50 ">
                        <div class="wheel-header">
                            <h5>Did you know? </h5>
                            <h3>We’ll let you<span> Tow</span></h3>
                        </div>
                        <span>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. </span>
                        <p>Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam </p>
                        <a href="" class="wheel-btn">Learn More</a>
                    </div>
                </div>
                <div class="col-md-6 padd-lr0">
                    <div class="wheel-info-video marg-lg-t150 marg-lg-b150 marg-md-t50 marg-md-b50">
                        <iframe  src="https://www.youtube.com/embed/XjfI8NjqD6k"  ></iframe>
                    </div>
                </div>
            </div>
        </div>
<?php
   $this->load->view('landing_page/layout/footer');
   ?>