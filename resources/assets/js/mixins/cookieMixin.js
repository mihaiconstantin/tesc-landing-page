export const cookieMixin = {
	
	methods: {
		setCookie(key, value, maxAge = false) {
			let cookie = `${key} = ${value}`;

			if (maxAge) {
				cookie = `${cookie}; max-age = ${maxAge}`
			}
			document.cookie = cookie;
		},


		getCookieValue(key) {
			return document.cookie.replace(new RegExp(`(?:(?:^|.*;\\s*)${key}\\s*\\=\\s*([^;]*).*$)|^.*$`), "$1")
		},


		cookieIsEqualTo(key, comparison) {
			return this.getCookieValue(key) === comparison ? true : false;
		}
	}

}