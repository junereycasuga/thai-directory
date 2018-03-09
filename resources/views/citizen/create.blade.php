@extends('layout')
@section('content')
    <form method="POST">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">First Name</label>
            <div class="col-sm-10">
                <input type="text" name="first_name" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Last Name</label>
            <div class="col-sm-10">
                <input type="text" name="last_name" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Gender</label>
            <div class="col-sm-10">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" value="male">
                    <label class="form-check-label">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" value="female">
                    <label class="form-check-label">Female</label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Birth Date</label>
            <div class="col-sm-10">
                <input type="date" name="birth_date" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            @csrf
            <input type="submit" value="Save" class="btn btn-primary">
        </div>
    </form>
@endsection
