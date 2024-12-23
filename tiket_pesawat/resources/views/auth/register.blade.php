<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signup</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">

    <style>
        /* Global styles */
        body {
            background: #e9ecef;
            font-family: 'Arial', sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        .card {
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            margin-left: 20px;
        }

        .card-header {
            background-color: #007bff;
            color: white;
            border-radius: 8px 8px 0 0;
            padding: 15px;
        }

        .card-header h4 {
            margin: 0;
            font-weight: 600;
        }

        .card-body {
            padding: 20px;
        }

        .form-label {
            font-size: 0.95rem;
            font-weight: 500;
        }

        .form-control {
            border-radius: 6px;
            padding: 10px;
            font-size: 0.9rem;
            border: 1px solid #ccc;
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        .btn {
            font-size: 1rem;
            padding: 10px 14px;
            border-radius: 6px;
            font-weight: 600;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .alert {
            border-radius: 6px;
            font-size: 0.9rem;
        }

        .alert-success {
            background-color: #28a745;
            color: white;
        }

        .alert-danger {
            background-color: #dc3545;
            color: white;
        }

        .mb-3 {
            margin-bottom: 1.25rem;
        }

        .text-center {
            text-align: center;
        }

        /* Responsive design for mobile devices */
        @media (max-width: 576px) {
            .card {
                max-width: 100%;
                margin-left: 10px;
            }

            .form-control {
                font-size: 0.85rem;
            }

            .btn {
                font-size: 0.95rem;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg">
                    <div class="card-header text-center">
                        <h4>Sign Up</h4>
                    </div>
                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if($errors->any())
                            @foreach ($errors->all() as $err)
                            <div class="alert alert-danger">
                                {{ $errors->first() }}
                            </div>
                            @endforeach
                        @endif
                        <form method="POST" action="{{ route('storeSignup') }}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="name">Nama :</label>
                                <input type="text" class="form-control" name="name" id="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email :</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password :</label>
                                <input type="password" class="form-control" name="password" id="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Sign Up</button>
                        </form>
                        <div class="text-center mt-3">
                            <p>Sudah punya akun? <a href="{{route('login')}}">Login</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>
