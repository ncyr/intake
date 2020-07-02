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
                        <h4>Hours of Operation</h4>
                        <hr>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="24_hours">
                            <label class="form-check-label" for="24_hours">We're a 24 hour operation.</label>
                        </div>
                        <div id="hours_of_op">
                            <div class="form-group">
                                <label for="open_time">Earliest Possible Open Time:</label>
                                <input type="time" class="form-control" id="open_time" aria-describedby="companyHelp" required>
                            </div>
                            <div class="form-group">
                                <label for="close_time">Latest Possible Closing Time:</label>
                                <input type="time" class="form-control" id="open_time" aria-describedby="companyHelp" required>
                            </div>
                        </div>
                        <h4>Payroll Setup</h4>
                        <hr>
                        <div class="form-group">
                        <label for="start_of_week">First Day of Pay Period:</label>
                        <select class="form-control" id="start_of_week" required>
                            <option>Sunday</option>
                            <option>Monday</option>
                            <option>Tuesday</option>
                            <option>Wednesday</option>
                            <option>Thursday</option>
                            <option>Friday</option>
                            <option>Saturday</option>
                        </select>
                        </div>
                        <h4>Day Parts</h4>
                        
                        <form>
                            <div class="form-group">
                                <select class="custom-select " multiple>
                                    <option selected>Breakfast @ 6:00am</option>
                                    <option value="1">Lunch @ 11:00am</option>
                                    <option value="2">Dinner @ 4:00pm</option>
                                    <option value="3">Late Night @ 9:00pm</option>
                                </select>
                            </div>
                            
                        </form>
                        <hr>
                        <label class="sr-only" for="inlineFormInputName2">Name</label>
                        <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Enter the name of your daypart such as: Breakfast">

                        <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>


                        <div class="form-check mb-2 mr-sm-2">
                        <div class="form-group">
                            <label for="close_time">Daypart Start Time:</label>
                            <input type="time" class="form-control" id="open_time" aria-describedby="companyHelp">
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Add Daypart</button> <button type="submit" class="btn btn-primary mb-2 float-right">Remove Selected Daypart</button><br>
                        <hr>
                       
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button><button onclick="window.history.go(-1); return false;" class="btn btn-danger float-right">Back</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
