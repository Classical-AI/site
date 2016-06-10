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
                @if(trim($currentUrlPath, '/') == trim($blogPost->path, '/'))
                    <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
                @endif
                <a href="@url($blogPost->path)">{{ $blogPost->title }}</a>
            </li>
        @endforeach
    </ul>
@endforeach
