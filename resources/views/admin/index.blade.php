@extends('layouts.admin.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Главная</h1>
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
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{ $data['usersCount'] }}</h3>

                                <p>Пользователи</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <a href="{{ route('admin.users.index') }}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{ $data['postsCount'] }}<sup style="font-size: 20px"></sup></h3>

                                <p>Посты</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-file"></i>
                            </div>
                            <a href="{{ route('admin.posts.index') }}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>{{ $data['categoriesCount'] }}</h3>

                                <p>Категории</p>
                            </div>
                            <div class="icon">
                                <i class="far fa-list-alt"></i>
                            </div>
                            <a href="{{ route('admin.categories.index') }}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>{{ $data['tagsCount'] }}</h3>

                                <p>Тэги</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-tags"></i>
                            </div>
                            <a href="{{ route('admin.tags.index') }}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
