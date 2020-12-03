@extends('layouts.dash')

@section('content')

<!-- Modal -->
<form method="post" action="/upload" enctype="multipart/form-data">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Upload Profile Image</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" aria-label="profile image"
                            aria-describedby="basic-addon2" name="image">
                        <div class="input-group-append">
                            <input type="submit" class="btn btn-primary" value="Upload">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>


<!-- Modal -->
<form action="/removeImage" method="post">
    @csrf
    <div class="modal fade" id="removeImage" tabindex="-1" aria-labelledby="removeImageLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <p>Are you sure you want to remove your display picture?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Delete Picture</button>
                </div>
            </div>
        </div>
    </div>
</form>

<!-- Page content -->
<div class="container-fluid justify-content-center mx--auto mt--6">
    <div class="row ">
        <div class="col-xl-4 order-xl-2">
            <div class="card card-profile">
                <img src="../../assets/img/theme/img-1-1000x600.jpg" alt="Image placeholder" class="card-img-top">
                <div class="row justify-content-center">
                    <div class="col-lg-10 order-lg-1">
                        <div class="card-profile-image">
                            <a href="#">
                                @if (Auth::user()->avatar)
                                <img src="{{asset('storage/images/'.Auth::user()->avatar)}}" class="rounded-circle">
                                @else
                                <img alt="Image placeholder" src="../assets/img/theme/team-4.jpg"
                                    class="rounded-circle">
                                @endif
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                </div>
                <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                    <div class="d-flex justify-content-between">
                        <a type="button" data-toggle="modal" data-target="#exampleModal"
                            class="btn btn-sm btn-info mr-4">Upload</a>
                        <a type="button" data-toggle="modal" data-target="#removeImage"
                            class="btn btn-sm btn-default float-right">Delete</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8 order-xl-1">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Edit profile </h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="#" onclick="document.querySelector('#user-form').submit()" class="btn btn-sm btn-primary">Save</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form id="{{'user-form'}}" method="post" action="{{route('userSubmits', auth()->user()->id)}}">
                        <h6 class="heading-small text-muted mb-4">User information</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Username</label>
                                        <input type="text" name="username" id="input-username" class="form-control"
                                            placeholder="Username" value="{{auth()->user()->username}}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Email address</label>
                                        <input type="email" id="input-email" class="form-control"
                                            placeholder="Email" name="email" value="{{auth()->user()->email}}"  >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">First name</label>
                                        <input type="text" id="input-first-name" class="form-control"
                                            placeholder="Firstname" name="firstname" value="{{auth()->user()->firstname}}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-last-name">Last name</label>
                                        <input type="text" id="input-last-name" class="form-control"
                                            placeholder="Lastname" name="lastname" value="{{auth()->user()->lastname}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4" />
                        <!-- Address -->
                        <h6 class="heading-small text-muted mb-4">Contact information</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-address">Address</label>
                                        <input id="input-address" class="form-control" placeholder="Home Address"
                                            name ="address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-city">City</label>
                                        <input type="text" id="input-city" class="form-control" placeholder="City"
                                            name="city" value="New York">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-country">Country</label>
                                        <input type="text" id="input-country" class="form-control" placeholder="Country"
                                            name="country" value="United States">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-country">Postal code</label>
                                        <input type="number" id="input-postal-code" class="form-control"
                                            name="postal" placeholder="Postal code">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4" />
                        <!-- Description -->
                        <h6 class="heading-small text-muted mb-4">About me</h6>
                        <div class="pl-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">About Me</label>
                                <textarea rows="4" class="form-control"
                                    name="about" placeholder="A few words about you ...">A beautiful premium dashboard for Bootstrap 4.</textarea>
                            </div>
                        </div>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div>
        @endsection
