<!DOCTYPE html>
<html>
	<body>
		
		@if(Auth::check())
			<pre>Welcome {{ Auth::user()->user_name }}</pre>
		@endif
		
		
			<!-- <h1>CALCULATE 24 </h1> -->
			
                        @extends('rechnr.admin.main')
		@if(Auth::check())
		        @yield('admin_content')
		@else
			@overwrite('content')
		@endif
        
	</body>
</html>