@extends('layouts.master')

@section('title')

Floor Plans | Bryce

@stop

@section('content')

<!-- Section Title -->
<div class="section_title properties">
    <div class="container">
        <div class="row"> 
            <div class="col-md-9">
                <h1>FLOOR PLANS
                    <span><a href="/floorplans/bryce">BRYCE</a></span>
                </h1>
            </div>     
        </div>
    </div>            
</div>
<!-- End Section Title -->

<!-- End content info -->
<section class="content_info">
    <div class="container">

        <div class="row padding_top">
            <div class="col-md-8">
                <div class="more_slide tooltip_hover">
                    <ul>
                        <li title="Print Propertie" data-toggle="tooltip"><i class="fa fa-print"></i><a href="#">Print</a></li>
                        <li title="Chat Online" data-toggle="tooltip"><i class="fa fa-comment"></i><a href="#">Live chat</a></li>
                        <li title="Contact Us" data-toggle="tooltip"><i class="fa fa-envelope"></i><a href="#">Contact</a></li>
                        <li title="favorite propertie" data-toggle="tooltip"><i class="fa fa-star"></i><a href="#">Favorites</a></li>
                        <li title="Publish info" data-toggle="tooltip"><i class="fa fa-calendar"></i><a href="#">Publish: 09/06/2013</a></li>
                    </ul>
                </div>
                <!-- Slide News-->           
                <div class="camera_wrap" id="slide_details">
                    <!-- Item Slide -->  
                    <div  data-src="/img/property/5.jpg">
                        <div class="camera_property fadeFromBottom">
                            <a href="#"><h4>196 ROYAL BLUFF RD JACKSONVILLE NORTH CAROLINA 50212</h4></a>
                            <h1><span>$</span> 500</h1> <p>Pellentesque habitant morbi tristique senectus et netus et.</p>            
                        </div>
                    </div>
                    <!-- End Item Slide -->  
                    <!-- Item Slide -->  
                    <div  data-src="/img/property/7.jpg">
                        <div class="camera_property fadeFromBottom">
                            <a href="#"><h4>196 ROYAL BLUFF RD JACKSONVILLE NORTH CAROLINA 50212</h4></a>
                            <h1><span>$</span> 500</h1> <p>Pellentesque habitant morbi tristique senectus et netus et.</p>            
                        </div>
                    </div>
                    <!-- End Item Slide -->                             
                </div>
                <!-- End Slide-->  
            </div>
            <div class="col-md-4">
                <div class="description">
                    <h4>GENERAL DESCRIPTION</h4>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada.</p>

                    <h4>379 AVENUE NEW YORK 33139 NY</h4>
                    <ul class="info_details">                          
                        <li><strong>Price:</strong><span> $500 </span></li>
                        <li><strong>Location:</strong><span>New York</span></li>
                        <li><strong>Area:</strong><span>350 mts²</span></li>
                        <li><strong>Address:</strong><span>New York 33 # 1-39</span></li>
                        <li><strong>Bathrooms:</strong><span>2</span></li>
                        <li><strong>Bedrooms:</strong><span>3</span></li>
                    </ul>
                </div>
            </div> 
        </div>

         <!-- Tabs Detail Properties -->
        <div class="row padding_top">
            <div class="col-md-12">
                <!--NAV TABS-->
                <ul class="tabs"> 
                    <li><a href="#tab1">More Details</a></li> 
                    <li><a href="#tab2">Contact Agent</a></li>                                              
                    <li><a href="#tab3">Comments</a></li>                                              
                </ul>                       
                            
                <!--CONTAINER TABS-->   
                <div class="tab_container"> 
                    <!--Tab1 Genral info-->      
                    <div id="tab1" class="tab_content">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>General Features</h4>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-4 col-md-4">
                                        <ul class="general_info">
                                            <li><i class="icon-ok"></i> Air conditioning</li>
                                            <li><i class="icon-ok"></i> Balcony</li>
                                            <li><i class="icon-ok"></i> Bedding</li>
                                            <li><i class="icon-remove"></i>Cable TV</li>      
                                            <li><i class="icon-ok"></i> Wifi</li>
                                            <li><i class="icon-remove"></i>DVD</li>                     
                                        </ul>
                                    </div>
                                    <div class="col-xs-12 col-sm-4 col-md-4">
                                        <ul class="general_info">
                                            <li><i class="icon-ok"></i> Wifi</li>
                                            <li><i class="icon-remove"></i>DVD</li>
                                            <li><i class="icon-ok"></i> Balcony</li>
                                            <li><i class="icon-ok"></i> Bedding</li>
                                            <li><i class="icon-ok"></i> Parking</li>
                                            <li><i class="icon-ok"></i> Computer</li>                           
                                        </ul>
                                    </div>
                                    <div class="col-xs-12 col-sm-4 col-md-4">
                                        <ul class="general_info">
                                            <li><i class="icon-ok"></i> Radio</li>
                                            <li><i class="icon-remove"></i>Terrace</li>                              
                                            <li><i class="icon-remove"></i>Use of pool</li>
                                            <li><i class="icon-ok"></i> Microwave</li>
                                            <li><i class="icon-ok"></i> Wifi</li>
                                            <li><i class="icon-remove"></i>DVD</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                            </div>
                        </div>    

                        <!-- Divisor-->
                        <div class="divisor">
                            <div class="circle_left"></div>
                            <div class="circle_right"></div>
                        </div>
                        <!-- End Divisor-->

                        <!-- Map-->      
                        <div class="row">   
                          <div class="col-md-12">
                              <h4>Map Propertie</h4>             
                              <div class="map_area">
                                <iframe src="https://maps.google.es/maps?f=d&amp;source=s_q&amp;hl=es&amp;geocode=%3BCUBxZFSzLmtjFXFAbQIdK8KW-yk7CD_TpU_CiTFi_nfhBo8LyA&amp;q=new+york&amp;aq=&amp;sll=40.396764,-3.713379&amp;sspn=9.61761,19.753418&amp;ie=UTF8&amp;hq=&amp;hnear=Nueva+York,+Estados+Unidos&amp;t=m&amp;daddr=Nueva+York,+EEUU&amp;ll=40.859525,-73.959961&amp;spn=0.311592,0.411987&amp;z=10&amp;iwloc=ddw1&amp;output=embed"></iframe>
                              </div>
                          </div>
                        </div>
                        <!--End  Map-->                 
                    </div>
                    <!--End Tab1 Genral info-->      

                    <!--Tab2 Contact Agent-->      
                    <div id="tab2" class="tab_content">                                                             
                       <div class="row">
                            <div class="col-md-6">
                                <h4>Contact Agent</h4>
                                <form id="form" action="send_mail.php">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" placeholder="Name" name="Name" required>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="email" placeholder="Email"  name="Email" required>
                                        </div>
                                    </div>
                                    <textarea placeholder="Your Message" name="message" required></textarea>
                                    <input type="submit" name="Submit" value="Send Message" class="button">
                                </form>  
                                <div class="result"></div>
                            </div>
                            <div class="col-md-6">                                
                                 <div class="row item_agent">
                                    <div class="col-md-6 image_agent">
                                        <img src="/img/team/1.jpg" alt="Image">
                                    </div>
                                    <div class="col-md-6 info_agent">
                                        <h5>PAUL MCCARTHY</h5>
                                        <ul>
                                            <li><i class="fa fa-envelope"></i><a href="#">pmaccarty@domain.com</a></li>
                                            <li><i class="fa fa-phone"></i><a href="#">331-23-45</a></li>
                                            <li><i class="fa fa-mobile-phone"></i><a href="#">331-23-45</a></li>
                                        </ul>                                        
                                    </div>
                                 </div>
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, habitant morbi tristique senectus.</p>
                            </div>
                       </div>        
                    </div>
                    <!--End Tab2 Contact Agent-->      

                    <!--Tab3 commnets-->      
                    <div id="tab3" class="tab_content">                
                        <!-- commments -->
                        <ul class="media-list comments">
                           <!-- commment -->
                          <li class="media">
                            <a class="pull-left" href="#">
                              <img src="/img/comment/1.jpg" alt="Image">
                            </a>
                            <div class="media-body">
                              <h5 class="media-heading">Jason - <a href="#">reply</a></h5>
                              <p>The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>                 
                             
                                  <!-- Sub commment -->
                                  <div class="media">
                                        <a class="pull-left" href="#">
                                      <img src="/img/comment/2.jpg" alt="Image">
                                    </a>
                                    <div class="media-body">
                                      <h5 class="media-heading">Max - <a href="#">reply</a></h5>
                                      <p>The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                                     </div>
                                </div>
                                <!-- End Sub commment -->
                            </div>
                          </li>
                          <!-- End commment -->

                          <!-- commment -->
                          <li class="media">
                            <a class="pull-left" href="#">
                              <img src="/img/comment/3.jpg" alt="Image">
                            </a>
                            <div class="media-body">
                              <h5 class="media-heading">Lebron - <a href="#">reply</a></h5>
                              <p>The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                            </div>
                          </li>
                          <!-- End commment -->
                        </ul>
                        <!-- End commments -->

                        <h4>Coment</h4>
                        <form id="form-coment" action="send_mail.php">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" placeholder="Name" name="Name" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" placeholder="Email"  name="Email" required>
                                </div>
                            </div>
                            <textarea placeholder="Your Message" name="message" required></textarea>
                            <input type="submit" name="Submit" value="Send Message" class="button">
                        </form>  
                    </div>
                    <!--End Tab3 commnets--> 
                </div> 
                <!--END CONTAINER TABS-->
            </div>
        </div>
         <!-- Tabs Detail Properties -->

        <!-- Content Carousel Properties -->
        <div class="content-carousel">
            <div class="row">
                <div class="col-md-12">
                    <!-- Title-->
                    <div class="titles">
                        <h1>RECENT PROPERTIES</h1>
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
                        <img src="/img/property/1.jpg" alt="Image">
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
                        <img src="/img/property/2.jpg" alt="Image">
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
                        <img src="/img/property/3.jpg" alt="Image">
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
                        <img src="/img/property/4.jpg" alt="Image">
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
                        <img src="/img/property/3.jpg" alt="Image">
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
                        <img src="/img/property/8.jpg" alt="Image">
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
</section>
<!-- End content info-->

@stop