<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()): the_post(); ?>
    
      <!-- HEADER -->

      <section id="links-header" class="py-5 bg-primary text-white">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h1 class="pb-5 display-3 font-weight-bold">Links</h1>
              <p>Links, tips and ideas for parents, carers and young people.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- LIST OF COMPANIES -->

      <section id="companies" class="py-5 mt-4 text-left">
        <div class="container font-weight-bold text-dark">
          <div class="row">
            <div class="col-md-12">
              <h3 class="mb-5">Mental Health Support Links
                </h3>
              <div class="slide-link">
                <a href="https://www.mind.org.uk/">
                  <i class="fas fa-chevron-circle-right"></i>Mind
                </a>
              </div>
              <br>
              <div class="slide-link">
                <a href="https://youngminds.org.uk/">
                  <i class="fas fa-chevron-circle-right"></i>Young Minds
                </a>
              </div>
              <br>
              <div class="slide-link">
                <a href="https://thedockswindon.co.uk/">
                  <i class="fas fa-chevron-circle-right"></i>The Dock
                </a>
              </div>
              <br>
              <div class="slide-link">
              <a href="https://www.nspcc.org.uk/preventing-abuse/keeping-children-safe/mental-health-suicidal-thoughts-children/">
                <i class="fas fa-chevron-circle-right"></i> NSPCC
              </a>
              </div>
              <h3 class="py-5">Anger Management Support Links</h3>
                <div class="slide-link">
                <a href="http://www.angriesout.com/ ">
                  <i class="fas fa-chevron-circle-right"></i>Angries Out
                </a>
              </div>
              <br>
              <div class="slide-link">
                <a href="https://thedockswindon.co.uk/anger/">
                  <i class="fas fa-chevron-circle-right"></i>The Dock
                </a>
              </div>
              <br>
            <div class="slide-link">
                      <a href="http://kidshealth.org/">
                        <i class="fas fa-chevron-circle-right"></i> Kids Health
                      </a>
                    </div>
                    <br>
                    <div class="slide-link">
                      <a href="http://www.familylives.org.uk/">
                        <i class="fas fa-chevron-circle-right"></i>Family Lives
                      </a>
                    </div>
                    <br>
                    <div class="slide-link">
                      <a href="https://www.nhs.uk/conditions/stress-anxiety-depression/dealing-with-angry-child/">
                        <i class="fas fa-chevron-circle-right"></i>NHS Dealing With Anger
                      </a>
                    </div>
                    <h3 class="py-5">Bullying Support Links</h3>
                      <div class="slide-link">
                    <a href="https://www.nspcc.org.uk/preventing-abuse/child-abuse-and-neglect/bullying-and-cyberbullying/">
                  <i class="fas fa-chevron-circle-right"></i>NSPCC
                </a>
              </div>
              <br>
              <div class="slide-link">
                <a href="https://www.bullying.co.uk/">
                  <i class="fas fa-chevron-circle-right"></i>Bulling UK
                </a>
              </div>
              <br>
              <div class="slide-link">
                <a href="https://www.kooth.com/">
                  <i class="fas fa-chevron-circle-right"></i>Kooth
                </a>
            </div>
           </div>
          </div>
            <div class="row d-flex py-5 align-items-end justify-content-center">
              <div class="col-md-8 text-center">
                <a id="our-supporters-facebook" href="https://www.facebook.com/FriendsOfStep/?ref=aymt_homepage_panel" class="facebook-wrapper">
                <h3 class="font-weight-bold">Check Us Out On Facebook!</h3>
                  <i class="fab fa-facebook"></i>
                </a>
              </div>
            </div>
          </div>
        </section>
<?php endwhile; endif; ?>

<?php get_footer();