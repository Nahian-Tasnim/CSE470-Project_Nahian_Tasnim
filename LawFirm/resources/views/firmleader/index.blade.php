@extends('firmleader.firmleader_dashboard')
@section('firmleader')
<div class="page-content">
            @php 
            $id= Auth::user()->id;
            $profileData= App\Models\User::find($id);

            @endphp
        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
          <div>
            
            <h9 class="mb-3 mb-md-0">Welcome {{ $profileData->name }} </h9>
          </div>
          <div class="d-flex align-items-center flex-wrap text-nowrap">
            <div class="input-group flatpickr wd-200 me-2 mb-2 mb-md-0" id="dashboardDate">
              <span class="input-group-text input-group-addon bg-transparent border-primary" data-toggle><i data-feather="calendar" class="text-primary"></i></span>
              <input type="text" class="form-control bg-transparent border-primary" placeholder="Select date" data-input>
            </div>
            
          </div>
        </div>

        

           
			</div>

@endsection