<div class='linear-container'>
    @foreach ($comments as $comment)
        @include('layouts.comment_item_card',['comment'=>$comment])
    @endforeach
</div>