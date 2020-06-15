<table border="2">
    {{--  <tr>
        <th>name</th>
        <th>email</th>
        <th>Country</th>
    </tr>
    @foreach($users as $user)
    {{--  {{  dd($user->address->country) }}  --}}
        {{--  <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->address->country }}</td>
        </tr>
    @endforeach  --}} 
    <tr>
        <th>Country</th>
        <th>Name</th>
    </tr>
    @foreach($addresses as $address)
    {{--  {{  dd($user->address->country) }}  --}}
        <tr>
            <td>{{ $address->country }}</td>
            <td>{{ $address->user->name }}</td>
        
        </tr>
    @endforeach
</table>
