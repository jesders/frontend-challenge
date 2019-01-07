<!DOCTYPE html>

<html>
    <head>
        <?php include('partials/doctype.php'); ?>
    </head>
    <body>
        <main class="wrapper">

            <!-- The header layout will get included here -->
            <?php include('partials/header.php'); ?>

            <!-- Banner Section -->
            <section class="banner"></section>

            <!-- Navigation Section -->
            <section class="nav">
                <div class="container">
                    <div class="row">
                        <div class="cell">
                            <nav class="flex justify-center">
                                <a href="#">Menu</a>
                                <a href="#">Catering</a>
                                <a href="#">About Us</a>
                                <a href="#">Contact</a>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Jumbo Content -->
            <section class="jumbo">
                <div class="container">
                    <div class="row small">
                        <div class="cell text-center">
                            <img src="/assets/svg/hotdog.svg" alt="Hotdog Icon">
                            <h1>Dirty Dogs serves all-beef, vegan and vegitarian hot dogs.</h1>
                            <a href="#" class="button large">More Dogs 'n Make Em Hot</a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Homepage Content -->
            <section class="hotdogs">
                <div class="container">
                    <div class="row">
                        <div class="cell large-6 flex justify-center align-center">
                            <div class="block center">
                                <h4>Gormet All Beef Hotdogs</h4>
                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                            </div>
                        </div>
                        <div class="cell large-6">
                            <div class="image" style="background-image:url('/assets/img/misc/hotdogs/beef.jpg');"></div>    
                        </div>
                    </div>
                    <div class="row">
                        <div class="cell large-6">
                            <div class="image" style="background-image:url('/assets/img/misc/hotdogs/vegan.jpg');"></div>    
                        </div>
                        <div class="cell large-6 flex justify-center align-center reverse">
                            <div class="block center">
                                <h4>Vegan Hotdogs</h4>
                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="cell large-6 flex justify-center align-center">
                            <div class="block center">
                                <h4>Vegitarian Hotdogs</h4>
                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                            </div>
                        </div>
                        <div class="cell large-6">
                            <div class="image" style="background-image:url('/assets/img/misc/hotdogs/vegitarian.jpg');"></div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- The footer layout will get included here -->
            <?php include('partials/footer.php'); ?>

            <!-- Scripts / External Resources -->
            <script type="text/javascript" src="/assets/js/app.js"></script>

        </main>
    </body>
</html>
