@extends('frontlayout')
@section('title','Home Page')
@section('content')
        <div class="row">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="/imgs/Slide/VietNam.jpg" alt="First slide">
                        <div class="carousel-caption d-none d-md-block" style="margin-bottom: 250px ; font-family: No">
                            <p style="font-family: 'Smooch', cursive; font-size: 115px; text-shadow: 2px 2px black" >Welcome To Viet Nam</p>
{{--                            <p style="font-family:'Berlin Sans FB'; font-size: 25px">VietNam</p>--}}
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <img class="d-block w-100" src="/imgs/Slide/HaLong (1).jpg" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block" style="margin-bottom: 250px ; font-family: No">
                            <p style="font-family: 'Smooch', cursive; font-size: 115px; text-shadow: 2px 2px black" >Ha Long</p>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <img class="d-block w-100" src="/imgs/Slide/HoiAn (1).jpg" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block" style="margin-bottom: 250px ; font-family: No">
                            <p style="font-family: 'Smooch', cursive; font-size: 115px; text-shadow: 2px 2px black" >Hoi An</p>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <img class="d-block w-100" src="/imgs/Slide/Hue (1).jpg" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block" style="margin-bottom: 250px ; font-family: No">
                            <p style="font-family: 'Smooch', cursive; font-size: 115px; text-shadow: 2px 2px black" >Hue</p>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <img class="d-block w-100" src="/imgs/Slide/NhaTrang (1).jpg" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block" style="margin-bottom: 250px ; font-family: No">
                            <p style="font-family: 'Smooch', cursive; font-size: 115px; text-shadow: 2px 2px black" >Nha Trang</p>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <img class="d-block w-100" src="/imgs/Slide/PhongNha (1).jpg" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block" style="margin-bottom: 250px ; font-family: No">
                            <p style="font-family: 'Smooch', cursive; font-size: 115px; text-shadow: 2px 2px black" >Phong Nha</p>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <img class="d-block w-100" src="/imgs/Slide/Sapa (1).jpg" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block" style="margin-bottom: 250px ; font-family: No">
                            <p style="font-family: 'Smooch', cursive; font-size: 115px; text-shadow: 2px 2px black" >Sapa</p>
                        </div>
                    </div>

                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
		<div class="row mt-4">
			<div class="col-md-9">
                <h3 style="color:black; margin-bottom: 20px; text-decoration: underline">Bài viết gần đây</h3>
				<div class="row mb-5">

					@if(count($posts)>0)
						@foreach($posts as $post)
						<div class="col-md-4">
							<div class="card">
							  <a href="{{url('detail/'.Str::slug($post->title).'/'.$post->id)}}"><img src="{{asset('imgs/thumb/'.$post->thumb)}}" class="card-img-top" alt="{{$post->title}}" /></a>
							  <div class="card-body">
							    <h5 class="card-title"><a href="{{url('detail/'.Str::slug($post->title).'/'.$post->id)}}">{{$post->title}}</a></h5>
							  </div>
							</div>
						</div>
						@endforeach
					@else
					<p class="alert alert-danger">No Post Found</p>
					@endif
				</div>
				<!-- Pagination -->
				{{$posts->links()}}
			</div>
			<!-- Right SIdebar -->
			<div class="col-md-3">
				<!-- Search -->
				<div class="card mb-4">
					<h5 class="card-header">Search</h5>
					<div class="card-body">
						<form action="{{url('/')}}">
							<div class="input-group">
							  <input type="text" name="q" class="form-control" />
							  <div class="input-group-append">
							    <button class="btn btn-dark" type="button" id="button-addon2">Search</button>
							  </div>
							</div>
						</form>
					</div>
				</div>
				<!-- Recent Posts -->
				<div class="card mb-4">
					<h5 class="card-header">Recent Posts</h5>
					<div class="list-group list-group-flush">
						@if($recent_posts)
							@foreach($recent_posts as $post)
								<a href="#" class="list-group-item">{{$post->title}}</a>
							@endforeach
						@endif
					</div>
				</div>
				<!-- Popular Posts -->
				<div class="card mb-4">
					<h5 class="card-header">Popular Posts</h5>
					<div class="list-group list-group-flush">
						<a href="#" class="list-group-item">Post 1</a>
						<a href="#" class="list-group-item">Post 2</a>
					</div>
				</div>
			</div>
		</div>
@endsection('content')
