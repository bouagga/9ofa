@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1 >قائمة المعوزين</h1>
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
                    @if(auth()->user()->is_admin == 1)
                    <th>تعديل</th>
                    <th>حذف</th>
                    @endif
                </tr>
                </thead>
                <tbody>

                <input type="hidden" value="{{$co=0}}">
                <input type="hidden" value="{{$co1=0}}">
                @foreach($persones as $p)
                    <tr>
                        <td>{{$p->name}}</td>
                        <td>{{$p->city}}</td>
                        <td>{{$p->phone}}</td>
                        <td>
                            <table>
                                <tr>
                                    <td>{{count($p->baskets()->get())}}</td>
                                    <td>
                                        <form role="form" method="post" action="{{route('baskets.store')}}">

                                            @csrf
                                            <input type="hidden" name="person_id" value="{{$p->id}}">
                                            <button class="fas fa-plus" style="margin-left: 40%;color: green; "></button>
                                        </form></td>
                                    @if(auth()->user()->is_admin == 1)
                                        <td>  @foreach($p->baskets()->latest()->get()  as $la)

                                                <form role="form" method="post" action="{{route('baskets.destroy',$la->id)}}">
                                                @method('DELETE')
                                                @csrf
                                                <button class="fas fa-minus" style="margin-left: 40%; color: red"></button>
                                            </form>
                                                <input type="hidden" value="{{$co1++}}">
                                                @break($co1!=0)
                                            @endforeach
                                        </td>
                                    @endif
                                </tr>
                            </table>
                        </td>
                        @if(count($p->baskets()->get()) == 0 )
                            <td>
                                لم يستفيد بعد
                            </td>
                        @else
                        @foreach($p->baskets()->latest()->get()  as $la)
                        <td>{{$la->created_at}}
                            <input type="hidden" value="{{$co++}}">

                                @break($co!=0)

                        </td>
                        @endforeach
                        @endif
                        @if(auth()->user()->is_admin == 1)
                        <td>
                            <a href="{{route('persons.edit',$p->id)}}">
                                <i class="fas fa-user-edit" style="margin-left: 40%;"></i>

                            </a>
                        </td>
                        <td>    <form role="form" method="post" action="{{route('persons.destroy',$p->id)}}">
                                @method('DELETE')
                                @csrf
                                <button class="fas fa-user-times" style="margin-left: 40%;"></button>
                            </form></td>
                        @endif
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>
        <!-- /.card-body -->
    </div>


@endsection
