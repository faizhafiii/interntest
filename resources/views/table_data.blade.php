@php
$readUser = $readUser ?? session('readUser');

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
                <button id="btn-edit" data-id="{{ $data['id'] }}" data-link="{{ $current }}">Edit</button>
                <button id="btn-delete" data-id="{{ $data['id'] }}" data-link="{{ $current }}">Delete</button>
            </td>
        </tr>
    @endforeach
</table>
@php
$previous = $readUser['meta']['pagination']['links']['previous'];
$next = $readUser['meta']['pagination']['links']['next'];
@endphp
<button id="btn-previous"
    data-link="{{ $previous != '' ? $previous : 'https://gorest.co.in/public/v1/users' }}">Previous</button>
<button id="btn-next" data-link="{{ $next != '' ? $next : 'https://gorest.co.in/public/v1/users' }}">Next</button>
