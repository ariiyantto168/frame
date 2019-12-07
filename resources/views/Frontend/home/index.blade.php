
		
		<!-- about -->
		 <section class="about py-lg-4 py-md-3 py-sm-3 py-3" id="about">
			<div class="container py-lg-5 py-md-5 py-sm-4 py-4">
			   <h3 class="title text-center mb-lg-5 mb-md-4  mb-sm-4 mb-3">Products</h3>
			   <div class="row banner-below-w3l">
				@foreach ($categories as $categorie)
				  <div class="col-lg-4 col-md-6 col-sm-6 text-center banner-agile-flowers">
					 <img src="images/a1.jpg" class="img-thumbnail" alt="">
					 <div class="banner-right-icon">
					 	<a href="{{url('/home/all/'.$categorie->name)}}"><h4  class="pt-3">{{$categorie->name}}</h4></a>
					 </div>
				  </div>
				@endforeach
			   </div>
			</div>
		 </section>
		 <!-- //about -->
		 <!--new Arrivals -->
		 <section class="blog py-lg-4 py-md-3 py-sm-3 py-3">
			<div class="container py-lg-5 py-md-4 py-sm-4 py-3">
			   <h3 class="title clr text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Premium products</h3>
			   <div class="slid-img">
				  <ul id="flexiselDemo1">
					  @foreach ($premiums as $premium)
					 <li>
						<div class="agileinfo_port_grid">
						   <img src="{{asset('porducts_images')}}/{{$premium->images }}" alt=" " width="100" height="200" class="img-fluid" />
						   <div class="banner-right-icon">
						   <h4 class="pt-3">{{$premium->name}}</h4>
						   </div>
						   <div class="outs_more-buttn">
							  <a href="{{url('home/premdetail/'. $premium->slug)}}">Shop Now</a>
						   </div>
						</div>
					 </li>
					 @endforeach
				  </ul>
			   </div>
			</div>
		 </section>
		 <!--//about -->
		 <!-- Product-view -->
		 <section class="product py-lg-4 py-md-3 py-sm-3 py-3">
			<div class="container py-lg-5 py-md-5 py-sm-4 py-3">
			   <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">The best products</h3>
			   <div class=" img-toy-w3l-top">
			   </div>
			   <div class="mt-lg-4 mt-3 product-info-img">
				  <p>velit sagittis vehicula. Duis posuere 
					 ex in mollis iaculis. Suspendisse tincidunt
					 velit sagittis vehicula. Duis posuere 
					 velit sagittis vehicula. Duis posuere 
				  </p>
				  <div class="clients_more-buttn">
					 <a href="shop.html">Shop Now</a>
				  </div>
			   </div>
			   <div class="row">
				  <div class="col-lg-6 img-toy-w3l-left">
					 <div class="toys-img-one">
					 </div>
					 <div class="mt-lg-4 mt-3 product-info-img">
						<p>velit sagittis vehicula. Duis posuere 
						   ex in mollis iaculis. Suspendisse tincidunt
						   velit sagittis vehicula. Duis posuere 
						   velit sagittis vehicula. Duis posuere 
						</p>
						<div class="clients_more-buttn">
						   <a href="shop.html">Shop Now</a>
						</div>
					 </div>
				  </div>
				  <div class="col-lg-6 img-toy-agile-right">
					 <div class="toys-img-one-two">
					 </div>
					 <div class="mt-lg-4 mt-3 product-info-img">
						<p>velit sagittis vehicula. Duis posuere 
						   ex in mollis iaculis. Suspendisse tincidunt
						   velit sagittis vehicula. Duis posuere 
						   velit sagittis vehicula. Duis posuere 
						</p>
						<div class="clients_more-buttn">
						   <a href="shop.html">Shop Now</a>
						</div>
					 </div>
					 <div class="toys-img-one-three">
					 </div>
					 <div class="mt-lg-4 mt-3 product-info-img">
						<p>velit sagittis vehicula. Duis posuere 
						   ex in mollis iaculis. Suspendisse tincidunt
						   velit sagittis vehicula. Duis posuere 
						   velit sagittis vehicula. Duis posuere 
						</p>
						<div class="clients_more-buttn">
						   <a href="shop.html">Shop Now</a>
						</div>
					 </div>
				  </div>
			   </div>
			</div>
		 </section>
		 <!--//Product-view-->
		 <!--//Product-view-->
		 <section class="premium py-lg-4 py-md-3 py-sm-3 py-3">
			<div class="container py-lg-5 py-md-5 py-sm-4 py-3">
			   <h3 class="title clr text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">The Best products</h3>
			   <div class="row">
				   @foreach ($bestproducts as $best)
					   
				  <div>
						<img src="{{asset('porducts_images')}}/{{$best->images }}" alt=" " width="200" height="200" class="img-fluid" />
				  </div>
				  <div class="col-lg-6 agileits-toys-right">
					 <div class="sub-agile-info-toys">
					 <h3>{{$best->name}}</h3>
					 <p><font color="white" size="5">{{$best->description}} 
						</font></p>
						<div class="clients_more-buttn">
						   <a href="shop.html" class="mb-0">Shop Now</a>
						</div>
					 </div>
				  </div>
				  @endforeach
			   </div>
			   {{-- <div class="row mt-lg-4 mt-md-4 mt-3">
				  <div class="col-lg-6 agileits-toys-right">
					 <div class="sub-agile-info-toys">
						<p>velit sagittis vehicula. Duis posuere 
						   ex in mollis iaculis. Suspendisse tincidunt
						   velit sagittis vehicula. Duis posuere 
						   velit sagittis vehicula. Duis posuere 
						   ex in mollis iaculis. Suspendisse tincidunt
						   velit sagittis vehicula. Duis posuere 
						</p>
						<div class="clients_more-buttn ">
						   <a href="shop.html" class="mb-0">Shop Now</a>
						</div>
					 </div>
				  </div>
				  <div class="col-lg-6 agileits-toys-left"></div>
			   </div> --}}
			</div>
		 </section>
		 <!--Product-about-->
		 <section class="about py-lg-4 py-md-3 py-sm-3 py-3">
			<div class="container py-lg-5 py-md-5 py-sm-4 py-3">
			   <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">About Toys</h3>
			   <div class="about-products-w3layouts">
				  <p class="my-lg-4 my-md-3 my-3">@foreach ($abouts as $about)
					{{$about->tentangkami}}
				  @endforeach 
				  </p>
				  
			   </div>
			</div>
		 </section>
		 <!--//Product-about-->