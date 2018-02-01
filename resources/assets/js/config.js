/**
 * ScrollReveal config.
 */
export function ScrollRevealConfig(ScrollRevealImport) {
	let sr = ScrollRevealImport({
		reset: false
	});

	sr.reveal('.left-enter', {
		viewFactor: 0.3,
		duration: 1500,
		origin: 'left',
		distance: '100px'
	});

	sr.reveal('.right-enter', {
		viewFactor: 0.3,
		duration: 1500,
		origin: 'right',
		distance: '100px'
	});

	sr.reveal('.bottom-enter', {
		viewFactor: 0.3,
		duration: 1300,
		origin: 'bottom',
		distance: '100px'
	});

	sr.reveal('.top-enter', {
		viewFactor: 0.3,
		duration: 1300,
		origin: 'top',
		distance: '100px'
	});

	sr.reveal('.top-enter-accelerated', {
		viewFactor: 0.3,
		duration: 900,
		origin: 'top',
		distance: '0px'
	});	
}
