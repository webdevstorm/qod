(function($) {
  let lastpage = '';
  $(window).on('popstate', function() {
    window.location.replace(lastPage);
  });
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
      $('#new-quote').html(response[0].content.rendered);
      $('#author').html(response[0].title.rendered);
      const url = api_vars.home_url + '/' + response[0].slug + '/';
      history.pushState(null, null, url);
      console.log(url);
      // if (qod_quote_source[0] > 0) &&
      // (qod_quote_source[0]  0)
      // else (qod_quote_source[0] < 0) && (qod_quote_source[0] = 0) {

      // }
    });
  });
})(jQuery);
