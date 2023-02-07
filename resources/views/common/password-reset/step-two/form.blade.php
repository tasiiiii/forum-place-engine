@extends('common.layout.main')

@section('title', 'Forum | Вход')

@section('content')
    <div class="container" style="margin-top: 300px;">
        <!-- WIDGET BOX -->
        <div class="widget-box">
            <!-- WIDGET BOX TITLE -->
            <p class="widget-box-title" style="font-family: 'Russo One', sans-serif;">Восстановить пароль</p>

            <div class="widget-box-content">
                <form method="POST" action="{{ route('password_reset_step_two_form') }}">
                    @csrf
                    <div class="form-input small" style="margin-top: 10px;">
                        <label for="password" style="font-family: 'Fira Sans', sans-serif;">Пароль</label>
                        <input type="password" id="password" name="password">
                        @error('password')
                            <span style="color: red; font-family: 'Fira Sans', sans-serif;">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-input small" style="margin-top: 10px;">
                        <label for="password_confirmation" style="font-family: 'Fira Sans', sans-serif;">Повторить пароль</label>
                        <input type="password" id="password_confirmation" name="password_confirmation">
                    </div>
                    @if(\Illuminate\Support\Facades\Session::has(\App\UI\Flash\Enum\FlashEnum::Error->value))
                        <div class="alert alert-danger" style="margin-top: 10px;">
                            {{ \Illuminate\Support\Facades\Session::get(\App\UI\Flash\Enum\FlashEnum::Error->value) }}
                        </div>
                    @endif
                    <div class="form-item" style="margin-top: 10px;">
                        <!-- BUTTON -->
                        <button type="submit" class="button full secondary" style="font-family: 'Russo One', sans-serif;">Восстановить</button>
                        <!-- /BUTTON -->
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
