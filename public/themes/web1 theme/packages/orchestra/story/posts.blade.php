@extends('orchestra/story::layout')


@section('content')



@if(!empty($posts))
@foreach($posts as $post)


 <div class="post-item">
                <div class="post-meta">
                    <img src="images/author.png" alt="post author image" />
                    <div class="post-meta-content">
                        <h2>{{$post->title}}</h2>
                        <?php $user = User::find($post->user_id); ?>
   
                        Posted by <span><a href="#">{{$user->fullname}}</a></span>
                        on <span><a href="#">{{$post->published_at->format('d-m-Y')}}</a></span>
                    </div>
                    <span class="post_comment">{{$post->id}}</span>
                    <div class="clear"></div>
                </div>
                <!-- <img class="img_border_b img_nom" src="images/blog/01.jpg" alt="Post Image 1" /> -->
                @if(strlen($post->body) > 340)


                <?php 
                	$small = substr($post->body, 0, 340);
                	$string = substr($small, 0, strpos($small, ' '));
                	
                 ?>
                 <p>{{$small . $string}} ...</p>

             
                @else
                <p>{{$post->body}}</p>
                 @endif


                <a class="more" href="{{$post->link}}">More</a>
            </div>

@endforeach       

@endif

{{$posts->links()}}

@stop 


