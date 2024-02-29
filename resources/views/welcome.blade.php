<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/carousel.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    </head>
    <body>
        <div class="scroll">

        <!-- Home -->
        <section class="home">
            <h1>Home Section</h1>
        </section>


        <!-- Events -->
        <section class="events">
            <!-- carousel -->
                <div class="carousel">
                    <!-- list item -->
                    <div class="list">
                        <div class="item">
                            <img src="image/img1.jpg">
                            <div class="content">
                                <div class="date">DATE/MONTH/YEAR</div>
                                <div class="title">NEWS SLIDER</div>
                                <div class="des">
                                    <!-- lorem 50 -->
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut sequi, rem magnam nesciunt minima placeat, itaque eum neque officiis unde, eaque optio ratione aliquid assumenda facere ab et quasi ducimus aut doloribus non numquam. Explicabo, laboriosam nisi reprehenderit tempora at laborum natus unde. Ut, exercitationem eum aperiam illo illum laudantium?
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="image/img2.jpg">
                            <div class="content">
                                <div class="date">DATE/MONTH/YEAR</div>
                                <div class="title">EVENT SLIDER</div>
                                <div class="des">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut sequi, rem magnam nesciunt minima placeat, itaque eum neque officiis unde, eaque optio ratione aliquid assumenda facere ab et quasi ducimus aut doloribus non numquam. Explicabo, laboriosam nisi reprehenderit tempora at laborum natus unde. Ut, exercitationem eum aperiam illo illum laudantium?
                                </div>
                                <div class="buttons">
                                    <button>REGISTER</button>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="image/img3.jpg">
                            <div class="content">
                                <div class="date">DATE/MONTH/YEAR</div>
                                <div class="title">NEWS SLIDER</div>
                                <div class="des">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut sequi, rem magnam nesciunt minima placeat, itaque eum neque officiis unde, eaque optio ratione aliquid assumenda facere ab et quasi ducimus aut doloribus non numquam. Explicabo, laboriosam nisi reprehenderit tempora at laborum natus unde. Ut, exercitationem eum aperiam illo illum laudantium?
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="image/img4.jpg">
                            <div class="content">
                                <div class="date">DATE/MONTH/YEAR</div>
                                <div class="title">EVENT SLIDER</div>
                                <div class="des">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut sequi, rem magnam nesciunt minima placeat, itaque eum neque officiis unde, eaque optio ratione aliquid assumenda facere ab et quasi ducimus aut doloribus non numquam. Explicabo, laboriosam nisi reprehenderit tempora at laborum natus unde. Ut, exercitationem eum aperiam illo illum laudantium?
                                </div>
                                <div class="buttons">
                                    <button>REGISTER</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- list thumnail -->
                    <div class="thumbnail">
                        <div class="item">
                            <img src="image/img1.jpg">
                            <div class="content">
                                <div class="title">
                                    Name Slider
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="image/img2.jpg">
                            <div class="content">
                                <div class="title">
                                    Name Slider
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="image/img3.jpg">
                            <div class="content">
                                <div class="title">
                                    Name Slider
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="image/img4.jpg">
                            <div class="content">
                                <div class="title">
                                    Name Slider
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- next prev -->

                    <div class="arrows">
                        <button id="prev"><</button>
                        <button id="next">></button>
                    </div>
                    <!-- time running -->
                    <div class="time"></div>
                </div>
        </section>



        <!-- News -->
        <section class="news">
            <h1>News Section</h1>
        </section>



        <!-- Community -->
        <section class="community">
            <h1>Community Section</h1>
        </section>


        </div>

    </body>

    <!-- Scripts -->
    <script src="js/carousel.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>
