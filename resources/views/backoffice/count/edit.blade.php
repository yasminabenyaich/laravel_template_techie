@extends('layouts.app')
{{-- icon title text --}}
@section('content')

    @include('partials.header')
    <main id="main">
        <div class="container">
            @include('backoffice.backNav')
            <h1 class="text-center mt-5">Portfolio Items</h1>
            <h3 class="text-center my-5 text-secondary">Modifier  <span class="text-primary">{{$service->title}}</span> </h3>
            
            <form action="/service/{{$service->id}}/update" method="post" class="row">
                @csrf
                <div class="mb-3 col-6">
                    <label class="form-label">Titre</label>
                    <input type="text" class="form-control" name="title" value="{{$service->title}}"">
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">Icon</label>
                    <input type="text" class="form-control" name="icon" value="{{$service->icon}}">
                </div>

                <div class="mb-3 col-12 d-flex flex-column">
                    <label class="form-label">Texte</label>
                    <textarea name="text" id="" cols="30" rows="10">{{$service->text}}</textarea>
                </div>

                <div class="text-center w-100 my-5">
                    <button type="submit" class="btn btn-primary text-center">Modifier</button>
                </div>
            </form>
        </div>
    </main>
@endsection