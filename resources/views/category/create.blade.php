@extends('inc.backend.page')

@section('content')

<div class="main-content ml-1">
    @if(session('msg'))
    <div class="alert alert-success alert-dismissible text-center">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                {{ session('msg') }}
           </div>
    @endif
    <div class="page-content p-1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Create New Category</h4>
                                <form method="POST" action="{{ route('category.insert') }}">
                                    @csrf
                                    <div class="form-group row mb-4">
                                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="categoryName" class="form-control @error('categoryName') is-invalid @enderror" id="horizontal-firstname-input">
                                            @error('categoryName')
                                                <div class="alert alert-danger my-2">{{ $message }}</div>
                                            @enderror                                        
                                        </div>

                                    </div>
                                    <div class="form-group row justify-content-end">
                                        <div class="col-sm-9">
                                            <div>
                                                <button type="submit" name="createCategory" class="btn btn-primary w-md">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>               
            </div> <!-- container-fluid -->
        </div>
    </div>            <!-- End Page-content -->
</div>
@endsection