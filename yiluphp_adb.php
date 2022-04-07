<?php
/***************************************
请到官网下载源码
Please download the source code on the official website
官网: https://www.yiluphp.com
Website: https://www.yiluphp.com
文档地址：https://www.yiluphp.com/docs/YiluphpADB
Documents: https://www.yiluphp.com/docs/YiluphpADB
插件名：YiluphpADB
Name of plug-in: YiluphpADB
Version: V1.0
Author: Wu Jianwu<Jim Wu>
Email: 759480087@qq.com
***************************************/

class yiluphp_adb
{
	private static $_instance = null;

	/**
	 * 返回单例
	 * @param $device 设备名称，如手机的设备名，可以使用命令 adb devices 查看已经连接上的设置，设备名称可能是字符串，也可能是ip加端口号
	 * @throws Exception
	 */
	public static function I($device){
		if (!static::$_instance){
			return static::$_instance = new self($device);
		}
		return static::$_instance;
	}

	/**
	 * 构造函数
	 * @param $device 设备名称，如手机的设备名，可以使用命令 adb devices 查看已经连接上的设置，设备名称可能是字符串，也可能是ip加端口号
	 * @throws Exception
	 */
	public function __construct($device){
	}

	/**
	 * 获取当前插件的版本号
	 * @return string
	 **/
	public static function version(){
	}

	/**
	 * 返回当时电脑中所有可访问的设备设置。静态方法，不需要实例化也可以调用
	 * @param $print string 如果需要立即打印结果，可传此参数，printf为网页中格式化输出，printr为命令窗口中格式化输出
	 * @return array
	 **/
	public static function devices($print=''){
	}

	/**
	 * 获取指定范围(bounds)上方(按屏幕显示位置看)的节点
	 * 指定范围(bounds)包含一个节点的左上角坐标和右下角坐标
	 * @param $x1 integer 左上角坐标的X轴
	 * @param $y1 integer 左上角坐标的Y轴
	 * @param $x2 integer 右下角坐标的X轴
	 * @param $y2 integer 右下角坐标的Y轴
	 * @param $uiXml string uiWidgets函数返回的XML
	 * @param $offsetX integer 目标节点的左边与指定节点的左边对比，水平方向的容差范围。默认为0，表示左边坐标需要对齐得一模一样
	 * @param $yRange integer 目标节点的上边与指定节点的底边对比，垂直方向的查找范围。默认为0，表示不限度距离
	 * @param $attr array 包含属性及其值，可传入*作为通配符
	 * @return array 返回符合条件的节点对象
	 * @throws Exception 错误抛出异常信息
	 **/
	public function nodesAboveBounds($x1, $y1, $x2, $y2, $uiXml, $offsetX=0, $yRange=0, array $attr=[]){
	}

	/**
	 * 获取指定范围(bounds)下方(按屏幕显示位置看)的节点
	 * 指定范围(bounds)包含一个节点的左上角坐标和右下角坐标
	 * @param $x1 integer 左上角坐标的X轴
	 * @param $y1 integer 左上角坐标的Y轴
	 * @param $x2 integer 右下角坐标的X轴
	 * @param $y2 integer 右下角坐标的Y轴
	 * @param $uiXml string uiWidgets函数返回的XML
	 * @param $offsetX integer 目标节点的左边与指定节点的左边对比，水平方向的容差范围。默认为0，表示左边坐标需要对齐得一模一样
	 * @param $yRange integer 目标节点的底边与指定节点的上边对比，垂直方向的查找范围。默认为0，表示不限度距离
	 * @param $attr array 包含属性及其值，可传入*作为通配符
	 * @return array 返回符合条件的节点对象
	 * @throws Exception 错误抛出异常信息
	 **/
	public function nodesBelowBounds($x1, $y1, $x2, $y2, $uiXml, $offsetX=0, $yRange=0, array $attr=[]){
	}

	/**
	 * 获取指定范围(bounds)左边(按屏幕显示位置看)的节点
	 * 指定范围(bounds)包含一个节点的左上角坐标和右下角坐标
	 * @param $x1 integer 左上角坐标的X轴
	 * @param $y1 integer 左上角坐标的Y轴
	 * @param $x2 integer 右下角坐标的X轴
	 * @param $y2 integer 右下角坐标的Y轴
	 * @param $uiXml string uiWidgets函数返回的XML
	 * @param $xRange integer 目标节点的左边与指定节点的右边对比，水平方向的查找范围。默认为0，表示不限度距离
	 * @param $offsetY integer 目标节点的上边与指定节点的上边对比，垂直方向的容差范围。默认为0，表示上边坐标需要对齐得一模一样
	 * @param $attr array 包含属性及其值，可传入*作为通配符
	 * @return array 返回符合条件的节点对象
	 * @throws Exception 错误抛出异常信息
	 **/
	public function nodesOnLeft($x1, $y1, $x2, $y2, $uiXml, $xRange=0, $offsetY=0, array $attr=[]){
	}

	/**
	 * 获取指定范围(bounds)值右边(按屏幕显示位置看)的节点
	 * 指定范围(bounds)包含一个节点的左上角坐标和右下角坐标
	 * @param $x1 integer 左上角坐标的X轴
	 * @param $y1 integer 左上角坐标的Y轴
	 * @param $x2 integer 右下角坐标的X轴
	 * @param $y2 integer 右下角坐标的Y轴
	 * @param $uiXml string uiWidgets函数返回的XML
	 * @param $xRange integer 目标节点的右边与指定节点的左边对比，水平方向的查找范围。默认为0，表示不限度距离
	 * @param $offsetY integer 目标节点的上边与指定节点的上边对比，垂直方向的容差范围。默认为0，表示上边坐标需要对齐得一模一样
	 * @param $attr array 包含属性及其值，可传入*作为通配符
	 * @return array 返回符合条件的节点对象
	 * @throws Exception 错误抛出异常信息
	 **/
	public function nodesOnRight($x1, $y1, $x2, $y2, $uiXml, $xRange=0, $offsetY=0, array $attr=[]){
	}

	/**
	 * 获取当前设备里的所有应用
	 * @param $type 应用类型，all全部，sys系统应用，third第三方应用
	 * @return array
	 **/
	public function packages($type='all'){
	}

	/**
	 * 获取当前打开的、最顶层应用的包名
	 * @return string 返回包名，如果没有找到包名则返回查寻到的所有字符串
	 **/
	public function package(){
	}

	/**
	 * 获取当前打开的、最顶层应用的Activity名称
	 * @return string 返回包名，如果没有找到包名则返回查寻到的所有字符串
	 **/
	public function activity(){
	}

	/**
	 * 清除应用数据与缓存
	 * 效果相当于在设置里的应用信息界面点击了「清除缓存」和「清除数据」
	 * @param $package string 应用包名
	 * @return boolean 成功返回true，失败返回false
	 **/
	public function clear($package){
	}

	/**
	 * 启动应用/调起 Activity
	 * @param $package_activity string 应用包名/Activity，例如：'com.tencent.mm/.ui.LauncherUI'表示调起微信主界面。
	 * @param $data string 传给的数据键值，例如：‘"say" "hello"’表示启动应用的同时传递一对键值数据过去
	 * @return boolean 成功返回true，失败返回false
	 * @throws Exception 错误抛出异常信息
	 **/
	public function startApp($package_activity, $data=''){
	}

	/**
	 * 强制停止应用
	 * @param $package string 应用包名
	 * @return boolean 成功返回true，失败抛出异常信息
	 * @throws Exception 错误抛出异常信息
	 **/
	public function stopApp($package){
	}

	/**
	 * 调起 Service
	 * @param $package_service string 应用包名/某组件服务，例如：'com.tencent.mm/.plugin.accountsync.model.AccountAuthenticatorService'表示调起微信的某 Service，另外一个典型的用例是如果设备上原本应该显示虚拟按键但是没有显示，可以传此值com.android.systemui/.SystemUIService
	 * @param $action string 某操作名称，就是你在Androidmanifest里定义的
	 * @return boolean 成功返回true，失败返回false
	 * @throws Exception 错误抛出异常信息
	 **/
	public function startService($package_service='', $action=''){
	}

	/**
	 * 停止 Service
	 * @param $package_service string 应用包名/某组件服务
	 * @param $action string 某操作名称，就是你在Androidmanifest里定义的
	 * @return boolean 成功返回true，失败返回false
	 * @throws Exception 错误抛出异常信息
	 **/
	public function stopService($package_service='', $action=''){
	}

	/**
	 * 复制设备里的文件到电脑
	 * @param $remote_file string 设备的文件路径
	 * @param $local_dir string 电脑上的目录，参数可以省略，默认复制到当前目录，如果在windows里传值则不能是磁盘的根目录（意思是至少要一个文件夹），否则会报错
	 * @return string 成功返回存储在电脑里的文件路径，失败抛出异常信息
	 * @throws Exception 错误抛出异常信息
	 **/
	public function pullFile($remote_file, $local_dir=''){
	}

	/**
	 * 复制电脑里的文件到设备
	 * @param $local_file string 电脑上的文件路径
	 * @param $remote_dir string 设备里的目录
	 * @return string 成功返回存储在电脑里的文件路径，失败抛出异常信息
	 * @throws Exception 错误抛出异常信息
	 **/
	public function pushFile($local_file, $remote_dir){
	}

	/**
	 * 删除设备里的文件
	 * @param $remote_file string 设备的文件路径
	 * @return boolean 成功返回true，失败抛出异常信息
	 * @throws Exception 错误抛出异常信息
	 **/
	public function removeFile($remote_file){
	}

	/**
	 * 获取设备当前屏幕所有节点信息
	 * @return string 返回XML文档，类似于HTML文档
	 * @throws Exception 错误抛出异常信息
	 **/
	public function uiWidgets(){
	}

	/**
	 * 根据文本获取设备当前屏幕所有节点
	 * @param $text string 文本字符串
	 * @param $like boolean 是否模糊查询，默认为false，精准查询
	 * @return array 返回包含节点对象的数组
	 * @throws Exception 错误抛出异常信息
	 **/
	public function getNodesByText($text, $like=false){
	}

	/**
	 * 根据节点的内容描述获取设备当前屏幕所有节点
	 * 如果不知道什么是“节点的内容描述”，可以先调uiWidgets()方法获取所有节点看看
	 * @param $contentDesc string 内容描述
	 * @param $like boolean 是否模糊查询，默认为false，精准查询
	 * @return array 返回包含节点对象的数组
	 * @throws Exception 错误抛出异常信息
	 **/
	public function getNodesByContentDesc($contentDesc, $like=false){
	}

	/**
	 * 根据resource id获取设备当前屏幕所有节点
	 * 如果不知道什么是“resource id”，可以先调uiWidgets()方法获取所有节点看看
	 * @param $resource_id string resource-id属性的值
	 * @return array 返回包含节点对象的数组
	 * @throws Exception 错误抛出异常信息
	 **/
	public function getNodesByResourceId($resource_id){
	}

	/**
	 * 根据是否可以选中(对勾选择框)来获取设备当前屏幕所有节点(容器)
	 * @param $boolean boolean true表示可选中的容器，false表示不可选中的容器
	 * @return array 返回包含节点对象的数组
	 * @throws Exception 错误抛出异常信息
	 **/
	public function getNodesByCheckable($boolean){
	}

	/**
	 * 根据是否已经选中(对勾选择框)来获取设备当前屏幕所有节点(容器)
	 * @param $boolean boolean true表示已经选中的容器，false表示没有选中的容器
	 * @return array 返回包含节点对象的数组
	 * @throws Exception 错误抛出异常信息
	 **/
	public function getNodesByChecked($boolean){
	}

	/**
	 * 根据是否可以点击来获取设备当前屏幕所有节点(容器)
	 * @param $boolean boolean true表示可点击的容器，false表示不可点击的容器
	 * @return array 返回包含节点对象的数组
	 * @throws Exception 错误抛出异常信息
	 **/
	public function getNodesByClickable($boolean){
	}

	/**
	 * 根据是否已经启用来获取设备当前屏幕所有节点(容器)
	 * @param $boolean boolean true表示已经启用的容器，false表示没有启用的容器
	 * @return array 返回包含节点对象的数组
	 * @throws Exception 错误抛出异常信息
	 **/
	public function getNodesByEnabled($boolean){
	}

	/**
	 * 根据是否可以聚焦来获取设备当前屏幕所有节点(容器)
	 * @param $boolean boolean true表示可聚焦的容器，false表示不可聚焦的容器
	 * @return array 返回包含节点对象的数组
	 * @throws Exception 错误抛出异常信息
	 **/
	public function getNodesByFocusable($boolean){
	}

	/**
	 * 根据是否已经聚焦来获取设备当前屏幕所有节点(容器)
	 * @param $boolean boolean true表示已经聚焦的容器，false表示没有聚焦的容器
	 * @return array 返回包含节点对象的数组
	 * @throws Exception 错误抛出异常信息
	 **/
	public function getNodesByFocused($boolean){
	}

	/**
	 * 根据是否可以滚动来获取设备当前屏幕所有节点(容器)
	 * @param $boolean boolean true表示可滚动的容器，false表示不可滚动的容器
	 * @return array 返回包含节点对象的数组
	 * @throws Exception 错误抛出异常信息
	 **/
	public function getNodesByScrollable($boolean){
	}

	/**
	 * 根据是否有长按事件来获取设备当前屏幕所有节点(容器)
	 * @param $boolean boolean true表示有长按事件的容器，false表示没有长按事件的容器
	 * @return array 返回包含节点对象的数组
	 * @throws Exception 错误抛出异常信息
	 **/
	public function getNodesByLongClickable($boolean){
	}

	/**
	 * 根据是否为密码区来获取设备当前屏幕所有节点(容器)
	 * @param $boolean boolean true表示是密码区的容器，false表示不是密码区的容器
	 * @return array 返回包含节点对象的数组
	 * @throws Exception 错误抛出异常信息
	 **/
	public function getNodesByPassword($boolean){
	}

	/**
	 * 根据是否已经选中来获取设备当前屏幕所有节点(容器)
	 * @param $boolean boolean true表示可聚焦的容器，false表示不可聚焦的容器
	 * @return array 返回包含节点对象的数组
	 * @throws Exception 错误抛出异常信息
	 **/
	public function getNodesBySelected($boolean){
	}

	/**
	 * 获取在指定坐标点的所有节点(容器)
	 * @param $x integer X坐标
	 * @param $y integer Y坐标
	 * @param $attr array 指定匹配属性及值，一维数组，属性的值为布尔型时false为没有值true为必须有值，值为字符串时可使用通配符*代替任意字符串
	 * @param $xml string 复用屏幕的XML
	 * @return array 返回包含在该坐标点的所有节点对象的数组
	 * @throws Exception 错误抛出异常信息
	 **/
	public function getNodesByPosition($x, $y, array $attr=[], $xml=null){
	}

	/**
	 * 根据节点的属性获取设备当前屏幕所有节点(容器)
	 * 如果不知道节点会有哪些属性，可以先调uiWidgets()方法获取所有节点看看
	 * @param $attributes array 节点的属性，attr为属性名称，value为属性的值，like为是否模糊查询，默认为false精准查询。
	 * attr可选值有：index、text、resource-id、class、package、content-desc、checkable、checked、clickable、enabled、focusable、focused、scrollable、long-clickable、password、selected
	 * @return array $attribute为单个节点时返回包含节点对象（可能多个）的一维数组，$attribute为多个节点属性时返回二维数据，排列顺序（数组的键名）与$attribute传入的一样，失败返回空数组
	 * @throws Exception 错误抛出异常信息
	 **/
	public function getNodesByAttributes(array $attributes){
	}

	/**
	 * 操作按键
	 * @param  $keycode integer 按键编码，部分按键编码如下
	 * 更多keycode见：https://developer.android.com/reference/android/view/KeyEvent.html
	 * 或：https://blog.csdn.net/love_xsq/article/details/72468739
	 * keycode	含义
	3	HOME 键
	4	返回键
	5	打开拨号应用
	6	挂断电话
	24	增加音量
	25	降低音量
	26	电源键
	27	拍照（需要在相机应用里）
	62	输入空格
	64	打开浏览器
	66	回车换行
	67	删除
	82	菜单键
	85	播放/暂停
	86	停止播放
	87	播放下一首
	88	播放上一首
	122	移动光标到行首或列表顶部
	123	移动光标到行末或列表底部
	126	恢复播放
	127	暂停播放
	164	静音
	176	打开系统设置
	187	切换应用
	207	打开联系人
	208	打开日历
	209	打开音乐
	210	打开计算器
	220	降低屏幕亮度
	221	提高屏幕亮度
	223	系统休眠
	224	点亮屏幕
	231	打开语音助手
	276	如果没有 wakelock 则让系统休眠
	 * @return boolean 成功返回true，失败抛出异常信息
	 * @throws Exception 错误抛出异常信息
	 **/
	public function keyevent($keycode){
	}

	/**
	 * 滑动屏幕
	 * @param  $x1 integer 起始点坐标的x位置
	 * @param  $y1 integer 起始点坐标的y位置
	 * @param  $x2 integer 结束点坐标的x位置
	 * @param  $y2 integer 结束点坐标的y位置
	 * @param  $duration integer 滑动过程持续时间，单位为毫秒。把起始点和结束点设置一样的，持续时间长一点可起到长按效果
	 * @return boolean 成功返回true，失败抛出异常信息
	 * @throws Exception 错误抛出异常信息
	 **/
	public function swipe($x1, $y1, $x2, $y2, $duration=200){
	}

	/**
	 * @name 向右滑动屏幕
	 * @desc 从水平的左边、垂直的中间向右滑动屏幕
	 * @param  $duration integer 滑动过程持续时间，单位为毫秒。把起始点和结束点设置一样的，持续时间长一点可起到长按效果
	 * @return boolean 成功返回true，失败抛出异常信息
	 * @throws Exception 错误抛出异常信息
	 **/
	public function swipeToRight($duration=200){
	}

	/**
	 * @name 向左滑动屏幕
	 * @desc 从水平的右边、垂直的中间向左滑动屏幕
	 * @param  $duration integer 滑动过程持续时间，单位为毫秒。把起始点和结束点设置一样的，持续时间长一点可起到长按效果
	 * @return boolean 成功返回true，失败抛出异常信息
	 * @throws Exception 错误抛出异常信息
	 **/
	public function swipeToLeft($duration=200){
	}

	/**
	 * @name 向下滑动屏幕
	 * @desc 从水平的中间、垂直的上边向底部滑动屏幕
	 * @param  $duration integer 滑动过程持续时间，单位为毫秒。把起始点和结束点设置一样的，持续时间长一点可起到长按效果
	 * @return boolean 成功返回true，失败抛出异常信息
	 * @throws Exception 错误抛出异常信息
	 **/
	public function swipeDown($duration=200){
	}

	/**
	 * @name 向下滑动屏幕
	 * @desc 从水平的中间、垂直的下边向顶部滑动屏幕
	 * @param  $duration integer 滑动过程持续时间，单位为毫秒。把起始点和结束点设置一样的，持续时间长一点可起到长按效果
	 * @return boolean 成功返回true，失败抛出异常信息
	 * @throws Exception 错误抛出异常信息
	 **/
	public function swipeUp($duration=200){
	}

	/**
	 * 往光标处输入文本，只有在可输入文本处才有效
	 * 文本中不能有空格，如果要输入空格请使用keyevent方法，参数传入代码62即是空格
	 * @param  $text string 文本内容
	 * @return boolean 成功返回true，失败抛出异常信息
	 * @throws Exception 错误抛出异常信息
	 **/
	public function inputText($text){
	}

	/**
	 * 检测是否有adbKeyboard虚拟输入法
	 * 安装了adbKeyboard才能输入中文
	 * @return boolean
	 * @throws Exception 错误抛出异常信息
	 **/
	public function hasAdbKeyboard(){
	}

	/**
	 * 退出adbKeyboard虚拟输入法
	 * @return boolean
	 * @throws Exception 错误抛出异常信息
	 **/
	public function quitAdbKeyboard(){
	}

	/**
	 * 根据坐标点点击屏幕
	 * @param  $x integer 点的x坐标
	 * @param  $y integer 点的x坐标
	 * @param  $number integer 连续点击的次数，默认为1，允许的最小值也是1
	 * @param  $duration integer 连续多次点击的间隔时长，单位为毫秒
	 * @return boolean 成功返回true，失败抛出异常信息
	 * @throws Exception 错误抛出异常信息
	 **/
	public function click($x, $y, $number=1, $duration=0){
	}

	/**
	 * 获取屏幕分辨率
	 * @return array [width, height] 返回屏幕的宽和高，单位为像素
	 * @throws Exception 错误抛出异常信息
	 **/
	public function screenSize(){
	}

	/**
	 * 获取安卓版本号
	 * @return string
	 * @throws Exception 错误抛出异常信息
	 **/
	public function androidVersion(){
	}

	/**
	 * 获取Mac地址
	 * @return string
	 * @throws Exception 错误抛出异常信息
	 **/
	public function mac(){
	}

	/**
	 * 截屏并保存到电脑上
	 * @param $local_dir string 保存截屏图片到本地电脑里的目录
	 * @return string 返回保存在本地的图片文件路径
	 * @throws Exception 错误抛出异常信息
	 **/
	public function screenCapture($local_dir){
	}

	/**
	 * 录屏
	 * @param $local_dir string 保存录屏视频到本地电脑里的目录
	 * @param $time integer 录制时长，单位秒，默认为180秒。
	 * @param $size string 视频的尺寸，比如 1280x720，默认是屏幕分辨率。
	 * @param $rate string 视频的比特率，默认是 4Mbps。
	 * @return string 返回保存在本地的视频文件路径
	 * @throws Exception 错误抛出异常信息
	 **/
	public function screenRecord($local_dir, $time=180, $size=null, $rate=null){
	}

	/**
	 * 等待某个方法返回不为空的结果，如果返回为空的结果会等待到第三个参数设置的超时时间为止
	 * @param $method string 本类的方法名
	 * @param $params array 方法对应的参数，按顺序存放在数组里
	 * @param $timeout integer 等待的超时时间，单位毫秒，默认为3000毫秒。
	 * @param $intervalTime integer 轮询查询的间隔时间，单位微秒，默认为500000微秒，即500毫秒。
	 * @return array $attribute为单个节点时返回包含节点对象（可能多个）的一维数组，$attribute为多个节点属性时返回二维数据，排列顺序（数组的键名）与$attribute传入的一样，失败返回空数组
	 * @throws Exception 错误抛出异常信息
	 **/
	public function waitting($method, array $params=[], $timeout=3000, $intervalTime=500000){
	}
}

class yiluphp_adb_element
{
        private static $_instance = null;

        /**
         * 返回单例
         * @param $device 设备名称，如手机的设备名，可以使用命令 adb devices 查看已经连接上的设置，设备名称可能是字符串，也可能是ip加端口号
         * @throws Exception
         */
        public static function I($device){
            if (!static::$_instance){
                return static::$_instance = new self($device);
            }
            return static::$_instance;
        }

        /**
         * 构造函数
         * @param $device 设备名称，如手机的设备名，可以使用命令 adb devices 查看已经连接上的设置，设备名称可能是字符串，也可能是ip加端口号
         * @throws Exception
         */
        public function __construct($device){
        }

        /**
         * 获取当前插件的版本号
         * @return string
         **/
        public static function version(){
        }

        /**
         * 返回当时电脑中所有可访问的设备设置。静态方法，不需要实例化也可以调用
         * @param $print string 如果需要立即打印结果，可传此参数，printf为网页中格式化输出，printr为命令窗口中格式化输出
         * @return array
         **/
        public static function devices($print=''){
        }

        /**
         * 获取指定范围(bounds)上方(按屏幕显示位置看)的节点
         * 指定范围(bounds)包含一个节点的左上角坐标和右下角坐标
         * @param $x1 integer 左上角坐标的X轴
         * @param $y1 integer 左上角坐标的Y轴
         * @param $x2 integer 右下角坐标的X轴
         * @param $y2 integer 右下角坐标的Y轴
         * @param $uiXml string uiWidgets函数返回的XML
         * @param $offsetX integer 目标节点的左边与指定节点的左边对比，水平方向的容差范围。默认为0，表示左边坐标需要对齐得一模一样
         * @param $yRange integer 目标节点的上边与指定节点的底边对比，垂直方向的查找范围。默认为0，表示不限度距离
         * @param $attr array 包含属性及其值，可传入*作为通配符
         * @return array 返回符合条件的节点对象
         * @throws Exception 错误抛出异常信息
         **/
        public function nodesAboveBounds($x1, $y1, $x2, $y2, $uiXml, $offsetX=0, $yRange=0, array $attr=[]){
        }

        /**
         * 获取指定范围(bounds)下方(按屏幕显示位置看)的节点
         * 指定范围(bounds)包含一个节点的左上角坐标和右下角坐标
         * @param $x1 integer 左上角坐标的X轴
         * @param $y1 integer 左上角坐标的Y轴
         * @param $x2 integer 右下角坐标的X轴
         * @param $y2 integer 右下角坐标的Y轴
         * @param $uiXml string uiWidgets函数返回的XML
         * @param $offsetX integer 目标节点的左边与指定节点的左边对比，水平方向的容差范围。默认为0，表示左边坐标需要对齐得一模一样
         * @param $yRange integer 目标节点的底边与指定节点的上边对比，垂直方向的查找范围。默认为0，表示不限度距离
         * @param $attr array 包含属性及其值，可传入*作为通配符
         * @return array 返回符合条件的节点对象
         * @throws Exception 错误抛出异常信息
         **/
        public function nodesBelowBounds($x1, $y1, $x2, $y2, $uiXml, $offsetX=0, $yRange=0, array $attr=[]){
        }

        /**
         * 获取指定范围(bounds)左边(按屏幕显示位置看)的节点
         * 指定范围(bounds)包含一个节点的左上角坐标和右下角坐标
         * @param $x1 integer 左上角坐标的X轴
         * @param $y1 integer 左上角坐标的Y轴
         * @param $x2 integer 右下角坐标的X轴
         * @param $y2 integer 右下角坐标的Y轴
         * @param $uiXml string uiWidgets函数返回的XML
         * @param $xRange integer 目标节点的左边与指定节点的右边对比，水平方向的查找范围。默认为0，表示不限度距离
         * @param $offsetY integer 目标节点的上边与指定节点的上边对比，垂直方向的容差范围。默认为0，表示上边坐标需要对齐得一模一样
         * @param $attr array 包含属性及其值，可传入*作为通配符
         * @return array 返回符合条件的节点对象
         * @throws Exception 错误抛出异常信息
         **/
        public function nodesOnLeft($x1, $y1, $x2, $y2, $uiXml, $xRange=0, $offsetY=0, array $attr=[]){
        }

        /**
         * 获取指定范围(bounds)值右边(按屏幕显示位置看)的节点
         * 指定范围(bounds)包含一个节点的左上角坐标和右下角坐标
         * @param $x1 integer 左上角坐标的X轴
         * @param $y1 integer 左上角坐标的Y轴
         * @param $x2 integer 右下角坐标的X轴
         * @param $y2 integer 右下角坐标的Y轴
         * @param $uiXml string uiWidgets函数返回的XML
         * @param $xRange integer 目标节点的右边与指定节点的左边对比，水平方向的查找范围。默认为0，表示不限度距离
         * @param $offsetY integer 目标节点的上边与指定节点的上边对比，垂直方向的容差范围。默认为0，表示上边坐标需要对齐得一模一样
         * @param $attr array 包含属性及其值，可传入*作为通配符
         * @return array 返回符合条件的节点对象
         * @throws Exception 错误抛出异常信息
         **/
        public function nodesOnRight($x1, $y1, $x2, $y2, $uiXml, $xRange=0, $offsetY=0, array $attr=[]){
        }

        /**
         * 获取当前设备里的所有应用
         * @param $type 应用类型，all全部，sys系统应用，third第三方应用
         * @return array
         **/
        public function packages($type='all'){
        }

        /**
         * 获取当前打开的、最顶层应用的包名
         * @return string 返回包名，如果没有找到包名则返回查寻到的所有字符串
         **/
        public function package(){
        }

        /**
         * 获取当前打开的、最顶层应用的Activity名称
         * @return string 返回包名，如果没有找到包名则返回查寻到的所有字符串
         **/
        public function activity(){
        }

        /**
         * 清除应用数据与缓存
         * 效果相当于在设置里的应用信息界面点击了「清除缓存」和「清除数据」
         * @param $package string 应用包名
         * @return boolean 成功返回true，失败返回false
         **/
        public function clear($package){
        }

        /**
         * 启动应用/调起 Activity
         * @param $package_activity string 应用包名/Activity，例如：'com.tencent.mm/.ui.LauncherUI'表示调起微信主界面。
         * @param $data string 传给的数据键值，例如：‘"say" "hello"’表示启动应用的同时传递一对键值数据过去
         * @return boolean 成功返回true，失败返回false
         * @throws Exception 错误抛出异常信息
         **/
        public function startApp($package_activity, $data=''){
        }

        /**
         * 强制停止应用
         * @param $package string 应用包名
         * @return boolean 成功返回true，失败抛出异常信息
         * @throws Exception 错误抛出异常信息
         **/
        public function stopApp($package){
        }

        /**
         * 调起 Service
         * @param $package_service string 应用包名/某组件服务，例如：'com.tencent.mm/.plugin.accountsync.model.AccountAuthenticatorService'表示调起微信的某 Service，另外一个典型的用例是如果设备上原本应该显示虚拟按键但是没有显示，可以传此值com.android.systemui/.SystemUIService
         * @param $action string 某操作名称，就是你在Androidmanifest里定义的
         * @return boolean 成功返回true，失败返回false
         * @throws Exception 错误抛出异常信息
         **/
        public function startService($package_service='', $action=''){
        }

        /**
         * 停止 Service
         * @param $package_service string 应用包名/某组件服务
         * @param $action string 某操作名称，就是你在Androidmanifest里定义的
         * @return boolean 成功返回true，失败返回false
         * @throws Exception 错误抛出异常信息
         **/
        public function stopService($package_service='', $action=''){
        }

        /**
         * 复制设备里的文件到电脑
         * @param $remote_file string 设备的文件路径
         * @param $local_dir string 电脑上的目录，参数可以省略，默认复制到当前目录，如果在windows里传值则不能是磁盘的根目录（意思是至少要一个文件夹），否则会报错
         * @return string 成功返回存储在电脑里的文件路径，失败抛出异常信息
         * @throws Exception 错误抛出异常信息
         **/
        public function pullFile($remote_file, $local_dir=''){
        }

        /**
         * 复制电脑里的文件到设备
         * @param $local_file string 电脑上的文件路径
         * @param $remote_dir string 设备里的目录
         * @return string 成功返回存储在电脑里的文件路径，失败抛出异常信息
         * @throws Exception 错误抛出异常信息
         **/
        public function pushFile($local_file, $remote_dir){
        }

        /**
         * 删除设备里的文件
         * @param $remote_file string 设备的文件路径
         * @return boolean 成功返回true，失败抛出异常信息
         * @throws Exception 错误抛出异常信息
         **/
        public function removeFile($remote_file){
        }

        /**
         * 获取设备当前屏幕所有节点信息
         * @return string 返回XML文档，类似于HTML文档
         * @throws Exception 错误抛出异常信息
         **/
        public function uiWidgets(){
        }

        /**
         * 根据文本获取设备当前屏幕所有节点
         * @param $text string 文本字符串
         * @param $like boolean 是否模糊查询，默认为false，精准查询
         * @return array 返回包含节点对象的数组
         * @throws Exception 错误抛出异常信息
         **/
        public function getNodesByText($text, $like=false){
        }

        /**
         * 根据节点的内容描述获取设备当前屏幕所有节点
         * 如果不知道什么是“节点的内容描述”，可以先调uiWidgets()方法获取所有节点看看
         * @param $contentDesc string 内容描述
         * @param $like boolean 是否模糊查询，默认为false，精准查询
         * @return array 返回包含节点对象的数组
         * @throws Exception 错误抛出异常信息
         **/
        public function getNodesByContentDesc($contentDesc, $like=false){
        }

        /**
         * 根据resource id获取设备当前屏幕所有节点
         * 如果不知道什么是“resource id”，可以先调uiWidgets()方法获取所有节点看看
         * @param $resource_id string resource-id属性的值
         * @return array 返回包含节点对象的数组
         * @throws Exception 错误抛出异常信息
         **/
        public function getNodesByResourceId($resource_id){
        }

        /**
         * 根据是否可以选中(对勾选择框)来获取设备当前屏幕所有节点(容器)
         * @param $boolean boolean true表示可选中的容器，false表示不可选中的容器
         * @return array 返回包含节点对象的数组
         * @throws Exception 错误抛出异常信息
         **/
        public function getNodesByCheckable($boolean){
        }

        /**
         * 根据是否已经选中(对勾选择框)来获取设备当前屏幕所有节点(容器)
         * @param $boolean boolean true表示已经选中的容器，false表示没有选中的容器
         * @return array 返回包含节点对象的数组
         * @throws Exception 错误抛出异常信息
         **/
        public function getNodesByChecked($boolean){
        }

        /**
         * 根据是否可以点击来获取设备当前屏幕所有节点(容器)
         * @param $boolean boolean true表示可点击的容器，false表示不可点击的容器
         * @return array 返回包含节点对象的数组
         * @throws Exception 错误抛出异常信息
         **/
        public function getNodesByClickable($boolean){
        }

        /**
         * 根据是否已经启用来获取设备当前屏幕所有节点(容器)
         * @param $boolean boolean true表示已经启用的容器，false表示没有启用的容器
         * @return array 返回包含节点对象的数组
         * @throws Exception 错误抛出异常信息
         **/
        public function getNodesByEnabled($boolean){
        }

        /**
         * 根据是否可以聚焦来获取设备当前屏幕所有节点(容器)
         * @param $boolean boolean true表示可聚焦的容器，false表示不可聚焦的容器
         * @return array 返回包含节点对象的数组
         * @throws Exception 错误抛出异常信息
         **/
        public function getNodesByFocusable($boolean){
        }

        /**
         * 根据是否已经聚焦来获取设备当前屏幕所有节点(容器)
         * @param $boolean boolean true表示已经聚焦的容器，false表示没有聚焦的容器
         * @return array 返回包含节点对象的数组
         * @throws Exception 错误抛出异常信息
         **/
        public function getNodesByFocused($boolean){
        }

        /**
         * 根据是否可以滚动来获取设备当前屏幕所有节点(容器)
         * @param $boolean boolean true表示可滚动的容器，false表示不可滚动的容器
         * @return array 返回包含节点对象的数组
         * @throws Exception 错误抛出异常信息
         **/
        public function getNodesByScrollable($boolean){
        }

        /**
         * 根据是否有长按事件来获取设备当前屏幕所有节点(容器)
         * @param $boolean boolean true表示有长按事件的容器，false表示没有长按事件的容器
         * @return array 返回包含节点对象的数组
         * @throws Exception 错误抛出异常信息
         **/
        public function getNodesByLongClickable($boolean){
        }

        /**
         * 根据是否为密码区来获取设备当前屏幕所有节点(容器)
         * @param $boolean boolean true表示是密码区的容器，false表示不是密码区的容器
         * @return array 返回包含节点对象的数组
         * @throws Exception 错误抛出异常信息
         **/
        public function getNodesByPassword($boolean){
        }

        /**
         * 根据是否已经选中来获取设备当前屏幕所有节点(容器)
         * @param $boolean boolean true表示可聚焦的容器，false表示不可聚焦的容器
         * @return array 返回包含节点对象的数组
         * @throws Exception 错误抛出异常信息
         **/
        public function getNodesBySelected($boolean){
        }

        /**
         * 获取在指定坐标点的所有节点(容器)
         * @param $x integer X坐标
         * @param $y integer Y坐标
         * @param $attr array 指定匹配属性及值，一维数组，属性的值为布尔型时false为没有值true为必须有值，值为字符串时可使用通配符*代替任意字符串
         * @param $xml string 复用屏幕的XML
         * @return array 返回包含在该坐标点的所有节点对象的数组
         * @throws Exception 错误抛出异常信息
         **/
        public function getNodesByPosition($x, $y, array $attr=[], $xml=null){
        }

        /**
         * 根据节点的属性获取设备当前屏幕所有节点(容器)
         * 如果不知道节点会有哪些属性，可以先调uiWidgets()方法获取所有节点看看
         * @param $attributes array 节点的属性，attr为属性名称，value为属性的值，like为是否模糊查询，默认为false精准查询。
         * attr可选值有：index、text、resource-id、class、package、content-desc、checkable、checked、clickable、enabled、focusable、focused、scrollable、long-clickable、password、selected
         * @return array $attribute为单个节点时返回包含节点对象（可能多个）的一维数组，$attribute为多个节点属性时返回二维数据，排列顺序（数组的键名）与$attribute传入的一样，失败返回空数组
         * @throws Exception 错误抛出异常信息
         **/
        public function getNodesByAttributes(array $attributes){
        }

        /**
         * 操作按键
         * @param  $keycode integer 按键编码，部分按键编码如下
         * 更多keycode见：https://developer.android.com/reference/android/view/KeyEvent.html
         * 或：https://blog.csdn.net/love_xsq/article/details/72468739
         * keycode	含义
        3	HOME 键
        4	返回键
        5	打开拨号应用
        6	挂断电话
        24	增加音量
        25	降低音量
        26	电源键
        27	拍照（需要在相机应用里）
        62	输入空格
        64	打开浏览器
        66	回车换行
        67	删除
        82	菜单键
        85	播放/暂停
        86	停止播放
        87	播放下一首
        88	播放上一首
        122	移动光标到行首或列表顶部
        123	移动光标到行末或列表底部
        126	恢复播放
        127	暂停播放
        164	静音
        176	打开系统设置
        187	切换应用
        207	打开联系人
        208	打开日历
        209	打开音乐
        210	打开计算器
        220	降低屏幕亮度
        221	提高屏幕亮度
        223	系统休眠
        224	点亮屏幕
        231	打开语音助手
        276	如果没有 wakelock 则让系统休眠
         * @return boolean 成功返回true，失败抛出异常信息
         * @throws Exception 错误抛出异常信息
         **/
        public function keyevent($keycode){
        }

        /**
         * 滑动屏幕
         * @param  $x1 integer 起始点坐标的x位置
         * @param  $y1 integer 起始点坐标的y位置
         * @param  $x2 integer 结束点坐标的x位置
         * @param  $y2 integer 结束点坐标的y位置
         * @param  $duration integer 滑动过程持续时间，单位为毫秒。把起始点和结束点设置一样的，持续时间长一点可起到长按效果
         * @return boolean 成功返回true，失败抛出异常信息
         * @throws Exception 错误抛出异常信息
         **/
        public function swipe($x1, $y1, $x2, $y2, $duration=200){
        }

        /**
         * @name 向右滑动屏幕
         * @desc 从水平的左边、垂直的中间向右滑动屏幕
         * @param  $duration integer 滑动过程持续时间，单位为毫秒。把起始点和结束点设置一样的，持续时间长一点可起到长按效果
         * @return boolean 成功返回true，失败抛出异常信息
         * @throws Exception 错误抛出异常信息
         **/
        public function swipeToRight($duration=200){
        }

        /**
         * @name 向左滑动屏幕
         * @desc 从水平的右边、垂直的中间向左滑动屏幕
         * @param  $duration integer 滑动过程持续时间，单位为毫秒。把起始点和结束点设置一样的，持续时间长一点可起到长按效果
         * @return boolean 成功返回true，失败抛出异常信息
         * @throws Exception 错误抛出异常信息
         **/
        public function swipeToLeft($duration=200){
        }

        /**
         * @name 向下滑动屏幕
         * @desc 从水平的中间、垂直的上边向底部滑动屏幕
         * @param  $duration integer 滑动过程持续时间，单位为毫秒。把起始点和结束点设置一样的，持续时间长一点可起到长按效果
         * @return boolean 成功返回true，失败抛出异常信息
         * @throws Exception 错误抛出异常信息
         **/
        public function swipeDown($duration=200){
        }

        /**
         * @name 向下滑动屏幕
         * @desc 从水平的中间、垂直的下边向顶部滑动屏幕
         * @param  $duration integer 滑动过程持续时间，单位为毫秒。把起始点和结束点设置一样的，持续时间长一点可起到长按效果
         * @return boolean 成功返回true，失败抛出异常信息
         * @throws Exception 错误抛出异常信息
         **/
        public function swipeUp($duration=200){
        }

        /**
         * 往光标处输入文本，只有在可输入文本处才有效
         * 文本中不能有空格，如果要输入空格请使用keyevent方法，参数传入代码62即是空格
         * @param  $text string 文本内容
         * @return boolean 成功返回true，失败抛出异常信息
         * @throws Exception 错误抛出异常信息
         **/
        public function inputText($text){
        }

        /**
         * 检测是否有adbKeyboard虚拟输入法
         * 安装了adbKeyboard才能输入中文
         * @return boolean
         * @throws Exception 错误抛出异常信息
         **/
        public function hasAdbKeyboard(){
        }

        /**
         * 退出adbKeyboard虚拟输入法
         * @return boolean
         * @throws Exception 错误抛出异常信息
         **/
        public function quitAdbKeyboard(){
        }

        /**
         * 根据坐标点点击屏幕
         * @param  $x integer 点的x坐标
         * @param  $y integer 点的x坐标
         * @param  $number integer 连续点击的次数，默认为1，允许的最小值也是1
         * @param  $duration integer 连续多次点击的间隔时长，单位为毫秒
         * @return boolean 成功返回true，失败抛出异常信息
         * @throws Exception 错误抛出异常信息
         **/
        public function click($x, $y, $number=1, $duration=0){
        }

        /**
         * 获取屏幕分辨率
         * @return array [width, height] 返回屏幕的宽和高，单位为像素
         * @throws Exception 错误抛出异常信息
         **/
        public function screenSize(){
        }

        /**
         * 获取安卓版本号
         * @return string
         * @throws Exception 错误抛出异常信息
         **/
        public function androidVersion(){
        }

        /**
         * 获取Mac地址
         * @return string
         * @throws Exception 错误抛出异常信息
         **/
        public function mac(){
        }

        /**
         * 截屏并保存到电脑上
         * @param $local_dir string 保存截屏图片到本地电脑里的目录
         * @return string 返回保存在本地的图片文件路径
         * @throws Exception 错误抛出异常信息
         **/
        public function screenCapture($local_dir){
        }

        /**
         * 录屏
         * @param $local_dir string 保存录屏视频到本地电脑里的目录
         * @param $time integer 录制时长，单位秒，默认为180秒。
         * @param $size string 视频的尺寸，比如 1280x720，默认是屏幕分辨率。
         * @param $rate string 视频的比特率，默认是 4Mbps。
         * @return string 返回保存在本地的视频文件路径
         * @throws Exception 错误抛出异常信息
         **/
        public function screenRecord($local_dir, $time=180, $size=null, $rate=null){
        }

        /**
         * 等待某个方法返回不为空的结果，如果返回为空的结果会等待到第三个参数设置的超时时间为止
         * @param $method string 本类的方法名
         * @param $params array 方法对应的参数，按顺序存放在数组里
         * @param $timeout integer 等待的超时时间，单位毫秒，默认为3000毫秒。
         * @param $intervalTime integer 轮询查询的间隔时间，单位微秒，默认为500000微秒，即500毫秒。
         * @return array $attribute为单个节点时返回包含节点对象（可能多个）的一维数组，$attribute为多个节点属性时返回二维数据，排列顺序（数组的键名）与$attribute传入的一样，失败返回空数组
         * @throws Exception 错误抛出异常信息
         **/
        public function waitting($method, array $params=[], $timeout=3000, $intervalTime=500000){
        }
    }

    class yiluphp_adb_element
    {
	private $_device; //所属的设备对象，即yiluphp_adb的实例

	public function __construct($node_xml, &$device){
		if (!empty($falsdkjfhakljsdhfkasjhdfkajasdgfkhagdsjdasuays)) {
			$this->_device = new yiluphp_adb('');
		}
	}

	/**
	 * 返回节点原始的xml代码
	 * @return string
	 */
	public function nodeXml(){
	}

	/**
	 * 获取节点的resource-id属性的值
	 * @return mixed|string
	 */
	public function resourceId(){
	}

	/**
	 * 获取节点的text属性的值
	 * @return mixed|string
	 */
	public function text(){
	}

	/**
	 * 获取节点的index属性的值
	 * @return mixed|string
	 */
	public function index(){
	}

	/**
	 * 获取节点的class属性的值
	 * @return mixed|string
	 */
	public function className(){
	}

	/**
	 * 获取节点的content-desc属性的值
	 * @return mixed|string
	 */
	public function contentDesc(){
	}

	/**
	 * 检查节点是否有选中事件
	 * checkable属性
	 * @return bool
	 */
	public function checkable(){
	}

	/**
	 * 检查节点是否已经选中
	 * checked属性
	 * @return bool
	 */
	public function checked(){
	}

	/**
	 * 检查节点是否有点击事件
	 * clickable属性
	 * @return bool
	 */
	public function clickable(){
	}

	/**
	 * 检查节点是否可用
	 * enabled属性
	 * @return bool
	 */
	public function enabled(){
	}

	/**
	 * 检查节点是否可聚焦
	 * focusable属性
	 * @return bool
	 */
	public function focusable(){
	}

	/**
	 * 检查节点是否已聚焦
	 * focused属性
	 * @return bool
	 */
	public function focused(){
	}

	/**
	 * 检查节点是否可以滚动
	 * scrollable属性
	 * @return bool
	 */
	public function scrollable(){
	}

	/**
	 * 检查节点是否可以长按
	 * long-clickable属性
	 * @return bool
	 */
	public function longClickable(){
	}

	/**
	 * 检查节点是否为密码输入框
	 * password属性
	 * @return bool
	 */
	public function password(){
	}

	/**
	 * 检查节点是否已经被选中
	 * selected属性
	 * @return bool
	 */
	public function selected(){
	}

	/**
	 * 返回节点在屏蔽中的位置信息
	 * @return array x1为左上角的x坐标，y1为左上角的y坐标，x2为右下角的x坐标， y2为右下角的y坐标
	 */
	public function bounds(){
	}

	/**
	 * 点击当前节点
	 * @param int $number  连接点击的次数
	 * @param int $duration  完成所有点击的时长，单位为毫秒
	 * @return bool
	 * @throws Exception
	 */
	public function click($number=1, $duration=0){
	}
}
