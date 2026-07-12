<!DOCTYPE html>
<html lang="en">

    <head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background:#f4f4f4;
        }

        .navbar {
            background:white;
            box-shadow:0 2px 10px rgba(0,0,0,.08);
            margin-bottom:30px;
        }

        .nav-link {
            color: #212529;
            font-weight: 500;
            text-decoration: none;
            position: relative;
            transition: .3s;
        }

        .nav-link:hover {
            color: #0d6efd;
        }


        .news-card {
            transition:.3s;
        }

        .news-card:hover {
            transform:translateY(-4px);
        }
    </style>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand fw-bold text-primary" href="/posts">
                    Portal - Kabar Burung
                </a>

                <div class="mx-auto">
                    <a href="#" class="nav-link d-inline mx-3">
                        Beranda
                    </a>

                    <a href="#" class="nav-link d-inline mx-3">
                        Tentang
                    </a>

                    <a href="#" class="nav-link d-inline mx-3">
                        Kontak
                    </a>
                </div>

                <form class="d-flex">
                    <input class="form-control"
                        type="search"
                        placeholder="Cari berita...">
                    <button class="btn btn-primary ms-2">
                        Cari
                    </button>
                </form>
            </div>
        </nav> 

        <div class="container">
        @yield('body')
        </div>
    </body>
</html>