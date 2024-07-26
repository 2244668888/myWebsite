<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Portfolio')</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css"
        rel="stylesheet">
    @stack('styles')
    <style>
        .card {
            margin-bottom: 20px;
            height: 350px;
            /* Ensure all cards have the same height */
            transition: transform 0.3s, box-shadow 0.3s;
            /* Add transition for hover effect */
        }

        .card:hover {
            transform: scale(1.05);
            /* Scale up the card on hover */
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            /* Add shadow on hover */
        }

        .card img {
            height: 200px;
            /* Larger image size */
            object-fit: cover;
        }

        .whatsapp-btn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #25D366;
            color: white;
            border: none;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            font-size: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .whatsapp-btn i {
            margin: 0;
        }

        .container {
            width: 100%;
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            width: 100vw;
            /* Full width of the viewport */
            max-height: 900px;
            /* Maximum height */
            overflow-y: auto;
            /* Scroll if content exceeds max height */
            background-color: #000;
            /* Black background for full width */
            border: none;
            /* Remove border */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            /* Add shadow for depth */
            z-index: 1000;
            /* Ensure dropdown appears above other elements */
        }

        .nav-item:hover .dropdown-menu {
            display: block;
        }

        .dropdown-content {
            display: flex;
            justify-content: space-between;
            padding: 15px;
            background-color: #000;
            /* Ensure background color is consistent */
        }

        .dropdown-section {
            flex: 1;
            margin-right: 20px;
            /* Space between sections */
        }

        .dropdown-header {
            color: #fff;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .dropdown-item {
            color: #adb5bd;
            display: block;
            padding: 10px;
            text-decoration: none;
            background-color: #000;
            /* Ensure dropdown items have a black background */
        }

        .dropdown-item:hover {
            background-color: #495057;
            /* Slightly lighter shade on hover */
            color: #fff;
        }

        .content-container {
            position: relative;
            top: 100px;
            /* Adjusted to move the text down */
            color: white;
            height: 300px;
            width: 90%;
            max-width: 700px;
            margin-left: 20px;
        }

        .main-page h1,
        .main-page p {
            text-align: left;
        }

        .main-page h1 {
            font-size: 2.5rem;
        }

        .main-page p {
            font-size: 1.2rem;
            max-width: 550px;
        }

        .cards-page {
            background-color: rgb(202, 221, 215);
            padding: 50px 0;
        }

        .card-container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .card-container .card {
            flex: 1 1 calc(50% - 20px);
            margin: 10px;
        }

        @media (min-width: 768px) {
            .card-container .card {
                flex: 1 1 calc(25% - 20px);
            }
        }

        .card-body {
            text-align: center;
            background-color: lightslategrey;
        }

        .split-page {
            display: flex;
            flex-direction: column;
            width: 100%;
            height: 100vh;
            background-color: #f18b8b;
        }

        .left-card,
        .right-card {
            flex: 1;
            padding: 20px;
            /* Add padding for space */
        }

        .left-card {
            background: url('{{ asset('images/left-image.jpg') }}') center center/cover no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: black;
        }

        .inner-card {
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(207, 6, 6, 0.9), rgba(36, 20, 247, 0.9));
            /* Linear gradient */
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            /* Ensure images wrap to new lines */
        }

        .inner-card img {
            width: 48%;
            /* Two images per row */
            margin: 1%;
            /* Space between images */
            height: auto;
            object-fit: cover;
        }

        .right-card {
            background-color: lightskyblue;
        }

        .right-card h2 {
            margin-bottom: 20px;
        }

        .right-card p {
            margin-bottom: 10px;
        }

        @media (min-width: 768px) {
            .split-page {
                flex-direction: row;
            }

            .content-container {
                width: 60%;
            }

            .main-page h1 {
                font-size: 4rem;
            }

            .main-page p {
                font-size: 1.8rem;
            }
        }

        .image-grid {
            padding: 20px;
        }

        .image-container {
            position: relative;
            overflow: hidden;
            margin-bottom: 20px;
        }

        .image {
            width: 100%;
            height: auto;
            transition: opacity 0.3s ease-in-out;
        }

        .secondary-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
        }

        .footer {
            background-color: #343a40;
            /* Dark background color */
            color: #f8f9fa;
            /* Light text color */
            padding: 20px 0;
        }

        .footer h5 {
            font-weight: bold;
            color: #f8f9fa;
            /* Light text color for headings */
        }

        .footer p {
            margin-bottom: 0;
        }

        .footer .social-icon {
            font-size: 24px;
            color: #f8f9fa;
            margin-right: 10px;
            transition: color 0.3s;
        }

        .footer .social-icon:hover {
            color: #007bff;
            /* Change to your preferred hover color */
        }

        .footer-bottom {
            background-color: #212529;
            /* Slightly darker background for bottom section */
            color: #f8f9fa;
            /* Light text color */
            padding: 10px 0;
        }

        .footer-bottom p {
            margin: 0;
        }


        .image-container:hover .primary-image {
            opacity: 0;
        }

        .image-container:hover .secondary-image {
            opacity: 1;
        }

        .row {
            display: flex;
        }

        .col-4 {
            flex: 1;
            padding: 0 10px;
            box-sizing: border-box;
        }
    </style>
</head>

<body>
    @include('layouts.navbar')

    @yield('content')

    <!-- WhatsApp Button -->
    <a href="https://wa.me/+923056750879" class="whatsapp-btn" target="_blank">
        <i class="bi bi-whatsapp"></i>
    </a>
    <!-- Other layout content -->

    @include('layouts.footer')

    <!-- Other layout content -->

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    @stack('scripts')
</body>

</html>
