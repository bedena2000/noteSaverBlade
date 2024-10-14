<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
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
                Save Your note.
                Edit them and Group them by Favorites
                🗒️
            </h1>
        </div>

        <div class="rightSide">
            <form action="" class="formWrapper">
                @csrf
                <div>
                    <h2 class="loginTitle">Login</h2>
                </div>
                
                <div class="inputItem">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username">
                </div>

                <div class="inputItem">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password">
                </div>

                <div class="btnWrapper">
                    <button class="btn btn-login" type="submit">
                        Log in
                    </button>

                    <a href="#" class="btn btn-register" type="submit">
                        Register
                    </a>
                </div>
            </form>
        </div>

    </div>

</body>
</html>