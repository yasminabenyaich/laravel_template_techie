@extends('layouts.app')
{{-- icon title text --}}
@section('content')

    @include('partials.header')
    <main id="main">
        <div class="container">
            @include('backoffice.backNav')
            <h1 class="text-center mt-5">Services</h1>
            <h3 class="text-center my-5 text-secondary">Créer un service</h3>
            
            <form action="/service/store" method="post" class="row">
                @csrf
                <div class="mb-3 col-6">
                    <label class="form-label">Titre</label>
                    <input type="text" class="form-control" name="title" >
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">Icon</label>
                    <input type="text" class="form-control" name="icon">
                </div>

                <div class="mb-3 col-12 d-flex flex-column">
                    <label class="form-label">Texte</label>
                    <textarea name="text" id="" cols="30" rows="10"></textarea>
                </div>

                <div class="text-center w-100 my-5">
                    <button type="submit" class="btn btn-primary text-center">Créer</button>
                </div>
            </form>
        </div>
    </main>
@endsection