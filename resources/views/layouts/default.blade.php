<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>.::Landing Page::.</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
</head>
<body>
 
<div class="container">
    @yield('content')
</div>
		{!! Html::script('js/jquery-2.1.0.min.js') !!}
		 @yield('scripts')
</body>

</html>