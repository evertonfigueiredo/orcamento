@extends('layouts.app')

@section('template_title')
    {{ $cliente->name ?? __('Show Cliente') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row ">
                            <div class="col-md-6">
                                <span class="card-title">{{ __('Visualizar') }} Cliente</span>
                            </div>
                            <div class="col-md-6 d-flex flex-row-reverse">
                                <a class="btn btn-primary" href="{{ route('clientes.index') }}">{{ __('Voltar') }}</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nome:</strong>
                            {{ $cliente->nome }}
                        </div>
                        <div class="form-group">
                            <strong>Telefone:</strong>
                            {{ $cliente->telefone }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $cliente->email }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
