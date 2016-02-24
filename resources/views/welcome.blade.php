
<!-- links the layout.blade.php -->
@extends('layout')
<!-- link layout to title here -->
@section('title')
    <!-- display in the tab -->
    Applebee's
@endsection
<!-- link layout to content here -->
@section('content')
      <!-- Display title on page -->
      <h1> Applebee's</h1>  
      <!-- loop through current database that was given -->
      @foreach($CatsSubcats as $CatsSubcat) 
                <!-- Divide page into 3 columns shift into line when page is small-->
                <div class="col-sm-4">
                    <!-- Delete item -->
                    <a href="{{ url('deletecat', $CatsSubcat->id)  }}">DELETE</a>

                  <!-- <a href=" /subcat/{{$CatsSubcat->id}} ">DELETE</a>  -->
                   <!-- Display current mage from image folder -->
                   <img class="img-responsive" src="/img/{{$CatsSubcat->img}}" alt="">
                   <!-- create link using current id from menu item
                    to the next Subcat page 
                    and display title -->
                    @if($CatsSubcat->id==4 )
                    <h1><a href=" /item/{{$CatsSubcat->id}} ">{{ $CatsSubcat->title }}</a></h1>
                    @elseif($CatsSubcat->id==5)
                    <h1><a href=" /item/{{$CatsSubcat->id}} ">{{ $CatsSubcat->title }}</a></h1>
                    @elseif($CatsSubcat->id==8)
                    <h1><a href=" /item/{{$CatsSubcat->id}} ">{{ $CatsSubcat->title }}</a></h1>
                    @elseif($CatsSubcat->id==9)
                    <h1><a href=" /item/{{$CatsSubcat->id}} ">{{ $CatsSubcat->title }}</a></h1>
                    @elseif($CatsSubcat->id==10)
                    <h1><a href=" /item/{{$CatsSubcat->id}} ">{{ $CatsSubcat->title }}</a></h1>
                    @elseif($CatsSubcat->id==12)
                    <h1><a href=" /item/{{$CatsSubcat->id}} ">{{ $CatsSubcat->title }}</a></h1>
                    @else
                    <h1><a href=" /subcat/{{$CatsSubcat->id}} ">{{ $CatsSubcat->title }}</a></h1>
                    @endif
               </div>

          
            

      @endforeach

@endsection