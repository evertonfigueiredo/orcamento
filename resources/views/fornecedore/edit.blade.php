@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Fornecedore
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Fornecedore</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('fornecedores.update', $fornecedore->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('fornecedore.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
