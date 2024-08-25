@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-md-12 stretch-card">
		<div class="card">
			<div class="card-body">
				<h6 class="card-title">Edit Company {{$company->name}} </h6>
                <form action="{{ route('company.update', $company->id) }}" method="put">
                    @csrf
                    <div class="row">                    
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control"  name="name" value="{{$company->name}}">
                        </div>
                    </div>
                    <div class="row">                      
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                           <textarea class="form-control" rows="10" cols="3" name="description">{{$company->description}} </textarea>
                        </div>                      
                     </div>

   

                    <!-- <div class="row">
                        
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <select name="category_id" class="form-control">
                                    @foreach($categories as $category)
										<option value="{{$category->id}}" {{$company->category_id == $category->id ? 'selected' : ''}}>{{$category->category_name}}</option>
									@endforeach
                                    
                                </select>
                                
                            </div>
                        

                    </div>  -->

                    <button type="submit" class="btn btn-primary submit">Submit form</button>
                </form>
									
            </div>
        </div>
    </div>
</div>
@endsection