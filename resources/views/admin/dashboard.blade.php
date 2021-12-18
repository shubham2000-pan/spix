@extends('layouts.admin.app')
@section('content')

<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi {{ Auth::user()->name}}, welcome back!</h4>
                    
                </div>
            </div>
            
        </div>

       


    </div>
</div>
                
<!--**********************************
    Content body end
***********************************-->

@endsection

@section('script')

@endsection

