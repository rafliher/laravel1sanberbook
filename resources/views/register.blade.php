<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SanberBook | Sign Up</title>
    <style>
        form * {
            display: block;
            width: 200px;
            box-sizing: border-box;
        }
        
        form textarea {
            height: 150px;
            width: 250px;
        }
        
        span * {
            width: min-content;
            display: inline;
        }
        
        form .submit {
            width: min-content;
        }
    </style>
</head>

<body>
    <!--Header Start-->
    <div class="header_container">
        <h1>Buat Account Baru!</h1>
    </div>
    <!--Header End-->

    <div class="main_container">
        <!--SignUp Form Start-->
        <div class="signup_form_container">
            <h3>Sign Up Form</h3>
            <form action='/welcome' method="post">
                @csrf

                <p>First Name:</p>
                <input type="text" name="first_name" required>
                <p>Last Name:</p>
                <input type="text" name="last_name" required>

                <p>Gender</p>
                <span><input type="radio" name="gender" value="male">Male</span>
                <span><input type="radio" name="gender" value="female">Female</span>
                <span><input type="radio" name="gender" value="other">Other</span>

                <p>Nationality</p>
                <select name="natiolity" required>
                    <option>--Select your nationality--</option>
                    <option value="id">Indonesia</option>
                    <option value="ko">Konoha</option>
                    <option value="na">Namek</option>
                </select>

                <p>Language Spoken:</p>
                <span><input type="checkbox" name="language" value="0">Bahasa Indonesia</span>
                <span><input type="checkbox" name="language" value="1">English</span>
                <span><input type="checkbox" name="language" value="2">Other</span>

                <p>Bio:</p>
                <textarea name="bio" required></textarea>

                <input class="submit" type="submit">
            </form>
        </div>
        <!--SignUp Form End-->

    </div>


    <script>
        document.addEventListener('keydown', (e) => {
            if (e.ctrlKey && e.keyCode === 13) window.open('/week1/html/index.html', "_self");
        });
    </script>
</body>

</html>