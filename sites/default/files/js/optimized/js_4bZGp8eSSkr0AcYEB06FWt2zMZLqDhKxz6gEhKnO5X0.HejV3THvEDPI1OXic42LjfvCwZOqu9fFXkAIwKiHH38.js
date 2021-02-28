/* Source and licensing information for the line(s) below can be found at http://localhost/corona-website/covid19/core/misc/dialog/dialog.position.js. */
(function($,Drupal,drupalSettings,debounce,displace){drupalSettings.dialog=$.extend({autoResize:true,maxHeight:'95%'},drupalSettings.dialog)
function resetPosition(options){var offsets=displace.offsets,left=offsets.left-offsets.right,top=offsets.top-offsets.bottom,leftString="".concat((left>0?'+':'-')+Math.abs(Math.round(left/2)),"px"),topString="".concat((top>0?'+':'-')+Math.abs(Math.round(top/2)),"px");options.position={my:"center".concat(left!==0?leftString:''," center").concat(top!==0?topString:''),of:window};return options}
function resetSize(event){var positionOptions=['width','height','minWidth','minHeight','maxHeight','maxWidth','position'],adjustedOptions={},windowHeight=$(window).height(),option,optionValue,adjustedValue;for(var n=0;n<positionOptions.length;n++){option=positionOptions[n];optionValue=event.data.settings[option];if(optionValue)if(typeof optionValue==='string'&&/%$/.test(optionValue)&&/height/i.test(option)){windowHeight-=displace.offsets.top+displace.offsets.bottom;adjustedValue=parseInt(0.01*parseInt(optionValue,10)*windowHeight,10);if(option==='height'&&event.data.$element.parent().outerHeight()<adjustedValue)adjustedValue='auto';adjustedOptions[option]=adjustedValue}};if(!event.data.settings.modal)adjustedOptions=resetPosition(adjustedOptions);event.data.$element.dialog('option',adjustedOptions).trigger('dialogContentResize')};$(window).on({'dialog:aftercreate':function dialogAftercreate(event,dialog,$element,settings){var autoResize=debounce(resetSize,20),eventData={settings:settings,$element:$element};if(settings.autoResize===true||settings.autoResize==='true'){$element.dialog('option',{resizable:false,draggable:false}).dialog('widget').css('position','fixed');$(window).on('resize.dialogResize scroll.dialogResize',eventData,autoResize).trigger('resize.dialogResize');$(document).on('drupalViewportOffsetChange.dialogResize',eventData,autoResize)}},'dialog:beforeclose':function dialogBeforeclose(event,dialog,$element){$(window).off('.dialogResize');$(document).off('.dialogResize')}})})(jQuery,Drupal,drupalSettings,Drupal.debounce,Drupal.displace)
/* Source and licensing information for the above line(s) can be found at http://localhost/corona-website/covid19/core/misc/dialog/dialog.position.js. */