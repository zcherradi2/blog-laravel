
<div class="comment-card">
    {{-- <a href="{{route('blogs.show',['blog'=>$blog->id])}}"> --}}
        <div><p class="comment-date"><strong>published in: </strong>{{$comment->created_at}}</p>
    <strong><h4 class='comment-user'>{{$comment->user->name}}</h4></strong></div>
    <p class="comment-content">{{$comment->content}}</p>
    <div class=' btn'id='btn{{$comment->id}}'>
    <i class="fas fa-thumbs-up">like</i></div><br>
    <p class="comment-likes" id="comment-{{$comment->id}}">{{$comment->likes}} likes</p>
    

    {{-- </a> --}}
</div>
<script>
    
    $(document).ready(
        
    
    function() {
        $('.comment-card').on('click', '#btn{{$comment->id}}', function() {
                var commentId = "{{$comment->id}}"
                var url = "{{ route('comments.like', ['comment' => $comment->id])}}";
                $.ajax({
                    url: url,
                    method: 'POST',
                    data: {
                        _token: "{{ csrf_token() }}",
                        user_id: "{{auth()->user()->id}}"
                    },
                    success: function(response) {
                        if (response.success) {
                            // Update the like count on the comment card
                            $('p.comment-likes#comment-'+response.commentId).text(response.likes + ' likes');
                        }
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                    }
                });
            
        });
    });
    </script>