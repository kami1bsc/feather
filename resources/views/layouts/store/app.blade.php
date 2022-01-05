<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Feather Finder</title>
      <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link
         rel="stylesheet"
         href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
         />
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


      <link rel="stylesheet" href="https://rawcdn.githack.com/darkterminal/tagin/6fa2863c13aa1841f33cf6dcbbf266c92fbf5412/dist/css/tagin.min.css">
      <script src="https://rawcdn.githack.com/darkterminal/tagin/6fa2863c13aa1841f33cf6dcbbf266c92fbf5412/dist/js/tagin.min.js"></script>

<style>
.paginate_button
{
    display:none;    
}
.current
{
    display:none; 
}
.dataTables_info{
    display:none;
}
.px-4{
    display:none;
}
.w-5{
  width: 20px;
  height: 20px;
}
.h-5{
  width: 20px;
  height: 20px;
}
</style>


   </head>
   <body>
      <div id="wrapper" class="toggled">
         <!-- Sidebar -->
         @include('layouts.store.sidenav')
         <!-- /#sidebar-wrapper -->
         <!-- Page Content -->
         <div id="">
            <!-- Navbar -->
            @include('layouts.store.navbar')
            <!-- End Navbar -->
            <div id="page-content-wrapper">
               <!-- Content -->
               @yield('content')
               <!-- End Content -->
            </div>
         </div>
         <!-- /#page-content-wrapper -->
      </div>
      <!-- /#wrapper -->
      <!-- Bootstrap core JavaScript -->
      <script src="{{ asset('js/jquery.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
      <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
      <!-- Menu Toggle Script -->
      <script>
         $(function () {
           $("#menu-toggle").click(function (e) {
             e.preventDefault();
             $("#wrapper").toggleClass("toggled");
           });
         
           $(window).resize(function (e) {
             if ($(window).width() <= 768) {
               $("#wrapper").removeClass("toggled");
             } else {
               $("#wrapper").addClass("toggled");
             }
           });
         });

$(document).ready(function() {
   $('#all_products_table').DataTable({
      "responsive": true,
   });
});


      </script>
   </body>
</html>
</head>
</html>