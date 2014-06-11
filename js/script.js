  $(function() {
    $( "#list-category-results" ).accordion();
  });

  
//<![CDATA[ 
  $(window).load(function(){
  function sortUsingNestedText(parent, childSelector, keySelector) {
      var items = parent.children(childSelector).sort(function(a, b) {

          if(keySelector=='span.price')
          {
          var vA = parseInt($(keySelector, a).text().replace("$",''));
          var vB = parseInt($(keySelector, b).text().replace("$",''));
          return (vA < vB) ? -1 : (vA > vB) ? 1 : 0;
          }else
          {
          var vA = $(keySelector, a).text();
          var vB = $(keySelector, b).text();
          return (vA < vB) ? -1 : (vA > vB) ? 1 : 0;
          }
      });
      parent.append(items);
  }
 
  /* setup sort attributes */
  $('#sPrice').data("sortKey", "span.price");
  $('#sStyle').data("sortKey", "span.alpha");
  $('#sAirline').data("sortKey", "span.airline");




  /* sort on button click */
  $(".btnSort").click(function() {
     sortUsingNestedText($('#list-category-results'), "li", $(this).data("sortKey"));
  });
  



  });//]]>  
  