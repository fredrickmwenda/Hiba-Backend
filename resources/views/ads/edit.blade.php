@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-md-12 stretch-card">
		<div class="card">
			<div class="card-body">
				<h6 class="card-title">Edit Ad {{$ad->ad_name}} </h6>
                <form action="{{ route('ads.update', ['id' => $ad->id]) }}"  method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">                     
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control"  name="adname" value="{{$ad->ad_name}}">
                        </div>     
                    </div>
                    <div class="row">            
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                           <textarea class="form-control" cols="10" rows="3" name="description">{{ad->description}}</textarea>
                        </div>
                    </div>

   

                    <div class="row">                     
                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <select name="company" class="form-control">
                                @foreach($companies as $company)
                                    <option value="{{$company->id}}" {{$ad->company == $company->id ? 'selected' : ''}}>{{$ad->company->name}}</option>
                                @endforeach       
                            </select>                        
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select name="status" class="form>
                            <option value="active" {{ old('status', $ad->status) === 'active' ? 'selected' : '' }}>Active</option>
                            <option value="inactive" {{ old('status', $ad->status) === 'inactive' ? 'selected' : '' }}>Inactive</option>
                            <option value="expired" {{ old('status', $ad->status) === 'expired' ? 'selected' : '' }}>Expired</option>
                        </select>
                        </div>
                    </div>
                    <div class="row">                     
                        <div class="mb-3">
                            <label class="form-label">Duration</label>
                            <input type="number" class="form-control"  name="duration" value="{{$ad->duration}}">
                        </div>     
                    </div>

                    <button type="submit" class="btn btn-primary submit">Submit form</button>
                </form>
									
            </div>
        </div>
    </div>
</div>
@endsection