@extends('layouts.main.app')

@section('content')
    <main class="blog-post">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">{{ $post->title }}</h1>
            <p class="edica-blog-post-meta" data-aos="fade-up"
               data-aos-delay="200">{{ $date->day }} {{ $date->translatedFormat('F') }}, {{ $date->year }}
                • {{ $date->format('H:i') }} • Комментарии • {{ $post->comments->count() }}</p>
            <section class="blog-post-featured-img" data-aos="fade-up" data-aos-delay="300">
                <img src="{{ asset('storage/'.$post->main_image) }}" alt="featured image" class="w-100">
            </section>
            <section class="post-content">
                <div class="row">
                    <div class="col-lg-9 mx-auto" data-aos="fade-up">
                        {!! $post->content !!}
                    </div>
                </div>
            </section>
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    <section class="related-posts">
                        <h2 class="section-title mb-4" data-aos="fade-up">Схожие посты</h2>
                        <div class="row">
                            @foreach($relatedPosts as $relatedPost)
                                <div class="col-md-4" data-aos="fade-right" data-aos-delay="100">
                                    <img src="{{ asset('storage/'.$relatedPost->preview_image) }}" alt="related post"
                                         class="post-thumbnail">
                                    <p class="post-category">{{ $relatedPost->categories->title}}</p>
                                    <a href="{{ route('post.show', $relatedPost->id) }}"><h5
                                            class="post-title">{{ $relatedPost->title }}</h5></a>
                                </div>
                            @endforeach
                        </div>
                    </section>
                    <section class="comment-list">
                        @foreach($post->comments as $comment)
                            <div class="card-comment border-bottom p-3">
                                <div class="row">
                                    <div class="col-1">
                                        <!-- User image -->
                                        <img class="mb-2 rounded-circle float-left" style="width: 32px;"
                                             src="{{ asset('/dist/img/user3-128x128.jpg') }}" alt="User Image">
                                    </div>
                                    <div class="col-11">
                                        <span class="float-left font-weight-bold">
                                          {{ $comment->user->name }}
                                        </span>
                                          <span class="text-muted float-right">{{ $comment->dateAsCarbon->diffForHumans() }}</span>
                                        <!-- /.username -->
                                    </div>
                                </div>
                                <div class="comment-text">
                                    {{ $comment->message }}
                                </div>
                                <!-- /.comment-text -->
                            </div>
                        @endforeach
                    </section>
                    @auth()
                    <section class="comment-section">
                        <h2 class="section-title mb-5 mt-4" data-aos="fade-up">Отправить комментарий</h2>
                        <form action="{{ route('post.comment.store', $post->id) }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="form-group col-12" data-aos="fade-up">
                                    <label for="message" class="sr-only">Коментарий</label>
                                    <textarea name="message" id="message" class="form-control"
                                              placeholder="Комментарий..." rows="10"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12" data-aos="fade-up">
                                    <input type="submit" value="Отправить" class="btn btn-warning">
                                </div>
                            </div>
                        </form>
                    </section>
                    @endauth
                </div>
            </div>
        </div>
    </main>
@endsection

