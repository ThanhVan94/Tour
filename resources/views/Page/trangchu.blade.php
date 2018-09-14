 @extends('templates.master')
 @section('content')
 <div id="chapter1" class="chapter">
                

            <div class="container text-center justify-content-center align-items-center searchform">
                <h3 class="white mx-2 my-3 text-center shadow-text d-block">Find the place it suits you best</h3>    
                <form class="form-inline text-center justify-content-center align-items-center ">
                    <input type="text" class="form-control-inline2 form-control mb-2 mr-lg-2 mx-md-0 mx-4 py-2" id="inlineFormInputName1" placeholder="Search Tours"> 
                    <span class="fas fa-search iconform"></span>

                    <select class="mb-2 mr-lg-2 mx-4 mx-md-0 form-control form-control-inline2" id="inlineFormInputName2">
                        <option selected>Any month</option>
                        <option value="1">January</option>
                        <option value="2">February</option>
                        <option value="3">March</option>
                        <option value="1">April</option>
                        <option value="2">May</option>
                        <option value="3">June</option>
                        <option value="1">July</option>
                        <option value="2">August</option>
                        <option value="3">September</option>
                        <option value="3">Octuber</option>
                        <option value="3">November</option>
                        <option value="3">December</option>
                    </select>
                    <span class="fas fa-calendar iconform"></span>
                    
                    <select class=" mb-2 mr-lg-2 mx-4 mx-md-0 form-control form-control-inline2" id="inlineFormInputName3">
                        <option selected>Tour Type</option>
                        <option value="1">Adventure</option>
                        <option value="2">Romantic</option>
                        <option value="3">Vacation</option>
                        <option value="3">Explore</option>
                    </select>
                    <span class="fas fa-chevron-down iconform"></span>

                    <button type="submit" class="btn btn-primary mb-2 mx-4 mx-md-0 mr-lg-2 py-2 form-control-inline3">Search</button>

                </form>
            </div>
            <div class="chapter2">
                <img class="curve2" src="source/assets/svgs/curvegrey.svg" alt="image">
            </div>
        </div>
         <!-- End section 1-->

         <section id="section2">

                <div class="container">

                    <h2 class="black front">Popular Destinations</h2>

                    <div class="row mb-5">  
                        <div class="col-sm-9 front">               
                            <div class="separator "></div> 
                            <h5 class="primary-color section-title ">Find the one that suits you best </h5>
                        </div>
    
                        <div class="col-sm-3 front my-auto">               
                            <a class="btn btn-primary   mt-2 px-5 py-2" href="destinations-list-sidebar.html" role="button">more destinations</a>
                        </div>
                    </div>

                </div> 
     
                <div class="container destination-section">
                    <div class="row">                 
                          <div class="col-lg-3 col-sm-6 col-xs-12 mb-4 mb-lg-0 complete-image">
                              <a class="" href="#" target="_blank">
                                <div class="destination-item">
                                  <img src="source/assets/images/costarica.jpg" class="img-fluid destination-item" alt="image" >
                                    <h6 class="white front">Costa Rica</h6>              
                                </div>
                              </a>                  
                          </div>
                          <div class="col-lg-3 col-sm-6 col-xs-12 mb-4 mb-lg-0 complete-image">
                            <a class="" href="#" target="_blank">
                              <div class="destination-item">
                                <img src="source/assets/images/california.jpg" class="img-fluid destination-item" alt="image" >
                                  <h6 class="white front">California</h6>              
                              </div>
                            </a>                  
                        </div>
                        <div class="col-lg-3 col-sm-6 col-xs-12 mb-4 mb-lg-0  complete-image">
                          <a class="" href="#" target="_blank">
                            <div class="destination-item">
                              <img src="source/assets/images/peru.jpg" class="img-fluid destination-item" alt="iamge" >
                                <h6 class="white front">Peru</h6>              
                            </div>
                          </a>                  
                      </div>
                      <div class="col-lg-3 col-sm-6 col-xs-12 mb-0 complete-image">
                        <a class="" href="#" target="_blank">
                          <div class="destination-item">
                            <img src="source/assets/images/netherlands.jpg" class="img-fluid destination-item" alt="iamge" >
                              <h6 class="white front">Netherlands</h6>              
                          </div>
                        </a>                  
                    </div>
                  </div>
                </div>
 
              <div class="chapter2">
                <img class="curve2" src="source/assets/svgs/curve.svg" alt="image">
              </div>
             
        </section><!-- End section 2 Destinations-->

          <!-- Section 3 Tours-->

          <section id="section3">

                <div class="container">

                    <h2 class="black front">Explore this tours</h2>

                    <div class="row mb-5">  
                        <div class="col-sm-9 front">               
                            <div class="separator "></div> 
                            <h5 class="primary-color section-title ">Best &amp;	More Popular Tours</h5>
                        </div>
    
                        <div class="col-sm-3 front my-auto">               
                            <a class="btn btn-primary   mt-2 px-5 py-2" href="tour-search-2-cols-card.html" role="button">more tours</a>
                        </div>
                    </div>

                </div> 
      
            <div class="content tours-homepage">
              <div class="container">
                  <div class="row">
                        <div class="col-xs-12 col-md-6 col-lg-4 mb-lg-0 mb-4">
                            <div class="card">
                                <small class="white front"><span class="far fa-clock mr-2 white"></span><strong>9</strong><br>days</small>
                                <a class="img-card" href="#">
                                <img src="source/assets/images/switzerland.jpg" alt="image" />
                                </a>
                                <div class="card-content">
                                    <div class="special-offer ">
                                        <div class="arrow_box text-center">
                                            <span class="white subtitle bold"> 25% OFF</span>
                                        </div>
                                    </div>
                                    <div>
                                        <a class="btn btn-primary px-3 btn-sm float-left" href="#" role="button">adventure</a> 
                                    </div>
                                    <h6 class="primary-color text-right">$3300</h6>
                                    <h6 class="black"><a href="#" target="_blank">Great Switzerland</a></h6>
                                    <p class="">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce id ligula aliquam, malesuada ex ac, auctor nibh. lectus  <a href="#" target="_blank"><span>... See more</span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-4 mb-lg-0 mb-4">
                            <div class="card">
                                <small class="white front"><span class="far fa-clock mr-2 white"></span><strong>8</strong><br>days</small>
                                <a class="img-card" href="#">
                                <img src="source/assets/images/china.jpg" alt="image"/>
                                </a>
                                <div class="card-content">
                                    <div>
                                        <a class="btn btn-primary px-3 btn-sm float-left" href="#" role="button">city tour</a> 
                                    </div>
                                    <h6 class="primary-color text-right">$3900</h6>
                                    <h6 class="black"><a href="#" target="_blank">Delightful China</a></h6>
                                    <p class="">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce id ligula aliquam, malesuada ex ac, auctor nibh. lectus   <a href="#" target="_blank"><span>... See more</span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-4 mx-auto ">
                            <div class="card">
                                <small class="white front"><span class="far fa-clock mr-2 white"></span><strong>7</strong><br>days</small>
                                <a class="img-card" href="#">
                                <img src="source/assets/images/machupichu.jpg" alt="image" />
                                </a>
                                <div class="card-content">
                                    <div>
                                    <a class="btn btn-primary px-3 btn-sm float-left" href="#" role="button">adventure</a> 
                                    </div>
                                    <h6 class="primary-color text-right">$1900</h6>
                                    <h6 class="black"><a href="#" target="_blank">Mystical Machu Picchu</a></h6>
                                    <p class="">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce id ligula aliquam, malesuada ex ac, auctor nibh. lectus  <a href="#" target="_blank"><span>... See more</span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </section><!-- End section 3 tours-->

        <section id="section4">
            <img class="curve3" src="source/assets/svgs/curve2.svg" alt="iamge">
                <div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content  col-lg-8">
							<div class="title text-center">
                                <h4 class="mb-5 bold black">Hot topics from Travel Section</h4>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="col-lg-6 travel-left">
                            <div class="single-travel media mb-4">
                                <img class="img-fluid justify-content-center align-items-center mr-sm-3 " src="source/assets/images/blog1.jpg" alt="">
                                <div class="dates  tiny white">
                                    <span>23</span>
                                    <p class="white text-center">Oct</p>
                                </div>
                                <div class="media-body mt-sm-0 mt-3  align-self-center">
                                    <a class="title-blog black" href="#"><h6 class="mt-0 ">4 Magnificent Parks of England’s Ancient East</h6></a>
                                    <p class="">Minim minim nostrud non minim ut mollit cillficia occaecat fugiat duis. Consequat est non excepteur proident..</p>
                                    <div class="meta-bottom d-flex justify-content-between">
                                        <p class="primary-color"><span class="far primary-color fa-heart"></span> 12 Likes</p>
                                        <p class="primary-color"><span class="far primary-color fa-comments"></span> 4 Comments</p>
                                    </div>							 
                                </div>
                            </div>
                            <div class="single-travel media mb-lg-0 mb-4">
                                <img class="img-fluid d-flex  mr-3" src="source/assets/images/blog3.jpg" alt="">
                                <div class="dates tiny white">
                                    <span>14</span>
                                    <p class="white  text-center">Jun</p>
                                </div>							  
                                <div class="media-body mt-sm-0 mt-3  align-self-center">
                                    <a class="title-blog black" href="#"><h6 class="mt-0 ">8 Best World Landmarks To Add To Your Travel Bucket List</h6></a>
                                    <p>Minim minim nostrud non minim ut mollit cillficia occaecat fugiat duis. Consequat est non excepteur proident..</p>
                                    <div class="meta-bottom d-flex justify-content-between">
                                        <p class="primary-color"><span class="far primary-color fa-heart"></span> 11 Likes</p>
                                        <p class="primary-color"><span class="far primary-color fa-comments"></span> 1 Comment</p>
                                    </div>							 
                                </div>
                            </div>														
						</div>
						<div class="col-lg-6 travel-right">
							<div class="single-travel media mb-4">
                                <img class="img-fluid d-flex  mr-3" src="source/assets/images/blog4.jpg" alt="">
                                <div class="dates tiny white">
                                    <span>11</span>
                                    <p class="white text-center">Jul</p>
                                </div>							  
                                <div class="media-body mt-sm-0 mt-3 align-self-center">
                                    <a class="title-blog black" href="#"><h6 class="mt-0 ">How to See London Like a Royal King</h6></a>
                                    <p>Minim minim nostrud non minim ut mollit cillficia occaecat fugiat duis. Consequat est non excepteur proident..</p>
                                    <div class="meta-bottom d-flex justify-content-between">
                                            <p class="primary-color"><span class="far primary-color fa-heart"></span> 19 Likes</p>
                                        <p class="primary-color"><span class="far primary-color fa-comments"></span> 2 Comments</p>
                                    </div>							 
                                </div>
							</div>
							<div class="single-travel media">
                                <img class="img-fluid d-flex  mr-3" src="source/assets/images/blog2.jpg" alt="">
                                <div class="dates tiny white">
                                    <span>21</span>
                                    <p class="white  text-center">Sep</p>
                                </div>							  
                                <div class="media-body mt-sm-0 mt-3  align-self-center">
                                    <a class="title-blog black" href="#"><h6 class="mt-0 ">Adventure Travel vs All Resort Travel. What to Pick?</h6></a>
                                    <p>Minim minim nostrud non minim ut mollit cillficia occaecat fugiat duis. Consequat est non excepteur proident.</p>
                                    <div class="meta-bottom d-flex justify-content-between">
                                        <p class="primary-color"><span class="far primary-color fa-heart"></span> 13 Likes</p>
                                        <p class="primary-color"><span class="far primary-color fa-comments"></span> 2 Comments</p>
                                    </div>							 
                                </div>
							</div>								
                        </div>
                        
					</div>
				</div>					

            <div class="chapter2">
              <img class="curve2" src="source/assets/svgs/curve.svg" alt="image">
            </div>
        </section>


        <section id="section5">

                <div class="container testimonials">
                    <div class="row">
                        <div class="col-md-8 offset-md-2 col-10 offset-1">
                            <h3 class="text-center  mb-4 black"><strong>Tour Experts</strong></h3>
                            <img class="svgcenter quotesicon" src="source/assets/svgs/quotes.svg" alt="image">
    
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                
                                <div class="carousel-inner mt-0">
                                <div class="carousel-item text-center active">                        
                                    <h5 class="m-0 pt-3 px-4  black">We have been in the market long enough to see the tour industry change, We are convinced this is a company that have been up to the standards</h5>
                                    <h6 class="mt-4 mb-0"><strong class="primary-color">Paul Mitchel</strong></h6>
                                    <p class=" m-0 subheading black">Turbino CEO</p>
                                </div>
                                <div class="carousel-item text-center">                        
                                    <h5 class="m-0 pt-3 black">We're delighted that many come back to travel on our escorted historical tours and small group cruises again and again. </h5>
                                    <h6 class="mt-4 mb-0"><strong class="primary-color">Ryan Sherlock </strong></h6>
                                    <p class=" m-0 subheading black">Turbino Travel Agent</p>
                                </div>
                                <div class="carousel-item text-center">                        
                                    <h5 class="m-0 pt-3 black">All in all, it was the trip of my dreams and I would happily use your services again in the future! I loved every minute of our trip and can't wait to plan another in the future. Please extend my thanks to Yolande as well.
                                        </h5>
                                    <h6 class="mt-4 mb-0"><strong class="primary-color">Monica</strong></h6>
                                    <p class=" m-0 subheading black">Client</p>
                                </div>
                                </div>
                                <a class="carousel-control-prev " href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only ">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                                </a>
                                <ol class="carousel-indicators mt-5">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1" class="action-color"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2" class="action-color"></li>
                                </ol>
                            </div>
                        </div>            
                    </div>
                </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-12 mt-3 mt-lg-5 mx-auto">                           
                    <a class="popup-vimeo" href="https://vimeo.com/71319358?autoplay=1"> 
                        <img src="source/assets/images/lakegirl.jpg" class="img-fluid video-call" alt="image">
                        <div class="play-center">
                        <i class="far fa-7x fa-play-circle"></i>
                        </div>
                    </a>
                    </div>
                </div>
            </div>

        </section>

        <section id="sectioncta">

            <div class="container">
                <div class="row">
                    <div class="col-sm-12 "> 
                        <div class="bs-calltoaction  bs-calltoaction-default">
                            <div class="row">
                                <div class="col-md-8  cta-contents ">
                                    <h6 class="cta-title ml-lg-5 ml-2 mt-md-3 mt-0 bold white">Explore it all. The sky is the limit!</h6>                            
                                </div>
                                <div class="col-md-4 mr-5  cta-button">
                                    <a href="tour-search-2-cols-card.html" target="_blank"  class="btn btn-block px-3 mr-5 btn-primary">Explore Tours</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>
@endsection