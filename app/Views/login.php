<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login Traceability Kopi</title>

    <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet">

    <link href="<?= base_url('assets/css/sb-admin-2.min.css') ?>" rel="stylesheet">

    <style>

        body{
            background: linear-gradient(135deg, #4e73df, #224abe);
            height: 100vh;
        }

        .login-card{
            border: none;
            border-radius: 20px;
            overflow: hidden;
            animation: fadeIn 0.7s ease;
        }

       
            background-size: cover;
            min-height: 500px;
        }

        .form-control{
            border-radius: 10px;
            height: 50px;
        }

        .btn-login{
            border-radius: 10px;
            height: 50px;
            font-weight: bold;
        }

        @keyframes fadeIn{
            from{
                opacity:0;
                transform:translateY(20px);
            }
            to{
                opacity:1;
                transform:translateY(0);
            }
        }

    </style>

</head>

<body class="d-flex align-items-center justify-content-center">

<div class="container">

    <div class="row justify-content-center">

        <div class="col-lg-10">

            <div class="card shadow-lg login-card">

                <div class="row no-gutters">

                    

                  <div class="col-md-12 bg-white">

                        <div class="p-5">

                            <div class="text-center mb-4">

                                <h1 class="h3 text-gray-900 mb-2">
                                     Traceability Kopi
                                </h1>

                                <p class="text-muted">
                                    Masuk sebagai Petani, Roaster, & Toko
                                </p>

                            </div>

                            <?php if(session()->getFlashdata('error')): ?>

                                <div class="alert alert-danger">

                                    <?= session()->getFlashdata('error') ?>

                                </div>

                            <?php endif; ?>

                            <form action="/login/process" method="post">

                                <div class="form-group">

                                    <input 
                                        type="text" 
                                        name="username"
                                        class="form-control"
                                        placeholder="Username"
                                        required
                                    >

                                </div>

                                <div class="form-group">

                                    <input 
                                        type="password"
                                        name="password"
                                        class="form-control"
                                        placeholder="Password"
                                        required
                                    >

                                </div>

                                <button class="btn btn-primary btn-block btn-login">

                                    <i class="fas fa-sign-in-alt"></i>
                                    Login

                                </button>

                            </form>

                           
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>