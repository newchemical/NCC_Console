@extends('inc.main')
@section('main')
<nav class="breadcrumb">
    <a class="breadcrumb-item" href="{{url('/')}}">Dashboard</a>
    <span class="breadcrumb-item active">Company Registration</span>
</nav>

<div class="container">
    <div class="card">
        <div class="card-body">
            <form action="{{route('companyRegister')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                          <label for="name">Company Name:</label>
                          <input type="text"
                            class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="">
                          @error('name')
                          <small id="helpId" class="form-text text-muted">{{$message}}</small>
                          @enderror
                        </div>
                    </div>
                    <div class="w-100"></div>
                    <div class="col">
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input type="text"
                            class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="">
                            @error('email')
                            <small id="helpId" class="form-text text-muted">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="w-100"></div>
                    <div class="col">
                        <div class="form-group">
                          <label for="contactnumber">Contact Number:</label>
                          <input type="text"
                            class="form-control" name="contactnumber" id="contactnumber" aria-describedby="helpId" placeholder="">
                            @error('contactnumber')
                            <small id="helpId" class="form-text text-muted">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="w-100"></div>
                    <div class="col">
                        <div class="form-group">
                          <label for="country">Country:</label>
                          <input type="text"
                            class="form-control" name="country" id="country" aria-describedby="helpId" placeholder="">
                            @error('country')
                            <small id="helpId" class="form-text text-muted">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                          <label for="state">State:</label>
                          <input type="text"
                            class="form-control" name="state" id="state" aria-describedby="helpId" placeholder="">
                            @error('state')
                            <small id="helpId" class="form-text text-muted">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                          <label for="city">City:</label>
                          <input type="text"
                            class="form-control" name="city" id="city" aria-describedby="helpId" placeholder="">
                            @error('city')
                            <small id="helpId" class="form-text text-muted">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                          <label for="zip">ZIP Code:</label>
                          <input type="text"
                            class="form-control" name="zip" id="zip" aria-describedby="helpId" placeholder="">
                            @error('zip')
                            <small id="helpId" class="form-text text-muted">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="w-100"></div>
                    <div class="col">
                        <div class="form-group">
                          <label for="website">website:</label>
                          <input type="url"
                            class="form-control" name="website" id="website" aria-describedby="helpId" placeholder="">
                            @error('website')
                            <small id="helpId" class="form-text text-muted">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                          <label for="category">Category (Buyer or Supplier)</label>
                          <select class="form-control" name="category" id="category">
                            <option value="buyer">Buyer</option>
                            <option value="supplier">Supplier</option>
                          </select>
                          @error('category')
                          <small id="helpId" class="form-text text-muted">{{$message}}</small>
                          @enderror
                        </div>
                    </div>
                    <div class="w-100"></div>
                    <div class="col">
                        <div class="form-group">
                          <label for="adress">Adress:</label>
                          <textarea class="form-control" name="adress" id="adress" rows="3"></textarea>
                          @error('adress')
                          <small id="helpId" class="form-text text-muted">{{$message}}</small>
                          @enderror
                        </div>
                    </div>
                    <div class="w-100"></div>
                    <div class="col">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
    
@endsection