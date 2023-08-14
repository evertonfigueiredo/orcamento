@extends('layouts.app')

@section('template_title')
    Perfil
@endsection

@section('content')
    @include('profile.partials.update-profile-information-form')
    <hr>
    @include('profile.partials.update-password-form')
    <hr>
    @include('profile.partials.delete-user-form')
@endsection
