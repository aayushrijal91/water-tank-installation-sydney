AOS.init({ duration: 1500 });

document.querySelectorAll('a[href="#form"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

$(window).on('scroll', () => {
    if ($(this).scrollTop() >= 600) {
        $('#return-to-top').fadeIn(300);
    } else {
        $('#return-to-top').fadeOut(300);
    }
});

$('#return-to-top').on('click', () => {
    $('body,html').animate({
        scrollTop: 0
    }, 500);
});

$(".cross-btn").on('click', function () {
    $(this).toggleClass('active');
});

$(() => {
    $(".services-slider").slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: false,
        autoplay: true,
        variableWidth: true,
        responsive: [{
            breakpoint: 540,
            settings: {
                slidesToShow: 1,
                variableWidth: false,
            }
        }]
    });

    $(".testimonials-slider").slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        centerMode: true,
        arrows: false,
        centerPadding: "120px",
        autoplay: true,
        responsive: [{
            breakpoint: 540,
            settings: {
                slidesToShow: 1,
                centerPadding: "0px"
            }
        }]
    })
});

$(".accordion-head").on('click', function () {
    $(".accordion-head").removeClass("active");
    $(this).addClass('active');

    if ($('.accordion-body').is(':visible')) {
        $(".accordion-body").slideUp(300);
        $(".plusminus").html('<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M14.9323 0.38916C6.77371 0.38916 0.159546 7.00332 0.159546 15.1619C0.159546 23.3205 6.77371 29.9347 14.9323 29.9347C23.0909 29.9347 29.705 23.3205 29.705 15.1619C29.705 7.00332 23.0909 0.38916 14.9323 0.38916ZM10.5099 12.198C10.2566 11.9533 9.91734 11.818 9.56522 11.821C9.21309 11.8241 8.87626 11.9653 8.62726 12.2143C8.37826 12.4633 8.23702 12.8001 8.23396 13.1523C8.2309 13.5044 8.36627 13.8436 8.6109 14.0969L13.9828 19.4688C14.2347 19.7206 14.5762 19.862 14.9323 19.862C15.2884 19.862 15.6299 19.7206 15.8818 19.4688L21.2537 14.0969C21.4983 13.8436 21.6337 13.5044 21.6306 13.1523C21.6276 12.8001 21.4863 12.4633 21.2373 12.2143C20.9883 11.9653 20.6515 11.8241 20.2994 11.821C19.9472 11.818 19.608 11.9533 19.3547 12.198L14.9323 16.6204L10.5099 12.198Z" fill="#131316" /></svg>');
    }
    if ($(this).next(".accordion-body").is(':visible')) {
        $(this).next(".accordion-body").slideUp(300);
        $(this).children(".plusminus").html('<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M14.9323 0.38916C6.77371 0.38916 0.159546 7.00332 0.159546 15.1619C0.159546 23.3205 6.77371 29.9347 14.9323 29.9347C23.0909 29.9347 29.705 23.3205 29.705 15.1619C29.705 7.00332 23.0909 0.38916 14.9323 0.38916ZM10.5099 12.198C10.2566 11.9533 9.91734 11.818 9.56522 11.821C9.21309 11.8241 8.87626 11.9653 8.62726 12.2143C8.37826 12.4633 8.23702 12.8001 8.23396 13.1523C8.2309 13.5044 8.36627 13.8436 8.6109 14.0969L13.9828 19.4688C14.2347 19.7206 14.5762 19.862 14.9323 19.862C15.2884 19.862 15.6299 19.7206 15.8818 19.4688L21.2537 14.0969C21.4983 13.8436 21.6337 13.5044 21.6306 13.1523C21.6276 12.8001 21.4863 12.4633 21.2373 12.2143C20.9883 11.9653 20.6515 11.8241 20.2994 11.821C19.9472 11.818 19.608 11.9533 19.3547 12.198L14.9323 16.6204L10.5099 12.198Z" fill="#131316" /></svg>');
    } else {
        $(this).next(".accordion-body").slideDown(300);
        $(this).children(".plusminus").html('<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M14.9323 29.9917C6.77371 29.9917 0.159546 23.3775 0.159546 15.219C0.159546 7.06037 6.77371 0.446207 14.9323 0.446207C23.0909 0.446207 29.705 7.06037 29.705 15.219C29.705 23.3775 23.0909 29.9917 14.9323 29.9917ZM10.5099 18.1829C10.2566 18.4275 9.91734 18.5629 9.56522 18.5598C9.21309 18.5568 8.87626 18.4155 8.62726 18.1665C8.37826 17.9175 8.23702 17.5807 8.23396 17.2286C8.2309 16.8765 8.36627 16.5372 8.6109 16.2839L13.9828 10.912C14.2347 10.6603 14.5762 10.5188 14.9323 10.5188C15.2884 10.5188 15.6299 10.6603 15.8818 10.912L21.2537 16.2839C21.4983 16.5372 21.6337 16.8765 21.6306 17.2286C21.6276 17.5807 21.4863 17.9175 21.2373 18.1665C20.9883 18.4155 20.6515 18.5568 20.2994 18.5598C19.9472 18.5629 19.608 18.4275 19.3547 18.1829L14.9323 13.7605L10.5099 18.1829Z" fill="#131316"/></svg>');
    }
});