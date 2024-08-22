<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   @include('admin.css')
   <style type="text/css">
    .div_center {
     text-align: center;
     padding: 30px;
    }
    label{
      display: inline-block;
      width: 180px;
    }

   </style>
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
            <h1>Add Listings</h1> 
            
            <div>
              <form action="{{url('approve_listing')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="div_center">
                  <label>Property Title</label>
                    <input type="text" name="title">
                  
                </div>
                <div class="div_center">
                  <label>Property Description</label>
                    <textarea name="description" placeholder="Description"></textarea>
                  
                </div>

                <div class="div_center">
                  <label>Price</label>
                    <input type="number" step="0.01" name="price"></input>
                </div>
                <div class="div_center">
                  <label>Location</label>
                    <input type="text" name="location" placeholder="Location"></input>
                  
                </div>

                <div class="div_center">
                  <label>Add Image</label>
                    <input type="file" name="image">
                   </div>
                   <div class="div_center">
                    <input type="submit" class=" btn btn-primary" name="submit">
                   </div>
              </form>
            </div>
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