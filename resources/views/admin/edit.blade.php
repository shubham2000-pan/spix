@extends('layouts.admin.app')
@section('content')

<div class="content-body">
<div class="container-fluid">
<!-- row -->

<div class="row">
    <div class="col-xl-6 col-xxl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit User</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form action="{{ url('update')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $result->id}}">
                        <div class="row">
                        <div class="form-group col-xl-6 col-xxl-6  offset-3">
                            <input type="text" class="form-control input-rounded" name="name" value="{{ $result->name}}" placeholder="Enter name" required>
                        </div>
                        <div class="form-group col-xl-6 col-xxl-6  offset-3">
                            <input type="email" class="form-control input-rounded" name="email" value="{{ $result->email}}" placeholder="Enter email" required>
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