<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Andy Sarne - ITST 302</title>
    <!-- Tailwind CSS CDN for styling -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .font-display { font-family: 'Space Grotesk', sans-serif; }
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-14px); }
        }
        .animate-float { animation: float 6s ease-in-out infinite; }
        .animate-float-slow { animation: float 9s ease-in-out infinite; }
    </style>
</head>
<body class="bg-slate-950 text-slate-100 min-h-screen overflow-x-hidden">

    <!-- Background glow blobs -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-40 -left-40 w-96 h-96 bg-indigo-600/30 rounded-full blur-3xl animate-float"></div>
        <div class="absolute top-1/3 -right-32 w-96 h-96 bg-fuchsia-600/20 rounded-full blur-3xl animate-float-slow"></div>
        <div class="absolute bottom-0 left-1/4 w-96 h-96 bg-emerald-500/10 rounded-full blur-3xl animate-float"></div>
    </div>

    <div class="relative max-w-5xl mx-auto px-6 py-16">

        <!-- Top nav / badge bar -->
        <div class="flex items-center justify-between mb-20">
            <div class="flex items-center gap-2">
                <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-indigo-500 to-fuchsia-500 flex items-center justify-center font-bold text-sm">AS</div>
                <span class="text-sm font-medium text-slate-400">Student Portfolio</span>
            </div>
            <span class="px-3 py-1 text-xs font-semibold tracking-wider text-indigo-300 bg-indigo-500/10 border border-indigo-500/30 rounded-full uppercase">
                ITST 302 &bull; Laravel
            </span>
        </div>

        <!-- Hero -->
        <div class="text-center mb-24">
            <p class="text-sm font-medium text-emerald-400 mb-4 tracking-wide uppercase">Available &bull; {{ date('F j, Y') }}</p>
            <h1 class="font-display text-6xl md:text-7xl font-bold tracking-tight mb-4">
                Andy Sarne
            </h1>
            <p class="text-lg md:text-xl text-slate-400 max-w-xl mx-auto leading-relaxed">
                BSIT student building full-stack web applications with
                <span class="text-indigo-300">Laravel</span>,
                <span class="text-fuchsia-300">PHP</span>, and
                <span class="text-emerald-300">modern tooling</span>.
            </p>
        </div>

        <!-- Credentials grid -->
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-16">
            <div class="col-span-2 md:col-span-1 bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-6 hover:border-indigo-500/40 hover:bg-white/[0.07] transition">
                <p class="text-xs font-medium text-slate-500 uppercase tracking-wider mb-2">Student Number</p>
                <p class="text-xl font-mono font-semibold text-indigo-300">0124-0444</p>
            </div>
            <div class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-6 hover:border-fuchsia-500/40 hover:bg-white/[0.07] transition">
                <p class="text-xs font-medium text-slate-500 uppercase tracking-wider mb-2">Course</p>
                <p class="text-xl font-semibold">BSIT</p>
            </div>
            <div class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-6 hover:border-emerald-500/40 hover:bg-white/[0.07] transition">
                <p class="text-xs font-medium text-slate-500 uppercase tracking-wider mb-2">Section</p>
                <p class="text-xl font-semibold">BSIT 3D</p>
            </div>
            <div class="col-span-2 md:col-span-3 bg-gradient-to-r from-indigo-500/10 via-fuchsia-500/10 to-transparent backdrop-blur-xl border border-white/10 rounded-2xl p-6 flex items-center justify-between hover:border-white/20 transition">
                <div>
                    <p class="text-xs font-medium text-slate-500 uppercase tracking-wider mb-2">Subject</p>
                    <p class="text-xl font-semibold">ITST 302 &mdash; Client-Server Technologies</p>
                </div>
                <div class="hidden md:flex w-12 h-12 rounded-full bg-white/10 items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-indigo-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25" />
                    </svg>
                </div>
            </div>
        </div>

        <!-- Stack strip -->
        <div class="flex flex-wrap items-center justify-center gap-3 mb-16">
            @foreach (['Laravel 13', 'PHP 8.5', 'Tailwind CSS', 'SQLite', 'MariaDB', 'Arch Linux'] as $tech)
                <span class="px-4 py-1.5 text-sm font-medium text-slate-300 bg-white/5 border border-white/10 rounded-full">
                    {{ $tech }}
                </span>
            @endforeach
        </div>

        <!-- Footer -->
        <div class="text-center text-xs text-slate-600 border-t border-white/5 pt-8">
            Powered by Laravel &bull; Deployed on Arch Linux &bull; {{ date('Y') }}
        </div>

    </div>
</body>
</html>
