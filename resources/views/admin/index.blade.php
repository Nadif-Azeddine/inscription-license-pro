@extends('admin.sidebars')

@section('table')

<style>
    body {
        background-color: #20232a;
        color: #61dafb;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }

    .welcome-container {
        text-align: center;
    }

    .welcome-text {
        font-size: 3em;
        margin-bottom: 20px;
    }

    .futuristic {
        font-family: 'Roboto', 'Helvetica', 'Arial', sans-serif;
        letter-spacing: 2px;
        text-transform: uppercase;
        font-weight: bold;
        color: #61dafb;
    }

    .highlight {
        color: #f8f8f2;
    }

    .admin-icon {
        font-size: 4em;
        margin-top: 20px;
    }
</style>
</head>
<body>
<div class="welcome-container">
    <div class="welcome-text futuristic">
        Welcome to <span class="highlight">Admin</span> Space
    </div>
    <div class="admin-icon">
        <span>&#x1F9D1;</span> <!-- You can replace this with your admin icon or logo -->
    </div>
</div>
</body>

@section('scripts')
@endsection

@endsection
