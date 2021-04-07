@extends('inc.backend.page')

@section('content')

<div class="main-content m-1">
@if(session('msg'))
    <div class="alert alert-success alert-dismissible text-center">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                {{ session('msg') }}
           </div>
    @endif

    <div class="page-content p-0">
                    <div class="container-fluid">                        
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Responsive tables</h4>        
                                        <div class="table-responsive mt-5">
                                            <table class="table w-75 table-bordered mb-0">
                                                <thead class="bg-dark text-white">
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Name</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($categories as $category)
                                                    <tr>
                                                        <th scope="row">{{ $category->id }}</th>
                                                        <td>{{ $category->name }}</td>
                                                        <td>
                                                            <a href="/edit-category/{{ $category->id }}" class="btn btn-warning">Update</a>
                                                            <a href="" class="btn btn-danger">Delete</a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                    </div> <!-- container-fluid -->
    </div>
                <!-- End Page-content -->

@endsection