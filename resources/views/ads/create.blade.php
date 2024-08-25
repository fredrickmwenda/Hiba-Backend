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
				<h6 class="card-title">Create an Ad</h6>
                <form action="{{ route('ad.store') }}" method="post" enctype="multipart/form-data" >
                    @csrf
                    <div class="row">                      
                        <div class="mb-3">
                            <label class="form-label"> Name</label>
                            <input type="text" class="form-control" placeholder="Enter Ad name" name="adname">
                        </div>     
                    </div>

                    <div class="row">                      
                        <div class="mb-3">
                            <label class="form-label"> Image</label>
                            <input type="file" class="form-control"  name="image" >
                        </div>     
                    </div>


                    <div class="row">                
                        <div class="mb-3">
                            <label class="form-label"> Description</label> 
                            <textarea class="form-control" name="description" cols="10" rows="3"></textarea>									
                        </div>                       
                    </div>

                    <div class="row">
                       <div class="mb-3">
                            <label class="form-label"> Company</label> 
                            <select class="form-control  select2" name="company"  >
                                <option>Select</option>
                                @foreach($companies as $company)
                                    <option value="{{$company->id}}">{{$company->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row">                      
                        <div class="mb-3">
                            <label class="form-label"> Duration</label>
                            <input type="number" class="form-control" placeholder="Enter Ad Duration in Days" name="duration">
                        </div>     
                    </div>

                    <div class="row">
                       <div class="mb-3">
                            <label class="form-label"> status</label> 
                            <select class="form-control col-lg-10 select2" name="status"  >
                                <option>Select Status</option>
                                <option value="active">Active </option>
                                <option value="inactive">Inactive </option>
                                <option value="expired">Expired </option>
                            </select>
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
    $(document).ready(function () {
        $('#company').select2({
            placeholder: 'Select Company',
            allowClear: true,
            width: '100%',
        });
        
    });
    @endpush