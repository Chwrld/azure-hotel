@extends('layouts.app-new')

@section('title', '404 - Page Not Found')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-background to-muted/30">
    <div class="text-center px-4">
        <h1 class="text-9xl font-bold text-primary mb-4">404</h1>
        <h2 class="text-3xl font-bold mb-4">Page Not Found</h2>
        <p class="text-xl text-muted-foreground mb-8 max-w-md mx-auto">
            The page you're looking for doesn't exist or has been moved.
        </p>
        <a 
            href="/" 
            class="inline-flex items-center justify-center rounded-md text-lg px-8 py-4 bg-secondary text-secondary-foreground hover:bg-secondary/90 transition-colors"
        >
            Return to Home
        </a>
    </div>
</div>
@endsection
