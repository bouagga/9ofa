@extends('layouts.admin')

@section('content')

    <section class="content">

        <div class="container-fluid">
            <form role="form" method="post" action="{{route('persons.update',$person->id)}} ">
                {{method_field('PATCH')}}
                {{csrf_field()}}
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">الحالة الاجتماعية</h3>
                            </div>

                            <div class="card-body">
                                <div class="form-group">
                                    <label>الاسم و اللقب </label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{$person->name}}">
                                </div>

                                <div class="form-group">
                                    <label>رقم الهاتف:</label>

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                        </div>
                                        <input type="tel" id="phone" name="phone" placeholder="1234567890"
                                               pattern="[0-9]{4}[0-9]{3}[0-9]{3}" value="{{$person->phone}}" >
                                    </div>
                                    <!-- /.input group -->
                                </div>

                                <div class="form-group">
                                    <label>وصف الحالة</label>
                                    <input type="text" class="form-control" id="case" name="case" value="{{$person->case}}">
                                </div>
                                <div class="form-group">
                                    <label>طبيعة العمل</label>
                                    <input type="text" class="form-control" id="work" name="work" value="{{$person->work}}">
                                </div>
                                <div class="form-group">
                                    <label>عدد افراد الاسرة</label>
                                    <input type="number" class="form-control" id="number_famly" name="number_famly" value="{{$person->number_famly}}">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <!-- Horizontal Form -->
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">العنوان</h3>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>الحي</label>
                                    <input type="text" class="form-control" id="city" name="city" value="{{$person->city}}">
                                </div>
                                <div class="form-group">
                                    <label>العمارة</label>
                                    <input type="text" class="form-control" id="building" name="building" value="{{$person->building}}">
                                </div>
                                <div class="form-group">
                                    <label>الباب</label>
                                    <input type="text" class="form-control" id="dor" name="dor" value="{{$person->dor}}">
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <!-- /.card-footer -->
                        </div>
                    </div>
                </div>

                <!-- /.row -->
                <div class="row">
                    <div class="card card-info col-lg-12" >

                        <div class="card-footer">
                            <button type="submit" class="btn btn-info">اضافة</button>
                            <button type="submit" class="btn btn-default float-left">الغاء</button>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </section>

@endsection
