<li class="breadcrumb-item"><a href="/admin/company">กลับ</a></li>
<div class="row">

    <form class="form-horizontal" method="post" action="/admin/company/create">
        <div class="box-body">
            {{csrf_field()}}
            <div class="form-group">
                <label class="col-sm-2 control-label">ประเทศต้นทาง</label>
                <div class="col-sm-10">
                    <input required type="text"
                           name="users[origin_country]">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">ผู้ผลิต</label>

                <div class="col-sm-10">
                    <input required type="text"
                           name="users[manufacturer]">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">ชื่อรุ่น</label>

                <div class="col-sm-10">
                    <input required type="text"
                           name="users[model_name]">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">ปี</label>

                <div class="col-sm-10">
                    <input required type="text"
                           name="users[year]">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">ที่นั้ง</label>

                <div class="col-sm-10">
                    <input required type="text"
                           name="users[seat]">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">ประเภท</label>

                <div class="col-sm-10">
                    <input required type="text"
                           name="users[type]">
                </div>
            </div>


            <div class="box-footer">

                <button type="submit" class="btn btn-info">ตกลง</button>
                <button href="/Index/home" class="btn btn-default">ยกเลิก</button>

            </div>
            <!-- /.box-footer -->
    </form>
    <!-- /.content -->
</div>
</div>



@section('javascript')
@endsection