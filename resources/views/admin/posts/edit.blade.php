@extends('layouts.app')

@section('content')
<section class="container pt-5">
    <div class="row justify-content-center">
        <form class="col-6" action="{{ route('admin.posts.update' ,$post) }}" method="post">
        @csrf
        @method("PUT")
            <div class="mb-3">
                <label for="name" class="form-label">Inserisci titolo</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $post->title }}">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Inserisci autore</label>
                <input type="text" name="author" id="author" class="form-control" value="{{ $post->author }}">  
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Inserisci testo</label>
                <input type="text" name="content" id="content" class="form-control" value="{{ $post->content }}">         
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Inserisci immagine</label>
                <input type="text" name="image_url" id="image_url" class="form-control" value="{{ $post->image_url }}">
            </div>
            <div class="mb-3">
                <select class="form-select" name="category">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" selected>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div>
                <input class="btn btn-primary text-white" type="submit" value="Invia">
            </div>
        </form>
    </div>
</section>
@endsection