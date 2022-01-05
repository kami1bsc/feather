@extends('layouts.store.app')
@section('content')
<div id="">
   <div class="">
      <h4 style = "text-align:center">Add Product</h4>
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
   </div>
   <!---------------Add product form---------->
   <div class=" mt-3 mb-3">
      <div class=" pt-2 pb-2 pl-3 mt-3 border" style="background-color:#F7F8FA;">
         <b>Basic Information </b>
      </div>
      <div class="  bg-white shadow pt-5 pb-3 pr-5 pl-5" >
         <!--------------form-------->
         <form action="{{ route('store.products.store') }}" method="POST" class="pb-5">
            {{ csrf_field() }}
            <div class="form-group row">
               <label for="File1" class="col-sm-3 col-form-label">Category</label>
               <div class="col-sm-9" >
                  <select name="category_id" class = "form-control" id="" required>
                     @foreach($categories as $category)
                     <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                     @endforeach
                  </select>
               </div>
            </div>
            <div class="form-group row">
               <label for="pTitle" class="col-sm-3 col-form-label">Name</label>
               <div class="col-sm-9">
                  <input type="text" name = "bird_name" class="form-control" required>
               </div>
            </div>
            <div class="form-group row">
               <label for="pPrice" class="col-sm-3 col-form-label">Price</label>
               <div class="col-sm-9">
                  <input type="text" name = "bird_price" class="form-control" required>
               </div>
            </div>
            <div class="form-group row">
               <label for="pPrice" class="col-sm-3 col-form-label">Price Currency</label>
               <div class="col-sm-9">
                  <input type="text" name = "bird_price_currency" class="form-control" required>
               </div>
            </div>
            <div class="form-group row">
               <label for="pPrice" class="col-sm-3 col-form-label">Description</label>
               <div class="col-sm-9">
                  <textarea name = "bird_price" rows="4" cols="10" class="form-control" required>Product Description</textarea>
               </div>
            </div>
            <div class="form-group row">
               <label for="pPrice" class="col-sm-3 col-form-label">Stock</label>
               <div class="col-sm-9">
                  <input type="text" name = "quantity" class="form-control" required>
               </div>
            </div>
            <div class="form-group row">
               <label for="pPrice" class="col-sm-3 col-form-label">SKU</label>
               <div class="col-sm-9">
                  <input type="text" name = "sku" class="form-control" required>
               </div>
            </div>
            <div class="form-group row">
               <label for="pPrice" class="col-sm-3 col-form-label">Tags</label>
               <div class="col-sm-9">
                  <input type="text" name = "tags" class="form-control" required>
               </div>
            </div>
            <div class="form-group row">
               <label for="pPrice" class="col-sm-3 col-form-label">Breed</label>
               <div class="col-sm-9">
                  <input type="text" name = "breed" class="form-control" required>
               </div>
            </div>
            <div class="form-group row">
               <label for="pPrice" class="col-sm-3 col-form-label">Hybrid</label>
               <div class="col-sm-9">
                  <select name="hybrid" class = "form-control" id="" required>
                     <option value="Yes">Yes</option>
                     <option value="No">No</option>
                  </select>
               </div>
            </div>
            <div class="form-group row">
               <label for="pPrice" class="col-sm-3 col-form-label">Clean or Feathered Legs</label>
               <div class="col-sm-9">
                  <select name="clean_or_featheres_legs" class = "form-control" id="" required>
                     <option value="Yes">Yes</option>
                     <option value="No">No</option>
                  </select>
               </div>
            </div>
            <div class="form-group row">
               <label for="pPrice" class="col-sm-3 col-form-label">Leg Color</label>
               <div class="col-sm-9">
                  <input type="text" name = "leg_color" class = "form-control" required>
               </div>
            </div>
            <div class="form-group row">
               <label for="pPrice" class="col-sm-3 col-form-label">Top Knot</label>
               <div class="col-sm-9">
                  <input type="text" name = "top_knot" class = "form-control" required>
               </div>
            </div>
            <div class="form-group row">
               <label for="pPrice" class="col-sm-3 col-form-label">Muffs</label>
               <div class="col-sm-9">
                  <input type="text" name = "muffs" class = "form-control" required>
               </div>
            </div>
            <div class="form-group row">
               <label for="pPrice" class="col-sm-3 col-form-label">Beared</label>
               <div class="col-sm-9">
                  <input type="text" name = "beared" class = "form-control" required>
               </div>
            </div>
            <div class="form-group row">
               <label for="pPrice" class="col-sm-3 col-form-label">No of Toes</label>
               <div class="col-sm-9">
                  <input type="text" name = "no_of_toes" class = "form-control" required>
               </div>
            </div>
            <div class="form-group row">
               <label for="pPrice" class="col-sm-3 col-form-label">Skin Color</label>
               <div class="col-sm-9">
                  <input type="text" name = "skin_color" class = "form-control" required>
               </div>
            </div>
            <div class="form-group row">
               <label for="pPrice" class="col-sm-3 col-form-label">Comb Type</label>
               <div class="col-sm-9">
                  <input type="text" name = "comb_type" class = "form-control" required>
               </div>
            </div>
            <div class="form-group row">
               <label for="pPrice" class="col-sm-3 col-form-label">Lobes</label>
               <div class="col-sm-9">
                  <input type="text" name = "lobes" class = "form-control" required>
               </div>
            </div>
            <div class="form-group row">
               <label for="pPrice" class="col-sm-3 col-form-label">Purpose</label>
               <div class="col-sm-9">
                  <input type="text" name = "purpose" class = "form-control" required>
               </div>
            </div>
            <div class="form-group row">
               <label for="pPrice" class="col-sm-3 col-form-label">Broody</label>
               <div class="col-sm-9">
                  <input type="text" name = "broody" class = "form-control" required>
               </div>
            </div>
            <div class="form-group row">
               <label for="pPrice" class="col-sm-3 col-form-label">Weekly Production</label>
               <div class="col-sm-9">
                  <input type="text" name = "weekly_production" class = "form-control" required>
               </div>
            </div>
            <div class="form-group row">
               <label for="pPrice" class="col-sm-3 col-form-label">Egg Color</label>
               <div class="col-sm-9">
                  <input type="text" name = "egg_color" class = "form-control" required>
               </div>
            </div>
            <div class="form-group row">
               <label for="pPrice" class="col-sm-3 col-form-label">Egg Size</label>
               <div class="col-sm-9">
                  <input type="text" name = "egg_size" class = "form-control" required>
               </div>
            </div>
            <div class="form-group row">
               <label for="pPrice" class="col-sm-3 col-form-label">Laying Maturity</label>
               <div class="col-sm-9">
                  <input type="text" name = "laying_maturity" class = "form-control" required>
               </div>
            </div>
            <div class="form-group row">
               <label for="pPrice" class="col-sm-3 col-form-label">Processing Age</label>
               <div class="col-sm-9">
                  <input type="text" name = "processing_age" class = "form-control" required>
               </div>
            </div>
            <div class="form-group row">
               <label for="pPrice" class="col-sm-3 col-form-label">Hardness</label>
               <div class="col-sm-9">
                  <input type="text" name = "hardness" class = "form-control" required>
               </div>
            </div>
            <div class="form-group row">
               <label for="pPrice" class="col-sm-3 col-form-label">Forager</label>
               <div class="col-sm-9">
                  <input type="text" name = "forager" class = "form-control" required>
               </div>
            </div>
            <div class="form-group row">
               <label for="pPrice" class="col-sm-3 col-form-label">Personality</label>
               <div class="col-sm-9">
                  <input type="text" name = "personality" class = "form-control" required>
               </div>
            </div>
            <div class="form-group row">
               <label for="pPrice" class="col-sm-3 col-form-label">Livestock Conservency Status</label>
               <div class="col-sm-9">
                  <input type="text" name = "livestock_conservency_status" class = "form-control" required>
               </div>
            </div>
            <div class="form-group row">
               <label for="pPrice" class="col-sm-3 col-form-label">Apa Class</label>
               <div class="col-sm-9">
                  <input type="text" name = "apa_class" class = "form-control" required>
               </div>
            </div>
            <button type="submit" name = "submit" class="btn btn-outline-primary float-right mr-4 px-5">Save</button>
         </form>
         <!--------------form end-------->
      </div>
   </div>
</div>
@endsection