$(function() {
  // Cookies
  $(document).ready(function() {
    if (!Cookies.get('cookies_enable')) {
      $('#cookie_message').delay(1000).slideDown(500);
    }
  });

  $('.cookie_confirm').click(function() {
    $('#cookie_message').slideUp(500);
    Cookies.set('cookies_enable', 'foo', {
      expires: 180,
      path: '/',
      domain: 'fmf.si'
    });
    return false;
  });

  $('.cookie_show').click(function() {
    $('#cookie_message').slideDown(500);
    return false;
  });

  $('.cookie_delete').click(function() {
    Cookies.remove('cookies_enable', {
      path: '/',
      domain: 'fmf.si'
    });
    return false;
  });
});