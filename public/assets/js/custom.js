/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 *
 */

"use strict";
$(document).ready( function () {
    $('#table-usulan').DataTable();
    window.setTimeout(function() {
      $(".alert").fadeTo(500, 0).slideUp(500, function(){
          $(this).remove();
      });
  }, 4000);
} );


$("#modal-edit-rev").fireModal({
    title: 'Edit Revisi',
    body: '<table> </table>',
    created: function(modal) {
      modal.find('.modal-footer').prepend('<div class="mr-auto"><a href="#">I\'m a hyperlink!</a></div>');
    },
    buttons: [
      {
        text: 'No Action',
        submit: true,
        class: 'btn btn-primary btn-shadow',
        handler: function(modal) {
        }
      }
    ]
  });