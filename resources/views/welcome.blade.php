<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>homepage</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://fonts.cdnfonts.com/css/akira-expanded" rel="stylesheet">
        <style>.txt{font-family: 'Akira Expanded', sans-serif;}</style>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="antialiased bg-gray-200">

        <!-- login knop -->
        <a href="{{ route('azure.login') }}" class="flex h-screen items-center justify-center ">
            <div class="image">
                <img height="75px" width="75px" src="https://cdn.discordapp.com/attachments/1148578717828907049/1169263696640487454/key.png?ex=6554c4ad&is=65424fad&hm=6e694aac0c53acd9a159b9886a156a95cddbf8132e53d36fa935f2aa1c0f0fb3&" alt="">
            </div>
            <div class="streep"></div>
            <div class="text">
                <div class="login txt text-5xl">login</div>
                <div class="flex items-center justify-center">
                    <img height="25px" width="25px" src="https://cdn.discordapp.com/attachments/1148578717828907049/1169263695654821928/Azure.png?ex=6554c4ac&is=65424fac&hm=9536f9127afdcdcd7e50747d21ba1e8a3bc464f0a17ed2c07d63cc332f306dc9&" alt="">
                    <div class="azure txt text-sm">with azure</div>
                </div>
            </div>
        </a>
        <!-- login knop eind -->

        <!-- hierzo moet homepage komen -->
        <!-- sidebar -->
        <!-- searchbar -->
        <!-- hier moeten de logs komen zet die neer met dummy text -->

    </body>
</html>
