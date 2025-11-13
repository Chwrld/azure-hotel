<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Azure Grand Hotel - Luxury Accommodation')</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <!-- Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    <!-- Tailwind Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            DEFAULT: '#1e40af',
                            foreground: '#ffffff',
                        },
                        secondary: {
                            DEFAULT: '#f59e0b',
                            foreground: '#ffffff',
                        },
                        background: '#ffffff',
                        foreground: '#0f172a',
                        muted: {
                            DEFAULT: '#f1f5f9',
                            foreground: '#64748b',
                        },
                        accent: {
                            DEFAULT: '#f59e0b',
                            foreground: '#ffffff',
                        },
                        border: '#e2e8f0',
                        card: '#ffffff',
                    }
                }
            }
        }
    </script>
    
    @stack('styles')
</head>
<body class="min-h-screen bg-background text-foreground">
    @yield('content')
    
    <!-- Toast Notification Container -->
    <div id="toast-container" class="fixed top-4 right-4 z-50 space-y-2"></div>
    
    <!-- Custom Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    
    @stack('scripts')
</body>
</html>
