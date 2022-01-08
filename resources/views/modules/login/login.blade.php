@extends('default')
<div class="loginForm" id="loginForm">
    <form action="{{('doLogin')}}" method="get" id="doLogin" autocomplete="off">
    @csrf('token')
        <div class="form-group">
            <label for="">User Name</label>
            <input type="text" class="form-control" name="username" id="username">
        </div>

        <div class="form-group">
            <label for="">Password</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-success" name="loginBtn" id="loginBtn" value="Sign In">
            <a href="register"><input type="button" class="btn btn-primary" name="registerBtn" id="registerBtn" value="Sign Up"></a>
        </div>
    </form>
</div>