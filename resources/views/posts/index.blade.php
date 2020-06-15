<table border="2">
    <tr>
        <th>Name</th>
        <th>Post title</th>
    </tr>
    {{--  @foreach($users as $user)
    @foreach ($user->posts as $post)
        
   
        
   
    {{--  {{  dd($user->address->country) }}  --}}
        {{--  <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $post->title }}</td>
        </tr>
    @endforeach
    @endforeach
    --}} 

    @foreach ($posts as $post)
    <tr>
   
    <td>{{ $post->user->name }}</td>  
    <td>{{ $post->title }}</td>      
    </tr>        
    @endforeach
</table>
