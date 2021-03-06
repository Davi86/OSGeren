<!DOCTYPE html>
<html>

<head>
    <title>Sistema de Gerenciamento para Micro Empresas | OS Gerenciamento </title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="shortcut icon" type="text/css" href="php/img/logo.png">

    <style type="text/css">
        @import url('https://fonts.googleapis.com/css?family=Nunito');
        @import url('https://fonts.googleapis.com/css?family=Poiret+One');

        body,
        html {
            height: 100%;
            background-repeat: no-repeat;
            background: rgba(220, 220, 220, 1);
            position: relative;
        }

        #login-box {
            position: absolute;
            top: 17vh;
            left: 50%;
            transform: translateX(-50%);
            width: 350px;
            margin: 0 auto;
            border: 1px solid LightGrey;
            background: rgba(48, 46, 45, 1);
            min-height: 250px;
            padding: 20px;
            z-index: 9999;
        }

        #login-box .logo .logo-caption {
            font-family: 'Poiret One', cursive;
            color: white;
            text-align: center;
            margin-bottom: 0px;
        }

        #login-box .logo .tweak {
            color: #1E90FF;
        }

        #login-box .controls {
            padding-top: 30px;
        }

        #login-box .controls input {
            border-radius: 0px;
            background: rgb(98, 96, 96);
            border: 0px;
            color: white;
            font-family: 'Nunito', sans-serif;
        }

        #login-box .controls input:focus {
            box-shadow: none;
        }

        #login-box .controls input:first-child {
            border-top-left-radius: 2px;
            border-top-right-radius: 2px;
        }

        #login-box .controls input:last-child {
            border-bottom-left-radius: 2px;
            border-bottom-right-radius: 2px;
        }

        #login-box input.btn-custom {
            border-radius: 2px;
            margin-top: 8px;
            background: #4169E1;
            border-color: rgba(48, 46, 45, 1);
            color: white;
            font-family: 'Nunito', sans-serif;
        }

        #login-box button.btn-custom:hover {
            -webkit-transition: all 500ms ease;
            -moz-transition: all 500ms ease;
            -ms-transition: all 500ms ease;
            -o-transition: all 500ms ease;
            transition: all 500ms ease;
            background: rgba(48, 46, 45, 1);
            border-color: #4169E1;
        }

        #particles-js {
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: 50% 50%;
            position: fixed;
            top: 0px;
            z-index: 1;
        }

    </style>

</head>

<body>
    <div class="container">
        <div id="login-box">
            <div class="logo">
                <img src="php/img/logo.png" class="img img-responsive img-circle center-block" />
                <h1 class="logo-caption"><span class="tweak">L</span>ogin</h1>
            </div><!-- /.logo -->
            <div class="controls">
            <form id="formulario_login" method="post" action="fun_login.php">
               <div id="resultado" style="font-size: 12px; color: red; text-align: center"></div>
                <input id="username" type="text" name="username" placeholder="Username" class="form-control" />
                <input id="senha"  type="password" name="senha" placeholder="Password" class="form-control" />
                <input id="login" type="submit" class="btn btn-default btn-block btn-custom" name="entrar" value="Login">
             </form>
            </div><!-- /.controls -->
        </div><!-- /#login-box -->
    </div><!-- /.container -->
    <div id="particles-js"></div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js"></script>
    <script type="text/javascript">
        
//        $("#login").click(function(){
//           var username = $("#username").val();
//            var senha = $("#senha").val();
//            var url = "fun_login.php?username="+username+"&senha="+senha;
//            $.get(url,function(dataReturn){
//                $("#resultado").html(dataReturn);
//            });
//        });
        
        $.getScript("https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js", function() {
            particlesJS('particles-js', {
                "particles": {
                    "number": {
                        "value": 80,
                        "density": {
                            "enable": true,
                            "value_area": 800
                        }
                    },
                    "color": {
                        "value": "#000000"
                    },
                    "shape": {
                        "type": "circle",
                        "stroke": {
                            "width": 0,
                            "color": "#000000"
                        },
                        "polygon": {
                            "nb_sides": 5
                        },
                        "image": {
                            "width": 100,
                            "height": 100
                        }
                    },
                    "opacity": {
                        "value": 0.5,
                        "random": false,
                        "anim": {
                            "enable": false,
                            "speed": 1,
                            "opacity_min": 0.1,
                            "sync": false
                        }
                    },
                    "size": {
                        "value": 5,
                        "random": true,
                        "anim": {
                            "enable": false,
                            "speed": 40,
                            "size_min": 0.1,
                            "sync": false
                        }
                    },
                    "line_linked": {
                        "enable": true,
                        "distance": 150,
                        "color": "#000000",
                        "opacity": 0.4,
                        "width": 1
                    },
                    "move": {
                        "enable": true,
                        "speed": 6,
                        "direction": "none",
                        "random": false,
                        "straight": false,
                        "out_mode": "out",
                        "attract": {
                            "enable": false,
                            "rotateX": 600,
                            "rotateY": 1200
                        }
                    }
                },
                "interactivity": {
                    "detect_on": "canvas",
                    "events": {
                        "onhover": {
                            "enable": true,
                            "mode": "repulse"
                        },
                        "onclick": {
                            "enable": true,
                            "mode": "push"
                        },
                        "resize": true
                    },
                    "modes": {
                        "grab": {
                            "distance": 400,
                            "line_linked": {
                                "opacity": 1
                            }
                        },
                        "bubble": {
                            "distance": 400,
                            "size": 40,
                            "duration": 2,
                            "opacity": 8,
                            "speed": 3
                        },
                        "repulse": {
                            "distance": 200
                        },
                        "push": {
                            "particles_nb": 4
                        },
                        "remove": {
                            "particles_nb": 2
                        }
                    }
                },
                "retina_detect": true,
                "config_demo": {
                    "hide_card": false,
                    "background_color": "#b61924",
                    "background_image": "",
                    "background_position": "50% 50%",
                    "background_repeat": "no-repeat",
                    "background_size": "cover"
                }
            });

        });

    </script>
</body>

</html>
