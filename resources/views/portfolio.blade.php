@extends('layouts.app')

@section('content')
    @include('components.hero', ['personal' => $personal])
    @include('components.about', ['personal' => $personal])
    @include('components.education', ['education' => $education])
    @include('components.experience', ['experience' => $experience])
    @include('components.organization', ['organization' => $organization])
    @include('components.skills', ['skills' => $skills])
    @include('components.portfolio', ['projects' => $projects])
    @include('components.contact', ['personal' => $personal])
@endsection
