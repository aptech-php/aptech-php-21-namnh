{{-- {{dd($posts[0]->categories())}} --}}
@foreach($posts as $post)
<h1>{{$post->title}}</h1>
@foreach($post->categories as $category)
<span>{{$category->name}}</span> -
@endforeach
<hr>
@endforeach