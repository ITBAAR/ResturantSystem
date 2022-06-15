<x-app-layout>
   
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.admincss');
  </head>
  <body>
    <div class="container-scroller">
 @include ('admin.navbar')
 <div>
  
   
   <h2 style="font-weight:900">Customer Orders</h2>
   <form action="{{ url('/search') }}" align="center" method="get">
       <input type="text" name="search" style="color: black" >
       <input type="submit" value="Search.." class="btn" style="background-color:tomato;">
   </form>
 <table class="table mt-3 p-4 mb-3 table-light table-hover" style=" color:BLACK; align:center;">
   <thead>
     <tr>
         <th>Name</th>
         <th>Phone</th>
         <th>Address</th>
       <th>Food Name</th>
       <th>Price</th>
       <th>Quantity</th>
       <th>Total Price</th>
     </tr>
   </thead>
  
   <tbody>
       @foreach($data as $data)
       <tr>
           <td>{{ $data->name }}</td>
           <td>{{ $data->phone }}</td>
           <td>{{ $data->address }}</td>
           <td>{{ $data->foodname }}</td>
           <td>{{ $data->foodprice }}$</td>
           <td>{{ $data->foodquantity }}</td>
           <td>{{ $data->foodprice * $data->foodquantity }}$</td>
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