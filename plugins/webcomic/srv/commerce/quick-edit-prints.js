!function(){"use strict";!function e(){if("loading"===document.readyState)return document.addEventListener("DOMContentLoaded",e);document.addEventListener("click",function(e){if("editinline"!==e.target.className)return;var t=new FormData,c=new XMLHttpRequest,i=e.target.parentNode.parentNode.previousElementSibling.id.substr(7);t.append("action","webcomic_commerce_prints_quick_edit"),t.append("post",i),c.onreadystatechange=function(){if(4===c.readyState)for(var e=JSON.parse(c.responseText),t=document.querySelectorAll("#edit-".concat(i," .webcomic-commerce-prints-checklist input")),n=0;n<t.length;n++)e.indexOf(t[n].value)<0||(t[n].checked=!0)},c.open("POST",ajaxurl),c.send(t)})}()}();