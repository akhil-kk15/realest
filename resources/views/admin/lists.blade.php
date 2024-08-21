<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class AdminController extends Controller {
public function view_lists(){
    return view("admin.list");

}
}

   @include('admin.css');
// <html>
//  </head>
// <body>
// <div class="container-scroller">
//     <!-- partial:partials/_sidebar.html -->
//     @include('admin.sidebar');
//     <!-- partial -->
//     @include('admin.header');
//     <div class="main-panel">
//         <div class="content-wrapper">
//             Add List
//         </div>
//     </div>
//     <!-- @include('admin.body') -->
//     <!-- container-scroller -->
//     <!-- plugins:js -->
//     @include('admin.script');
//     <!-- End custom js for this page -->
// </div>
//  </body>
// </html>

