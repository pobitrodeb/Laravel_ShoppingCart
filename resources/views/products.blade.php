<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shooping Cart | www.pobitrodeb.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    {{-- ########## Header Section ############# --}}
    <div class="">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container">
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Active</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pobitro Deb </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Add To Cart</a>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
    {{-- ########## End Header Section ############# --}}
    <section class="py-5">
        <div class="container">
            <div class="row">
                @forelse ($products as $product)
                    <div class="col-md-4">
                        <div class="card m-3">
                            <img class="card-img-top" src="https://picsum.photos/200" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text">{{ $product->description }}</p>
                                <a href="#" class="btn btn-warning">Add To Cart </a>
                            </div>
                        </div>
                    </div>

                @empty
                @endforelse
            </div>

        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
