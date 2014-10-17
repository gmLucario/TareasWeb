$('document').ready(function() {
  
  $('#growRight').click(function(env) {
    
    $('#target').animate({
      width: "300px"
    }, 1000, "swing");
  });
  
  $('#shrinkLeft').click(function(env) {
    $('#target').animate({
      width: "100px"
    }, 1000, "linear");
  });
  
  $('#growVertical').click(function(env) {
    
    $('#target').animate({
      height: "300px"
    }, 1000, "linear");
  });
  
  $('#shrinkVertical').click(function(env) {
    
    $('#target').animate({
      height: "100px"
    }, 1000, "swing");
  });
  
  $('#growVertical').click(function(env) {
    
    $('#target').animate({
      height: "300px"
    }, 1000, "swing");
  });
  
  $('#nestedGrow').click(function(env) {
    
    $('#target').animate({
      width: "300px"
    }, 1000, "swing", function() {
      
      $('#target').animate({
        height: "300px"
      }, 1000, "linear");
      
    });
  });
  
  $('#nestedShrink').click(function(env) {
    
    $('#target').animate({
      height: "100px"
    }, 1000, "linear", function() {
      
      $('#target').animate({
        width: "100px"
      }, 1000, "swing");
      
    });
  });
  
});