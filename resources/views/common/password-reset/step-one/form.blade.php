@extends('common.layout.main')

@section('title', 'Forum | Вход')

@section('content')
    <div class="container" style="margin-top: 300px;">
        <!-- WIDGET BOX -->
        <div class="widget-box">
            <!-- WIDGET BOX TITLE -->
            <p class="widget-box-title" style="font-family: 'Russo One', sans-serif;">Восстановить пароль</p>

            <div class="widget-box-content">
                @if(\Illuminate\Support\Facades\Session::has(\App\UI\Flash\Enum\FlashEnum::Success->value))
                    <div class="alert alert-success">
                        {{ \Illuminate\Support\Facades\Session::get(\App\UI\Flash\Enum\FlashEnum::Success->value) }}
                    </div>
                @endif
                <form method="POST" action="{{ route('password_reset_step_one_form') }}">
                    @csrf
                    <div class="form-input small">
                        <label for="email" style="font-family: 'Fira Sans', sans-serif;">Email</label>
                        <input type="text" id="email" name="email">
                        @error('email')
                            <span style="color: red; font-family: 'Fira Sans', sans-serif;">{{ $message }}</span>
                        @enderror
                    </div>
                    @if(\Illuminate\Support\Facades\Session::has(\App\UI\Flash\Enum\FlashEnum::Error->value))
                        <div class="alert alert-danger" style="margin-top: 10px;">
                            {{ \Illuminate\Support\Facades\Session::get(\App\UI\Flash\Enum\FlashEnum::Error->value) }}
                        </div>
                    @endif
                    <div class="form-item" style="margin-top: 10px;">
                        <button type="submit" class="button full secondary" style="font-family: 'Russo One', sans-serif;">Продолжить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
