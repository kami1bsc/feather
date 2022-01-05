@extends('layouts.store.app')
@section('content')


<div id="page-content-wrapper">
               <div class="">
                  <h4>Account Setting</h4>
               </div>


               <div class="tab-content">
                  <div class=" tab-pane active">
                     <br />
                     <ul class="nav separator navbar pt-0 shadow-sm" type="none" role="tablist">
                        <li class="nav-item">
                           <a
                              data-toggle="tab"
                              class="nav-link text-dark"
                              href="#changePicture"
                              aria-expanded="false"
                              > Change Picture</a
                              >
                        </li>
                        <li class="nav-item">
                           <a
                              data-toggle="tab"
                              class="nav-link text-dark"
                              href="#changePassword"
                              aria-expanded="false"
                              >Change Password</a
                              >
                        </li>
                     </ul>
                     <div class="tab-content pt-3">
                        <div id="changePicture" class="container tab-pane active">
                           <div class=" mt-3 mb-3">
                              <div class=" pt-2 pb-2 pl-3 mt-3 border" style="background-color:#F7F8FA;">
                                 <b>Change Profile Photo  </b>
                                 
                              </div>
                              <div class="  bg-white shadow pt-5 pb-3 pr-5 pl-5" >
                              
                                 <!--------------form-------->
                                 <form action="#" method="post" class="px-5 pb-5">
                                   
                                   
                                   
                                    <div class="form-group ">
                                       <div class="row">
                                          <div class="col-3">
                                       <p class="text-center">Please Select Your Photo</p> 
                                       <div class="p-5  text-center uploadimg-div">
                                       
                                             <input type="file" name="file-2[]" id="file-2" class="inputfile inputfile-2" style="display: none;">
                                             <label for="file-2" > 
                                                <div >
                                                   <i class="fa fa-plus" aria-hidden="true"></i>
                                                </div>
                                                <div>Upload</div></label>
                                         </div>
                                       </div>
                                        
                                       </div>
                                       </div>
                                  
                                 </form>
                                 <!--------------form end-------->
                              </div>
                           </div>
                        </div>

             <div id="changePassword" class="container tab-pane ">
             <!---------------Add product form---------->
             <div class=" mt-3 mb-3">
               <div class=" pt-2 pb-2 pl-3 mt-3 border" style="background-color:#F7F8FA;">
                  <b>Change Password  </b><br>
                  The Password Should Be At Least 8 Characters Long. It Must Contain Upper And Lower Case Characters And At Least One Number.
               </div>
               <div class="  bg-white shadow pt-5 pb-3 pr-5 pl-5" >
                <!--------------form-------->
            <form action="#" method="post" class="pb-5">
               <div class="form-group row">
                  <label for="currentEmail" class="col-sm-3 col-form-label"> Email Address</label>
                  <div class="col-sm-9">
                     <input type="email"  class="form-control" id="currentEmail" name="currentEmail" >
                  </div>
               </div>
               <div class="form-group row">
                   <label for="oldPwd" class="col-sm-3 col-form-label">Old Password</label>
                   <div class="col-sm-9">
                      <input type="password"  class="form-control" id="oldPwd" name="oldPwd" >
                   </div>
                </div>
             
                <div class="form-group row">
                   <label for="newPwd" class="col-sm-3 col-form-label">New Password</label>
                   <div class="col-sm-9">
                      <input type="password"  class="form-control" id="newPwd" name="newPwd" >
                   </div>
                </div>
              
                <div class="form-group row">
                   <label for="confirmPwd" class="col-sm-3 col-form-label">Repeat Password</label>
                   <div class="col-sm-9">
                      <input type="password"  class="form-control" id="confirmPwd" name="confirmPwd" >
                   </div>
                </div>

                <hr>
               <button type="submit" class="btn btn-primary float-right px-5">Submit</button>
             
            </form>
            <!--------------form end-------->
               </div>
            </div>
           
            </div>
             </div>
              </div>
              </div>

             
            </div>


@endsection