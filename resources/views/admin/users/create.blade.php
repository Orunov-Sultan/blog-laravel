@extends('layouts.admin.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавление пользователя</h1>
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

                        <form action="{{ route('admin.users.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <input name="name" type="text" class="form-control" id="title" placeholder="Имя...">
                                @error('name')
                                    <div class="text-danger">Это поле обязательно для заполнения</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input name="email" type="text" class="form-control" id="title" placeholder="Email...">
                                @error('email')
                                <div class="text-danger">Это поле обязательно для заполнения</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Выбор роли</label>
                                <select class="form-control" name="role">
                                    @foreach($roles as $id => $role)
                                        <option {{ $id == old('role') ? ' selected' : '' }}
                                                value="{{ $id }}">{{ $role }}</option>
                                    @endforeach
                                </select>
                                @error('role')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input name="password" type="text" class="form-control" id="title" placeholder="Пароль...">
                                @error('password')
                                <div class="text-danger">Это поле обязательно для заполнения</div>
                                @enderror
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
