    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-MZMTM3Y68W"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-MZMTM3Y68W');
</script>
    <!-- Dark mode -->
    <script>
        const storedTheme = localStorage.getItem('theme')

        const getPreferredTheme = () => {
            if (storedTheme) {
                return storedTheme
            }
            return window.matchMedia('(prefers-color-scheme: light)').matches ? 'light' : 'light'
        }

        const setTheme = function(theme) {
            if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: light)').matches) {
                document.documentElement.setAttribute('data-bs-theme', 'light')
            } else {
                document.documentElement.setAttribute('data-bs-theme', theme)
            }
        }

        setTheme(getPreferredTheme())

        window.addEventListener('DOMContentLoaded', () => {
            var el = document.querySelector('.theme-icon-active');
            if (el != 'undefined' && el != null) {
                const showActiveTheme = theme => {
                    const activeThemeIcon = document.querySelector('.theme-icon-active use')
                    const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
                    const svgOfActiveBtn = btnToActive.querySelector('.mode-switch use').getAttribute('href')

                    document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
                        element.classList.remove('active')
                    })

                    btnToActive.classList.add('active')
                    activeThemeIcon.setAttribute('href', svgOfActiveBtn)
                }

                window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
                    if (storedTheme !== 'light' || storedTheme !== 'dark') {
                        setTheme(getPreferredTheme())
                    }
                })

                showActiveTheme(getPreferredTheme())

                document.querySelectorAll('[data-bs-theme-value]')
                    .forEach(toggle => {
                        toggle.addEventListener('click', () => {
                            const theme = toggle.getAttribute('data-bs-theme-value')
                            localStorage.setItem('theme', theme)
                            setTheme(theme)
                            showActiveTheme(theme)
                        })
                    })

            }
        })
    </script>

    <!-- Google Translate -->
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Ganaim Tech">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
    <title><?php echo $seo_title;?></title>

    <meta name="description" content="<?php echo $seo_desc;?>">
    
    <!-- Open Graph Meta Tags (for social sharing) -->
    <meta property="og:title" content="<?php echo $seo_title;?>">
    <meta property="og:description" content="<?php echo $seo_desc;?>">
    <meta property="og:image" content="https://kibokotoursandtravel.com/<?php echo $seo_img;?>">
    <meta property="og:url" content="https://kibokotoursandtravel.com/">
    <meta property="og:type" content="<?php echo $og_type;?>">
    <meta property="og:locale" content="en_US">
    <meta property="og:site_name" content="kiboko tours and travel">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:title" content="<?php echo $seo_title;?>">
    <meta name="twitter:description" content="<?php echo $seo_desc;?>">
    <meta name="twitter:image" content="https://kibokotoursandtravel.com/<?php echo $seo_img;?>">
    <meta name="twitter:card" content="summary_large_image">

    

    <!-- Additional Meta Tags for better SEO -->
    <meta name="robots" content="<?php echo $robot;?>"> <!-- Tells search engines to index and follow the page -->
    <meta name="robots" content="noarchive"> <!-- Prevents caching of the page -->

    <!-- Canonical Tags -->
    <link rel="canonical" href="https://kibokotoursandtravel.com/<?php echo $canonical;?>" />



    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/kiboko-logo.png">

     <!-- hreflang -->
    <link rel="alternate" hreflang="en" href="https://kibokotoursandtravel.com/" />
    <link rel="alternate" hreflang="x-default" href="https://kibokotoursandtravel.com/" />


    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&amp;family=Poppins:wght@400;500;700&amp;display=swap">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/tiny-slider/tiny-slider.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/glightbox/css/glightbox.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/flatpickr/css/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/choices/css/choices.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style>
        .text-primary-kiboko {
            color: #f15a24;
        }
    </style>

    <!-- 'Chatbot' -->
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        /* Main Chat Icon */
        #main-chat-icon {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background-color: #f4732b;
            z-index: 1001;
        }

        /* Contact Icons */
        #contact-icons {
            position: fixed;
            bottom: 100px;
            right: 30px;
            display: flex;
            flex-direction: column;
            gap: 15px;
            z-index: 1000;
            transition: opacity 0.3s ease;
        }

        .contact-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            background-color: #86CD91;
            color: #ffffff;
            font-size: 24px;
            border-radius: 50%;
            text-decoration: none;
            cursor: pointer;
            transition: transform 0.3s ease, background-color 0.3s ease;
        }

        .contact-icon.phone {
            background-color: #03E78B;
        }

        .contact-icon.facebook {
            background-color: #1E88E5;
        }

        .contact-icon.whatsapp {
            background-color: #49E670;
        }

        /* Hover Effect for Icons */
        .contact-icon:hover {
            transform: scale(1.1);
        }

        /* WhatsApp Mini Chat Box */
        #whatsapp-chat {
            position: fixed;
            bottom: 100px;
            right: 30px;
            width: 300px;
            height: 300px;
            background-color: #e5ddd5;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            font-family: Arial, sans-serif;
            z-index: 1000;
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }

        .chat-header {
            background-color: #075e54;
            color: #ffffff;
            padding: 8px;
            font-size: 14px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: bold;
        }

        .chat-body {
            padding: 10px;
            background-color: #fff;
            flex-grow: 1;
            overflow-y: auto;
            max-height: 200px;
        }

        .chat-message {
            background-color: #dcf8c6;
            padding: 6px;
            margin: 4px 0;
            border-radius: 6px;
            max-width: 90%;
            word-wrap: break-word;
        }

        .chat-footer {
            display: flex;
            padding: 5px;
            border-top: 1px solid #ccc;
            background-color: #f0f0f0;
        }

        .chat-footer input {
            flex: 1;
            padding: 6px;
            border: none;
            outline: none;
            border-radius: 4px;
            margin-right: 5px;
        }

        .chat-footer button {
            background-color: #075e54;
            border: none;
            color: #ffffff;
            font-size: 16px;
            padding: 5px 8px;
            cursor: pointer;
            border-radius: 4px;
        }

        /* Visibility Classes */
        .hidden {
            display: none !important;
            opacity: 0;
        }

        /* Animation Classes */
        .fade-in {
            animation: fadeIn 0.3s ease-in;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        /* Close Btn */
        .close-chat {
            cursor: pointer;
            font-size: 20px;
            padding: 0 5px;
        }

        .close-chat:hover {
            opacity: 0.8;
        }
    </style>

    <!-- Chatbox -->
    <!-- Main Chat Icon -->
    <div id="main-chat-icon" class="contact-icon main-icon" title="Chat with us">
        <i class="fas fa-comments"></i>
    </div>

    <!-- Contact Icons -->
    <div id="contact-icons" class="hidden">
        <a href="tel:+254732962224" class="contact-icon phone" title="Call Us">
            <i class="fas fa-phone"></i>
        </a>
        <a href="https://m.me/KibokoTours" class="contact-icon facebook" target="_blank" title="Facebook Messenger">
            <i class="fab fa-facebook-messenger"></i>
        </a>
        <div class="contact-icon whatsapp" title="WhatsApp">
            <i class="fab fa-whatsapp"></i>
        </div>
    </div>

    <!-- WhatsApp Mini Chat Box -->
    <div id="whatsapp-chat" class="hidden">
        <div class="chat-header">
            <i class="fab fa-whatsapp"></i> Chat Support
            <span class="close-chat">&times;</span>
        </div>
        <div class="chat-body">
            <p class="chat-message received" style="font-weight: bold; color: black;">Welcome to Kiboko Tours and Travel, How can I help you?</p>
        </div>
        <div class="chat-footer">
            <input type="text" id="chat-message" placeholder="Type a message...">
            <button id="send-message"><i class="fas fa-paper-plane"></i></button>
        </div>
    </div>

    <?php
    $navdestsres = $conn->query("SELECT * FROM destination ORDER BY CASE WHEN priority = 0 THEN 1 ELSE 0 END, priority LIMIT 5");
    $footdestsres = $conn->query("SELECT * FROM destination ORDER BY CASE WHEN priority = 0 THEN 1 ELSE 0 END, priority LIMIT 5");
    $navcounter = 0;

    $navactres = $conn->query("SELECT * FROM experience ORDER BY CASE WHEN priority = 0 THEN 1 ELSE 0 END, priority LIMIT 6");

    $navclaspack = $conn->query("SELECT * FROM package WHERE category_id = 3 AND package_status = 1 ORDER BY CASE WHEN priority = 0 THEN 1 ELSE 0 END, priority LIMIT 10");
    $navaccpack = $conn->query("SELECT * FROM package WHERE category_id = 4 AND package_status = 1 ORDER BY CASE WHEN priority = 0 THEN 1 ELSE 0 END, priority LIMIT 10");
    $navfampack = $conn->query("SELECT * FROM package WHERE category_id = 5 AND package_status = 1 ORDER BY CASE WHEN priority = 0 THEN 1 ELSE 0 END, priority LIMIT 10");
    $yearsofpack = $conn->query("SELECT year FROM package WHERE category_id = 3 AND package_status = 1 GROUP BY year ORDER BY year DESC")
    ?>