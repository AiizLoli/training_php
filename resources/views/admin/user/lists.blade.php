@extends('admin.layouts.template')

@section('content')
<!-- breadcrumb Start -->
<ol class="breadcrumb">
 <li class="breadcrumb-item">
   <a href="#">Users</a>
 </li>
 <li class="breadcrumb-item active">Lists</li>
</ol>
<!-- breadcrumb End -->


<!-- #################### Flash Message Start #################### -->
<!-- Waiting for flash message -->
<!-- #################### Flash Message Start #################### -->



<!-- Example DataTables Card-->
<div class="card mb-3">
 <div class="card-header">
   <i class="fa fa-table"></i> Users Lists </div>

 <div class="card-body">
   <div class="table-responsive">
       <!--  id="dataTable" -->
     <table class="table table-bordered" width="100%" cellspacing="0">
       <thead>
         <tr>
           <th>Full Name</th>
           <th>Mobile</th>
           <th>Email</th>
           <th>City</th>
           <th>Active</th>
           <th>Action</th>
         </tr>
       </thead>
       <!--<tfoot>
         <tr>
             <th>Full Name</th>
             <th>Mobile</th>
             <th>Email</th>
             <th>City</th>
             <th>Active</th>
             <th>Action</th>
         </tr>
     </tfoot>-->
       <tfoot align="right">
       <tr>
           <th colspan="6" style="justify-content: right;">{{ $mods->links('vendor.pagination.bootstrap-4') }}</th>
       </tr>
       </tfoot>

       <tbody>
        @if($mods)
            @foreach($mods as $item)
             <tr>
               <td>xxxx {{$item->name}}</td>
               <td> {{$item->mobile}}</td>
               <td> {{$item->email}}</td>
               <td> {{$item->city}}</td>
               <td>
                     @if($item->active == 1)
                      <span class="badge badge-success">Active</span>
                   @else
                      <span class="badge badge-danger">Inactive</span>
                    @endif

               </td>
               <td>
                   <a href="#">
                       <button type="button" class="btn btn-primary btn-sm">Info</button>
                   </a>
                   <a href="#">
                       <button type="button" class="btn btn-success btn-sm">Edit</button>
                   </a>
                   <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal_user_4">Delete</button>
                   <!-- Include Delete Modal Confirmation -->

                   <!-- #################### Modal Delete Row by Row in Table Start #################### -->
                   <!-- Waiting for flash message -->
                   <!-- #################### Modal Delete Row by Row in Table Start #################### -->


               </td>
             </tr>
             @endforeach
          @endif
       </tbody>
     </table>
   </div>
 </div>
 <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>
@stop