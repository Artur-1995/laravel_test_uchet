@extends('layout.main')
@section('breadcrumbs', Breadcrumbs::render($breadcrumbs))
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
                <form action="{{ route('transactions.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name"class="form-label">Наименование</label>
                        <input type="string" class="form-control" name="name" id="name" value="{{ old('name') }}"
                            rows="3" placeholder="Введите наименование сделки">
                        @error('name')
                            <p class="text-danger">Заполните поле</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="amount" class="form-label">Сумма</label>
                        <input type="integer" class="form-control" name="amount" id="amount" value="{{ old('amount') }}"
                            rows="3" placeholder="Введите сумму сделки">
                        @error('amount')
                            @if (old('amount'))
                                <p class="text-danger">Сумма не корректна</p>
                            @else
                                <p class="text-danger">Заполните поле</p>
                            @endif
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="contact_id"class="form-label">Контакт</label>
                        <select class="form-select form-select" multiple name="contact_id[]" id="contact_id"
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
                        <button type="submit" class="mt-3 btn btn-primary">Создать</button>
                        <a class="btn btn-primary mt-3" href="{{ route('transactions.index') }}">Назад</a>

                    </div>
                </form>

            </div>
        @endSection
