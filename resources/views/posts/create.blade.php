<x-app-layout>
    <h1> Formulario para crear un nuevo post </h1>
    <!-- show errors -->
    {{-- @if ($errors->any())
        <div>
            <h2>Errores:</h2>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}

    <form action="{{route('posts.store')}}" method="POST">

        @csrf   

        <label>
            Titulo:
            <input type="text" name="title" value="{{old('title')}}">
        </label>

        @error('title')
            <p> {{$message}}</p>
        @enderror

        <br>
        <br>

        <label>
            Slug:
            <input type="text" name="slug" value="{{old('slug')}}" >
        </label>
        @error('slug')
            <p> {{$message}}</p>
        @enderror
        <br>
        <br>

        <label>
            Categoria:
            <input type="text" name="category" value="{{old('category')}}">
        </label>
        @error('category')
            <p> {{$message}}</p>
        @enderror
        <br>
        <br>
        <label>
            Contenido:
            <textarea name="content">{{old('content')}}</textarea>
        </label>
        @error('content')
            <p> {{$message}}</p>
        @enderror
        <br>
        <br>
        <button type="submit">
            Crear post
        </button>
    </form>
</x-app-layout>