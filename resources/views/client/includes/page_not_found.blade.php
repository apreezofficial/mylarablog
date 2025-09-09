@extends('master')

@section('content')
<div class="min-h-screen bg-gray-900 flex items-center justify-center px-4 py-12">
    <div class="max-w-lg mx-auto text-center">
        {{-- 404 Icon Container --}}
        <div class="mx-auto mb-8 w-32 h-32 bg-gradient-to-br from-red-500 to-orange-500 rounded-full flex items-center justify-center shadow-2xl">
            <svg class="w-16 h-16 text-white animate-bounce" fill="currentColor" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg">
                <path d="M18,2A16,16,0,1,0,34,18,16,16,0,0,0,18,2Zm0,30A14,14,0,1,1,32,18,14,14,0,0,1,18,32Z" class="opacity-80"></path>
                <circle cx="25.16" cy="14.28" r="1.8"></circle>
                <circle cx="11.41" cy="14.28" r="1.8"></circle>
                <path d="M18.16,20a9,9,0,0,0-7.33,3.78,1,1,0,1,0,1.63,1.16,7,7,0,0,1,11.31-.13,1,1,0,0,0,1.6-1.2A9,9,0,0,0,18.16,20Z"></path>
            </svg>
        </div>

        {{-- Error Code --}}
        <div class="mb-6">
            <h1 class="text-9xl font-bold bg-gradient-to-r from-red-500 to-orange-500 bg-clip-text text-transparent mb-2">
                404
            </h1>
            <div class="h-1 w-24 bg-gradient-to-r from-red-500 to-orange-500 mx-auto rounded-full"></div>
        </div>

        {{-- Error Message --}}
        <div class="mb-8">
            <h2 class="text-2xl font-semibold text-white mb-4">
                Oops! Page Not Found
            </h2>
            <p class="text-gray-400 text-lg mb-4">
                The page you're looking for seems to have vanished into the digital void.
            </p>
            @if(isset($path))
            <div class="bg-gray-800 border border-gray-700 rounded-lg p-4 mb-6">
                <p class="text-gray-300 text-sm mb-2">Requested path:</p>
                <code class="text-red-400 bg-gray-900 px-3 py-1 rounded font-mono text-sm break-all">
                    {{ $path }}
                </code>
            </div>
            @endif
        </div>

        {{-- Action Buttons --}}
        <div class="space-y-4 sm:space-y-0 sm:space-x-4 sm:flex sm:justify-center">
            <button 
                onclick="window.history.back()" 
                class="w-full sm:w-auto bg-gradient-to-r from-red-500 to-orange-500 hover:from-red-600 hover:to-orange-600 text-white font-semibold py-3 px-6 rounded-lg shadow-lg transform transition-all duration-200 hover:scale-105 focus:outline-none focus:ring-4 focus:ring-red-500/50"
            >
                <svg class="w-5 h-5 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Go Back
            </button>
            
            <a 
                href="{{ route('home') ?? '/' }}" 
                class="w-full sm:w-auto bg-gray-800 hover:bg-gray-700 border border-gray-600 text-white font-semibold py-3 px-6 rounded-lg shadow-lg transform transition-all duration-200 hover:scale-105 focus:outline-none focus:ring-4 focus:ring-gray-500/50 inline-block text-center"
            >
                <svg class="w-5 h-5 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                </svg>
                Go Home
            </a>
        </div>
    </div>
</div>

<div class="fixed inset-0 overflow-hidden pointer-events-none">
    <div class="absolute top-1/4 left-1/4 w-2 h-2 bg-red-500 rounded-full opacity-20 animate-pulse"></div>
    <div class="absolute top-1/3 right-1/4 w-1 h-1 bg-orange-500 rounded-full opacity-30 animate-ping"></div>
    <div class="absolute bottom-1/4 left-1/3 w-1.5 h-1.5 bg-red-400 rounded-full opacity-25 animate-pulse animation-delay-300"></div>
    <div class="absolute bottom-1/3 right-1/3 w-1 h-1 bg-orange-400 rounded-full opacity-20 animate-ping animation-delay-700"></div>
</div>
@endsection