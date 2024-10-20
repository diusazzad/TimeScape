<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Attendance Management System</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Themesbrand" name="author" />
    @include('layouts.head')
    @vite('resources/css/app.css')
</head>

<body>
    <div id="wrapper">
        <x-admin.header />
        <x-admin.sidebar />
        <div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    <x-admin.settings />
                    @yield('content')
                </div>
            </div>
        </div>
        <x-admin.footer />
        <x-admin.footer-script />
    </div>
    <x-admin.flash />
</body>

</html>