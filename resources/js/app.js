require('./bootstrap');

const $ = require('jquery');

// alert('ciao');

// $(document).ready(function () {
//     $('#options').change(function () {
//         console.log($(this).val());
//         console.log(window.location.origin + "api/students/genders");
//
//         $.ajax(
//             {
//                 url: window.location.origin + "/student/genders",
//                 method: "POST",
//                 data: {
//                     'genere': $(this).val()
//                 },
//                 success: function (data, stato) {
//                     console.log(data);
//                 },
//                 error: function (richiesta, stato, errori) {
//                     alert("E' avvenuto un errore. " + errore);
//                 }
//             }
//         );
//     });
// });
