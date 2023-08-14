@extends('layouts.app')

@section('template_title')
    {{ $categoria->name ?? __('Visualizar Categoria') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row ">
                            <div class="col-md-6">
                                <span class="card-title">{{ __('Visualizar') }} Categoria</span>
                            </div>
                            <div class="col-md-6 d-flex flex-row-reverse">
                                <a class="btn btn-primary" href="{{ route('categorias.index') }}">{{ __('Voltar') }}</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nome:</strong>
                            {{ $categoria->nome }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
