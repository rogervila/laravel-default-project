class Test {
	constructor(message) {
		this.message = message;
	}

	log() {
		console.log(this.message);
	}
}

new Test('ok').log();
