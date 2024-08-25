@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-md-12 stretch-card">
		<div class="card">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
			<div class="card-body">
				<h6 class="card-title">Create a Reward</h6>
                <form action="{{ route('reward.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" placeholder="Enter name" name="name">
                            </div>
                        
                        
                        <!-- <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">Last Name</label>
                                <input type="text" class="form-control" placeholder="Enter last name" name="last_name">
                            </div>
                        </div> -->
                    </div>
                    <div class="row">
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" cols="10" name="description"  rows="3"></textarea>
                            <!-- <input type="text" class="form-control" placeholder="Enter name" name="name"> -->
                        </div>
                    </div>



                    <div class="row">
                        <div class="mb-3">
                            <label class="form-label">image</label>
                            <input type="file" class="form-control" placeholder="Enter image" name="image" required  accept="image/jpeg, image/png, image/gif">
                        </div>
                    </div>
                    

                    <div class="row">
                        
                            <div class="mb-3">
                                <label class="form-label">Program</label>
                                <select class="form-control" name="program_id" id="program_id" required>
                                    @foreach($programs as $program)
                                    <option value="{{$program->id}}"> {{$program->name}}</option>
                                    @endforeach
                                <select>
                                
                            </div>
                     

                    </div>

                    <div class="row">
                        <div class="mb-3">
                            <label class="form-label">Points Required</label>
                            <input type="number" class="form-control" placeholder="Enter name" name="points_required">
                        </div>
                    </div>



                    <button type="submit" class="btn btn-primary submit">Submit form</button>
                </form>
									
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')
<script>

    // $(document).ready(function() {
    $('#program_id').select2({
      // theme: 'bootstrap4'
      placeholder: 'Select Program',
      allowClear: true,
      width: '100%',
    });
//   });
</script>
@endpush