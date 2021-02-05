$( "#signfree" ).click(function() {
    $( ".jokes-here" ).empty();
    $.get( "https://jokeapi.dev/joke/Any?format=txt&type=single&blacklistFlags=nsfw,racist,sexist&lang=en", { categories: "Programming" } )
    .done(function( data ) {
      $( ".jokes-here" ).html( data );
    
    });
  });
  
  
  $( "#getstarted" ).click(function() {
    $( ".jokes-here" ).empty();
    $.get( "https://jokeapi.dev/joke/Any?format=txt&type=single&blacklistFlags=nsfw,racist,sexist&lang=en", { categories: "Christmas" } )
    .done(function( data ) {
      $( ".jokes-here" ).html( data );
    
    });
  });
  
  $( "#contactus" ).click(function() {
    $( ".jokes-here" ).empty();
    $.get( "https://jokeapi.dev/joke/Any?format=txt&type=single&blacklistFlags=nsfw,racist,sexist&lang=en", { categories: "Dark" } )
    .done(function( data ) {
      $( ".jokes-here" ).html( data );
    
    });
  });
  
  