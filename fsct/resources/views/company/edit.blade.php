<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/company">กลับ</a></li>
            </ol>
            <div class="box-header with-border">
                <h3 class="box-title">เพิ่ม</h3>
            </div>

            <form class="form-horizontal" method="post" action="/admin/company/{{$branch->id}}/edit">
                <div class="box-body">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label class="col-sm-2 control-label">ประเทศต้นทาง</label>

                        <input type="text"
                               name="users[origin_country]"
                               value="{{$branch->origin_country}}" class="form-control">
                    </div>
                    <label class="col-sm-2 control-label">ผู้ผลิต</label>
                    <div class="col-sm-10">
                        <input type="text"
                               name="users[manufacturer]"
                               value="{{$branch->manufacturer}}" class="form-control">
                    </div>
                    <label class="col-sm-2 control-label">ชื่อรุ่น</label>
                    <div class="col-sm-10">
                        <input type="text"
                               name="users[model_name]"
                               value="{{$branch->model_name}}" class="form-control">
                    </div>
                    <label class="col-sm-2 control-label">ปี</label>
                    <div class="col-sm-10">
                        <input type="text"
                               name="users[year]"
                               value="{{$branch->year}}" class="form-control">
                    </div>
                    <label class="col-sm-2 control-label">ที่นั้ง</label>
                    <div class="col-sm-10">
                        <input type="text"
                               name="users[seat]"
                               value="{{$branch->manufacturer}}" class="form-control">
                    </div>
                    <label class="col-sm-2 control-label">ปรเภท</label>
                    <div class="col-sm-10">
                        <input type="text"
                               name="users[type]"
                               value="{{$branch->type}}" class="form-control">
                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-info">ตกลง</button>
                        <button type="submit" class="btn btn-default">ยกเลิก</button>

                    </div>
                </div>
            </form>
            <!-- /.box-footer -->
        </div>
    </div>
</div>
</div>


