
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
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->user->name }}</p>
    <ul>
        <h1>Tag Post</h1>
    @foreach ($post->tags as $tag)
       
    <h3>{{ $tag->name }}</h3>
    @endforeach
    </ul>
    @endforeach  

