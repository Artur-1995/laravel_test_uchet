@extends('layout.main')
@section('breadcrumbs', Breadcrumbs::render($breadcrumbs))
@section('content')

    <main class="flex-1 container mx-auto bg-white overflow-hidden px-4 sm:px-6">
        <div class="flex-grow-1 py-3 justify-content-between min-мh-100">
            <h1 class="text-black text-3xl font-bold mb-4">
                {{ $title }}
            </h1>
            <div class="py-1">
                @include("layout.$breadcrumbs")
            </div>
        @endsection
