/** 
 * Roadtrip Travel Blog
 * Magicscript. 
 *
 * If you are looking at this file, I am going to go out on a limb and say that you're probably a son of Boesch. AMIRITE? 
 *
 */ 
 

$(document).ready(readyForYou); 


/** 
 * Do some shit. 
 */ 
function readyForYou(e){
  
  // Concept taken from modernizr:
  $('html').addClass('js');
  
  // align menu to center. # of menu items is liable to change. 
  var tm = $('#top-menu ul:first');
  var dx = 480 - tm.innerWidth()/2 ; // 480 = (960/2)
  tm.css('left', dx + 'px').show();
  
}