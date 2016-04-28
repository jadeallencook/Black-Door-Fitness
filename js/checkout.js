  var handler = StripeCheckout.configure({
      key: 'pk_test_udVr5jh5RV9U3CNfjnFcWxVD',
      image: 'img/store/fitness-is-sexy-grey-pullover/1.jpg',
      locale: 'auto',
      token: function (token) {
          // Use the token to create the charge with a server-side script.
          // You can access the token ID with `token.id`
      }
  });

  $('#womans-pullover').on('click', function (e) {
      // Open Checkout with further options
      handler.open({
          name: 'Demo Site',
          description: '2 widgets',
          amount: 2000
      });
      e.preventDefault();
  });

  // Close Checkout on page navigation
  $(window).on('popstate', function () {
      handler.close();
  });