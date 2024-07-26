<!-- Footer Section -->
<footer class="footer bg-dark text-light">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5>Contact Us</h5>
                <p>
                    <strong>Email:</strong> shoaib66885@example.com<br>
                    <strong>Phone:</strong> +93 305 6750879<br>
                    <strong>Address:</strong> Walton Road Qadri Colony Street 2, Lahore, Pakistan
                </p>
            </div>
            <div class="col-md-4">
                <h5>Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ route('services.index') }}" class="text-light">Home</a></li>
                    <li><a href="{{ route('nav.index') }}" class="text-light">Services</a></li>
                    <li><a href="" class="text-light">About Us</a></li>
                    <li><a href="" class="text-light">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>Follow Us</h5>
                <a href="https://facebook.com" target="_blank" class="social-icon text-light">
                    <i class="bi bi-facebook"></i>
                </a>
                <a href="https://twitter.com" target="_blank" class="social-icon text-light">
                    <i class="bi bi-twitter"></i>
                </a>
                <a href="https://instagram.com" target="_blank" class="social-icon text-light">
                    <i class="bi bi-instagram"></i>
                </a>
                <a href="https://linkedin.com" target="_blank" class="social-icon text-light">
                    <i class="bi bi-linkedin"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="footer-bottom bg-dark text-center">
        <div class="container">
            <p>&copy; {{ date('Y') }} Your Company Name. All Rights Reserved.</p>
        </div>
    </div>
</footer>

<!-- Include Bootstrap Icons for social media icons -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css" rel="stylesheet">
