<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Live Weather</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Live Weather
                </div>
                <div id="vueId">
                    <h1>City: @{{info.name}}, @{{info.sys.country}}</h1>
                    <h2>Weather report</h2>
                    <h3> @{{info.main.temp}} &#8451;</h3>
                    <h4>@{{info.current}}</h4>
                    <p><strong>Feels Like @{{info.main.feels_like}} &#8451;</strong>. @{{info.weather[0].main}}. @{{info.weather[0].description}}.</p>
                    <p>Pressure: @{{info.main.pressure}} hpa</p>
                    <p>Humidity: @{{info.main.humidity}} % </p>
                    <p>Visibility: @{{info.visibility}}m </p>
                    <p>Sun Rise: @{{info.sunrise}} </p>
                    <p>Sun Set: @{{info.sunset}} </p>
                </div>           
            </div>
        </div>
    </body>
</html>
