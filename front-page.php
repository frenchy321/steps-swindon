<?php get_header(); ?>

<!--  COVID-19 -->

    
<div>
  <button
    class="covid-btn rounded btn-lg bg-danger mx-auto text-white align-items-center justify-content-center w-100"
  >
    COVID-19 Update
  </button>
</div>

<div
  class="container covid my-5 text-center mx-auto rounded w-75 d-none"
>
<div class="row align-items-center justify-content-center">
    <div class="col-lg-8 py-4 covid-19 bg-danger text-white">
        <i class="fas fa-times popup-close float-right p-2"></i>
      <h2>
        COVID-19
      </h2>
      <p>
        Following the guidance around COVID-19, STEP has now reduced its
        level of operation in order to allow as many staff members as
        possible to work from home.
      </p>
      <p>
        Our primary concern is always for the welfare and health of the
        children, young people, parents, carers and colleagues we work
        with. To ensure we do our utmost to keep everyone safe, we have
        suspended all our group sessions and direct contact with children
        and young people.
      </p>
      <p>
        Due to changes happening daily, and no decision as to when the
        lockdown will end, we unfortunately are not able to give a date
        when our service will resume as normal. Please be assured that as
        soon as we have any updates our first priority is contacting all
        parent / carers and colleagues.
      </p>
      <p>
        Our main office is now closed, However, If you do need to get in
        touch with us, or If you have any concerns or questions, please
        contact us on the main STEP email: swindonstep@aol.com –
        Individual workers will be responding to their own emails.
      </p>
      <p>
        Although STEP has had to currently suspend all direct contact with
        children & young people, we are still thinking of you all, and
        would like to direct you to our <span><a href="/links/">links, tips and ideas page for parents</a></span> page on our website. We will also be regularly providing
        helpful links and information on our <a href="https://facebook.com/FriendsOfStep/?ref=aymt_homepage_panel"><span>STEP Facebook
          page</span></a>.
      </p>
      <h5>
        Thank you for your understanding, be safe and take care of each
        other.
      </h5>
    </div>
  </div>
</div>

<?php if (have_posts()): while (have_posts()): the_post(); ?>

      <section id="home-header" class="py-5 d-flex align-items-center justify-content-center">
          <div class="container">
            <div class="row text-white">
              <div class="col-12">
            <h1 class="py-4">STEP Swindon</h1>
              <h2 class="py-4">Focusing On Young People, Their Needs, Experiences And Contributions!</h2>
            </div>
          </div>
        </div>
      </section>

        <!-- ACTIVITIES -->

        <section id="activities" class="d-flex py-5">
          <div id="image-slider" class="container py-5 align-items-center justify-content-center">
            <div class="row">
              <div class="col-md-8 d-flex align-items-center">
                <div>
                  <ul class="tiles-slider">
                    <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/activities/activities-1.jpg" alt="children-spray-painting"></li>
                    <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/activities/activities-2.jpg" alt="boy-drawing"></li>
                    <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/activities/activities-3.jpg" alt="boy-drawing"></li>
                    <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/activities/activities-4.jpg" alt="teacher-with-children"></li>
                    <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/activities/activities-5.jpg" alt="group-of-children-sitting">
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-4 py-5">
                  <h2 class="py-3">Activities</h2>
                <p>
                  With our all of our therapeutic groups, session are designed using a wide variety of activities these include:
                  <br>
                  fun team building games and icebreakers, problems solving activities, art and craft, role play, discussion work, social skills and feelings cards and worksheets. We also incorporate guided relaxation and mindfulness into all of our sessions.
                </p>
              </div>
            </div>
          </div>
        </section>

        <!-- HOME-ICONS -->

        <section id="home-icons" class="py-5 mt-0 text-white bg-primary">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <i class="home-icons fas fa-chalkboard-teacher" data-toggle="tooltip" data-placement="top" title="Speak With Us!"></i>
                <h3>Contact</h3>
                <div class="expand">
                  <p class="p-5 mt-4 text-white bg-blue-gray rounded">
                      Please use this form to send us a message. We welcome all comments and feedback to ensure we are providing the best service possible. If you need a referral form, or have any questions, please get in touch.
                      <a href="/contact/#contact-form" class="btn btn-md d-block deep-purple-bg text-white mt-3">Get Intouch</a>
                  </p>
                  </div>
              </div>
              <div class="col-md-4">
                <i class="home-icons fas fa-users-cog text-white" data-toggle="tooltip" data-placement="top" title="Learn More!"></i>
                <h3>News</h3>
                <div class="expand">
                  <p class="p-5 mt-4 text-white bg-blue-gray rounded">
                      Please check back here regularly as we update on what has been happening at STEP, and the achievements made by young people.
                      Follow our ‘Friends of STEP’ Facebook page as well for all the latest news.
                      <a href="/about/#latest-news" class="btn btn-md d-block deep-purple-bg text-white mt-3">Latest</a>
                  </p>
                </div>
              </div>
              <div class="col-md-4">
                <i class="home-icons fas fa-hands-helping" data-toggle="tooltip" data-placement="top" title="Check Out Our Groups!"></i>
                <h3>Groups</h3>
                <div class="expand">
                  <p class="p-5 mt-4 text-white bg-blue-gray rounded">
                      STEP works with more than 200 children and young people each year, providing support and life management skills to some of the most vulnerable in our community. STEP is perhaps most well-known for ‘Evening Groups’ but the exact projects these involve vary according to current needs and the funding received.
                      <a href="/groups/#current-groups" class="btn btn-md d-block deep-purple-bg text-white mt-3">Current</a>
                  </p>
                </div>
              </div>
          </div>
        </div>
      </section>

      <!-- CAROUSEL -->

      <section id="wrapper" class="py-5">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-10">
              <h2 class="pb-5">We Have Great Fun!</h2>
              <p class="header-text pb-5">Our sessions are designed to not only work on tough issues, but we also ensure that all young people have as much fun as possible.</p>
              <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active" data-interval="10000">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/we-have-great-fun/great-fun-3.jpg" class="d-block w-100" alt="">
                  </div>
                  <div class="carousel-item" data-interval="2000">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/we-have-great-fun/great-fun-2.jpg" class="d-block w-100" alt="children-wearing-masks">
                  </div>
                  <div class="carousel-item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/we-have-great-fun/great-fun-1.jpg" class="d-block w-100" alt="children-spray-painting">
                  </div>
                  <div class="carousel-item">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/we-have-great-fun/great-fun-4.jpg" class="d-block w-100" alt="3-children-dancing">
                    </div>
                    <div class="carousel-item">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/we-have-great-fun/great-fun-5.jpg" class="d-block w-100" alt="2-children-painting">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- DONATE -->

      <section id="donate">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center mb-5">
                <h3>Want To Help!</h3>
                <a href="https://www.justgiving.com/s-t-e-p " class="btn btn-lg w-25 font-weight-bold mt-3">Donate</a>
            </div>
          </div>
        </div>
      </section>

<?php endwhile; endif; ?>

<?php get_footer();