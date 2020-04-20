@extends('layouts.admin')

@section('content')
        <div class="card-body">

            <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">

                @csrf

                <input type="file" name="file" class="form-control">

                <br>

                <button class="btn btn-success">تحميل قائمة المعوزين</button>

{{--                <a class="btn btn-warning" href="{{ route('export') }}">Export User Data</a>--}}

            </form>

            </div>
@endsection
