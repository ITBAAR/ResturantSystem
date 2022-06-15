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