<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Our Services</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-800">
    <main class="max-w-5xl mx-auto px-4 py-12">
        <h1 class="text-3xl font-bold text-brand-blue mb-8">Our Services</h1>

        <div class="grid gap-6 md:grid-cols-3">
            @foreach ($services as $service)
                <div class="bg-white rounded-xl shadow p-6 border-t-4 border-brand-gold">
                    <h3 class="text-xl font-semibold">{{ $service->name }}</h3>
                    <p class="mt-2 text-gray-600">{{ $service->description }}</p>
                </div>
            @endforeach
        </div>
    </main>
</body>
</html>