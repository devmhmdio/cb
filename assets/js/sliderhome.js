const spaceHolder = document.querySelector('.space-holder');
const horizontal = document.querySelector('.horizontal');
spaceHolder.style.height = `${calcDynamicHeight(horizontal)}px`;

function calcDynamicHeight(ref) {
  const vw = window.innerWidth;
  const vh = window.innerHeight;
  const objectWidth = ref.scrollWidth;
  return objectWidth - vw + vh + 150; // 150 is the padding (in pixels) desired on the right side of the .cards container. This can be set to whatever your styles dictate
}

window.addEventListener('scroll', () => {
  const sticky = document.querySelector('.sticky');
  horizontal.style.transform = `translateX(-${sticky.offsetTop}px)`;
});

window.addEventListener('resize', () => {
  spaceHolder.style.height = `${calcDynamicHeight(horizontal)}px`;
});

document.addEventListener('mousemove', e => parallax(e));

const parallax = (e) => {
	document.querySelectorAll('.layer').forEach(layer => {
		const speed = layer.getAttribute('data-speed');

		const x = (window.innerWidth - e.pageX * speed) / 100;
		const y = (window.innerHeight - e.pageY * speed) / 100;

		layer.style.transform = `translate(${x}px, ${y}px)`;
	});
}
function progress() {

  var windowScrollTop = $(window).scrollTop();
  var docHeight = $(document).height();
  var windowHeight = $(window).height();
  var progress = (windowScrollTop / (docHeight - windowHeight)) * 100;
  var $bgColor = progress > 99 ? '#4db792' : '#EF4E31';
  var $textColor = progress > 99 ? '#fff' : '#333';

  $('.progress .bar').width(progress + '%').css({ backgroundColor: $bgColor });
  $('h1').text(Math.round(progress) + '%').css({ color: $textColor });
  $('.fill').height(progress + '%').css({ backgroundColor: $bgColor });
}

progress();

$(document).on('scroll', progress);

//////



function progress() {

  var windowScrollTop = $(window).scrollTop();
  var docHeight = $(document).height();
  var windowHeight = $(window).height();
  var progress = (windowScrollTop / (docHeight - windowHeight)) * 100;
  var $bgColor = progress > 99 ? '#4db792' : '#EF4E31';
  var $textColor = progress > 99 ? '#fff' : '#333';

  $('.progress .bar').width(progress + '%').css({ backgroundColor: $bgColor });
  $('h1').text(Math.round(progress) + '%').css({ color: $textColor });
  $('.fill').height(progress + '%').css({ backgroundColor: $bgColor });
}

progress();

$(document).on('scroll', progress);




$(document).ready(function(){

  // Anchor arrow click
  // smooth scroll to anchor tag
 $('a[href*="#"]:not([href="#featured"])').click(function() { // Check to see if anchor tag is not carousel's featured link
      if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
          // Smooth scroll to link section
          $('html, body').animate({
            scrollTop: target.offset().top + 50
          }, 900);
          return false;
        }
      }
    });
    
  //highlight navigation
  $(window).scroll(function() {
    var windowpos = $(window).scrollTop();
    $('nav li a').removeClass('active');
    $('.progress-bar--circle').removeClass('active');

    if (windowpos > $('#top').offset().top) {
      $('nav li a').removeClass('active');
      $('a[href$="#top"]').addClass('active');
    } //windowpos

    if (windowpos > $('#article-1').offset().top) {
      $('nav li a').removeClass('active');
      $('a[href$="#article-1"]').addClass('active');
      $('a[href$="#article-1"] .progress-bar--circle').addClass('active');
    } //windowpos

    if (windowpos > $('#article-2').offset().top) {
      $('nav li a').removeClass('active');
      $('a[href$="#article-2"]').addClass('active');
      $('a[href$="#article-2"] .progress-bar--circle').addClass('active');
    } //windowpos

    if (windowpos > $('#article-3').offset().top) {
      $('nav li a').removeClass('active');
      $('a[href$="#article-3"]').addClass('active');
      $('a[href$="#article-3"] .progress-bar--circle').addClass('active');
    } //windowpos

    if (windowpos > $('#bottom').offset().top) {
      $('nav li a').removeClass('active');
      $('a[href$="#bottom"]').addClass('active');
    } //windowpos

    // Scrollbar progression
        // pixels scrolled from top
    var scrollTop = $(window).scrollTop(),
        // document height
        docHeight = $(document).height(),
        // window height
        winHeight = $(window).height(),
        // percent of document scrolled
        scrollPercent = (scrollTop) / (docHeight - winHeight),
        scrollPercentRounded = Math.round(scrollPercent*100);

    // incement progress bar as user scrolls
    $('.progress-bar--increment').css('height', scrollPercentRounded + '%');
  });

}); // on load
