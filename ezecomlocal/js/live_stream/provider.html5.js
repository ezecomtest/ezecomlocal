webpackJsonpjwplayer([4],{12:function(e,t,i){var r,n;r=[i(1),i(13),i(2),i(19),i(18)],n=function(e,t,i,r,n){function a(t){if(this._currentTextTrackIndex=-1,t){if(this._textTracks?(this._textTracks=e.reject(this._textTracks,function(e){if(this.renderNatively&&"nativecaptions"===e._id)return delete this._tracksById[e._id],!0},this),delete this._tracksById.nativemetadata):this._initTextTracks(),t.length){var r=0,a=t.length;for(r;r<a;r++){var s=t[r];if(!s._id){if("captions"===s.kind||"metadata"===s.kind){if(s._id="native"+s.kind,!s.label&&"captions"===s.kind){var c=n.createLabel(s,this._unknownCount);s.name=c.label,this._unknownCount=c.unknownCount}}else s._id=n.createId(s,this._textTracks.length);if(this._tracksById[s._id])continue;s.inuse=!0}if(s.inuse&&!this._tracksById[s._id])if("metadata"===s.kind)s.mode="hidden",s.oncuechange=L.bind(this),this._tracksById[s._id]=s;else if(x(s.kind)){var o,d=s.mode;if(s.mode="hidden",!s.cues.length&&s.embedded)continue;if(s.mode=d,this._cuesByTrackId[s._id]&&!this._cuesByTrackId[s._id].loaded){for(var u=this._cuesByTrackId[s._id].cues;o=u.shift();)p(this.renderNatively,s,o);s.mode=d,this._cuesByTrackId[s._id].loaded=!0}I.call(this,s)}}}this.renderNatively&&(this.textTrackChangeHandler=this.textTrackChangeHandler||v.bind(this),this.addTracksListener(this.video.textTracks,"change",this.textTrackChangeHandler),(i.isEdge()||i.isFF())&&(this.addTrackHandler=this.addTrackHandler||y.bind(this),this.addTracksListener(this.video.textTracks,"addtrack",this.addTrackHandler))),this._textTracks.length&&this.trigger("subtitlesTracks",{tracks:this._textTracks})}}function s(e){if(this.renderNatively){var t=e===this._itemTracks;t||r.cancelXhr(this._itemTracks),this._itemTracks=e,e&&(t||(this.disableTextTrack(),A.call(this),this.addTextTracks(e)))}}function c(){return this._currentTextTrackIndex}function o(t){this._textTracks&&(0===t&&e.each(this._textTracks,function(e){e.mode=e.embedded?"hidden":"disabled"}),this._currentTextTrackIndex!==t-1&&(this.disableTextTrack(),this._currentTextTrackIndex=t-1,this.renderNatively&&(this._textTracks[this._currentTextTrackIndex]&&(this._textTracks[this._currentTextTrackIndex].mode="showing"),this.trigger("subtitlesTrackChanged",{currentTrack:this._currentTextTrackIndex+1,tracks:this._textTracks}))))}function d(e){if(e.text&&e.begin&&e.end){var t=e.trackid.toString(),i=this._tracksById&&this._tracksById[t];i||(i={kind:"captions",_id:t,data:[]},this.addTextTracks([i]),this.trigger("subtitlesTracks",{tracks:this._textTracks}));var n;e.useDTS&&(i.source||(i.source=e.source||"mpegts")),n=e.begin+"_"+e.text;var a=this._metaCuesByTextTime[n];if(!a){a={begin:e.begin,end:e.end,text:e.text},this._metaCuesByTextTime[n]=a;var s=r.convertToVTTCues([a])[0];i.data.push(s)}}}function u(e){this._tracksById||this._initTextTracks();var t="native"+e.type,i=this._tracksById[t],r="captions"===e.type?"Unknown CC":"ID3 Metadata",n=e.cue;if(!i){var a={kind:e.type,_id:t,label:r,embedded:!0};i=w.call(this,a),this.renderNatively||"metadata"===i.kind?this.setTextTracks(this.video.textTracks):_.call(this,[i])}C.call(this,i,n)&&(this.renderNatively||"metadata"===i.kind?p(this.renderNatively,i,n):i.data.push(n))}function l(e){var t=this._tracksById[e.name];if(t){t.source=e.source;for(var i=e.captions||[],n=[],a=!1,s=0;s<i.length;s++){var c=i[s],o=e.name+"_"+c.begin+"_"+c.end;this._metaCuesByTextTime[o]||(this._metaCuesByTextTime[o]=c,n.push(c),a=!0)}a&&n.sort(function(e,t){return e.begin-t.begin});var d=r.convertToVTTCues(n);Array.prototype.push.apply(t.data,d)}}function h(e,t,i){e&&(f(e,t,i),this.instreamMode||(e.addEventListener?e.addEventListener(t,i):e["on"+t]=i))}function f(e,t,i){e&&(e.removeEventListener?e.removeEventListener(t,i):e["on"+t]=null)}function T(){r.cancelXhr(this._itemTracks);var e=this._tracksById&&this._tracksById.nativemetadata;(this.renderNatively||e)&&(b(this.renderNatively,this.video.textTracks),e&&(e.oncuechange=null)),this._itemTracks=null,this._textTracks=null,this._tracksById=null,this._cuesByTrackId=null,this._metaCuesByTextTime=null,this._unknownCount=0,this._activeCuePosition=null,this.renderNatively&&(this.removeTracksListener(this.video.textTracks,"change",this.textTrackChangeHandler),b(this.renderNatively,this.video.textTracks))}function k(){if(this._textTracks){var e=this._textTracks[this._currentTextTrackIndex];e&&(e.mode="disabled",(e.embedded||"nativecaptions"===e._id)&&(e.mode="hidden"))}}function g(){if(this._textTracks){var e=this._textTracks[this._currentTextTrackIndex];e&&(e.mode="showing")}}function v(){var t=this.video.textTracks,i=e.filter(t,function(e){return(e.inuse||!e._id)&&x(e.kind)});if(!this._textTracks||S.call(this,i))return void this.setTextTracks(t);for(var r=-1,n=0;n<this._textTracks.length;n++)if("showing"===this._textTracks[n].mode){r=n;break}r!==this._currentTextTrackIndex&&this.setSubtitlesTrack(r+1)}function y(){this.setTextTracks(this.video.textTracks)}function _(e){if(e){this._textTracks||this._initTextTracks();for(var t=0;t<e.length;t++){var i=e[t];if(!i.kind||x(i.kind)){var n=w.call(this,i);I.call(this,n),i.file&&(i.data=[],r.loadFile(i,this.addVTTCuesToTrack.bind(this,n),R))}}!this.renderNatively&&this._textTracks&&this._textTracks.length&&this.trigger("subtitlesTracks",{tracks:this._textTracks})}}function m(e,t){if(this.renderNatively){var i=this._tracksById[e._id];if(!i)return this._cuesByTrackId||(this._cuesByTrackId={}),void(this._cuesByTrackId[e._id]={cues:t,loaded:!1});if(!this._cuesByTrackId[e._id]||!this._cuesByTrackId[e._id].loaded){var r;for(this._cuesByTrackId[e._id]={cues:t,loaded:!0};r=t.shift();)p(this.renderNatively,i,r)}}}function p(e,t,r){if(!i.isIE()||!e||!window.TextTrackCue)return void t.addCue(r);var n=new window.TextTrackCue(r.startTime,r.endTime,r.text);t.addCue(n)}function b(t,r){r.length&&e.each(r,function(e){if(!(i.isIE()&&t&&/^(native|subtitle|cc)/.test(e._id))){e.mode="disabled",e.mode="hidden";for(var r=e.cues.length;r--;)e.removeCue(e.cues[r]);e.embedded||(e.mode="disabled"),e.inuse=!1}})}function x(e){return"subtitles"===e||"captions"===e}function E(){this._textTracks=[],this._tracksById={},this._metaCuesByTextTime={},this._cuesByTrackId={},this._cachedVTTCues={},this._unknownCount=0}function w(t){var i,r=n.createLabel(t,this._unknownCount),a=r.label;if(this._unknownCount=r.unknownCount,this.renderNatively||"metadata"===t.kind){var s=this.video.textTracks;i=e.findWhere(s,{label:a}),i?(i.kind=t.kind,i.language=t.language||""):i=this.video.addTextTrack(t.kind,a,t.language||""),i["default"]=t["default"],i.mode="disabled",i.inuse=!0}else i=t,i.data=i.data||[];return i._id||(i._id=n.createId(t,this._textTracks.length)),i}function I(e){this._textTracks.push(e),this._tracksById[e._id]=e}function A(){if(this._textTracks){var t=e.filter(this._textTracks,function(e){return e.embedded||"subs"===e.groupid});this._initTextTracks(),e.each(t,function(e){this._tracksById[e._id]=e}),this._textTracks=t}}function L(i){var r=i.currentTarget.activeCues;if(r&&r.length){var n=r[r.length-1].startTime;if(this._activeCuePosition!==n){var a=[];if(e.each(r,function(e){e.startTime<n||(e.data||e.value?a.push(e):e.text&&this.trigger("meta",{metadataTime:n,metadata:JSON.parse(e.text)}))},this),a.length){var s=t.parseID3(a);this.trigger("meta",{metadataTime:n,metadata:s})}this._activeCuePosition=n}}}function C(e,t){var i=e.kind;this._cachedVTTCues[e._id]||(this._cachedVTTCues[e._id]={});var r,n=this._cachedVTTCues[e._id];switch(i){case"captions":r=Math.floor(20*t.startTime);var a=Math.floor(20*t.endTime),s=n[r]||n[r+1]||n[r-1];return!(s&&Math.abs(s-a)<=1)&&(n[r]=a,!0);case"metadata":var c=t.data?new Uint8Array(t.data).join(""):t.text;return r=t.startTime+c,!n[r]&&(n[r]=t.endTime,!0)}}function S(e){if(e.length>this._textTracks.length)return!0;for(var t=0;t<e.length;t++){var i=e[t];if(!i._id||!this._tracksById[i._id])return!0}return!1}function R(e){i.log("CAPTIONS("+e+")")}var M={_itemTracks:null,_textTracks:null,_tracksById:null,_cuesByTrackId:null,_cachedVTTCues:null,_metaCuesByTextTime:null,_currentTextTrackIndex:-1,_unknownCount:0,_activeCuePosition:null,_initTextTracks:E,addTracksListener:h,clearTracks:T,disableTextTrack:k,enableTextTrack:g,getSubtitlesTrack:c,removeTracksListener:f,addTextTracks:_,setTextTracks:a,setupSideloadedTracks:s,setSubtitlesTrack:o,textTrackChangeHandler:null,addTrackHandler:null,addCuesToTrack:l,addCaptionsCue:d,addVTTCue:u,addVTTCuesToTrack:m,renderNatively:!1};return M}.apply(t,r),!(void 0!==n&&(e.exports=n))},37:function(e,t,i){var r,n;r=[],n=function(){function e(e){return e&&e.length?e.end(e.length-1):0}return{endOfRange:e}}.apply(t,r),!(void 0!==n&&(e.exports=n))},72:function(e,t,i){var r,n;r=[i(139),i(61),i(4),i(1)],n=function(e,t,i,r){function n(e,n){function l(i){var n=i.target,c=i.initData;if(n.webkitKeys||n.webkitSetMediaKeys(new window.WebKitMediaKeys("com.apple.fps.1_0")),!n.webkitKeys)throw new Error("Could not create MediaKeys");var u=e.fairplay;u.initData=c,t.ajax(u.certificateUrl,function(e){var t=new Uint8Array(e.response),i=u.extractContentId(d(c));r.isString(i)&&(i=o(i));var l=a(c,i,t),h=n.webkitKeys.createSession("video/mp4",l);if(!h)throw new Error("Could not create key session");s(h,"webkitkeymessage",f),s(h,"webkitkeyerror",v),u.session=h},g,{responseType:"arraybuffer"})}function f(t){var i=e.fairplay,n=t.target,a=t.message,s=new XMLHttpRequest;s.responseType=i.licenseResponseType,s.addEventListener("load",T,!1),s.addEventListener("error",y,!1);var c="";c=r.isFunction(i.processSpcUrl)?i.processSpcUrl(d(i.initData)):i.processSpcUrl,s.open("POST",c,!0),r.each(i.licenseRequestHeaders,function(e){s.setRequestHeader(e.name,e.value)});var o=i.licenseRequestMessage(a,n);s.send(o)}function T(t){var i=t.target,n=e.fairplay.extractKey(i.response);r.isFunction(n.then)?n.then(k):k(n)}function k(t){var i=e.fairplay.session,n=t;r.isString(n)&&(n=u(n)),i.update(n)}function g(){e.trigger(i.JWPLAYER_MEDIA_ERROR,{message:"Error loading media: Failed to retrieve the server certificate"})}function v(){e.trigger(i.JWPLAYER_MEDIA_ERROR,{message:"Error loading media: Decryption key error was encountered"})}function y(){e.trigger(i.JWPLAYER_MEDIA_ERROR,{message:"Error loading media: The license request failed"})}var _=n.sources[0];if(!e.fairplay||e.fairplay.source!==_){var m=_.drm;m&&m.fairplay?(e.fairplay=r.extend({},h,m.fairplay),e.fairplay.source=_,e.fairplay.destroy=function(){c(e.video,"webkitneedkey",l);var t=this.session;t&&(c(t,"webkitkeymessage",f),c(t,"webkitkeyerror",v)),e.fairplay=null},s(e.video,"webkitneedkey",l)):e.fairplay&&e.fairplay.destroy()}}function a(e,t,i){var r=0,n=new ArrayBuffer(e.byteLength+4+t.byteLength+4+i.byteLength),a=new DataView(n),s=new Uint8Array(n,r,e.byteLength);s.set(e),r+=e.byteLength,a.setUint32(r,t.byteLength,!0),r+=4;var c=new Uint16Array(n,r,t.length);c.set(t),r+=c.byteLength,a.setUint32(r,i.byteLength,!0),r+=4;var o=new Uint8Array(n,r,i.byteLength);return o.set(i),new Uint8Array(n,0,n.byteLength)}function s(e,t,i){c(e,t,i),e.addEventListener(t,i,!1)}function c(e,t,i){e&&e.removeEventListener(t,i)}function o(e){for(var t=new ArrayBuffer(2*e.length),i=new Uint16Array(t),r=0,n=e.length;r<n;r++)i[r]=e.charCodeAt(r);return i}function d(e){var t=new Uint16Array(e.buffer);return String.fromCharCode.apply(null,t)}function u(e){for(var t=window.atob(e),i=t.length,r=new Uint8Array(new ArrayBuffer(i)),n=0;n<i;n++)r[n]=t.charCodeAt(n);return r}var l=function(t,i){e.call(this,t,i);var r=this.init,a=this.load,s=this.destroy;this.init=function(e){n(this,e),r.call(this,e)},this.load=function(e){n(this,e),a.call(this,e)},this.destroy=function(e){this.fairplay&&this.fairplay.destroy(),s.call(this,e)}},h={certificateUrl:"",processSpcUrl:"",licenseResponseType:"arraybuffer",licenseRequestHeaders:[],licenseRequestMessage:function(e){return e},extractContentId:function(e){return e.split("skd://")[1]},extractKey:function(e){return new Uint8Array(e)}};return l.getName=e.getName,l}.apply(t,r),!(void 0!==n&&(e.exports=n))},139:function(e,t,i){var r,n;r=[i(59),i(23),i(2),i(35),i(1),i(4),i(5),i(11),i(3),i(12),i(37)],n=function(e,t,i,r,n,a,s,c,o,d,u){function l(e,t){i.foreach(e,function(e,i){t.addEventListener(e,i,!1)})}function h(e,t){i.foreach(e,function(e,i){t.removeEventListener(e,i,!1)})}function f(c,f){function I(e,t){qe.setAttribute(e,t||"")}function A(){ue(qe.audioTracks),Ee.setTextTracks(qe.textTracks),I("jw-loaded","data")}function L(){I("jw-loaded","started")}function C(e){Ee.trigger("click",e)}function S(){Re||(F(P()),D(ne(),pe,me))}function R(){D(ne(),pe,me)}function M(){T(Le),Ie=!0,Ee.state===s.STALLED?Ee.setState(s.PLAYING):Ee.state===s.PLAYING&&(Le=setTimeout(re,k)),Re&&qe.duration===1/0&&0===qe.currentTime||(F(P()),N(qe.currentTime),D(ne(),pe,me),Ee.state===s.PLAYING&&(Ee.trigger(a.JWPLAYER_MEDIA_TIME,{position:pe,duration:me}),B()))}function B(){var e=Fe.level;if(e.width!==qe.videoWidth||e.height!==qe.videoHeight){if(e.width=qe.videoWidth,e.height=qe.videoHeight,Te(),!e.width||!e.height||Se===-1)return;Fe.reason=Fe.reason||"auto",Fe.mode="hls"===xe[Se].type?"auto":"manual",Fe.bitrate=0,e.index=Se,e.label=xe[Se].label,Ee.trigger("visualQuality",Fe),Fe.reason=""}}function D(e,t,i){0===i||e===Ce&&i===me||(Ce=e,Ee.trigger(a.JWPLAYER_MEDIA_BUFFER,{bufferPercent:100*e,position:t,duration:i})),ke()}function N(e){me<0&&(e=-(ee()-e)),pe=e}function P(){var e=qe.duration,t=ee();if(e===1/0&&t){var i=t-$();i!==1/0&&i>g&&(e=-i)}return e}function F(e){me=e,Ae&&e&&e!==1/0&&Ee.seek(Ae)}function O(){var e=P();Re&&e===1/0&&(e=0),Ee.trigger(a.JWPLAYER_MEDIA_META,{duration:e,height:qe.videoHeight,width:qe.videoWidth}),F(e)}function j(){Ie=Oe=!0,Re||Te(),y&&Ee.setTextTracks(Ee._textTracks),W()}function H(){I("jw-loaded","meta"),O()}function W(){be||i.isIOS()&&!Oe||(be=!0,Oe=!1,Ee.trigger(a.JWPLAYER_MEDIA_BUFFER_FULL))}function U(){Ee.setState(s.PLAYING),qe.hasAttribute("jw-played")||I("jw-played",""),qe.hasAttribute("jw-gesture-required")&&qe.removeAttribute("jw-gesture-required"),Ee.trigger(a.JWPLAYER_PROVIDER_FIRST_FRAME,{})}function Y(){Ee.state!==s.COMPLETE&&qe.hasAttribute("jw-played")&&qe.currentTime!==qe.duration&&Ee.setState(s.PAUSED)}function J(){if(!(Re||qe.paused||qe.ended||Ee.state===s.LOADING||Ee.state===s.ERROR||Ee.seeking))return i.isIOS()&&qe.duration-qe.currentTime<=.1?void ae():void(ve()&&(Ye=!0,ge())||Ee.setState(s.STALLED))}function q(){Ee.trigger(a.JWPLAYER_MEDIA_ERROR,{message:"Error loading media: File could not be played"})}function V(e){var t;return"array"===i.typeOf(e)&&e.length>0&&(t=n.map(e,function(e,t){return{label:e.label||t}})),t}function K(e){xe=e,Se=G(e);var t=V(e);t&&Ee.trigger(a.JWPLAYER_MEDIA_LEVELS,{levels:t,currentQuality:Se})}function G(e){var t=Math.max(0,Se),i=f.qualityLabel;if(e)for(var r=0;r<e.length;r++)if(e[r]["default"]&&(t=r),i&&e[r].label===i)return r;return Fe.reason="initial choice",Fe.level={},t}function Q(){var e=qe.play();e&&e["catch"]?e["catch"](function(e){console.warn(e),"NotAllowedError"===e.name&&qe.hasAttribute("jw-gesture-required")&&Ee.trigger("autoplayFailed")}):qe.hasAttribute("jw-gesture-required")&&Ee.trigger("autoplayFailed")}function X(e,t){Ae=0,ye();var r=document.createElement("source");r.src=xe[Se].file;var n=qe.src!==r.src,a=qe.getAttribute("jw-loaded"),c=qe.hasAttribute("jw-played");n||"none"===a||"started"===a?(me=t,z(xe[Se]),Ee.setupSideloadedTracks(Ee._itemTracks),qe.load()):(0===e&&qe.currentTime>0&&(Ae=-1,Ee.seek(e)),Q()),pe=qe.currentTime,m&&!c&&(W(),qe.paused||Ee.state===s.PLAYING||Ee.setState(s.LOADING)),i.isIOS()&&Ee.getFullScreen()&&(qe.controls=!0),e>0&&Ee.seek(e)}function z(t){Ne=null,Pe=-1,Fe.reason||(Fe.reason="initial choice",Fe.level={}),Ie=!1,be=!1,Re=e(t),t.preload&&t.preload!==qe.getAttribute("preload")&&I("preload",t.preload);var i=document.createElement("source");i.src=t.file;var r=qe.src!==i.src;r&&(I("jw-loaded","none"),qe.src=t.file)}function Z(){qe&&(Ee.disableTextTrack(),qe.removeAttribute("preload"),qe.removeAttribute("src"),qe.removeAttribute("jw-loaded"),qe.removeAttribute("jw-played"),r.emptyElement(qe),Se=-1,!_&&"load"in qe&&qe.load())}function $(){for(var e=qe.seekable?qe.seekable.length:0,t=1/0;e--;)t=Math.min(t,qe.seekable.start(e));return t}function ee(){for(var e=qe.seekable?qe.seekable.length:0,t=0;e--;)t=Math.max(t,qe.seekable.end(e));return t}function te(){Ee.seeking=!1,Ee.trigger(a.JWPLAYER_MEDIA_SEEKED)}function ie(){Ee.trigger("volume",{volume:Math.round(100*qe.volume)}),Ee.trigger("mute",{mute:qe.muted})}function re(){qe.currentTime===pe?J():Ye=!1}function ne(){var e=qe.buffered,t=qe.duration;return!e||0===e.length||t<=0||t===1/0?0:i.between(e.end(e.length-1)/t,0,1)}function ae(){Ee.state!==s.IDLE&&Ee.state!==s.COMPLETE&&(ye(),Se=-1,Ee.trigger(a.JWPLAYER_MEDIA_COMPLETE))}function se(e){Be=!0,de(e),i.isIOS()&&(qe.controls=!1)}function ce(){for(var e=-1,t=0;t<qe.audioTracks.length;t++)if(qe.audioTracks[t].enabled){e=t;break}le(e)}function oe(e){Be=!1,de(e),i.isIOS()&&(qe.controls=!1)}function de(e){Ee.trigger("fullscreenchange",{target:e.target,jwstate:Be})}function ue(e){if(Ne=null,e){if(e.length){for(var t=0;t<e.length;t++)if(e[t].enabled){Pe=t;break}Pe===-1&&(Pe=0,e[Pe].enabled=!0),Ne=n.map(e,function(e){var t={name:e.label||e.language,language:e.language};return t})}Ee.addTracksListener(e,"change",ce),Ne&&Ee.trigger("audioTracks",{currentTrack:Pe,tracks:Ne})}}function le(e){qe&&qe.audioTracks&&Ne&&e>-1&&e<qe.audioTracks.length&&e!==Pe&&(qe.audioTracks[Pe].enabled=!1,Pe=e,qe.audioTracks[Pe].enabled=!0,Ee.trigger("audioTrackChanged",{currentTrack:Pe,tracks:Ne}))}function he(){return Ne||[]}function fe(){return Pe}function Te(){if("hls"===xe[0].type){var e="video";0===qe.videoHeight&&(e="audio"),Ee.trigger("mediaType",{mediaType:e})}}function ke(){var e=u.endOfRange(qe.buffered),t=qe.duration===1/0;t&&We===e?He||(He=setTimeout(function(){Ue=!0,ge()},je)):(T(He),He=null,Ue=!1),We=e}function ge(){return!(!Ue||!Ye)&&(Ee.trigger(a.JWPLAYER_MEDIA_ERROR,{message:"The live stream is either down or has ended"}),!0)}function ve(){if(qe.duration!==1/0)return!1;var e=2;return u.endOfRange(qe.buffered)-qe.currentTime<=e}function ye(){T(Le),T(He),He=null}this.state=s.IDLE,this.seeking=!1,n.extend(this,o,d),this.renderNatively=i.isChrome()||i.isIOS()||i.isSafari()||i.isEdge();var _e,me,pe,be,xe,Ee=this,we={click:C,durationchange:S,ended:ae,error:q,loadstart:L,loadeddata:A,loadedmetadata:H,canplay:j,playing:U,progress:R,pause:Y,seeked:te,timeupdate:M,volumechange:ie,webkitbeginfullscreen:se,webkitendfullscreen:oe},Ie=!1,Ae=0,Le=-1,Ce=-1,Se=-1,Re=null,Me=!!f.sdkplatform,Be=!1,De=i.noop,Ne=null,Pe=-1,Fe={level:{}},Oe=!1,je=3e4,He=null,We=null,Ue=!1,Ye=!1,Je=document.getElementById(c),qe=Je?Je.querySelector("video"):void 0;qe||(qe=document.createElement("video"),m&&I("jw-gesture-required")),qe.className="jw-video jw-reset",this.isSDK=Me,this.video=qe,l(we,qe),I("disableRemotePlayback",""),I("webkit-playsinline"),I("playsinline"),this.stop=function(){ye(),Z(),this.clearTracks(),i.isIE()&&qe.pause(),this.setState(s.IDLE)},this.destroy=function(){De=i.noop,h(we,qe),this.removeTracksListener(qe.audioTracks,"change",ce),this.removeTracksListener(qe.textTracks,"change",Ee.textTrackChangeHandler),this.remove(),this.off()},this.init=function(e){xe=e.sources,Se=G(e.sources),e.sources.length&&"hls"!==e.sources[0].type&&this.sendMediaType(e.sources),pe=e.starttime||0,me=e.duration||0,Fe.reason="",z(xe[Se]),this.setupSideloadedTracks(e.tracks)},this.load=function(e){K(e.sources),e.sources.length&&"hls"!==e.sources[0].type&&this.sendMediaType(e.sources),m&&!qe.hasAttribute("jw-played")||Ee.setState(s.LOADING),X(e.starttime||0,e.duration||0)},this.play=function(){return Ee.seeking?(Ee.setState(s.LOADING),void Ee.once(a.JWPLAYER_MEDIA_SEEKED,Ee.play)):(De(),void Q())},this.pause=function(){ye(),qe.pause(),De=function(){var e=qe.paused&&qe.currentTime;if(e&&qe.duration===1/0){var t=ee(),i=t-$(),r=i<g,n=t-qe.currentTime;r&&t&&(n>15||n<0)&&(qe.currentTime=Math.max(t-10,t-i))}},this.setState(s.PAUSED)},this.seek=function(e){if(e<0&&(e+=$()+ee()),0===Ae&&this.trigger(a.JWPLAYER_MEDIA_SEEK,{position:qe.currentTime,offset:e}),Ie||(Ie=!!ee()),Ie){Ae=0;try{Ee.seeking=!0,qe.currentTime=e}catch(t){Ee.seeking=!1,Ae=e}}else Ae=e,p&&qe.paused&&Q()},this.volume=function(e){e=i.between(e/100,0,1),qe.volume=e},this.mute=function(e){qe.muted=!!e},this.detachMedia=function(){return ye(),h(we,qe),this.removeTracksListener(qe.textTracks,"change",this.textTrackChangeHandler),this.disableTextTrack(),qe},this.attachMedia=function(){l(we,qe),Ie=!1,this.seeking=!1,qe.loop=!1,this.enableTextTrack(),this.addTracksListener(qe.textTracks,"change",this.textTrackChangeHandler)},this.setContainer=function(e){_e=e,e.appendChild(qe)},this.getContainer=function(){return _e},this.remove=function(){Z(),ye(),_e===qe.parentNode&&_e.removeChild(qe)},this.setVisibility=function(e){e=!!e,e||b?t.style(_e,{visibility:"visible",opacity:1}):t.style(_e,{visibility:"",opacity:0})},this.resize=function(e,i,r){if(!(e&&i&&qe.videoWidth&&qe.videoHeight))return!1;var n={objectFit:"",width:"",height:""};if("uniform"===r){var a=e/i,s=qe.videoWidth/qe.videoHeight;Math.abs(a-s)<.09&&(n.objectFit="fill",r="exactfit")}var c=v||x||E||b&&!p;if(c){var o=-Math.floor(qe.videoWidth/2+1),d=-Math.floor(qe.videoHeight/2+1),u=Math.ceil(100*e/qe.videoWidth)/100,l=Math.ceil(100*i/qe.videoHeight)/100;"none"===r?u=l=1:"fill"===r?u=l=Math.max(u,l):"uniform"===r&&(u=l=Math.min(u,l)),n.width=qe.videoWidth,n.height=qe.videoHeight,n.top=n.left="50%",n.margin=0,t.transform(qe,"translate("+o+"px, "+d+"px) scale("+u.toFixed(2)+", "+l.toFixed(2)+")")}return t.style(qe,n),!1},this.setFullscreen=function(e){if(e=!!e){var t=i.tryCatch(function(){var e=qe.webkitEnterFullscreen||qe.webkitEnterFullScreen;e&&e.apply(qe)});return!(t instanceof i.Error)&&Ee.getFullScreen()}var r=qe.webkitExitFullscreen||qe.webkitExitFullScreen;return r&&r.apply(qe),e},Ee.getFullScreen=function(){return Be||!!qe.webkitDisplayingFullscreen},this.setCurrentQuality=function(e){if(Se!==e&&e>=0&&xe&&xe.length>e){Se=e,Fe.reason="api",Fe.level={},this.trigger(a.JWPLAYER_MEDIA_LEVEL_CHANGED,{currentQuality:e,levels:V(xe)}),f.qualityLabel=xe[e].label;var t=qe.currentTime||0,i=qe.duration||0;i<=0&&(i=me),Ee.setState(s.LOADING),X(t,i)}},this.getCurrentQuality=function(){return Se},this.getQualityLevels=function(){return V(xe)},this.getName=function(){return{name:w}},this.setCurrentAudioTrack=le,this.getAudioTracks=he,this.getCurrentAudioTrack=fe}var T=window.clearTimeout,k=256,g=120,v=i.isIE(),y=i.isIE(9),_=i.isMSIE(),m=i.isMobile(),p=i.isFF(),b=i.isAndroidNative(),x=i.isIOS(7),E=i.isIOS(8),w="html5",I=function(){};return I.prototype=c,f.prototype=new I,f.getName=function(){return{name:"html5"}},f}.apply(t,r),!(void 0!==n&&(e.exports=n))}});