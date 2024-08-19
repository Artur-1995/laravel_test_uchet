@extends('layout.main')
@section('breadcrumbs', Breadcrumbs::render($breadcrumbs, $transactions))
@section('content')

    <main class="flex-1 container mx-auto bg-white overflow-hidden px-4 sm:px-6">
        <div class="flex-grow-1 py-3 justify-content-between min-мh-100">
            <h1 class="text-black text-3xl font-bold mb-4">
                {{ $title }}
            </h1>
            @if ($success ?? null)
                <div class="alert alert-info" role="alert">
                    Успешно!
                </div>
            @endif
            @if ($success_destroy ?? null)
                <div class="alert alert-info" role="alert">
                    {{ $success_destroy }}
                </div>
            @endif
            <div>
                <a href="{{ route('transactions.create') }}" class="btn btn-primary mb-3 mt-3">Добавить контакт</a>
            </div>
            <div class="py-1">
                @include("layout.$breadcrumbs")
            </div>
        </div>
        <div class="py-5 pb-5" style="margin-left: 10%; margin-right: 60%">
            {{-- {{ $contacts->withQueryString()->links() }} --}}
        </div>
    @endsection
