/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


!function(e,t){"use strict";if(e.hasOwnProperty("lightwidget"))return;e.addEventListener("message",function(e){if(-1===["lightwidget.com","dev.lightwidget.com","cdn.lightwidget.com","instansive.com"].indexOf(e.origin.replace(/^https?:\/\//i,"")))return!1;var i=function(e){if(-1<e.indexOf("{"))return JSON.parse(e);var i=e.split(":");return{widgetId:i[2].replace("instansive_","").replace("lightwidget_"),size:i[1]}}(e.data);if(i.size<=0)return!1;[].forEach.call(t.querySelectorAll('iframe[src*="lightwidget.com/widgets/'+i.widgetId+'"],iframe[src*="instansive.com/widgets/'+i.widgetId+'"]'),function(e){e.style.height=i.size+"px"})},!1),e.lightwidget={}}(window,document);