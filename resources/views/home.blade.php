@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Welcome!
                    <p>This process streamlines some of the data you submit to our support system such as your business name & contacts.
                    At the end you'll receive an organized report you can print for your company reference.</p>
                    <p>Included are questions that would make up the initial set up of your POS system. We will receive a report with this information 
                    sent to the programmer once you have completed all steps.</p>
                    
                    <p>This process...</p>
                    <ul>
                        <li>Validates - It provides us correct information we request for this setup with less mistakes.</li>
                        <li>Is Mobile - No additional software such Adobe Acrobate needed to complete this process, use any web browser from any computer or device.</li>
                        <li>Is Clean & Standardized - Makes it easy to ask the right questions needed to program your POS. It does not leave anything important out and uses no handwriting.</li>
                        <li>Completes Approval - You'll approve and sign off on your menu programming here especially things like tax rates, no need to fax, scanner, or use online signing services.</li>
                        <li>Syncs to Support- Some of the information you submit such as your company information will sync into our client support system. You will also be able to update your contacts here as you hire and fire, for our support team live reference.</li>
                        <li>Verifies Authority - Your contacts will receive email or sms verifications so that we know it's them on the phone.</li>
                        <li>Is Paperless - More o2 for everyone!</li>
                    </ul>
                    <!-- <div class="card m-3">
                        <h4 class="m-2"><strong class="mr-auto">Company Info</strong>
                        <small class="text-muted float-right">Step 1</small></h4>
                        </button>
                        <small class="m-3">Submit your company name, address phone, and other information we'll input to our client management system as well as your POS.</small>
                        <a href="company_setup" class="btn btn-success" style="width: 100%">Begin</a>
                    </div>
                    <div class="card m-3">
                        <h4 class="m-2"><strong class="mr-auto">Site Contacts</strong>
                        <small class="text-muted float-right">Step 2</small></h4>
                        </button>
                        <small class="m-3">Who can approve major decisions for this business? Who should have access as another administrator?</small>
                        <a href="company_contacts" class="btn btn-success" style="width: 100%">Begin</a>
                    </div>
                    <div class="card m-3">
                        <h4 class="m-2"><strong class="mr-auto">Store Settings</strong>
                        <small class="text-muted float-right">Step 3</small></h4>
                        </button>
                        <small class="m-3">Submit your company name, address phone, and other information we'll input to our client management system as well as your POS.</small>
                        <a href="store_settings" class="btn btn-success" style="width: 100%">Begin</a>
                    </div>
                    <div class="card m-3">
                        <h4 class="m-2"><strong class="mr-auto">Add-ons and 3rd Party Software.</strong>
                        <small class="text-muted float-right">Step 4</small></h4>
                        </button>
                        <small class="m-3">Do you have plans to use 3rd party integration? Payroll exports? Property Mangement Systems?</small>
                        <a href="add_ons" class="btn btn-success" style="width: 100%">Begin</a>
                    </div>
                    <div class="card m-3">
                        <h4 class="m-2"><strong class="mr-auto">Management Access</strong>
                        <small class="text-muted float-right">Step 5</small></h4>
                        </button>
                        <small class="m-3">Tell us who's approved to make edcdecisions for the site related to the POS when calling or emailing for support. <BR>
                        <b>We use e-mail or text message verification to approve changes to the system.</b></small>
                        <a href="company_setup" class="btn btn-success" style="width: 100%">Begin</a>
                    </div>
                    <div class="card m-3">
                        <h4 class="m-2"><strong class="mr-auto">Taxes</strong>
                        <small class="text-muted float-right">Step 6</small></h4>
                        </button>
                        <small class="m-3">Submit your tax groups and rates to assign to items. Items require tax rates before they may be created in Aloha. You must also approve of the tax rate you submit.</small>
                        <a href="company_setup" class="btn btn-success" style="width: 100%">Begin</a>
                    </div>
                    <div class="card m-3">
                        <h4 class="m-2"><strong class="mr-auto">Categories</strong>
                        <small class="text-muted float-right">Step 7</small></h4>
                        </button>
                        <small class="m-3">Submit the categories you'd like to see in reports.</small>
                        <a href="company_setup" class="btn btn-success" style="width: 100%">Begin</a>
                    </div>

                    <div class="card m-3">
                        <h4 class="m-2"><strong class="mr-auto">Submenus</strong>
                        <small class="text-muted float-right">Step 8</small></h4>
                        </button>
                        <small class="m-3">Where will you place your items.</small>
                        <a href="company_setup" class="btn btn-success" style="width: 100%">Begin</a>
                    </div>
                    <div class="card m-3">
                        <h4 class="m-2"><strong class="mr-auto">Modifiers & Pricing</strong>
                        <small class="text-muted float-right">Step 9</small></h4>
                        </button>
                        <small class="m-3">Submit the items for your modifier menus.</small>
                        <a href="company_setup" class="btn btn-success" style="width: 100%">Begin</a>
                    </div>
                    <div class="card m-3">
                        <h4 class="m-2"><strong class="mr-auto">Items & Pricing</strong>
                        <small class="text-muted float-right">Step 10</small></h4>
                        </button>
                        <small class="m-3">Submit the items for you menu and tell us which of your submenu it will be placed on.</small>
                        <a href="company_setup" class="btn btn-success" style="width: 100%">Begin</a>
                    </div>

                    <div class="card m-3">
                        <h4 class="m-2"><strong class="mr-auto">Upload Logos</strong>
                        <small class="text-muted float-right">Step 11</small></h4>
                        </button>
                        <small class="m-3">Upload the logo you would like to use for floating "screensaver" logo as well as guest checks.<br><br>
                        <i>Please make sure to use a black background for the floating logo and a white one for the guest check.</i><br><br></small>
                        <a href="company_setup" class="btn btn-success" style="width: 100%">Begin</a>
                    </div> -->
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
