@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header">
                Business:  {{ $business->name }}
                </div>
                <div class="card-body">
                <table id="table-businesses" class="table table-hover">
                    <tbody>
                        <tr>
                            <td>Name</td>
                            <td>{{ $business->name }}</td>
                        </tr>
                        <tr>
                            <td>Location</td>
                            <td>{{ $business->location }}</td>
                        </tr>
                        <tr>
                            <td>Office Number</td>
                            <td>{{ $business->Contact_number }}</td>
                        </tr>
                        <tr>
                            <td>Office email</td>
                            <td>{{ $business->Contact_email }}</td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection