@include ('layouts.header')
<div class="container">
    <div class="row">
        @foreach($posts as $post)
        <div class="col s12 xl6">
            <div class="card" id="post-card">
                <div class="card-image">
                    <img src="{{asset('img/space.jpg')}}" alt="Image post">
                </div>
                <div class="card-content">
                    
                    <a href="post/{{$post->slug_url}}">
                        <span class="card-title">{{$post->title}}</span>
                    </a>
                    <span class="date">{{$post->create_post}}</span>
                    <p class="content-text">
                        {!! substr($post->content,0,50)!!}...
                    </p>
                    <div class="row">
                        <div class="col s12">
                            <a href="post/{{$post->slug_url}}" class=" waves-effect waves-light center " style="text-decoration: underline">Continuar leyendo </a>
                        </div>
                    </div>
                    <div class="row" id="tags">
                        <div class="col s12">
                            @foreach($post->tags as $tag)
                            <a href="search?tag={{$tag->tag->name}}"><div class="chip">{{$tag->tag->name}}</div></a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="card-action">
                    <div class="row" id="card-footer">
                        <div class="col s2">
                        </div>
                        <div class="col s3">
                            <span>
                                <i class="material-icons prefix">comment</i>
                                {{count($post->comments)}}
                            </span>
                        </div>
                        <div class="col s2">
                        </div>
                        <div class="col s3">
                            <span style="margin-left:10%;">
                                <i class="material-icons prefix">star</i>
                                {{count($post->comments)}}
                            </span>
                        </div>
                        <div class="col s2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@include ('layouts.footer')