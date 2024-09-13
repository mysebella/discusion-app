<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <main class="w-full lg:w-2/4 m-auto p-4 ">
        <form class="mb-4" action="/posting" method="POST">
            @csrf
            <textarea name="caption" class="w-full rounded-lg p-4">Input sesukamu</textarea>
            <button class="bg-blue-400 w-full p-4 rounded-lg text-white">Kirim</button>
        </form>

        <div>
            @foreach ($posts as $post)
                <div class="w-full bg-gray-100 rounded p-4 mb-4">
                    <p>di upload pada : {{ $post->created_at }}</p>
                    <p class="text-lg">{{ $post->caption }}</p>
                </div>
            @endforeach
        </div>
    </main>
</body>

</html>
