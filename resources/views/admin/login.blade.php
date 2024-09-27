<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <!-- Meta data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <title>Dayone - Multipurpose Admin & Dashboard Template</title>

    <link rel="icon" href="{{ asset('assets/images/brand/favicon.ico') }}" type="image/x-icon"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/boxed.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/dark.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/skin-modes.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/animated.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/p-scrollbar/p-scrollbar.css') }}" rel="stylesheet" />

    <style>
        /* Custom Toastr styles */
        .toastr {
            opacity: 1 !important; /* Ensures the toastr is fully opaque */
        }

        .toastr-success {
            background-color: #4CAF50 !important; /* Green for success */
            color: white !important; /* White text */
        }

        .toastr-error {
            background-color: #F44336 !important; /* Red for error */
            color: white !important; /* White text */
        }

        .toastr-info {
            background-color: #2196F3 !important; /* Blue for info */
            color: white !important; /* White text */
        }

        .toastr-warning {
            background-color: #FF9800 !important; /* Orange for warning */
            color: white !important; /* White text */
        }
    </style>
</head>

<body class="">
    <div class="page login-bg">
        <div class="page-single">
            <div class="container">
                <div class="row">
                    <div class="col mx-auto">
                        <div class="row justify-content-center">
                            <div class="col-md-7 col-lg-5">
                                <div class="card">
                                    <div class="p-4 pt-6 text-center">
                                        <h1 class="mb-2">Login</h1>
                                        <p class="text-muted">Sign In to your account</p>
                                    </div>
                                    <form action="{{ route('login') }}" class="card-body pt-3" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label class="form-label">Email</label>
                                            <div class="input-group mb-4">
                                                <div class="input-group">
                                                    <span class="input-group-text">
                                                        <i class="fe fe-mail" aria-hidden="true"></i>
                                                    </span>
                                                    <input class="form-control" name="email" placeholder="Email">
                                                    <div class="text-danger">@error('email'){{ $message }}@enderror</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Password</label>
                                            <div class="input-group mb-4">
                                                <div class="input-group" id="Password-toggle">
                                                    <a href="#" class="input-group-text">
                                                        <i class="fe fe-eye-off" aria-hidden="true"></i>
                                                    </a>
                                                    <input class="form-control" name="password" type="password" placeholder="Password">
                                                    <div class="text-danger">@error('password'){{ $message }}@enderror</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="submit">
                                            <button class="btn btn-primary btn-block">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery js-->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap js-->
    <script src="{{ asset('assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- Select2 js -->
    <script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}"></script>
    <!-- P-scroll js-->
    <script src="{{ asset('assets/plugins/p-scrollbar/p-scrollbar.js') }}"></script>
    <!-- Custom js-->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <!-- Include Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script type="text/javascript">
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right", // Position of the toast
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000", // Duration for showing toast
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };

        @if(session('success'))
            toastr.success("{{ session('success') }}", "Success");
        @endif

        @if(session('info'))
            toastr.info("{{ session('info') }}", "Info");
        @endif

        @if(session('warning'))
            toastr.warning("{{ session('warning') }}", "Warning");
        @endif

        @if(session('error'))
            toastr.error("{{ session('error') }}", "Error");
        @endif
    </script>
</body>
</html>
