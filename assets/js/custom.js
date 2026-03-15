function handleHeaderScroll(headerSelector, activeClass) {
  const header = $(headerSelector);

  function updateHeaderState() {
    if ($(window).scrollTop() > 0) {
      header.addClass(activeClass);
    } else {
      header.removeClass(activeClass);
    }
  }

  // On scroll
  $(window).on("scroll", updateHeaderState);

  // On page load (refresh in middle)
  updateHeaderState();
}

function setActiveMenu(menuSelector) {
  // Get current page (last part of URL)
  let current =
    window.location.pathname.split("/").filter(Boolean).pop() || "home";
  const siteLogo = document.querySelector("#site-logo");

  // Convert home path
  if (current === "pkk" || current === "index.php") current = "home"; // localhost/pkk/ or /index.php
  if (current === "") current = "home";

  if (current === "home" && siteLogo) {
    window.scrollTo(0, 0);
    siteLogo.classList.add("homepage-logo");
  }

  $(menuSelector).each(function () {
    // Get last part of link URL
    let link = $(this).attr("href").split("/").filter(Boolean).pop();

    // Convert link home
    if (!link || link === "pkk" || link === "index.php") link = "home";

    // Compare
    if (link === current) {
      $(this).addClass("active");
      $(this).parent("li").addClass("active");
    }
  });
}

function navToggle() {
  if ($(window).width() > 992) return;

  const body = $("body");
  const animatedBox = $(".animated-box");
  const mainNav = $("header .main-nav");
  const navItems = $("header .main-nav .nav-wrap");
  const hamburger = $(".hamburger");

  if (animatedBox.hasClass("open")) {
    // CLOSE NAV

    logoScrollTrigger?.enable(); // re-enable scroll control

    // ✅ reverse ONLY if user is at body top
    if (window.scrollY === 0) {
      reverseLogo?.();
    }

    setTimeout(() => hamburger.removeClass("is-active"), 800);
    setTimeout(() => navItems.removeClass("show-items"), 10);
    setTimeout(
      () => animatedBox.fadeOut(0).removeClass("open").addClass("close"),
      1000
    );
    setTimeout(() => mainNav.fadeOut(0).removeClass("show"), 1200);

    body.css({ overflow: "auto" });

  } else {
    // OPEN NAV

    logoScrollTrigger?.disable(); // stop scroll interference
    playLogo?.();

    mainNav.fadeIn(0).addClass("show");
    hamburger.addClass("is-active");
    body.css({ overflow: "hidden" });

    setTimeout(
      () => animatedBox.fadeIn(0).removeClass("close").addClass("open"),
      10
    );
    setTimeout(() => navItems.addClass("show-items"), 500);
  }
}

function resetNav() {
  const animatedBox = $("header .animated-box");
  const mainNav = $("header .main-nav");
  const navItems = $("header .main-nav .nav-wrap");
  const hamburger = $(".hamburger");

  animatedBox.removeClass("open close");
  mainNav.fadeIn(0).removeClass("show");
  navItems.removeClass("show-items");
  hamburger.removeClass("is-active");
}

function btnHoverEffect(selector = ".btn-default") {
  $(selector).on("mousemove", function (e) {
    const rect = this.getBoundingClientRect();
    const x = e.clientX - rect.left;
    const y = e.clientY - rect.top;

    $(this)
      .find(".hover-bg")
      .css({
        left: x + "px",
        top: y + "px",
        opacity: 1,
        width: "250%",
        height: "250%",
      });
  });

  $(selector).on("mouseleave", function () {
    $(this).find(".hover-bg").css({
      opacity: 0,
      width: 0,
      height: 0,
    });
  });
}

function homepageGallerySlider() {
  if ($(".gallery-slider").length) {
    $(".gallery-slider").owlCarousel({
      loop: true,
      margin: 15,
      nav: false,
      dots: false,
      autoplay: true,
      smartSpeed: 600,
      stagePadding: 40,
      responsive: {
        0: {
          items: 1,
          stagePadding: 30,
        },
        576: {
          items: 2,
          stagePadding: 50,
        },
        768: {
          items: 3,
          stagePadding: 50,
        },
        991: {
          items: 4,
          stagePadding: 50,
        },
        1200: {
          items: 5,
          stagePadding: 50,
        },
      },
    });
  }
}

function brandSlider() {
  if ($(".creative-slider").length) {
    $(".creative-slider").owlCarousel({
      loop: true,
      margin: 15,
      nav: false,
      dots: false,
      center: false,
      autoplay: true,
      smartSpeed: 600,
      stagePadding: 40,
      responsive: {
        0: {
          items: 1,
        },
        480: {
          items: 2,
        },
        768: {
          items: 2.5,
        },
        992: {
          items: 4,
        },
      },
    });
  }
}

function homepageServiceInit() {
  $(".service-title").on("click", function () {
    var $currentItem = $(this).closest(".service-item");
    var $currentContent = $currentItem.find(".service-content");

    // close others
    $(".service-content").not($currentContent).removeClass("is-open");
    $(".service-title").not(this).removeClass("active");

    // toggle current
    $currentContent.toggleClass("is-open");
    $(this).toggleClass("active");
  });
}

function tabcontent() {

  function initSliders(context) {
    $(context).find(".portfolio-slider").each(function () {

      // Prevent double initialization
      if ($(this).hasClass("owl-loaded")) return;

      $(this).owlCarousel({
        lazyLoad: true,
        loop: true,
        margin: 15,
        nav: false,
        dots: false,
        autoplay: true,
        smartSpeed: 600,
        stagePadding: 40,
        responsive: {
          0: {
            items: 1,
            stagePadding: 30
          },
          576: {
            items: 2,
            stagePadding: 50
          },
          768: {
            items: 3,
            stagePadding: 50
          },
          991: {
            items: 4,
            stagePadding: 50
          },
          1200: {
            items: 5,
            stagePadding: 50
          }
        }
      });
    });
  }


  /* INIT DEFAULT */
  initSliders(".content.active");

  /* MAIN TAB CLICK */
  $(".main-tabs li").on("click", function () {
    const tab = $(this).data("tab");

    $(".main-tabs li").removeClass("active");
    $(this).addClass("active");

    $(".tab-contents .content").removeClass("active");
    const $target = $('.tab-contents .content[data-tab-content="' + tab + '"]');
    $target.addClass("active");

    // LAZY LOAD AI CONTENT ON FIRST OPEN
    if ($target.data("loaded") === false) {
      $target.load("includes/portfolio-ai.php", function () {
        $target.data("loaded", true);
        initSliders($target);
      });
    } else {
      initSliders($target);
    }
  });

}

// function tabcontent() {

//   function showContent(key) {
//     const $current = $(".content.active");
//     const $next = $('.content[data-content="' + key + '"]');

//     if ($current.length && !$current.is($next)) {
//       $current
//         .stop(true, true)
//         .animate({ opacity: 0 }, 200, function () {
//           $current.removeClass("active").css("opacity", "");
//           $next
//             .addClass("active")
//             .css("opacity", 0)
//             .animate({ opacity: 1 }, 300);
//         });
//     }
//   }

//   function setTitle(text) {
//     $(".active-title")
//       .stop(true, true)
//       .fadeOut(150, function () {
//         $(this).text(text).fadeIn(200);
//       });
//   }

//   /* MAIN TAB CLICK (TOGGLE FIX) */
//   $(".main-tabs > li").on("click", function (e) {
//     e.stopPropagation();

//     const $this = $(this);
//     const isOpen = $this.hasClass("open");

//     $(".main-tabs > li").removeClass("open active");

//     if (!isOpen) {
//       $this.addClass("open active");
//     }
//   });

//   /* SUB TAB CLICK */
//   $(".dropdown li").on("click", function (e) {
//     e.stopPropagation();

//     const subKey = $(this).data("sub");
//     const title = $(this).text().trim();

//     $(".dropdown li").removeClass("active");
//     $(this).addClass("active");

//     setTitle(title);
//     showContent(subKey);

//     $(".main-tabs > li").removeClass("open");
//   });

//   /* OUTSIDE CLICK */
//   $(document).on("click", function () {
//     $(".main-tabs > li").removeClass("open");
//   });
// }


// function tabcontent() {

//   function showContent(key) {
//     const $current = $(".content.active");
//     const $next = $('.content[data-content="' + key + '"]');

//     if ($current.length && !$current.is($next)) {
//       $current
//         .stop(true, true)
//         .animate({ opacity: 0 }, 200, function () {
//           $current.removeClass("active").css("opacity", "");
//           $next
//             .addClass("active")
//             .css("opacity", 0)
//             .animate({ opacity: 1 }, 300);
//         });
//     } else if (!$current.length) {
//       $(".content").removeClass("active").css("opacity", "");
//       $next
//         .addClass("active")
//         .css("opacity", 0)
//         .animate({ opacity: 1 }, 300);
//     }
//   }

//   function setTitle(text) {
//     $(".active-title")
//       .stop(true, true)
//       .fadeOut(150, function () {
//         $(this).text(text).fadeIn(200);
//       });
//   }

//   /* MAIN TAB CLICK */
//   $(".main-tabs > li").on("click", function (e) {
//     e.stopPropagation();

//     $(".main-tabs > li").removeClass("open active");
//     $(this).addClass("open active");
//   });

//   /* SUB TAB CLICK */
//   $(".dropdown li").on("click", function (e) {
//     e.stopPropagation();

//     const subKey = $(this).data("sub");
//     const title = $(this).text().trim();

//     $(".dropdown li").removeClass("active");
//     $(this).addClass("active");

//     setTitle(title);
//     showContent(subKey);

//     $(".main-tabs > li").removeClass("open");
//   });

//   /* OUTSIDE CLICK */
//   $(document).on("click", function () {
//     $(".main-tabs > li").removeClass("open");
//   });
// }

// function tabcontent() {
//   function showContent(key) {
//     const $current = $(".content.active");
//     const $next = $('.content[data-content="' + key + '"]');

//     if ($current.length) {
//       $current.stop(true, true).fadeOut(200, function () {
//         $current.removeClass("active");
//         $next.fadeIn(300).addClass("active");
//       });
//     } else {
//       $(".content").removeClass("active").hide();
//       $next.fadeIn(300).addClass("active");
//     }
//   }

//   function setTitle(text) {
//     $(".active-title")
//       .stop(true, true)
//       .fadeOut(150, function () {
//         $(this).text(text).fadeIn(200);
//       });
//   }

//   // 👉 Main tab click
//   $(".main-tabs li").on("click", function () {
//     const tab = $(this).data("tab");
//     const mainText = $(this).text().trim();

//     $(".main-tabs li").removeClass("active");
//     $(this).addClass("active");

//     $(".sub-tabs").removeClass("active");

//     if (tab === "photoshoot") {
//       const $firstSub = $("#photoshoot-sub .sub-button").first();

//       $("#photoshoot-sub").addClass("active");
//       $("#photoshoot-sub .sub-button").removeClass("active");
//       $firstSub.addClass("active");

//       const title = $firstSub.find("h3").text().trim();
//       setTitle(title);
//       showContent($firstSub.data("sub"));
//     } else if (tab === "ai") {
//       const $firstSub = $("#ai-sub .sub-button").first();

//       $("#ai-sub").addClass("active");
//       $("#ai-sub .sub-button").removeClass("active");
//       $firstSub.addClass("active");

//       const title = $firstSub.find("h3").text().trim();
//       setTitle(title);
//       showContent($firstSub.data("sub"));
//     } else {
//       setTitle(mainText);
//       showContent(tab);
//     }
//   });

//   // 👉 Sub tab click
//   $(".sub-tabs").on("click", ".sub-button", function () {
//     const sub = $(this).data("sub");
//     const subTitle = $(this).find("h3").text().trim();

//     $(this).siblings(".sub-button").removeClass("active");
//     $(this).addClass("active");

//     setTitle(subTitle);
//     showContent(sub);
//   });
// }

// let playLogo = () => { };
// let reverseLogo = () => { };
// let logoScrollTrigger = null;
// let lastWidth = window.innerWidth;

// function isHomePage() {
//   return window.location.pathname === "/" || window.location.pathname === "";
// }

// function logoAnimation() {
//   if (!isHomePage()) return;

//   gsap.registerPlugin(ScrollTrigger);

//   const logo = document.querySelector("#site-logo");
//   const headerSlot = document.querySelector(".logo-box");

//   if (!logo || !headerSlot) return;

//   // 1. Initial State: Fixed and centered
//   gsap.set(logo, {
//     position: "fixed",
//     left: "50%",
//     top: "50%",
//     xPercent: -50,
//     yPercent: -50,
//     x: 0,
//     y: 0,
//     scale: 1,
//     zIndex: 1000,
//     transformOrigin: "center center"
//   });

//   // Calculate coordinates to move from screen-center to header-slot-center
//   function getFinalValues() {
//     const targetRect = headerSlot.getBoundingClientRect();
//     const logoCenterX = window.innerWidth / 2;
//     const logoCenterY = window.innerHeight / 2;

//     return {
//       x: targetRect.left + targetRect.width / 2 - logoCenterX,
//       y: targetRect.top + targetRect.height / 2 - logoCenterY,
//       scale: targetRect.width / logo.offsetWidth
//     };
//   }

//   // 2. Build the Timeline
//   const tl = gsap.timeline({
//     paused: true,
//     onComplete: () => {
//       // DOCKING LOGIC
//       logo.classList.add("is-docked"); // Apply small-size CSS
//       headerSlot.appendChild(logo);     // Move into Header HTML

//       gsap.set(logo, {
//         position: "static",
//         clearProps: "x,y,scale,left,top,xPercent,yPercent"
//       });
//     }
//   });

//   tl.to(logo, {
//     x: () => getFinalValues().x,
//     y: () => getFinalValues().y,
//     scale: () => getFinalValues().scale,
//     duration: 0.8,
//     ease: "power3.out"
//   });

//   playLogo = () => {
//     if (tl.progress() < 1) tl.play();
//   };

//   reverseLogo = () => {
//     if (tl.progress() > 0) {
//       // UNDOCKING LOGIC
//       const values = getFinalValues();

//       // Remove small-size class and return to body for fixed positioning
//       logo.classList.remove("is-docked");
//       document.body.appendChild(logo);

//       gsap.set(logo, {
//         position: "fixed",
//         left: "50%",
//         top: "50%",
//         xPercent: -50,
//         yPercent: -50,
//         x: values.x,
//         y: values.y,
//         scale: values.scale
//       });

//       tl.reverse();
//     }
//   };

//   // 3. ScrollTrigger Setup
//   logoScrollTrigger = ScrollTrigger.create({
//     start: 30,
//     end: "max",
//     onEnter: playLogo,
//     onLeaveBack: reverseLogo,
//     invalidateOnRefresh: true,
//     fastScrollEnd: true,
//     overwrite: "auto"
//   });

//   // 4. Handle Resize & Orientation Changes
//   window.addEventListener("resize", () => {
//     const currentWidth = window.innerWidth;

//     if (currentWidth !== lastWidth) {
//       lastWidth = currentWidth;

//       // Clean up to prevent coordinate bugs
//       tl.kill();
//       if (logoScrollTrigger) logoScrollTrigger.kill();

//       // Ensure logo is back in body before re-init
//       logo.classList.remove("is-docked");
//       document.body.appendChild(logo);

//       logoAnimation();
//       ScrollTrigger.refresh();
//     } else {
//       // Just a height change (likely mobile address bar), refresh trigger points
//       ScrollTrigger.refresh();
//     }
//   });
// }

// // Initialize
// window.addEventListener("DOMContentLoaded", logoAnimation);

let playLogo = () => { };
let reverseLogo = () => { };
let logoScrollTrigger = null;
let lastWidth = window.innerWidth;

function isHomePage() {
  return !!document.querySelector("#site-logo.homepage-logo");
}

function logoAnimation() {
  if (!isHomePage()) return;
  gsap.registerPlugin(ScrollTrigger);

  const logo = document.querySelector("#site-logo");
  const headerSlot = document.querySelector(".logo-box");
  if (!logo || !headerSlot) return;

  // Set Initial Hero State
  const setInitialState = () => {
    gsap.set(logo, {
      position: "fixed",
      left: "50%",
      top: "50%",
      xPercent: -50,
      yPercent: -50,
      x: 0,
      y: 0,
      scale: 1,
      zIndex: 1000,
      display: "block"
    });
  };
  setInitialState();

  function getTargetCoordinates() {
    const targetRect = headerSlot.getBoundingClientRect();
    const logoRect = logo.getBoundingClientRect();

    // Calculate how far to move from center of screen to center of target box
    return {
      x: targetRect.left + (targetRect.width / 2) - (window.innerWidth / 2),
      y: targetRect.top + (targetRect.height / 2) - (window.innerHeight / 2),
      scale: targetRect.width / logo.offsetWidth
    };
  }

  const tl = gsap.timeline({
    paused: true,
    onComplete: () => {
      logo.classList.add("is-docked");
      headerSlot.appendChild(logo);
      gsap.set(logo, {
        position: "static",
        clearProps: "x,y,scale,left,top,xPercent,yPercent"
      });
    }
  });

  tl.to(logo, {
    x: () => getTargetCoordinates().x,
    y: () => getTargetCoordinates().y,
    scale: () => getTargetCoordinates().scale,
    duration: 0.8,
    ease: "power3.out"
  });

  playLogo = () => { if (tl.progress() < 1) tl.play(); };

  reverseLogo = () => {
    if (tl.progress() > 0) {
      // Grab current position before moving DOM nodes
      const currentRect = logo.getBoundingClientRect();
      const targetVals = getTargetCoordinates();

      logo.classList.remove("is-docked");
      document.body.appendChild(logo);

      // Match the "docked" visual position exactly before starting reverse
      gsap.set(logo, {
        position: "fixed",
        left: "50%",
        top: "50%",
        xPercent: -50,
        yPercent: -50,
        x: targetVals.x,
        y: targetVals.y,
        scale: targetVals.scale
      });

      tl.reverse();
    }
  };

  logoScrollTrigger = ScrollTrigger.create({
    start: 30,
    end: "max",
    onEnter: playLogo,
    onLeaveBack: reverseLogo,
    invalidateOnRefresh: true,
    overwrite: "auto"
  });

  window.addEventListener("resize", () => {
    if (window.innerWidth !== lastWidth) {
      lastWidth = window.innerWidth;
      tl.kill();
      logoScrollTrigger?.kill();
      logo.classList.remove("is-docked");
      document.body.appendChild(logo);
      logoAnimation();
      ScrollTrigger.refresh();
    }
  });
}

function applySimplePhoneMask() {
  $('input[name="phone"]').on('input', function () {
    let input = $(this);
    let value = input.val().replace(/\D/g, '').slice(0, 10);

    let formatted = '';
    if (value.length > 0) formatted += value.slice(0, 4);
    if (value.length > 4) formatted += '-' + value.slice(4, 7);
    if (value.length > 7) formatted += '-' + value.slice(7, 10);

    input.val(formatted);
  });
}

function isValidForm() {
  const fname = $('input[name="fname"]').val().trim();
  const lname = $('input[name="lname"]').val().trim();
  const email = $('input[name="email"]').val().trim();
  const phone = $('input[name="phone"]').val().trim();
  const message = $('textarea[name="message"]').val().trim();

  const patterns = {
    name: /^[a-zA-Z\s]{2,50}$/,
    email: /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/,
    phone: /^\d{4}-\d{3}-\d{3}$/
  };

  if (!patterns.name.test(fname)) {
    $("#inputError .form__msg").text("Please enter a valid first name.");
    $("#inputError").fadeIn();
    return false;
  }

  if (!patterns.name.test(lname)) {
    $("#inputError .form__msg").text("Please enter a valid last name.");
    $("#inputError").fadeIn();
    return false;
  }

  if (!patterns.email.test(email)) {
    $("#inputError .form__msg").text("Please enter a valid email address.");
    $("#inputError").fadeIn();
    return false;
  }

  if (!patterns.phone.test(phone)) {
    $("#inputError .form__msg").text("Please enter a valid phone number.");
    $("#inputError").fadeIn();
    return false;
  }

  if (message.length < 5) {
    $("#inputError .form__msg").text("Please enter a valid message.");
    $("#inputError").fadeIn();
    return false;
  }

  $("#inputError").hide();
  return true;
}

function inquiryFormSubmission() {
  $(".inquiry__form").on("submit", function (e) {
    e.preventDefault();

    if (!isValidForm()) return;

    $("#formLoader").show();
    $("#formSuccess, #formError").hide();

    $.ajax({
      type: "POST",
      url: $(this).attr("action"),
      data: $(this).serialize(),
      success: function (response) {
        $("#formLoader").hide();

        if (response.toLowerCase().includes("success")) {
          $(".inquiry__form").hide();
          $("#formSuccess").fadeIn();
        } else {
          $("#formError .form__msg").text(response);
          $("#formError").fadeIn();
        }
      },
      error: function () {
        $("#formLoader").hide();
        $("#formError").fadeIn();
      }
    });
  });
}

function portfolioLightbox() {

  /* OPEN LIGHTBOX */
  $(document).on("click", ".img-box img", function () {
    const src = $(this).attr("src");

    let $lightbox = $("#portfolioLightbox");

    if (!$lightbox.length) {
      $("body").append(`
        <div class="portfolio-lightbox" id="portfolioLightbox">
          <span class="lightbox-close">&times;</span>
          <img class="lightbox-img" src="" alt="">
        </div>
      `);
      $lightbox = $("#portfolioLightbox");
    }

    $lightbox.find(".lightbox-img").attr("src", src);
    $lightbox.addClass("active");
  });

  /* CLOSE: BACKDROP / CLOSE ICON */
  $(document).on("click", ".portfolio-lightbox, .lightbox-close", function (e) {
    if (
      $(e.target).hasClass("portfolio-lightbox") ||
      $(e.target).hasClass("lightbox-close")
    ) {
      $("#portfolioLightbox").removeClass("active");
    }
  });

  /* CLOSE: ESC KEY */
  $(document).on("keydown", function (e) {
    if (e.key === "Escape") {
      $("#portfolioLightbox").removeClass("active");
    }
  });

}

$(document).ready(function () {
  handleHeaderScroll("header", "scrolled");
  setActiveMenu(".nav-wrap nav ul li a, .footer-menu li a");
  $(".hamburger").on("click", navToggle);
  $(window).on("resize", function () {
    if ($(this).width() > 992) {
      resetNav();
    }
  });
  btnHoverEffect();
  homepageGallerySlider();
  homepageServiceInit();
  brandSlider();
  tabcontent();
  logoAnimation();
  applySimplePhoneMask();
  inquiryFormSubmission();
  portfolioLightbox()
});

$(window).on("load", function () {
  setActiveMenu(".nav-wrap nav ul li a");
});

$(document).ready(function () {
  const params = new URLSearchParams(window.location.search);
  const mainTab = params.get("tab");

  if (!mainTab) return;

  const $mainTabEl = $('.main-tabs > li[data-tab="' + mainTab + '"]');

  if ($mainTabEl.length) {
    // 🔑 Trigger the actual tab click
    $mainTabEl.trigger("click");
  }

  /* Smooth scroll to portfolio section */
  setTimeout(function () {
    const section = document.getElementById("work-tab");
    if (!section) return;

    const offset = 40;
    const y =
      section.getBoundingClientRect().top +
      window.pageYOffset -
      offset;

    window.scrollTo({
      top: y,
      behavior: "smooth"
    });
  }, 250);
});

