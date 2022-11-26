@extends('layouts.personal.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Комментарии</h1>
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
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">Название Статьи</th>
                                <th scope="col">Действие</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($comments as $comment)
                                <tr>
                                    <td>{{ $comment->message }}</td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            <a href="{{ route('personal.comment.edit', $comment->id) }}" class="mx-2"><i class="fa fa-pen text-green"></i></a>
                                            <form action="{{ route('personal.comment.delete', $comment->id) }}" method="POST">
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
                <!-- /.row -->

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
