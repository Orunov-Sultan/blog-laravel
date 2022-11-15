@extends('layouts.admin.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Посты</h1>
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

                        <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="title">Добавление поста</label>
                                <input value="{{ old('title') }}" name="title" type="text" class="form-control" id="title" placeholder="Название поста...">
                                @error('title')
                                <div class="text-danger">Это поле обязательно для заполнения</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="preview_image">Добавить превью</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input name="preview_image" type="file" class="custom-file-input" id="preview_image"">
                                        <label class="custom-file-label" for="preview_image">Выберите изображение</label>
                                    </div>
                                </div>
                                @error('preview_image')
                                <div class="text-danger">Это поле обязательно для заполнения</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="main_image">Добавить главное изображение</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input name="main_image" type="file" class="custom-file-input" id="main_image">
                                        <label class="custom-file-label" for="main_image">Выберите изображение</label>
                                    </div>
                                </div>
                                @error('preview_image')
                                <div class="text-danger">Это поле обязательно для заполнения</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Выбор категории</label>
                                <select class="form-control" name="category_id">
                                    @foreach($categories as $category)
                                    <option {{ $category->id == old('category_id') ? ' selected' : '' }}
                                            value="{{ $category->id }}">{{ $category->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Тэги</label>
                                <select name="tag_ids[]" class="select2" multiple="multiple" data-placeholder="Выберите тэги..." style="width: 100%;">
                                    @foreach($tags as $tag)
                                    <option {{ is_array(old('tag_ids')) && in_array($tag->id, old('tag_ids')) ? ' selected' : ''}} value="{{ $tag->id }}">{{ $tag->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="summernote">Добавление текста</label>
                                <textarea id="summernote" name="content" class="mt-3">{{ old('content') }}</textarea>
                                @error('content')
                                <div class="text-danger">Это поле обязательно для заполнения</div>
                                @enderror
                            </div>                           <div class="form-group">
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
