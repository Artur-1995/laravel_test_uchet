@extends('layout.main')
@section('breadcrumbs', Breadcrumbs::render($breadcrumbs, $contact))
@section('content')
    <main class="flex-1 container mx-auto bg-white overflow-hidden px-4 sm:px-6">
        <div class="flex-grow-1 py-3 justify-content-between min-мh-100">
            <h1 class="text-black text-3xl font-bold mb-4">
                {{ $title }}
            </h1>
            <div class="py-5" style="margin-right: 60%">
                @if ($success ?? null)
                    <div class="alert alert-info" role="alert">
                        Успешно обновлен!
                    </div>
                @endif
                <div>
                    <p>Имя: {{ $contact->name }}</p>
                </div>
                <div>
                    <p>Фамилия: {{ $contact->last_name }}</p>
                </div>
                @if ($contact->transaction_id)
                    <div>
                        <p>id сделки: {{ $contact->transaction_id ?? null }}</p>
                    </div>
                @endif

                <div>
                    <form method="contact" action="{{ route('contacts.destroy', $contact->id) }}">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('contacts.edit', $contact->id) }}"
                            class="btn btn-primary mb-3 mt-3">Редактировать</a>
                        <button type="submit" class="btn btn-primary mb-3 mt-3">Удалить</button>
                        <a class="btn btn-primary mb-3 mt-3" href="{{ route('contacts.index') }}">Назад</a>
                    </form>
                </div>
                <div>
                </div>
            </div>
        @endSection
