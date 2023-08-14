@extends('layouts.app')

@section('template_title')
    {{ $core->name ?? __('Visualizar Cor') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row ">
                            <div class="col-md-6">
                                <span class="card-title">{{ __('Visualizar') }} Cor</span>
                            </div>
                            <div class="col-md-6 d-flex flex-row-reverse">
                                <a class="btn btn-primary" href="{{ route('cores.index') }}">{{ __('Voltar') }}</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nome:</strong>
                            {{ $core->nome }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
