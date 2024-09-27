@extends('layouts.LayoutMain')
       @section('content')

       <!--body_text -->
  <div class="body_text">
    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
      <div class="text_motion_area wow fadeIn data-wow-duration="1s" data-wow-delay="1.3s"">
        <section class="cd-intro">
          <h1 class="cd-headline slide"> <span>Build applications</span> <span class="cd-words-wrapper"> <b class="is-visible">Faster</b> <b>Cheaper</b> <b>Eaiser</b> </span> </h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dapibus quam non eros aliquet dictum. Duis non congue nibh. Aenean malesuada tempus tincidunt. Fusce ex dolor,</p>
          <button class="btn btn-primary get_quo">Get In touch</button>
        </section>
        <!-- cd-intro --> 
      </div>
    </div>
  </div>
  <!--End Body_text-->
</div>
<!--end back_body-->

<!--Welcome_area-->
<div class="welcome_area">
  <div class="container-fluid">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="welcome_heading wow fadeIn data-wow-duration="1s" data-wow-delay="0.5s"">
        <h1>Welcome to our</h1>
        <h6>VELARUDH INFOTECH PVT LTD</h6>
      </div>
      <div class="welcome_text wow fadeIn data-wow-duration="1s" data-wow-delay="0.9s"">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at feugiat justo, sed fringilla velit. In pellentesque, urna at ullamcorper viverra, nulla turpis tempor magna, quis placerat ex risus vel odio. Cras pulvinar sem eu velit pulvinar rutrum quis at risus. Nulla in varius metus. Proin pharetra, neque a luctus vehicula, elit ex ornare enim, sit amet bibendum ex augue sit amet neque. Duis tincidunt justo lectus. Pellentesque et vehicula orci. Proin quam metus, gravida vulputate mollis sit amet,</p>
      </div>
      <button class="btn btn-primary get_quo wow fadeIn data-wow-duration="1s" data-wow-delay="1s"">Get In touch</button>
    </div>
  </div>
</div>
<!--End Welcome_area--> 

<!--we_area_expertise-->
<div class="we_are">
  <div class="container-fluid">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="we_area_heading wow fadeIn data-wow-duration="1s" data-wow-delay="0.2s"">
        <h1>We are</h1>
        <h6>Expertise in</h6>
      </div>
    </div>
    <div class="line_area">
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="box_area">
          <div class="img_box wow fadeIn data-wow-duration="1s" data-wow-delay="0.2s""> <img src="{{asset('images/icon/graphic.png')}}" alt="graphic"/> </div>
          <div class="box_heading wow fadeIn data-wow-duration="1s" data-wow-delay="0.3s"">
            <h1>Graphic</h1>
            <h3>Design</h3>
          </div>
          <div class="box_brief_text wow fadeIn data-wow-duration="1s" data-wow-delay="0.4s"">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sed rhoncus arcu. Donec dapibus dui tellus, ac pulvinar dui ornare ac. Pellentesque ultricies mi vel nisl dapibus, quis consectetur eros tincidunt</p>
          </div>
          <div class="details_box">
            <button class="btn btn-primary get_quo">View Details</button>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="box_area">
          <div class="img_box wow fadeIn data-wow-duration="1s" data-wow-delay="0.3s""> <img src="{{asset('images/icon/wed_development.png')}}" alt="graphic"/> </div>
          <div class="box_heading wow fadeIn data-wow-duration="1s" data-wow-delay="0.3s"">
            <h1>Website</h1>
            <h3>Development</h3>
          </div>
          <div class="box_brief_text wow fadeIn data-wow-duration="1s" data-wow-delay="0.4s"">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sed rhoncus arcu. Donec dapibus dui tellus, ac pulvinar dui ornare ac. Pellentesque ultricies mi vel nisl dapibus, quis consectetur eros tincidunt</p>
          </div>
          <div class="details_box">
            <button class="btn btn-primary get_quo">View Details</button>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="box_area">
          <div class="img_box wow fadeIn data-wow-duration="1s" data-wow-delay="0.4s""> <img src="{{asset('images/icon/app_development.png')}}" alt="graphic"/> </div>
          <div class="box_heading wow fadeIn data-wow-duration="1s" data-wow-delay="0.3s"">
            <h1>Android App</h1>
            <h3>Development</h3>
          </div>
          <div class="box_brief_text wow fadeIn data-wow-duration="1s" data-wow-delay="0.4s"">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sed rhoncus arcu. Donec dapibus dui tellus, ac pulvinar dui ornare ac. Pellentesque ultricies mi vel nisl dapibus, quis consectetur eros tincidunt</p>
          </div>
          <div class="details_box">
            <button class="btn btn-primary get_quo">View Details</button>
          </div>
        </div>
      </div>
    </div>
    <div class="line_area">
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="box_area">
          <div class="img_box wow fadeIn data-wow-duration="1s" data-wow-delay="0.5s""> <img src="{{asset('images/icon/cloud.png')}}" alt="graphic"/> </div>
          <div class="box_heading wow fadeIn data-wow-duration="1s" data-wow-delay="0.3s"">
            <h1>Cloud</h1>
            <h3>Server</h3>
          </div>
          <div class="box_brief_text wow fadeIn data-wow-duration="1s" data-wow-delay="0.4s"">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sed rhoncus arcu. Donec dapibus dui tellus, ac pulvinar dui ornare ac. Pellentesque ultricies mi vel nisl dapibus, quis consectetur eros tincidunt</p>
          </div>
          <div class="details_box">
            <button class="btn btn-primary get_quo">View Details</button>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="box_area">
          <div class="img_box wow fadeIn data-wow-duration="1s" data-wow-delay="0.6s""> <img src="{{asset('images/icon/software_development.png')}}" alt="graphic"/> </div>
          <div class="box_heading wow fadeIn data-wow-duration="1s" data-wow-delay="0.3s"">
            <h1>Software</h1>
            <h3>Development</h3>
          </div>
          <div class="box_brief_text wow fadeIn data-wow-duration="1s" data-wow-delay="0.3s"">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sed rhoncus arcu. Donec dapibus dui tellus, ac pulvinar dui ornare ac. Pellentesque ultricies mi vel nisl dapibus, quis consectetur eros tincidunt</p>
          </div>
          <div class="details_box">
            <button class="btn btn-primary get_quo">View Details</button>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="box_area">
          <div class="img_box wow fadeIn data-wow-duration="1s" data-wow-delay="0.7s""> <img src="{{asset('images/icon/digital_marketing.png')}}" alt="graphic"/> </div>
          <div class="box_heading wow fadeIn data-wow-duration="1s" data-wow-delay="0.3s"">
            <h1>Degital</h1>
            <h3>Marketing</h3>
          </div>
          <div class="box_brief_text wow fadeIn data-wow-duration="1s" data-wow-delay="0.4s"">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sed rhoncus arcu. Donec dapibus dui tellus, ac pulvinar dui ornare ac. Pellentesque ultricies mi vel nisl dapibus, quis consectetur eros tincidunt</p>
          </div>
          <div class="details_box">
            <button class="btn btn-primary get_quo">View Details</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--End We_area_expertise--> 

<!--why_choose_us-->
<div class="why_choose">
  <div class="container-fluid">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="why_heading wow fadeIn data-wow-duration="1s" data-wow-delay="0.3s"">
        <h1>Why</h1>
        <h3>Choose Us</h3>
      </div>
    </div>
    <div class="point_area">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="left_area wow fadeInLeft data-wow-duration="1s" data-wow-delay="0.4s""> <img src="{{asset('images/human/pic.png')}}" alt="pic"/> </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="topic_right wow fadeInRight data-wow-duration="1s" data-wow-delay="0.5s"">
          <div class="first_line wow fadeInRight data-wow-duration="1s" data-wow-delay="0.6s"">
            <div class="ico_area">
              <div class="diamond">
                <p>1</p>
              </div>
            </div>
            <div class="text_more">
              <h6>Vestibulum sed felis finibus augue vulputate suscipit</h6>
              <p>Praesent pharetra metus non lectus laoreet dictum. Donec accumsan est ipsum, vel dapibus dolor dapibus sit amet.</p>
            </div>
          </div>
          <div class="first_line wow fadeInRight data-wow-duration="1s" data-wow-delay="0.7s"">
            <div class="ico_area">
              <div class="diamond">
                <p>2</p>
              </div>
            </div>
            <div class="text_more">
              <h6>Vestibulum sed felis finibus augue vulputate suscipit</h6>
              <p>Praesent pharetra metus non lectus laoreet dictum. Donec accumsan est ipsum, vel dapibus dolor dapibus sit amet.</p>
            </div>
          </div>
          <div class="first_line wow fadeInRight data-wow-duration="1s" data-wow-delay="0.8s"">
            <div class="ico_area">
              <div class="diamond">
                <p>3</p>
              </div>
            </div>
            <div class="text_more">
              <h6>Vestibulum sed felis finibus augue vulputate suscipit</h6>
              <p>Praesent pharetra metus non lectus laoreet dictum. Donec accumsan est ipsum, vel dapibus dolor dapibus sit amet.</p>
            </div>
          </div>
          <div class="first_line wow fadeInRight data-wow-duration="1s" data-wow-delay="0.9s"">
            <div class="ico_area">
              <div class="diamond">
                <p>4</p>
              </div>
            </div>
            <div class="text_more">
              <h6>Vestibulum sed felis finibus augue vulputate suscipit</h6>
              <p>Praesent pharetra metus non lectus laoreet dictum. Donec accumsan est ipsum, vel dapibus dolor dapibus sit amet.</p>
            </div>
          </div>
          <div class="first_line_last wow fadeInRight data-wow-duration="1s" data-wow-delay="0.9s"">
            <div class="ico_area">
              <div class="diamond">
                <p>5</p>
              </div>
            </div>
            <div class="text_more">
              <h6>Vestibulum sed felis finibus augue vulputate suscipit</h6>
              <p>Praesent pharetra metus non lectus laoreet dictum. Donec accumsan est ipsum, vel dapibus dolor dapibus sit amet.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--end why_choose_us--> 

<!--request_quote-->
<div class="request_quote">
  <div class="container-fluid">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="quote_heading wow fadeIn data-wow-duration="1s" data-wow-delay="0.1s"">
        <h3>Request a Quote</h3>
        <h6>Request a quote to get custom pricing. Please take a moment to fill in the form</h6>
      </div>
    </div>
    <div class="form_zone">
      <form>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="line_form wow fadeInLeft data-wow-duration="1s" data-wow-delay="0.2s"">
            <h3>Send me a price quotation for the following service :</h3>
            <div class="line_flow">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <p>
                  <label>
                    <input name="group1" type="radio" />
                    <span>Evaluation</span> </label>
                </p>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <p>
                  <label>
                    <input name="group1" type="radio" />
                    <span>Maintenance</span> </label>
                </p>
              </div>
            </div>
            <div class="line_flow">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <p>
                  <label>
                    <input name="group1" type="radio" />
                    <span>Installation</span> </label>
                </p>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <p>
                  <label>
                    <input name="group1" type="radio" />
                    <span>other</span> </label>
                </p>
              </div>
            </div>
          </div>
          <div class="line_form wow fadeInLeft data-wow-duration="1s" data-wow-delay="0.2s"">
            <h3>Select estimated project due date :</h3>
            <div class="line_flow">
              <select class="form-control slect_1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
          </div>
          <div class="line_form wow fadeInLeft data-wow-duration="1s" data-wow-delay="0.3s"">
            <h3>Email</h3>
            <div class="line_flow">
              <input type="email" class="form-control e_1">
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="line_form_1 wow fadeInRight data-wow-duration="1s" data-wow-delay="0.2s"">
            <h3>Please indicate the urgency of your request :</h3>
            <div class="line_flow">
              <select class="form-control slect_1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
          </div>
          <div class="line_form_2 wow fadeInRight data-wow-duration="1s" data-wow-delay="0.3s"">
            <h3>Contact Name :</h3>
            <div class="line_flow">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padding_less">
                <div class="name_box">
                  <input type="text" class="form-control e_1" size="30">
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padding_less">
                <div class="name_box_1">
                  <input type="text" class="form-control e_1" size="30">
                </div>
              </div>
            </div>
          </div>
          <div class="line_form_2 wow fadeInRight data-wow-duration="1s" data-wow-delay="0.4s"">
            <h3>Phone number :</h3>
            <div class="line_flow">
              <input type="text" class="form-control e_1">
            </div>
          </div>
          <div class="line_form wow fadeInLeft data-wow-duration="1s" data-wow-delay="0.4s"">
            <h3>Verification :</h3>
            <div class="line_flow">
              <div class="capta_area"> </div>
            </div>
          </div>
          <div class="line_form wow fadeInRight data-wow-duration="1s" data-wow-delay="0.5s"">
            <button class="btn btn-primary s_1">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!--end request_quote--> 

<!--our_android_app-->
<div class="our_android_app">
  <div class="container-fluid">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="app_heading wow fadeIn data-wow-duration="1s" data-wow-delay="0.1s"">
        <h1>Our</h1>
        <h3>Android App</h3>
      </div>
    </div>
    <div class="product_banner wow fadeIn data-wow-duration="1s" data-wow-delay="0.5s"">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> 
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active"> <a href="#"><img src="{{asset('images/Banner_pic/banner.jpg')}}" alt="banner"></a> </div>
          <div class="item"> <a href="#"><img src="{{asset('images/Banner_pic/banner.jpg')}}" alt="banner"></a> </div>
          <div class="item"> <a href="#"><img src="{{asset('images/Banner_pic/banner.jpg')}}" alt="banner"></a> </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--end our_android_app--> 

<!--testimonials-->
<div class="testimonials">
  <div class="container-fluid">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="testi_heading wow fadeIn data-wow-duration="1s" data-wow-delay="0.1s"">
        <h3>Testimonials</h3>
        <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sed rhoncus arcu</h6>
      </div>
    </div>
    <div class="testi_brief">
    <div class="owl_demo">
    <div class="item">
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <div class="client_picture wow fadeInLeft data-wow-duration="1s" data-wow-delay="0.5s""> <img src="{{asset('images/testimonials/client_1.png')}}" alt="client"/> </div>
      </div>
    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
        <div class="client_text wow fadeInRight data-wow-duration="1.2s" data-wow-delay="0.5s"">
          <h2>Amullaya Bhattachariya</h2>
          <p>Marketing Executive</p>
          <h6>Vestibulum sed felis finibus augue vulputate suscipit. Praesent pharetra metus non lectus laoreet dictum. Donec accumsan est ipsum, vel dapibus dolor dapibus sit amet. Nullam sollicitudin leo ut felis tempor, sit amet consectetur erat viverra. Quisque accumsan sit amet diam in semper. Donec venenatis quis lectus sed tincidunt. Duis ac cursus elit. Aliquam non eros faucibus, elementum justo vel, pulvinar urna. Aliquam commodo dui sed libero varius consectetur. Nam at bibendum elit. In non velit quam. Etiam in gravida tellus, quis tempor urna.</h6>
        </div>
      </div>
    </div>
    <div class="item">
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <div class="client_picture wow fadeInLeft data-wow-duration="1s" data-wow-delay="0.5s""> <img src="{{asset('images/testimonials/client_1.png')}}" alt="client"/> </div>
      </div>
    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
        <div class="client_text wow fadeInRight data-wow-duration="1.2s" data-wow-delay="0.5s"">
          <h2>Amullaya Bhattachariya</h2>
          <p>Marketing Executive</p>
          <h6>Vestibulum sed felis finibus augue vulputate suscipit. Praesent pharetra metus non lectus laoreet dictum. Donec accumsan est ipsum, vel dapibus dolor dapibus sit amet. Nullam sollicitudin leo ut felis tempor, sit amet consectetur erat viverra. Quisque accumsan sit amet diam in semper. Donec venenatis quis lectus sed tincidunt. Duis ac cursus elit. Aliquam non eros faucibus, elementum justo vel, pulvinar urna. Aliquam commodo dui sed libero varius consectetur. Nam at bibendum elit. In non velit quam. Etiam in gravida tellus, quis tempor urna.</h6>
        </div>
      </div>
    </div>
    <div class="item">
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <div class="client_picture wow fadeInLeft data-wow-duration="1s" data-wow-delay="0.5s""> <img src="{{asset('images/testimonials/client_1.png')}}" alt="client"/> </div>
      </div>
    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
        <div class="client_text wow fadeInRight data-wow-duration="1.2s" data-wow-delay="0.5s"">
          <h2>Amullaya Bhattachariya</h2>
          <p>Marketing Executive</p>
          <h6>Vestibulum sed felis finibus augue vulputate suscipit. Praesent pharetra metus non lectus laoreet dictum. Donec accumsan est ipsum, vel dapibus dolor dapibus sit amet. Nullam sollicitudin leo ut felis tempor, sit amet consectetur erat viverra. Quisque accumsan sit amet diam in semper. Donec venenatis quis lectus sed tincidunt. Duis ac cursus elit. Aliquam non eros faucibus, elementum justo vel, pulvinar urna. Aliquam commodo dui sed libero varius consectetur. Nam at bibendum elit. In non velit quam. Etiam in gravida tellus, quis tempor urna.</h6>
        </div>
      </div>
    </div>
    <div class="item">
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <div class="client_picture wow fadeInLeft data-wow-duration="1s" data-wow-delay="0.5s""> <img src="{{asset('images/testimonials/client_1.png')}}" alt="client"/> </div>
      </div>
    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
        <div class="client_text wow fadeInRight data-wow-duration="1.2s" data-wow-delay="0.5s"">
          <h2>Amullaya Bhattachariya</h2>
          <p>Marketing Executive</p>
          <h6>Vestibulum sed felis finibus augue vulputate suscipit. Praesent pharetra metus non lectus laoreet dictum. Donec accumsan est ipsum, vel dapibus dolor dapibus sit amet. Nullam sollicitudin leo ut felis tempor, sit amet consectetur erat viverra. Quisque accumsan sit amet diam in semper. Donec venenatis quis lectus sed tincidunt. Duis ac cursus elit. Aliquam non eros faucibus, elementum justo vel, pulvinar urna. Aliquam commodo dui sed libero varius consectetur. Nam at bibendum elit. In non velit quam. Etiam in gravida tellus, quis tempor urna.</h6>
        </div>
      </div>
    </div>
      </div>
    </div>
  </div>
</div>
<!--end _testimonials--> 

          @stop