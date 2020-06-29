<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <style>
        * {
        box-sizing: border-box;
        }

        body {
        background-color: #111;
        }

        @keyframes scaleUpDown {
        0%,
        100% {
            transform: scaleY(1) scaleX(1);
        }
        50%,
        90% {
            transform: scaleY(1.1);
        }
        75% {
            transform: scaleY(0.95);
        }
        80% {
            transform: scaleX(0.95);
        }
        }

        @keyframes shake {
        0%,
        100% {
            transform: skewX(0) scale(1);
        }
        50% {
            transform: skewX(5deg) scale(0.9);
        }
        }

        @keyframes particleUp {
        0% {
            opacity: 0;
        }
        20% {
            opacity: 1;
        }
        80% {
            opacity: 1;
        }
        100% {
            opacity: 0;
            top: -100%;
            transform: scale(0.5);
        }
        }

        @keyframes glow {
        0%,
        100% {
            background-color: #ef5a00;
        }
        50% {
            background-color: #ff7800;
        }
        }

        .fire {
        position: absolute;
        top: calc(30% - 50px);
        left: calc(10% - 50px);
        width: 100px;
        height: 100px;
        background-color: transparent;
        margin-left: auto;
        margin-right: auto;
        }

        .fire-main {
        position: absolute;
        height: 100%;
        width: 100%;
        animation: scaleUpDown 3s ease-out;
        animation-iteration-count: infinite;
        animation-fill-mode: both;
        }

        .fire-main .main-fire {
        position: absolute;
        width: 100%;
        height: 100%;
        background-image: radial-gradient(farthest-corner at 10px 0, #d43300 0%, #ef5a00 95%);
        transform: scaleX(0.8) rotate(45deg);
        border-radius: 0 40% 60% 40%;
        filter: drop-shadow(0 0 10px #d43322);
        }

        .fire-main .particle-fire {
        position: absolute;
        top: 60%;
        left: 45%;
        width: 10px;
        height: 10px;
        background-color: #ef5a00;
        border-radius: 50%;
        filter: drop-shadow(0 0 10px #d43322);
        animation: particleUp 2s ease-out 0;
        animation-iteration-count: infinite;
        animation-fill-mode: both;
        }

        .fire-right {
        height: 100%;
        width: 100%;
        position: absolute;
        animation: shake 2s ease-out 0;
        animation-iteration-count: infinite;
        animation-fill-mode: both;
        }

        .fire-right .main-fire {
        position: absolute;
        top: 15%;
        right: -25%;
        width: 80%;
        height: 80%;
        background-color: #ef5a00;
        transform: scaleX(0.8) rotate(45deg);
        border-radius: 0 40% 60% 40%;
        filter: drop-shadow(0 0 10px #d43322);
        }

        .fire-right .particle-fire {
        position: absolute;
        top: 45%;
        left: 50%;
        width: 15px;
        height: 15px;
        background-color: #ef5a00;
        transform: scaleX(0.8) rotate(45deg);
        border-radius: 50%;
        filter: drop-shadow(0 0 10px #d43322);
        animation: particleUp 2s ease-out 0;
        animation-iteration-count: infinite;
        animation-fill-mode: both;
        }

        .fire-left {
        position: absolute;
        height: 100%;
        width: 100%;
        animation: shake 3s ease-out 0;
        animation-iteration-count: infinite;
        animation-fill-mode: both;
        }

        .fire-left .main-fire {
        position: absolute;
        top: 15%;
        left: -20%;
        width: 80%;
        height: 80%;
        background-color: #ef5a00;
        transform: scaleX(0.8) rotate(45deg);
        border-radius: 0 40% 60% 40%;
        filter: drop-shadow(0 0 10px #d43322);
        }

        .fire-left .particle-fire {
        position: absolute;
        top: 10%;
        left: 20%;
        width: 10%;
        height: 10%;
        background-color: #ef5a00;
        border-radius: 50%;
        filter: drop-shadow(0 0 10px #d43322);
        animation: particleUp 3s infinite ease-out 0;
        animation-fill-mode: both;
        }

        .fire-bottom .main-fire {
        position: absolute;
        top: 30%;
        left: 20%;
        width: 75%;
        height: 75%;
        background-color: #ff7800;
        transform: scaleX(0.8) rotate(45deg);
        border-radius: 0 40% 100% 40%;
        filter: blur(10px);
        animation: glow 2s ease-out 0;
        animation-iteration-count: infinite;
        animation-fill-mode: both;
        }
    </style>
</head>
<body>
    <div class="ui inverted menu">
        <a class="active item">
            Home
        </a>
        <a class="item">
            Messages
        </a>
        <a class="item">
            Friends
        </a>
    </div>