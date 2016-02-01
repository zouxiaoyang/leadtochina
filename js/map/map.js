function KTPolyline(n,t,i,r,u){this.points=n;this.color=t;this.weight=i;this.opacity=r;this.opts=u;this.line=null}KTPolyline.prototype=new GOverlay;KTPolyline.prototype.initialize=function(n){this.map=n;this.prj=n.getCurrentMapType().getProjection();var t=GEvent.callback(this,this.recalc);this.lstnMoveEnd=GEvent.addListener(n,"zoomend",function(){t()});this.lstnType=GEvent.addListener(n,"maptypechanged",function(){t()});this.recalc()};KTPolyline.prototype.remove=function(){try{this.line&&this.map.removeOverlay(this.line)}catch(n){}};KTPolyline.prototype.redraw=function(){return};KTPolyline.prototype.copy=function(){return new KTPolyline(this.points,this.color,this.weight,this.opacity,this.opts)};KTPolyline.prototype.recalc=function(){var r=this.map.getZoom(),n,t,u,f,o,i,e,s,h;for(this.remove(),this.line=new GPolyline(this.points,this.color,this.weight,this.opacity,this.opts),this.map.addOverlay(this.line),this.heads=[],n=this.prj.fromLatLngToPixel(this.points[0],r),e=1;e<this.points.length;e++)t=this.prj.fromLatLngToPixel(this.points[e],r),u=t.x-n.x,f=t.y-n.y,o=Math.sqrt(u*u+f*f),i=Math.atan2(-f,u),j=1,this.gapPx==0?this.addHead(t.x,t.y,i,r):this.gapPx==1&&(s=n.x+o/2*Math.cos(i),h=n.y-o/2*Math.sin(i),this.addHead(s,h,i,r))};KTPolyline.prototype.addHead=function(n,t,i,r){var f=i+Math.PI/4,u;f>Math.PI&&(f-=2*Math.PI);u=i-Math.PI/4;u<=-Math.PI&&(u+=2*Math.PI);var e=[],o=n-Math.cos(f)*this.headLength,s=t+Math.sin(f)*this.headLength,h=n-Math.cos(u)*this.headLength,c=t+Math.sin(u)*this.headLength;e.push(this.prj.fromPixelToLatLng(new GPoint(o,s),r));e.push(this.prj.fromPixelToLatLng(new GPoint(n,t),r));e.push(this.prj.fromPixelToLatLng(new GPoint(h,c),r));this.heads.push(new GPolyline(e,this.headColor,this.headWeight,this.headOpacity,this.opts));this.map.addOverlay(this.heads[this.heads.length-1])};
function ExtInfoWindow(n,t,i,r){this.html_=i;this.marker_=n;this.infoWindowId_=t;this.options_=r===null?{}:r;this.ajaxUrl_=this.options_.ajaxUrl==null?null:this.options_.ajaxUrl;this.callback_=this.options_.ajaxCallback==null?null:this.options_.ajaxCallback;this.maxContent_=this.options_.maxContent==null?null:this.options_.maxContent;this.maximizeEnabled_=this.maxContent_==null?!1:!0;this.isMaximized_=!1;this.borderSize_=this.options_.beakOffset==null?0:this.options_.beakOffset;this.paddingX_=this.options_.paddingX==null?0+this.borderSize_:this.options_.paddingX+this.borderSize_;this.paddingY_=this.options_.paddingY==null?0+this.borderSize_:this.options_.paddingY+this.borderSize_;this.maxPanning_=this.options_.maxPanning==null?500:this.options_.maxPanning;this.map_=null;this.container_=document.createElement("div");this.container_.style.position="relative";this.container_.style.display="none";this.contentDiv_=document.createElement("div");this.contentDiv_.id=this.infoWindowId_+"_contents";this.contentDiv_.innerHTML=this.html_;this.contentDiv_.style.display="block";this.contentDiv_.style.visibility="hidden";this.wrapperDiv_=document.createElement("div")}function hide(n){n.style.display="none";n.style.position="absolute"}function show(n){n.style.display="block";n.style.position="relative"}ExtInfoWindow.prototype=new GOverlay;ExtInfoWindow.prototype.initialize=function(n){var r,u,t,i,f,e;this.map_=n;this.maximizeEnabled_&&(this.maxWidth_=this.map_.getSize().width*.9,this.maxHeight_=this.map_.getSize().height*.9);this.defaultStyles={containerWidth:this.map_.getSize().width/2,borderSize:1};this.wrapperParts={tl:{t:0,l:0,w:0,h:0,domElement:null},t:{t:0,l:0,w:0,h:0,domElement:null},tr:{t:0,l:0,w:0,h:0,domElement:null},l:{t:0,l:0,w:0,h:0,domElement:null},r:{t:0,l:0,w:0,h:0,domElement:null},bl:{t:0,l:0,w:0,h:0,domElement:null},b:{t:0,l:0,w:0,h:0,domElement:null},br:{t:0,l:0,w:0,h:0,domElement:null},beak:{t:0,l:0,w:0,h:0,domElement:null},close:{t:0,l:0,w:0,h:0,domElement:null}};this.maximizeEnabled_&&(this.wrapperParts.max={t:0,l:0,w:0,h:0,domElement:null},this.wrapperParts.min={t:0,l:0,w:0,h:0,domElement:null});for(t in this.wrapperParts)r=document.createElement("div"),r.id=this.infoWindowId_+"_"+t,r.style.visibility="hidden",document.body.appendChild(r),r=document.getElementById(this.infoWindowId_+"_"+t),u=this.wrapperParts[t],u.w=parseInt(this.getStyle_(r,"width"),10),u.h=parseInt(this.getStyle_(r,"height"),10),document.body.removeChild(r);for(t in this.wrapperParts)t=="close"&&this.wrapperDiv_.appendChild(this.contentDiv_),i=null,this.wrapperParts[t].domElement==null?(i=document.createElement("div"),this.wrapperDiv_.appendChild(i)):i=this.wrapperParts[t].domElement,i.id=this.infoWindowId_+"_"+t,i.style.position="absolute",i.style.width=this.wrapperParts[t].w+"px",i.style.height=this.wrapperParts[t].h+"px",i.style.top=this.wrapperParts[t].t+"px",i.style.left=this.wrapperParts[t].l+"px",this.wrapperParts[t].domElement=i;for(this.map_.getPane(G_MAP_FLOAT_PANE).appendChild(this.container_),this.container_.id=this.infoWindowId_,f=this.getStyle_(document.getElementById(this.infoWindowId_),"width"),this.container_.style.width=f==null?this.defaultStyles.containerWidth:f,this.map_.getContainer().appendChild(this.contentDiv_),this.contentWidth=this.getDimensions_(this.container_).width,this.contentDiv_.style.width=this.contentWidth+"px",this.contentDiv_.style.position="absolute",this.container_.appendChild(this.wrapperDiv_),this.maximizeEnabled_&&(this.minWidth_=this.getDimensions_(this.container_).width,console.log(this.minWidth_)),this.maximizeEnabled_&&(thisMap=this.map_,thisMaxWidth=this.maxWidth_,thisMaxHeight=this.maxHeight_,thisContainer=this.container_,thisMaxContent=this.maxContent_,this.marker_&&GEvent.trigger(this.marker_,"extinfowindowbeforeclose"),thisMinWidth=this.container_.style.width,thisMinHeight=this.container_.style.height,GEvent.addDomListener(this.wrapperParts.max.domElement,"click",function(){var n=thisMap.getExtInfoWindow();n.container_.style.width=thisMaxWidth+"px";n.ajaxRequest_(thisMaxContent);this.marker_&&GEvent.trigger(this.marker_,"extinfowindowclose");n.isMaximized_=!0;n.redraw(!0);n.toggleMaxMin_()}),GEvent.addDomListener(this.wrapperParts.min.domElement,"click",function(){var n=thisMap.getExtInfoWindow();n.container_.style.width=thisMinWidth;n.container_.style.height=thisMinHeight;n.ajaxUrl_!=null?n.ajaxRequest_(this.ajaxUrl_):n.contentDiv_.innerHTML=n.html_;n.isMaximized_=!1;n.redraw(!0);n.resize();n.toggleMaxMin_()}),this.toggleMaxMin_()),e=["mousedown","dblclick","DOMMouseScroll"],t=0;t<e.length;t++)GEvent.bindDom(this.container_,e[t],this,this.onClick_);GEvent.trigger(this.map_,"extinfowindowopen");this.ajaxUrl_!=null&&this.ajaxRequest_(this.ajaxUrl_)};ExtInfoWindow.prototype.onClick_=function(n){navigator.userAgent.toLowerCase().indexOf("msie")!=-1&&document.all?(window.event.cancelBubble=!0,window.event.returnValue=!1):n.stopPropagation()};ExtInfoWindow.prototype.remove=function(){this.map_.getExtInfoWindow()!=null&&(GEvent.trigger(this.map_,"extinfowindowbeforeclose"),GEvent.clearInstanceListeners(this.container_),this.container_.outerHTML&&(this.container_.outerHTML=""),this.container_.parentNode&&this.container_.parentNode.removeChild(this.container_),this.container_=null,GEvent.trigger(this.map_,"extinfowindowclose"),this.map_.setExtInfoWindow_(null))};ExtInfoWindow.prototype.copy=function(){return new ExtInfoWindow(this.marker_,this.infoWindowId_,this.html_,this.options_)};ExtInfoWindow.prototype.redraw=function(n){var r,t,i,o,e,f,u;if(n&&this.container_!=null){r=this.contentDiv_.offsetHeight;this.contentDiv_.style.height=r+"px";this.contentWidth=this.getDimensions_(this.container_).width;this.contentDiv_.style.width=this.container_.style.width;this.contentDiv_.style.left=this.wrapperParts.l.w+"px";this.contentDiv_.style.top=this.wrapperParts.tl.h+"px";this.contentDiv_.style.visibility="visible";this.wrapperParts.tl.t=0;this.wrapperParts.tl.l=0;this.wrapperParts.t.l=this.wrapperParts.tl.w;this.wrapperParts.t.w=this.wrapperParts.l.w+this.contentWidth+this.wrapperParts.r.w-this.wrapperParts.tl.w-this.wrapperParts.tr.w;this.wrapperParts.t.h=this.wrapperParts.tl.h;this.wrapperParts.tr.l=this.wrapperParts.t.w+this.wrapperParts.tl.w;this.wrapperParts.l.t=this.wrapperParts.tl.h;this.wrapperParts.l.h=r;this.wrapperParts.r.l=this.contentWidth+this.wrapperParts.l.w;this.wrapperParts.r.t=this.wrapperParts.tr.h;this.wrapperParts.r.h=r;this.wrapperParts.bl.t=r+this.wrapperParts.tl.h;this.wrapperParts.b.l=this.wrapperParts.bl.w;this.wrapperParts.b.t=r+this.wrapperParts.tl.h;this.wrapperParts.b.w=this.wrapperParts.l.w+this.contentWidth+this.wrapperParts.r.w-this.wrapperParts.bl.w-this.wrapperParts.br.w;this.wrapperParts.b.h=this.wrapperParts.bl.h;this.wrapperParts.br.l=this.wrapperParts.b.w+this.wrapperParts.bl.w;this.wrapperParts.br.t=r+this.wrapperParts.tr.h;this.wrapperParts.beak.l=this.borderSize_+this.contentWidth/2-this.wrapperParts.beak.w/2;this.wrapperParts.beak.t=this.wrapperParts.bl.t+this.wrapperParts.bl.h-this.borderSize_;this.wrapperParts.close.l=this.wrapperParts.tr.l+this.wrapperParts.tr.w-this.wrapperParts.close.w-this.borderSize_;this.wrapperParts.close.t=this.borderSize_;this.maximizeEnabled_&&(this.wrapperParts.max.l=this.wrapperParts.close.l-this.wrapperParts.max.w-5,this.wrapperParts.max.t=this.wrapperParts.close.t,this.wrapperParts.min.l=this.wrapperParts.max.l,this.wrapperParts.min.t=this.wrapperParts.max.t);for(t in this.wrapperParts)t=="close"&&this.wrapperDiv_.insertBefore(this.contentDiv_,this.wrapperParts[t].domElement),i=null,this.wrapperParts[t].domElement==null?(i=document.createElement("div"),this.wrapperDiv_.appendChild(i)):i=this.wrapperParts[t].domElement,i.id=this.infoWindowId_+"_"+t,i.style.position="absolute",i.style.width=this.wrapperParts[t].w+"px",i.style.height=this.wrapperParts[t].h+"px",i.style.top=this.wrapperParts[t].t+"px",i.style.left=this.wrapperParts[t].l+"px",this.wrapperParts[t].domElement=i;o=this.marker_;e=this.map_;GEvent.addDomListener(this.wrapperParts.close.domElement,"click",function(){e.closeExtInfoWindow()});f=this.map_.fromLatLngToDivPixel(this.marker_.getPoint());this.container_.style.position="absolute";u=this.marker_.getIcon();this.container_.style.left=f.x-this.contentWidth/2-u.iconAnchor.x+u.infoWindowAnchor.x+"px";this.container_.style.top=f.y-this.wrapperParts.bl.h-r-this.wrapperParts.tl.h-this.wrapperParts.beak.h-u.iconAnchor.y+u.infoWindowAnchor.y+this.borderSize_+"px";this.container_.style.display="block";this.map_.getExtInfoWindow()!=null&&this.repositionMap_()}};ExtInfoWindow.prototype.toggleMaxMin_=function(){this.wrapperParts.max.domElement!=null&&this.wrapperParts.min.domElement!=null&&(this.isMaximized_?(this.wrapperParts.max.domElement.style.display="none",this.wrapperParts.min.domElement.style.display="block"):(this.wrapperParts.max.domElement.style.display="block",this.wrapperParts.min.domElement.style.display="none"))};ExtInfoWindow.prototype.resize=function(){var t=this.contentDiv_.cloneNode(!0),i,n;t.id=this.infoWindowId_+"_tempContents";t.style.visibility="hidden";t.style.height="auto";document.body.appendChild(t);t=document.getElementById(this.infoWindowId_+"_tempContents");i=t.offsetHeight;document.body.removeChild(t);this.contentDiv_.style.height=i+"px";var r=this.container_.offsetWidth,u=this.map_.fromLatLngToDivPixel(this.marker_.getPoint()),f=this.wrapperParts.t.domElement.offsetHeight+this.wrapperParts.l.domElement.offsetHeight+this.wrapperParts.b.domElement.offsetHeight,e=this.wrapperParts.t.domElement.offsetTop;this.wrapperParts.l.domElement.style.height=i+"px";this.wrapperParts.r.domElement.style.height=i+"px";n=this.wrapperParts.b.domElement.offsetTop-i;this.wrapperParts.l.domElement.style.top=n+"px";this.wrapperParts.r.domElement.style.top=n+"px";this.contentDiv_.style.top=n+"px";windowTHeight=parseInt(this.wrapperParts.t.domElement.style.height,10);n-=windowTHeight;this.wrapperParts.close.domElement.style.top=n+this.borderSize_+"px";this.wrapperParts.tl.domElement.style.top=n+"px";this.wrapperParts.t.domElement.style.top=n+"px";this.wrapperParts.tr.domElement.style.top=n+"px";this.repositionMap_()};ExtInfoWindow.prototype.repositionMap_=function(){var i=this.map_.fromLatLngToDivPixel(this.map_.getBounds().getNorthEast()),r=this.map_.fromLatLngToDivPixel(this.map_.getBounds().getSouthWest()),u=this.map_.fromLatLngToDivPixel(this.marker_.getPoint()),n=0,t=0,w=this.paddingX_,b=this.paddingY_,f=this.marker_.getIcon().infoWindowAnchor,e=this.marker_.getIcon().iconAnchor,a=this.wrapperParts.t.domElement,c=this.wrapperParts.l.domElement,v=this.wrapperParts.b.domElement,y=this.wrapperParts.r.domElement,p=this.wrapperParts.beak.domElement,l=u.y-(-f.y+e.y+this.getDimensions_(p).height+this.getDimensions_(v).height+this.getDimensions_(c).height+this.getDimensions_(a).height+this.paddingY_),o,s,h;l<i.y?t=i.y-l:(o=u.y+this.paddingY_,o>=r.y&&(t=-(o-r.y)));s=Math.round(u.x+this.getDimensions_(this.container_).width/2+this.getDimensions_(y).width+this.paddingX_+f.x-e.x);s>i.x?n=-(s-i.x):(h=-(Math.round(this.getDimensions_(this.container_).width/2-this.marker_.getIcon().iconSize.width/2+this.getDimensions_(c).width+this.borderSize_+this.paddingX_)-u.x-f.x+e.x),h<r.x&&(n=r.x-h));(n!=0||t!=0&&this.map_.getExtInfoWindow()!=null)&&((t<0-this.maxPanning_||t>this.maxPanning_)&&(n<0-this.maxPanning_||n>this.maxPanning_)?this.map_.setCenter(this.marker_.getPoint()):this.map_.panBy(new GSize(n,t)))};ExtInfoWindow.prototype.ajaxRequest_=function(n){var t=this.map_,i=this.callback_;GDownloadUrl(n,function(r,u){if(t.getExtInfoWindow()!==null){var f=document.getElementById(t.getExtInfoWindow().infoWindowId_+"_contents");f.innerHTML=r==null||u==-1?'<span class="error">ERROR: The Ajax request failed to get HTML content from "'+n+'"<\/span>':r;i!=null&&i();t.getExtInfoWindow().resize()}GEvent.trigger(t,"extinfowindowupdate")})};ExtInfoWindow.prototype.getDimensions_=function(n){var i=this.getStyle_(n,"display"),r,u;if(i!="none"&&i!=null)return{width:n.offsetWidth,height:n.offsetHeight};var t=n.style,f=t.visibility,e=t.position,o=t.display;return t.visibility="hidden",t.position="absolute",t.display="block",r=n.clientWidth,u=n.clientHeight,t.display=o,t.position=e,t.visibility=f,{width:r,height:u}};ExtInfoWindow.prototype.getStyle_=function(n,t){var i,r;return t=this.camelize_(t),n.id==this.infoWindowId_&&t=="width"&&n.style.display=="none"&&(n.style.visibility="hidden",n.style.display=""),i=n.style[t],i||(document.defaultView&&document.defaultView.getComputedStyle?(r=document.defaultView.getComputedStyle(n,null),i=r?r[t]:null):n.currentStyle&&(i=n.currentStyle[t])),i=="auto"&&(t=="width"||t=="height")&&this.getStyle_(n,"display")!="none"&&(i=t=="width"?n.offsetWidth:n.offsetHeight),n.id==this.infoWindowId_&&t=="width"&&n.style.display!="none"&&(n.style.display="none",n.style.visibility="visible"),i=="auto"?null:i};ExtInfoWindow.prototype.camelize_=function(n){var t=n.split("-"),u=t.length,r,i;if(u==1)return t[0];for(r=n.charAt(0)=="-"?t[0].charAt(0).toUpperCase()+t[0].substring(1):t[0],i=1;i<u;i++)r+=t[i].charAt(0).toUpperCase()+t[i].substring(1);return r};GMap.prototype.ExtInfoWindowInstance_=null;GMap.prototype.ClickListener_=null;GMap.prototype.InfoWindowListener_=null;GMarker.prototype.openExtInfoWindow=function(n,t,i,r){if(n==null)throw"Error in GMarker.openExtInfoWindow: map cannot be null";if(t==null||t=="")throw"Error in GMarker.openExtInfoWindow: must specify a cssId";n.closeInfoWindow();n.getExtInfoWindow()!=null&&n.closeExtInfoWindow();n.getExtInfoWindow()==null&&(n.setExtInfoWindow_(new ExtInfoWindow(this,t,i,r)),n.ClickListener_==null&&(n.ClickListener_=GEvent.addListener(n,"click",function(t){t||n.getExtInfoWindow()==null||n.closeExtInfoWindow()})),n.InfoWindowListener_==null&&(n.InfoWindowListener_=GEvent.addListener(n,"infowindowopen",function(){n.getExtInfoWindow()!=null&&n.closeExtInfoWindow()})),n.addOverlay(n.getExtInfoWindow()))};GMarker.prototype.closeExtInfoWindow=function(n){n.getExtInfoWindow()!=null&&n.closeExtInfoWindow()};GMap2.prototype.getExtInfoWindow=function(){return this.ExtInfoWindowInstance_};GMap2.prototype.setExtInfoWindow_=function(n){this.ExtInfoWindowInstance_=n};GMap2.prototype.closeExtInfoWindow=function(){this.getExtInfoWindow()!=null&&this.ExtInfoWindowInstance_.remove()};
function MarkerManager(n,t){var i=this,u,f,e,o,r;for(i.map_=n,i.mapZoom_=n.getZoom(),i.projection_=n.getCurrentMapType().getProjection(),t=t||{},i.tileSize_=MarkerManager.DEFAULT_TILE_SIZE_,u=n.getMapTypes(),f=u[0].getMaximumResolution(),e=0;e<u.length;e++)o=u[e].getMaximumResolution(),o>f&&(f=o);i.maxZoom_=t.maxZoom||f;i.trackMarkers_=t.trackMarkers;i.show_=t.show||!0;r=typeof t.borderPadding=="number"?t.borderPadding:MarkerManager.DEFAULT_BORDER_PADDING_;i.swPadding_=new GSize(-r,r);i.nePadding_=new GSize(r,-r);i.borderPadding_=r;i.gridWidth_=[];i.grid_=[];i.grid_[i.maxZoom_]=[];i.numMarkers_=[];i.numMarkers_[i.maxZoom_]=0;GEvent.bind(n,"moveend",i,i.onMapMoveEnd_);i.removeOverlay_=function(t){n.removeOverlay(t);i.shownMarkers_--};i.addOverlay_=function(t){i.show_&&(n.addOverlay(t),i.shownMarkers_++)};i.resetManager_();i.shownMarkers_=0;i.shownBounds_=i.getMapGridBounds_()}MarkerManager.DEFAULT_TILE_SIZE_=1024;MarkerManager.DEFAULT_BORDER_PADDING_=100;MarkerManager.MERCATOR_ZOOM_LEVEL_ZERO_RANGE=256;MarkerManager.prototype.resetManager_=function(){for(var n=this,i=MarkerManager.MERCATOR_ZOOM_LEVEL_ZERO_RANGE,t=0;t<=n.maxZoom_;++t)n.grid_[t]=[],n.numMarkers_[t]=0,n.gridWidth_[t]=Math.ceil(i/n.tileSize_),i<<=1};MarkerManager.prototype.clearMarkers=function(){var n=this;n.processAll_(n.shownBounds_,n.removeOverlay_);n.resetManager_()};MarkerManager.prototype.getTilePoint_=function(n,t,i){var r=this.projection_.fromLatLngToPixel(n,t);return new GPoint(Math.floor((r.x+i.width)/this.tileSize_),Math.floor((r.y+i.height)/this.tileSize_))};MarkerManager.prototype.addMarkerBatch_=function(n,t,i){var e=n.getPoint(),r,u,f;for(n.MarkerManager_minZoom=t,this.trackMarkers_&&GEvent.bind(n,"changed",this,this.onMarkerMoved_),r=this.getTilePoint_(e,i,GSize.ZERO),u=i;u>=t;u--)f=this.getGridCellCreate_(r.x,r.y,u),f.push(n),r.x=r.x>>1,r.y=r.y>>1};MarkerManager.prototype.isGridPointVisible_=function(n){var t=this,f=t.shownBounds_.minY<=n.y&&n.y<=t.shownBounds_.maxY,i=t.shownBounds_.minX,r=i<=n.x&&n.x<=t.shownBounds_.maxX,u;return!r&&i<0&&(u=t.gridWidth_[t.shownBounds_.z],r=i+u<=n.x&&n.x<=u-1),f&&r};MarkerManager.prototype.onMarkerMoved_=function(n,t,i){for(var r=this,e=r.maxZoom_,o=!1,f=r.getTilePoint_(t,e,GSize.ZERO),u=r.getTilePoint_(i,e,GSize.ZERO),s;e>=0&&(f.x!==u.x||f.y!==u.y);)s=r.getGridCellNoCreate_(f.x,f.y,e),s&&r.removeFromArray_(s,n)&&r.getGridCellCreate_(u.x,u.y,e).push(n),e===r.mapZoom_&&(r.isGridPointVisible_(f)?r.isGridPointVisible_(u)||(r.removeOverlay_(n),o=!0):r.isGridPointVisible_(u)&&(r.addOverlay_(n),o=!0)),f.x=f.x>>1,f.y=f.y>>1,u.x=u.x>>1,u.y=u.y>>1,--e;o&&r.notifyListeners_()};MarkerManager.prototype.removeMarker=function(n){for(var t=this,r=t.maxZoom_,f=!1,e=n.getPoint(),i=t.getTilePoint_(e,r,GSize.ZERO),u;r>=0;)u=t.getGridCellNoCreate_(i.x,i.y,r),u&&t.removeFromArray_(u,n),r===t.mapZoom_&&t.isGridPointVisible_(i)&&(t.removeOverlay_(n),f=!0),i.x=i.x>>1,i.y=i.y>>1,--r;f&&t.notifyListeners_();t.numMarkers_[n.MarkerManager_minZoom]--};MarkerManager.prototype.addMarkers=function(n,t,i){for(var u=this.getOptMaxZoom_(i),r=n.length-1;r>=0;r--)this.addMarkerBatch_(n[r],t,u);this.numMarkers_[t]+=n.length};MarkerManager.prototype.getOptMaxZoom_=function(n){return n||this.maxZoom_};MarkerManager.prototype.getMarkerCount=function(n){for(var i=0,t=0;t<=n;t++)i+=this.numMarkers_[t];return i};MarkerManager.prototype.getMarker=function(n,t,i){var f=this,e=new GLatLng(n,t),o=f.getTilePoint_(e,i,GSize.ZERO),s=new GMarker(e),u=f.getGridCellNoCreate_(o.x,o.y,i),r;if(u!=undefined)for(r=0;r<u.length;r++)n==u[r].getLatLng().lat()&&t==u[r].getLatLng().lng()&&(s=u[r]);return s};MarkerManager.prototype.addMarker=function(n,t,i){var r=this,u=this.getOptMaxZoom_(i),f;r.addMarkerBatch_(n,t,u);f=r.getTilePoint_(n.getPoint(),r.mapZoom_,GSize.ZERO);r.isGridPointVisible_(f)&&t<=r.shownBounds_.z&&r.shownBounds_.z<=u&&(r.addOverlay_(n),r.notifyListeners_());this.numMarkers_[t]++};GBounds.prototype.containsPoint=function(n){var t=this;return t.minX<=n.x&&t.maxX>=n.x&&t.minY<=n.y&&t.maxY>=n.y};MarkerManager.prototype.getGridCellCreate_=function(n,t,i){var f=this.grid_[i],r,u;return(n<0&&(n+=this.gridWidth_[i]),r=f[n],!r)?(r=f[n]=[],r[t]=[]):(u=r[t],!u)?r[t]=[]:u};MarkerManager.prototype.getGridCellNoCreate_=function(n,t,i){var u=this.grid_[i],r;return n<0&&(n+=this.gridWidth_[i]),r=u[n],r?r[t]:undefined};MarkerManager.prototype.getGridBounds_=function(n,t,i,r){var o;t=Math.min(t,this.maxZoom_);var s=n.getSouthWest(),h=n.getNorthEast(),u=this.getTilePoint_(s,t,i),f=this.getTilePoint_(h,t,r),e=this.gridWidth_[t];return(h.lng()<s.lng()||f.x<u.x)&&(u.x-=e),f.x-u.x+1>=e&&(u.x=0,f.x=e-1),o=new GBounds([u,f]),o.z=t,o};MarkerManager.prototype.getMapGridBounds_=function(){var n=this;return n.getGridBounds_(n.map_.getBounds(),n.mapZoom_,n.swPadding_,n.nePadding_)};MarkerManager.prototype.onMapMoveEnd_=function(){var n=this;n.objectSetTimeout_(this,this.updateMarkers_,0)};MarkerManager.prototype.objectSetTimeout_=function(n,t,i){return window.setTimeout(function(){t.call(n)},i)};MarkerManager.prototype.visible=function(){return this.show_?!0:!1};MarkerManager.prototype.isHidden=function(){return!this.show_};MarkerManager.prototype.show=function(){this.show_=!0;this.refresh()};MarkerManager.prototype.hide=function(){this.show_=!1;this.refresh()};MarkerManager.prototype.toggle=function(){this.show_=!this.show_;this.refresh()};MarkerManager.prototype.refresh=function(){var n=this;n.shownMarkers_>0&&n.processAll_(n.shownBounds_,n.removeOverlay_);n.show_&&n.processAll_(n.shownBounds_,n.addOverlay_);n.notifyListeners_()};MarkerManager.prototype.updateMarkers_=function(){var n=this,t;(n.mapZoom_=this.map_.getZoom(),t=n.getMapGridBounds_(),t.equals(n.shownBounds_)&&t.z===n.shownBounds_.z)||(t.z!==n.shownBounds_.z?(n.processAll_(n.shownBounds_,n.removeOverlay_),n.show_&&n.processAll_(t,n.addOverlay_)):(n.rectangleDiff_(n.shownBounds_,t,n.removeCellMarkers_),n.show_&&n.rectangleDiff_(t,n.shownBounds_,n.addCellMarkers_)),n.shownBounds_=t,n.notifyListeners_())};MarkerManager.prototype.notifyListeners_=function(){GEvent.trigger(this,"changed",this.shownBounds_,this.shownMarkers_)};MarkerManager.prototype.processAll_=function(n,t){for(var r,i=n.minX;i<=n.maxX;i++)for(r=n.minY;r<=n.maxY;r++)this.processCellMarkers_(i,r,n.z,t)};MarkerManager.prototype.processCellMarkers_=function(n,t,i,r){var f=this.getGridCellNoCreate_(n,t,i),u;if(f)for(u=f.length-1;u>=0;u--)r(f[u])};MarkerManager.prototype.removeCellMarkers_=function(n,t,i){this.processCellMarkers_(n,t,i,this.removeOverlay_)};MarkerManager.prototype.addCellMarkers_=function(n,t,i){this.processCellMarkers_(n,t,i,this.addOverlay_)};MarkerManager.prototype.rectangleDiff_=function(n,t,i){var r=this;r.rectangleDiffCoords_(n,t,function(t,u){i.apply(r,[t,u,n.z])})};MarkerManager.prototype.rectangleDiffCoords_=function(n,t,i){for(var f=n.minX,e=n.minY,o=n.maxX,s=n.maxY,l=t.minX,h=t.minY,a=t.maxX,c=t.maxY,r,u=f;u<=o;u++){for(r=e;r<=s&&r<h;r++)i(u,r);for(r=Math.max(c+1,e);r<=s;r++)i(u,r)}for(r=Math.max(e,h);r<=Math.min(s,c);r++){for(u=Math.min(o+1,l)-1;u>=f;u--)i(u,r);for(u=Math.max(f,a+1);u<=o;u++)i(u,r)}};MarkerManager.prototype.removeFromArray_=function(n,t,i){for(var u=0,r=0;r<n.length;++r)(n[r]===t||i&&n[r]===t)&&(n.splice(r--,1),u++);return u};
function ELabel(n,t,i,r,u,f){this.point=n;this.html=t;this.classname=i||"";this.pixelOffset=r||new GSize(0,0);u&&(u<0&&(u=0),u>100&&(u=100));this.percentOpacity=u;this.overlap=f||!1;this.hidden=!1}ELabel.prototype=new GOverlay;ELabel.prototype.initialize=function(n){var t=document.createElement("div"),i;t.style.position="absolute";t.innerHTML='<div class="'+this.classname+'">'+this.html+"<\/div>";n.getPane(G_MAP_FLOAT_SHADOW_PANE).appendChild(t);this.map_=n;this.div_=t;this.percentOpacity&&(typeof t.style.filter=="string"&&(t.style.filter="alpha(opacity:"+this.percentOpacity+")"),typeof t.style.KHTMLOpacity=="string"&&(t.style.KHTMLOpacity=this.percentOpacity/100),typeof t.style.MozOpacity=="string"&&(t.style.MozOpacity=this.percentOpacity/100),typeof t.style.opacity=="string"&&(t.style.opacity=this.percentOpacity/100));this.overlap&&(i=GOverlay.getZIndex(this.point.lat()),this.div_.style.zIndex=i);this.hidden&&this.hide()};ELabel.prototype.remove=function(){this.div_.parentNode.removeChild(this.div_)};ELabel.prototype.copy=function(){return new ELabel(this.point,this.html,this.classname,this.pixelOffset,this.percentOpacity,this.overlap)};ELabel.prototype.redraw=function(){var n=this.map_.fromLatLngToDivPixel(this.point),t=parseInt(this.div_.clientHeight);this.div_.style.left=n.x+this.pixelOffset.width+"px";this.div_.style.top=n.y+this.pixelOffset.height-t+"px"};ELabel.prototype.show=function(){this.div_&&(this.div_.style.display="",this.redraw());this.hidden=!1};ELabel.prototype.hide=function(){this.div_&&(this.div_.style.display="none");this.hidden=!0};ELabel.prototype.isHidden=function(){return this.hidden};ELabel.prototype.supportsHide=function(){return!0};ELabel.prototype.setContents=function(n){this.html=n;this.div_.innerHTML='<div class="'+this.classname+'">'+this.html+"<\/div>";this.redraw(!0)};ELabel.prototype.setPoint=function(n){if(this.point=n,this.overlap){var t=GOverlay.getZIndex(this.point.lat());this.div_.style.zIndex=t}this.redraw(!0)};ELabel.prototype.setOpacity=function(n){n&&(n<0&&(n=0),n>100&&(n=100));this.percentOpacity=n;this.percentOpacity&&(typeof this.div_.style.filter=="string"&&(this.div_.style.filter="alpha(opacity:"+this.percentOpacity+")"),typeof this.div_.style.KHTMLOpacity=="string"&&(this.div_.style.KHTMLOpacity=this.percentOpacity/100),typeof this.div_.style.MozOpacity=="string"&&(this.div_.style.MozOpacity=this.percentOpacity/100),typeof this.div_.style.opacity=="string"&&(this.div_.style.opacity=this.percentOpacity/100))};ELabel.prototype.getPoint=function(){return this.point};
function initializeMap(){GBrowserIsCompatible()&&(map=new GMap2(document.getElementById("map")),doControls(),zoom=map.getBoundsZoomLevel(bounds),progZoom<zoom&&progZoom!=0&&(zoom=progZoom),map.setCenter(bounds.getCenter(),zoom),mm=new MarkerManager(map),doPre(),mm.refresh(),zoom=map.getBoundsZoomLevel(bounds),progZoom<zoom&&progZoom!=0&&(zoom=progZoom),map.setCenter(bounds.getCenter(),zoom),doPost(),GEvent.addDomListener(map,"extinfowindowupdate",function(){var n=document.getElementById("custom_info_window_big_red_contents")}),GEvent.addDomListener(map,"extinfowindowclose",function(){map.setCenter(bounds.getCenter(),map.getZoom())}))}function loaded(){}function makeMiniMapIcon(n,t){var i=new GIcon(minimapIconBase);return i.image=t==1?webPath+"map/day?size=round&colour=red&day="+t:webPath+"map/day?size=round&day="+t,new GMarker(n,{icon:i})}
function makeFullMapIcon(n,t,i){
	// var r=new GIcon(fullmapIconBase);return r.image=i==1?webPath+"/day-"+i+".png":webPath+"/day-"+i+".png",new GMarker(n,{icon:r})
	var r=new GIcon(fullmapIconBase);return r.image=i==1?webPath+"marker.png":webPath+"marker.png",new GMarker(n,{icon:r})
}
function makeInfoMapIcon(n,t,i){var u=new GIcon(infomapIconBase),r;return u.image=i==1?webPath+"/mini_orange_info.png":webPath+"Assets/mini_info.png",r=new GMarker(n,{icon:u}),GEvent.addListener(r,"click",function(){Itineraries.GetMapSummary("12-"+t)}),r}function makeInfoMapIconCustomAction(n,t,i,r){var f=new GIcon(infomapIconBase),u;return f.image=i==1?webPath+"/mini_orange_info.png":webPath+"Assets/mini_info.png",u=new GMarker(n,{icon:f}),GEvent.addListener(u,"click",function(){r(t)}),u}function changeIcon(n,t,i){lastSelectedIdentity>=0&&(map.closeExtInfoWindow(),lastSelectedType==1?infoMarkers[lastSelectedIdentity].setImage(webPath+"map/info?colour=1&num="+lastSelectedIdentity):infoMarkers[lastSelectedIdentity].setImage(webPath+"map/info?colour=0&num="+lastSelectedIdentity));infoMarkers[n]!=null&&(map.setCenter(infoMarkers[n].getLatLng(),6),GEvent.trigger(infoMarkers[n],"click"),lastSelectedIdentity=n,lastSelectedType=t,i&&setTimeout("autoClickTab('"+i+"');",500))}function autoClickTab(n){var t=document.getElementById("tab_"+n);GEvent.trigger(t,"click");switchTab(n)}

function plane(n){var t,e,i,r,o,u,h,c,l,f,s,a,v;return f=map.getCurrentMapType().getProjection(),t=f.fromLatLngToPixel(n[0],zoom),e=f.fromLatLngToPixel(n[1],zoom),i=e.x-t.x,r=e.y-t.y,u=Math.atan2(-r,i),o=Math.sqrt(i*i+r*r),c=t.x+o/4*Math.cos(u),l=t.y-o/4*Math.sin(u),h=u*(180/Math.PI),s=new GIcon(planeIconBase),s.image=webPath+"/plane.php?rotate="+h,a=f.fromPixelToLatLng(new GPoint(c,l),zoom),v=new GMarker(a,{icon:s}),v}

function openDesc(n,t,i){var r=700,u=600,f=(screen.width-r)/2,e=(screen.height-u)/2;i==null&&(i=0);window.open("/viewDescription.cfm?type="+n+"&id="+t+"&vehId="+i,"","width="+r+",height="+u+",scrollbars=1,resizable=1,left="+f+",top="+e)}function KTPolyline(n,t,i,r,u){this.points=n;this.color=t;this.weight=i;this.opacity=r;this.opts=u;this.line=null}var map,zoom=8,normalProj=G_NORMAL_MAP.getProjection(),mm,infoMarkers=[],bounds=new GLatLngBounds,lastSelectedIdentity=-1,lastSelectedType=1,minimapIconBase=new GIcon,fullmapIconBase,infomapIconBase,planeIconBase;minimapIconBase.iconSize=new GSize(20,20);minimapIconBase.iconAnchor=new GPoint(10,10);minimapIconBase.infoWindowAnchor=new GPoint(10,10);fullmapIconBase=new GIcon;fullmapIconBase.iconSize=new GSize(34,59);fullmapIconBase.iconAnchor=new GPoint(17,55);fullmapIconBase.infoWindowAnchor=new GPoint(17,0);infomapIconBase=new GIcon;infomapIconBase.iconSize=new GSize(20,20);infomapIconBase.iconAnchor=new GPoint(10,10);infomapIconBase.infoWindowAnchor=new GPoint(10,0);planeIconBase=new GIcon;planeIconBase.iconSize=new GSize(20,20);planeIconBase.iconAnchor=new GPoint(10,10);planeIconBase.infoWindowAnchor=new GPoint(10,2);planeIconBase.shadowSize=new GSize(0,0);