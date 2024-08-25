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
				<h6 class="card-title">Create a Program</h6>
                <form action="{{ route('program.store') }}" method="post">
                    @csrf
                    <div class="row">                      
                        <div class="mb-3">
                            <label class="form-label"> Name</label>
                            <input type="text" class="form-control" placeholder="Enter program name" name="name">
                        </div>     
                    </div>


                    <div class="row">                
                        <div class="mb-3">
                            <label class="form-label"> Description</label> 
                            <textarea class="form-control" name="description" cols="10" rows="3"></textarea>									

                            <!-- <input type="password" class="form-control" autocomplete="off" placeholder="Password" name="password_confirmation"> -->
                        </div>                       
                    </div>

                    <div class="row">                      
                        <div class="mb-3">
                            <label class="form-label"> Entry Points</label>
                            <input type="number" class="form-control" placeholder="Enter entry points" name="entry_points">
                        </div>     
                    </div>

                    <div class="row">                
                        <div class="mb-3">
                            <label class="form-label"> Terms & Conditions</label> 
                            <textarea class="form-control" name="terms" cols="10" rows="3"></textarea>									

                            <!-- <input type="password" class="form-control" autocomplete="off" placeholder="Password" name="password_confirmation"> -->
                        </div>                       
                    </div>

                    <div class="row">                      
                        <div class="mb-3">
                            <label class="form-label">Accrual Rate</label>
                            <input type="number" step="0.01" class="form-control" placeholder="If 100 points are equivalent to 1 Kenyan Shilling (KES), then the accrual rate is 0.01 KES per point. " name="accrual_rate">
                        </div>     
                    </div>

                    
                    <div class="row">                      
                        <div class="mb-3">
                            <label class="form-label">Redemption Rate</label>
                            <input type="number" step="0.01" class="form-control" placeholder="If 100 points are equivalent to 1 Kenyan Shilling (KES), then the redemption rate is 0.01 KES per point. " name="redemption_rate">
                        </div>     
                    </div>


                   <!--remove the company selection if the user is an employee or a companyAdmin-->
                    <!-- <div class="row">
                       <div class="mb-3">
                            <label class="form-label"> Company</label> 
                            <select class="form-control col-lg-10" name="company_id" id="company_id" required>
                                <option>Select</option>
                                @foreach($companies as $company)
                                    <option value="{{$company->id}}">{{$company->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div> -->

                    <div class="row">
                       <div class="mb-3">
                            <label class="form-label"> Categories</label> 
                            <select class="form-control col-lg-10" name="category_id" id="category_id" required>
                                <option>Select</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
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
        $('#category_id').select2({
            placeholder: 'Select Category',
            allowClear: true,
            width: '100%',
        });

        $('#company_id').select2({
            placeholder: 'Select Company',
            allowClear: true,
            width: '100%',
        });
        
    })
    // $(document).ready(function () {
    //     // When a company is selected
    //     $('#company_id').change(function () {
    //         var companyId = $(this).val();

    //         // Make an AJAX request to fetch categories for the selected company
    //         $.ajax({
    //             url: '/get-categories/' + companyId, // Update this URL to match your route
    //             type: 'GET',
    //             success: function (response) {
    //                 // Clear existing options and add new options
    //                 $('#category_id').empty().append('<option>Select</option>');
    //                 $.each(response, function (key, value) {
    //                     $('#category_id').append('<option value="' + value.id + '">' + value.name + '</option>');
    //                 });
    //             }
    //         });
    //     });
    // });
</script>
@endpush
