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
 <br> 
<div>
  <h2 class="text-center mt-4">  Add Chefs</h2>
       <form action="{{ url('/uploadchef') }}" method="POST" enctype="multipart/form-data" class="ml-5 mt-4">
        @csrf
        <div class="form-group">
          <label for="">Name</label>
          <input type="text"
            class="form-control" name="name" id="name"  placeholder="Chef Name" style="color:aliceblue">
        </div>
        <div class="form-group">
            <label for="">Speciality</label>
            <input type="text" class="form-control" name="speciality" id="speciality"  placeholder="Speciality Here..." style="color:aliceblue">
          </div>
          <input type="file" name="image" required class="form-control"><br>
          <input type="submit" name="save" value="Save" class="btn btn-dark">
        </form>
</div>

        <div class="mt-4 mt-5s">
          <br> <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br><br>  <br> 
         
         <h2 style="font-weight:900"> MENU TABLE</h2>
       <table class="table mt-3 p-4 mb-3 table-light table-hover table-dark" style="margin-left: -300px; color:antiquewhite;">
         <thead>
           <tr>
            <th>Image</th>
             <th>Chef Name</th>
             <th>Speciality</th>
            
             <th>Action</th>
             <th>Action2</th>
           </tr>
         </thead>
        
         <tbody>
           @foreach($data as $data)
           <tr>
            <td scope="row"><img src="/chefimage/{{ $data->image }}"></td>
             <td>{{ $data->name }}</td>
             <td>{{ $data->speciality }}</td>
            
             <td><a href="{{ url('/deletechef',$data->id) }}">Delete</a></td>
             <td><a href="{{ url('/updatechef',$data->id) }}">Update</a></td>
           </tr> 
           @endforeach
         </tbody>
        
       </table>
     
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