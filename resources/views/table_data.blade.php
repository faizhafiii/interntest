@php
$readUser = $readUser ?? session('readUser');
$gender = $gender ?? '';
$status = $status ?? '';

// print_r($readUser);
$current = $readUser['meta']['pagination']['links']['current'];
@endphp

<h2>Table Display Data</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
    @foreach ($readUser['data'] as $data)
        <tr>
            <td>{{ $data['id'] }}</td>
            <td>{{ $data['name'] }}</td>
            <td>{{ $data['email'] }}</td>
            <td>{{ $data['gender'] }}</td>
            <td>{{ $data['status'] }}</td>
            <td>
                <button class="btn-edit" data-id="{{ $data['id'] }}" data-name="{{ $data['name'] }}"
                    data-email="{{ $data['email'] }}" data-gender="{{ $data['gender'] }}"
                    data-status="{{ $data['status'] }}" data-link="{{ $current }}">Edit</button>
                <button class="btn-delete" data-id="{{ $data['id'] }}"
                    data-link="{{ $current }}">Delete</button>
            </td>
        </tr>
    @endforeach
</table>
@php
$previous = $readUser['meta']['pagination']['links']['previous'];
$next = $readUser['meta']['pagination']['links']['next'];
@endphp
<button id="btn-previous"
    data-link="{{ $previous != '' ? $previous . '&gender=' . $gender . '&status=' . $status : 'https://gorest.co.in/public/v1/users?gender=' . $gender . '&status=' . $status }}">Previous</button>
<button id="btn-next"
    data-link="{{ $next != '' ? $next . '&gender=' . $gender . '&status=' . $status : 'https://gorest.co.in/public/v1/users?gender=' . $gender . '&status=' . $status }}">Next</button>
