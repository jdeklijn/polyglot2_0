<?php
echo('<!doctype=html><html><head>');
echo('<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">');
echo('<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>');
echo('<link rel="stylesheet" href="./styles/mainstyle.css">');
echo('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
echo('</head><body>');

echo('<div class="container">
        <!-- Name and Logo Section -->
        <header class="row bg-light">
            <div class="col-8">
                <h1 class="h5 m-0">Name and Logo</h1>
            </div>
            <div class="col-4 text-end">
                <div>Avatar</div>
                <div>User Account</div>
            </div>
        </header>
        <!-- Progress Bars -->
        <section class="progress-bars bg-light">
            <div class="row total-progress-bar">
                <div class="progress-bar bg-light">
                    Total Progress
                </div>
            </div>
            <div class="row current-progress-bar">
                <div class="progress-bar bg-light">
                    Exercise Progress
                </div>
            </div>
        </section>
        <!-- Main Layout -->
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-2 bg-light sidebar">
                Sidebar Menu
            </nav>
            <!-- Exercise Space -->
            <main class="col text-center d-flex align-items-center justify-content-center exercise-space">
                Exercise Space
            </main>
        </div>
        <!-- Quick Access and Keyboard -->
        <footer class="quick-access-menu bg-light">
            <div class="row">
                <div class="text-center">
                    Quick Access Menu
                </div>
            </div>
            <div class="row">
                <div class="keyboard">
                    User Keyboard
                </div>
            </div>
        </footer>
        ');        
echo('</body></html>');


