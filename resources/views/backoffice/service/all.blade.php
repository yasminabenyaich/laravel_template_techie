@extends('layouts.app')
@section('content')

<main id="main">
        
    <div class="container-fluid">
       
        <h1 class="text-center mt-5">Services</h1>
        <div class="w-100 text-center my-5">
            <a class="btn btn-success m-auto" href="/service/create">Create new</a>
        </div>


        <div class="row text-secondary pb-3">
            <span class="col">#</span>
            <span class="col">Icone</span>
            <span class="col">Titre</span>
            <span class="col">Texte</span>
          
        </div>



        @foreach ($services as $service)
            
      
            <div class="row mt-2">
                <span class="col">{{$service->id}}</span>
                <span class="col">{{$service->icone}}</span>
                <span class="col">{{$service->titre}}</span>
                <span class="col">{{$service->description}}</span>
                <div class="col-3 d-flex justify-content-start">
                    <div>

                        <a class="btn btn-warning m-0" href="/service/{{$service->id}}/edit">Edit</a>
                    </div>
                    <div>
                        <form method="post" class="col m-0" action="/service/{{$service->id}}/delete" >
                            @csrf 
                            <button class="btn btn-danger text-white py-1 px-2" type="submit">Delete</button>
                        </form>
                    </div>
                </div>
            </div>

        @endforeach

    </div>
</main> 
@endsection