/* Source and licensing information for the line(s) below can be found at http://localhost/corona-website/covid19/core/misc/announce.js. */
(function(Drupal,debounce){var liveElement,announcements=[];Drupal.behaviors.drupalAnnounce={attach:function attach(context){if(!liveElement){liveElement=document.createElement('div');liveElement.id='drupal-live-announce';liveElement.className='visually-hidden';liveElement.setAttribute('aria-live','polite');liveElement.setAttribute('aria-busy','false');document.body.appendChild(liveElement)}}}
function announce(){var text=[],priority='polite',announcement,il=announcements.length;for(var i=0;i<il;i++){announcement=announcements.pop();text.unshift(announcement.text);if(announcement.priority==='assertive')priority='assertive'};if(text.length){liveElement.innerHTML='';liveElement.setAttribute('aria-busy','true');liveElement.setAttribute('aria-live',priority);liveElement.innerHTML=text.join('\n');liveElement.setAttribute('aria-busy','false')}};Drupal.announce=function(text,priority){announcements.push({text:text,priority:priority});return debounce(announce,200)()}})(Drupal,Drupal.debounce)
/* Source and licensing information for the above line(s) can be found at http://localhost/corona-website/covid19/core/misc/announce.js. */