@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-md-12 stretch-card">
		<div class="card">
			<div class="card-body">
				<h6 class="card-title">Edit Program {{$program->name}} </h6>
                <form action="{{ route('program.update', $program->id) }}" method="put">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control"  name="name" value="{{$company->name}}">
                            </div>
                        </div>
                    
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="mb-3">
                                <label class="form-label">Phone Number</label>
                                <input type="number" class="form-control"  name="phone" value="{{$company->phone}}">
                            </div>
                        </div>

   

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <select name="category_id" class="form-control">
                                    @foreach($categories as $category)
										<option value="{{$category->id}}" {{$company->category_id == $category->id ? 'selected' : ''}}>{{$category->category_name}}</option>
									@endforeach
                                    
                                </select>
                                <!-- <input type="password" class="form-control" autocomplete="off" placeholder="Password" name="password"> -->
                            </div>
                        </div>

                    </div>

                    <button type="submit" class="btn btn-primary submit">Submit form</button>
                </form>
									
            </div>
        </div>
    </div>
</div>
@endsection