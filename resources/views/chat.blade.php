<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ @csrf_token() }}">

        <title>Chat</title>

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
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body>

    <div class="container">
        <div class="row" id="app">
            <div class="offset-4 col-4">

                <li class="list-group-item active">Chat Room</li>
                <ul class="list-group" v-chat-scroll>

                    <message
                        :key="value.index"
                        v-for="value in chat.message"
                    >
                        @{{ value }}
                    </message>
                </ul>
                <label for="message"></label>
                <input
                    type="text"
                    name="message"
                    id="message"
                    class="form-control"
                    placeholder="Type your message here..."
                    v-model="message"
                    v-on:keyup.enter="send"
                />
            </div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
