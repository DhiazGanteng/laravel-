<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{$title ?? 'Laravel App'}}</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
    @vite('resources/css/app.css')
</head>
<body>
<div class="min-h-full">
    <x-nav-bar></x-nav-bar>

    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            {{$slot}}
        </div>
    </main>
</div>
</body>
</html>
