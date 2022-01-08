@extends('default')
<div class="registerForm" id="registerForm">
    <form action="{{('doRegister')}}" method="post" id="doRegister" autocomplete="off">
    @csrf('token')
        <div class="form-group">
            <label for="">Full Name</label>
            <input type="text" class="form-control" name="fullname" id="fullname">
        </div>

        <div class="form-group">
            <label for="">Address</label>
            <input type="text" class="form-control" name="address" id="address">
        </div>

        <div class="form-group">
            <label for="">Pin Code</label>
            <input type="text" class="form-control" name="pincode" id="pincode">
        </div>

        <div class="form-group">
            <label for="">E-Mail</label>
            <input type="text" class="form-control" name="email" id="email">
        </div>

        <div class="form-group">
            <label for="">Phone</label>
            <input type="text" class="form-control" name="phone" id="phone">
        </div>
        
        <div class="form-group">
            <label for="">User Name</label>
            <input type="text" class="form-control" name="userName" id="userName">
        </div>

        <div class="form-group">
            <label for="">Password</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary" name="registerBtn" id="registerBtn" value="Sign Up">
        </div>
    </form>
</div>