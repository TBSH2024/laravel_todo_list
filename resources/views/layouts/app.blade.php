<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title')</title>
  </head>
  <body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 pt-16">
      <!-- header -->
      @isset($header)
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
      @endisset
      <!-- Page Content -->
      <main>
        @yield('content')
      </main>
    </div>
  </body>
</html>