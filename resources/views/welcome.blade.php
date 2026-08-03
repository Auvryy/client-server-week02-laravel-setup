<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal - ITST 302</title>
    <!-- Tailwind CSS CDN for styling -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-slate-900 via-purple-950 to-slate-900 text-slate-100 min-h-screen flex items-center justify-center p-6">

    <div class="max-w-md w-full bg-slate-900/80 backdrop-blur-xl border border-slate-700/50 rounded-2xl shadow-2xl overflow-hidden p-8">

        <!-- Header / Branding -->
        <div class="text-center mb-8">
            <span class="px-3 py-1 text-xs font-semibold tracking-wider text-indigo-400 bg-indigo-950/60 border border-indigo-800/50 rounded-full uppercase">
                ITST 302 Portfolio
            </span>
            <h1 class="text-3xl font-extrabold mt-4 tracking-tight text-white">Student Profile</h1>
            <p class="text-sm text-slate-300 mt-1">Laravel Project Homepage</p>
        </div>

        <!-- Student Details Card Grid -->
        <div class="space-y-4">
            <div class="flex items-center justify-between p-3.5 bg-slate-800/50 border border-slate-700/40 rounded-xl hover:bg-slate-800 transition">
                <span class="text-sm font-medium text-slate-400">Student Name</span>
                <span class="text-sm font-semibold text-white">Andy Sarne</span>
            </div>

            <div class="flex items-center justify-between p-3.5 bg-slate-800/50 border border-slate-700/40 rounded-xl hover:bg-slate-800 transition">
                <span class="text-sm font-medium text-slate-400">Student Number</span>
                <span class="text-sm font-semibold text-indigo-300 font-mono">0124-0444</span>
            </div>

            <div class="flex items-center justify-between p-3.5 bg-slate-800/50 border border-slate-700/40 rounded-xl hover:bg-slate-800 transition">
                <span class="text-sm font-medium text-slate-400">Course</span>
                <span class="text-sm font-semibold text-white">BSIT</span>
            </div>

            <div class="flex items-center justify-between p-3.5 bg-slate-800/50 border border-slate-700/40 rounded-xl hover:bg-slate-800 transition">
                <span class="text-sm font-medium text-slate-400">Section</span>
                <span class="text-sm font-semibold text-white">BSIT 3D</span>
            </div>

            <div class="flex items-center justify-between p-3.5 bg-slate-800/50 border border-slate-700/40 rounded-xl hover:bg-slate-800 transition">
                <span class="text-sm font-medium text-slate-400">Subject</span>
                <span class="text-sm font-semibold text-white">ITST 302</span>
            </div>

            <div class="flex items-center justify-between p-3.5 bg-slate-800/50 border border-slate-700/40 rounded-xl hover:bg-slate-800 transition">
                <span class="text-sm font-medium text-slate-400">Current Date</span>
                <span class="text-sm font-semibold text-emerald-400 font-mono">{{ date('F j, Y') }}</span>
            </div>
        </div>

        <!-- Footer -->
        <div class="mt-8 text-center text-xs text-slate-500 border-t border-slate-800 pt-4">
            Powered by Laravel &bull; Arch Linux Environment
        </div>

    </div>

</body>
</html>
