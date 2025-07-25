@extends("layouts.main")
@section("content")

    <!-- Loader Start ===================-->
      {{-- <div class="loader">

      </div> --}}
    <!-- ====== Loader End  -->
    <div class='major' >
        <div class='contact-container' style="padding-top: 30px; background: url('/images/solar-panel.jpg');" >
            <div class="contact-us-container">
              <div class='row'>
                <h3 style="color: #5D468A; font-style: oblique;">CONTACT JOSH ADAVA LIMITED</h3>
              </div>
              <div class="columns">
                <p>Email: adamujoshua001@gmail.com</p>
                <p>Phone: +2348146635251</p>
                <p>Address: No 6 Gwandu Close, Opposite Bolton White Hotels, Garki Area 11, Abuja (FCT)</p>
              </div>
            </div>
        </div>
        </div>
    </div>
        <div class="row relative">
            <div class="col-md-5 form-column">
                <div class="left-aside">
                <h1 style="color: #FE7555;">What will be next?</h1>
                <ul>
                    <li>
                        <h3>Send us a message</h3>
                        <p>Send a message by filling our form.</p>
                    </li>
                    <li>
                        <h3>Together we discuss it</h3>
                        <p>Then we discuss your goals and vision.</p>
                    </li>
                    <li>
                        <h3>Let’s start building</h3>
                        <p>A goal is set and we start the first sprint.</p>
                    </li>
                    <li>
                        <h3>Result </h3>
                    </li>
                </ul>
            </div>
            </div>
            <div class="contact absolute top-50 right-0">
                <div class='row-center' style="color: #5D468A;"><h3>Let’s hear from you and work together</h3></div>
                <form class='contact-form'>


                    <div class="form-column">

                    <input type="text" name='name' class="form-control" placeholder='Enter your full name' required>
                    <input type="text" name='email' class="form-control" placeholder='Enter your email'
                    required />

                      <input type="text" name='phone' class="form-control" placeholder='Enter your Phone number'
                      required
                      />
                      <textarea rows='3' class="form-control" placeholder='Send us a message'
                      required name='message'></textarea>
                    </div>



                  <div class="row-center">
                      <button type='submit' class='submit-btn' onClick={sendMessage} >
                          Send
                      </button>
                  </div>

                  </form>
                </div>
        </div>
        </div>
@endsection
