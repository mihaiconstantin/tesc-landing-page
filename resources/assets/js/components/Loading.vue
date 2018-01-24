<template>
 	<div id="app-loading" class="br row">
 		<div class="bk words display-4 mx-auto">
 			<div class="bk base-word">Tilburg</div>
			<span class="bk word d-flex justify-content-center" v-for="setting in settings" v-html="setting.lettersHTML" :id="setting.id" :style="{ color: setting.color, opacity: setting.opacity }"></span> 
			</span> 
 		</div>
 	</div>
</template>


<script>
	export default {
		data() {
			return {
				settings: [
					{ word: 'Experience', 	id: 0, lettersArray: null, lettersHTML: null,  color: '#FFC107', opacity: 1 },
					{ word: 'Sampling', 	id: 1, lettersArray: null, lettersHTML: null,  color: '#FFC107', opacity: 0 },
					{ word: 'Center', 		id: 2, lettersArray: null, lettersHTML: null,  color: '#FFC107', opacity: 0 }
				],
				currentWord: 0
			}
		},

		created() {
			this.splitLetters();
		},

		mounted() {
			setInterval(this.changeWord, 1500);
		},

		methods: {
			splitLetters() {
				this.settings.forEach((setting) => {
					let letters = [];
					for (var i = 0; i < setting.word.length; i++) {
						let letter = `<span class="letter">${ setting.word.charAt(i) == ' ' ? '&nbsp;' : setting.word.charAt(i) }</span>`;
						letters.push(letter);
					}
					setting.lettersArray = letters;
					setting.lettersHTML = letters.join('');
				});
			},

			changeWord() {
				let currentWord = document.getElementById(this.currentWord).getElementsByTagName('span');
				let nextWord = (this.currentWord == this.settings.length - 1) ? document.getElementById(0).getElementsByTagName('span') : document.getElementById(this.currentWord + 1).getElementsByTagName('span');
				this.currentWord = (this.currentWord == this.settings.length - 1) ? 0 : this.currentWord + 1;

				// Animate the letters in the current word.
				for (let letterIndex = 0; letterIndex < currentWord.length; letterIndex++) {
					this.animateLetterOut(currentWord, letterIndex);
				}
				
				// Animate the letters in the next word.
				for (let letterIndex = 0; letterIndex < nextWord.length; letterIndex++) {
					nextWord[letterIndex].className = 'letter behind';
					nextWord[0].parentElement.style.opacity = 1;
					this.animateLetterIn(nextWord, letterIndex);					
				}
			},

			animateLetterOut(currentWord, letterIndex) {
				setTimeout(() => {
					currentWord[letterIndex].className = 'letter out';
				}, letterIndex * 80);
			},

			animateLetterIn(nextWord, letterIndex) {
				setTimeout(() => {
					nextWord[letterIndex].className = 'letter in';
				}, 340 + (letterIndex * 80));
			}
		}
	}
</script>


<style lang="scss">
	@import "../../sass/variables";
	@import "../../sass/mixins";

	#app-loading {
		margin-top: 5%;
		height: 290px;
		padding: 50px 0;

		.display-4 {
			line-height: unset;
		}
	}

	.words {
		@include material_shadow_md;
		border-radius: 10px;
		position: relative;
		width: 450px;
	}

	.base-word {
		color: $app-darkblue;
		text-align: center;
	}

	.word {
		position: absolute;
		top: 100px;
		left: 0; 
		right: 0;
	}

	@media (max-width: 767px) {
		.words {
			width: 90%;
		}
	}

	.letter {
    	float: left;
		transform: translateZ(25px);
		transform-origin: 50% 50% 25px;
	}

	.letter.out {
		transform: rotateX(90deg);
		transition: transform 0.32s cubic-bezier(0.55, 0.055, 0.675, 0.19);
	}

	.letter.in {
		transform: rotateX(0deg);
		transition: transform 0.38s cubic-bezier(0.175, 0.885, 0.32, 1.275);
	}

	.letter.behind {
		transform: rotateX(-90deg);
	}
</style>