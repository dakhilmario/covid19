/* Source and licensing information for the line(s) below can be found at http://localhost/corona-website/covid19/core/modules/history/js/mark-as-read.js. */
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function (window, Drupal, drupalSettings) {
  window.addEventListener('load', function () {
    if (drupalSettings.history && drupalSettings.history.nodesToMarkAsRead) {
      Object.keys(drupalSettings.history.nodesToMarkAsRead).forEach(Drupal.history.markAsRead);
    }
  });
})(window, Drupal, drupalSettings);
/* Source and licensing information for the above line(s) can be found at http://localhost/corona-website/covid19/core/modules/history/js/mark-as-read.js. */