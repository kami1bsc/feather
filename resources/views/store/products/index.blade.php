@extends('layouts.store.app')
@section('content')
<div id="">
   <!-- <div class=""> -->
   <h4 class="mb-2" style = "text-align:center;">Product Management</h4>
   <div class="row">
      <div class="col-md-12 text-center">          
          @if(session()->has('message'))
              <div class="alert alert-success text-center">
                  {{ session()->get('message') }}
              </div>
          @endif
          @if(session()->has('error'))
              <div class="alert alert-warning text-center">
                  {{ session()->get('error') }}
              </div>
          @endif
      </div>             
  </div>
   <div class="explain-tab pt-2 pb-2 pl-3 mt-3 mb-3">
      <img src="assets/img/Icon feather-info.png" alt="">&nbsp;Explaination
   </div>
   <a href="{{ route('store.products.create') }}"> <button type="button" class="btn btn-primary mb-3" >Add New Product</button></a>
   <!-- </div> -->
   <!---------------Product Management---------->
   <div class="information bg-white shadow">
      <!-- Tab panes -->
      <ul class="nav nav-tabs" role="tablist">
         <li class="nav-item">
            <a data-toggle="tab" class="nav-link" href="#all">All</a>
         </li>
         <li class="nav-item">
            <a data-toggle="tab" class="nav-link" href="#online"
               >Online<span>(25)</span></a
               >
         </li>
         <li class="nav-item">
            <a data-toggle="tab" class="nav-link" href="#draft"
               >Draft<span>(0)</span></a
               >
         </li>
         <li class="nav-item">
            <a data-toggle="tab" class="nav-link" href="#pending"
               >Pending QC<span>(0)</span></a
               >
         </li>
         <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#outofstock"
               >Out of Stock<span>(2)</span></a
               >
         </li>
         <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#inactive"
               >Inactive<span>(3)</span></a
               >
         </li>
         <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#suspended"
               >Suspended<span>(3)</span>
            </a>
         </li>
         <li class="nav-item">
            <a
               data-toggle="tab"
               class="nav-link"
               href="#deleted"
               aria-expanded="true"
               >Deleted<span>(0)</span></a
               >
         </li>
      </ul>
      <div class="tab-content">
         <div id="all" class="tab-pane active">
            <!---------------all products--------------------------->
            <div class=" mb-3 pr-2 pl-2">
               <div class="">
                  <div class="explain-tab pt-2 pb-2 pl-3 mt-3 mb-3">
                     <img src="assets/img/Icon feather-info.png" alt="">
                     &nbsp;Explaination <br>
                     All product exclude delete and draft.
                  </div>
                  <div class="mb-3 p-2">
                     <div class="">
                        <!-- form -->
                        <form action="#">
                           <div class="form-group row">
                              <div class="col-sm-2">
                                 <select id="inputCountry" class="form-control">
                                    <option selected>Category</option>
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
                                 <input
                                    type="text"
                                    class="form-control"
                                    id="pid"
                                    placeholder="Product ID"
                                    name="pid"
                                    />
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
                                    id="sSKU"
                                    placeholder="Seller SKU "
                                    name="sSKU"
                                    />
                              </div>
                              <div class="col-sm-2">
                                 <input
                                    type="text"
                                    class="form-control"
                                    id="shopSKU"
                                    placeholder="Shop SKU "
                                    name="shopSKU"
                                    />
                              </div>
                              <div class="col-sm-2">
                                 <button type="submit" class="btn btn-primary">
                                 Search
                                 </button>
                              </div>
                           </div>
                        </form>
                        <div>Selected: <span>0</span></div>
                     </div>
                  </div>
                  <div class="table-div">
                     <table class="table table-striped" id = "all_products_table">
                        <thead>
                           <tr class="head-row">
                              
                              <th scope="col" class="align-top">ID</th>
                              <th scope="col" class="align-top">Category</th>
                              <th scope="col" class="align-top">Product</th>
                              <th scope="col" class="align-top">Image</th>
                              <th scope="col" class="align-top">Price</th>                             
                              <th scope="col" class="align-top">Stock</th>
                              <th scope="col" class="align-top">SKU</th>
                              <th scope="col" class="align-top">Tags</th>  
                              <th scope="col" class="align-top">Rating</th>                            
                              <th scope="col" class="align-top">Actions</th>
                           </tr>
                        </thead>
                        <tbody>
                          @foreach($products as $product)
                           <tr>                              
                              <td>{{ $product->id }}</td>
                              <td>{{ $product->category->category_name }}</td>
                              <td>{{ $product->bird_name}}</td>
                              <td>
                                @if($product->bird_image != "" || !empty($product->bird_image))
                                  <img src="{{ asset($product->bird_image) }}" alt="Bird Image" style = "width: 60px; height: 40px;">
                                @endif
                              </td>
                              <td>{{ $product->bird_price_currency }}{{ $product->bird_price }}</td>
                              <td>{{ $product->quantity }}</td>
                              <td>{{ $product->sku }}</td>
                              <td>{{ $product->tags }}</td>
                              <td>{{ $product->average_rating }}</td>
                              <td>
                                <a href="{{ route('store.products.show', $product->id) }}" class = "btn btn-sm btn-info"><i class = "fa fa-eye"></i></a>
                                <a href="" class = "btn btn-sm btn-primary"><i class = "fa fa-list"></i></a>
                                <a href="" class = "btn btn-sm btn-warning"><i class = "fa fa-pencil"></i></a>
                                <a href="" class = "btn btn-sm btn-danger"><i class = "fa fa-trash"></i></a>
                              </td>
                           </tr>                         
                          @endforeach  
                        </tbody>
                     </table>
                     <!----------------Pagination start------------>
                     {{ $products->links() }}
                     <!----------------Pagination end------------>
                  </div>
               </div>
            </div>
            <!---------------all products end--------------------------->
         </div>
         <div id="online" class="container tab-pane">
            <!---------------Online Products--------------------------->
            <div class=" mb-3 pr-2 pl-2">
               <div class="">
                  <div class="explain-tab pt-2 pb-2 pl-3 mt-3 mb-3">
                     <img src="assets/img/Icon feather-info.png" alt="">
                     &nbsp;Explaination <br>
                     The product which is buyer can see and stock > 0 will appear in online tab.
                  </div>
                  <div class="mb-3 p-2">
                     <div class="">
                        <!-- form -->
                        <form>
                           <div class="form-group row">
                              <div class="col-sm-2">
                                 <select id="inputCountry" class="form-control">
                                    <option selected>Category</option>
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
                                 <input
                                    type="text"
                                    class="form-control"
                                    id="pid"
                                    placeholder="Product ID"
                                    name="pid"
                                    />
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
                                    id="sSKU"
                                    placeholder="Seller SKU "
                                    name="sSKU"
                                    />
                              </div>
                              <div class="col-sm-2">
                                 <input
                                    type="text"
                                    class="form-control"
                                    id="shopSKU"
                                    placeholder="Shop SKU "
                                    name="shopSKU"
                                    />
                              </div>
                              <div class="col-sm-2">
                                 <button type="submit" class="btn btn-primary">
                                 Search
                                 </button>
                              </div>
                           </div>
                        </form>
                        <div>Selected: <span>0</span></div>
                     </div>
                  </div>
                  <div class="table-div">
                     <table class="table table-striped">
                        <thead>
                           <tr class="head-row">
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
                              <th scope="col" class="align-top">Product</th>
                              <th scope="col" class="align-top">Product/SKU</th>
                              <th scope="col" class="align-top">Variation</th>
                              <th scope="col" class="align-top">Status</th>
                              <th scope="col" class="align-top">Price</th>
                              <th scope="col" class="align-top">Stock</th>
                              <th scope="col" class="align-top">Created</th>
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
                                 <img src="assets/img/Mask Group 4.png" alt="" /><br />
                                 Product Name
                              </td>
                              <td>190728727</td>
                              <td>N/A</td>
                              <td>Live</td>
                              <td>$100</td>
                              <td>40</td>
                              <td>
                                 2020-11-24 13:24:58 <br />
                                 Updated:<br />
                                 2021-10-29 05:24:52
                              </td>
                              <td>
                                 <form action="addProduct.html">  <button type="submit" class="btn btn-success">
                                    Edit
                                    </button>
                                    <button type="button" class="btn btn-danger">
                                    Delete
                                    </button>
                                 </form>
                              </td>
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
                                 <img src="assets/img/Mask Group 4.png" alt="" /><br />
                                 Product Name
                              </td>
                              <td>190728727</td>
                              <td>N/A</td>
                              <td>Live</td>
                              <td>$100</td>
                              <td>40</td>
                              <td>
                                 2020-11-24 13:24:58<br />
                                 Updated:<br />
                                 2021-10-29 05:24:52
                              </td>
                              <td>
                                 <form action="addProduct.html">  <button type="submit" class="btn btn-success">
                                    Edit
                                    </button>
                                    <button type="button" class="btn btn-danger">
                                    Delete
                                    </button>
                                 </form>
                              </td>
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
                                 <img src="assets/img/Mask Group 4.png" alt="" /><br />
                                 Product Name
                              </td>
                              <td>190728727</td>
                              <td>N/A</td>
                              <td>Live</td>
                              <td>$100</td>
                              <td>40</td>
                              <td>
                                 2020-11-24 13:24:58<br />
                                 Updated:<br />
                                 2021-10-29 05:24:52
                              </td>
                              <td>
                                 <form action="addProduct.html">  <button type="submit" class="btn btn-success">
                                    Edit
                                    </button>
                                    <button type="button" class="btn btn-danger">
                                    Delete
                                    </button>
                                 </form>
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
               </div>
            </div>
            <!---------------Online Products end--------------------------->
         </div>
         <div id="draft" class="container tab-pane">
            <!---------------Draft Products--------------------------->
            <div class=" mb-3 pr-2 pl-2">
               <div class="">
                  <div class="explain-tab pt-2 pb-2 pl-3 mt-3 mb-3">
                     <img src="assets/img/Icon feather-info.png" alt="">
                     &nbsp;Explaination <br>
                     Added products but are not yet online.
                  </div>
                  <div class="mb-3 p-2">
                     <div class="">
                        <!-- form -->
                        <form>
                           <div class="form-group row">
                              <div class="col-sm-2">
                                 <select id="inputCountry" class="form-control">
                                    <option selected>Category</option>
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
                                 <input
                                    type="text"
                                    class="form-control"
                                    id="pid"
                                    placeholder="Product ID"
                                    name="pid"
                                    />
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
                                    id="sSKU"
                                    placeholder="Seller SKU "
                                    name="sSKU"
                                    />
                              </div>
                              <div class="col-sm-2">
                                 <input
                                    type="text"
                                    class="form-control"
                                    id="shopSKU"
                                    placeholder="Shop SKU "
                                    name="shopSKU"
                                    />
                              </div>
                              <div class="col-sm-2">
                                 <button type="submit" class="btn btn-primary">
                                 Search
                                 </button>
                              </div>
                           </div>
                        </form>
                        <div>Selected: <span>0</span></div>
                     </div>
                  </div>
                  <div class="table-div">
                     <table class="table table-striped">
                        <thead>
                           <tr class="head-row">
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
                              <th scope="col" class="align-top">Product</th>
                              <!-- <th scope="col" class="align-top">Product/SKU</th>
                                 <th scope="col" class="align-top">Variation</th>
                                 <th scope="col" class="align-top">Status</th>
                                 <th scope="col" class="align-top">Price</th>
                                 <th scope="col" class="align-top">Stock</th> -->
                              <th scope="col" class="align-top">Created</th>
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
                                 <img src="assets/img/Mask Group 4.png" alt="" /><br />
                                 Product Name
                              </td>
                              <!-- <td>190728727</td>
                                 <td>N/A</td>
                                 <td>Live</td>
                                 <td>$100</td>
                                 <td>40</td> -->
                              <td>
                                 2020-11-24 13:24:58 <br />
                                 Updated:<br />
                                 2021-10-29 05:24:52
                              </td>
                              <td>
                                 <form action="addProduct.html">  <button type="submit" class="btn btn-success">
                                    Edit
                                    </button>
                                    <button type="button" class="btn btn-danger">
                                    Delete
                                    </button>
                                 </form>
                              </td>
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
                                 <img src="assets/img/Mask Group 4.png" alt="" /><br />
                                 Product Name
                              </td>
                              <!-- <td>190728727</td>
                                 <td>N/A</td>
                                 <td>Live</td>
                                 <td>$100</td>
                                 <td>40</td> -->
                              <td>
                                 2020-11-24 13:24:58<br />
                                 Updated:<br />
                                 2021-10-29 05:24:52
                              </td>
                              <td>
                                 <form action="addProduct.html">  <button type="submit" class="btn btn-success">
                                    Edit
                                    </button>
                                    <button type="button" class="btn btn-danger">
                                    Delete
                                    </button>
                                 </form>
                              </td>
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
                                 <img src="assets/img/Mask Group 4.png" alt="" /><br />
                                 Product Name
                              </td>
                              <!-- <td>190728727</td>
                                 <td>N/A</td>
                                 <td>Live</td>
                                 <td>$100</td>
                                 <td>40</td> -->
                              <td>
                                 2020-11-24 13:24:58<br />
                                 Updated:<br />
                                 2021-10-29 05:24:52
                              </td>
                              <td>
                                 <form action="addProduct.html">  <button type="submit" class="btn btn-success">
                                    Edit
                                    </button>
                                    <button type="button" class="btn btn-danger">
                                    Delete
                                    </button>
                                 </form>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                     <!----------------Pagination start------------>
                     <div >
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
               </div>
            </div>
            <!---------------Draft Products end----------------->
         </div>
         <div id="pending" class="container tab-pane">
            <!---------------Pending Products--------------------------->
            <div class=" mb-3 pr-2 pl-2">
               <div class="">
                  <div class="explain-tab pt-2 pb-2 pl-3 mt-3 mb-3">
                     <img src="assets/img/Icon feather-info.png" alt="">
                     &nbsp;Explaination <br>
                     The product which is buyer can see and stock > 0 will appear in online tab.
                  </div>
                  <div class="mb-3 p-2">
                     <div class="">
                        <!-- form -->
                        <form>
                           <div class="form-group row">
                              <div class="col-sm-2">
                                 <select id="inputCountry" class="form-control">
                                    <option selected>Category</option>
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
                                 <input
                                    type="text"
                                    class="form-control"
                                    id="pid"
                                    placeholder="Product ID"
                                    name="pid"
                                    />
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
                                    id="sSKU"
                                    placeholder="Seller SKU "
                                    name="sSKU"
                                    />
                              </div>
                              <div class="col-sm-2">
                                 <input
                                    type="text"
                                    class="form-control"
                                    id="shopSKU"
                                    placeholder="Shop SKU "
                                    name="shopSKU"
                                    />
                              </div>
                              <div class="col-sm-2">
                                 <button type="submit" class="btn btn-primary">
                                 Search
                                 </button>
                              </div>
                           </div>
                        </form>
                        <div>Selected: <span>0</span></div>
                     </div>
                  </div>
                  <div class="table-div">
                     <table class="table table-striped">
                        <thead>
                           <tr class="head-row">
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
                              <th scope="col" class="align-top">Product</th>
                              <th scope="col" class="align-top">Product/SKU</th>
                              <th scope="col" class="align-top">Variation</th>
                              <!-- <th scope="col" class="align-top">Status</th> -->
                              <th scope="col" class="align-top">Price</th>
                              <!-- <th scope="col" class="align-top">Stock</th> -->
                              <th scope="col" class="align-top">Created</th>
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
                                 <img src="assets/img/Mask Group 4.png" alt="" /><br />
                                 Product Name
                              </td>
                              <td>190728727</td>
                              <td>N/A</td>
                              <!-- <td>Live</td> -->
                              <td>$100</td>
                              <!-- <td>40</td> -->
                              <td>
                                 2020-11-24 13:24:58 <br />
                                 Updated:<br />
                                 2021-10-29 05:24:52
                              </td>
                              <td>
                                 <form action="addProduct.html">  <button type="submit" class="btn btn-success">
                                    Edit
                                    </button>
                                    <button type="button" class="btn btn-danger">
                                    Delete
                                    </button>
                                 </form>
                              </td>
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
                                 <img src="assets/img/Mask Group 4.png" alt="" /><br />
                                 Product Name
                              </td>
                              <td>190728727</td>
                              <td>N/A</td>
                              <!-- <td>Live</td> -->
                              <td>$100</td>
                              <!-- <td>40</td> -->
                              <td>
                                 2020-11-24 13:24:58<br />
                                 Updated:<br />
                                 2021-10-29 05:24:52
                              </td>
                              <td>
                                 <form action="addProduct.html">  <button type="submit" class="btn btn-success">
                                    Edit
                                    </button>
                                    <button type="button" class="btn btn-danger">
                                    Delete
                                    </button>
                                 </form>
                              </td>
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
                                 <img src="assets/img/Mask Group 4.png" alt="" /><br />
                                 Product Name
                              </td>
                              <td>190728727</td>
                              <td>N/A</td>
                              <!-- <td>Live</td> -->
                              <td>$100</td>
                              <!-- <td>40</td> -->
                              <td>
                                 2020-11-24 13:24:58<br />
                                 Updated:<br />
                                 2021-10-29 05:24:52
                              </td>
                              <td>
                                 <form action="addProduct.html">  <button type="submit" class="btn btn-success">
                                    Edit
                                    </button>
                                    <button type="button" class="btn btn-danger">
                                    Delete
                                    </button>
                                 </form>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                     <!----------------Pagination start------------>
                     <div >
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
               </div>
            </div>
            <!---------------Pending Products end--------------------------->
         </div>
         <div id="outofstock" class="container tab-pane">
            <!---------------Out of Stock--------------------------->
            <div class=" mb-3 pr-2 pl-2">
               <div class="">
                  <div class="explain-tab pt-2 pb-2 pl-3 mt-3 mb-3">
                     <img src="assets/img/Icon feather-info.png" alt="">
                     &nbsp;Explaination <br>
                     Product which sellable stock is 0 and include live SKU.
                  </div>
                  <div class="mb-3 p-2">
                     <div class="">
                        <!-- form -->
                        <form>
                           <div class="form-group row">
                              <div class="col-sm-2">
                                 <select id="inputCountry" class="form-control">
                                    <option selected>Category</option>
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
                                 <input
                                    type="text"
                                    class="form-control"
                                    id="pid"
                                    placeholder="Product ID"
                                    name="pid"
                                    />
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
                                    id="sSKU"
                                    placeholder="Seller SKU "
                                    name="sSKU"
                                    />
                              </div>
                              <div class="col-sm-2">
                                 <input
                                    type="text"
                                    class="form-control"
                                    id="shopSKU"
                                    placeholder="Shop SKU "
                                    name="shopSKU"
                                    />
                              </div>
                              <div class="col-sm-2">
                                 <button type="submit" class="btn btn-primary">
                                 Search
                                 </button>
                              </div>
                           </div>
                        </form>
                        <div>Selected: <span>0</span></div>
                     </div>
                  </div>
                  <div class="table-div">
                     <table class="table table-striped">
                        <thead>
                           <tr class="head-row">
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
                              <th scope="col" class="align-top">Product</th>
                              <th scope="col" class="align-top">Product/SKU</th>
                              <th scope="col" class="align-top">Variation</th>
                              <th scope="col" class="align-top">Status</th>
                              <th scope="col" class="align-top">Price</th>
                              <th scope="col" class="align-top">Stock</th>
                              <th scope="col" class="align-top">Created</th>
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
                                 <img src="assets/img/Mask Group 4.png" alt="" /><br />
                                 Product Name
                              </td>
                              <td>190728727</td>
                              <td>N/A</td>
                              <td>Live</td>
                              <td>$100</td>
                              <td class="text-primary">Sold Out</td>
                              <td> 
                                 2020-11-24 13:24:58 <br />
                                 Updated:<br />
                                 2021-10-29 05:24:52
                              </td>
                              <td>
                                 <form action="addProduct.html">  <button type="submit" class="btn btn-success">
                                    Edit
                                    </button>
                                    <button type="button" class="btn btn-danger">
                                    Delete
                                    </button>
                                 </form>
                              </td>
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
                                 <img src="assets/img/Mask Group 4.png" alt="" /><br />
                                 Product Name
                              </td>
                              <td>190728727</td>
                              <td>N/A</td>
                              <td>Live</td>
                              <td>$100</td>
                              <td class="text-primary">Sold Out</td>
                              <td>
                                 2020-11-24 13:24:58<br />
                                 Updated:<br />
                                 2021-10-29 05:24:52
                              </td>
                              <td>
                                 <form action="addProduct.html">  <button type="submit" class="btn btn-success">
                                    Edit
                                    </button>
                                    <button type="button" class="btn btn-danger">
                                    Delete
                                    </button>
                                 </form>
                              </td>
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
                                 <img src="assets/img/Mask Group 4.png" alt="" /><br />
                                 Product Name
                              </td>
                              <td>190728727</td>
                              <td>N/A</td>
                              <td>Live</td>
                              <td>$100</td>
                              <td class="text-primary">Sold Out</td>
                              <td>
                                 2020-11-24 13:24:58<br />
                                 Updated:<br />
                                 2021-10-29 05:24:52
                              </td>
                              <td>
                                 <form action="addProduct.html">  <button type="submit" class="btn btn-success">
                                    Edit
                                    </button>
                                    <button type="button" class="btn btn-danger">
                                    Delete
                                    </button>
                                 </form>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                     <!----------------Pagination start------------>
                     <div >
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
               </div>
            </div>
            <!----------------Out of Stock end------------>
         </div>
         <div id="inactive" class="container tab-pane">
            <!---------------Inactive Products--------------------------->
            <div class=" mb-3 pr-2 pl-2">
               <div class="">
                  <div class="explain-tab pt-2 pb-2 pl-3 mt-3 mb-3">
                     <img src="assets/img/Icon feather-info.png" alt="">
                     &nbsp;Explaination <br>
                     Product which include inactive SKU.
                  </div>
                  <div class="mb-3 p-2">
                     <div class="">
                        <!-- form -->
                        <form>
                           <div class="form-group row">
                              <div class="col-sm-2">
                                 <select id="inputCountry" class="form-control">
                                    <option selected>Category</option>
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
                                 <input
                                    type="text"
                                    class="form-control"
                                    id="pid"
                                    placeholder="Product ID"
                                    name="pid"
                                    />
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
                                    id="sSKU"
                                    placeholder="Seller SKU "
                                    name="sSKU"
                                    />
                              </div>
                              <div class="col-sm-2">
                                 <input
                                    type="text"
                                    class="form-control"
                                    id="shopSKU"
                                    placeholder="Shop SKU "
                                    name="shopSKU"
                                    />
                              </div>
                              <div class="col-sm-2">
                                 <button type="submit" class="btn btn-primary">
                                 Search
                                 </button>
                              </div>
                           </div>
                        </form>
                        <div>Selected: <span>0</span></div>
                     </div>
                  </div>
                  <div class="table-div">
                     <table class="table table-striped">
                        <thead>
                           <tr class="head-row">
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
                              <th scope="col" class="align-top">Product</th>
                              <th scope="col" class="align-top">Product/SKU</th>
                              <th scope="col" class="align-top">Variation</th>
                              <th scope="col" class="align-top">Status</th>
                              <th scope="col" class="align-top">Price</th>
                              <th scope="col" class="align-top">Stock</th>
                              <th scope="col" class="align-top">Created</th>
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
                                 <img src="assets/img/Mask Group 4.png" alt="" /><br />
                                 Product Name
                              </td>
                              <td>190728727</td>
                              <td>N/A</td>
                              <td>Live</td>
                              <td>$100</td>
                              <td>123</td>
                              <td> 
                                 2020-11-24 13:24:58 <br />
                                 Updated:<br />
                                 2021-10-29 05:24:52
                              </td>
                              <td>
                                 <form action="addProduct.html">  <button type="submit" class="btn btn-success">
                                    Edit
                                    </button>
                                    <button type="button" class="btn btn-danger">
                                    Delete
                                    </button>
                                 </form>
                              </td>
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
                                 <img src="assets/img/Mask Group 4.png" alt="" /><br />
                                 Product Name
                              </td>
                              <td>190728727</td>
                              <td>N/A</td>
                              <td>Live</td>
                              <td>$100</td>
                              <td>123</td>
                              <td>
                                 2020-11-24 13:24:58<br />
                                 Updated:<br />
                                 2021-10-29 05:24:52
                              </td>
                              <td>
                                 <form action="addProduct.html">  <button type="submit" class="btn btn-success">
                                    Edit
                                    </button>
                                    <button type="button" class="btn btn-danger">
                                    Delete
                                    </button>
                                 </form>
                              </td>
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
                                 <img src="assets/img/Mask Group 4.png" alt="" /><br />
                                 Product Name
                              </td>
                              <td>190728727</td>
                              <td>N/A</td>
                              <td>Live</td>
                              <td>$100</td>
                              <td>123</td>
                              <td>
                                 2020-11-24 13:24:58<br />
                                 Updated:<br />
                                 2021-10-29 05:24:52
                              </td>
                              <td>
                                 <form action="addProduct.html">  <button type="submit" class="btn btn-success">
                                    Edit
                                    </button>
                                    <button type="button" class="btn btn-danger">
                                    Delete
                                    </button>
                                 </form>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                     <!----------------Pagination start------------>
                     <div >
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
               </div>
            </div>
            <!---------------inactive products end--------------------------->
         </div>
         <div id="suspended" class="container tab-pane">
            <!---------------Suspended Products--------------------------->
            <div class=" mb-3 pr-2 pl-2">
               <div class="">
                  <div class="explain-tab pt-2 pb-2 pl-3 mt-3 mb-3">
                     <img src="assets/img/Icon feather-info.png" alt="">
                     &nbsp;Explaination <br>
                     Product which include punished by admin SKU.
                  </div>
                  <div class="mb-3 p-2">
                     <div class="">
                        <!-- form -->
                        <form>
                           <div class="form-group row">
                              <div class="col-sm-2">
                                 <select id="inputCountry" class="form-control">
                                    <option selected>Category</option>
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
                                 <input
                                    type="text"
                                    class="form-control"
                                    id="pid"
                                    placeholder="Product ID"
                                    name="pid"
                                    />
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
                                    id="sSKU"
                                    placeholder="Seller SKU "
                                    name="sSKU"
                                    />
                              </div>
                              <div class="col-sm-2">
                                 <input
                                    type="text"
                                    class="form-control"
                                    id="shopSKU"
                                    placeholder="Shop SKU "
                                    name="shopSKU"
                                    />
                              </div>
                              <div class="col-sm-2">
                                 <button type="submit" class="btn btn-primary">
                                 Search
                                 </button>
                              </div>
                           </div>
                        </form>
                        <div>Selected: <span>0</span></div>
                     </div>
                  </div>
                  <div class="table-div">
                     <table class="table table-striped">
                        <thead>
                           <tr class="head-row">
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
                              <th scope="col" class="align-top">Product</th>
                              <th scope="col" class="align-top">Product/SKU</th>
                              <th scope="col" class="align-top">Variation</th>
                              <th scope="col" class="align-top">Status</th>
                              <th scope="col" class="align-top">Violation Description</th>
                              <th scope="col" class="align-top">Created</th>
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
                                 <img src="assets/img/Mask Group 4.png" alt="" /><br />
                                 Product Name
                              </td>
                              <td>190728727</td>
                              <td>N/A</td>
                              <td>Rejected</td>
                              <td><a href="#">See Reason ></a></td>
                              <td> 
                                 2020-11-24 13:24:58 <br />
                                 Updated:<br />
                                 2021-10-29 05:24:52
                              </td>
                              <td>
                                 <form action="addProduct.html">  <button type="submit" class="btn btn-success">
                                    Edit
                                    </button>
                                    <button type="button" class="btn btn-danger">
                                    Delete
                                    </button>
                                 </form>
                              </td>
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
                                 <img src="assets/img/Mask Group 4.png" alt="" /><br />
                                 Product Name
                              </td>
                              <td>190728727</td>
                              <td>N/A</td>
                              <td>Rejected</td>
                              <td><a href="#">See Reason ></a></td>
                              <td>
                                 2020-11-24 13:24:58<br />
                                 Updated:<br />
                                 2021-10-29 05:24:52
                              </td>
                              <td>
                                 <form action="addProduct.html">  <button type="submit" class="btn btn-success">
                                    Edit
                                    </button>
                                    <button type="button" class="btn btn-danger">
                                    Delete
                                    </button>
                                 </form>
                              </td>
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
                                 <img src="assets/img/Mask Group 4.png" alt="" /><br />
                                 Product Name
                              </td>
                              <td>190728727</td>
                              <td>N/A</td>
                              <td>Rejected</td>
                              <td><a href="#">See Reason ></a></td>
                              <td>
                                 2020-11-24 13:24:58<br />
                                 Updated:<br />
                                 2021-10-29 05:24:52
                              </td>
                              <td>
                                 <form action="addProduct.html">  <button type="submit" class="btn btn-success">
                                    Edit
                                    </button>
                                    <button type="button" class="btn btn-danger">
                                    Delete
                                    </button>
                                 </form>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                     <!----------------Pagination start------------>
                     <div >
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
               </div>
            </div>
            <!---------------Suspended Products end--------------------------->
         </div>
         <div id="deleted" class="container tab-pane">
            <!---------------Deleted Products--------------------------->
            <div class=" mb-3 pr-2 pl-2">
               <div class="">
                  <div class="explain-tab pt-2 pb-2 pl-3 mt-3 mb-3">
                     <img src="assets/img/Icon feather-info.png" alt="">
                     &nbsp;Explaination <br>
                     All product exclude delete and draft.
                  </div>
                  <div class="mb-3 p-2">
                     <div class="">
                        <!-- form -->
                        <form>
                           <div class="form-group row">
                              <div class="col-sm-2">
                                 <select id="inputCountry" class="form-control">
                                    <option selected>Category</option>
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
                                 <input
                                    type="text"
                                    class="form-control"
                                    id="pid"
                                    placeholder="Product ID"
                                    name="pid"
                                    />
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
                                    id="sSKU"
                                    placeholder="Seller SKU "
                                    name="sSKU"
                                    />
                              </div>
                              <div class="col-sm-2">
                                 <input
                                    type="text"
                                    class="form-control"
                                    id="shopSKU"
                                    placeholder="Shop SKU "
                                    name="shopSKU"
                                    />
                              </div>
                              <div class="col-sm-2">
                                 <button type="submit" class="btn btn-primary">
                                 Search
                                 </button>
                              </div>
                           </div>
                        </form>
                        <div>Selected: <span>0</span></div>
                     </div>
                  </div>
                  <div class="table-div">
                     <table class="table table-striped">
                        <thead>
                           <tr class="head-row">
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
                              <th scope="col" class="align-top">Product</th>
                              <th scope="col" class="align-top">Product/SKU</th>
                              <th scope="col" class="align-top">Variation</th>
                              <th scope="col" class="align-top">Price</th>
                              <th scope="col" class="align-top">Created</th>
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
                                 <img src="assets/img/Mask Group 4.png" alt="" /><br />
                                 Product Name
                              </td>
                              <td>190728727</td>
                              <td>N/A</td>
                              <td>$100</td>
                              <td> 
                                 2020-11-24 13:24:58 <br />
                                 Updated:<br />
                                 2021-10-29 05:24:52
                              </td>
                              <td>
                                 <form action="addProduct.html">  <button type="submit" class="btn btn-success">
                                    Edit
                                    </button>
                                    <button type="button" class="btn btn-danger">
                                    Delete
                                    </button>
                                 </form>
                              </td>
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
                                 <img src="assets/img/Mask Group 4.png" alt="" /><br />
                                 Product Name
                              </td>
                              <td>190728727</td>
                              <td>N/A</td>
                              <td>$100</td>
                              <td>
                                 2020-11-24 13:24:58<br />
                                 Updated:<br />
                                 2021-10-29 05:24:52
                              </td>
                              <td>
                                 <form action="addProduct.html">  <button type="submit" class="btn btn-success">
                                    Edit
                                    </button>
                                    <button type="button" class="btn btn-danger">
                                    Delete
                                    </button>
                                 </form>
                              </td>
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
                                 <img src="assets/img/Mask Group 4.png" alt="" /><br />
                                 Product Name
                              </td>
                              <td>190728727</td>
                              <td>N/A</td>
                              <td>$100</td>
                              <td>
                                 2020-11-24 13:24:58<br />
                                 Updated:<br />
                                 2021-10-29 05:24:52
                              </td>
                              <td>
                                 <form action="addProduct.html">  <button type="submit" class="btn btn-success">
                                    Edit
                                    </button>
                                    <button type="button" class="btn btn-danger">
                                    Delete
                                    </button>
                                 </form>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                     <!----------------Pagination start------------>
                     <div >
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
               </div>
            </div>
            <!---------------deleted products end--------------------------->
         </div>
      </div>
   </div>
</div>
@endsection