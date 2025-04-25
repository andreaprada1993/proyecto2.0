@extends('template')

@section('title', 'Crear Categoria')
@push('css')
<style>
    #descripcion{
        resize: none;
    }
</style>
@endpush
@section('content')

<div class="container-fluid px-4">

<h1 class="mt-4 text-center"> crear categorias</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item "><a href="{{ route('panel') }}">Inicio</a></li>
    <li class="breadcrumb-item "><a href="{{ route('categorias.index') }}">categorias</a></li>
    <li class="breadcrumb-item active">crear categoria</li>
</ol>

<div class="container w-100 border border-3 border-primary rounded p-4 mt-3">
    <form action="{{ route('categorias.store')}}" method="post">
        @csrf <!-- es una directiva que envia  formularios-->
        <div class="row g-3">
        <div class="row g-3">

        </div class="col-md-6">
            <label for="nombre" class="form-label" >Nombre:</label>
            <input type="text"  id="nombre" name="nombre" class="form-control"  value="{{old('nombre')}}">
             @error('nombre')
                <small class="text-danger">{{'*' .$message }}</small>
            @enderror
        </div>

        <div class="col-md-12">
            <label for="descripcion" class="form-label">Descripcion:</label>
            <!-- old para que el texto se quede en la descripcion-->
            <textarea id="descripcion" name="descripcion" rows="3" class="form-control" >{{old('descripcion')}}</textarea>

        </div>
<!-- boton descrpcion-->
<div class="col-12 text-center">
<button type="submit" class="btn btn-primary">Guardar</button>
</div>
    </form>

</div>

</div>
@endsection
@push('js')

@endpush