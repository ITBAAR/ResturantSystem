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
    <h2 class="text-center mt-4">Users</h2>
    <table class="table mt-5 p-4 ml-4 table-dark table-hover">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $data)
            <tr>
                <td scope="row">{{ $data->name }}</td>
                <td>{{ $data->email }}</td>
                
                <td><a href="{{ url('/deleteuser' ,$data->id) }}">Delete</a></td>
               
               
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