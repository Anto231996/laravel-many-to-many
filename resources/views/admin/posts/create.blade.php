@extends('layouts.app')

@section('content')

{{-- validation --}}
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>    
@endif

<section class="container pt-5">
    <div class="row justify-content-center">
        <form class="col-6" action="{{route('admin.posts.store')}}" method="POST">
        @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Inserisci titolo</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Inserisci autore</label>
                <input type="text" name="author" id="author" class="form-control">  
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Inserisci testo</label>
                <input type="text" name="content" id="content" class="form-control">         
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Inserisci immagine</label>
                <input type="text" name="image_url" id="image_url" class="form-control">
            </div>
            <div>
                <input class="btn btn-primary text-white" type="submit" value="Invia">
            </div>
        </form>
    </div>
</section>
@endsection