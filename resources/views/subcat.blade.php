
<!-- links the layout.blade.php -->
@extends('layout')
<!-- link layout to title here -->
@section('title')
    <!-- display in the tab -->
    This is the submenu page
@endsection
<!-- link layout to content here -->
@section('content')
      <!-- display title on page-->

      <h1> Sub Menu </h1> 
    
      <!-- Go thru the given database  -->
      @foreach($CatsSubcats as $CatsSubcat) 
                <!-- Divide page into 3 columns shift into line when page is small-->
                <div class="col-sm-4">
                    <!-- Delete item button-->
                    <a href="{{ url('deletecat', $CatsSubcat->id)  }}">DELETE</a>
                    <!-- Display current image from image folder -->
                   <img class="img-responsive" src="/img/{{$CatsSubcat->img}}" alt="">
                    <!-- create link using current id from menu item
                    to the next item page 
                    and display title -->

                    @if($CatsSubcat->cat_id==4 && $CatsSubcat->cat_id==5 && $CatsSubcat->cat_id!==8 
                        && $CatsSubcat->cat_id==9 && $CatsSubcat->cat_id==10 && $CatsSubcat->cat_id==12)
                     @else
                    <h1><a href=" /item/{{$CatsSubcat->id}} ">{{ $CatsSubcat->title }}</a></h1>
                    @endif
               </div>

          
            

      @endforeach

@endsection