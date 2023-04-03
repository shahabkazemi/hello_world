<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Signin Template · Bootstrap v5.0</title>
    <link rel="stylesheet" href="/css/app.css">
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">


    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: flex;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
        }

        .form-signin .checkbox {
            font-weight: 400;
        }

        .form-signin .form-floating:focus-within {
            z-index: 2;
        }

        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
    <style>
        @media print {
            #ghostery-tracker-tally {
                display: none !important
            }
        }
    </style>
</head>

<body class="text-center">

    <main class="form-signin">

        <form action="{{ route('login.save') }}" method="POST">

            {{-- {{ csrf_field() }} --}}
            @csrf
            @if ($errors->all())
                <div class="alert alert-danger" role="alert">
                    <ul>
                    @foreach ($errors->all() as $error)
                       <li>{{ $error }}</li>
                    @endforeach
                </ul>
                </div>
            @endif
            <img class="mb-4" src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72"
                height="57">
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <div class="form-floating">
                <input name="email" type="email" class="form-control" id="floatingInput"
                    placeholder="name@example.com" value="{{old('email')}}">
                <label for="floatingInput">Email address</label>
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="form-floating">
                <input name="password" type="password" class="form-control" id="floatingPassword"
                    placeholder="Password">
                <label for="floatingPassword">Password</label>
                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <div class="form-group">
                <lable for="select_number">id select</lable>
                <select name="select_number" id="select_number" class="form-control">
                    <option value="2">item - 2</option>
                    <option value="3">item - 3</option>
                    <option value="4">item - 4</option>
                    <option value="5">item - 5</option>
                    <option value="6">item - 6</option>
                    <option value="7">item - 7</option>
                    <option value="8">item - 8</option>
                    <option value="9">item - 9</option>
                    <option value="10">item - 10</option>
                </select>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted">© 2017–2021</p>
        </form>
    </main>





    <style>
        .tb_button {
            padding: 1px;
            cursor: pointer;
            border-right: 1px solid #8b8b8b;
            border-left: 1px solid #FFF;
            border-bottom: 1px solid #fff;
        }

        .tb_button.hover {
            borer: 2px outset #def;
            background-color: #f8f8f8 !important;
        }

        .ws_toolbar {
            z-index: 100000
        }

        .ws_toolbar .ws_tb_btn {
            cursor: pointer;
            border: 1px solid #555;
            padding: 3px
        }

        .tb_highlight {
            background-color: yellow
        }

        .tb_hide {
            visibility: hidden
        }

        .ws_toolbar img {
            padding: 2px;
            margin: 0px
        }
    </style>
</body>

</html>
