@extends('layout.main')
@section('breadcrumbs', Breadcrumbs::render($breadcrumbs, $transaction->id))
@section('content')
    <main class="flex-1 container mx-auto bg-white overflow-hidden px-4 sm:px-6">
        <div class="flex-grow-1 py-3 justify-content-between min-мh-100">
            <h1 class="text-black text-3xl font-bold mb-4">
                {{ $title }}
            </h1>
            <div class="py-5" style="margin-right: 60%">
                @error('error')
                    <div class="alert alert-warning" role="alert">
                        Такая сделка уже сеществует!
                    </div>
                @enderror

                <form method="POST" action="{{ route('transactions.update', $transaction->id) }}">
                    @csrf
                    @method('patch')
                    <div class="mb-3">
                        <label for="name" class="form-label">Наименование</label>
                        <input type="text" name="name" class="form-control" id="name"
                            value="{{ old('name') ?? $transaction->name }}" placeholder="Введите название">
                        @error('name')
                            @if (old('name'))
                                <p class="text-danger">{{ $message }}Сделка с таким заголовком уже существует</p>
                            @else
                                <p class="text-danger">{{ $message }}Заполните поле</p>
                            @endif
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="amount" class="form-label">Сумма</label>
                        <input type="number" name="amount" class="form-control" id="amount"
                            value="{{ old('amount') ?? $transaction->amount }}" placeholder="Введите сумму сделки">
                        @error('amount')
                            <p class="text-danger">Заполните поле</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="contact_id"class="form-label">Контакты</label>
                        <select class="form-select form-select" name="contact_id[]" id="contact_id" multiple
                            aria-label=".form-select">
                            @foreach ($contacts as $contact)
                                <option {{ old('contact_id[]') == $contact->id ? 'selected' : '' }}
                                    value="{{ $contact->id }}">
                                    {{ $contact->name }}</option>
                            @endforeach
                        </select>
                        @error('contact_id')
                            <p class="text-danger">Заполните поле</p>
                        @enderror
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Обновить</button>
                        <a class="btn btn-primary mb-3 mt-3"
                            href="{{ route('transactions.show', $transaction->id) }}">Назад</a>
                    </div>
                </form>
            </div>
        @endSection
