@extends('layouts.app')
@section('content')


<div class="s130" background-image:url({{url('images/background.jpg')}})>
      
    <form action="{{url('search')}}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="inner-form">
          <div class="input-field first-wrap">
            <div class="svg-wrapper">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
              </svg>
            </div>

            <input id="search" type="text" placeholder="What are you looking for?" name="search_keyword"/>


          </div>
          <div class="input-field second-wrap">
            <button class="btn-search" type="submit">SEARCH</button>
          </div>
        </div>
        <span class="info">ex. Game, Music, Video, Photography</span>

        <div class="container" style="margin-top: 84px; background-color:white;">
        
        <table>
            @if( count($files) > 0 )
            <h4 style="text-align:center;"><u>Here is your results:</u></h4>
            @foreach( $files as $key=>$file)
                <tr>
                    <td>
                       <img src="{{ asset('storage/app/'.$file) }}" height="30px" width="30px">
                    </td>
                
                </tr> 
            @endforeach
            @else
               <h2 style="text-align:center; margin-top: 20px;"><em>No results were found.</em></h2>
            @endif
        </table>
     
        </div>
    </form>
</div>

@endsection