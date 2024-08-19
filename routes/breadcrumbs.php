<?php
Breadcrumbs::for('main.index', function ($trail) {
    $trail->push('Меню', route('main'));
});

Breadcrumbs::for('contacts.index', function ($trail) {
    $trail->parent('main.index');
    $trail->push('Контакты', route('contacts.index'));
});
Breadcrumbs::for('contacts.create', function ($trail) {
    $trail->parent('contacts.index');
    $trail->push('Создание контакта', route('contacts.create'));
});
Breadcrumbs::for('contacts.show', function ($trail, $contact) {
    $trail->parent('contacts.index');
    $trail->push("$contact->name $contact->last_name", route('contacts.show', $contact->id));
});
Breadcrumbs::for('contacts.edit', function ($trail, $contact) {
    $trail->parent('contacts.show', $contact);
    $trail->push('Редактирование', route('contacts.edit', $contact->id));
});
Breadcrumbs::for('transactions.index', function ($trail) {
    $trail->parent('main.index');
    $trail->push('Сделки', route('transactions.index'));
});
Breadcrumbs::for('transactions.create', function ($trail) {
    $trail->parent('transactions.index');
    $trail->push('Создание сделки', route('transactions.create'));
});
Breadcrumbs::for('transactions.show', function ($trail, $id) {
    $trail->parent('transactions.index');
    $trail->push($id, route('transactions.show', $id));
});
Breadcrumbs::for('transactions.edit', function ($trail, $id) {
    $trail->parent('transactions.show', $id);
    $trail->push('Редактирование', route('transactions.edit', $id));
});