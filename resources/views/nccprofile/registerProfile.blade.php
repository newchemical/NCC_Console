@extends('inc.main')
@section('main')
    <nav class="breadcrumb">
        <a class="breadcrumb-item" href="{{url('/')}}">Dashboard</a>
        <span class="breadcrumb-item active">NCC Profile</span>
    </nav>
    <div class="container">
        <div class="card text-left">
          <div class="card-body">
            <form action="{{route('profileUpdate')}}" method="POST">
                @csrf
            <div class="row">
                <div class="col">
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text"
                        class="form-control" name="name" id="name" value="{{$profile->name}}" aria-describedby="helpId" placeholder="">
                      @error('name')
                      <small id="helpId" class="form-text text-muted">{{$message}}</small>
                      @enderror
                    </div>
                </div>
                <div class="w-100"></div>
                <div class="col">
                    <div class="form-group">
                      <label for="email">Email:</label>
                      <input type="email"
                        class="form-control" name="email" value="{{$profile->email}}" id="email" aria-describedby="helpId" placeholder="">
                      @error('email')
                      <small id="helpId" class="form-text text-muted">{{$message}}</small>
                      @enderror
                    </div>
                </div>
                <div class="w-100"></div>
                <div class="col">
                    <div class="form-group">
                      <label for="phoneno">Phone no:</label>
                      <input type="text"
                        class="form-control" name="phoneno" value="{{$profile->phoneno}}" id="phoneno" aria-describedby="helpId" placeholder="">
                      @error('phoneno')
                      <small id="helpId" class="form-text text-muted">{{$message}}</small>
                      @enderror
                    </div>
                </div>
                <div class="w-100"></div>
                <div class="col">
                    <div class="form-group">
                      <label for="website">website:</label>
                      <input type="url"
                        class="form-control" name="website" value="{{$profile->website}}" id="website" aria-describedby="helpId" placeholder="">
                      @error('website')
                      <small id="helpId" class="form-text text-muted">{{$message}}</small>
                      @enderror
                    </div>
                </div>
                <div class="w-100"></div>
                <div class="col">
                    <div class="form-group">
                      <label for="gst">GST:</label>
                      <input type="number"
                        class="form-control" name="gst" value="{{$profile->gst}}" id="gst" aria-describedby="helpId" placeholder="">
                      @error('gst')
                      <small id="helpId" class="form-text text-muted">{{$message}}</small>
                      @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                      <label for="profit">profit %:</label>
                      <input type="number"
                        class="form-control" name="profit" value="{{$profile->profit}}" id="profit" aria-describedby="helpId" placeholder="">
                      @error('profit')
                      <small id="helpId" class="form-text text-muted">{{$message}}</small>
                      @enderror
                    </div>
                </div>
                <div class="w-100"></div>
                <div class="col">
                    <div class="form-group">
                      <label for="city">City:</label>
                      <input type="text"
                        class="form-control" name="city" value="{{$profile->city}}" id="city" aria-describedby="helpId" placeholder="">
                      @error('city')
                      <small id="helpId" class="form-text text-muted">{{$message}}</small>
                      @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                      <label for="zip">zip:</label>
                      <input type="text"
                        class="form-control" name="zip" value="{{$profile->zip}}" id="zip" aria-describedby="helpId" placeholder="">
                      @error('zip')
                      <small id="helpId" class="form-text text-muted">{{$message}}</small>
                      @enderror
                    </div>
                </div>
                <div class="w-100"></div>
                <div class="col">
                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea class="form-control" name="address" placeholder="{{$profile->address}}" id="address" rows="3"></textarea>
                      @error('address')
                      <small id="helpId" class="form-text text-muted">{{$message}}</small>
                      @enderror
                    </div>
                </div>
                <div class="w-100"></div>
                <div class="col d-flex justify-content-between">
                    <a name="" id="" class="btn btn-primary" href="{{url()->previous()}}" role="button">Go Back</a>
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </div>
            </form>
          </div>
        </div>
    </div>
@endsection