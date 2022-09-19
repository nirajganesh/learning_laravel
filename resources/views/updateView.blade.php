@extends('welcome')
@section('content')

  <div class="col-md-4 m-auto  mt-3">
      <h2 class="text-center text-warning">Update View</h2>
      <form active="updaterecord" method="get" enctype="multipart/form-data">
         @csrf
         <div class="mb-2">
           <label for="">Product Name </label>
           <input type="text"  class="form-control"  id="" value="{{$pname}}" name="name">
         </div>    
         <div class="mb-2">
           <label for="">Product Price </label>
           <input type="text"  class="form-control" id="" value="{{$pprice}}" name="price">
         </div>  
         <input type="hidden"  value="{{$pid}}" name="id"> 
         <button type="submit" class="btn btn-outline-warning rounded-pill mt-3">Update</button>

      </form> 
  </div>  
@endsection()