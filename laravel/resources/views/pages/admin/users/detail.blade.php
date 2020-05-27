@extends('layouts.admin')

@push('styles')
  <!-- Custom styles for this page -->
  <link href="{{ asset('backend/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Profiles User</h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="{{ url()->previous() }}" class="btn btn-sm btn-secondary">
            <i class="fas fa-angle-left"></i> Back
        </a>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tbody>
                <table class="table table-bordered">
                    <tr>
                        <td>Id</td>
                        <td>{{ $user->profile->id }}</td>
                    </tr>
                    <tr>
                        <td>Fullname</td>
                        <td>{{ $user->profile->fullname }}</td>
                    </tr>
                    <tr>
                        <td>Bio</td>
                        <td>{{ $user->profile->bio }}</td>
                    </tr>
                    <tr>
                        <td>Following</td>
                        <td>{{ $user->profile->following }}</td>
                    </tr>
                    <tr>
                        <td>Followers</td>
                        <td>{{ $user->profile->followers }}</td>
                    </tr>
                </table>
            </tbody>
        </table>
    </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection

@push('scripts')
    <!-- Page level plugins -->
    <script src="{{ asset('backend/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('backend/js/demo/datatables-demo.js') }}"></script>
@endpush