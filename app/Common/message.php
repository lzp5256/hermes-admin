<?php
// 提示消息

if(!function_exists('MG')){
    function MG($code = 0)
    {
        $message =  [
            // 基础参数返回值
            '200' => '成功',
            '0'   => '失败',
            '500' => '服务器异常',
            '404' => '找不到该方法',
            '410' => '不安全访问',
            '411' => '参数解析失败',

            // 上传文件
            '200001' => '上传失败,请重试',

            // 用户相关
            '100001' => '用户名不能为空',
            '100002' => '密码不能为空',
            '100003' => '用户不存在',
            '100004' => '请输入菜单名称',
            '100005' => '请选择上级菜单',
            '100006' => '请输入菜单图标',
            '100007' => '请选择打开方式',
            '100008' => '请输入路由',
            '100009' => '请选择正确的状态',
            '100010' => '请输入分类名称',
            '100011' => '请输入分类编码',
            '100012' => '请选择上级分类',
            '100013' => '请选择初始状态',
            '100014' => '请输入品牌名称',
            '100015' => '请输入品牌编码',
            '100016' => '请输入商品名称',
            '100017' => '请输入正确的商品原价',
            '100018' => '请输入正确的商品单价',
            '100019' => '请输入正确的商品会员单价',
            '100020' => '请输入正确的商品库存',
            '100021' => '请选择是否开启积分兑换',
            '100022' => '请选择初始状态',
            '100023' => '请上传商品主图',
            '100024' => '请上传商品描述图片',
            '100025' => '系统异常:未获取到分页数据',
            '100026' => '系统异常:未获取到商品ID',
            '100027' => '系统异常:未获取到用户ID',
            '100028' => '系统异常:未获取到图片ID',
            '100029' => '系统异常:图片类型解析失败',
            '100030' => '系统异常:签到信息获取失败',
            '100031' => '系统异常:未获取到积分类型',
            '100032' => '系统异常:资源对象解析失败',
            '100033' => '您今日已签到!',
            '100034' => '系统异常:每页数据获取异常',
        ];
        return $message[$code];
    }
}