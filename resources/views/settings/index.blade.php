@extends('layouts.layout')
@section('title', 'setting')

@section('content')
<style>
    svg{
        width: 36px! important;
    }
    a[rel="prev"]
{
    display: none !important;
}
</style>
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-2 grid-margin stretch-card">
            <div class="card card-container p-3">
                <ul class="list-group custom-list-group">
                    <li class="list-group-item"><a href="#" onclick="showForm('icostoForm',this)" class="dropdown-item">ICO/STO</a></li>
                    <li class="list-group-item"><a href="#" onclick="showForm('websiteForm',this)" class="dropdown-item">Website</a></li>
                    <li class="list-group-item"><a href="#" onclick="showForm('referralForm',this)" class="dropdown-item">Referral</a></li>
                    <li class="list-group-item"><a href="#" onclick="showForm('mailingForm',this)" class="dropdown-item">Mailing</a></li>
                    <li class="list-group-item"><a href="#" onclick="showForm('smsForm',this)" class="dropdown-item">SMS</a></li>
                    <li class="list-group-item"><a href="#" onclick="showForm('paymentForm',this)" class="dropdown-item">Payment Method</a></li>
                    <li class="list-group-item"><a href="#" onclick="showForm('managepageForm',this)" class="dropdown-item">Manage Page</a></li>
                    <li class="list-group-item"><a href="#" onclick="showForm('applicationapiForm',this)" class="dropdown-item">Application API</a></li>
                    <li class="list-group-item"><a href="#" onclick="showForm('languageForm',this)" class="dropdown-item">Language</a></li>
                    <li class="list-group-item"><a href="#" onclick="showForm('comissionForm',this)" class="dropdown-item">Commission Slab</a></li>
                    <li class="list-group-item"><a href="#" onclick="showForm('apiForm',this)" class="dropdown-item">API</a></li>
                    <li class="list-group-item"><a href="#" onclick="showForm('retailerForm',this)" class="dropdown-item">Retailer</a></li>
                    <li class="list-group-item"><a href="#" onclick="showForm('systemstatusForm',this)" class="dropdown-item">System Status</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-10 grid-margin stretch-card">
            <div class="card card-container p-3">
                <!-- ICO/STO Form -->
                <div class="form-container" id="icostoForm" style="display: none;">
                    <h2>ICO /STO</h2>
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6 ">
                                <label for="siteName">Token Name</label>
                                <input type="text" class="form-control" id="siteName" placeholder="Enter site name" value="unnatim pay">
                                <small class="form-text text-muted">Enter name of website.</small>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="tokenSymbol">Token Symbol</label>
                                <input type="text" class="form-control" id="tokenSymbol" placeholder="Enter token symbol">
                                <small class="form-text text-muted">Usually 3-4 letters like BTC, UTC,
                                    ETH.</small>
                            </div>

                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4 mt-3">
                                <label for="decimalMin">Decimal Minimum</label>
                                <input type="number" class="form-control" id="decimalMin" placeholder="Min">
                                <small class="form-text text-muted">Minimum number of decimal points for
                                    calculation. 2-8 are accepted.</small>
                            </div>
                            <div class="form-group col-md-4 mt-3">
                                <label for="decimalMax">Decimal Maximum</label>
                                <input type="number" class="form-control" id="decimalMax" placeholder="Max">
                                <small class="form-text text-muted">Maximum number of decimal points for
                                    calculation. 6-18 are accepted.</small>
                            </div>
                            <div class="form-group col-md-4 mt-3">
                                <label for="decimalDisplay">Decimal Display</label>
                                <input type="number" class="form-control" id="decimalDisplay" placeholder="Display">
                                <small class="form-text text-muted">The number of decimal points applied
                                    to show numbers in User/Admin card balance.</small>
                            </div>
                        </div>

                        <div class="text-right mt-5">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
                <!-- Website Form -->
                <div id="websiteForm" class="form-container" style="display: none;">
                    <h2>Website Form</h2>
                    <ul class="nav nav-tabs" id="settingsTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="site-info-tab" data-toggle="tab" href="#site-info" role="tab" aria-controls="site-info" aria-selected="true">Site Info</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="general-settings-tab" data-toggle="tab" href="#general-settings" role="tab" aria-controls="general-settings" aria-selected="false">General Settings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="social-links-tab" data-toggle="tab" href="#social-links" role="tab" aria-controls="social-links" aria-selected="false">Social Links</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="api-settings-tab" data-toggle="tab" href="#api-settings" role="tab" aria-controls="api-settings" aria-selected="false">API Settings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="advance-tab" data-toggle="tab" href="#advance" role="tab" aria-controls="advance" aria-selected="false">Advance</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <!-- Site Info Form -->
                        <div class="tab-pane fade show active" id="site-info" role="tabpanel" aria-labelledby="site-info-tab">
                            <form>
                                <!-- 1st row: Site Name, Site Email, Copyright -->
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="siteName">Site Name</label>
                                        <input type="text" class="form-control" id="siteName" placeholder="Enter site name" value="unnatim pay" readonly>
                                        <small class="form-text text-muted">Enter name of
                                            website.</small>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="siteEmail">Site Email</label>
                                        <input type="email" class="form-control" id="siteEmail" placeholder="Enter site email" value="support@unnatimpay.in">
                                        <small class="form-text text-muted">For contact and sending
                                            emails.</small>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="copyright">Copyright</label>
                                        <input type="text" class="form-control" id="copyright" value="All rights reserved">
                                        <small class="form-text text-muted">Copyright text for
                                            site.</small>
                                    </div>
                                </div>

                                <!-- 2nd row: Contact Address, Contact Phone, Support Email -->
                                <div class="form-row">
                                    <div class="form-group col-md-4 mt-3">
                                        <label for="contactAddress">Contact Address</label>
                                        <input type="text" class="form-control" id="contactAddress" placeholder="Enter contact address">
                                    </div>
                                    <div class="form-group col-md-4 mt-3">
                                        <label for="contactPhone">Contact Phone</label>
                                        <input type="text" class="form-control" id="contactPhone" placeholder="Enter contact phone">
                                    </div>
                                    <div class="form-group col-md-4 mt-3">
                                        <label for="supportEmail">Support Email</label>
                                        <input type="email" class="form-control" id="supportEmail" placeholder="Enter support email">
                                    </div>
                                </div>

                                <!-- 3rd row: Main Site URL, Upload Logo File, Update F-Icon -->
                                <div class="form-row">
                                    <div class="form-group col-md-4 mt-3">
                                        <label for="mainSiteURL">Main Site URL</label>
                                        <input type="url" class="form-control" id="mainSiteURL" placeholder="Enter main site URL">
                                    </div>
                                    <div class="form-group col-md-4 mt-3">
                                        <label for="logoFile">Upload Logo File</label>
                                        <input type="file" class="form-control form-control-file" id="logoFile">
                                    </div>
                                    <div class="form-group col-md-4 mt-3">
                                        <label for="fIcon">Update F-Icon</label>
                                        <input type="file" class="form-control form-control-file" id="fIcon">
                                    </div>
                                </div>

                                <!-- Update Button -->
                                <div class="text-right mt-5">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>

                        </div>

                        <!-- General Settings Form -->
                        <div class="tab-pane fade" id="general-settings" role="tabpanel" aria-labelledby="general-settings-tab">
                            <form>
                                <!-- 1st row: Time Zone, Date Format, Time Format -->
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="timeZone">Time Zone</label>
                                        <select class="form-control" id="timeZone">
                                            <option value="Asia/Kolkata" selected>(UTC +05:30) Kolkata
                                                (Default)</option>
                                            <option value="America/New_York">(UTC -05:00) New York
                                            </option>
                                            <option value="Europe/London">(UTC +00:00) London</option>
                                            <!-- Add more options for other time zones -->
                                        </select>
                                        <small class="form-text text-muted">Select application time
                                            zone.</small>
                                    </div>


                                    <div class="form-group col-md-4">
                                        <label for="dateFormat">Date Format</label>
                                        <select class="form-control" id="dateFormat">
                                            <option value="dd-mm-yyyy" selected>dd-mm-yyyy (Default)
                                            </option>
                                            <option value="mm-dd-yyyy">mm-dd-yyyy</option>
                                            <!-- Add more options for other date formats -->
                                        </select>
                                        <small class="form-text text-muted">Select application date
                                            format.</small>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="timeFormat">Time Format</label>
                                        <select class="form-control" id="timeFormat">
                                            <option value="12hr" selected>12hr (Default)</option>
                                            <option value="24hr">24hr</option>
                                            <!-- Add more options for other time formats -->
                                        </select>
                                        <small class="form-text text-muted">Select application time
                                            format.</small>
                                    </div>
                                </div>

                                <!-- 2nd row: Admin Theme, Auth Page Layout, User Panel Theme -->
                                <div class="form-row">
                                    <div class="form-group col-md-4 mt-3">
                                        <label for="adminTheme">Admin Theme</label>
                                        <select class="form-control" id="adminTheme">
                                            <option value="light" selected>Light (Default)</option>
                                            <option value="dark">Dark</option>
                                            <!-- Add more options for other admin themes -->
                                        </select>
                                        <small class="form-text text-muted">Style scheme for admin area
                                            .</small>
                                    </div>
                                    <div class="form-group col-md-4 mt-3">
                                        <label for="authPageLayout">Auth Page Layout</label>
                                        <select class="form-control" id="authPageLayout">
                                            <option value="default" selected>Default (Default)</option>
                                            <option value="alterside">Alter Side</option>
                                            <option value="center-light">Center Light</option>
                                            <option value="center-dark">Center Dark</option>
                                            <!-- Add more options for other auth page layouts -->
                                        </select>
                                        <small class="form-text text-muted">Login/Registration page
                                            design layout .</small>
                                    </div>
                                    <div class="form-group col-md-4 mt-3">
                                        <label for="userPanelTheme">User Panel Theme</label>
                                        <select class="form-control" id="userPanelTheme">
                                            <option value="default" selected>Default (Default)</option>
                                            <option value="color">Other Color</option>
                                            <!-- Add more options for other user panel themes -->
                                        </select>
                                        <small class="form-text text-muted">Style scheme for user
                                            area.</small>
                                    </div>
                                </div>

                                <!-- 3rd row: Checkbox and Toggle for Enable/Disable -->
                                <div class="form-row">

                                    <div class="form-group col-xs-6 mt-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="enableDisableCheckbox">
                                            <label class="form-check-label" for="enableDisableCheckbox">Enable custom
                                                Stylesheet</label>
                                        </div>
                                    </div>
                                    <div class="form-group col-xs-6 mt-1">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                            <label class="form-check-label" for="flexSwitchCheckDefault">
                                                Maintenance Mode </label>
                                        </div>
                                    </div>


                                    <!-- Update Button -->
                                    <div class="form-group col-md-3 mt-2 text-right">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>

                                </div>


                            </form>

                        </div>

                        <!-- Social Links Form -->
                        <div class="tab-pane fade" id="social-links" role="tabpanel" aria-labelledby="social-links-tab">
                            <form>
                                <!-- Add form fields for Social Links here -->
                                <div class="form-row">
                                    <div class="form-group col-xs-6">
                                        <label for="Link1">Show on User/Client Area</label>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="Switch1">
                                            <label class="custom-control-label" for="Switch1">Enable</label>
                                        </div>
                                    </div>
                                    <div class="form-group col-xs-6">
                                        <label for="Link2">Show on Login/Register Page</label>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="Switch2">
                                            <label class="custom-control-label" for="Switch2">Enable</label>
                                        </div>
                                    </div>

                                </div>


                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="facebookLink">Facebook</label>
                                        <input type="text" class="form-control" id="facebookLink" placeholder="Enter Facebook URL">
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="twitterLink">Twitter</label>
                                        <input type="text" class="form-control" id="twitterLink" placeholder="Enter Twitter URL">
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="linkedinLink">Linkdin</label>
                                        <input type="text" class="form-control" id="linkedinLink" placeholder="Enter Linkedin URL">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="githubLink">Github</label>
                                        <input type="text" class="form-control" id="githubLink" placeholder="Enter Github URL">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="mediumLink">Medium</label>
                                        <input type="text" class="form-control" id="mediumLink" placeholder="Enter medium URL">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="telegramLink">Telegram</label>
                                        <input type="text" class="form-control" id="telegramLink" placeholder="Enter telegram URL">
                                    </div>
                                </div>


                                <!-- Update Button -->
                                <div class="text-right mt-5">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>

                        <!-- API Settings Form -->
                        <div class="tab-pane fade" id="api-settings" role="tabpanel" aria-labelledby="api-settings-tab">
                            <h5>Google reCaptcha v3</h5>
                            <form>
                                <!-- 1st row: Site Key, Secret Key, Facebook Client ID -->
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="siteKey">Site Key</label>
                                        <input type="text" class="form-control" id="siteKey" placeholder="Enter Site Key">
                                        <small class="form-text text-muted">Get the API key <a href="https://www.google.com/recaptcha/admin" target="_blank">here</a>.</small>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="secretKey">Secret Key</label>
                                        <input type="text" class="form-control" id="secretKey" placeholder="Enter Secret Key">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="facebookClientId">Facebook Client ID</label>
                                        <input type="text" class="form-control" id="facebookClientId" placeholder="Enter Facebook Client ID">
                                        <small class="form-text text-muted">In Facebook app, set
                                            redirect URL: <a href="https://www.google.com/recaptcha/admin" target="_blank">here</a>.</small>
                                    </div>
                                </div>

                                <!-- 2nd row: Facebook Client Secret, Google Client ID, Google Client Secret -->
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="facebookClientSecret">Facebook Client Secret</label>
                                        <input type="text" class="form-control" id="facebookClientSecret" placeholder="Enter Facebook Client Secret">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="googleClientId">Google Client ID</label>
                                        <input type="text" class="form-control" id="googleClientId" placeholder="Enter Google Client ID">
                                        <small class="form-text text-muted">In Google app, set redirect
                                            URL: <a href="https://www.google.com/recaptcha/admin" target="_blank">here</a>.</small>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="googleClientSecret">Google Client Secret</label>
                                        <input type="text" class="form-control" id="googleClientSecret" placeholder="Enter Google Client Secret">
                                    </div>
                                </div>

                                <!-- Update Button -->
                                <div class="text-right mt-5">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>


                        </div>

                        <!-- Advance Settings Form -->
                        <div class="tab-pane fade" id="advance" role="tabpanel" aria-labelledby="advance-tab">
                            <form>
                                <!-- Header Code Section -->
                                <div class="form-group">
                                    <label for="headerCode">Header Code</label>
                                    <textarea class="form-control" id="headerCode" rows="5" placeholder="Enter header code"></textarea>
                                    <small class="form-text text-muted">Extra area input for header
                                        code.</small>
                                </div>



                                <!-- Footer Code Section -->
                                <div class="form-group">
                                    <label for="footerCode">Footer Code</label>
                                    <textarea class="form-control" id="footerCode" rows="5" placeholder="Enter footer code"></textarea>
                                    <small class="form-text text-muted">Extra area input for footer
                                        code.</small>
                                </div>

                                <!-- Update Button -->
                                <div class="text-right mt-5">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <!-- referral form -->
                <div id="referralForm" class="form-container" style="display: none;">
                    <h2>Referral Settings</h2>
                    <p>Manage your referral system to boost your token sales. Once enable referral
                        system option, it will start tracking invitation link also user/contributor able
                        to see invitation link on their profile. They can share any where to invite more
                        people to join on your platform. You can specify how much bonus a user can get.
                    </p>
                    <b>Note: To active referral system completly, you have set Show in Visibility by
                        edit Referral page from Manage Page</b>
                    <br><br>

                    <h3>Referral System</h3>
                    <label class="switch">
                        <input type="checkbox" id="referralToggle" onchange="toggleReferralSystem()">
                        <span class="slider round"></span>
                    </label>
                    <span id="referralStatus">Disabled</span>

                    <!-- This is the form that will be shown/hidden -->
                    <div id="referralDetailsForm" style="display: none;">
                        <!-- <h4>Referral Details</h4> -->
                        <form class="mt-2">
                            <!-- Referral Bonus Allowed -->
                            <h5>Invited User (who joined)</h5>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="bonusAllowed">Referral Bonus Allowed</label>
                                    <select class="form-control" id="bonusAllowed">
                                        <option value="all">All transactions</option>
                                        <option value="max1">Max 1 transaction</option>
                                        <option value="max3">Max 3 transactions</option>
                                    </select>
                                    <small class="form-text text-muted">Limit with transaction how many
                                        times bonus will add into account for purchase.</small>
                                </div>

                                <!-- Offering Type -->
                                <div class="form-group col-md-4">
                                    <label for="offeringType">Offering Type</label>
                                    <select class="form-control" id="offeringType">
                                        <option value="percentage">Percentage</option>
                                        <option value="fixed">Fixed/Flat rate</option>
                                    </select>
                                    <small class="form-text text-muted">Choose whether the referral
                                        bonus will be calculated as percentage or fixed rate.</small>
                                </div>

                                <!-- Bonus Offer Amount -->
                                <div class="form-group col-md-4">
                                    <label for="bonusAmount">Bonus Offer Amount</label>
                                    <input type="number" class="form-control" id="bonusAmount" placeholder="Enter bonus amount">
                                    <small class="form-text text-muted">Specify bonus amount for who
                                        joined.</small>
                                </div>
                            </div>
                            <h5>Referral User (who referred)</h5>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="bonusAllowed">Referral Bonus Allowed</label>
                                    <select class="form-control" id="bonusAllowed">
                                        <option value="all">All transactions</option>
                                        <option value="max1">Max 1 transaction</option>
                                        <option value="max3">Max 3 transactions</option>
                                    </select>
                                    <small class="form-text text-muted">Limit with transaction how many
                                        times bonus will add into account for purchase.</small>
                                </div>

                                <!-- Offering Type -->
                                <div class="form-group col-md-4">
                                    <label for="offeringType">Offering Type</label>
                                    <select class="form-control" id="offeringType">
                                        <option value="percentage">Percentage</option>
                                        <option value="fixed">Fixed/Flat rate</option>
                                    </select>
                                    <small class="form-text text-muted">Choose whether the referral
                                        bonus will be calculated as percentage or fixed rate.</small>
                                </div>

                                <!-- Bonus Offer Amount -->
                                <div class="form-group col-md-4">
                                    <label for="bonusAmount">Bonus Offer Amount</label>
                                    <input type="number" class="form-control" id="bonusAmount" placeholder="Enter bonus amount">
                                    <small class="form-text text-muted">Specify bonus amount for who
                                        referred.</small>
                                </div>
                            </div>
                            <!-- Toggle Switch for Update -->
                            <div class="form-group mt-2">
                                <label>Show info to user</label>
                                <label class="switch">
                                    <input type="checkbox" id="updateToggle">
                                    <span class="slider round"></span>
                                </label>
                                <small class="form-text text-muted">Referral info show to user on signup
                                    page so the user can see who refer him. </small>
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
                <!-- system form -->
                <div id="systemstatusForm" class="form-container" style="display: none;">
                    <h3>System Information</h3>
                    <p>Useful system information about token sales management application.

                    </p>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <h4>Site Environment</h4>
                            <ul class="list-group">
                                <li class=" list-group-item"> <strong class="mr-4">Heading 1:</strong>
                                    <i class="fa fa-check-circle"></i> Some text here.
                                </li>
                                <li class=" list-group-item"></li>
                                <li class=" list-group-item"></li>
                                <li class=" list-group-item"></li>
                                <li class=" list-group-item"></li>
                                <li class=" list-group-item"></li>
                                <li class=" list-group-item"></li>
                                <li class=" list-group-item"></li>
                                <li class=" list-group-item"></li>
                                <li class=" list-group-item"></li>
                                <li class=" list-group-item"></li>
                                <li class=" list-group-item"></li>
                                <li class=" list-group-item"></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
            
                <!-- comission form -->
                <div class="form-container" id="comissionForm" style="display: none;">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Comission Slab</h4>
                            <p class="card-description">
                            <div>

                                <button class="btn btn-info mt-1" data-toggle="modal" data-target="#schemeModal1">
                                    <i class="ti-plus mr-1 "></i> Add
                                </button>
                            </div>
                            </p>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Profile</th>
                                            <th>VatNo.</th>
                                            <th>Created</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Jacob</td>
                                            <td>53275531</td>
                                            <td>12 May 2017</td>
                                            <td><label class="badge badge-danger">Pending</label></td>
                                        </tr>
                                        <tr>
                                            <td>Messsy</td>
                                            <td>53275532</td>
                                            <td>15 May 2017</td>
                                            <td><label class="badge badge-warning">In progress</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>John</td>
                                            <td>53275533</td>
                                            <td>14 May 2017</td>
                                            <td><label class="badge badge-info">Fixed</label></td>
                                        </tr>
                                        <tr>
                                            <td>Peter</td>
                                            <td>53275534</td>
                                            <td>16 May 2017</td>
                                            <td><label class="badge badge-success">Completed</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Dave</td>
                                            <td>53275535</td>
                                            <td>20 May 2017</td>
                                            <td><label class="badge badge-warning">In progress</label>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>


                        </div>

                        <!-- Add more form containers here for other options -->
                    </div>
                </div>

                <!-- api  -->
                <div class="form-container" id="apiForm" style="display: none;">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">API List</h4>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Profile</th>
                                            <th>VatNo.</th>
                                            <th>Created</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Jacob</td>
                                            <td>53275531</td>
                                            <td>12 May 2017</td>
                                            <td><i class="fas fa-eye view-icon" data-toggle="modal" data-target="#viewModal"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Messsy</td>
                                            <td>53275532</td>
                                            <td>15 May 2017</td>
                                            <td><i class="fas fa-eye view-icon" data-toggle="modal" data-target="#viewModal"></i></td>
                                        </tr>
                                        <tr>
                                            <td>John</td>
                                            <td>53275533</td>
                                            <td>14 May 2017</td>
                                            <td><i class="fas fa-eye view-icon" data-toggle="modal" data-target="#viewModal"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Peter</td>
                                            <td>53275534</td>
                                            <td>16 May 2017</td>
                                            <td><i class="fas fa-eye view-icon" data-toggle="modal" data-target="#viewModal"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Dave</td>
                                            <td>53275535</td>
                                            <td>20 May 2017</td>
                                            <td><i class="fas fa-eye view-icon" data-toggle="modal" data-target="#viewModal"></i></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>


                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="viewModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="viewModalLabel">Transaction Details</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group">
                                                <label for="profile">Profile</label>
                                                <input type="text" class="form-control" id="profile" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="vatNo">VatNo.</label>
                                                <input type="text" class="form-control" id="vatNo" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="created">Created</label>
                                                <input type="text" class="form-control" id="created" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="status">Status</label>
                                                <input type="text" class="form-control" id="status" readonly>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Add more form containers here for other options -->
                    </div>
                </div>

            </div>
        </div>


        @endsection