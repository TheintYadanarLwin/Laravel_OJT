<!DOCTYPE html>
<html>

<head>
    <title>Posts</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    @vite(['resources/js/app.js'])
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand ml-3" href="#">OJT</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ 'home' }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <form class="form-inline mt-2 mt-md-0">
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register-user') }}">Register</a>
                            </li>
                        </ul>
                    </div>
                </form>
            </div>
        </nav>
    </header>

    <main role="main">
        <!--Carousel-->
        <div class="carousel">
            <div id="carouselCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    @foreach ($posts as $post)
                        <li data-target="#carouselCaptions" data-slide-to="{{ $loop->index }}"
                            class="{{ $loop->first ? 'active' : '' }} bg-dark"></li>
                    @endforeach
                </ol>
                <div class="carousel-inner">
                    @foreach ($posts as $post)
                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                            @if ($post->image === null)
                                <img src="/img/default.png" class="d-block w-100" alt="defaultimage" height="500"
                                    width="350" class="img img-responsive">
                            @else
                                <img src="/images/{{ $post->image }}" class="d-block w-100" alt="postimage"
                                    height="500" width="350" class="img img-responsive">
                            @endif
                            <div class="carousel-caption text-left">
                                <h2 class="text-warning">
                                    {{ $post->title }}</h2>
                                <p><a class="btn btn-lg btn-success" href="{{ 'registration' }}" role="button">Sign up
                                        today</a></p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
      <!-- Marketing messaging and featurettes
  ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <!-- /.container -->
        <div class="container marketing mt-3">

            <!-- Three columns of text below the carousel -->
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-lg-4">
                        @if ($post->image === null)
                            <img src="/img/default.png" class="d-block rounded-circle shadow-4-strong"
                                alt="defaultimage" height="150" width="150" class="img img-responsive">
                        @else
                            <img src="/images/{{ $post->image }}" class="d-block rounded-circle shadow-4-strong"
                                alt="postimage" height="150" width="150" class="img img-responsive">
                        @endif
                        <h2>{{ $post->title }}</h2>
                        <p>{{ $post->description }}</p>
                        <h5>Categories</h5>
                        @foreach ($post->categories as $category)
                            {{ $category->name }}
                            @if (!$loop->last)
                                <br>
                            @endif
                        @endforeach
                        <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
                    </div><!-- /.col-lg-4 -->
                @endforeach
            </div><!-- /.row -->

            <!-- START THE FEATURETTES -->
            <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your
                            mind.</span></h2>
                    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta
                        felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce
                        dapibus, tellus ac cursus commodo.</p>
                </div>
                <div class="col-md-5">
                    <img src="/img/zipper8kw.jpg" class="d-block" alt="defaultimage" height="500"
                        width="500" class="img img-responsive">

                </div>
            </div>

            <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for
                            yourself.</span></h2>
                    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta
                        felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce
                        dapibus, tellus ac cursus commodo.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img src="/img/hyundaiwasher.jpg" class="d-block" alt="defaultimage" height="500"
                        width="500" class="img img-responsive">
                </div>
            </div>

            <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span>
                    </h2>
                    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta
                        felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce
                        dapibus, tellus ac cursus commodo.</p>
                </div>
                <div class="col-md-5">
                    <img src="/img/toolkit.jpg" class="d-block" alt="defaultimage" height="500"
                        width="500" class="img img-responsive">
                </div>
            </div>

            <hr class="featurette-divider">
            <!-- /END THE FEATURETTES -->
        </div><!-- FOOTER -->
        <footer class="container">
            <p class="float-right"><a href="#">Back to top</a></p>
            <p>© 2022 December OJT Project <a href="#">Privacy</a> · <a href="#">Terms</a></p>
        </footer>
    </main>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script>
        window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="/docs/4.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous">
    </script>
</body>
</html>
