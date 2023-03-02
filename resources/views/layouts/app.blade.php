<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"> --}}
    <link href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>

    
    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>

<body>
    <div id="app">

        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
                    <div class="col-2">
                        <div class="logo">
                            <svg xmlns="http://www.w3.org/2000/svg" width="2500" height="2500" viewBox="0 0 192.756 192.756"><g fill-rule="evenodd" clip-rule="evenodd"><path fill="#fff" d="M0 0h192.756v192.756H0V0z"/><path d="M126.859 90.375c4.562 0 6.705 3.016 6.705 6.903 0 3.889-2.143 6.904-6.705 6.904s-6.705-3.016-6.705-6.904c0-3.887 2.143-6.903 6.705-6.903zm.002-2.481c-8.922 0-11.441 4.618-11.441 9.446s2.52 9.446 11.441 9.446 11.439-4.618 11.439-9.446-2.517-9.446-11.439-9.446z"/><path d="M128.293 88.797c.852 3.875 1.275 5.814 1.275 5.814l5.672 1.275c3.783.852 5.674 1.276 5.674 1.276l-5.674 1.277-5.672 1.275-1.275 5.673c-.852 3.781-1.275 5.673-1.275 5.673s-.428-1.892-1.277-5.673l-1.275-5.673-5.814-1.275-5.814-1.277 5.814-1.276c3.875-.851 5.814-1.275 5.814-1.275-.002 0 .426-1.939 1.275-5.814.85-3.877 1.277-5.814 1.277-5.814s.423 1.937 1.275 5.814z" stroke="#000" stroke-width=".291" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="2.613"/><path d="M88.147 83.276v5.353h6.262v3.358h-6.262v8.188c0 1.924.805 2.973 2.834 2.973 1.155 0 2.555-.104 3.289-.314v3.359c-1.435.174-3.044.314-4.514.314-5.318 0-6.927-1.714-6.927-5.843v-8.677h-4.898v-3.358h4.898v-3.743l5.318-1.61zM102.162 91.987h-4.547v-3.358h4.547v-1.504c0-4.689 2.484-6.403 7.523-6.403 1.467 0 3.287.07 4.547.21v3.289c-.666-.034-1.574-.14-2.414-.14-3.533 0-4.338 1.155-4.338 4.024v.524h5.457v3.358h-5.457v14.205h-5.318V91.987zM141.676 80.932h5.318v25.26h-5.318v-25.26zM152.031 88.629h5.318v17.563h-5.318V88.629zm-.281-7.697h5.877v4.269h-5.877v-4.269zM172.811 91.323c4.025 0 5.914 2.658 5.914 6.087s-1.889 6.088-5.914 6.088c-4.021 0-5.91-2.659-5.91-6.088s1.888-6.087 5.91-6.087zm0-3.359c-8.92 0-11.439 4.618-11.439 9.446 0 4.828 2.52 9.446 11.439 9.446 8.924 0 11.441-4.618 11.441-9.446 0-4.828-2.518-9.446-11.441-9.446zM14.544 97.41c0-3.324 2.24-6.087 5.598-6.087s5.598 2.763 5.598 6.087c0 3.323-2.239 6.088-5.598 6.088s-5.598-2.765-5.598-6.088zm-5.318 15.499h5.318v-9.131h.07c1.75 2.378 4.548 3.078 7.173 3.078 3.429 0 9.481-1.715 9.481-9.586 0-4.969-3.185-9.307-9.691-9.307-2.799 0-5.668.805-7.173 3.079h-.069c0-.805-.07-1.609-.141-2.414H9.086c.07.979.14 2.694.14 4.128v20.153zM45.717 91.323c4.023 0 5.913 2.658 5.913 6.087s-1.889 6.088-5.913 6.088-5.913-2.659-5.913-6.088 1.889-6.087 5.913-6.087zm0-3.359c-8.922 0-11.44 4.618-11.44 9.446 0 4.828 2.519 9.446 11.44 9.446s11.44-4.618 11.44-9.446c.001-4.828-2.519-9.446-11.44-9.446zM60.459 93.038c0-1.68-.069-3.219-.139-4.409h5.108c.069 1.085.14 2.134.14 3.219h.07c.525-1.189 1.715-3.569 5.809-3.569 1.119 0 2.169.106 3.428.351v3.989c-.315-.07-.7-.105-1.12-.141-.385-.035-.84-.07-1.365-.07-4.302 0-6.612 1.855-6.612 6.683v7.103H60.46V93.038h-.001z"/><path d="M126.275 89.5c4.562 0 6.705 3.016 6.705 6.904 0 3.889-2.143 6.903-6.705 6.903s-6.703-3.015-6.703-6.903c0-3.888 2.141-6.904 6.703-6.904zm.002-2.481c-8.922 0-11.439 4.618-11.439 9.446s2.518 9.446 11.439 9.446 11.439-4.618 11.439-9.446-2.517-9.446-11.439-9.446z" fill="#284890"/><path d="M127.709 87.922l1.277 5.813 5.672 1.277c3.781.851 5.672 1.275 5.672 1.275s-1.891.427-5.672 1.277c-3.781.852-5.672 1.276-5.672 1.276l-1.277 5.672c-.852 3.782-1.275 5.673-1.275 5.673l-1.275-5.673-1.277-5.672-5.814-1.276-5.814-1.277 5.814-1.275 5.814-1.277 1.277-5.813 1.275-5.815s.423 1.94 1.275 5.815z" fill="#6e79b1" stroke="#000" stroke-width=".211" stroke-linecap="square" stroke-linejoin="round" stroke-miterlimit="2.613"/><path d="M126.469 89.233v-7.09a34859.508 34859.508 0 0 0 2.552 11.627s-.426.425-1.275 1.277l-1.277 1.276v-7.09zM133.559 96.324h7.09s-1.938.427-5.812 1.276l-5.814 1.275-1.275-1.275-1.277-1.276h7.088zM126.469 103.414v7.091l-1.277-5.813-1.275-5.815 1.275-1.275 1.277-1.276v7.088zM119.379 96.324h-7.09l5.812-1.276 5.814-1.277s.426.425 1.275 1.277l1.277 1.276h-7.088z" fill="#fff"/><path d="M13.961 96.535c0-3.324 2.238-6.087 5.598-6.087 3.358 0 5.599 2.763 5.599 6.087s-2.24 6.088-5.599 6.088-5.598-2.764-5.598-6.088zm-5.318 15.499h5.318v-9.131h.07c1.749 2.379 4.548 3.079 7.171 3.079 3.429 0 9.482-1.714 9.482-9.587 0-4.968-3.184-9.306-9.691-9.306-2.799 0-5.667.805-7.172 3.078h-.07c0-.805-.07-1.609-.14-2.414H8.504c.069.98.139 2.694.139 4.128v20.153zM45.133 90.448c4.023 0 5.913 2.659 5.913 6.087 0 3.43-1.89 6.088-5.913 6.088s-5.913-2.658-5.913-6.088c.001-3.428 1.89-6.087 5.913-6.087zm0-3.358c-8.921 0-11.44 4.618-11.44 9.445 0 4.829 2.519 9.447 11.44 9.447 8.922 0 11.441-4.618 11.441-9.447 0-4.827-2.519-9.445-11.441-9.445zM59.876 92.163c0-1.679-.07-3.219-.14-4.409h5.108c.069 1.084.14 2.135.14 3.219h.07c.524-1.189 1.714-3.568 5.807-3.568 1.121 0 2.17.105 3.43.35v3.989c-.316-.071-.7-.105-1.121-.141a14.717 14.717 0 0 0-1.364-.069c-4.304 0-6.612 1.854-6.612 6.682v7.103h-5.318V92.163zM87.565 82.401v5.353h6.262v3.359h-6.262V99.3c0 1.924.804 2.975 2.833 2.975 1.154 0 2.554-.105 3.289-.316v3.359c-1.435.175-3.044.314-4.514.314-5.317 0-6.926-1.714-6.926-5.843v-8.676h-4.898v-3.359h4.898v-3.743l5.318-1.61zM101.578 91.113h-4.547v-3.359h4.547V86.25c0-4.688 2.484-6.403 7.523-6.403 1.469 0 3.289.07 4.547.21v3.289c-.664-.035-1.572-.14-2.414-.14-3.533 0-4.338 1.154-4.338 4.023v.524h5.457v3.359h-5.457v14.204h-5.318V91.113zM141.092 80.057h5.318v25.26h-5.318v-25.26zM151.447 87.754h5.318v17.563h-5.318V87.754zm-.279-7.697h5.879v4.268h-5.879v-4.268zM172.229 90.448c4.025 0 5.914 2.659 5.914 6.087 0 3.43-1.889 6.088-5.914 6.088-4.023 0-5.912-2.658-5.912-6.088-.001-3.428 1.888-6.087 5.912-6.087zm0-3.358c-8.922 0-11.439 4.618-11.439 9.445 0 4.829 2.518 9.447 11.439 9.447s11.441-4.618 11.441-9.447c0-4.827-2.52-9.445-11.441-9.445z" fill="#284890"/></g></svg>
                         </div>
                    </div>
                    {{-- config('app.name', 'Laravel') --}}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse nav-custom  navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto d-flex align-items-center">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{url('/') }}">{{ __('Home') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/admin/projects') }}">{{ __('Projects') }}</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url('/') }}">{{__('Home')}}</a>
                                <a class="dropdown-item" href="{{ url('profile') }}">{{__('Profile')}}</a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="">
            @yield('content')
        </main>
        @yield('script')
    </div>
</body>

</html>
