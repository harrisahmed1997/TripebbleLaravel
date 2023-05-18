@extends('master')

@section('title','Contact')

@section('content')

    <div class="content">
      <div class="content-section overflow-hidden wf-section">
        <div class="spacer-2xlarge"></div>
        <div class="content-wrapper">
          <h1 class="page-heading">Feel free to write us a message, or let’s be social.</h1>
          <div class="spacer-xlarge"></div>
          <div class="contact-wrapper">
            <div class="caption-wrapper">
              <div class="caption">Contact</div>
              <div class="line"></div>
            </div>
            <div class="w-layout-grid contact-grid">
              <div id="w-node-_5c733215-13b9-a650-28f1-7d3bd097fdfb-2dbeb247"></div>
              <div>
                <div class="form-block w-form">
                  <form id="email-form" name="email-form" data-name="Email Form" method="get">
                    <div class="form-list">
                      <div><label for="name" class="field-label">What&#x27;s your name?<span class="sup">1/7</span></label><input type="text" class="text-field w-input" maxlength="256" name="name" data-name="Name" placeholder="John Doe*" id="name" required=""></div>
                      <div><label for="Company" class="field-label">What&#x27;s the name of your organization?<span class="sup">2/7</span></label><input type="text" class="text-field w-input" maxlength="256" name="Company" data-name="Company" placeholder="Company name" id="Company"></div>
                      <div><label for="Email" class="field-label">What is your email address?<span class="sup">3/7</span></label><input type="email" class="text-field w-input" maxlength="256" name="Email" data-name="Email" placeholder="john.doe@email.com*" id="Email" required=""></div>
                      <div><label for="Phone" class="field-label">What is your phone number?<span class="sup">4/7</span></label><input type="tel" class="text-field w-input" maxlength="256" name="Phone" data-name="Phone" placeholder="+49(0)123456789" id="Phone"></div>
                      <div><label for="Goal" class="field-label">Tell us a bit about your project goals.<span class="sup">5/7</span></label><input type="text" class="text-field w-input" maxlength="256" name="Goal" data-name="Goal" placeholder="New website and branding*" id="Goal" required=""></div>
                      <div><label for="Budget" class="field-label">What is your budget for your project?<span class="sup">6/7</span></label>
                        <div class="text-field"><select id="Budget" name="Budget" data-name="Budget" class="select-field w-select">
                            <option value="">€10.000 and under</option>
                            <option value="€10.000 - €30.000">€10.000 - €30.000</option>
                            <option value="€30.000 - €50.000">€30.000 - €50.000</option>
                            <option value="€50.000 and up">€50.000 and up</option>
                          </select></div>
                      </div>
                      <div><label for="field" class="field-label">Your message.<span class="sup">7/7</span></label><textarea placeholder="Can you help me with ...*" maxlength="5000" id="field" name="field" data-name="Field" required="" class="text-field is-text-area w-input"></textarea></div>
                      <div class="submit-wrapper"><input type="submit" value="Send Message" data-wait="Please wait..." class="submit-button w-button"></div>
                    </div>
                  </form>
                  <div class="success-message w-form-done">
                    <div>Thank you! Your submission has been received!</div>
                  </div>
                  <div class="w-form-fail">
                    <div>Oops! Something went wrong while submitting the form.</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="spacer-large"></div>
          <div class="contact-wrapper">
            <div class="caption-wrapper">
              <div class="caption">Email &amp; Social</div>
              <div class="line"></div>
            </div>
            <div class="w-layout-grid contact-grid">
              <div id="w-node-bfa8c068-6715-1ba0-946a-587379d384d2-2dbeb247"></div>
              <div class="contact-list">
                <div id="w-node-_43bdedcd-041f-d10d-431b-0d1af04be8ce-2dbeb247">
                  <div class="caption">BUSINESS</div>
                  <div>
                    <div>New business inquiries and collaborations. Please write to:</div>
                    <div class="magnetic-link">
                      <a href="#" class="w-inline-block">
                        <div class="link-overflow">
                          <div class="link-label">helpdesk@tripebble.com</div>
                          <div class="link-label on-hover">helpdesk@tripebble.com</div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="caption">Public Relations</div>
                  <div>
                    <div>Requests for interviews, materials, and talks. Please write to:</div>
                    <div class="magnetic-link">
                      <a href="#" class="w-inline-block">
                        <div class="link-overflow">
                          <div class="link-label">press@tripebble.com</div>
                          <div class="link-label on-hover">press@tripebble.com</div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="caption">Careers</div>
                  <div>
                    <div class="display-inline">Think you&#x27;ve got what it takes to join our team? Please write to:</div>
                    <div class="magnetic-link">
                      <a href="#" class="w-inline-block">
                        <div class="link-overflow">
                          <div class="link-label">jobs@tripebble.com</div>
                          <div class="link-label on-hover">jobs@tripebble.com</div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="caption">Social</div>
                  <div class="link-list">
                    <div class="magnetic-link">
                      <a href="#" class="w-inline-block">
                        <div class="link-overflow">
                          <div class="link-label">Instagram</div>
                          <div class="link-label on-hover">Instagram</div>
                        </div>
                      </a>
                    </div>
                    <div class="magnetic-link">
                      <a href="#" class="w-inline-block">
                        <div class="link-overflow">
                          <div class="link-label">Twitter</div>
                          <div class="link-label on-hover">Twitter</div>
                        </div>
                      </a>
                    </div>
                    <div class="magnetic-link">
                      <a href="#" class="w-inline-block">
                        <div class="link-overflow">
                          <div class="link-label">LinkedIn</div>
                          <div class="link-label on-hover">LinkedIn</div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="spacer-large"></div>
          <div class="contact-wrapper">
            <div class="caption-wrapper">
              <div class="caption">Newsletter</div>
              <div class="line"></div>
            </div>
            <div class="w-layout-grid contact-grid">
              <div id="w-node-_04d37050-a78b-0b87-83bb-a529c23b88f7-2dbeb247"></div>
              <div>
                <div class="form-block w-form">
                  <form id="email-form" name="email-form" data-name="Email Form" method="get">
                    <div class="form-list">
                      <div><label for="Email-2" class="field-label">Subscribe to our newsletter to get insights &amp; advice on digital design</label><input type="email" class="text-field w-input" maxlength="256" name="Email-2" data-name="Email 2" placeholder="john.doe@gmail.com*" id="Email-2" required=""></div>
                      <div class="submit-wrapper"><input type="submit" value="Subscribe" data-wait="Please wait..." class="submit-button w-button"></div>
                    </div>
                  </form>
                  <div class="success-message w-form-done">
                    <div>Thank you! Your submission has been received!</div>
                  </div>
                  <div class="w-form-fail">
                    <div>Oops! Something went wrong while submitting the form.</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="spacer-xlarge"></div>
      </div>
      <div data-w-id="5559a037-86cf-5206-779b-5886b9d5a8d4" class="rounded-div-wrapper">
        <div class="rounded-div">
          <div class="rounded-div-background"></div>
        </div>
      </div>
    </div>

@endsection

