<template>
	<div id="app-main-navbar">

		<nav class="br navbar navbar-expand-sm fixed-top navbar-light bg-app-navbar">
			<a class="bg navbar-brand" href="#app-carousel" v-smooth-scroll="{ duration: 500, offset: -61 }">
				<img :src="revealPath(settings.navbar_logo, 'storage')" alt="TESC logo" class="img-fluid">
			</a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-toggler" aria-controls="navbar-toggler" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="bg collapse navbar-collapse justify-content-end" id="navbar-toggler">
				<ul id="link-list" class="bk navbar-nav">
					<li v-for="link in links"
							@click="collapseBurgerMenu"
							:class="{ active: isActive(link.name) }"
							class="bp nav-item">

						<a :href="link.href" v-smooth-scroll="{ duration: 500, offset: -61 }" class="nav-link">
							{{ link.name }}
						</a>
					</li>
				</ul>
			</div>
		</nav>
		
	</div>
</template>


<script>
	import { imageMixin } from '../mixins/imageMixin';

	export default {
		mixins: [
			imageMixin
		],

		computed: {
			settings() {
				return this.$store.state.initialization.siteSettingsVoyager;
			}
		},

		data() {
		   return {
			   links: [
				   {name: 'About',    href: '#app-about',		},
				   {name: 'People',   href: '#app-people',		},
				   {name: 'Projects', href: '#app-projects',	},
				   {name: 'Contact',  href: '#app-contact',		},
				   {name: 'Blog',     href: '#blog',			},
			   ],

			   activeLink: 'About',
		   }
		},

		methods: {
			isActive(menuItem) {
				return this.activeLink === menuItem
			},

			setActiveOnScroll() {
				// Getting the offset details of the sections based on the href value (i.e., section id). Excluding the last link (i.e., blog).
				let offsets = this.determineSectionsOffset(this.links.slice(0, this.links.length - 1));

				// Get the current scrollbar position (i.e., 350 is an arbitrary offset).
				let scrollBarPosition = (window.pageYOffset || document.documentElement.scrollTop) + 350;

				// Check which section is currently on scroll scope and set 'activeLink' to the corresponding name of that section.
				offsets.forEach((section) => {
					if (section.offset <= scrollBarPosition && section.offset + section.height > scrollBarPosition) {
						this.activeLink = section.name;
					} 
				});
			},

			determineSectionsOffset(linksArray) {
				let details = [];
				linksArray.forEach((link) => {
					// Removing the '#' from the 'href' property (i.e., from '#app-about' to 'app-about').
					let id = link.href.substr(1);
					
					// Fetch the section corrsponding to that id.
					let section = document.getElementById(id);

					// Fetch section scroll position (i.e., offset from top) and height.
					let offset = section.offsetTop;
					let height = section.clientHeight ;

					// Store the details for each section, as objects, into an array.
					details.push({id, offset, height, name: link.name});
				});

				return details;
			},

			collapseBurgerMenu() {
				// This next line is sad. I promise to do better.
				$('.navbar-collapse').collapse('hide');
			},
		},

		created: function () {
			this.$nextTick(function () {
				window.addEventListener('scroll', this.setActiveOnScroll);
			});
		},

		destroyed: function () {
			window.removeEventListener('scroll', this.setActiveOnScroll);
		}
	}
</script>


<style lang="scss" scoped>
	@import "../../sass/variables";
	@import "../../sass/mixins";

	.bg-app-navbar {
		@include material_shadow_md;
		background-color: $app-bg-navbar;
		transition: all 0.3s cubic-bezier(.25, .8, .25, 1);
	}

	.navbar-brand {
		img {
			height: 35px;
		}
	}

	.active {
		font-weight: 500;
		
		a {
			color: $app-darkblue !important;
		} 
	}

	// Underline effect for the menu items. Only form 'md' and larger.
	@media (min-width: 576px) {
		nav {
			li {
				position: relative;

				&:before {
					content: '';
					height: 2px;
					position: absolute; 
					left: 0; 
					right: 100%; 
					bottom: 10%;
					background-color: $app-bg-primary;
					transition: right 0.3s ease;
					z-index: -1;
				}

				&:hover {
					&:before {
						right: 0%;
					}
				}
			}
		}
	}
</style>