
     <section class="bg-dark text-white a-footer" style="padding:10px">
              <div class="container">
                <div class="row footer-img-div">
                  <div class="col-md-6">
                    <img src="<?=base_url()?>assets/img/logo.png" style="width: 50%"></img>
                  </div>
                  <div class="col-md-6"></div>
                </div>
                <hr class="white" />
                <div class="row">
                  <div class="col-md-3">
                    <p>Latest Tweets</p>
                    <p>
                      • Connecting students with the support they need to thrive is
                      the mission of fast-growing EdTech businessesvygoapp
                    </p>
                  </div>
                  <div class="col-md-9 row">
                    <div class="col-md-3">
                      <p>More Information About:</p>
                      <ul>
                        <li>LendMatcher </li>
                        <li>LendMatcher</li>
                        <li>LendMatcher </li>
                        <li>LendMatcher </li>
                      </ul>
                    </div>
                    <div class="col-md-3">
                      <p>Navigation</p>
                      <ul>
                        <li>How it works</li>
                        <li>Contact us</li>
                        <li>About us</li>
                      </ul>
                    </div>
                    <div class="col-md-3">
                      <p>Entrepreneur Pages</p>
                      <ul>
                        <li>Add a pitch</li>
                        <li>LendMatcher Investment in Seattle</li>
                        <li>Our Rates</li>
                        <li>Entrepreneur FAQ</li>
                      </ul>
                    </div>
                    <div class="col-md-3">
                      <p>Investor Pages</p>
                      <ul>
                        <li>Register</li>
                        <li>Business Proposal</li>
                        <li>Investors FAQ</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="row" style="margin-top:45px;margin-bottom:30px">
                      <div class="col-md-6">
                        <ul class="c-ul">
                          <li>Terms and Condition</li>
                          <li>Privacy Policy</li>
                          <li>Site Map</li>
                          <li>Refunds</li>
                        </ul>
                      </div>
                      <div class="col-md-6">
                        <small >&copy; 2022 LendMatcher - Connecting</small>
                        <small>Global Local Entrepreneurs with Angel Investors</small>
                      </div>
                    </div>
                  </div>
              </div>
      </section>
  </body>
  
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
  
    </script>

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
      integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
      integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
      crossorigin="anonymous"
    ></script>
    <script
      src="<?=base_url()?>assets/js/atos.js"
    >
    </script>
    <?php if(isset($js_link)) { ?>
      <script
      src="<?=base_url()?>assets/js/<?=$js_link?>"
      >
      </script>
    <?php } else { ?>

    <?php } ?>

  </html>
