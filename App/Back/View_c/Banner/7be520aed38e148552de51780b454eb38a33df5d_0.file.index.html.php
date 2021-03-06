<?php
/* Smarty version 3.1.29, created on 2018-04-19 13:38:12
  from "D:\php\BK\App\Back\View\Banner\index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ad82b447d8d88_55948958',
  'file_dependency' => 
  array (
    '7be520aed38e148552de51780b454eb38a33df5d' => 
    array (
      0 => 'D:\\php\\BK\\App\\Back\\View\\Banner\\index.html',
      1 => 1522307034,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Public/public.html' => 1,
  ),
),false)) {
function content_5ad82b447d8d88_55948958 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once 'D:/php/BK/Vendor/Smarty/plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) require_once 'D:/php/BK/Vendor/Smarty/plugins\\modifier.date_format.php';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../Public/public.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
>
	//定义页面载入事件
	$(function(){
		//获取btnAdd按钮
		$('#btnAdd').bind('click',function(){
			// 设置“添加Banner”链接
			window.location.href = 'index.php?p=Back&c=Banner&a=add';
		});
	});
    //定义页面载入事件
    $(function(){
        //获取btnRecycle按钮
        $('#btnRecycle').bind('click',function(){
            // 设置“回收站”链接
            window.location.href = 'index.php?p=Back&c=Banner&a=recycle';
        });
    });
<?php echo '</script'; ?>
>

<div class="admin">
	<form action="index.php?p=Back&c=Banner&a=delAll" method="POST">
    <div class="panel admin-panel">
    	<div class="panel-head"><strong>前台Banner列表</strong></div>
        <div class="padding border-bottom">
            <input type="button" class="button button-small checkall" name="checkall" checkfor="id[]" value="全选" />
            <input type="button" id="btnAdd" class="button button-small border-green" value="添加Banner" />
            <input type="submit" class="button button-small border-yellow"  value="批量删除" onclick=" return confirm('确认全部删除吗?')" />
            <input type="button" id="btnRecycle" class="button button-small border-blue" value="回收站" />
        </div>
        <table class="table table-hover">
        	<tr>
                <th width="45">选择</th>
                <th width="120">ID号</th>
                <th width="150">Banner标题</th>
				<th width="120">缩略图</th>
                <th width="180">发布时间</th>
                <th width="100">操作</th>
                <th width="100">是否应用</th>
            </tr>
            <?php
$_from = $_smarty_tpl->tpl_vars['bannerInfo']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_row_0_saved_item = isset($_smarty_tpl->tpl_vars['row']) ? $_smarty_tpl->tpl_vars['row'] : false;
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$__foreach_row_0_saved_local_item = $_smarty_tpl->tpl_vars['row'];
?>
            <tr>
                <td><input type="checkbox" name="id[]" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" /></td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</td>
                <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['row']->value['title'],50);?>
</td> <!--截取标题前10个-->
				<td><img src="/Uploads/Banner/<?php echo $_smarty_tpl->tpl_vars['row']->value['img'];?>
" width="200"/></td>

                <td><?php echo smarty_modifier_date_format(($_smarty_tpl->tpl_vars['row']->value['addtime']),'%Y-%m-%d %H:%M:%S');?>
</td>

                <td>
                    <a class="button border-blue button-little" href="index.php?p=Back&c=Banner&a=edit&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">修改</a> 
                    <a class="button border-yellow button-little" href="index.php?p=Back&c=Banner&a=del&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" onclick="return confirm('确认删除吗?')">删除</a>
                </td>
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['row']->value['is_recommend'] == '1') {?>
                    <a class="button border-yellow button-little" href="index.php?p=Back&c=Banner&a=ifRecommend&banner_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
&is_recommend=<?php echo $_smarty_tpl->tpl_vars['row']->value['is_recommend'];?>
&pageNum=<?php echo (($tmp = @$_GET['pageNum'])===null||$tmp==='' ? 1 : $tmp);?>
">已应用</a> 
                    <?php } else { ?>
                    <a class="button border-blue button-little" href="index.php?p=Back&c=Banner&a=ifRecommend&banner_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
&is_recommend=<?php echo $_smarty_tpl->tpl_vars['row']->value['is_recommend'];?>
&pageNum=<?php echo (($tmp = @$_GET['pageNum'])===null||$tmp==='' ? 1 : $tmp);?>
">未应用</a> 
                    <?php }?>
                </td>
            </tr>
            <?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_local_item;
}
if ($__foreach_row_0_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_item;
}
?>
        </table>
		<div class="panel-foot text-center">
            <?php echo $_smarty_tpl->tpl_vars['strPage']->value;?>

        </div>
    </div>
    </form>
    <br />
    <p class="text-right text-gray" style="float:right">基于<a class="text-gray" target="_blank" href="#">MVC框架</a>构建</p>
</div>
</body>
</html><?php }
}
