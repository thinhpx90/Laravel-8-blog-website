<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('lib')}}/bs4/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="{{asset('lib')}}/bs4/font.css" />
    <link href="https://fonts.googleapis.com/css2?family=Smooch&display=swap" rel="stylesheet">


    <!-- Jquery -->
    <script type="text/javascript" src="{{asset('lib')}}/jquery-3.5.1.min.js"></script>
    <!-- BS4 Js -->
    <script type="text/javascript" src="{{asset('lib')}}/bs4/bootstrap.bundle.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
    	<div class="container">
            <img src="/imgs/Logo.jpg" style="width: 60px">
		  <a class="navbar-brand" href="{{url('/')}}" style="font-size: 25px; color: #1c7430; font-weight: bold; margin-left: 10px">VietNam Travel</a>

		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNav">
		    <ul class="navbar-nav ml-auto" >
		      <li class="nav-item active">
		        <a class="nav-link" href="{{url('/')}}" style="font-size: 17px; color: #1c7430; font-weight:500; text-decoration: underline; ">Trang chủ</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="{{url('all-categories')}}" style="font-size: 17px; color: #1c7430; font-weight:500; color: #1c7430; " >Categories</a>
		      </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('category/danh-lam-thang-canh/6')}}" style="font-size: 17px; color: #1c7430; font-weight:500; color: #1c7430;">Danh lam thắng cảnh</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('category/dac-san/7')}}" style="font-size: 17px; color: #1c7430; font-weight:500; color: #1c7430; ">Đặc sản</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('category/thien-nhien/10')}}" style="font-size: 17px; color: #1c7430; font-weight:500; color: #1c7430;  ">Thiên nhiên</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('category/van-hoa/11')}}" style="font-size: 17px; color: #1c7430; font-weight:500; color: #1c7430;  ">Văn hóa</a>
                </li>
		      @guest
		      <li class="nav-item">
		        <a class="nav-link" href="{{url('login')}}" style="font-size: 17px; color: #1c7430; font-weight:400; color: black; color: gray">Login</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="{{url('register')}}" style="font-size: 17px; color: #1c7430; font-weight:400; color: black; color: gray">Register</a>
		      </li>
		      @else
		      <li class="nav-item">
		        <a class="nav-link" href="{{url('save-post-form')}}">Add Post</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="{{url('manage-posts')}}">Manage Posts</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" href="{{url('logout')}}">Logout</a>
		      </li>
		      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            	</form>
		      @endguest
		    </ul>
		  </div>
		</div>

	</nav>

	<!-- Get latest posts -->
	<main class="container-fluid mt-1">
		@yield('content')
	</main>
</body>
</html>
