@include('admin.layouts.partials.head')
<body class="">
	@include('admin.layouts.partials.topbar')
	@include('admin.layouts.partials.sidebar')
	<div class="main-content">
		@include('admin.layouts.partials.navbar')
		@include('admin.layouts.partials.header')
		<div class="container-fluid mt--7">
			@yield('content')
			<div class="container mt-5 pb-5">
        		<div class="copyright text-center my-auto">
          			<span><br>
          				Copyright ©2023 | This application is edited with <i class="fa fa-heart"></i> by <a target="_blank" href="#">Vindy F.L.</a>
        			</span><br><br><br>
        		</div>
      		</div>
		</div>
	</div>
	@include('admin.layouts.partials.footer')
</body>

</html>