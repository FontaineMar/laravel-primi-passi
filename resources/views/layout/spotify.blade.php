<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
         <meta charset="utf-8">
        <title>music</title>
        <!-- LINK CSS -->
        <link rel="stylesheet" href="css/spotify/style.css">
    </head>
    <body>
        <header>
            <div class="container">
                <img src="css/spotify/img/download.png" alt="logo" />
            </div>
        </header>
        <main>
            <div class="cds-container container">
                @foreach ( $dbPhp['response'] as $cd)
                    <div class="cd">
                    <img src="{{ $cd['poster']}}" alt="">
                    <h3>{{$cd['title']}}</h3>
                    <span class="author">{{$cd['author']}}</span>
                    <span class="year">{{$cd['year']}}</span>
                </div> 
                @endforeach 
            </div>
       </main>
    </body>
</html>
