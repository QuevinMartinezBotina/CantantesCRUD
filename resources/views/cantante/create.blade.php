@extends('layout.app')

@section('title')
    Create Cantante
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Create Cantante</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            @if ($message = Session::get('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            @if ($errors->any())
                                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                    <strong>¡Revise los campos! </strong>
                                    @foreach ($errors->all() as $error)
                                        <span class="badge badge-danger">{{ $error }}</span>
                                    @endforeach
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            <form action="{{ route('cantante.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="name_cantante">Nombre del Cantante</label>
                                            <input type="text" name="name_cantante" class="form-control"
                                                value="{{ old('name_cantante') }}">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="genero">Genero musical</label>
                                            <input type="text" name="genero" class="form-select form-control"
                                                value="{{ old('genero') }}">
                                            </input>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="pais">País del Cantante</label>
                                            <input type="text" name="pais" class="form-select form-control"
                                                value="{{ old('pais') }}">
                                            </input>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">

                                        <button type="submit" class="btn btn-success m-1 ">Guardar</button>
                                        <a class="btn btn-primary m-1" href="{{ route('cantante.index') }}">Volver</a>

                                    </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
