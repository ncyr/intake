@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Company Contact Setup</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>Please tell us more about your business and how to reach you in an emergency.</p>
                    <small id="companyHelp" class="form-text text-muted">We'll never share your information with anyone else.</small><br>
                    <form>
                        <div class="form-group container">
                            <h4>Owner Name</h4>
                            <p>Please tell us, who owns this business?</p>
                            <div class="row">
                                <div class="col-sm">
                                    <label for="company_main_contact_first_name">First Name:</label>
                                    <input type="phone" class="form-control" id="company_main_contact_first_name" required>
                                </div>
                                <div class="col-sm">
                                        <label for="company_main_contact">Last Name:</label>
                                        <input type="phone" class="form-control" id="company_main_contact" required>
                                </div>
                                
                            </div>
                            
                        </div>
                        <div class="col-sm">
                            <label for="company_main_contact">E-mail:</label>
                            <input type="phone" class="form-control" id="company_main_contact" required>
                        </div>
                        <div class="col-sm">
                            <label for="company_main_contact">Main Phone:</label>
                            <input type="phone" class="form-control" id="company_main_contact" required>
                        </div><br>
                        <div class="col-sm">
                            <label for="company_main_contact">SMS/Text/Cell Number:</label>
                            <input type="phone" class="form-control" id="company_main_contact">
                            <small id="companyHelp" class="form-text text-muted">Caller verification text messages we send out to verify identification over the phone.</small>
                        </div><br>
 
                        <hr>
                        <div class="form-group container">
                            <h4>Property Expert</h4>
                            <p>Who is the main POS contact for this project?</p>
                            <div class="row">
                                <div class="col-sm">
                                    <label for="company_main_contact_first_name">First Name:</label>
                                    <input type="phone" class="form-control" id="company_main_contact_first_name">
                                </div>
                                <div class="col-sm">
                                        <label for="company_main_contact">Last Name:</label>
                                        <input type="phone" class="form-control" id="company_main_contact">
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-sm">
                            <label for="company_main_contact">E-mail:</label>
                            <input type="phone" class="form-control" id="company_main_contact">
                        </div>
                        <div class="col-sm">
                            <label for="company_main_contact">Main Phone:</label>
                            <input type="phone" class="form-control" id="company_main_contact">
                        </div><br>
                        <div class="col-sm">
                            <label for="company_main_contact">SMS/Text/Cell Number:</label>
                            <input type="phone" class="form-control" id="company_main_contact">
                            <small id="companyHelp" class="form-text text-muted">Caller verification text messages we send out to verify identification over the phone.</small>
                        </div><br>
                        
                        <hr>
                        <button type="submit" class="btn btn-primary">Submit</button><button onclick="window.history.go(-1); return false;" class="btn btn-danger float-right">Back</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
