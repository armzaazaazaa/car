<meta charset="UTF-8">
<table >
    <thead>
    <tr>
        <th>ID</th>
        <th>น้ำหนัก</th>
        <th>เงิน</th>

    </tr>
    </thead>
    <tbody>
    @foreach($company as $data)
        <tr>

            <td>{{$data->seat}}</td>
            <td>{{$data->type}}</td>

        </tr>
    @endforeach
    </tbody>
</table>





{{--

<?php Excel::create('Laravel Excel', function($excel) {

    $excel->sheet('Excel sheet', function($sheet) {

        $sheet->setOrientation('landscape');

    });

})->export('xls');?>--}}
