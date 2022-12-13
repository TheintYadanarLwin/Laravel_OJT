<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.0.0.js"></script>
    @vite(['resources/js/app.js'])
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <h2 class="navbar-brand">OJT</h2>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active ml-12" aria-current="page" href="{{ route('posts.index') }}">POST</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-12" href="{{ route('categories.index') }}">CATEGORY</a>
                    </li>
                </ul>
                <form class="form-inline mt-2 mt-md-0 mr-3 d-flex">
                    <div class="dropdown" >
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown">
                            {{ Auth::user()->name }}
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="left: -78px">
                            <li class="text-center align-center text-dark">
                                <a class="btn btn-primary" href="{{ route('auth.profile') }}">Update Profile</a>
                            </li>
                            <li class="text-center align-center mt-3"><a class=" btn-danger btn"
                                    href="{{ route('signout') }}">Logout</a></li>
                        </ul>
                    </div>
                </form>
            </div>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>
<script type="text/javascript">
    $(document).ready(function(e) {
        $('#image').change(function() {
            let reader = new FileReader();
            reader.onload = (e) => {
                $('#preview_image').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        });
    });
</script>
</html>
