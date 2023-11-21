@extends('inc.main')
@section('main')
    <nav class="breadcrumb">
        <a class="breadcrumb-item" href="{{ url('/') }}">Dashboard</a>
        <span class="breadcrumb-item active">Register Product</span>
    </nav>
    <div class="container">
        <div class="card text-left">
            <div class="card-body">
                {{-- $table->string('name')->nullable();
            $table->string('casno')->nullable();
            $table->integer('price')->nullable();
            $table->string('packsize')->nullable();
            $table->string('catno')->nullable();
            $table->integer('gst')->nullable();
            $table->integer('total')->nullable(); --}}
            <div class="row">
                <div class="col">
                  <div class="alert alert-success p-0" role="alert">
                    <strong id="output" class="m-0 p-0"></strong>
                  </div>
                </div>
            </div>
                <form id="productRegisterForm">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="name">Name:(required)</label>
                                <input type="text" class="form-control" name="name" id="name"
                                    aria-describedby="helpId" placeholder="">
                                @error('name')
                                    <small id="helpId" class="form-text text-muted">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col">
                            <div class="form-group">
                                <label for="casno">CAS No:(Optional)</label>
                                <input type="text" class="form-control" name="casno" id="casno"
                                    aria-describedby="helpId" placeholder="">
                                @error('casno')
                                    <small id="helpId" class="form-text text-muted">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="catno">CAT No:(Optional)</label>
                                <input type="text" class="form-control" name="catno" id="catno"
                                    aria-describedby="helpId" placeholder="">
                                @error('catno')
                                    <small id="helpId" class="form-text text-muted">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col">
                            <div class="form-group">
                                <label for="price">Make</label>
                                <input type="text" class="form-control" name="make" id="make"
                                    aria-describedby="helpId" placeholder="">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="price">Price:</label>
                                <input type="number" class="form-control" name="price" id="price"
                                    aria-describedby="helpId" placeholder="">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="packsize">Pack Size:</label>
                                <input type="text" class="form-control" name="packsize" id="packsize"
                                    aria-describedby="helpId" placeholder="">
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col">
                            <button type="submit" id="submitbtn" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#productRegisterForm').submit(function(event) {
                event.preventDefault();
                let form = $('#productRegisterForm')[0];
                let data = new FormData(form);
                // Get the CSRF token from the meta tag
                let csrfToken = $('meta[name="csrf-token"]').attr('content');

                // Include the CSRF token in the headers
                $.ajax({
                    type: "POST",
                    url: "{{ route('productRegister') }}",
                    data: data,
                    processData: false,
                    contentType: false,
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    success: function(data) {
                        $('#output').html(data.res).fadeIn().fadeOut(8000);
                        $('#submitbtn').prop('disabled', false);
                    },
                    error: function(error) {
                        console.log(error.responseText);
                    }
                });

                $('#submitbtn').prop('disabled', true);
            })
        });
    </script>
@endsection
