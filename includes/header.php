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
        }
        .header {
            transition: all 0.3s ease;
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
    </style>
</head>
<body class="bg-[#2e2e2e] text-[#f9f9f9]">
    <!-- Header -->
    <header class="header fixed top-0 left-0 w-full h-[60px] bg-[#2e2e2e] z-50">
        <div class="container mx-auto px-4 h-full flex items-center justify-between">
            <!-- Logo -->
            <a href="/" class="text-2xl font-bold">OnsenHub</a>
            
            <!-- Navigation -->
            <nav class="hidden md:flex space-x-8">
                <a href="/" class="hover:text-gray-300 transition-colors">Home</a>
                <a href="/browse" class="hover:text-gray-300 transition-colors">Browse</a>
                <a href="/create" class="hover:text-gray-300 transition-colors">Create</a>
            </nav>
            
            <!-- Auth Buttons -->
            <div class="hidden md:flex space-x-4">
                <a href="/signin" class="px-4 py-2 hover:text-gray-300 transition-colors">Sign In</a>
                <a href="/signup" class="px-4 py-2 bg-[#f9f9f9] text-[#2e2e2e] rounded hover:bg-gray-200 transition-colors">Sign Up</a>
            </div>
            
            <!-- Mobile Menu Button -->
            <button class="md:hidden text-2xl">☰</button>
        </div>
    </header>

    <!-- Main Content Wrapper -->
    <main class="pt-[80px]"> 