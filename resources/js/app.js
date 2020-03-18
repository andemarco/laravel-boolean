require('./bootstrap');

const $ = require('jquery');

// alert('ciao');
$(document).ready(function () {
  $('#options').change(function() {
    // console.log(window.location.protocol + '//'
    //   + window.location.host + '/api/students/genders');
    $.ajax({
      'url' : window.location.protocol + '//'
        + window.location.host + '/student/genders',
        'data' : {
          'genere' : $(this).val(),
        },
        'method' : 'POST',
        success: function(data) {
          console.log(data.error);
          if (data.response.length > 0) {
          console.log(data.response);
          } else {
          console.log('no students');
          }
        },
        error: function() {
        console.log('error')
        }
      }
    );
  });
});
