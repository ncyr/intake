@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Additional Installations & Integration</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>Please tell us if you will be adding on to your base POS installation.</p>
                    <small id="companyHelp" class="form-text text-muted">We'll never share your information with anyone else.</small><br>
                    <form>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="ship-home">
                            <label class="form-check-label" for="ship-home">I will be using Paychex</label>
                        </div>
                        
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="ship-home">
                            <label class="form-check-label" for="ship-home">I will be using ADP</label>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="ship-home">
                            <label class="form-check-label" for="ship-home">I will be using some other payroll company.</label>
                        </div>

                        <div class="form-group">
                            <label for="company_name">Payroll Company</label>
                            <input type="text" class="form-control" id="company_name" aria-describedby="companyHelp">
                        </div>
                        <div class="form-group">
                            <label for="company_name">Payroll Contact Phone</label>
                            <input type="text" class="form-control" id="company_name" aria-describedby="companyHelp">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button><button onclick="window.history.go(-1); return false;" class="btn btn-danger float-right">Back</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
