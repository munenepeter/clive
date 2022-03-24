function updateClient() {
	return {
		formData: {
            names: "",
            national_id: "",
            kra_pin: "",
            email: "",
            phone_number: ""
		},
		message: '',
        
		submitData() {
			this.message = ''

			fetch('/clients/update', {
				method: 'POST',
				headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify(this.formData)
            })
			.then(() => {
				this.message = 'Form sucessfully submitted!'
			})
			.catch(() => {
				this.message = 'Ooops! Something went wrong!'
			})
		}
	}
}