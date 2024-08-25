@extends('layouts.app')
@push('css')
<style type="text/css">
.profilepic {
  position: relative;
  width: 100px;
  height: 100px;
 
  border-radius: 50%; 
  overflow: hidden;
  background-color: #111;
}

.profilepic:hover .profilepic__content {
  opacity: 1;
}

.profilepic:hover .profilepic__image {
  opacity: .5;
}

.profilepic__image {
  object-fit: cover;
  opacity: 1;
  transition: opacity .2s ease-in-out;
}

.profilepic__content {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  color: white;
  opacity: 0;
  transition: opacity .2s ease-in-out;
}

.profilepic__icon {
  color: white;
  padding-bottom: 8px;
}



.profilepic__text {
  text-transform: uppercase;
  font-size: 12px;
  width: 50%;
  text-align: center;
}
</style>

@endpush
@section('content')
@auth
<div class="row">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="position-relative">
                <figure class="overflow-hidden mb-0 d-flex justify-content-center">
                  <img src="{{ asset('assets/images/avatar/cover.jpg') }}"class="rounded-top" alt="profile cover">
                </figure>
                <div class="d-flex justify-content-between align-items-center position-absolute top-75 w-100 px-2 px-md-4 mt-n4">
                    <div>
                        <div class="profilepic">

                            @if(Auth::user()->avatar)
                                <img class="wd-100 rounded-circle profilepic__image" src="{{ asset('assets/images/avatar/'. Auth::user()->avatar) }}" alt="profile">
                            @else
                            <img class="wd-100 rounded-circle profilepic__image" src="{{ asset('assets/images/avatar/300.jpg') }}" alt="profile">
                            @endif
                            <div class="profilepic__content">
                                <span class="profilepic__icon"><i class="link-icon" data-feather="camera"></i></span>
                                <span class="profilepic__text">Edit Profile</span>
                                <input type="file" id="avatarUpload" style="opacity: 0; position: absolute; top: 0; left: 0; width: 100%; height: 100%; cursor: pointer;">
                            </div>
                           
                        </div>
                        
                        <span class="h4 ms-3 mt-2 text-white">{{Auth::user()->name}}</span>
                    </div>
                    <div class="d-none d-md-block">
                        <button class="btn btn-primary btn-icon-text">
                        <i data-feather="edit" class="btn-icon-prepend"></i> Change Header 
                        </button>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center p-3 rounded-bottom">
                <ul class="d-flex align-items-center m-0 p-0">
                  <!-- <li class="d-flex align-items-center active">
                    <i class="me-1 icon-md text-primary" data-feather="columns"></i>
                    <a class="pt-1px d-none d-md-block text-primary" href="#">Timeline</a>
                  </li> -->
                  <li class="ms-3 ps-3 border-start d-flex align-items-center change-password">
                    <i class="me-1 icon-md" data-feather="user"></i>
                    <a class="pt-1px d-none d-md-block text-body" href="#">Change Password</a>
                  </li>
                  <li class="ms-3 ps-3 border-start d-flex align-items-center edit-profile">
                    <i class="me-1 icon-md" data-feather="users"></i>
                    <a class="pt-1px d-none d-md-block text-body" href="#"> Edit Profile
                        <!-- <span class="text-muted tx-12">3,765</span> -->
                    </a>
                  </li>
                  @if(Auth::user()->roles === 'companyAdmin' || Auth::user()->roles === 'Employee')
                  <li class="ms-3 ps-3 border-start d-flex align-items-center">
                    <i class="me-1 icon-md" data-feather="image"></i>
                    <a class="pt-1px d-none d-md-block text-body" href="#">Company</a>
                  </li>
                  <!-- <li class="ms-3 ps-3 border-start d-flex align-items-center">
                    <i class="me-1 icon-md" data-feather="video"></i>
                    <a class="pt-1px d-none d-md-block text-body" href="#">Videos</a>
                  </li> -->
                  @endif
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="row profile-body">
    <!-- left wrapper start -->
    <div class="d-none d-md-block col-md-4 col-xl-3 left-wrapper">
        <div class="card rounded">
            <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-2">
                <h6 class="card-title mb-0">About</h6>
                <div class="dropdown">
                <button class="btn p-0" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="git-branch" class="icon-sm me-2"></i> <span class="">Update</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View all</span></a>
                </div>
                </div>
            </div>
            <p>{{Auth::user()->bio}}</p>
            <div class="mt-3">
                <label class="tx-11 fw-bolder mb-0 text-uppercase">Joined:</label>
                <p class="text-muted">                                
                    
                        @php 
                        $date = date('D M Y', strtotime( Auth::user()->created_at ));
                        @endphp

                        {{$date}}
                                
                    
                </p>
            </div>
            <div class="mt-3">
                <label class="tx-11 fw-bolder mb-0 text-uppercase">Phone:</label>
                <p class="text-muted"><a href="tel:{{Auth::user()->phone}}">{{Auth::user()->phone}}</p>
            </div>
            <div class="mt-3">
                <label class="tx-11 fw-bolder mb-0 text-uppercase">Email:</label>
                <p class="text-muted"><a href="mailto:{{Auth::user()->email}}">{{Auth::user()->email}}</p>
            </div>
            <div class="mt-3">
                <label class="tx-11 fw-bolder mb-0 text-uppercase">Role:</label>
                <p class="text-muted">{{Auth::user()->roles}}</p>
            </div>
            <div class="mt-3 d-flex social-links">
                <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                <i data-feather="github"></i>
                </a>
                <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                <i data-feather="twitter"></i>
                </a>
                <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                <i data-feather="instagram"></i>
                </a>
            </div>
            </div>
        </div>
    </div>
          <!-- left wrapper end -->
          <!-- middle wrapper start -->
    <div class="col-md-8 col-xl-9 middle-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="content-section">
                   <div class="current-content" >
                        <div class="card rounded">
                            <div class="card-header">
                                <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <img class="img-xs rounded-circle" src="https://via.placeholder.com/37x37" alt="">													
                                    <div class="ms-2">
                                    <p>Mike Popescu</p>
                                    <p class="tx-11 text-muted">1 min ago</p>
                                    </div>
                                </div>
                                <!-- <div class="dropdown">
                                    <button class="btn p-0" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="icon-lg pb-3px" data-feather="more-horizontal"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="meh" class="icon-sm me-2"></i> <span class="">Unfollow</span></a>
                                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="corner-right-up" class="icon-sm me-2"></i> <span class="">Go to post</span></a>
                                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="share-2" class="icon-sm me-2"></i> <span class="">Share</span></a>
                                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="copy" class="icon-sm me-2"></i> <span class="">Copy link</span></a>
                                    </div>
                                </div> -->
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="mb-3 tx-14">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus minima delectus nemo unde quae recusandae assumenda.</p>
                                <img class="img-fluid" src="https://via.placeholder.com/689x430" alt="">
                            </div>
                            <div class="card-footer">
                                <div class="d-flex post-actions">
                                    <a href="javascript:;" class="d-flex align-items-center text-muted me-4">
                                        <i class="icon-md" data-feather="heart"></i>
                                        <p class="d-none d-md-block ms-2">Like</p>
                                    </a>
                                    <a href="javascript:;" class="d-flex align-items-center text-muted me-4">
                                        <i class="icon-md" data-feather="message-square"></i>
                                        <p class="d-none d-md-block ms-2">Comment</p>
                                    </a>
                                    <a href="javascript:;" class="d-flex align-items-center text-muted">
                                        <i class="icon-md" data-feather="share"></i>
                                        <p class="d-none d-md-block ms-2">Share</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Content for changing password -->
                    <div class="change-password-content" style="display: none;">
                        <div class="card rounded">
                            <div class="card-header">
                                <h6>Change Password </h6>
                            </div>
                            <div class="card-body">
                                <form id="changePassword" class="form" >
                                    @csrf
                                        <div class="row mb-3">
                                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Current Password</label>
                                            <div class="col-lg-8">
                                                <div class="input-group" id="show_hide_password">
                                                    <input class="form-control form-control-lg form-control-solid" type="password" name="current_password" id="current_password"  placeholder="Enter current password" />
                                                    <!-- <input type="password" required class="form-control" name="password" placeholder="Enter password" > -->
                                                    <div class="input-group-append">
                                                        <span class="input-group-text toggle-password" id="basic-addon2" style="cursor: pointer;min-height: calc(1.9em + 1rem + 2px);"><i class="fa fa-eye-slash" aria-hidden="true"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-lg-4 col-form-label required fw-bold fs-6">New Password</label>
                                            <div class="col-lg-8">
                                                <div class="input-group" id="show_hide_password">
                                                <input class="form-control form-control-lg form-control-solid" type="password" name="new_password" id="new_password" placeholder="Enter new password" />
                                                    <div class="input-group-append">
                                                        <span class="input-group-text toggle-password" id="basic-addon2" style="cursor: pointer;min-height: calc(1.9em + 1rem + 2px);"><i class="fa fa-eye-slash" aria-hidden="true"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Confirm Password</label>
                                            <div class="col-lg-8">
                                                <div class="input-group" id="show_hide_password">
                                                <input class="form-control form-control-lg form-control-solid" type="password" name="confirm_password" id="confirm_password" placeholder="Enter confirm password" />
                                                    <div class="input-group-append">
                                                        <span class="input-group-text toggle-password" id="basic-addon2" style="cursor: pointer;min-height: calc(1.9em + 1rem + 2px);"><i class="fa fa-eye-slash" aria-hidden="true"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                                        <button type="submit" class="btn btn-primary" id="changePasswordBtn">Save Changes</button>
                                        <button type="reset" class="btn btn-light btn-active-light-primary me-2">Cancel</button>                             
                                    </div>
                                </form>
                            </div>
                        </div>                               
                    </div>
                    
                    <!-- Content for editing profile -->
                    <div class="edit-profile-content" style="display: none;">
                        <!-- Your edit profile form or content goes here -->
                        <div class="card rounded">
                            <div class="card-header">
                                <h6>Edit Profile </h6>
                            </div>
                            <div class="card-body">
                               <form  method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                                    @csrf
                                    
                           
                                    <div class="row mb-3">
                                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Name</label>
                                        <div class="col-lg-8">
                                            <input class="form-control form-control-lg form-control-solid" type="text" name="name" value="{{Auth::user()->name}}" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Email</label>
                                        <div class="col-lg-8">
                                            <input class="form-control form-control-lg form-control-solid" type="email" name="email" value="{{Auth::user()->email}}" />
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Phone</label>
                                        <div class="col-lg-8">
                                            <input class="form-control form-control-lg form-control-solid" type="text" name="phone" value="{{Auth::user()->phone}}" />
                                        </div>
                                    </div>
                                    
                                    <div class="row mb-3">
                                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Bio</label>
                                        <div class="col-lg-8">
                                            <textarea class="form-control form-control-lg form-control-solid" cols="10" rows="3" name="bio" >{{Auth::user()->bio}}</textarea>
                                        </div>
                                    </div> 
                                    
                                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                                        <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit" id="changePasswordBtn">Update Profile</button>
                                        <button type="reset" class="btn btn-light btn-active-light-primary me-2">Cancel</button>                             
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
          <!-- middle wrapper end -->
          <!-- right wrapper start -->
        <!-- <div class="d-none d-xl-block col-xl-3">
        <div class="row">
            <div class="col-md-12 grid-margin">
            <div class="card rounded">
                <div class="card-body">
                <h6 class="card-title">latest photos</h6>
                <div class="row ms-0 me-0">
                    <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                    <figure class="mb-2">
                        <img class="img-fluid rounded" src="https://via.placeholder.com/96x96" alt="">
                    </figure>
                    </a>
                    <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                    <figure class="mb-2">
                        <img class="img-fluid rounded" src="https://via.placeholder.com/96x96" alt="">
                    </figure>
                    </a>
                    <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                    <figure class="mb-2">
                        <img class="img-fluid rounded" src="https://via.placeholder.com/96x96" alt="">
                    </figure>
                    </a>
                    <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                    <figure class="mb-2">
                        <img class="img-fluid rounded" src="https://via.placeholder.com/96x96" alt="">
                    </figure>
                    </a>
                    <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                    <figure class="mb-2">
                        <img class="img-fluid rounded" src="https://via.placeholder.com/96x96" alt="">
                    </figure>
                    </a>
                    <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                    <figure class="mb-2">
                        <img class="img-fluid rounded" src="https://via.placeholder.com/96x96" alt="">
                    </figure>
                    </a>
                    <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                    <figure class="mb-0">
                        <img class="img-fluid rounded" src="https://via.placeholder.com/96x96" alt="">
                    </figure>
                    </a>
                    <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                    <figure class="mb-0">
                        <img class="img-fluid rounded" src="https://via.placeholder.com/96x96" alt="">
                    </figure>
                    </a>
                    <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                    <figure class="mb-0">
                        <img class="img-fluid rounded" src="https://via.placeholder.com/96x96" alt="">
                    </figure>
                    </a>
                </div>
                </div>
            </div>
            </div>
            <div class="col-md-12 grid-margin">
            <div class="card rounded">
                <div class="card-body">
                <h6 class="card-title">suggestions for you</h6>
                <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                    <div class="d-flex align-items-center hover-pointer">
                    <img class="img-xs rounded-circle" src="https://via.placeholder.com/37x37" alt="">											
                    <div class="ms-2">
                        <p>Mike Popescu</p>
                        <p class="tx-11 text-muted">12 Mutual Friends</p>
                    </div>
                    </div>
                    <button class="btn btn-icon"><i data-feather="user-plus" data-bs-toggle="tooltip" title="Connect"></i></button>
                </div>
                <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                    <div class="d-flex align-items-center hover-pointer">
                    <img class="img-xs rounded-circle" src="https://via.placeholder.com/37x37" alt="">											
                    <div class="ms-2">
                        <p>Mike Popescu</p>
                        <p class="tx-11 text-muted">12 Mutual Friends</p>
                    </div>
                    </div>
                    <button class="btn btn-icon"><i data-feather="user-plus" data-bs-toggle="tooltip" title="Connect"></i></button>
                </div>
                <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                    <div class="d-flex align-items-center hover-pointer">
                    <img class="img-xs rounded-circle" src="https://via.placeholder.com/37x37" alt="">											
                    <div class="ms-2">
                        <p>Mike Popescu</p>
                        <p class="tx-11 text-muted">12 Mutual Friends</p>
                    </div>
                    </div>
                    <button class="btn btn-icon"><i data-feather="user-plus" data-bs-toggle="tooltip" title="Connect"></i></button>
                </div>
                <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                    <div class="d-flex align-items-center hover-pointer">
                    <img class="img-xs rounded-circle" src="https://via.placeholder.com/37x37" alt="">											
                    <div class="ms-2">
                        <p>Mike Popescu</p>
                        <p class="tx-11 text-muted">12 Mutual Friends</p>
                    </div>
                    </div>
                    <button class="btn btn-icon"><i data-feather="user-plus" data-bs-toggle="tooltip" title="Connect"></i></button>
                </div>
                <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                    <div class="d-flex align-items-center hover-pointer">
                    <img class="img-xs rounded-circle" src="https://via.placeholder.com/37x37" alt="">											
                    <div class="ms-2">
                        <p>Mike Popescu</p>
                        <p class="tx-11 text-muted">12 Mutual Friends</p>
                    </div>
                    </div>
                    <button class="btn btn-icon"><i data-feather="user-plus" data-bs-toggle="tooltip" title="Connect"></i></button>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="d-flex align-items-center hover-pointer">
                    <img class="img-xs rounded-circle" src="https://via.placeholder.com/37x37" alt="">											
                    <div class="ms-2">
                        <p>Mike Popescu</p>
                        <p class="tx-11 text-muted">12 Mutual Friends</p>
                    </div>
                    </div>
                    <button class="btn btn-icon"><i data-feather="user-plus" data-bs-toggle="tooltip" title="Connect"></i></button>
                </div>

                </div>
            </div>
            </div>
        </div> -->
    </div>
          <!-- right wrapper end -->
</div>
@endauth

@endsection

@push('js')
<script>
    document.getElementById('avatarUpload').addEventListener('change', function(event) {
        console.log('update');
        const file = event.target.files[0];
        if (file) {
            const formData = new FormData();
            formData.append('avatar', file);

            fetch('{{ route('upload.avatar') }}', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                   // document.getElementById('profileImage').src = URL.createObjectURL(file);
                    window.location.reload(true);
                } else {
                    console.error('Avatar upload failed.');
                }
            })
            .catch(error => {
                console.error('An error occurred:', error);
            });
        }
        // if (file) {
        //     const reader = new FileReader();
        //     reader.onload = function(e) {
        //         document.getElementById('profileImage').src = e.target.result;
        //         // Here, you can also send the image to the server using AJAX to update the user's avatar.
        //         // You would need to implement the server-side logic in Laravel to handle the image upload and update.
        //     };
        //     reader.readAsDataURL(file);
        // }
    });
</script>
<script>
    $(document).ready(function() {
        $('.change-password').on('click', function() {
            $('.current-content').hide();
            $('.change-password-content').show();
            $('.edit-profile-content').hide();
        });
        
        $('.edit-profile').on('click', function() {
            $('.current-content').hide();
            $('.change-password-content').hide();
            $('.edit-profile-content').show();
        });
    });
</script>

<script>
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
    // submit the change password form
    $('#changePassword').submit(function(e) {
        e.preventDefault();
        //get the form data values
        var currentPassword = $('#current_password').val();
        // console.log(currentPassword);
        var newPassword = $('#new_password').val();
        // console.log(newPassword);   
        var confirmPassword = $('#confirm_password').val();
        // console.log(confirmPassword);
        // check that current password, new password and confirm password are not empty
        if (currentPassword == '' || newPassword == '' || confirmPassword == '') {
            // console.log('Please fill all fields');
            toastr.error('All fields are required!');
        } 
        // check that new password and confirm password are equal
        else if (newPassword != confirmPassword) {
            console.log('Passwords do not match');
            toastr.error('Passwords do not match!');
            // use toast from t
            // Swal.fire({
            //     icon: 'error',
            //     title: 'Oops...',
            //     text: 'Passwords do not match!',
            // })
        }
            else {
                console.log('All good');
                // check that current password is correct
                //include the token
                var token = $('input[name=_token]').val();
                
                $.ajax({
                    url: "{{ route('change.password') }}", // url where to submit the request                 
                    type: 'POST',

                    data: {
                        old_password: currentPassword,
                        new_password: newPassword,
                        confirm_password: confirmPassword,
                        _token: token,
                    }, // data to submit
                   //dataType: 'json', // what type of data do we expect back from the server

                    success: function(data) {
                        console.log(data);
                        if (data.success) {
                            console.log(data.success);
                            // Swal.fire({
                            //     icon: 'success',
                            //     title: 'Success',
                            //     text: 'Password changed successfully!',
                            // })
                            // toast({
                            //     type: 'success',
                            //     title: 'Password Changed Successfully'
                            // })
                            toastr.success("Password changed successfully");
                             $('#changePassword').trigger("reset");
                            
                        }
                        else {
                            console.log(data.error);
                            toastr.error(data.error);
                            // Swal.fire({
                            //     icon: 'error',
                            //     title: 'Oops...',
                            //     text: 'Current password is incorrect!',
                            // })
                        }
                    },

                    error: function(reject) {
                        console.log(reject);
                        // Swal.fire({
                        //     icon: 'error',
                        //     title: 'Oops...',
                        //     text: 'Something went wrong!',
                        // })
                        toastr.error('Something went wrong!');
                    }
                });             
            }
        }
       
    );

    //call function submitForm() when the submit button is clicked
    $('#changePasswordBtn').click(function(e) {
        e.preventDefault();
        //call the function to change the password
        $('#changePassword').submit();
    });

</script>








@endpush