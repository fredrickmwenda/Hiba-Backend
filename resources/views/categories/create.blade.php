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
				<h6 class="card-title">Create a category</h6>
                <form action="{{ route('category.store') }}" method="post">
                    @csrf
                    <div class="row">                      
                        <div class="mb-3">
                            <label class="form-label"> Name</label>
                            <input type="text" class="form-control" placeholder="Enter category name" name="name">
                        </div>     
                    </div>


                    <div class="row">                
                        <div class="mb-3">
                            <label class="form-label"> Description</label> 
                            <textarea class="form-control" name="description" cols="10" rows="3"></textarea>									

                            <!-- <input type="password" class="form-control" autocomplete="off" placeholder="Password" name="password_confirmation"> -->
                        </div>                       
                    </div>



                    <button type="submit" class="btn btn-primary submit">Submit form</button>
                </form>
									
            </div>
        </div>
    </div>
</div>
@endsection