@extends('inc.main')
@section('main')
    <nav class="breadcrumb">
        <a class="breadcrumb-item" href="{{ url('/') }}">Dashboard</a>
        <span class="breadcrumb-item active">Product LIst</span>
    </nav>

    <div class="container">
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Item</th>
                            <th>Make</th>
                            <th>CAS No</th>
                            <th>CAT No</th>
                            <th>Pack Size</th>
                        </tr>
                    </thead>
                    <tbody id="body">
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $.ajax({
                type: "GET",
                url: "{{ route('productlist') }}",
                processData: false,
                contentType: false,
                success: function(data) {
                    if (data.length > 0) {
                        for (let index = 0; index < data.length; index++) {
                            $("#body").append(` <tr>
                                                <td>` + data[index]['name'] + `</td>
                                                <td>` + data[index]['make'] + `</td>
                                                <td>` + data[index]['casno'] + `</td>
                                                <td>` + data[index]['catno'] + `</td>
                                                <td>` + data[index]['packsize'] + `</td>
                                                </tr`)

                        }
                    } else {
                        $("#body").append(` <tr>
                                                <td colspan='5'><div class="alert alert-primary text-center" role="alert">
                                                    <strong>🫤 No Data Found</strong>
                                                </div></td>
                                                </tr`)
                    }
                },
                error: function(error) {
                    console.log(error.responseText);
                }
            });
        });
    </script>
@endsection
