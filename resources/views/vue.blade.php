<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Vue</title>

        <!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
		<link rel="stylesheet" href="{{ asset('css/app.css') }}">
		<script src="{{ asset('js/app.js') }}" defer></script>

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
				<div id="app">
				<vue-component :data="{{json_encode($array)}}"></vue-component>
					<br>
				<vue-json-component data-id="2"></vue-json-component>
				</div>
            </div>
        </div>
    </body>
</html>
