<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SanberBook | Home</title>
</head>

<body>
    <!--Header Start-->
    <div class="header_container">
        <h1>Selamat Datang {{$name}}!</h1>
    </div>
    <!--Header End-->


    <div class="main_container">
        <h2>Terima kasih telah bergabung di SanberBook. Social Media kita bersama!</h2>
    </div>

    <script>
        document.addEventListener('keydown', (e) => {
            if (e.ctrlKey && e.keyCode === 13) window.open('/', "_self");
        });
    </script>
</body>

</html>