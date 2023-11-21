@extends('inc.main')
@section('main')
    <nav class="breadcrumb">
        <a class="breadcrumb-item" href="{{ url('/') }}">Dashboard</a>
        <span class="breadcrumb-item active">Add Department In Company</span>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card text-left">
                    <div class="card-body">
                        <form action="#">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="companylist">Department Company</label>
                                        <select class="form-control" name="companylist" id="companylist">
                                            <option>TEST</option>
                                            <option>TEST</option>
                                            <option>TEST</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="w-100"></div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="department_name">Department Name</label>
                                        <input type="text" class="form-control" name="department_name"
                                            id="department_name" aria-describedby="helpId" placeholder="">
                                        <small id="helpId" class="form-text text-muted">Help text</small>
                                    </div>
                                </div>
                                <div class="w-100"></div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="hod_name">HOD Name</label>
                                        <input type="text" class="form-control" name="hod_name" id="hod_name"
                                            aria-describedby="helpId" placeholder="">
                                        <small id="helpId" class="form-text text-muted">Help text</small>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="hod_email">HOD Email</label>
                                        <input type="email" class="form-control" name="hod_email" id="hod_email"
                                            aria-describedby="helpId" placeholder="">
                                        <small id="helpId" class="form-text text-muted">Help text</small>
                                    </div>
                                </div>
                                <div class="w-100"></div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="hod_number">HOD Number</label>
                                        <input type="text" class="form-control" name="hod_number" id="hod_number"
                                            aria-describedby="helpId" placeholder="">
                                        <small id="helpId" class="form-text text-muted">Help text</small>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="hod_fax">HOD FAX</label>
                                        <input type="text" class="form-control" name="hod_number" id="hod_number"
                                            aria-describedby="helpId" placeholder="">
                                        <small id="helpId" class="form-text text-muted">Help text</small>
                                    </div>
                                </div>
                                <div class="w-100"></div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="department_bio">Department Bio</label>
                                        <textarea class="form-control" name="department_bio" id="department_bio" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="w-100"></div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="department_address">Department Address</label>
                                        <textarea class="form-control" name="department_address" id="department_address" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="w-100"></div>
                                <div class="col">
                                  <button type="submit" class="btn btn-primary">Create Department</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
