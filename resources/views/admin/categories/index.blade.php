@extends('layouts.admin.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Категории</h1>
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
                    <div class="col-4">
                    <div class="text-right mb-3">
                        <a href="{{ route('admin.categories.create') }}" class="btn btn-primary">Добавить категорию</a>
                    </div>
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Название</th>
                                    <th scope="col">Действие</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <th scope="row">{{ $category->id }}</th>
                                    <td>{{ $category->title }}</td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            <a href="{{ route('admin.categories.show', $category->id) }}" class="mx-2"><i class="fa fa-eye"></i></a>
                                            <a href="{{ route('admin.categories.edit', $category->id) }}" class="mx-2"><i class="fa fa-pen text-green"></i></a>
                                            <form action="{{ route('admin.categories.delete', $category->id) }}" method="POST">
                                                @csrf @method('DELETE')
                                                <button type="submit" class="mx-2 border-0 bg-transparent"><i class="fa fa-trash text-red"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
