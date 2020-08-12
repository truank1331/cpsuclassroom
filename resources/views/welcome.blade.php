<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            
            .top-left {
                position: absolute;
                left: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-left links">
                    <a href="{{ url('/home') }}">ADMIN</a>
                </div>

                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/teacher/login') }}">TeacherLogin</a>

                        <a href="{{ route('login') }}">STUDENTLogin</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                {{ config('app.name', 'Laravel') }}
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">V.0.15</a>

                </div>
                    <h3 align="Left"> •[Admin] ระบบ Login เข้า<br>
                    <h3 align="Left"> •[Admin] Create User ให้ Teacher<br>
                    <h3 align="Left"> •[Student] ระบบ login<br>
                    <h3 align="Left"> •[Student] เรียกดูข้อมูลของคะแนนตนเองได้<br>
                    <h3 align="Left"> •[Student] Register ด้วย Mail Silpakpakorn ส่ง Vertify ไปยัง Email ได้<br>
                    <h3 align="Left"> •[System] ออกแบบ Database<br>
                    <h3 align="Left"> •[System] ออกแบบ UI<br>
                    <h3 align="Left"> •[System] Deploy ขึ้น Server<br>
                    <h3 align="Left"> •[Teacher] ระบบ login<br>
                    <h3 align="Left"> •[Teacher] เรียกคิดคะแนนจากระบบ BLE<br>
                    <h3 align="Left"> •[Teacher] สร้างข้อมูลรายวิชา<br>
                    <h3 align="Left"> •[Teacher] อัปโหลดไฟล์ CSV จัดเก็บลง Database<br>
                    <h3 align="Left"> •[Teacher] Utility สำหรับ เรียกดูข้อมูลนักศึกษาได้
                </h3>
            </div>
        </div>
    </body>
</html>
