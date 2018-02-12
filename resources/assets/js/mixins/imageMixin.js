export const imageMixin = {
	methods: {

		revealPath(filePath, storageDisk) {
			return `${storageDisk}/${filePath}`;
		},

		itExists(filePath) {
			return (filePath === null || filePath.length < 5) ? false : true;
		},

		isApproved(approvalStatus) {
			return approvalStatus == 1 ? true : false;
		},

		itExistsAndisApproved(filePath, approvalStatus) {
			return this.itExists(filePath) && this.isApproved(approvalStatus);
		}
	}
}