/* Source and licensing information for the line(s) below can be found at http://localhost/corona-website/covid19/core/misc/active-link.js. */
(function(Drupal,drupalSettings){Drupal.behaviors.activeLinks={attach:function attach(context){var path=drupalSettings.path,queryString=JSON.stringify(path.currentQuery),querySelector=path.currentQuery?"[data-drupal-link-query='".concat(queryString,"']"):':not([data-drupal-link-query])',originalSelectors=["[data-drupal-link-system-path=\"".concat(path.currentPath,"\"]")],selectors;if(path.isFront)originalSelectors.push('[data-drupal-link-system-path="<front>"]');selectors=[].concat(originalSelectors.map(function(selector){return"".concat(selector,":not([hreflang])")}),originalSelectors.map(function(selector){return"".concat(selector,"[hreflang=\"").concat(path.currentLanguage,"\"]")}));selectors=selectors.map(function(current){return current+querySelector});var activeLinks=context.querySelectorAll(selectors.join(',')),il=activeLinks.length;for(var i=0;i<il;i++)activeLinks[i].classList.add('is-active')},detach:function detach(context,settings,trigger){if(trigger==='unload'){var activeLinks=context.querySelectorAll('[data-drupal-link-system-path].is-active'),il=activeLinks.length;for(var i=0;i<il;i++)activeLinks[i].classList.remove('is-active')}}}})(Drupal,drupalSettings)
/* Source and licensing information for the above line(s) can be found at http://localhost/corona-website/covid19/core/misc/active-link.js. */