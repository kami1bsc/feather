
@extends('layouts.store.app')
@section('content')
<div class="container-fluid ">
                  <div class="row  justify-content-around  text-white mt-3 mb-3">
                     <div class="col-md-3 text-center mt-1 mb-1 first-div">
                        <h6>Totoal Products</h6>
                        <h3>125</h3>
                     </div>
                     <div class="col-md-3 second-div mt-1 mb-1 text-center ">
                        <h6>Totoal Orders</h6>
                        <h3>125</h3>
                     </div>
                     <div class="col-md-3 third-div text-center mt-1 mb-1  ">
                        <h6>Cancel Orders</h6>
                        <h3>5</h3>
                     </div>
                  </div>
                  <div class="row  justify-content-around  mt-3 mb-3 ">
                     <div class="col-md-6 col-sm-12 p-3">
                        <div class="p-4  bg-white shadow performance  ">
                        <h5><b>Performance</b></h5>
                        <hr>
                        <div class="row pr-2 pl-2 pb-4">
                           <div class="col-6">
                              <h5 class="mb-4">Order</h5>
                              <p>Ship on Time <span class="float-right">100%</span></p>
                              <hr>
                              <p> Cancellation Rate<span class="float-right">-</span></p>
                              <hr>
                              <p>Return Rate <span class="float-right">-</span></p>
                              <hr>
                           </div>
                           <div class="col-6">
                              <h5 class="mb-4">Rating</h5>
                              <p>Positive Seller Rating <span class="float-right">2.0</span></p>
                              <hr>
                              <p>Product Rating<span class="float-right">2.0</span></p>
                              <hr>
                              <p>Response Rate <span class="float-right">-</span></p>
                              <hr>
                              <p>Response Time(Min)<span class="float-right">-</span></p>
                              <hr>
                           </div>
                        </div>
                     </div>
                   </div>
                     <div class="col-md-6 col-sm-12  p-3  ">
                     <div class="p-4  bg-white shadow operation">
                        <h5><b>Operation</b></h5>
                        <hr>
                        <h5 class="mb-4">New Products</h5>
                        <hr>
                        <div class="row pr-2 pl-2 pb-4">
                           <div class="col-6">
                              <p>Rejected Products(Total)  <span class="float-right">3</span></p>
                              <hr>
                              <p> Approved Products <span class="float-right">12</span></p>
                              <hr>
                           </div>
                           <div class="col-6">
                              <p>Rejected Products(Miss Product Image) 
                                 <span class="float-right">4</span>
                              </p>
                              <hr>
                              <p>Pending Products <span class="float-right">1</span></p>
                              <hr>
                           </div>
                        </div>
                        <h5 class="mb-4">New Pending Orders<span class="float-right">Total 0</span></h5>
                        <hr>
                        <div class="row pr-2 pl-2 ">
                           <div class="col-6">
                              <p>Since > 24H   <span class="float-right">3</span></p>
                              <hr>
                              <p> Since < 12H  <span class="float-right">12</span></p>
                              <hr>
                           </div>
                           <div class="col-6">
                              <p>Since 12 - 24H <span class="float-right">4</span></p>
                              <hr>
                           </div>
                        </div>
                     </div>
                     </div>
                  </div>
                  <div class="container mt-3 mb-3">
                     <div class="  bg-white shadow pt-3 pb-3 seller" >
                        <h5 class="pl-4"><b>Seller Picks</b></h5>
                        <hr>
                        <div class="row ">
                           <div class="col-md-3 text-center mt-1 mb-1">
                              <div class=" picks   mr-1 ml-4   pt-1 pb-1">
                                 <p>Quota Usage</p>
                                 <h6>0 / 0</h6>
                              </div>
                           </div>
                           <div class="col-md-3  mt-1 mb-1 text-center ">
                              <div class=" picks  mr-1 ml-1  pt-1 pb-1">
                                 <p>Page Views</p>
                                 <h6>0</h6>
                              </div>
                           </div>
                           <div class="col-md-3 text-center mt-1 mb-1  ">
                              <div class=" picks  mr-1 ml-1  pt-1 pb-1">
                                 <p>Click Page View</p>
                                 <h6>0</h6>
                              </div>
                           </div>
                           <div class="col-md-3 text-center mt-1 mb-1  ">
                              <div class=" picks mr-4 ml-1 pt-1 pb-1">
                                 <p>Total Sales</p>
                                 <h6>
                                    PKR 0.00
                                 </h6>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <p>
               </div>
@endsection














