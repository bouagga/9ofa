@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">قاىمة المعوزين</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>الاسم و اللقب</th>
                    <th>الحي</th>
                    <th>رقم الهاتف</th>
                    <th>مرات الاستفادة</th>
                    <th>تاريخ اخر الاستفادة</th>
                    <th>تعديل</th>
                    <th>حذف</th>
                </tr>
                </thead>
                <tbody>
                @foreach($persones as $p)
                    <tr>
                        <td>{{$p->name}}</td>
                        <td>{{$p->city}}</td>
                        <td>{{$p->phone}}</td>
                        <td>
                            <table>
                                <tr>
                                    <td>7</td>
                                    <td><button class="fas fa-archive" style="margin-left: 40%;"></button></td>
                                    <td><button class="fas fa-archive" style="margin-left: 40%;"></button></td>
                                </tr>
                            </table>
                        </td>
                        <td>تاريخ اخر الاستفادة</td>
                        <td>
                            <a href="{{route('persons.show',$p->id)}}">
                                <i class="fas fa-edit" style="margin-left: 40%;"></i>
                            </a>
                        </td>
                        <td>    <form role="form" method="post" action="{{route('persons.destroy',$p->id)}}">
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
