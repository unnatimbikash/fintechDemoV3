@extends('layouts.layout')
@section('title', 'setting')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h3>{{$user->name}}</h3>
                        <h4 class="card-title"> Edit User Details</h4>
                        <form method="post" action="{{url('member/edituserdata')}}">
                            @csrf
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name" value="{{$user->name}}">
                                </div>
                                <div class="col-md-4">
                                    <label for="mobileNumber">Mobile Number</label>
                                    <input type="tel" name="mobile" class="form-control" id="mobileNumber"
                                        placeholder="Enter your mobile number" value="{{$user->mobile}}">
                                </div>
                                <div class="col-md-4">
                                    <label for="emailId">Email ID</label>
                                    <input type="email" name="email" class="form-control" id="emailId"
                                        placeholder="Enter your email ID" value="{{$user->email}}">
                                </div>
                            </div>

                            <div class="form-group row">

                                <div class="col-md-4">
                                    <label for="dob">Date of Birth</label>
                                    <input type="date" name="dob" class="form-control" id="dob" value="{{$user->dob}}">
                                </div>
                                <div class="col-md-4">
                                    <label for="walletAddress">Aadharmobile</label>
                                    <input type="text" name="aadharmobile" class="form-control" id="walletAddress"
                                        placeholder="Enter your wallet address" value="{{$user->aadharmobile}}">
                                </div>
                                <div class="col-md-4">
                                    <label for="walletAddress">Address</label>
                                    <input type="text" name="address" class="form-control" id="walletAddress"
                                        placeholder="Enter your wallet address" value="{{$user->address}}">
                                </div>
                                <div class="col-md-4">
                                    <label for="walletAddress">City</label>
                                    <input type="text" name="city" class="form-control" id="walletAddress"
                                        placeholder="Enter your wallet address" value="{{$user->city}}">
                                </div>
                                <div class="col-md-4">
                                    <label for="walletAddress">State</label>
                                    <input type="text" name="state" class="form-control" id="walletAddress"
                                        placeholder="Enter your wallet address" value="{{$user->state}}">
                                </div>
                                <div class="col-md-4">
                                    <label for="walletAddress">Pincode</label>
                                    <input type="text" name="pincode" class="form-control" id="walletAddress"
                                        placeholder="Enter your wallet address" value="{{$user->pincode}}">
                                </div>
                                <div class="col-md-4">
                                    <label for="walletAddress">Shopname</label>
                                    <input type="text"name="shopname" class="form-control" id="walletAddress"
                                        placeholder="Enter your wallet address" value="{{$user->shopname}}">
                                </div>
                                <div class="col-md-4">
                                    <label for="walletAddress">Designation</label>
                                    <input type="text" name="designation" class="form-control" id="walletAddress"
                                        placeholder="Enter your wallet address" value="{{$user->designation}}">
                                </div>
                            </div>
                            <input type="hidden" name="id" value="{{$user->id}}">
                            <div class="form-group text-right mt-2">
                                <button type="submit" class="btn btn-primary">Change</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
