<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CSS For Backend Devs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" media="screen" href="css/app.css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="container mx-auto">
    <div class="border-b py-8">
        <h1 class="mb-4 text-grey-dark text-sm font-bold tracking-wide uppercase">Instant Navigation</h1>
        <nav class="bg-blue-lightest py-4 px-4 flex justify-between">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Mission</a>
            <a href="#">Contact</a>
        </nav>
    </div>

    <div class="border-b py-8">
        <h1 class="mb-4 text-grey-dark text-sm font-bold tracking-wide uppercase">Split Nav</h1>
        <nav class="bg-blue-lightest py-4 px-4 flex justify-between">
            <div>
                <a href="#">Home</a>
                <a href="#">About</a>
            </div>
            <div>
                <a href="#">Mission</a>
                <a href="#">Contact</a>
            </div>
        </nav>
    </div>

    <div class="border-b py-8">
        <h1 class="mb-4 text-grey-dark text-sm font-bold tracking-wide uppercase">Align Image with Text</h1>
        <div class="flex items-center">
            <img src="http://via.placeholder.com/350x150" class="mr-4">
            <div>
                <h3 class="mb-4">My Trip To...</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
            </div>
        </div>
    </div>

    <div class="border-b py-8">
        <h1 class="mb-4 text-grey-dark text-sm font-bold tracking-wide uppercase">Perfectly Centered Text</h1>
        <div class="bg-grey-light p-6 w-64 h-64 flex items-center justify-center">
            <div class="">
                <h3 class="mb-4">Flexbox is Amazing</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
            </div>
        </div>

    <div class="border-b py-8">
        <h1 class="mb-4 text-grey-dark text-sm font-bold tracking-wide uppercase">Sticky Footer</h1>
        <a href="/sticky" class="no-underline color-black">Sticky Footer</a>
    </div>
</body>

</html>
