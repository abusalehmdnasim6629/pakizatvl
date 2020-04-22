@extends('frontent.layout')
@section('title')
@section('header')
	@include('frontent.menu1')
@stop
@section('content')
<section  class="section-main overflow-hidden" style="height:0px !importent" id="home">
	<div  style="z-index: 2222;position: relative;width:100%;" class="slider_container">
		<div class="flexslider">
	      <ul class="slides">
	      	@foreach($products as $product)
	    	<li>
	    		<a href="{{route('home_content_view',['products-solutions',$product->id])}}"><img  style="width:100%; height:500px;" src="{{asset($product->image)}}" alt="" title=""/></a>
	    		<div class="flex-caption">
                     <div class="caption_title_line">
                     	<h2>{{$product->title}}</h2>
                     	<p><?php echo $product->summery ?></p>
                     	<a class="btn btn-primary" href="{{route('home_content_view',['products-solutions',$product->id])}}"">View</a>
                     </div>
                </div>
	    	</li>
	    	@endforeach
	    </ul>
	  </div>
   </div>
</section>
<section class="contact-address overflow-hidden section" style="padding:0px !importent;">
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<div class="single-address " data-wow-delay=".3s">
					<div class="single-address__icon">
						<i class="zmdi zmdi-help-outline"></i>
					</div>
					<div class="single-address__text">
						<h4>Have a question</h4>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="single-address ">
					<div class="single-address__icon">
						<i class="zmdi zmdi-phone"></i>
					</div>
					<div class="single-address__text">
						<span>{{$WeBeliveIn->mobile}}</span>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="single-address " data-wow-delay=".15s">
					<div class="single-address__icon">
						<i class="zmdi zmdi-email"></i>
					</div>
					<div class="single-address__text">
						<span>{{$WeBeliveIn->email}}</span>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</section>
<div class="section-main section" id="we_belive_in">
	<div class="services section-main section-padding overflow-hidden section" >
		<div class="container">
			<div  class="section-heading section-heading--white text-center m-b-md-30 m-b-xxs-20 m-b-sm-10">
				<h2 style="color: #036" style="font-size: 25px;" class="wow fadeInUpSmall">We believe in</h2>
				<h3 style="color: #036" class="wow fadeInUpSmall" data-wow-delay=".15s">{{$WeBeliveIn->about}}</h3>
			</div>
			<div class="service-slider owl-carousel" data-owl-options='{"margin":30,"loop":false,"smartSpeed":900,"autoplay":false,"autoplaySpeed":900,"autoplayTimeout":3000,"dots":false,"nav":true,"navSpeed":900,"responsiveClass":true,"responsive":{"0":{"items":1},"768":{"items":2},"992":{"items":3}}}'>
				<div class="single-service wow fadeInUp">
					<i class="zmdi zmdi-chart-donut"></i>
					<h4>Service Excellence</h4>
					<p>{{$WeBeliveIn->wbi1}}</p>
				</div>
				<div class="single-service wow fadeInUp" data-wow-delay=".1s">
					<i class="zmdi zmdi-share"></i>
					<h4>Rights to Know</h4>
					<p>{{$WeBeliveIn->wbi2}}</p>
				</div>
				<div class="single-service wow fadeInUp" data-wow-delay=".2s">
					<i class="zmdi zmdi-star-outline"></i>
					<h4>Hight Quality</h4>
					<p>{{$WeBeliveIn->wbi3}}</p>
				</div>
				<div class="single-service wow fadeInUp" data-wow-delay=".3s">
					<i class="zmdi zmdi-eye"></i>
					<h4>Visibility</h4>
					<p>{{$WeBeliveIn->wbi4}}</p>
				</div>
				<div class="single-service wow fadeInUp" data-wow-delay=".4s">
					<i class="zmdi zmdi-money"></i>
					<h4>Value for money</h4>
					<p>{{$WeBeliveIn->wbi5}}</p>
				</div>
				<div class="single-service wow fadeInUp" data-wow-delay=".5s">
					<i class="zmdi zmdi-favorite-outline"></i>
					<h4>Customer Satisfaction</h4>
					<p>{{$WeBeliveIn->wbi6}}</p>
				</div>
			</div>
		</div>
	</div>
</div>
<section class="team section-main section-padding section" id="MAJOR_PRODUCTS">
	<div class="container">
		<div class="section-heading text-center m-b-xxs-5 m-b-sm-10 m-b-md-20">
			<h2 class="wow fadeInUpSmall">MAJOR PRODUCTS</h2>
		</div>
		<div class="team-slider owl-carousel" data-owl-options='{"margin":25,"loop":false,"smartSpeed":300,"responsiveClass":true,"responsive":{"0":{"items":1,"nav":true,"dots":false},"768":{"items":2,"nav":false,"dots":true},"992":{"items":3},"1200":{"items":4}}}'>
			<?php $i = 1;?>
			@foreach($AllContents as $Content)
			@if($Content->type=='brands' && $Content->status!=1)
			<div class="member wow fadeInUp" data-wow-delay=".1s">
				<div class="member__image"><img alt="member-2" style="height:200px" src="{{asset($Content->thumnail)}}"></div>
				<div class="member__info">
					<div class="member__info__skills">
						<ul>
							<li>
								<span class="progress-bar-label"><a href="{{route('home_content_view',['brands',$Content->id])}}">View Details</a></span>
							</li>
							<li>
								<?php echo $Content->summery;?>
							</li>
						</ul>
					</div>
				</div>
			</div>
			@endif
			@endforeach
		</div>
		<div class="load-portfolio text-center m-t-xxs-15 m-t-sm-45 wow fadeInUpSmall" data-wow-duration="1s">
			<a href="{{route('home_contents',['brands'])}}" class="mdl-button mdl-button--large mdl-js-button mdl-js-ripple-effect" >More</a>
		</div>
	</div>
</section>

<section class="skills section-padding  section-main section" id="MAJOR_CLIENTS">
	<div class="container">
		<div class="section-heading text-center m-b-xxs-5 m-b-sm-10 m-b-md-20">
			<h2 class="wow fadeInUpSmall" style="color: #fff; text-transform: capitalize;">MAJOR CLIENTS</h2>
		</div>

		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="skill-slider owl-carousel" data-owl-options='{"margin":30,"loop":false,"smartSpeed":900,"dots":false,"nav":true,"navSpeed":900,"responsiveClass":true,"responsive":{"0":{"items":1},"480":{"items":2},"768":{"items":3},"992":{"items":5},"1200":{"items":5}}}'>
					<?php $i = 1;?>
					@foreach($AllContents as $Content)
			        @if($Content->type=='clients' && $Content->status==1)
			        <a href="{{route('home_content_view',['clients',$Content->id])}}">
					<div class="single-skill text-center wow fadeInUp" data-wow-delay=".{{$i}}s">
						
						<div class="single-skill__v-center">
							<img style="width: 85%; height: 115px; margin:10px;" src="{{asset($Content->thumnail)}}">
						</div>
					</div></a>
					<?php $i++?>
					@endif
					@endforeach
				</div>
			</div>
		</div>
		<div class="load-portfolio text-center m-t-xxs-15 m-t-sm-45 wow fadeInUpSmall" data-wow-duration="1s">
			<a href="{{route('home_contents',['clients'])}}" class="mdl-button mdl-button--large mdl-js-button mdl-js-ripple-effect" >More</a>
		</div>
	</div>
</section>
<section class="team section-main section-padding section" id="FEATURE_BRANDS">
	<div class="container">
		<div class="section-heading text-center m-b-xxs-5 m-b-sm-10 m-b-md-20">
			<h2 class="wow fadeInUpSmall">Featured Brands</h2>
		</div>
		<div class="team-slider owl-carousel" data-owl-options='{"margin":25,"loop":false,"smartSpeed":300,"responsiveClass":true,"responsive":{"0":{"items":1,"nav":true,"dots":false},"768":{"items":2,"nav":false,"dots":true},"992":{"items":3},"1200":{"items":4}}}'>
			<?php $i = 1;?>
			@foreach($AllContents as $Content)
			@if($Content->type=='brands' && $Content->status==1)
			<div class="member wow fadeInUp" data-wow-delay=".1s">
				<div class="member__image"><img alt="member-2" style="height:200px" src="{{asset($Content->thumnail)}}"></div>
				<div class="member__info">
					<div class="member__info__skills">
						<ul>
							<li>
								<span class="progress-bar-label"><a href="{{route('home_content_view',['brands',$Content->id])}}">View Details</a></span>
							</li>
							<li>
								<?php echo $Content->summery;?>
							</li>
						</ul>
					</div>
				</div>
			</div>
			@endif
			@endforeach
		</div>
		<div class="load-portfolio text-center m-t-xxs-15 m-t-sm-45 wow fadeInUpSmall" data-wow-duration="1s">
			<a href="{{route('home_contents',['brands'])}}" class="mdl-button mdl-button--large mdl-js-button mdl-js-ripple-effect" >More</a>
		</div>
	</div>
</section>


<section class="team section-main section-padding section" id="FEATURED_SERVICES">
	<div class="container">
		<div class="section-heading text-center m-b-xxs-5 m-b-sm-10 m-b-md-20">
			<h2 class="wow fadeInUpSmall">Featured Services</h2>
		</div>
		<div class="team-slider owl-carousel" data-owl-options='{"margin":25,"loop":false,"smartSpeed":300,"responsiveClass":true,"responsive":{"0":{"items":1,"nav":true,"dots":false},"768":{"items":2,"nav":false,"dots":true},"992":{"items":3},"1200":{"items":4}}}'>
			<?php $i = 1;?>
			@foreach($AllContents as $Content)
			@if($Content->type=='services' && $Content->status==1)
			<div class="member wow fadeInUp" data-wow-delay=".1s">
				<div class="member__image"><img alt="member-2" style="height:200px" src="{{asset($Content->thumnail)}}"></div>
				<div class="member__info">
					<div class="member__info__skills">
						<ul>
							<li>
								<span class="progress-bar-label"><a href="{{route('home_content_view',['brands',$Content->id])}}">View Details</a></span>
							</li>
							<li>
								<?php echo $Content->summery;?>
							</li>
						</ul>
					</div>
				</div>
			</div>
			@endif
			@endforeach
		</div>
		<div class="load-portfolio text-center m-t-xxs-15 m-t-sm-45 wow fadeInUpSmall" data-wow-duration="1s">
			<a href="{{route('home_contents',['services'])}}" class="mdl-button mdl-button--large mdl-js-button mdl-js-ripple-effect" >More</a>
		</div>
	</div>
</section>

<!--awards-->

<section class="team section-main section-padding section" id="AWARDS">
	<div class="container>
	   <div class="row">
    	    <div class="section-heading text-center m-b-xxs-5 m-b-sm-10 m-b-md-20">
    			<h2 class="wow fadeInUpSmall">Awards</h2>
    		</div>
		</div>
	 <div class="row">
	   	<div class="col-md-10 mx-auto"style="padding:5px;" >
		  <div class="row">
            <div class="col-md" style="padding:3px;">
                <img alt="picture" style="width:100%;height:200px;" src="http://pakizatvl.com/uploads/awards/01.jpg"
                class="img-fluid">
                
            </div>
            <div class="col-md" style="padding:3px;">
                <img alt="picture" style="width:100%;height:200px;" src="http://pakizatvl.com/uploads/awards/03.jpg"
                class="img-fluid">
            </div>
            <div class="col-md" style="padding:3px;">
                <img alt="picture" style="width:100%;height:200px;" src="http://pakizatvl.com/uploads/awards/04.jpg"
                class="img-fluid">
            </div>
            <div class="col-md" style="padding:3px;">
                <img alt="picture" style="width:100%;height:200px;" src="http://pakizatvl.com/uploads/awards/02.jpg"
                class="img-fluid">
            </div>
        
            </div>
        </div>    
       
        </div>
	</div>
</section>

<!--LEADERSHIP-->

@stop
@section('styles')
@stop
@section('scripts')
@stop