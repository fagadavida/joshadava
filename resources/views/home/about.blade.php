@extends("layouts.main")
@section("content")

    <!-- Loader Start ===================-->
      {{-- <div class="loader">

      </div> --}}
    <!-- ====== Loader End  -->

    <div class="col center" style="background: url('/images/ac.jpg')">
        {{-- <img src="/images/ac.jpg" alt=""> --}}
        <div class="padding-80" style="background: rgba(255, 255, 255, .4);">
            <span><a href="/">Home</a> / </span> <span>About</span>
        </div>

    </div>

    <!-- ==== Services ======== -->
<div class="padding-x-150 margin-y-80">
            <div class="col">
                <h4 class="sub-title">What We Do</h4>

                <p class="mb-0">
                    We strive for excellence and diligence in service. Leveraging research as the bedrock of innovation,
                    we create solutions to close gaps and enrich large, medium, small enterprise as well as individuals.

                </p>
                <p>
                    An experienced software development company offering comprehensive support to businesses in creating and managing software resources. Specializing in diverse operational areas including Inventory, HR, Payroll, Accounting, Business and e-commerce solutions, website design, mobile apps, and educational portals. Our tailored services range from off-the-shelf products to fully customized solutions, catering to businesses of all sizes. With a proven track record, we possess the expertise to elevate businesses, regardless of scale, to achieve greater success.
                </p>
            </div>

        <div class="row fadeInUp show margin-y-80">
            <div class="col-md-5">
                <h2>What we do</h2>
                <p class="text-justify">
                    We are your one stop destination for all software-related needs. From small to medium and large scale Businesses, Government agencies, Educational instituions, Non Government Orgaizations (NGO) and Individuals. We have helped many Businesses and organizations like yours Build and manage robust software that makes for more efficient and effective service delivery. Our team won't rest until our solutions meet and exceed your expectations.
We create Stand-alone, intranet, internet powered Portals, websites, windows desktop software & mobile Apps. We already have a number of products and services used by many customers accross the country. In addition, we create software based on user-specifications and requirements, using the best design methodologies, we analyze your operations, make recommendations and working with you deliver a software that will serve and grow with your Business
                </p>
                <h4>We are Professional</h4>
                <p>
                    At Topchoice, professionalism isn't just a claim; it's a promise upheld in every interaction, every line of code, and every innovation we bring to life.
                </p>

            </div>
           <div class="col-md-5">
            <div class="image-wrapper">
                <img src="./images/ac.jpg" alt="Coding softwares">
            </div>
            <h4>Licensed and Certified</h4>
                <p>
                    Our commitment to excellence is fortified by our licenses and certifications, validating our expertise and dedication to delivering top-tier technology solutions.
                </p>
           </div>

        </div>
        <div class="col fodeInUp margin-y-80">

            <div class="row">
                <div class="col-md-5">
                    <div class="image-wrapper">
                        <img src="./images/working.jpg" alt="Struggling with business manually?">
                    </div>
                </div>
                <div class="col-md-5">
                    <h2>Why Choose Us?</h2>
                    <p class="text-justify">
                        We know how daunting it is managing your business data manually or semi-manually, we also know what it means to use a software that is broken and isn't quite meeting your needs. The Business climate changes everyday yet, you can't get the updates and in some cases custom features you require in time. You also need someone to provide technical support when you are stuck and no one shows up. For years, we've assisted business owners and managers in crafting exceptional software, websites, and apps to streamline their organizations. Our clients rely on our steadfastness, benefiting from dedicated customer support. Our robust feedback mechanism enables us to swiftly detect and address issues, offering prompt assistance, whether onsite or virtually. With in-house product development, we retain complete control over updates and can readily integrate new features as per your evolving needs.
                    </p>
                </div>
            </div>
        </div>
        <div class="row fadeInUp">
            <div class="image-wrapper">
                <img src="./images/information-tech-lover.jpg" alt="Coding softwares">
            </div>
            <div class="column">
                <h2>Our Vision</h2>
                <p>
                    To be a leader in the enterprise software development and services space by creating quality software, providing top notch support for relationship and profitability.
                </p>
            </div>
        </div>

    </div>

   </div>
   <!-- ######################## Our Happy Clients ########################## -->
    <div class="col-full fadeInUp padding-x-150">
        <h2 class="center">
            Our Happy Clients
        </h2>
        <p>
            We are always there for you because we care, we know how important our products are in helping you deliver quality services to your customers, we can't stand being on your way in your quest to achieve that. Whether onsite or offsite we are able to serve you.
        </p>
    </div>
    <div class="slider-container fadeInUp" style="background: url('./images/pexels-photo-531880.jpeg');"">
        <div class="slider-wrapper">
            <section class="card-list mobile-column">
                <div class="card-item">
                    <img src="./images/images.jpg" alt="" class="user-image">
                    <h2 class="user-name">David Avera</h2>
                    <p class="user-profession">Software Developer</p>
                    <button class="message-button">Message</button>
                </div>
                <div class="card-item">
                    <img src="./images/images.jpg" alt="" class="user-image">
                    <h2 class="user-name">David Avera</h2>
                    <p class="user-profession">Software Developer</p>
                    <button class="message-button">Message</button>
                </div>
                <div class="card-item">
                    <img src="./images/images.jpg" alt="" class="user-image">
                    <h2 class="user-name">David Avera</h2>
                    <p class="user-profession">Software Developer</p>
                    <button class="message-button">Message</button>
                </div>
                <div class="card-item">
                    <img src="./images/images.jpg" alt="" class="user-image">
                    <h2 class="user-name">David Avera</h2>
                    <p class="user-profession">Software Developer</p>
                    <button class="message-button">Message</button>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection
