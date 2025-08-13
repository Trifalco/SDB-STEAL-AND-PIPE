jQuery(document).ready(function($) {
    
    console.log('SDB Steel JS loaded successfully!');

    
// Manejo del menú lateral móvil
$('#menuToggle').on('click', function () {
  if ($(window).width() < 992) {
    $('#mobileSidenav').addClass('active');
    $('body').addClass('menu-open');
  } else {
    $('#fullSidenav').addClass('active');
    $('body').addClass('menu-open');
  }
});

document.querySelectorAll('.header-nav .navbar-nav li a').forEach(link => {
  link.addEventListener('click', function() {
    document.querySelectorAll('.header-nav .navbar-nav li a').forEach(a => a.classList.remove('active'));
    this.classList.add('active');
  });
});


$('#closeMenu, #closeMobileMenu').on('click', function () {
  $('#fullSidenav, #mobileSidenav').removeClass('active');
  $('body').removeClass('menu-open');
});

// Cerrar menú al hacer clic fuera
$('#mobileSidenav').on('click', function (e) {
  if (e.target === this) {
    $(this).removeClass('active');
    $('body').removeClass('menu-open');
  }
});

    // Scroll to top functionality
    $(window).scroll(function() {
        if ($(this).scrollTop() > 300) {
            $('.scroltop').fadeIn();
        } else {
            $('.scroltop').fadeOut();
        }
    });
    
    $('.scroltop').click(function() {
        $('html, body').animate({scrollTop: 0}, 800);
        return false;
    });
    
    // Smooth scrolling for anchor links
    $('a[href^="#"]').on('click', function(event) {
        var target = $(this.getAttribute('href'));
        if (target.length) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top - 80
            }, 1000);
        }
    });
    
    // Add active class to navigation items
    $(window).scroll(function() {
        var scrollDistance = $(window).scrollTop();
        
        $('section').each(function(i) {
            if ($(this).position().top - 100 <= scrollDistance) {
                $('.navbar-nav a.active').removeClass('active');
                $('.navbar-nav a').eq(i).addClass('active');
            }
        });
    }).scroll();
    
    // Animate elements on scroll
    function animateOnScroll() {
        $('.offering-card, .service-card, .contact-card, .resource-card').each(function() {
            var elementTop = $(this).offset().top;
            var elementBottom = elementTop + $(this).outerHeight();
            var viewportTop = $(window).scrollTop();
            var viewportBottom = viewportTop + $(window).height();
            
            if (elementBottom > viewportTop && elementTop < viewportBottom) {
                $(this).addClass('fade-in-up');
            }
        });
    }
    
    $(window).scroll(animateOnScroll);
    animateOnScroll(); // Run on page load
    
    // Newsletter form submission
    $('.newsletter-form').on('submit', function(e) {
        e.preventDefault();
        var email = $(this).find('input[type="email"]').val();
        
        if (email) {
            // Here you would typically send the email to your server
            alert('Thank you for subscribing to our newsletter!');
            $(this).find('input[type="email"]').val('');
        } else {
            alert('Please enter a valid email address.');
        }
    });
    
    // Mobile menu toggle
    $('.navbar-toggler').on('click', function() {
        $(this).toggleClass('active');
    });
    
    // Close mobile menu when clicking on a link
    $('.navbar-nav a').on('click', function() {
        if ($(window).width() < 992) {
            $('.navbar-collapse').collapse('hide');
            $('.navbar-toggler').removeClass('active');
        }
    });
    
    // Header background on scroll
    $(window).scroll(function() {
        if ($(window).scrollTop() > 50) {
            $('.site-header').addClass('scrolled');
        } else {
            $('.site-header').removeClass('scrolled');
        }
    });
    
    // Initialize tooltips
    $('[data-bs-toggle="tooltip"]').tooltip();
    
    // Initialize popovers
    $('[data-bs-toggle="popover"]').popover();
    
    // Lazy loading for images
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.classList.remove('lazy');
                    imageObserver.unobserve(img);
                }
            });
        });
        
        document.querySelectorAll('img[data-src]').forEach(img => {
            imageObserver.observe(img);
        });
    }
    
    // Contact form validation
    $('.dz-form').on('submit', function(e) {
        e.preventDefault();
        
        var name = $(this).find('input[name="dzName"]').val();
        var email = $(this).find('input[name="dzEmail"]').val();
        var message = $(this).find('textarea[name="dzMessage"]').val();
        
        if (!name || !email || !message) {
            alert('Please fill in all fields.');
            return false;
        }
        
        if (!isValidEmail(email)) {
            alert('Please enter a valid email address.');
            return false;
        }
        
        // Here you would typically send the form data to your server
        alert('Thank you for your message! We will get back to you soon.');
        $(this)[0].reset();
    });
    
    function isValidEmail(email) {
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }
    
    // Parallax effect for hero section
    $(window).scroll(function() {
        var scrolled = $(window).scrollTop();
        var parallax = $('.hero-section');
        var speed = 0.5;
        
        parallax.css('transform', 'translateY(' + (scrolled * speed) + 'px)');
    });
    
    // Counter animation
    function animateCounters() {
        $('.counter').each(function() {
            var $this = $(this);
            var countTo = $this.attr('data-count');
            
            $({ countNum: $this.text() }).animate({
                countNum: countTo
            }, {
                duration: 2000,
                easing: 'swing',
                step: function() {
                    $this.text(Math.floor(this.countNum));
                },
                complete: function() {
                    $this.text(this.countNum);
                }
            });
        });
    }
    
    // Trigger counter animation when in viewport
    var counterObserver = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounters();
                counterObserver.unobserve(entry.target);
            }
  });
});
    
    $('.counter').each(function() {
        counterObserver.observe(this);
    });
    
    // Back to top button with progress indicator
    $(window).scroll(function() {
        var scrollTop = $(window).scrollTop();
        var docHeight = $(document).height() - $(window).height();
        var scrollPercent = (scrollTop / docHeight) * 100;
        
        $('.scroltop').css('background', `conic-gradient(var(--primary-color) ${scrollPercent}%, #ddd ${scrollPercent}%)`);
    });
    
    // Preloader
    $(window).on('load', function() {
        $('.preloader').fadeOut('slow');
    });
    
    // Add loading class to body
    $('body').addClass('loaded');
    
});

// Additional utility functions
function debounce(func, wait, immediate) {
    var timeout;
    return function executedFunction() {
        var context = this;
        var args = arguments;
        var later = function() {
            timeout = null;
            if (!immediate) func.apply(context, args);
        };
        var callNow = immediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        if (callNow) func.apply(context, args);
    };
}

// Optimize scroll events
var optimizedScroll = debounce(function() {
    // Scroll event code here
}, 10);

window.addEventListener('scroll', optimizedScroll);
