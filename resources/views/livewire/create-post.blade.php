<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Google Maps Multiple Markers Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <style type="text/css">
        #map {
          height: 400px;
        }
    </style>
    @livewireStyles
</head>

<body>
    <div class="container mt-5">
        <h2>Laravel Google Maps Multiple Markers Example</h2>
        <div id="map"></div>
    </div>
    
    <livewire:create-post />
    
    @livewireScripts
</body>
</html>
