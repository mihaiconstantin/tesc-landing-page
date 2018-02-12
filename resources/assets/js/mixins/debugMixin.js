import { pretty } from 'js-object-pretty-print';

export const debugMixin = {
	
	methods: {
		debug(object, indent = 2, output = 'JSON') {
			return pretty(object, indent, output);
		}
	}

}