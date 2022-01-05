@extends('layouts.store.app')
@section('content')

<div id="page-content-wrapper">
               <div class="">
                  <p class="link-decoration"><a href="index.html">Home</a> > <a href="#">Finance</a> > <a href="order-overview.html">Order Overview</a></p>
                  <h4>Order Overview</h4>
                  <div class=" mt-3 mb-3" >
                     <div class="  bg-white shadow pt-3  " >
                        <form class="d-flex" action="#">
                           <div class="form-group mr-1 ml-1 col-md-2 ">
                              <input type="text" class="form-control" id="orderNo." aria-describedby="orderHelp" placeholder="Order Number">
                           </div>
                           <div class="form-group col-md-3 ">
                              <input type="date" class="form-control " id="startDate" placeholder="Start Date">
                           </div>
                           <span> to </span>
                           <div class="form-group col-md-3">
                              <input type="date" class="form-control" id="endDate" placeholder="-End Date">
                           </div>
                           <div class="col-3 col-sm-0"></div>
                           <div class="col-md-1 pr-5">
                              <button type="submit" class="btn btn-primary float-right" >Search</button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
               <!----table---->
               <div class="bg-white mt-3 mb-3 table-div">
                  <table class="table table-bordered">
                     <thead>
                        <tr class="head-row ">
                           <th scope="col" class="align-top">Order No.</th>
                           <th scope="col" class="align-top">Order Date</th>
                           <th scope="col" class="align-top">Order Item ID</th>
                           <th  scope="col" class="align-top">Seller SKU</th>
                           <th scope="col" class="align-top">UnitPrice</th>
                           <th scope="col" class="align-top"> Commission</th>
                           <th scope="col" class="align-top"> Fees&emsp;&nbsp;</th>
                           <th  scope="col" class="align-top"> Other Credits</th>
                           <th scope="col" class="align-top">VAT&emsp;&nbsp;</th>
                           <th scope="col" class="align-top"> WHT&emsp;&nbsp;</th>
                           <th scope="col" class="align-top"> Payout 
                              Amount
                           </th>
                           <th  scope="col" class="align-top"> Operational Status
                           </th>
                           <th  scope="col" class="align-top"> Payout 
                              Status
                           </th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <!-- <th scope="row">1</th> -->
                           <td>1261602964
                              20786
                           </td>
                           <td>9 Nov 2021</td>
                           <td>@1261602964
                              20786
                           </td>
                           <td>1261602964
                              20786
                           </td>
                           <td>$ 234</td>
                           <td>$ 234</td>
                           <td>$ 234</td>
                           <td>$ 234</td>
                           <td>$ 234</td>
                           <td>$ 234</td>
                           <td>$ 234</td>
                           <td>-</td>
                           <td>-</td>
                        </tr>
                        <tr>
                           <!-- <th scope="row">2</th> -->
                           <td>1261602964
                              20787
                           </td>
                           <td>9 Nov 2021</td>
                           <td>@1261602964
                              20787
                           </td>
                           <td>1261602964
                              20787
                           </td>
                           <td>$ 234</td>
                           <td>$ 234</td>
                           <td>$ 234</td>
                           <td>$ 234</td>
                           <td>$ 234</td>
                           <td>$ 234</td>
                           <td>$ 234</td>
                           <td>-</td>
                           <td>-</td>
                        </tr>
                        <tr>
                           <!-- <th scope="row">3</th> -->
                           <td >1261602964
                              20788
                           </td>
                           <td>9 Nov 2021</td>
                           <td>@1261602964
                              20788
                           </td>
                           <td>1261602964
                              20788
                           </td>
                           <td>$ 234</td>
                           <td>$ 234</td>
                           <td>$ 234</td>
                           <td>$ 234</td>
                           <td>$ 234</td>
                           <td>$ 234</td>
                           <td>$ 234</td>
                           <td>-</td>
                           <td>-</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>

@endsection