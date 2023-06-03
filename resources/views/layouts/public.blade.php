<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>My Contact</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
    <!-- Style -->
    <link href="{{asset('assets/bootstrap-icons/font/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet">
</head>

<body>
<!-- navbar -->
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
        <a class="navbar-brand text-uppercase" href="index.html">
            <strong><i class="bi bi-person-lines-fill me-1"></i>Contact</strong> App
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            </ul>
            <form class="d-flex" role="search">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-1"><a href="#" class="btn btn-outline-secondary">Login</a></li>
                    <li class="nav-item mx-1"><a href="#" class="btn btn-outline-primary">Register</a></li>
                </ul>
            </form>
        </div>
    </div>
</nav>
<!-- content -->
@yield('content')
<div class="py-5 bg-white">
    <div class="px-4 my-5 text-center">
        <h1 class="display-5 fw-bold mt-4">Contact App</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Contact App gives you everything you need to organize your contacts easily.</p>
            <div class="d-flex justify-content-sm-center">
                <a href="#" class="btn btn-primary mx-2">Sign up</a>
                <a href="#" class="btn btn-outline-secondary mx-2">Sign in</a>
            </div>
        </div>
    </div>
</div>
<div class="container py-5">
    <div class="row">
        <div class="col-lg-4">
            <h3>Data Protection</h3>
            <p>In the event of contact deletion or corruption, keep your contacts secure and unharmed across all of
                your connected accounts.</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <h3>Notes & Tags</h3>
            <p>Group, search, and filter your contacts using notes and tags.</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <h3>Birthday Reminders</h3>
            <p>Weekly notifications are sent to you, including birthday reminders.</p>
        </div><!-- /.col-lg-4 -->
    </div>
</div>
<section class="bg-white">
    <div class="container py-5">
        <h2 class="text-center my-5">Easy to try. Fair pricing to upgrade.</h2>
        <div class="card-group mb-3 text-center">
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Free</h4>
                </div>
                <div class="card-body">
                    <h3>$0 <small class="text-muted">/ mo</small></h3>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>1,000 Contacts</li>
                        <li>Sync 1 Accounts</li>
                        <li>Basic Features</li>
                    </ul>
                    <button type="button" class="btn btn-outline-primary">Sign up for free</button>
                </div>
            </div>
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Pro</h4>
                </div>
                <div class="card-body">
                    <h3>$9 <small class="text-muted">/ mo</small></h3>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>25,000 Contacts</li>
                        <li>Sync 5 Accounts</li>
                        <li>Pro Features</li>
                    </ul>
                    <button type="button" class="btn btn-primary">Get started</button>
                </div>
            </div>
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Enterprise</h4>
                </div>
                <div class="card-body">
                    <h3>$15 <small class="text-muted">/ mo</small></h3>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>50,000 Contacts</li>
                        <li>Sync 7 Accounts</li>
                        <li>Advance Features</li>
                    </ul>
                    <button type="button" class="btn btn-primary">Contact us</button>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="py-5 footer">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md">
                <strong>Contact App</strong>
                <small class="d-block mb-3">©2023</small>
            </div>
            <div class="col-6 col-md">
                <h5>Features</h5>
                <ul class="list-unstyled text-small">
                    <li><a href="#" class="text-decoration-none">Email Marketing</a></li>
                    <li><a href="#" class="text-decoration-none">Email Template</a></li>
                    <li><a href="#" class="text-decoration-none">Email Broadcast</a></li>
                    <li><a href="#" class="text-decoration-none">Autoresponder Email</a></li>
                    <li><a href="#" class="text-decoration-none">RSS-to-Email</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Resources</h5>
                <ul class="list-unstyled text-small">
                    <li><a href="#" class="text-decoration-none">Landing page Guide</a></li>
                    <li><a href="#" class="text-decoration-none">Inbound Marketing Guide</a></li>
                    <li><a href="#" class="text-decoration-none">Email Marketing Guide</a></li>
                    <li><a href="#" class="text-decoration-none">Helpdesk Guide</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>About</h5>
                <ul class="list-unstyled text-small">
                    <li><a href="#" class="text-decoration-none">Team</a></li>
                    <li><a href="#" class="text-decoration-none">Locations</a></li>
                    <li><a href="#" class="text-decoration-none">Privacy</a></li>
                    <li><a href="#" class="text-decoration-none">Terms</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
