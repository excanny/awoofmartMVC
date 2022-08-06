// JavaScript Document
var options = {

    url: "assets/js/adsearch.json",

    categories: [{
        listLocation: "categories",
        maxNumberOfElements: 5
        
    }, {
        listLocation: "loneterms",
        maxNumberOfElements: 5
        
    }],

    getValue: function(element) {
        return element.character;
    },

    template: {
        type: "description",
        fields: {
            description: "categoryName"
        }
    },

    list: {
        maxNumberOfElements: 10,
        match: {
            enabled: true
        },
        sort: {
            enabled: true
        }
    },

    
};

$("input:text[name='search']").easyAutocomplete(options);


/****************************************************/
/**** Sellers List *****/
var options = {
    url: "assets/js/sellersearch.json",

    getValue: "text",

    template: {
        type: "links",
        fields: {
            link: "website-link"
        }
    },

    theme: "plate-dark"
};

$("#inputSeller").easyAutocomplete(options);

/*****************************************************/

(function ($) {
  $(document).ready(function () {
     
    uploadImage()

    
    function uploadImage() {
      var button = $('.images .pic')
      var uploader = $('<input type="file" accept="image/*" />')
      var images = $('.images')
      
      button.on('click', function () {
        uploader.click()
      })
      
      uploader.on('change', function () {
          var reader = new FileReader()
          reader.onload = function(event) {
            images.prepend('<div class="img" style="background-image: url(\'' + event.target.result + '\');" rel="'+ event.target.result  +'"><span>remove</span></div>')
          }
          reader.readAsDataURL(uploader[0].files[0])
  
       })
      
      images.on('click', '.img', function () {
        $(this).remove()
      })
    
    }
    
    
    // helpers
    
  })
})(jQuery)