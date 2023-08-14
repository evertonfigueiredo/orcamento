@extends('layouts.app')

@section('template_title')
    {{ $produto->name ?? __('Visualizar Produto') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row ">
                            <div class="col-md-6">
                                <span class="card-title">{{ __('Visualizar') }} Produto</span>
                            </div>
                            <div class="col-md-6 d-flex flex-row-reverse">
                                <a class="btn btn-primary" href="{{ route('produtos.index') }}">{{ __('Voltar') }}</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nome:</strong>
                            {{ $produto->nome }}
                        </div>
                        <div class="form-group">
                            <strong>Categoria Id:</strong>
                            {{ $produto->categoria_id }}
                        </div>
                        <div class="form-group">
                            <strong>Cor Id:</strong>
                            {{ $produto->cor_id }}
                        </div>
                        <div class="form-group">
                            <strong>Valor:</strong>
                            {{ $produto->valor }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
