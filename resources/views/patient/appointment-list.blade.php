@extends('patient.templete.layout')

@section('main_page')

    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="grid_10">
                <div class="card mb-3">
                    <div class="card-header">
                        My Appointments</div>
                    <div class="card-body">
                        <div class="card-body">
                            <div class="block">  
                                {{--  --}}


                                <table class="table">
                                    <thead class="thead-dark">
                                      <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Date</th>

                                        <th scope="col">Prescription</th>
                                        <th scope="col">Status</th>
                                       
                                      </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $i = 1;
                                        $status = [
                                            1 => "Pending",
                                            2 => "Confirmed",
                                            3 => "Visited",
                                            4 => "Cancelled",
                                        ] 
                                   
                                   ?>
                                    @foreach($results as $row)
                                    <tr class="odd gradeX">
                                        <td>{{$i}}</td>
                                        <td>{{$doctor_name[$row->doctor_id]}}</td>
                                        <td>{{$row->date}}</td>
                                        @if ($row->status==3)
                                        <td>{{$row->prescription}}</td>
                                       @else
                                        <td></td>
                                        @endif
                                        <td>{{$status[$row->status]}}</td>
                                        <td class="center"> </td>
                                        {{-- <td><a href="{{url('get_appintment',$row->id)}}">Get Appointment</a> || <a href="{{url('doctor_profile',$row->id)}}">View Profile</a></td> --}}
                                    </tr>
                                    <?php $i++  ?>
                                    @endforeach
                                </tbody>
                                    
                                  </table>

                            </div>
                        </div>
                    </div>
                    <div class="card-footer small text-muted">Updated Today at 10:33 PM</div>
                </div>

            </div>


          
        </div>
    </div>

@endsection