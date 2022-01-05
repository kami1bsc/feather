@extends('layouts.store.app')
@section('content')
<div id="">  
   <h4 class="mb-2" style = "text-align:center;">Product Details</h4>
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
   <br>
   <table class="table table-sm table-hover">
      <tbody>
         <tr>
            <td style = "width: 500px;">ID</td>
            <td>{{ $product->id }}</td>
         </tr>
         <tr>
            <td>Category</td>
            <td>{{ $product->category->category_name }}</td>
         </tr>
         <tr>
            <td>Name</td>
            <td>{{ $product->bird_name }}</td>
         </tr>
         <tr>
            <td>Price</td>
            <td>{{ $product->bird_price_currency }}{{ $product->bird_price }}</td>
         </tr>
         <tr>
            <td>Description</td>
            <td>{{ $product->description }}</td>
         </tr>
         <tr>
            <td>Average Rating</td>
            <td>{{ $product->average_rating }}</td>
         </tr>
         <tr>
            <td>Stock</td>
            <td>{{ $product->quantity }}</td>
         </tr>
         <tr>
            <td>SKU</td>
            <td>{{ $product->sku }}</td>
         </tr>
         <tr>
            <td>Tags</td>
            <td>{{ $product->tags }}</td>
         </tr>
         <tr>
            <td>Breed</td>
            <td>{{ $product->breed }}</td>
         </tr>
         <tr>
            <td>Hybrid</td>
            <td>{{ $product->breed }}</td>
         </tr>
         <tr>
            <td>Clean or Feathered Legs</td>
            <td>{{ $product->clean_or_feathered_legs }}</td>
         </tr>
         <tr>
            <td>Leg Color</td>
            <td>{{ $product->leg_color }}</td>
         </tr>
         <tr>
            <td>Top Knot</td>
            <td>{{ $product->top_knot }}</td>
         </tr>
         <tr>
            <td>Muffs</td>
            <td>{{ $product->muffs }}</td>
         </tr>
         <tr>
            <td>Beared</td>
            <td>{{ $product->beared }}</td>
         </tr>
         <tr>
            <td>No of Toes</td>
            <td>{{ $product->no_of_toes }}</td>
         </tr>
         <tr>
            <td>Skin Color</td>
            <td>{{ $product->skin_color }}</td>
         </tr>
         <tr>
            <td>Comb Type</td>
            <td>{{ $product->comb_type }}</td>
         </tr>
         <tr>
            <td>Lobes</td>
            <td>{{ $product->lobes }}</td>
         </tr>
         <tr>
            <td>Purpose</td>
            <td>{{ $product->purpose }}</td>
         </tr>
         <tr>
            <td>Broody</td>
            <td>{{ $product->broody }}</td>
         </tr>
         <tr>
            <td>Weekly Production</td>
            <td>{{ $product->weekly_production }}</td>
         </tr>
         <tr>
            <td>Egg Color</td>
            <td>{{ $product->egg_color }}</td>
         </tr>
         <tr>
            <td>Egg Size</td>
            <td>{{ $product->egg_size }}</td>
         </tr>
         <tr>
            <td>Laying Maturity</td>
            <td>{{ $product->lying_maturity }}</td>
         </tr>
         <tr>
            <td>Processing Age</td>
            <td>{{ $product->processing_age }}</td>
         </tr>
         <tr>
            <td>Hardness</td>
            <td>{{ $product->hardness }}</td>
         </tr>
         <tr>
            <td>Forager</td>
            <td>{{ $product->forager }}</td>
         </tr>
         <tr>
            <td>Personality</td>
            <td>{{ $product->personality }}</td>
         </tr>
         <tr>
            <td>Livestock Conservency Status</td>
            <td>{{ $product->livestock_conservency_status }}</td>
         </tr>
         <tr>
            <td>Apa Class</td>
            <td>{{ $product->apa_class }}</td>
         </tr>
         <tr>
            <td>Image(s)</td>
            <td>
               @foreach($product->bird_images as $image)
                  <img src="{{ asset($image->bird_image) }}" alt="Bird Image" style = "width: 60px; height: 40px; margin-top: 10px;">&emsp;
               @endforeach
            </td>
         </tr>
      </tbody>
   </table>
   
</div>
@endsection