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
                                                           
                                        <a href="{{ route('manager.businesses.show', $business->id) }}" class="btn btn-default">View</a>
                                        <a href="{{ route('manager.businesses.edit', $business->id) }}" class="btn btn-warning">Edit</a>
                                        <form style="display:inline-block" method="POST"
                                        action="{{ route('manager.businesses.destroy', $business->id) }}">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="form-control btn btn-danger">Delete</a>
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