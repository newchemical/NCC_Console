@extends('inc.main')
@section('main')
<nav class="breadcrumb">
    <a class="breadcrumb-item" href="{{url('/')}}">Dashboard</a>
    <span class="breadcrumb-item active">Employee Register</span>
</nav>

<div class="container">
    <div class="card text-left">
      <div class="card-body">
       <form action="{{route('registerEmployee')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col">
                <div class="form-group">
                  <label for="fname">First Name: </label>
                  <input type="text"
                    class="form-control" name="fname" id="fname" aria-describedby="helpId" placeholder="">
                  @error('fname')
                  <small id="helpId" class="form-text text-muted">{{$message}}</small>
                  @enderror
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                  <label for="lname">Lest Name: </label>
                  <input type="text"
                    class="form-control" name="lname" id="lname" aria-describedby="helpId" placeholder="">
                    @error('lname')
                    <small id="helpId" class="form-text text-muted">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="w-100"></div>
            <div class="col">
                <div class="form-group">
                  <label for="fatherName">Father Name: </label>
                  <input type="text"
                    class="form-control" name="fatherName" id="fatherName" aria-describedby="helpId" placeholder="">
                    @error('fatherName')
                    <small id="helpId" class="form-text text-muted">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="w-100"></div>
            <div class="col">
                <div class="form-group">
                  <label for="email">Email: </label>
                  <input type="email"
                    class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="">
                    @error('email')
                    <small id="helpId" class="form-text text-muted">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                  <label for="phoneNumber">Phone No: </label>
                  <input type="text"
                    class="form-control" name="phoneNumber" id="phoneNumber" aria-describedby="helpId" placeholder="">
                    @error('phoneNumber')
                    <small id="helpId" class="form-text text-muted">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="w-100"></div>
            <div class="col">
                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea class="form-control" id="address" name="address" rows="3"></textarea>
                    @error('address')
                    <small id="helpId" class="form-text text-muted">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="w-100"></div>
            <div class="col">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
        </div>

       </form>
      </div>
    </div>
</div>
    
@endsection