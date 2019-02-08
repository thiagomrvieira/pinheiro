<!DOCTYPE html>
<html>
<head>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">

    <!-- include libraries(jQuery, bootstrap) -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 

    
    
</head>

<body>
    <div class="container">

        <main role="main">
            @component('component_Nav');
            @endcomponent

            @hasSection('body')
                @yield('body')

            @endif

        </main>
    
    
    </div>



    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>

    <!-- include summernote css/js -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>

    <script>
    $(document).ready(function() {
        $('textarea').summernote();
    });
  </script>

</body>


</html>