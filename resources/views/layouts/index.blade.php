<!DOCTYPE html>
<html lang="en">
    <head>
		@include('includes.head')
    </head>
    <body>
		
        <div class="container">
            @include('notifications')
            @yield('content')
		</div>

		<footer class="footer-row">
        @include('includes.footer')
		</footer>

    </body>
</html>
