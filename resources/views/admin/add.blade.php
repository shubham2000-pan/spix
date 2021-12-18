@extends('layouts.admin.app')
@section('content')

<div class="content-body">
<div class="container-fluid">
<!-- row -->
@if (session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session('success')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
    @if (session('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{session('error')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<div class="row">
    <div class="col-xl-6 col-xxl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Add user</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form action="{{ url('store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                        <div class="form-group col-xl-6 col-xxl-6  offset-3">
                            <input type="text" class="form-control input-rounded" name="name" placeholder="Enter name" required>
                        </div>
                        <div class="form-group col-xl-6 col-xxl-6  offset-3">
                            <input type="email" class="form-control input-rounded" name="email" placeholder="Enter Email" required>
                        </div>

                        <div class="form-group col-xl-6 col-xxl-6  offset-3">
                            <input type="password" class="form-control input-rounded" name="password" placeholder="Enter Password" required>
                        </div>
                        
                        <div class="form-group col-xl-6 col-xxl-6  offset-5">
                        <input type="submit" class="btn btn-secondary" name="submit" value="Submit"> 
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
</div>

@endsection

@section('script')

@endsection