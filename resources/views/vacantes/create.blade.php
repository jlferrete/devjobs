@extends ('layouts.app')

@section('navegacion')
    @include('ui.adminnav') 
@endsection


@section('content')
<h1 class="text-2xl text-center mt-10">Nueva Vacante</h1>

<form 
    class="max-w-lg mx-auto my-10"
>

    <div class="mb-5">
        <label 
            for="titulo" 
            class="block text-gray-700 text-sm mb-2"
        >Titulo Vacante:</label>

        <input 
            id="titulo" 
            type="text" 
            class="p-3 bg-gray-100 rounded form-input w-full  @error('password') is-invalid @enderror" 
            name="titulo"
            placeholder="Titulo de la vacante"
            value="{{ old('titulo') }}"
        >

        @error('titulo')
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-3 mb-6" role="alert">
                <strong class="font-bold">Error!</strong>
                <span class="block"> {{$message}}</span>
            </div>
        @enderror
    </div>

    <div class="mb-5">
        <label 
            for="titulo" 
            class="block text-gray-700 text-sm mb-2"
        >Categoría:</label>

        <select 
            name="categoria" 
            id="categoria"
            class="block appearance-none w-full 
                    border border-gray-200 text-gray-700 rounded leading-tight 
                    focus:outline-none focus:bg-white focus:border-gray-500 p-3 bg-gray-100
                    w-full"
        >
            <option disabled selected>- Selecciona -</option>
            @foreach($categorias as $categoria)
                <option value="{{ $categoria->id }}">
                    {{ $categoria->nombre }}
                </option>
            @endforeach

        </select>

    </div>

    <button 
            type="submit"
            class="bg-teal-500 w-full hover:bg-teal-600 text-gray-100 font-bold p-3 focus:outline focus:shadow-outline uppercase"
            >Publicar Vacante
    </button>

</form>

@endsection