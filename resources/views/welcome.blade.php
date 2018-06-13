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

<body class="flex items-center justify-center">
    <div class="card flex rounded">
        <!-- left -->
        <div class="card-left flex flex-col justify-between rounded p-6 items-center text-center text-white">
            <a href="#" class="card-skill color-inherit no-underline text-xs rounded-full py-2 px-6">PHP</a>
            <img class="h-16 w-16" src="https://laracasts.com/images/series/circles/testing-vue.png">
            <span class="card-difficulty text-xs">Intermediate Difficulty</span>
        </div>

        <!-- right -->
        <div class="card-right flex flex-col text-grey-darker p-6">
            <h3 class="card-title text-black font-light text-3xl mb-4">
                <a href="#" class="color-inherit no-underline">Testing Jargon</a>
            </h3>
            <p class="flex-1">
                There's no two ways about it: terminology in the testing world is incredibly overwhelming. Lets's fix that! Bit by bit, we'll
                break all these confusing concepts down as best we can.
            </p>

            <div class="card-meta flex text-sm">
                <div class="flex items-center mr-4">
                    <img class="h-3 w-3 mr-2" src="https://image.flaticon.com/icons/svg/182/182321.svg"> 5 Lessons
                </div>
                <div class="flex items-center mr-4">
                    <img class="h-3 w-3 mr-2" src="https://image.flaticon.com/icons/svg/149/149313.svg"> 53:10 min
                </div>
            </div>
        </div>
    </div>
</body>

</html>
