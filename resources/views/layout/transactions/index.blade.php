<table class="table">
    <thead>
        <tr>
            <th scope="col">№</th>
            <th scope="col">Наименование</th>
            <th scope="col">Сумма</th>
            <th scope="col">id контакта</th>
            <th scope="col"></th>
        </tr>
    </thead>

    @foreach ($transactions as $num => $data)
        <tbody>
            <tr>
                <td>{{ ++$num }}</td>
                <td>
                    {{ $data->name }}
                </td>
                <td>
                    {{ $data->amount }}
                </td>
                <td>
                    @foreach ($data->contacts as $contact)
                        Контакты: {{ $contact->id }}
                        <a href="{{ route('contacts.show', $contact->id) }}">
                            {{ "$contact->name $contact->last_name" }}</a>
                    @endforeach
                </td>
                <td>
                    <a class="btn btn-primary" href="{{ route('transactions.show', $data->id) }}">просмотр</a>
                </td>
            </tr>
        </tbody>
    @endforeach
</table>
