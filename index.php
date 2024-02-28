<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotify Json-PHP</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous'/>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div id="app">

        <header>
            <figure>
                <img src="./1200px-Spotify.png" alt="">
            </figure>
        </header>
        <main>
            <div class="container d-flex flex-wrap gap-3 p-5">
                <div v-for="(element, index) in library" :key="index" class="disc">
                    <figure>
                        <img :src="element.poster" alt="">
                    </figure>

                    <strong>{{element.title}}</strong>

                    <small>{{element.author}}</small>

                    <strong>{{element.year}}</strong>

                </div>

            </div>

        </main>
    </div>

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="./main.js"></script>
    
</body>
</html>