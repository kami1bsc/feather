@extends('layouts.store.app')
@section('content')

<div id="">
               <div class="">
                  <p class="link-decoration"><a href="index.html">Home</a> > <a href="#">Finance</a> > <a href="accStatement.html">Account Statement</a></p>
                  <h4>Account Statement</h4>
                  <div class=" mt-3 mb-3">
                     <div class="  pt-3  " >
                        <!-- form -->
                        <form class="d-flex">
                           <div class="col-md-1">  Period</div>
                           <div class="form-group col-md-3 ">
                              <input type="date" class="form-control " id="startDate" placeholder="Start Date">
                           </div>
                           <span> to </span>
                           <div class="form-group col-md-3">
                              <input type="date" class="form-control" id="endDate" placeholder="-End Date">
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
               <!---------------statement invoice---------->
               <div class="container mt-3 mb-3">
                  <div class="bg-white shadow pb-3 pr-5" >
               <!-- badge tag -->
               <div class="badges">
                  <span class="featured">Paid</span>
                </div>
         <!-- badge tag end-->
         <div class="pl-5">
                     <div class="row pr-2 pl-2 ">
                        
                        <div class="col-3">
                           <div><b>Opening Balance </b> </div>
                        </div>
                        <div class="col-9">
                           <div>Unpaid Balance From Previous Statements<span class="float-right">0.00 PKR</span></div>
                        </div>
                     </div><hr>
                     <div class="orders">
                     <div class="row pr-2 pl-2 pb-2 ">
                        <div class="col-3">
                           <div><b>Orders</b> </div>
                        </div>
                        <div class="col-9">
                           <div>Item Charges<span class="float-right">0.00 PKR</span></div>
                        </div>
                     </div>
                     <div class="row pr-2 pl-2 pb-2">
                        <div class="col-3">
                           <div> </div>
                        </div>
                        <div class="col-9">
                           <div>Claims<span class="float-right">0.00 PKR</span></div>
                        </div>
                     </div>
                     <div class="row pr-2 pl-2 pb-2 ">
                        <div class="col-3">
                           <div> </div>
                        </div>
                        <div class="col-9">
                           <div>Other Credit<span class="float-right">0.00 PKR</span></div>
                        </div>
                     </div>
                     <div class="row pr-2 pl-2 pb-2">
                        <div class="col-3">
                           <div> </div>
                        </div>
                        <div class="col-9">
                           <div>Our Fees<span class="float-right">0.00 PKR</span></div>
                        </div>
                     </div>
                     <div class="row pr-2 pl-2 pb-2">
                        <div class="col-3">
                           <div> </div>
                        </div>
                        <div class="col-9">
                           <div>Penalties<span class="float-right">0.00 PKR</span></div>
                        </div>
                     </div>
                     <div class="row pr-2 pl-2 pb-2 ">
                        <div class="col-3">
                           <div> </div>
                        </div>
                        <div class="col-9">
                           <div>Other Debit<span class="float-right">0.00 PKR</span></div>
                        </div>
                     </div>
                     <div class="row pr-2 pl-2 pb-2">
                        <div class="col-3">
                           <div> </div>
                        </div>
                        <div class="col-9">
                           <div>VAT<span class="float-right">0.00 PKR</span></div><hr>
                        </div>
                     </div>
                     <div class="row pr-2 pl-2 pb-5 ">
                        <div class="col-3">
                           <div> </div>
                        </div>
                        <div class="col-9">
                           <div>Subtotal<span class="float-right">372.78 PKR</span></div>
                        </div>
                     </div>
                  </div>
                  <div class="refunds">
                    <div class="row pr-2 pl-2 pb-2 ">
                       <div class="col-3">
                          <div><b>Refunds</b> </div>
                       </div>
                       <div class="col-9">
                          <div>Item Charges<span class="float-right">0.00 PKR</span></div>
                       </div>
                    </div>
                    <div class="row pr-2 pl-2 pb-2">
                       <div class="col-3">
                          <div> </div>
                       </div>
                       <div class="col-9">
                          <div>Claims<span class="float-right">0.00 PKR</span></div>
                       </div>
                    </div>
                    <div class="row pr-2 pl-2 pb-2 ">
                       <div class="col-3">
                          <div> </div>
                       </div>
                       <div class="col-9">
                          <div>Other Credit<span class="float-right">0.00 PKR</span></div>
                       </div>
                    </div>
                    <div class="row pr-2 pl-2 pb-2">
                       <div class="col-3">
                          <div> </div>
                       </div>
                       <div class="col-9">
                          <div>Our Fees<span class="float-right">0.00 PKR</span></div>
                       </div>
                    </div>
                    <div class="row pr-2 pl-2 pb-2">
                       <div class="col-3">
                          <div> </div>
                       </div>
                       <div class="col-9">
                          <div>Penalties<span class="float-right">0.00 PKR</span></div>
                       </div>
                    </div>
                    <div class="row pr-2 pl-2 pb-2 ">
                       <div class="col-3">
                          <div> </div>
                       </div>
                       <div class="col-9">
                          <div>Other Debit<span class="float-right">0.00 PKR</span></div>
                       </div>
                    </div>
                    <div class="row pr-2 pl-2 pb-2">
                       <div class="col-3">
                          <div> </div>
                       </div>
                       <div class="col-9">
                          <div>VAT<span class="float-right">0.00 PKR</span></div><hr>
                       </div>
                    </div>
                    <div class="row pr-2 pl-2 pb-2 ">
                       <div class="col-3">
                          <div> </div>
                       </div>
                       <div class="col-9">
                          <div>Subtotal<span class="float-right">372.78 PKR</span></div>
                       </div>
                    </div>
                 </div><hr>
                 <div class="row pr-2 pl-2 ">
                    <div class="col-3">
                       <div><b>closing Balance </b> </div>
                    </div>
                    <div class="col-9">
                       <div>Total Balance<span class="float-right">346.78 PKR</span></div>
                    </div>
                 </div><hr>
                 <div class="row pr-2 pl-2 ">
                    <div class="col-3">
                       <div><b>Payout</b> </div>
                    </div>
                    <div class="col-9">
                       <div>Payment Was Completed On:0006-11-21<span class="float-right">346.78 PKR</span></div>
                    </div>
                 </div>
               </div>
                </div>
               </div>
            </div>

@endsection