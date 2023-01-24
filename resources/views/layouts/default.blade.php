<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Larvel CRUD</title>

    {{-- stack untuk penerima, bpush untuk pengirim, fungsi yield untuk menyisipkan konten tinggal tambah add section --}}
    @stack('before-style')
    @include('includes.style')
    @stack('after-style')
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            @stack('before-content')
            @yield('content')
            @stack('after-content')
        </div>
    </div>
    @stack('before-script')
    @include('includes.script')
    @stack('after-script')
</body>

</html>
