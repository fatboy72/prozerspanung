!function(e,i,t){function s(i,t,s,h){this.slider=window[i],this.slider.started(e.proxy(this.start,this,i,t,s,h))}s.prototype.start=function(i,t,s,h){return this.slider.sliderElement.data("arrow")?!1:(this.slider.sliderElement.data("arrow",this),this.deferred=e.Deferred(),this.slider.sliderElement.on("SliderDevice",e.proxy(this.onDevice,this)).trigger("addWidget",this.deferred),this.previous=e("#"+i+"-arrow-previous").on("click",e.proxy(function(e){e.stopPropagation(),this.slider.previous()},this)),this.previousResize=this.previous.find(".n2-resize"),0==this.previousResize.length&&(this.previousResize=this.previous),this.next=e("#"+i+"-arrow-next").on("click",e.proxy(function(e){e.stopPropagation(),this.slider.next()},this)),this.nextResize=this.next.find(".n2-resize"),0==this.nextResize.length&&(this.nextResize=this.next),this.desktopRatio=t,this.tabletRatio=s,this.mobileRatio=h,void e.when(this.previous.n2imagesLoaded(),this.next.n2imagesLoaded()).always(e.proxy(this.loaded,this)))},s.prototype.loaded=function(){this.previousWidth=this.previousResize.width(),this.previousHeight=this.previousResize.height(),this.nextWidth=this.nextResize.width(),this.nextHeight=this.nextResize.height(),this.onDevice(null,{device:this.slider.responsive.getDeviceMode()}),this.deferred.resolve()},s.prototype.onDevice=function(e,i){var t=1;switch(i.device){case"tablet":t=this.tabletRatio;break;case"mobile":t=this.mobileRatio;break;default:t=this.desktopRatio}this.previousResize.width(this.previousWidth*t),this.previousResize.height(this.previousHeight*t),this.nextResize.width(this.nextWidth*t),this.nextResize.height(this.nextHeight*t)},i.NextendSmartSliderWidgetArrowImage=s}(n2,window);
!function(t,i,e){function s(i,e){this.slider=window[i],this.slider.started(t.proxy(this.start,this,i,e))}s.prototype.start=function(i,e){if(this.slider.sliderElement.data("bullet"))return!1;this.slider.sliderElement.data("bullet",this),this.axis="horizontal",this.offset=0,this.parameters=e,this.bar=this.slider.sliderElement.find(".nextend-bullet-bar");var s="universalclick";if("mouseenter"==e.action&&(s="mouseenter"),this.originalDots=this.dots=this.bar.find("div").on(s,t.proxy(this.onDotClick,this)),this.slider.sliderElement.on("slideCountChanged",t.proxy(this.onSlideCountChanged,this)).on("sliderSwitchTo",t.proxy(this.onSlideSwitch,this)),0==e.overlay){var o=!1;switch(e.area){case 1:o="Top";break;case 12:o="Bottom";break;case 5:o="Left",this.axis="vertical";break;case 8:o="Right",this.axis="vertical"}o&&(this.offset=parseFloat(this.bar.data("offset")),this.slider.responsive.addStaticMargin(o,this))}this.initThumbnails()},s.prototype.onDotClick=function(t){this.slider.directionalChangeToReal(this.originalDots.index(t.currentTarget))},s.prototype.onSlideSwitch=function(t,i){this.dots.filter(".n2-active").removeClass("n2-active"),this.dots.eq(i).addClass("n2-active")},s.prototype.isVisible=function(){return this.bar.is(":visible")},s.prototype.getSize=function(){return"horizontal"==this.axis?this.bar.height()+this.offset:this.bar.width()+this.offset},s.prototype.initThumbnails=function(){this.parameters.thumbnails.length>0&&this.dots.each(t.proxy(function(i,e){""!=this.parameters.thumbnails[i]&&t(e).on({universalenter:t.proxy(this.showThumbnail,this,i)},{leaveOnSecond:!0})},this))},s.prototype.showThumbnail=function(i,e){var s=this.getThumbnail(i);NextendTween.to(s,.3,{opacity:1}).play(),this.originalDots.eq(i).on("universalleave",t.proxy(this.hideThumbnail,this,s))},s.prototype.hideThumbnail=function(t,i){i.stopPropagation(),NextendTween.to(t,.3,{opacity:0,onComplete:function(){t.remove()}}).play()},s.prototype.getThumbnail=function(i){var e=this.originalDots.eq(i),s=e.offset(),o=e.outerWidth(),a=e.outerHeight(),n=t("<div/>").append(t("<div/>").css({width:this.parameters.thumbnailWidth,height:this.parameters.thumbnailHeight,backgroundImage:'url("'+this.parameters.thumbnails[i]+'")',backgroundSize:"inherit",backgroundRepeat:"no-repeat",backgroundPosition:"center"}).addClass("n2-bullet-thumbnail")).addClass(this.parameters.thumbnailStyle).addClass("n2-bullet-thumbnail-container").css({position:"absolute",opacity:0,zIndex:1e7}).appendTo("body");switch(this.parameters.thumbnailPosition){case"right":n.css({left:s.left+o,top:s.top+a/2-n.outerHeight(!0)/2});break;case"left":n.css({left:s.left-n.outerWidth(!0),top:s.top+a/2-n.outerHeight(!0)/2});break;case"top":n.css({left:s.left+o/2-n.outerWidth(!0)/2,top:s.top-n.outerHeight(!0)});break;case"bottom":n.css({left:s.left+o/2-n.outerWidth(!0)/2,top:s.top+a})}return e.data("thumbnail",n),n},s.prototype.onSlideCountChanged=function(i,e,s){this.dots=t();for(var o=0;o<this.originalDots.length;o++)o%s==0?this.dots=this.dots.add(this.originalDots.eq(o).css("display","")):this.originalDots.eq(o).css("display","none");this.parameters.numeric&&this.dots.each(function(t,i){i.innerHTML=t+1})},i.NextendSmartSliderWidgetBulletTransition=s}(n2,window);
!function(i,t,s){"use strict";function e(t,s){this.slider=window[t],this.slider.started(i.proxy(this.start,this,t,s))}e.prototype.start=function(t,s){if(this.slider.sliderElement.data("thumbnail"))return!1;this.slider.sliderElement.data("thumbnail",this),this.parameters=i.extend({captionSize:0,minimumThumbnailCount:1.5},s),this.ratio=1,this.hidden=!1,this.forceHidden=!1,this.forceHiddenCB=null,this.group=2,this.itemPerPane=1,this.currentI=0,this.offset=0,this.horizontal={prop:"width",Prop:"Width",sideProp:nextend.rtl.left,invProp:"height"},this.vertical={prop:"height",Prop:"Height",sideProp:"top",invProp:"width"},this.group=parseInt(s.group),this.orientation=s.orientation,"vertical"==this.orientation&&(this.goToDot=this._goToDot),this.outerBar=this.slider.sliderElement.find(".nextend-thumbnail-default"),this.bar=this.outerBar.find(".nextend-thumbnail-inner"),this.scroller=this.bar.find(".nextend-thumbnail-scroller");var e="universalclick";if("mouseenter"==s.action&&(e="mouseenter"),this.dots=this.scroller.find("td > div").on(e,i.proxy(this.onDotClick,this)),this.images=this.dots.find(".n2-ss-thumb-image"),nextend.rtl.isRtl?(this.previous=this.outerBar.find(".nextend-thumbnail-next").on("click",i.proxy(this.previousPane,this)),this.next=this.outerBar.find(".nextend-thumbnail-previous").on("click",i.proxy(this.nextPane,this))):(this.previous=this.outerBar.find(".nextend-thumbnail-previous").on("click",i.proxy(this.previousPane,this)),this.next=this.outerBar.find(".nextend-thumbnail-next").on("click",i.proxy(this.nextPane,this))),"horizontal"==this.orientation&&this.group>1){var o=[],n=this.group;this.scroller.find("tr").each(function(t,s){i(s).find("td > div").each(function(i,s){o[t+i*n]=s})}),this.dots=i(o)}if(this.scrollerDimension={width:this.scroller.width(),height:this.scroller.width()},this.thumbnailDimension={width:this.dots.outerWidth(!0),height:this.dots.outerHeight(!0)},this.thumbnailDimension.widthMargin=this.thumbnailDimension.width-this.dots.outerWidth(),this.thumbnailDimension.heightMargin=this.thumbnailDimension.height-this.dots.outerHeight(),this.imageDimension={width:this.images.outerWidth(!0),height:this.images.outerHeight(!0)},this.sideDimension=.25*this.thumbnailDimension[this[this.orientation].prop],"horizontal"==this.orientation?(this.scroller.height(this.thumbnailDimension.height*this.group),this.bar.height(this.scroller.outerHeight(!0))):(this.scroller.width(this.thumbnailDimension.width*this.group),this.bar.width(this.scroller.outerWidth(!0))),this.slider.sliderElement.on("BeforeVisible",i.proxy(this.onReady,this)).on("sliderSwitchTo",i.proxy(this.onSlideSwitch,this)),0==s.overlay){var h=!1;switch(s.area){case 1:h="Top";break;case 12:h="Bottom";break;case 5:h="Left";break;case 8:h="Right"}h&&(this.offset=parseFloat(this.outerBar.data("offset")),this.slider.responsive.addStaticMargin(h,this))}},e.prototype.onReady=function(){this.slider.sliderElement.on("SliderResize",i.proxy(this.onSliderResize,this)),this.onSliderResize()},e.prototype.onSliderResize=function(){null!==this.forceHiddenCB&&this.forceHiddenCB.call(this),this.adjustScrollerSize(),this.goToDot(this.dots.index(this.dots.filter(".n2-active")))},e.prototype.adjustScrollerSize=function(){var i=this[this.orientation].prop,t=Math.ceil(this.dots.length/this.group)*this.thumbnailDimension[i]*this.ratio,s=this.scroller["outer"+this[this.orientation].Prop]()-this.scroller[i](),e=this.slider.dimensions["thumbnail"+i];e>=t+s?this.scroller[i](e-s):this.scroller[i](t)},e.prototype.onDotClick=function(i){this.slider.directionalChangeToReal(this.dots.index(i.currentTarget))},e.prototype.onSlideSwitch=function(i,t,s){this.dots.filter(".n2-active").removeClass("n2-active"),this.dots.eq(s).addClass("n2-active"),this.goToDot(s)},e.prototype.previousPane=function(){this.goToDot(this.currentI-this.itemPerPane)},e.prototype.nextPane=function(){this.goToDot(this.currentI+this.itemPerPane)},e.prototype.goToDot=function(i){var t=this[this.orientation],s=1,e=this.slider.dimensions["thumbnail"+t.prop],o=this.sideDimension,n=e-2*o,h=n/this.thumbnailDimension[t.prop];if(h<=this.parameters.minimumThumbnailCount&&(o=.1*e,n=e-2*o,s=n/(this.parameters.minimumThumbnailCount*this.thumbnailDimension[t.prop]),h=n/(this.thumbnailDimension[t.prop]*s)),this.ratio!=s){var r={};r[t.prop]=parseInt(this.thumbnailDimension[t.prop]*s-this.thumbnailDimension[t.prop+"Margin"]);r[t.invProp]=parseInt((this.thumbnailDimension[t.invProp]-this.parameters.captionSize)*s+this.parameters.captionSize);this.dots.css(r),r={},r[t.prop]=parseInt(this.imageDimension[t.prop]*s-this.thumbnailDimension[t.prop+"Margin"]),r[t.invProp]=parseInt(this.imageDimension[t.invProp]*s),this.images.css(r),this.scroller.css(t.invProp,"auto"),this.bar.css(t.invProp,"auto"),this.ratio=s,this.slider.responsive.doNormalizedResize(),this.adjustScrollerSize()}h=Math.floor(h),i=Math.max(0,Math.min(this.dots.length-1,i));var a=Math.floor(i/this.group/h),l={},d=-(this.scroller["outer"+t.Prop]()-e);a==Math.floor((this.dots.length-1)/this.group/h)?(l[t.sideProp]=-(a*h*this.thumbnailDimension[t.prop]*s),0==a?this.previous.removeClass("n2-active"):this.previous.addClass("n2-active"),this.next.removeClass("n2-active")):a>0?(l[t.sideProp]=-(a*h*this.thumbnailDimension[t.prop]*s-o),this.previous.addClass("n2-active"),this.next.addClass("n2-active")):(l[t.sideProp]=0,this.previous.removeClass("n2-active"),this.next.addClass("n2-active")),d>=l[t.sideProp]&&(l[t.sideProp]=d,this.next.removeClass("n2-active")),NextendTween.to(this.scroller,.5,l).play(),this.currentI=i,this.itemPerPane=h},e.prototype._goToDot=function(t){if(!this.forceHidden){var s=this[this.orientation],e=this.slider.dimensions["thumbnail"+s.prop],o=(e-2*this.sideDimension)/this.thumbnailDimension[s.prop];if(0!=e&&o<this.parameters.minimumThumbnailCount-.5?this.hidden||("horizontal"==this.orientation?this.outerBar.css("height",0):this.outerBar.css("width",0),this.hidden=!0,this.forceHidden=!0,setTimeout(i.proxy(function(){this.forceHiddenCB=function(){this.forceHiddenCB=null,this.forceHidden=!1}},this),300),this.slider.responsive.doNormalizedResize()):this.hidden&&o>=this.parameters.minimumThumbnailCount+.5&&(this.hidden=!1,"horizontal"==this.orientation?this.outerBar.css("height",""):this.outerBar.css("width",""),this.slider.responsive.doNormalizedResize()),!this.hidden){o=Math.floor(o),t=Math.max(0,Math.min(this.dots.length-1,t));var n=Math.floor(t/this.group/o),h={},r=-(this.scroller["outer"+s.Prop]()-e);n==Math.floor((this.dots.length-1)/this.group/o)?(h[s.sideProp]=-(n*o*this.thumbnailDimension[s.prop]),0==n?this.previous.removeClass("n2-active"):this.previous.addClass("n2-active"),this.next.removeClass("n2-active")):n>0?(h[s.sideProp]=-(n*o*this.thumbnailDimension[s.prop]-this.sideDimension),this.previous.addClass("n2-active"),this.next.addClass("n2-active")):(h[s.sideProp]=0,this.previous.removeClass("n2-active"),this.next.addClass("n2-active")),r>=h[s.sideProp]&&(h[s.sideProp]=r,this.next.removeClass("n2-active")),NextendTween.to(this.scroller,.5,h).play()}this.currentI=t,this.itemPerPane=o}},e.prototype.isVisible=function(){return this.outerBar.is(":visible")},e.prototype.getSize=function(){return"horizontal"==this.orientation?this.outerBar.height()+this.offset:this.outerBar.width()+this.offset},t.NextendSmartSliderWidgetThumbnailDefault=e}(n2,window);
