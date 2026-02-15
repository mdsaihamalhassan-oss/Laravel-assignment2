<!DOCTYPE html>
<html>
<head>
    <title>Confirmation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-body">
                <h3>Confirmation Page</h3>

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('data'))
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Name:</strong> {{ session('data.name') }}</li>
                        <li class="list-group-item"><strong>Email:</strong> {{ session('data.email') }}</li>
                        <li class="list-group-item"><strong>Message:</strong> {{ session('data.message') }}</li>
                    </ul>
                @endif

                <a href="{{ route('contact.form') }}" class="btn btn-secondary mt-3">Back</a>
            </div>
        </div>
    </div>
</body>
</html>