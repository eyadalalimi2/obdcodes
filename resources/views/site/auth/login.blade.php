<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('site.login') }} / {{ __('site.register') }}</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/eyad.css') }}">
    <style>
        /* --- بداية eyad.css --- */
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
            text-decoration: none;
            list-style: none;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: linear-gradient(90deg, #e2e2e2, #c9d6ff);
        }

        .container {
            position: relative;
            width: 850px;
            height: 550px;
            background: #fff;
            margin: 20px;
            border-radius: 30px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }

        .container h1 {
            font-size: 36px;
            margin: -10px 0;
        }

        .container p {
            font-size: 14.5px;
            margin: 15px 0;
        }

        form {
            width: 100%;
        }

        .form-box {
            position: absolute;
            right: 0;
            width: 50%;
            height: 100%;
            background: #fff;
            display: flex;
            align-items: center;
            color: #333;
            text-align: center;
            padding: 40px;
            z-index: 1;
            transition: 0.6s ease-in-out 1.2s, visibility 0s 1s;
        }

        .container.active .form-box {
            right: 50%;
        }

        .form-box.register {
            visibility: hidden;
        }

        .container.active .form-box.register {
            visibility: visible;
        }

        .input-box {
            position: relative;
            margin: 30px 0;
        }

        .input-box input {
            width: 100%;
            padding: 13px 50px 13px 20px;
            background: #eee;
            border-radius: 8px;
            border: none;
            outline: none;
            font-size: 16px;
            color: #333;
            font-weight: 500;
        }

        .input-box input::placeholder {
            color: #888;
            font-weight: 400;
        }

        .input-box i {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 20px;
        }

        .forgot-link {
            margin: -15px 0 15px;
        }

        .forgot-link a {
            font-size: 14.5px;
            color: #333;
        }

        .btn {
            width: 100%;
            height: 48px;
            background: #7494ec;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border: none;
            cursor: pointer;
            font-size: 16px;
            color: #fff;
            font-weight: 600;
        }

        .social-icons {
            display: flex;
            justify-content: center;
        }

        .social-icons a {
            display: inline-flex;
            padding: 10px;
            border: 2px solid #ccc;
            border-radius: 8px;
            font-size: 24px;
            color: #333;
            margin: 0 8px;
        }

        .toggle-box {
            position: absolute;
            width: 100%;
            height: 100%;
        }

        .toggle-box::before {
            content: "";
            position: absolute;
            left: -250%;
            width: 300%;
            height: 100%;
            background: #7494ec;
            border-radius: 150px;
            z-index: 2;
            transition: 1.8s ease-in-out;
        }

        .container.active .toggle-box::before {
            left: 50%;
        }

        .toggle-panel {
            position: absolute;
            width: 50%;
            height: 100%;
            color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            z-index: 2;
            transition: 0.6s ease-in-out;
        }

        .toggle-panel.toggle-left {
            left: 0;
            transition-delay: 1.2s;
        }

        .container.active .toggle-panel.toggle-left {
            left: -50%;
            transition-delay: 0.6s;
        }

        .toggle-panel.toggle-right {
            right: -50%;
            transition-delay: 0.6s;
        }

        .container.active .toggle-panel.toggle-right {
            right: 0;
            transition-delay: 1.2s;
        }

        .toggle-panel p {
            margin-bottom: 20px;
        }

        .toggle-panel .btn {
            width: 160px;
            height: 46px;
            background: transparent;
            border: 2px solid #fff;
            box-shadow: none;
        }

        @media screen and (max-width: 650px) {
            .container {
                height: calc(100vh - 40px);
            }

            .form-box {
                bottom: 0;
                width: 100%;
                height: 70%;
            }

            .container.active .form-box {
                right: 0;
                bottom: 30%;
            }

            .toggle-box::before {
                left: 0;
                top: -270%;
                width: 100%;
                height: 300%;
                border-radius: 20vw;
            }

            .container.active .toggle-box::before {
                left: 0;
                top: 70%;
            }

            .container.active .toggle-panel.toggle-left {
                left: 0;
                top: -30%;
            }

            .toggle-panel {
                width: 100%;
                height: 30%;
            }

            .toggle-panel.toggle-left {
                top: 0;
            }

            .toggle-panel.toggle-right {
                right: 0;
                bottom: -30%;
            }

            .container.active .toggle-panel.toggle-right {
                bottom: 0;
            }
        }

        @media screen and (max-width: 400px) {
            .form-box {
                padding: 20px;
            }

            .toggle-panel h1 {
                font-size: 30px;
            }
        }

        .toggle-box::before {
            pointer-events: none;
        }
        .toggle-box::before {
  pointer-events: none;
}

/* ترفع نماذج الدخول/التسجيل فوق الـ overlay */
.form-box {
  z-index: 3;
}


        /* --- نهاية eyad.css --- */
    </style>
</head>

<body>
    <div class="container">

        <!-- Login Form -->
        <div class="form-box login">
            <form method="POST" action="{{ route('site.login') }}">
                @csrf
                <h1>{{ __('site.login') }}</h1>
                <div class="input-box">
                    <input type="email" name="email" placeholder="{{ __('site.email') }}" required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="password" name="password" placeholder="{{ __('site.password') }}" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <button type="submit" class="btn">{{ __('site.login') }}</button>

                <p>{{ __('site.or_social') }}</p>
                <div class="social-icons">
                    <a href="{{ route('site.social.redirect', ['provider' => 'google']) }}"><i
                            class='bx bxl-google'></i></a>
                    <a href="{{ route('site.social.redirect', ['provider' => 'facebook']) }}"><i
                            class='bx bxl-facebook'></i></a>
                </div>
            </form>
        </div>

        <!-- Registration Form -->
        <div class="form-box register">
            <form method="POST" action="{{ route('site.register') }}">
                @csrf
                <h1>{{ __('site.register') }}</h1>
                <div class="input-box">
                    <input type="text" name="name" placeholder="{{ __('site.name') }}" required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="email" name="email" placeholder="{{ __('site.email') }}" required>
                    <i class='bx bxs-envelope'></i>
                </div>
                <div class="input-box">
                    <input type="password" name="password" placeholder="{{ __('site.password') }}" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <div class="input-box">
                    <input type="password" name="password_confirmation"
                        placeholder="{{ __('site.password_confirmation') }}" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <button type="submit" class="btn">{{ __('site.register') }}</button>

                <p>{{ __('site.or_social') }}</p>
                <div class="social-icons">
                    <a href="{{ route('site.social.redirect', ['provider' => 'google']) }}"><i
                            class='bx bxl-google'></i></a>
                    <a href="{{ route('site.social.redirect', ['provider' => 'facebook']) }}"><i
                            class='bx bxl-facebook'></i></a>
                </div>
            </form>
        </div>

       <!-- Toggle Panels -->
<div class="toggle-box">
  <div class="toggle-panel toggle-left">
    <h1>{{ __('site.welcome') }}</h1>
    <p>{{ __('site.no_account') }}</p>
    <!-- أضفنا id هنا -->
    <button type="button" id="toggleRegisterBtn" class="btn register-btn">{{ __('site.register') }}</button>
  </div>
  <div class="toggle-panel toggle-right">
    <h1>{{ __('site.welcome_back') }}</h1>
    <p>{{ __('site.already_have_account') }}</p>
    <!-- وأيضاً هنا -->
    <button type="button" id="toggleLoginBtn" class="btn login-btn">{{ __('site.login') }}</button>
  </div>
</div>

    </div>

   <script>
  document.addEventListener('DOMContentLoaded', function() {
    const container       = document.querySelector('.container');
    const registerToggle  = document.getElementById('toggleRegisterBtn');
    const loginToggle     = document.getElementById('toggleLoginBtn');

    // تأكد من جاهزية العناصر
    console.log('registerToggle:', registerToggle, 'loginToggle:', loginToggle);

    // إذا الرابط يحتوي #register، اعرض فورم التسجيل فورًا
    if (window.location.hash === '#register') {
      container.classList.add('active');
    }

    registerToggle.addEventListener('click', () => {
      container.classList.add('active');
    });

    loginToggle.addEventListener('click', () => {
      container.classList.remove('active');
    });
  });
</script>


</body>

</html>
