<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paperless Hospital Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('storage/wallpaper1.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            color: white;
        }
        .overlay {
            background-color: rgba(0, 0, 0, 0.5); 
            padding: 20px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="container text-center mt-5 overlay">
        <h1>Welcome to the Paperless Hospital Management System</h1>
        <p>As a Hospital Receptionist, you can efficiently manage appointments, doctors, and patient information.</p>
        <p>Select a section to navigate:</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
            <a href="{{ url('categories/create') }}" class="btn btn-primary me-md-2">Appointments</a>
            <a href="{{ url('categories/edit') }}" class="btn btn-secondary me-md-2">Doctors</a>
            <a href="{{ url('categories/view') }}" class="btn btn-success">Patients</a>
        </div>
    </div>

    

    <footer class="mt-5 text-center">
        <p>© 2024 Hospital Management System. All rights reserved.</p>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></s
