@foreach(
    collect($blogPosts)
        ->where('category', $category)
        ->sortBy('order')
        ->groupBy('sub_category')
    as $categoryPosts
)
    <ul class="list-group">
        <li class="list-group-item list-group-item-info">
            {{ $categoryPosts->first()->sub_category }}
        </li>

        @foreach($categoryPosts as $blogPost)
            <li class="list-group-item">
                <a href="@url($blogPost->path)">{{ $blogPost->title }}</a>
            </li>
        @endforeach
    </ul>
@endforeach
