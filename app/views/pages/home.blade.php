@extends('layouts.master')

@section('title')

Riata Homes by Chesmar | Home

@stop

@section('content')

<!-- Header-->
<header> 
    <!-- Filter Search-->
    <div class="container">
        <div class="row">
            <div class="col-md-5">                        
                <div class="row bg_header">
                    <ul class="tabs_services">
                        <li><a id="1" class="switcher set2">Calculator</a></li>
                        <li><a id="2" class="switcher set2">Buying</a></li>          
                        <li><a id="3" class="switcher set2">Selling</a></li>
                        <li><a id="4" class="switcher set2">Renting</a></li>                                    
                    </ul>
                    
                    <div class="clearfix"></div>
                    <div class="switcher-panel"></div> 

                    <!-- 1-content -->
                    <div id="1-content" class="switcher-content set2 show">
                        <div class="search_box calculator">
                            <form action="php/calculator.php" id="calculator">
                              <label>Calculate Your Propertie</label>
                                <div>                                                
                                    <input type="number" required placeholder="Price Propertie" name="price">
                                </div> 
                                <div>                                                
                                    <input type="number" required placeholder="Down payment" name="payment">
                                </div> 
                                <div>                                                
                                    <select name="interest">
                                        <option>Interest Rate</option>                                  
                                        <option value="1.39">1.39 %</option>
                                        <option value="2">2%</option>
                                        <option value="3">3%</option>              
                                    </select>
                                </div> 
                                <div>                                                
                                    <select name="months">
                                        <option>Months</option>                                  
                                        <option>36</option>
                                        <option>48</option>
                                        <option>64</option>  
                                        <option>180</option>              
                                    </select>
                                </div>                                                                               
                                <div>
                                    <input type="submit" class="button" value="Calcule">
                                </div> 
                            </form>   
                            <div id="result_calculator"></div>    
                         </div>            
                    </div>
                    <!-- End 1-content -->

                    <!-- 2-content -->
                    <div id="2-content" class="switcher-content set2">
                       <div class="search_box">
                            <form action="properties.html">
                                <div class="">
                                    <label>Search</label>
                                    <input type="text" required>
                                </div>
                                <div>
                                    <label>Location</label>
                                    <select name="location">
                                        <option value="">-- Select city --</option>
                                         <option value="0" selected="selected">New York</option>
                                         <option value="1">Los Angeles</option>
                                         <option value="2">Chicago</option>
                                         <option value="3">Miami</option>
                                         <option value="4">San Francisco</option>
                                         <option value="5">Boston</option>
                                         <option value="6">Philadelphia</option>
                                         <option value="7">Dallas</option>                    
                                     </select>
                                </div>
                                <div>
                                    <label>Price Range</label>                                     
                                    <select name="pricing">
                                          <option>View all</option>                                  
                                        <option value="info_price">0 - 300.000</option>
                                        <option value="info_price">300.000 - 500.000</option>
                                        <option value="info_price">500.000 - 800.000</option>
                                        <option value="info_price">800.000 - 1.000.000</option>
                                        <option value="info_price">10.000.000 +</option>    
                                    </select>
                                </div>
                                <div>
                                    <label>Area</label>
                                    <select name="area">
                                        <option>View all</option>
                                        <option value="info_area">0 - 60 m²</option>
                                        <option value="info_area">60 m² - 90 m²</option>
                                        <option value="info_area">90 m² - 150 m²</option>
                                        <option value="info_area">150 m² - 240 m²</option>
                                        <option value="info_area">240 m² - 360 m²</option>
                                        <option value="info_area">360 m² - 480 m²</option>
                                        <option value="info_area">480 m² - 600 m²</option>
                                        <option value="info_area">More 600 m²</option>
                                    </select>
                                </div>
                                <div>
                                    <input type="submit" class="button" value="Search">
                                </div> 
                            </form>                               
                        </div>   
                    </div>
                    <!-- End 1-content -->

                    <!-- 3-content -->
                    <div id="3-content" class="switcher-content set2">
                       <div class="search_box">
                            <form action="properties.html">
                                <div>
                                    <label>Search</label>
                                    <input type="text" required>
                                </div>
                                <div>
                                    <label>Location</label>
                                    <select name="location">
                                        <option value="">-- Select city --</option>
                                         <option value="0" selected="selected">New York</option>
                                         <option value="1">Los Angeles</option>
                                         <option value="2">Chicago</option>
                                         <option value="3">Miami</option>
                                         <option value="4">San Francisco</option>
                                         <option value="5">Boston</option>
                                         <option value="6">Philadelphia</option>
                                         <option value="7">Dallas</option>                    
                                     </select>
                                </div>
                                <div>
                                    <label>Price Range</label>                                     
                                    <select name="pricing">
                                          <option>View all</option>                                  
                                        <option value="info_price">0 - 300.000</option>
                                        <option value="info_price">300.000 - 500.000</option>
                                        <option value="info_price">500.000 - 800.000</option>
                                        <option value="info_price">800.000 - 1.000.000</option>
                                        <option value="info_price">10.000.000 +</option>    
                                    </select>
                                </div>
                                <div>
                                    <label>Area</label>
                                    <select name="area">
                                        <option>View all</option>
                                        <option value="info_area">0 - 60 m²</option>
                                        <option value="info_area">60 m² - 90 m²</option>
                                        <option value="info_area">90 m² - 150 m²</option>
                                        <option value="info_area">150 m² - 240 m²</option>
                                        <option value="info_area">240 m² - 360 m²</option>
                                        <option value="info_area">360 m² - 480 m²</option>
                                        <option value="info_area">480 m² - 600 m²</option>
                                        <option value="info_area">More 600 m²</option>
                                    </select>
                                </div>
                                <div>
                                    <input type="submit" class="button" value="Search">
                                </div> 
                            </form>                               
                        </div>   
                    </div>
                    <!-- End 3-content -->

                    <!-- 4-content -->
                    <div id="4-content" class="switcher-content set2">
                       <div class="search_box">
                            <form action="properties.html">
                                <div>
                                    <label>Search</label>
                                    <input type="text" required>
                                </div>
                                <div>
                                    <label>Location</label>
                                    <select name="location">
                                        <option value="">-- Select city --</option>
                                         <option value="0" selected="selected">New York</option>
                                         <option value="1">Los Angeles</option>
                                         <option value="2">Chicago</option>
                                         <option value="3">Miami</option>
                                         <option value="4">San Francisco</option>
                                         <option value="5">Boston</option>
                                         <option value="6">Philadelphia</option>
                                         <option value="7">Dallas</option>                    
                                     </select>
                                </div>
                                <div>
                                    <label>Price Range</label>                                     
                                    <select name="pricing">
                                          <option>View all</option>                                  
                                        <option value="info_price">0 - 300.000</option>
                                        <option value="info_price">300.000 - 500.000</option>
                                        <option value="info_price">500.000 - 800.000</option>
                                        <option value="info_price">800.000 - 1.000.000</option>
                                        <option value="info_price">10.000.000 +</option>    
                                    </select>
                                </div>
                                <div>
                                    <label>Area</label>
                                    <select name="area">
                                        <option>View all</option>
                                        <option value="info_area">0 - 60 m²</option>
                                        <option value="info_area">60 m² - 90 m²</option>
                                        <option value="info_area">90 m² - 150 m²</option>
                                        <option value="info_area">150 m² - 240 m²</option>
                                        <option value="info_area">240 m² - 360 m²</option>
                                        <option value="info_area">360 m² - 480 m²</option>
                                        <option value="info_area">480 m² - 600 m²</option>
                                        <option value="info_area">More 600 m²</option>
                                    </select>
                                </div>
                                <div>
                                    <input type="submit" class="button" value="Search">
                                </div> 
                            </form>                               
                        </div>   
                    </div>
                    <!-- End 4-content -->
                </div>       
            </div>
        </div>
    </div>  
    <!-- Filter Search-->              
    
    <!-- Slide -->           
    <div class="camera_wrap camera_white_skin" id="slide">
        <!-- Item Slide -->  
        <div  data-src="img/slide/slides/1.jpg">
            <div class="camera_caption fadeFromTop">
                 <div class="container"> 
                    <div class="row">
                        <div class="col-md-7 col-md-offset-5">
                            <h1 class="animated fadeInRight delay1">We build brands for local
                                <span class="arrow_title_slide"></span>
                            </h1>   
                            <p class="animated fadeInRight delay2">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p> 
                            <ul class="animated fadeInRight delay3">
                                <li class="bathrooms"><span>3</span></li>
                                <li class="bedrooms"><span>5</span></li>
                                <li class="price">$<span>5000</span></li>
                            </ul>
                            <div class="more animated fadeInRight delay4">
                                <a href="properties.html" class="button">More Info</a>
                            </div>
                        </div>    
                    </div>                     
                </div>      
            </div>
         </div>
        <!-- End Item Slide -->  

        <!-- Item Slide --> 
        <div data-src="img/slide/slides/2.jpg">
            <div class="camera_caption fadeFromTop">
                 <div class="container"> 
                    <div class="row">
                        <div class="col-md-7 col-md-offset-5">
                            <h1 class="animated fadeInRight delay1">We build brands for local
                                <span class="arrow_title_slide"></span>
                            </h1>   
                            <p class="animated fadeInRight delay2">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p> 
                            <ul class="animated fadeInRight delay3">
                                <li class="bathrooms"><span>3</span></li>
                                <li class="bedrooms"><span>5</span></li>
                                <li class="price">$<span>5000</span></li>
                            </ul>
                            <div class="more animated fadeInRight delay4">
                                <a href="properties.html" class="button">More Info</a>
                            </div>
                        </div>
                    </div>                         
                </div>     
            </div>
        </div>
       <!-- End Item Slide -->  

       <!-- Item Slide --> 
        <div data-src="img/slide/slides/3.jpg">
            <div class="camera_caption fadeFromTop">
                 <div class="container"> 
                    <div class="row">
                        <div class="col-md-7 col-md-offset-5">
                            <h1 class="animated fadeInRight delay1">We build brands for local
                                <span class="arrow_title_slide"></span>
                            </h1>   
                            <p class="animated fadeInRight delay2">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p> 
                            <ul class="animated fadeInRight delay3">
                                <li class="bathrooms"><span>3</span></li>
                                <li class="bedrooms"><span>5</span></li>
                                <li class="price">$<span>5000</span></li>
                            </ul>
                            <div class="more animated fadeInRight delay4">
                                <a href="properties.html" class="button">More Info</a>
                            </div>
                        </div>  
                    </div>                       
                </div>     
            </div>
        </div>
       <!-- End Item Slide -->  
    </div>  
    <!-- End Slide -->   
</header>
<!-- End Header-->

<!-- content info -->
<div class="content_info">
    <div class="container">
        <!-- Newsletter Box -->                  
        <div class="newsletter_box">
            <div class="container">
                <div class="row">
                  <div class="col-md-8">
                      <h3>
                          STAY INFORMED
                          <span>- Lorem ipsum dolor sit amet, consectetuer adipiscing elit Lorem ipsum.</span>
                      </h3>                    
                    </div>
                    <div class="col-md-4">
                       <form id="newsletterForm" action="php/mailchip/newsletter-subscribe.php">
                            <input type="email" placeholder="Your Mail..." required >
                            <button class="register" type="submit"><i class="fa fa-angle-right"></i></button>
                        </form> 
                        <div id="result-newsletter"></div> 
                    </div>
                </div>
            </div>
        </div>
        <!-- End Newsletter Box -->
      
        <!-- Title-->
        <div class="row">
          <div class="col-md-12">
              <div class="titles">
                  <span>WHAT WE OFFER</span>
                  <br>
                  <h1>OUR RECENT PROPERTY</h1>
              </div>
          </div>
        </div>
        <!-- End Title-->

        <!-- Bar Filter properties-->
        <div class="bar_properties" id="bar">
            <div class="row">
                  <div class="col-md-4">
                      <ul>
                          <li class="active"><a href="#">112 Ads</a></li>
                          <li><a href="#">Particular</a></li>
                          <li><a href="#">State</a></li>                            
                      </ul>
                  </div>
                  <div class="col-md-5">
                      <strong>Order By:</strong>
                      <ul class="tooltip_hover">                            
                          <li>
                              <a href="#">Recent ads</a>
                              <a href="#" data-toggle="tooltip" title data-original-title="Sort Ascending"><i class="fa fa-caret-up"></i></a>
                              <a href="#" data-toggle="tooltip" title data-original-title="Sort Descending"><i class="fa fa-caret-down"></i></a>
                          </li>
                          <li>
                            <a href="#">Price</a>
                            <a href="#" data-toggle="tooltip" title data-original-title="Sort Ascending"><i class="fa fa-caret-up"></i></a>
                            <a href="#" data-toggle="tooltip" title data-original-title="Sort Ascending"><i class="fa fa-caret-down"></i></a>
                          </li>                            
                      </ul>
                  </div>
                  <div class="col-md-3">
                      <ul class="text_right tooltip_hover">
                          <li class="active" data-toggle="tooltip" title data-original-title="Box"><a href="index.html#bar"><i class="fa fa-th-large"></i></a></li>
                          <li data-toggle="tooltip" title data-original-title="List"><a href="index-list.html#bar"><i class="fa fa-list"></i></a></li> 
                      </ul>
                  </div>
            </div>
        </div>
        <!-- End Bar Filter properties-->

        <!-- Row Properties-->
        <div class="row">
            <!-- Item Property-->
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="item_property">
                    <div class="head_property">
                      <a href="properties.html">
                        <div class="title rent"></div>
                        <img src="img/property/1.jpg" alt="Image">
                        <h5>Central Park Ny</h5>
                      </a>
                    </div>                        
                    <div class="info_property">                                  
                        <ul>
                            <li><strong>Place </strong><span>Bogotá, Cundinamarca</span></li>
                            <li><strong>Price</strong><span>$1.700</span></li>
                        </ul>                                 
                    </div>
                  </div>
            </div>
            <!-- Item Property-->

            <!-- Item Property-->
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="item_property">
                    <div class="head_property">
                      <a href="properties.html">
                        <div class="title sale"></div>
                        <img src="img/property/2.jpg" alt="Image">
                        <h5>Central Park Ny</h5>
                      </a>
                    </div>                        
                    <div class="info_property">                                  
                        <ul>
                            <li><strong>Place </strong><span>Bogotá, Cundinamarca</span></li>
                            <li><strong>Price</strong><span>$1.700</span></li>
                        </ul>                                 
                    </div>
                  </div>
            </div>
            <!-- Item Property-->

            <!-- Item Property-->
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="item_property">
                    <div class="head_property">
                      <a href="properties.html">
                        <div class="title sale"></div>
                        <img src="img/property/3.jpg" alt="Image">
                        <h5>Central Park Ny</h5>
                      </a>
                    </div>                        
                    <div class="info_property">                                  
                        <ul>
                            <li><strong>Place </strong><span>Bogotá, Cundinamarca</span></li>
                            <li><strong>Price</strong><span>$1.700</span></li>
                        </ul>                                 
                    </div>
                  </div>
            </div>
            <!-- Item Property-->

            <!-- Item Property-->
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="item_property">
                    <div class="head_property">
                      <a href="properties.html">
                        <div class="title rent"></div>
                        <img src="img/property/4.jpg" alt="Image">
                        <h5>Central Park Ny</h5>
                      </a>
                    </div>                        
                    <div class="info_property">                                  
                        <ul>
                            <li><strong>Place </strong><span>Bogotá, Cundinamarca</span></li>
                            <li><strong>Price</strong><span>$1.700</span></li>
                        </ul>                                 
                    </div>
                  </div>
            </div>
            <!-- Item Property-->
          
            <!-- Item Property-->
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="item_property">
                    <div class="head_property">
                      <a href="properties.html">
                        <div class="title rent"></div>
                        <img src="img/property/5.jpg" alt="Image">
                        <h5>Central Park Ny</h5>
                      </a>
                    </div>                        
                    <div class="info_property">                                  
                        <ul>
                            <li><strong>Place </strong><span>Bogotá, Cundinamarca</span></li>
                            <li><strong>Price</strong><span>$1.700</span></li>
                        </ul>                                 
                    </div>
                  </div>
            </div>
            <!-- Item Property-->

            <!-- Item Property-->
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="item_property">
                    <div class="head_property">
                      <a href="properties.html">
                        <div class="title sale"></div>
                        <img src="img/property/6.jpg" alt="Image">
                        <h5>Central Park Ny</h5>
                      </a>
                    </div>                        
                    <div class="info_property">                                  
                        <ul>
                            <li><strong>Place </strong><span>Bogotá, Cundinamarca</span></li>
                            <li><strong>Price</strong><span>$1.700</span></li>
                        </ul>                                 
                    </div>
                  </div>
            </div>
            <!-- Item Property-->

            <!-- Item Property-->
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="item_property">
                    <div class="head_property">
                      <a href="properties.html">
                        <div class="title sale"></div>
                        <img src="img/property/7.jpg" alt="Image">
                        <h5>Central Park Ny</h5>
                      </a>
                    </div>                        
                    <div class="info_property">                                  
                        <ul>
                            <li><strong>Place </strong><span>Bogotá, Cundinamarca</span></li>
                            <li><strong>Price</strong><span>$1.700</span></li>
                        </ul>                                 
                    </div>
                  </div>
            </div>
            <!-- Item Property-->

            <!-- Item Property-->
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="item_property">
                    <div class="head_property">
                      <a href="properties.html">
                        <div class="title rent"></div>
                        <img src="img/property/8.jpg" alt="Image">
                        <h5>Central Park Ny</h5>
                      </a>
                    </div>                        
                    <div class="info_property">                                  
                        <ul>
                            <li><strong>Place </strong><span>Bogotá, Cundinamarca</span></li>
                            <li><strong>Price</strong><span>$1.700</span></li>
                        </ul>                                 
                    </div>
                  </div>
            </div>
            <!-- Item Property-->
        </div>
        <!-- End Row Properties-->

        <!-- Features -->
        <div class="row">
            <!-- Title-->
            <div class="col-md-12">
                <!-- Divisor-->
                <div class="divisor">
                    <div class="circle_left"></div>
                    <div class="circle_right"></div>
                </div>
                <!-- End Divisor-->

                <div class="titles">
                    <h1>THEME FEATURES</h1>
                </div>
            </div>
            <!-- End Title-->

            <!-- Services-->
            <div class="services padding_top_mini">
                <!-- Item Service-->
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <h3><a href="#">Metrics results</a></h3>
                    <div class="item_service">
                        <div class="image_service">
                            <i class="fa fa-coffee"></i>
                        </div>
                        <div class="info_service">
                            <p>Pellentesque habitant morbi tristi senectus et netus et.</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!-- End Item Service-->  

               <!-- Item Service-->
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <h3><a href="#">Featured projects</a></h3>
                    <div class="item_service">
                        <div class="image_service">
                            <i class="fa fa-desktop"></i>
                        </div>
                        <div class="info_service">
                            <p>Pellentesque habitant morbi tristi senectus et netus et .</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!-- End Item Service--> 

                <!-- Item Service-->
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <h3><a href="#">Find your Place</a></h3>
                    <div class="item_service">
                        <div class="image_service">
                            <i class="fa fa-suitcase"></i>
                        </div>
                        <div class="info_service">
                            <p>Pellentesque habitant morbi tristi senectus et netus et .</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!-- End Item Service-->                   
           
                <!-- Item Service-->
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <h3><a href="#">Advertise rentals</a></h3>
                    <div class="item_service">
                        <div class="image_service">
                            <i class="fa fa-tasks"></i>
                        </div>
                        <div class="info_service">
                            <p>Pellentesque habitant morbi tristi senectus et netus et .</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!-- End Item Service-->  

               <!-- Item Service-->
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <h3><a href="#">Guidance</a></h3>
                    <div class="item_service">
                        <div class="image_service">
                            <i class="fa fa-tags"></i>
                        </div>
                        <div class="info_service">
                            <p>Pellentesque habitant morbi tristi senectus et netus et .</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!-- End Item Service--> 

                <!-- Item Service-->
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <h3><a href="#">List your property</a></h3>
                    <div class="item_service">
                        <div class="image_service">
                            <i class="fa fa-camera"></i>
                        </div>
                        <div class="info_service">
                            <p>Pellentesque habitant morbi tristi senectus et netus et .</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!-- End Item Service-->  
            </div>
            <!-- End Services-->
        </div>
        <!-- End Features -->

        <!-- Content Carousel Properties -->
        <div class="content-carousel">
            <div class="row">
                <div class="col-md-12">
                    <!-- Divisor-->
                    <div class="divisor">
                        <div class="circle_left"></div>
                        <div class="circle_right"></div>
                    </div>
                    <!-- End Divisor-->

                    <!-- Title-->
                    <div class="titles">
                        <h1>CAROUSEL PROPERTIES</h1>
                    </div>
                    <!-- End Title-->
                </div>
            </div>

            <!-- Carousel Properties -->
            <div id="properties-carousel" class="properties-carousel">
                <!-- Item Property-->
                <div class="item_property">
                    <div class="head_property">
                      <a href="properties.html">
                        <div class="title rent"></div>
                        <img src="img/property/1.jpg" alt="Image">
                        <h5>Central Park Ny</h5>
                      </a>
                    </div>                        
                    <div class="info_property">                                  
                        <ul>
                            <li><strong>Place </strong><span>Bogotá, Cundinamarca</span></li>
                            <li><strong>Price</strong><span>$1.700</span></li>
                        </ul>                                 
                    </div>
                </div>
                <!-- Item Property-->

                <!-- Item Property-->
                <div class="item_property">
                    <div class="head_property">
                      <a href="properties.html">
                        <div class="title sale"></div>
                        <img src="img/property/2.jpg" alt="Image">
                        <h5>Central Park Ny</h5>
                      </a>
                    </div>                        
                    <div class="info_property">                                  
                        <ul>
                            <li><strong>Place </strong><span>Bogotá, Cundinamarca</span></li>
                            <li><strong>Price</strong><span>$1.700</span></li>
                        </ul>                                 
                    </div>
                </div>
                <!-- End Item Property-->

                <!-- Item Property-->
                 <div class="item_property">
                    <div class="head_property">
                      <a href="properties.html">
                        <div class="title sale"></div>
                        <img src="img/property/3.jpg" alt="Image">
                        <h5>Central Park Ny</h5>
                      </a>
                    </div>                        
                    <div class="info_property">                                  
                        <ul>
                            <li><strong>Place </strong><span>Bogotá, Cundinamarca</span></li>
                            <li><strong>Price</strong><span>$1.700</span></li>
                        </ul>                                 
                    </div>
                </div>
                <!-- End Item Property-->

                <!-- Item Property-->
                <div class="item_property">
                    <div class="head_property">
                      <a href="properties.html">
                        <div class="title rent"></div>
                        <img src="img/property/4.jpg" alt="Image">
                        <h5>Central Park Ny</h5>
                      </a>
                    </div>                        
                    <div class="info_property">                                  
                        <ul>
                            <li><strong>Place </strong><span>Bogotá, Cundinamarca</span></li>
                            <li><strong>Price</strong><span>$1.700</span></li>
                        </ul>                                 
                    </div>
                </div>
                <!-- End Item Property-->

                <!-- Item Property-->
                 <div class="item_property">
                    <div class="head_property">
                      <a href="properties.html">
                        <div class="title sale"></div>
                        <img src="img/property/3.jpg" alt="Image">
                        <h5>Central Park Ny</h5>
                      </a>
                    </div>                        
                    <div class="info_property">                                  
                        <ul>
                            <li><strong>Place </strong><span>Bogotá, Cundinamarca</span></li>
                            <li><strong>Price</strong><span>$1.700</span></li>
                        </ul>                                 
                    </div>
                </div>
                <!-- End Item Property-->

                <!-- Item Property-->
                <div class="item_property">
                    <div class="head_property">
                      <a href="properties.html">
                        <div class="title rent"></div>
                        <img src="img/property/8.jpg" alt="Image">
                        <h5>Central Park Ny</h5>
                      </a>
                    </div>                        
                    <div class="info_property">                                  
                        <ul>
                            <li><strong>Place </strong><span>Bogotá, Cundinamarca</span></li>
                            <li><strong>Price</strong><span>$1.700</span></li>
                        </ul>                                 
                    </div>
                </div>
                <!-- End Item Property-->
            </div>
            <!-- End Carousel Properties -->
        </div>
        <!-- End Content Carousel Properties -->
    </div>
    <!-- End Container -->
</div>
<!-- End content info-->

<!-- Sponsors-->
<div class="container">
    <ul class="sponsors">
        <li data-toggle="tooltip" title data-original-title="Name Sponsor"> <a href="#"><img src="img/sponsors/1.png" alt="Image"></a></li>
        <li data-toggle="tooltip" title data-original-title="Name Sponsor"> <a href="#"><img src="img/sponsors/2.png" alt="Image"></a></li>
        <li data-toggle="tooltip" title data-original-title="Name Sponsor"> <a href="#"><img src="img/sponsors/3.png" alt="Image"></a></li>
        <li data-toggle="tooltip" title data-original-title="Name Sponsor"> <a href="#"><img src="img/sponsors/4.png" alt="Image"></a></li>
        <li data-toggle="tooltip" title data-original-title="Name Sponsor"> <a href="#"><img src="img/sponsors/5.png" alt="Image"></a></li>
        <li data-toggle="tooltip" title data-original-title="Name Sponsor"> <a href="#"><img src="img/sponsors/3.png" alt="Image"></a></li>
        <li data-toggle="tooltip" title data-original-title="Name Sponsor"> <a href="#"><img src="img/sponsors/4.png" alt="Image"></a></li>
        <li data-toggle="tooltip" title data-original-title="Name Sponsor"> <a href="#"><img src="img/sponsors/3.png" alt="Image"></a></li>
    </ul>
</div>
<!-- End Sponsors-->

<!-- Full info-->
<section class="full_info">
    <div class="container">
        <div class="row text-center service-process">

            <!-- Step 1 -->
            <a href="step_1.html">
              <div class="col-md-3">
                  <div class="thumbnail-process">
                    <div class="caption-head">
                      <em class="caption-icon fa fa-check icon-big"></em>                            
                      <h2 class="caption-title">Register</h2>
                    </div>
                  </div>
              </div>
            </a>

            <!-- Step 2 -->
            <a href="step_2.html">
              <div class="col-md-3">
                  <div class="thumbnail-process">
                    <div class="caption-head">
                      <em class="caption-icon fa fa-edit icon-big"></em>
                        <h2 class="caption-title">Publish</h2>
                    </div>
                  </div>
              </div>
            </a>

            <!-- Step 3 -->
            <div class="col-md-3">
                <div class="thumbnail-process">
                  <div class="caption-head">
                    <em class="caption-icon fa fa-credit-card icon-big"></em>
                      <h2 class="caption-title">Monetize</h2>
                  </div>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="col-md-3">
                <div class="thumbnail-process">
                  <div class="caption-head">
                    <em class="caption-icon fa fa-plane icon-big"></em>
                      <h2 class="caption-title">Success</h2>
                  </div>                           
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Full info-->

@stop