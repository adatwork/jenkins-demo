<!-- navbar -->
<div class="container-fluid">
    <nav class="navbar navbar-expand-md navbar-dark bg-info">
        <a class="h3 text-white" href="./index.php">Mave-RICK</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarToggler">
            <ul class="navbar-nav ml-auto pr-5">
                <li class="nav-item pr-3 active ">
                    <a class="nav-link h3" href="./index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item pl-2">
                    <div class="btn-group">
                        <a class="nav-link h3" href="#">Account</a>
                        <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu bg-danger">
                            <a class="dropdown-item" href="./login.php">Log In</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="./logout.php">Log Out</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>