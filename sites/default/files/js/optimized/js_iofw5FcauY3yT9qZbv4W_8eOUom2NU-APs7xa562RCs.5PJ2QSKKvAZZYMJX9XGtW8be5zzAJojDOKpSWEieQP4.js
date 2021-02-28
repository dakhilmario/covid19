/* Source and licensing information for the line(s) below can be found at http://localhost/corona-website/covid19/core/misc/details-summarized-content.js. */
(function($,Drupal){function DetailsSummarizedContent(node){this.$node=$(node);this.setupSummary()};$.extend(DetailsSummarizedContent,{instances:[]});$.extend(DetailsSummarizedContent.prototype,{setupSummary:function setupSummary(){this.$detailsSummarizedContentWrapper=$(Drupal.theme('detailsSummarizedContentWrapper'));this.$node.on('summaryUpdated',$.proxy(this.onSummaryUpdated,this)).trigger('summaryUpdated').find('> summary').append(this.$detailsSummarizedContentWrapper)},onSummaryUpdated:function onSummaryUpdated(){var text=$.trim(this.$node.drupalGetSummary());this.$detailsSummarizedContentWrapper.html(Drupal.theme('detailsSummarizedContentText',text))}});Drupal.behaviors.detailsSummary={attach:function attach(context){var $detailsElements=$(context).find('details').once('details');DetailsSummarizedContent.instances=DetailsSummarizedContent.instances.concat($detailsElements.map(function(index,details){return new DetailsSummarizedContent(details)}).get())}};Drupal.DetailsSummarizedContent=DetailsSummarizedContent;Drupal.theme.detailsSummarizedContentWrapper=function(){return"<span class=\"summary\"></span>"};Drupal.theme.detailsSummarizedContentText=function(text){return text?" (".concat(text,")"):''}})(jQuery,Drupal)
/* Source and licensing information for the above line(s) can be found at http://localhost/corona-website/covid19/core/misc/details-summarized-content.js. */