<!DOCTYPE html> 
<html> 
    <head> 
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	    <script href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

 <!-- Link to other blade pages to output title from page -->
        <title>  @yield('title') </title>
    </head> 
    <body> 
    <nav>

      </nav> 
 <!-- Link to other blade pages to output content from page -->
        @yield('content') 
    </body> 
</html>