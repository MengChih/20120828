var WidgetInsertSelectorDialog={local_ed:"ed",init:function(a){WidgetInsertSelectorDialog.local_ed=a;tinyMCEPopup.resizeToInnerSize()},insert:function insertHighlightSection(a,b){tinyMCEPopup.restoreSelection();el=a.selection.getNode();if(el.nodeName=="DIV"&&el.className=="wysija-register"){jQuery(function(c){c(el).remove()})}output='<p></p><div class="wysija-register">'+b+"</div><p></p>";tinyMCEPopup.execCommand("mceInsertRawHTML",false,output);tinyMCEPopup.close()}};tinyMCEPopup.onInit.add(WidgetInsertSelectorDialog.init,WidgetInsertSelectorDialog);jQuery(function(a){a("#widget-insert").click(function(){WidgetInsertSelectorDialog.insert(WidgetInsertSelectorDialog.local_ed,a("#widget-data").val());return true});a(document).ready(function(){a("input.wysija-email").blur(function(){a(this).val(trim(a(this).val()))});a("#widget-preview input.defaultlabels").each(function(b){var c=a(this).val();a(this).attr("defaultValue",c);a(this).blur(function(){if(trim(a(this).val())==""){a(this).val(c)}else{a(this).val(trim(a(this).val()))}});a(this).focus(function(){if(trim(a(this).val())==c){a(this).val("")}})})})});function trim(a){return a.replace(/^\s+/g,"").replace(/\s+$/g,"")};