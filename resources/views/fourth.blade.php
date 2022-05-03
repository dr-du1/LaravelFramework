<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Main menu</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/second">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/third">Authorization</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="/fourth">Personal Area</a>
                </li>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
<div class="container d-flex justify-content-center align-items-center">

    <div class="card">

        <div class="upper">

            <img src="https://i.imgur.com/Qtrsrk5.jpg" class="img-fluid">

        </div>

        <div class="user text-center">

            <div class="profile">

                <img src="https://i.imgur.com/JgYD2nQ.jpg" class="rounded-circle" width="80">

            </div>

        </div>


        <div class="mt-5 text-center">

            <h4 class="mb-0">Benjamin Tims</h4>
            <span class="text-muted d-block mb-2">Los Angles</span>

            <button class="btn btn-primary btn-sm follow">Follow</button>


            <div class="d-flex justify-content-between align-items-center mt-4 px-4">

                <div class="stats">
                    <h6 class="mb-0">Followers</h6>
                    <span>8,797</span>

                </div>


                <div class="stats">
                    <h6 class="mb-0">Projects</h6>
                    <span>142</span>

                </div>


                <div class="stats">
                    <h6 class="mb-0">Ranks</h6>
                    <span>129</span>

                </div>

            </div>

        </div>

    </div>

</div>
<div class="container">
    <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
        </ul>
        <p class="text-center text-muted">© 2021 Company, Inc</p>
    </footer>
</div>
</body>
</html>
