@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">قاىمة الممستخدمين</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>اسم المستخدم</th>
                    <th>حذف</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $u)
                <tr>
                    <td>{{$u->name}}</td>
                    <td>    <form role="form" method="post" action="{{route('users.destroy',$u->id)}}">
                            @method('DELETE')
                            @csrf
                            <button class="fas fa-archive" style="margin-left: 40%;"></button>
                        </form></td>

                </tr>
                @endforeach
                </tbody>

            </table>
        </div>
        <!-- /.card-body -->
    </div>

@endsection
