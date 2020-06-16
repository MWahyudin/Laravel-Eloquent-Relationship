
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

    @foreach($tags as $tag)
    <h1>{{ $tag->name }}</h1>
    @foreach ($tag->posts as $post)
        <ul>
<li>{{ $post->title }}</li>
        </ul>
    @endforeach
        
    @endforeach
