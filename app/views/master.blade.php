

<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
		<title>@yield('title') - Mini Blog - </title>
		{{Basset::show('master.css')}}
	</head>
    <body>
    	<header>
    		<div class=row>
    			<div class"col-md-8">Mini Blog</div>
    			<div class"col-md-4">Logo</div>
    		</div>
    	</header>
    	
    	<div class="container col-md-8">
            @yield('content')
        </div>
        

        <div class="sidebar col-md-4">
        	@yield('side')
        </div>

        <div id="menu"> 
        	<div class="col-md-4">
				Aqui va el menu
        	</div>
        </div>

        

        <footer>This is the footer</footer>
    
    </body>
</html>