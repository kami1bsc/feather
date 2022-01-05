@extends('layouts.store.app')
@section('content')


<div id="page-content-wrapper">
               <div class="">
                  <p class="link-decoration"><a href="index.html">Home</a> > <a href="#">Orders</a> > <a href="order-overview.html"> Manage Orders</a></p>
                  <h4>  Orders Management</h4>
                  <div class=" mt-3 mb-3">
                     <div class="  bg-white shadow pt-3  " >
                        <form class="" action="#">
                           <div class="row mr-1 ml-1">
                              <div class="form-group  col-sm-2 ">
                                 <input type="text" class="form-control" id="orderNo." aria-describedby="orderHelp" placeholder="Order Number">
                              </div>
                              <div class="col-sm-2">
                                 <input
                                    type="text"
                                    class="form-control"
                                    id="customer"
                                    placeholder="Customer"
                                    name="customer"
                                    />
                              </div>
                              <div class="col-sm-2">
                                 <input
                                    type="text"
                                    class="form-control"
                                    id="Product"
                                    placeholder="Product "
                                    name="product"
                                    />
                              </div>
                              <div class="col-sm-2">
                                 <select id="content" class="form-control">
                                    <option selected>Product Tag</option>
                                    <option>PT1</option>
                                    <option>PT2</option>
                                    <option>PT3</option>
                                    <option>PT4</option>
                                    <option>PT5</option>
                                 </select>
                              </div>
                              <div class="col-sm-2">
                                 <input
                                    type="text"
                                    class="form-control"
                                    id="sSKU"
                                    placeholder="Seller SKU "
                                    name="sSKU"
                                    />
                              </div>
                           </div>
                           <div class="row mr-1 ml-1">
                              <div class="col-sm-2">
                                 <input
                                    type="text"
                                    class="form-control"
                                    id="Delivery Option"
                                    placeholder="Delivery Option "
                                    name="delivery"
                                    />
                              </div>
                              <div class="form-group col-sm-3 ">
                                 <input type="date" class="form-control " id="startDate" placeholder="Start Date">
                              </div>
                              <span> to </span>
                              <div class="form-group col-sm-3">
                                 <input type="date" class="form-control" id="endDate" placeholder="-End Date">
                              </div>
                              <div class="float-right">
                                 <button type="submit" class="btn btn-primary float-right">Search</button>
                              </div>
                           </div>
                        </form>
                     </div>
                     <!----table---->
                     <div class="table-div mt-3 table-bordered bg-white">
                        <table class="table ">
                           <thead>
                              <tr class="header-row">
                                 <th scope="col" class="align-top">
                                    <div class="form-check form-check-inline">
                                       <input
                                          class="form-check-input"
                                          type="checkbox"
                                          id="inlineCheckbox1"
                                          value="option1"
                                          />
                                    </div>
                                 </th>
                                 <th scope="col" class="align-top"></th>
                                 <th scope="col" class="align-top">Document</th>
                                 <th scope="col" class="align-top">Order No.</th>
                                 <th scope="col" class="align-top">Order Date</th>
                                 <th scope="col" class="align-top">Payment Method</th>
                                 <th scope="col" class="align-top">Retail Price</th>
                                 <th scope="col" class="align-top">#</th>
                                 <th scope="col" class="align-top">Status</th>
                                 <th scope="col" class="align-top">Printed</th>
                                 <th scope="col" class="align-top">Actions</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>
                                    <div class="form-check form-check-inline">
                                       <input
                                          class="form-check-input"
                                          type="checkbox"
                                          id="inlineCheckbox1"
                                          value="option1"
                                          />
                                    </div>
                                 </td>
                                 <td> 
                                    <i class="fa fa-minus" aria-hidden="true"  
                                       ></i> 
                                 </td>
                                 <td class="text-primary">Invoice</td>
                                 <td  class="text-primary">126160296420787</td>
                                 <td >22 May 2018
                                    21:25
                                 </td>
                                 <td>COD</td>
                                 <td>850.00</td>
                                 <td>1</td>
                                 <td>Delivered</td>
                                 <td><i class="fa fa-check text-primary" aria-hidden="true"></i></td>
                                 <td> </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="form-check form-check-inline">
                                       <input
                                          class="form-check-input"
                                          type="checkbox"
                                          id="inlineCheckbox1"
                                          value="option1"
                                          />
                                    </div>
                                 </td>
                                 <td> 
                                    <i class="fa fa-plus"  aria-hidden="true"  
                                       ></i> 
                                 </td>
                                 <td class="text-primary">Invoice</td>
                                 <td  class="text-primary">126160296420787</td>
                                 <td >22 May 2018
                                    21:25
                                 </td>
                                 <td>COD</td>
                                 <td>850.00</td>
                                 <td>1</td>
                                 <td>Cancelled</td>
                                 <td><i class="fa fa-times text-primary" aria-hidden="true"></i></td>
                                 <td> </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="form-check form-check-inline">
                                       <input
                                          class="form-check-input"
                                          type="checkbox"
                                          id="inlineCheckbox1"
                                          value="option1"
                                          />
                                    </div>
                                 </td>
                                 <td> 
                                    <i class="fa fa-plus"  aria-hidden="true"  
                                       ></i> 
                                 </td>
                                 <td class="text-primary">Invoice</td>
                                 <td  class="text-primary">126160296420787</td>
                                 <td >22 May 2018
                                    21:25
                                 </td>
                                 <td>COD</td>
                                 <td>850.00</td>
                                 <td>1</td>
                                 <td>Delivered</td>
                                 <td><i class="fa fa-check text-primary" aria-hidden="true"></i></td>
                                 <td> </td>
                              </tr>
                           </tbody>
                        </table>
                        <!----------------Pagination start------------>
                        <div>
                           <nav aria-label="Page navigation  example">
                              <ul class="pagination justify-content-center">
                                 <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                    </a>
                                 </li>
                                 <li class="page-item">
                                    <a class="page-link" href="#">1</a>
                                 </li>
                                 <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                 </li>
                                 <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                 </li>
                                 <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                    </a>
                                 </li>
                              </ul>
                           </nav>
                        </div>
                        <!----------------Pagination end------------>
                     </div>
                     <!----------table end---------->
                  </div>
               </div>
            </div>


@endsection