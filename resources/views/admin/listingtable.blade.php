<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
      <div class = "main-panel">
        <div class="content-wrapper">
            <div class="div_center">
            <h1>Approve Listings</h1>        
        </div>    
      

            </div>  
    </div>
    @include('admin.body')
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>