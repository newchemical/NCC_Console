@extends('inc.main')
@section('main')
    <nav class="breadcrumb">
        <a class="breadcrumb-item" href="{{url('/')}}">Dashboard</a>
        <span class="breadcrumb-item active">Company List</span>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-end my-2">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modelId">
                  Add Compsny Category
                </button>
                
                <!-- Modal -->
                <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                            </div>
                            <div class="modal-body">
                                <form action="#">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                              <label for="category_name">Category Name</label>
                                              <input type="text"
                                                class="form-control" name="category_name" id="category_name" aria-describedby="helpId" placeholder="">
                                              <small id="helpId" class="form-text text-muted">Help text</small>
                                            </div>
                                        </div>
                                        <div class="w-100"></div>
                                        <div class="col">
                                            <button type="submit" class="btn btn-primary">Add category</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card text-left">
          <div class="card-body">
            <div class="row">
                <table class="table table-striped table-inverse table-responsive table-fixed">
                    <thead class="thead-inverse">
                        <tr>
                            <th>Sr</th>
                            <th>Name</th>
                            <th>Email</th> 
                            <th>Contact No:</th> 
                            <th>Country</th> 
                            <th>City</th> 
                            <th>Zip</th> 
                            <th>Complete Adress</th> 
                            <th>Category</th> 
                            <th>Action</th> 
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($company as $list)
                            <tr>
                                <td scope="row">{{$list['id']}}</td>
                                <td scope="row">{{$list['name']}}</td>
                                <td scope="row">{{$list['email']}}</td>
                                <td scope="row">{{$list['contactnumber']}}</td>
                                <td scope="row">{{$list['country']}}</td>
                                <td scope="row">{{$list['city']}}</td>
                                <td scope="row">{{$list['zip']}}</td>
                                <td scope="row">{{$list['adress']}}</td>
                                <td scope="row">{{$list['category']}}</td>
                                
                                <td>
                                    <a class="btn btn-primary" href="#" role="button">del</a>
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