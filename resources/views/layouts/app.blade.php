<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Chardham Adventure - Travel Booking')</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
    />
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f5f7fa;
        }
        /* Custom scrollbar for dropdowns */
        .scrollbar-thin::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }
        .scrollbar-thin::-webkit-scrollbar-thumb {
            background-color: #cbd5e1;
            border-radius: 3px;
        }
        .scrollbar-thin::-webkit-scrollbar-track {
            background-color: transparent;
        }
        /* Sticky header with backdrop blur and shadow for app-like mobile design */
        header.bg-white.shadow-md.fixed.w-full.z-50 {
            backdrop-filter: saturate(180%) blur(10px);
            -webkit-backdrop-filter: saturate(180%) blur(10px);
            background-color: rgba(255, 255, 255, 0.8) !important;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        @media (max-width: 768px) {
            header.bg-white.shadow-md.fixed.w-full.z-50 {
                padding: 0.25rem 1rem;
                box-shadow: 0 2px 6px rgba(0,0,0,0.15);
            }
            header.bg-white.shadow-md.fixed.w-full.z-50 a.text-3xl {
                font-size: 1.25rem;
            }
            nav.hidden.md\\:flex.space-x-8.items-center {
                display: none !important;
            }
            div.md\\:hidden {
                display: flex !important;
            }
        }
    </style>
</head>
<body class="relative min-h-screen flex flex-col">

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
        // Tabs functionality
        const tabButtons = document.querySelectorAll('.tab-btn');
        const tabContents = document.querySelectorAll('.tab-content');

        tabButtons.forEach(button => {
            button.addEventListener('click', () => {
                const target = button.getAttribute('data-tab');

                tabButtons.forEach(btn => {
                    btn.classList.remove('active-tab', 'border-red-600', 'text-red-600');
                    btn.classList.add('border-transparent', 'text-gray-600');
                });
                button.classList.add('active-tab', 'border-red-600', 'text-red-600');
                button.classList.remove('border-transparent', 'text-gray-600');

                tabContents.forEach(content => {
                    if (content.id === target) {
                        content.classList.remove('hidden');
                    } else {
                        content.classList.add('hidden');
                    }
                });
            });
        });

        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".custom-swiper-button-next",
                prevEl: ".custom-swiper-button-prev",
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                480: {
                    slidesPerView: 2,
                    spaceBetween: 15,
                },
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 40,
                },
            },
        });
    </script>
</body>
</html>
