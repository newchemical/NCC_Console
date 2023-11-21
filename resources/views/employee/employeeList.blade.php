@extends('inc.main')
@section('main')
    <nav class="breadcrumb">
        <a class="breadcrumb-item" href="{{url('/')}}">Dashboard</a>
        <span class="breadcrumb-item active">Employee List</span>
    </nav>
    <div class="container">
        <div class="card text-left">
          <div class="card-body">
            <div class="row">
                <table class="table table-striped table-inverse table-responsive table-fixed">
                    <thead class="thead-inverse">
                        <tr>
                            <th>Sr</th>
                            <th>First Name</th>
                            <th>Lest Name</th> 
                            <th>Father Name</th> 
                            <th>Email</th> 
                            <th>Phone Number</th> 
                            <th>Address</th> 
                            <th>Role</th> 
                            <th>Action</th> 
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($employee as $list)
                            <tr>
                                <td scope="row">{{$list['id']}}</td>
                                <td>{{$list['fname']}}</td>
                                <td>{{$list['lname']}}</td>
                                <td>{{$list['fatherName']}}</td>
                                <td>{{$list['email']}}</td>
                                <td>{{$list['phoneNumber']}}</td>
                                <td>{{$list['address']}}</td>
                                <td>{{$list['role']}}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{route('editEmployee',$list['id'])}}" role="button">Permissions</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                </table>
            </div>
          </div>
        </div>
    </div>
@endsection