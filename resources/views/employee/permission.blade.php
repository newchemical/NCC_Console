@extends('inc.main')
@section('main')
<nav class="breadcrumb">
    <a class="breadcrumb-item" href="{{url('/')}}"></a>
    <span class="breadcrumb-item active">Permissions</span>
</nav>
    
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4>Give Permissions</h4>
            <hr>
            <p>First Name: <strong>{{$emp['fname']}}</strong></p>
            <p>Lest Name: <strong>{{$emp['lname']}}</strong></p>
            <p>Father Name: <strong>{{$emp['fatherName']}}</strong></p>
            <p>Email Address: <strong>{{$emp['email']}}</strong></p>
            <p>Phone Number: <strong>{{$emp['phoneNumber']}}</strong></p>
            <p>Home Address: <strong>{{$emp['address']}}</strong></p>
            <p>Assigned Permissions: <strong>{{$emp['role']}}</strong></p>
            <hr>
            <form action="{{route('updateEmployee',$emp['id'])}}" method="POST">
                @csrf
                <div class="row d-flex justify-contant-baseline align-items-center">
                    <div class="col">
                        <div class="form-group">
                          <label for="permission">Give Permissions</label>
                          <select class="form-control" name="permission" id="permission">
                            <option value="supervisor">Supervisor</option>
                            <option value="none">Roll Back</option>
                          </select>
                        </div>
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-footer">
            <a name="" id="" class="btn btn-primary" href="{{url()->previous()}}" role="button">GO Back</a>
        </div>
    </div>
</div>

@endsection