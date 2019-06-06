<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()): the_post(); ?>

      <!-- HEADER -->

      <section id="our-supporters-header" class="py-5 bg-red text-white">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h1 class="pb-5 display-3 font-weight-bold">Our Supporters</h1>
              <p>STEP works with, and is generously supported by, a number of local and national organisations. Click through to visit their pages and find out more.
                  Thanks must go to the individuals, teams and businesses who complete sponsored activities, nominate STEP, and/or hold fundraising events in the community that benefit us hugely. You are all amazing, thank you!</p>
            </div>
          </div>
        </div>
      </section>

      <!-- LIST OF COMPANIES -->

      <section id="companies" class="py-5 mt-4">
        <div class="container font-weight-bold text-dark">
          <div class="row">
            <div class="col-md-6">
              <div class="slide-link">
                <a href="http://www.rotaryclubofswindonthamesdown.org.uk">
                  <i class="fas fa-chevron-circle-right"></i> Rotary Club Of Swindon Thamesdown
                </a>
              </div>
              <br>
              <div class="slide-link">
                <a href="https://www.swindon.gov.uk/">
                  <i class="fas fa-chevron-circle-right"></i> Swindon Borough Council
                </a>
              </div>
              <br>
              <div class="slide-link">
                <a href="http://www.bbc.co.uk/pudsey">
                  <i class="fas fa-chevron-circle-right"></i> BBC Children In Need
                </a>
              </div>
              <br>
              <div class="slide-link">
              <a href="https://www.zurich.co.uk/zurichcommunitytrust/home/home.htm">
                <i class="fas fa-chevron-circle-right"></i> Zurich Financial Services And Openwork Ltd / Zurich Community Trust
              </a>
              </div>
              <br>
              <div class="slide-link">
                <a href="http://www.rollingartmotorcycles.com/">
                  <i class="fas fa-chevron-circle-right"></i> Rolling Art Motorcycles
                </a>
              </div>
              <br>
              <div class="slide-link">
                <a href="http://swindoncares.co.uk/">
                  <i class="fas fa-chevron-circle-right"></i> Swindon Cares
                </a>
              </div>
              <br>
              <div class="slide-link">
                <a href="https://wiltshirecf.org.uk/">
                  <i class="fas fa-chevron-circle-right"></i> Wiltshire Community Foundation
                </a>
              </div>
              <br>
              <div class="slide-link">
                <a href="https://www.sjp.co.uk/about-st-james-place/our-responsibilities/st-james-place-charitable-foundation">
                  <i class="fas fa-chevron-circle-right"></i> St. James' Place Charitable Foundation
                </a>
              </div>
              <br>
              <div class="slide-link">
                <a href="https://www.hondamanufacturing.co.uk/">
                  <i class="fas fa-chevron-circle-right"></i> Honda Plant Swindon
                </a>
              </div>
              <br>
            </div>
            <div class="col-md-6">
              <div class="slide-link">
                <a href="http://www.healthyschools.gov.uk/">
                  <i class="fas fa-chevron-circle-right"></i> Healthy Schools
                </a>
              </div>
              <br>
              <div class="slide-link">
                <a href="https://www.lloydsbankfoundation.org.uk/">
                  <i class="fas fa-chevron-circle-right"></i> Lloyds Bank Charitable Foundation
                </a>
              </div>
              <br>
              <div class="slide-link">
                <a href="http://www.asdan.org.uk/">
                  <i class="fas fa-chevron-circle-right"></i> ASDAN
                </a>
              </div>
              <br>
              <div class="slide-link">
                <a href="http://nocn.org.uk/">
                  <i class="fas fa-chevron-circle-right"></i> National Open College Network
                </a>
              </div>
              <br>
              <div class="slide-link">
                <a href="www.swindonyouthforum.org.uk">
                  <i class="fas fa-chevron-circle-right"></i> Swindon Youth Forum
                </a>
              </div>
              <br>
              <div class="slide-link">
                <a href="http://www.plscouts.org.uk/scouts/">
                  <i class="fas fa-chevron-circle-right"></i> 1st Purton and Lydiard Scout Group
                </a>
              </div>
              <br>
              <div class="slide-link">
                <a href="#">
                  <i class="fas fa-chevron-circle-right"></i> Nationwide Building Society at Optimus House, Windmill Hill, Swindon
                </a>
              </div>
                <br>
                <div class="slide-link">
                  <a href="https://food.coop.co.uk/">
                    <i class="fas fa-chevron-circle-right"></i> The Co-operative Food
                  </a>
                </div>
                <br>
                <div class="slide-link">
                  <a href="https://www.tescoplc.com/">
                    <i class="fas fa-chevron-circle-right"></i> Tesco Community Food Connection
                  </a>
                </div>
              </div>
            </div>
            
            <div class="row d-flex py-5 align-items-end justify-content-center">
              <div class="col-md-8">
                  <a id="our-supporters-facebook" href="https://www.facebook.com/FriendsOfStep/?ref=aymt_homepage_panel" class="facebook-wrapper">
                <h3 class="font-weight-bold">Check Us Out On Facebook!</h3>
                  <i class="fab fa-facebook mt-4"></i>
                </a>
              </div>
            </div>
          </div>
        </section>

      <!-- VOLUNTEERS -->

      <section id="volunteers" class="bg-red text-white">
        <div class="container">
          <div class="row py-5">
            <div class="col-12">
              <h2 class="font-weight-bold">Volunteers</h2>
              <p class="header-text">We have the following volunteering opportunities available.</p>
              <ul class="pl-0">
                <li>
                  <h5>Group Support</h5>
                  <p>Face-to-face work with young people, evenings and Saturdays.</p>
                </li>
                <li>
                  <h5>Management Committee members</h5>
                  <p> Meeting every 6 weeks to oversee the running of STEP.</p>
                </li>
                <li>
                  <h5>Community Fundraisers</h5>
                  <p> If you are unable to commit to a regular time, perhaps helping to raise money for STEP would be more suited to you. If you have any ideas for this or are involved in any events, please get in touch.</p>
                </li>
              </ul>
              <a href="<?php echo get_stylesheet_directory_uri(); ?>/documents/Application.vol.docx" download class="btn btn-lg bg-blue-gray btn-gray text-white">Download</a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section>
        <div class="container">
          <div class="row py-5">
            <div class="col-12 d-flex text-left">
              <ul>
                <li>
                  <h3>Group Support Volunteers</h3>
                  <p>STEP seeks positive adult role models (over 18 years of age) to work alongside Project Workers in small groups of 7 - 18 year olds. Groups are activity based with a therapeutic aim behind them, for example anger management, building self-esteem or improving communication skills could be looked at through art, drama or cooking.</p>
                </li>
                <li>
                  <h3 class="mt-3">When Required</h3>
                  <ul>
                    <li>
                      Weekday evenings, 6-8pm. Volunteers work 1 session per week.
                    </li>
                    <li>
                      Groups run in 10 week blocks so minimum commitment = 1 full set of groups.
                    </li>
                    <li>
                      Daytimes - Saturday Project for young people with learning difficulties (11am-1.30pm), August Summer Programme, and half term holidays.
                    </li>
                  </ul>
                </li>
                <li>
                  <h3 class="mt-3">Location</h3>
                  <p>STEP (Nythe Centre) for all groups, training and supervision
                  </p>
                </li>
                <li>
                  <h3>Skills and Qualifications</h3>
                  <ul>
                    <li>Enhanced police check (DBS) essential - to be completed during the induction</li>
                    <li>Empathy for young people</li>
                    <li>Flexible and reliable</li>
                    <li>Able to use own initiative</li> 
                    <li>Approachable, enthusiastic and keen to "get stuck in!"</li>
                    <li>Must be willing to participate in training and supervision</li>
                  </ul>
                </li>
                <li>
                  <h3 class="mt-3">Principal Responsibilities</h3>
                  <p>To work with staff to ensure groups are relevant, documented and properly run</p>
                </li>
                <li>
                  <h3>Recruitment Method</h3>
                  <p>Application form, Informal Discussion, References, Police Check</p>
                </li>
                <li>
                  <h3>Expenses</h3>
                  <p>All reasonable travel expenses are paid back. Volunteering at STEP should cost you nothing but your time. Volunteers make regular mileage claims for a personal vehicle or keep public transport tickets for reimbursement by cheque within one week. It is the volunteer's responsibility to ask for the relevant form and ensure the claim is submitted to the Administrator.</p>
                </li>
                <li>
                  <h3>Training</h3>
                  <p>Training is currently being reviewed but sessions include Boundaries, Role of the Volunteer, Safeguarding Young People and Dealing with Difficult Situations.</p>
                  <p>Please use the download an application link or request an application pack from STEP through the 'Contact Us' tab or on 01793 714042
                  </p>
                </li>
                </div>
              </div>
              </ul>
              <div class="row">
                <div class="col-12">
                  <h3 class="text-center text-muted pb-4 mb-5">STEP Swindon is committed to safeguarding and promoting the welfare of children and young people and expects all staff and volunteers to share this commitment.</h3>
            </div>
          </div>
        </div>
      </section>
      
      <hr>
            
      <!-- TRUSTEES -->

      <section id="trustees">
        <div class="container">
          <div class="row pt-5">
            <div class="col-12">
              <h2>Trustees</h2>
              <p class="header-text py-5">S.T.E.P is overseen by a committee of Trustees. Members are invited to join on the basis of their interest and skills. New members are voted into position by existing Trustees.
              What is a Trustee?</p>
            </div>
          </div>
          <div class="row text-left">
            <div class="col-12">
              <h3 class="mb-3">Our Trustees</h3>
              <ul>
                <li>Act in the best interests of service users (children and young people)
                  </li>
                <li>Make sure money is spent on the intended purpose
                  </li>
                <li>Operate within an organisational structure with set rules
                  </li>
                <li>Avoid conflicts of interest / remain independent
                  </li>
              </ul>
              <p class="mt-5">Trustees take overall responsibility for everything the Charity does, and act collectively to direct it, according to the Charity’s governing document (Constitution).
                <br>
              Governance is concerned with leadership and direction. It is about ensuring STEP has a clear, shared vision of its purpose, what it is aiming to achieve and how in broad terms it will go about doing it.
              <br>
              However, although they have ultimate responsibility, governance is not a role for trustees alone. Trustees must work with managers, staff, volunteers, service users and stakeholders to ensure STEP is properly run and meets the needs for which it was set up.
              <br>
              If you are interested in finding out more about the committee, or becoming a Trustee, please use the Contact Us page.</p>
            </div>
          </div>
        </div>
      </section>

      

      <hr class="py-4">
          
      <!-- CONTACT DETAILS -->

      <section id="contact-info" class="py-5">
          <div class="container">
            <h2 class="pb-5">Contact Us</h2>
            <p class="header-text pb-5">For any further information about our groups or if you want to ask us a question, please get in touch. We welcome all comments and feedback to ensure we are providing the best service possible.</p>
            <div class="row">
              <div class="col-md-6">
                  <i class="fas fa-phone"></i>
                  <a href="tel:+44-1793-714042" rel="nofollow">
                  <h4>Tel:</h4>
                </a>
                <p class="contact-num">01793 714042</p>
                <hr class="my-4">
                <i class="fas fa-car"></i>
                <a href="/contact/#google-map">
                  <h4>Visit Us:</h4>
                </a>
                <p> Nythe Centre, The Drive, Nythe, Swindon SN3 3RR</p>
              </div>
              <div class="col-md-6">
                  <i class="fas fa-envelope"></i>
                <a href="/contact/">
                  <h4>Email:</h4>
                </a>
                <p>swindonstep@aol.com</p>
                <hr class="my-4">
                <i class="far fa-comment"></i>
                <a href="/contact/">
                  <h4>Contact:</h4>
                </a>
                <p>Give Feedback</p>
              </div>
            </div>
            <a href="/contact/" class="btn btn-primary btn-lg btn-hover-outline mt-4">Contact Us</a>
          </div>
        </section>
<?php endwhile; endif; ?>

<?php get_footer();