$(document).ready(function() {
  /* we get the YouTube video url and store it in a variable */
  var url = $("#video").attr('src');

  /* when the modal gets closed, the delete the url for the video */
  $("#tutorial").on('hide.bs.modal', function() {
    $("#video").attr('src', '');
  });

  /* then the modal gets open, we asign the url for the video */
  $("#tutorial").on('show.bs.modal', function() {
    $("#video").attr('src', url);
  });
});
