<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()): the_post(); ?>
  
    <!-- HEADER -->
  
    <section id="privacy-header" class="d-flex align-items-center justify-content-center text-dark font-weight-bold">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h1 class="font-weight-bold display-3 py-5">Privacy Policy</h1>
          </div>
        </div>
    </section>
  
    <!-- WHAT WE DO -->
  
    <section id="privacy-body" class="py-5 d-flex justify-content-center align-items-center text-left">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h3 class="mb-3">Privacy Terms and Conditions</h3>
            <p>At STEP we take your privacy seriously. We are committed to protecting and respecting your privacy and will only use your personal information to administer the communications and donations in line with our agreement with you.
            </p>
            <p>Our Privacy, Data Protection Policies and supporting documents explain when and why we collect personal information from you, how we use it, the conditions under which we may disclose it to others, how we keep it safe and your right and choices in relation to your information.</p>
            <h3>Legal basis for processing personal data</h3> 
            <p>Under the General Data Protection Regulation (GDPR), there are a limited number of legal grounds for collecting, storing and using personal information;
              on the basis of Contract or
              on the basis of Legitimate Interests or
              on the basis of your Consent</p>
              <h3>What type of information is collected from you?</h3>
              <p>We ask for personal information which is limited to that which is necessary for us to provide the service that has been requested from us. This information – name, address, contact details, ethnicity, school, medical requirements - is kept secure in the STEP office and on a password protected database.</p>
              <h3>How is your information used?</h3>
              <p>We may use your personal information to:</p>
              <ul>
                <li>Respond to your enquiries</li>
                <li>Provide the services that have been requested from us</li>
                <p>We will not use your personal information for any reason other than the above. We will not pass your personal information on to any other individual or organisation without your consent, unless we have a legal obligation to do so.</p>
                <h5 class="text-muted">We ask for your consent, in writing, to be able to fulfil the above.</h5>
                 <h3>Your rights</h3>
                  <p>You have certain rights over the personal information we hold on you, including but not limited to the following:</p>
                  <li>The right to access the personal information we hold on you.</li>
                  <li>The right to request removal of your personal information at any time</li>
                <li>The right to request that we transfer your personal information to another organisation</li>
              </ul>
           </div>
        </div>
      </div>
    </section>
    <?php endwhile; endif; ?>

<?php get_footer();