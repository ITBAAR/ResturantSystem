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

       <form action="{{ url('/updatefoodchef' ,$data->id) }}" method="POST"  enctype="multipart/form-data"     >
        @csrf
        <div class="form-group">
          <label for="">Chef Name</label>
          <input type="text"  class="form-control" name="name" id="name"  value="{{ $data->name }}">
         
        </div>
        <div class="form-group">
            <label for="">Speciality</label>
            <input type="text"  class="form-control" name="speciality" id="speciality"  value="{{ $data->speciality }}">
           
          </div>
          <div class="form-group">
            <label for="">OLD Image</label>
            <img src="/chefimage/{{ $data->image }}" height="300" width="200">
           
          </div>
          <div class="form-group">
            <label for="">New Image</label>
            <input type="file"  class="form-control" required name="image">
           
          </div>
          <input type="submit" name="save" class="btn btn-dark">

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