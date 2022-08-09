require('./bootstrap');

import { createApp } from 'vue/dist/vue.esm-bundler';

createApp({

  data() {
    return {
      searchInit: false,
      queryString: '',
      checkboxImages: false,
      checkboxAudio: false,
      results: [],
      checkBoxes: [],
      validation: {
      	'queryInput' : false,
      	'checkBoxes' : false,
      }
    }
  },

  methods: {
    search() {
      this.searchInit = false
      this.results = []
      this.resetValidation()
      if (this.validationCheck())
      {
      	this.callNasaAPI()
      }

    },

    updateCheckboxes() {

    	this.checkBoxes = [];
    	if (this.checkboxImages) {
    		this.checkBoxes.push('image')
    	}
    	if (this.checkboxAudio) {
    		this.checkBoxes.push('audio')
    	}

    },
    resetValidation() {
    	this.validation.queryInput = false
    	this.validation.checkBoxes = false
    },
    validationCheck() {
    	if (this.queryString === "") {
    		this.validation.queryInput = true
    		return false
    	}

    	if (this.checkBoxes.length === 0) {
    		this.validation.checkBoxes = true
    		return false	
    	}

    	return true
    },
    callNasaAPI() {

    	const buildMediaTypeString = () => {

    		let string = "";

    		this.checkBoxes.forEach(function(element){
    			string += element+','
    		})

    		return string;

    	}

        fetch(`https://images-api.nasa.gov/search?q=${this.queryString}&media_type=${buildMediaTypeString()}`, )
        .then((response) => {
            return response.json()
        })
        .then((parsedJson) => {
            this.results = parsedJson["collection"]["items"];
            this.searchInit = true
        })
    }
  },

}).mount('#app')