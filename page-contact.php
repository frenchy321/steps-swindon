<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()): the_post(); ?>

      <!-- HEADER -->

      <section id="contact-us" class="py-5 text-white d-flex align-items-center justify-content-center">
          <div class="container">
              <div class="row">
                  <div class="col">
                      <h1 class="font-weight-bold display-3">Contact Us</h1>
                      <p>For any further information about our groups or if you want to ask us a question, please get in touch. We welcome all comments and feedback to ensure we are providing the best service possible.</p>
                  </div>
              </div>
          </div>
      </section>

      <!-- CONTACT-FORM -->

      <section id="contact-info" class="pt-5">
          <div class="container">
              <div class="row">
                  <div class="col-md-6">
                    <i class="fas fa-phone"></i>
                    <a href="tel:+44-1793-714042" rel="nofollow">
                        <h4>Tel:</h4>
                    <p class="contact-num">01793 714042</p>
                  </a>
                    <hr class="my-4">
                    <i class="fas fa-car"></i>
                    <h4>Visit Us:</h4>
                    <p> Nythe Centre, The Drive, Nythe, Swindon SN3 3RR</p>
                  </div>
                  <div class="col-md-6">
                    <i class="fas fa-envelope"></i>
                    <h4>Email:</h4>
                    <p>swindonstep@aol.com</p>
                    <hr class="my-4">
                    <i class="far fa-comment"></i>
                    <h4>Your Thoughts:</h4>
                    <p>Give Feedback</p>
                  </div>
              </div>
          </div>
      </section>

      <hr class="contact-hr mt-5">

      <!-- GOOGLE-MAPS -->

      <section id="contact-section">
        <div class="container py-5 mt-4">
          <div class="row">
            <div class="col-xs-4 col-sm-12 col-md-12 col-lg-6 mt-5 my-auto">
              <div id="google-map" style="max-width: 400px; height: 400px;" class="mx-auto">
              </div>
            </div>
            <div id="contact-form" class="col-xs-4 col-sm-12 col-md-8 col-lg-6 mt-5 m-auto">
              <div>
                <form action="http://formspree.io/swindonstep@aol.com" method="post">
                  <label for="fname">First Name</label>
                  <input type="text" id="fname" name="firstname" placeholder="Your name..">
                  <label for="lname">Last Name</label>
                  <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                  <label for="subject">Subject</label>
                  <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                  <input class="btn btn-primary btn-lg btn-hover-outline w-50" type="submit" value="Submit">
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
<?php endwhile; endif; ?>

<?php get_footer();