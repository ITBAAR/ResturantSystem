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
   <h2 class="text-center mt-4">All Reservations</h2>
    <table class="table mt-3 p-4 mb-3 table-light table-hover table-dark" style="color:antiquewhite;">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>phone</th>
                <th>Guest</th>
                <th>Date</th>
                <th>Time</th>
                <th>Message</th>
               
            </tr>
        </thead>
        <tbody>
            @foreach($data as $data)
            <tr>
                <td scope="row">{{ $data->name }}</td>
                <td>{{ $data->email }}</td>
                <th>{{ $data->phone }}</th>
                <th>{{ $data->guest }}</th>
                <th>{{ $data->date }}</th>
                <th>{{ $data->time }}</th>
                <th>{{ $data->message }}</th>
                {{--  <td><a href="{{ url('/deleteuser' ,$data->id) }}">Delete</a></td>  --}}
               
               
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