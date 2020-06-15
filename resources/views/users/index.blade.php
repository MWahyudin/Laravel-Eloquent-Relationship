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
        <th>Name</th>
        <th>Post</th>
    </tr>
    @foreach($users as $user)
    <p>{{ $user->name }}</p>
    @foreach ($user->posts as $post)
        
   
    {{--  {{  dd($user->address->country) }}  --}}
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $post->title }}</td>
        </tr>
    @endforeach
    @endforeach
</table>
