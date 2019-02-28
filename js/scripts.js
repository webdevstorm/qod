(function($) {
  $('#show-another-quote').on('click', function(event) {
    console.log('click');
    event.preventDefault();
    $.ajax({
      method: 'get',
      url:
        red_vars.rest_url +
        'wp/v2/posts/?filter[orderby]=rand&filter[posts_per_page]=1' +
        red_vars.post_id,

      beforeSend: function(xhr) {
        xhr.setRequestHeader('X-WP-Nonce', red_vars.wpapi_nonce);
      }
    }).done(function(response) {
      console.log(response);
      $('#new-quote').html(response[0].excerpt.rendered);
      $('#author').html(response[0].title.rendered);
    });
  });
})(jQuery);
