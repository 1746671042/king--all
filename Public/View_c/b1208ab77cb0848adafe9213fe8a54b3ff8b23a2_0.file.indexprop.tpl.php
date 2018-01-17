<?php
/* Smarty version 3.1.30, created on 2018-01-08 15:23:43
  from "D:\phpStudy\WWW\php\wzryshuju\View\indexprop.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a531c7f16ce94_47807658',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1208ab77cb0848adafe9213fe8a54b3ff8b23a2' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\php\\wzryshuju\\View\\indexprop.tpl',
      1 => 1515396219,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index.tpl' => 1,
  ),
),false)) {
function content_5a531c7f16ce94_47807658 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_279405a531c7f166ef5_01661416', "Indexprop");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:index.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "Indexprop"} */
class Block_279405a531c7f166ef5_01661416 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

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
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['type']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
						<li>
						    <input type="radio" name="prop" value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" style="float:left;height:19px;">
						    <label value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</label>
						</li>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

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
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['prop']->value, 's');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
?>
                                                <li type="<?php echo $_smarty_tpl->tpl_vars['s']->value['type'];?>
" style="position:relative;" class="proplist">
                                                        <a href="javascript:;">
                                                                <img src="../admin/<?php echo $_smarty_tpl->tpl_vars['s']->value['image'];?>
" />
                                                                <p><?php echo $_smarty_tpl->tpl_vars['s']->value['name'];?>
</p>
                                                        </a>
                                                        <div  class="list" >
                                                            <div class="contents">
                                                                <div class="top">
                                                                    <img src="../admin/<?php echo $_smarty_tpl->tpl_vars['s']->value['image'];?>
"/>
                                                                    <p></p>
                                                                    <p></p>
                                                                    <p></p>
                                                                </div>
                                                                <div class="center">

                                                                </div>
                                                            </div>
                                                        </div>
                                                </li>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					</ul>
				</div>
			</div>
		</div>

<?php echo '<script'; ?>
>
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
    
    
    
    
<?php echo '</script'; ?>
>

<?php
}
}
/* {/block "Indexprop"} */
}
