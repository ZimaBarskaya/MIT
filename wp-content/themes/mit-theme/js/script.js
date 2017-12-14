jQuery(function(){

objectFitImages(null, {watchMQ: true});

/*** Preloader ***/

$(window).on('load', function() {
  $('[data-preloader]').fadeOut(300);
});

/*** Header Functions ***/

$('[data-innermenu="button"]').on('click', function() {
  $(".header__mob-menu").toggleClass("active");
  $('.hamburger').toggleClass('is-opened');
});

setResponsiveFunction([
  {
    func: function() {
      $('.titlemain').css({
        'padding-top': $('#my-header').outerHeight() + 'px',
      });
    },
  },
]);

/*** Footer Functions ***/

$('[data-button="up-button"]').on('click', function() {
  $('body, html').animate({scrollTop: 0}, 500);
});

/*** Form Functions ***/

/*** General Widgets Functions ***/

//--- On-page Links
$('[data-link="on-page"]').on('click', function(event) {
  event.preventDefault();

  var scrollTo = $( $(event.currentTarget).attr('href') ).offset().top;
  $('body, html').animate({scrollTop: scrollTo}, 500);
});

//--- Spoiler
$('[data-spoiler="button"]').on('click', function(event) {
  $(event.currentTarget).closest('[data-spoiler="wrap"]').find('[data-spoiler="content"]').slideToggle(400);
  $(event.currentTarget).closest('[data-spoiler="wrap"]').find('[data-spoiler="icon"]').toggleClass('rotate-icon');
});

//--- Text overflow - Fixed height
setResponsiveFunction({
  func: function() {
    $('[data-text-overflow="fixed-height"]').each(function(index,item) {
      $(item).css({ height: 'auto' });
      $(item).css({
        height: function() {
          var lineHeight = parseInt( $(item).css('line-height') );
          var height = $(item).height();
          return height - ( height % lineHeight );
        }
      });
    });
  },
});

/*** Block Functions ***/

/*** Animation Functions ***/

});

/*** Base Functions ***/

/// options = {maxWidth: maxWidth(number), minWidth: minWidth(number), changedElem: changedElem(selector), sampleElem: sampleElem(selector),}
function setResponsiveHeight(options) {
  var changedElem = options.changedElem;
  var sampleElem = options.sampleElem;

  setResponsiveFunction({
    minWidth: options.minWidth,
    maxWidth: options.maxWidth,
    func: function() {
      jQuery(changedElem).height( jQuery(sampleElem).innerHeight() );
    },
    funcAlternate: function() {
      jQuery(changedElem).removeAttr('style');
    },
  });
}

/// options = {minWidth: (number), maxWidth: (number), func: (function), funcAlternate: (function)};
/// options = [{minWidth: minWidth, maxWidth: maxWidth, func: func, funcAlternate: funcAlternate(function)}, {minWidth: minWidth, maxWidth: maxWidth, func: func, funcAlternate: funcAlternate(function)}];
function setResponsiveFunction(options) {
  respondFunction();
  jQuery(window).on('resize', respondFunction);

  function respondFunction() {
    if ( Array.isArray(options) ) {
      for (var i = 0; i < options.length; i++) {
        var minWidth = options[i].minWidth || 0;
        var maxWidth = options[i].maxWidth || Infinity;
        var func = options[i].func;
        var funcAlternate = options[i].funcAlternate;
        goFunc();
      }
    } else {
      var minWidth = options.minWidth || 0;
      var maxWidth = options.maxWidth || Infinity;
      var func = options.func;
      var funcAlternate = options.funcAlternate;
      goFunc();
    }

    function goFunc() {
      if ( jQuery(window).width() >= minWidth && jQuery(window).width() < maxWidth ) {
        func();
      } else if (funcAlternate) {
        funcAlternate();
      }
    }
  }
}

//--- Text overflow - Fixed lenght
function cutTextBeforeMaxLenght(textSelector, maxLenght) {
  if ( jQuery(textSelector).is(textSelector) ) {
    var oldHtml = [];
    if ( jQuery(textSelector).html().length > maxLenght ) {
      jQuery(textSelector).each(function(index,item) {
        oldHtml.push( $(item).html() );
        if ( $(item).html().length > maxLenght ) {
          $(item).html( $(item).html().slice(0, maxLenght) + '...' );
        }
      });
    }
    return oldHtml;
  }
}

/***
/// JQuery Plugin's start
(function($){
   $.fn.toggleElemState = function(options) {
      var settings = {};
      return this.each(function() {
        if (options) $.extend(settings,options);
      });
   };
})(jQuery);
***//*Custom Functions*/$( document ).ready(function() {    $(".footer__social-container").append($(".footer__social"));	$("#form-3 input[type=\"email\"]").attr("placeholder", ""+$("#subscription_button").text());	$(".footer__subscribe-news span").text($("#subscription_text").text());	$("#submit-form-3").val($("#subscription_button").text());		$(".footer__copyright").append($(".footer_copyright_text"));	//$(".footer__social").remove();	$("#subscription_text").remove();	$("#subscription_placeholder").remove();	$("#subscription_button").remove();	//$("#subscription_placeholder").remove();		$("#registration .fw-row:nth-child(2)").append("<div class=\"registration-content\">");	$(".registration-content").append($("#registration .fw-row:nth-child(2) .fw-col-xs-12"));		$("<figure class=\"titlemain-img hide-for-large\"><img src=\"/example-2/wp-content/themes/mit-theme/img/bg-title.png\"></figure>").insertAfter($(".titlemain .title-page"));	//$("#my-header").append("<figure class=\"titlemain-img hide-for-large\"><img src=\"/example-2/wp-content/themes/mit-theme/img/bg-title.png\"></figure>");	$(".titlemain").insertAfter($("#my-header"));	$("header.entry-header").remove();	});
