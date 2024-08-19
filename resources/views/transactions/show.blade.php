@extends('layout.main')
@section('breadcrumbs', Breadcrumbs::render($breadcrumbs, $transaction->id))
@section('content')
    <main class="flex-1 container mx-auto bg-white overflow-hidden px-4 sm:px-6">
        <div class="flex-grow-1 py-3 justify-content-between min-мh-100">
            <h1 class="text-black text-3xl font-bold mb-4">
                {{ $title }}
            </h1>
            <div class="py-5" style="margin-right: 60%">
                @if ($success ?? null)
                    <div class="alert alert-info" role="alert">
                        Успешно!
                    </div>
                @endif
                <div>
                    <p><b>Статус:</b> {{ $transaction->name }}</p>
                </div>
                <div>
                    <p><b>Сумма:</b> {{ $transaction->amount }}</p>
                </div>
                @if ($transaction->contacts)
                    <div>
                        <p> <b>Сделки:</b>
                            @foreach ($transaction->contacts as $contact)
                                <a href="{{ route('contacts.show', $contact->id) }}" class="btn btn-primary mb-3">id:
                                    {{ $contact->id ?? null }}</a>
                            @endforeach
                        </p>
                    </div>
                @endif
                <div>
                    <form method="POST" action="{{ route('transactions.destroy', $transaction->id) }}">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('transactions.edit', $transaction->id) }}"
                            class="btn btn-primary mb-3 mt-3">Редактировать</a>
                        <button type="submit" class="btn btn-primary mb-3 mt-3">Удалить</button>
                        <a class="btn btn-primary mb-3 mt-3"
                            href="{{ route('transactions.index', $transaction->id) }}">Назад</a>
                    </form>
                </div>
            </div>
        @endSection
