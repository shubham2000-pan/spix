@extends('layouts.admin.app')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <!-- row -->
         <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">User List</h4>
                        <a href="{{url('add/')}}"><span class="badge badge-success">Add User</span></a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table header-border table-responsive-sm" id="tblLocations" >
                                <thead class="thead-primary">
                                    <tr>
                                        <th>#</th>
                                        <th>name</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr></tr>
                                    @foreach($result as $key=>$value)
                                    <tr>
                                        <td><span class="text-muted">{{ $key+1}}</span></td>
                                       <td><span class="text-muted">{{ $value->name }}</span></td>
                                       <td><span class="text-muted">{{ $value->email }}</span></td>
                                        <td><a href="{{url('edit/'.$value->id)}}"><span class="badge badge-success">Edit</span></a>
                                            <a href="{{url('delete/'.$value->id)}}"><span class="badge badge-danger">Delete</span></a>
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
</div>
<!--**********************************
    Content body end
***********************************-->
@endsection

@section('footer_script')

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.24/themes/smoothness/jquery-ui.css" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.24/jquery-ui.min.js"></script>
<script type="text/javascript">$(function () {
$("#tblLocations").sortable({
    items: 'tr:not(tr:first-child)',
    cursor: 'pointer',
    axis: 'y',
    dropOnEmpty: false,
    start: function (e, ui) {
        ui.item.addClass("selected");
        var data = $(this).val();
        console.log(data);
            $.ajax({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
             type: "POST",
             url:"{{ url('/update_sorting') }}",
             dataType: "json",
             data: {'listing':data},
             cache: false,
             success: function(data){
                console.log(data);
               
             }
           });
       
    },
   
});
});

         
           

   
  </script>
@endsection