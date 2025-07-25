@extends("layouts.main")
@section("content")


    <!-- Loader Start ===================-->
      {{-- <div class="loader">

      </div> --}}
    <!-- ====== Loader End  -->

 <div>
<div class="slideshow-container background-container">
        <div class="mySlides fade">
             <img src="/images/general.jpg" style="width: 100%" />

            <div class="fore-ground-container">
                <div class="content">
                    <h1 class="slide-in">ELECTRICAL CONSTRUCTION</h1>
                    <p class="mb-5 fs-5 slide-in">Manage appointments, Pharmacy, Inventory, Accounting, HR, Clock Master for attendance,
                    <div class="demo-section">
                        <a href="{{ route('demo') }}" class="book-demo">Book Now</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="mySlides fade">
            <img src="images/solar-panel.jpg" style="width: 100%" />
            <div class="fore-ground-container">
                <div class="content">
                    <h1>SOLAR PANEL INSTALLATION</h1>
                    <p class="mb-5 fs-5">Manage Registration, Identity Card, school fees, payments, Course Registration, Clock Master for attendance,
                    <div class="demo-section">
                        <a href="{{ route('demo') }}" class="book-demo">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="mySlides fade">
            <img src="/images/airconditional.jpg" style="width: 100%" />
            <div class="fore-ground-container">
                <div class="content">
                    <h1>AC & CCTV INSTALLATION</h1>
                    <p class="mb-5 fs-5">Manage appointments, Pharmacy, Inventory, Accounting, HR, Clock Master for attendance,
                    <div class="demo-section">
                        <a href="{{ route('demo') }}" class="book-demo">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="dot-container" style="text-align: center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
    </div>



    <!-- ============= Carousel End ============= -->


    <!-- ==== Services ======== -->
    <div style="position: relative; width:100%; align-items:center; justify-content:center; margin-top:-80px;">
        <div class="services" style="padding:10px 20px 20px">
            <h3 class="" style="margin-bottom:10px; color:gray">Our Services</h3>
            <div style=" background: #058fda!important; width: 100%; color: #FFF;padding:10px">
                <div>
                <div style="display: flex; align-items: center; justify-content: space-between;">
                    <h4>SOLAR PANEL INSTALLATION</h4>
                    <h4>CCTV INSTALLATION</h4>
                    <h4>AC INSTALLATION</h4>
                    <h4>INVERTER INSTALLATION</h4>
                    <h4>ELECTRICAL CONSTRUCTION</h3>
                </div>

            </div>
            </div>

         </div>
    </div>
     <div class="wrapper" style="margin-top:60px;">
        <div class="card-container ">
            <div class="card-md show row">
                <div class="image-wrapper">
                    <img src="./images/maintenance.jpg" alt="">
                </div>
                <div class="card-content">
                    <h2>AC Installation</h2>
                    <p> From concept to execution, our team crafts tailor-made software solutions to suit your unique business needs. We deliver excellence at every stage.</p>

                    <a href="#" class="read-more-btn">Read More</a>
                </div>
            </div>
            <div class="card-md show">
                <div class="image-wrapper">
                    <img src="./images/programming-concept-illustration_114360-1351.jpg" alt="">
                </div>
                <div class="card-content">
                    <h2>Solar panel Installation</h2>

                    <p style="background-color: rgba(0,0,0,0.001);">
                        We blend creativity with cutting-edge technology to develop visually appealing, responsive, scalable, reliable and functional websites.
                    </p>
                    <a href="#" class="read-more-btn">Read More</a>
                </div>
            </div>
            <div class="card-md show">
                <div class="image-wrapper">
                    <img src="./images/developer-activity-concept-illustration_114360-2801.avif" alt="">
                </div>
               <div class="card-content">
                <h2>Electrical Construction</h2>
                <p>
                    Crafting business centric android and Ios app that suits your business demands is our top priority.
                </p>
                <a href="#" class="read-more-btn">Read More</a>
               </div>
            </div>
            <div class="card-md show">
                <div class="image-wrapper">
                    <img src="./images/code-typing-concept-illustration_114360-3581.avif" alt="">
                </div>
                <div class="card-content">
                    <h2>Inverter Installation</h2>
                    <p>
                        Gain a competitive edge with our strategic IT consulting services. We assess,
                        strategize, and implement robust technology solutions aligned with your business goals.
                    </p>
                    <a href="#" class="read-more-btn">Read More</a>
                </div>
            </div>
        </div>

     </div>
    <div class="fadeInUpp padding-x-150" style="box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
        <div class="">
            <div class="header-row">
                <hr/>
                <h1 style="color: #5D468A;">About Us</h1>
                <hr/>
            </div>
            <p class="text-justify">
                Josh Adava Limited is a private owned  company,
                locate in Abuja, Federal Capital Territory (FCT), Nigeria, we offer a comprehensive suite of cutting-edge
                services designed to propel your business.
            </p>

        </div>
        </div>

        <div class="col"  style="background: url('./images//ac.jpg');padding:0 ">
           <div class="fadeInUpp row " style=" width:100%; background-color: rgba(255, 255, 255, 0.4);padding:0;margin:0">
                {{-- <div class="col-md-5">
                    <div class="image-wrapper" style='background: white; padding: 10px;margin:10px; opacity:.5'>
                       <P style="color: green; font-size:24px; font-weight:600; line-height:40px;">
                        As A world's leading company, we strive for excellence and diligence in service. Leveraging research as the bedrock of innovation, we create solutions to close gaps and enrich Africa.
                        </P>
                    </div>
                </div> --}}
                <div class="col-md-12" style='background: white; padding: 10px;margin:10px; opacity:.5'>
                    <h1 style="color: blue;">What You'll Benefit</h1>
                    <P style="color: green; font-size:24px; font-weight:600; line-height:40px;">
                        As A world's leading company, we strive for excellence and diligence in service. Leveraging research as the bedrock of innovation, we create solutions to close gaps and enrich Africa.</P>
                </div>
           </div>
        </div>
        <div class="card fadeInUpp" style="box-shadow:none; display:flex;flex-direction:column;align-items:center;">
            <h2 style="color: #5D468A">Our Core Values</h2>
            <div class="row mobile-column">
                <div class="badge cat-item">
                    <aside class="icon">
                        <i class="fa fa-3x fa-mail-bulk text-primary mb-4"></i>
                    </aside>
                    <aside class="badge-content">
                        <h3>Secure & Private</h3>
                        <p>Security is at the core of our operations. Our code of conduct is confidentiality.</p>
                    </aside>
                </div>
                <div class="badge cat-item">
                    <aside class="icon">
                        <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                    </aside>
                    <aside class="badge-content">
                        <h3>Innovative ideas</h3>
                        <p>
                            We incubate and nurture innovative ideas that work.
                        </p>
                    </aside>
                </div>
                <div class="badge cat-item">
                    <aside class="icon">
                        <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                    </aside>
                    <aside class="badge-content">
                        <h3>Highly Skilled</h3>
                        <p>
                            We combine world class expertise, skills and experience.
                        </p>
                    </aside>
                </div>
            </div>


            <div class="row  mobile-column">
                <div class="badge cat-item">
                    <aside class="icon">
                        <i class="fa fa-3x fa-tasks text-primary mb-4"></i>
                    </aside>
                    <aside class="badge-content">
                        <h3>Strategic Collaboration</h3>
                        <p>
                            Valuing and strategically collaborating for better services.
                        </p>
                    </aside>
                </div>
                <div class="badge cat-item">
                    <aside class="icon">
                        <i class="fa fa-3x fa-chart-line text-primary mb-4"></i>
                    </aside>
                    <aside class="badge-content">
                        <h3>Affordable & Simple</h3>
                        <p>
                            We have worked & are working to make our services simpler and cost effective.
                        </p>
                    </aside>
                </div>
                <div class="badge cat-item">
                    <aside class="icon">
                        <i class="fa fa-3x fa-hands-helping text-primary mb-4"></i>
                    </aside>
                    <aside class="badge-content">
                        <h3>24/7 Support</h3>
                        <p>
                            Our team are always active to provide support and assistance.
                        </p>
                    </aside>
                </div>
            </div>
        </div>

        <div class=" column center-x ">
            <div class="titlek">
                <div class="header-row">
                    <hr/>
                    <h1 style="color: #5D468A">Our Happy Clients</h1>
                    <hr/>
                </div>
            </div>

            <div class="slider-container fadeInUpp"  style="background: url('/images/ac.jpg')">
                <div class="slider-wrapper">
                    <section class="card-list mobile-column">
                        <div class="card-item">
                            <img src="./images/propriator.jpg" alt="" class="user-image">
                            <h2 class="user-name">Mrs Client1</h2>
                            <p class="user-profession">Proprietress, Bright Brains School, Makurdi</p>
                        </div>
                        <div class="card-item">
                            <img src="./images/propriator.jpg" alt="" class="user-image">
                            <h2 class="user-name">Mrs Client2</h2>
                            <p class="user-profession">Proprietress Sound Foundation College, Abuja</p>
                        </div>
                        <div class="card-item">
                            <img src="./images/propriator.jpg" alt="" class="user-image">
                            <h2 class="user-name">Abuja University</h2>
                            <p class="user-profession">Institution of company name goes here</p>
                        </div>
                        <div class="card-item">
                            <img src="./images/propriator.jpg" alt="" class="user-image">
                            <h2 class="user-name">Mr Client3</h2>
                            <p class="user-profession">Nations’ Hospital And Eye Clinic</p>
                        </div>
                    </section>
                </div>
            </div>
        </div>



        <div class="chat-container" id="chat-container">
            {{-- <form id="my-chat">
                <ul id="chat-list">

                </ul>
                <div class="row">
                    <textarea name="message"></textarea>
                    <button type="submit">start</button>
                </div>

            </form> --}}
            <span id="twalk" class="twalk">hi</span>
        </div>
    </div>
    {{-- <div id="map"></div> --}}

   </div>



    </div>
@endsection
