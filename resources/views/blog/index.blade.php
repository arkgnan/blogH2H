<h1>My First Blog</h1>
@foreach ($blogs as $blog)
    <h2>{{ $blog->title }}</h2>
    <p>{{ $blog->description }}</p>
    <hr>
@endforeach