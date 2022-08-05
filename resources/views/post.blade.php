<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Post</title>
</head>

<body>
    <div class="container mx-auto">
        <section>
            <button class="bg-blue-600 hover:bg-blue-700 rounded p-2 mt-10  text-white">Go Back</button>

            <header class="underline mt-20 text-center">
                <h2 class="text-4xl">{{ $post->title }}</h2>
            </header>
            <div class="mt-4 mb-12 text-center">
                <h2>{{ $post->body }}</h2>
            </div>
        </section>

    </div>
</body>

</html>
