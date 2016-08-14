$(document).ready(function(){

  /* Parallax */
	$('.feature-parallax-bg-about').parallax("50%", .1);
  $('.feature-parallax-bg-blog-events').parallax("50%", .1);
  $('.feature-parallax-bg-ehr').parallax("50%", .1);
 	$('.feature-parallax-bg-phm').parallax("50%", .1);
 	$('.feature-parallax-bg-rcm').parallax("50%", .1);
  $('.feature-parallax-bg-support').parallax("50%", .1);
 	$('.banner-parallax-bg-ehr').parallax("50%", .1);
	$('.banner-parallax-bg-phm').parallax("50%", .1);
 	$('.banner-parallax-bg-rcm').parallax("50%", .1);
 	$('.banner-parallax-bg-rcm-calculator').parallax("50%", .1);

  /* Modal- Free Trail */
  //adds styling to input forms
  $('select').change(function() {
    if ($(this).children('option:first-child').is(':selected')) {
      $(this).addClass('placeholder-grey');
    } else {
      $(this).removeClass('placeholder-grey');
    }
  });

});

/* ROI Calculator */
function totalSavedCalculator() {
//must remain outside of (document).ready (for now)
/*numberOfProviders = initial input / value received
  savingsPerProvider = 23303 (difference in value per additional providers)
  setupCost = 6546 (difference in value from savingsPerProvider and totalSaved if numberOfProviders = 1, as per the RCM Financial Calculator v2 | URL: other/RCM_calc.xlsx.)
  totalSaved = (numberOfProviders * savingsPerProvider) - setupCost */
  var numberProviders =  document.getElementById("numberOfProviders").value;
  var ratioProvidersToBillingSpecialists = .667;
  var savingsPerProvider = 23304;
  var setupCost = 6546;
  var totalSaved = (numberProviders * savingsPerProvider) - (numberProviders * ratioProvidersToBillingSpecialists) - setupCost;
  document.getElementById("totalSavings").value = totalSaved;
  $('#totalSavings').formatCurrency('#totalSavings');//using
};


/////////////////////-REFERENCE-////////////////////////
    /* TESTING FUNCTIONS

    		$(window).width(); //get the height of the window
        $(window).height(); //get the height of the window

        function getElementWidth(element){
          return ($(element).width());
        };

        function getElementHeight(element){
          return ($(element).height()); //or .outerHeight() for content-padding, borders, etc.
        };

        function showElementWidth(element){
          window.alert(getElementWidth(element));
        };

        function showElementHeight(element){
          window.alert(getElementHeight(element));
        };

        function showSourceCode(toShow){
            sourceCode.value = toShow.innerHTML;
        };

        function viewSource() {
            window.location = "view-source:" + window.location;
        };

        $(window).bind('scroll', function(){
            //detect a scroll and then do something...
            window.alert("scollin scrollin scrollin!");
        });
    */


    /*JQUERY QUICK REFERENCE
      Basic syntax is: $(selector).action()
          A $ sign to define/access jQuery
          A (selector) to "query (or find)" HTML elements
          A jQuery action() to be performed on the element(s)

      Selectors:
          #     id
          .     class
          :     with / all (if no prefix)
          :not  none
          *     all
          ()    index
          []    attribute
          target=   value of an attribute
          target!=  not value of an attribute
          ,     and
          >     direct child
          ~     sibling
          eq    equal
          gt    greater than
          lt    less than

      Selector examples (from http://www.w3schools.com/jquery/trysel.asp ):
          $("#test") Selects id
          $(".test") Selects .class
          $("*")	Selects all elements
          $(this)	Selects the current HTML element
          $("[id]") all elements with an id attribute
          $(":header") all header elements (h1,h2, etc.)
          $("tr:even")	Selects all even <tr> elements
          $("tr:odd")	Selects all odd <tr> elements
          $("p.intro")	Selects all <p> elements with class="intro"
          $("p:first")	Selects the first <p> element
          $("p:first-child") All <p> elements that are the first child of their parent.
          $("[href]")	Selects all elements with an href attribute
          $("a[target='_blank']")	Selects all <a> elements with a target attribute value equal to "_blank"
          $("a[target!='_blank']")	Selects all <a> elements with a target attribute value NOT equal to "_blank"
          $("li:nth-child(1)") All <li> elements that are the first child of their parent.
          $("div p") All <p> elements that are descendants of a <div> element.
          $("div > p") All <p> elements that are a direct child of a <div> element.
          $("ul ~ table") All <table> elements that are siblings of a <ul> element.
          $("div + p") The <p> element that is next to each <div> elements

      Events:
          mouse:
              click
              dblclick
              mouseenter
              mouseleave

          keyboard:
              keypress
              keydown
              keyup

          form:
              submit
              change
              focus
              blur

          document / window:
              load
              resize
              scroll
              unload

        Common methods:
            hide
            show
            toggle
            fadeIn(speed,callback) , where callback is the function to execute after the FadeIn has completed
            fadeOut()
            fadeToggle()
            slideDown()
            slideUp()
            slideToggle()

        DOM manipulation:
            text() - Sets or returns the text content of selected elements
            html() - Sets or returns the content of selected elements (including HTML markup)
            val() - Sets or returns the value of form fields
            append() - Inserts content at the end of the selected elements
            prepend() - Inserts content at the beginning of the selected elements
            after() - Inserts content after the selected elements
            before() - Inserts content before the selected elements
            remove() - Removes the selected element (and its child elements)
              $("p").remove(".italic"); removes content with .class italic
            empty() - Removes the child elements from the selected element

        CSS mainpulation:
            addClass() - Adds one or more classes to the selected elements
              $("button").click(function(){
                  $("h1, h2, p").addClass("blue");
                  $("div").addClass("important");
              });
            removeClass() - Removes one or more classes from the selected elements
            toggleClass() - Toggles between adding/removing classes from the selected elements
            css() - Sets or returns the style attribute

        Dimensions:
            width()
            height()
            innerWidth()
            innerHeight()
            outerWidth()
            outerHeight()

        Usage Examples:
            //simple alert
              $("button").click (function() {
                                   alert ("The paragraph is now hidden")
                                 }
              );


            // scrunched
            $("button").click(function(){alert("The paragraph is now hidden")});


            //pass another jQuery function
            $("button").click(function(){
                                $("#test").hide();
                              }
            );


            //make two things happen -> use a comma
            $("button").hover(
              function(){
                alert("You entered p1!");
              },
              function(){
                alert("Bye! You now leave p1!");
              }
            );


            //use a callback to call a function only after the preceding one has completed
            /* $("button").click(
                          function(){
                            $("p").hide("slow",function(){
                                                alert("The paragraph is now hidden");
                                               }
                            );
                          }
            );


            Chaining:
              $("#p1").css("color", "red")
                .slideUp(2000)
                .slideDown(2000);
    */
