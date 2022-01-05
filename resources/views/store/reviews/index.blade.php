@extends('layouts.store.app')
@section('content')


<div id="">
               <div class="">
                  <p class="link-decoration"><a href="index.html">Home</a> > <a href="#">Reviews</a> > <a href="order-overview.html"> Manage Reviews</a></p>
                  <h4>  Reviews Management</h4>
                  <div class=" mt-3 mb-3">
                     <!-- Tab panes -->
                     <div class="  bg-white shadow  " >
                        <div class="tab-content">
                           <div class=" tab-pane active">
                              <br />
                              <ul class="nav separator navbar pt-0 shadow-sm" type="none" role="tablist">
                                 <li class="nav-item">
                                    <a
                                       data-toggle="tab"
                                       class="nav-link text-dark"
                                       href="#pReviews"
                                       aria-expanded="false"
                                       >Product Reviews</a
                                       >
                                 </li>
                                 <li class="nav-item">
                                    <a
                                       data-toggle="tab"
                                       class="nav-link text-dark"
                                       href="#sReviews"
                                       aria-expanded="false"
                                       >Seller Reviews</a
                                       >
                                 </li>
                              </ul>
                              <div class="tab-content pt-3">
                                 <div id="pReviews" class="container tab-pane active">
                                    <!--------------- Seller Reviews --------------------------->
                                    <div class="filter ml-3 mb-3">
                                       <button type="button" class="btn btn-primary active">All Reviews</button>
                                       <button type="button" class="btn btn-secondary ">With Images/Videos</button>
                                       <button type="button" class="btn btn-secondary ">With Text</button>
                                       <button type="button" class="btn btn-secondary ">Lower Than 4 Star</button>
                                    </div>
                                    <form class="" action="#">
                                       <div class="row mr-1 ml-1">
                                          <div class="form-group  col-sm-2 ">
                                             <input type="text" class="form-control" id="orderNo." aria-describedby="orderHelp" placeholder="Order Number">
                                          </div>
                                          <div class="col-sm-2">
                                             <input
                                                type="text"
                                                class="form-control"
                                                id="pname"
                                                placeholder="Product Name"
                                                name="pname"
                                                />
                                          </div>
                                          <div class="col-sm-2">
                                             <input
                                                type="text"
                                                class="form-control"
                                                id="SKU"
                                                placeholder="SKU "
                                                name="SKU"
                                                />
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
                                          <div class="col-sm-2">
                                             <select id="content" class="form-control">
                                                <option selected>Content</option>
                                                <option>C1</option>
                                                <option>C2</option>
                                                <option>C3</option>
                                                <option>C4</option>
                                                <option>C5</option>
                                                <option>C6</option>
                                                <option>C7</option>
                                             </select>
                                          </div>
                                          <div class="col-sm-2">
                                             <select id="content" class="form-control">
                                                <option selected>Rating</option>
                                                <option>R1</option>
                                                <option>R2</option>
                                                <option>R3</option>
                                                <option>R4</option>
                                                <option>R5</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="row mr-1 ml-1">
                                          <div class="col-sm-2">
                                             <select id="content" class="form-control">
                                                <option selected>Status</option>
                                                <option>Live</option>
                                                <option>Pending</option>
                                                <option>Draft</option>
                                                <option>Rejected</option>
                                             </select>
                                          </div>
                                          <div class="form-group col-sm-3 ">
                                             <input type="date" class="form-control " id="startDate" placeholder="Start Date">
                                          </div>
                                          <span> to </span>
                                          <div class="form-group col-sm-3">
                                             <input type="date" class="form-control" id="endDate" placeholder="-End Date">
                                          </div>
                                          <div class="float-right">
                                             <button type="button" class="btn btn-outline-primary mr-2">Clear All</button>
                                             <button type="submit" class="btn btn-primary float-right">Search</button>
                                          </div>
                                       </div>
                                    </form>
                                    <!----table---->
                                    <div class="table-div mt-3 pr-3 pl-3">
                                       <table class="table ">
                                          <thead>
                                             <tr class="header-row">
                                                <th scope="col" class="align-top">Order</th>
                                                <th scope="col" class="align-top">Content</th>
                                                <th scope="col" class="align-top">Product Name</th>
                                                <th scope="col" class="align-top">Rating</th>
                                                <th scope="col" class="align-top">Status</th>
                                                <th scope="col" class="align-top">Actions</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td>126160296420787</td>
                                                <td>
                                                   <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci, optio. Nesciunt laborum labore iusto facere dignissimos? Corporis, dolor facere saepe reprehenderit nisi dignissimos voluptatem, aut vitae sint blanditiis fuga quos?</p>
                                                   <div class="text-primary">Usama A. 15 Nov. 2021</div>
                                                   <img src="assets/img/Mask Group 4.png" alt="" /><br />
                                                </td>
                                                <td>Product Name</td>
                                                <td>5.0*</td>
                                                <td>Not Replied</td>
                                                <td>
                                                 <form action="manageReviews.html"> <button type="submit" class="btn btn-success ">
                                                 Reply Report
                                                   </button></form>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>126160296420787</td>
                                                <td>
                                                   <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci, optio. Nesciunt laborum labore iusto facere dignissimos? Corporis, dolor facere saepe reprehenderit nisi dignissimos voluptatem, aut vitae sint blanditiis fuga quos?</p>
                                                   <div class="text-primary">Usama A. 15 Nov. 2021</div>
                                                   <img src="assets/img/Mask Group 4.png" alt="" /><br />
                                                </td>
                                                <td>Product Name</td>
                                                <td>5.0*</td>
                                                <td>Not Replied</td>
                                                <td>
                                                  <form action="manageReviews.html"> <button type="submit" class="btn btn-success ">
                                                 Reply Report
                                                   </button></form>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>126160296420787</td>
                                                <td>
                                                   <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci, optio. Nesciunt laborum labore iusto facere dignissimos? Corporis, dolor facere saepe reprehenderit nisi dignissimos voluptatem, aut vitae sint blanditiis fuga quos?</p>
                                                   <div class="text-primary">Usama A. 15 Nov. 2021</div>
                                                   <img src="assets/img/Mask Group 4.png" alt="" /><br />
                                                </td>
                                                <td>Product Name</td>
                                                <td>5.0*</td>
                                                <td>Not Replied</td>
                                                <td>
                                                   <form action="manageReviews.html"> <button type="submit" class="btn btn-success ">
                                                 Reply Report
                                                   </button></form>
                                                </td>
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
                                    <!--------------- Seller Reviews End  --------------------------->
                                 </div>
                                 <div id="sReviews" class="container tab-pane">
                                    <!---------------Seller Reviews--------------------------->
                                    <form class="">
                                       <div class="row mr-1 ml-1">
                                          <div class="col-sm-2">
                                             <select id="content" class="form-control">
                                                <option selected>Content</option>
                                                <option>C1</option>
                                                <option>C2</option>
                                                <option>C3</option>
                                                <option>C4</option>
                                                <option>C5</option>
                                                <option>C6</option>
                                                <option>C7</option>
                                             </select>
                                          </div>
                                          <div class="col-sm-2">
                                             <select id="content" class="form-control">
                                                <option selected>Rating</option>
                                                <option>R1</option>
                                                <option>R2</option>
                                                <option>R3</option>
                                                <option>R4</option>
                                                <option>R5</option>
                                             </select>
                                          </div>
                                          <div class="col-sm-2">
                                             <select id="content" class="form-control">
                                                <option selected>Status</option>
                                                <option>Live</option>
                                                <option>Pending</option>
                                                <option>Draft</option>
                                                <option>Rejected</option>
                                             </select>
                                          </div>
                                          <div class="form-group  col-sm-2 ">
                                             <input type="text" class="form-control" id="orderNo." aria-describedby="orderHelp" placeholder="Order Number">
                                          </div>
                                          <div class="form-group col-sm-3 ">
                                             <input type="date" class="form-control " id="startDate" placeholder="Start Date">
                                          </div>
                                          <span> to </span>
                                          <div class="form-group col-sm-3">
                                             <input type="date" class="form-control" id="endDate" placeholder="-End Date">
                                          </div>
                                          <div class="float-right">
                                             <button type="button" class="btn btn-outline-primary mr-2">Clear All</button>
                                             <button type="button" class="btn btn-primary float-right">Search</button>
                                          </div>
                                       </div>
                                    </form>
                                    <!----table---->
                                    <div class="table-div mt-3 pr-3 pl-3">
                                       <table class="table table-bordered">
                                          <thead>
                                             <tr class="header-row">
                                                <th scope="col" class="align-top">Order Number</th>
                                                <th scope="col" class="align-top">Review</th>
                                                <th scope="col" class="align-top">Actions</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td class="text-primary">126160296420787</td>
                                                <td>
                                                   <img src="assets/img/Icon feather-smile.png" alt="" /><br />
                                                   <div>Usama Ahmad 15 Nov 2021</div>
                                                   <img src="assets/img/Group 214.png" alt="">
                                                </td>
                                                <td>
                                                   
                                                </td>
                                             </tr>
                                             <tr>
                                                <td class="text-primary">126160296420787</td>
                                                <td>
                                                   <img src="assets/img/Icon feather-smile.png" alt="" /><br />
                                                   <div>Usama Ahmad 15 Nov 2021</div>
                                                   <img src="assets/img/Group 214.png" alt="">
                                                </td>
                                                <td>
                                                   -
                                                   
                                                </td>
                                             </tr>
                                             <tr>
                                                <td class="text-primary">126160296420787</td>
                                                <td>
                                                   <img src="assets/img/Icon feather-smile.png" alt="" /><br />
                                                   <div>Usama Ahmad 15 Nov 2021</div>
                                                   <img src="assets/img/Group 214.png" alt="">
                                                </td>
                                                
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
                                    <!---------------Seller Reviews end --------------------------->
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>


@endsection