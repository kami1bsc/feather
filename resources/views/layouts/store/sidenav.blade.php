<div id="sidebar-wrapper">
   <ul class="sidebar-nav ">
      <li>
         <a href="{{ route('store.dashboard') }}" >
         <img   src="{{ asset('assets/img/logo.png') }}" alt="brand logo" width="100" height="auto"/>
         </a>
      </li>
      <li data-toggle="collapse" data-target="#demo" >
         <a href="#"
            > Product &emsp;&nbsp;&nbsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="assets/img/Icon ionic-ios-arrow-back.png" class="arrow" alt="">
         </a>
         <ul id="demo" class="collapse">
            <li>
               <a href="{{ route('store.products.index') }}">Manage Products</a>
            </li>
            <li>
               <a href="{{ route('store.products.create') }}">Add Products</a>
            </li>
            <li>
               <a href="{{ route('store.product_images') }}">Manage Images</a>
            </li>
         </ul>
      </li>
      <li data-toggle="collapse" data-target="#demo2">
         <a href="#"
            > Orders & Reviews&nbsp;&emsp;&nbsp;<img src="assets/img/Icon ionic-ios-arrow-back.png" alt="">
         </a>
         <ul id="demo2" class="collapse">
            <li >
               <a href="{{ route('store.orders.index') }}">Manage Orders</a>
            </li>
            <li >
               <a  href="{{ route('store.reviews.index') }}">Manage Reviews</a>
            </li>
         </ul>
      </li>
      <li data-toggle="collapse" data-target="#demo3">
         <a href="#">
         Finance&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&emsp;&nbsp;<img src="assets/img/Icon ionic-ios-arrow-back.png" alt=""></a>
         <ul id="demo3" class="collapse">
            <li><a href="{{ route('store.account-statement.index') }}">Account Statement</a></li>
            <li><a href="{{ route('store.order_overview') }}">Order Overview</a></li>
            <li><a href="{{ route('store.transactions.index') }}">Transaction Overview</a></li>
         </ul>
      </li>
      <li data-toggle="collapse" data-target="#demo4">
         <a href="#">
         Seller Support&nbsp;&emsp;&nbsp;&nbsp;&nbsp;&emsp;&nbsp;<img src="assets/img/Icon ionic-ios-arrow-back.png" alt=""></a>
         <ul id="demo4" class="collapse">
            <li><a href="{{ route('store.contact') }}">Contact Us</a></li>
            <li><a href="{{ route('store.contact') }}">Help Center</a></li>
         </ul>
      </li>
      <li data-toggle="collapse" data-target="#demo5">
         <a href="#">
         Account & Sellings&emsp;&nbsp;<img src="assets/img/Icon ionic-ios-arrow-back.png" alt=""></a>
         <ul id="demo5" class="collapse">
            <li><a href="{{ route('store.profile.index') }}">Profile</a></li>
            <li><a href="{{ route('store.setting') }}">Account Setting</a></li>
         </ul>
      </li>
   </ul>
</div>