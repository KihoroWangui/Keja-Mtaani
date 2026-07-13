<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Authentication')</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            min-height:100vh;
            background:#0D1117;
            color:#F0F6FC;
            font-family:Arial, sans-serif;
        }

        .auth-wrapper{
            display:flex;
            min-height:100vh;
        }

        .left-panel{
            flex:1;
            padding:60px;
            background:
                radial-gradient(
                    circle at top left,
                    rgba(0,200,83,.15),
                    transparent 40%
                ),
                #0D1117;

            display:flex;
            flex-direction:column;
            justify-content:center;
        }

        .right-panel{
            width:500px;
            display:flex;
            justify-content:center;
            align-items:center;
            padding:40px;
            background:#161B22;
            border-left:1px solid #30363D;
        }

        .auth-card{
            width:100%;
            max-width:400px;
        }

        .logo{
            font-size:32px;
            font-weight:bold;
            margin-bottom:20px;
        }

        .headline{
            font-size:52px;
            font-weight:700;
            line-height:1.1;
            margin-bottom:20px;
        }

        .subtext{
            color:#8B949E;
            font-size:18px;
            max-width:500px;
        }

        @media(max-width:900px){

            .left-panel{
                display:none;
            }

            .right-panel{
                width:100%;
            }
        }
    </style>
</head>
<body>

<div class="auth-wrapper">

    <div class="left-panel">

        <div class="logo">
            Keja Mtaani
        </div>

        <div class="headline">
            Get your next House<br>
            with ease.
        </div>

        <div class="subtext">
            Keja Mtaani,Kenya's Best
            House hunting platform.
        </div>

    </div>

    <div class="right-panel">

        <div class="auth-card">
            @yield('content')
        </div>

    </div>

</div>

</body>
</html>
