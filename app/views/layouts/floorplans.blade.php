@extends('layouts.master')

@section('title')

Floor Plans | @yield('floorplanname')

@stop

@section('content')

<!-- Section Title -->
<div class="section_title properties">
    <div class="container">
        <div class="row"> 
            <div class="col-md-9">
                <h1>FLOOR PLANS
                    <span><a href="/floorplans/bryce">@yield('floorplanname')</a></span>
                </h1>
            </div>     
        </div>
    </div>            
</div>
<!-- End Section Title -->

<!-- End content info -->
<section class="content_info">
    <div class="container">

        <div class="row">
            <div class="col-md-8">
                <div class="more_slide tooltip_hover">
                    <ul>
                        <li title="Click to view PDF" data-toggle="tooltip"><i class="fa fa-file-pdf-o"></i><a href="@yield('floorplanpdf')">View Floor Plan</a></li>
                        <li title="Click to view PDF" data-toggle="tooltip"><i class="fa fa-file-pdf-o"></i><a href="@yield('floorplanelevation')">View Elevation Options</a></li>
                        <li title="Call Ralph" data-toggle="tooltip"><i class="fa fa-phone"></i><a href="#">(210) 215-1090</a></li>
                        <li title="Contact" data-toggle="tooltip"><i class="fa fa-envelope"></i><a href="mailto:ralphplaza@hotmail.com?Subject=Hello%20Ralph">Email</a></li>
                    </ul>
                </div>
    <!-- Start WOWSlider -->
    <div id="wowslider-container1">
        @yield('wowslider')
    </div>
    <!-- End Slideshow -->
            </div>
            <div class="col-md-4">
                <div class="description">
                    <h4>@yield('floorplanname')</h4>
                    <p>@yield('description')</p>
                    <ul class="info_details">                          
                        <li><strong>Starting Price:</strong><span>@yield('price')</span></li>
                        <li><strong>Sq. FEET:</strong><span>@yield('sqft')</span></li>
                        <li><strong>Stories:</strong><span>@yield('story')</span></li>
                        <li><strong>Bathrooms:</strong><span>@yield('bath')</span></li>
                        <li><strong>Bedrooms:</strong><span>@yield('bed')</span></li>
                        <li><strong>Picture Tour:</strong><span>@yield('tour')</span></li>
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
                                    <li>Rustic knotty Alder wood front door with clavos</li>
                                    <li>Divided light windows at front elevations</li>
                                    <li>Hardiplank exterior trim materials with 15 year manufacturer’s limited warranty</li>
                                    <li>Cemplank exterior siding and trim with 25 year manufacturer’s limited warranty</li>
                                    <li>Pre-plumbed with Home Team Taexx Pest Control System</li>
                                    <li>Beautiful landscaping to include full sod, seasonal shrubs &amp; two trees</li>
                                    <li>Fenced rear yard</li>
                                    <li>Full-yard irrigation system </li>
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
                                <h4>Interior</h4>
                                <ul class="general_info">
                                    <li>Rounded drywall corners</li>
                                    <li>Raised ceilings per plan</li>
                                    <li>Arched drywall openings per plan</li>
                                    <li>Open rail with wood spindles at stairs and overlooks per plan</li>
                                    <li>Cheyenne raised panel interior doors</li>
                                    <li>Kwikset distinctive door hardware with brushed nickel finish</li>
                                    <li>5 1/4" decorative baseboards with oversized 2 1/2" door casing</li>
                                    <li>2” faux-wood blinds in all operable windows, and master bath window</li>
                                    <li>Integral blind at rear door glass insert</li>
                                    <li>Ceramic tile flooring in foyer, kitchen, breakfast room, bathrooms, and laundry room</li>
                                    <li>High quality carpet with 5 year wear limited warranty and 1/2” –5# carpet pad</li>
                                    <li>MDF Wood Shelving with stained rods</li>
                                    <li>PPG high quality low VOC interior paint.</li>
                                    <li>Choose from 5 decorator colors for walls with white ceilings, doors, and trim</li>
                                    
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

                    <!-- Tab 5: Addition Features -->      
                    <div id="tab5" class="tab_content">                
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Garage</h4>
                                <div class="col-xs-12">
                                    <ul class="general_info">
                                        <li>Finished room with paint, texture and base molding</li>
                                        <li>Wayne Dalton insulated steel garage door</li>
                                        <li>One garage door opener &amp; two remote controls</li>                    
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <h4>Electrical</h4>
                                <div class="col-xs-12">
                                    <ul class="general_info">
                                        <li>Pre-wired for telephones in game room, kitchen, master bedroom, and study</li>
                                        <li>Pre-wired for cable television outlets in family, game room, master bedroom, and study</li>
                                        <li>Smoke and carbon monoxide detectors</li>
                                        <li>Security System to include: 1 keypad, 1 siren, perimeter doors, and pre-wire for two devices (motion or glass break)</li>                  
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <h4>Lighting</h4>
                                <div class="col-xs-12">
                                    <ul class="general_info">
                                        <li>Brushed Nickel finish designer light fixtures</li>
                                        <li>Ceiling fan with light fixture in family, game room, master bedroom, and study</li>
                                        <li>Recessed can lighting in kitchen</li>
                                        <li>Fluorescent lights in garage, master closet, and laundry</li>                  
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <h4>Plumbing</h4>
                                <div class="col-xs-12">
                                    <ul class="general_info">
                                        <li>High Efficiency gas water heater</li>
                                        <li>Pre-plumbed for water softener</li>
                                        <li>Viega Pex, high pressure, high durability waterlines</li>               
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
                    <!-- END TAB 5 --> 

                    <!-- Tab 6: Construction & Disclaimer -->      
                    <div id="tab6" class="tab_content">                
                        <div class="row">
                            <div class="col-md-12">
                                <h4>Construction</h4>
                                <div class="col-xs-12">
                                    <ul class="general_info">
                                        <li>Chesmar 10-Year Home Buyer’s Warranty</li>
                                        <li>3rd party inspections for quality assurance</li>
                                        <li>Minimum of two scheduled meetings with superintendent prior to closing</li>
                                        <li>Engineered post tension foundations</li>
                                        <li>Engineered roof trusses and floor systems</li>                 
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <h4><em>Disclaimer</em></h4>
                                <div class="col-xs-12">
                                    <p>Included features may vary based on the elevation and options selected and are subject to change without notice. Effective: 06/03/2013</p>
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
                    <!-- END TAB 6 --> 

                </div>
                <!--END CONTAINER TABS-->
            </div>
        </div>
         <!-- Tabs Detail Properties -->

        <!-- Floor Plan Carousel Title & Divider -->
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

            <!-- Floor Plan Carousel -->
            <div id="properties-carousel" class="properties-carousel">
                <!-- Bryce -->
                <div class="item_property">
                    <div class="head_property">
                      <a href="#">
                        <img src="/img/property/Bryce_floorplanx325.png" alt="Image">
                        <h5>Bryce</h5>
                      </a>
                    </div>                        
                    <div class="info_property">                                  
                        <ul>
                            <li><strong>Bed/Bath/Story:</strong><span>4/3/2</span></li>
                            <li><strong>SQ: FEET:</strong><span>1,921 Sq. Ft</span></li>
                        </ul>                                 
                    </div>
                </div>
                <!-- End Bryce -->

                <!-- Casandra -->
                <div class="item_property">
                    <div class="head_property">
                      <a href="#">
                        <img src="/img/property/casandra_floorplanx325.png" alt="Image">
                        <h5>Casandra</h5>
                      </a>
                    </div>                        
                    <div class="info_property">                                  
                        <ul>
                            <li><strong>Bed/Bath/Story:</strong><span>4/2/1</span></li>
                            <li><strong>SQ FEET:</strong><span>2,083 Sq. Ft</span></li>
                        </ul>                                 
                    </div>
                </div>
                <!-- End Casandra -->

                <!-- Branton -->
                 <div class="item_property">
                    <div class="head_property">
                      <a href="#">
                        <img src="/img/property/branton_floorplanx325.png" alt="Image">
                        <h5>Branton</h5>
                      </a>
                    </div>                        
                    <div class="info_property">                                  
                        <ul>
                            <li><strong>Bed/Bath/Story:</strong><span>3/2.5/1.5</span></li>
                            <li><strong>SQ FEET:</strong><span>2,303 Sq. Ft</span></li>
                        </ul>                                 
                    </div>
                </div>
                <!-- End Branton -->

                <!-- Ellison -->
                <div class="item_property">
                    <div class="head_property">
                      <a href="#">
                        <img src="/img/property/ellison_floorplanx325.png" alt="Image">
                        <h5>Ellison</h5>
                      </a>
                    </div>                        
                    <div class="info_property">                                  
                        <ul>
                            <li><strong>Bed/Bath/Story:</strong><span>4/2.5/2.5</span></li>
                            <li><strong>SQ FEET:</strong><span>2,445 Sq. Ft</span></li>
                        </ul>                                 
                    </div>
                </div>
                <!-- End Ellison -->

                <!-- Harley -->
                 <div class="item_property">
                    <div class="head_property">
                      <a href="#">
                        <img src="/img/property/harley_floorplanx325.png" alt="Image">
                        <h5>Harley</h5>
                      </a>
                    </div>                        
                    <div class="info_property">                                  
                        <ul>
                            <li><strong>Bed/Bath/Story:</strong><span>4/3.5/2</span></li>
                            <li><strong>SQ FEET:</strong><span>2,640 Sq. Ft</span></li>
                        </ul>                                 
                    </div>
                </div>
                <!-- End Harley -->

                <!-- Kendall -->
                <div class="item_property">
                    <div class="head_property">
                      <a href="#">
                        <img src="/img/property/kendall_floorplanx325.png" alt="Image">
                        <h5>Kendall</h5>
                      </a>
                    </div>                        
                    <div class="info_property">                                  
                        <ul>
                            <li><strong>Bed/Bath/Story:</strong><span>5/3/2</span></li>
                            <li><strong>SQ FEET:</strong><span>2,665 Sq. Ft</span></li>
                        </ul>                                 
                    </div>
                </div>
                <!-- End Kendall -->

                <!-- Nolan -->
                <div class="item_property">
                    <div class="head_property">
                      <a href="#">
                        <img src="/img/property/nolan_floorplanx325.png" alt="Image">
                        <h5>Nolan</h5>
                      </a>
                    </div>                        
                    <div class="info_property">                                  
                        <ul>
                            <li><strong>Bed/Bath/Story:</strong><span>4/3/2</span></li>
                            <li><strong>SQ FEET:</strong><span>2,803 Sq. Ft</span></li>
                        </ul>                                 
                    </div>
                </div>
                <!-- End Nolan -->

                <!-- Gallo -->
                <div class="item_property">
                    <div class="head_property">
                      <a href="#">
                        <img src="/img/property/gallo_floorplanx325.png" alt="Image">
                        <h5>Gallo</h5>
                      </a>
                    </div>                        
                    <div class="info_property">                                  
                        <ul>
                            <li><strong>Bed/Bath/Story:</strong><span>5/3/2</span></li>
                            <li><strong>SQ FEET:</strong><span>2,816 Sq. Ft</span></li>
                        </ul>                                 
                    </div>
                </div>
                <!-- End Gallo -->

                <!-- Sheffield -->
                <div class="item_property">
                    <div class="head_property">
                      <a href="#">
                        <img src="/img/property/sheffield_floorplanx325.png" alt="Image">
                        <h5>Sheffield</h5>
                      </a>
                    </div>                        
                    <div class="info_property">                                  
                        <ul>
                            <li><strong>Bed/Bath/Story:</strong><span>4/3.5/2</span></li>
                            <li><strong>SQ FEET:</strong><span>3,000 Sq. Ft</span></li>
                        </ul>                                 
                    </div>
                </div>
                <!-- End Sheffield -->
            </div>
            <!-- End Carousel Properties -->
        </div>
        <!-- End Content Carousel Properties -->
    </div>
</section>
<!-- End content info-->

@stop