@extends('doctor.templete.layout')

@section('main_page')


<div class="content-wrapper">
    <div class="container-fluid">
        <div class="grid_10">
            <div class="card mb-3">
                <form action="{{ route('prescription-save') }}" method="post">
                    @csrf   
                    <h2>Prescription</h2>
                    <input type="hidden" name="id" value="{{$pres_id}}" >
                    <textarea id="w3review" name="prescription" rows="4" cols="50" value="">
                       
                    </textarea>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>     
    </div>
</div>
@endsection