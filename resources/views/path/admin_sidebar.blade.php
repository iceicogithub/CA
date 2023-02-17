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
       <a class="nav-link" href="{{url('/admin/dashboard')}}">
         <i class="icon-grid menu-icon"></i>
         <span class="menu-title">Dashboard</span>
       </a>
     </li>
     
     <li class="nav-item">
       <a class="nav-link" data-toggle="collapse" href="#user" aria-expanded="false" aria-controls="tables">
         <i class="icon-grid-2 menu-icon"></i>
         <span class="menu-title">User</span>
         <i class="menu-arrow"></i>
       </a>

       <div class="collapse" id="user">
         <ul class="nav flex-column sub-menu">
           <li class="nav-item"> <a class="nav-link" href="{{url('/register')}}"> Add User </a> </li>
           <li class="nav-item"> <a class="nav-link" href="{{url('/admin/listuser')}}">List User</a></li>

         </ul>
       </div>

     </li>
     <li class="nav-item">
       <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
         <i class="icon-layout menu-icon"></i>
         <span class="menu-title">Cources</span>
         <i class="menu-arrow"></i>
       </a>
       <div class="collapse" id="ui-basic">
 
         @foreach($core as $p)
         <ul class="sub-menu">
           <li class="nav-item" onClick="myFunction(this)"> <a class="nav-link  ca"> {{ $p->cource }}</a>
             <div id="myDropdown" class="dropdown-content">
               <a href="{{url('/groups')}}">GROUP1</a>
               <a href="#option2">GROUP 2</a>
             </div>
           </li>

         </ul>
         @endforeach


       </div>
     </li>
    
    
     <li class="nav-item">
       <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
         <i class="icon-grid-2 menu-icon"></i>
         <span class="menu-title">Master table</span>
         <i class="menu-arrow"></i>
       </a>
       <div class="collapse" id="tables">
         <ul class="nav flex-column sub-menu">
           <li class="nav-item"> <a class="nav-link" href="{{url('/admin/add')}}"> Add cources </a> </li>
           <li class="nav-item"> <a class="nav-link" href="{{url('/admin/subject')}}"> Add Subject</a></li>
           <li class="nav-item"> <a class="nav-link" href="{{url('/admin/chapter')}}"> Add Chapter</a></li>
           <li class="nav-item"> <a class="nav-link" href="{{url('/admin/unit')}}"> Add Question</a></li>
         </ul>
       </div>
     </li>
    <li class="nav-item">
       <a class="nav-link" data-toggle="collapse" href="#question" aria-expanded="false" aria-controls="tables">
         <i class="icon-grid-2 menu-icon"></i>
         <span class="menu-title">Question Paper</span>
         <i class="menu-arrow"></i>
       </a>
       <div class="collapse" id="question">
         <ul class="nav flex-column sub-menu">
           <li class="nav-item"> <a class="nav-link" href="{{url('/admin/questionpaper')}}"> Add Question Paper </a></li>
           <li class="nav-item"> <a class="nav-link" href="{{url('/admin/listquestion')}}">List Question paper</a></li>
         </ul>
       </div>
     </li>
     <li class="nav-item">
      <a class="nav-link" href="{{url('/addproduct')}}">
        <i class="icon-grid menu-icon"></i>
        <span class="menu-title">Add Product</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('/quiz')}}">
        <i class="icon-grid menu-icon"></i>
        <span class="menu-title">Add Quiz</span>
      </a>
    </li>
  
     <li class="nav-item">
       <a class="nav-link" data-toggle="collapse" href="#ans" aria-expanded="false" aria-controls="tables">
         <i class="icon-grid-2 menu-icon"></i>
         <span class="menu-title">Answer Sheet</span>
         <i class="menu-arrow"></i>
       </a>
       <div class="collapse" id="ans">
         <ul class="nav flex-column sub-menu">
           <li class="nav-item"> <a class="nav-link" href="{{url('/admin/ans')}}">List Answer Sheet </a> </li>
         </ul>
       </div>
     </li>
     <!-- <li class="nav-item">
       <a class="nav-link" data-toggle="collapse" href="#ans" aria-expanded="false" aria-controls="tables">
         <i class="icon-grid-2 menu-icon"></i>
         <span class="menu-title">Answer Sheet</span>
         <i class="menu-arrow"></i>
       </a>
       <div class="collapse" id="ans">
         <ul class="nav flex-column sub-menu">
           <li class="nav-item"> <a class="nav-link" href="{{url('/checker')}}">Answer Sheet Recieved </a> </li>
         </ul>
       </div>
     </li> -->
  
     <li class="nav-item">
       <a class="nav-link" data-toggle="collapse" href="#qury" aria-expanded="false" aria-controls="tables">
         <i class="icon-grid-2 menu-icon"></i>
         <span class="menu-title">Queries</span>
         <i class="menu-arrow"></i>
       </a>
       <div class="collapse" id="qury">
         <ul class="nav flex-column sub-menu">
           <li class="nav-item"> <a class="nav-link" href="{{url('/admin/queries')}}">List Queries</a> </li>
         </ul>
       </div>
     </li>
   
     
     <!-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="icon-columns menu-icon"></i>
              <span class="menu-title">Form elements</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Basic Elements</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="icon-bar-graph menu-icon"></i>
              <span class="menu-title">Charts</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">ChartJs</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="icon-grid-2 menu-icon"></i>
              <span class="menu-title">Tables</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Basic table</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
              <i class="icon-contract menu-icon"></i>
              <span class="menu-title">Icons</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/icons/mdi.html">Mdi icons</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
              <i class="icon-ban menu-icon"></i>
              <span class="menu-title">Error pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="error">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
              </ul>
            </div>
          </li> -->
     <!-- <li class="nav-item">
            <a class="nav-link" href="pages/documentation/documentation.html">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">ADD cources </span>
            
            </a>
          </li> -->

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