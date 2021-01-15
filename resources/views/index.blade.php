@foreach($words as $word)
    <h1>{{$word->id}}</h1>
    <h1>{{$word->text}}</h1>
@endforeach
