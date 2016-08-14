  <div class="container margin-nav">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center">eMDs Site Reference</h1>

        <h2>eMDs Site info:</h2>
        <div class="padding-left">
          <strong>Fonts used-</strong>
          <br>
          <div class="padding-left">
            <a href="http://www.marksimonson.com/fonts/view/proxima-nova">Proxima Nova- regular / Proxima Nova- light</a>
            <br>
            <a href="#">placeholder</a>
            <br>
          </div>

          <strong>Colors used-</strong>
          <br>
          <div class="padding-left">
            <a href="http://getbootstrap.com/css/#helper-classes">Modified bootstrap contextual color scheme (not yet customized):</a>
            <br>
            <div class="padding-left">
              <span class="label-primary pad-all text-light">*-primary -> ???: #???;</span><br>
              <span class="label-warning pad-all">*-warning -> ???: #???;</span><br>
              <span class="label-success pad-all">*-success  -> ???: #???;</span><br>
              <span class="label-info pad-all">*-info  -> ???: #???;</span><br>
              <span class="label-danger pad-all text-light">*-danger  -> ???: #???;</span><br>
              <a href="#">placeholder</a><br>
              <a href="#">placeholder</a><br>
              <a href="#">placeholder</a><br>
              <a href="#">placeholder</a><br>
            </div>
          </div>
        </div>
        <br>
        <br>

        <h2>eMDs CSS info:</h2>
        <div class="padding-left">
          <strong>External CSS / CDN references:</strong>
          <div class="padding-left">
            <a href="http://fortawesome.github.io/Font-Awesome/">Font Awesome</a>, an icon font used for universal icon recognition
          </div>
          <br>
          <strong>Internal CSS references:</strong>
          <div class="padding-left">
            <a href="http://getbootstrap.com/">Bootstrap v3.x</a>, customized for this site.  See header link for source code.
            <br>
            <a href="css/main.css">main.css</a> by Space Chimp Media: Mark Newman
          </div>
        </div>
        <br>
        <br>

        <h2>eMDs Javascript info:</h2>
        <div class="padding-left">
          <strong>External javascript / CDN references:</strong>
          <div class="padding-left">
            <a href="http://jquery.com/">jQuery v1.10.2</a>, see source code for CDN links.
            <br>
            <a href="http://getbootstrap.com/javascript/">Bootstrap v3.x</a>, see source code for CDN links.
          </div>
          <br>
          <strong>Internal javascript references:</strong>
          <div class="padding-left">
            <a href="js/main.js">main.js</a>, by Space Chimp Media: Mark Newman
            <br>
          </div>
        </div>
        <br>
        <br>

        <h2>eMDs .php general template structure (outside of Drupal):</h2>
        <div class="padding-left">
          <pre>
            &lt;html&gt;
            &lt;head&gt;
              &lt;title&gt;e-MDs | Medical Records and Database Software | *&lt;/title&gt;
              <em class="text-danger">head.php</em>
            &lt;/head&gt;
            &lt;body&gt;
              &lt;header&gt;
                  <em class="text-danger">nav-main.php</em>: logo- Home, Solutions, About Us, Blogs & Events, Support & Contact | FREE TRIAL button/modal
              &lt;/header&gt;

              --the below may contain sub-component .php files and are included in the same components/ directory as their parent--
              <em class="text-danger">content-*.php</em>
              <em class="text-danger">hero-*.php</em>
              <em class="text-danger">service-*.php</em>
              <em class="text-danger">form-*.php</em>
              <em class="text-danger">triptych-*.php</em>

              &lt;footer&gt;
                <em class="text-danger">footer.php</em>:--the below .php files are sub-components to the footer.php file
                  <em class="text-danger">events.php</em>
                  <em class="text-danger">news.php</em>
                  <em class="text-danger">managing-medical-records.php</em>
                  <em class="text-danger">industry-leader-reference.php</em>
                  <em class="text-danger">nav-main.php</em>
              &lt;/footer&gt;

              <em class="text-danger">scripts.php</em>

            &lt;/body&gt;
            &lt;/html&gt;
          </pre>
          <br>
          <strong>NOTES:</strong><br>
          <div class="padding-left">
            All of the main site page files (home, solutions, about us, etc.) are found in the public root directory
            <br>
            All components of the main page files are found in the root/components directory
            <br>
            There is a carriage return at the end of each .php file
          </div>
        </div>
        <br>
        <br>

        <h2>eMDs page list:</h2>
        <div class="padding-left">
          <strong>Sitemap: </strong>
          <a href="sitemap.xml">/sitemap.xml</a>
          <br>
          <br>
          <strong>Site-index (this page): </strong>
          <a href="index.php">/index.php</a>
          <br>
          <br>
          <div class="padding-left-2">
            <strong>Home: </strong>
            <a href="home.php">/home.php</a>
            <br>
            <strong>Solutions: </strong>
            <a href="solutions.php">/solutions.php</a>
            <br>
            <div class="padding-left-2">
              <strong>Electronic Health Record: </strong>
              <a href="ehr.php">/ehr.php</a>
              <br>
              <strong>Revenue Cycle Management: </strong>
              <a href="rcm.php">/rcm.php</a>
              <br>
              <strong>Population Health Management: </strong>
              <a href="phm.php">/phm.php</a>
              <br>
            </div>
            <strong>About Us: </strong>
            <a href="about.php">/about.php</a>
            <br>
            <div class="padding-left-2">
              <strong>Management Team: </strong>
              <a href="management.php">/management.php</a>
              <br>
              <strong>Partnerships: </strong>
              <a href="partnerships.php">/partnerships.php</a>
              <br>
              <strong>Employment: </strong>
              <a href="Employment.php">/employment.php</a>
              <br>
              <span class="padding-left">
                embedded iframe
              </span>
              <br>
            </div>
            <strong>Blog & Events: </strong>
            <a href="blog-events.php">/blog-events.php</a>
            <br>
            <div class="padding-left-2">
              <strong>Press Releases: </strong>
              <a href="press-release.php">/press-release.php</a>
              <br>
              <strong>Tradeshows: </strong>
              <a href="tradeshow.php">/tradeshow.php</a>
              <br>
              <strong>Roadshows: </strong>
              <a href="roadshow.php">/roadshow.php</a>
              <br>
              <strong>Webinars: </strong>
              <a href="webinar.php">/webinar.php</a>
              <br>
            </div>
            <strong>Support & Contact: </strong>
            <a href="support-contact.php">/support-contact.php</a>
          </div>
          <br>
          <div class="padding-left-2">
            <strong>Modals:</strong>
            <div class="padding-left-2">
              <a href="mfree-trial.php">/mfree-trial.php</a><br>
              <a href="mcontact.php">/mcontact.php</a><br>
              <a href="msupport.php">/msupport.php</a><br>
              <a href="mtraining.php">/mtraining.php</a><br>
              <a href="mspecialties.php">/mspecialties.php</a>
            </div>
            <strong>PopOver:</strong>
            <div class="padding-left-2">
              management popover code embedded in management.php page</a><br>
            </div>
          </div>
          <br>
          <div class="padding-left-2">
            <strong>Questions:</strong>
              <div class="padding-left-2">
                The specialties modal...
                <div class="text-danger padding-left-2">
                  How is it accessed?<br>
                  The invision mockup shows a table of medical specialties.  Is the table the modal itself?
                </div>
              <a href="gpci.php">The GPCI page...</a>
              <div class="text-danger padding-left-2">
                How is this accessed?<br>
                Is it its own page?
              </div>
            </div>
              <strong>Certifications: </strong>
              <a href="certifications.php">/certifications.php</a>
              <br>
              <strong>Compliance: </strong>
              <a href="compliance.php">/compliance.php</a>
              <br>
              <strong>Specialties: </strong>
              <a href="specialties.php">/specialties.php</a>
              <br>
          </div>
        </div>

        <h2 class="padding-top-2">eMDs Drupal info:</h2>
        <strong>Drupal modules: The below list is inconclusive- they are listed here for future reference.</strong>
        <br>
        <div class="padding-left">
          <a href="https://www.drupal.org/project/twitter_bootstrap_modal">Twitter Bootstrap Modal- modals to be implemented within Drupal</a>
          <br>
          <a href="#">placeholder</a>
          <br>
          <a href="#">placeholder</a>
          <br>
          <a href="#">placeholder</a>
          <br>
          <a href="#">placeholder</a>
          <br>
          <a href="#">placeholder</a>
        </div>
        <br>
        <br>

      </div>
    </div>
  </div>
