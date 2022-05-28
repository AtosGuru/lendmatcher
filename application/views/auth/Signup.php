<div class="register">
        <div class="container">
          <div class="row">
            <div class="col-md-6 m-auto">
              <div class="a-border-green">
                <h3 class=" text-center">Get Started Now</h3>
                <p class="lead text-center">
                  It’s easy to create a pitch using our online form. Your pitch
                  can be in front of our investors before you know it.
                </p>
                <form >
                  <div class="form-group row a-c-padding">
                    <div class="form-check col-md-6">
                      <input
                        class="form-check-input "
                        type="radio"
                        name="usertype"
                        id="flexRadioDefault1"
                        value="investor"
                      
                      />
                      <label class="form-check-label" for="flexRadioDefault1">
                        I am an Investor
                      </label>
                    </div>
                    <div class="form-check col-md-6">
                      <input
                        class="form-check-input"
                        type="radio"
                        name="usertype"
                        id="flexRadioDefault2"
                        value="entrepreneur"
                      />
                      <label class="form-check-label" for="flexRadioDefault2">
                        I am an Entrepreneur
                      </label>
                    </div>
                  </div>
                  <div class="form-group">
                    <input
                      placeholder="Full Name*"
                      name="name"
                      type="name"
                      class="form-control"
                      id="name"
                    />
                  </div>
                  <div class="form-group">
                    <input
                      placeholder="Email Address*"
                      name="email"
                      type="email"
                      class="form-control"
                      id="email"
                    />
                    
                  </div>
                  <div class="form-group">
                    <input
                      placeholder="Password"
                      name="password"
                      type="password"
                      class="form-control"
                      id="password"
                    />
                  </div>
                  <div class="form-group">
                    <input
                      placeholder="Confirm Password"
                      name="password2"
                      type="password"
                      class="form-control"
                      id="password2"
                    />
                  </div>
                  <div class="form-group">
                    <input
                      type="button"
                      class="btn btn-success btn-block mt-4"
                      id="register"
                      value="Submit"
                    />
                  </div>
                </form>
              </div>
              <p>
                Already have an account?
                <span>
                  <a href="<?=base_url()?>index.php/Auth/login">Login</a>
                </span>
              </p>
            </div>
          </div>
        </div>
      </div>