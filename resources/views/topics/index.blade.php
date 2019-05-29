@foreach($topics as $topic)
    <a href="/topics/{{ $topic->id}}">{{ $post->title }}</a>
@endforeach

<form method="POST" action="/topics">
    {{ csrf_field() }}
    <input type="text" name="title">
    <input type="text" name="content">
    <input type="submit">
</form>