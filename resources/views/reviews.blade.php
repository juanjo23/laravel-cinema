@extends('layouts.main')
@section('content')

<div class="review-content">
	<div class="top-header span_top">
		<div class="logo">
			<a href="index.html"><img src="images/logo.png" alt="" /></a>
			<p>Movie Theater</p>
		</div>
		<div class="search v-search">
			<form>
				<input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}"/>
				<input type="submit" value="">
			</form>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="reviews-section">
		<h3 class="head">Movie Reviews</h3>
			<div class="col-md-9 reviews-grids">

				@foreach ($movies as $movie)
				<div class="review">
					<div class="movie-pic">
						<a href="single.html">  <img src="movies/{{$movie->path}}" alt="" /></a>
					</div>
					<div class="review-info">
						<a class="span" href="single.html">  <i> {{$movie->name }} </i></a>
						<p class="info">CAST:&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$movie->cast }}</p>
						<p class="info">DIRECTION: &nbsp;&nbsp;&nbsp;&nbsp; {{$movie->direction }}</p>
						<p class="info">GENRE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  {{$movie->genre }}</p>
						<p class="info">DURATION:&nbsp;&nbsp;&nbsp; &nbsp;  {{$movie->duration }}</p>
					</div>
					<div class="clearfix"></div>
				</div>
				@endforeach
			</div>
			<div class="col-md-3 side-bar">
				<div class="featured">
					<h3>Featured Today in Movie Reviews</h3>
					<ul>
						<li>
							<a href="single.html"><img src="images/f1.jpg" alt="" /></a>
							<p>lorem movie review</p>
						</li>
						<li>
							<a href="single.html"><img src="images/f2.jpg" alt="" /></a>
							<p>lorem movie review</p>
						</li>
						<li>
							<a href="single.html"><img src="images/f3.jpg" alt="" /></a>
							<p>lorem movie review</p>
						</li>
						<li>
							<a href="single.html"><img src="images/f4.jpg" alt="" /></a>
							<p>lorem movie review</p>
						</li>
						<li>
							<a href="single.html"><img src="images/f5.jpg" alt="" /></a>
							<p>lorem movie review</p>
						</li>
						<li>
							<a href="single.html"><img src="images/f6.jpg" alt="" /></a>
							<p>lorem movie review</p>
						</li>
						<div class="clearfix"></div>
					</ul>
				</div>

				<div class="entertainment">
					<h3>Featured Today in Entertainment</h3>
					<ul>
						<li class="ent">
							<a href="single.html"><img src="images/f6.jpg" alt="" /></a>
						</li>
						<li>
							<a href="single.html">Watch ‘Bombay Velvet’ trailer during WC match</a>

						</li>
						<div class="clearfix"></div>
					</ul>
					<ul>
						<li class="ent">
							<a href="single.html"><img src="images/f5.jpg" alt="" /></a>
						</li>
							<li>
							<a href="single.html">Watch ‘Bombay Velvet’ trailer during WC match</a>

						</li>
						<div class="clearfix"></div>
					</ul>
					<ul>
						<li class="ent">
							<a href="single.html"><img src="images/f3.jpg" alt="" /></a>
						</li>
						<li>
							<a href="single.html">Watch ‘Bombay Velvet’ trailer during WC match</a>

						</li>
						<div class="clearfix"></div>
					</ul>
					<ul>
						<li class="ent">
							<a href="single.html"><img src="images/f4.jpg" alt="" /></a>
						</li>
						<li>
							<a href="single.html">Watch ‘Bombay Velvet’ trailer during WC match</a>

						</li>
						<div class="clearfix"></div>
					</ul>
					<ul>
						<li class="ent">
							<a href="single.html"><img src="images/f2.jpg" alt="" /></a>
						</li>
						<li>
							<a href="single.html">Watch ‘Bombay Velvet’ trailer during WC match</a>

						</li>
						<div class="clearfix"></div>
					</ul>
					<ul>
						<li class="ent">
							<a href="single.html"><img src="images/f1.jpg" alt="" /></a>
						</li>
						<li>
							<a href="single.html">Watch ‘Bombay Velvet’ trailer during WC match</a>

						</li>
						<div class="clearfix"></div>
					</ul>
				</div>
				<div class="might">
		<h4>You might also like</h4>
		<div class="might-grid">
			<div class="grid-might">
				<a href="single.html"><img src="images/mi.jpg" class="img-responsive" alt=""> </a>
			</div>
			<div class="might-top">
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				<a href="single.html">Lorem Ipsum <i> </i></a>
			</div>
		<div class="clearfix"></div>
		</div>
		<div class="might-grid">
			<div class="grid-might">
				<a href="single.html"><img src="images/mi1.jpg" class="img-responsive" alt=""> </a>
			</div>
			<div class="might-top">
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				<a href="single.html">Lorem Ipsum <i> </i></a>
			</div>
		<div class="clearfix"></div>
		</div>
		<div class="might-grid">
			<div class="grid-might">
				<a href="single.html"><img src="images/mi2.jpg" class="img-responsive" alt=""> </a>
			</div>
			<div class="might-top">
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				<a href="single.html">Lorem Ipsum <i> </i></a>
			</div>
		<div class="clearfix"></div>
		</div>
		<div class="might-grid">
			<div class="grid-might">
				<a href="single.html"><img src="images/mi3.jpg" class="img-responsive" alt=""> </a>
			</div>
			<div class="might-top">
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				<a href="single.html">Lorem Ipsum <i> </i></a>
			</div>
		<div class="clearfix"></div>
		</div>
	</div>
	<!---->
		<div class="grid-top">
		<h4>Archives</h4>
		<ul>
			<li><a href="single.html">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </a></li>
			<li><a href="single.html">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</a></li>
			<li><a href="single.html">When an unknown printer took a galley of type and scrambled it to make a type specimen book. </a> </li>
			<li><a href="single.html">It has survived not only five centuries, but also the leap into electronic typesetting</a> </li>
			<li><a href="single.html">Remaining essentially unchanged. It was popularised in the 1960s with the release of </a> </li>
			<li><a href="single.html">Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing </a> </li>
			<li><a href="single.html">Software like Aldus PageMaker including versionsof Lorem Ipsum.</a> </li>
		</ul>
		</div>
		<!---->

			</div>

			<div class="clearfix"></div>
	</div>
	</div>
<div class="review-slider">
	 <ul id="flexiselDemo1">
	<li><img src="images/r1.jpg" alt=""/></li>
	<li><img src="images/r2.jpg" alt=""/></li>
	<li><img src="images/r3.jpg" alt=""/></li>
	<li><img src="images/r4.jpg" alt=""/></li>
	<li><img src="images/r5.jpg" alt=""/></li>
	<li><img src="images/r6.jpg" alt=""/></li>
</ul>
	<script type="text/javascript">
$(window).load(function() {

	$("#flexiselDemo1").flexisel({
		visibleItems: 6,
		animationSpeed: 1000,
		autoPlay: true,
		autoPlaySpeed: 3000,
		pauseOnHover: false,
		enableResponsiveBreakpoints: true,
		responsiveBreakpoints: {
			portrait: {
				changePoint:480,
				visibleItems: 2
			},
			landscape: {
				changePoint:640,
				visibleItems: 3
			},
			tablet: {
				changePoint:768,
				visibleItems: 3
			}
		}
	});
	});
</script>
<script type="text/javascript" src="js/jquery.flexisel.js"></script>
</div>
@stop
