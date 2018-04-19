<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejemplos de javascript</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

<div class="row">
    <div class="col-md-8">
        <ul style="list-style: none; text-align: center;">
            <li>
                <h1>Progress bar animated</h1>
                <div class="container">
                    <div class="progress">
                        <div id="progress-bar" class="progress-bar progress-bar-striped" role="progressbar"
                             aria-valuenow="45"
                             aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                            <span class="sr-only">45% Complete</span>
                        </div>
                    </div>
                    <button id="animate" class="btn btn-primary">Animate</button>
                    <script>

                        function animate() {
                            document.getElementById("progress-bar").classList.toggle("active");
                        }

                        document.getElementById("animate").onclick = function () {
                            animate();
                        }

                    </script>
                </div>
            </li>
            <li>
                <style>

                    .start {
                        width: 0%;
                    }

                    .final {
                        width: 100%;
                    }

                    .animate {
                        transition: all 2s ease .5s;
                    }

                </style>
                <h1>Progress animated</h1>
                <div class="container">
                    <div class="progress">
                        <div id="progress-bar2" class="progress-bar progress-bar-striped active animate"
                             role="progressbar"
                             aria-valuenow="45"
                             aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">45% Complete</span>
                        </div>
                    </div>
                    <button id="animate2" class="btn btn-primary">Animate</button>
                </div>
                <script>

                    function animate2() {
                        document.getElementById("progress-bar2").classList.toggle("final");
                    }

                    document.getElementById("animate2").onclick = function () {
                        animate2();
                    }


                </script>
            </li>
            <li>
                <h1>On-click basis</h1>
                <div class="container">
                    <h2 id="title">Default title</h2>
                </div>
                <button class="btn btn-danger" id="change">Change title</button>
                <script>
                    function change() {
                        document.getElementById("title").innerHTML = "Title changed";
                    }

                    document.getElementById("change").onclick = function () {
                        change();
                    }


                </script>
            </li>

        </ul>
    </div>

</div>

<script src="js/jquery-3.3.1.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>