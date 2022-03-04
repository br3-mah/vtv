<style>
/*
   Website: https://destructiveburn.com/
   Youtube: https://www.youtube.com/c/destructiveburn
   Facebook: https://www.facebook.com/destructiveburn
   Twitter: https://twitter.com/DestructiveBurn
   Support My Work: https://www.paypal.com/donate?hosted_button_id=ZJGYBNSCSDFBG
---------------------------------------------------
Created By: DestructiveBurn
---------------------------------------------------
Credit:  Some slider code was used from: https://codepen.io/rokobuljan/pen/XXzqKQ
Credit:  Wallpaper: https://wallpaperaccess.com/full/496120.jpg
*/

* {
	margin:0 auto;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}
/*Input/Select Placeholder*/
::placeholder,.country{
	color: #898989;
}
::-moz-placeholder{
	color: #fff;
}
/*Scroll Bars*/
::-webkit-scrollbar {
	display: none;
	overflow: hidden;
}
.scroll-hidden {
    -ms-overflow-style: none;
    scrollbar-width: none;
    height: 235px;
    overflow-y: scroll;
}
/* Wallpaper */
body{
    background:#000000 url(https://wallpaperaccess.com/full/496120.jpg) no-repeat center center fixed!important;
    -webkit-background-size: cover!important;
    -moz-background-size: cover!important;
    -o-background-size: cover!important;
    background-size: cover!important;
}
/*Column Blur*/
.column {
  background-color: rgb(0 0 0 / 50%);
}

/* Backdrop support: Transparent and Blurred */
@supports ((-webkit-backdrop-filter: blur(2em)) or (backdrop-filter: blur(2em))) {
.column {
    background-color: rgb(0 0 0 / 50%);
    -webkit-backdrop-filter: blur(2em);
    backdrop-filter: blur(2em);
  }
}

/*--------------------------------------------------->
FONT DATA
----------------------------------------------------->
*/
/*FontAwesome Bootstrap Fonts*/
@font-face {
font-family: "FontAwesome";
font-weight: normal;
font-style : normal;
       src : url("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/fonts/fontawesome-webfont.eot?v=4.7.0");
       src : url("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/fonts/fontawesome-webfont.eot?#iefix&v=4.7.0") format("embedded-opentype"),
             url("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/fonts/fontawesome-webfont.woff2?v=4.7.0") format("woff2"),
             url("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/fonts/fontawesome-webfont.woff?v=4.7.0") format("woff"),
             url("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/fonts/fontawesome-webfont.ttf?v=4.7.0") format("truetype"),
             url("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/fonts/fontawesome-webfont.svg?v=4.7.0#fontawesomeregular") format("svg");
}
/*FontAwesome Font Style*/
.country-select:before,.two-step:before,.phone:before,.first:before,.last:before,.mail:before,.r-pass:before,.pass:before,.user:before,.cright:before,.logo:before {
    font-family: 'FontAwesome';
    font-weight: normal;
    font-style: normal;
    color: #5f84f1;
}
/*Logo Icon*/
.logo:before{
    content: '\f2bd';
}
/*Input User Icon*/
.user:before {
    content: '\f007';
}
/*Input First Name Icon*/
.first:before {
    content: '\f2c1';
}
/*Input Last Name Icon*/
.last:before {
    content: '\f2c1';
}
/*Input Email Icon*/
.mail:before {
    content: '\f0e0';
}
/*Input Password Icon*/
.r-pass:before,.pass:before {
    content: '\f09c';
}
/*Input Phone Number Icon*/
.phone:before {
    content: '\f095';
}
/*Input 2FA Number Icon*/
.two-step:before {
    content: '\f084';
}
.country-select:before {
    content: '\f0ac';
}
/*Input User/First/Last/Email/Pass Correction*/
.country-select:before,.two-step:before,.phone:before,.first:before,.last:before,.mail:before,.r-pass:before,.pass:before,.user:before {
    float: left;
    clear: both;
    margin-left: -30px;
    line-height: 40px;
}
/*Footer Icon*/
.cright:before {
    content: '\f1f9';
    margin-left: 5px;
    margin-right: 5px;
}
/*--------------------------------------------------->
PAGE DATA
----------------------------------------------------->
*/
/*Center Column On Page*/
.middle{
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  min-height: 100vh;
}
/*Column Body*/
.column {
    margin: 0 auto;
    width: 530px;
    height: 410px;
    border-radius: 10px 10px 10px 10px;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;	
}
/*Column Hover*/
.column:hover {
    -webkit-box-shadow: 0px 0px 10px #000000;
    -moz-box-shadow: 0px 0px 10px #000000;
    box-shadow: 0px 0px 10px #000000;
}
/*Login Logo*/
.branding-logo {
    font-size: 50px;
    line-height: 70px;
    text-align: center;
    align-content: center;
    background: #000000;
    background-repeat: no-repeat;
    display: block;
    margin-top: 10px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 0px;
    border: 1px solid #151515;
    border-radius: 10px 10px 10px 10px;
    width: 77px;
    height: 73px;
    overflow: hidden;
}
/*Site Branding*/
.branding-title {
    font-family: fantasy;
    font-size: 20px;
    color: #bcc3c5;
    text-align: center;
    margin-top: 5px;
}
/*Input Column*/
.input-field {
    padding-left: 50px;
    padding-right: 20px;
    padding-bottom: 5px;
}
/*Input Column Help*/
.input-field-help {
    padding-left: 20px;
    padding-right: 20px;
    padding-bottom: 5px;
}
/*Input Style*/
.country,.input-field .loger {
    width: 100%;
    margin: 5px 0px 5px 0px;
    padding: 10px 10px 10px 10px;
    background: #000000;
    border: 1px solid #0d2637;
}
/*Input Shift*/
.country-select,.input-field p{
    margin-right: 15px;
}
/*Dropdown Options*/
.country{
	-moz-appearance: none;
}
/*Input Style Color*/
.input-field .loger {
    color: #fff;
}
/*Required Star*/
.first:after,.last:after,.country-select:after,.r-pass:after,.mail:after {
    content: " *";
    color: red;
    float: right;
    margin-top: 15px;
    margin-right: -20px;
}
/*Login/Signup*/
.input-identity {
    text-align: left;
    font-size: 16px;
    font-weight: bold;
    color: #5679dc;
    padding: 10px;
}
/*Terms Register Shift*/
.terms-info {
    margin-top: 10px;
    margin-bottom: 10px;
    color: #7d7d7d;
}
/*Terms Register Links*/
.terms-info a{
    text-decoration: none;
    color: #fff;
}
/*Terms Register Branding Text*/
.terms-info b {
    color: #5f84f1;
}
/*Terms Register Text*/
.ter-reg {
    color: #378435;
}
/*Help Column Shift*/
.help-column {
    text-align: left;
}
/*Help Title Text*/
.help-column strong {
    color: #ffffff;
}
/*Help Title Padding Text*/
.help-column p {
    padding-top: 10px;
}
/*Help Global Text*/
.help-column li {
    color: #9b9fa0;
}
/*Help Link Text*/
.help-column a {
    color: #5679dc;
}
/*Help Required Text*/
.help-star {
    color: #ff0000;
    display: contents;
}
/*Footer Shift*/
.login-footer {
    margin-top: 10px;
    color: #fff;
}
/*Footer Links*/
.login-footer div a{
    text-decoration: none;
    color: #fff;
}
/*Footer Bold Spaces*/
.login-footer div b {
    color: #5679dc;
}
/*Footer Correction*/
.login-footer div a, .login-footer div b, .login-footer div p {
    display: contents;
}
/*--------------------------------------------------->
SLIDER DATA
----------------------------------------------------->
*/
/*Slider Position*/
.login-selection {
  position: relative;
  overflow: hidden;
}
/*Slider*/
.login-selection .slide {
  white-space: nowrap;
  font-size: 0;
  transition: 0.8s;
}
/*Slide Columns*/
.login-selection .slide > * {
    font-size: 1rem;
    display: inline-block;
    white-space: normal;
    vertical-align: top;
    width: 100%;
    background: none 50% no-repeat;
    background-size: cover;
    margin-top: 10px;
}
/*Slider Buttons*/
.selector-login,.selector-register,.selector-recover {
    background-color: #063b51;
    border-radius: 3px;
    border: 1px solid #000000;
    display: inline-block;
    cursor: pointer;
    color: #ffffff;
    font-family: Arial;
    font-size: 15px;
    padding: 5px 20px;
    text-decoration: none;
}
/*Slider Buttons Hover*/
.selector-login:hover,.selector-register:hover,.selector-recover:hover {
    background-color: #313131;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}
/*Slider Buttons Active*/
.selector-login:active,.selector-register:active,.selector-recover:active {
	position:relative;
	top:1px;
}
/*Submit Button Shift*/
.log-sub {
    margin-top: 5px;
}
/*Submit Button Settings*/
.log-sub input {
    width: 100%;
    border-radius: 3px;
    border: 1px solid #000000;
    display: inline-block;
    cursor: pointer;
    color: #ffffff;
    font-family: Arial;
    font-size: 15px;
    text-decoration: none;
    padding: 5px 5px 5px 5px;
}
/*Submit Button Settings Active*/
.log-sub input:active {
	position:relative;
	top:1px;
}
/*Submit Button Blue*/
.blu-b input {
    background-color: #196c98;
}
/*Submit Button Green*/
.reg-b input {
    background-color: #025200;
}
/*Submit Button Red*/
.red-b input{
    background-color: #5f0606;
}
/*Slider Buttons Hover*/
.log-sub input:hover {
    background-color: #313131;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}
/*Slider Button Shift*/
.bsd {
    margin-top: 10px;
}
/*Slider Animation*/
#login:target ~ .slide {transform: translateX(   0%); -webkit-transform: translateX(   0%);}
#register:target ~ .slide {transform: translateX(-100%); -webkit-transform: translateX(-100%);}
#recover:target ~ .slide {transform: translateX(-200%); -webkit-transform: translateX(-200%);}
#help:target ~ .slide {transform: translateX(-300%); -webkit-transform: translateX(-300%);}
/*--------------------------------------------------->
RESPONSIVE DATA
----------------------------------------------------->
*/
/*Media_Width*/
@media screen and (max-width: 580px) {
.column {
    width: 100%;
    height: 100%;
}
}
@media screen and (max-width: 350px) {
.first:before,.last:before,.mail:before,.pass:before,.user:before{
	display:none;
}
.input-field {
    padding-left: 5px;
    padding-right: 5px;
}
.sld-selector{
    padding-left: 5px;
    padding-right: 5px;
}
.sld-selector a{
	width:100%;
}
.first:after, .last:after, .country-select:after, .r-pass:after, .mail:after {
    content: " *";
    color: red;
    float: right;
    margin-top: 15px;
    margin-right: -14px;
}
}
/*--------------------------------------------------->
ANIMATION DATA
----------------------------------------------------->
*/
/*Bounce Effect*/
.branding-logo,.columns{
	animation-name: bounce;
	-webkit-animation-name: bounce;	animation-duration: 1.0s;
	-webkit-animation-duration: 1.0s;animation-timing-function: ease;
	-webkit-animation-timing-function: ease;
	transform-origin: 50% 100%;
	-ms-transform-origin: 50% 100%;
	-webkit-transform-origin: 50% 100%;
}
@keyframes bounce {0% {
	transform: translateY(0%) scaleY(0.6);}60%{
	transform: translateY(-20%) scaleY(1.1);}70%{
		transform: translateY(0%) scaleY(0.95) scaleX(1.05);}80%{
			transform: translateY(0%) scaleY(1.05) scaleX(1);}	90%{
				transform: translateY(0%) scaleY(0.95) scaleX(1);}100%{
					transform: translateY(0%) scaleY(1) scaleX(1);
					}
}
@-webkit-keyframes bounce {0% {
	-webkit-transform: translateY(0%) scaleY(0.6);}60%{
		-webkit-transform: translateY(-100%) scaleY(1.1);}70%{
			-webkit-transform: translateY(0%) scaleY(0.95) scaleX(1.05);}80%{
				-webkit-transform: translateY(0%) scaleY(1.05) scaleX(1);}	90%{
					-webkit-transform: translateY(0%) scaleY(0.95) scaleX(1);}100%{
						-webkit-transform: translateY(0%) scaleY(1) scaleX(1);
						}
}
/*PullDown Effect*/
.sld-selector a,.log-sub input,.loger{
	animation-name: pullDown;
	-webkit-animation-name: pullDown;
	animation-duration: 1.1s;
	-webkit-animation-duration: 1.1s;
	animation-timing-function: ease-out;
	-webkit-animation-timing-function: ease-out;
	transform-origin: 50% 0%;
	-ms-transform-origin: 50% 0%;
	-webkit-transform-origin: 50% 0%;
	outline: none;
	margin-bottom: 20px;
}
@keyframes pullDown {
0% {transform: scaleY(0.1);}40% {
	transform: scaleY(1.02);}60% {
		transform: scaleY(0.98);}80% {
			transform: scaleY(1.01);}100% {
				transform: scaleY(0.98);}80% {
					transform: scaleY(1.01);}100% {
						transform: scaleY(1);
						}
}
@-webkit-keyframes pullDown {0% {
	-webkit-transform: scaleY(0.1);}40% {
		-webkit-transform: scaleY(1.02);}60% {
			-webkit-transform: scaleY(0.98);}80% {
				-webkit-transform: scaleY(1.01);}100% {
					-webkit-transform: scaleY(0.98);}80% {
						-webkit-transform: scaleY(1.01);}100% {
							-webkit-transform: scaleY(1);
							}
}
/*StretchRight Start*/
.ani::before, .input-identity{
	animation-name: stretchRight;
	-webkit-animation-name: stretchRight;
	animation-duration: 1.5s;
	-webkit-animation-duration: 1.5s;
	animation-timing-function: ease-out;
	-webkit-animation-timing-function: ease-out;
	transform-origin: 0% 0%;
	-ms-transform-origin: 0% 0%;
	-webkit-transform-origin: 0% 0%;
}
@keyframes stretchRight {0% {
	transform: scaleX(0.3);}40% {
		transform: scaleX(1.02);}60% {
			transform: scaleX(0.98);}80% {
				transform: scaleX(1.01);}100% {
					transform: scaleX(0.98);}80% {
						transform: scaleX(1.01);}100% {
							transform: scaleX(1);
							}
}
@-webkit-keyframes stretchRight {0% {
	-webkit-transform: scaleX(0.3);}40% {
		-webkit-transform: scaleX(1.02);}60% {
			-webkit-transform: scaleX(0.98);}80% {
				-webkit-transform: scaleX(1.01);}100% {
					-webkit-transform: scaleX(0.98);}80% {
						-webkit-transform: scaleX(1.01);}100% {
							-webkit-transform: scaleX(1);
							}
}
</style>
	<div class="middle">
		<div class="column">
<!--Logo & Site Title-->
			<a class="branding-logo logo"></a>
			<p class="branding-title">Website Branding</p>
<!--Slider Start-->
			<div class="login-selection">
				<p id="login"></p> 
				<p id="register"></p>
				<p id="recover"></p>
				<p id="help"></p>
				<div class="slide">
<!--Login Contents Start-->	
					<div class="scroll-hidden">
						<p class="input-identity">Login</p>
					<div class="input-field">
						<form action="/action_page.php">
							<p class="ani user"><input type="text" class="loger username" placeholder="Username or Email Address" id="uname" name="uname" value="" autofocus="" autocomplete="off"></p>
							<p class="ani pass"><input type="text" class="loger password" placeholder="Password" id="pname" name="pname" value="" autofocus="" autocomplete="off"></p>
							<p class="ani two-step"><input type="text" class="loger two-factor" placeholder="Two-Factor Authentication" id="tfname" name="tfname" value="" autofocus="" autocomplete="off"></p>
							<p class="blu-b log-sub"><input type="submit" value="Login?"></p>
						</form>
					</div>	
					</div>
<!--Login Contents End-->

<!--Register Contents Start-->
					<div class="scroll-hidden">
						<p class="input-identity">Register</p>
						
					<div class="input-field">
						<form action="/action_page.php">
							<p class="ani first"><input type="text" class="loger first-name" placeholder="First Name" id="fname" name="fname" value="" autofocus="" autocomplete="off"></p>
							<p class="ani last"><input type="text" class="loger last-name" placeholder="Last Name" id="lname" name="lname" value="" autofocus="" autocomplete="off"></p>
							<p class="ani mail"><input type="text" class="loger email" placeholder="Email Address" id="ename" name="ename" value="" autofocus="" autocomplete="off"></p>
							<p class="ani r-pass"><input type="text" class="loger password" placeholder="Password (6 or more characters)" id="rpname" name="rpname" value="" autofocus="" autocomplete="off"></p>
							<p class="ani r-pass"><input type="text" class="loger password" placeholder="Confirm Password" id="rpcname" name="rpcname" value="" autofocus="" autocomplete="off"></p>
							<p class="ani phone"><input type="text" class="loger phone-number" placeholder="Phone Number" id="pnname" name="pnname" value="" autofocus="" autocomplete="off"></p>
							<div class="country-select">		
									<select class="country" name="country" class="form-control" placeholder="Country">
									<option value="">Select Your Country</option>
									<option value="Afghanistan">Afghanistan</option>
									<option value="Åland Islands">Åland Islands</option>
									<option value="Albania">Albania</option>
									<option value="Algeria">Algeria</option>
									<option value="American Samoa">American Samoa</option>
									<option value="Andorra">Andorra</option>
									<option value="Angola">Angola</option>
									<option value="Anguilla">Anguilla</option>
									<option value="Antarctica">Antarctica</option>
									<option value="Antigua and Barbuda">Antigua and Barbuda</option>
									<option value="Argentina">Argentina</option>
									<option value="Armenia">Armenia</option>
									<option value="Aruba">Aruba</option>
									<option value="Australia">Australia</option>
									<option value="Austria">Austria</option>
									<option value="Azerbaijan">Azerbaijan</option>
									<option value="Bahamas">Bahamas</option>
									<option value="Bahrain">Bahrain</option>
									<option value="Bangladesh">Bangladesh</option>
									<option value="Barbados">Barbados</option>
									<option value="Belarus">Belarus</option>
									<option value="Belgium">Belgium</option>
									<option value="Belize">Belize</option>
									<option value="Benin">Benin</option>
									<option value="Bermuda">Bermuda</option>
									<option value="Bhutan">Bhutan</option>
									<option value="Bolivia">Bolivia</option>
									<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
									<option value="Botswana">Botswana</option>
									<option value="Bouvet Island">Bouvet Island</option>
									<option value="Brazil">Brazil</option>
									<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
									<option value="Brunei Darussalam">Brunei Darussalam</option>
									<option value="Bulgaria">Bulgaria</option>
									<option value="Burkina Faso">Burkina Faso</option>
									<option value="Burundi">Burundi</option>
									<option value="Cambodia">Cambodia</option>
									<option value="Cameroon">Cameroon</option>
									<option value="Canada">Canada</option>
									<option value="Cape Verde">Cape Verde</option>
									<option value="Cayman Islands">Cayman Islands</option>
									<option value="Central African Republic">Central African Republic</option>
									<option value="Chad">Chad</option>
									<option value="Chile">Chile</option>
									<option value="China">China</option>
									<option value="Christmas Island">Christmas Island</option>
									<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
									<option value="Colombia">Colombia</option>
									<option value="Comoros">Comoros</option>
									<option value="Congo">Congo</option>
									<option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
									<option value="Cook Islands">Cook Islands</option>
									<option value="Costa Rica">Costa Rica</option>
									<option value="Cote D'ivoire">Cote D'ivoire</option>
									<option value="Croatia">Croatia</option>
									<option value="Cuba">Cuba</option>
									<option value="Cyprus">Cyprus</option>
									<option value="Czech Republic">Czech Republic</option>
									<option value="Denmark">Denmark</option>
									<option value="Djibouti">Djibouti</option>
									<option value="Dominica">Dominica</option>
									<option value="Dominican Republic">Dominican Republic</option>
									<option value="Ecuador">Ecuador</option>
									<option value="Egypt">Egypt</option>
									<option value="El Salvador">El Salvador</option>
									<option value="Equatorial Guinea">Equatorial Guinea</option>
									<option value="Eritrea">Eritrea</option>
									<option value="Estonia">Estonia</option>
									<option value="Ethiopia">Ethiopia</option>
									<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
									<option value="Faroe Islands">Faroe Islands</option>
									<option value="Fiji">Fiji</option>
									<option value="Finland">Finland</option>
									<option value="France">France</option>
									<option value="French Guiana">French Guiana</option>
									<option value="French Polynesia">French Polynesia</option>
									<option value="French Southern Territories">French Southern Territories</option>
									<option value="Gabon">Gabon</option>
									<option value="Gambia">Gambia</option>
									<option value="Georgia">Georgia</option>
									<option value="Germany">Germany</option>
									<option value="Ghana">Ghana</option>
									<option value="Gibraltar">Gibraltar</option>
									<option value="Greece">Greece</option>
									<option value="Greenland">Greenland</option>
									<option value="Grenada">Grenada</option>
									<option value="Guadeloupe">Guadeloupe</option>
									<option value="Guam">Guam</option>
									<option value="Guatemala">Guatemala</option>
									<option value="Guernsey">Guernsey</option>
									<option value="Guinea">Guinea</option>
									<option value="Guinea-bissau">Guinea-bissau</option>
									<option value="Guyana">Guyana</option>
									<option value="Haiti">Haiti</option>
									<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
									<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
									<option value="Honduras">Honduras</option>
									<option value="Hong Kong">Hong Kong</option>
									<option value="Hungary">Hungary</option>
									<option value="Iceland">Iceland</option>
									<option value="India">India</option>
									<option value="Indonesia">Indonesia</option>
									<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
									<option value="Iraq">Iraq</option>
									<option value="Ireland">Ireland</option>
									<option value="Isle of Man">Isle of Man</option>
									<option value="Israel">Israel</option>
									<option value="Italy">Italy</option>
									<option value="Jamaica">Jamaica</option>
									<option value="Japan">Japan</option>
									<option value="Jersey">Jersey</option>
									<option value="Jordan">Jordan</option>
									<option value="Kazakhstan">Kazakhstan</option>
									<option value="Kenya">Kenya</option>
									<option value="Kiribati">Kiribati</option>
									<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
									<option value="Korea, Republic of">Korea, Republic of</option>
									<option value="Kuwait">Kuwait</option>
									<option value="Kyrgyzstan">Kyrgyzstan</option>
									<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
									<option value="Latvia">Latvia</option>
									<option value="Lebanon">Lebanon</option>
									<option value="Lesotho">Lesotho</option>
									<option value="Liberia">Liberia</option>
									<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
									<option value="Liechtenstein">Liechtenstein</option>
									<option value="Lithuania">Lithuania</option>
									<option value="Luxembourg">Luxembourg</option>
									<option value="Macao">Macao</option>
									<option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
									<option value="Madagascar">Madagascar</option>
									<option value="Malawi">Malawi</option>
									<option value="Malaysia">Malaysia</option>
									<option value="Maldives">Maldives</option>
									<option value="Mali">Mali</option>
									<option value="Malta">Malta</option>
									<option value="Marshall Islands">Marshall Islands</option>
									<option value="Martinique">Martinique</option>
									<option value="Mauritania">Mauritania</option>
									<option value="Mauritius">Mauritius</option>
									<option value="Mayotte">Mayotte</option>
									<option value="Mexico">Mexico</option>
									<option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
									<option value="Moldova, Republic of">Moldova, Republic of</option>
									<option value="Monaco">Monaco</option>
									<option value="Mongolia">Mongolia</option>
									<option value="Montenegro">Montenegro</option>
									<option value="Montserrat">Montserrat</option>
									<option value="Morocco">Morocco</option>
									<option value="Mozambique">Mozambique</option>
									<option value="Myanmar">Myanmar</option>
									<option value="Namibia">Namibia</option>
									<option value="Nauru">Nauru</option>
									<option value="Nepal">Nepal</option>
									<option value="Netherlands">Netherlands</option>
									<option value="Netherlands Antilles">Netherlands Antilles</option>
									<option value="New Caledonia">New Caledonia</option>
									<option value="New Zealand">New Zealand</option>
									<option value="Nicaragua">Nicaragua</option>
									<option value="Niger">Niger</option>
									<option value="Nigeria">Nigeria</option>
									<option value="Niue">Niue</option>
									<option value="Norfolk Island">Norfolk Island</option>
									<option value="Northern Mariana Islands">Northern Mariana Islands</option>
									<option value="Norway">Norway</option>
									<option value="Oman">Oman</option>
									<option value="Pakistan">Pakistan</option>
									<option value="Palau">Palau</option>
									<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
									<option value="Panama">Panama</option>
									<option value="Papua New Guinea">Papua New Guinea</option>
									<option value="Paraguay">Paraguay</option>
									<option value="Peru">Peru</option>
									<option value="Philippines">Philippines</option>
									<option value="Pitcairn">Pitcairn</option>
									<option value="Poland">Poland</option>
									<option value="Portugal">Portugal</option>
									<option value="Puerto Rico">Puerto Rico</option>
									<option value="Qatar">Qatar</option>
									<option value="Reunion">Reunion</option>
									<option value="Romania">Romania</option>
									<option value="Russian Federation">Russian Federation</option>
									<option value="Rwanda">Rwanda</option>
									<option value="Saint Helena">Saint Helena</option>
									<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
									<option value="Saint Lucia">Saint Lucia</option>
									<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
									<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
									<option value="Samoa">Samoa</option>
									<option value="San Marino">San Marino</option>
									<option value="Sao Tome and Principe">Sao Tome and Principe</option>
									<option value="Saudi Arabia">Saudi Arabia</option>
									<option value="Senegal">Senegal</option>
									<option value="Serbia">Serbia</option>
									<option value="Seychelles">Seychelles</option>
									<option value="Sierra Leone">Sierra Leone</option>
									<option value="Singapore">Singapore</option>
									<option value="Slovakia">Slovakia</option>
									<option value="Slovenia">Slovenia</option>
									<option value="Solomon Islands">Solomon Islands</option>
									<option value="Somalia">Somalia</option>
									<option value="South Africa">South Africa</option>
									<option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
									<option value="Spain">Spain</option>
									<option value="Sri Lanka">Sri Lanka</option>
									<option value="Sudan">Sudan</option>
									<option value="Suriname">Suriname</option>
									<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
									<option value="Swaziland">Swaziland</option>
									<option value="Sweden">Sweden</option>
									<option value="Switzerland">Switzerland</option>
									<option value="Syrian Arab Republic">Syrian Arab Republic</option>
									<option value="Taiwan, Province of China">Taiwan, Province of China</option>
									<option value="Tajikistan">Tajikistan</option>
									<option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
									<option value="Thailand">Thailand</option>
									<option value="Timor-leste">Timor-leste</option>
									<option value="Togo">Togo</option>
									<option value="Tokelau">Tokelau</option>
									<option value="Tonga">Tonga</option>
									<option value="Trinidad and Tobago">Trinidad and Tobago</option>
									<option value="Tunisia">Tunisia</option>
									<option value="Turkey">Turkey</option>
									<option value="Turkmenistan">Turkmenistan</option>
									<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
									<option value="Tuvalu">Tuvalu</option>
									<option value="Uganda">Uganda</option>
									<option value="Ukraine">Ukraine</option>
									<option value="United Arab Emirates">United Arab Emirates</option>
									<option value="United Kingdom">United Kingdom</option>
									<option value="United States">United States</option>
									<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
									<option value="Uruguay">Uruguay</option>
									<option value="Uzbekistan">Uzbekistan</option>
									<option value="Vanuatu">Vanuatu</option>
									<option value="Venezuela">Venezuela</option>
									<option value="Viet Nam">Viet Nam</option>
									<option value="Virgin Islands, British">Virgin Islands, British</option>
									<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
									<option value="Wallis and Futuna">Wallis and Futuna</option>
									<option value="Western Sahara">Western Sahara</option>
									<option value="Yemen">Yemen</option>
									<option value="Zambia">Zambia</option>
									<option value="Zimbabwe">Zimbabwe</option>
								</select>							
							</div>							

							<div class="terms-info">
								<p>By clicking
								<strong class="ter-reg">Register</strong>, you agree to "
								<strong><b>Website Branding</b></strong>"</br> 
								<a href="https://example.com/">
								<strong>User Agreement</strong></a>, 
								<a href="https://example.com/">
								<strong>Privacy Policy</strong></a>, and 
								<a href="https://example.com/">
								<strong>Cookie Policy</strong>.
								</a>
								</p>
							</div>			
							<p class="reg-b log-sub"><input type="submit" value="Register?"></p>
						</form>
					</div>
					</div>
<!--Register Contents End-->

<!--Recover Contents Start-->
					<div class="scroll-hidden">
						<p class="input-identity">Recover</p>
					<div class="input-field">
						<form action="/action_page.php">
							<p class="ani user"><input type="text" class="loger username" placeholder="Username or Email Address" id="urname" name="urname" value="" autofocus="" autocomplete="off"></p>
							<p class="ani phone"><input type="text" class="loger phone-number" placeholder="Phone Number" id="pnrname" name="pnrname" value="" autofocus="" autocomplete="off"></p> 
							<p class="ani red-b log-sub"><input type="submit" value="Recover?"></p>
						</form>
					</div>
					</div>
<!--Recover Contents End-->

<!--Help Contents Start-->
					<div class="scroll-hidden">
						<p class="input-identity">Help</p>
					<div class="input-field-help">
						<div class="help-column">
							<p><strong>Login</strong></p>
								<ol>
									<li>Make sure you have entered your email/user name &amp; password correctly.</li>
								</ol>
							<p><strong>Create Account</strong></p>
								<ol>
									<li>Make sure you have entered all the information in the correct 
									<p class="help-star">*</p> required input fields.</li>
									<li>Do not use weak passwords.</li>
								</ol>
							<p><strong>Never got an email?</strong></p>
								<ol>
									<li>Make sure you typed your email incorrectly.</li>
									<li>Wait a little longer.</li>
									<li>Check spam to verify email.</li>
								</ol>
							<p><strong>Need More Help?</strong></p>
								<ul>
									<li>You can contact me here: <a href="https://destructiveburn.com/contact">Contact</a></li>
								</ul>
						</div>
					</div>
					</div>
<!--Help Contents End-->
				</div>

<!--Slider Buttons-->
				<div class="sld-selector bsd">
					<a href="#login" class="selector-login">Login</a>
					<a href="#register" class="selector-register">Register</a>
					<a href="#recover" class="selector-recover">Recover</a>
				</div>
			</div>
<!--Slider End-->
		</div>
<!--Bottom Column Copyright Footer-->
			<div class="login-footer">
<!--Footer Text & Slide Selector for Help-->
				<div class="sld-selector">
					<a href="https://destructiveburn.com/">DestructiveBurn.com</a>
					<b>|</b>
					<p class="cright">2021</p>
					<b>|</b>
					<a href="#help" class="selector-help">Help?</a>
				</div>
			</div>
	</div>