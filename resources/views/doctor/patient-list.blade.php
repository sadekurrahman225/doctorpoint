@extends('patient.templete.layout')

@section('main_page')

    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="grid_10">
                <div class="card mb-3">
                    <div class="card-header">
                        Registered Patients</div>
                    <div class="card-body">
                        <div class="card-body">
                            <div class="block">  
                               



                                <table class="table">
                                    <thead class="thead-dark">
                                      <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        {{-- <th scope="col">Depertment</th>
                                        <th scope="col">Action</th> --}}
                                        <th scope="col">Details</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                    
                                      <?php $i = 1 ?>
                                        @foreach($results as $row)
                                        <tr class="odd gradeX">
                                            <th scope="row">{{$i}}</th>
                                            <td>{{$row->name}}</td>
                                            {{-- <td>Medicine</td>
                                            <td><a href="{{url('get_appintment',$row->id)}}">Get Appointment</a> </td> --}}
                                            {{-- <td>Win 95+</td>
                                            <td class="center"> 4</td> --}}
                                            <td><a href="{{url('doctor_profile',$row->id)}}">View Profile</a></td>
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