@extends('orchestra/story::layout')


@section('content')
 <div class="post-item">
                <div class="post-meta">
                    <!-- <img src="images/author.png" alt="post author image" /> -->
                    <div class="post-meta-content">

                         <?php $user = User::find($page->user_id); ?>

                        <h2>{{$page->title}}</h2>
                        Posted by <span><a href="#"></a>{{$user->fullname}}</span>
                        | <span><a href="#">{{$page->published_at->format('d-m-Y')}}</a></span>
                    </div>
                    <span class="post_comment">{{$page->id}}</span>
                    <div class="clear"></div>
                </div>
                <!-- <img class="img_border_b img_nom" src="images/blog/01.jpg" alt="Post Image 1" /> -->
                <p>{{$page->body}}</p>
            </div>
            



            

            

@stop