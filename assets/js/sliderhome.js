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




