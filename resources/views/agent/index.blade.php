@extends('inc.main')
@section('main')
    <nav class="breadcrumb">
        <a class="breadcrumb-item" href="{{ url('/') }}">Dashboard</a>
        <span class="breadcrumb-item active">Add Agent In agent</span>
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
                                        <label for="companylist">Select Company</label>
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
                                        <label for="departmentlist">Department List</label>
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
                                        <label for="agent_name">Agent Name</label>
                                        <input type="text" class="form-control" name="agent_name"
                                            id="agent_name" aria-describedby="helpId" placeholder="">
                                        <small id="helpId" class="form-text text-muted">Help text</small>
                                    </div>
                                </div>
                                <div class="w-100"></div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="agent_definition">Agent Definition</label>
                                        <input type="text" class="form-control" name="agent_name" id="agent_name"
                                            aria-describedby="helpId" placeholder="">
                                        <small id="helpId" class="form-text text-muted">Help text</small>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="agent_email">agent Email</label>
                                        <input type="email" class="form-control" name="agent_email" id="agent_email"
                                            aria-describedby="helpId" placeholder="">
                                        <small id="helpId" class="form-text text-muted">Help text</small>
                                    </div>
                                </div>
                                <div class="w-100"></div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="agent_number">agent Number</label>
                                        <input type="text" class="form-control" name="agent_number" id="agent_number"
                                            aria-describedby="helpId" placeholder="">
                                        <small id="helpId" class="form-text text-muted">Help text</small>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="agent_fax">agent FAX</label>
                                        <input type="text" class="form-control" name="agent_number" id="agent_number"
                                            aria-describedby="helpId" placeholder="">
                                        <small id="helpId" class="form-text text-muted">Help text</small>
                                    </div>
                                </div>
                                <div class="w-100"></div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="agent_bio">agent Bio</label>
                                        <textarea class="form-control" name="agent_bio" id="agent_bio" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="w-100"></div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="agent_address">agent Address</label>
                                        <textarea class="form-control" name="agent_address" id="agent_address" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="w-100"></div>
                                <div class="col">
                                  <button type="submit" class="btn btn-primary">Create Agent</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
