<html>
<head>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    
</head>

<body>
    <div class="container">
        <main role="main">
            
            @hasSection('body')
                @yield('body')

            @endif

        </main>
    
    
    </div>



    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
    <script src=https://cloud.tinymce.com/stable/tinymce.min.js></script>
    <script>tinymce.init({ selector:'textarea' });</script>
</body>


</html>