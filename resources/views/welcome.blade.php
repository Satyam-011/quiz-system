<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz System Portal</title>
    <!-- Tailwind Play CDN for quick setup without compiling -->
    @vite('resources/css/app.css')

</head>
<body class="bg-gradient-to-br from-slate-900 via-indigo-950 to-slate-900 min-h-screen text-slate-100 flex items-center justify-center font-sans antialiased">

    <!-- Card Container -->
    <div class="max-w-md w-full mx-4 bg-slate-900/60 backdrop-blur-md p-8 rounded-2xl border border-slate-800 shadow-2xl flex flex-col items-center text-center">

        <!-- App Icon Placeholder -->
        <div class="w-16 h-16 bg-indigo-600 rounded-2xl flex items-center justify-center shadow-lg shadow-indigo-500/30 mb-6">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://w3.org">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
            </svg>
        </div>

        <!-- Project Titles -->
        <h1 class="text-3xl font-extrabold tracking-tight bg-gradient-to-r from-indigo-400 via-purple-400 to-pink-400 bg-clip-text text-transparent capitalize">
            {{ $projectName }}
        </h1>

        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold bg-indigo-500/10 text-indigo-400 border border-indigo-500/20 mt-2 mb-4">
            v{{ $version }}
        </span>

        <!-- Description -->
        <p class="text-slate-400 text-sm leading-relaxed mb-8 max-w-sm">
            {{ $description }}
        </p>

        <!-- Dynamic Action Buttons -->
        <div class="w-full space-y-3">
            <a href="/admin-login" class="block w-full text-center bg-indigo-600 hover:bg-indigo-500 active:scale-[0.98] transition-all text-white font-medium py-3 px-4 rounded-xl shadow-lg shadow-indigo-600/20">
                Go to Admin Portal
            </a>

            <a href="#explore" class="block w-full text-center bg-slate-800/80 hover:bg-slate-800 border border-slate-700/60 active:scale-[0.98] transition-all text-slate-300 font-medium py-3 px-4 rounded-xl">
                Take a Quiz
            </a>
        </div>

    </div>

</body>
</html>
