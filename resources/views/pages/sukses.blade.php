<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sukses</title>

    <!-- google fonts -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Assistant:wght@200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>

    <!-- css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="{{ url('frontend/styles/main.css') }}">
</head>

<body>

    <main>
        <div class="sukses d-flex align-items-center">
            <div class="col text-center">
                <img src="{{ url('frontend/images/icon/checklist.png') }}" alt="" />
                <h1>Yay! Success</h1>
                <p>
                    Peminjaman sedang diproses <br />
                    Silahkan cek di halaman MyBook !
                </p>
                <a href="{{ route('dashboard') }}" class="btn btn-homepage mt-3 px-5">
                    Home Page
                </a>
            </div>
        </div>
    </main>

    <!-- script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
