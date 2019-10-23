@extends('layouts.app')

@section('content')
<div class="m-grid m-grid--hor m-grid--root m-page">
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-2" id="m_login" style="background-image: url({{ asset('assets/app/media/img//bg/bg-3.jpg') }}) ;">
        <div class="m-grid__item m-grid__item--fluid    m-login__wrapper">
            <div class="m-login__container">
                <div class="m-login__logo">
                    <a href="#">
                        <img src="{{ asset('assets/app/media/img//logos/logo-1.png') }}">
                    </a>
                </div>
                <div class="m-login__signin">
                    <div class="m-login__head">
                        <h3 class="m-login__title">Sign In To Admin</h3>
                    </div>
                    <form method="POST" class="m-login__form m-form" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group m-form__group">
                            <input class="form-control m-input" type="email" placeholder="Email" name="email" autocomplete="off" value="admin@gmail.com">
                        </div>
                        <div class="form-group m-form__group">
                            <input class="form-control m-input m-login__form-input--last" type="password" placeholder="Password" name="password" value="12345678">
                        </div>
                        <div class="row m-login__form-sub">
                            <div class="col m--align-left m-login__form-left">
                                <label class="m-checkbox  m-checkbox--focus">
                                    <input type="checkbox" name="remember"> Remember me
                                    <span></span>
                                </label>
                            </div>
                        </div>
                        <div class="m-login__form-action">
                            <button type="submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn m-login__btn--primary">Sign In</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

