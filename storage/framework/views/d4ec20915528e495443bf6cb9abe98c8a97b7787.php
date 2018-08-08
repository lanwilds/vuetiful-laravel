<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Vuetiful Laravel App</title>

        <!-- Icons -->
        <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet" type="text/css">
        
       
    </head>
    <body>
        <div id="app">
            <App/>
        </div>
    </body>
    <script type="text/javascript" src="<?php echo e(asset('js/app.js')); ?>"></script>
</html>
