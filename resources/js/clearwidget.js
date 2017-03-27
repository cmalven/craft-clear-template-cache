$(document).ready(function() {
  var button;
  var form;
  var action;
  
  var clear = function(e) {
    e.preventDefault();
    button = $(this);
    form = button.closest('form');
    action = form.find('input[name=clear-action]').val();

    button.addClass('disabled').attr('disabled', true).val('Clearing...');
    Craft.postActionRequest(action, {}, $.proxy(onPostActionResponse, this));
  }

  var onPostActionResponse = function(response, textStatus) {
    if (textStatus == 'success' && response.success) {
      button.val('Template caches cleared!');
      Craft.cp.displayNotification('notice', 'Successfully cleared template caches.');
    } else {
      Craft.cp.displayError();
    }
  }

  $('input[type=submit].perform-clear').on('click', clear);
});
