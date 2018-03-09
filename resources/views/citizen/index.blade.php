@extends('layout')
@section('content')
    <div class="row">
        <div class="col-md-6"><h3>Citizens</h3></div>
        <div class="col-md-5">
            <form method="GET" class="float-right">
                <input type="text" name="searchString" placeholder="Search" class="form-control">
            </form>
        </div>
        <div class="col-md-1">
            <a href="{{ route('citizen::create') }}" class="btn btn-primary float-right">Create</a>
        </div>
    </div>
    <table class="table table-striped table-bordered table-hover table-sm">
        <thead class="thead-dark">
            <th>ID</th>
            <th>Name</th>
            <th>Birth Date</th>
            <th>Gender</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach($citizens as $citizen)
            <tr>
                <td>{{ $citizen->getId() }}</td>
                <td>{{ $citizen->getFullName() }}</td>
                <td>{{ $citizen->getBirthDate() }}</td>
                <td>{{ $citizen->getGender() }}</td>
                <td>
                    <a href="{{ route('citizen::details', ['id' => $citizen->getId()]) }}"
                       class="btn btn-primary btn-sm">View</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $citizens->links() }}
@endsection
