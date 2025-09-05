<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? ($blog_name ?? 'Mylarablog Site')}}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
      
<style>
@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-20px); }
}

.animation-delay-300 {
    animation-delay: 300ms;
}

.animation-delay-700 {
    animation-delay: 700ms;
}

.animate-float {
    animation: float 3s ease-in-out infinite;
}
</style>
    </style>
</head>
<body>
      @include('client.includes.landing.navbar')
    @yield('content')
    <main>
      
    </main>
    @yield('scripts')
    <script>
      
    </script>
    @include('client.includes.landing.footer')
</body>
</html>