/* Source and licensing information for the line(s) below can be found at http://localhost/corona-website/covid19/core/misc/debounce.js. */
Drupal.debounce=function(func,wait,immediate){var timeout,result;return function(){for(var _len=arguments.length,args=new Array(_len),_key=0;_key<_len;_key++)args[_key]=arguments[_key];var context=this,later=function later(){timeout=null;if(!immediate)result=func.apply(context,args)},callNow=immediate&&!timeout;clearTimeout(timeout);timeout=setTimeout(later,wait);if(callNow)result=func.apply(context,args);return result}}
/* Source and licensing information for the above line(s) can be found at http://localhost/corona-website/covid19/core/misc/debounce.js. */