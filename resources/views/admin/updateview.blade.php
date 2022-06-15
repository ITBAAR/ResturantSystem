<x-app-layout>
   
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
   @include('admin.admincss')
  </head>
  
  <body>
    <div class="container-scroller">
 @include ('admin.navbar')
 <form action="{{ url('/update' ,$data->id) }}" method="post" enctype="multipart/form-data" >
  @csrf
<div class="form-group ml-4">
<label for="">Title</label>
<input type="text" class="form-control" name="title" id="title" value="{{ $data->title }}" required style="color:aliceblue">

</div>
<div class="form-group ml-4">
  <label for="">Price</label>
  <input type="text" class="form-control" name="price" id="price"  value="{{ $data->price }}" required style="color:aliceblue">
  
</div>

<div class="form-group ml-4">
  <label for="">Description</label>
  <input type="text" class="form-control" name="description" id="description"  value="{{ $data->description }}" required>
  
</div>
<div class="form-group ml-4">
  <label for="">OLD Image</label>
 <img src="/foodimage/{{ $data->image }}">

</div>
<div class="form-group ml-4">
  <label for="">Image</label>
  <input type="file" class="form-control" name="image" id="image" >

</div>
<input type="submit" class="btn btn-dark" name="save" value="Save">

</form>

    </div>
  </div>
</div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          @include('admin.adminfooter');
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    @include('admin.adminscript');
  </body>
</html>