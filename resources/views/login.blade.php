<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->
    <link href="{{ asset('template_admin/css/style.css') }}" rel="stylesheet">

</head>

<body class="h-100">
    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        @if (Session::has('status'))
                            <div class="alert alert-danger text-center">{{ Session::get('message') }}</div>
                        @endif
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <a class="text-center" href="index.html">
                                    <h3>SISTEM INFORMASI KASIR</h3>
                                </a>

                                <form class="mt-5 mb-5 login-input" method="post" action="">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="username" class="form-control"
                                            placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control"
                                            placeholder="Password">
                                    </div>
                                    <button name="login" class="btn login-form__btn submit w-100">Sign In</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!--**********************************
        Scripts
    ***********************************-->
    <script src="{{ asset('template_admin/plugins/common/common.min.js') }}"></script>
    <script src="{{ asset('template_admin/custom.min.js') }}"></script>
    <script src="{{ asset('template_admin/settings.js') }}"></script>
    <script src="{{ asset('template_admin/gleek.js') }}"></script>
    <script src="{{ asset('template_admin/styleSwitcher.js') }}"></script>
</body>

</html>
