// $(()=>{
//     $('form[name=formPessoa]').submit((event) => {
//         event.preventDefault();
//         // alert("chegando2");
//         console.log($(this).serialize());

//         $.ajax({
//             url: postUrl,
//             type: "POST",
//             data: $('#formPessoa').serialize(),
//             dataType: 'json',
//             headers: {
//                 'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
//             },
//             success: function(response) {
//                 console.log(response);
//             }
//         })
//     })
// });


