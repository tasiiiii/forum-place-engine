@extends('common.layout.main')

@section('title', 'Forum | Вход')

@section('content')
    <div class="container">
        <div class="col-md-12 center-block" style="margin-top: 300px;">
            <!-- WIDGET BOX -->
            <div class="widget-box">
                <!-- WIDGET BOX TITLE -->
                <p class="widget-box-title" style="font-family: 'Russo One', sans-serif;">Вход</p>
                <!-- /WIDGET BOX TITLE -->

                <!-- WIDGET BOX CONTENT -->
                <div class="widget-box-content">
                    @if(\Illuminate\Support\Facades\Session::has(\App\UI\Flash\Enum\FlashEnum::Success->value))
                        <div class="alert alert-success">
                            {{ \Illuminate\Support\Facades\Session::get(\App\UI\Flash\Enum\FlashEnum::Success->value) }}
                        </div>
                    @endif
                    <!-- FORM -->
                    <form class="form">
                        <div class="form-input small">
                            <label for="email" style="font-family: 'Fira Sans', sans-serif;">Email</label>
                            <input type="text" id="email" name="email">
                        </div>
                        <div class="form-input small" style="margin-top: 10px;">
                            <label for="password" style="font-family: 'Fira Sans', sans-serif;">Пароль</label>
                            <input type="password" id="password" name="password">
                        </div>
                        <div class="form-item" style="margin-top: 10px;">
                            <!-- BUTTON -->
                            <p class="button full secondary" style="font-family: 'Russo One', sans-serif;">Войти</p>
                            <!-- /BUTTON -->
                        </div>
                        <div style="margin-top: 30px; text-align: center;">
                            <div>
                                <a href="{{ route('registration_show') }}" style="font-family: 'Fira Sans', sans-serif; color: #fff;">Нет аккаунта? Регистрация!</a>
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
