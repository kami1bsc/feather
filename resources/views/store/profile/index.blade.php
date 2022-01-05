@extends('layouts.store.app')
@section('content')


<div id="page-content-wrapper">
               <p class="link-decoration"><a href="index.html">Home</a> > <a href="">MyAccount</a> > <a href="profile.html">Profile</a></p>
                  <h4>Profile</h4>
             <!------------Profile code start------>
             <div class="">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#general"
                      >General
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#sellerLogo"
                      >Seller Logo</a
                    >
                  </li>
                </ul>
          
                <!-- Tab panes -->
                <div class="tab-content">
                  <div id="general" class=" tab-pane active">
                    <br />
                    <ul class="nav separator navbar shadow-sm" type="none" role="tablist">
                      <li class="nav-item">
                        <a
                          data-toggle="tab"
                          class="nav-link text-dark"
                          href="#sellerAcc"
                          aria-expanded="false"
                          >Seller Account</a
                        >
                      </li>
                      <li class="nav-item">
                        <a
                          data-toggle="tab"
                          class="nav-link text-dark"
                          href="#businessInfo"
                          aria-expanded="false"
                          >Business Information</a
                        >
                      </li>
                      <li class="nav-item">
                        <a
                          data-toggle="tab"
                          class="nav-link text-dark"
                          href="#bankAcc"
                          aria-expanded="true"
                          >Bank Account</a
                        >
                      </li>
                      <li class="nav-item">
                        <a
                          data-toggle="tab"
                          class="nav-link text-dark"
                          href="#wareAdd"
                          aria-expanded="false"
                          >Warehouse Address</a
                        >
                      </li>
                      <li class="nav-item">
                        <a data-toggle="tab" class="nav-link text-dark" href="#returnAdd" aria-expanded="false"
                          >Return Address</a
                        >
                      </li>
                    </ul>
                    <div class="tab-content">
                      <div id="sellerAcc" class="container tab-pane active">
                       
                        <!---------------seller account start--------------------------->
                        <div class=" mt-3 mb-3">
                            <div class=" pt-2 pb-2 pl-3 mt-3 border" style="background-color:#F7F8FA;">
                               <b>Seller Account </b>
                            </div>
                            <div class="  bg-white shadow pt-5 pb-3 pr-5 pl-5" >
                            
                               <!--------------form-------->
                               <form action="#" method="post" class="pb-5">
                                 
                                  <div class="form-group row">
                                     <label for="sellerId" class="col-sm-3 col-form-label">ID Seller</label>
                                     <div class="col-sm-9">
                                        <input type="text" placeholder="PK10FRV" class="form-control" id="sellerId" name="sellerId" >
                                     </div>
                                  </div>
                                  <div class="form-group row">
                                      <label for="name" class="col-sm-3 col-form-label">First And Last Name</label>
                                      <div class="col-sm-9">
                                         <input type="text"  class="form-control" id="name" name="name" >
                                      </div>
                                   </div>
                                  <div class="form-group row">
                                     <label for="contactEmail" class="col-sm-3 col-form-label">Contact Email Address</label>
                                     <div class="col-sm-9">
                                        <input type="email"  class="form-control" id="contactEmail" name="contactEmail" >
                                     </div>
                                  </div>
                                  <div class="form-group row">
                                      <label for="phone" class="col-sm-3 col-form-label">Contact Phone Number</label>
                                      <div class="col-sm-9">
                                         <input type="tel"  class="form-control" id="phone" name="phone" >
                                      </div>
                                   </div>
                                
                                 
                                  <div class="form-group row">
                                     <label for="shopName" class="col-sm-3 col-form-label"> Display Shop Name</label>
                                     <div class="col-sm-9">
                                        <input type="text"  class="form-control" id="shopName" name="shopName" >
                                     </div>
                                  </div>
                                  
                                   <div class="form-group row">
                                      <label for="optradio" class="col-sm-3 col-form-label">Holiday Mode  </label>
                                      <div class="col-sm-9">
                                          <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
                                              <label class="form-check-label" for="inlineRadio1">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                              <label class="form-check-label" for="inlineRadio2">No</label>
                                            </div>
              
                                      </div>
                                   </div>
                                   <div class="form-group row">
                                      
                                      <label for="date" class="col-sm-3 col-form-label">Holiday Mode Period</label>
                                      <div class="col-sm-9 d-flex">
                                          <div class="form-group  ">
                                              <input type="date" class="form-control " id="startDate" placeholder="Start Date">
                                           </div>
                                           <span> &nbsp; - &nbsp;</span>
                                           <div class="form-group ">
                                              <input type="date" class="form-control" id="endDate" placeholder="-End Date">
                                           </div>
              
                                      </div>
                                   </div>
                                   
                                   <hr>
                                  <button type="submit" class="btn btn-primary float-right px-5">Submit</button>
                                
                               </form>
                               <!--------------form end-------->
                            </div>
                         </div>
                        <!---------------seller account start end--------------------------->
                      </div>
          
                      <div id="businessInfo" class="container tab-pane">
                     
                        <!---------------Business Information--------------------------->
                        <div class=" mt-3 mb-3">
                            <div class=" pt-2 pb-2 pl-3 mt-3 border" style="background-color:#F7F8FA;">
                               <b>Business Information  </b>
                            </div>
                            <div class="  bg-white shadow pt-5 pb-3 pr-5 pl-5" >
                            
                               <!--------------form-------->
                               <form action="#" method="post" class="pb-5">
                                 
                                  <div class="form-group row">
                                     <label for="ownerName" class="col-sm-3 col-form-label">Legal Business Owner</label>
                                     <div class="col-sm-9">
                                        <input type="text"  class="form-control" id="ownerName" name="ownerName" >
                                     </div>
                                  </div>
                                  <div class="form-group row">
                                      <label for="Address" class="col-sm-3 col-form-label">Address</label>
                                      <div class="col-sm-9">
                                         <input type="address"  class="form-control" id="address" name="address" >
                                      </div>
                                   </div>
                                   <div class="form-group row">
                                      <label for="inputCountry" class="col-sm-3 col-form-label">Country/Region</label>
                                      <div class="col-sm-9">
                                         <select id="inputCountry" class="form-control">
                                            <option selected>Select</option>
                                            <option>United Kingdom</option>
                                            <option>Russia</option>
                                            <option>Germany</option>
                                            <option>France</option>
                                            <option>Italy</option>
                                            <option>Netherlands</option>
                                            <option>Ukraine</option>
                                         </select>
                                      </div>
                                   </div>
                                  <div class="form-group row">
                                     <label for="PIC" class="col-sm-3 col-form-label">  Person In Charge</label>
                                     <div class="col-sm-9">
                                        <input type="text"  class="form-control" id="PIC" name="PIC" >
                                     </div>
                                  </div>
                                  <div class="form-group row">
                                      <label for="regNumber" class="col-sm-3 col-form-label">Business Registration 
                                          Number</label>
                                      <div class="col-sm-9">
                                         <input type="text"  class="form-control" id="regNumber" name="regNumber" >
                                      </div>
                                   </div>
                                   <div class="form-group row">
                                      <label for="File1" class="col-sm-3 col-form-label">Upload Business 
                                          Document</label>
                                      <div class="col-sm-9" >
                                          <div class="box">
                                              <input type="file" name="file-2[]" id="file-2" class="inputfile inputfile-2" style="display: none;">
                                              <label for="file-2" class="px-3 py-1 border"> 
                                                <img src="assets/img/upload.png" alt="">
                                                  <span>Select File</span></label>
                                          </div>
                                      </div>
                                   </div>
                                   <div class="form-group row">
                                      <label for="inputState" class="col-sm-3 col-form-label">State</label>
                                      <div class="col-sm-9">
                                         <select id="inputState" name="inputState" class="form-control">
                                            <option selected>Select</option>
                                            <option>United Kingdom</option>
                                            <option>Russia</option>
                                            <option>Germany</option>
                                            <option>France</option>
                                            <option>Italy</option>
                                            <option>Netherlands</option>
                                            <option>Ukraine</option>
                                         </select>
                                      </div>
                                   </div>
                                   <div class="form-group row">
                                      <label for="inputArea" class="col-sm-3 col-form-label">Area</label>
                                      <div class="col-sm-9">
                                         <select id="inputArea" name="inputArea" class="form-control">
                                            <option selected>Select</option>
                                            <option>United Kingdom</option>
                                            <option>Russia</option>
                                            <option>Germany</option>
                                            <option>France</option>
                                            <option>Italy</option>
                                            <option>Netherlands</option>
                                            <option>Ukraine</option>
                                         </select>
                                      </div>
                                   </div>
                                   <div class="form-group row">
                                      <label for="inputLocation" class="col-sm-3 col-form-label">Location</label>
                                      <div class="col-sm-9">
                                         <select id="inputLocation"  name="inputLocation" class="form-control">
                                            <option selected>Select</option>
                                            <option>United Kingdom</option>
                                            <option>Russia</option>
                                            <option>Germany</option>
                                            <option>France</option>
                                            <option>Italy</option>
                                            <option>Netherlands</option>
                                            <option>Ukraine</option>
                                         </select>
                                      </div>
                                   </div>
                                  <div class="form-group row">
                                     <label for="pcPhone" class="col-sm-3 col-form-label">Person In Charge Mobile
                                      Number</label>
                                     <div class="col-sm-9">
                                        <input type="tel"  class="form-control" id="pcPhone" name="pcPhone" >
                                     </div>
                                  </div>
                                  <div class="form-group row">
                                      <label for="pcEmail" class="col-sm-3 col-form-label">Person In Charge Email</label>
                                      <div class="col-sm-9">
                                         <input type="email"  class="form-control" id="pcEmail" name="pcEmail" >
                                      </div>
                                   </div>
                                
                                   <hr>
                                  <button type="submit" class="btn btn-primary float-right px-5">Submit</button>
                                
                               </form>
                               <!--------------form end-------->
                            </div>
                         </div>
                        <!---------------Business Information end--------------------------->
                      </div>
          
                      <div id="bankAcc" class="container tab-pane">
                       
                        <!---------------Bank Account--------------------------->
                        <div class=" mt-3 mb-3">
                            <div class=" pt-2 pb-2 pl-3 mt-3 border" style="background-color:#F7F8FA;">
                               <b>Bank Accoount </b>
                            </div>
                            <div class="  bg-white shadow pt-5 pb-3 pr-5 pl-5" >
                            
                               <!--------------form-------->
                               <form action="#" method="post" class="pb-5">
                                 
                                  <div class="form-group row">
                                     <label for="accTitle" class="col-sm-3 col-form-label">Account Title</label>
                                     <div class="col-sm-9">
                                        <input type="text"  class="form-control" id="accTitle" name="accTitle" >
                                     </div>
                                  </div>
                                  <div class="form-group row">
                                      <label for="accNumber" class="col-sm-3 col-form-label">Account Number</label>
                                      <div class="col-sm-9">
                                         <input type="text"  class="form-control" id="accNumber" name="accNumber" >
                                      </div>
                                   </div>
                                   <div class="form-group row">
                                      <label for="bankName" class="col-sm-3 col-form-label">Bank Name</label>
                                      <div class="col-sm-9">
                                         <select id="bankName" class="form-control">
                                            <option selected>Select</option>
                                            <option>Standard Charted</option>
                                            <option>Union Pay</option>
                                            <option>abc</option>
                                            <option>def</option>
                                            <option>ghi</option>
                                          
                                         </select>
                                      </div>
                                   </div>
                                  <div class="form-group row">
                                     <label for="bCode" class="col-sm-3 col-form-label">  Branch Code</label>
                                     <div class="col-sm-9">
                                        <input type="text"  class="form-control" id="bCode" name="bCode" >
                                     </div>
                                  </div>
                                  <div class="form-group row">
                                      <label for="iban" class="col-sm-3 col-form-label">IBAN
            </label>
                                      <div class="col-sm-9">
                                         <input type="text"  class="form-control" id="iban" name="iban" >
                                      </div>
                                   </div>
                                   <div class="form-group row">
                                      <label for="File1" class="col-sm-3 col-form-label">Upload Cheque Copy</label>
                                      <div class="col-sm-9" >
                                          <div class="box">
                                              <input type="file" name="file-2[]" id="file-2" class="inputfile inputfile-2" style="display: none;">
                                              <label for="file-2" class="px-3 py-1 border"> 
                                                <img src="assets/img/upload.png" alt="">
                                                  <span>Select File</span></label>
                                          </div>
                                      </div>
                                   </div>
                                
                                  <div class="form-group row">
                                     <label for="taxCategory" class="col-sm-3 col-form-label">Tax Category</label>
                                     <div class="col-sm-9">
                                        <input type="text"  class="form-control" id="taxCategory" name="taxCategory" >
                                     </div>
                                  </div>
                          
                                
                                   <hr>
                                  <button type="submit" class="btn btn-primary float-right px-5">Submit</button>
                                
                               </form>
                               <!--------------form end-------->
                            </div>
                         </div>
                        <!---------------Bank Account end----------------->
                      </div>
          
                      <div id="wareAdd" class="container tab-pane">
                        
                        <!---------------Ware House Address--------------------------->
                        <div class=" mt-3 mb-3">
                            <div class=" pt-2 pb-2 pl-3 mt-3 border" style="background-color:#F7F8FA;">
                               <b>Warehouse Address  </b>
                            </div>
                            <div class="  bg-white shadow pt-5 pb-3 pr-5 pl-5" >
                            
                               <!--------------form-------->
                               <form action="#" method="post" class="pb-5">
                                 
                                  <div class="form-group row">
                                      <label for="name" class="col-sm-3 col-form-label">First And Last Name</label>
                                      <div class="col-sm-9">
                                         <input type="text"  class="form-control" id="name" name="name" >
                                      </div>
                                   </div>
                                  <div class="form-group row">
                                      <label for="Address" class="col-sm-3 col-form-label">Address</label>
                                      <div class="col-sm-9">
                                         <input type="address"  class="form-control" id="address" name="address" >
                                      </div>
                                   </div>
                              
                                   <div class="form-group row">
                                      <label for="whContact" class="col-sm-3 col-form-label">Contact Number</label>
                                      <div class="col-sm-9">
                                         <input type="tel"  class="form-control" id="whContact" name="whContact" >
                                      </div>
                                   </div>
                                   <div class="form-group row">
                                       <label for="whEmail" class="col-sm-3 col-form-label"> Email</label>
                                       <div class="col-sm-9">
                                          <input type="email"  class="form-control" id="whEmail" name="whEmail" >
                                       </div>
                                    </div>
                                    <div class="form-group row">
                                      <label for="inputCountry" class="col-sm-3 col-form-label">Country/Region</label>
                                      <div class="col-sm-9">
                                         <select id="inputCountry" class="form-control">
                                            <option selected>Select</option>
                                            <option>United Kingdom</option>
                                            <option>Russia</option>
                                            <option>Germany</option>
                                            <option>France</option>
                                            <option>Italy</option>
                                            <option>Netherlands</option>
                                            <option>Ukraine</option>
                                         </select>
                                      </div>
                                   </div>
                                   <div class="form-group row">
                                      <label for="inputState" class="col-sm-3 col-form-label">State</label>
                                      <div class="col-sm-9">
                                         <select id="inputState" name="inputState" class="form-control">
                                            <option selected>Select</option>
                                            <option>United Kingdom</option>
                                            <option>Russia</option>
                                            <option>Germany</option>
                                            <option>France</option>
                                            <option>Italy</option>
                                            <option>Netherlands</option>
                                            <option>Ukraine</option>
                                         </select>
                                      </div>
                                   </div>
                                   <div class="form-group row">
                                      <label for="inputArea" class="col-sm-3 col-form-label">Area</label>
                                      <div class="col-sm-9">
                                         <select id="inputArea" name="inputArea" class="form-control">
                                            <option selected>Select</option>
                                            <option>United Kingdom</option>
                                            <option>Russia</option>
                                            <option>Germany</option>
                                            <option>France</option>
                                            <option>Italy</option>
                                            <option>Netherlands</option>
                                            <option>Ukraine</option>
                                         </select>
                                      </div>
                                   </div>
                                   <div class="form-group row">
                                      <label for="inputLocation" class="col-sm-3 col-form-label">Location</label>
                                      <div class="col-sm-9">
                                         <select id="inputLocation"  name="inputLocation" class="form-control">
                                            <option selected>Select</option>
                                            <option>United Kingdom</option>
                                            <option>Russia</option>
                                            <option>Germany</option>
                                            <option>France</option>
                                            <option>Italy</option>
                                            <option>Netherlands</option>
                                            <option>Ukraine</option>
                                         </select>
                                      </div>
                                   </div>
                                 
                                
                                   <hr>
                                  <button type="submit" class="btn btn-primary float-right px-5">Submit</button>
                                
                               </form>
                               <!--------------form end-------->
                            </div>
                         </div>
                        <!---------------Ware House Address end--------------------------->
                      </div>
          
                      <div id="returnAdd" class="container tab-pane">
                        
                        <!---------------Return Address start--------------------------->
                        <div class=" mt-3 mb-3">
                            <div class=" pt-2 pb-2 pl-3 mt-3 border" style="background-color:#F7F8FA;">
                               <b>Return Address  </b>
                            </div>
                            <div class="  bg-white shadow pt-5 pb-3 pr-5 pl-5" >
                            
                               <!--------------form-------->
                               <form action="#" method="post" class="pb-5">
                                  <div class="form-group row">
                                      <label for="optradio" class="col-sm-3 col-form-label">Holiday Mode  </label>
                                      <div class="col-sm-9">
                                          <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
                                              <label class="form-check-label" for="inlineRadio1">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                              <label class="form-check-label" for="inlineRadio2">No</label>
                                            </div>
              
                                      </div>
                                   </div>
                                  <div class="form-group row">
                                      <label for="name" class="col-sm-3 col-form-label">First And Last Name</label>
                                      <div class="col-sm-9">
                                         <input type="text"  class="form-control" id="name" name="name" >
                                      </div>
                                   </div>
                                  <div class="form-group row">
                                      <label for="Address" class="col-sm-3 col-form-label">Address</label>
                                      <div class="col-sm-9">
                                         <input type="address"  class="form-control" id="address" name="address" >
                                      </div>
                                   </div>
                              
                                   <div class="form-group row">
                                      <label for="whContact" class="col-sm-3 col-form-label">Contact Number</label>
                                      <div class="col-sm-9">
                                         <input type="tel"  class="form-control" id="whContact" name="whContact" >
                                      </div>
                                   </div>
                                   <div class="form-group row">
                                       <label for="whEmail" class="col-sm-3 col-form-label"> Email</label>
                                       <div class="col-sm-9">
                                          <input type="email"  class="form-control" id="whEmail" name="whEmail" >
                                       </div>
                                    </div>
                                    <div class="form-group row">
                                      <label for="inputCountry" class="col-sm-3 col-form-label">Country/Region</label>
                                      <div class="col-sm-9">
                                         <select id="inputCountry" class="form-control">
                                            <option selected>Select</option>
                                            <option>United Kingdom</option>
                                            <option>Russia</option>
                                            <option>Germany</option>
                                            <option>France</option>
                                            <option>Italy</option>
                                            <option>Netherlands</option>
                                            <option>Ukraine</option>
                                         </select>
                                      </div>
                                   </div>
                                   <div class="form-group row">
                                      <label for="inputState" class="col-sm-3 col-form-label">State</label>
                                      <div class="col-sm-9">
                                         <select id="inputState" name="inputState" class="form-control">
                                            <option selected>Select</option>
                                            <option>United Kingdom</option>
                                            <option>Russia</option>
                                            <option>Germany</option>
                                            <option>France</option>
                                            <option>Italy</option>
                                            <option>Netherlands</option>
                                            <option>Ukraine</option>
                                         </select>
                                      </div>
                                   </div>
                                   <div class="form-group row">
                                      <label for="inputArea" class="col-sm-3 col-form-label">Area</label>
                                      <div class="col-sm-9">
                                         <select id="inputArea" name="inputArea" class="form-control">
                                            <option selected>Select</option>
                                            <option>United Kingdom</option>
                                            <option>Russia</option>
                                            <option>Germany</option>
                                            <option>France</option>
                                            <option>Italy</option>
                                            <option>Netherlands</option>
                                            <option>Ukraine</option>
                                         </select>
                                      </div>
                                   </div>
                                   <div class="form-group row">
                                      <label for="inputLocation" class="col-sm-3 col-form-label">Location</label>
                                      <div class="col-sm-9">
                                         <select id="inputLocation"  name="inputLocation" class="form-control">
                                            <option selected>Select</option>
                                            <option>United Kingdom</option>
                                            <option>Russia</option>
                                            <option>Germany</option>
                                            <option>France</option>
                                            <option>Italy</option>
                                            <option>Netherlands</option>
                                            <option>Ukraine</option>
                                         </select>
                                      </div>
                                   </div>
                                 
                                
                                   <hr>
                                  <button type="submit" class="btn btn-primary float-right px-5">Submit</button>
                                
                               </form>
                               <!--------------form end-------->
                            </div>
                         </div>
                        <!---------------Return Address end--------------------------->
                      
                    </div>
                    </div>
                  </div>
                  <!---General Profile end-->
          
                  <div id="sellerLogo" class="container tab-pane">
                     <!-- <div id="page-content-wrapper"> -->
                        <div class="">
                          
                        </div>
                        <!---------------Add product form---------->
                        <div class=" mt-3 mb-3">
                           <div class=" pt-2 pb-2 pl-3 mt-3 border" style="background-color:#F7F8FA;">
                              <b>Seller Logo  </b>
                              
                           </div>
                           <div class="  bg-white shadow pt-5 pb-3 pr-5 pl-5" >
                           
                              <!--------------form-------->
                              <form action="#" method="post" class="px-5 pb-5">
                                
                                
                                
                                 <div class="form-group ">
                                    <div class="row">
                                       <div class="col-3">
                                    <p class="text-center">Upload Your Logo</p> 
                                    <div class="p-5  text-center uploadimg-div">
                                    
                                          <input type="file" name="file-2[]" id="file-2" class="inputfile inputfile-2" style="display: none;">
                                          <label for="file-2" > 
                                             <div >
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                             </div>
                                             <div>Upload</div></label>
                                      </div>
                                    </div>
                                      <div class="col-3 text-center">
                                       <p class="text-center">Current Logo</p> 
                                       <div class="p-3  text-center border " >
                                       <img src="assets/img/Mask Group 4.png" alt="" width="150" height="130">
                                     </div>
                                     </div>
                                    </div>
                                    </div>
                                    
                                 
         
                        
                                 
                               
                              </form>
                              <!--------------form end-------->
                           </div>
                        </div>
                     
                  </div>
                </div>
              </div>
            </div>


@endsection