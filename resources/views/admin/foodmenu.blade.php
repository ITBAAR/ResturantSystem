<x-app-layout>
   
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.admincss')
  </head>
  <body>
    <div class="container-scroller">
 @include ('admin.navbar')

      <div>
        <h1 class="text-center mt-4">Add Menu</h1>
     
        <form action="{{ url('/uploadfood') }}" method="post" enctype="multipart/form-data" class="mt-4 ">
            @csrf
        <div class="form-group ml-4">
        <label for="">Title</label>
        <input type="text" class="form-control" name="title" id="title"  placeholder="Title here..." required style="color:aliceblue">
        
        </div>
        <div class="form-group ml-4">
            <label for="">Price</label>
            <input type="text" class="form-control" name="price" id="price"  placeholder="price here..." required style="color:aliceblue">
            
        </div>
        <div class="form-group ml-4">
            <label for="">Image</label>
            <input type="file" class="form-control" name="image" id="image" >
        
        </div>
        <div class="form-group ml-4">
            <label for="">Description</label>
            <input type="text" class="form-control" name="description" id="description"  placeholder="Description here..." required style="color:aliceblue">
            
        </div>
        <input type="submit" class="btn btn-dark" name="save" value="Save">
        
        </form>
      </div>

 <div>
   <div>
     <br> <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br><br>  <br> <br> <br>  <br> <br> <br> 
    
    <h2 style="font-weight:900"> MENU TABLE</h2>
  <table class="table mt-3 p-4 mb-3 table-light table-hover table-dark" style="margin-left: -300px; color:antiquewhite;">
    <thead>
      <tr>
        <th>Image</th>
        <th>Food Name</th>
        <th>Price</th>
        <th>Description</th>
        <th>Action</th>
        <th>Action2</th>
      </tr>
    </thead>
   
    <tbody>
      @foreach($data as $data)
      <tr>
        <td scope="row"><img src="/foodimage/{{ $data->image }}"></td>
        <td>{{ $data->title }}</td>
        <td>{{ $data->price }}</td>
        <td>{{ $data->description }}</td>
        <td><a href="{{ url('/deletemenu',$data->id) }}">Delete</a></td>
        <td><a href="{{ url('/updateview',$data->id) }}">Update</a></td>
      </tr>
      @endforeach
    </tbody>
   
  </table>

</div>
</div>

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