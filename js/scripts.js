// Add an event listener for when the document has loaded
document.addEventListener('DOMContentLoaded', function() {

    // Toggle the mobile navigation menu when the button is clicked
    const menuButton = document.querySelector('.menu-button');
    const mobileMenu = document.querySelector('.mobile-menu');
    menuButton.addEventListener('click', function() {
      mobileMenu.classList.toggle('open');
    });
  
    // Add a click event listener to each product to toggle the product details
    const products = document.querySelectorAll('.product');
    products.forEach(function(product) {
      const details = product.querySelector('.details');
      product.addEventListener('click', function() {
        details.classList.toggle('open');
      });
    });
  
    // Add a submit event listener to the search form to prevent default submission
    const searchForm = document.querySelector('.search-form');
    searchForm.addEventListener('submit', function(event) {
      event.preventDefault();
      // TODO: Implement search functionality
    });
  
  });
  
  // Product image zoom
  $('.product-image').hover(function() {
    $(this).addClass('zoomed');
  }, function() {
    $(this).removeClass('zoomed');
  }).mousemove(function(e) {
    var zoom = 3; // Set the zoom level
    var pos = $(this).offset();
    var x = (e.pageX - pos.left) / $(this).width() * 100;
    var y = (e.pageY - pos.top) / $(this).height() * 100;
    $(this).css('background-position', x * zoom + '% ' + y * zoom + '%');
  });
  
  // Cart item quantity update
  $('.cart-quantity-input').change(function() {
    var quantity = $(this).val();
    var item_id = $(this).data('item-id');
    $.ajax({
      url: '/cart/update',
      type: 'POST',
      data: { id: item_id, quantity: quantity },
      success: function(response) {
        // Update the cart total and item subtotal
        $('#cart-total').text(response.cart_total);
        $('#item-subtotal-' + item_id).text(response.item_subtotal);
      }
    });
  });
  
  // Related products slider
  $('.related-products-slider').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 5000,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 3
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2
        }
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 1
        }
      }
    ]
  });
  These are just a few examples, but you can customize and adapt them to fit your specific needs and website design.
  
  