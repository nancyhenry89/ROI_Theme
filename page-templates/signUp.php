<?php /* Template Name: sign up Template */ get_header('sign'); ?>

    <div id="main-content" class="main-content">

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
<!-- start form -->

  <div class="row" id="general_errors" style="display: none;">
      <h5>Invalid submission. Please fix the following errors and resubmit the form.</h5>
      <div id="error_panel" class="twelve columns">

      </div>
  </div>


  <div class="row super">
    <div class="ten columns">
    <div class="steps-wrapper">
        <div class="first-step">
      <h3 class="form-details">1 <span>|</span> Account Details</h3>
      <div class="row">
        <div class="three columns"><label class="inline">Company Name</label></div>
        <div class="eight columns"><input type="text" id="company"/></div>
      </div>
      <div class="row">
        <div class="three columns"><label class="inline">Country</label></div>
        <div class="eight columns">
        <select id="country">
          <option value="AF">Afghanistan</option>
									<option value="AX">Aland Islands</option>
									<option value="AL">Albania</option>
									<option value="DZ">Algeria</option>
									<option value="AS">American Samoa</option>
									<option value="AD">Andorra</option>
									<option value="AO">Angola</option>
									<option value="AI">Anguilla</option>
									<option value="AQ">Antarctica</option>
									<option value="AG">Antigua And Barbuda</option>
									<option value="AR">Argentina</option>
									<option value="AM">Armenia</option>
									<option value="AW">Aruba</option>
									<option value="AP">Asia (Unknown Country)</option>
									<option value="AU">Australia</option>
									<option value="AT">Austria</option>
									<option value="AZ">Azerbaijan</option>
									<option value="BS">Bahamas</option>
									<option value="BH">Bahrain</option>
									<option value="BD">Bangladesh</option>
									<option value="BB">Barbados</option>
									<option value="BY">Belarus</option>
									<option value="BE">Belgium</option>
									<option value="BZ">Belize</option>
									<option value="BJ">Benin</option>
									<option value="BM">Bermuda</option>
									<option value="BT">Bhutan</option>
									<option value="BO">Bolivia</option>
									<option value="BA">Bosnia And Herzegowina</option>
									<option value="BW">Botswana</option>
									<option value="BV">Bouvet Island</option>
									<option value="BR">Brazil</option>
									<option value="IO">British Indian Ocean Territory</option>
									<option value="BN">Brunei Darussalam</option>
									<option value="BG">Bulgaria</option>
									<option value="BF">Burkina Faso</option>
									<option value="BI">Burundi</option>
									<option value="KH">Cambodia</option>
									<option value="CM">Cameroon</option>
									<option value="CA">Canada</option>
									<option value="CV">Cape Verde</option>
									<option value="KY">Cayman Islands</option>
									<option value="CF">Central African Republic</option>
									<option value="TD">Chad</option>
									<option value="CL">Chile</option>
									<option value="CN">China</option>
									<option value="CX">Christmas Island</option>
									<option value="CC">Cocos (Keeling) Islands</option>
									<option value="CO">Colombia</option>
									<option value="KM">Comoros</option>
									<option value="CG">Congo</option>
									<option value="CD">Congo - The Democratic Rep Of</option>
									<option value="CK">Cook Islands</option>
									<option value="CR">Costa Rica</option>
									<option value="CI">Cote D Ivoire</option>
									<option value="HR">Croatia</option>
									<option value="CU">Cuba</option>
									<option value="CY">Cyprus</option>
									<option value="CZ">Czech Republic</option>
									<option value="DK">Denmark</option>
									<option value="DJ">Djibouti</option>
									<option value="DM">Dominica</option>
									<option value="DO">Dominican Republic</option>
									<option value="EC">Ecuador</option>
									<option value="EG">Egypt</option>
									<option value="SV">El Salvador</option>
									<option value="GQ">Equatorial Guinea</option>
									<option value="ER">Eritrea</option>
									<option value="EE">Estonia</option>
									<option value="ET">Ethiopia</option>
									<option value="EU">Europe (Unknown Country)</option>
									<option value="FK">Falkland Islands (Malvinas)</option>
									<option value="FO">Faroe Islands</option>
									<option value="FJ">Fiji</option>
									<option value="FI">Finland</option>
									<option value="FR">France</option>
									<option value="GF">French Guiana</option>
									<option value="PF">French Polynesia</option>
									<option value="TF">French Southern Territories</option>
									<option value="GA">Gabon</option>
									<option value="GM">Gambia</option>
									<option value="GE">Georgia</option>
									<option value="DE">Germany</option>
									<option value="GH">Ghana</option>
									<option value="GI">Gibraltar</option>
									<option value="GR">Greece</option>
									<option value="GL">Greenland</option>
									<option value="GD">Grenada</option>
									<option value="GP">Guadeloupe</option>
									<option value="GU">Guam</option>
									<option value="GT">Guatemala</option>
									<option value="GG">Guernsey</option>
									<option value="GN">Guinea</option>
									<option value="GW">Guinea-Bissau</option>
									<option value="GY">Guyana</option>
									<option value="HT">Haiti</option>
									<option value="HM">Heard And Mc Donald Islands</option>
									<option value="VA">Holy See (Vatican City State)</option>
									<option value="HN">Honduras</option>
									<option value="HK">Hong Kong</option>
									<option value="HU">Hungary</option>
									<option value="IS">Iceland</option>
									<option value="IN">India</option>
									<option value="ID">Indonesia</option>
									<option value="INT">International (Generic)</option>
									<option value="IR">Iran, Islamic Republic Of</option>
									<option value="IQ">Iraq</option>
									<option value="IE">Ireland</option>
									<option value="IM">Isle Of Man</option>
									<option value="IL">Israel</option>
									<option value="IT">Italy</option>
									<option value="JP">Japan</option>
									<option value="JE">Jersey</option>
									<option value="JO">Jordan</option>
									<option value="KZ">Kazakhstan</option>
									<option value="KE">Kenya</option>
									<option value="KI">Kiribati</option>
									<option value="KP">Korea - North</option>
									<option value="KR">Korea - South</option>
									<option value="KW">Kuwait</option>
									<option value="KG">Kyrgyzstan</option>
									<option value="LA">Lao Peoples Democratic Republic</option>
									<option value="LV">Latvia</option>
									<option value="LB">Lebanon</option>
									<option value="LS">Lesotho</option>
									<option value="LR">Liberia</option>
									<option value="LY">Libyan Arab Jamahiriya</option>
									<option value="LI">Liechtenstein</option>
									<option value="LT">Lithuania</option>
									<option value="LU">Luxembourg</option>
									<option value="MO">Macau</option>
									<option value="MK">Macedonia - The Frm Yugoslav Rep Of</option>
									<option value="MG">Madagascar</option>
									<option value="MW">Malawi</option>
									<option value="MY">Malaysia</option>
									<option value="MV">Maldives</option>
									<option value="ML">Mali</option>
									<option value="MT">Malta</option>
									<option value="MH">Marshall Islands</option>
									<option value="MQ">Martinique</option>
									<option value="MR">Mauritania</option>
									<option value="MU">Mauritius</option>
									<option value="YT">Mayotte</option>
									<option value="MX">Mexico</option>
									<option value="FM">Micronesia - Federated States Of</option>
									<option value="MD">Moldova - Republic Of</option>
									<option value="MC">Monaco</option>
									<option value="MN">Mongolia</option>
									<option value="ME">Montenegro</option>
									<option value="MA">Morocco</option>
									<option value="MZ">Mozambique</option>
									<option value="MM">Myanmar</option>
									<option value="NA">Namibia</option>
									<option value="NR">Nauru</option>
									<option value="NP">Nepal</option>
									<option value="NL">Netherlands</option>
									<option value="AN">Netherlands Antilles</option>
									<option value="NC">New Caledonia</option>
									<option value="NZ">New Zealand</option>
									<option value="NI">Nicaragua</option>
									<option value="NE">Niger</option>
									<option value="NG">Nigeria</option>
									<option value="NU">Niue</option>
									<option value="NF">Norfolk Island</option>
									<option value="MP">Northern Mariana Islands</option>
									<option value="NO">Norway</option>
									<option value="OM">Oman</option>
									<option value="PK">Pakistan</option>
									<option value="PW">Palau</option>
									<option value="PS">Palestinian Territories</option>
									<option value="PA">Panama</option>
									<option value="PG">Papua New Guinea</option>
									<option value="PY">Paraguay</option>
									<option value="PE">Peru</option>
									<option value="PH">Philippines</option>
									<option value="PN">Pitcairn</option>
									<option value="PL">Poland</option>
									<option value="PT">Portugal</option>
									<option value="PR">Puerto Rico</option>
									<option value="QA">Qatar</option>
									<option value="RE">Reunion</option>
									<option value="RO">Romania</option>
									<option value="RU">Russian Federation</option>
									<option value="RW">Rwanda</option>
									<option value="BL">Saint Barthelemy</option>
									<option value="KN">Saint Kitts And Nevis</option>
									<option value="LC">Saint Lucia</option>
									<option value="MF">Saint Martin</option>
									<option value="PM">Saint Pierre Miquelon</option>
									<option value="VC">Saint Vincent And The Grenadines</option>
									<option value="MS">Samoa</option>
									<option value="SM">San Marino</option>
									<option value="ST">Sao Tome Principe</option>
									<option value="SA">Saudi Arabia</option>
									<option value="SN">Senegal</option>
									<option value="RS">Serbia</option>
									<option value="SC">Seychelles</option>
									<option value="SL">Sierra Leone</option>
									<option value="SG">Singapore</option>
									<option value="SK">Slovakia</option>
									<option value="SI">Slovenia</option>
									<option value="SB">Solomon Islands</option>
									<option value="SO">Somalia</option>
									<option value="ZA">South Africa</option>
									<option value="GS">South Georgia / South Sandwich Isl</option>
									<option value="ES">Spain</option>
									<option value="LK">Sri Lanka</option>
									<option value="SH">St. Helena</option>
									<option value="SD">Sudan</option>
									<option value="SR">Suriname</option>
									<option value="SJ">Svalbard And Jan Mayen Islands</option>
									<option value="SZ">Swaziland</option>
									<option value="SE">Sweden</option>
									<option value="CH">Switzerland</option>
									<option value="SY">Syrian Arab Republic</option>
									<option value="TW">Taiwan - Province Of China</option>
									<option value="TJ">Tajikistan</option>
									<option value="TZ">Tanzania, United Republic Of</option>
									<option value="TH">Thailand</option>
									<option value="TL">Timor-Leste</option>
									<option value="TG">Togo</option>
									<option value="TK">Tokelau</option>
									<option value="TO">Tonga</option>
									<option value="TT">Trinidad And Tobago</option>
									<option value="TN">Tunisia</option>
									<option value="TR">Turkey</option>
									<option value="TM">Turkmenistan</option>
									<option value="TC">Turks And Caicos Islands</option>
									<option value="TV">Tuvalu</option>
									<option value="UG">Uganda</option>
									<option value="UA">Ukraine</option>
									<option value="AE">United Arab Emirates</option>
									<option value="UK">United Kingdom</option>
									<option value="US" selected="selected">United States</option>
									<option value="UY">Uruguay</option>
									<option value="UM">Us Minor Outlying Islands</option>
									<option value="UZ">Uzbekistan</option>
									<option value="VU">Vanuatu</option>
									<option value="VE">Venezuela</option>
									<option value="VN">Viet Nam</option>
									<option value="VG">Virgin Islands, British</option>
									<option value="VI">Virgin Islands, U.S.</option>
									<option value="WF">Wallis And Futuna</option>
									<option value="EH">Western Sahara</option>
									<option value="YE">Yemen</option>
									<option value="ZM">Zambia</option>
									<option value="ZW">Zimbabwe</option>
								</select>
        
        </div>
      </div>
      <div class="row">
        <div class="three columns"><label class="inline">Address 1</label></div>
        <div class="eight columns"><input type="text" id="address1"/></div>
      </div>
      <div class="row">
        <div class="three columns"><label class="inline">Address 2</label></div>
        <div class="eight columns"><input type="text" id="address2"/></div>
      </div>
      <div class="row">
        <div class="three columns"><label class="inline">City</label></div>
        <div class="eight columns"><input type="text" id="city"/></div>
      </div>  
      <div class="row">
        <div class="three columns"><label class="inline">State/Province/Region</label></div>
        <div class="eight columns"><input type="text" id="region"/></div>
      </div>
      <div class="row">
        <div class="three columns"><label class="inline">Zip/Postal Code</label></div>
        <div class="eight columns"><input type="text" id="zipcode"/></div>
      </div>    
      <div class="row">
        <div class="three columns"><label class="inline">Phone Number</label></div>
        <div class="eight columns"><input type="text" id="phone"/></div>
      </div>
        
      </div>
        
        <!-- Second step -->
        <div class="second-step">
      <h3 class="form-details">2 <span>|</span> User Details</h3>

      <div class="row">
        <div class="three columns"><label class="inline">First Name</label></div>
        <div class="eight columns"><input type="text" id="first_name"/></div>
      </div>
      <div class="row">
        <div class="three columns"><label class="inline">Last Name</label></div>
        <div class="eight columns"><input type="text" id="last_name"/></div>
      </div>
      <div class="row">  
        <div class="three columns"><label class="inline">Title</label></div>
        <div class="eight columns"><input type="text" id="title"/></div>
      </div>
      <div class="row">
        <div class="three columns"><label class="inline">Email Address</label></div>
        <div class="eight columns"><input type="text" id="email"/></div>
      </div>
      <div class="row">
        <div class="three columns"><label class="inline">Password</label></div>
        <div class="eight columns"><input type="password" id="password"/></div>
      </div>
      <div class="row">
        <div class="three columns"><label class="inline">Confirm Password</label></div>
        <div class="eight columns"><input type="password" id="password_confirmation"/></div>
      </div>
            <!--Checkbox n Button -->
     <div class="checknbutton-wrap">
        <div class="row">
        <div class="one column">
        </div>
       
      </div>
      <button id="send" type="button" class="button sma">Sign Up</button>
          <div class="five columns">
          <label> <input type="checkbox" id="terms_agreement" value="1" /><a href="http://ho.roi.boutique/terms" target="_blank">Agree to terms and conditions?</a> </label>
        </div>
      </div>
       <!-- Checkbox n Button end -->
            
            </div>


        </div>
        

    </div>

  </div>
  </div>
  
  <div id="successModal" class="reveal-modal small">
    <p id="successMessage">
    </p>
    <a class="close-reveal-modal">×</a>
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