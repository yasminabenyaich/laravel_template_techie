@extends('layouts.app')
@section('content')

<main id="main">
        
    <div class="container-fluid">
       
        <h1 class="text-center mt-5">About</h1>
        <div class="w-100 text-center my-5">
            <a class="btn btn-success m-auto" href={{ route('about.create') }} >Create new About</a>
        </div>


        <div class="row text-secondary pb-3">
            <span class="col">#</span>
            <span class="col">Titre</span>
            <span class="col">Description</span>
            
          
        </div>



        @foreach ($abouts as $about)
            
      
            <div class="row mt-2">
                <span class="col">{{$about->id}}</span>
                <span class="col">{{$about->titre}}</span>
                <span class="col">{{$about->description}}</span>
            
                <div class="col-3 d-flex justify-content-start">
                    <div>

                        <a class="btn btn-warning m-0" href={{ route('about.edit', $about->id)}}>Edit</a>
                    </div>
                </div>
            </div>

        @endforeach

    </div>
</main> 
@endsection