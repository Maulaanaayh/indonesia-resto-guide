@include('components.head')
<body>
    @include('components.navbar')
    <div class="wrapper">
        <div id="content">
            @yield('content')
        </div>
    </div>
    @include('components.footer')
</div>
    @include('components.script')
</body>