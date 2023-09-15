$(function(){
    // add all to same gallery
    $(".gallery a").attr("data-fancybox","mygallery");
    // assign captions and title from alt-attributes of images:
    $(".gallery a").each(function(){
      $(this).attr("data-caption", $(this).find("img").attr("alt"));
      $(this).attr("title", $(this).find("img").attr("alt"));
    });
    // start fancybox:
    $(".gallery a").fancybox();

    //password toggle
    $('.pass-eye').click(function(){
      $(this).toggleClass('active');
      $('.pass-eye').parent('.form-element').find('input').attr('type','password');
      $('.pass-eye.active').parent('.form-element').find('input').attr('type','text');
    })

    //copy function
 
    const textToCopy1 = $('.link-content1').text();
    $('.copy-text1').click(function(){
      navigator.clipboard.writeText(textToCopy1).then(
        function() {
          window.alert('Success! The text was copied to your clipboard') 
        }, 
        function() {
          window.alert('Opps! Your browser does not support the Clipboard API')
        }
      )
    })

    const textToCopy2 = $('.link-content2').text();
    $('.copy-text2').click(function(){
      navigator.clipboard.writeText(textToCopy2).then(
        function() {
          window.alert('Success! The text was copied to your clipboard') 
        }, 
        function() {
          window.alert('Opps! Your browser does not support the Clipboard API')
        }
      )
    })

    /* starts contact map */
    if ($('#map').length > 0) {
      function initMap(getId) {
      if (document.getElementById(getId)) {
          let lat = parseFloat(document.getElementById(getId).getAttribute("lat"));
          let lng = parseFloat(document.getElementById(getId).getAttribute("lng"));
          let markerIcon = $('.map-content .markerIcon').attr('src');
          console.log(markerIcon);
          var location = { lat, lng }
          map = new google.maps.Map(document.getElementById(getId), {
          zoom: 16,
          disableDefaultUI: true,
          center: location,
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          styles:[{"featureType":"all","elementType":"all","stylers":[{"visibility":"on"}]}]
          });
          marker = new google.maps.Marker({
          map: map,
          position: location,
          animation: google.maps.Animation.DROP,
          icon: markerIcon
          });
          marker.addListener('click', function () {
          $('.contact_details').removeClass('dnonemobile');
          });
          marker.addListener('click', toggleBounce);
      }
      }
      function toggleBounce() {
      if (marker.getAnimation() !== null) {
          marker.setAnimation(null);
      } else {
          marker.setAnimation(google.maps.Animation.BOUNCE);
      }
      }
      initMap("map");
      google.maps.event.addDomListener(window, "load", initMap);
  }
  /* ends contact map */
  var num;
  $('.button-count:first-child').click(function(e){
    e.preventDefault();
    num = parseInt($('input:text').val());
    if (num > 1) {
      $('input:text').val(num - 1);
    }
    if (num == 2) {
      $('.button-count:first-child').prop('disabled', true);
    }
    if (num == 100) {
      $('.button-count:last-child').prop('disabled', false);
    }
  });
  $('.button-count:last-child').click(function(e){
    e.preventDefault();
    num = parseInt($('input:text').val());
    if (num < 100) {
      $('input:text').val(num + 1);
    }
    if (num > 0) {
      $('.button-count:first-child').prop('disabled', false);
    }
    if (num == 99) {
      $('.button-count:last-child').prop('disabled', true);
    }
  });

})
const
    range = document.getElementById('range'),
    tooltip = document.getElementById('tooltip'),
    setValue = ()=>{
        const
            newValue = Number( (range.value - range.min) * 100 / (range.max - range.min) ),
            newPosition = 16 - (newValue * 0.32);
        tooltip.innerHTML = `<span>${range.value}</span>`;
        tooltip.style.left = `calc(${newValue}% + (${newPosition}px))`;
        document.documentElement.style.setProperty("--range-progress", `calc(${newValue}% + (${newPosition}px))`);
    };
document.addEventListener("DOMContentLoaded", setValue);
range.addEventListener('input', setValue);