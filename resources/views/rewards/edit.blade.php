@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-md-12 stretch-card">
		<div class="card">
			<div class="card-body">
				<h6 class="card-title">Edit user {{$user->name}} </h6>
                <form action="{{ route('user.update', $user->id) }}" method="put">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control"  name="name" value="{{$user->name}}">
                            </div>
                        </div>
                    
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">Phone Number</label>
                                <input type="number" class="form-control"  name="phone" value="{{$user->phone}}">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">Email address</label>
                                <input type="email" class="form-control"  name="email" value="{{$user->email}}">
                            </div>
                        </div>
 

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <select name="status" class="form-control">
                                    <option value="active" {{ $user->status == 'active' ? 'selected' : '' }}>Active</option>
                                    <option value="inactive" {{ $user->status == 'inactive' ? 'selected' : '' }}>InActive</option>
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