<div id="home">
<style>
    @font-face {
        font-family: 'SF Pro Display';
        src: url('component/font/SF-Pro-Display-Regular.ttf') format('truetype');
        font-weight: normal;
        font-style: normal;
    }

    @keyframes glitch {
        0% {
            transform: none;
        }
        5% {
            transform: skew(-0.5deg, -0.9deg);
        }
        10% {
            transform: none;
        }
        15% {
            transform: skew(0.8deg, 0.3deg);
        }
        20% {
            transform: none;
        }
        100% {
            transform: none;
        }
    }

    @keyframes fadein {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    .navbar-brand, .nav-link {
        font-family: 'SF Pro Display', Arial, sans-serif;
        position: relative;
        animation: fadein 1s ease-in-out, glitch 1s infinite linear alternate-reverse;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">ReactZIP Production</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Karya</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Request</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Kontak</a>
            </li>
        </ul>
    </div>
</nav>
<script>
  if (window.location.hash && window.location.hash === '#home') {
    window.location.href = window.location.origin + window.location.pathname;
  }
</script>
</div>
