@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Company Setup</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>Please tell us more about your business and how to reach you in an emergency.</p>
                    <small id="companyHelp" class="form-text text-muted">We'll never share your information with anyone else.</small><br>
                    <form>
                        <div class="form-group">
                            <label for="location_name">Restaurant Name</label>
                            <input type="text" class="form-control" id="location_name" aria-describedby="restaurantHelp" required>
                        </div>
                        <div class="form-group">
                            <label for="company_name">Corporate Business Name</label>
                            <input type="text" class="form-control" id="company_name" aria-describedby="companyHelp" required>
                        </div>
                        <div class="form-group">
                            <label for="company_phone">Main Phone:</label>
                            <input type="phone" class="form-control" id="company_phone" required>
                            <small id="companyHelp" class="form-text text-muted">Please use a number someone on-site would answer if we need to call. No hotlines please.</small>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="company_address1">Address:</label>
                            <input type="input" class="form-control" id="company_address1" required>
                        </div>
                        <div class="form-group">
                            <label for="company_address2">Suite#:</label>
                            <input type="input" class="form-control" id="company_address2">
                        </div>
                        <div class="form-group">
                            <label for="company_city">City:</label>
                            <input type="input" class="form-control" id="company_city" required>
                        </div>
                        <div class="form-group">
                            <label for="company_state">State/Province:</label>
                            <input type="input" class="form-control" id="company_state" required>
                        </div>
                        <div class="form-group">
                            <label for="company_zip">Zipcode:</label>
                            <input type="input" class="form-control" id="company_zip" required>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="company_url">Website URL:</label>
                            <input type="input" class="form-control" id="company_url">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="ship-home">
                            <label class="form-check-label" for="ship-home">Ship all orders and RMA to this address</label>
                        </div>
                        <hr>
                        <div id="ship-to">
                            <div class="form-group">
                                <label for="company_name">Shipping Name</label>
                                <input type="text" class="form-control" id="company_name" aria-describedby="companyHelp">
                            </div>
                            <div class="form-group">
                                <label for="company_address1">Ship Address:</label>
                                <input type="input" class="form-control" id="company_address1">
                            </div>
                            <div class="form-group">
                                <label for="company_address2">Suite#:</label>
                                <input type="input" class="form-control" id="company_address2">
                            </div>
                            <div class="form-group">
                                <label for="company_city">City:</label>
                                <input type="input" class="form-control" id="company_city">
                            </div>
                            <div class="form-group">
                                <label for="company_state">State:</label>
                                <input type="input" class="form-control" id="company_state">
                            </div>
                            <div class="form-group">
                                <label for="company_zip">Zipcode:</label>
                                <input type="input" class="form-control" id="company_zip">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="live_date">Proposed Live Date:</label>
                            <input type="date" class="form-control" id="live_date">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button><button onclick="window.history.go(-1); return false;" class="btn btn-danger float-right">Back</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
