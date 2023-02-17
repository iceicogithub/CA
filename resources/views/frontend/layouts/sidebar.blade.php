<style>
   /* .sidebar {
        background-color: white;

    }

ul{
    list-style: none;
}

nav{
    max-width: 1000px;
    display: flex;
    justify-content: space-between;
   
}

/* .menu > li, .menu >a{
    display: inline-block;
} */

   /* .menu li {
    position: relative;
}


.menu a {
    text-decoration: none;
     color:white;
    display: block;
   transition: background-color .22s ease, color .22s ease;
   background: #4B49AC;

} 
.menu a:hover{
    background-color: red;
} */
   /* submenu */

   /* .submenu {
     position: absolute;
 
     width: 150px;
     left: 0;
     display: none;
} */

   .submenu2 {
     /* position: absolute;
      left:90px ;
      width: 140PX;
      top: 0; */
     display: none;

   }

   /* show menu */

   .menu li:hover>.sub-menu {
     display: block;
     animation: slideup .3s ease;
   }

   .sub-menu li:hover>.submenu2 {
     /* display: block; */
     animation: slidefelt.3s ease;

   }

   /* animation */

   @keyframes slideup {
     0% {
       opacity: 0;
       transform: translateY(18px);

     }

     100% {
       opacity: 1;
       transform: none;
     }
   }

   @keyframes slideleft {
     0% {
       opacity: 0;
       transform: translateX(18px);

     }

     100% {
       opacity: 1;
       transform: none;
     }
   }
 </style>

 <style>
   .dropdown-content {
     display: none;

     background-color: #f9f9f9;
     min-width: 50px;
     box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
     z-index: 1;
   }

   .dropdown-content a {
     float: none;
     color: black;
     padding: 12px 16px;
     text-decoration: none;
     display: block;
     text-align: left;
   }

   .show {
     display: block;
   }
 </style>




 <nav class="sidebar sidebar-offcanvas" id="sidebar">

   <!-- <ul class="menu">
    <li><a href="#" style="font-size:25px;">COURCES</a>
     <ul class="submenu">
        <li><a href="" style="font-size:20px;">frontend</a>
       
         <ul class="submenu2" style="font-size:18px;">
          <li><a href="#">html</a></li>
          <li><a href="#">css</a></li>
          <li><a href="#">javascript</a></li>

        </ul>
    
    </li>

        <li><a href="" style="font-size:18px;">backend</a>
          <ul class="submenu2" style="font-size:15px;">
          <li><a href="#">php</a></li>
          <li><a href="#">mysql</a></li>
          <li><a href="#">RUBY</a></li>

        </ul>
     </li>
          </ul>
    </ul> 
    </li> -->

   <!-- <li><a href="#">services</a></li> -->

   <!-- </ul> -->

   <ul class="nav">
     <li class="nav-item">
       <a class="nav-link" href="{{url('/student/dashboard')}}">
         <i class="icon-grid menu-icon"></i>
         <span class="menu-title">Dashboard</span>
       </a>
     </li>
     
     <li class="nav-item">
       <a class="nav-link" data-toggle="collapse" href="#user" aria-expanded="false" aria-controls="tables">
         <i class="icon-grid-2 menu-icon"></i>
         <span class="menu-title">Notes</span>
         <i class="menu-arrow"></i>
       </a>

       <div class="collapse" id="user">
         <ul class="nav flex-column sub-menu">
           <li class="nav-item"> <a class="nav-link" href="{{url('/register')}}"> ggg </a> </li>
           <li class="nav-item"> <a class="nav-link" href="{{url('/listuser')}}">hhhj</a></li>

         </ul>
       </div>

     </li>
   
     <li class="nav-item">
       <a class="nav-link" data-toggle="collapse" href="{{url('/video')}}" aria-expanded="false" aria-controls="ui-basic">
         <i class="icon-layout menu-icon"></i>
         <span class="menu-title">Video</span>
         <i class="menu-arrow"></i>
       </a>
     </li>
     
     <li class="nav-item">
       <a class="nav-link"  href="{{url('/subjectivetest')}}" aria-expanded="false" aria-controls="ui-basic">
         <i class="icon-layout menu-icon"></i>
         <span class="menu-title">Subjective Test</span>
         <i class="menu-arrow"></i>
       </a>
     </li>
     
     <li class="nav-item">
       <a class="nav-link"  href="{{url('/objectivetest')}}" aria-expanded="false" aria-controls="ui-basic">
         <i class="icon-layout menu-icon"></i>
         <span class="menu-title">Objective Test</span>
         <i class="menu-arrow"></i>
       </a>
     </li>
   
    
    </ul>
 </nav>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <!-- <script>
   function hide() {
     document.getElementById('ca').style.display = "none";
   }


   $(document).ready(function() {
     $(".ca").click(function() {
       $('.submenu2').css('display', 'block');
       if ($('.submenu2').css('display', 'block')) {
          $(".ca").click(function() {
          $('.submenu2').css('display', 'none');
         });
       }
       if ($('.submenu2').css('display', 'none')) {
          $(".ca").click(function() {
          $('.submenu2').css('display', 'block');
         });

       }
     });

   });
 </script> -->


 <script>
   function myFunction(a) {
     a.parentNode.getElementsByClassName('dropdown-content')[0].classList.toggle("show");
   }
 </script>
    <!-- plugins:js -->
    <script src="../../vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../js/off-canvas.js"></script>
    <script src="../../js/hoverable-collapse.js"></script>
    <script src="../../js/template.js"></script>
    <script src="../../js/settings.js"></script>
    <script src="../../js/todolist.js"></script>
    <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <!-- endinject -->