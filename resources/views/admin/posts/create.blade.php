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

                        <form action="{{ route('admin.posts.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <div class="mb-3">
                                    <label for="title">Добавление поста</label>
                                    <input name="title" type="text" class="form-control" id="title" placeholder="Название поста...">
                                    @error('title')
                                    <div class="text-danger">Это поле обязательно для заполнения</div>
                                    @enderror
                                </div>
                                <div>
                                    <label for="summernote">Добавление текста</label>
                                    <textarea id="summernote" name="content" class="mt-3"></textarea>
                                    @error('content')
                                    <div class="text-danger">Это поле обязательно для заполнения</div>
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Добавить</button>
                        </form>

                    </div>
                </div>

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
