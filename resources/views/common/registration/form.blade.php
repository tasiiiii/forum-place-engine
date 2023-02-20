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
                    <form method="POST" action="{{ route('registration_form') }}" class="form">
                        @csrf
                        <div class="form-input small">
                            <label for="name" style="font-family: 'Fira Sans', sans-serif;">Никнейм</label>
                            <input type="text" id="name" name="name" value="{{ $registrationData->getName() }}">
                            <span id="nameAlert" style="display: none; color: red; font-family: 'Fira Sans', sans-serif;">Никнейм занят</span>
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
                            <div id="password-strength-error-container">

                            </div>
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
                            <button type="submit" class="button full secondary" style="font-family: 'Russo One', sans-serif;">Регистрация</button>
                            <!-- /BUTTON -->
                        </div>
                        @if(\Illuminate\Support\Facades\Session::has(\App\UI\Flash\Enum\FlashEnum::Error->value))
                            <div class="alert alert-danger" style="margin-top: 10px;">
                                {{ \Illuminate\Support\Facades\Session::get(\App\UI\Flash\Enum\FlashEnum::Error->value) }}
                            </div>
                        @endif
                        <div style="margin-top: 30px; text-align: center;">
                            <div>
                                <a href="{{ route('login_show') }}" style="font-family: 'Fira Sans', sans-serif; color: #fff;">Есть аккаунт? Авторизация!</a>
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

@section('js')
    <script>
        const NameChecker = {
            elements: {
                name: '#name',
                nameAlert: '#nameAlert',
                form: 'form',
            },
            exist: false,
            init: e => {
                const name = $(NameChecker.elements.name).val();

                $.ajax({
                    type: 'GET',
                    url: '{{ route('name_checker_ajax') }}',
                    data: {
                        name: name
                    },
                    success: res => {
                        NameChecker.exist = res.data.exist;

                        if (NameChecker.exist) {
                            $(NameChecker.elements.nameAlert).show();
                        } else {
                            $(NameChecker.elements.nameAlert).hide();
                        }
                    }
                })
            }
        }

        const PasswordStrengthChecker = {
            elements: {
                form: 'form',
                email: '#email',
                password: '#password',
                passwordStrengthErrorContainer: '#password-strength-error-container'
            },
            valid: true,
            init: e => {
                $(PasswordStrengthChecker.elements.passwordStrengthErrorContainer).html('');

                const password = $(PasswordStrengthChecker.elements.password).val();
                const userData = [];

                if ($(NameChecker.elements.name).val()) {
                    userData.push($(NameChecker.elements.name).val());
                }

                if ($(PasswordStrengthChecker.elements.email).val()) {
                    userData.push($(PasswordStrengthChecker.elements.email).val());
                }

                $.ajax({
                    type: 'GET',
                    url: '{{ route('password_strength_checker_ajax') }}',
                    async: false,
                    data: {
                        password: password,
                        userData: userData
                    },
                    success: res => {
                        PasswordStrengthChecker.valid = res.data.isValid;

                        if (res.data.errors) {
                            res.data.errors.forEach(error => {
                                $(PasswordStrengthChecker.elements.passwordStrengthErrorContainer).append(`
                                <span id="nameAlert" style="display: block; color: red; font-family: 'Fira Sans', sans-serif;">${error}</span>
                            `);
                            })
                        }
                    }
                });
            }
        }

        $(document).ready(e => {
            $(NameChecker.form).submit(e => {
                if (NameChecker.exist) {
                    e.preventDefault();
                }
            });
            $(NameChecker.elements.name).keyup(NameChecker.init);

            $(PasswordStrengthChecker.form).submit(e => {
                if (PasswordStrengthChecker.valid) {
                    e.preventDefault();
                }
            })
            $(NameChecker.elements.name).keyup(PasswordStrengthChecker.init);
            $(PasswordStrengthChecker.elements.email).keyup(PasswordStrengthChecker.init);
            $(PasswordStrengthChecker.elements.password).keyup(PasswordStrengthChecker.init);
        });
    </script>
@endsection
