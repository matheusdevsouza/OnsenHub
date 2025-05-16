<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OnsenHub - Your Novel Reading Platform</title>
    
    <!-- TailwindCSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Swiper.js -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .header {
            transition: all 0.3s ease;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .header.scrolled {
            height: 70px;
            background: rgba(46, 46, 46, 0.95);
            backdrop-filter: blur(10px);
        }
        .novel-card {
            transition: all 0.3s ease;
        }
        .novel-card:hover {
            transform: scale(1.05);
        }
        .novel-card:hover .novel-title {
            color: #f9f9f9;
        }
        .mobile-menu {
            transition: all 0.3s ease;
            transform: translateX(100%);
        }
        .mobile-menu.active {
            transform: translateX(0);
        }
    </style>
</head>
<body class="bg-[#2e2e2e] text-[#f9f9f9]">
    <!-- Header -->
    <header class="header fixed top-0 left-0 w-full h-[60px] bg-[#2e2e2e] z-50">
        <div class="container mx-auto px-4 h-full flex items-center justify-between">
            <!-- Logo -->
            <a href="/" class="text-2xl font-bold hover:text-[#f9f9f9] transition-colors">OnsenHub</a>
            
            <!-- Desktop Navigation -->
            <nav class="hidden md:flex space-x-8">
                <a href="/" class="hover:text-gray-300 transition-colors">Home</a>
                <a href="/browse" class="hover:text-gray-300 transition-colors">Browse</a>
                <a href="/create" class="hover:text-gray-300 transition-colors">Create</a>
            </nav>
            
            <!-- Desktop Auth Buttons -->
            <div class="hidden md:flex space-x-4">
                <a href="/signin" class="px-4 py-2 hover:text-gray-300 transition-colors">Sign In</a>
                <a href="/signup" class="px-4 py-2 bg-[#f9f9f9] text-[#2e2e2e] rounded hover:bg-gray-200 transition-colors">Sign Up</a>
            </div>
            
            <!-- Mobile Menu Button -->
            <button id="mobileMenuBtn" class="md:hidden text-2xl hover:text-gray-300 transition-colors">☰</button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobileMenu" class="mobile-menu fixed top-[60px] right-0 w-64 h-screen bg-[#2e2e2e] p-4 md:hidden">
            <nav class="flex flex-col space-y-4">
                <a href="/" class="hover:text-gray-300 transition-colors">Home</a>
                <a href="/browse" class="hover:text-gray-300 transition-colors">Browse</a>
                <a href="/create" class="hover:text-gray-300 transition-colors">Create</a>
                <div class="pt-4 border-t border-gray-700">
                    <a href="/signin" class="block py-2 hover:text-gray-300 transition-colors">Sign In</a>
                    <a href="/signup" class="block py-2 hover:text-gray-300 transition-colors">Sign Up</a>
                </div>
            </nav>
        </div>
    </header>

    <!-- Main Content Wrapper -->
    <main class="flex-grow pt-[80px]"> 