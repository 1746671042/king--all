{extends file='index.tpl'}
{block name="Indexprop"}
    <style>
        .herolist-bootom li{
        width: 85px;
        padding-left: 0px;
        }
        .list{
            position: absolute;
            left:0px;
            top:0px;
            display: none;
            height: 300px;
            width:350px;
            background-color: rgba(0,0,0,.5);
            z-index:999;
            border: 1px solid green;
        }
        .contents{
           width:300px;
           height: 250px;
           margin: 0 auto;
        }
       .list .top{
           width:100%;  
        }
       .list .top img{
           
       }
    </style>
<div class="herolist">
			<div class="contenttwo">
				<div >

					<!--下面-->
					<ul class="herolist-bootom">
						<li>
						    <input type="radio" name="prop" value="0" style="float:left;height:19px;">
						    <label>全部</label>
						</li>
                                                {foreach from=$type key=k item=v}
						<li>
						    <input type="radio" name="prop" value="{$k}" style="float:left;height:19px;">
						    <label value="{$k}">{$v}</label>
						</li>
						{/foreach}
					</ul>
					<div class="herosearch">
						<input type="text" id="search" placeholder="请输入要搜索的英雄名称">
						<a href="javascript:;" title="点击搜索" class="searchhero"></a>
					</div>
				</div>
			</div>
			
			<!--内容-->
			<div class="herolist-content">
				<!--英雄-->
				<div class="content" >
					<ul class="" id="heroList">
                                            {foreach from=$prop item=s}
                                                <li type="{$s.type}" style="position:relative;" class="proplist">
                                                        <a href="javascript:;">
                                                                <img src="../admin/{$s.image}" />
                                                                <p>{$s.name}</p>
                                                        </a>
                                                        <div  class="list" >
                                                            <div class="contents">
                                                                <div class="top">
                                                                    <img src="../admin/{$s.image}"/>
                                                                    <p></p>
                                                                    <p></p>
                                                                    <p></p>
                                                                </div>
                                                                <div class="center">

                                                                </div>
                                                            </div>
                                                        </div>
                                                </li>
                                            {/foreach}
					</ul>
				</div>
			</div>
		</div>
{literal}
<script>
$("input[name='prop']").change(function(){
        var value = $(this).val();
        if(value ==0){
            $("#heroList li").show();
        }else{
            $("#heroList li").hide();
            $("#heroList li[type ='"+value+"'").show();
            
        }
    })
    
    
    var divs = $(".proplist");
    for(var i=0;i<divs.length;i++){
        //移入
        divs[i].onmouseover=function(){
            var child = this.children;
            var div = child[1];
            div.style.display="block";
        }
        //移除
        divs[i].onmouseout=function(){
            var child = this.children;
            var div = child[1];
            div.style.display="none";
        }
    }
    
    
    
    
</script>
{/literal}
{/block}
