<template>
	<div id="app-blog-navbar">

		<nav class="br navbar navbar-expand-sm fixed-top navbar-light bg-app-navbar">
			<a class="bg navbar-brand" href="/blog">
				<img :src="revealPath(logo, '/storage')" alt="TESC logo" class="img-fluid">
			</a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-toggler" aria-controls="navbar-toggler" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="bg collapse navbar-collapse justify-content-end" id="navbar-toggler">
				<ul id="link-list" class="bk navbar-nav">
					<li v-for="link in links"
							@click="clickHandler(link.name)"
							:class="{ active: isActive(link.name) }"
							class="bp nav-item">

						<a :href="link.href" class="nav-link">{{ link.name }}</a>
					</li>
				</ul>
			</div>
		</nav>

	</div>
</template>


<script>
	import { imageMixin } from '../../mixins/imageMixin';

	export default {
		mixins: [
			imageMixin
		],

		props: [
			'logo',
			'setActiveLink'
		],

		data() {
		   return {
			   links: [
				   {name: 'Home',		href: '/'					},
				   {name: 'Blog',		href: '/blog'				},
				   {name: 'Members',	href: '/page/tesc-members'	}
			   ],
			   activeLink: this.setActiveLink
		   }
		},

		methods: {
			isActive(menuItem) {
				return this.activeLink === menuItem
			},
			setActive(menuItem) {
				this.activeLink = menuItem;
			},

			collapseBurgerMenu() {
				$('.navbar-collapse').collapse('hide');
			},

			clickHandler(menuItem) {
				this.setActive(menuItem);
				this.collapseBurgerMenu();
			}
		}
	}
</script>


<style lang="scss" scoped>
	@import "../../../sass/variables";
	@import "../../../sass/mixins";

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