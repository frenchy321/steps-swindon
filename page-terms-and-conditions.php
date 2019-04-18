<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()): the_post(); ?>
  
    <!-- HEADER -->
  
    <div class="container justify-content-center align-items-center py-5">
        <div class="row">
            <div class="col-12">
              <h1 class="font-weight-bold">Terms And Conditions</h1>
            </div>
        </div>
    </div>
  
    <section id="terms-and-conditions-body" class="py-5 d-flex justify-content-center align-items-center text-left">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2 class="mb-3 py-5">Terms Of Use</h2>
            <h5 class="pb-4">This is a website owned and operated by STEP (Swindon). Your use of this website is subject to the following Terms of Use which you are deemed to accept:
          </h5>
            <ol>
                <li class="p-3"><h3>Definitions</h3>"we" "our" "us" mean STEP (Swindon) and any other parties involved in producing or delivering this website.</li>
                <li class="p-3"><h3>Rights in material</h3>The copyright and all other rights in the material contained in this website are owned by us or are included with the permission of the owner of such rights. You may not copy adapt or distribute any of the content of this website without our express written consent except as permitted under applicable law.</li>
                <li class="p-3">
                    <h3>Trademarks</h3>STEP (Swindon) and the STEP (Swindon) logo and other marks may be registered in certain territories to STEP (Swindon). All other trademarks and logos are acknowledged as belonging to their respective owners.
                </li>
                <li class="p-3">
                  <h3>Territory</h3>The services and products offered by STEP (Swindon) in this website may not be available in all territories.
              </li>
              <li class="p-3">
                  <h3>Risk</h3>Your use of this website is at your own risk. We will not be liable for any losses or expenses of any kind which may arise directly or indirectly through the access to or use of or browsing of this website or through your downloading of any material from this website or any other errors failures or delays in computer transmissions or network connections.
              </li>
              <li class="p-3">
                  <h3>Warranties</h3>All content and information contained in this website are provided to you "as is" without warranty of any kind either express or implied.
              </li>
              <li class="p-3">
                  <h3>Liability</h3>You will not transmit to this website any material which could constitute a criminal offence or give rise to civil liability. We assume no responsibility or liability which may arise from the content thereof whether or not we monitor such transmissions.
              </li>
              <li class="p-3">
                  <h3>Confidentiality</h3>Any communication or material you transmit to this website in any manner and for any reason will not be treated as confidential or proprietary unless specifically stated within the website. Information obtained from this website will be treated by you as privileged information and will not be divulged to any third party without the express written consent of STEP (Swindon)
              </li>
              <li class="p-3">
                  <h3>Linked websites</h3>Although this website may be linked to other websites, we are not directly or indirectly implying any sponsorship or endorsement or affiliation with the linked website unless specifically stated therein. We have not reviewed all the websites linked to this website and are not responsible for the content of any off-site pages or any other website linked to this website. Your linking to any other off-site pages or other websites is at your own risk.
              </li>
              <li class="p-3">
                  <h3>Online transactions</h3>All transactions carried out via this website will be governed by the Standard Terms and Conditions of STEP (Swindon) and any other terms and conditions specific to the relevant service or product.
              </li>
              <li class="p-3">
                  <h3>Cookies</h3>If you are authorised to log-in to our website, a temporary <span class="font-weight-bold">session cookie</span> will be set in order to keep you logged-in. No personal information is saved in the cookie. Any <span class="font-weight-bold">session cookie</span> will be removed by your browser on closing.
              </li>
              <li class="p-3">
                  <h3>Other promotions</h3>From time to time STEP (Swindon) may include promotions or other offers in this website. Each such offer shall be subject to its own express terms and may not be available in all territories.
              </li>
              <li class="p-3">
                  <h3>Changes to the website</h3>We reserve the right to make changes at any time to any of the information contained in this website without notice or obligation.
              </li>
              <li class="p-3">
                  <h3>Applicable law</h3>These Terms of Use shall be governed by English law and the courts of England and Wales shall have exclusive jurisdiction over any disputes arising in relation to this website.
              </li>
            </ol>
           </div>
        </div>
      </div>
    </section>
<?php endwhile; endif; ?>

<?php get_footer();