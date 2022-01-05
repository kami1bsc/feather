@extends('layouts.store.app')
@section('content')

<div id="">
               <p class="link-decoration"><a href="index.html">Home</a> > <a href="">Products</a> > <a href="manageImages.html">Manage Images</a></p>
                  <h4>Manage Product Image</h4>
             <!------------Profile code start------>
             <div class="">
              
          
                <!-- Tab panes -->
                <div class="tab-content">
                  <div class=" tab-pane active">
                    <br />
                    <ul class="nav separator navbar shadow-sm" type="none" role="tablist">
                      <li class="nav-item">
                        <a
                          data-toggle="tab"
                          class="nav-link text-dark"
                          href="#skuImage"
                          aria-expanded="false"
                          >SKU Image<span> (45)</span> </a
                        >
                      </li>
                      <li class="nav-item">
                        <a
                          data-toggle="tab"
                          class="nav-link text-dark"
                          href="#itemImage"
                          aria-expanded="false"
                          >Item Image<span> (45)</span></a
                        >
                      </li>
                      <li class="nav-item">
                        <a
                          data-toggle="tab"
                          class="nav-link text-dark"
                          href="#imageMissing"
                          aria-expanded="true"
                          >Image Missing<span>(45)</span>  </a
                        >
                      </li>
                      
                    
                    </ul>
                    <div class="tab-content">
                      <div id="skuImage" class="container tab-pane active">
                       
                        <!--------------- SKU Images --------------------------->
                        <!----table---->
                     <div class="table-div mt-3 table-bordered bg-white">
                        <table class="table ">
                           <thead>
                              <tr class="header-row">
                                 <th scope="col" class="align-top">Product</th>
                                 <th scope="col" class="align-top">SKU</th>
                                 <th scope="col" class="align-top">All Images</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>  <td>Product Name<br>Full</td>
                                 <td>192906868-160<br>
                                    6811496770-0</td>
                                 <td class="d-flex justify-content-between"> 
                                     <div class="image-upload-one">
                                    <div class="center">
                                      <div class="form-input">
                                        <label for="file-ip-1">
                                          <div class="text-primary text-center " >
                                              <img src="assets/img/Group 120.png" alt="" id="file-ip-1-preview">
                                          </div>
                                          <!-- <button
                                            type="button"
                                            class="imgRemove"
                                            onclick="myImgRemoveFunctionOne()"
                                          ></button> -->
                                        </label>
                                        <input
                                          type="file"
                                          name="img_one"
                                          id="file-ip-1"
                                          accept="image/*"
                                          onchange="showPreviewOne(event);"
                                        />
                                      </div>
                                      <!-- <small class="small">Use the &#8634; icon to reset the image</small> -->
                                    </div>
                                  </div>
                                  <!--2-->

                                  <div class="image-upload-Two">
                                    <div class="center">
                                      <div class="form-input">
                                        <label for="file-ip-2">
                                          <div class="text-primary text-center " >
                                              <img src="assets/img/Group 120.png" alt="" id="file-ip-2-preview">
                                          </div>
                                          <!-- <button
                                            type="button"
                                            class="imgRemove"
                                            onclick="myImgRemoveFunctionTwo()"
                                          ></button> -->
                                        </label>
                                        <input
                                          type="file"
                                          name="img_one"
                                          id="file-ip-2"
                                          accept="image/*"
                                          onchange="showPreviewTwo(event);"
                                        />
                                      </div>
                                      <!-- <small class="small">Use the &#8634; icon to reset the image</small> -->
                                    </div>
                                  </div>

                                  <!--3-->
                                  <div class="image-upload-Three">
                                    <div class="center">
                                      <div class="form-input">
                                        <label for="file-ip-3">
                                          <div class="text-primary text-center " >
                                              <img src="assets/img/Group 120.png" alt="" id="file-ip-3-preview">
                                          </div>
                                          <!-- <button
                                            type="button"
                                            class="imgRemove"
                                            onclick="myImgRemoveFunctionThree()"
                                          ></button> -->
                                        </label>
                                        <input
                                          type="file"
                                          name="img_Three"
                                          id="file-ip-3"
                                          accept="image/*"
                                          onchange="showPreviewThree(event);"
                                        />
                                      </div>
                                      <!-- <small class="small">Use the &#8634; icon to reset the image</small> -->
                                    </div>
                                  </div>

                                  <!--4-->
                                  <div class="image-upload-Four">
                                    <div class="center">
                                      <div class="form-input">
                                        <label for="file-ip-4">
                                          <div class="text-primary text-center " >
                                              <img src="assets/img/Group 120.png" alt="" id="file-ip-4-preview">
                                          </div>
                                          <!-- <button
                                            type="button"
                                            class="imgRemove"
                                            onclick="myImgRemoveFunctionFour()"
                                          ></button> -->
                                        </label>
                                        <input
                                          type="file"
                                          name="img_Four"
                                          id="file-ip-4"
                                          accept="image/*"
                                          onchange="showPreviewFour(event);"
                                        />
                                      </div>
                                      <!-- <small class="small">Use the &#8634; icon to reset the image</small> -->
                                    </div>
                                  </div>
                                

                                  <!--5-->

                                  <div class="image-upload-Five">
                                    <div class="center">
                                      <div class="form-input">
                                        <label for="file-ip-5">
                                          <div class="text-primary text-center " >
                                              <img src="assets/img/Group 120.png" alt="" id="file-ip-5-preview">
                                          </div>
                                          <!-- <button
                                            type="button"
                                            class="imgRemove"
                                            onclick="myImgRemoveFunctionFive()"
                                          ></button> -->
                                        </label>
                                        <input
                                          type="file"
                                          name="img_Five"
                                          id="file-ip-5"
                                          accept="image/*"
                                          onchange="showPreviewFive(event);"
                                        />
                                      </div>
                                      <!-- <small class="small">Use the &#8634; icon to reset the image</small> -->
                                    </div>
                                  </div>

                                  <!--6-->
                                  <div class="image-upload-Six">
                                    <div class="center">
                                      <div class="form-input">
                                        <label for="file-ip-6">
                                          <div class="text-primary text-center " >
                                              <img src="assets/img/Group 120.png" alt="" id="file-ip-6-preview">
                                          </div>
                                          <!-- <button
                                            type="button"
                                            class="imgRemove"
                                            onclick="myImgRemoveFunctionSix()"
                                          ></button> -->
                                        </label>
                                        <input
                                          type="file"
                                          name="img_Six"
                                          id="file-ip-6"
                                          accept="image/*"
                                          onchange="showPreviewSix(event);"
                                        />
                                      </div>
                                      <!-- <small class="small">Use the &#8634; icon to reset the image</small> -->
                                    </div>
                                  </div>
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
                        <!--------------- SKU Images End  --------------------------->
                      </div>
          
                      <div id="itemImage" class="container tab-pane">
                     
                        <!---------------Item Image--------------------------->
                        <!----table---->
                     <div class="table-div mt-3 table-bordered bg-white">
                        <table class="table ">
                           <thead>
                              <tr class="header-row">
                                 <th scope="col" class="align-top">Product</th>
                               
                                 <th scope="col" class="align-top">All Images</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>  <td>Product Name<br>Full</td>
                                
                                 <td class="d-flex justify-content-between"> 
                                     <div class="image-upload-one">
                                    <div class="center">
                                      <div class="form-input">
                                        <label for="file-ip-1">
                                          <div class="text-primary text-center " >
                                              <img src="assets/img/Group 120.png" alt="" id="file-ip-1-preview">
                                          </div>
                                          <!-- <button
                                            type="button"
                                            class="imgRemove"
                                            onclick="myImgRemoveFunctionOne()"
                                          ></button> -->
                                        </label>
                                        <input
                                          type="file"
                                          name="img_one"
                                          id="file-ip-1"
                                          accept="image/*"
                                          onchange="showPreviewOne(event);"
                                        />
                                      </div>
                                      <!-- <small class="small">Use the &#8634; icon to reset the image</small> -->
                                    </div>
                                  </div>
                                  <!--2-->

                                  <div class="image-upload-Two">
                                    <div class="center">
                                      <div class="form-input">
                                        <label for="file-ip-2">
                                          <div class="text-primary text-center " >
                                              <img src="assets/img/Group 120.png" alt="" id="file-ip-2-preview">
                                          </div>
                                          <!-- <button
                                            type="button"
                                            class="imgRemove"
                                            onclick="myImgRemoveFunctionTwo()"
                                          ></button> -->
                                        </label>
                                        <input
                                          type="file"
                                          name="img_one"
                                          id="file-ip-2"
                                          accept="image/*"
                                          onchange="showPreviewTwo(event);"
                                        />
                                      </div>
                                      <!-- <small class="small">Use the &#8634; icon to reset the image</small> -->
                                    </div>
                                  </div>

                                  <!--3-->
                                  <div class="image-upload-Three">
                                    <div class="center">
                                      <div class="form-input">
                                        <label for="file-ip-3">
                                          <div class="text-primary text-center " >
                                              <img src="assets/img/Group 120.png" alt="" id="file-ip-3-preview">
                                          </div>
                                          <!-- <button
                                            type="button"
                                            class="imgRemove"
                                            onclick="myImgRemoveFunctionThree()"
                                          ></button> -->
                                        </label>
                                        <input
                                          type="file"
                                          name="img_Three"
                                          id="file-ip-3"
                                          accept="image/*"
                                          onchange="showPreviewThree(event);"
                                        />
                                      </div>
                                      <!-- <small class="small">Use the &#8634; icon to reset the image</small> -->
                                    </div>
                                  </div>

                                  <!--4-->
                                  <div class="image-upload-Four">
                                    <div class="center">
                                      <div class="form-input">
                                        <label for="file-ip-4">
                                          <div class="text-primary text-center " >
                                              <img src="assets/img/Group 120.png" alt="" id="file-ip-4-preview">
                                          </div>
                                          <!-- <button
                                            type="button"
                                            class="imgRemove"
                                            onclick="myImgRemoveFunctionFour()"
                                          ></button> -->
                                        </label>
                                        <input
                                          type="file"
                                          name="img_Four"
                                          id="file-ip-4"
                                          accept="image/*"
                                          onchange="showPreviewFour(event);"
                                        />
                                      </div>
                                      <!-- <small class="small">Use the &#8634; icon to reset the image</small> -->
                                    </div>
                                  </div>
                                

                                  <!--5-->

                                  <div class="image-upload-Five">
                                    <div class="center">
                                      <div class="form-input">
                                        <label for="file-ip-5">
                                          <div class="text-primary text-center " >
                                              <img src="assets/img/Group 120.png" alt="" id="file-ip-5-preview">
                                          </div>
                                          <!-- <button
                                            type="button"
                                            class="imgRemove"
                                            onclick="myImgRemoveFunctionFive()"
                                          ></button> -->
                                        </label>
                                        <input
                                          type="file"
                                          name="img_Five"
                                          id="file-ip-5"
                                          accept="image/*"
                                          onchange="showPreviewFive(event);"
                                        />
                                      </div>
                                      <!-- <small class="small">Use the &#8634; icon to reset the image</small> -->
                                    </div>
                                  </div>

                                  <!--6-->
                                  <div class="image-upload-Six">
                                    <div class="center">
                                      <div class="form-input">
                                        <label for="file-ip-6">
                                          <div class="text-primary text-center " >
                                              <img src="assets/img/Group 120.png" alt="" id="file-ip-6-preview">
                                          </div>
                                          <!-- <button
                                            type="button"
                                            class="imgRemove"
                                            onclick="myImgRemoveFunctionSix()"
                                          ></button> -->
                                        </label>
                                        <input
                                          type="file"
                                          name="img_Six"
                                          id="file-ip-6"
                                          accept="image/*"
                                          onchange="showPreviewSix(event);"
                                        />
                                      </div>
                                      <!-- <small class="small">Use the &#8634; icon to reset the image</small> -->
                                    </div>
                                  </div>

                                  <!--7-->
                                   <!--6-->
                                   <div class="image-upload-Seven">
                                    <div class="center">
                                      <div class="form-input">
                                        <label for="file-ip-7">
                                          <div class="text-primary text-center " >
                                              <img src="assets/img/Group 120.png" alt="" id="file-ip-7-preview">
                                          </div>
                                          <!-- <button
                                            type="button"
                                            class="imgRemove"
                                            onclick="myImgRemoveFunctionSeven()"
                                          ></button> -->
                                        </label>
                                        <input
                                          type="file"
                                          name="img_Seven"
                                          id="file-ip-7"
                                          accept="image/*"
                                          onchange="showPreviewSeven(event);"
                                        />
                                      </div>
                                      <!-- <small class="small">Use the &#8634; icon to reset the image</small> -->
                                    </div>
                                  </div>
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
                        <!---------------Item Image end --------------------------->
                      </div>
          
                      <div id="imageMissing" class="container tab-pane">
                       <!--------------Image Missing------------->
                         <!----table---->
                     <div class="table-div mt-3 table-bordered bg-white">
                        <table class="table ">
                           <thead>
                              <tr class="header-row">
                                 <th scope="col" class="align-top">Product</th>
                                 <th scope="col" class="align-top">SKU</th>
                                 <th scope="col" class="align-top">All Images</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>  <td>Product Name<br>Full</td>
                                 <td>192906868-160<br>
                                    6811496770-0</td>
                                 <td class="d-flex justify-content-between"> 
                                     <div class="image-upload-one">
                                    <div class="center">
                                      <div class="form-input">
                                        <label for="file-ip-1">
                                          <div class="text-primary text-center " >
                                              <img src="assets/img/Group 120.png" alt="" id="file-ip-1-preview">
                                          </div>
                                          <!-- <button
                                            type="button"
                                            class="imgRemove"
                                            onclick="myImgRemoveFunctionOne()"
                                          ></button> -->
                                        </label>
                                        <input
                                          type="file"
                                          name="img_one"
                                          id="file-ip-1"
                                          accept="image/*"
                                          onchange="showPreviewOne(event);"
                                        />
                                      </div>
                                      <!-- <small class="small">Use the &#8634; icon to reset the image</small> -->
                                    </div>
                                  </div>
                                  <!--2-->

                                  <div class="image-upload-Two">
                                    <div class="center">
                                      <div class="form-input">
                                        <label for="file-ip-2">
                                          <div class="text-primary text-center " >
                                              <img src="assets/img/Group 120.png" alt="" id="file-ip-2-preview">
                                          </div>
                                          <!-- <button
                                            type="button"
                                            class="imgRemove"
                                            onclick="myImgRemoveFunctionTwo()"
                                          ></button> -->
                                        </label>
                                        <input
                                          type="file"
                                          name="img_one"
                                          id="file-ip-2"
                                          accept="image/*"
                                          onchange="showPreviewTwo(event);"
                                        />
                                      </div>
                                      <!-- <small class="small">Use the &#8634; icon to reset the image</small> -->
                                    </div>
                                  </div>

                                  <!--3-->
                                  <div class="image-upload-Three">
                                    <div class="center">
                                      <div class="form-input">
                                        <label for="file-ip-3">
                                          <div class="text-primary text-center " >
                                              <img src="assets/img/Group 120.png" alt="" id="file-ip-3-preview">
                                          </div>
                                          <!-- <button
                                            type="button"
                                            class="imgRemove"
                                            onclick="myImgRemoveFunctionThree()"
                                          ></button> -->
                                        </label>
                                        <input
                                          type="file"
                                          name="img_Three"
                                          id="file-ip-3"
                                          accept="image/*"
                                          onchange="showPreviewThree(event);"
                                        />
                                      </div>
                                      <!-- <small class="small">Use the &#8634; icon to reset the image</small> -->
                                    </div>
                                  </div>

                                  <!--4-->
                                  <div class="image-upload-Four">
                                    <div class="center">
                                      <div class="form-input">
                                        <label for="file-ip-4">
                                          <div class="text-primary text-center " >
                                              <img src="assets/img/Group 120.png" alt="" id="file-ip-4-preview">
                                          </div>
                                          <!-- <button
                                            type="button"
                                            class="imgRemove"
                                            onclick="myImgRemoveFunctionFour()"
                                          ></button> -->
                                        </label>
                                        <input
                                          type="file"
                                          name="img_Four"
                                          id="file-ip-4"
                                          accept="image/*"
                                          onchange="showPreviewFour(event);"
                                        />
                                      </div>
                                      <!-- <small class="small">Use the &#8634; icon to reset the image</small> -->
                                    </div>
                                  </div>
                                

                                  <!--5-->

                                  <div class="image-upload-Five">
                                    <div class="center">
                                      <div class="form-input">
                                        <label for="file-ip-5">
                                          <div class="text-primary text-center " >
                                              <img src="assets/img/Group 120.png" alt="" id="file-ip-5-preview">
                                          </div>
                                          <!-- <button
                                            type="button"
                                            class="imgRemove"
                                            onclick="myImgRemoveFunctionFive()"
                                          ></button> -->
                                        </label>
                                        <input
                                          type="file"
                                          name="img_Five"
                                          id="file-ip-5"
                                          accept="image/*"
                                          onchange="showPreviewFive(event);"
                                        />
                                      </div>
                                      <!-- <small class="small">Use the &#8634; icon to reset the image</small> -->
                                    </div>
                                  </div>

                                  <!--6-->
                                  <div class="image-upload-Six">
                                    <div class="center">
                                      <div class="form-input">
                                        <label for="file-ip-6">
                                          <div class="text-primary text-center " >
                                              <img src="assets/img/Group 120.png" alt="" id="file-ip-6-preview">
                                          </div>
                                          <!-- <button
                                            type="button"
                                            class="imgRemove"
                                            onclick="myImgRemoveFunctionSix()"
                                          ></button> -->
                                        </label>
                                        <input
                                          type="file"
                                          name="img_Six"
                                          id="file-ip-6"
                                          accept="image/*"
                                          onchange="showPreviewSix(event);"
                                        />
                                      </div>
                                      <!-- <small class="small">Use the &#8634; icon to reset the image</small> -->
                                    </div>
                                  </div>
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
                        <!---------------Image Missing end----------------->
                      </div>
                    </div>
                  </div>
                  <!---General Profile end-->
          
                  <div id="sellerLogo" class="container tab-pane">
                     <!-- <div id="page-content-wrapper"> -->
                        <div class="">
                          
                        </div>
                       
                  </div>
                </div>
              </div>
            </div>

@endsection