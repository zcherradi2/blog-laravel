<form class="comment-card" method="POST" action="{{route('comment.store')}}" id='myForm'>
    @csrf
    <input type="hidden" name="blog_id" value="{{ $blog->id }}">
    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
    <p style="color:rgb(97, 97, 97);display:inline;">you are commenting as:</p>
    <label for="content">{{auth()->user()?->name}}</label>
    <textarea class="comment-card" name="content" cols="100" rows="3" id='textArea'></textarea>
    <button type="submit">add comment</button>
</form>
<script>
    const textarea = document.getElementById('textArea');
    const form = document.getElementById('myForm');
  
    textarea.addEventListener('keydown', function(event) {
      if (event.key === 'Enter' && !event.shiftKey) {
        event.preventDefault();
        form.submit();
      }
    });
  </script>
