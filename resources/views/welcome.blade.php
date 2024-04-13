<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .flex-style{
            }
            .inline-style{
                margin: 5px; 
                display:inline-block; 
                padding: 8px;
                border: 1px solid #d1d1d1;
                border-radius:10px
            }  
            
        </style>
    </head>
    <body class="antialiased">
         <div class="flex-style">
            <div class="inline-style">
               @include('areachart')
             </div>   
             <div class="inline-style">
               @include('piedonout')
             </div>
             
             <div class="inline-style">
               @include('smoothline')
             </div>

             <div class="inline-style">
               @include('smoothlineblue')
             </div>

            <div class="inline-style">
               @include('linechart')
             </div>

            
          </div>
    </body>
</html>
