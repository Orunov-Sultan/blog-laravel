@extends('layouts.admin.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактирование поста</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">

                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-6">

                        <form action="{{ route('admin.posts.update', $post->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group mb-3">
                                <label for="title">Заголовок</label>
                                <input value="{{ $post->title }}" name="title" type="text" class="form-control" id="title" placeholder="Название поста...">
                                @error('title')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="preview_image">Превью статьи</label>
                                <div class="w-25 mb-2">
                                    <img class="w-50" src="{{ asset('storage/'.$post->preview_image) }}" alt="превью поста">
                                </div>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input name="preview_image" type="file" class="custom-file-input" id="preview_image">
                                        <label class="custom-file-label" for="preview_image">Выберите изображение</label>
                                    </div>
                                </div>
                                @error('preview_image')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="main_image">Главное изображение</label>
                                <div class="w-50 mb-2">
                                    <img class="w-75" src="{{ asset('storage/'.$post->main_image) }}" alt="превью поста">
                                </div>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input name="main_image" type="file" class="custom-file-input" id="main_image">
                                        <label class="custom-file-label" for="main_image">Выберите изображение</label>
                                    </div>
                                </div>
                                @error('preview_image')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Выбор категории</label>
                                <select class="form-control" name="category_id">
                                    @foreach($categories as $category)
                                        <option {{ $category->id == $post->category_id ? ' selected' : '' }}
                                                value="{{ $category->id }}">{{ $category->title }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Тэги</label>
                                <select name="tag_ids[]" class="select2" multiple="multiple" data-placeholder="Выберите тэги..." style="width: 100%;">
                                    @foreach($tags as $tag)
                                        <option {{ is_array($post->tags->pluck('id')->toArray()) && in_array($tag->id, $post->tags->pluck('id')->toArray()) ? ' selected' : ''}} value="{{ $tag->id }}">{{ $tag->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="summernote">Редактирование текста</label>
                                <textarea id="summernote" name="content" class="mt-3">{{ $post->content }}</textarea>
                                @error('content')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Добавить</button>
                            </div>
                        </form>

                    </div>
                </div>

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
