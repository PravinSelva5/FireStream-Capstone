<?php session_start(); ?>
    <!DOCTYPE html>
    <html lang="en">
        <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Authorized Member</title>
        <link rel="stylesheet" href="styles.css" />
        <link rel="icon" href="./images/FireStreamLogo.png">
        <style>
            .button {
                padding: 15px 25px;
                margin: 20px;
                font-size: 24px;
                text-align: center;
                cursor: pointer;
                outline: none;
                color: #fff;
                background-color: red;
                border: none;
                border-radius: 15px;
                box-shadow: 0 9px #999;
                text-decoration: none;
                display: block;
                }

            .button:hover {background-color: orange}

            .button:active {
                background-color: orange;
                box-shadow: 0 5px #666;
                transform: translateY(4px);
            }
        </style>
        </head>
        <body>
            <a href="content/pi1.php" class="button">Raspberry Pi #1</a>
            <a href="content/pi2.php" class="button">Raspberry Pi #2</a>
            <a href="content/videos.php" class="button">Recorded Videos</a>
        </body>
    </html>