           <!-- Sidebar -->
            <div class="col-md-4">
              <div class="side-bar"> 
                
                <!-- Professional Details -->
                <h5 class="tittle">Professional Details</h5>
                {{ Html::image($assetspath."/images/ikbal.jpg","Md Ikbal Hossain",['class'=>'img-responsive']) }}                
                <ul class="personal-info">
                  <li>
                    <p> <span> Name</span> Md Ikbal Hossain </p>
                  </li>
                  <li>
                    <p> <span> Age</span> 28 Years </p>
                  </li>
                  <li>
                    <p> <span> Location</span> Dhaka, Bangladesh </p>
                  </li>
                  <li>
                    <p> <span> Experience</span> 4.5 Years </p>
                  </li>
                  <li>
                    <p> <span> Degree</span> EEE,MCA </p>
                  </li>
                  <li>
                    <p> <span> Career Level</span> Mid-Level </p>
                  </li>
                  <li>
                    <p> <span> Phone</span> +8801726209373 </p>
                  </li>
                  <li>
                    <p> <span> FAX</span> (800) 123-4568 </p>
                  </li>
                  <li>
                    <p> <span> E-mail</span> <a href="#."> md.ikbalhossain@gmail.com</a> </p>
                  </li>
                  <li>
                    <p> <span> Website</span><a href="#."> ikbalhossain.com </a></p>
                  </li>
                </ul>
                
                <!-- Attachments -->
                <h5 class="tittle">Attachments</h5>
                <div class="attach bor-btm padding-25">
                  <ul>
                    <li>
                      <p><img src="images/pdf-icon.jpg" alt="" > Curriculum-Vitae.pdf <a href="#."><i class="fa fa-cloud-download"></i></a> <a href="#."><i class="fa fa-eye"></i></a></p>
                    </li>
                    <li>
                      <p><img src="images/word-icon.jpg" alt="" > COE.docx <a href="#."><i class="fa fa-cloud-download"></i></a> <a href="#."><i class="fa fa-eye"></i></a></p>
                    </li>
                  </ul>
                </div>
                
                <!-- Social Profiles -->
                <h5 class="tittle">Social Profiles</h5>
                <div class="social-icon bor-btm padding-25">
                  <ul>
                    <li> <a href="#."> <i class="fa fa-facebook"></i></a> </li>
                    <li> <a href="#."> <i class="fa fa-google"></i></a> </li>
                    <li> <a href="#."> <i class="fa fa-twitter"></i></a> </li>
                    <li> <a href="#."> <i class="fa fa-linkedin"></i></a> </li>
                    <li> <a href="#."> <i class="fa fa-skype"></i></a> </li>
                  </ul>
                </div>
                
                <!-- Contact Me -->
                <h5 class="tittle">Contact Me</h5>
                <div class="contact padding-25"> 
                  <!-- Success Msg -->
                  <div id="contact_message" class="success-msg"> <i class="fa fa-paper-plane-o"></i>Thank You. Your Message has been Submitted</div>
                  
                  <!-- FORM -->
                  <form role="form" id="contact_form" class="contact-form" method="post" onSubmit="return false">
                    <ul class="row">
                      <li class="col-sm-12">
                        <label>
                          <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                        </label>
                      </li>
                      <li class="col-sm-12">
                        <label>
                          <input type="text" class="form-control" name="company" id="company" placeholder="Subject">
                        </label>
                      </li>
                      <li class="col-sm-12">
                        <label>
                          <textarea class="form-control" name="message" id="message" rows="5" placeholder="Message"></textarea>
                        </label>
                      </li>
                      <li class="col-sm-12">
                        <button type="submit"  value="submit" id="btn_submit" onClick="proceed();">Send Message</button>
                      </li>
                    </ul>
                  </form>
                </div>
              </div>
            </div>