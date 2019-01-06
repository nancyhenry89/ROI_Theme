<?php /* Template Name: sign up Template */ get_header('sign'); ?>

    <div id="main-content" class="main-content signUp">

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
<!-- start form -->
<div class="signup-title head1">
    <h1>Welcome to ROI BOUTIQUE</h1>
		<h2 class="header1">Let's start by confirming your main contact email address.</h2>
		<h2 class="header2">And just a few details, so we can know you better</h2>
</div>
  <div class="row" id="general_errors" style="display: none;">
      <h5>Invalid submission. Please fix the following errors and resubmit the form.</h5>
      <div id="error_panel" class="twelve columns">

      </div>
  </div>

<div class="msg-overlay"></div>
    <header>
        <figure></figure>
    </header>

    <section>
        <form class="boutiqueSignUp" action="#" method="post">
            <div class="field-cont step-two">
            <label class="field-title">Company</label>
            <label>
            <input id="company" type="text" name="company" placeholder="" required>
            <p class="error">* please enter details </p>
            </label>
            </div>

        <div class="field-cont step-two">
            <label class="field-title">First Name</label>
            <label>
            <input id="fname" type="text" name="fname" placeholder="" required>
            <p class="error">* please enter details </p>
            </label>
        </div>

        <div class="field-cont step-two">
            <label class="field-title">Last Name</label>
            <label>
            <input id="lname" type="text" name="lname" placeholder="" required>
            <p class="error">* please enter details </p>
            </label>
        </div>
        <div class="field-cont step-one">
            <label class="field-title">Email</label>
            <label>
            <div class="email loading"></div>
            <input id="email" type="email" name="email" placeholder="" required>
            <p class="error">* email is not valid</p>
            <p class="server-error">* email already in use. Please use a different email.</p>
            </label>
         </div>
         <div class="field-cont step-one">
            <label class="field-title">Password</label>
            <label>
            <input id="pass" type="password" name="password" placeholder="" required>
            <p class="error">* please enter details </p>
            </label>
    </div>
    <div class="field-cont step-one">
            <label>
            <label class="field-title">Verify Password</label>
            <input id="confirm-pass" type="password" name="password_confirmation" placeholder="" required>
            <p class="error">* passwords don't match </p>
            </label>
    </div>
    <div class="field-cont step-two">
        <label class="field-title">Skype</label>
            <label>
            <input id="skype" type="text" name="skype" placeholder="">
            </label>
    </div>
    <div class="step-two">
        <div class="checkbox-list">
						<label class="field-title">Vertical</label>
						<div class="placeholder" name="verticalCheck">Please select...</div>
						<div class="options">
                 <label class="container">MMO
                    <input value="MMO" name="verticalCheck" type="checkbox" checked="checked">
                    <span class="checkmark"></span>
                </label>
                <label class="container">CFD
                    <input value="CFD"  name="verticalCheck" type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="container">Casino
                    <input value="Casino" name="verticalCheck" type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="container">Lotto
                    <input value="Lotto" name="verticalCheck"  type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="container">Other
                    <input value="other" name="" type="checkbox" onclick="if (this.checked){ $('#otherVertical').show();}else{$('#otherVertical').hide();}">
                    <span class="checkmark"></span>
								</label>
				</div>
                <textarea class="other" data="verticalCheck" id="otherVertical" name="otherVertical" style="display:none"></textarea>

            </div>
            <div class="checkbox-list">

						<label class="field-title">Media type</label>
						<div class="placeholder" name="mediaCheck">Please select...</div>

						<div class="options">
                 <label class="container">SEO
                    <input value="SEO" name="mediaCheck" type="checkbox" checked="checked">
                    <span class="checkmark"></span>
                </label>
                <label class="container">Media
                    <input value="Media" name="mediaCheck" type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="container">Email
                    <input value="Email" name="mediaCheck" type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="container">Marketing
                    <input value="Marketing" name="mediaCheck" type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="container">PPC
                    <input value="PPC" name="mediaCheck" type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label name="mediaCheck" class="container">FB
                    <input name="mediaCheck" value="FB" type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="container">Other
                    <input value="Other" name="" type="checkbox" onclick="if (this.checked){ $('#otherMedia').show();}else{$('#otherMedia').hide();}">
                    <span class="checkmark"></span>
								</label>
								</div>
                <textarea class="other" data="mediaCheck" id="otherMedia" name="otherMedia" style="display:none"></textarea>

            </div>
				</div>
				<?php
                // hidden form values
                if(isset($_SERVER["HTTP_CF_CONNECTING_IP"])){
                    $signup_ip = $_SERVER["HTTP_CF_CONNECTING_IP"];
                    $country_code = $_SERVER["HTTP_CF_IPCOUNTRY"];
                } else {
                    $signup_ip = '0';
                    $country_code = '0';
                }
            ?>
            <input type="hidden" src="verticalCheck" name="vertical" value="">
            <input type="hidden" src="mediaCheck" name="media" value="">
            <input type="hidden" name="signup_ip" value="<?=$signup_ip; ?>">
			<!--<input type="hidden" name="account_manager_id" value="<?php if(isset($_GET['account_manager_id'])) {echo $_GET['account_manager_id'];}?>">-->
            <input type="hidden" name="referral" value="<?php if(isset($_GET['referral'])){echo $_GET['referral'];} ?>">
            <input type="hidden" name="network" value="<?php if(isset($_GET['network'])){echo $_GET['network'];} ?>">
            <input type="hidden" name="country" value="<?=$country_code; ?>">
            <input type="hidden" name="stoken" value="<?=$_SESSION['sec_token']; ?>">
            <button id="cont" class="step-one btn btn-primary" type="submit" value="Continue">Just One More Step
            </button>
            <button class="step-two btn btn-primary" id="subBtn" type="submit" value="Send">Let Get Started! 
						</button>
						</form>
						<section class="steps">
        <div class="step active first">
            <div class="step-number">1</div>
        </div>
        <div class="step second">
            <div class="step-number ">2</div>
        </div>
    </section>

        <div id="message"><span class="close" onclick="document.querySelector('#message');">&times;</span></div>
  </div>
  
  <div id="successModal" class="reveal-modal small">
    <p id="successMessage">
    </p>
    <a class="close-reveal-modal">×</a>
  </div>
 
        </div>
    </div>

  <!-- Included JS Files (Compressed) -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src="js/foundation.min.js"></script>
  
  <!-- Initialize JS Plugins -->
  <script src="js/signup.js?1"></script>

            
<!-- End form -->
</div>
</div>
</div>
<?php
get_footer();