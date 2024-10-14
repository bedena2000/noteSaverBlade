<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NoteSaver - Register</title>
    <link rel="stylesheet" href="{{ url('css/welcome.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
</head>
<body>

    <div class="wrapper">

        <div class="leftSide">
            <h1 class="title">
                Register your account.
                create account and manage your notes
                🔒
            </h1>
        </div>

        <div class="rightSide">
            <form  novalidate method="post" class="formWrapper">
                
                @csrf
                <div>
                    <h2 class="loginTitle">Register an account</h2>
                </div>
                <div class="inputItem">
                    <label for="username">Username</label>
                    <input type="text" id="username" value="{{ old('username') }}" name="username">
                    @error('username')
                        <p class="errorMessage">{{ $message }}</p>
                    @enderror
                </div>

                <div class="inputItem">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}">

                    @error('email')
                        <p class="errorMessage">{{ $message }}</p>
                    @enderror
                </div>

                <div class="inputItem">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password">
                    @error('password')
                        <p class="errorMessage">{{ $message }}</p>
                    @enderror
                </div>

                <div class="btnWrapper">
                    <button class="btn btn-login" type="submit">
                        Register
                    </button>

                    <a href="{{ route('login') }}" class="btn btn-register" type="submit">
                        Login
                    </a>
                </div>
            </form>
        </div>

    </div>

</body>
</html>