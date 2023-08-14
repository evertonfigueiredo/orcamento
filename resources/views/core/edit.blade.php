@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Core
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <div class="row ">
                            <div class="col-md-6">
                                <span class="card-title">{{ __('Atualizar') }} Cor</span>
                            </div>
                            <div class="col-md-6 d-flex flex-row-reverse">
                                <a class="btn btn-primary" href="{{ route('cores.index') }}">{{ __('Voltar') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('cores.update', $core->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('core.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
