@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">

        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <label class="font-weight-bold">Thai National ID:</label> {{ $citizen->getId() }}
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label class="font-weight-bold">First Name: </label> {{ $citizen->getFirstName() }}
                </div>
                <div class="col-md-6">
                    <label class="font-weight-bold">Last Name: </label> {{ $citizen->getLastName() }}
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label class="font-weight-bold">Gender: </label> {{ $citizen->getGender() }}
                </div>
                <div class="col-md-6">
                    <label class="font-weight-bold">Birth Date: </label> {{ $citizen->getBirthDate() }}
                </div>
            </div>
            <div class="row">
                <a href="{{ route('citizen::list') }}" class="btn btn-light">Back</a>
            </div>
        </div>
    </div>
@endsection
