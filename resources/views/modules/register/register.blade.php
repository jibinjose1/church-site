@extends('default')
@section('title','Pazhoor: Register')
<div class="registerForm" id="registerForm">
    <form action="{{('doRegister')}}" method="post" id="doRegister" autocomplete="off">
    @csrf('token')
        <div class="form-group">
            <label for="">First Name</label>
            <input type="text" class="form-control" name="firstname" id="firstname">
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
            <label for="">Password</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary" name="registerBtn" id="registerBtn" value="Sign Up">
        </div>
    </form>
</div>
