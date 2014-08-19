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
                        <li title="Print" data-toggle="tooltip"><i class="fa fa-print"></i><a href="#">Print</a></li>
                        <li title="Call Ralph" data-toggle="tooltip"><i class="fa fa-phone"></i><a href="#">(210) 215-1090</a></li>
                        <li title="Contact" data-toggle="tooltip"><i class="fa fa-envelope"></i><a href="mailto:ralphplaza@hotmail.com?Subject=Hello%20Ralph">Email</a></li>
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
                    <p>Single-story home with three bedrooms plus study, two bathrooms, a formal dining room, an eat-in kitchen and breakfast, two-car attached garage, and a covered patio. Open-concept plan features raised ceilings and arched door openings. Private master suite features a tray ceiling and bay window. Backyard features a large covered patio with high ceiling.</p>
                    <ul class="info_details">                          
                        <li><strong>Price:</strong><span> $236,990 </span></li>
                        <li><strong>Sq. FEET:</strong><span>1,921</span></li>
                        <li><strong>Story:</strong><span>1 story</span></li>
                        <li><strong>Bathrooms:</strong><span>2</span></li>
                        <li><strong>Bedrooms:</strong><span>3</span></li>
                        <li><strong>Tour:</strong><span><a href="http://www.tourbuzz.net/public/vtour/display/216796?idx=1">View</a></span></li>
                    </ul>
                </div>
            </div> 
        </div>

         <!-- Tabs Detail Properties -->
        <div class="row padding_top">
            <div class="col-md-12">
                <!--NAV TABS-->
                <ul class="tabs"> 
                    <li><a href="#tab1">Energy Savings &amp; Comfort</a></li> 
                    <li><a href="#tab2">Exterior</a></li>                                              
                    <li><a href="#tab3">Interior</a></li>
                    <li><a href="#tab4">Rooms</a></li>  
                    <li><a href="#tab5">Additional Features</a></li>  
                    <li><a href="#tab6">Construction &amp; Disclaimer</a></li>                                                
                </ul>                       
                            
                <!--CONTAINER TABS-->   
                <div class="tab_container"> 
                    <!-- Tab 1: Energy Savings -->      
                    <div id="tab1" class="tab_content">
                        <div class="row">
                            <div class="col-xs-12">
                                <h4>Energy Savings &amp; Comfort</h4>
                                <ul class="general_info">
                                    <li>Energy Star Certified Homes, (Optional)</li>
                                    <li>Ce3 Heating &amp; Cooling Energy Certification</li>
                                    <li>Carrier High Efficiency 14 SEER HVAC system with Puron</li>
                                    <li>Carrier High Efficiency gas furnace</li>
                                    <li>R-8 HVAC ductwork with fresh air intake</li>
                                    <li>HVAC jumper ducts for room balancing</li>
                                    <li>Honeywell digital thermostat</li>
                                    <li>R-13 cellulose wall insulation</li>
                                    <li>R-30 cellulose blown-in attic insulation</li>
                                    <li>R-50 cellulose insulation between garage ceiling and living areas</li>
                                    <li>R-22 cellulose insulation on sloped ceilings</li>
                                    <li>1/2” Dow R-3 insulated sheathing</li>
                                    <li>Polycel insulation around windows, doors, bottom plate and other openings</li>
                                    <li>Double-pane LoE3 insulated, white vinyl windows (tilt-in for easy clean)</li>
                                    <li>Radiant Barrier Sheathing</li>
                                </ul>
                            </div>
                            
                        </div>    

                        <!-- Divisor-->
                        <div class="divisor">
                            <div class="circle_left"></div>
                            <div class="circle_right"></div>
                        </div>
                        <!-- End Divisor-->
              
                    </div>
                    <!-- END TAB 1 -->      

                    <!-- TAB 2 Exterior-->      
                    <div id="tab2" class="tab_content">                                                             
                       <div class="row">
                            <div class="col-xs-12">
                                <h4>Exterior</h4>
                                <ul class="general_info">
                                    <li>Covered patio included on all homes</li>
                                    <li>3 sides brick</li>
                                    
                                </ul>
                            </div>
                        </div>  

                        <!-- Divisor-->
                        <div class="divisor">
                            <div class="circle_left"></div>
                            <div class="circle_right"></div>
                        </div>
                        <!-- End Divisor-->  

                    </div>
                    <!-- END TAB 2 -->

                    <!-- Tab 3 Interior -->      
                    <div id="tab3" class="tab_content">                
                        <div class="row">
                            <div class="col-xs-12">
                                <h4>Exterior</h4>
                                <ul class="general_info">
                                    <li></li>
                                    
                                </ul>
                            </div>
                        </div> 

                        <!-- Divisor-->
                        <div class="divisor">
                            <div class="circle_left"></div>
                            <div class="circle_right"></div>
                        </div>
                        <!-- End Divisor-->

                    </div> 
                    <!-- END TAB 3 --> 

                    <!-- Tab 4: Bathrooms, Kitchen & Laundry -->      
                    <div id="tab4" class="tab_content">                
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Master Bath</h4>
                                <div class="col-xs-12">
                                    <ul class="general_info">
                                        <li>Royal Granite cultured marble vanity tops with under-mount sink</li>
                                        <li>36” high vanity cabinet with double sink and drawers per plan</li>
                                        <li>Moen chrome washer-less faucets</li>
                                        <li>Medicine cabinet</li>      
                                        <li>Garden tub with ceramic tile backsplash</li>
                                        <li>Separate shower with ceramic tile</li>
                                        <li>Walk-in closet with generous shelving</li>
                                        </li>Elongated commode</li>                     
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <h4>Kitchen</h4>
                                <div class="col-xs-12">
                                    <ul class="general_info">
                                        <li>Granite countertops with ceramic tile backsplash</li>
                                        <li>Kitchen Island per plan</li>
                                        <li>High quality Maple cabinetry with 42” high uppers and decorative crown molding</li>
                                        <li>Deep stainless steel sink with designer chrome faucet by Moen</li>      
                                        <li>Complete GE stainless steel appliance package including extra-large GE standard-clean energy efficient gas range, Energy Star rated built-in GE dishwasher, and GE microwave</li>
                                        <li>Garbage disposal</li>
                                        <li>Recessed icemaker line at refrigerator</li>                   
                                    </ul>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <h4>Secondary Bathroom</h4>
                                <div class="col-xs-12">
                                    <ul class="general_info">
                                        <li>Royal Granite cultured marble vanity tops with under-mount sink</li>
                                        <li>Moen chrome washer-less faucets</li>
                                        <li>Medicine cabinet</li>
                                        <li>Tub with ceramic tile shower walls</li>      
                                        <li>Elongated commode</li>                     
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <h4>Laundry Room</h4>
                                <div class="col-xs-12">
                                    <ul class="general_info">
                                        <li>Overhead storage shelf with clothing rod</li>
                                        <li>Storage and/or freezer space per plan</li>                     
                                    </ul>
                                </div>
                            </div>

                        </div>

                        <!-- Divisor-->
                        <div class="divisor">
                            <div class="circle_left"></div>
                            <div class="circle_right"></div>
                        </div>
                        <!-- End Divisor-->
                        
                    </div> 
                    <!-- END TAB 4 --> 

                    <!-- Tab 5 -->      
                    <div id="tab5" class="tab_content">                
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
                        
                    </div> 
                    <!-- END TAB 5 --> 

                    <!-- Tab 6 -->      
                    <div id="tab6" class="tab_content">                
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
                        
                    </div> 
                    <!-- END TAB 6 --> 

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
                        <h1>OTHER FLOOR PLANS</h1>
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