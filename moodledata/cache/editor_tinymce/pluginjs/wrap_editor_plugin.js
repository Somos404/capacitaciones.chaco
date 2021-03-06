
/**
 * Plugin for Moodle 'wrap' button.
 *
 * @package   tinymce_wrap
 * @copyright 2013 Damyon Wiese
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
(function(){tinymce.create('tinymce.ui.Wrap:tinymce.ui.Control',{Wrap:function(id,s){this.parent(id,s);this.groupEndClass='mceGroupEnd';this.toolbarEndClass='mceLast';this.groupEndPlaceholder='mceToolbarEndPlaceholder';this.groupStartClass='mceGroupStart';this.wrapClass='mceWrap';this.noWrapClass='mceNoWrap';this.toolbarClass='mceToolbar';this.selectListArrowClass='mceOpen';this.setDisabled(!0)},renderHTML:function(){var separator=tinymce.DOM.createHTML('span',{role:'separator','aria-orientation':'vertical',tabindex:'-1'});return'</td>'+'<td style="position: relative" class="'+this.groupEndPlaceholder+'">'+separator+'</td>'+'<td style="position: relative" class="'+this.groupStartClass+' '+this.wrapClass+'">'+separator+'</td>'},postRender:function(){var self=this;YUI().use('node',function(Y){var endGroupElements=tinymce.DOM.select('td.'+self.groupEndPlaceholder),index=0,curElement,endOfLast,endBarElements=tinymce.DOM.select('td.'+self.toolbarEndClass);for(index=0;index<endGroupElements.length;index++){if(!endGroupElements.hasOwnProperty(index)){continue}
curElement=Y.one(endGroupElements[index]);endOfLast=curElement.previous('td').previous('td');if(endOfLast){endOfLast.addClass(self.groupEndClass)}}
for(index=0;index<endBarElements.length;index++){if(!endBarElements.hasOwnProperty(index)){continue}
curElement=Y.one(endBarElements[index]);endOfLast=curElement.previous('td');if(endOfLast){endOfLast.addClass(self.groupEndClass)}}
var toolbars=Y.all('table.'+self.toolbarClass),buttonWrapPoint=5;toolbars.each(function(toolbar){var count=0;widgets=toolbar.all('td.'+self.wrapClass+', td > a');widgets.each(function(widget){if(widget.hasClass(self.wrapClass)){if(count>=buttonWrapPoint){count=0}else{widget.addClass(self.noWrapClass)}}else{if(widget.hasClass(self.selectListArrowClass)||(widget.getAttribute('role')==='button')){count++}else{count+=2}}})})})}});tinymce.create('tinymce.plugins.wrapPlugin',{createControl:function(name,cc){if(name==="wrap"){return new tinymce.ui.Wrap()}
return!1},getInfo:function(){return{longname:'wrap plugin',author:'Damyon Wiese',authorurl:'http://moodle.com/hq',infourl:'http://docs.moodle.org/en/TinyMCE',version:"1.0"}}});tinymce.PluginManager.add('wrap',tinymce.plugins.wrapPlugin)})()