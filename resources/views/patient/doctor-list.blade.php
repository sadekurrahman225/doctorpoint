@extends('patient.templete.layout')

@section('main_page')

    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="grid_10">
                <div class="card mb-3">
                    <div class="card-header">
                        Pie Chart Example</div>
                    <div class="card-body">
                        <div class="card-body">
                            <div class="block">  
                                <table class="data display datatable" id="example">
                                    <thead>
                                        <tr>
                                            <th>Index</th>
                                            <th>Name</th>
                                            {{-- <th>Category</th>
                                            <th>Image</th> --}}
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php $i = 1 ?>
                                        @foreach($results as $row)
                                        <tr class="odd gradeX">
                                            <td>{{$i}}</td>
                                            <td>{{$row->name}}</td>
                                            {{-- <td>Win 95+</td>
                                            <td class="center"> 4</td> --}}
                                            <td><a href="{{url('get_appintment',$row->id)}}">Get Appointment</a> || <a href="{{url('doctor_profile',$row->id)}}">View Profile</a></td>
                                        </tr>
                                        <?php $i++  ?>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                </div>

            </div>


          
        </div>
    </div>

@endsection