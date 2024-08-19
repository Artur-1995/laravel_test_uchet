@extends('layout.main')
@section('breadcrumbs', Breadcrumbs::render($breadcrumbs, $contact))
@section('content')
    <main class="flex-1 container mx-auto bg-white overflow-hidden px-4 sm:px-6">
        <div class="flex-grow-1 py-3 justify-content-between min-мh-100">
            <h1 class="text-black text-3xl font-bold mb-4">
                {{ $title }}
            </h1>
            <div class="py-5" style="margin-right: 60%">
                @error('error')
                    <div class="alert alert-warning" role="alert">
                        Такой контакт уже существует!
                    </div>
                @enderror
                <form action="{{ route('contacts.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Имя</label>
                        <input type="text" class="form-control" name="name" id="name"
                            value="{{ old('name') ?? $contact->name }}" rows="3" placeholder="Введите имя">
                        @error('name')
                            <p class="text-danger">Заполните поле</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="last_name" class="form-label">Фамилия</label>
                        <input type="integer" class="form-control" name="last_name" id="last_name"
                            value="{{ old('last_name') ?? $contact->last_name }}" rows="3"
                            placeholder="Введите фамилию">
                        @error('last_name')
                            <p class="text-danger">Заполните поле</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="transaction_id"class="form-label">Сделки</label>
                        <select class="form-select form-select" name="transaction_id" id="transaction_id"
                            aria-label=".form-select" multiple>
                            @foreach ($transactions as $transaction)
                                <option {{ old('transaction_id') == $transaction->id ? 'selected' : '' }}
                                    value="{{ $transaction->id }}">
                                    {{ $transaction->name }}</option>
                            @endforeach
                        </select>
                        @error('transaction_id')
                            <p class="text-danger">Заполните поле</p>
                        @enderror
                    </div>
                    <div>
                        <button type="submit" class="mt-3 btn btn-primary">Обновить</button>
                        <a class="btn btn-primary mt-3" href="{{ route('contacts.show', $contact->id) }}">Назад</a>
                    </div>
                </form>
            </div>
        @endSection
