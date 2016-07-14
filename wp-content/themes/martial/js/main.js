var Conclave=(function(){
	var buArr =[],arlen;
	return {
		init:function(){
			this.addCN();this.clickReg();
		},
		addCN:function(){
			var buarr=["holder_bu_center","holder_bu_awayR1"];
			for(var i=1;i<=buarr.length;++i){
				jQuery("#bu"+i).removeClass().addClass(buarr[i-1]+" holder_bu");
			}
		},
		clickReg:function(){
			jQuery(".holder_bu").each(function(){
				buArr.push(jQuery(this).attr('class'))
			});
			arlen=buArr.length;
			for(var i=0;i<arlen;++i){
				buArr[i]=buArr[i].replace(" holder_bu","")
			};
			jQuery(".holder_bu").click(function(buid){
				var me=this,id=this.id||buid,joId=jQuery("#"+id),joCN=joId.attr("class").replace(" holder_bu","");
				var cpos=buArr.indexOf(joCN),mpos=buArr.indexOf("holder_bu_center");
				if(cpos!=mpos){
					tomove=cpos>mpos?arlen-cpos+mpos:mpos-cpos;
					while(tomove){
						var t=buArr.shift();
						buArr.push(t);
						for(var i=1;i<=arlen;++i){
							jQuery("#bu"+i).removeClass().addClass(buArr[i-1]+" holder_bu");
						}
						--tomove;
					}
				}
			})
		},
		auto:function(){
			for(i=1;i<=1;++i){
				jQuery(".holder_bu").delay(4000).trigger('click',"bu"+i).delay(4000);
				console.log("called");
			}
		}
	};
})();

jQuery(document).ready(function(){
	window['conclave']=Conclave;
	Conclave.init();
})