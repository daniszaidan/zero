<!DOCTYPE html>
<html>
<head>

<style>
    body{
        margin: 0;
        padding: 0;
        list-style: none;
        text-decoration: none;
        text-align: center;
    }
    nav ul{
        width: 100%;
        height: 110px;
        position: fixed;
        margin: 0;
        padding: 0;
        z-index: 999;
        background-color: transparent;
            -webkit-transition: height 0.5s;
            -moz-transition: height 0.5s;
            -ms-transition: height 0.5s;
            -o-transition: height 0.5s;
            transition: height 0.5s;
    }
    nav ul li {
        display: inline-block;
        float: left;
    }
    nav ul li a {
        line-height: 110px;
        padding: 40px 20px;
        color: white;
        font-weight: 700;
        font-size: 25px;
        text-decoration: none;
            -webkit-transition: all 0.5s;
            -moz-transition: all 0.5s;
            -ms-transition: all 0.5s;
            -o-transition: all 0.5s;
            transition: all 0.5s;
    }
    nav ul li a:hover {
        color: blue;
    }
    nav ul.smaller {
        height: 60px;
        background-color: rgba(0, 0, 255, 0.8)
    }
    nav ul.smaller li a {
        line-height: 60px;
        text-decoration: none;
        font-size: 20px;
        padding: 20px 20px;
    }
    .isi{
        height: 2000px;
        width: 100%;
    }
    img{
            width: 100%;
            display: block;
        }
</style>


<script src="js/classie.js"></script>
<script>
    function init() {
        window.addEventListener('scroll', function(e){
            var distanceY = window.pageYOffset || document.documentElement.scrollTop,
                shrinkOn = 50,
                ul = document.querySelector("ul");
            if (distanceY > shrinkOn) {
                classie.add(ul,"smaller");
            } else {
                if (classie.has(ul,"smaller")) {
                    classie.remove(ul,"smaller");
                }
            }
        });
    }
    window.onload = init();
</script>


</head>
<body>

    <nav>
        <ul>
            <li><a href="">Lorem</a></li>
            <li><a href="">Ipsum</a></li>
            <li><a href="">Dolor</a></li>
        </ul>
    </nav>

    <div class="gg">
        <img src="img/full.png">
        <img src="img/full.png">
    </div>

    <div class="isi"> </div>


</body>
</html>