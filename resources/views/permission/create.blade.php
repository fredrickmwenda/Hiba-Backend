@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-md-12 stretch-card">
		<div class="card">
			<div class="card-body">
				<h6 class="card-title">Create a permission</h6>
                <form action="{{ route('permission.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" placeholder="Enter name" name="name">
                            </div>
                        </div>
                        
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">Group Name</label>
                                <input type="text" class="form-control" placeholder="Enter group name" name="group_name">
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