@extends('layouts.app')

@section('template_title')
    {{ __('Criar') }} Categoria
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
                                <span class="card-title">{{ __('Criar') }} Categoria</span>
                            </div>
                            <div class="col-md-6 d-flex flex-row-reverse">
                                <a class="btn btn-primary" href="{{ route('categorias.index') }}">{{ __('Voltar') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('categorias.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('categoria.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
