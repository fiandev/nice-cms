<div>
    <table class="table-auto">
        <thead>
            <tr>
                <th>Field</th>
                <th>Value</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($record->getAttributes as $key => $value)
                <tr>
                    <td>{{ $key }}</td>
                    <td>{{ $value }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>