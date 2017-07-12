/**
 * Created by Pavel.R on 23.06.2017.
 */
//
// $( document ).ready( () => {
//     console.log(':test:');
// });
$(".removeQuote").click((event)=>{
    $.ajax({
        url: '/delete-quote',
        method: "POST",
        data: {id: event.target.value, _token: $('#csrf-token').val()},
    }).done((msg) => {
        if (msg === '200') {
            event.target.closest('tr').remove();
        }
    });
});
