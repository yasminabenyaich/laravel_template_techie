@extends('layouts.app')

@section('content')
    <h1 class="text-center my-5">Créer un About</h1>
   
    <form action="{{ route('about.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">Titre</label>
            <input type="text" class="form-control" name="titre">
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <input type="text" class="form-control" name="description">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection