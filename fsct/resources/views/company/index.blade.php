
        <div class="row">
            <div class="col-md-12">
                <div class="box">

                    <div class="box-header">
                        <h3 class="box-title">จัดการ</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <a href="/admin/company/create" class="btn btn-primary">
                            เพิ่ม
                        </a>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>ประเทศต้นทาง</th>
                                <th>ผู้ผลิต</th>
                                <th>ชื่อรุ่น</th>
                                <th>ปี</th>
                                <th>ที่นั่ง</th>
                                <th>ประเภท</th>
                                <th>การจัดการ</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($company as $data)
                                <tr>
                                    <td>{{$data->id}}</td>
                                    <td>{{$data->origin_country}}</td>
                                    <td>{{$data->manufacturer}}
                                    <td>{{$data->model_name}}</td>
                                    <td>{{$data->year}}</td>
                                    <td>{{$data->seat}}</td>
                                    <td>{{$data->type}}</td>
                                    <td>
                                        <a href="/admin/company/{{$data->id}}/edit" class="btn btn-success">แก้ไข</a>
                                        <button onclick="deleteBranch({{$data->id}})" type="button"
                                                class="btn btn-danger">ลบ
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <form id="deleteBranch" method="post">
                            {{csrf_field()}}
                        </form>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>

</div>


@section('javascript')
    <script type="text/javascript">
        function deleteBranch(id) {
            if(confirm("คุณต้องการจะลบใช้หรือไม่?")){
                var form = document.getElementById('deleteBranch');
                form.setAttribute('action',"/admin/company/"+id+"/delete")
                form.submit()
            }
        }
    </script>
