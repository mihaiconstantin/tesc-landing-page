> Work in progress. *To be updated*.


### Left to do

- priority 1:
	- add cookie consent
	- add subscription validation (i.e., unique token `URLs`)

- priority 2:
	- configure Laravel Queue to send emails (i.e., https://laravel.com/docs/5.5/mail) for:
		- contact form (i.e., index page)
		- subscription form (i.e., index page)

- priority 3:
	- blog home page:
		- fetch the posts from the `API` as we scroll (i.e., to reduce upfront load time)
		- reduce the `API` data size by limiting the collection to strictly what is needed (e.g., discard full post body, not needed by `BlogPost.vue`)
		- check out why cards don't take the empty place is nearby columns after filtering (i.e., in Chrome)
	- reduce the size scripts and styles (i.e., consider serving some files from a `CDN`)	
