(function(u,y,O){u.execute(function(){function v(b,a,c){y.clientLogger&&(c.ap=b,c.ac=a)}function d(b){(function(a){function b(c){a(c.elem).find(".loading_ind").show();c.metrics&&(c.ajaxStart=new Date,a(c.elem).find(".loading_ind:first").fromScreenBottom(function(){c.loadBarTime=new Date},0));try{a.ajax({url:c.url,type:"GET",timeout:c.timeout,retryLimit:c.retry,tryCount:0,cache:c.cache,success:function(b,d,g){a(c.elem).html(b);c.metrics&&(b=(new Date).getTime(),v("lazyload",c.name,{at:b-c.ajaxStart.getTime(),
s:!0,tc:this.tryCount,tt:c.type,lt:c.loadBarTime?b-c.loadBarTime.getTime():0}))},error:function(b,d){this.tryCount++;if(this.tryCount<this.retryLimit)a.ajax(this);else if(a(c.elem).find(".loading_ind").hide(),a(c.elem).find(".failed_load").show(),c.metrics){var g=(new Date).getTime();v("lazyload",c.name,{at:g-c.ajaxStart.getTime(),s:!1,tc:this.tryCount,tt:c.type,lt:c.loadBarTime?g-c.loadBarTime.getTime():0,xs:b.status,ae:d.toString().substr(0,100)})}}})}catch(d){c.metrics&&v("lazyload",c.name,{s:!1,
tt:c.type,ae:d.toString().substr(0,100)})}}a.fn.lazyLoadContent=function(d){d.url&&this.each(function(){var g={elem:this,trigger:["scroll"],threshold:400,metrics:!1,name:"lazy",retry:3,timeout:1E4,cache:!0};a.extend(g,d);var h=!1;y.ue||(g.metrics=!1);for(var l=0;l<g.trigger.length;l++)if("scroll"===g.trigger[l])a(this).fromScreenBottom(function(a,d){h||(h=!0,g.type=d,b(g))},g.threshold);else if("oncf"===g.trigger[l])if(f&&k)u.when("cf").execute(function(){h||(h=!0,g.type="oncf",b(g))});else y.amznJQ.onCompletion("amznJQ.criticalFeature",
function(){h||(h=!0,g.type="oncf",b(g))})})};a.fn.fromScreenBottom=function(b,c){b&&(c||(c=0),this.each(function(){var d=this,f=function(k){var r=a(y).scrollTop()+a(y).height();if(a(d).offset().top-r<c){r="ready";k&&k.type&&(r=k.type);try{b(d,r)}catch(n){}a(y).unbind("scroll",f)}};a(y).bind("scroll",f);f()}))}})(b)}var f="object"===typeof u&&"function"===typeof u.when,k;f?u.when("jQuery").execute(function(b){d(b)}):d(y.jQuery);f?u.when("isLazyLoadWeblabEnabled").execute(function(b){(k=b)?u.register("lazyLoadLib"):
y.amznJQ.declareAvailable("lazyLoadLib")}):y.amznJQ.declareAvailable("lazyLoadLib")})})(function(){var u=window.AmazonUIPageJS||window.P,y=u._namespace||u.attributeErrors;return y?y("DetailPageLazyLoadLibAssets"):u}(),window);