@foreach($topics as $topic)
    <a href="/topics/{{ $topic->id}}">{{ $post->title }}</a>
@endforeach