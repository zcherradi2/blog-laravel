<div class='grid-container'>
    @foreach ($blogs as $blog)
        @include('layouts.blog_item_card',['blog'=>$blog])
    @endforeach
</div>