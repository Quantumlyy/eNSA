<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <h1 class="text-center text-lg text-blue-600 font-extrabold">Znamenja kitajskega horoskopa</h1>
    <div class="container mx-auto">
        <div class="grid grid-cols-3 gap-4">
            <?php
                $files = array_diff(scandir("./kitajski-horoskop"), array('.', '..'));
                foreach ($files as $file) {
                    echo "<div class=\"mx-auto\">";
                    echo "<img src=\"" . "./kitajski-horoskop/" . $file ."\" />";
                    echo "20" . substr($file, 1, -4);
                    echo "</div>";
                }
            ?>
        </div>
    </div>
</body>

</html>