var wysijaAJAXcallback=function(){};wysijaAJAXcallback.prototype.onSuccess=function(a){};var displaychange=1;var popupopen=0;jQuery(function(a){a.WYSIJA_SEND=function(){displaychange=1;if(popupopen===0){a(".wysija-msg.ajax").html('<div class="allmsgs" title="'+wysijaAJAX.popTitle+'"><blink>'+wysijaAJAX.loadingTrans+"</blink></div>");a(".wysija-msg.ajax .allmsgs").dialog({modal:true,draggable:false,resizable:false,width:400,close:function(b,c){displaychange=0;popupopen=0;a(this).remove()}})}else{a(".allmsgs.ui-dialog-content.ui-widget-content").html("<blink>"+wysijaAJAX.loadingTrans+"</blink>")}popupopen=1;wysijaAJAX._wpnonce=a("#wysijax").val();if(wysijaAJAX.dataType==="json"){a.ajax({type:"POST",url:wysijaAJAX.ajaxurl,data:wysijaAJAX,success:a.WYSIJA_HANDLE_RESPONSE,error:function(c,b){alert("Request error not JSON:"+c.responseText);wysijaAJAXcallback.onSuccess=""},dataType:wysijaAJAX.dataType})}else{a(".allmsgs.ui-dialog-content.ui-widget-content").load(wysijaAJAX.ajaxurl,wysijaAJAX,function(c){var b=JSON.parse(c);if(typeof b=="object"){a.WYSIJA_HANDLE_RESPONSE(b)}else{return true}})}};a.WYSIJA_HANDLE_RESPONSE=function(b){a(".allmsgs.ui-dialog-content.ui-widget-content").html("");a(".wysija-msg.ajax").html('<div class="allmsgs"></div>');a.each(b.msgs,function(d,c){if(displaychange){if(!a(".allmsgs.ui-dialog-content.ui-widget-content ."+d+" ul").length){a(".allmsgs.ui-dialog-content.ui-widget-content").append('<div class="'+d+'"><ul></ul></div>')}a.each(c,function(e,f){a(".allmsgs.ui-dialog-content.ui-widget-content ."+d+" ul").append("<li>"+f+"</li>")})}else{if(!a(".wysija-msg.ajax .allmsgs ."+d+" ul").length){a(".wysija-msg.ajax .allmsgs").append('<div class="'+d+'"><ul></ul></div>')}a.each(c,function(e,f){a(".wysija-msg.ajax .allmsgs ."+d+" ul").append("<li>"+f+"</li>")})}if(a.isFunction(wysijaAJAXcallback.onSuccess)){wysijaAJAXcallback.onSuccess(b)}wysijaAJAXcallback.onSuccess=function(e){}})}});