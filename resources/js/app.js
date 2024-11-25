import './bootstrap';
import { handleNavbarScroll, handleMenuToggle, highlightActiveLink, chicharron } from './navbar';
import { observeHeroSections, animateHeroTitle, animatedTimeline } from './animation';


observeHeroSections();
animateHeroTitle();
handleNavbarScroll();
handleMenuToggle();
highlightActiveLink();
chicharron();

document.addEventListener('DOMContentLoaded', () => {
    animatedTimeline();
});
