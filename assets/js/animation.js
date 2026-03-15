function scroll() {
  gsap.registerPlugin(ScrollTrigger);

  const inner = document.querySelector(".trust-inner");
  const boxWrap = document.querySelector(".trust-box");

  if (!inner || !boxWrap) return;

  const totalScroll = inner.scrollHeight - boxWrap.offsetHeight;

  gsap.to(inner, {
    y: -totalScroll,
    ease: "none",
    scrollTrigger: {
      trigger: ".trust",
      start: "top top-=200",
      end: () => `+=${totalScroll}`,
      scrub: true,
      pin: true,
      anticipatePin: 1,
    },
  });
}


// function logoAnimation() {
//   gsap.registerPlugin(MotionPathPlugin);

//   const logo = document.querySelector("#site-logo");
//   const headerSlot = document.querySelector(".logo-box");

//   let tl;
//   let lastScrollY = window.scrollY;

//   /* GSAP-safe centering (replaces CSS translate) */
//   gsap.set(logo, {
//     xPercent: -50,
//     yPercent: -50,
//     x: 0,
//     y: 0
//   });

//   function getFinalValues() {
//     const targetRect = headerSlot.getBoundingClientRect();

//     // Center of viewport (logo start point)
//     const logoCenterX = window.innerWidth / 2;
//     const logoCenterY = window.innerHeight / 2;

//     // Center of target slot
//     const targetCenterX = targetRect.left + targetRect.width / 2;
//     const targetCenterY = targetRect.top + targetRect.height / 2;

//     const x = targetCenterX - logoCenterX;
//     const y = targetCenterY - logoCenterY;

//     // Scale based on CSS width (transform-safe)
//     const scale = targetRect.width / logo.offsetWidth;

//     return { x, y, scale };
//   }

//   function getCurvedPath(final) {
//     return [
//       { x: 0, y: 0 },
//       { x: final.x * -0.15, y: final.y * 0.5 },
//       { x: final.x, y: final.y }
//     ];
//   }

//   function buildTimeline() {
//     const final = getFinalValues();

//     tl = gsap.timeline({ paused: true });

//     tl.to(logo, {
//       motionPath: {
//         path: getCurvedPath(final),
//         curviness: 1.2
//       },
//       scale: final.scale,
//       duration: 1,
//       ease: "power3.out"
//     });
//   }

//   buildTimeline();

//   function onScroll() {
//     const currentY = window.scrollY;

//     if (currentY > lastScrollY) {
//       tl.play();
//     } else if (currentY < lastScrollY) {
//       tl.reverse();
//     }

//     lastScrollY = currentY;
//   }

//   window.addEventListener("scroll", onScroll, { passive: true });

//   window.addEventListener("resize", () => {
//     const progress = tl.progress();
//     tl.kill();
//     buildTimeline();
//     tl.progress(progress);
//   });
// }

// function logoAnimation() {
//   gsap.registerPlugin(MotionPathPlugin);

//   const logo = document.querySelector("#site-logo");
//   const headerSlot = document.querySelector(".logo-box");
//   const main = document.querySelector("main");

//   let tl;
//   let lastScrollY = window.scrollY;
//   let mainTop = main.getBoundingClientRect().top + window.scrollY;

//   /* GSAP-safe centering (no CSS transforms) */
//   gsap.set(logo, {
//     xPercent: -50,
//     yPercent: -50,
//     x: 0,
//     y: 0
//   });

//   function getFinalValues() {
//     const targetRect = headerSlot.getBoundingClientRect();

//     const logoCenterX = window.innerWidth / 2;
//     const logoCenterY = window.innerHeight / 2;

//     const targetCenterX = targetRect.left + targetRect.width / 2;
//     const targetCenterY = targetRect.top + targetRect.height / 2;

//     const x = targetCenterX - logoCenterX;
//     const y = targetCenterY - logoCenterY;

//     const scale = targetRect.width / logo.offsetWidth;

//     return { x, y, scale };
//   }

//   function getCurvedPath(final) {
//     return [
//       { x: 0, y: 0 },
//       { x: final.x * -0.15, y: final.y * 0.5 },
//       { x: final.x, y: final.y }
//     ];
//   }

//   function buildTimeline() {
//     const final = getFinalValues();

//     tl = gsap.timeline({ paused: true });

//     tl.to(logo, {
//       motionPath: {
//         path: getCurvedPath(final),
//         curviness: 1.2
//       },
//       scale: final.scale,
//       duration: 1,
//       ease: "power3.out"
//     });
//   }

//   buildTimeline();

//   function onScroll() {
//     const currentY = window.scrollY;

//     // Scroll down → play immediately
//     if (currentY > lastScrollY) {
//       tl.play();
//     }

//     // Scroll up → reverse ONLY when at top of <main>
//     if (currentY < lastScrollY && currentY <= mainTop) {
//       tl.reverse();
//     }

//     lastScrollY = currentY;
//   }

//   window.addEventListener("scroll", onScroll, { passive: true });

//   window.addEventListener("resize", () => {
//     mainTop = main.getBoundingClientRect().top + window.scrollY;

//     const progress = tl.progress();
//     tl.kill();
//     buildTimeline();
//     tl.progress(progress);
//   });
// }



$(document).ready(function () {
  // scroll();
  // logoAnimation();
});
