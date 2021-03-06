<!doctype html>
<html lang="en">
    <head>
    <meata charset="UTF-8">
        
        <title>allison :: fb-ad-manager</title>
        
        <!-- Select2 https://select2.github.io/ -->
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
        
        
        <!-- Bootstrap -->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        
        <!-- Font awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        
        
    </head>
    <body style="margin-top:60px">
        <?php
            
        //$w = new Fb_AdWizard();
        //$w->getCurrentModule();
        ?>
        
        
        <div class="container">
            @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            @endif
            
           
                
<!--            <button type='buuton' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <div class='alert alert-success'>{{ Session::get('success') }}</div>-->

                <div class="flash-message">
                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                    @if(Session::has('alert-' . $msg))

                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                    @endif
                @endforeach
                </div>
                  
          
            
            @yield('steps-menu')
        
            @yield('content')
        </div>
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
       
        @yield('footer')
        
        
        @yield('scripts')
    </body>
</html>                                                                                     