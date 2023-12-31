@extends('layouts.app')

@section('template_title')
    {{ __('Criar') }} Produto
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <div class="row ">
                            <div class="col-md-6">
                                <span class="card-title">{{ __('Criar') }} Produto</span>
                            </div>
                            <div class="col-md-6 d-flex flex-row-reverse">
                                <a class="btn btn-primary" href="{{ route('produtos.index') }}">{{ __('Voltar') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('produtos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('produto.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
