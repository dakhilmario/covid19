/* Source and licensing information for the line(s) below can be found at http://localhost/corona-website/covid19/modules/token/js/token.js. */
(function($,Drupal,drupalSettings){'use strict';Drupal.behaviors.tokenTree={attach:function(context,settings){$('table.token-tree',context).once('token-tree').each(function(){$(this).treetable({expandable:true})})}};Drupal.behaviors.tokenInsert={attach:function(context,settings){$('textarea, input[type="text"]',context).focus(function(){drupalSettings.tokenFocusedField=this});$('.token-click-insert .token-key',context).once('token-click-insert').each(function(){var newThis=$('<a href="javascript:void(0);" title="'+Drupal.t('Insert this token into your form')+'">'+$(this).html()+'</a>').click(function(){var content=this.text;if(drupalSettings.tokenFocusedField&&(drupalSettings.tokenFocusedField.tokenDialogFocus||drupalSettings.tokenFocusedField.tokenHasFocus)){insertAtCursor(drupalSettings.tokenFocusedField,content)}else if(typeof tinyMCE!='undefined'&&tinyMCE.activeEditor){tinyMCE.activeEditor.execCommand('mceInsertContent',false,content)}else if(typeof CKEDITOR!='undefined'&&CKEDITOR.currentInstance){CKEDITOR.currentInstance.insertHtml(content)}else if(typeof CodeMirror!='undefined'&&drupalSettings.tokenFocusedField&&$(drupalSettings.tokenFocusedField).parents('.CodeMirror').length){var editor=$(drupalSettings.tokenFocusedField).parents('.CodeMirror')[0].CodeMirror;editor.replaceSelection(content);editor.focus()}else if(Drupal.wysiwyg&&Drupal.wysiwyg.activeId){Drupal.wysiwyg.instances[Drupal.wysiwyg.activeId].insert(content)}else if(typeof CKEDITOR!='undefined'&&typeof(Drupal.ckeditorActiveId)!='undefined'){CKEDITOR.instances[Drupal.ckeditorActiveId].insertHtml(content)}else if(drupalSettings.tokenFocusedField){insertAtCursor(drupalSettings.tokenFocusedField,content)}else alert(Drupal.t('First click a text field to insert your tokens into.'));return false});$(this).html(newThis)})
function insertAtCursor(editor,content){var scroll=editor.scrollTop;if(document.selection){editor.focus();var sel=document.selection.createRange();sel.text=content}else if(editor.selectionStart||editor.selectionStart=='0'){var startPos=editor.selectionStart,endPos=editor.selectionEnd;editor.value=editor.value.substring(0,startPos)+content+editor.value.substring(endPos,editor.value.length)}else editor.value+=content;editor.scrollTop=scroll}}}})(jQuery,Drupal,drupalSettings)
/* Source and licensing information for the above line(s) can be found at http://localhost/corona-website/covid19/modules/token/js/token.js. */