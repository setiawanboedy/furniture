<!DOCTYPE html>
<html lang="en">

<head>
	<title>@yield('title')</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{url('frontend/images/icons/favicon.png')}}" />
	<!--===============================================================================================-->
	<title>Login Form</title>
    @include('includes.style')
</head>

<body class="animsition">

	<!-- Header -->
    @include('includes.navbar')

	<!-- Cart -->
	@include('includes.cart')

    @yield('content')


	<!-- Footer -->
    @include('includes.footer')


	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

    {{-- @include('includes.modal-detail') --}}

	<!--===============================================================================================-->
	@include('includes.script')

</body>

</html>
