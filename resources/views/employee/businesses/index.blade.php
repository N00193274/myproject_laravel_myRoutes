@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> 
                    Businesses 
                </div>
                <div class="card-body">
                    @if (count($businesses)=== 0)
                        <p> There are no Businesses </p>
                    @else 
                    <table id="table-businesses" class="table table-hover">
                        <thead>
                            <th>Name</th>
                            <th>location</th>
                            <th>Contact Number</th>
                            <th>Contact Email<th>
                            <th></th>
                            </thead>
                            <tbody>
                              @foreach ($businesses as $business)
                                <tr data-id="{{ $business->id}}">
                                   <td>{{ $business->name }} </td>
                                   <td>{{ $business->location }}</td>
                                   <td>{{ $business->Contact_number}}</td>
                                   <td>{{ $business->Contact_email}}</td>

                                   <td>
                                        <a href="{{ route('employee.businesses.show', $business->id) }}" class="btn btn-primary">View</a>
                                        </form>
                                    </td>
                                </tr>
                               @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>                
            </div>
        </div>
    </div>
</div>

@endsection