@extends('layouts.app')

@section ('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="card">
          <div class="card-header">
            Edit Business
          </div>
          <div class="card-body">
          <!-- this block is ran if the validation code in the controller fails
          this code looks after displaying the correct error message to the user -->
            @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif
            <form method="POST" action="{{ route('manager.businesses.update', $business->id)}}">
              <input type="hidden" name="_token" value="{{  csrf_token()  }}">
              <input type="hidden" name="_method" value="PUT">

              <div class="form-group">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $business->id) }}" />
              </div>
              <div class="form-group">
                <label for="location">Location</label>
                <input type="text" class="form-control" id="location" name="location" value="{{ old('location', $business->location) }}" />
              </div>
              <div class="form-group">
                <label for="Contact_phone">Contact Phone</label>
                <input type="text" class="form-control" id="Contact_phone" name="Contact_phone" value="{{ old('Contact_phone', $business->Contact_phone) }}" />
              </div>
              <div class="form-group">
                <label for="Contact_email">Contact Email</label>
                <input type="email" class="form-control" id="Contact_email" name="Contact_email" value="{{ old('Contact_email', $business->Contact_email) }}" />
              </div>

              <a href="{{ route('manager.businesses.index') }}" class="btn btn-outline">Cancel</a>
              <button type="submit" class="btn btn-primary float-right">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection