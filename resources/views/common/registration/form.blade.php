@extends('common.layout.main')

@section('title', 'Forum | Регистрация')

@section('content')
    <div class="container">
        <div class="col-md-12 center-block" style="margin-top: 300px;">
            <!-- WIDGET BOX -->
            <div class="widget-box">
                <!-- WIDGET BOX TITLE -->
                <p class="widget-box-title" style="font-family: 'Russo One', sans-serif;">Регистрация</p>
                <!-- /WIDGET BOX TITLE -->

                <!-- WIDGET BOX CONTENT -->
                <div class="widget-box-content">
                    <!-- FORM -->
                    <form method="POST" action="{{ route('registration_form') }}" class="form" >
                        @csrf
                        <div class="form-input small">
                            <label for="name" style="font-family: 'Fira Sans', sans-serif;">Никнейм (Будет виден остальным пользователем)</label>
                            <input type="text" id="name" name="name" value="{{ $registrationData->getName() }}">
                            @error('name')
                                <span style="color: red; font-family: 'Fira Sans', sans-serif;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-input small" style="margin-top: 10px;">
                            <label for="email" style="font-family: 'Fira Sans', sans-serif;">Email</label>
                            <input type="text" id="email" name="email" value="{{ $registrationData->getEmail() }}">
                            @error('email')
                                <span style="color: red; font-family: 'Fira Sans', sans-serif;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-input small" style="margin-top: 10px;">
                            <label for="password" style="font-family: 'Fira Sans', sans-serif;">Пароль</label>
                            <input type="password" id="password" name="password" value="{{ $registrationData->getPassword() }}">
                            @error('password')
                                <span style="color: red; font-family: 'Fira Sans', sans-serif;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-input small" style="margin-top: 10px;">
                            <label for="password_confirmation" style="font-family: 'Fira Sans', sans-serif;">Повторить пароль</label>
                            <input type="password" id="password_confirmation" name="password_confirmation">
                        </div>
                        <div class="form-item" style="margin-top: 10px;">
                            <!-- BUTTON -->
                            <button type="submit" class="button full secondary" style="font-family: 'Russo One', sans-serif;">Войти</button>
                            <!-- /BUTTON -->
                        </div>
                        @if($errorMessage)
                            <div class="alert alert-danger" style="margin-top: 10px;">
                                {{ $errorMessage }}
                            </div>
                        @endif
                        <div style="margin-top: 30px; text-align: center;">
                            <div>
                                <a href="{{ route('login_show') }}" style="font-family: 'Fira Sans', sans-serif; color: #fff;">Есть аккаунт? Авторизация!</a>
                            </div>
                            <div>
                                <a href="#" style="font-family: 'Fira Sans', sans-serif; color: #fff;">Забыли пароль?</a>
                            </div>
                        </div>
                    </form>
                    <!-- /FORM -->
                </div>
                <!-- WIDGET BOX CONTENT -->
            </div>
            <!-- /WIDGET BOX -->
        </div>
    </div>
@endsection
