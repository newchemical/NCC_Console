@extends('inc.main')
@section('main')
    <div class="alert alert-primary" role="alert">
        <strong>primary</strong>
    </div>
    <script>
        $(document).ready(function() {
            alert("Your Storage is not available");
        });
    </script>
@endsection
