<style type="text/css">
<!--
	body,table{ font-size:12px;}
	
	.QrCSSDesignerPad{
		margin-top:30px;
		background-color:#f2f2f2;
	}
	
	.QrCSSDesignerPadLeft{
		width:200px;
	}
-->
</style>
<SCRIPT lang="JavaScript" src="qrx/qrxpcom.js"></SCRIPT>
<SCRIPT lang="JavaScript" src="qrx/qrcpicker.js"></SCRIPT>
<SCRIPT lang="JavaScript" src="qrx/qrcpulldown.js"></SCRIPT>
<SCRIPT lang="JavaScript" src="qrx/qrcspinner.js"></SCRIPT>
<script lang="JavaScript"><!--

QrXPCOM.cssToJsMap = new Array;
QrXPCOM.cssToJsMap["background"]	=	"background";
QrXPCOM.cssToJsMap["background-attachment"]	=	"backgroundAttachment";
QrXPCOM.cssToJsMap["background-color"]	=	"backgroundColor";
QrXPCOM.cssToJsMap["background-image"]	=	"backgroundImage";
QrXPCOM.cssToJsMap["background-position"]	=	"backgroundPosition";
QrXPCOM.cssToJsMap["background-position-x"]	=	"backgroundPositionX";
QrXPCOM.cssToJsMap["background-position-y"]	=	"backgroundPositionY";
QrXPCOM.cssToJsMap["background-repeat"]	=	"backgroundRepeat";
QrXPCOM.cssToJsMap["behavior"]	=	"behavior";
QrXPCOM.cssToJsMap["border"]	=	"border";
QrXPCOM.cssToJsMap["border-bottom"]	=	"borderBottom";
QrXPCOM.cssToJsMap["border-bottom-color"]	=	"borderBottomColor";
QrXPCOM.cssToJsMap["border-bottom-style"]	=	"borderBottomStyle";
QrXPCOM.cssToJsMap["border-bottom-width"]	=	"borderBottomWidth";
QrXPCOM.cssToJsMap["border-color"]	=	"borderColor";
QrXPCOM.cssToJsMap["border-left"]	=	"borderLeft";
QrXPCOM.cssToJsMap["border-left-color"]	=	"borderLeftColor";
QrXPCOM.cssToJsMap["border-left-style"]	=	"borderLeftStyle";
QrXPCOM.cssToJsMap["border-left-width"]	=	"borderLeftWidth";
QrXPCOM.cssToJsMap["border-right"]	=	"borderRight";
QrXPCOM.cssToJsMap["border-right-color"]	=	"borderRightColor";
QrXPCOM.cssToJsMap["border-right-style"]	=	"borderRightStyle";
QrXPCOM.cssToJsMap["border-right-width"]	=	"borderRightWidth";
QrXPCOM.cssToJsMap["border-style"]	=	"borderStyle";
QrXPCOM.cssToJsMap["border-top"]	=	"borderTop";
QrXPCOM.cssToJsMap["border-top-color"]	=	"borderTopColor";
QrXPCOM.cssToJsMap["border-top-style"]	=	"borderTopStyle";
QrXPCOM.cssToJsMap["border-top-width"]	=	"borderTopWidth";
QrXPCOM.cssToJsMap["border-width"]	=	"borderWidth";
QrXPCOM.cssToJsMap["bottom"]	=	"bottom";
QrXPCOM.cssToJsMap["clear"]	=	"clear";
QrXPCOM.cssToJsMap["clip"]	=	"clip";
QrXPCOM.cssToJsMap["color"]	=	"color";
QrXPCOM.cssToJsMap["cursor"]	=	"cursor";
QrXPCOM.cssToJsMap["direction"]	=	"direction";
QrXPCOM.cssToJsMap["display"]	=	"display";
QrXPCOM.cssToJsMap["filter"]	=	"filter";
QrXPCOM.cssToJsMap["font"]	=	"font";
QrXPCOM.cssToJsMap["font-family"]	=	"fontFamily";
QrXPCOM.cssToJsMap["font-size"]	=	"fontSize";
QrXPCOM.cssToJsMap["font-style"]	=	"fontStyle";
QrXPCOM.cssToJsMap["font-variant"]	=	"fontVariant";
QrXPCOM.cssToJsMap["font-weight"]	=	"fontWeight";
QrXPCOM.cssToJsMap["height"]	=	"height";
QrXPCOM.cssToJsMap["layout-flow"]	=	"layoutFlow";
QrXPCOM.cssToJsMap["layout-grid"]	=	"layoutGrid";
QrXPCOM.cssToJsMap["layout-grid-char"]	=	"layoutGridChar";
QrXPCOM.cssToJsMap["layout-grid-line"]	=	"layoutGridLine";
QrXPCOM.cssToJsMap["layout-grid-mode"]	=	"layoutGridMode";
QrXPCOM.cssToJsMap["layout-grid-type"]	=	"layoutGridType";
QrXPCOM.cssToJsMap["left"]	=	"left";
QrXPCOM.cssToJsMap["letter-spacing"]	=	"letterSpacing";
QrXPCOM.cssToJsMap["line-break"]	=	"lineBreak";
QrXPCOM.cssToJsMap["line-height"]	=	"lineHeight";
QrXPCOM.cssToJsMap["margin"]	=	"margin";
QrXPCOM.cssToJsMap["margin-bottom"]	=	"marginBottom";
QrXPCOM.cssToJsMap["margin-left"]	=	"marginLeft";
QrXPCOM.cssToJsMap["margin-right"]	=	"marginRight";
QrXPCOM.cssToJsMap["margin-top"]	=	"marginTop";
QrXPCOM.cssToJsMap["overflow"]	=	"overflow";
QrXPCOM.cssToJsMap["overflow-x"]	=	"overflowX";
QrXPCOM.cssToJsMap["overflow-y"]	=	"overflowY";
QrXPCOM.cssToJsMap["padding"]	=	"padding";
QrXPCOM.cssToJsMap["padding-bottom"]	=	"paddingBottom";
QrXPCOM.cssToJsMap["padding-left"]	=	"paddingLeft";
QrXPCOM.cssToJsMap["padding-right"]	=	"paddingRight";
QrXPCOM.cssToJsMap["padding-top"]	=	"paddingTop";
QrXPCOM.cssToJsMap["page-break-after"]	=	"pageBreakAfter";
QrXPCOM.cssToJsMap["page-break-before"]	=	"pageBreakBefore";
QrXPCOM.cssToJsMap["position"]	=	"position";
QrXPCOM.cssToJsMap["right"]	=	"right";
QrXPCOM.cssToJsMap["scrollbar-3dlight-color"]	=	"scrollbar3dLightColor";
QrXPCOM.cssToJsMap["scrollbar-arrow-color"]	=	"scrollbarArrowColor";
QrXPCOM.cssToJsMap["scrollbar-base-color"]	=	"scrollbarBaseColor";
QrXPCOM.cssToJsMap["scrollbar-darkshadow-color"]	=	"scrollbarDarkShadowColor";
QrXPCOM.cssToJsMap["scrollbar-face-color"]	=	"scrollbarFaceColor";
QrXPCOM.cssToJsMap["scrollbar-highlight-color"]	=	"scrollbarHighlightColor";
QrXPCOM.cssToJsMap["scrollbar-shadow-color"]	=	"scrollbarShadowColor";
QrXPCOM.cssToJsMap["scrollbar-track-color"]	=	"scrollbarTrackColor";
QrXPCOM.cssToJsMap["float"]	=	"styleFloat";
QrXPCOM.cssToJsMap["text-align"]	=	"textAlign";
QrXPCOM.cssToJsMap["text-align-last"]	=	"textAlignLast";
QrXPCOM.cssToJsMap["text-autospace"]	=	"textAutospace";
QrXPCOM.cssToJsMap["text-decoration"]	=	"textDecoration";
QrXPCOM.cssToJsMap["text-indent"]	=	"textIndent";
QrXPCOM.cssToJsMap["text-justify"]	=	"textJustify";
QrXPCOM.cssToJsMap["text-kashida-space"]	=	"textKashidaSpace";
QrXPCOM.cssToJsMap["text-overflow"]	=	"";
QrXPCOM.cssToJsMap["text-transform"]	=	"textTransform";
QrXPCOM.cssToJsMap["text-underline-position"]	=	"textUnderlinePosition";
QrXPCOM.cssToJsMap["top"]	=	"top";
QrXPCOM.cssToJsMap["unicode-bidi"]	=	"unicodeBidi";
QrXPCOM.cssToJsMap["visibility"]	=	"visibility";
QrXPCOM.cssToJsMap["white-space"]	=	"whiteSpace";
QrXPCOM.cssToJsMap["width"]	=	"width";
QrXPCOM.cssToJsMap["word-break"]	=	"wordBreak";
QrXPCOM.cssToJsMap["word-spacing"]	=	"wordSpacing";
QrXPCOM.cssToJsMap["word-wrap"]	=	"wordWrap";
QrXPCOM.cssToJsMap["writing-mode"]	=	"writingMode";
QrXPCOM.cssToJsMap["z-index"]	=	"zIndex";
QrXPCOM.cssToJsMap["zoom"]	=	"zoom";

var connectInstanceMap = new Array;
var connectInstanceOverrideMap = new Array;
var styles = new Array;
function connectCSS(obj, style, override){
	connectInstanceMap[style] = obj;
	connectInstanceOverrideMap[style] = override;
	obj.onChange = function(value){
		setTargetStyle(style, value);
	}
}

function connectCSS2(obj,objB, style, override){
	connectInstanceMap[style] = new Array;
	connectInstanceMap[style][0] = obj;
	connectInstanceMap[style][1] = objB;
	connectInstanceOverrideMap[style] = override;
	obj.onChange = function(value){
		value = value + objB.get();
		setTargetStyle(style, value);
	}
	objB.onChange = function(value){
		value = obj.get() + value;
		setTargetStyle(style, value);
	}
}

function setTargetStyle(style, value){
	try{
		document.getElementById("target").style[QrXPCOM.cssToJsMap[style]] = value;
		document.getElementById("target2").style[QrXPCOM.cssToJsMap[style]] = value;
		document.getElementById("target3").style[QrXPCOM.cssToJsMap[style]] = value;
		styles[style] = value;
	}catch(e){
		document.getElementById("target").style[QrXPCOM.cssToJsMap[style]] = "";
		document.getElementById("target2").style[QrXPCOM.cssToJsMap[style]] = "";
		document.getElementById("target3").style[QrXPCOM.cssToJsMap[style]] = "";
		styles[style] = null;
	}
	
	var st;
	var cssstr = ".someclass {\n";
	for(st in styles){
		if(styles[st]) cssstr += "\t" + st + " : " + styles[st] + ";\n";
	}
	cssstr += "}\n";
	document.getElementById("output").value = cssstr;
	
	
	var divstr = "<DIV style=\"";
	for(st in styles){
		if(styles[st]) divstr += st + ":" + styles[st] + "; ";
	}
	divstr += "\">\n\n</DIV>";
	document.getElementById("output2").value = divstr;
}

function collapseSwitch(style){
	if(document.getElementById(style).style.visibility != "hidden"){
		var st;
		for(st in connectInstanceOverrideMap[style]){
			try{
				connectInstanceMap[style].set("");
			}catch(x){
				connectInstanceMap[style][0].set("");
			}
			document.getElementById(st).style.display = "";
		}
		document.getElementById(style+"#switch").src = "qrx/extimg/arrowopen.gif";
		document.getElementById(style).style.visibility = "hidden";
		try{
			connectInstanceMap[style].set("");
		}catch(x){
			connectInstanceMap[style][0].set("");
		}
	}else{
		var st;
		for(st in connectInstanceOverrideMap[style]){
			try{
				connectInstanceMap[style].set("");
			}catch(x){
				connectInstanceMap[style][0].set("");
			}
			document.getElementById(st).style.display = "none";
		}
		document.getElementById(style+"#switch").src = "qrx/extimg/arrowclose.gif";
		document.getElementById(style).style.visibility = "";
		try{
			connectInstanceMap[style].set("");
		}catch(x){
			connectInstanceMap[style][0].set("");
		}
	}
}

function createTaniComponent(def){
	if(!def) def = "px";
	var tan = new QrPulldown(def,3);
	tan.render();
	tan.addItem("<img src='qrx/transparentpixel.gif' style='width:16px;height:16px;' align='middle'/> px = pixels","px");
	tan.addItem("<img src='qrx/transparentpixel.gif' style='width:16px;height:16px;' align='middle'/> pt = 1/72in","pt");
	tan.addItem("<img src='qrx/transparentpixel.gif' style='width:16px;height:16px;' align='middle'/> em = font-size","em");
	tan.addItem("<img src='qrx/transparentpixel.gif' style='width:16px;height:16px;' align='middle'/> ex = x-height of font","ex");
	tan.addItem("<img src='qrx/transparentpixel.gif' style='width:16px;height:16px;' align='middle'/> pc = 12pt","pc");
	tan.addItem("<img src='qrx/transparentpixel.gif' style='width:16px;height:16px;' align='middle'/> cm","cm");
	tan.addItem("<img src='qrx/transparentpixel.gif' style='width:16px;height:16px;' align='middle'/> mm","mm");
	tan.addItem("<img src='qrx/transparentpixel.gif' style='width:16px;height:16px;' align='middle'/> in","in");
	tan.addItem("<img src='qrx/transparentpixel.gif' style='width:16px;height:16px;' align='middle'/> %","%");
	return tan;
}

function innerset(){
	document.getElementById("target").innerHTML = document.getElementById("innerset").value;
	document.getElementById("target2").innerHTML = document.getElementById("innerset").value;
	document.getElementById("target3").innerHTML = document.getElementById("innerset").value;
}

//--></script>
<SPAN class="QrTitle"> CSS Designer</SPAN><SPAN class="QrDescription"> - CSS 样式编辑器
</SPAN><br/><hr /><br />


<div style="float:left;width:450px;">
<div style="width:350px;height:300px;">

<div style="background-image:url('qrx/grid.gif'); padding:20px; margin:20px; width:350px;">
<div id="target">
CSS 样式 在线编辑器<br /><br />
CSS 样式效果即时演示区域。
</div>
</div>

<TEXTAREA id="output" rows="7" style=" margin:20px; width:350px; border:1px solid gray;">
</TEXTAREA><br/>

</div>
<div style="width:350px;height:300px;">

<div style="background-image:url('qrx/grid.gif'); padding:20px; margin:20px; width:350px;">
<div id="target2">
CSS 样式 在线编辑器<br /><br />
CSS 样式效果即时演示区域。
</div>
</div>

<TEXTAREA id="output2" rows="7" style=" margin:20px; width:350px; border:1px solid gray;">
</TEXTAREA><br>

</div>
<div style="width:350px;height:300px;">

<div style="background-image:url('qrx/grid.gif'); padding:20px; margin:20px; width:350px;">
<div id="target3">
CSS 样式 在线编辑器<br /><br />
CSS 样式效果即时演示区域。
</div>
</div>

<TEXTAREA id="innerset" rows="7" style=" margin-top:20px;margin-left:20px;margin-right:20px; width:350px; border:1px solid gray;">
 CSS 样式在线编辑器<br/>
在此输入想要在效果演示中显示的内容，按确认键即可在上面演示区域查看效果。<br/>
</TEXTAREA><br/><br />
&nbsp; <input type="submit" style="margin-left:20px; border:1px solid gray;" onClick="innerset();" value ="确认查看演示效果">


</div>
</div>

<div style="float:left">

<table class="QrCSSDesignerPad">

<tr><td></td><td class="QrCSSDesignerPadLeft">文字颜色 color：  </td><td><SCRIPT lang="JavaScript"><!--
var cp = new QrColorPicker("black");
cp.render();
connectCSS(cp,"color");
--></SCRIPT></td></tr>

<tr><td></td><td class="QrCSSDesignerPadLeft">背景颜色 background-color： </td><td><SCRIPT lang="JavaScript"><!--
var cp = new QrColorPicker("transparent");
cp.render();
connectCSS(cp,"background-color");
--></SCRIPT></td></tr>


<tr><td colspan="3" align="center"><hr size="1" width="60%"></td></tr>

<tr><td><img id="border-width#switch" src="qrx/extimg/arrowclose.gif" onClick="collapseSwitch('border-width');" style="cursor:pointer" alt="点击"></td><td class="QrCSSDesignerPadLeft">边框宽度 border-width： </td><td><span id="border-width"><SCRIPT lang="JavaScript"><!--
var pl = new QrSpinner;
pl.render();
var override = new Array;
override["border-top-width"]   = "";
override["border-left-width"]   = "";
override["border-right-width"]   = "";
override["border-bottom-width"]   = "";
--></SCRIPT><SCRIPT lang="JavaScript"><!--
var tan = createTaniComponent();
connectCSS2(pl,tan,"border-width",override);
--></SCRIPT></span></td></tr>

<tr id="border-top-width" style="display:none;"><td></td><td class="QrCSSDesignerPadLeft">上边框宽度 border-top-width： </td><td><SCRIPT lang="JavaScript"><!--
var pl = new QrSpinner;
pl.render();
--></SCRIPT><SCRIPT lang="JavaScript"><!--
var tan = createTaniComponent();
connectCSS2(pl,tan,"border-top-width");
--></SCRIPT></span></td></tr>
<tr id="border-left-width" style="display:none;"><td></td><td class="QrCSSDesignerPadLeft">左边框宽度 border-left-width： </td><td><SCRIPT lang="JavaScript"><!--
var pl = new QrSpinner;
pl.render();
--></SCRIPT><SCRIPT lang="JavaScript"><!--
var tan = createTaniComponent();
connectCSS2(pl,tan,"border-left-width");
--></SCRIPT></td></tr>
<tr id="border-right-width" style="display:none;"><td></td><td class="QrCSSDesignerPadLeft">右边框宽度 border-right-width： </td><td><SCRIPT lang="JavaScript"><!--
var pl = new QrSpinner;
pl.render();
--></SCRIPT><SCRIPT lang="JavaScript"><!--
var tan = createTaniComponent();
connectCSS2(pl,tan,"border-right-width");
--></SCRIPT></td></tr>
<tr id="border-bottom-width" style="display:none;"><td></td><td class="QrCSSDesignerPadLeft">底边框宽度 border-bottom-width： </td><td><SCRIPT lang="JavaScript"><!--
var pl = new QrSpinner;
pl.render();
--></SCRIPT><SCRIPT lang="JavaScript"><!--
var tan = createTaniComponent();
connectCSS2(pl,tan,"border-bottom-width");
--></SCRIPT></td></tr>


<tr><td><img id="border-color#switch" src="qrx/extimg/arrowclose.gif" onClick="collapseSwitch('border-color');"></td><td class="QrCSSDesignerPadLeft">边框颜色 border-color： </td><td><span id="border-color"><SCRIPT lang="JavaScript"><!--
var cp = new QrColorPicker("transparent");
cp.render();
var override = new Array;
override["border-top-color"]   = "";
override["border-left-color"]   = "";
override["border-right-color"]   = "";
override["border-bottom-color"]   = "";
connectCSS(cp,"border-color",override);
--></SCRIPT></span></td></tr>


<tr id="border-top-color" style="display:none;"><td></td><td class="QrCSSDesignerPadLeft">上边框颜色 border-top-color: </td><td><SCRIPT lang="JavaScript"><!--
var cp = new QrColorPicker("transparent");
cp.render();
connectCSS(cp,"border-top-color");
--></SCRIPT></td></tr>
<tr id="border-left-color" style="display:none;"><td></td><td class="QrCSSDesignerPadLeft">左边框颜色 border-left-color： </td><td><SCRIPT lang="JavaScript"><!--
var cp = new QrColorPicker("transparent");
cp.render();
connectCSS(cp,"border-left-color");
--></SCRIPT></td></tr>
<tr id="border-right-color" style="display:none;"><td></td><td class="QrCSSDesignerPadLeft">右边框颜色 border-right-color: </td><td><SCRIPT lang="JavaScript"><!--
var cp = new QrColorPicker("transparent");
cp.render();
connectCSS(cp,"border-right-color");
--></SCRIPT></td></tr>
<tr id="border-bottom-color" style="display:none;"><td></td><td class="QrCSSDesignerPadLeft">底边框颜色 border-bottom-color： </td><td><SCRIPT lang="JavaScript"><!--
var cp = new QrColorPicker("transparent");
cp.render();
connectCSS(cp,"border-bottom-color");
--></SCRIPT></td></tr>

<tr><td><img id="border-style#switch" src="qrx/extimg/arrowclose.gif" onClick="collapseSwitch('border-style');"></td><td class="QrCSSDesignerPadLeft">边框样式 border-style： </td><td><span id="border-style"><SCRIPT lang="JavaScript"><!--

var pl = new QrPulldown;
pl.render();

function addStyle(style){
	pl.addItem("<img src='qrx/transparentpixel.gif' style='width:10px;height:10px;border-width:3px;border-style:"+style+";border-color:red' align='middle'/> "+style,style);
}
	pl.addItem("<img src='qrx/transparentpixel.gif' style='width:16px;height:16px;border-width:3px;border-style:none;border-color:red;' align='middle'/> none","none");
addStyle("solid");
addStyle("double");
addStyle("groove");
addStyle("ridge");
addStyle("inset");
addStyle("outset");
addStyle("dashed");
addStyle("dotted");
var override = new Array;
override["border-top-style"]   = "";
override["border-left-style"]   = "";
override["border-right-style"]   = "";
override["border-bottom-style"]   = "";
connectCSS(pl,"border-style", override);


--></SCRIPT></span></td></tr>


<tr id="border-top-style" style="display:none;"><td></td><td class="QrCSSDesignerPadLeft">上边框样式 border-top-style： </td><td><SCRIPT lang="JavaScript"><!--

var pl = new QrPulldown;
pl.render();

function addStyle(style){
	pl.addItem("<img src='qrx/transparentpixel.gif' style='width:10px;height:10px;border-width:3px;border-style:"+style+";border-color:red' align='middle'/> "+style,style);
}
	pl.addItem("<img src='qrx/transparentpixel.gif' style='width:16px;height:16px;border-width:3px;border-style:none;border-color:red;' align='middle'/> none","none");
addStyle("solid");
addStyle("double");
addStyle("groove");
addStyle("ridge");
addStyle("inset");
addStyle("outset");
addStyle("dashed");
addStyle("dotted");
connectCSS(pl,"border-top-style");

--></SCRIPT></td></tr>

<tr id="border-left-style" style="display:none;"><td></td><td class="QrCSSDesignerPadLeft">左边框样式 border-left-style： </td><td><SCRIPT lang="JavaScript"><!--

var pl = new QrPulldown;
pl.render();

function addStyle(style){
	pl.addItem("<img src='qrx/transparentpixel.gif' style='width:10px;height:10px;border-width:3px;border-style:"+style+";border-color:red' align='middle'/> "+style,style);
}
	pl.addItem("<img src='qrx/transparentpixel.gif' style='width:16px;height:16px;border-width:3px;border-style:none;border-color:red;' align='middle'/> none","none");
addStyle("solid");
addStyle("double");
addStyle("groove");
addStyle("ridge");
addStyle("inset");
addStyle("outset");
addStyle("dashed");
addStyle("dotted");
connectCSS(pl,"border-left-style");

--></SCRIPT></td></tr>

<tr id="border-right-style" style="display:none;"><td></td><td class="QrCSSDesignerPadLeft">右边框样式 border-right-style：  </td><td><SCRIPT lang="JavaScript"><!--

var pl = new QrPulldown;
pl.render();

function addStyle(style){
	pl.addItem("<img src='qrx/transparentpixel.gif' style='width:10px;height:10px;border-width:3px;border-style:"+style+";border-color:red' align='middle'/> "+style,style);
}
	pl.addItem("<img src='qrx/transparentpixel.gif' style='width:16px;height:16px;border-width:3px;border-style:none;border-color:red;' align='middle'/> none","none");
addStyle("solid");
addStyle("double");
addStyle("groove");
addStyle("ridge");
addStyle("inset");
addStyle("outset");
addStyle("dashed");
addStyle("dotted");
connectCSS(pl,"border-right-style");

--></SCRIPT></td></tr>

<tr id="border-bottom-style" style="display:none;"><td></td><td class="QrCSSDesignerPadLeft">底边框样式 border-bottom-style： </td><td><SCRIPT lang="JavaScript"><!--

var pl = new QrPulldown;
pl.render();

function addStyle(style){
	pl.addItem("<img src='qrx/transparentpixel.gif' style='width:10px;height:10px;border-width:3px;border-style:"+style+";border-color:red' align='middle'/> "+style,style);
}
	pl.addItem("<img src='qrx/transparentpixel.gif' style='width:16px;height:16px;border-width:3px;border-style:none;border-color:red;' align='middle'/> none","none");
addStyle("solid");
addStyle("double");
addStyle("groove");
addStyle("ridge");
addStyle("inset");
addStyle("outset");
addStyle("dashed");
addStyle("dotted");
connectCSS(pl,"border-bottom-style");

--></SCRIPT></td></tr>


<tr><td colspan="3" align="center"><hr size="1" width="60%"></td></tr>

<tr><td></td><td class="QrCSSDesignerPadLeft">宽度 width： </td><td><SCRIPT lang="JavaScript"><!--
var pl = new QrSpinner;
pl.render();
--></SCRIPT><SCRIPT lang="JavaScript"><!--
var tan = createTaniComponent();
connectCSS2(pl,tan,"width");

--></SCRIPT></td></tr>

<tr><td></td><td class="QrCSSDesignerPadLeft">高度 height： </td><td><SCRIPT lang="JavaScript"><!--
var pl = new QrSpinner;
pl.render();
--></SCRIPT><SCRIPT lang="JavaScript"><!--
var tan = createTaniComponent();
connectCSS2(pl,tan,"height");

--></SCRIPT></td></tr>



<tr><td></td><td class="QrCSSDesignerPadLeft">溢出 overflow： </td><td><SCRIPT lang="JavaScript"><!--

var pl = new QrPulldown;
pl.render();

function addItem(fontname){
	pl.addItem("<img src='qrx/transparentpixel.gif' style='width:16px;height:16px;' align='middle'/> "+fontname,fontname);
}
addItem("visible");
addItem("hidden");
addItem("scroll");
addItem("auto");
connectCSS(pl,"overflow");

--></SCRIPT></td></tr>

<tr><td colspan="3" align="center"><hr size="1" width="60%"></td></tr>



<tr><td><img id="padding#switch" src="qrx/extimg/arrowclose.gif" onClick="collapseSwitch('padding');"></td><td class="QrCSSDesignerPadLeft">内边距 padding: </td><td><span id="padding"><SCRIPT lang="JavaScript"><!--
var pl = new QrSpinner;
pl.render();
var override = new Array;
override["padding-top"]   = "";
override["padding-left"]   = "";
override["padding-right"]   = "";
override["padding-bottom"]   = "";
--></SCRIPT><SCRIPT lang="JavaScript"><!--
var tan = createTaniComponent();
connectCSS2(pl,tan,"padding",override);

--></SCRIPT></span></td></tr>

<tr id="padding-top" style="display:none"><td></td><td class="QrCSSDesignerPadLeft">内上边距 padding-top： </td><td><SCRIPT lang="JavaScript"><!--
var pl = new QrSpinner;
pl.render();
--></SCRIPT><SCRIPT lang="JavaScript"><!--
var tan = createTaniComponent();
connectCSS2(pl,tan,"padding-top");

--></SCRIPT></td></tr>
<tr id="padding-left" style="display:none"><td></td><td class="QrCSSDesignerPadLeft">内左边距 padding-left： </td><td><SCRIPT lang="JavaScript"><!--
var pl = new QrSpinner;
pl.render();
--></SCRIPT><SCRIPT lang="JavaScript"><!--
var tan = createTaniComponent();
connectCSS2(pl,tan,"padding-left");

--></SCRIPT></td></tr>
<tr id="padding-right" style="display:none"><td></td><td class="QrCSSDesignerPadLeft">内右边距 padding-right： </td><td><SCRIPT lang="JavaScript"><!--
var pl = new QrSpinner;
pl.render();
--></SCRIPT><SCRIPT lang="JavaScript"><!--
var tan = createTaniComponent();
connectCSS2(pl,tan,"padding-right");

--></SCRIPT></td></tr>
<tr id="padding-bottom" style="display:none"><td></td><td class="QrCSSDesignerPadLeft">内底边距 padding-bottom： </td><td><SCRIPT lang="JavaScript"><!--
var pl = new QrSpinner;
pl.render();
--></SCRIPT><SCRIPT lang="JavaScript"><!--
var tan = createTaniComponent();
connectCSS2(pl,tan,"padding-bottom");

--></SCRIPT></td></tr>



<tr><td colspan="3" align="center"><hr size="1" width="60%"></td></tr>

<tr><td><img id="margin#switch" src="qrx/extimg/arrowclose.gif" onClick="collapseSwitch('margin');"></td><td class="QrCSSDesignerPadLeft">外边距 margin： </td><td><span id="margin"><SCRIPT lang="JavaScript"><!--
var pl = new QrSpinner;
pl.render();
var override = new Array;
override["margin-top"]   = "";
override["margin-left"]   = "";
override["margin-right"]   = "";
override["margin-bottom"]   = "";
--></SCRIPT><SCRIPT lang="JavaScript"><!--
var tan = createTaniComponent();
connectCSS2(pl,tan,"margin",override);
--></SCRIPT></span></td></tr>

<tr id="margin-top" style="display:none"><td></td><td class="QrCSSDesignerPadLeft">外顶边距 margin-top ： </td><td><SCRIPT lang="JavaScript"><!--
var pl = new QrSpinner;
pl.render();
--></SCRIPT><SCRIPT lang="JavaScript"><!--
var tan = createTaniComponent();
connectCSS2(pl,tan,"margin-top");

--></SCRIPT></td></tr>
<tr id="margin-left" style="display:none"><td></td><td class="QrCSSDesignerPadLeft">外左边距 margin-left ： </td><td><SCRIPT lang="JavaScript"><!--
var pl = new QrSpinner;
pl.render();
--></SCRIPT><SCRIPT lang="JavaScript"><!--
var tan = createTaniComponent();
connectCSS2(pl,tan,"margin-left");

--></SCRIPT></td></tr>
<tr id="margin-right" style="display:none"><td></td><td class="QrCSSDesignerPadLeft">外右边距 margin-right ： </td><td><SCRIPT lang="JavaScript"><!--
var pl = new QrSpinner;
pl.render();
--></SCRIPT><SCRIPT lang="JavaScript"><!--
var tan = createTaniComponent();
connectCSS2(pl,tan,"margin-right");

--></SCRIPT></td></tr>
<tr id="margin-bottom" style="display:none"><td></td><td class="QrCSSDesignerPadLeft">外底边距 margin-bottom ： </td><td><SCRIPT lang="JavaScript"><!--
var pl = new QrSpinner;
pl.render();
--></SCRIPT><SCRIPT lang="JavaScript"><!--
var tan = createTaniComponent();
connectCSS2(pl,tan,"margin-bottom");

--></SCRIPT></td></tr>


<tr><td colspan="3" align="center"><hr size="1" width="60%"></td></tr>

<tr><td></td><td class="QrCSSDesignerPadLeft">文字字体 font-family ： </td><td><SCRIPT lang="JavaScript"><!--

var pl = new QrPulldown;
pl.render();

function addFont(fontname){
	pl.addItem("<img src='qrx/transparentpixel.gif' style='width:16px;height:16px;' align='middle'/> <span style='font-family:"+fontname+"'>"+fontname+"</span>",fontname);
}
addFont("serif");
addFont("sans-serif");
addFont("cursive");
addFont("fantasy");
addFont("monospace");
connectCSS(pl,"font-family");

--></SCRIPT></td></tr>

<tr><td></td><td class="QrCSSDesignerPadLeft">文字大小 font-size ： </td><td><SCRIPT lang="JavaScript"><!--

var pl = new QrPulldown;
pl.render();

function addFont(fontname){
	pl.addItem("<img src='qrx/transparentpixel.gif' style='width:16px;height:16px;' align='middle'/> <span style='font-family:"+fontname+"'>"+fontname+"</span>",fontname);
}
addFont("9pt");
addFont("10pt");
addFont("12pt");
addFont("14pt");
addFont("16pt");
addFont("xx-small");
addFont("x-small");
addFont("small");
addFont("large");
addFont("x-large");
addFont("xx-large");
connectCSS(pl,"font-size");

--></SCRIPT></td></tr>

<tr><td></td><td class="QrCSSDesignerPadLeft">文字粗细 font-weight ： </td><td><SCRIPT lang="JavaScript"><!--

var pl = new QrPulldown;
pl.render();

function addItem(fontname){
	pl.addItem("<img src='qrx/transparentpixel.gif' style='width:16px;height:16px;' align='middle'/> "+fontname,fontname);
}
addItem("normal");
addItem("bold");
addItem("600");
addItem("900");
connectCSS(pl,"font-weight");

--></SCRIPT></td></tr>


<tr><td></td><td class="QrCSSDesignerPadLeft">文字样式 font-style ： </td><td><SCRIPT lang="JavaScript"><!--

var pl = new QrPulldown;
pl.render();

function addItem(fontname){
	pl.addItem("<img src='qrx/transparentpixel.gif' style='width:16px;height:16px;' align='middle'/> "+fontname,fontname);
}
addItem("normal");
addItem("italic");
addItem("oblique");
connectCSS(pl,"font-style");

--></SCRIPT></td></tr>

<tr><td></td><td class="QrCSSDesignerPadLeft">文字变量 font-variant ： </td><td><SCRIPT lang="JavaScript"><!--

var pl = new QrPulldown;
pl.render();

function addItem(fontname){
	pl.addItem("<img src='qrx/transparentpixel.gif' style='width:16px;height:16px;' align='middle'/> "+fontname,fontname);
}
addItem("normal");
addItem("small-caps");
connectCSS(pl,"font-variant");

--></SCRIPT></td></tr>



<tr><td></td><td class="QrCSSDesignerPadLeft">文字行高 line-height ： </td><td><SCRIPT lang="JavaScript"><!--
var pl = new QrSpinner(100);
pl.render();
--></SCRIPT><SCRIPT lang="JavaScript"><!--
var tan = createTaniComponent("%");
connectCSS2(pl,tan,"line-height");
--></SCRIPT></td></tr>

<tr><td colspan="3" align="center"><hr size="1" width="60%"></td></tr>



<tr><td></td><td class="QrCSSDesignerPadLeft">清除 clear ： </td><td><SCRIPT lang="JavaScript"><!--

var pl = new QrPulldown;
pl.render();

function addItem(fontname){
	pl.addItem("<img src='qrx/transparentpixel.gif' style='width:16px;height:16px;' align='middle'/> "+fontname,fontname);
}
addItem("left");
addItem("right");
addItem("both");
addItem("none");
connectCSS(pl,"clear");

--></SCRIPT></td></tr>

<tr><td></td><td class="QrCSSDesignerPadLeft">浮动 float : </td><td><SCRIPT lang="JavaScript"><!--

var pl = new QrPulldown;
pl.render();

function addItem(fontname){
	pl.addItem("<img src='qrx/transparentpixel.gif' style='width:16px;height:16px;' align='middle'/> "+fontname,fontname);
}
addItem("left");
addItem("right");
addItem("none");
connectCSS(pl,"float");

--></SCRIPT></td></tr>

<tr><td></td><td class="QrCSSDesignerPadLeft">文本排列 text-align ： </td><td><SCRIPT lang="JavaScript"><!--

var pl = new QrPulldown;
pl.render();

function addItem(item){
	pl.addItem("<img src='qrx/transparentpixel.gif' style='width:16px;height:16px;' align='middle'/> "+item,item);
}
addItem("left");
addItem("right");
addItem("center");
addItem("justify");
connectCSS(pl,"text-align");

--></SCRIPT></td></tr>


<tr><td></td><td class="QrCSSDesignerPadLeft">文本修饰 text-decoration ： </td><td><SCRIPT lang="JavaScript"><!--

var pl = new QrPulldown;
pl.render();

function addItem(item){
	pl.addItem("<img src='qrx/transparentpixel.gif' style='width:16px;height:16px;' align='middle'/> "+item,item);
}
addItem("none");
addItem("underline");
addItem("overline");
addItem("underline overline");
addItem("line-through");
addItem("blink");
connectCSS(pl,"text-decoration");

--></SCRIPT></td></tr>

<tr><td></td><td class="QrCSSDesignerPadLeft">文本缩进 text-indent ： </td><td><SCRIPT lang="JavaScript"><!--
var pl = new QrSpinner;
pl.render();
--></SCRIPT><SCRIPT lang="JavaScript"><!--
var tan = createTaniComponent("em");
connectCSS2(pl,tan,"text-indent");
--></SCRIPT></td></tr>


<tr><td></td><td class="QrCSSDesignerPadLeft">文字间距 letter-spacing ： </td><td><SCRIPT lang="JavaScript"><!--
var pl = new QrSpinner;
pl.render();
--></SCRIPT><SCRIPT lang="JavaScript"><!--
var tan = createTaniComponent("px");
connectCSS2(pl,tan,"letter-spacing");
--></SCRIPT></td></tr>

<tr><td></td><td class="QrCSSDesignerPadLeft">文字间距 word-spacing ： </td><td><SCRIPT lang="JavaScript"><!--
var pl = new QrSpinner;
pl.render();
--></SCRIPT><SCRIPT lang="JavaScript"><!--
var tan = createTaniComponent("px");
connectCSS2(pl,tan,"word-spacing");
--></SCRIPT></td></tr>



<tr><td></td><td class="QrCSSDesignerPadLeft">文本转换 text-transform ： </td><td><SCRIPT lang="JavaScript"><!--

var pl = new QrPulldown;
pl.render();

function addItem(item){
	pl.addItem("<img src='qrx/transparentpixel.gif' style='width:16px;height:16px;' align='middle'/> "+item,item);
}
addItem("none");
addItem("capitalize");
addItem("lowercase");
addItem("uppercase");
connectCSS(pl,"text-transform");

--></SCRIPT></td></tr>


<tr><td></td><td class="QrCSSDesignerPadLeft">垂直排列 vertical-align ： </td><td><SCRIPT lang="JavaScript"><!--

var pl = new QrPulldown;
pl.render();

function addItem(item){
	pl.addItem("<img src='qrx/transparentpixel.gif' style='width:16px;height:16px;' align='middle'/> "+item,item);
}
addItem("baseline");
addItem("top");
addItem("middle");
addItem("bottom");
addItem("text-top");
addItem("text-bottom");
addItem("super");
addItem("sub");
addItem("3em");
addItem("30%");
connectCSS(pl,"vertical-align");

--></SCRIPT></td></tr>

<tr><td colspan="3" align="center"><hr size="1" width="60%"></td></tr>

<tr><td></td><td class="QrCSSDesignerPadLeft">背景图片 background-image ： </td><td><SCRIPT lang="JavaScript"><!--

var pl = new QrPulldown;
pl.render();

function addItem(item){
	pl.addItem("<img src='qrx/transparentpixel.gif' style='width:16px;height:16px;' align='middle'/> "+item,item);
}
addItem("url(qrx/resize-box.gif)");
connectCSS(pl,"background-image");

--></SCRIPT></td></tr>

<tr><td></td><td class="QrCSSDesignerPadLeft">背景重复 background-repeat ： </td><td><SCRIPT lang="JavaScript"><!--

var pl = new QrPulldown;
pl.render();

function addItem(item){
	pl.addItem("<img src='qrx/transparentpixel.gif' style='width:16px;height:16px;' align='middle'/> "+item,item);
}
addItem("repeat");
addItem("repeat-x");
addItem("repeat-y");
addItem("no-repeat");
connectCSS(pl,"background-repeat");

--></SCRIPT></td></tr>

<tr><td></td><td class="QrCSSDesignerPadLeft">背景定位 background-position ： </td><td><SCRIPT lang="JavaScript"><!--

var pl = new QrPulldown;
pl.render();

function addItem(item){
	pl.addItem("<img src='qrx/transparentpixel.gif' style='width:16px;height:16px;' align='middle'/> "+item,item);
}
addItem("left");
addItem("right");
addItem("top");
addItem("left top");
addItem("right bottom");
addItem("30% 50%");
connectCSS(pl,"background-position");

--></SCRIPT></td></tr>


<tr><td></td><td class="QrCSSDesignerPadLeft">背景附加 background-attachment ： </td><td><SCRIPT lang="JavaScript"><!--

var pl = new QrPulldown;
pl.render();

function addItem(item){
	pl.addItem("<img src='qrx/transparentpixel.gif' style='width:16px;height:16px;' align='middle'/> "+item,item);
}
addItem("fixed");
addItem("scroll");
connectCSS(pl,"background-attachment");

--></SCRIPT></td></tr>

<tr><td colspan="3" align="center"><hr size="1" width="60%"></td></tr>


<tr><td></td><td class="QrCSSDesignerPadLeft">显示 display ： </td><td><SCRIPT lang="JavaScript"><!--

var pl = new QrPulldown;
pl.render();

function addItem(fontname){
	pl.addItem("<img src='qrx/transparentpixel.gif' style='width:16px;height:16px;' align='middle'/> "+fontname,fontname);
}
addItem("");
addItem("none");
addItem("block");
addItem("inline");
addItem("run-in");
addItem("compact");
addItem("list-item");
addItem("marker");
connectCSS(pl,"display");

--></SCRIPT></td></tr>

<tr><td></td><td class="QrCSSDesignerPadLeft">可见 visibility ： </td><td><SCRIPT lang="JavaScript"><!--

var pl = new QrPulldown;
pl.render();

function addItem(fontname){
	pl.addItem("<img src='qrx/transparentpixel.gif' style='width:16px;height:16px;' align='middle'/> "+fontname,fontname);
}
addItem("");
addItem("visible");
addItem("hidden");
connectCSS(pl,"visibility");

--></SCRIPT></td></tr>

<tr><td></td><td class="QrCSSDesignerPadLeft">定位 position ： </td><td><SCRIPT lang="JavaScript"><!--

var pl = new QrPulldown;
pl.render();

function addItem(fontname){
	pl.addItem("<img src='qrx/transparentpixel.gif' style='width:16px;height:16px;' align='middle'/> "+fontname,fontname);
}
addItem("static");
addItem("relative");
addItem("absolute");
addItem("fixed");
connectCSS(pl,"position");

--></SCRIPT></td></tr>

<tr><td></td><td class="QrCSSDesignerPadLeft">距顶 top ： </td><td><SCRIPT lang="JavaScript"><!--
var pl = new QrSpinner;
pl.render();
--></SCRIPT><SCRIPT lang="JavaScript"><!--
var tan = createTaniComponent("px");
connectCSS2(pl,tan,"top");
--></SCRIPT></td></tr>
<tr><td></td><td class="QrCSSDesignerPadLeft">距左 left ： </td><td><SCRIPT lang="JavaScript"><!--
var pl = new QrSpinner;
pl.render();
--></SCRIPT><SCRIPT lang="JavaScript"><!--
var tan = createTaniComponent("px");
connectCSS2(pl,tan,"left");
--></SCRIPT></td></tr>
<tr><td></td><td class="QrCSSDesignerPadLeft">距右 right ： </td><td><SCRIPT lang="JavaScript"><!--
var pl = new QrSpinner;
pl.render();
--></SCRIPT><SCRIPT lang="JavaScript"><!--
var tan = createTaniComponent("px");
connectCSS2(pl,tan,"right");
--></SCRIPT></td></tr>
<tr><td></td><td class="QrCSSDesignerPadLeft">距底 bottom ： </td><td><SCRIPT lang="JavaScript"><!--
var pl = new QrSpinner;
pl.render();
--></SCRIPT><SCRIPT lang="JavaScript"><!--
var tan = createTaniComponent("px");
connectCSS2(pl,tan,"bottom");
--></SCRIPT></td></tr>
<tr><td></td><td class="QrCSSDesignerPadLeft">优先 z-index ： </td><td><SCRIPT lang="JavaScript"><!--
var pl = new QrSpinner;
pl.render();
connectCSS(pl,"z-index");
--></SCRIPT></td></tr>




<tr><td colspan="3" align="center"><hr size="1" width="60%"></td></tr>


<tr><td></td><td class="QrCSSDesignerPadLeft">鼠标指针 cursor ： </td><td><SCRIPT lang="JavaScript"><!--

var pl = new QrPulldown;
pl.render();

function addItem(fontname){
	pl.addItem("<img src='qrx/transparentpixel.gif' style='width:16px;height:16px;' align='middle'/> "+fontname,fontname);
}
addItem("crosshair");
addItem("default");
addItem("pointer");
addItem("move");
addItem("text");
addItem("wait");
addItem("help");
addItem("n-resize");
addItem("s-resize");
addItem("w-resize");
addItem("e-resize");
addItem("ne-resize");
addItem("nw-resize");
addItem("se-resize");
addItem("sw-resize");
connectCSS(pl,"cursor");

--></SCRIPT></td></tr>
</table>

</div>



