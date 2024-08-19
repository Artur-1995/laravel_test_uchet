<table class="table">
    <thead>
        <tr>
            <th scope="col">№</th>
            <th scope="col">Имя</th>
            <th scope="col">Фамилия</th>
            <th scope="col">Сделки</th>
            <th scope="col"></th>
        </tr>
    </thead>
    @foreach ($contacts as $num => $data)
        <tbody>
            <tr>
                <td>{{ ++$num }}</td>
                <td>
                    {{ $data->name }}
                </td>
                <td>
                    {{ $data->last_name }}
                </td>
                <td>
                    @foreach ($data->transactions as $transaction)
                        id сделки: {{ $transaction->id }}
                        <a href="{{ route('transactions.show', $transaction->id) }}">
                            {{ "$transaction->name $transaction->last_name" }}</a>
                    @endforeach
                </td>
                <td>
                    <a class="btn btn-primary" href="{{ route('contacts.show', $data->id) }}">просмотр</a>
                </td>
            </tr>
        </tbody>
    @endforeach
</table>
