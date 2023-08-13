@extends('firmleader.firmleader_dashboard')
@section('firmleader')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<div class="page-content">
        <div class="row profile-body">
          <!-- left wrapper start -->
          <!-- left wrapper end -->

          <!-- middle wrapper start -->
          <div class="col-md-8 col-xl-8 middle-wrapper">
            <div class="row">
               
             <div class="card">
              <div class="card-body">

								<h6 class="card-title"> Edit Case </h6>
                            
								<form method= "POST" action= "{{ route('update.case') }}" class="forms-sample" >
									@csrf

                  <input type="hidden" name="id" value="{{ $data->id }}">

                                    

                                    


                                    <div class="mb-3">
										<label for="exampleInputEmail1" class="form-label">Assigned Lawyer ID</label>
										<input type="text" name="Assigned_Lawyer_ID" class="form-control @error('Assigned_Lawyer_ID') is-invalid @enderror"value="{{$data->Assigned_Lawyer_ID}}" >
                                        @error('Assigned_Lawyer_ID')
                                        <span> {{ $message }} </span>
                                        @enderror 
									</div>

                                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">status</label>
                    <input type="text" name="status" class="form-control @error('status') is-invalid @enderror" value="{{$data->status}}">
                                        @error('status')
                                        <span> {{ $message }} </span>
                                        @enderror 
                  </div>

                                    


        

                        
									<button type="submit" class="btn btn-primary me-2">Save Changes</button>
									<!-- <button class="btn btn-secondary">Cancel</button> -->
								</form>

              </div>
            </div>

                </div>
              </div>

            </div>
          <!-- middle wrapper end -->
          <!-- right wrapper start -->

        </div>

</div>






@endsection