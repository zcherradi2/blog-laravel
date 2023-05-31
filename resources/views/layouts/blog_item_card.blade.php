
<div class="item-card">
    <a href="{{route('blogs.show',['blog'=>$blog->id])}}">
    <h3 class='item-title'>{{$blog->title}}</h3>
    <p class="item-content">{{$blog->trimmedContent()}}</p>
    <p class="item-owner"><strong>written by: </strong>{{$blog->user->name}}</p>
    </a>
</div>
