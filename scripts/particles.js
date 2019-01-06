/**
* @Author: neeraj99
* @Date:   2018-12-21T13:20:25+05:30
* @Last modified by: neerajp99
*/

particlesJS("particles-js",
    {
        "particles": {
            "number": {
                "value": 15,
                "density": {
                    "enable": true,
                    "value_area": 1000
                }
            },
            "color": {
                "value": ['#4b3192', '#3d2f80', '#b11597']
            },
            "shape": {
                "type": "polygon",
                "stroke": {
                    "width": 0,
                    "color": "#000"
                },
                "polygon": {
                    "nb_sides": 4
                },
                "image": {
                    "src": "img/github.svg",
                    "width": 3,
                    "height": 3
                }
            },
            "opacity": {
                "value": 0.4,
                "random": true,
                "anim": {
                    "enable": false,
                    "speed": 1,
                    "opacity_min": 0.1,
                    "sync": false
                }
            },
            "size": {
                "value": 12,
                "random": false,
                "anim": {
                    "enable": true,
                    "speed": 10,
                    "size_min": 40,
                    "sync": false
                }
            },
            "line_linked": {
                "enable": false,
                "distance": 200,
                "color": "#ffffff",
                "opacity": 1,
                "width": 2
            },
            "move": {
                "enable": true,
                "speed": 3,
                "direction": "none",
                "random": false,
                "straight": false,
                "out_mode": "out",
                "bounce": false,
                "attract": {
                    "enable": false,
                    "rotateX": 600,
                    "rotateY": 1200
                }
            }
        },

        "retina_detect": true
    }
);
