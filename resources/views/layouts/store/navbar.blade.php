<nav class="sticky-top navbar navbar-expand navbar-dark shadow bg-white rounded">
               <div class="row collapse navbar-collapse space " id="navbarsExample02">
                  <div>
                     <a href="#menu-toggle" id="menu-toggle" class="navbar-brand float-right px-2"
                        ><span class="navbar-toggler-icon"></span
                        ></a>
                     <button
                        class="navbar-toggler"
                        type="button"
                        data-toggle="collapse"
                        data-target="#navbarsExample02"
                        aria-controls="navbarsExample02"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                        >
                     <span class="navbar-toggler-icon"></span>
                     </button>
                  </div>
                  <div>
                     <ul class="navbar-nav mr-4 ">
                        <!-----------------languge--------->
                        <li
                           id="google_translate_element"
                           class="nav-item "
                           data-toggle="dropdown"
                           role="button"
                           aria-expanded="false"
                           >
                           <div class="d-flex pb-2 " dir="ltr" >
                              <div class="ellipse">
                                 <img src="assets/img/Group 241.png" alt="favourite">
                              </div>
                              <div class=" mr-2 ml-2">
                                 <!--<img src="assets/img/Group 1.png" alt="">-->
                                                                         
                              <div class="dropdown mt-1">
                              <button  class="text-muted dropdown-toggle px-3 py-2" data-toggle="dropdown" style="border-radius: 25px; border: 1px solid grey; background-color: #fff;">
                           Store Name
                           </button>
                           <div class="dropdown-menu">
                       <a class="dropdown-item" href="{{ route('admin_logout') }}">Logout</a>
                                </div>
                           </div>
                              </div>
                              <div>
                                 <img src="assets/img/Group 2.png" alt="">
                              </div>
                           </div>
                        </li>
                     </ul>
                     <form class="form-inline my-2 my-md-0"></form>
                  </div>
               </div>
            </nav>