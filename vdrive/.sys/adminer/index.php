<?php
/** Adminer - Compact database management
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2007 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 3.5.1
*/error_reporting(6135);$dc=!ereg('^(unsafe_raw)?$',ini_get("filter.default"));if($dc||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$W){$bg=filter_input_array(constant("INPUT$W"),FILTER_UNSAFE_RAW);if($bg)$$W=$bg;}}if(isset($_GET["file"])){header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
base64_decode("AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA////AAAA/wBhTgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAERERAAAAAAETMzEQAAAAATERExAAAAABMRETEAAAAAExERMQAAAAATERExAAAAABMRETEAAAAAEzMzMREREQATERExEhEhABEzMxEhEREAAREREhERIRAAAAARIRESEAAAAAESEiEQAAAAABEREQAAAAAAAAAAD//9UAwP/VAIB/AACAf/AAgH+kAIB/gACAfwAAgH8AAIABAACAAf8AgAH/AMAA/wD+AP8A/wAIAf+B1QD//9UA");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo'body{color:#000;background:#fff;font:90%/1.25 Verdana,Arial,Helvetica,sans-serif;margin:0;}a{color:blue;}a:visited{color:navy;}a:hover{color:red;}a.text{text-decoration:none;}h1{font-size:150%;margin:0;padding:.8em 1em;border-bottom:1px solid #999;font-weight:normal;color:#777;background:#eee;}h2{font-size:150%;margin:0 0 20px -18px;padding:.8em 1em;border-bottom:1px solid #000;color:#000;font-weight:normal;background:#ddf;}h3{font-weight:normal;font-size:130%;margin:1em 0 0;}form{margin:0;}table{margin:1em 20px 0 0;border:0;border-top:1px solid #999;border-left:1px solid #999;font-size:90%;}td,th{border:0;border-right:1px solid #999;border-bottom:1px solid #999;padding:.2em .3em;}th{background:#eee;text-align:left;}thead th{text-align:center;}thead td,thead th{background:#ddf;}fieldset{display:inline;vertical-align:top;padding:.5em .8em;margin:.8em .5em 0 0;border:1px solid #999;}p{margin:.8em 20px 0 0;}img{vertical-align:middle;border:0;}td img{max-width:200px;max-height:200px;}code{background:#eee;}tbody tr:hover td,tbody tr:hover th{background:#eee;}pre{margin:1em 0 0;}input[type=image]{vertical-align:middle;}.version{color:#777;font-size:67%;}.js .hidden,.nojs .jsonly{display:none;}.js .column{position:absolute;background:#ddf;padding:.3em 1ex .3em 0;margin-top:-.3em;}.nowrap td,.nowrap th,td.nowrap{white-space:pre;}.wrap td{white-space:normal;}.error{color:red;background:#fee;}.error b{background:#fff;font-weight:normal;}.message{color:green;background:#efe;}.error,.message{padding:.5em .8em;margin:1em 20px 0 0;}.char{color:#007F00;}.date{color:#7F007F;}.enum{color:#007F7F;}.binary{color:red;}.odd td{background:#F5F5F5;}.js .checked td,.js .checked th{background:#ddf;}.time{color:silver;font-size:70%;}.function{text-align:right;}.number{text-align:right;}.datetime{text-align:right;}.type{width:15ex;width:auto\\9;}.options select{width:20ex;width:auto\\9;}.active{font-weight:bold;}.sqlarea{width:98%;}.icon{width:18px;height:18px;}#menu{position:absolute;margin:10px 0 0;padding:0 0 30px 0;top:2em;left:0;width:19em;white-space:nowrap;}#menu p{padding:.8em 1em;margin:0;border-bottom:1px solid #ccc;}#dbs{overflow:hidden;}#logins,#tables{overflow:auto;}#logins a,#tables a{background:#fff;}#content{margin:2em 0 0 21em;padding:10px 20px 20px 0;}#lang{position:absolute;top:0;left:0;line-height:1.8em;padding:.3em 1em;}#breadcrumb{white-space:nowrap;position:absolute;top:0;left:21em;background:#eee;height:2em;line-height:1.8em;padding:0 1em;margin:0 0 0 -18px;}#h1{color:#777;text-decoration:none;font-style:italic;}#version{font-size:67%;color:red;}#schema{margin-left:60px;position:relative;-moz-user-select:none;-webkit-user-select:none;}#schema .table{border:1px solid silver;padding:0 2px;cursor:move;position:absolute;}#schema .references{position:absolute;}.rtl h2{margin:0 -18px 20px 0;}.rtl p,.rtl table,.rtl .error,.rtl .message{margin:1em 0 0 20px;}.rtl #content{margin:2em 21em 0 0;padding:10px 0 20px 20px;}.rtl #breadcrumb{left:auto;right:21em;margin:0 -18px 0 0;}.rtl #lang,.rtl #menu{left:auto;right:0;}@media print{#lang,#menu{display:none;}#content{margin-left:1em;}#breadcrumb{left:1em;}.nowrap td,.nowrap th,td.nowrap{white-space:normal;}}';}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");?>function
toggle(id){var
el=document.getElementById(id);el.className=(el.className=='hidden'?'':'hidden');return true;}function
cookie(assign,days){var
date=new
Date();date.setDate(date.getDate()+days);document.cookie=assign+'; expires='+date;}function
verifyVersion(){cookie('adminer_version=0',1);var
script=document.createElement('script');script.src=location.protocol+'//www.adminer.org/version.php';document.body.appendChild(script);}function
selectValue(select){var
selected=select.options[select.selectedIndex];return((selected.attributes.value||{}).specified?selected.value:selected.text);}function
parentTag(el,tag){var
re=new
RegExp('^'+tag+'$','i');while(!re.test(el.tagName)){el=el.parentNode;}return el;}function
trCheck(el){var
tr=parentTag(el,'tr');tr.className=tr.className.replace(/(^|\s)checked(\s|$)/,'$2')+(el.checked?' checked':'');}function
formCheck(el,name){var
elems=el.form.elements;for(var
i=0;i<elems.length;i++){if(name.test(elems[i].name)){elems[i].checked=el.checked;trCheck(elems[i]);}}}function
tableCheck(){var
tables=document.getElementsByTagName('table');for(var
i=0;i<tables.length;i++){if(/(^|\s)checkable(\s|$)/.test(tables[i].className)){var
trs=tables[i].getElementsByTagName('tr');for(var
j=0;j<trs.length;j++){trCheck(trs[j].firstChild.firstChild);}}}}function
formUncheck(id){var
el=document.getElementById(id);el.checked=false;trCheck(el);}function
formChecked(el,name){var
checked=0;var
elems=el.form.elements;for(var
i=0;i<elems.length;i++){if(name.test(elems[i].name)&&elems[i].checked){checked++;}}return checked;}function
tableClick(event){var
click=(!window.getSelection||getSelection().isCollapsed);var
el=event.target||event.srcElement;while(!/^tr$/i.test(el.tagName)){if(/^(table|a|input|textarea)$/i.test(el.tagName)){if(el.type!='checkbox'){return;}checkboxClick(event,el);click=false;}el=el.parentNode;}el=el.firstChild.firstChild;if(click){el.click&&el.click();el.onclick&&el.onclick();}trCheck(el);}var
lastChecked;function
checkboxClick(event,el){if(!el.name){return;}if(event.shiftKey&&(!lastChecked||lastChecked.name==el.name)){var
checked=(lastChecked?lastChecked.checked:true);var
inputs=parentTag(el,'table').getElementsByTagName('input');var
checking=!lastChecked;for(var
i=0;i<inputs.length;i++){var
input=inputs[i];if(input.name===el.name){if(checking){input.checked=checked;trCheck(input);}if(input===el||input===lastChecked){if(checking){break;}checking=true;}}}}else{lastChecked=el;}}function
setHtml(id,html){var
el=document.getElementById(id);if(el){if(html==undefined){el.parentNode.innerHTML='&nbsp;';}else{el.innerHTML=html;}}}function
nodePosition(el){var
pos=0;while(el=el.previousSibling){pos++;}return pos;}function
pageClick(href,page,event){if(!isNaN(page)&&page){href+=(page!=1?'&page='+(page-1):'');location.href=href;}}function
menuOver(el){el.style.overflow='visible';}function
menuOut(el){el.style.overflow='auto';}function
selectAddRow(field){field.onchange=function(){selectFieldChange(field.form);};field.onchange();var
row=field.parentNode.cloneNode(true);var
selects=row.getElementsByTagName('select');for(var
i=0;i<selects.length;i++){selects[i].name=selects[i].name.replace(/[a-z]\[\d+/,'$&1');selects[i].selectedIndex=0;}var
inputs=row.getElementsByTagName('input');if(inputs.length){inputs[0].name=inputs[0].name.replace(/[a-z]\[\d+/,'$&1');inputs[0].value='';inputs[0].className='';}field.parentNode.parentNode.appendChild(row);}function
columnMouse(el,className){var
spans=el.getElementsByTagName('span');for(var
i=0;i<spans.length;i++){if(/column/.test(spans[i].className)){spans[i].className='column'+(className||'');}}}function
selectSearch(name){var
el=document.getElementById('fieldset-search');el.className='';var
divs=el.getElementsByTagName('div');for(var
i=0;i<divs.length;i++){var
div=divs[i];if(/select/i.test(div.firstChild.tagName)&&selectValue(div.firstChild)==name){break;}}if(i==divs.length){div.firstChild.value=name;div.firstChild.onchange();}div.lastChild.focus();}function
bodyKeydown(event,button){var
target=event.target||event.srcElement;if(event.ctrlKey&&(event.keyCode==13||event.keyCode==10)&&!event.altKey&&!event.metaKey&&/select|textarea|input/i.test(target.tagName)){target.blur();if(button){target.form[button].click();}else{target.form.submit();}return false;}return true;}function
editingKeydown(event){if((event.keyCode==40||event.keyCode==38)&&event.ctrlKey&&!event.altKey&&!event.metaKey){var
target=event.target||event.srcElement;var
sibling=(event.keyCode==40?'nextSibling':'previousSibling');var
el=target.parentNode.parentNode[sibling];if(el&&(/^tr$/i.test(el.tagName)||(el=el[sibling]))&&/^tr$/i.test(el.tagName)&&(el=el.childNodes[nodePosition(target.parentNode)])&&(el=el.childNodes[nodePosition(target)])){el.focus();}return false;}if(event.shiftKey&&!bodyKeydown(event,'insert')){eventStop(event);return false;}return true;}function
functionChange(select){var
input=select.form[select.name.replace(/^function/,'fields')];if(selectValue(select)){if(input.origMaxLength===undefined){input.origMaxLength=input.maxLength;}input.removeAttribute('maxlength');}else
if(input.origMaxLength>=0){input.maxLength=input.origMaxLength;}}function
ajax(url,callback,data){var
request=(window.XMLHttpRequest?new
XMLHttpRequest():(window.ActiveXObject?new
ActiveXObject('Microsoft.XMLHTTP'):false));if(request){request.open((data?'POST':'GET'),url);if(data){request.setRequestHeader('Content-Type','application/x-www-form-urlencoded');}request.setRequestHeader('X-Requested-With','XMLHttpRequest');request.onreadystatechange=function(){if(request.readyState==4){callback(request);}};request.send(data);}return request;}function
ajaxSetHtml(url){return ajax(url,function(request){if(request.status){var
data=eval('('+request.responseText+')');for(var
key
in
data){setHtml(key,data[key]);}}});}function
selectDblClick(td,event,text){if(/input|textarea/i.test(td.firstChild.tagName)){return;}var
original=td.innerHTML;var
input=document.createElement(text?'textarea':'input');input.onkeydown=function(event){if(!event){event=window.event;}if(event.keyCode==27&&!(event.ctrlKey||event.shiftKey||event.altKey||event.metaKey)){td.innerHTML=original;}};var
pos=event.rangeOffset;var
value=td.firstChild.alt||td.textContent||td.innerText;input.style.width=Math.max(td.clientWidth-14,20)+'px';if(text){var
rows=1;value.replace(/\n/g,function(){rows++;});input.rows=rows;}if(value=='\u00A0'||td.getElementsByTagName('i').length){value='';}if(document.selection){var
range=document.selection.createRange();range.moveToPoint(event.clientX,event.clientY);var
range2=range.duplicate();range2.moveToElementText(td);range2.setEndPoint('EndToEnd',range);pos=range2.text.length;}td.innerHTML='';td.appendChild(input);input.focus();if(text==2){return ajax(location.href+'&'+encodeURIComponent(td.id)+'=',function(request){if(request.status){input.value=request.responseText;input.name=td.id;}});}input.value=value;input.name=td.id;input.selectionStart=pos;input.selectionEnd=pos;if(document.selection){var
range=document.selection.createRange();range.moveEnd('character',-input.value.length+pos);range.select();}}function
eventStop(event){if(event.stopPropagation){event.stopPropagation();}else{event.cancelBubble=true;}}var
jushRoot=location.protocol + '//www.adminer.org/static/';function
bodyLoad(version){if(jushRoot){var
link=document.createElement('link');link.rel='stylesheet';link.type='text/css';link.href=jushRoot+'jush.css';document.getElementsByTagName('head')[0].appendChild(link);var
script=document.createElement('script');script.src=jushRoot+'jush.js';script.onload=function(){if(window.jush){jush.create_links=' target="_blank" rel="noreferrer"';jush.urls.sql_sqlset=jush.urls.sql[0]=jush.urls.sqlset[0]=jush.urls.sqlstatus[0]='http://dev.mysql.com/doc/refman/'+version+'/en/$key';var
pgsql='http://www.postgresql.org/docs/'+version+'/static/';jush.urls.pgsql_pgsqlset=jush.urls.pgsql[0]=pgsql+'$key';jush.urls.pgsqlset[0]=pgsql+'runtime-config-$key.html#GUC-$1';if(window.jushLinks){jush.custom_links=jushLinks;}jush.highlight_tag('code',0);}};script.onreadystatechange=function(){if(/^(loaded|complete)$/.test(script.readyState)){script.onload();}};document.body.appendChild(script);}}function
formField(form,name){for(var
i=0;i<form.length;i++){if(form[i].name==name){return form[i];}}}function
typePassword(el,disable){try{el.type=(disable?'text':'password');}catch(e){}}function
loginDriver(driver){var
trs=parentTag(driver,'table').rows;for(var
i=1;i<trs.length-1;i++){trs[i].className=(/sqlite/.test(driver.value)?'hidden':'');}}function
textareaKeydown(target,event){if(!event.shiftKey&&!event.altKey&&!event.ctrlKey&&!event.metaKey){if(event.keyCode==9){if(target.setSelectionRange){var
start=target.selectionStart;var
scrolled=target.scrollTop;target.value=target.value.substr(0,start)+'\t'+target.value.substr(target.selectionEnd);target.setSelectionRange(start+1,start+1);target.scrollTop=scrolled;return false;}else
if(target.createTextRange){document.selection.createRange().text='\t';return false;}}if(event.keyCode==27){var
els=target.form.elements;for(var
i=1;i<els.length;i++){if(els[i-1]==target){els[i].focus();break;}}return false;}}return true;}function
selectFieldChange(form){var
ok=(function(){var
inputs=form.getElementsByTagName('input');for(var
i=0;i<inputs.length;i++){if(inputs[i].value&&/^fulltext/.test(inputs[i].name)){return true;}}var
ok=form.limit.value;var
selects=form.getElementsByTagName('select');var
group=false;var
columns={};for(var
i=0;i<selects.length;i++){var
select=selects[i];var
col=selectValue(select);var
match=/^(where.+)col\]/.exec(select.name);if(match){var
op=selectValue(form[match[1]+'op]']);var
val=form[match[1]+'val]'].value;if(col
in
indexColumns&&(!/LIKE|REGEXP/.test(op)||(op=='LIKE'&&val.charAt(0)!='%'))){return true;}else
if(col||val){ok=false;}}if((match=/^(columns.+)fun\]/.exec(select.name))){if(/^(avg|count|count distinct|group_concat|max|min|sum)$/.test(col)){group=true;}var
val=selectValue(form[match[1]+'col]']);if(val){columns[col&&col!='count'?'':val]=1;}}if(col&&/^order/.test(select.name)){if(!(col
in
indexColumns)){ok=false;}break;}}if(group){for(var
col
in
columns){if(!(col
in
indexColumns)){ok=false;}}}return ok;})();setHtml('noindex',(ok?'':'!'));}var
added='.',rowCount;function
delimiterEqual(val,a,b){return(val==a+'_'+b||val==a+b||val==a+b.charAt(0).toUpperCase()+b.substr(1));}function
idfEscape(s){return s.replace(/`/,'``');}function
editingNameChange(field){var
name=field.name.substr(0,field.name.length-7);var
type=formField(field.form,name+'[type]');var
opts=type.options;var
candidate;var
val=field.value;for(var
i=opts.length;i--;){var
match=/(.+)`(.+)/.exec(opts[i].value);if(!match){if(candidate&&i==opts.length-2&&val==opts[candidate].value.replace(/.+`/,'')&&name=='fields[1]'){return;}break;}var
table=match[1];var
column=match[2];var
tables=[table,table.replace(/s$/,''),table.replace(/es$/,'')];for(var
j=0;j<tables.length;j++){table=tables[j];if(val==column||val==table||delimiterEqual(val,table,column)||delimiterEqual(val,column,table)){if(candidate){return;}candidate=i;break;}}}if(candidate){type.selectedIndex=candidate;type.onchange();}}function
editingAddRow(button,allowed,focus){if(allowed&&rowCount>=allowed){return false;}var
match=/(\d+)(\.\d+)?/.exec(button.name);var
x=match[0]+(match[2]?added.substr(match[2].length):added)+'1';var
row=parentTag(button,'tr');var
row2=row.cloneNode(true);var
tags=row.getElementsByTagName('select');var
tags2=row2.getElementsByTagName('select');for(var
i=0;i<tags.length;i++){tags2[i].name=tags[i].name.replace(/([0-9.]+)/,x);tags2[i].selectedIndex=tags[i].selectedIndex;}tags=row.getElementsByTagName('input');tags2=row2.getElementsByTagName('input');var
input=tags2[0];for(var
i=0;i<tags.length;i++){if(tags[i].name=='auto_increment_col'){tags2[i].value=x;tags2[i].checked=false;}tags2[i].name=tags[i].name.replace(/([0-9.]+)/,x);if(/\[(orig|field|comment|default)/.test(tags[i].name)){tags2[i].value='';}if(/\[(has_default)/.test(tags[i].name)){tags2[i].checked=false;}}tags[0].onchange=function(){editingNameChange(tags[0]);};row.parentNode.insertBefore(row2,row.nextSibling);if(focus){input.onchange=function(){editingNameChange(input);};input.focus();}added+='0';rowCount++;return true;}function
editingRemoveRow(button){var
field=formField(button.form,button.name.replace(/drop_col(.+)/,'fields$1[field]'));field.parentNode.removeChild(field);parentTag(button,'tr').style.display='none';return true;}var
lastType='';function
editingTypeChange(type){var
name=type.name.substr(0,type.name.length-6);var
text=selectValue(type);for(var
i=0;i<type.form.elements.length;i++){var
el=type.form.elements[i];if(el.name==name+'[length]'&&!((/(char|binary)$/.test(lastType)&&/(char|binary)$/.test(text))||(/(enum|set)$/.test(lastType)&&/(enum|set)$/.test(text)))){el.value='';}if(lastType=='timestamp'&&el.name==name+'[has_default]'&&/timestamp/i.test(formField(type.form,name+'[default]').value)){el.checked=false;}if(el.name==name+'[collation]'){el.className=(/(char|text|enum|set)$/.test(text)?'':'hidden');}if(el.name==name+'[unsigned]'){el.className=(/(int|float|double|decimal)$/.test(text)?'':'hidden');}if(el.name==name+'[on_delete]'){el.className=(/`/.test(text)?'':'hidden');}}}function
editingLengthFocus(field){var
td=field.parentNode;if(/(enum|set)$/.test(selectValue(td.previousSibling.firstChild))){var
edit=document.getElementById('enum-edit');var
val=field.value;edit.value=(/^'.+','.+'$/.test(val)?val.substr(1,val.length-2).replace(/','/g,"\n").replace(/''/g,"'"):val);td.appendChild(edit);field.style.display='none';edit.style.display='inline';edit.focus();}}function
editingLengthBlur(edit){var
field=edit.parentNode.firstChild;var
val=edit.value;field.value=(/\n/.test(val)?"'"+val.replace(/\n+$/,'').replace(/'/g,"''").replace(/\n/g,"','")+"'":val);field.style.display='inline';edit.style.display='none';}function
columnShow(checked,column){var
trs=document.getElementById('edit-fields').getElementsByTagName('tr');for(var
i=0;i<trs.length;i++){trs[i].getElementsByTagName('td')[column].className=(checked?'':'hidden');}}function
partitionByChange(el){var
partitionTable=/RANGE|LIST/.test(selectValue(el));el.form['partitions'].className=(partitionTable||!el.selectedIndex?'hidden':'');document.getElementById('partition-table').className=(partitionTable?'':'hidden');}function
partitionNameChange(el){var
row=parentTag(el,'tr').cloneNode(true);row.firstChild.firstChild.value='';parentTag(el,'table').appendChild(row);el.onchange=function(){};}function
foreignAddRow(field){field.onchange=function(){};var
row=parentTag(field,'tr').cloneNode(true);var
selects=row.getElementsByTagName('select');for(var
i=0;i<selects.length;i++){selects[i].name=selects[i].name.replace(/\]/,'1$&');selects[i].selectedIndex=0;}parentTag(field,'table').appendChild(row);}function
indexesAddRow(field){field.onchange=function(){};var
row=parentTag(field,'tr').cloneNode(true);var
selects=row.getElementsByTagName('select');for(var
i=0;i<selects.length;i++){selects[i].name=selects[i].name.replace(/indexes\[\d+/,'$&1');selects[i].selectedIndex=0;}var
inputs=row.getElementsByTagName('input');for(var
i=0;i<inputs.length;i++){inputs[i].name=inputs[i].name.replace(/indexes\[\d+/,'$&1');inputs[i].value='';}parentTag(field,'table').appendChild(row);}function
indexesChangeColumn(field,prefix){var
columns=parentTag(field,'td').getElementsByTagName('select');var
names=[];for(var
i=0;i<columns.length;i++){var
value=selectValue(columns[i]);if(value){names.push(value);}}field.form[field.name.replace(/\].*/,'][name]')].value=prefix+names.join('_');}function
indexesAddColumn(field,prefix){field.onchange=function(){indexesChangeColumn(field,prefix);};var
select=field.form[field.name.replace(/\].*/,'][type]')];if(!select.selectedIndex){select.selectedIndex=3;select.onchange();}var
column=field.parentNode.cloneNode(true);select=column.getElementsByTagName('select')[0];select.name=select.name.replace(/\]\[\d+/,'$&1');select.selectedIndex=0;var
input=column.getElementsByTagName('input')[0];input.name=input.name.replace(/\]\[\d+/,'$&1');input.value='';parentTag(field,'td').appendChild(column);field.onchange();}var
that,x,y;function
schemaMousedown(el,event){if((event.which?event.which:event.button)==1){that=el;x=event.clientX-el.offsetLeft;y=event.clientY-el.offsetTop;}}function
schemaMousemove(ev){if(that!==undefined){ev=ev||event;var
left=(ev.clientX-x)/em;var
top=(ev.clientY-y)/em;var
divs=that.getElementsByTagName('div');var
lineSet={};for(var
i=0;i<divs.length;i++){if(divs[i].className=='references'){var
div2=document.getElementById((/^refs/.test(divs[i].id)?'refd':'refs')+divs[i].id.substr(4));var
ref=(tablePos[divs[i].title]?tablePos[divs[i].title]:[div2.parentNode.offsetTop/em,0]);var
left1=-1;var
id=divs[i].id.replace(/^ref.(.+)-.+/,'$1');if(divs[i].parentNode!=div2.parentNode){left1=Math.min(0,ref[1]-left)-1;divs[i].style.left=left1+'em';divs[i].getElementsByTagName('div')[0].style.width=-left1+'em';var
left2=Math.min(0,left-ref[1])-1;div2.style.left=left2+'em';div2.getElementsByTagName('div')[0].style.width=-left2+'em';}if(!lineSet[id]){var
line=document.getElementById(divs[i].id.replace(/^....(.+)-.+$/,'refl$1'));var
top1=top+divs[i].offsetTop/em;var
top2=top+div2.offsetTop/em;if(divs[i].parentNode!=div2.parentNode){top2+=ref[0]-top;line.getElementsByTagName('div')[0].style.height=Math.abs(top1-top2)+'em';}line.style.left=(left+left1)+'em';line.style.top=Math.min(top1,top2)+'em';lineSet[id]=true;}}}that.style.left=left+'em';that.style.top=top+'em';}}function
schemaMouseup(ev,db){if(that!==undefined){ev=ev||event;tablePos[that.firstChild.firstChild.firstChild.data]=[(ev.clientY-y)/em,(ev.clientX-x)/em];that=undefined;var
s='';for(var
key
in
tablePos){s+='_'+key+':'+Math.round(tablePos[key][0]*10000)/10000+'x'+Math.round(tablePos[key][1]*10000)/10000;}s=encodeURIComponent(s.substr(1));var
link=document.getElementById('schema-link');link.href=link.href.replace(/[^=]+$/,'')+s;cookie('adminer_schema-'+db+'='+s,30);}}<?php
}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIYSPqcvtD00I8cwqKb5v+q8pIAhxlRmhZYi17iPE8kzLBQA7");break;case"cross.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACI4SPqcvtDyMKYdZGb355wy6BX3dhlOEx57FK7gtHwkzXNl0AADs=");break;case"up.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIISPqcvtD00IUU4K730T9J5hFTiKEXmaYcW2rgDH8hwXADs=");break;case"down.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIISPqcvtD00I8cwqKb5bV/5cosdMJtmcHca2lQDH8hwXADs=");break;case"arrow.gif":echo
base64_decode("R0lGODlhCAAKAIAAAICAgP///yH5BAEAAAEALAAAAAAIAAoAAAIPBIJplrGLnpQRqtOy3rsAADs=");break;}}exit;}function
connection(){global$g;return$g;}function
adminer(){global$b;return$b;}function
idf_unescape($s){$Tc=substr($s,-1);return
str_replace($Tc.$Tc,$Tc,substr($s,1,-1));}function
escape_string($W){return
substr(q($W),1,-1);}function
remove_slashes($_e,$dc=false){if(get_magic_quotes_gpc()){while(list($w,$W)=each($_e)){foreach($W
as$Nc=>$V){unset($_e[$w][$Nc]);if(is_array($V)){$_e[$w][stripslashes($Nc)]=$V;$_e[]=&$_e[$w][stripslashes($Nc)];}else$_e[$w][stripslashes($Nc)]=($dc?$V:stripslashes($V));}}}}function
bracket_escape($s,$Ba=false){static$Nf=array(':'=>':1',']'=>':2','['=>':3');return
strtr($s,($Ba?array_flip($Nf):$Nf));}function
h($M){return
htmlspecialchars(str_replace("\0","",$M),ENT_QUOTES);}function
nbsp($M){return(trim($M)!=""?h($M):"&nbsp;");}function
nl_br($M){return
str_replace("\n","<br>",$M);}function
checkbox($A,$X,$Ma,$Rc="",$Kd="",$Mc=false){static$r=0;$r++;$G="<input type='checkbox' name='$A' value='".h($X)."'".($Ma?" checked":"").($Kd?' onclick="'.h($Kd).'"':'').($Mc?" class='jsonly'":"")." id='checkbox-$r'>";return($Rc!=""?"<label for='checkbox-$r'>$G".h($Rc)."</label>":$G);}function
optionlist($Od,$Ze=null,$hg=false){$G="";foreach($Od
as$Nc=>$V){$Pd=array($Nc=>$V);if(is_array($V)){$G.='<optgroup label="'.h($Nc).'">';$Pd=$V;}foreach($Pd
as$w=>$W)$G.='<option'.($hg||is_string($w)?' value="'.h($w).'"':'').(($hg||is_string($w)?(string)$w:$W)===$Ze?' selected':'').'>'.h($W);if(is_array($V))$G.='</optgroup>';}return$G;}function
html_select($A,$Od,$X="",$Jd=true){if($Jd)return"<select name='".h($A)."'".(is_string($Jd)?' onchange="'.h($Jd).'"':"").">".optionlist($Od,$X)."</select>";$G="";foreach($Od
as$w=>$W)$G.="<label><input type='radio' name='".h($A)."' value='".h($w)."'".($w==$X?" checked":"").">".h($W)."</label>";return$G;}function
confirm($db=""){return" onclick=\"return confirm('".'Are you sure?'.($db?" (' + $db + ')":"")."');\"";}function
print_fieldset($r,$Yc,$ng=false,$Kd=""){echo"<fieldset><legend><a href='#fieldset-$r' onclick=\"".h($Kd)."return !toggle('fieldset-$r');\">$Yc</a></legend><div id='fieldset-$r'".($ng?"":" class='hidden'").">\n";}function
bold($Ga){return($Ga?" class='active'":"");}function
odd($G=' class="odd"'){static$q=0;if(!$G)$q=-1;return($q++%
2?$G:'');}function
js_escape($M){return
addcslashes($M,"\r\n'\\/");}function
json_row($w,$W=null){static$ec=true;if($ec)echo"{";if($w!=""){echo($ec?"":",")."\n\t\"".addcslashes($w,"\r\n\"\\").'": '.($W!==null?'"'.addcslashes($W,"\r\n\"\\").'"':'undefined');$ec=false;}else{echo"\n}\n";$ec=true;}}function
ini_bool($Ec){$W=ini_get($Ec);return(eregi('^(on|true|yes)$',$W)||(int)$W);}function
sid(){static$G;if($G===null)$G=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));return$G;}function
q($M){global$g;return$g->quote($M);}function
get_vals($E,$e=0){global$g;$G=array();$F=$g->query($E);if(is_object($F)){while($H=$F->fetch_row())$G[]=$H[$e];}return$G;}function
get_key_vals($E,$h=null){global$g;if(!is_object($h))$h=$g;$G=array();$F=$h->query($E);if(is_object($F)){while($H=$F->fetch_row())$G[$H[0]]=$H[1];}return$G;}function
get_rows($E,$h=null,$k="<p class='error'>"){global$g;$Za=(is_object($h)?$h:$g);$G=array();$F=$Za->query($E);if(is_object($F)){while($H=$F->fetch_assoc())$G[]=$H;}elseif(!$F&&!is_object($h)&&$k&&defined("PAGE_HEADER"))echo$k.error()."\n";return$G;}function
unique_array($H,$u){foreach($u
as$t){if(ereg("PRIMARY|UNIQUE",$t["type"])){$G=array();foreach($t["columns"]as$w){if(!isset($H[$w]))continue
2;$G[$w]=$H[$w];}return$G;}}$G=array();foreach($H
as$w=>$W){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$w))$G[$w]=$W;}return$G;}function
where($Z){global$v;$G=array();foreach((array)$Z["where"]as$w=>$W)$G[]=idf_escape(bracket_escape($w,1)).(($v=="sql"&&ereg('\\.',$W))||$v=="mssql"?" LIKE ".exact_value(addcslashes($W,"%_\\")):" = ".exact_value($W));foreach((array)$Z["null"]as$w)$G[]=idf_escape($w)." IS NULL";return
implode(" AND ",$G);}function
where_check($W){parse_str($W,$La);remove_slashes(array(&$La));return
where($La);}function
where_link($q,$e,$X,$Ld="="){return"&where%5B$q%5D%5Bcol%5D=".urlencode($e)."&where%5B$q%5D%5Bop%5D=".urlencode(($X!==null?$Ld:"IS NULL"))."&where%5B$q%5D%5Bval%5D=".urlencode($X);}function
cookie($A,$X){global$ba;$ee=array($A,(ereg("\n",$X)?"":$X),time()+2592000,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$ba);if(version_compare(PHP_VERSION,'5.2.0')>=0)$ee[]=true;return
call_user_func_array('setcookie',$ee);}function
restart_session(){if(!ini_bool("session.use_cookies"))session_start();}function&get_session($w){return$_SESSION[$w][DRIVER][SERVER][$_GET["username"]];}function
set_session($w,$W){$_SESSION[$w][DRIVER][SERVER][$_GET["username"]]=$W;}function
auth_url($ub,$K,$U,$j=null){global$vb;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($vb))."|username|".($j!==null?"db|":"").session_name()),$_);return"$_[1]?".(sid()?SID."&":"").($ub!="server"||$K!=""?urlencode($ub)."=".urlencode($K)."&":"")."username=".urlencode($U).($j!=""?"&db=".urlencode($j):"").($_[2]?"&$_[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($cd,$nd=null){if($nd!==null){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',($cd!==null?$cd:$_SERVER["REQUEST_URI"]))][]=$nd;}if($cd!==null){if($cd=="")$cd=".";header("Location: $cd");exit;}}function
query_redirect($E,$cd,$nd,$Ee=true,$Sb=true,$Zb=false){global$g,$k,$b;if($Sb)$Zb=!$g->query($E);$if="";if($E)$if=$b->messageQuery("$E;");if($Zb){$k=error().$if;return
false;}if($Ee)redirect($cd,$nd.$if);return
true;}function
queries($E=null){global$g;static$Ce=array();if($E===null)return
implode(";\n",$Ce);$Ce[]=(ereg(';$',$E)?"DELIMITER ;;\n$E;\nDELIMITER ":$E);return$g->query($E);}function
apply_queries($E,$Q,$Nb='table'){foreach($Q
as$O){if(!queries("$E ".$Nb($O)))return
false;}return
true;}function
queries_redirect($cd,$nd,$Ee){return
query_redirect(queries(),$cd,$nd,$Ee,false,!$Ee);}function
remove_from_uri($de=""){return
substr(preg_replace("~(?<=[?&])($de".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($ce,$ib){return" ".($ce==$ib?$ce+1:'<a href="'.h(remove_from_uri("page").($ce?"&page=$ce":"")).'">'.($ce+1)."</a>");}function
get_file($w,$nb=false){$bc=$_FILES[$w];if(!$bc||$bc["error"])return$bc["error"];$G=file_get_contents($nb&&ereg('\\.gz$',$bc["name"])?"compress.zlib://$bc[tmp_name]":($nb&&ereg('\\.bz2$',$bc["name"])?"compress.bzip2://$bc[tmp_name]":$bc["tmp_name"]));if($nb){$jf=substr($G,0,3);if(function_exists("iconv")&&ereg("^\xFE\xFF|^\xFF\xFE",$jf,$Ke))$G=iconv("utf-16","utf-8",$G);elseif($jf=="\xEF\xBB\xBF")$G=substr($G,3);}return$G;}function
upload_error($k){$ld=($k==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):0);return($k?'Unable to upload a file.'.($ld?" ".sprintf('Maximum allowed file size is %sB.',$ld):""):'File does not exist.');}function
repeat_pattern($le,$x){return
str_repeat("$le{0,65535}",$x/65535)."$le{0,".($x
%
65535)."}";}function
is_utf8($W){return(preg_match('~~u',$W)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$W));}function
shorten_utf8($M,$x=80,$pf=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$x).")($)?)u",$M,$_))preg_match("(^(".repeat_pattern("[\t\r\n -~]",$x).")($)?)",$M,$_);return
h($_[1]).$pf.(isset($_[2])?"":"<i>...</i>");}function
friendly_url($W){return
preg_replace('~[^a-z0-9_]~i','-',$W);}function
hidden_fields($_e,$_c=array()){while(list($w,$W)=each($_e)){if(is_array($W)){foreach($W
as$Nc=>$V)$_e[$w."[$Nc]"]=$V;}elseif(!in_array($w,$_c))echo'<input type="hidden" name="'.h($w).'" value="'.h($W).'">';}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
column_foreign_keys($O){global$b;$G=array();foreach($b->foreignKeys($O)as$n){foreach($n["source"]as$W)$G[$W][]=$n;}return$G;}function
enum_input($S,$ya,$l,$X,$Fb=null){global$b;preg_match_all("~'((?:[^']|'')*)'~",$l["length"],$gd);$G=($Fb!==null?"<label><input type='$S'$ya value='$Fb'".((is_array($X)?in_array($Fb,$X):$X===0)?" checked":"")."><i>".'empty'."</i></label>":"");foreach($gd[1]as$q=>$W){$W=stripcslashes(str_replace("''","'",$W));$Ma=(is_int($X)?$X==$q+1:(is_array($X)?in_array($q+1,$X):$X===$W));$G.=" <label><input type='$S'$ya value='".($q+1)."'".($Ma?' checked':'').'>'.h($b->editVal($W,$l)).'</label>';}return$G;}function
input($l,$X,$o){global$T,$b,$v;$A=h(bracket_escape($l["field"]));echo"<td class='function'>";$Me=($v=="mssql"&&$l["auto_increment"]);if($Me&&!$_POST["save"])$o=null;$pc=(isset($_GET["select"])||$Me?array("orig"=>'original'):array())+$b->editFunctions($l);$ya=" name='fields[$A]'";if($l["type"]=="enum")echo
nbsp($pc[""])."<td>".$b->editInput($_GET["edit"],$l,$ya,$X);else{$ec=0;foreach($pc
as$w=>$W){if($w===""||!$W)break;$ec++;}$Jd=($ec?" onchange=\"var f = this.form['function[".h(js_escape(bracket_escape($l["field"])))."]']; if ($ec > f.selectedIndex) f.selectedIndex = $ec;\"":"");$ya.=$Jd;echo(count($pc)>1?html_select("function[$A]",$pc,$o===null||in_array($o,$pc)||isset($pc[$o])?$o:"","functionChange(this);"):nbsp(reset($pc))).'<td>';$Gc=$b->editInput($_GET["edit"],$l,$ya,$X);if($Gc!="")echo$Gc;elseif($l["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$l["length"],$gd);foreach($gd[1]as$q=>$W){$W=stripcslashes(str_replace("''","'",$W));$Ma=(is_int($X)?($X>>$q)&1:in_array($W,explode(",",$X),true));echo" <label><input type='checkbox' name='fields[$A][$q]' value='".(1<<$q)."'".($Ma?' checked':'')."$Jd>".h($b->editVal($W,$l)).'</label>';}}elseif(ereg('blob|bytea|raw|file',$l["type"])&&ini_bool("file_uploads"))echo"<input type='file' name='fields-$A'$Jd>";elseif(ereg('text|lob',$l["type"]))echo"<textarea ".($v!="sqlite"||ereg("\n",$X)?"cols='50' rows='12'":"cols='30' rows='1' style='height: 1.2em;'")."$ya>".h($X).'</textarea>';else{$md=(!ereg('int',$l["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$l["length"],$_)?((ereg("binary",$l["type"])?2:1)*$_[1]+($_[3]?1:0)+($_[2]&&!$l["unsigned"]?1:0)):($T[$l["type"]]?$T[$l["type"]]+($l["unsigned"]?0:1):0));echo"<input value='".h($X)."'".($md?" maxlength='$md'":"").(ereg('char|binary',$l["type"])&&$md>20?" size='40'":"")."$ya>";}}}function
process_input($l){global$b;$s=bracket_escape($l["field"]);$o=$_POST["function"][$s];$X=$_POST["fields"][$s];if($l["type"]=="enum"){if($X==-1)return
false;if($X=="")return"NULL";return+$X;}if($l["auto_increment"]&&$X=="")return
null;if($o=="orig")return($l["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($l["field"]):false);if($o=="NULL")return"NULL";if($l["type"]=="set")return
array_sum((array)$X);if(ereg('blob|bytea|raw|file',$l["type"])&&ini_bool("file_uploads")){$bc=get_file("fields-$s");if(!is_string($bc))return
false;return
q($bc);}return$b->processInput($l,$X,$o);}function
search_tables(){global$b,$g;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$kc=false;foreach(table_status()as$O=>$P){$A=$b->tableName($P);if(isset($P["Engine"])&&$A!=""&&(!$_POST["tables"]||in_array($O,$_POST["tables"]))){$F=$g->query("SELECT".limit("1 FROM ".table($O)," WHERE ".implode(" AND ",$b->selectSearchProcess(fields($O),array())),1));if($F->fetch_row()){if(!$kc){echo"<ul>\n";$kc=true;}echo"<li><a href='".h(ME."select=".urlencode($O)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$A</a>\n";}}}echo($kc?"</ul>":"<p class='message'>".'No tables.')."\n";}function
dump_headers($zc,$vd=false){global$b;$G=$b->dumpHeaders($zc,$vd);$ae=$_POST["output"];if($ae!="text")header("Content-Disposition: attachment; filename=".$b->dumpFilename($zc).".$G".($ae!="file"&&!ereg('[^0-9a-z]',$ae)?".$ae":""));session_write_close();return$G;}function
dump_csv($H){foreach($H
as$w=>$W){if(preg_match("~[\"\n,;\t]~",$W)||$W==="")$H[$w]='"'.str_replace('"','""',$W).'"';}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$H)."\r\n";}function
apply_sql_function($o,$e){return($o?($o=="unixepoch"?"DATETIME($e, '$o')":($o=="count distinct"?"COUNT(DISTINCT ":strtoupper("$o("))."$e)"):$e);}function
password_file(){$rb=ini_get("upload_tmp_dir");if(!$rb){if(function_exists('sys_get_temp_dir'))$rb=sys_get_temp_dir();else{$cc=@tempnam("","");if(!$cc)return
false;$rb=dirname($cc);unlink($cc);}}$cc="$rb/adminer.key";$G=@file_get_contents($cc);if($G)return$G;$mc=@fopen($cc,"w");if($mc){$G=md5(uniqid(mt_rand(),true));fwrite($mc,$G);fclose($mc);}return$G;}function
is_mail($Cb){$xa='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$tb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$le="$xa+(\\.$xa+)*@($tb?\\.)+$tb";return
preg_match("(^$le(,\\s*$le)*\$)i",$Cb);}function
is_url($M){$tb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($tb?\\.)+$tb(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$M,$_)?strtolower($_[1]):"");}global$b,$g,$vb,$Ab,$Jb,$k,$pc,$tc,$ba,$Fc,$v,$ca,$Sc,$Id,$nf,$R,$Pf,$T,$dg,$ia;if(!$_SERVER["REQUEST_URI"])$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"];if(!strpos($_SERVER["REQUEST_URI"],'?')&&$_SERVER["QUERY_STRING"]!="")$_SERVER["REQUEST_URI"].="?$_SERVER[QUERY_STRING]";$ba=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_name("adminer_sid");$ee=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$ba);if(version_compare(PHP_VERSION,'5.2.0')>=0)$ee[]=true;call_user_func_array('session_set_cookie_params',$ee);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$dc);if(function_exists("set_magic_quotes_runtime"))set_magic_quotes_runtime(false);@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);function
get_lang(){return'en';}function
lang($Of,$Bd){$oe=($Bd==1?0:1);$Of=str_replace("%d","%s",$Of[$oe]);$Bd=number_format($Bd,0,".",',');return
sprintf($Of,$Bd);}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$error;function
__construct(){global$b;$oe=array_search("",$b->operators);if($oe!==false)unset($b->operators[$oe]);}function
dsn($yb,$U,$C,$Rb='auth_error'){set_exception_handler($Rb);parent::__construct($yb,$U,$C);restore_exception_handler();$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($E,$Xf=false){$F=parent::query($E);$this->error="";if(!$F){$Lb=$this->errorInfo();$this->error=$Lb[2];return
false;}$this->store_result($F);return$F;}function
multi_query($E){return$this->_result=$this->query($E);}function
store_result($F=null){if(!$F)$F=$this->_result;if($F->columnCount()){$F->num_rows=$F->rowCount();return$F;}$this->affected_rows=$F->rowCount();return
true;}function
next_result(){$this->_result->_offset=0;return@$this->_result->nextRowset();}function
result($E,$l=0){$F=$this->query($E);if(!$F)return
false;$H=$F->fetch();return$H[$l];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$H=(object)$this->getColumnMeta($this->_offset++);$H->orgtable=$H->table;$H->orgname=$H->name;$H->charsetnr=(in_array("blob",(array)$H->flags)?63:0);return$H;}}}$vb=array();$vb["sqlite"]="SQLite 3";$vb["sqlite2"]="SQLite 2";if(isset($_GET["sqlite"])||isset($_GET["sqlite2"])){$re=array((isset($_GET["sqlite"])?"SQLite3":"SQLite"),"PDO_SQLite");define("DRIVER",(isset($_GET["sqlite"])?"sqlite":"sqlite2"));if(extension_loaded(isset($_GET["sqlite"])?"sqlite3":"sqlite")){if(isset($_GET["sqlite"])){class
Min_SQLite{var$extension="SQLite3",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($cc){$this->_link=new
SQLite3($cc);$lg=$this->_link->version();$this->server_info=$lg["versionString"];}function
query($E){$F=@$this->_link->query($E);$this->error="";if(!$F){$this->error=$this->_link->lastErrorMsg();return
false;}elseif($F->numColumns())return
new
Min_Result($F);$this->affected_rows=$this->_link->changes();return
true;}function
quote($M){return(is_utf8($M)?"'".$this->_link->escapeString($M)."'":"x'".reset(unpack('H*',$M))."'");}function
store_result(){return$this->_result;}function
result($E,$l=0){$F=$this->query($E);if(!is_object($F))return
false;$H=$F->_result->fetchArray();return$H[$l];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($F){$this->_result=$F;}function
fetch_assoc(){return$this->_result->fetchArray(SQLITE3_ASSOC);}function
fetch_row(){return$this->_result->fetchArray(SQLITE3_NUM);}function
fetch_field(){$e=$this->_offset++;$S=$this->_result->columnType($e);return(object)array("name"=>$this->_result->columnName($e),"type"=>$S,"charsetnr"=>($S==SQLITE3_BLOB?63:0),);}function
__desctruct(){return$this->_result->finalize();}}}else{class
Min_SQLite{var$extension="SQLite",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($cc){$this->server_info=sqlite_libversion();$this->_link=new
SQLiteDatabase($cc);}function
query($E,$Xf=false){$sd=($Xf?"unbufferedQuery":"query");$F=@$this->_link->$sd($E,SQLITE_BOTH,$k);$this->error="";if(!$F){$this->error=$k;return
false;}elseif($F===true){$this->affected_rows=$this->changes();return
true;}return
new
Min_Result($F);}function
quote($M){return"'".sqlite_escape_string($M)."'";}function
store_result(){return$this->_result;}function
result($E,$l=0){$F=$this->query($E);if(!is_object($F))return
false;$H=$F->_result->fetch();return$H[$l];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($F){$this->_result=$F;if(method_exists($F,'numRows'))$this->num_rows=$F->numRows();}function
fetch_assoc(){$H=$this->_result->fetch(SQLITE_ASSOC);if(!$H)return
false;$G=array();foreach($H
as$w=>$W)$G[($w[0]=='"'?idf_unescape($w):$w)]=$W;return$G;}function
fetch_row(){return$this->_result->fetch(SQLITE_NUM);}function
fetch_field(){$A=$this->_result->fieldName($this->_offset++);$le='(\\[.*]|"(?:[^"]|"")*"|(.+))';if(preg_match("~^($le\\.)?$le\$~",$A,$_)){$O=($_[3]!=""?$_[3]:idf_unescape($_[2]));$A=($_[5]!=""?$_[5]:idf_unescape($_[4]));}return(object)array("name"=>$A,"orgname"=>$A,"orgtable"=>$O,);}}}}elseif(extension_loaded("pdo_sqlite")){class
Min_SQLite
extends
Min_PDO{var$extension="PDO_SQLite";function
Min_SQLite($cc){$this->dsn(DRIVER.":$cc","","");}}}if(class_exists("Min_SQLite")){class
Min_DB
extends
Min_SQLite{function
Min_DB(){$this->Min_SQLite(":memory:");}function
select_db($cc){if(is_readable($cc)&&$this->query("ATTACH ".$this->quote(ereg("(^[/\\\\]|:)",$cc)?$cc:dirname($_SERVER["SCRIPT_FILENAME"])."/$cc")." AS a")){$this->Min_SQLite($cc);return
true;}return
false;}function
multi_query($E){return$this->_result=$this->query($E);}function
next_result(){return
false;}}}function
idf_escape($s){return'"'.str_replace('"','""',$s).'"';}function
table($s){return
idf_escape($s);}function
connect(){return
new
Min_DB;}function
get_databases(){return
array();}function
limit($E,$Z,$y,$B=0,$bf=" "){return" $E$Z".($y!==null?$bf."LIMIT $y".($B?" OFFSET $B":""):"");}function
limit1($E,$Z){global$g;return($g->result("SELECT sqlite_compileoption_used('ENABLE_UPDATE_DELETE_LIMIT')")?limit($E,$Z,1):" $E$Z");}function
db_collation($j,$Ra){global$g;return$g->result("PRAGMA encoding");}function
engines(){return
array();}function
logged_user(){return
get_current_user();}function
tables_list(){return
get_key_vals("SELECT name, type FROM sqlite_master WHERE type IN ('table', 'view') ORDER BY (name = 'sqlite_sequence'), name",1);}function
count_tables($i){return
array();}function
table_status($A=""){global$g;$G=array();foreach(get_rows("SELECT name AS Name, type AS Engine FROM sqlite_master WHERE type IN ('table', 'view')".($A!=""?" AND name = ".q($A):""))as$H){$H["Oid"]="t";$H["Auto_increment"]="";$H["Rows"]=$g->result("SELECT COUNT(*) FROM ".idf_escape($H["Name"]));$G[$H["Name"]]=$H;}foreach(get_rows("SELECT * FROM sqlite_sequence",null,"")as$H)$G[$H["name"]]["Auto_increment"]=$H["seq"];return($A!=""?$G[$A]:$G);}function
is_view($P){return$P["Engine"]=="view";}function
fk_support($P){global$g;return!$g->result("SELECT sqlite_compileoption_used('OMIT_FOREIGN_KEY')");}function
fields($O){$G=array();foreach(get_rows("PRAGMA table_info(".table($O).")")as$H){$S=strtolower($H["type"]);$ob=$H["dflt_value"];$G[$H["name"]]=array("field"=>$H["name"],"type"=>(eregi("int",$S)?"integer":(eregi("char|clob|text",$S)?"text":(eregi("blob",$S)?"blob":(eregi("real|floa|doub",$S)?"real":"numeric")))),"full_type"=>$S,"default"=>(ereg("'(.*)'",$ob,$_)?str_replace("''","'",$_[1]):($ob=="NULL"?null:$ob)),"null"=>!$H["notnull"],"auto_increment"=>eregi('^integer$',$S)&&$H["pk"],"privileges"=>array("select"=>1,"insert"=>1,"update"=>1),"primary"=>$H["pk"],);}return$G;}function
indexes($O,$h=null){$G=array();$ue=array();foreach(fields($O)as$l){if($l["primary"])$ue[]=$l["field"];}if($ue)$G[""]=array("type"=>"PRIMARY","columns"=>$ue,"lengths"=>array());foreach(get_rows("PRAGMA index_list(".table($O).")")as$H){if(!ereg("^sqlite_",$H["name"])){$G[$H["name"]]["type"]=($H["unique"]?"UNIQUE":"INDEX");$G[$H["name"]]["lengths"]=array();foreach(get_rows("PRAGMA index_info(".idf_escape($H["name"]).")")as$Te)$G[$H["name"]]["columns"][]=$Te["name"];}}return$G;}function
foreign_keys($O){$G=array();foreach(get_rows("PRAGMA foreign_key_list(".table($O).")")as$H){$n=&$G[$H["id"]];if(!$n)$n=$H;$n["source"][]=$H["from"];$n["target"][]=$H["to"];}return$G;}function
view($A){global$g;return
array("select"=>preg_replace('~^(?:[^`"[]+|`[^`]*`|"[^"]*")* AS\\s+~iU','',$g->result("SELECT sql FROM sqlite_master WHERE name = ".q($A))));}function
collations(){return(isset($_GET["create"])?get_vals("PRAGMA collation_list",1):array());}function
information_schema($j){return
false;}function
error(){global$g;return
h($g->error);}function
exact_value($W){return
q($W);}function
check_sqlite_name($A){global$g;$Yb="db|sdb|sqlite";if(!preg_match("~^[^\\0]*\\.($Yb)\$~",$A)){$g->error=sprintf('Please use one of the extensions %s.',str_replace("|",", ",$Yb));return
false;}return
true;}function
create_database($j,$d){global$g;if(file_exists($j)){$g->error='File exists.';return
false;}if(!check_sqlite_name($j))return
false;$z=new
Min_SQLite($j);$z->query('PRAGMA encoding = "UTF-8"');$z->query('CREATE TABLE adminer (i)');$z->query('DROP TABLE adminer');return
true;}function
drop_databases($i){global$g;$g->Min_SQLite(":memory:");foreach($i
as$j){if(!@unlink($j)){$g->error='File exists.';return
false;}}return
true;}function
rename_database($A,$d){global$g;if(!check_sqlite_name($A))return
false;$g->Min_SQLite(":memory:");$g->error='File exists.';return@rename(DB,$A);}function
auto_increment(){return" PRIMARY KEY".(DRIVER=="sqlite"?" AUTOINCREMENT":"");}function
alter_table($O,$A,$m,$gc,$Va,$Hb,$d,$_a,$ie){$gg=($O==""||$gc);foreach($m
as$l){if($l[0]!=""||!$l[1]||$l[2]){$gg=true;break;}}$c=array();$Yd=array();$ve=false;foreach($m
as$l){if($l[1]){if($l[1][6])$ve=true;$c[]=($gg?"  ":"ADD ").implode($l[1]);if($l[0]!="")$Yd[$l[0]]=$l[1][0];}}if($gg){if($O!=""){queries("BEGIN");foreach(foreign_keys($O)as$n){$f=array();foreach($n["source"]as$e){if(!$Yd[$e])continue
2;$f[]=$Yd[$e];}$gc[]="  FOREIGN KEY (".implode(", ",$f).") REFERENCES ".table($n["table"])." (".implode(", ",array_map('idf_escape',$n["target"])).") ON DELETE $n[on_delete] ON UPDATE $n[on_update]";}$u=array();foreach(indexes($O)as$Oc=>$t){$f=array();foreach($t["columns"]as$e){if(!$Yd[$e])continue
2;$f[]=$Yd[$e];}$f="(".implode(", ",$f).")";if($t["type"]!="PRIMARY")$u[]=array($t["type"],$Oc,$f);elseif(!$ve)$gc[]="  PRIMARY KEY $f";}}$c=array_merge($c,$gc);if(!queries("CREATE TABLE ".table($O!=""?"adminer_$A":$A)." (\n".implode(",\n",$c)."\n)"))return
false;if($O!=""){if($Yd&&!queries("INSERT INTO ".table("adminer_$A")." (".implode(", ",$Yd).") SELECT ".implode(", ",array_map('idf_escape',array_keys($Yd)))." FROM ".table($O)))return
false;$Uf=array();foreach(triggers($O)as$Sf=>$Gf){$Qf=trigger($Sf);$Uf[]="CREATE TRIGGER ".idf_escape($Sf)." ".implode(" ",$Gf)." ON ".table($A)."\n$Qf[Statement]";}if(!queries("DROP TABLE ".table($O)))return
false;queries("ALTER TABLE ".table("adminer_$A")." RENAME TO ".table($A));if(!alter_indexes($A,$u))return
false;foreach($Uf
as$Qf){if(!queries($Qf))return
false;}queries("COMMIT");}}else{foreach($c
as$W){if(!queries("ALTER TABLE ".table($O)." $W"))return
false;}if($O!=$A&&!queries("ALTER TABLE ".table($O)." RENAME TO ".table($A)))return
false;}if($_a)queries("UPDATE sqlite_sequence SET seq = $_a WHERE name = ".q($A));return
true;}function
alter_indexes($O,$c){foreach($c
as$W){if(!queries($W[2]=="DROP"?"DROP INDEX ".idf_escape($W[1]):"CREATE $W[0] ".($W[0]!="INDEX"?"INDEX ":"").idf_escape($W[1]!=""?$W[1]:uniqid($O."_"))." ON ".table($O)." $W[2]"))return
false;}return
true;}function
truncate_tables($Q){return
apply_queries("DELETE FROM",$Q);}function
drop_views($Y){return
apply_queries("DROP VIEW",$Y);}function
drop_tables($Q){return
apply_queries("DROP TABLE",$Q);}function
move_tables($Q,$Y,$Bf){return
false;}function
trigger($A){global$g;if($A=="")return
array("Statement"=>"BEGIN\n\t;\nEND");preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s+([a-z]+)\\s+ON\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*(?:FOR\\s*EACH\\s*ROW\\s)?(.*)~is',$g->result("SELECT sql FROM sqlite_master WHERE name = ".q($A)),$_);return
array("Timing"=>strtoupper($_[1]),"Event"=>strtoupper($_[2]),"Trigger"=>$A,"Statement"=>$_[3]);}function
triggers($O){$G=array();foreach(get_rows("SELECT * FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($O))as$H){preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s*([a-z]+)~i',$H["sql"],$_);$G[$H["name"]]=array($_[1],$_[2]);}return$G;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER","INSTEAD OF"),"Type"=>array("FOR EACH ROW"),);}function
routine($A,$S){}function
routines(){}function
routine_languages(){}function
begin(){return
queries("BEGIN");}function
insert_into($O,$L){return
queries("INSERT INTO ".table($O).($L?" (".implode(", ",array_keys($L)).")\nVALUES (".implode(", ",$L).")":"DEFAULT VALUES"));}function
insert_update($O,$L,$ue){return
queries("REPLACE INTO ".table($O)." (".implode(", ",array_keys($L)).") VALUES (".implode(", ",$L).")");}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ROWID()");}function
explain($g,$E){return$g->query("EXPLAIN $E");}function
found_rows($P,$Z){}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Xe){return
true;}function
create_sql($O,$_a){global$g;return$g->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($O));}function
truncate_sql($O){return"DELETE FROM ".table($O);}function
use_sql($lb){}function
trigger_sql($O,$N){return
implode(get_vals("SELECT sql || ';;\n' FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($O)));}function
show_variables(){global$g;$G=array();foreach(array("auto_vacuum","cache_size","count_changes","default_cache_size","empty_result_callbacks","encoding","foreign_keys","full_column_names","fullfsync","journal_mode","journal_size_limit","legacy_file_format","locking_mode","page_size","max_page_count","read_uncommitted","recursive_triggers","reverse_unordered_selects","secure_delete","short_column_names","synchronous","temp_store","temp_store_directory","schema_version","integrity_check","quick_check")as$w)$G[$w]=$g->result("PRAGMA $w");return$G;}function
show_status(){$G=array();foreach(get_vals("PRAGMA compile_options")as$Nd){list($w,$W)=explode("=",$Nd,2);$G[$w]=$W;}return$G;}function
support($ac){return
ereg('^(view|trigger|variables|status|dump|move_col|drop_col)$',$ac);}$v="sqlite";$T=array("integer"=>0,"real"=>0,"numeric"=>0,"text"=>0,"blob"=>0);$nf=array_keys($T);$dg=array();$Md=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","");$pc=array("hex","length","lower","round","unixepoch","upper");$tc=array("avg","count","count distinct","group_concat","max","min","sum");$Ab=array(array(),array("integer|real|numeric"=>"+/-","text"=>"||",));}$vb["pgsql"]="PostgreSQL";if(isset($_GET["pgsql"])){$re=array("PgSQL","PDO_PgSQL");define("DRIVER","pgsql");if(extension_loaded("pgsql")){class
Min_DB{var$extension="PgSQL",$_link,$_result,$_string,$_database=true,$server_info,$affected_rows,$error;function
_error($Kb,$k){if(ini_bool("html_errors"))$k=html_entity_decode(strip_tags($k));$k=ereg_replace('^[^:]*: ','',$k);$this->error=$k;}function
connect($K,$U,$C){global$b;$j=$b->database();set_error_handler(array($this,'_error'));$this->_string="host='".str_replace(":","' port='",addcslashes($K,"'\\"))."' user='".addcslashes($U,"'\\")."' password='".addcslashes($C,"'\\")."'";$this->_link=@pg_connect("$this->_string dbname='".($j!=""?addcslashes($j,"'\\"):"postgres")."'",PGSQL_CONNECT_FORCE_NEW);if(!$this->_link&&$j!=""){$this->_database=false;$this->_link=@pg_connect("$this->_string dbname='postgres'",PGSQL_CONNECT_FORCE_NEW);}restore_error_handler();if($this->_link){$lg=pg_version($this->_link);$this->server_info=$lg["server"];pg_set_client_encoding($this->_link,"UTF8");}return(bool)$this->_link;}function
quote($M){return"'".pg_escape_string($this->_link,$M)."'";}function
select_db($lb){global$b;if($lb==$b->database())return$this->_database;$G=@pg_connect("$this->_string dbname='".addcslashes($lb,"'\\")."'",PGSQL_CONNECT_FORCE_NEW);if($G)$this->_link=$G;return$G;}function
close(){$this->_link=@pg_connect("$this->_string dbname='postgres'");}function
query($E,$Xf=false){$F=@pg_query($this->_link,$E);$this->error="";if(!$F){$this->error=pg_last_error($this->_link);return
false;}elseif(!pg_num_fields($F)){$this->affected_rows=pg_affected_rows($F);return
true;}return
new
Min_Result($F);}function
multi_query($E){return$this->_result=$this->query($E);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($E,$l=0){$F=$this->query($E);if(!$F||!$F->num_rows)return
false;return
pg_fetch_result($F->_result,0,$l);}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($F){$this->_result=$F;$this->num_rows=pg_num_rows($F);}function
fetch_assoc(){return
pg_fetch_assoc($this->_result);}function
fetch_row(){return
pg_fetch_row($this->_result);}function
fetch_field(){$e=$this->_offset++;$G=new
stdClass;if(function_exists('pg_field_table'))$G->orgtable=pg_field_table($this->_result,$e);$G->name=pg_field_name($this->_result,$e);$G->orgname=$G->name;$G->type=pg_field_type($this->_result,$e);$G->charsetnr=($G->type=="bytea"?63:0);return$G;}function
__destruct(){pg_free_result($this->_result);}}}elseif(extension_loaded("pdo_pgsql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_PgSQL";function
connect($K,$U,$C){global$b;$j=$b->database();$M="pgsql:host='".str_replace(":","' port='",addcslashes($K,"'\\"))."' options='-c client_encoding=utf8'";$this->dsn("$M dbname='".($j!=""?addcslashes($j,"'\\"):"postgres")."'",$U,$C);return
true;}function
select_db($lb){global$b;return($b->database()==$lb);}function
close(){}}}function
idf_escape($s){return'"'.str_replace('"','""',$s).'"';}function
table($s){return
idf_escape($s);}function
connect(){global$b;$g=new
Min_DB;$hb=$b->credentials();if($g->connect($hb[0],$hb[1],$hb[2])){if($g->server_info>=9)$g->query("SET application_name = 'Adminer'");return$g;}return$g->error;}function
get_databases(){return
get_vals("SELECT datname FROM pg_database ORDER BY datname");}function
limit($E,$Z,$y,$B=0,$bf=" "){return" $E$Z".($y!==null?$bf."LIMIT $y".($B?" OFFSET $B":""):"");}function
limit1($E,$Z){return" $E$Z";}function
db_collation($j,$Ra){global$g;return$g->result("SHOW LC_COLLATE");}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT user");}function
tables_list(){return
get_key_vals("SELECT table_name, table_type FROM information_schema.tables WHERE table_schema = current_schema() ORDER BY table_name");}function
count_tables($i){return
array();}function
table_status($A=""){$G=array();foreach(get_rows("SELECT relname AS \"Name\", CASE relkind WHEN 'r' THEN 'table' ELSE 'view' END AS \"Engine\", pg_relation_size(oid) AS \"Data_length\", pg_total_relation_size(oid) - pg_relation_size(oid) AS \"Index_length\", obj_description(oid, 'pg_class') AS \"Comment\", relhasoids AS \"Oid\", reltuples as \"Rows\"
FROM pg_class
WHERE relkind IN ('r','v')
AND relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())".($A!=""?" AND relname = ".q($A):""))as$H)$G[$H["Name"]]=$H;return($A!=""?$G[$A]:$G);}function
is_view($P){return$P["Engine"]=="view";}function
fk_support($P){return
true;}function
fields($O){$G=array();foreach(get_rows("SELECT a.attname AS field, format_type(a.atttypid, a.atttypmod) AS full_type, d.adsrc AS default, a.attnotnull, col_description(c.oid, a.attnum) AS comment
FROM pg_class c
JOIN pg_namespace n ON c.relnamespace = n.oid
JOIN pg_attribute a ON c.oid = a.attrelid
LEFT JOIN pg_attrdef d ON c.oid = d.adrelid AND a.attnum = d.adnum
WHERE c.relname = ".q($O)."
AND n.nspname = current_schema()
AND NOT a.attisdropped
AND a.attnum > 0
ORDER BY a.attnum")as$H){ereg('(.*)(\\((.*)\\))?',$H["full_type"],$_);list(,$H["type"],,$H["length"])=$_;$H["full_type"]=$H["type"].($H["length"]?"($H[length])":"");$H["null"]=($H["attnotnull"]=="f");$H["auto_increment"]=eregi("^nextval\\(",$H["default"]);$H["privileges"]=array("insert"=>1,"select"=>1,"update"=>1);if(preg_match('~^(.*)::.+$~',$H["default"],$_))$H["default"]=($_[1][0]=="'"?idf_unescape($_[1]):$_[1]);$G[$H["field"]]=$H;}return$G;}function
indexes($O,$h=null){global$g;if(!is_object($h))$h=$g;$G=array();$wf=$h->result("SELECT oid FROM pg_class WHERE relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema()) AND relname = ".q($O));$f=get_key_vals("SELECT attnum, attname FROM pg_attribute WHERE attrelid = $wf AND attnum > 0",$h);foreach(get_rows("SELECT relname, indisunique, indisprimary, indkey FROM pg_index i, pg_class ci WHERE i.indrelid = $wf AND ci.oid = i.indexrelid",$h)as$H){$G[$H["relname"]]["type"]=($H["indisprimary"]=="t"?"PRIMARY":($H["indisunique"]=="t"?"UNIQUE":"INDEX"));$G[$H["relname"]]["columns"]=array();foreach(explode(" ",$H["indkey"])as$Cc)$G[$H["relname"]]["columns"][]=$f[$Cc];$G[$H["relname"]]["lengths"]=array();}return$G;}function
foreign_keys($O){global$Id;$G=array();foreach(get_rows("SELECT conname, pg_get_constraintdef(oid) AS definition
FROM pg_constraint
WHERE conrelid = (SELECT pc.oid FROM pg_class AS pc INNER JOIN pg_namespace AS pn ON (pn.oid = pc.relnamespace) WHERE pc.relname = ".q($O)." AND pn.nspname = current_schema())
AND contype = 'f'::char
ORDER BY conkey, conname")as$H){if(preg_match('~FOREIGN KEY\s*\((.+)\)\s*REFERENCES (.+)\((.+)\)(.*)$~iA',$H['definition'],$_)){$H['source']=array_map('trim',explode(',',$_[1]));$H['table']=$_[2];if(preg_match('~(.+)\.(.+)~',$_[2],$fd)){$H['ns']=$fd[1];$H['table']=$fd[2];}$H['target']=array_map('trim',explode(',',$_[3]));$H['on_delete']=(preg_match("~ON DELETE ($Id)~",$_[4],$fd)?$fd[1]:'NO ACTION');$H['on_update']=(preg_match("~ON UPDATE ($Id)~",$_[4],$fd)?$fd[1]:'NO ACTION');$G[$H['conname']]=$H;}}return$G;}function
view($A){global$g;return
array("select"=>$g->result("SELECT pg_get_viewdef(".q($A).")"));}function
collations(){return
array();}function
information_schema($j){return($j=="information_schema");}function
error(){global$g;$G=h($g->error);if(preg_match('~^(.*\\n)?([^\\n]*)\\n( *)\\^(\\n.*)?$~s',$G,$_))$G=$_[1].preg_replace('~((?:[^&]|&[^;]*;){'.strlen($_[3]).'})(.*)~','\\1<b>\\2</b>',$_[2]).$_[4];return
nl_br($G);}function
exact_value($W){return
q($W);}function
create_database($j,$d){return
queries("CREATE DATABASE ".idf_escape($j).($d?" ENCODING ".idf_escape($d):""));}function
drop_databases($i){global$g;$g->close();return
apply_queries("DROP DATABASE",$i,'idf_escape');}function
rename_database($A,$d){return
queries("ALTER DATABASE ".idf_escape(DB)." RENAME TO ".idf_escape($A));}function
auto_increment(){return"";}function
alter_table($O,$A,$m,$gc,$Va,$Hb,$d,$_a,$ie){$c=array();$Ce=array();foreach($m
as$l){$e=idf_escape($l[0]);$W=$l[1];if(!$W)$c[]="DROP $e";else{$jg=$W[5];unset($W[5]);if(isset($W[6])&&$l[0]=="")$W[1]=($W[1]=="bigint"?" big":" ")."serial";if($l[0]=="")$c[]=($O!=""?"ADD ":"  ").implode($W);else{if($e!=$W[0])$Ce[]="ALTER TABLE ".table($O)." RENAME $e TO $W[0]";$c[]="ALTER $e TYPE$W[1]";if(!$W[6]){$c[]="ALTER $e ".($W[3]?"SET$W[3]":"DROP DEFAULT");$c[]="ALTER $e ".($W[2]==" NULL"?"DROP NOT":"SET").$W[2];}}if($l[0]!=""||$jg!="")$Ce[]="COMMENT ON COLUMN ".table($O).".$W[0] IS ".($jg!=""?substr($jg,9):"''");}}$c=array_merge($c,$gc);if($O=="")array_unshift($Ce,"CREATE TABLE ".table($A)." (\n".implode(",\n",$c)."\n)");elseif($c)array_unshift($Ce,"ALTER TABLE ".table($O)."\n".implode(",\n",$c));if($O!=""&&$O!=$A)$Ce[]="ALTER TABLE ".table($O)." RENAME TO ".table($A);if($O!=""||$Va!="")$Ce[]="COMMENT ON TABLE ".table($A)." IS ".q($Va);if($_a!=""){}foreach($Ce
as$E){if(!queries($E))return
false;}return
true;}function
alter_indexes($O,$c){$eb=array();$wb=array();foreach($c
as$W){if($W[0]!="INDEX")$eb[]=($W[2]=="DROP"?"\nDROP CONSTRAINT ".idf_escape($W[1]):"\nADD $W[0] ".($W[0]=="PRIMARY"?"KEY ":"").$W[2]);elseif($W[2]=="DROP")$wb[]=idf_escape($W[1]);elseif(!queries("CREATE INDEX ".idf_escape($W[1]!=""?$W[1]:uniqid($O."_"))." ON ".table($O)." $W[2]"))return
false;}return((!$eb||queries("ALTER TABLE ".table($O).implode(",",$eb)))&&(!$wb||queries("DROP INDEX ".implode(", ",$wb))));}function
truncate_tables($Q){return
queries("TRUNCATE ".implode(", ",array_map('table',$Q)));return
true;}function
drop_views($Y){return
queries("DROP VIEW ".implode(", ",array_map('table',$Y)));}function
drop_tables($Q){return
queries("DROP TABLE ".implode(", ",array_map('table',$Q)));}function
move_tables($Q,$Y,$Bf){foreach($Q
as$O){if(!queries("ALTER TABLE ".table($O)." SET SCHEMA ".idf_escape($Bf)))return
false;}foreach($Y
as$O){if(!queries("ALTER VIEW ".table($O)." SET SCHEMA ".idf_escape($Bf)))return
false;}return
true;}function
trigger($A){if($A=="")return
array("Statement"=>"EXECUTE PROCEDURE ()");$I=get_rows('SELECT trigger_name AS "Trigger", condition_timing AS "Timing", event_manipulation AS "Event", \'FOR EACH \' || action_orientation AS "Type", action_statement AS "Statement" FROM information_schema.triggers WHERE event_object_table = '.q($_GET["trigger"]).' AND trigger_name = '.q($A));return
reset($I);}function
triggers($O){$G=array();foreach(get_rows("SELECT * FROM information_schema.triggers WHERE event_object_table = ".q($O))as$H)$G[$H["trigger_name"]]=array($H["condition_timing"],$H["event_manipulation"]);return$G;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW","FOR EACH STATEMENT"),);}function
routines(){return
get_rows('SELECT p.proname AS "ROUTINE_NAME", p.proargtypes AS "ROUTINE_TYPE", pg_catalog.format_type(p.prorettype, NULL) AS "DTD_IDENTIFIER"
FROM pg_catalog.pg_namespace n
JOIN pg_catalog.pg_proc p ON p.pronamespace = n.oid
WHERE n.nspname = current_schema()
ORDER BY p.proname');}function
routine_languages(){return
get_vals("SELECT langname FROM pg_catalog.pg_language");}function
begin(){return
queries("BEGIN");}function
insert_into($O,$L){return
queries("INSERT INTO ".table($O).($L?" (".implode(", ",array_keys($L)).")\nVALUES (".implode(", ",$L).")":"DEFAULT VALUES"));}function
insert_update($O,$L,$ue){global$g;$eg=array();$Z=array();foreach($L
as$w=>$W){$eg[]="$w = $W";if(isset($ue[idf_unescape($w)]))$Z[]="$w = $W";}return($Z&&queries("UPDATE ".table($O)." SET ".implode(", ",$eg)." WHERE ".implode(" AND ",$Z))&&$g->affected_rows)||queries("INSERT INTO ".table($O)." (".implode(", ",array_keys($L)).") VALUES (".implode(", ",$L).")");}function
last_id(){return
0;}function
explain($g,$E){return$g->query("EXPLAIN $E");}function
found_rows($P,$Z){global$g;if(ereg(" rows=([0-9]+)",$g->result("EXPLAIN SELECT * FROM ".idf_escape($P["Name"]).($Z?" WHERE ".implode(" AND ",$Z):"")),$Ke))return$Ke[1];return
false;}function
types(){return
get_vals("SELECT typname
FROM pg_type
WHERE typnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())
AND typtype IN ('b','d','e')
AND typelem = 0");}function
schemas(){return
get_vals("SELECT nspname FROM pg_namespace ORDER BY nspname");}function
get_schema(){global$g;return$g->result("SELECT current_schema()");}function
set_schema($We){global$g,$T,$nf;$G=$g->query("SET search_path TO ".idf_escape($We));foreach(types()as$S){if(!isset($T[$S])){$T[$S]=0;$nf['User types'][]=$S;}}return$G;}function
use_sql($lb){return"\connect ".idf_escape($lb);}function
show_variables(){return
get_key_vals("SHOW ALL");}function
process_list(){return
get_rows("SELECT * FROM pg_stat_activity ORDER BY procpid");}function
show_status(){}function
support($ac){return
ereg('^(comment|view|scheme|processlist|sequence|trigger|type|variables|drop_col)$',$ac);}$v="pgsql";$T=array();$nf=array();foreach(array('Numbers'=>array("smallint"=>5,"integer"=>10,"bigint"=>19,"boolean"=>1,"numeric"=>0,"real"=>7,"double precision"=>16,"money"=>20),'Date and time'=>array("date"=>13,"time"=>17,"timestamp"=>20,"interval"=>0),'Strings'=>array("character"=>0,"character varying"=>0,"text"=>0,"tsquery"=>0,"tsvector"=>0,"uuid"=>0,"xml"=>0),'Binary'=>array("bit"=>0,"bit varying"=>0,"bytea"=>0),'Network'=>array("cidr"=>43,"inet"=>43,"macaddr"=>17,"txid_snapshot"=>0),'Geometry'=>array("box"=>0,"circle"=>0,"line"=>0,"lseg"=>0,"path"=>0,"point"=>0,"polygon"=>0),)as$w=>$W){$T+=$W;$nf[$w]=array_keys($W);}$dg=array();$Md=array("=","<",">","<=",">=","!=","~","!~","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$pc=array("char_length","lower","round","to_hex","to_timestamp","upper");$tc=array("avg","count","count distinct","max","min","sum");$Ab=array(array("char"=>"md5","date|time"=>"now",),array("int|numeric|real|money"=>"+/-","date|time"=>"+ interval/- interval","char|text"=>"||",));}$vb["oracle"]="Oracle";if(isset($_GET["oracle"])){$re=array("OCI8","PDO_OCI");define("DRIVER","oracle");if(extension_loaded("oci8")){class
Min_DB{var$extension="oci8",$_link,$_result,$server_info,$affected_rows,$error;function
_error($Kb,$k){if(ini_bool("html_errors"))$k=html_entity_decode(strip_tags($k));$k=ereg_replace('^[^:]*: ','',$k);$this->error=$k;}function
connect($K,$U,$C){$this->_link=@oci_new_connect($U,$C,$K,"AL32UTF8");if($this->_link){$this->server_info=oci_server_version($this->_link);return
true;}$k=oci_error();$this->error=$k["message"];return
false;}function
quote($M){return"'".str_replace("'","''",$M)."'";}function
select_db($lb){return
true;}function
query($E,$Xf=false){$F=oci_parse($this->_link,$E);$this->error="";if(!$F){$k=oci_error($this->_link);$this->error=$k["message"];return
false;}set_error_handler(array($this,'_error'));$G=@oci_execute($F);restore_error_handler();if($G){if(oci_num_fields($F))return
new
Min_Result($F);$this->affected_rows=oci_num_rows($F);}return$G;}function
multi_query($E){return$this->_result=$this->query($E);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($E,$l=1){$F=$this->query($E);if(!is_object($F)||!oci_fetch($F->_result))return
false;return
oci_result($F->_result,$l);}}class
Min_Result{var$_result,$_offset=1,$num_rows;function
Min_Result($F){$this->_result=$F;}function
_convert($H){foreach((array)$H
as$w=>$W){if(is_a($W,'OCI-Lob'))$H[$w]=$W->load();}return$H;}function
fetch_assoc(){return$this->_convert(oci_fetch_assoc($this->_result));}function
fetch_row(){return$this->_convert(oci_fetch_row($this->_result));}function
fetch_field(){$e=$this->_offset++;$G=new
stdClass;$G->name=oci_field_name($this->_result,$e);$G->orgname=$G->name;$G->type=oci_field_type($this->_result,$e);$G->charsetnr=(ereg("raw|blob|bfile",$G->type)?63:0);return$G;}function
__destruct(){oci_free_statement($this->_result);}}}elseif(extension_loaded("pdo_oci")){class
Min_DB
extends
Min_PDO{var$extension="PDO_OCI";function
connect($K,$U,$C){$this->dsn("oci:dbname=//$K;charset=AL32UTF8",$U,$C);return
true;}function
select_db($lb){return
true;}}}function
idf_escape($s){return'"'.str_replace('"','""',$s).'"';}function
table($s){return
idf_escape($s);}function
connect(){global$b;$g=new
Min_DB;$hb=$b->credentials();if($g->connect($hb[0],$hb[1],$hb[2]))return$g;return$g->error;}function
get_databases(){return
get_vals("SELECT tablespace_name FROM user_tablespaces");}function
limit($E,$Z,$y,$B=0,$bf=" "){return($B?" * FROM (SELECT t.*, rownum AS rnum FROM (SELECT $E$Z) t WHERE rownum <= ".($y+$B).") WHERE rnum > $B":($y!==null?" * FROM (SELECT $E$Z) WHERE rownum <= ".($y+$B):" $E$Z"));}function
limit1($E,$Z){return" $E$Z";}function
db_collation($j,$Ra){global$g;return$g->result("SELECT value FROM nls_database_parameters WHERE parameter = 'NLS_CHARACTERSET'");}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT USER FROM DUAL");}function
tables_list(){return
get_key_vals("SELECT table_name, 'table' FROM all_tables WHERE tablespace_name = ".q(DB)."
UNION SELECT view_name, 'view' FROM user_views");}function
count_tables($i){return
array();}function
table_status($A=""){$G=array();$Ye=q($A);foreach(get_rows('SELECT table_name "Name", \'table\' "Engine", avg_row_len * num_rows "Data_length", num_rows "Rows" FROM all_tables WHERE tablespace_name = '.q(DB).($A!=""?" AND table_name = $Ye":"")."
UNION SELECT view_name, 'view', 0, 0 FROM user_views".($A!=""?" WHERE view_name = $Ye":""))as$H){if($A!="")return$H;$G[$H["Name"]]=$H;}return$G;}function
is_view($P){return$P["Engine"]=="view";}function
fk_support($P){return
true;}function
fields($O){$G=array();foreach(get_rows("SELECT * FROM all_tab_columns WHERE table_name = ".q($O)." ORDER BY column_id")as$H){$S=$H["DATA_TYPE"];$x="$H[DATA_PRECISION],$H[DATA_SCALE]";if($x==",")$x=$H["DATA_LENGTH"];$G[$H["COLUMN_NAME"]]=array("field"=>$H["COLUMN_NAME"],"full_type"=>$S.($x?"($x)":""),"type"=>strtolower($S),"length"=>$x,"default"=>$H["DATA_DEFAULT"],"null"=>($H["NULLABLE"]=="Y"),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}return$G;}function
indexes($O,$h=null){$G=array();foreach(get_rows("SELECT uic.*, uc.constraint_type
FROM user_ind_columns uic
LEFT JOIN user_constraints uc ON uic.index_name = uc.constraint_name AND uic.table_name = uc.table_name
WHERE uic.table_name = ".q($O)."
ORDER BY uc.constraint_type, uic.column_position",$h)as$H){$G[$H["INDEX_NAME"]]["type"]=($H["CONSTRAINT_TYPE"]=="P"?"PRIMARY":($H["CONSTRAINT_TYPE"]=="U"?"UNIQUE":"INDEX"));$G[$H["INDEX_NAME"]]["columns"][]=$H["COLUMN_NAME"];$G[$H["INDEX_NAME"]]["lengths"][]=($H["CHAR_LENGTH"]&&$H["CHAR_LENGTH"]!=$H["COLUMN_LENGTH"]?$H["CHAR_LENGTH"]:null);}return$G;}function
view($A){$I=get_rows('SELECT text "select" FROM user_views WHERE view_name = '.q($A));return
reset($I);}function
collations(){return
array();}function
information_schema($j){return
false;}function
error(){global$g;return
h($g->error);}function
exact_value($W){return
q($W);}function
explain($g,$E){$g->query("EXPLAIN PLAN FOR $E");return$g->query("SELECT * FROM plan_table");}function
found_rows($P,$Z){}function
alter_table($O,$A,$m,$gc,$Va,$Hb,$d,$_a,$ie){$c=$wb=array();foreach($m
as$l){$W=$l[1];if($W&&$l[0]!=""&&idf_escape($l[0])!=$W[0])queries("ALTER TABLE ".table($O)." RENAME COLUMN ".idf_escape($l[0])." TO $W[0]");if($W)$c[]=($O!=""?($l[0]!=""?"MODIFY (":"ADD ("):"  ").implode($W).($O!=""?")":"");else$wb[]=idf_escape($l[0]);}if($O=="")return
queries("CREATE TABLE ".table($A)." (\n".implode(",\n",$c)."\n)");return(!$c||queries("ALTER TABLE ".table($O)."\n".implode("\n",$c)))&&(!$wb||queries("ALTER TABLE ".table($O)." DROP (".implode(", ",$wb).")"))&&($O==$A||queries("ALTER TABLE ".table($O)." RENAME TO ".table($A)));}function
foreign_keys($O){return
array();}function
truncate_tables($Q){return
apply_queries("TRUNCATE TABLE",$Q);}function
drop_views($Y){return
apply_queries("DROP VIEW",$Y);}function
drop_tables($Q){return
apply_queries("DROP TABLE",$Q);}function
begin(){return
true;}function
insert_into($O,$L){return
queries("INSERT INTO ".table($O)." (".implode(", ",array_keys($L)).")\nVALUES (".implode(", ",$L).")");}function
last_id(){return
0;}function
schemas(){return
get_vals("SELECT DISTINCT owner FROM dba_segments WHERE owner IN (SELECT username FROM dba_users WHERE default_tablespace NOT IN ('SYSTEM','SYSAUX'))");}function
get_schema(){global$g;return$g->result("SELECT sys_context('USERENV', 'SESSION_USER') FROM dual");}function
set_schema($Xe){global$g;return$g->query("ALTER SESSION SET CURRENT_SCHEMA = ".idf_escape($Xe));}function
show_variables(){return
get_key_vals('SELECT name, display_value FROM v$parameter');}function
process_list(){return
get_rows('SELECT sess.process AS "process", sess.username AS "user", sess.schemaname AS "schema", sess.status AS "status", sess.wait_class AS "wait_class", sess.seconds_in_wait AS "seconds_in_wait", sql.sql_text AS "sql_text", sess.machine AS "machine", sess.port AS "port"
FROM v$session sess LEFT OUTER JOIN v$sql sql
ON sql.sql_id = sess.sql_id
WHERE sess.type = \'USER\'
ORDER BY PROCESS
');}function
show_status(){$I=get_rows('SELECT * FROM v$instance');return
reset($I);}function
support($ac){return
ereg("view|scheme|processlist|drop_col|variables|status",$ac);}$v="oracle";$T=array();$nf=array();foreach(array('Numbers'=>array("number"=>38,"binary_float"=>12,"binary_double"=>21),'Date and time'=>array("date"=>10,"timestamp"=>29,"interval year"=>12,"interval day"=>28),'Strings'=>array("char"=>2000,"varchar2"=>4000,"nchar"=>2000,"nvarchar2"=>4000,"clob"=>4294967295,"nclob"=>4294967295),'Binary'=>array("raw"=>2000,"long raw"=>2147483648,"blob"=>4294967295,"bfile"=>4294967296),)as$w=>$W){$T+=$W;$nf[$w]=array_keys($W);}$dg=array();$Md=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","");$pc=array("length","lower","round","upper");$tc=array("avg","count","count distinct","max","min","sum");$Ab=array(array("date"=>"current_date","timestamp"=>"current_timestamp",),array("number|float|double"=>"+/-","date|timestamp"=>"+ interval/- interval","char|clob"=>"||",));}$vb["mssql"]="MS SQL";if(isset($_GET["mssql"])){$re=array("SQLSRV","MSSQL");define("DRIVER","mssql");if(extension_loaded("sqlsrv")){class
Min_DB{var$extension="sqlsrv",$_link,$_result,$server_info,$affected_rows,$error;function
_get_error(){$this->error="";foreach(sqlsrv_errors()as$k)$this->error.="$k[message]\n";$this->error=rtrim($this->error);}function
connect($K,$U,$C){$this->_link=@sqlsrv_connect($K,array("UID"=>$U,"PWD"=>$C,"CharacterSet"=>"UTF-8"));if($this->_link){$Dc=sqlsrv_server_info($this->_link);$this->server_info=$Dc['SQLServerVersion'];}else$this->_get_error();return(bool)$this->_link;}function
quote($M){return"'".str_replace("'","''",$M)."'";}function
select_db($lb){return$this->query("USE $lb");}function
query($E,$Xf=false){$F=sqlsrv_query($this->_link,$E);$this->error="";if(!$F){$this->_get_error();return
false;}return$this->store_result($F);}function
multi_query($E){$this->_result=sqlsrv_query($this->_link,$E);$this->error="";if(!$this->_result){$this->_get_error();return
false;}return
true;}function
store_result($F=null){if(!$F)$F=$this->_result;if(sqlsrv_field_metadata($F))return
new
Min_Result($F);$this->affected_rows=sqlsrv_rows_affected($F);return
true;}function
next_result(){return
sqlsrv_next_result($this->_result);}function
result($E,$l=0){$F=$this->query($E);if(!is_object($F))return
false;$H=$F->fetch_row();return$H[$l];}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($F){$this->_result=$F;}function
_convert($H){foreach((array)$H
as$w=>$W){if(is_a($W,'DateTime'))$H[$w]=$W->format("Y-m-d H:i:s");}return$H;}function
fetch_assoc(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_ASSOC,SQLSRV_SCROLL_NEXT));}function
fetch_row(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_NUMERIC,SQLSRV_SCROLL_NEXT));}function
fetch_field(){if(!$this->_fields)$this->_fields=sqlsrv_field_metadata($this->_result);$l=$this->_fields[$this->_offset++];$G=new
stdClass;$G->name=$l["Name"];$G->orgname=$l["Name"];$G->type=($l["Type"]==1?254:0);return$G;}function
seek($B){for($q=0;$q<$B;$q++)sqlsrv_fetch($this->_result);}function
__destruct(){sqlsrv_free_stmt($this->_result);}}}elseif(extension_loaded("mssql")){class
Min_DB{var$extension="MSSQL",$_link,$_result,$server_info,$affected_rows,$error;function
connect($K,$U,$C){$this->_link=@mssql_connect($K,$U,$C);if($this->_link){$F=$this->query("SELECT SERVERPROPERTY('ProductLevel'), SERVERPROPERTY('Edition')");$H=$F->fetch_row();$this->server_info=$this->result("sp_server_info 2",2)." [$H[0]] $H[1]";}else$this->error=mssql_get_last_message();return(bool)$this->_link;}function
quote($M){return"'".str_replace("'","''",$M)."'";}function
select_db($lb){return
mssql_select_db($lb);}function
query($E,$Xf=false){$F=mssql_query($E,$this->_link);$this->error="";if(!$F){$this->error=mssql_get_last_message();return
false;}if($F===true){$this->affected_rows=mssql_rows_affected($this->_link);return
true;}return
new
Min_Result($F);}function
multi_query($E){return$this->_result=$this->query($E);}function
store_result(){return$this->_result;}function
next_result(){return
mssql_next_result($this->_result);}function
result($E,$l=0){$F=$this->query($E);if(!is_object($F))return
false;return
mssql_result($F->_result,0,$l);}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($F){$this->_result=$F;$this->num_rows=mssql_num_rows($F);}function
fetch_assoc(){return
mssql_fetch_assoc($this->_result);}function
fetch_row(){return
mssql_fetch_row($this->_result);}function
num_rows(){return
mssql_num_rows($this->_result);}function
fetch_field(){$G=mssql_fetch_field($this->_result);$G->orgtable=$G->table;$G->orgname=$G->name;return$G;}function
seek($B){mssql_data_seek($this->_result,$B);}function
__destruct(){mssql_free_result($this->_result);}}}function
idf_escape($s){return"[".str_replace("]","]]",$s)."]";}function
table($s){return($_GET["ns"]!=""?idf_escape($_GET["ns"]).".":"").idf_escape($s);}function
connect(){global$b;$g=new
Min_DB;$hb=$b->credentials();if($g->connect($hb[0],$hb[1],$hb[2]))return$g;return$g->error;}function
get_databases(){return
get_vals("EXEC sp_databases");}function
limit($E,$Z,$y,$B=0,$bf=" "){return($y!==null?" TOP (".($y+$B).")":"")." $E$Z";}function
limit1($E,$Z){return
limit($E,$Z,1);}function
db_collation($j,$Ra){global$g;return$g->result("SELECT collation_name FROM sys.databases WHERE name =  ".q($j));}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT SUSER_NAME()");}function
tables_list(){return
get_key_vals("SELECT name, type_desc FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ORDER BY name");}function
count_tables($i){global$g;$G=array();foreach($i
as$j){$g->select_db($j);$G[$j]=$g->result("SELECT COUNT(*) FROM INFORMATION_SCHEMA.TABLES");}return$G;}function
table_status($A=""){$G=array();foreach(get_rows("SELECT name AS Name, type_desc AS Engine FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V')".($A!=""?" AND name = ".q($A):""))as$H){if($A!="")return$H;$G[$H["Name"]]=$H;}return$G;}function
is_view($P){return$P["Engine"]=="VIEW";}function
fk_support($P){return
true;}function
fields($O){$G=array();foreach(get_rows("SELECT c.*, t.name type, d.definition [default]
FROM sys.all_columns c
JOIN sys.all_objects o ON c.object_id = o.object_id
JOIN sys.types t ON c.user_type_id = t.user_type_id
LEFT JOIN sys.default_constraints d ON c.default_object_id = d.parent_column_id
WHERE o.schema_id = SCHEMA_ID(".q(get_schema()).") AND o.type IN ('S', 'U', 'V') AND o.name = ".q($O))as$H){$S=$H["type"];$x=(ereg("char|binary",$S)?$H["max_length"]:($S=="decimal"?"$H[precision],$H[scale]":""));$G[$H["name"]]=array("field"=>$H["name"],"full_type"=>$S.($x?"($x)":""),"type"=>$S,"length"=>$x,"default"=>$H["default"],"null"=>$H["is_nullable"],"auto_increment"=>$H["is_identity"],"collation"=>$H["collation_name"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"primary"=>$H["is_identity"],);}return$G;}function
indexes($O,$h=null){$G=array();foreach(get_rows("SELECT i.name, key_ordinal, is_unique, is_primary_key, c.name AS column_name
FROM sys.indexes i
INNER JOIN sys.index_columns ic ON i.object_id = ic.object_id AND i.index_id = ic.index_id
INNER JOIN sys.columns c ON ic.object_id = c.object_id AND ic.column_id = c.column_id
WHERE OBJECT_NAME(i.object_id) = ".q($O),$h)as$H){$G[$H["name"]]["type"]=($H["is_primary_key"]?"PRIMARY":($H["is_unique"]?"UNIQUE":"INDEX"));$G[$H["name"]]["lengths"]=array();$G[$H["name"]]["columns"][$H["key_ordinal"]]=$H["column_name"];}return$G;}function
view($A){global$g;return
array("select"=>preg_replace('~^(?:[^[]|\\[[^]]*])*\\s+AS\\s+~isU','',$g->result("SELECT VIEW_DEFINITION FROM INFORMATION_SCHEMA.VIEWS WHERE TABLE_SCHEMA = SCHEMA_NAME() AND TABLE_NAME = ".q($A))));}function
collations(){$G=array();foreach(get_vals("SELECT name FROM fn_helpcollations()")as$d)$G[ereg_replace("_.*","",$d)][]=$d;return$G;}function
information_schema($j){return
false;}function
error(){global$g;return
nl_br(h(preg_replace('~^(\\[[^]]*])+~m','',$g->error)));}function
exact_value($W){return
q($W);}function
create_database($j,$d){return
queries("CREATE DATABASE ".idf_escape($j).(eregi('^[a-z0-9_]+$',$d)?" COLLATE $d":""));}function
drop_databases($i){return
queries("DROP DATABASE ".implode(", ",array_map('idf_escape',$i)));}function
rename_database($A,$d){if(eregi('^[a-z0-9_]+$',$d))queries("ALTER DATABASE ".idf_escape(DB)." COLLATE $d");queries("ALTER DATABASE ".idf_escape(DB)." MODIFY NAME = ".idf_escape($A));return
true;}function
auto_increment(){return" IDENTITY".($_POST["Auto_increment"]!=""?"(".(+$_POST["Auto_increment"]).",1)":"")." PRIMARY KEY";}function
alter_table($O,$A,$m,$gc,$Va,$Hb,$d,$_a,$ie){$c=array();foreach($m
as$l){$e=idf_escape($l[0]);$W=$l[1];if(!$W)$c["DROP"][]=" COLUMN $e";else{$W[1]=preg_replace("~( COLLATE )'(\\w+)'~","\\1\\2",$W[1]);if($l[0]=="")$c["ADD"][]="\n  ".implode("",$W).($O==""?substr($gc[$W[0]],16+strlen($W[0])):"");else{unset($W[6]);if($e!=$W[0])queries("EXEC sp_rename ".q(table($O).".$e").", ".q(idf_unescape($W[0])).", 'COLUMN'");$c["ALTER COLUMN ".implode("",$W)][]="";}}}if($O=="")return
queries("CREATE TABLE ".table($A)." (".implode(",",(array)$c["ADD"])."\n)");if($O!=$A)queries("EXEC sp_rename ".q(table($O)).", ".q($A));if($gc)$c[""]=$gc;foreach($c
as$w=>$W){if(!queries("ALTER TABLE ".idf_escape($A)." $w".implode(",",$W)))return
false;}return
true;}function
alter_indexes($O,$c){$t=array();$wb=array();foreach($c
as$W){if($W[2]=="DROP"){if($W[0]=="PRIMARY")$wb[]=idf_escape($W[1]);else$t[]=idf_escape($W[1])." ON ".table($O);}elseif(!queries(($W[0]!="PRIMARY"?"CREATE $W[0] ".($W[0]!="INDEX"?"INDEX ":"").idf_escape($W[1]!=""?$W[1]:uniqid($O."_"))." ON ".table($O):"ALTER TABLE ".table($O)." ADD PRIMARY KEY")." $W[2]"))return
false;}return(!$t||queries("DROP INDEX ".implode(", ",$t)))&&(!$wb||queries("ALTER TABLE ".table($O)." DROP ".implode(", ",$wb)));}function
begin(){return
queries("BEGIN TRANSACTION");}function
insert_into($O,$L){return
queries("INSERT INTO ".table($O).($L?" (".implode(", ",array_keys($L)).")\nVALUES (".implode(", ",$L).")":"DEFAULT VALUES"));}function
insert_update($O,$L,$ue){$eg=array();$Z=array();foreach($L
as$w=>$W){$eg[]="$w = $W";if(isset($ue[idf_unescape($w)]))$Z[]="$w = $W";}return
queries("MERGE ".table($O)." USING (VALUES(".implode(", ",$L).")) AS source (c".implode(", c",range(1,count($L))).") ON ".implode(" AND ",$Z)." WHEN MATCHED THEN UPDATE SET ".implode(", ",$eg)." WHEN NOT MATCHED THEN INSERT (".implode(", ",array_keys($L)).") VALUES (".implode(", ",$L).");");}function
last_id(){global$g;return$g->result("SELECT SCOPE_IDENTITY()");}function
explain($g,$E){$g->query("SET SHOWPLAN_ALL ON");$G=$g->query($E);$g->query("SET SHOWPLAN_ALL OFF");return$G;}function
found_rows($P,$Z){}function
foreign_keys($O){$G=array();foreach(get_rows("EXEC sp_fkeys @fktable_name = ".q($O))as$H){$n=&$G[$H["FK_NAME"]];$n["table"]=$H["PKTABLE_NAME"];$n["source"][]=$H["FKCOLUMN_NAME"];$n["target"][]=$H["PKCOLUMN_NAME"];}return$G;}function
truncate_tables($Q){return
apply_queries("TRUNCATE TABLE",$Q);}function
drop_views($Y){return
queries("DROP VIEW ".implode(", ",array_map('table',$Y)));}function
drop_tables($Q){return
queries("DROP TABLE ".implode(", ",array_map('table',$Q)));}function
move_tables($Q,$Y,$Bf){return
apply_queries("ALTER SCHEMA ".idf_escape($Bf)." TRANSFER",array_merge($Q,$Y));}function
trigger($A){if($A=="")return
array();$I=get_rows("SELECT s.name [Trigger],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(s.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(s.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing],
c.text
FROM sysobjects s
JOIN syscomments c ON s.id = c.id
WHERE s.xtype = 'TR' AND s.name = ".q($A));$G=reset($I);if($G)$G["Statement"]=preg_replace('~^.+\\s+AS\\s+~isU','',$G["text"]);return$G;}function
triggers($O){$G=array();foreach(get_rows("SELECT sys1.name,
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing]
FROM sysobjects sys1
JOIN sysobjects sys2 ON sys1.parent_obj = sys2.id
WHERE sys1.xtype = 'TR' AND sys2.name = ".q($O))as$H)$G[$H["name"]]=array($H["Timing"],$H["Event"]);return$G;}function
trigger_options(){return
array("Timing"=>array("AFTER","INSTEAD OF"),"Type"=>array("AS"),);}function
schemas(){return
get_vals("SELECT name FROM sys.schemas");}function
get_schema(){global$g;if($_GET["ns"]!="")return$_GET["ns"];return$g->result("SELECT SCHEMA_NAME()");}function
set_schema($We){return
true;}function
use_sql($lb){return"USE ".idf_escape($lb);}function
show_variables(){return
array();}function
show_status(){return
array();}function
support($ac){return
ereg('^(scheme|trigger|view|drop_col)$',$ac);}$v="mssql";$T=array();$nf=array();foreach(array('Numbers'=>array("tinyint"=>3,"smallint"=>5,"int"=>10,"bigint"=>20,"bit"=>1,"decimal"=>0,"real"=>12,"float"=>53,"smallmoney"=>10,"money"=>20),'Date and time'=>array("date"=>10,"smalldatetime"=>19,"datetime"=>19,"datetime2"=>19,"time"=>8,"datetimeoffset"=>10),'Strings'=>array("char"=>8000,"varchar"=>8000,"text"=>2147483647,"nchar"=>4000,"nvarchar"=>4000,"ntext"=>1073741823),'Binary'=>array("binary"=>8000,"varbinary"=>8000,"image"=>2147483647),)as$w=>$W){$T+=$W;$nf[$w]=array_keys($W);}$dg=array();$Md=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$pc=array("len","lower","round","upper");$tc=array("avg","count","count distinct","max","min","sum");$Ab=array(array("date|time"=>"getdate",),array("int|decimal|real|float|money|datetime"=>"+/-","char|text"=>"+",));}$vb=array("server"=>"MySQL")+$vb;if(!defined("DRIVER")){$re=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($K,$U,$C){mysqli_report(MYSQLI_REPORT_OFF);list($xc,$ne)=explode(":",$K,2);$G=@$this->real_connect(($K!=""?$xc:ini_get("mysqli.default_host")),($K.$U!=""?$U:ini_get("mysqli.default_user")),($K.$U.$C!=""?$C:ini_get("mysqli.default_pw")),null,(is_numeric($ne)?$ne:ini_get("mysqli.default_port")),(!is_numeric($ne)?$ne:null));if($G){if(method_exists($this,'set_charset'))$this->set_charset("utf8");else$this->query("SET NAMES utf8");}return$G;}function
result($E,$l=0){$F=$this->query($E);if(!$F)return
false;$H=$F->fetch_array();return$H[$l];}function
quote($M){return"'".$this->escape_string($M)."'";}}}elseif(extension_loaded("mysql")&&!(ini_get("sql.safe_mode")&&extension_loaded("pdo_mysql"))){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$error,$_link,$_result;function
connect($K,$U,$C){$this->_link=@mysql_connect(($K!=""?$K:ini_get("mysql.default_host")),("$K$U"!=""?$U:ini_get("mysql.default_user")),("$K$U$C"!=""?$C:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset'))mysql_set_charset("utf8",$this->_link);else$this->query("SET NAMES utf8");}else$this->error=mysql_error();return(bool)$this->_link;}function
quote($M){return"'".mysql_real_escape_string($M,$this->_link)."'";}function
select_db($lb){return
mysql_select_db($lb,$this->_link);}function
query($E,$Xf=false){$F=@($Xf?mysql_unbuffered_query($E,$this->_link):mysql_query($E,$this->_link));$this->error="";if(!$F){$this->error=mysql_error($this->_link);return
false;}if($F===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($F);}function
multi_query($E){return$this->_result=$this->query($E);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($E,$l=0){$F=$this->query($E);if(!$F||!$F->num_rows)return
false;return
mysql_result($F->_result,0,$l);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
Min_Result($F){$this->_result=$F;$this->num_rows=mysql_num_rows($F);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$G=mysql_fetch_field($this->_result,$this->_offset++);$G->orgtable=$G->table;$G->orgname=$G->name;$G->charsetnr=($G->blob?63:0);return$G;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($K,$U,$C){$this->dsn("mysql:host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$K)),$U,$C);$this->query("SET NAMES utf8");return
true;}function
select_db($lb){return$this->query("USE ".idf_escape($lb));}function
query($E,$Xf=false){$this->setAttribute(1000,!$Xf);return
parent::query($E,$Xf);}}}function
idf_escape($s){return"`".str_replace("`","``",$s)."`";}function
table($s){return
idf_escape($s);}function
connect(){global$b;$g=new
Min_DB;$hb=$b->credentials();if($g->connect($hb[0],$hb[1],$hb[2])){$g->query("SET sql_quote_show_create = 1, autocommit = 1");return$g;}$G=$g->error;if(function_exists('iconv')&&!is_utf8($G)&&strlen($Ue=iconv("windows-1250","utf-8",$G))>strlen($G))$G=$Ue;return$G;}function
get_databases($fc=true){global$g;$G=&get_session("dbs");if($G===null){if($fc){restart_session();ob_flush();flush();}$G=get_vals($g->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");}return$G;}function
limit($E,$Z,$y,$B=0,$bf=" "){return" $E$Z".($y!==null?$bf."LIMIT $y".($B?" OFFSET $B":""):"");}function
limit1($E,$Z){return
limit($E,$Z,1);}function
db_collation($j,$Ra){global$g;$G=null;$eb=$g->result("SHOW CREATE DATABASE ".idf_escape($j),1);if(preg_match('~ COLLATE ([^ ]+)~',$eb,$_))$G=$_[1];elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$eb,$_))$G=$Ra[$_[1]][-1];return$G;}function
engines(){$G=array();foreach(get_rows("SHOW ENGINES")as$H){if(ereg("YES|DEFAULT",$H["Support"]))$G[]=$H["Engine"];}return$G;}function
logged_user(){global$g;return$g->result("SELECT USER()");}function
tables_list(){global$g;return
get_key_vals("SHOW".($g->server_info>=5?" FULL":"")." TABLES");}function
count_tables($i){$G=array();foreach($i
as$j)$G[$j]=count(get_vals("SHOW TABLES IN ".idf_escape($j)));return$G;}function
table_status($A=""){$G=array();foreach(get_rows("SHOW TABLE STATUS".($A!=""?" LIKE ".q(addcslashes($A,"%_")):""))as$H){if($H["Engine"]=="InnoDB")$H["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$H["Comment"]);if(!isset($H["Rows"]))$H["Comment"]="";if($A!="")return$H;$G[$H["Name"]]=$H;}return$G;}function
is_view($P){return!isset($P["Rows"]);}function
fk_support($P){return
eregi("InnoDB|IBMDB2I",$P["Engine"]);}function
fields($O){$G=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($O))as$H){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$H["Type"],$_);$G[$H["Field"]]=array("field"=>$H["Field"],"full_type"=>$H["Type"],"type"=>$_[1],"length"=>$_[2],"unsigned"=>ltrim($_[3].$_[4]),"default"=>($H["Default"]!=""||ereg("char",$_[1])?$H["Default"]:null),"null"=>($H["Null"]=="YES"),"auto_increment"=>($H["Extra"]=="auto_increment"),"on_update"=>(eregi('^on update (.+)',$H["Extra"],$_)?$_[1]:""),"collation"=>$H["Collation"],"privileges"=>array_flip(explode(",",$H["Privileges"])),"comment"=>$H["Comment"],"primary"=>($H["Key"]=="PRI"),);}return$G;}function
indexes($O,$h=null){$G=array();foreach(get_rows("SHOW INDEX FROM ".table($O),$h)as$H){$G[$H["Key_name"]]["type"]=($H["Key_name"]=="PRIMARY"?"PRIMARY":($H["Index_type"]=="FULLTEXT"?"FULLTEXT":($H["Non_unique"]?"INDEX":"UNIQUE")));$G[$H["Key_name"]]["columns"][]=$H["Column_name"];$G[$H["Key_name"]]["lengths"][]=$H["Sub_part"];}return$G;}function
foreign_keys($O){global$g,$Id;static$le='`(?:[^`]|``)+`';$G=array();$fb=$g->result("SHOW CREATE TABLE ".table($O),1);if($fb){preg_match_all("~CONSTRAINT ($le) FOREIGN KEY \\(((?:$le,? ?)+)\\) REFERENCES ($le)(?:\\.($le))? \\(((?:$le,? ?)+)\\)(?: ON DELETE ($Id))?(?: ON UPDATE ($Id))?~",$fb,$gd,PREG_SET_ORDER);foreach($gd
as$_){preg_match_all("~$le~",$_[2],$gf);preg_match_all("~$le~",$_[5],$Bf);$G[idf_unescape($_[1])]=array("db"=>idf_unescape($_[4]!=""?$_[3]:$_[4]),"table"=>idf_unescape($_[4]!=""?$_[4]:$_[3]),"source"=>array_map('idf_unescape',$gf[0]),"target"=>array_map('idf_unescape',$Bf[0]),"on_delete"=>($_[6]?$_[6]:"RESTRICT"),"on_update"=>($_[7]?$_[7]:"RESTRICT"),);}}return$G;}function
view($A){global$g;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$g->result("SHOW CREATE VIEW ".table($A),1)));}function
collations(){$G=array();foreach(get_rows("SHOW COLLATION")as$H){if($H["Default"])$G[$H["Charset"]][-1]=$H["Collation"];else$G[$H["Charset"]][]=$H["Collation"];}ksort($G);foreach($G
as$w=>$W)asort($G[$w]);return$G;}function
information_schema($j){global$g;return($g->server_info>=5&&$j=="information_schema");}function
error(){global$g;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$g->error));}function
error_line(){global$g;if(ereg(' at line ([0-9]+)$',$g->error,$Ke))return$Ke[1]-1;}function
exact_value($W){return
q($W)." COLLATE utf8_bin";}function
create_database($j,$d){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($j).($d?" COLLATE ".q($d):""));}function
drop_databases($i){set_session("dbs",null);return
apply_queries("DROP DATABASE",$i,'idf_escape');}function
rename_database($A,$d){if(create_database($A,$d)){$Le=array();foreach(tables_list()as$O=>$S)$Le[]=table($O)." TO ".idf_escape($A).".".table($O);if(!$Le||queries("RENAME TABLE ".implode(", ",$Le))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$Aa=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$t){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$t["columns"],true)){$Aa="";break;}if($t["type"]=="PRIMARY")$Aa=" UNIQUE";}}return" AUTO_INCREMENT$Aa";}function
alter_table($O,$A,$m,$gc,$Va,$Hb,$d,$_a,$ie){$c=array();foreach($m
as$l)$c[]=($l[1]?($O!=""?($l[0]!=""?"CHANGE ".idf_escape($l[0]):"ADD"):" ")." ".implode($l[1]).($O!=""?$l[2]:""):"DROP ".idf_escape($l[0]));$c=array_merge($c,$gc);$kf="COMMENT=".q($Va).($Hb?" ENGINE=".q($Hb):"").($d?" COLLATE ".q($d):"").($_a!=""?" AUTO_INCREMENT=$_a":"").$ie;if($O=="")return
queries("CREATE TABLE ".table($A)." (\n".implode(",\n",$c)."\n) $kf");if($O!=$A)$c[]="RENAME TO ".table($A);$c[]=$kf;return
queries("ALTER TABLE ".table($O)."\n".implode(",\n",$c));}function
alter_indexes($O,$c){foreach($c
as$w=>$W)$c[$w]=($W[2]=="DROP"?"\nDROP INDEX ".idf_escape($W[1]):"\nADD $W[0] ".($W[0]=="PRIMARY"?"KEY ":"").($W[1]!=""?idf_escape($W[1])." ":"").$W[2]);return
queries("ALTER TABLE ".table($O).implode(",",$c));}function
truncate_tables($Q){return
apply_queries("TRUNCATE TABLE",$Q);}function
drop_views($Y){return
queries("DROP VIEW ".implode(", ",array_map('table',$Y)));}function
drop_tables($Q){return
queries("DROP TABLE ".implode(", ",array_map('table',$Q)));}function
move_tables($Q,$Y,$Bf){$Le=array();foreach(array_merge($Q,$Y)as$O)$Le[]=table($O)." TO ".idf_escape($Bf).".".table($O);return
queries("RENAME TABLE ".implode(", ",$Le));}function
copy_tables($Q,$Y,$Bf){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($Q
as$O){$A=($Bf==DB?table("copy_$O"):idf_escape($Bf).".".table($O));if(!queries("DROP TABLE IF EXISTS $A")||!queries("CREATE TABLE $A LIKE ".table($O))||!queries("INSERT INTO $A SELECT * FROM ".table($O)))return
false;}foreach($Y
as$O){$A=($Bf==DB?table("copy_$O"):idf_escape($Bf).".".table($O));$mg=view($O);if(!queries("DROP VIEW IF EXISTS $A")||!queries("CREATE VIEW $A AS $mg[select]"))return
false;}return
true;}function
trigger($A){if($A=="")return
array();$I=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($A));return
reset($I);}function
triggers($O){$G=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($O,"%_")))as$H)$G[$H["Trigger"]]=array($H["Timing"],$H["Event"]);return$G;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($A,$S){global$g,$Jb,$Fc,$T;$ua=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$Wf="((".implode("|",array_merge(array_keys($T),$ua)).")\\b(?:\\s*\\(((?:[^'\")]*|$Jb)+)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$le="\\s*(".($S=="FUNCTION"?"":$Fc).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$Wf";$eb=$g->result("SHOW CREATE $S ".idf_escape($A),2);preg_match("~\\(((?:$le\\s*,?)*)\\)\\s*".($S=="FUNCTION"?"RETURNS\\s+$Wf\\s+":"")."(.*)~is",$eb,$_);$m=array();preg_match_all("~$le\\s*,?~is",$_[1],$gd,PREG_SET_ORDER);foreach($gd
as$de){$A=str_replace("``","`",$de[2]).$de[3];$m[]=array("field"=>$A,"type"=>strtolower($de[5]),"length"=>preg_replace_callback("~$Jb~s",'normalize_enum',$de[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$de[8] $de[7]"))),"full_type"=>$de[4],"inout"=>strtoupper($de[1]),"collation"=>strtolower($de[9]),);}if($S!="FUNCTION")return
array("fields"=>$m,"definition"=>$_[11]);return
array("fields"=>$m,"returns"=>array("type"=>$_[12],"length"=>$_[13],"unsigned"=>$_[15],"collation"=>$_[16]),"definition"=>$_[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT * FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
begin(){return
queries("BEGIN");}function
insert_into($O,$L){return
queries("INSERT INTO ".table($O)." (".implode(", ",array_keys($L)).")\nVALUES (".implode(", ",$L).")");}function
insert_update($O,$L,$ue){foreach($L
as$w=>$W)$L[$w]="$w = $W";$eg=implode(", ",$L);return
queries("INSERT INTO ".table($O)." SET $eg ON DUPLICATE KEY UPDATE $eg");}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ID()");}function
explain($g,$E){return$g->query("EXPLAIN $E");}function
found_rows($P,$Z){return($Z||$P["Engine"]!="InnoDB"?null:$P["Rows"]);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($We){return
true;}function
create_sql($O,$_a){global$g;$G=$g->result("SHOW CREATE TABLE ".table($O),1);if(!$_a)$G=preg_replace('~ AUTO_INCREMENT=\\d+~','',$G);return$G;}function
truncate_sql($O){return"TRUNCATE ".table($O);}function
use_sql($lb){return"USE ".idf_escape($lb);}function
trigger_sql($O,$N){$G="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($O,"%_")),null,"-- ")as$H)$G.="\n".($N=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($H["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($H["Trigger"])." $H[Timing] $H[Event] ON ".table($H["Table"])." FOR EACH ROW\n$H[Statement];;\n";return$G;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
support($ac){global$g;return!ereg("scheme|sequence|type".($g->server_info<5.1?"|event|partitioning".($g->server_info<5?"|view|routine|trigger":""):""),$ac);}$v="sql";$T=array();$nf=array();foreach(array('Numbers'=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),'Date and time'=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),'Strings'=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),'Binary'=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),'Lists'=>array("enum"=>65535,"set"=>64),)as$w=>$W){$T+=$W;$nf[$w]=array_keys($W);}$dg=array("unsigned","zerofill","unsigned zerofill");$Md=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","");$pc=array("char_length","date","from_unixtime","hex","lower","round","sec_to_time","time_to_sec","upper");$tc=array("avg","count","count distinct","group_concat","max","min","sum");$Ab=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1/hex","date|time"=>"now",),array("int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ia="3.5.1";class
Adminer{var$operators;function
name(){return"<a href='http://www.adminer.org/' id='h1'>Adminer</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_session("pwds"));}function
permanentLogin(){return
password_file();}function
database(){return
DB;}function
databases($fc=true){return
get_databases($fc);}function
headers(){return
true;}function
head(){return
true;}function
loginForm(){global$vb;echo'<table cellspacing="0">
<tr><th>System<td>',html_select("auth[driver]",$vb,DRIVER,"loginDriver(this);"),'<tr><th>Server<td><input name="auth[server]" value="',h(SERVER),'" title="hostname[:port]">
<tr><th>Username<td><input id="username" name="auth[username]" value="',h($_GET["username"]),'">
<tr><th>Password<td><input type="password" name="auth[password]">
<tr><th>Database<td><input name="auth[db]" value="',h($_GET["db"]);?>">
</table>
<script type="text/javascript">
var username = document.getElementById('username');
username.focus();
username.form['auth[driver]'].onchange();
</script>
<?php

echo"<p><input type='submit' value='".'Login'."'>\n",checkbox("auth[permanent]",1,$_COOKIE["adminer_permanent"],'Permanent login')."\n";}function
login($dd,$C){return
true;}function
tableName($uf){return
h($uf["Name"]);}function
fieldName($l,$Qd=0){return'<span title="'.h($l["full_type"]).'">'.h($l["field"]).'</span>';}function
selectLinks($uf,$L=""){echo'<p class="tabs">';$bd=array("select"=>'Select data',"table"=>'Show structure');if(is_view($uf))$bd["view"]='Alter view';else$bd["create"]='Alter table';if($L!==null)$bd["edit"]='New item';foreach($bd
as$w=>$W)echo" <a href='".h(ME)."$w=".urlencode($uf["Name"]).($w=="edit"?$L:"")."'".bold(isset($_GET[$w])).">$W</a>";echo"\n";}function
foreignKeys($O){return
foreign_keys($O);}function
backwardKeys($O,$tf){return
array();}function
backwardKeysPrint($Ca,$H){}function
selectQuery($E){global$v;return"<p><a href='".h(remove_from_uri("page"))."&amp;page=last' title='".'Last page'."'>&gt;&gt;</a> <code class='jush-$v'>".h(str_replace("\n"," ",$E))."</code> <a href='".h(ME)."sql=".urlencode($E)."'>".'Edit'."</a></p>\n";}function
rowDescription($O){return"";}function
rowDescriptions($I,$hc){return$I;}function
selectVal($W,$z,$l){$G=($W===null?"<i>NULL</i>":(ereg("char|binary",$l["type"])&&!ereg("var",$l["type"])?"<code>$W</code>":$W));if(ereg('blob|bytea|raw|file',$l["type"])&&!is_utf8($W))$G=lang(array('%d byte','%d bytes'),strlen($W));return($z?"<a href='$z'>$G</a>":$G);}function
editVal($W,$l){return(ereg("binary",$l["type"])?reset(unpack("H*",$W)):$W);}function
selectColumnsPrint($J,$f){global$pc,$tc;print_fieldset("select",'Select',$J);$q=0;$oc=array('Functions'=>$pc,'Aggregation'=>$tc);foreach($J
as$w=>$W){$W=$_GET["columns"][$w];echo"<div>".html_select("columns[$q][fun]",array(-1=>"")+$oc,$W["fun"]),"(<select name='columns[$q][col]' onchange='selectFieldChange(this.form);'><option>".optionlist($f,$W["col"],true)."</select>)</div>\n";$q++;}echo"<div>".html_select("columns[$q][fun]",array(-1=>"")+$oc,"","this.nextSibling.nextSibling.onchange();"),"(<select name='columns[$q][col]' onchange='selectAddRow(this);'><option>".optionlist($f,null,true)."</select>)</div>\n","</div></fieldset>\n";}function
selectSearchPrint($Z,$f,$u){print_fieldset("search",'Search',$Z);foreach($u
as$q=>$t){if($t["type"]=="FULLTEXT"){echo"(<i>".implode("</i>, <i>",array_map('h',$t["columns"]))."</i>) AGAINST"," <input name='fulltext[$q]' value='".h($_GET["fulltext"][$q])."' onchange='selectFieldChange(this.form);'>",checkbox("boolean[$q]",1,isset($_GET["boolean"][$q]),"BOOL"),"<br>\n";}}$_GET["where"]=(array)$_GET["where"];reset($_GET["where"]);$Ka="this.nextSibling.onchange();";for($q=0;$q<=count($_GET["where"]);$q++){list(,$W)=each($_GET["where"]);if(!$W||("$W[col]$W[val]"!=""&&in_array($W["op"],$this->operators))){echo"<div><select name='where[$q][col]' onchange='$Ka'><option value=''>(".'anywhere'.")".optionlist($f,$W["col"],true)."</select>",html_select("where[$q][op]",$this->operators,$W["op"],$Ka),"<input name='where[$q][val]' value='".h($W["val"])."' onchange='".($W?"selectFieldChange(this.form)":"selectAddRow(this)").";'></div>\n";}}echo"</div></fieldset>\n";}function
selectOrderPrint($Qd,$f,$u){print_fieldset("sort",'Sort',$Qd);$q=0;foreach((array)$_GET["order"]as$w=>$W){if(isset($f[$W])){echo"<div><select name='order[$q]' onchange='selectFieldChange(this.form);'><option>".optionlist($f,$W,true)."</select>",checkbox("desc[$q]",1,isset($_GET["desc"][$w]),'descending')."</div>\n";$q++;}}echo"<div><select name='order[$q]' onchange='selectAddRow(this);'><option>".optionlist($f,null,true)."</select>","<label><input type='checkbox' name='desc[$q]' value='1'>".'descending'."</label></div>\n";echo"</div></fieldset>\n";}function
selectLimitPrint($y){echo"<fieldset><legend>".'Limit'."</legend><div>";echo"<input name='limit' size='3' value='".h($y)."' onchange='selectFieldChange(this.form);'>","</div></fieldset>\n";}function
selectLengthPrint($Ef){if($Ef!==null){echo"<fieldset><legend>".'Text length'."</legend><div>",'<input name="text_length" size="3" value="'.h($Ef).'">',"</div></fieldset>\n";}}function
selectActionPrint($u){echo"<fieldset><legend>".'Action'."</legend><div>","<input type='submit' value='".'Select'."'>"," <span id='noindex' title='".'Full table scan'."'></span>","<script type='text/javascript'>\n","var indexColumns = ";$f=array();foreach($u
as$t){if($t["type"]!="FULLTEXT")$f[reset($t["columns"])]=1;}$f[""]=1;foreach($f
as$w=>$W)json_row($w);echo";\n","selectFieldChange(document.getElementById('form'));\n","</script>\n","</div></fieldset>\n";}function
selectCommandPrint(){return!information_schema(DB);}function
selectImportPrint(){return
true;}function
selectEmailPrint($Db,$f){}function
selectColumnsProcess($f,$u){global$pc,$tc;$J=array();$rc=array();foreach((array)$_GET["columns"]as$w=>$W){if($W["fun"]=="count"||(isset($f[$W["col"]])&&(!$W["fun"]||in_array($W["fun"],$pc)||in_array($W["fun"],$tc)))){$J[$w]=apply_sql_function($W["fun"],(isset($f[$W["col"]])?idf_escape($W["col"]):"*"));if(!in_array($W["fun"],$tc))$rc[]=$J[$w];}}return
array($J,$rc);}function
selectSearchProcess($m,$u){global$v;$G=array();foreach($u
as$q=>$t){if($t["type"]=="FULLTEXT"&&$_GET["fulltext"][$q]!="")$G[]="MATCH (".implode(", ",array_map('idf_escape',$t["columns"])).") AGAINST (".q($_GET["fulltext"][$q]).(isset($_GET["boolean"][$q])?" IN BOOLEAN MODE":"").")";}foreach((array)$_GET["where"]as$W){if("$W[col]$W[val]"!=""&&in_array($W["op"],$this->operators)){$Ya=" $W[op]";if(ereg('IN$',$W["op"])){$Ac=process_length($W["val"]);$Ya.=" (".($Ac!=""?$Ac:"NULL").")";}elseif(!$W["op"])$Ya.=$W["val"];elseif($W["op"]=="LIKE %%")$Ya=" LIKE ".$this->processInput($m[$W["col"]],"%$W[val]%");elseif(!ereg('NULL$',$W["op"]))$Ya.=" ".$this->processInput($m[$W["col"]],$W["val"]);if($W["col"]!="")$G[]=idf_escape($W["col"]).$Ya;else{$Sa=array();foreach($m
as$A=>$l){if(is_numeric($W["val"])||!ereg('int|float|double|decimal|bit',$l["type"])){$A=idf_escape($A);$Sa[]=($v=="sql"&&ereg('char|text|enum|set',$l["type"])&&!ereg('^utf8',$l["collation"])?"CONVERT($A USING utf8)":$A);}}$G[]=($Sa?"(".implode("$Ya OR ",$Sa)."$Ya)":"0");}}}return$G;}function
selectOrderProcess($m,$u){$G=array();foreach((array)$_GET["order"]as$w=>$W){if(isset($m[$W])||preg_match('~^((COUNT\\(DISTINCT |[A-Z0-9_]+\\()(`(?:[^`]|``)+`|"(?:[^"]|"")+")\\)|COUNT\\(\\*\\))$~',$W))$G[]=(isset($m[$W])?idf_escape($W):$W).(isset($_GET["desc"][$w])?" DESC":"");}return$G;}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"30");}function
selectLengthProcess(){return(isset($_GET["text_length"])?$_GET["text_length"]:"100");}function
selectEmailProcess($Z,$hc){return
false;}function
messageQuery($E){global$v;static$db=0;restart_session();$r="sql-".($db++);$vc=&get_session("queries");if(strlen($E)>1e6)$E=ereg_replace('[\x80-\xFF]+$','',substr($E,0,1e6))."\n...";$vc[$_GET["db"]][]=array($E,time());return" <span class='time'>".@date("H:i:s")."</span> <a href='#$r' onclick=\"return !toggle('$r');\">".'SQL command'."</a><div id='$r' class='hidden'><pre><code class='jush-$v'>".shorten_utf8($E,1000).'</code></pre><p><a href="'.h(str_replace("db=".urlencode(DB),"db=".urlencode($_GET["db"]),ME).'sql=&history='.(count($vc[$_GET["db"]])-1)).'">'.'Edit'.'</a></div>';}function
editFunctions($l){global$Ab;$G=($l["null"]?"NULL/":"");foreach($Ab
as$w=>$pc){if(!$w||(!isset($_GET["call"])&&(isset($_GET["select"])||where($_GET)))){foreach($pc
as$le=>$W){if(!$le||ereg($le,$l["type"]))$G.="/$W";}if($w&&!ereg('set|blob|bytea|raw|file',$l["type"]))$G.="/=";}}return
explode("/",$G);}function
editInput($O,$l,$ya,$X){if($l["type"]=="enum")return(isset($_GET["select"])?"<label><input type='radio'$ya value='-1' checked><i>".'original'."</i></label> ":"").($l["null"]?"<label><input type='radio'$ya value=''".($X!==null||isset($_GET["select"])?"":" checked")."><i>NULL</i></label> ":"").enum_input("radio",$ya,$l,$X,0);return"";}function
processInput($l,$X,$o=""){if($o=="=")return$X;$A=$l["field"];$G=($l["type"]=="bit"&&ereg("^([0-9]+|b'[0-1]+')\$",$X)?$X:q($X));if(ereg('^(now|getdate|uuid)$',$o))$G="$o()";elseif(ereg('^current_(date|timestamp)$',$o))$G=$o;elseif(ereg('^([+-]|\\|\\|)$',$o))$G=idf_escape($A)." $o $G";elseif(ereg('^[+-] interval$',$o))$G=idf_escape($A)." $o ".(preg_match("~^(\\d+|'[0-9.: -]') [A-Z_]+$~i",$X)?$X:$G);elseif(ereg('^(addtime|subtime|concat)$',$o))$G="$o(".idf_escape($A).", $G)";elseif(ereg('^(md5|sha1|password|encrypt|hex)$',$o))$G="$o($G)";if(ereg("binary",$l["type"]))$G="unhex($G)";return$G;}function
dumpOutput(){$G=array('text'=>'open','file'=>'save');if(function_exists('gzencode'))$G['gz']='gzip';if(function_exists('bzcompress'))$G['bz2']='bzip2';return$G;}function
dumpFormat(){return
array('sql'=>'SQL','csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpTable($O,$N,$Kc=false){if($_POST["format"]!="sql"){echo"\xef\xbb\xbf";if($N)dump_csv(array_keys(fields($O)));}elseif($N){$eb=create_sql($O,$_POST["auto_increment"]);if($eb){if($N=="DROP+CREATE")echo"DROP ".($Kc?"VIEW":"TABLE")." IF EXISTS ".table($O).";\n";if($Kc)$eb=remove_definer($eb);echo($N!="CREATE+ALTER"?$eb:($Kc?substr_replace($eb," OR REPLACE",6,0):substr_replace($eb," IF NOT EXISTS",12,0))).";\n\n";}if($N=="CREATE+ALTER"&&!$Kc){$E="SELECT COLUMN_NAME, COLUMN_DEFAULT, IS_NULLABLE, COLLATION_NAME, COLUMN_TYPE, EXTRA, COLUMN_COMMENT FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = ".q($O)." ORDER BY ORDINAL_POSITION";echo"DELIMITER ;;
CREATE PROCEDURE adminer_alter (INOUT alter_command text) BEGIN
	DECLARE _column_name, _collation_name, after varchar(64) DEFAULT '';
	DECLARE _column_type, _column_default text;
	DECLARE _is_nullable char(3);
	DECLARE _extra varchar(30);
	DECLARE _column_comment varchar(255);
	DECLARE done, set_after bool DEFAULT 0;
	DECLARE add_columns text DEFAULT '";$m=array();$ta="";foreach(get_rows($E)as$H){$ob=$H["COLUMN_DEFAULT"];$H["default"]=($ob!==null?q($ob):"NULL");$H["after"]=q($ta);$H["alter"]=escape_string(idf_escape($H["COLUMN_NAME"])." $H[COLUMN_TYPE]".($H["COLLATION_NAME"]?" COLLATE $H[COLLATION_NAME]":"").($ob!==null?" DEFAULT ".($ob=="CURRENT_TIMESTAMP"?$ob:$H["default"]):"").($H["IS_NULLABLE"]=="YES"?"":" NOT NULL").($H["EXTRA"]?" $H[EXTRA]":"").($H["COLUMN_COMMENT"]?" COMMENT ".q($H["COLUMN_COMMENT"]):"").($ta?" AFTER ".idf_escape($ta):" FIRST"));echo", ADD $H[alter]";$m[]=$H;$ta=$H["COLUMN_NAME"];}echo"';
	DECLARE columns CURSOR FOR $E;
	DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = 1;
	SET @alter_table = '';
	OPEN columns;
	REPEAT
		FETCH columns INTO _column_name, _column_default, _is_nullable, _collation_name, _column_type, _extra, _column_comment;
		IF NOT done THEN
			SET set_after = 1;
			CASE _column_name";foreach($m
as$H)echo"
				WHEN ".q($H["COLUMN_NAME"])." THEN
					SET add_columns = REPLACE(add_columns, ', ADD $H[alter]', IF(
						_column_default <=> $H[default] AND _is_nullable = '$H[IS_NULLABLE]' AND _collation_name <=> ".(isset($H["COLLATION_NAME"])?"'$H[COLLATION_NAME]'":"NULL")." AND _column_type = ".q($H["COLUMN_TYPE"])." AND _extra = '$H[EXTRA]' AND _column_comment = ".q($H["COLUMN_COMMENT"])." AND after = $H[after]
					, '', ', MODIFY $H[alter]'));";echo"
				ELSE
					SET @alter_table = CONCAT(@alter_table, ', DROP ', _column_name);
					SET set_after = 0;
			END CASE;
			IF set_after THEN
				SET after = _column_name;
			END IF;
		END IF;
	UNTIL done END REPEAT;
	CLOSE columns;
	IF @alter_table != '' OR add_columns != '' THEN
		SET alter_command = CONCAT(alter_command, 'ALTER TABLE ".table($O)."', SUBSTR(CONCAT(add_columns, @alter_table), 2), ';\\n');
	END IF;
END;;
DELIMITER ;
CALL adminer_alter(@adminer_alter);
DROP PROCEDURE adminer_alter;

";}}}function
dumpData($O,$N,$E){global$g,$v;$id=($v=="sqlite"?0:1048576);if($N){if($_POST["format"]=="sql"&&$N=="TRUNCATE+INSERT")echo
truncate_sql($O).";\n";if($_POST["format"]=="sql")$m=fields($O);$F=$g->query($E,1);if($F){$Hc="";$Ia="";$Pc=array();while($H=$F->fetch_row()){if(!$Pc){foreach($H
as$W){$l=$F->fetch_field();$Pc[]=$l->name;}}if($_POST["format"]!="sql"){if($N=="table"){dump_csv($Pc);$N="INSERT";}dump_csv($H);}else{if(!$Hc)$Hc="INSERT INTO ".table($O)." (".implode(", ",array_map('idf_escape',$Pc)).") VALUES";foreach($H
as$w=>$W)$H[$w]=($W!==null?(ereg('int|float|double|decimal|bit',$m[$Pc[$w]]["type"])?$W:q($W)):"NULL");$Ue=implode(",\t",$H);if($N=="INSERT+UPDATE"){$L=array();foreach($H
as$w=>$W)$L[]=idf_escape($Pc[$w])." = $W";echo"$Hc ($Ue) ON DUPLICATE KEY UPDATE ".implode(", ",$L).";\n";}else{$Ue=($id?"\n":" ")."($Ue)";if(!$Ia)$Ia=$Hc.$Ue;elseif(strlen($Ia)+4+strlen($Ue)<$id)$Ia.=",$Ue";else{echo"$Ia;\n";$Ia=$Hc.$Ue;}}}}if($_POST["format"]=="sql"&&$N!="INSERT+UPDATE"&&$Ia){$Ia.=";\n";echo$Ia;}}elseif($_POST["format"]=="sql")echo"-- ".str_replace("\n"," ",$g->error)."\n";}}function
dumpFilename($zc){return
friendly_url($zc!=""?$zc:(SERVER!=""?SERVER:"localhost"));}function
dumpHeaders($zc,$vd=false){$ae=$_POST["output"];$Wb=($_POST["format"]=="sql"?"sql":($vd?"tar":"csv"));header("Content-Type: ".($ae=="bz2"?"application/x-bzip":($ae=="gz"?"application/x-gzip":($Wb=="tar"?"application/x-tar":($Wb=="sql"||$ae!="file"?"text/plain":"text/csv")."; charset=utf-8"))));if($ae=="bz2")ob_start('bzcompress',1e6);if($ae=="gz")ob_start('gzencode',1e6);return$Wb;}function
homepage(){echo'<p>'.($_GET["ns"]==""?'<a href="'.h(ME).'database=">'.'Alter database'."</a>\n":""),(support("scheme")?"<a href='".h(ME)."scheme='>".($_GET["ns"]!=""?'Alter schema':'Create schema')."</a>\n":""),($_GET["ns"]!==""?'<a href="'.h(ME).'schema=">'.'Database schema'."</a>\n":""),(support("privileges")?"<a href='".h(ME)."privileges='>".'Privileges'."</a>\n":"");return
true;}function
navigation($ud){global$ia,$g,$R,$v,$vb;echo'<h1>
',$this->name(),' <span class="version">',$ia,'</span>
<a href="http://www.adminer.org/#download" id="version">',(version_compare($ia,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($ud=="auth"){$ec=true;foreach((array)$_SESSION["pwds"]as$ub=>$ef){foreach($ef
as$K=>$ig){foreach($ig
as$U=>$C){if($C!==null){if($ec){echo"<p id='logins' onmouseover='menuOver(this);' onmouseout='menuOut(this);'>\n";$ec=false;}echo"<a href='".h(auth_url($ub,$K,$U))."'>($vb[$ub]) ".h($U.($K!=""?"@$K":""))."</a><br>\n";}}}}}else{$i=$this->databases();echo'<form action="" method="post">
<p class="logout">
';if(DB==""||!$ud){echo"<a href='".h(ME)."sql='".bold(isset($_GET["sql"])).">".'SQL command'."</a>\n";if(support("dump"))echo"<a href='".h(ME)."dump=".urlencode(isset($_GET["table"])?$_GET["table"]:$_GET["select"])."' id='dump'".bold(isset($_GET["dump"])).">".'Dump'."</a>\n";}echo'<input type="submit" name="logout" value="Logout">
<input type="hidden" name="token" value="',$R,'">
</p>
</form>
<form action="">
<p id="dbs">
';hidden_fields_get();echo($i?html_select("db",array(""=>"(".'database'.")")+$i,DB,"this.form.submit();"):'<input name="db" value="'.h(DB).'">'),'<input type="submit" value="Use"',($i?" class='hidden'":""),'>
';if($ud!="db"&&DB!=""&&$g->select_db(DB)){if(support("scheme")){echo"<br>".html_select("ns",array(""=>"(".'schema'.")")+schemas(),$_GET["ns"],"this.form.submit();");if($_GET["ns"]!="")set_schema($_GET["ns"]);}}echo(isset($_GET["sql"])?'<input type="hidden" name="sql" value="">':(isset($_GET["schema"])?'<input type="hidden" name="schema" value="">':(isset($_GET["dump"])?'<input type="hidden" name="dump" value="">':""))),"</p></form>\n";if($_GET["ns"]!==""&&!$ud&&DB!=""){echo'<p><a href="'.h(ME).'create="'.bold($_GET["create"]==="").">".'Create new table'."</a>\n";$Q=tables_list();if(!$Q)echo"<p class='message'>".'No tables.'."\n";else{$this->tablesPrint($Q);$bd=array();foreach($Q
as$O=>$S)$bd[]=preg_quote($O,'/');echo"<script type='text/javascript'>\n","var jushLinks = { $v: [ '".js_escape(ME)."table=\$&', /\\b(".implode("|",$bd).")\\b/g ] };\n";foreach(array("bac","bra","sqlite_quo","mssql_bra")as$W)echo"jushLinks.$W = jushLinks.$v;\n";echo"</script>\n";}}}}function
tablesPrint($Q){echo"<p id='tables' onmouseover='menuOver(this);' onmouseout='menuOut(this);'>\n";foreach($Q
as$O=>$S){echo'<a href="'.h(ME).'select='.urlencode($O).'"'.bold($_GET["select"]==$O).">".'select'."</a> ",'<a href="'.h(ME).'table='.urlencode($O).'"'.bold($_GET["table"]==$O)." title='".'Show structure'."'>".$this->tableName(array("Name"=>$O))."</a><br>\n";}}}$b=(function_exists('adminer_object')?adminer_object():new
Adminer);if($b->operators===null)$b->operators=$Md;function
page_header($Hf,$k="",$Ha=array(),$If=""){global$ca,$b,$g,$vb;header("Content-Type: text/html; charset=utf-8");if($b->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}$Jf=$Hf.($If!=""?": ".h($If):"");$Kf=strip_tags($Jf.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$b->name());echo'<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="en" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$Kf,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=3.5.1",'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=3.5.1",'"></script>
';if($b->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=3.5.1",'" id="favicon">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}}echo'
<body class="ltr nojs" onkeydown="bodyKeydown(event);" onload="bodyLoad(\'',(is_object($g)?substr($g->server_info,0,3):""),'\');',(isset($_COOKIE["adminer_version"])?"":" verifyVersion();"),'">
<script type="text/javascript">
document.body.className = document.body.className.replace(/ nojs/, \' js\');
</script>

<div id="content">
';if($Ha!==null){$z=substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($z?$z:".").'">'.$vb[DRIVER].'</a> &raquo; ';$z=substr(preg_replace('~(db|ns)=[^&]*&~','',ME),0,-1);$K=(SERVER!=""?h(SERVER):'Server');if($Ha===false)echo"$K\n";else{echo"<a href='".($z?h($z):".")."' accesskey='1' title='Alt+Shift+1'>$K</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Ha)))echo'<a href="'.h($z."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';if(is_array($Ha)){if($_GET["ns"]!="")echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';foreach($Ha
as$w=>$W){$qb=(is_array($W)?$W[1]:$W);if($qb!="")echo'<a href="'.h(ME."$w=").urlencode(is_array($W)?$W[0]:$W).'">'.h($qb).'</a> &raquo; ';}}echo"$Hf\n";}}echo"<h2>$Jf</h2>\n";restart_session();$fg=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$rd=$_SESSION["messages"][$fg];if($rd){echo"<div class='message'>".implode("</div>\n<div class='message'>",$rd)."</div>\n";unset($_SESSION["messages"][$fg]);}$i=&get_session("dbs");if(DB!=""&&$i&&!in_array(DB,$i,true))$i=null;if($k)echo"<div class='error'>$k</div>\n";define("PAGE_HEADER",1);}function
page_footer($ud=""){global$b;echo'</div>

<div id="menu">
';$b->navigation($ud);echo'</div>
';}function
int32($xd){while($xd>=2147483648)$xd-=4294967296;while($xd<=-2147483649)$xd+=4294967296;return(int)$xd;}function
long2str($V,$og){$Ue='';foreach($V
as$W)$Ue.=pack('V',$W);if($og)return
substr($Ue,0,end($V));return$Ue;}function
str2long($Ue,$og){$V=array_values(unpack('V*',str_pad($Ue,4*ceil(strlen($Ue)/4),"\0")));if($og)$V[]=strlen($Ue);return$V;}function
xxtea_mx($sg,$rg,$rf,$Nc){return
int32((($sg>>5&0x7FFFFFF)^$rg<<2)+(($rg>>3&0x1FFFFFFF)^$sg<<4))^int32(($rf^$rg)+($Nc^$sg));}function
encrypt_string($mf,$w){if($mf=="")return"";$w=array_values(unpack("V*",pack("H*",md5($w))));$V=str2long($mf,true);$xd=count($V)-1;$sg=$V[$xd];$rg=$V[0];$D=floor(6+52/($xd+1));$rf=0;while($D-->0){$rf=int32($rf+0x9E3779B9);$_b=$rf>>2&3;for($be=0;$be<$xd;$be++){$rg=$V[$be+1];$wd=xxtea_mx($sg,$rg,$rf,$w[$be&3^$_b]);$sg=int32($V[$be]+$wd);$V[$be]=$sg;}$rg=$V[0];$wd=xxtea_mx($sg,$rg,$rf,$w[$be&3^$_b]);$sg=int32($V[$xd]+$wd);$V[$xd]=$sg;}return
long2str($V,false);}function
decrypt_string($mf,$w){if($mf=="")return"";$w=array_values(unpack("V*",pack("H*",md5($w))));$V=str2long($mf,false);$xd=count($V)-1;$sg=$V[$xd];$rg=$V[0];$D=floor(6+52/($xd+1));$rf=int32($D*0x9E3779B9);while($rf){$_b=$rf>>2&3;for($be=$xd;$be>0;$be--){$sg=$V[$be-1];$wd=xxtea_mx($sg,$rg,$rf,$w[$be&3^$_b]);$rg=int32($V[$be]-$wd);$V[$be]=$rg;}$sg=$V[$xd];$wd=xxtea_mx($sg,$rg,$rf,$w[$be&3^$_b]);$rg=int32($V[0]-$wd);$V[0]=$rg;$rf=int32($rf-0x9E3779B9);}return
long2str($V,true);}$g='';$R=$_SESSION["token"];if(!$_SESSION["token"])$_SESSION["token"]=rand(1,1e6);$me=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$W){list($w)=explode(":",$W);$me[$w]=$W;}}$za=$_POST["auth"];if($za){session_regenerate_id();$_SESSION["pwds"][$za["driver"]][$za["server"]][$za["username"]]=$za["password"];if($za["permanent"]){$w=base64_encode($za["driver"])."-".base64_encode($za["server"])."-".base64_encode($za["username"]);$xe=$b->permanentLogin();$me[$w]="$w:".base64_encode($xe?encrypt_string($za["password"],$xe):"");cookie("adminer_permanent",implode(" ",$me));}if(count($_POST)==1||DRIVER!=$za["driver"]||SERVER!=$za["server"]||$_GET["username"]!==$za["username"]||DB!=$za["db"])redirect(auth_url($za["driver"],$za["server"],$za["username"],$za["db"]));}elseif($_POST["logout"]){if($R&&$_POST["token"]!=$R){page_header('Logout','Invalid CSRF token. Send the form again.');page_footer("db");exit;}else{foreach(array("pwds","dbs","queries")as$w)set_session($w,null);$w=base64_encode(DRIVER)."-".base64_encode(SERVER)."-".base64_encode($_GET["username"]);if($me[$w]){unset($me[$w]);cookie("adminer_permanent",implode(" ",$me));}redirect(substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1),'Logout successful.');}}elseif($me&&!$_SESSION["pwds"]){session_regenerate_id();$xe=$b->permanentLogin();foreach($me
as$w=>$W){list(,$Oa)=explode(":",$W);list($ub,$K,$U)=array_map('base64_decode',explode("-",$w));$_SESSION["pwds"][$ub][$K][$U]=decrypt_string(base64_decode($Oa),$xe);}}function
auth_error($Qb=null){global$g,$b,$R;$ff=session_name();$k="";if(!$_COOKIE[$ff]&&$_GET[$ff]&&ini_bool("session.use_only_cookies"))$k='Session support must be enabled.';elseif(isset($_GET["username"])){if(($_COOKIE[$ff]||$_GET[$ff])&&!$R)$k='Session expired, please login again.';else{$C=&get_session("pwds");if($C!==null){$k=h($Qb?$Qb->getMessage():(is_string($g)?$g:'Invalid credentials.'));$C=null;}}}page_header('Login',$k,null);echo"<form action='' method='post'>\n";$b->loginForm();echo"<div>";hidden_fields($_POST,array("auth"));echo"</div>\n","</form>\n";page_footer("auth");}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);page_header('No extension',sprintf('None of the supported PHP extensions (%s) are available.',implode(", ",$re)),false);page_footer("auth");exit;}$g=connect();}if(is_string($g)||!$b->login($_GET["username"],get_session("pwds"))){auth_error();exit;}$R=$_SESSION["token"];if($za&&$_POST["token"])$_POST["token"]=$R;$k=($_POST?($_POST["token"]==$R?"":'Invalid CSRF token. Send the form again.'):($_SERVER["REQUEST_METHOD"]!="POST"?"":sprintf('Too big POST data. Reduce the data or increase the %s configuration directive.','"post_max_size"')));function
connect_error(){global$b,$g,$R,$k,$vb;$i=array();if(DB!="")page_header('Database'.": ".h(DB),'Invalid database.',true);else{if($_POST["db"]&&!$k)queries_redirect(substr(ME,0,-1),'Databases have been dropped.',drop_databases($_POST["db"]));page_header('Select database',$k,false);echo"<p><a href='".h(ME)."database='>".'Create new database'."</a>\n";foreach(array('privileges'=>'Privileges','processlist'=>'Process list','variables'=>'Variables','status'=>'Status',)as$w=>$W){if(support($w))echo"<a href='".h(ME)."$w='>$W</a>\n";}echo"<p>".sprintf('%s version: %s through PHP extension %s',$vb[DRIVER],"<b>$g->server_info</b>","<b>$g->extension</b>")."\n","<p>".sprintf('Logged as: %s',"<b>".h(logged_user())."</b>")."\n";if($_GET["refresh"])set_session("dbs",null);$i=$b->databases();if($i){$Xe=support("scheme");$Ra=collations();echo"<form action='' method='post'>\n","<table cellspacing='0' class='checkable' onclick='tableClick(event);'>\n","<thead><tr><td>&nbsp;<th>".'Database'."<td>".'Collation'."<td>".'Tables'."</thead>\n";foreach($i
as$j){$Pe=h(ME)."db=".urlencode($j);echo"<tr".odd()."><td>".checkbox("db[]",$j,in_array($j,(array)$_POST["db"])),"<th><a href='$Pe'>".h($j)."</a>","<td><a href='$Pe".($Xe?"&amp;ns=":"")."&amp;database=' title='".'Alter database'."'>".nbsp(db_collation($j,$Ra))."</a>","<td align='right'><a href='$Pe&amp;schema=' id='tables-".h($j)."' title='".'Database schema'."'>?</a>","\n";}echo"</table>\n","<script type='text/javascript'>tableCheck();</script>\n","<p><input type='submit' name='drop' value='".'Drop'."'".confirm("formChecked(this, /db/)").">\n","<input type='hidden' name='token' value='$R'>\n","<a href='".h(ME)."refresh=1'>".'Refresh'."</a>\n","</form>\n";}}page_footer("db");if($i)echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=connect');</script>\n";}if(isset($_GET["status"]))$_GET["variables"]=$_GET["status"];if(!(DB!=""?$g->select_db(DB):isset($_GET["sql"])||isset($_GET["dump"])||isset($_GET["database"])||isset($_GET["processlist"])||isset($_GET["privileges"])||isset($_GET["user"])||isset($_GET["variables"])||$_GET["script"]=="connect")){if(DB!="")set_session("dbs",null);connect_error();exit;}if(support("scheme")&&DB!=""&&$_GET["ns"]!==""){if(!isset($_GET["ns"]))redirect(preg_replace('~ns=[^&]*&~','',ME)."ns=".get_schema());if(!set_schema($_GET["ns"])){page_header('Schema'.": ".h($_GET["ns"]),'Invalid schema.',true);page_footer("ns");exit;}}function
select($F,$h=null,$yc="",$Td=array()){$bd=array();$u=array();$f=array();$Fa=array();$T=array();$G=array();odd('');for($q=0;$H=$F->fetch_row();$q++){if(!$q){echo"<table cellspacing='0' class='nowrap'>\n","<thead><tr>";for($Lc=0;$Lc<count($H);$Lc++){$l=$F->fetch_field();$A=$l->name;$Sd=$l->orgtable;$Rd=$l->orgname;$G[$l->table]=$Sd;if($yc)$bd[$Lc]=($A=="table"?"table=":($A=="possible_keys"?"indexes=":null));elseif($Sd!=""){if(!isset($u[$Sd])){$u[$Sd]=array();foreach(indexes($Sd,$h)as$t){if($t["type"]=="PRIMARY"){$u[$Sd]=array_flip($t["columns"]);break;}}$f[$Sd]=$u[$Sd];}if(isset($f[$Sd][$Rd])){unset($f[$Sd][$Rd]);$u[$Sd][$Rd]=$Lc;$bd[$Lc]=$Sd;}}if($l->charsetnr==63)$Fa[$Lc]=true;$T[$Lc]=$l->type;$A=h($A);echo"<th".($Sd!=""||$l->name!=$Rd?" title='".h(($Sd!=""?"$Sd.":"").$Rd)."'":"").">".($yc?"<a href='$yc".strtolower($A)."' target='_blank' rel='noreferrer'>$A</a>":$A);}echo"</thead>\n";}echo"<tr".odd().">";foreach($H
as$w=>$W){if($W===null)$W="<i>NULL</i>";elseif($Fa[$w]&&!is_utf8($W))$W="<i>".lang(array('%d byte','%d bytes'),strlen($W))."</i>";elseif(!strlen($W))$W="&nbsp;";else{$W=h($W);if($T[$w]==254)$W="<code>$W</code>";}if(isset($bd[$w])&&!$f[$bd[$w]]){if($yc){$O=$H[array_search("table=",$bd)];$z=$bd[$w].urlencode($Td[$O]!=""?$Td[$O]:$O);}else{$z="edit=".urlencode($bd[$w]);foreach($u[$bd[$w]]as$Pa=>$Lc)$z.="&where".urlencode("[".bracket_escape($Pa)."]")."=".urlencode($H[$Lc]);}$W="<a href='".h(ME.$z)."'>$W</a>";}echo"<td>$W";}}echo($q?"</table>":"<p class='message'>".'No rows.')."\n";return$G;}function
referencable_primary($af){$G=array();foreach(table_status()as$vf=>$O){if($vf!=$af&&fk_support($O)){foreach(fields($vf)as$l){if($l["primary"]){if($G[$vf]){unset($G[$vf]);break;}$G[$vf]=$l;}}}}return$G;}function
textarea($A,$X,$I=10,$Sa=80){echo"<textarea name='$A' rows='$I' cols='$Sa' class='sqlarea' spellcheck='false' wrap='off' onkeydown='return textareaKeydown(this, event);'>";if(is_array($X)){foreach($X
as$W)echo
h($W[0])."\n\n\n";}else
echo
h($X);echo"</textarea>";}function
format_time($jf,$Gb){return" <span class='time'>(".sprintf('%.3f s',max(0,array_sum(explode(" ",$Gb))-array_sum(explode(" ",$jf)))).")</span>";}function
edit_type($w,$l,$Ra,$ic=array()){global$nf,$T,$dg,$Id;echo'<td><select name="',$w,'[type]" class="type" onfocus="lastType = selectValue(this);" onchange="editingTypeChange(this);">',optionlist((!$l["type"]||isset($T[$l["type"]])?array():array($l["type"]))+$nf+($ic?array('Foreign keys'=>$ic):array()),$l["type"]),'</select>
<td><input name="',$w,'[length]" value="',h($l["length"]),'" size="3" onfocus="editingLengthFocus(this);"><td class="options">',"<select name='$w"."[collation]'".(ereg('(char|text|enum|set)$',$l["type"])?"":" class='hidden'").'><option value="">('.'collation'.')'.optionlist($Ra,$l["collation"]).'</select>',($dg?"<select name='$w"."[unsigned]'".(!$l["type"]||ereg('(int|float|double|decimal)$',$l["type"])?"":" class='hidden'").'><option>'.optionlist($dg,$l["unsigned"]).'</select>':''),($ic?"<select name='$w"."[on_delete]'".(ereg("`",$l["type"])?"":" class='hidden'")."><option value=''>(".'ON DELETE'.")".optionlist(explode("|",$Id),$l["on_delete"])."</select> ":" ");}function
process_length($x){global$Jb;return(preg_match("~^\\s*(?:$Jb)(?:\\s*,\\s*(?:$Jb))*\\s*\$~",$x)&&preg_match_all("~$Jb~",$x,$gd)?implode(",",$gd[0]):preg_replace('~[^0-9,+-]~','',$x));}function
process_type($l,$Qa="COLLATE"){global$dg;return" $l[type]".($l["length"]!=""?"(".process_length($l["length"]).")":"").(ereg('int|float|double|decimal',$l["type"])&&in_array($l["unsigned"],$dg)?" $l[unsigned]":"").(ereg('char|text|enum|set',$l["type"])&&$l["collation"]?" $Qa ".q($l["collation"]):"");}function
process_field($l,$Vf){return
array(idf_escape(trim($l["field"])),process_type($Vf),($l["null"]?" NULL":" NOT NULL"),(isset($l["default"])?" DEFAULT ".(($l["type"]=="timestamp"&&eregi('^CURRENT_TIMESTAMP$',$l["default"]))||($l["type"]=="bit"&&ereg("^([0-9]+|b'[0-1]+')\$",$l["default"]))?$l["default"]:q($l["default"])):""),($l["on_update"]?" ON UPDATE $l[on_update]":""),(support("comment")&&$l["comment"]!=""?" COMMENT ".q($l["comment"]):""),($l["auto_increment"]?auto_increment():null),);}function
type_class($S){foreach(array('char'=>'text','date'=>'time|year','binary'=>'blob','enum'=>'set',)as$w=>$W){if(ereg("$w|$W",$S))return" class='$w'";}}function
edit_fields($m,$Ra,$S="TABLE",$wa=0,$ic=array(),$Wa=false){global$Fc;echo'<thead><tr class="wrap">
';if($S=="PROCEDURE"){echo'<td>&nbsp;';}echo'<th>',($S=="TABLE"?'Column name':'Parameter name'),'<td>Type<textarea id="enum-edit" rows="4" cols="12" wrap="off" style="display: none;" onblur="editingLengthBlur(this);"></textarea>
<td>Length
<td>Options
';if($S=="TABLE"){echo'<td>NULL
<td><input type="radio" name="auto_increment_col" value=""><acronym title="Auto Increment">AI</acronym>
<td',($_POST["defaults"]?"":" class='hidden'"),'>Default values
',(support("comment")?"<td".($Wa?"":" class='hidden'").">".'Comment':"");}echo'<td>',"<input type='image' class='icon' name='add[".(support("move_col")?0:count($m))."]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=3.5.1' alt='+' title='".'Add next'."'>",'<script type="text/javascript">row_count = ',count($m),';</script>
</thead>
<tbody onkeydown="return editingKeydown(event);">
';foreach($m
as$q=>$l){$q++;$Ud=$l[($_POST?"orig":"field")];$sb=(isset($_POST["add"][$q-1])||(isset($l["field"])&&!$_POST["drop_col"][$q]))&&(support("drop_col")||$Ud=="");echo'<tr',($sb?"":" style='display: none;'"),'>
',($S=="PROCEDURE"?"<td>".html_select("fields[$q][inout]",explode("|",$Fc),$l["inout"]):""),'<th>';if($sb){echo'<input name="fields[',$q,'][field]" value="',h($l["field"]),'" onchange="',($l["field"]!=""||count($m)>1?"":"editingAddRow(this, $wa); "),'editingNameChange(this);" maxlength="64">';}echo'<input type="hidden" name="fields[',$q,'][orig]" value="',h($Ud),'">
';edit_type("fields[$q]",$l,$Ra,$ic);if($S=="TABLE"){echo'<td>',checkbox("fields[$q][null]",1,$l["null"]),'<td><input type="radio" name="auto_increment_col" value="',$q,'"';if($l["auto_increment"]){echo' checked';}?> onclick="var field = this.form['fields[' + this.value + '][field]']; if (!field.value) { field.value = 'id'; field.onchange(); }">
<td<?php echo($_POST["defaults"]?"":" class='hidden'"),'>',checkbox("fields[$q][has_default]",1,$l["has_default"]),'<input name="fields[',$q,'][default]" value="',h($l["default"]),'" onchange="this.previousSibling.checked = true;">
',(support("comment")?"<td".($Wa?"":" class='hidden'")."><input name='fields[$q][comment]' value='".h($l["comment"])."' maxlength='255'>":"");}echo"<td>",(support("move_col")?"<input type='image' class='icon' name='add[$q]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=3.5.1' alt='+' title='".'Add next'."' onclick='return !editingAddRow(this, $wa, 1);'>&nbsp;"."<input type='image' class='icon' name='up[$q]' src='".h(preg_replace("~\\?.*~","",ME))."?file=up.gif&amp;version=3.5.1' alt='^' title='".'Move up'."'>&nbsp;"."<input type='image' class='icon' name='down[$q]' src='".h(preg_replace("~\\?.*~","",ME))."?file=down.gif&amp;version=3.5.1' alt='v' title='".'Move down'."'>&nbsp;":""),($Ud==""||support("drop_col")?"<input type='image' class='icon' name='drop_col[$q]' src='".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=3.5.1' alt='x' title='".'Remove'."' onclick='return !editingRemoveRow(this);'>":""),"\n";}}function
process_fields(&$m){ksort($m);$B=0;if($_POST["up"]){$Tc=0;foreach($m
as$w=>$l){if(key($_POST["up"])==$w){unset($m[$w]);array_splice($m,$Tc,0,array($l));break;}if(isset($l["field"]))$Tc=$B;$B++;}}if($_POST["down"]){$kc=false;foreach($m
as$w=>$l){if(isset($l["field"])&&$kc){unset($m[key($_POST["down"])]);array_splice($m,$B,0,array($kc));break;}if(key($_POST["down"])==$w)$kc=$l;$B++;}}$m=array_values($m);if($_POST["add"])array_splice($m,key($_POST["add"]),0,array(array()));}function
normalize_enum($_){return"'".str_replace("'","''",addcslashes(stripcslashes(str_replace($_[0][0].$_[0][0],$_[0][0],substr($_[0],1,-1))),'\\'))."'";}function
grant($p,$ze,$f,$Hd){if(!$ze)return
true;if($ze==array("ALL PRIVILEGES","GRANT OPTION"))return($p=="GRANT"?queries("$p ALL PRIVILEGES$Hd WITH GRANT OPTION"):queries("$p ALL PRIVILEGES$Hd")&&queries("$p GRANT OPTION$Hd"));return
queries("$p ".preg_replace('~(GRANT OPTION)\\([^)]*\\)~','\\1',implode("$f, ",$ze).$f).$Hd);}function
drop_create($wb,$eb,$cd,$qd,$od,$pd,$A){if($_POST["drop"])return
query_redirect($wb,$cd,$qd,true,!$_POST["dropped"]);$xb=$A!=""&&($_POST["dropped"]||queries($wb));$gb=queries($eb);if(!queries_redirect($cd,($A!=""?$od:$pd),$gb)&&$xb)redirect(null,$qd);return$xb;}function
remove_definer($E){return
preg_replace('~^([A-Z =]+) DEFINER=`'.preg_replace('~@(.*)~','`@`(%|\\1)',logged_user()).'`~','\\1',$E);}function
tar_file($cc,$ab){$G=pack("a100a8a8a8a12a12",$cc,644,0,0,decoct(strlen($ab)),decoct(time()));$Na=8*32;for($q=0;$q<strlen($G);$q++)$Na+=ord($G[$q]);$G.=sprintf("%06o",$Na)."\0 ";return$G.str_repeat("\0",512-strlen($G)).$ab.str_repeat("\0",511-(strlen($ab)+511)%
512);}function
ini_bytes($Ec){$W=ini_get($Ec);switch(strtolower(substr($W,-1))){case'g':$W*=1024;case'm':$W*=1024;case'k':$W*=1024;}return$W;}session_cache_limiter("");if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false)session_write_close();$Id="RESTRICT|NO ACTION|CASCADE|SET NULL|SET DEFAULT";$Jb="'(?:''|[^'\\\\]|\\\\.)*+'";$Fc="IN|OUT|INOUT";if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"])$_GET["edit"]=$_GET["select"];if(isset($_GET["callf"]))$_GET["call"]=$_GET["callf"];if(isset($_GET["function"]))$_GET["procedure"]=$_GET["function"];if(isset($_GET["download"])){$a=$_GET["download"];header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$a-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$g->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($a)," WHERE ".where($_GET),1));exit;}elseif(isset($_GET["table"])){$a=$_GET["table"];$m=fields($a);if(!$m)$k=error();$P=($m?table_status($a):array());page_header(($m&&is_view($P)?'View':'Table').": ".h($a),$k);$b->selectLinks($P);$Va=$P["Comment"];if($Va!="")echo"<p>".'Comment'.": ".h($Va)."\n";if($m){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Column'."<td>".'Type'.(support("comment")?"<td>".'Comment':"")."</thead>\n";foreach($m
as$l){echo"<tr".odd()."><th>".h($l["field"]),"<td title='".h($l["collation"])."'>".h($l["full_type"]).($l["null"]?" <i>NULL</i>":"").($l["auto_increment"]?" <i>".'Auto Increment'."</i>":""),(isset($l["default"])?" [<b>".h($l["default"])."</b>]":""),(support("comment")?"<td>".nbsp($l["comment"]):""),"\n";}echo"</table>\n";if(!is_view($P)){echo"<h3>".'Indexes'."</h3>\n";$u=indexes($a);if($u){echo"<table cellspacing='0'>\n";foreach($u
as$A=>$t){ksort($t["columns"]);$we=array();foreach($t["columns"]as$w=>$W)$we[]="<i>".h($W)."</i>".($t["lengths"][$w]?"(".$t["lengths"][$w].")":"");echo"<tr title='".h($A)."'><th>$t[type]<td>".implode(", ",$we)."\n";}echo"</table>\n";}echo'<p><a href="'.h(ME).'indexes='.urlencode($a).'">'.'Alter indexes'."</a>\n";if(fk_support($P)){echo"<h3>".'Foreign keys'."</h3>\n";$ic=foreign_keys($a);if($ic){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Source'."<td>".'Target'."<td>".'ON DELETE'."<td>".'ON UPDATE'.($v!="sqlite"?"<td>&nbsp;":"")."</thead>\n";foreach($ic
as$A=>$n){echo"<tr title='".h($A)."'>","<th><i>".implode("</i>, <i>",array_map('h',$n["source"]))."</i>","<td><a href='".h($n["db"]!=""?preg_replace('~db=[^&]*~',"db=".urlencode($n["db"]),ME):($n["ns"]!=""?preg_replace('~ns=[^&]*~',"ns=".urlencode($n["ns"]),ME):ME))."table=".urlencode($n["table"])."'>".($n["db"]!=""?"<b>".h($n["db"])."</b>.":"").($n["ns"]!=""?"<b>".h($n["ns"])."</b>.":"").h($n["table"])."</a>","(<i>".implode("</i>, <i>",array_map('h',$n["target"]))."</i>)","<td>".nbsp($n["on_delete"])."\n","<td>".nbsp($n["on_update"])."\n",($v=="sqlite"?"":'<td><a href="'.h(ME.'foreign='.urlencode($a).'&name='.urlencode($A)).'">'.'Alter'.'</a>');}echo"</table>\n";}if($v!="sqlite")echo'<p><a href="'.h(ME).'foreign='.urlencode($a).'">'.'Add foreign key'."</a>\n";}if(support("trigger")){echo"<h3>".'Triggers'."</h3>\n";$Uf=triggers($a);if($Uf){echo"<table cellspacing='0'>\n";foreach($Uf
as$w=>$W)echo"<tr valign='top'><td>$W[0]<td>$W[1]<th>".h($w)."<td><a href='".h(ME.'trigger='.urlencode($a).'&name='.urlencode($w))."'>".'Alter'."</a>\n";echo"</table>\n";}echo'<p><a href="'.h(ME).'trigger='.urlencode($a).'">'.'Add trigger'."</a>\n";}}}}elseif(isset($_GET["schema"])){page_header('Database schema',"",array(),DB.($_GET["ns"]?".$_GET[ns]":""));$xf=array();$yf=array();$A="adminer_schema";$ea=($_GET["schema"]?$_GET["schema"]:$_COOKIE[($_COOKIE["$A-".DB]?"$A-".DB:$A)]);preg_match_all('~([^:]+):([-0-9.]+)x([-0-9.]+)(_|$)~',$ea,$gd,PREG_SET_ORDER);foreach($gd
as$q=>$_){$xf[$_[1]]=array($_[2],$_[3]);$yf[]="\n\t'".js_escape($_[1])."': [ $_[2], $_[3] ]";}$Lf=0;$Ea=-1;$We=array();$Ie=array();$Xc=array();foreach(table_status()as$P){if(!isset($P["Engine"]))continue;$oe=0;$We[$P["Name"]]["fields"]=array();foreach(fields($P["Name"])as$A=>$l){$oe+=1.25;$l["pos"]=$oe;$We[$P["Name"]]["fields"][$A]=$l;}$We[$P["Name"]]["pos"]=($xf[$P["Name"]]?$xf[$P["Name"]]:array($Lf,0));foreach($b->foreignKeys($P["Name"])as$W){if(!$W["db"]){$Vc=$Ea;if($xf[$P["Name"]][1]||$xf[$W["table"]][1])$Vc=min(floatval($xf[$P["Name"]][1]),floatval($xf[$W["table"]][1]))-1;else$Ea-=.1;while($Xc[(string)$Vc])$Vc-=.0001;$We[$P["Name"]]["references"][$W["table"]][(string)$Vc]=array($W["source"],$W["target"]);$Ie[$W["table"]][$P["Name"]][(string)$Vc]=$W["target"];$Xc[(string)$Vc]=true;}}$Lf=max($Lf,$We[$P["Name"]]["pos"][0]+2.5+$oe);}echo'<div id="schema" style="height: ',$Lf,'em;" onselectstart="return false;">
<script type="text/javascript">
var tablePos = {',implode(",",$yf)."\n",'};
var em = document.getElementById(\'schema\').offsetHeight / ',$Lf,';
document.onmousemove = schemaMousemove;
document.onmouseup = function (ev) {
	schemaMouseup(ev, \'',js_escape(DB),'\');
};
</script>
';foreach($We
as$A=>$O){echo"<div class='table' style='top: ".$O["pos"][0]."em; left: ".$O["pos"][1]."em;' onmousedown='schemaMousedown(this, event);'>",'<a href="'.h(ME).'table='.urlencode($A).'"><b>'.h($A)."</b></a>";foreach($O["fields"]as$l){$W='<span'.type_class($l["type"]).' title="'.h($l["full_type"].($l["null"]?" NULL":'')).'">'.h($l["field"]).'</span>';echo"<br>".($l["primary"]?"<i>$W</i>":$W);}foreach((array)$O["references"]as$Cf=>$Je){foreach($Je
as$Vc=>$Fe){$Wc=$Vc-$xf[$A][1];$q=0;foreach($Fe[0]as$gf)echo"\n<div class='references' title='".h($Cf)."' id='refs$Vc-".($q++)."' style='left: $Wc"."em; top: ".$O["fields"][$gf]["pos"]."em; padding-top: .5em;'><div style='border-top: 1px solid Gray; width: ".(-$Wc)."em;'></div></div>";}}foreach((array)$Ie[$A]as$Cf=>$Je){foreach($Je
as$Vc=>$f){$Wc=$Vc-$xf[$A][1];$q=0;foreach($f
as$Bf)echo"\n<div class='references' title='".h($Cf)."' id='refd$Vc-".($q++)."' style='left: $Wc"."em; top: ".$O["fields"][$Bf]["pos"]."em; height: 1.25em; background: url(".h(preg_replace("~\\?.*~","",ME))."?file=arrow.gif) no-repeat right center;&amp;version=3.5.1'><div style='height: .5em; border-bottom: 1px solid Gray; width: ".(-$Wc)."em;'></div></div>";}}echo"\n</div>\n";}foreach($We
as$A=>$O){foreach((array)$O["references"]as$Cf=>$Je){foreach($Je
as$Vc=>$Fe){$td=$Lf;$kd=-10;foreach($Fe[0]as$w=>$gf){$pe=$O["pos"][0]+$O["fields"][$gf]["pos"];$qe=$We[$Cf]["pos"][0]+$We[$Cf]["fields"][$Fe[1][$w]]["pos"];$td=min($td,$pe,$qe);$kd=max($kd,$pe,$qe);}echo"<div class='references' id='refl$Vc' style='left: $Vc"."em; top: $td"."em; padding: .5em 0;'><div style='border-right: 1px solid Gray; margin-top: 1px; height: ".($kd-$td)."em;'></div></div>\n";}}}echo'</div>
<p><a href="',h(ME."schema=".urlencode($ea)),'" id="schema-link">Permanent link</a>
';}elseif(isset($_GET["dump"])){$a=$_GET["dump"];if($_POST){$cb="";foreach(array("output","format","db_style","routines","events","table_style","auto_increment","triggers","data_style")as$w)$cb.="&$w=".urlencode($_POST[$w]);cookie("adminer_export",substr($cb,1));$Wb=dump_headers(($a!=""?$a:DB),(DB==""||count((array)$_POST["tables"]+(array)$_POST["data"])>1));$Jc=($_POST["format"]=="sql");if($Jc)echo"-- Adminer $ia ".$vb[DRIVER]." dump

".($v!="sql"?"":"SET NAMES utf8;
SET foreign_key_checks = 0;
SET time_zone = ".q($g->result("SELECT @@time_zone")).";
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

");$N=$_POST["db_style"];$i=array(DB);if(DB==""){$i=$_POST["databases"];if(is_string($i))$i=explode("\n",rtrim(str_replace("\r","",$i),"\n"));}foreach((array)$i
as$j){if($g->select_db($j)){if($Jc&&ereg('CREATE',$N)&&($eb=$g->result("SHOW CREATE DATABASE ".idf_escape($j),1))){if($N=="DROP+CREATE")echo"DROP DATABASE IF EXISTS ".idf_escape($j).";\n";echo($N=="CREATE+ALTER"?preg_replace('~^CREATE DATABASE ~','\\0IF NOT EXISTS ',$eb):$eb).";\n";}if($Jc){if($N)echo
use_sql($j).";\n\n";if(in_array("CREATE+ALTER",array($N,$_POST["table_style"])))echo"SET @adminer_alter = '';\n\n";$Zd="";if($_POST["routines"]){foreach(array("FUNCTION","PROCEDURE")as$Qe){foreach(get_rows("SHOW $Qe STATUS WHERE Db = ".q($j),null,"-- ")as$H)$Zd.=($N!='DROP+CREATE'?"DROP $Qe IF EXISTS ".idf_escape($H["Name"]).";;\n":"").remove_definer($g->result("SHOW CREATE $Qe ".idf_escape($H["Name"]),2)).";;\n\n";}}if($_POST["events"]){foreach(get_rows("SHOW EVENTS",null,"-- ")as$H)$Zd.=($N!='DROP+CREATE'?"DROP EVENT IF EXISTS ".idf_escape($H["Name"]).";;\n":"").remove_definer($g->result("SHOW CREATE EVENT ".idf_escape($H["Name"]),3)).";;\n\n";}if($Zd)echo"DELIMITER ;;\n\n$Zd"."DELIMITER ;\n\n";}if($_POST["table_style"]||$_POST["data_style"]){$Y=array();foreach(table_status()as$P){$O=(DB==""||in_array($P["Name"],(array)$_POST["tables"]));$jb=(DB==""||in_array($P["Name"],(array)$_POST["data"]));if($O||$jb){if(!is_view($P)){if($Wb=="tar")ob_start();$b->dumpTable($P["Name"],($O?$_POST["table_style"]:""));if($jb)$b->dumpData($P["Name"],$_POST["data_style"],"SELECT * FROM ".table($P["Name"]));if($Jc&&$_POST["triggers"]&&$O&&($Uf=trigger_sql($P["Name"],$_POST["table_style"])))echo"\nDELIMITER ;;\n$Uf\nDELIMITER ;\n";if($Wb=="tar")echo
tar_file((DB!=""?"":"$j/")."$P[Name].csv",ob_get_clean());elseif($Jc)echo"\n";}elseif($Jc)$Y[]=$P["Name"];}}foreach($Y
as$mg)$b->dumpTable($mg,$_POST["table_style"],true);if($Wb=="tar")echo
pack("x512");}if($N=="CREATE+ALTER"&&$Jc){$E="SELECT TABLE_NAME, ENGINE, TABLE_COLLATION, TABLE_COMMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE()";echo"DELIMITER ;;
CREATE PROCEDURE adminer_alter (INOUT alter_command text) BEGIN
	DECLARE _table_name, _engine, _table_collation varchar(64);
	DECLARE _table_comment varchar(64);
	DECLARE done bool DEFAULT 0;
	DECLARE tables CURSOR FOR $E;
	DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = 1;
	OPEN tables;
	REPEAT
		FETCH tables INTO _table_name, _engine, _table_collation, _table_comment;
		IF NOT done THEN
			CASE _table_name";foreach(get_rows($E)as$H){$Va=q($H["ENGINE"]=="InnoDB"?preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$H["TABLE_COMMENT"]):$H["TABLE_COMMENT"]);echo"
				WHEN ".q($H["TABLE_NAME"])." THEN
					".(isset($H["ENGINE"])?"IF _engine != '$H[ENGINE]' OR _table_collation != '$H[TABLE_COLLATION]' OR _table_comment != $Va THEN
						ALTER TABLE ".idf_escape($H["TABLE_NAME"])." ENGINE=$H[ENGINE] COLLATE=$H[TABLE_COLLATION] COMMENT=$Va;
					END IF":"BEGIN END").";";}echo"
				ELSE
					SET alter_command = CONCAT(alter_command, 'DROP TABLE `', REPLACE(_table_name, '`', '``'), '`;\\n');
			END CASE;
		END IF;
	UNTIL done END REPEAT;
	CLOSE tables;
END;;
DELIMITER ;
CALL adminer_alter(@adminer_alter);
DROP PROCEDURE adminer_alter;
";}if(in_array("CREATE+ALTER",array($N,$_POST["table_style"]))&&$Jc)echo"SELECT @adminer_alter;\n";}}if($Jc)echo"-- ".$g->result("SELECT NOW()")."\n";exit;}page_header('Export',"",($_GET["export"]!=""?array("table"=>$_GET["export"]):array()),DB);echo'
<form action="" method="post">
<table cellspacing="0">
';$mb=array('','USE','DROP+CREATE','CREATE');$zf=array('','DROP+CREATE','CREATE');$kb=array('','TRUNCATE+INSERT','INSERT');if($v=="sql"){$mb[]='CREATE+ALTER';$zf[]='CREATE+ALTER';$kb[]='INSERT+UPDATE';}parse_str($_COOKIE["adminer_export"],$H);if(!$H)$H=array("output"=>"text","format"=>"sql","db_style"=>(DB!=""?"":"CREATE"),"table_style"=>"DROP+CREATE","data_style"=>"INSERT");if(!isset($H["events"])){$H["routines"]=$H["events"]=($_GET["dump"]=="");$H["triggers"]=$H["table_style"];}echo"<tr><th>".'Output'."<td>".html_select("output",$b->dumpOutput(),$H["output"],0)."\n";echo"<tr><th>".'Format'."<td>".html_select("format",$b->dumpFormat(),$H["format"],0)."\n";echo($v=="sqlite"?"":"<tr><th>".'Database'."<td>".html_select('db_style',$mb,$H["db_style"]).(support("routine")?checkbox("routines",1,$H["routines"],'Routines'):"").(support("event")?checkbox("events",1,$H["events"],'Events'):"")),"<tr><th>".'Tables'."<td>".html_select('table_style',$zf,$H["table_style"]).checkbox("auto_increment",1,$H["auto_increment"],'Auto Increment').(support("trigger")?checkbox("triggers",1,$H["triggers"],'Triggers'):""),"<tr><th>".'Data'."<td>".html_select('data_style',$kb,$H["data_style"]),'</table>
<p><input type="submit" value="Export">

<table cellspacing="0">
';$te=array();if(DB!=""){$Ma=($a!=""?"":" checked");echo"<thead><tr>","<th style='text-align: left;'><label><input type='checkbox' id='check-tables'$Ma onclick='formCheck(this, /^tables\\[/);'>".'Tables'."</label>","<th style='text-align: right;'><label>".'Data'."<input type='checkbox' id='check-data'$Ma onclick='formCheck(this, /^data\\[/);'></label>","</thead>\n";$Y="";foreach(table_status()as$P){$A=$P["Name"];$se=ereg_replace("_.*","",$A);$Ma=($a==""||$a==(substr($a,-1)=="%"?"$se%":$A));$we="<tr><td>".checkbox("tables[]",$A,$Ma,$A,"checkboxClick(event, this); formUncheck('check-tables');");if(is_view($P))$Y.="$we\n";else
echo"$we<td align='right'><label>".($P["Engine"]=="InnoDB"&&$P["Rows"]?"~ ":"").$P["Rows"].checkbox("data[]",$A,$Ma,"","checkboxClick(event, this); formUncheck('check-data');")."</label>\n";$te[$se]++;}echo$Y;}else{echo"<thead><tr><th style='text-align: left;'><label><input type='checkbox' id='check-databases'".($a==""?" checked":"")." onclick='formCheck(this, /^databases\\[/);'>".'Database'."</label></thead>\n";$i=$b->databases();if($i){foreach($i
as$j){if(!information_schema($j)){$se=ereg_replace("_.*","",$j);echo"<tr><td>".checkbox("databases[]",$j,$a==""||$a=="$se%",$j,"formUncheck('check-databases');")."</label>\n";$te[$se]++;}}}else
echo"<tr><td><textarea name='databases' rows='10' cols='20'></textarea>";}echo'</table>
</form>
';$ec=true;foreach($te
as$w=>$W){if($w!=""&&$W>1){echo($ec?"<p>":" ")."<a href='".h(ME)."dump=".urlencode("$w%")."'>".h($w)."</a>";$ec=false;}}}elseif(isset($_GET["privileges"])){page_header('Privileges');$F=$g->query("SELECT User, Host FROM mysql.".(DB==""?"user":"db WHERE ".q(DB)." LIKE Db")." ORDER BY Host, User");$p=$F;if(!$F)$F=$g->query("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1) AS User, SUBSTRING_INDEX(CURRENT_USER, '@', -1) AS Host");echo"<form action=''><p>\n";hidden_fields_get();echo"<input type='hidden' name='db' value='".h(DB)."'>\n",($p?"":"<input type='hidden' name='grant' value=''>\n"),"<table cellspacing='0'>\n","<thead><tr><th>".'Username'."<th>".'Server'."<th>&nbsp;</thead>\n";while($H=$F->fetch_assoc())echo'<tr'.odd().'><td>'.h($H["User"])."<td>".h($H["Host"]).'<td><a href="'.h(ME.'user='.urlencode($H["User"]).'&host='.urlencode($H["Host"])).'">'.'Edit'."</a>\n";if(!$p||DB!="")echo"<tr".odd()."><td><input name='user'><td><input name='host' value='localhost'><td><input type='submit' value='".'Edit'."'>\n";echo"</table>\n","</form>\n",'<p><a href="'.h(ME).'user=">'.'Create user'."</a>";}elseif(isset($_GET["sql"])){if(!$k&&$_POST["export"]){dump_headers("sql");$b->dumpTable("","");$b->dumpData("","table",$_POST["query"]);exit;}restart_session();$wc=&get_session("queries");$vc=&$wc[DB];if(!$k&&$_POST["clear"]){$vc=array();redirect(remove_from_uri("history"));}page_header('SQL command',$k);if(!$k&&$_POST){$mc=false;$E=$_POST["query"];if($_POST["webfile"]){$mc=@fopen((file_exists("adminer.sql")?"adminer.sql":(file_exists("adminer.sql.gz")?"compress.zlib://adminer.sql.gz":"compress.bzip2://adminer.sql.bz2")),"rb");$E=($mc?fread($mc,1e6):false);}elseif($_FILES&&$_FILES["sql_file"]["error"]!=UPLOAD_ERR_NO_FILE)$E=get_file("sql_file",true);if(is_string($E)){if(function_exists('memory_get_usage'))@ini_set("memory_limit",max(ini_bytes("memory_limit"),2*strlen($E)+memory_get_usage()+8e6));if($E!=""&&strlen($E)<1e6){$D=$E.(ereg(";[ \t\r\n]*\$",$E)?"":";");if(!$vc||reset(end($vc))!=$D)$vc[]=array($D,time());}$hf="(?:\\s|/\\*.*\\*/|(?:#|-- )[^\n]*\n|--\n)";if(!ini_bool("session.use_cookies"))session_write_close();$pb=";";$B=0;$Fb=true;$h=connect();if(is_object($h)&&DB!="")$h->select_db(DB);$Ua=0;$Mb=array();$ad=0;$fe='[\'"'.($v=="sql"?'`#':($v=="sqlite"?'`[':($v=="mssql"?'[':''))).']|/\\*|-- |$'.($v=="pgsql"?'|\\$[^$]*\\$':'');$Mf=microtime();parse_str($_COOKIE["adminer_export"],$pa);$zb=$b->dumpFormat();unset($zb["sql"]);while($E!=""){if(!$B&&preg_match("~^$hf*DELIMITER\\s+(\\S+)~i",$E,$_)){$pb=$_[1];$E=substr($E,strlen($_[0]));}else{preg_match('('.preg_quote($pb)."\\s*|$fe)",$E,$_,PREG_OFFSET_CAPTURE,$B);list($kc,$oe)=$_[0];if(!$kc&&$mc&&!feof($mc))$E.=fread($mc,1e5);else{if(!$kc&&rtrim($E)=="")break;$B=$oe+strlen($kc);if($kc&&rtrim($kc)!=$pb){while(preg_match('('.($kc=='/*'?'\\*/':($kc=='['?']':(ereg('^-- |^#',$kc)?"\n":preg_quote($kc)."|\\\\."))).'|$)s',$E,$_,PREG_OFFSET_CAPTURE,$B)){$Ue=$_[0][0];if(!$Ue&&$mc&&!feof($mc))$E.=fread($mc,1e5);else{$B=$_[0][1]+strlen($Ue);if($Ue[0]!="\\")break;}}}else{$Fb=false;$D=substr($E,0,$oe);$Ua++;$we="<pre id='sql-$Ua'><code class='jush-$v'>".shorten_utf8(trim($D),1000)."</code></pre>\n";if(!$_POST["only_errors"]){echo$we;ob_flush();flush();}$jf=microtime();if($g->multi_query($D)&&is_object($h)&&preg_match("~^$hf*USE\\b~isU",$D))$h->query($D);do{$F=$g->store_result();$Gb=microtime();$Ff=format_time($jf,$Gb).(strlen($D)<1000?" <a href='".h(ME)."sql=".urlencode(trim($D))."'>".'Edit'."</a>":"");if($g->error){echo($_POST["only_errors"]?$we:""),"<p class='error'>".'Error in query'.": ".error()."\n";$Mb[]=" <a href='#sql-$Ua'>$Ua</a>";if($_POST["error_stops"])break
2;}elseif(is_object($F)){$Td=select($F,$h);if(!$_POST["only_errors"]){echo"<form action='' method='post'>\n","<p>".($F->num_rows?lang(array('%d row','%d rows'),$F->num_rows):"").$Ff;$r="export-$Ua";$Vb=", <a href='#$r' onclick=\"return !toggle('$r');\">".'Export'."</a><span id='$r' class='hidden'>: ".html_select("output",$b->dumpOutput(),$pa["output"])." ".html_select("format",$zb,$pa["format"])."<input type='hidden' name='query' value='".h($D)."'>"." <input type='submit' name='export' value='".'Export'."'><input type='hidden' name='token' value='$R'></span>\n";if($h&&preg_match("~^($hf|\\()*SELECT\\b~isU",$D)&&($Ub=explain($h,$D))){$r="explain-$Ua";echo", <a href='#$r' onclick=\"return !toggle('$r');\">EXPLAIN</a>$Vb","<div id='$r' class='hidden'>\n";select($Ub,$h,($v=="sql"?"http://dev.mysql.com/doc/refman/".substr($g->server_info,0,3)."/en/explain-output.html#explain_":""),$Td);echo"</div>\n";}else
echo$Vb;echo"</form>\n";}}else{if(preg_match("~^$hf*(CREATE|DROP|ALTER)$hf+(DATABASE|SCHEMA)\\b~isU",$D)){restart_session();set_session("dbs",null);session_write_close();}if(!$_POST["only_errors"])echo"<p class='message' title='".h($g->info)."'>".lang(array('Query executed OK, %d row affected.','Query executed OK, %d rows affected.'),$g->affected_rows)."$Ff\n";}$jf=$Gb;}while($g->next_result());$ad+=substr_count($D.$kc,"\n");$E=substr($E,$B);$B=0;}}}}if($Fb)echo"<p class='message'>".'No commands to execute.'."\n";elseif($_POST["only_errors"])echo"<p class='message'>".lang(array('%d query executed OK.','%d queries executed OK.'),$Ua-count($Mb)).format_time($Mf,microtime())."\n";elseif($Mb&&$Ua>1)echo"<p class='error'>".'Error in query'.": ".implode("",$Mb)."\n";}else
echo"<p class='error'>".upload_error($E)."\n";}echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
<p>';$D=$_GET["sql"];if($_POST)$D=$_POST["query"];elseif($_GET["history"]=="all")$D=$vc;elseif($_GET["history"]!="")$D=$vc[$_GET["history"]][0];textarea("query",$D,20);echo($_POST?"":"<script type='text/javascript'>document.getElementsByTagName('textarea')[0].focus();</script>\n"),"<p>".(ini_bool("file_uploads")?'File upload'.': <input type="file" name="sql_file"'.($_FILES&&$_FILES["sql_file"]["error"]!=4?'':' onchange="this.form[\'only_errors\'].checked = true;"').'> (&lt; '.ini_get("upload_max_filesize").'B)':'File uploads are disabled.'),'<p>
<input type="submit" value="Execute" title="Ctrl+Enter">
<input type="hidden" name="token" value="',$R,'">
',checkbox("error_stops",1,$_POST["error_stops"],'Stop on error')."\n",checkbox("only_errors",1,$_POST["only_errors"],'Show only errors')."\n";print_fieldset("webfile",'From server',$_POST["webfile"],"document.getElementById('form')['only_errors'].checked = true; ");$Xa=array();foreach(array("gz"=>"zlib","bz2"=>"bz2")as$w=>$W){if(extension_loaded($W))$Xa[]=".$w";}echo
sprintf('Webserver file %s',"<code>adminer.sql".($Xa?"[".implode("|",$Xa)."]":"")."</code>"),' <input type="submit" name="webfile" value="'.'Run file'.'">',"</div></fieldset>\n";if($vc){print_fieldset("history",'History',$_GET["history"]!="");foreach($vc
as$w=>$W){list($D,$Ff)=$W;echo'<a href="'.h(ME."sql=&history=$w").'">'.'Edit'."</a> <span class='time'>".@date("H:i:s",$Ff)."</span> <code class='jush-$v'>".shorten_utf8(ltrim(str_replace("\n"," ",str_replace("\r","",preg_replace('~^(#|-- ).*~m','',$D)))),80,"</code>")."<br>\n";}echo"<input type='submit' name='clear' value='".'Clear'."'>\n","<a href='".h(ME."sql=&history=all")."'>".'Edit all'."</a>\n","</div></fieldset>\n";}echo'
</form>
';}elseif(isset($_GET["edit"])){$a=$_GET["edit"];$Z=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0]):""):where($_GET));$eg=(isset($_GET["select"])?$_POST["edit"]:$Z);$m=fields($a);foreach($m
as$A=>$l){if(!isset($l["privileges"][$eg?"update":"insert"])||$b->fieldName($l)=="")unset($m[$A]);}if($_POST&&!$k&&!isset($_GET["select"])){$cd=$_POST["referer"];if($_POST["insert"])$cd=($eg?null:$_SERVER["REQUEST_URI"]);elseif(!ereg('^.+&select=.+$',$cd))$cd=ME."select=".urlencode($a);if(isset($_POST["delete"]))query_redirect("DELETE".limit1("FROM ".table($a)," WHERE $Z"),$cd,'Item has been deleted.');else{$L=array();foreach($m
as$A=>$l){$W=process_input($l);if($W!==false&&$W!==null)$L[idf_escape($A)]=($eg?"\n".idf_escape($A)." = $W":$W);}if($eg){if(!$L)redirect($cd);query_redirect("UPDATE".limit1(table($a)." SET".implode(",",$L),"\nWHERE $Z"),$cd,'Item has been updated.');}else{$F=insert_into($a,$L);$Uc=($F?last_id():0);queries_redirect($cd,sprintf('Item%s has been inserted.',($Uc?" $Uc":"")),$F);}}}$vf=$b->tableName(table_status($a));page_header(($eg?'Edit':'Insert'),$k,array("select"=>array($a,$vf)),$vf);$H=null;if($_POST["save"])$H=(array)$_POST["fields"];elseif($Z){$J=array();foreach($m
as$A=>$l){if(isset($l["privileges"]["select"]))$J[]=($_POST["clone"]&&$l["auto_increment"]?"'' AS ":($v=="sql"&&ereg("enum|set",$l["type"])?"1*".idf_escape($A)." AS ":"")).idf_escape($A);}$H=array();if($J){$I=get_rows("SELECT".limit(implode(", ",$J)." FROM ".table($a)," WHERE $Z",(isset($_GET["select"])?2:1)));$H=(isset($_GET["select"])&&count($I)!=1?null:reset($I));}}if($H===false)echo"<p class='error'>".'No rows.'."\n";echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';if($m){echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($m
as$A=>$l){echo"<tr><th>".$b->fieldName($l);$ob=$_GET["set"][bracket_escape($A)];$X=($H!==null?($H[$A]!=""&&$v=="sql"&&ereg("enum|set",$l["type"])?(is_array($H[$A])?array_sum($H[$A]):+$H[$A]):$H[$A]):(!$eg&&$l["auto_increment"]?"":(isset($_GET["select"])?false:($ob!==null?$ob:$l["default"]))));if(!$_POST["save"]&&is_string($X))$X=$b->editVal($X,$l);$o=($_POST["save"]?(string)$_POST["function"][$A]:($eg&&$l["on_update"]=="CURRENT_TIMESTAMP"?"now":($X===false?null:($X!==null?'':'NULL'))));if($l["type"]=="timestamp"&&$X=="CURRENT_TIMESTAMP"){$X="";$o="now";}input($l,$X,$o);echo"\n";}echo"</table>\n";}echo'<p>
';if($m){echo"<input type='submit' value='".'Save'."'>\n";if(!isset($_GET["select"]))echo"<input type='submit' name='insert' value='".($eg?'Save and continue edit':'Save and insert next')."' title='Ctrl+Shift+Enter'>\n";}echo($eg?"<input type='submit' name='delete' value='".'Delete'."' onclick=\"return confirm('".'Are you sure?'."');\">\n":($_POST||!$m?"":"<script type='text/javascript'>document.getElementById('form').getElementsByTagName('td')[1].firstChild.focus();</script>\n"));if(isset($_GET["select"]))hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["create"])){$a=$_GET["create"];$ge=array('HASH','LINEAR HASH','KEY','LINEAR KEY','RANGE','LIST');$He=referencable_primary($a);$ic=array();foreach($He
as$vf=>$l)$ic[str_replace("`","``",$vf)."`".str_replace("`","``",$l["field"])]=$vf;$Wd=array();$Xd=array();if($a!=""){$Wd=fields($a);$Xd=table_status($a);}if($_POST&&!$_POST["fields"])$_POST["fields"]=array();if($_POST&&!$k&&!$_POST["add"]&&!$_POST["drop_col"]&&!$_POST["up"]&&!$_POST["down"]){if($_POST["drop"])query_redirect("DROP TABLE ".table($a),substr(ME,0,-1),'Table has been dropped.');else{$m=array();$va=array();$gg=false;$gc=array();ksort($_POST["fields"]);$Vd=reset($Wd);$ta=" FIRST";foreach($_POST["fields"]as$w=>$l){$n=$ic[$l["type"]];$Vf=($n!==null?$He[$n]:$l);if($l["field"]!=""){if(!$l["has_default"])$l["default"]=null;$ob=eregi_replace(" *on update CURRENT_TIMESTAMP","",$l["default"]);if($ob!=$l["default"]){$l["on_update"]="CURRENT_TIMESTAMP";$l["default"]=$ob;}if($w==$_POST["auto_increment_col"])$l["auto_increment"]=true;$Ae=process_field($l,$Vf);$va[]=array($l["orig"],$Ae,$ta);if($Ae!=process_field($Vd,$Vd)){$m[]=array($l["orig"],$Ae,$ta);if($l["orig"]!=""||$ta)$gg=true;}if($n!==null)$gc[idf_escape($l["field"])]=($a!=""&&$v!="sqlite"?"ADD":" ")." FOREIGN KEY (".idf_escape($l["field"]).") REFERENCES ".table($ic[$l["type"]])." (".idf_escape($Vf["field"]).")".(ereg("^($Id)\$",$l["on_delete"])?" ON DELETE $l[on_delete]":"");$ta=" AFTER ".idf_escape($l["field"]);}elseif($l["orig"]!=""){$gg=true;$m[]=array($l["orig"]);}if($l["orig"]!=""){$Vd=next($Wd);if(!$Vd)$ta="";}}$ie="";if(in_array($_POST["partition_by"],$ge)){$je=array();if($_POST["partition_by"]=='RANGE'||$_POST["partition_by"]=='LIST'){foreach(array_filter($_POST["partition_names"])as$w=>$W){$X=$_POST["partition_values"][$w];$je[]="\nPARTITION ".idf_escape($W)." VALUES ".($_POST["partition_by"]=='RANGE'?"LESS THAN":"IN").($X!=""?" ($X)":" MAXVALUE");}}$ie.="\nPARTITION BY $_POST[partition_by]($_POST[partition])".($je?" (".implode(",",$je)."\n)":($_POST["partitions"]?" PARTITIONS ".(+$_POST["partitions"]):""));}elseif($a!=""&&support("partitioning"))$ie.="\nREMOVE PARTITIONING";$nd='Table has been altered.';if($a==""){cookie("adminer_engine",$_POST["Engine"]);$nd='Table has been created.';}$A=trim($_POST["name"]);queries_redirect(ME."table=".urlencode($A),$nd,alter_table($a,$A,($v=="sqlite"&&($gg||$gc)?$va:$m),$gc,$_POST["Comment"],($_POST["Engine"]&&$_POST["Engine"]!=$Xd["Engine"]?$_POST["Engine"]:""),($_POST["Collation"]&&$_POST["Collation"]!=$Xd["Collation"]?$_POST["Collation"]:""),($_POST["Auto_increment"]!=""?+$_POST["Auto_increment"]:""),$ie));}}page_header(($a!=""?'Alter table':'Create table'),$k,array("table"=>$a),$a);$H=array("Engine"=>$_COOKIE["adminer_engine"],"fields"=>array(array("field"=>"","type"=>(isset($T["int"])?"int":(isset($T["integer"])?"integer":"")))),"partition_names"=>array(""),);if($_POST){$H=$_POST;if($H["auto_increment_col"])$H["fields"][$H["auto_increment_col"]]["auto_increment"]=true;process_fields($H["fields"]);}elseif($a!=""){$H=$Xd;$H["name"]=$a;$H["fields"]=array();if(!$_GET["auto_increment"])$H["Auto_increment"]="";foreach($Wd
as$l){$l["has_default"]=isset($l["default"]);if($l["on_update"])$l["default"].=" ON UPDATE $l[on_update]";$H["fields"][]=$l;}if(support("partitioning")){$nc="FROM information_schema.PARTITIONS WHERE TABLE_SCHEMA = ".q(DB)." AND TABLE_NAME = ".q($a);$F=$g->query("SELECT PARTITION_METHOD, PARTITION_ORDINAL_POSITION, PARTITION_EXPRESSION $nc ORDER BY PARTITION_ORDINAL_POSITION DESC LIMIT 1");list($H["partition_by"],$H["partitions"],$H["partition"])=$F->fetch_row();$H["partition_names"]=array();$H["partition_values"]=array();foreach(get_rows("SELECT PARTITION_NAME, PARTITION_DESCRIPTION $nc AND PARTITION_NAME != '' ORDER BY PARTITION_ORDINAL_POSITION")as$Te){$H["partition_names"][]=$Te["PARTITION_NAME"];$H["partition_values"][]=$Te["PARTITION_DESCRIPTION"];}$H["partition_names"][]="";}}$Ra=collations();$qf=floor(extension_loaded("suhosin")?(min(ini_get("suhosin.request.max_vars"),ini_get("suhosin.post.max_vars"))-13)/10:0);if($qf&&count($H["fields"])>$qf)echo"<p class='error'>".h(sprintf('Maximum number of allowed fields exceeded. Please increase %s and %s.','suhosin.post.max_vars','suhosin.request.max_vars'))."\n";$Ib=engines();foreach($Ib
as$Hb){if(!strcasecmp($Hb,$H["Engine"])){$H["Engine"]=$Hb;break;}}echo'
<form action="" method="post" id="form">
<p>
Table name: <input name="name" maxlength="64" value="',h($H["name"]),'">
';if($a==""&&!$_POST){?><script type='text/javascript'>document.getElementById('form')['name'].focus();</script><?php }echo($Ib?html_select("Engine",array(""=>"(".'engine'.")")+$Ib,$H["Engine"]):""),' ',($Ra&&!ereg("sqlite|mssql",$v)?html_select("Collation",array(""=>"(".'collation'.")")+$Ra,$H["Collation"]):""),' <input type="submit" value="Save">
<table cellspacing="0" id="edit-fields" class="nowrap">
';$Wa=($_POST?$_POST["comments"]:$H["Comment"]!="");if(!$_POST&&!$Wa){foreach($H["fields"]as$l){if($l["comment"]!=""){$Wa=true;break;}}}edit_fields($H["fields"],$Ra,"TABLE",$qf,$ic,$Wa);echo'</table>
<p>
Auto Increment: <input name="Auto_increment" size="6" value="',h($H["Auto_increment"]),'">
<label class="jsonly"><input type="checkbox" name="defaults" value="1"',($_POST["defaults"]?" checked":""),' onclick="columnShow(this.checked, 5);">Default values</label>
',(support("comment")?checkbox("comments",1,$Wa,'Comment',"columnShow(this.checked, 6); toggle('Comment'); if (this.checked) this.form['Comment'].focus();",true).' <input id="Comment" name="Comment" value="'.h($H["Comment"]).'" maxlength="60"'.($Wa?'':' class="hidden"').'>':''),'<p>
<input type="submit" value="Save">
';if($_GET["create"]!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$R,'">
';if(support("partitioning")){$he=ereg('RANGE|LIST',$H["partition_by"]);print_fieldset("partition",'Partition by',$H["partition_by"]);echo'<p>
',html_select("partition_by",array(-1=>"")+$ge,$H["partition_by"],"partitionByChange(this);"),'(<input name="partition" value="',h($H["partition"]),'">)
Partitions: <input name="partitions" size="2" value="',h($H["partitions"]),'"',($he||!$H["partition_by"]?" class='hidden'":""),'>
<table cellspacing="0" id="partition-table"',($he?"":" class='hidden'"),'>
<thead><tr><th>Partition name<th>Values</thead>
';foreach($H["partition_names"]as$w=>$W){echo'<tr>','<td><input name="partition_names[]" value="'.h($W).'"'.($w==count($H["partition_names"])-1?' onchange="partitionNameChange(this);"':'').'>','<td><input name="partition_values[]" value="'.h($H["partition_values"][$w]).'">';}echo'</table>
</div></fieldset>
';}echo'</form>
';}elseif(isset($_GET["indexes"])){$a=$_GET["indexes"];$Bc=array("PRIMARY","UNIQUE","INDEX");$P=table_status($a);if(eregi("MyISAM|M?aria",$P["Engine"]))$Bc[]="FULLTEXT";$u=indexes($a);if($v=="sqlite"){unset($Bc[0]);unset($u[""]);}if($_POST&&!$k&&!$_POST["add"]){$c=array();foreach($_POST["indexes"]as$t){$A=$t["name"];if(in_array($t["type"],$Bc)){$f=array();$Zc=array();$L=array();ksort($t["columns"]);foreach($t["columns"]as$w=>$e){if($e!=""){$x=$t["lengths"][$w];$L[]=idf_escape($e).($x?"(".(+$x).")":"");$f[]=$e;$Zc[]=($x?$x:null);}}if($f){$Tb=$u[$A];if($Tb){ksort($Tb["columns"]);ksort($Tb["lengths"]);if($t["type"]==$Tb["type"]&&array_values($Tb["columns"])===$f&&(!$Tb["lengths"]||array_values($Tb["lengths"])===$Zc)){unset($u[$A]);continue;}}$c[]=array($t["type"],$A,"(".implode(", ",$L).")");}}}foreach($u
as$A=>$Tb)$c[]=array($Tb["type"],$A,"DROP");if(!$c)redirect(ME."table=".urlencode($a));queries_redirect(ME."table=".urlencode($a),'Indexes have been altered.',alter_indexes($a,$c));}page_header('Indexes',$k,array("table"=>$a),$a);$m=array_keys(fields($a));$H=array("indexes"=>$u);if($_POST){$H=$_POST;if($_POST["add"]){foreach($H["indexes"]as$w=>$t){if($t["columns"][count($t["columns"])]!="")$H["indexes"][$w]["columns"][]="";}$t=end($H["indexes"]);if($t["type"]||array_filter($t["columns"],'strlen')||array_filter($t["lengths"],'strlen'))$H["indexes"][]=array("columns"=>array(1=>""));}}else{foreach($H["indexes"]as$w=>$t){$H["indexes"][$w]["name"]=$w;$H["indexes"][$w]["columns"][]="";}$H["indexes"][]=array("columns"=>array(1=>""));}echo'
<form action="" method="post">
<table cellspacing="0" class="nowrap">
<thead><tr><th>Index Type<th>Column (length)<th>Name</thead>
';$Lc=1;foreach($H["indexes"]as$t){echo"<tr><td>".html_select("indexes[$Lc][type]",array(-1=>"")+$Bc,$t["type"],($Lc==count($H["indexes"])?"indexesAddRow(this);":1))."<td>";ksort($t["columns"]);$q=1;foreach($t["columns"]as$w=>$e){echo"<span>".html_select("indexes[$Lc][columns][$q]",array(-1=>"")+$m,$e,($q==count($t["columns"])?"indexesAddColumn":"indexesChangeColumn")."(this, '".js_escape($v=="sql"?"":$_GET["indexes"]."_")."');"),"<input name='indexes[$Lc][lengths][$q]' size='2' value='".h($t["lengths"][$w])."'> </span>";$q++;}echo"<td><input name='indexes[$Lc][name]' value='".h($t["name"])."'>\n";$Lc++;}echo'</table>
<p>
<input type="submit" value="Save">
<noscript><p><input type="submit" name="add" value="Add next"></noscript>
<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["database"])){if($_POST&&!$k&&!isset($_POST["add_x"])){restart_session();$A=trim($_POST["name"]);if($_POST["drop"]){$_GET["db"]="";queries_redirect(remove_from_uri("db|database"),'Database has been dropped.',drop_databases(array(DB)));}elseif(DB!==$A){if(DB!=""){$_GET["db"]=$A;queries_redirect(preg_replace('~db=[^&]*&~','',ME)."db=".urlencode($A),'Database has been renamed.',rename_database($A,$_POST["collation"]));}else{$i=explode("\n",str_replace("\r","",$A));$of=true;$Tc="";foreach($i
as$j){if(count($i)==1||$j!=""){if(!create_database($j,$_POST["collation"]))$of=false;$Tc=$j;}}queries_redirect(ME."db=".urlencode($Tc),'Database has been created.',$of);}}else{if(!$_POST["collation"])redirect(substr(ME,0,-1));query_redirect("ALTER DATABASE ".idf_escape($A).(eregi('^[a-z0-9_]+$',$_POST["collation"])?" COLLATE $_POST[collation]":""),substr(ME,0,-1),'Database has been altered.');}}page_header(DB!=""?'Alter database':'Create database',$k,array(),DB);$Ra=collations();$A=DB;$Qa=null;if($_POST){$A=$_POST["name"];$Qa=$_POST["collation"];}elseif(DB!="")$Qa=db_collation(DB,$Ra);elseif($v=="sql"){foreach(get_vals("SHOW GRANTS")as$p){if(preg_match('~ ON (`(([^\\\\`]|``|\\\\.)*)%`\\.\\*)?~',$p,$_)&&$_[1]){$A=stripcslashes(idf_unescape("`$_[2]`"));break;}}}echo'
<form action="" method="post">
<p>
',($_POST["add_x"]||strpos($A,"\n")?'<textarea id="name" name="name" rows="10" cols="40">'.h($A).'</textarea><br>':'<input id="name" name="name" value="'.h($A).'" maxlength="64">')."\n".($Ra?html_select("collation",array(""=>"(".'collation'.")")+$Ra,$Qa):"");?>
<script type='text/javascript'>document.getElementById('name').focus();</script>
<input type="submit" value="Save">
<?php
if(DB!="")echo"<input type='submit' name='drop' value='".'Drop'."'".confirm().">\n";elseif(!$_POST["add_x"]&&$_GET["db"]=="")echo"<input type='image' name='add' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=3.5.1' alt='+' title='".'Add next'."'>\n";echo'<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["scheme"])){if($_POST&&!$k){$z=preg_replace('~ns=[^&]*&~','',ME)."ns=";if($_POST["drop"])query_redirect("DROP SCHEMA ".idf_escape($_GET["ns"]),$z,'Schema has been dropped.');else{$A=trim($_POST["name"]);$z.=urlencode($A);if($_GET["ns"]=="")query_redirect("CREATE SCHEMA ".idf_escape($A),$z,'Schema has been created.');elseif($_GET["ns"]!=$A)query_redirect("ALTER SCHEMA ".idf_escape($_GET["ns"])." RENAME TO ".idf_escape($A),$z,'Schema has been altered.');else
redirect($z);}}page_header($_GET["ns"]!=""?'Alter schema':'Create schema',$k);$H=$_POST;if(!$H)$H=array("name"=>$_GET["ns"]);echo'
<form action="" method="post">
<p><input id="name" name="name" value="',h($H["name"]);?>">
<script type='text/javascript'>document.getElementById('name').focus();</script>
<input type="submit" value="Save">
<?php
if($_GET["ns"]!="")echo"<input type='submit' name='drop' value='".'Drop'."'".confirm().">\n";echo'<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["call"])){$da=$_GET["call"];page_header('Call'.": ".h($da),$k);$Qe=routine($da,(isset($_GET["callf"])?"FUNCTION":"PROCEDURE"));$Ac=array();$Zd=array();foreach($Qe["fields"]as$q=>$l){if(substr($l["inout"],-3)=="OUT")$Zd[$q]="@".idf_escape($l["field"])." AS ".idf_escape($l["field"]);if(!$l["inout"]||substr($l["inout"],0,2)=="IN")$Ac[]=$q;}if(!$k&&$_POST){$Ja=array();foreach($Qe["fields"]as$w=>$l){if(in_array($w,$Ac)){$W=process_input($l);if($W===false)$W="''";if(isset($Zd[$w]))$g->query("SET @".idf_escape($l["field"])." = $W");}$Ja[]=(isset($Zd[$w])?"@".idf_escape($l["field"]):$W);}$E=(isset($_GET["callf"])?"SELECT":"CALL")." ".idf_escape($da)."(".implode(", ",$Ja).")";echo"<p><code class='jush-$v'>".h($E)."</code> <a href='".h(ME)."sql=".urlencode($E)."'>".'Edit'."</a>\n";if(!$g->multi_query($E))echo"<p class='error'>".error()."\n";else{$h=connect();if(is_object($h))$h->select_db(DB);do{$F=$g->store_result();if(is_object($F))select($F,$h);else
echo"<p class='message'>".lang(array('Routine has been called, %d row affected.','Routine has been called, %d rows affected.'),$g->affected_rows)."\n";}while($g->next_result());if($Zd)select($g->query("SELECT ".implode(", ",$Zd)));}}echo'
<form action="" method="post">
';if($Ac){echo"<table cellspacing='0'>\n";foreach($Ac
as$w){$l=$Qe["fields"][$w];$A=$l["field"];echo"<tr><th>".$b->fieldName($l);$X=$_POST["fields"][$A];if($X!=""){if($l["type"]=="enum")$X=+$X;if($l["type"]=="set")$X=array_sum($X);}input($l,$X,(string)$_POST["function"][$A]);echo"\n";}echo"</table>\n";}echo'<p>
<input type="submit" value="Call">
<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["foreign"])){$a=$_GET["foreign"];if($_POST&&!$k&&!$_POST["add"]&&!$_POST["change"]&&!$_POST["change-js"]){if($_POST["drop"])query_redirect("ALTER TABLE ".table($a)."\nDROP ".($v=="sql"?"FOREIGN KEY ":"CONSTRAINT ").idf_escape($_GET["name"]),ME."table=".urlencode($a),'Foreign key has been dropped.');else{$gf=array_filter($_POST["source"],'strlen');ksort($gf);$Bf=array();foreach($gf
as$w=>$W)$Bf[$w]=$_POST["target"][$w];query_redirect("ALTER TABLE ".table($a).($_GET["name"]!=""?"\nDROP ".($v=="sql"?"FOREIGN KEY ":"CONSTRAINT ").idf_escape($_GET["name"]).",":"")."\nADD FOREIGN KEY (".implode(", ",array_map('idf_escape',$gf)).") REFERENCES ".table($_POST["table"])." (".implode(", ",array_map('idf_escape',$Bf)).")".(ereg("^($Id)\$",$_POST["on_delete"])?" ON DELETE $_POST[on_delete]":"").(ereg("^($Id)\$",$_POST["on_update"])?" ON UPDATE $_POST[on_update]":""),ME."table=".urlencode($a),($_GET["name"]!=""?'Foreign key has been altered.':'Foreign key has been created.'));$k='Source and target columns must have the same data type, there must be an index on the target columns and referenced data must exist.'."<br>$k";}}page_header('Foreign key',$k,array("table"=>$a),$a);$H=array("table"=>$a,"source"=>array(""));if($_POST){$H=$_POST;ksort($H["source"]);if($_POST["add"])$H["source"][]="";elseif($_POST["change"]||$_POST["change-js"])$H["target"]=array();}elseif($_GET["name"]!=""){$ic=foreign_keys($a);$H=$ic[$_GET["name"]];$H["source"][]="";}$gf=array_keys(fields($a));$Bf=($a===$H["table"]?$gf:array_keys(fields($H["table"])));$Ge=array();foreach(table_status()as$A=>$P){if(fk_support($P))$Ge[]=$A;}echo'
<form action="" method="post">
<p>
';if($H["db"]==""&&$H["ns"]==""){echo'Target table:
',html_select("table",$Ge,$H["table"],"this.form['change-js'].value = '1'; this.form.submit();"),'<input type="hidden" name="change-js" value="">
<noscript><p><input type="submit" name="change" value="Change"></noscript>
<table cellspacing="0">
<thead><tr><th>Source<th>Target</thead>
';$Lc=0;foreach($H["source"]as$w=>$W){echo"<tr>","<td>".html_select("source[".(+$w)."]",array(-1=>"")+$gf,$W,($Lc==count($H["source"])-1?"foreignAddRow(this);":1)),"<td>".html_select("target[".(+$w)."]",$Bf,$H["target"][$w]);$Lc++;}echo'</table>
<p>
ON DELETE: ',html_select("on_delete",array(-1=>"")+explode("|",$Id),$H["on_delete"]),' ON UPDATE: ',html_select("on_update",array(-1=>"")+explode("|",$Id),$H["on_update"]),'<p>
<input type="submit" value="Save">
<noscript><p><input type="submit" name="add" value="Add column"></noscript>
';}if($_GET["name"]!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["view"])){$a=$_GET["view"];$xb=false;if($_POST&&!$k){$A=trim($_POST["name"]);$xb=drop_create("DROP VIEW ".table($a),"CREATE VIEW ".table($A)." AS\n$_POST[select]",($_POST["drop"]?substr(ME,0,-1):ME."table=".urlencode($A)),'View has been dropped.','View has been altered.','View has been created.',$a);}page_header(($a!=""?'Alter view':'Create view'),$k,array("table"=>$a),$a);$H=$_POST;if(!$H&&$a!=""){$H=view($a);$H["name"]=$a;}echo'
<form action="" method="post">
<p>Name: <input name="name" value="',h($H["name"]),'" maxlength="64">
<p>';textarea("select",$H["select"]);echo'<p>
';if($xb){echo'<input type="hidden" name="dropped" value="1">';}echo'<input type="submit" value="Save">
';if($_GET["view"]!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["event"])){$aa=$_GET["event"];$Ic=array("YEAR","QUARTER","MONTH","DAY","HOUR","MINUTE","WEEK","SECOND","YEAR_MONTH","DAY_HOUR","DAY_MINUTE","DAY_SECOND","HOUR_MINUTE","HOUR_SECOND","MINUTE_SECOND");$lf=array("ENABLED"=>"ENABLE","DISABLED"=>"DISABLE","SLAVESIDE_DISABLED"=>"DISABLE ON SLAVE");if($_POST&&!$k){if($_POST["drop"])query_redirect("DROP EVENT ".idf_escape($aa),substr(ME,0,-1),'Event has been dropped.');elseif(in_array($_POST["INTERVAL_FIELD"],$Ic)&&isset($lf[$_POST["STATUS"]])){$Ve="\nON SCHEDULE ".($_POST["INTERVAL_VALUE"]?"EVERY ".q($_POST["INTERVAL_VALUE"])." $_POST[INTERVAL_FIELD]".($_POST["STARTS"]?" STARTS ".q($_POST["STARTS"]):"").($_POST["ENDS"]?" ENDS ".q($_POST["ENDS"]):""):"AT ".q($_POST["STARTS"]))." ON COMPLETION".($_POST["ON_COMPLETION"]?"":" NOT")." PRESERVE";queries_redirect(substr(ME,0,-1),($aa!=""?'Event has been altered.':'Event has been created.'),queries(($aa!=""?"ALTER EVENT ".idf_escape($aa).$Ve.($aa!=$_POST["EVENT_NAME"]?"\nRENAME TO ".idf_escape($_POST["EVENT_NAME"]):""):"CREATE EVENT ".idf_escape($_POST["EVENT_NAME"]).$Ve)."\n".$lf[$_POST["STATUS"]]." COMMENT ".q($_POST["EVENT_COMMENT"]).rtrim(" DO\n$_POST[EVENT_DEFINITION]",";").";"));}}page_header(($aa!=""?'Alter event'.": ".h($aa):'Create event'),$k);$H=$_POST;if(!$H&&$aa!=""){$I=get_rows("SELECT * FROM information_schema.EVENTS WHERE EVENT_SCHEMA = ".q(DB)." AND EVENT_NAME = ".q($aa));$H=reset($I);}echo'
<form action="" method="post">
<table cellspacing="0">
<tr><th>Name<td><input name="EVENT_NAME" value="',h($H["EVENT_NAME"]),'" maxlength="64">
<tr><th>Start<td><input name="STARTS" value="',h("$H[EXECUTE_AT]$H[STARTS]"),'">
<tr><th>End<td><input name="ENDS" value="',h($H["ENDS"]),'">
<tr><th>Every<td><input name="INTERVAL_VALUE" value="',h($H["INTERVAL_VALUE"]),'" size="6"> ',html_select("INTERVAL_FIELD",$Ic,$H["INTERVAL_FIELD"]),'<tr><th>Status<td>',html_select("STATUS",$lf,$H["STATUS"]),'<tr><th>Comment<td><input name="EVENT_COMMENT" value="',h($H["EVENT_COMMENT"]),'" maxlength="64">
<tr><th>&nbsp;<td>',checkbox("ON_COMPLETION","PRESERVE",$H["ON_COMPLETION"]=="PRESERVE",'On completion preserve'),'</table>
<p>';textarea("EVENT_DEFINITION",$H["EVENT_DEFINITION"]);echo'<p>
<input type="submit" value="Save">
';if($aa!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["procedure"])){$da=$_GET["procedure"];$Qe=(isset($_GET["function"])?"FUNCTION":"PROCEDURE");$Re=routine_languages();$xb=false;if($_POST&&!$k&&!$_POST["add"]&&!$_POST["drop_col"]&&!$_POST["up"]&&!$_POST["down"]){$L=array();$m=(array)$_POST["fields"];ksort($m);foreach($m
as$l){if($l["field"]!="")$L[]=(ereg("^($Fc)\$",$l["inout"])?"$l[inout] ":"").idf_escape($l["field"]).process_type($l,"CHARACTER SET");}$xb=drop_create("DROP $Qe ".idf_escape($da),"CREATE $Qe ".idf_escape(trim($_POST["name"]))." (".implode(", ",$L).")".(isset($_GET["function"])?" RETURNS".process_type($_POST["returns"],"CHARACTER SET"):"").(in_array($_POST["language"],$Re)?" LANGUAGE $_POST[language]":"").rtrim("\n$_POST[definition]",";").";",substr(ME,0,-1),'Routine has been dropped.','Routine has been altered.','Routine has been created.',$da);}page_header(($da!=""?(isset($_GET["function"])?'Alter function':'Alter procedure').": ".h($da):(isset($_GET["function"])?'Create function':'Create procedure')),$k);$Ra=get_vals("SHOW CHARACTER SET");sort($Ra);$H=array("fields"=>array());if($_POST){$H=$_POST;$H["fields"]=(array)$H["fields"];process_fields($H["fields"]);}elseif($da!=""){$H=routine($da,$Qe);$H["name"]=$da;}echo'
<form action="" method="post" id="form">
<p>Name: <input name="name" value="',h($H["name"]),'" maxlength="64">
',($Re?'Language'.": ".html_select("language",$Re,$H["language"]):""),'<table cellspacing="0" class="nowrap">
';edit_fields($H["fields"],$Ra,$Qe);if(isset($_GET["function"])){echo"<tr><td>".'Return type';edit_type("returns",$H["returns"],$Ra);}echo'</table>
<p>';textarea("definition",$H["definition"]);echo'<p>
<input type="submit" value="Save">
';if($da!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}if($xb){echo'<input type="hidden" name="dropped" value="1">';}echo'<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["sequence"])){$fa=$_GET["sequence"];if($_POST&&!$k){$z=substr(ME,0,-1);$A=trim($_POST["name"]);if($_POST["drop"])query_redirect("DROP SEQUENCE ".idf_escape($fa),$z,'Sequence has been dropped.');elseif($fa=="")query_redirect("CREATE SEQUENCE ".idf_escape($A),$z,'Sequence has been created.');elseif($fa!=$A)query_redirect("ALTER SEQUENCE ".idf_escape($fa)." RENAME TO ".idf_escape($A),$z,'Sequence has been altered.');else
redirect($z);}page_header($fa!=""?'Alter sequence'.": ".h($fa):'Create sequence',$k);$H=$_POST;if(!$H)$H=array("name"=>$fa);echo'
<form action="" method="post">
<p><input name="name" value="',h($H["name"]),'">
<input type="submit" value="Save">
';if($fa!="")echo"<input type='submit' name='drop' value='".'Drop'."'".confirm().">\n";echo'<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["type"])){$ga=$_GET["type"];if($_POST&&!$k){$z=substr(ME,0,-1);if($_POST["drop"])query_redirect("DROP TYPE ".idf_escape($ga),$z,'Type has been dropped.');else
query_redirect("CREATE TYPE ".idf_escape(trim($_POST["name"]))." $_POST[as]",$z,'Type has been created.');}page_header($ga!=""?'Alter type'.": ".h($ga):'Create type',$k);$H=$_POST;if(!$H)$H=array("as"=>"AS ");echo'
<form action="" method="post">
<p>
';if($ga!="")echo"<input type='submit' name='drop' value='".'Drop'."'".confirm().">\n";else{echo"<input name='name' value='".h($H['name'])."'>\n";textarea("as",$H["as"]);echo"<p><input type='submit' value='".'Save'."'>\n";}echo'<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["trigger"])){$a=$_GET["trigger"];$Tf=trigger_options();$Rf=array("INSERT","UPDATE","DELETE");$xb=false;if($_POST&&!$k&&in_array($_POST["Timing"],$Tf["Timing"])&&in_array($_POST["Event"],$Rf)&&in_array($_POST["Type"],$Tf["Type"])){$Gf=" $_POST[Timing] $_POST[Event]";$Hd=" ON ".table($a);$xb=drop_create("DROP TRIGGER ".idf_escape($_GET["name"]).($v=="pgsql"?$Hd:""),"CREATE TRIGGER ".idf_escape($_POST["Trigger"]).($v=="mssql"?$Hd.$Gf:$Gf.$Hd).rtrim(" $_POST[Type]\n$_POST[Statement]",";").";",ME."table=".urlencode($a),'Trigger has been dropped.','Trigger has been altered.','Trigger has been created.',$_GET["name"]);}page_header(($_GET["name"]!=""?'Alter trigger'.": ".h($_GET["name"]):'Create trigger'),$k,array("table"=>$a));$H=$_POST;if(!$H)$H=trigger($_GET["name"])+array("Trigger"=>$a."_bi");echo'
<form action="" method="post" id="form">
<table cellspacing="0">
<tr><th>Time<td>',html_select("Timing",$Tf["Timing"],$H["Timing"],"if (/^".preg_quote($a,"/")."_[ba][iud]$/.test(this.form['Trigger'].value)) this.form['Trigger'].value = '".js_escape($a)."_' + selectValue(this).charAt(0).toLowerCase() + selectValue(this.form['Event']).charAt(0).toLowerCase();"),'<tr><th>Event<td>',html_select("Event",$Rf,$H["Event"],"this.form['Timing'].onchange();"),'<tr><th>Type<td>',html_select("Type",$Tf["Type"],$H["Type"]),'</table>
<p>Name: <input name="Trigger" value="',h($H["Trigger"]),'" maxlength="64">
<p>';textarea("Statement",$H["Statement"]);echo'<p>
<input type="submit" value="Save">
';if($_GET["name"]!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}if($xb){echo'<input type="hidden" name="dropped" value="1">';}echo'<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["user"])){$ha=$_GET["user"];$ze=array(""=>array("All privileges"=>""));foreach(get_rows("SHOW PRIVILEGES")as$H){foreach(explode(",",($H["Privilege"]=="Grant option"?"":$H["Context"]))as$bb)$ze[$bb][$H["Privilege"]]=$H["Comment"];}$ze["Server Admin"]+=$ze["File access on server"];$ze["Databases"]["Create routine"]=$ze["Procedures"]["Create routine"];unset($ze["Procedures"]["Create routine"]);$ze["Columns"]=array();foreach(array("Select","Insert","Update","References")as$W)$ze["Columns"][$W]=$ze["Tables"][$W];unset($ze["Server Admin"]["Usage"]);foreach($ze["Tables"]as$w=>$W)unset($ze["Databases"][$w]);$zd=array();if($_POST){foreach($_POST["objects"]as$w=>$W)$zd[$W]=(array)$zd[$W]+(array)$_POST["grants"][$w];}$qc=array();$Fd="";if(isset($_GET["host"])&&($F=$g->query("SHOW GRANTS FOR ".q($ha)."@".q($_GET["host"])))){while($H=$F->fetch_row()){if(preg_match('~GRANT (.*) ON (.*) TO ~',$H[0],$_)&&preg_match_all('~ *([^(,]*[^ ,(])( *\\([^)]+\\))?~',$_[1],$gd,PREG_SET_ORDER)){foreach($gd
as$W){if($W[1]!="USAGE")$qc["$_[2]$W[2]"][$W[1]]=true;if(ereg(' WITH GRANT OPTION',$H[0]))$qc["$_[2]$W[2]"]["GRANT OPTION"]=true;}}if(preg_match("~ IDENTIFIED BY PASSWORD '([^']+)~",$H[0],$_))$Fd=$_[1];}}if($_POST&&!$k){$Gd=(isset($_GET["host"])?q($ha)."@".q($_GET["host"]):"''");$_d=q($_POST["user"])."@".q($_POST["host"]);$ke=q($_POST["pass"]);if($_POST["drop"])query_redirect("DROP USER $Gd",ME."privileges=",'User has been dropped.');else{$gb=false;if($Gd!=$_d){$gb=queries(($g->server_info<5?"GRANT USAGE ON *.* TO":"CREATE USER")." $_d IDENTIFIED BY".($_POST["hashed"]?" PASSWORD":"")." $ke");$k=!$gb;}elseif($_POST["pass"]!=$Fd||!$_POST["hashed"])queries("SET PASSWORD FOR $_d = ".($_POST["hashed"]?$ke:"PASSWORD($ke)"));if(!$k){$Ne=array();foreach($zd
as$Cd=>$p){if(isset($_GET["grant"]))$p=array_filter($p);$p=array_keys($p);if(isset($_GET["grant"]))$Ne=array_diff(array_keys(array_filter($zd[$Cd],'strlen')),$p);elseif($Gd==$_d){$Ed=array_keys((array)$qc[$Cd]);$Ne=array_diff($Ed,$p);$p=array_diff($p,$Ed);unset($qc[$Cd]);}if(preg_match('~^(.+)\\s*(\\(.*\\))?$~U',$Cd,$_)&&(!grant("REVOKE",$Ne,$_[2]," ON $_[1] FROM $_d")||!grant("GRANT",$p,$_[2]," ON $_[1] TO $_d"))){$k=true;break;}}}if(!$k&&isset($_GET["host"])){if($Gd!=$_d)queries("DROP USER $Gd");elseif(!isset($_GET["grant"])){foreach($qc
as$Cd=>$Ne){if(preg_match('~^(.+)(\\(.*\\))?$~U',$Cd,$_))grant("REVOKE",array_keys($Ne),$_[2]," ON $_[1] FROM $_d");}}}queries_redirect(ME."privileges=",(isset($_GET["host"])?'User has been altered.':'User has been created.'),!$k);if($gb)$g->query("DROP USER $_d");}}page_header((isset($_GET["host"])?'Username'.": ".h("$ha@$_GET[host]"):'Create user'),$k,array("privileges"=>array('','Privileges')));if($_POST){$H=$_POST;$qc=$zd;}else{$H=$_GET+array("host"=>$g->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', -1)"));$H["pass"]=$Fd;if($Fd!="")$H["hashed"]=true;$qc[(DB!=""&&!isset($_GET["host"])?idf_escape(addcslashes(DB,"%_")):"").".*"]=array();}echo'<form action="" method="post">
<table cellspacing="0">
<tr><th>Server<td><input name="host" maxlength="60" value="',h($H["host"]),'">
<tr><th>Username<td><input name="user" maxlength="16" value="',h($H["user"]),'">
<tr><th>Password<td><input id="pass" name="pass" value="',h($H["pass"]),'">
';if(!$H["hashed"]){echo'<script type="text/javascript">typePassword(document.getElementById(\'pass\'));</script>';}echo
checkbox("hashed",1,$H["hashed"],'Hashed',"typePassword(this.form['pass'], this.checked);"),'</table>

';echo"<table cellspacing='0'>\n","<thead><tr><th colspan='2'><a href='http://dev.mysql.com/doc/refman/".substr($g->server_info,0,3)."/en/grant.html#priv_level' target='_blank' rel='noreferrer'>".'Privileges'."</a>";$q=0;foreach($qc
as$Cd=>$p){echo'<th>'.($Cd!="*.*"?"<input name='objects[$q]' value='".h($Cd)."' size='10'>":"<input type='hidden' name='objects[$q]' value='*.*' size='10'>*.*");$q++;}echo"</thead>\n";foreach(array(""=>"","Server Admin"=>'Server',"Databases"=>'Database',"Tables"=>'Table',"Columns"=>'Column',"Procedures"=>'Routine',)as$bb=>$qb){foreach((array)$ze[$bb]as$ye=>$Va){echo"<tr".odd()."><td".($qb?">$qb<td":" colspan='2'").' lang="en" title="'.h($Va).'">'.h($ye);$q=0;foreach($qc
as$Cd=>$p){$A="'grants[$q][".h(strtoupper($ye))."]'";$X=$p[strtoupper($ye)];if($bb=="Server Admin"&&$Cd!=(isset($qc["*.*"])?"*.*":".*"))echo"<td>&nbsp;";elseif(isset($_GET["grant"]))echo"<td><select name=$A><option><option value='1'".($X?" selected":"").">".'Grant'."<option value='0'".($X=="0"?" selected":"").">".'Revoke'."</select>";else
echo"<td align='center'><input type='checkbox' name=$A value='1'".($X?" checked":"").($ye=="All privileges"?" id='grants-$q-all'":($ye=="Grant option"?"":" onclick=\"if (this.checked) formUncheck('grants-$q-all');\"")).">";$q++;}}}echo"</table>\n",'<p>
<input type="submit" value="Save">
';if(isset($_GET["host"])){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["processlist"])){if(support("kill")&&$_POST&&!$k){$Qc=0;foreach((array)$_POST["kill"]as$W){if(queries("KILL ".(+$W)))$Qc++;}queries_redirect(ME."processlist=",lang(array('%d process has been killed.','%d processes have been killed.'),$Qc),$Qc||!$_POST["kill"]);}page_header('Process list',$k);echo'
<form action="" method="post">
<table cellspacing="0" onclick="tableClick(event);" class="nowrap checkable">
';$q=-1;foreach(process_list()as$q=>$H){if(!$q)echo"<thead><tr lang='en'>".(support("kill")?"<th>&nbsp;":"")."<th>".implode("<th>",array_keys($H))."</thead>\n";echo"<tr".odd().">".(support("kill")?"<td>".checkbox("kill[]",$H["Id"],0):"");foreach($H
as$w=>$W)echo"<td>".(($v=="sql"&&$w=="Info"&&ereg("Query|Killed",$H["Command"])&&$W!="")||($v=="pgsql"&&$w=="current_query"&&$W!="<IDLE>")||($v=="oracle"&&$w=="sql_text"&&$W!="")?"<code class='jush-$v'>".shorten_utf8($W,100,"</code>").' <a href="'.h(ME.($H["db"]!=""?"db=".urlencode($H["db"])."&":"")."sql=".urlencode($W)).'">'.'Edit'.'</a>':nbsp($W));echo"\n";}echo'</table>
<script type=\'text/javascript\'>tableCheck();</script>
<p>
';if(support("kill")){echo($q+1)."/".sprintf('%d in total',$g->result("SELECT @@max_connections")),"<p><input type='submit' value='".'Kill'."'>\n";}echo'<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["select"])){$a=$_GET["select"];$P=table_status($a);$u=indexes($a);$m=fields($a);$ic=column_foreign_keys($a);$Dd="";if($P["Oid"]=="t"){$Dd=($v=="sqlite"?"rowid":"oid");$u[]=array("type"=>"PRIMARY","columns"=>array($Dd));}parse_str($_COOKIE["adminer_import"],$qa);$Oe=array();$f=array();$Ef=null;foreach($m
as$w=>$l){$A=$b->fieldName($l);if(isset($l["privileges"]["select"])&&$A!=""){$f[$w]=html_entity_decode(strip_tags($A));if(ereg('text|lob',$l["type"]))$Ef=$b->selectLengthProcess();}$Oe+=$l["privileges"];}list($J,$rc)=$b->selectColumnsProcess($f,$u);$Z=$b->selectSearchProcess($m,$u);$Qd=$b->selectOrderProcess($m,$u);$y=$b->selectLimitProcess();$nc=($J?implode(", ",$J):($Dd?"$Dd, ":"")."*")."\nFROM ".table($a);$sc=($rc&&count($rc)<count($J)?"\nGROUP BY ".implode(", ",$rc):"").($Qd?"\nORDER BY ".implode(", ",$Qd):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$ag=>$H)echo$g->result("SELECT".limit(idf_escape(key($H))." FROM ".table($a)," WHERE ".where_check($ag).($Z?" AND ".implode(" AND ",$Z):"").($Qd?" ORDER BY ".implode(", ",$Qd):""),1));exit;}if($_POST&&!$k){$qg="(".implode(") OR (",array_map('where_check',(array)$_POST["check"])).")";$ue=$cg=null;foreach($u
as$t){if($t["type"]=="PRIMARY"){$ue=array_flip($t["columns"]);$cg=($J?$ue:array());break;}}foreach((array)$cg
as$w=>$W){if(in_array(idf_escape($w),$J))unset($cg[$w]);}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($a);$b->dumpTable($a,"");if(!is_array($_POST["check"])||$cg===array()){$pg=$Z;if(is_array($_POST["check"]))$pg[]="($qg)";$E="SELECT $nc".($pg?"\nWHERE ".implode(" AND ",$pg):"").$sc;}else{$Yf=array();foreach($_POST["check"]as$W)$Yf[]="(SELECT".limit($nc,"\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($W).$sc,1).")";$E=implode(" UNION ALL ",$Yf);}$b->dumpData($a,"table",$E);exit;}if(!$b->selectEmailProcess($Z,$ic)){if($_POST["save"]||$_POST["delete"]){$F=true;$ra=0;$E=table($a);$L=array();if(!$_POST["delete"]){foreach($f
as$A=>$W){$W=process_input($m[$A]);if($W!==null){if($_POST["clone"])$L[idf_escape($A)]=($W!==false?$W:idf_escape($A));elseif($W!==false)$L[]=idf_escape($A)." = $W";}}$E.=($_POST["clone"]?" (".implode(", ",array_keys($L)).")\nSELECT ".implode(", ",$L)."\nFROM ".table($a):" SET\n".implode(",\n",$L));}if($_POST["delete"]||$L){$Ta="UPDATE";if($_POST["delete"]){$Ta="DELETE";$E="FROM $E";}if($_POST["clone"]){$Ta="INSERT";$E="INTO $E";}if($_POST["all"]||($cg===array()&&$_POST["check"])||count($rc)<count($J)){$F=queries("$Ta $E".($_POST["all"]?($Z?"\nWHERE ".implode(" AND ",$Z):""):"\nWHERE $qg"));$ra=$g->affected_rows;}else{foreach((array)$_POST["check"]as$W){$F=queries($Ta.limit1($E,"\nWHERE ".where_check($W)));if(!$F)break;$ra+=$g->affected_rows;}}}$nd=lang(array('%d item has been affected.','%d items have been affected.'),$ra);if($_POST["clone"]&&$F&&$ra==1){$Uc=last_id();if($Uc)$nd=sprintf('Item%s has been inserted.'," $Uc");}queries_redirect(remove_from_uri("page"),$nd,$F);}elseif(!$_POST["import"]){if(!$_POST["val"])$k='Double click on a value to modify it.';else{$F=true;$ra=0;foreach($_POST["val"]as$ag=>$H){$L=array();foreach($H
as$w=>$W){$w=bracket_escape($w,1);$L[]=idf_escape($w)." = ".(ereg('char|text',$m[$w]["type"])||$W!=""?$b->processInput($m[$w],$W):"NULL");}$E=table($a)." SET ".implode(", ",$L);$pg=" WHERE ".where_check($ag).($Z?" AND ".implode(" AND ",$Z):"");$F=queries("UPDATE".(count($rc)<count($J)?" $E$pg":limit1($E,$pg)));if(!$F)break;$ra+=$g->affected_rows;}queries_redirect(remove_from_uri(),lang(array('%d item has been affected.','%d items have been affected.'),$ra),$F);}}elseif(is_string($bc=get_file("csv_file",true))){cookie("adminer_import","output=".urlencode($qa["output"])."&format=".urlencode($_POST["separator"]));$F=true;$Sa=array_keys($m);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$bc,$gd);$ra=count($gd[0]);begin();$bf=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));foreach($gd[0]as$w=>$W){preg_match_all("~((\"[^\"]*\")+|[^$bf]*)$bf~",$W.$bf,$hd);if(!$w&&!array_diff($hd[1],$Sa)){$Sa=$hd[1];$ra--;}else{$L=array();foreach($hd[1]as$q=>$Pa)$L[idf_escape($Sa[$q])]=($Pa==""&&$m[$Sa[$q]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$Pa))));$F=insert_update($a,$L,$ue);if(!$F)break;}}if($F)queries("COMMIT");queries_redirect(remove_from_uri("page"),lang(array('%d row has been imported.','%d rows have been imported.'),$ra),$F);queries("ROLLBACK");}else$k=upload_error($bc);}}$vf=$b->tableName($P);page_header('Select'.": $vf",$k);session_write_close();$L=null;if(isset($Oe["insert"])){$L="";foreach((array)$_GET["where"]as$W){if(count($ic[$W["col"]])==1&&($W["op"]=="="||(!$W["op"]&&!ereg('[_%]',$W["val"]))))$L.="&set".urlencode("[".bracket_escape($W["col"])."]")."=".urlencode($W["val"]);}}$b->selectLinks($P,$L);if(!$f)echo"<p class='error'>".'Unable to select the table'.($m?".":": ".error())."\n";else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($a).'">',"</div>\n";$b->selectColumnsPrint($J,$f);$b->selectSearchPrint($Z,$f,$u);$b->selectOrderPrint($Qd,$f,$u);$b->selectLimitPrint($y);$b->selectLengthPrint($Ef);$b->selectActionPrint($u);echo"</form>\n";$ce=$_GET["page"];if($ce=="last"){$lc=$g->result("SELECT COUNT(*) FROM ".table($a).($Z?" WHERE ".implode(" AND ",$Z):""));$ce=floor(max(0,$lc-1)/$y);}$E="SELECT".limit((+$y&&$rc&&count($rc)<count($J)&&$v=="sql"?"SQL_CALC_FOUND_ROWS ":"").$nc,($Z?"\nWHERE ".implode(" AND ",$Z):"").$sc,($y!=""?+$y:null),($ce?$y*$ce:0),"\n");echo$b->selectQuery($E);$F=$g->query($E);if(!$F)echo"<p class='error'>".error()."\n";else{if($v=="mssql")$F->seek($y*$ce);$Eb=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$I=array();while($H=$F->fetch_assoc()){if($ce&&$v=="oracle")unset($H["RNUM"]);$I[]=$H;}if($_GET["page"]!="last")$lc=(+$y&&$rc&&count($rc)<count($J)?($v=="sql"?$g->result(" SELECT FOUND_ROWS()"):$g->result("SELECT COUNT(*) FROM ($E) x")):count($I));if(!$I)echo"<p class='message'>".'No rows.'."\n";else{$Da=$b->backwardKeys($a,$vf);echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$rc&&$J?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".'edit'."</a>");$yd=array();$pc=array();reset($J);$De=1;foreach($I[0]as$w=>$W){if($w!=$Dd){$W=$_GET["columns"][key($J)];$l=$m[$J?($W?$W["col"]:current($J)):$w];$A=($l?$b->fieldName($l,$De):"*");if($A!=""){$De++;$yd[$w]=$A;$e=idf_escape($w);$yc=remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($w);$qb="&desc%5B0%5D=1";echo'<th onmouseover="columnMouse(this);" onmouseout="columnMouse(this, \' hidden\');">','<a href="'.h($yc.($Qd[0]==$e||$Qd[0]==$w||(!$Qd&&count($rc)<count($J)&&$rc[0]==$e)?$qb:'')).'">';echo(!$J||$W?apply_sql_function($W["fun"],$A):h(current($J)))."</a>";echo"<span class='column hidden'>","<a href='".h($yc.$qb)."' title='".'descending'."' class='text'> ↓</a>";if(!$W["fun"])echo'<a href="#fieldset-search" onclick="selectSearch(\''.h(js_escape($w)).'\'); return false;" title="'.'Search'.'" class="text jsonly"> =</a>';echo"</span>";}$pc[$w]=$W["fun"];next($J);}}$Zc=array();if($_GET["modify"]){foreach($I
as$H){foreach($H
as$w=>$W)$Zc[$w]=max($Zc[$w],min(40,strlen(utf8_decode($W))));}}echo($Da?"<th>".'Relations':"")."</thead>\n";foreach($b->rowDescriptions($I,$ic)as$xd=>$H){$Zf=unique_array($I[$xd],$u);$ag="";foreach($Zf
as$w=>$W)$ag.="&".($W!==null?urlencode("where[".bracket_escape($w)."]")."=".urlencode($W):"null%5B%5D=".urlencode($w));echo"<tr".odd().">".(!$rc&&$J?"":"<td>".checkbox("check[]",substr($ag,1),in_array(substr($ag,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").(count($rc)<count($J)||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($a).$ag)."'>".'edit'."</a>"));foreach($H
as$w=>$W){if(isset($yd[$w])){$l=$m[$w];if($W!=""&&(!isset($Eb[$w])||$Eb[$w]!=""))$Eb[$w]=(is_mail($W)?$yd[$w]:"");$z="";$W=$b->editVal($W,$l);if($W!==null){if(ereg('blob|bytea|raw|file',$l["type"])&&$W!="")$z=h(ME.'download='.urlencode($a).'&field='.urlencode($w).$ag);if($W==="")$W="&nbsp;";elseif(is_utf8($W)){if($Ef!=""&&ereg('text|blob',$l["type"]))$W=shorten_utf8($W,max(0,+$Ef));else$W=h($W);}if(!$z){foreach((array)$ic[$w]as$n){if(count($ic[$w])==1||end($n["source"])==$w){$z="";foreach($n["source"]as$q=>$gf)$z.=where_link($q,$n["target"][$q],$I[$xd][$gf]);$z=h(($n["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($n["db"]),ME):ME).'select='.urlencode($n["table"]).$z);if(count($n["source"])==1)break;}}}if($w=="COUNT(*)"){$z=h(ME."select=".urlencode($a));$q=0;foreach((array)$_GET["where"]as$V){if(!array_key_exists($V["col"],$Zf))$z.=h(where_link($q++,$V["col"],$V["val"],$V["op"]));}foreach($Zf
as$Nc=>$V)$z.=h(where_link($q++,$Nc,$V));}}if(!$z){if(is_mail($W))$z="mailto:$W";if($Be=is_url($H[$w]))$z=($Be=="http"&&$ba?$H[$w]:"$Be://www.adminer.org/redirect/?url=".urlencode($H[$w]));}$r=h("val[$ag][".bracket_escape($w)."]");$X=$_POST["val"][$ag][bracket_escape($w)];$uc=h($X!==null?$X:$H[$w]);$ed=strpos($W,"<i>...</i>");$Bb=is_utf8($W)&&$I[$xd][$w]==$H[$w]&&!$pc[$w];$Df=ereg('text|lob',$l["type"]);echo(($_GET["modify"]&&$Bb)||$X!==null?"<td>".($Df?"<textarea name='$r' cols='30' rows='".(substr_count($H[$w],"\n")+1)."'>$uc</textarea>":"<input name='$r' value='$uc' size='$Zc[$w]'>"):"<td id='$r' ondblclick=\"".($Bb?"selectDblClick(this, event".($ed?", 2":($Df?", 1":"")).")":"alert('".h('Use edit link to modify this value.')."')").";\">".$b->selectVal($W,$z,$l));}}if($Da)echo"<td>";$b->backwardKeysPrint($Da,$I[$xd]);echo"</tr>\n";}echo"</table>\n",(!$rc&&$J?"":"<script type='text/javascript'>tableCheck();</script>\n");}if($I||$ce){$Pb=true;if($_GET["page"]!="last"&&+$y&&count($rc)>=count($J)&&($lc>=$y||$ce)){$lc=found_rows($P,$Z);if($lc<max(1e4,2*($ce+1)*$y)){ob_flush();flush();$lc=$g->result("SELECT COUNT(*) FROM ".table($a).($Z?" WHERE ".implode(" AND ",$Z):""));}else$Pb=false;}echo"<p class='pages'>";if(+$y&&$lc>$y){$jd=floor(($lc-1)/$y);echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".'Page'."', '".($ce+1)."'), event); return false;\">".'Page'."</a>:",pagination(0,$ce).($ce>5?" ...":"");for($q=max(1,$ce-4);$q<min($jd,$ce+5);$q++)echo
pagination($q,$ce);echo($ce+5<$jd?" ...":"").($Pb?pagination($jd,$ce):' <a href="'.h(remove_from_uri()."&page=last").'">'.'last'."</a>");}echo" (".($Pb?"":"~ ").lang(array('%d row','%d rows'),$lc).") ".checkbox("all",1,0,'whole result')."\n";if($b->selectCommandPrint()){echo'<fieldset><legend>Edit</legend><div>
<input type="submit" value="Save"',($_GET["modify"]?'':' title="'.'Double click on a value to modify it.'.'" class="jsonly"');?>>
<input type="submit" name="edit" value="Edit">
<input type="submit" name="clone" value="Clone">
<input type="submit" name="delete" value="Delete" onclick="return confirm('Are you sure? (' + (this.form['all'].checked ? <?php echo$lc,' : formChecked(this, /check/)) + \')\');">
</div></fieldset>
';}$jc=$b->dumpFormat();if($jc){print_fieldset("export",'Export');$ae=$b->dumpOutput();echo($ae?html_select("output",$ae,$qa["output"])." ":""),html_select("format",$jc,$qa["format"])," <input type='submit' name='export' value='".'Export'."'>\n","</div></fieldset>\n";}}if($b->selectImportPrint()){print_fieldset("import",'Import',!$I);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$qa["format"],1);echo" <input type='submit' name='import' value='".'Import'."'>","<input type='hidden' name='token' value='$R'>\n","</div></fieldset>\n";}$b->selectEmailPrint(array_filter($Eb,'strlen'),$f);echo"</form>\n";}}}elseif(isset($_GET["variables"])){$kf=isset($_GET["status"]);page_header($kf?'Status':'Variables');$kg=($kf?show_status():show_variables());if(!$kg)echo"<p class='message'>".'No rows.'."\n";else{echo"<table cellspacing='0'>\n";foreach($kg
as$w=>$W){echo"<tr>","<th><code class='jush-".$v.($kf?"status":"set")."'>".h($w)."</code>","<td>".nbsp($W);}echo"</table>\n";}}elseif(isset($_GET["script"])){header("Content-Type: text/javascript; charset=utf-8");if($_GET["script"]=="db"){$sf=array("Data_length"=>0,"Index_length"=>0,"Data_free"=>0);foreach(table_status()as$P){$r=js_escape($P["Name"]);json_row("Comment-$r",nbsp($P["Comment"]));if(!is_view($P)){foreach(array("Engine","Collation")as$w)json_row("$w-$r",nbsp($P[$w]));foreach($sf+array("Auto_increment"=>0,"Rows"=>0)as$w=>$W){if($P[$w]!=""){$W=number_format($P[$w],0,'.',',');json_row("$w-$r",($w=="Rows"&&$W&&$P["Engine"]==($if=="pgsql"?"table":"InnoDB")?"~ $W":$W));if(isset($sf[$w]))$sf[$w]+=($P["Engine"]!="InnoDB"||$w!="Data_free"?$P[$w]:0);}elseif(array_key_exists($w,$P))json_row("$w-$r");}}}foreach($sf
as$w=>$W)json_row("sum-$w",number_format($W,0,'.',','));json_row("");}else{foreach(count_tables($b->databases())as$j=>$W)json_row("tables-".js_escape($j),$W);json_row("");}exit;}else{$Af=array_merge((array)$_POST["tables"],(array)$_POST["views"]);if($Af&&!$k&&!$_POST["search"]){$F=true;$nd="";if($v=="sql"&&count($_POST["tables"])>1&&($_POST["drop"]||$_POST["truncate"]||$_POST["copy"]))queries("SET foreign_key_checks = 0");if($_POST["truncate"]){if($_POST["tables"])$F=truncate_tables($_POST["tables"]);$nd='Tables have been truncated.';}elseif($_POST["move"]){$F=move_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$nd='Tables have been moved.';}elseif($_POST["copy"]){$F=copy_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$nd='Tables have been copied.';}elseif($_POST["drop"]){if($_POST["views"])$F=drop_views($_POST["views"]);if($F&&$_POST["tables"])$F=drop_tables($_POST["tables"]);$nd='Tables have been dropped.';}elseif($v!="sql"){$F=($v=="sqlite"?queries("VACUUM"):apply_queries("VACUUM".($_POST["optimize"]?"":" ANALYZE"),$_POST["tables"]));$nd='Tables have been optimized.';}elseif($_POST["tables"]&&($F=queries(($_POST["optimize"]?"OPTIMIZE":($_POST["check"]?"CHECK":($_POST["repair"]?"REPAIR":"ANALYZE")))." TABLE ".implode(", ",array_map('idf_escape',$_POST["tables"]))))){while($H=$F->fetch_assoc())$nd.="<b>".h($H["Table"])."</b>: ".h($H["Msg_text"])."<br>";}queries_redirect(substr(ME,0,-1),$nd,$F);}page_header(($_GET["ns"]==""?'Database'.": ".h(DB):'Schema'.": ".h($_GET["ns"])),$k,true);if($b->homepage()){if($_GET["ns"]!==""){echo"<h3>".'Tables and views'."</h3>\n";$_f=tables_list();if(!$_f)echo"<p class='message'>".'No tables.'."\n";else{echo"<form action='' method='post'>\n","<p>".'Search data in tables'.": <input name='query' value='".h($_POST["query"])."'> <input type='submit' name='search' value='".'Search'."'>\n";if($_POST["search"]&&$_POST["query"]!="")search_tables();echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^(tables|views)\[/);">','<th>'.'Table','<td>'.'Engine','<td>'.'Collation','<td>'.'Data Length','<td>'.'Index Length','<td>'.'Data Free','<td>'.'Auto Increment','<td>'.'Rows',(support("comment")?'<td>'.'Comment':''),"</thead>\n";foreach($_f
as$A=>$S){$mg=($S!==null&&!eregi("table",$S));echo'<tr'.odd().'><td>'.checkbox(($mg?"views[]":"tables[]"),$A,in_array($A,$Af,true),"","formUncheck('check-all');"),'<th><a href="'.h(ME).'table='.urlencode($A).'" title="'.'Show structure'.'">'.h($A).'</a>';if($mg){echo'<td colspan="6"><a href="'.h(ME)."view=".urlencode($A).'" title="'.'Alter view'.'">'.'View'.'</a>','<td align="right"><a href="'.h(ME)."select=".urlencode($A).'" title="'.'Select data'.'">?</a>';}else{foreach(array("Engine"=>array(),"Collation"=>array(),"Data_length"=>array("create",'Alter table'),"Index_length"=>array("indexes",'Alter indexes'),"Data_free"=>array("edit",'New item'),"Auto_increment"=>array("auto_increment=1&create",'Alter table'),"Rows"=>array("select",'Select data'),)as$w=>$z)echo($z?"<td align='right'><a href='".h(ME."$z[0]=").urlencode($A)."' id='$w-".h($A)."' title='$z[1]'>?</a>":"<td id='$w-".h($A)."'>&nbsp;");}echo(support("comment")?"<td id='Comment-".h($A)."'>&nbsp;":"");}echo"<tr><td>&nbsp;<th>".sprintf('%d in total',count($_f)),"<td>".nbsp($v=="sql"?$g->result("SELECT @@storage_engine"):""),"<td>".nbsp(db_collation(DB,collations()));foreach(array("Data_length","Index_length","Data_free")as$w)echo"<td align='right' id='sum-$w'>&nbsp;";echo"</table>\n","<script type='text/javascript'>tableCheck();</script>\n";if(!information_schema(DB)){echo"<p>".(ereg('^(sql|sqlite|pgsql)$',$v)?($v!="sqlite"?"<input type='submit' value='".'Analyze'."'> ":"")."<input type='submit' name='optimize' value='".'Optimize'."'> ":"").($v=="sql"?"<input type='submit' name='check' value='".'Check'."'> <input type='submit' name='repair' value='".'Repair'."'> ":"")."<input type='submit' name='truncate' value='".'Truncate'."'".confirm("formChecked(this, /tables/)")."> <input type='submit' name='drop' value='".'Drop'."'".confirm("formChecked(this, /tables|views/)").">\n";$i=(support("scheme")?schemas():$b->databases());if(count($i)!=1&&$v!="sqlite"){$j=(isset($_POST["target"])?$_POST["target"]:(support("scheme")?$_GET["ns"]:DB));echo"<p>".'Move to other database'.": ",($i?html_select("target",$i,$j):'<input name="target" value="'.h($j).'">')," <input type='submit' name='move' value='".'Move'."'>",(support("copy")?" <input type='submit' name='copy' value='".'Copy'."'>":""),"\n";}echo"<input type='hidden' name='token' value='$R'>\n";}echo"</form>\n";}echo'<p><a href="'.h(ME).'create=">'.'Create table'."</a>\n";if(support("view"))echo'<a href="'.h(ME).'view=">'.'Create view'."</a>\n";if(support("routine")){echo"<h3>".'Routines'."</h3>\n";$Se=routines();if($Se){echo"<table cellspacing='0'>\n",'<thead><tr><th>'.'Name'.'<td>'.'Type'.'<td>'.'Return type'."<td>&nbsp;</thead>\n";odd('');foreach($Se
as$H){echo'<tr'.odd().'>','<th><a href="'.h(ME).($H["ROUTINE_TYPE"]!="PROCEDURE"?'callf=':'call=').urlencode($H["ROUTINE_NAME"]).'">'.h($H["ROUTINE_NAME"]).'</a>','<td>'.h($H["ROUTINE_TYPE"]),'<td>'.h($H["DTD_IDENTIFIER"]),'<td><a href="'.h(ME).($H["ROUTINE_TYPE"]!="PROCEDURE"?'function=':'procedure=').urlencode($H["ROUTINE_NAME"]).'">'.'Alter'."</a>";}echo"</table>\n";}echo'<p>'.(support("procedure")?'<a href="'.h(ME).'procedure=">'.'Create procedure'.'</a> ':'').'<a href="'.h(ME).'function=">'.'Create function'."</a>\n";}if(support("sequence")){echo"<h3>".'Sequences'."</h3>\n";$cf=get_vals("SELECT sequence_name FROM information_schema.sequences WHERE sequence_schema = current_schema()");if($cf){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Name'."</thead>\n";odd('');foreach($cf
as$W)echo"<tr".odd()."><th><a href='".h(ME)."sequence=".urlencode($W)."'>".h($W)."</a>\n";echo"</table>\n";}echo"<p><a href='".h(ME)."sequence='>".'Create sequence'."</a>\n";}if(support("type")){echo"<h3>".'User types'."</h3>\n";$T=types();if($T){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Name'."</thead>\n";odd('');foreach($T
as$W)echo"<tr".odd()."><th><a href='".h(ME)."type=".urlencode($W)."'>".h($W)."</a>\n";echo"</table>\n";}echo"<p><a href='".h(ME)."type='>".'Create type'."</a>\n";}if(support("event")){echo"<h3>".'Events'."</h3>\n";$I=get_rows("SHOW EVENTS");if($I){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Name'."<td>".'Schedule'."<td>".'Start'."<td>".'End'."</thead>\n";foreach($I
as$H){echo"<tr>",'<th><a href="'.h(ME).'event='.urlencode($H["Name"]).'">'.h($H["Name"])."</a>","<td>".($H["Execute at"]?'At given time'."<td>".$H["Execute at"]:'Every'." ".$H["Interval value"]." ".$H["Interval field"]."<td>$H[Starts]"),"<td>$H[Ends]";}echo"</table>\n";$Ob=$g->result("SELECT @@event_scheduler");if($Ob&&$Ob!="ON")echo"<p class='error'><code class='jush-sqlset'>event_scheduler</code>: ".h($Ob)."\n";}echo'<p><a href="'.h(ME).'event=">'.'Create event'."</a>\n";}if($_f)echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=db');</script>\n";}}}page_footer();