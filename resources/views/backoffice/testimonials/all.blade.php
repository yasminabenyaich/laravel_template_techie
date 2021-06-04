@extends('layouts.app')
@section('content')

<main id="main">
        
    <div class="container-fluid">
       
        <h1 class="text-center mt-5">Testimonial</h1>
        <div class="w-100 text-center my-5">
            <a class="btn btn-success m-auto" href={{ route('testimonial.create') }} >Create new About</a>
        </div>


        <div class="row text-secondary pb-3">
            <span class="col">#</span>
            <span class="col">Description</span>
            <span class="col">photo de profil</span>
            <span class="col">Nom</span>
            <span class="col">Job</span>
          
        </div>



        @foreach ($testimonials as $testimonial)
            
      
            <div class="row mt-2">
                <span class="col">{{$testimonial->id}}</span>
                <span class="col">{{$about->description}}</span>
                <span class="col">{{$about->pdp}}</span>
                <span class="col">{{$about->nom}}</span>
                <span class="col">{{$about->job}}</span>
            
                <div class="col-3 d-flex justify-content-start">
                    <div>

                        <a class="btn btn-warning m-0" href={{ route('testimonial.edit', $testimonial->id)}}>Edit</a>
                    </div>
                </div>
            </div>

        @endforeach

    </div>
</main> 
@endsection