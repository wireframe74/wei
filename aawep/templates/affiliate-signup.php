<?php 
/* Template Name: AFFILIATE SIGNUP */
get_header(); ?>

		<main role="main">
		<!-- section -->
		<section>
		
		
		<div class="container-fluid">
		
			<div class="container content">
			<div class="row">
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>				  
			<h2><?php wp_title('' ); ?></h2>
 				<?php the_content(); ?>
				<?php endwhile; ?>
			<?php endif; ?>	
			</div><!--/row-->
			</div><!--/container-->
		 </div><!--/container-fluid-->
		
		
		  <div class="container-fluid contact-form-wrap">
		
        
        <div class="container">
		
                       
                        
                        
                   <div class="col-md-12">









                   <form action="http://weddinginstitute.postaffiliatepro.com/affiliates/signup.php" method="post"><!-- signup_fields -->
<div class="SignupForm gform_wrapper">
    <fieldset>
        <h4>Personal Information</h4>
     <li>  <label><strong>Email Address (Username)</strong><input type="text" name="username" required></label>   </li>    
      <li>  <label><strong>First Name</strong><input type="text" name="firstname" required></label>    </li>   
      <li>  <label><strong>Last Name</strong><input type="text" name="lastname" required></label>  </li>     
      <li>  <label><strong>Referral ID</strong><input type="text" name="refid"></label>  </li>     
       <input type="hidden" name="parentuserid" id="parentuserid" value="" />    
       </fieldset>
    
    <fieldset>
        <h4>Additional Information</h4>
      <li>  <label><strong>Web Url</strong><input type="text" name="data1" required></label>  </li>       
      <li>  <label><strong>Company name</strong><input type="text" name="data2" required></label>  </li>       
      <li>  <label><strong>Street</strong><input type="text" name="data3" required></label>    </li>     
      <li>  <label><strong>City</strong><input type="text" name="data4" required></label>   </li>      
      <li>  <label><strong>State</strong><input type="text" name="data5" required></label>    </li>     
    <li>    <label><strong>Country</strong><select name="data6" required><option value="AF">Afghanistan</option>
       <option value="AX">Aland Islands</option><option value="AL">Albania</option><option value="DZ">Algeria</option><option value="AS">American Samoa</option><option value="AD">Andorra</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="A1">Anonymous Proxy</option><option value="AQ">Antarctica</option><option value="AG">Antigua and Barbuda</option><option value="AR">Argentina</option><option value="AM">Armenia</option><option value="AW">Aruba</option><option value="AP">Asia/PacificRegion</option><option value="AU">Australia</option><option value="AT">Austria</option><option value="AZ">Azerbaijan</option><option value="BS">Bahamas</option><option value="BH">Bahrain</option><option value="BD">Bangladesh</option><option value="BB">Barbados</option><option value="BY">Belarus</option><option value="BE">Belgium</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BO">Bolivia</option><option value="BA">Bosnia and Herzegovina</option><option value="BW">Botswana</option><option value="BV">Bouvet Island</option><option value="BR">Brazil</option><option value="IO">British Indian Ocean Territory</option><option value="BN">Brunei Darussalam</option><option value="BG">Bulgaria</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="KH">Cambodia</option><option value="CM">Cameroon</option><option value="CA">Canada</option><option value="CV">Cape Verde</option><option value="KY">Cayman Islands</option><option value="CF">Central African Republic</option><option value="TD">Chad</option><option value="CL">Chile</option><option value="CN">China</option><option value="CX">Christmas Island</option><option value="CC">Cocos (Keeling) Islands</option><option value="CO">Colombia</option><option value="KM">Comoros</option><option value="CG">Congo</option><option value="CD">Congo, The Democratic Republic of the</option><option value="CK">Cook Islands</option><option value="CR">Costa Rica</option><option value="CI">Cote D'Ivoire</option><option value="HR">Croatia</option><option value="CU">Cuba</option><option value="CY">Cyprus</option><option value="CZ">Czech Republic</option><option value="DK">Denmark</option><option value="DJ">Djibouti</option><option value="DM">Dominica</option><option value="DO">Dominican Republic</option><option value="EC">Ecuador</option><option value="EG">Egypt</option><option value="SV">El Salvador</option><option value="GQ">Equatorial Guinea</option><option value="ER">Eritrea</option><option value="EE">Estonia</option><option value="ET">Ethiopia</option><option value="EU">Europe</option><option value="FK">Falkland Islands (Malvinas)</option><option value="FO">Faroe Islands</option><option value="FJ">Fiji</option><option value="FI">Finland</option><option value="FR">France</option><option value="FX">France, Metropolitan</option><option value="GF">French Guiana</option><option value="PF">French Polynesia</option><option value="TF">French Southern Territories</option><option value="GA">Gabon</option><option value="GM">Gambia</option><option value="GE">Georgia</option><option value="DE">Germany</option><option value="GH">Ghana</option><option value="GI">Gibraltar</option><option value="GR">Greece</option><option value="GL">Greenland</option><option value="GD">Grenada</option><option value="GP">Guadeloupe</option><option value="GU">Guam</option><option value="GT">Guatemala</option><option value="GG">Guernsey</option><option value="GN">Guinea</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="HT">Haiti</option><option value="HM">Heard Island and McDonald Islands</option><option value="VA">Holy See (Vatican City State)</option><option value="HN">Honduras</option><option value="HK">Hong Kong</option><option value="HU">Hungary</option><option value="IS">Iceland</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IR">Iran, Islamic Republic of</option><option value="IQ">Iraq</option><option value="IE">Ireland</option><option value="IM">Isle of Man</option><option value="IL">Israel</option><option value="IT">Italy</option><option value="JM">Jamaica</option><option value="JP">Japan</option><option value="JE">Jersey</option><option value="JO">Jordan</option><option value="KZ">Kazakstan</option><option value="KE">Kenya</option><option value="KI">Kiribati</option><option value="KP">Korea, Democratic People's Republic of</option><option value="KR">Korea, Republic of</option><option value="KW">Kuwait</option><option value="KG">Kyrgyzstan</option><option value="LA">Lao People's Democratic Republic</option><option value="LV">Latvia</option><option value="LB">Lebanon</option><option value="LS">Lesotho</option><option value="LR">Liberia</option><option value="LY">Libyan Arab Jamahiriya</option><option value="LI">Liechtenstein</option><option value="LT">Lithuania</option><option value="LU">Luxembourg</option><option value="MO">Macau</option><option value="MK">Macedonia</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MY">Malaysia</option><option value="MV">Maldives</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="MH">Marshall Islands</option><option value="MQ">Martinique</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Mexico</option><option value="FM">Micronesia, Federated States of</option><option value="MD">Moldova, Republic of</option><option value="MC">Monaco</option><option value="MN">Mongolia</option><option value="ME">Montenegro</option><option value="MS">Montserrat</option><option value="MA">Morocco</option><option value="MZ">Mozambique</option><option value="MM">Myanmar</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="AN">Netherlands Antilles</option><option value="NL">Netherlands</option><option value="NC">New Caledonia</option><option value="NZ">New Zealand</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NF">Norfolk Island</option><option value="MP">Northern Mariana Islands</option><option value="NO">Norway</option><option value="OM">Oman</option><option value="O1">Other</option><option value="PK">Pakistan</option><option value="PW">Palau</option><option value="PS">Palestinian Territory</option><option value="PA">Panama</option><option value="PG">Papua New Guinea</option><option value="PY">Paraguay</option><option value="PE">Peru</option><option value="PH">Philippines</option><option value="PN">Pitcairn Islands</option><option value="PL">Poland</option><option value="PT">Portugal</option><option value="PR">Puerto Rico</option><option value="QA">Qatar</option><option value="RE">Reunion</option><option value="RO">Romania</option><option value="RU">Russian Federation</option><option value="RW">Rwanda</option><option value="SH">Saint Helena</option><option value="KN">Saint Kitts and Nevis</option><option value="LC">Saint Lucia</option><option value="PM">Saint Pierre and Miquelon</option><option value="VC">Saint Vincent and the Grenadines</option><option value="WS">Samoa</option><option value="SM">San Marino</option><option value="ST">Sao Tome and Principe</option><option value="A2">Satellite Provider</option><option value="SA">Saudi Arabia</option><option value="SN">Senegal</option><option value="RS">Serbia</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SK">Slovakia</option><option value="SI">Slovenia</option><option value="SB">Solomon Islands</option><option value="SO">Somalia</option><option value="ZA">South Africa</option><option value="GS">South Georgia and the South Sandwich Islands</option><option value="ES">Spain</option><option value="LK">SriLanka</option><option value="SD">Sudan</option><option value="SR">Suriname</option><option value="SJ">Svalbardand Jan Mayen</option><option value="SZ">Swaziland</option><option value="SE">Sweden</option><option value="CH">Switzerland</option><option value="SY">Syrian Arab Republic</option><option value="TW">Taiwan</option><option value="TJ">Tajikistan</option><option value="TZ">Tanzania, United Republic of</option><option value="TH">Thailand</option><option value="TL">Timor-Leste</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad and Tobago</option><option value="TN">Tunisia</option><option value="TR">Turkey</option><option value="TM">Turkmenistan</option><option value="TC">Turks and Caicos Islands</option><option value="TV">Tuvalu</option><option value="UG">Uganda</option><option value="UA">Ukraine</option><option value="AE">United Arab Emirates</option><option value="GB">United Kingdom</option><option value="UM">United States Minor Outlying Islands</option><option value="US" selected="selected">United States</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VE">Venezuela</option><option value="VN">Vietnam</option><option value="VG">Virgin Islands, British</option><option value="VI">Virgin Islands, U.S.</option><option value="WF">Wallis and Futuna</option><option value="EH">Western Sahara</option><option value="YE">Yemen</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option>
       </select></label>       </li>  
       <li>  <label>Zipcode<input type="text" name="data7" required>
       </label>       </li>  
       <li>  <label>Phone<input type="text" name="data8" required></label>      </li>    
       <li>  <label>Fax<input type="text" name="data9"></label>  </li>         
       <div id="data10"></div>        
       <div id="data11"></div>        
       <div id="data12"></div>        
       <div id="data13"></div>        
       <div id="data14"></div>        
       <div id="data15"></div>        
       <div id="data16"></div>        
       <div id="data17"></div>        
       <div id="data18"></div>        
       <div id="data19"></div>        
       <div id="data20"></div>        
       <div id="data21"></div>        
       <div id="data22"></div>        
       <div id="data23"></div>        
       <div id="data24"></div>        
       <div id="data25"></div>        
       <div id="notificationemail"></div>        
       <div id="recaptcha"></div>    
       </fieldset>
    
    <div id="payoutMethods"></div>   
    <li>  <label>Terms & conditions</label>
    <textarea>To participate in the Wedding and Event Institute (WEI) Affiliate Program, hereafter known as WEI, you must agree to the following: 
This Affiliate Agreement ("Agreement") contains the complete terms and conditions between us, WEI, and you, regarding your application to participate as an affiliate of WEI ("Affiliate"), and the establishment of links from your website to our websites, weddingandeventinstitute.com.
BY SUBMITTING AN APPLICATION TO JOIN OR BY PARTICIPATING IN THE WEI AFFILIATE PROGRAM, YOU ARE CONFIRMING THAT YOU HAVE READ THIS AGREEMENT AND AGREE TO BE BOUND BY ITS TERMS AND CONDITIONS. 
WEI's Affiliate Agreement Definitions 
"We", "Our", "Us", - "WEI", (collectively, " WEI ") 
"You", "Your" and "Affiliate(s)" - the business, individual or entity applying for participation in the WEI Affiliate Program, or that displays Our products, services and/or promotions on its website and/or through offline representation through the affiliate tracking code in exchange for receiving remuneration from WEI for sales resulting from such display. 
"Affiliate Site" - the Affiliate's Internet site which displays WEI Products and Services and/or promotions. 
" WEI Products and Services" - web hosting and related products and services that are available for purchase through weddingandeventinstitute.com. 
"Commission Fees" or "Commissions" - Under the Affiliate Program, subject to the terms hereof, you will be paid a Commission Fee for each Qualified Purchase by a Referred Customer that you refer to WEI under and in accordance with this Agreement. 
"Qualified Purchase" - a sale of WEI Products and Services by WEI, with a term of 12 months, to a Referred Customer which meets the criteria set forth in Section 5 hereof. 
"Referred Customer" - each new and unique customer referred from Affiliate through a Link (defined in Section 2 below) provided by or approved by Us, which meets the criteria set forth in Section 5 hereof. 
"Registration Form" - any and all order forms, Registration Forms, or other signup or acceptance form (whether online, paper, fax, or otherwise) submitted by You or, as applicable, the Referred Customer to make a Qualified Purchase. 
Requirements: 
• Enrollment in the Affiliate Network 
To begin the enrollment process, you must submit a completed Affiliate Program Signup Form. The Signup Form can be found at http://weddinginstitute.postaffiliatepro.com/affiliates/signup.php#SignupForm. 
We will evaluate Your application in good faith and will notify You of Your acceptance or rejection in a timely manner. We may reject Your application if We determine (in Our sole discretion) that Your site is unsuitable for Our Affiliate Program for any reason, including, but not limited to, inclusion of content that is, in Our opinion, unlawful or otherwise does not meet our criteria. 
If We reject Your application, for any reason, You may not reapply to the WEI Affiliate Program utilizing the same domain name/URL if that domain name/URL has already been rejected nor may you reapply using a different domain/URL name then add the previously rejected domain name/URL. WEI, in its sole discretion, reserves the right to notify or to not notify any prospective affiliate of their rejection or removal from the WEI Affiliate Program at any time. 
• Promotion of Our Affiliate Relationship 
If You qualify and agree to participate as an Affiliate, We will make available to You a variety of graphic and textual links (each of these links sometimes being referred to herein as "Links" or, individually, as a "Link"), which are subject to the terms and conditions hereof. The Links will serve to identify Your site as a member of the WEI Affiliate Program and will establish a Link from Your site or e-mail to Ours. The Links may connect to any area of Our site (although commissions will only be issued on Qualified Purchases). In utilizing the Links, You agree that You will cooperate fully with Us in order to establish and maintain such Links. 
You also agree that You will display on Your site only those graphic or textual images (indicating a Link) provided by Us or text messages expressly approved in advanced in writing by WEI. All Affiliate Sites shall display such graphic and/or textual images prominently in relevant sections of their site. Furthermore, you agree not to use cookie stuffing techniques that set the affiliate tracking cookie without the Referred Customer's knowledge. (example: iframe). Any information with respect to Us that is going to be displayed on Your site must be provided by Us and expressly approved by Us in writing in advance of any display. 
EXCEPT AS PERMITTED ABOVE OR IN SECTION 13 BELOW, YOU SHALL NOT AND ARE NOT AUTHORIZED TO (i) USE THE WEI LOGO, NAME OR ANY OF OUR OTHER INTELLECTUAL PROPERTY (OR ANY VARIATIONS OR MISSPELLINGS THEREOF OR OTHER TERM OR TERMS CONFUSINGLY SIMILAR TO ANY OF THE FOREGOING) (ALL OF THE FOREGOING, INCLUDING WITHOUT LIMITATION, THE "LINKS" AND THE "LICENSED MATERIALS" (DEFINED BELOW), ARE REFERRED TO HEREIN AS "OUR IP"), WITHOUT OUR EXPRESS PRIOR WRITTEN PERMISSION; (ii) USE OUR IP IN A DOMAIN OR WEBSITE NAME, IN ANY BIDS FOR KEYWORDS OR GOOGLE ADWORDS (OR SIMILAR PROGRAMS AT OTHER SEARCH ENGINES), IN ANY SEARCH ENGINE ADVERTISING (PAID OR OTHERWISE), IN ANY METATAGS, GOOGLE ADWORDS (OR SIMILAR PROGRAMS AT OTHER SEARCH ENGINES), KEY WORDS, ADVERTISING, SEARCH TERMS, CODE, OR OTHERWISE; (iii) CAUSE OR CREATE OR ACT IN ANY WAY THAT CAUSES OR CREATES OR COULD CAUSE OR CREATE ANY "INITIAL INTEREST CONFUSION" OVER THE USE OF OUR IP ON THE INTERNET OR IN ANY SEARCH ENGINE ADVERTISING. YOUR USE OF OUR IP IN ANY MANNER, OTHER THAN AS EXPRESSLY PERMITTED HEREUNDER (IN ADDITION TO BEING A BREACH OF THIS AGREEMENT) SHALL CONTITUTE UNLAWFUL INFRINGEMENT OF OUR TRADEMARKS, COPYRIGHTS OR OTHER INTELLECTUAL PROPERTY RIGHTS, AND MAY SUBJECT YOU TO CLAIMS FOR DAMAGES (INCLUDING WITHOUT LIMITATION, TREBLE DAMAGES FOR KNOWING OR WILFUL INFRINGEMENT), AND THE OBLIGATION TO PAY OUR LEGAL FEES AND COSTS IN CONNECTION WITH ANY ACTION OR PROCEEDING IN WHICH WE SEEK TO ENFORCE OUR RIGHTS UNDER THIS AGREEMENT OR WITH REGARD TO ANY OF OUR INTELLECTUAL PROPERTY RIGHTS. 
All Links may be modified and/or expanded from time to time throughout the term of this Agreement pursuant to the mutual agreement of the parties hereto. You are not allowed to post any refunds, credits or discounts, or other content concerning WEI, unless We have given You prior written permission in each instance. Affiliates may only use coupons and discounts that are provided exclusively through the Affiliate Program using banners and links. Each Link connecting users of Your site to the pertinent area of Our site will in no way alter the look, feel, or functionality of Our site. Any violations of the terms surrounding links, coupons, refunds, credits or discounts shall constitute a material breach of this Agreement, and may result in Your termination from the program or withholding of Commissions. 
• FTC Endorsement Compliance
It is the intent of WEI to treat our customers fairly and to comply fully with all Federal Trade Commissions regulations related to advertising. As such, we require our affiliates to comply with these regulations. This includes, but is not limited to, Federal Trade Commission 16 CFR Part 255: Guides Concerning the Use of Endorsements and Testimonials in Advertising, which requires, among other criteria, that material connections between advertisers and endorsers be disclosed. This means that directories, review/rating sites, blogs and other websites, email or collateral that purport to provide an endorsement or assessment of an advertiser (in this case WEI) must prominently disclose the fact financial or in-kind compensation is provided from the advertiser.
WEI reserves the right to withhold commission fees and cancel the affiliate relationship with you should we determine, at our discretion, that you are not in compliance with the previously mentioned guide or other FTC regulations/guides we deem relevant.
• Order Processing 
We will process orders placed by Referred Customer who follow the Links from your website to fatcow.com. We reserve the right, in our sole discretion, to reject orders that do not comply with certain requirements that we may establish from time to time. All aspects of order processing and fulfillment, including WEI service, cancellation, processing, refunds and payment processing will be our responsibility. We will track the Qualified Purchases generated by your website and will make this information available to you through our website. To permit accurate tracking, reporting, and Commission accrual, you must ensure that the Links between your website and our website are properly formatted. 
• Commission Determination 
Under the Affiliate Program, you will be paid a Commission Fee for each Qualified Purchase by a Referred Customer that you refer to WEI under and in accordance with the terms of this Agreement. Each Referred Customer and each Qualified Purchase must meet the following criteria (the "Criteria"): 
o Each Referred Customer must be a new and unique visitor to WEI and must register by completing and submitting the Enrollment Form using a valid and unique account and billing information.
o Commission may not be paid for a Referred Customer that has transferred from any of our partners or subsidiaries.
o Each Referred Customer must make a Qualified Purchase, and provide a valid payment for the purchased WEI Products or Services. To generate a Commission Fee for you, each Referred Customer must be an active, qualified customer of WEI and must be up-to-date in all payments at the time the Commission Fees are processed and not have been subject to a refund, credit, cancellation, suspension or chargeback.
o Each Referred Customer must sign up in a manner, which in our sole judgment, definitively establishes that the Referred Customer was referred directly from you to WEI under this Agreement.
o Each Referred Customer must remain in compliance with our Terms of Service, Acceptable Use Policy and other policies that are active at the time the Commission Fees are processed.
o Commission Fees may not be paid for the Qualified Purchase if the Referred Customer has been offered or received coupons, refunds, credits or discounts from the Affiliate or if the Referred Customer has joined a business-opportunity program (as determined by WEI in its sole discretion) that is managed or participated in by the Affiliate, unless WEI has provided its prior written permission.
o If a Referred Customer has received a popup with a discounted offer, while leaving our site during their purchase, we will NOT pay commissions on purchase.
WEI reserves the right to withhold initial Commissions Fees for Affiliates who are new to the Affiliate program, or who have commissions that are potentially fraudulent as determined by WEI in its sole discretion, to determine the legitimacy and cancellation rates of Referred Customers. 
WEI reserves the right to suspend payment of Commission Fees at any time and indefinitely, if it suspects fraud or other improper activity or a potential breach of any of the terms in this Agreement by the Affiliate or a Referred Customer(s). WEI reserves the right to deduct from Affiliate's current and future Commission Fees any and all Commission Fees corresponding to any fraudulent, questionable, and cancelled WEI purchases. Where no subsequent Commission Fee is due and owing, WEI will send Affiliate a bill for the balance of such refunded purchase upon termination of the program or termination of the Referred Customer. 
WEI, in its sole discretion, reserves the right to withhold indefinitely any Commission Fee, and/or to reverse, deny or reject any Commission Fee, for: 
o Any account/sale which has not been in an approved status in good standing as an account of WEI for a period of at least thirty (30) days.
o All commissions generated for accounts that may be fraudulent, including but not limited to the use of software that generates real and fictitious information.
o If we deem orders to be fraudulent or see a pattern of potentially fraudulent activity, including, without limitation, where there are multiple accounts from the same customer, or referral of accounts which do not comply with this Agreement. We review account information (including site content) to assess referrals.
o Altering Our Links in any way.
o Referred Customers that have been offered or received coupons, refunds, credits or discounts from the Affiliate or for Referred Customers who have joined a business opportunity program that is managed or participated in by the Affiliate, unless WEI has provided written permission.
o Customers engaging in "Domain Speculation," which is determined by the identification of two (2) web hosting accounts with the same Referred Customer's name, email address, or other identifying characteristic as determined by WEI and/or the identification of two (2) or more web hosting accounts that have no content on their websites or have similar content, templates or formatting, as determined by WEI. 
o Affiliates whom we believe may be artificially submitting Referred Customers, engaging in the advertisement of business-opportunity sites (as determined by WEI in its sole discretion), using marketing practices that we deem to be unethical or likely to attract fraudulent signups and/or signups with a very low likelihood of renewal. 
WEI reserves the right to immediately cancel or withhold for later review any Commission Fee based on the foregoing or that otherwise fails to meet the Criteria. It is the responsibility of the Affiliate to monitor the payment, denial and withholding of Commission Fees; WEI is not obligated to actively notify Affiliates of the status of Commission Fees. If an Affiliate has a question about a Commission Fee that has been cancelled or withheld, that Affiliate has 30 days from the day the payment was due to contact WEI to discuss or reclaim the Commission Fee. Any changes to decisions about cancelled or withheld Commission Fees are strictly at WEI's discretion. 
Commissions for any Referred Customer who is associated with any WEI reseller, referral or other program may be removed from your payment. In other words, You may not receive double commissions or compensation. 
In the event that the Referred Customers that are referred to WEI by a specific Affiliate are determined to have an excessive cancellation rate (as determined by WEI in its sole discretion), WEI reserves the right to withhold or decline pending and future Commission Fees for the Affiliate. 
Any attempt by an Affiliate to manipulate, falsify or inflate Referred Customers, Qualifying Purchases or Commission Fees to intentionally defraud WEI or violation of any of the terms of this Agreement constitutes immediate grounds for WEI to terminate this Agreement and will result in forfeiture of any Commission Fees due to you. 
• Commission Fee Accrual and Payments 
Subject to the terms of this Agreement, we will pay a Commission Fee equal to the specified percentage amount set forth in the Commission Report in Your Affiliate Console on a Qualified Purchase by a Referred Customer which occurs during the month for which such Commission Fee is being calculated. 
Commission Fees will be processed approximately 15 to 30 days after the end of the month in which they accrued as set forth below. 
Commissions will accrue and only become payable once you (i) provide all relevant tax and address documentation pursuant to Section 8 below and (ii) reach a commission level of $50 (the "Commission Threshold") based on the commission rates stated of 7%, all as applied only to Qualified Purchases which occurred within three (3) months of the end of the calendar month in which the Qualified Purchases occurred. For example, if you provide sign-ups which result in Qualified Purchases that meet the Commission Threshold on January 10th, you must provide all relevant tax and address documentation by April 30th of the same year in order for Commission Fees to accrue and become payable. All Qualified Purchases eligible to result in Commissions under this Section 6 must remain active and in good standing pursuant to the terms of this Agreement in order to remain eligible for accrual. Once a Commission has accrued under this Section 6, the amount of such Commission shall be due and payable to you under the terms of Section 7. WEI reserves the right to change the Commission Threshold by amending this Agreement and will notify you for any such amendment pursuant to the terms of this Agreement. 
• Payment Forms/Types 
Commission Fees shall be paid based on the current information in Your Affiliate profile. Please notify us promptly of any change in your address by updating your profile information in the Affiliate console. 
WEI is not responsible for any third-party fees charged by PayPal to receive Affiliate Commission Fees.
PayPal payments will only be reissued within 120 days of original issue date in the case of incorrect paypal address or refusal from paypal to accept payment. 
WEI, in its sole discretion, reserves the right to modify the terms of this Commission payment method or schedule at any time. Such changes shall take effect when posted. 
Disputes: Affiliate has access to WEI 's real-time Affiliate Program statistics and activity and specifically agrees to file any tracking or commission disputes as well as any other disputes and discrepancies within 45 days after the end of the month in which the sale or event that is disputed occurred. Disputes filed after 45 days of the date on which the Qualified Purchase occurred will not be accepted by WEI and Affiliate forfeits forever any rights to a potential claim. 
• Taxes/Address Changes 
It is Your responsibility to provide WEI with accurate tax and payment information that is necessary to issue a Commission Fee to You. If WEI does not receive the necessary tax or payment information within 90 days of a Qualified Purchase which would otherwise trigger Commission Fees, the applicable commissions shall not accrue and no Commission Fees will be owed with respect to such Qualified Purchase. 
Each Affiliate is required to submit a W8/W9 tax form. 
You are responsible for the payment of all taxes related to the commissions you receive under this Agreement. In compliance with U.S. tax laws, WEI will issue a Form 1099 to Affiliates whose earnings meet or exceed the applicable threshold 
You are responsible for informing WEI about changes to postal and e-mail addresses, as well as any changes to your name, email address, contact information, tax identification number, or other personal information that will impact WEI 's ability to issue a valid Commission payment. 
Any address changes must be made in the Affiliate profile in the Affiliate Console at least 15 business days prior to the end of the calendar month in order for Commission Fees for that month to be sent to the revised address. 
• Reports of Qualified Purchases 
You may log into your Affiliate Console to review Your potential Qualified Purchases statistics on a daily basis. 
• Obligations Regarding Your Site 
o You will be solely responsible for the development, operation, and maintenance of Your site and for all materials that appear on Your site. Such responsibilities include, but are not limited to, the technical operation of Your site and all related equipment; creating and posting product reviews, descriptions, and references on Your site and linking those descriptions to Our website; the accuracy and propriety of materials posted on Your site (including, but not limited to, all materials related to WEI Products and Services); ensuring that materials posted on Your site do not violate or infringe upon the rights of any third party and are not libelous or otherwise illegal. We disclaim all liability and responsibility for such matters.
o We have the right in Our sole discretion to monitor signups through Your site at any time and from time to time to determine if You are in compliance with the terms of this Agreement. If You are not in compliance We may terminate this Agreement immediately.
• WEI’s Responsibilities 
We will be responsible for providing all information necessary to allow You to make appropriate Links from Your site to Our site. WEI will solely be responsible for order processing for orders/Qualified Purchases placed by a Referred Customer following a Link from Your site, for tracking the volume and amount of Qualified Purchases generated by Your site, and for providing information to Affiliates regarding Qualified Purchases statistics. WEI will be solely responsible for all order processing, including but not limited to payment processing, cancellations, refunds and related WEI service. Any determination made by WEI regarding the foregoing shall be binding absent manifest error. 
• Policies and Pricing 
Referred Customers who buy WEI Products and Services through the Affiliate network will be deemed to be Our Customers. Accordingly, all of Our rules, policies, and operating procedures concerning WEI orders, WEI service, and WEI Products and Services sales will apply to those Customers. We may change Our policies and operating procedures at any time. For example, We will determine the prices to be charged for WEI Products and Services sold under the Affiliate Network in accordance with Our own pricing policies. Prices and availability of WEI Products and Services may vary from time to time, from affiliate to affiliate, and from region to region. Because price changes may affect products that You have listed on Your site, You may or may not be able to include price information in Your product descriptions. We will use commercially reasonable efforts to present accurate information, but We cannot guarantee the availability or price of any particular product or service. 
E-mails and Publicity 
You shall not create, publish, transmit or distribute, under any circumstances, any bulk electronic mail messages (also known as "SPAM") without prior written consent from WEI for each and every day when any bulk mailing will occur. WEI, in its sole discretion, reserves the right to reject each and every e-mail mailing. Additionally, You may only send e-mails containing an WEI affiliate link and or a message regarding WEI or WEI's Affiliate Program to person(s) who have been previously contacted and whom consented to the fact that the You will be sending an e-mail containing WEI information or information about the WEI affiliate program. Failure by You to abide by this section, CAN-SPAM Act of 2003 or our Anti-Spam Policy , in any manner, will be deemed a material breach of this Agreement by You and foreclose any and all rights you may have to any commissions. If your account has excessive clicks in a very short period of time as determined by WEI in its sole discretion, the Affiliate relationship may be terminated. 
• Licenses and Use of the weddingandeventinstitute.com Logos and Trademarks. 
o Subject to the limitations set forth in Section 2 above and otherwise in this Agreement, we grant you a non-exclusive, non-transferable, revocable license to (i) access our site through the links solely in accordance with the terms of this agreement and (ii) solely in connection with such links, to use the fatcow.com trademark and logo and similar identifying material relating to us (but only in the form(s) that they are provided by us) (collectively, the "Licensed Materials"), for the sole purpose of selling WEI Products and Services on your site and as approved in advance by us. You may not alter, modify, or change the Licensed Materials in any way. You are only entitled to use the Licensed Materials to the extent that You are a member in good standing of the WEI Affiliate Program.
o You shall not make any specific use of any Licensed Materials for purposes other than selling WEI Products and Services, without first submitting a sample to Us and obtaining the express prior written consent of Your WEI account executive, which consent shall not be unreasonably withheld. You agree not to use the Licensed Materials in any manner that is disparaging or that otherwise portrays WEI, any hosted member of WEI or any WEI employee or representative in a negative light. We reserve all of Our rights in the Licensed Materials and of Our other proprietary rights. We may revoke Your license at any time, by giving You written notice. If not revoked, this license shall terminate upon expiration or termination of this Agreement.
o 
• Term of the Agreement 
The term of this Agreement will begin upon Our acceptance of Your Affiliate Program application and will end when terminated by either party. Either You or We may terminate this Agreement at any time, with or without cause. You are only eligible to earn Commission Fees on Qualified Purchases occurring during the term, and Commission Fees earned through the date of termination will remain payable only if the orders for the related WEI Products and Services are not cancelled and comply with all Terms laid out in this Agreement. We may withhold Your final payment of Commission Fees for a reasonable time to ensure that all Qualified Purchases are valid and payment from Referred Customers are legitimate as determined by WEI in its sole discretion. 
Any Affiliate who violates either this Agreement or WEI's Terms and Conditions will immediately forfeit any right to any and all accrued Commissions Fees and will be removed from the WEI Affiliate Program. 
WEI reserves the right to remove an Affiliate from the Affiliate Program, and to terminate or suspend this Agreement, at an time for any reason, in WEI's sole discretion. 
Without limitation, Affiliate's participation in the Program, and this Agreement, shall be deemed automatically terminated immediately and all commissions forfeited upon Affiliate's violation of any of the terms of this Agreement or of any applicable law or regulation having the force of law. 
• Modification 
We may modify any of the terms and conditions contained in this Agreement at any time in Our sole discretion. Such modifications shall take effect when posted on Our site. WEI, in its sole discretion, reserves the right to notify You by e-mail and further reserves the right to withhold notification of any changes made to this Agreement. Modifications may include, but are not limited to, changes in the scope of available Commissions, Commission amounts/percentages, payment procedures, Commission Fee payment schedules, and Affiliate Program rules. If any modification is unacceptable to You, Your only recourse is to terminate this agreement. Your continued participation in the Affiliate Program following Our posting of a change notice or new agreement on Our site will constitute binding acceptance of the change. 
• Disclaimers 
We make no express or implied warranties or representations with respect to the Affiliate Program or any WEI Products and Services sold through the Affiliate Program (including, without limitation, WARRANTIES OF FITNESS, MERCHANTABILITY, NON-INFRINGEMENT, OR ANY IMPLIED WARRANTIES ARISING OUT OF COURSE OF PERFORMANCE, DEALING, OR TRADE USAGE). In addition, We make no representation that the operation of Our site will be uninterrupted or error free, and We will not be liable for the consequences of any interruptions or errors, including the tracking of information about Referred Customers during the period of interruption. 
• Relationship of Parties 
You and WEI are independent contractors, and nothing in this Agreement will create any partnership, joint venture, agency, franchise, sales representative, or employment relationship between the parties. You will have no authority to make or accept any offers or representations on Our behalf. You will not make any statement, whether on Your site or otherwise, that reasonably would contradict anything in this Section. 
• Representations and Warranties 
You hereby represent and warrant to us as follows: 
o This Agreement has been duly and validly executed and delivered by You and constitutes Your legal, valid, and binding obligation, enforceable against You in accordance with its terms.
o The execution, delivery, and performance by You of this Agreement and the consummation by You of the transactions contemplated hereby will not, with or without the giving of notice, the lapse of time, or both, conflict with or violate (i) any provision of law, rule, or regulation to which You are subject, (ii) any order, judgment, or decree applicable to You or binding upon Your assets or properties, (iii) any provision of Your by-laws or certificate of incorporation, or (iv) any agreement or other instrument applicable to You or binding upon Your assets or properties.
o You are the sole and exclusive owner of the Affiliate Trademarks and have the right and power to grant to Us the license to use Your trademarks in the manner contemplated herein, and such grant does not and will not (i) breach, conflict with, or constitute a default under any agreement or other instrument applicable to You or binding upon Your assets or properties, or (ii) infringe upon any trademark, trade name, service mark, copyright, or other proprietary right of any other person or entity.
o No consent, approval, or authorization of, or exemption by, or filing with, any governmental authority or any third party is required to be obtained or made by You in connection with the execution, delivery, and performance of this Agreement or the taking by You of any other action contemplated hereby.
o There is no pending or, to the best of Your knowledge, threatened claim, action, or proceeding against You, or any Affiliate of Yours, with respect to the execution, delivery, or consummation of this Agreement, or with respect to Your trademarks, and, to the best of Your knowledge, there is no basis for any such claim, action, or proceeding.
o During the term of the Agreement, You will not include in Your site content that is, in Our opinion, unlawful, harmful, threatening, defamatory, obscene, harassing, racially, ethically, or otherwise objectionable or are in violation of Our Terms of Service or Acceptable Use Policy.
o You are at least sixteen (16) years of age.
o Each Referred Customer and each Qualifying Purchase referred or submitted by You to Us, is valid, genuine, unique and not fraudulent and meets each of the Criteria for generating a Commission Fee as provided in this Agreement.
• Limitation of Liability 
WE WILL NOT BE LIABLE FOR INDIRECT, SPECIAL, INCIDENTAL, OR CONSEQUENTIAL DAMAGES, OR ANY LOSS OF REVENUE, PROFITS, OR DATA, ARISING IN CONNECTION WITH THIS AGREEMENT OR THE AFFILIATE PROGRAM, EVEN IF WE HAVE BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES. FURTHER, OUR AGGREGATE LIABILITY ARISING WITH RESPECT TO THIS AGREEMENT AND THE AFFILIATE PROGRAM WILL NOT EXCEED THE TOTAL COMMISSIONS PAID OR PAYABLE TO YOU UNDER THIS AGREEMENT DURING THE 3-MONTH PERIOD IMMEDIATELY PRECEDING THE EVENT GIVING RISE TO SUCH LIABILITY. 
• Indemnification 
You hereby agree to indemnify and hold harmless Us and Our subsidiaries and affiliates, and their directors, officers, employees, agents, shareholders, partners, members, and other owners, against any and all claims, actions, demands, liabilities, losses, damages, judgments, settlements, costs, and expenses (including reasonable attorneys' fees) (any or all of the foregoing hereinafter referred to as "Losses") insofar as such Losses (or actions in respect thereof) arise out of or are based on (i) any claim that Our use of the Affiliate Trademarks infringes on any trademark, trade name, service mark, copyright, license, intellectual property, or other proprietary right of any third party, (ii) any misrepresentation of a representation or warranty or breach of a covenant and agreement made by You herein, or (iii) any claim related to Your site, including, without limitation, its development, operation, maintenance and content therein not attributable to Us. 
• Confidentiality 
Each of the parties here to agrees that all information including, without limitation, the terms of this Agreement, business and financial information, WEI and vendor lists, and pricing and sales information, shall remain strictly confidential and shall not be utilized for any purpose outside the terms of this Agreement except and solely to the extent that any such information is (a) already lawfully known to or independently developed by the receiving party, (b) disclosed in published materials, (c) generally known to the public, or (d) lawfully obtained from any third party any obligation of confidentiality to the discloser hereunder. Notwithstanding the foregoing, each party is hereby authorized to deliver the copy of any such information (a) to any person pursuant to a valid subpoena or order issued by any court or administrative agency of competent jurisdiction, (b) to its accountants, attorneys, or other agents on a confidential basis, and (c) otherwise as required by applicable law, rule, regulation, or legal process including, without limitation, the Securities Exchange Act of 1933, as amended, and the rules and regulations promulgated thereunder, and the Securities Exchange Act of 1934, as amended, and the rules and regulations promulgated thereunder. 
• Independent Investigation 
Your application submission acknowledges that you have read this agreement and agree to be bound by all its terms and conditions. You understand that we may at any time (directly or indirectly) solicit WEI relationships on terms that may differ from those contained in this agreement. we may also solicit WEI relationships with entities that operate websites that are similar to or compete with your website. You have independently evaluated the desirability of participating in the WEI Affiliate Program and are not relying on any representation, guarantee, or statement other than as set forth in this agreement. 
• Governing Law 
The laws of the United States and the State of California will govern this Agreement, without reference to rules governing choice of laws. You may not assign this Agreement, by operation of law or otherwise, without Our prior written consent. Subject to that restriction, this Agreement will be binding on, inure to the benefit of, and be enforceable against the parties and their respective successors and assigns. Our failure to enforce Your strict performance of any provision of this Agreement will not constitute a waiver of Our right to subsequently enforce such a provision or any other provision of this Agreement. 
I INDICATE MY APPROVAL OF THIS AGREEMENT AND DESIRE TO BECOME AN AFFILIATE UNDER THESE TERMS AND CONDITIONS BY COMPLETING AND SUBMITTING THE AFFILIATE PROGRAM SIGNUP FORM, BY SUBMITTING PROPOSED REFERRED CUSTOMERS OR QUALIFYING PURCHASES TO US UNDER OUR AFFILIATE PROGRAM AND/OR BY COLLECTING AND COMMISSION FEES FROM US.
</textarea>  </li>  

<li>
<label>I agree to the terms & conditions<input type="checkbox" name="agreeWithTerms" value="Y" checked="checked"></label>  </li>    


<div id="expandTermsAndConditions" class="ExpandTermsAndConditions"></div>    <div class="clear"></div>
    <div id="FormMessage"></div>   
    <input type="submit" value="Signup"></div></form><script id="pap_x2s6df8d" 
                                  src="http://weddinginstitute.postaffiliatepro.com/scripts/salejs.php" type="text/javascript">
                          </script>

                          <script type="text/javascript">
                            PostAffTracker.writeAffiliateToCustomField('parentuserid');
                          </script>




































					

					</div>
                         
                     
                        </div>
                        
                        </div>
                        
                        <!-- col-md-12 -->
                        
			
		</div>
			<!-- container -->
		
		
		
		
		</div><!-- container-fluid-->
        
        
        
        

</div><!-- container-fluid-->
</div>
</div><!--/.container-->
	
	
	
	
	
		
	


<?php get_footer(); ?>
