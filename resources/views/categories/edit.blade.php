@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-md-12 stretch-card">
		<div class="card">
			<div class="card-body">
				<h6 class="card-title">Edit category {{$category->name}}</h6>
                <form action="{{ route('category.update', $category->id) }}" method="post">
                    @csrf
                    <div class="row">                      
                        <div class="mb-3">
                            <label class="form-label"> Name</label>
                            <input type="text" class="form-control" placeholder="Enter category name" name="name" value="{{$category->name}}">
                        </div>     
                    </div>


                    <div class="row">                
                        <div class="mb-3">
                            <label class="form-label"> Description</label> 
                            <textarea class="form-control" name="description" cols="10" rows="3">{{$category->description}}</textarea>									
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