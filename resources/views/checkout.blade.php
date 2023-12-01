<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ledthanhdat.vn/html/akasha/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Nov 2023 09:33:20 GMT -->
<head>
    @include('layout.head')
    <title>Checkout - Your Connection to Moroccan Honey Excellence</title>
</head>
<body>
<header id="header" class="header style-02 header-dark">
    @include('layout.header')
</header>
<div class="banner-wrapper has_background">
    @include('layout.banner')
    <div class="banner-wrapper-inner">
        <h1 class="page-title">Checkout</h1>
        <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
            <ul class="trail-items breadcrumb">
                <li class="trail-item trail-begin"><a href="index.html"><span>Home</span></a></li>
                <li class="trail-item trail-end active"><span>Checkout</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<main class="site-main  main-container no-sidebar">
    <div class="container">
        <div class="row">
            <div class="main-content col-md-12">
                <div class="page-main-content">
                    <div class="akasha">
                        <div class="akasha-notices-wrapper"></div>

                        @if(Session::has('error'))
    <div class="alert alert-danger">
        {{ Session::get('error') }}
    </div>
@endif
                        <form name="checkout" id="checkout" method="post" class="checkout akasha-checkout"
                              action="{{ route('order') }}"
                              >
                              @csrf
                            <div class="col2-set" id="customer_details">
                                <div class="col-1">
                                    <div class="akasha-billing-fields">
                                        <h3>Billing details</h3>
                                        <div class="akasha-billing-fields__field-wrapper">
                                            <p class="form-row form-row-first validate-required"
                                               id="billing_first_name_field" data-priority="10"><label
                                                    for="first_name" class="">First name&nbsp;<abbr
                                                    class="required" title="required">*</abbr></label><span
                                                    class="akasha-input-wrapper"><input type="text"
                                                                                             class="input-text "
                                                                                             name="first_name"
                                                                                             id="first_name"
                                                                                             placeholder="" value=""
                                                                                             autocomplete="given-name"></span>
                                            </p>
                                            <p class="form-row form-row-last validate-required"
                                               id="billing_last_name_field" data-priority="20"><label
                                                    for="last_name" class="">Last name&nbsp;<abbr
                                                    class="required" title="required">*</abbr></label><span
                                                    class="akasha-input-wrapper"><input type="text"
                                                                                             class="input-text "
                                                                                             name="last_name"
                                                                                             id="last_name"
                                                                                             placeholder="" value=""
                                                                                             autocomplete="family-name"></span>
                                            </p>
                                            <p class="form-row form-row-wide" id="company_name_field"
                                               data-priority="30"><label for="company_name" class="">Company name&nbsp;<span
                                                    class="optional">(optional)</span></label><span
                                                    class="akasha-input-wrapper"><input type="text"
                                                                                             class="input-text "
                                                                                             name="company_name"
                                                                                             id="company_name"
                                                                                             placeholder="" value=""
                                                                                             autocomplete="organization"></span>
                                            </p>
                                            <p class="form-row form-row-wide adchair-field update_totals_on_change validate-required"
                                               id="country_field" data-priority="40"><label
                                                    for="country" class="">Country&nbsp;<abbr class="required" title="required">*</abbr></label>
                                                <span class="akasha-input-wrapper">
                                                <select name="country"
                                                        id="country"
                                                        class="country_to_state country_select"
                                                        autocomplete="country"
                                                        tabindex="-1"
                                                        aria-hidden="true"><option
                                                    value="">Select a country…</option><option
                                                    value="AX">Åland Islands</option><option
                                                    value="AF">Afghanistan</option><option value="AL">Albania</option><option
                                                    value="DZ">Algeria</option><option
                                                    value="AS">American Samoa</option><option
                                                    value="AD">Andorra</option><option value="AO">Angola</option><option
                                                    value="AI">Anguilla</option><option value="AQ">Antarctica</option><option
                                                    value="AG">Antigua and Barbuda</option><option
                                                    value="AR">Argentina</option><option value="AM">Armenia</option><option
                                                    value="AW">Aruba</option><option value="AU">Australia</option><option
                                                    value="AT">Austria</option><option value="AZ">Azerbaijan</option><option
                                                    value="BS">Bahamas</option><option value="BH">Bahrain</option><option
                                                    value="BD">Bangladesh</option><option value="BB">Barbados</option><option
                                                    value="BY">Belarus</option><option value="PW">Belau</option><option
                                                    value="BE">Belgium</option><option value="BZ">Belize</option><option
                                                    value="BJ">Benin</option><option value="BM">Bermuda</option><option
                                                    value="BT">Bhutan</option><option value="BO">Bolivia</option><option
                                                    value="BQ">Bonaire, Saint Eustatius and Saba</option><option
                                                    value="BA">Bosnia and Herzegovina</option><option value="BW">Botswana</option><option
                                                    value="BV">Bouvet Island</option><option value="BR">Brazil</option><option
                                                    value="IO">British Indian Ocean Territory</option><option
                                                    value="VG">British Virgin Islands</option><option
                                                    value="BN">Brunei</option><option value="BG">Bulgaria</option><option
                                                    value="BF">Burkina Faso</option><option value="BI">Burundi</option><option
                                                    value="KH">Cambodia</option><option value="CM">Cameroon</option><option
                                                    value="CA">Canada</option><option value="CV">Cape Verde</option><option
                                                    value="KY">Cayman Islands</option><option value="CF">Central African Republic</option><option
                                                    value="TD">Chad</option><option value="CL">Chile</option><option
                                                    value="CN">China</option><option
                                                    value="CX">Christmas Island</option><option value="CC">Cocos (Keeling) Islands</option><option
                                                    value="CO">Colombia</option><option value="KM">Comoros</option><option
                                                    value="CG">Congo (Brazzaville)</option><option value="CD">Congo (Kinshasa)</option><option
                                                    value="CK">Cook Islands</option><option
                                                    value="CR">Costa Rica</option><option value="HR">Croatia</option><option
                                                    value="CU">Cuba</option><option value="CW">Curaçao</option><option
                                                    value="CY">Cyprus</option><option value="CZ">Czech Republic</option><option
                                                    value="DK">Denmark</option><option value="DJ">Djibouti</option><option
                                                    value="DM">Dominica</option><option
                                                    value="DO">Dominican Republic</option><option
                                                    value="EC">Ecuador</option><option value="EG">Egypt</option><option
                                                    value="SV">El Salvador</option><option
                                                    value="GQ">Equatorial Guinea</option><option
                                                    value="ER">Eritrea</option><option value="EE">Estonia</option><option
                                                    value="ET">Ethiopia</option><option
                                                    value="FK">Falkland Islands</option><option
                                                    value="FO">Faroe Islands</option><option value="FJ">Fiji</option><option
                                                    value="FI">Finland</option><option value="FR">France</option><option
                                                    value="GF">French Guiana</option><option
                                                    value="PF">French Polynesia</option><option value="TF">French Southern Territories</option><option
                                                    value="GA">Gabon</option><option value="GM">Gambia</option><option
                                                    value="GE">Georgia</option><option value="DE">Germany</option><option
                                                    value="GH">Ghana</option><option value="GI">Gibraltar</option><option
                                                    value="GR">Greece</option><option value="GL">Greenland</option><option
                                                    value="GD">Grenada</option><option value="GP">Guadeloupe</option><option
                                                    value="GU">Guam</option><option value="GT">Guatemala</option><option
                                                    value="GG">Guernsey</option><option value="GN">Guinea</option><option
                                                    value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option
                                                    value="HT">Haiti</option><option value="HM">Heard Island and McDonald Islands</option><option
                                                    value="HN">Honduras</option><option value="HK">Hong Kong</option><option
                                                    value="HU">Hungary</option><option value="IS">Iceland</option><option
                                                    value="IN">India</option><option value="ID">Indonesia</option><option
                                                    value="IR">Iran</option><option value="IQ">Iraq</option><option
                                                    value="IE">Ireland</option><option value="IM">Isle of Man</option><option
                                                    value="IL">Israel</option><option value="IT">Italy</option><option
                                                    value="CI">Ivory Coast</option><option value="JM">Jamaica</option><option
                                                    value="JP">Japan</option><option value="JE">Jersey</option><option
                                                    value="JO">Jordan</option><option value="KZ">Kazakhstan</option><option
                                                    value="KE">Kenya</option><option value="KI">Kiribati</option><option
                                                    value="KW">Kuwait</option><option value="KG">Kyrgyzstan</option><option
                                                    value="LA">Laos</option><option value="LV">Latvia</option><option
                                                    value="LB">Lebanon</option><option value="LS">Lesotho</option><option
                                                    value="LR">Liberia</option><option value="LY">Libya</option><option
                                                    value="LI">Liechtenstein</option><option
                                                    value="LT">Lithuania</option><option value="LU">Luxembourg</option><option
                                                    value="MO">Macao S.A.R., China</option><option
                                                    value="MK">Macedonia</option><option value="MG">Madagascar</option><option
                                                    value="MW">Malawi</option><option value="MY">Malaysia</option><option
                                                    value="MV">Maldives</option><option value="ML">Mali</option><option
                                                    value="MT">Malta</option><option
                                                    value="MH">Marshall Islands</option><option
                                                    value="MQ">Martinique</option><option value="MR">Mauritania</option><option
                                                    value="MU">Mauritius</option><option value="YT">Mayotte</option><option
                                                    value="MX">Mexico</option><option value="FM">Micronesia</option><option
                                                    value="MD">Moldova</option><option value="MC">Monaco</option><option
                                                    value="MN">Mongolia</option><option value="ME">Montenegro</option><option
                                                    value="MS">Montserrat</option><option value="MA">Morocco</option><option
                                                    value="MZ">Mozambique</option><option value="MM">Myanmar</option><option
                                                    value="NA">Namibia</option><option value="NR">Nauru</option><option
                                                    value="NP">Nepal</option><option value="NL">Netherlands</option><option
                                                    value="NC">New Caledonia</option><option
                                                    value="NZ">New Zealand</option><option value="NI">Nicaragua</option><option
                                                    value="NE">Niger</option><option value="NG">Nigeria</option><option
                                                    value="NU">Niue</option><option value="NF">Norfolk Island</option><option
                                                    value="KP">North Korea</option><option value="MP">Northern Mariana Islands</option><option
                                                    value="NO">Norway</option><option value="OM">Oman</option><option
                                                    value="PK">Pakistan</option><option
                                                    value="PS">Palestinian Territory</option><option
                                                    value="PA">Panama</option><option
                                                    value="PG">Papua New Guinea</option><option
                                                    value="PY">Paraguay</option><option value="PE">Peru</option><option
                                                    value="PH">Philippines</option><option value="PN">Pitcairn</option><option
                                                    value="PL">Poland</option><option value="PT">Portugal</option><option
                                                    value="PR">Puerto Rico</option><option value="QA">Qatar</option><option
                                                    value="RE">Reunion</option><option value="RO">Romania</option><option
                                                    value="RU">Russia</option><option value="RW">Rwanda</option><option
                                                    value="ST">São Tomé and Príncipe</option><option value="BL">Saint Barthélemy</option><option
                                                    value="SH">Saint Helena</option><option value="KN">Saint Kitts and Nevis</option><option
                                                    value="LC">Saint Lucia</option><option value="SX">Saint Martin (Dutch part)</option><option
                                                    value="MF">Saint Martin (French part)</option><option value="PM">Saint Pierre and Miquelon</option><option
                                                    value="VC">Saint Vincent and the Grenadines</option><option
                                                    value="WS">Samoa</option><option value="SM">San Marino</option><option
                                                    value="SA">Saudi Arabia</option><option value="SN">Senegal</option><option
                                                    value="RS">Serbia</option><option value="SC">Seychelles</option><option
                                                    value="SL">Sierra Leone</option><option
                                                    value="SG">Singapore</option><option value="SK">Slovakia</option><option
                                                    value="SI">Slovenia</option><option
                                                    value="SB">Solomon Islands</option><option
                                                    value="SO">Somalia</option><option value="ZA">South Africa</option><option
                                                    value="GS">South Georgia/Sandwich Islands</option><option
                                                    value="KR">South Korea</option><option
                                                    value="SS">South Sudan</option><option value="ES">Spain</option><option
                                                    value="LK">Sri Lanka</option><option value="SD">Sudan</option><option
                                                    value="SR">Suriname</option><option value="SJ">Svalbard and Jan Mayen</option><option
                                                    value="SZ">Swaziland</option><option value="SE">Sweden</option><option
                                                    value="CH">Switzerland</option><option value="SY">Syria</option><option
                                                    value="TW">Taiwan</option><option value="TJ">Tajikistan</option><option
                                                    value="TZ">Tanzania</option><option value="TH">Thailand</option><option
                                                    value="TL">Timor-Leste</option><option value="TG">Togo</option><option
                                                    value="TK">Tokelau</option><option value="TO">Tonga</option><option
                                                    value="TT">Trinidad and Tobago</option><option
                                                    value="TN">Tunisia</option><option value="TR">Turkey</option><option
                                                    value="TM">Turkmenistan</option><option value="TC">Turks and Caicos Islands</option><option
                                                    value="TV">Tuvalu</option><option value="UG">Uganda</option><option
                                                    value="UA">Ukraine</option><option
                                                    value="AE">United Arab Emirates</option><option value="GB">United Kingdom (UK)</option><option
                                                    value="US" selected="selected">United States (US)</option><option value="UM">United States (US) Minor Outlying Islands</option><option
                                                    value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option
                                                    value="VU">Vanuatu</option><option value="VA">Vatican</option><option
                                                    value="VE">Venezuela</option><option value="VN" >Vietnam</option><option
                                                    value="WF">Wallis and Futuna</option><option value="EH">Western Sahara</option><option
                                                    value="YE">Yemen</option><option value="ZM">Zambia</option><option
                                                    value="ZW">Zimbabwe</option></select>
                                                </span>
                                            </p>
                                            <p class="form-row form-row-wide adchair-field validate-required"
                                            id="city_field" data-priority="50"><label
                                                 for="city" class="">City&nbsp;<abbr
                                                 class="required" title="required">*</abbr></label><span
                                                 class="akasha-input-wrapper"><input type="text"
                                                                                          class="input-text "
                                                                                          name="city"
                                                                                          id="city"
                                                                                          placeholder="House number and street name"
                                                                                          value=""
                                                                                          autocomplete="adchair-line1"
                                                                                          data-placeholder="House number and street name"></span>
                                         </p>
                                            <p class="form-row form-row-wide adchair-field validate-required"
                                               id="street_adchair_field" data-priority="50"><label
                                                    for="street_adchair" class="">Street adchair&nbsp;<abbr
                                                    class="required" title="required">*</abbr></label><span
                                                    class="akasha-input-wrapper"><input type="text"
                                                                                             class="input-text "
                                                                                             name="street_adchair"
                                                                                             id="street_adchair"
                                                                                             placeholder="House number and street name"
                                                                                             value=""
                                                                                             autocomplete="adchair-line1"
                                                                                             data-placeholder="House number and street name"></span>
                                            </p>

                                            <p class="form-row form-row-wide adchair-field validate-postcode"
                                               id="postcode_field" data-priority="65"
                                               data-o_class="form-row form-row-wide adchair-field validate-postcode">
                                                <label for="postcode" class="">Postcode / ZIP&nbsp;<span
                                                        class="optional">(optional)</span></label><span
                                                    class="akasha-input-wrapper"><input type="text"
                                                                                             class="input-text "
                                                                                             name="postcode"
                                                                                             id="postcode"
                                                                                             placeholder="" value=""
                                                                                             autocomplete="postal-code"></span>
                                            </p>


                                            <p class="form-row form-row-wide validate-required validate-phone"
                                               id="phone" data-priority="100"><label for="phone"
                                                                                                   class="">Phone&nbsp;<abbr
                                                    class="required" title="required">*</abbr></label><span
                                                    class="akasha-input-wrapper"><input type="tel"
                                                                                             class="input-text "
                                                                                             name="phone"
                                                                                             id="phone"
                                                                                             placeholder="" value=""
                                                                                             autocomplete="tel"></span>
                                            </p>
                                            <p class="form-row form-row-wide validate-required validate-email"
                                               id="email_field" data-priority="110"><label for="email"
                                                                                                   class="">Email
                                                adchair&nbsp;<abbr class="required"
                                                                   title="required">*</abbr></label><span
                                                    class="akasha-input-wrapper"><input type="email"
                                                                                             class="input-text "
                                                                                             name="email"
                                                                                             id="email"
                                                                                             placeholder="" value=""
                                                                                             autocomplete="email username"></span>
                                            </p></div>
                                    </div>

                                </div>
                                <div class="col-2">
                                    <div class="akasha-shipping-fields">
                                    </div>
                                    <div class="akasha-additional-fields">
                                        <h3>Additional information</h3>
                                        <div class="akasha-additional-fields__field-wrapper">
                                            <p class="form-row notes" id="note_field" data-priority=""><label
                                                    for="note" class="">Order notes&nbsp;<span
                                                    class="optional">(optional)</span></label><span
                                                    class="akasha-input-wrapper"><textarea name="note"
                                                                                                class="input-text "
                                                                                                id="note"
                                                                                                placeholder="Notes about your order, e.g. special notes for delivery."
                                                                                                rows="2"
                                                                                                cols="5"></textarea></span>
                                            </p></div>
                                    </div>
                                </div>
                            </div>
                            <h3 id="order_review_heading">Your order</h3>
                            <div id="order_review" class="akasha-checkout-review-order">
                                <table class="shop_table akasha-checkout-review-order-table">
                                    <thead>
                                    <tr>
                                        <th class="product-name">Product</th>
                                        <th class="product-total">Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach ($cart as $item)
                                    <tr class="cart_item">
                                        <td class="product-name">
                                            {{ $item['name'] }}&nbsp;&nbsp; <strong class="product-quantity">×
                                                {{ $item['qte'] }}</strong></td>
                                        <td class="product-total">
                                            <span class="akasha-Price-amount amount"><span
                                                    class="akasha-Price-currencySymbol">$</span>{{ $item['total'] }}</span></td>
                                    </tr>
                                    @endforeach


                                    </tbody>
                                    <tfoot>

                                    <tr class="order-total">
                                        <th>Total</th>
                                        <td><strong><span class="akasha-Price-amount amount"><span
                                                class="akasha-Price-currencySymbol">$</span>{{ $overallTotal }}</span></strong>
                                        </td>
                                    </tr>
                                    </tfoot>
                                </table>
                                <input type="hidden" name="lang" value="en">
                                <div id="payment" class="akasha-checkout-payment">
                                    <ul class="wc_payment_methods payment_methods methods">
                                        <li class="wc_payment_way payment_way_cod">
                                            <input id="payment_way_cod" type="radio"  checked="checked" class="input-radio"
                                                   name="payment_way" value="cod" data-order_button_text="">
                                            <label for="payment_way_cod">
                                                Cash on delivery </label>
                                            <div class="payment_box payment_way_cod" style="display:none;">
                                                <p>Pay with cash upon delivery.</p>
                                            </div>
                                        </li>
                                    </ul>

                                </div>

                                <div id="payment" class="akasha-checkout-payment" style="margin: 2.2rem 0rem">
                                    <ul class="wc_payment_methods payment_methods methods">

                                        <li class="wc_payment_method payment_method_cod">
                                            <p>Your personal data will be
                                                used to process your order, support your experience throughout this
                                                website, and for other purposes described in our <a
                                                        href="#"
                                                        class="akasha-privacy-policy-link" target="_blank">privacy
                                                    policy</a>.</p>
                                        </li>
                                    </ul>

                                </div>
                                <div >

                                                             <div style="display:flex; justify-content:end;">
                                                                <a class="action-btn" id="login-btn"><i
                                                                    class="fi-rs-refresh mr-10"></i>Place Order</a>
                                                            </div>

                                    </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@include('layout.footer')
@include('layout.nav-footer')
<a href="#" class="backtotop active">
    <i class="fa fa-angle-up"></i>
</a>
@include('layout.js')
</body>

</html>
