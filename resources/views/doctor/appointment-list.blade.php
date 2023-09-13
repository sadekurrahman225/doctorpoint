@extends('doctor.templete.layout')



    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="grid_10">
                <div class="card mb-3">
                    <div class="card-header">
                        Appointments</div>
                    <div class="card-body">
                        <div class="card-body">
                            <div class="block">  
                                @section('main_page')
                                @if(session('message'))
                                    <div class="alert alert-success">
                                        {{ session('message') }}
                                    </div>
                                @endif
                                <table class="table">
                                    <thead class="thead-dark">
                                      <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Actions</th>
                                       
                                      </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $i = 1;
                                        $status = [
                                            1 => "Pending",
                                            2 => "Confirmed",
                                            3 => "Visited",
                                            4 => "Cancel",
                                        ] 
                                   
                                   ?>
                                    @foreach($results as $row)
                                    <tr class="odd gradeX">
                                        <td>{{$i}}</td>
                                        <td>{{$patient_name[$row->patient_id]}}</td>
                                        <td><input type="date" id="date" name="date" value="{{$row->date}}" readonly ></td>
                                        <td>{{$status[$row->status]}}</td>
                                        {{-- <td class="center"> </td> --}}
                                        <td><a href="{{url('d-appointment-list-confirm',$row->id)}}">Confirm</a>||
                                        <a href="{{url('d-appointment-list-cancel',$row->id)}}">Cancel</a>||
                                        <a href="{{url('d-appointment-list-visited',$row->id)}}">Visited</a></td>
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