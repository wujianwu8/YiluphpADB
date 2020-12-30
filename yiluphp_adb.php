<?php
/***************************************
修改本文件将导致插件失效
Modifying this file will cause the plug-in to become invalid
插件名：YiluPHP ADB
Name of plug-in: YiluPHP ADB
Version: V1.0
Author: Wu Jianwu<Jim Wu>
Email: 759480087@qq.com
Website: https://www.yiluphp.com
Documents: https://www.yiluphp.com/docs/YiluphpADB
Github location: https://github.com/wujianwu8/YiluphpADB
***************************************/

if (!empty($fjasdfjlasdfhklajshdflahdfsfasdfasddfsdf)) {
    class yiluphp_adb
    {
        /**
         * 构造函数
         * @param $device 设备名称，如手机的设备名，可以使用命令 adb devices 查看已经连接上的设置，设备名称可能是字符串，也可能是ip加端口号
         * @throws Exception
         */
        public function __construct($device)
        {
        }

        /**
         * 获取当前插件的版本号
         * @return string
         **/
        public static function version()
        {
        }

        /**
         * 返回当时电脑中所有可访问的设备设置。静态方法，不需要实例化也可以调用
         * @param $print string 如果需要立即打印结果，可传此参数，printf为网页中格式化输出，printr为命令窗口中格式化输出
         * @return array
         **/
        public static function devices($print = '')
        {
        }

        /**
         * 检查一个节点是否包含指定的属性及值
         * @param $node_xml string 一个节点的XML
         * @param $attr array 包含属性及其值，可传入*作为通配符
         * @return boolean 完成配置所有给定的属性及其值收返回true，否则返回false
         **/
        public static function is_match_attr($node_xml, $attr)
        {
        }

        /**
         * 获取指定bounds值上方(按屏幕显示位置看)的节点
         * bounds包含一个节点的左上角坐标和右下角坐标
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
        public function nodesAboveBounds($x1, $y1, $x2, $y2, $uiXml, $offsetX = 0, $yRange = 0, array $attr = [])
        {
        }

        /**
         * 获取指定bounds值下方(按屏幕显示位置看)的节点
         * bounds包含一个节点的左上角坐标和右下角坐标
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
        public function nodesBelowBounds($x1, $y1, $x2, $y2, $uiXml, $offsetX = 0, $yRange = 0, array $attr = [])
        {
        }

        /**
         * 获取指定bounds值左边(按屏幕显示位置看)的节点
         * bounds包含一个节点的左上角坐标和右下角坐标
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
        public function nodesOnLeft($x1, $y1, $x2, $y2, $uiXml, $xRange = 0, $offsetY = 0, array $attr = [])
        {
        }

        /**
         * 获取指定bounds值右边(按屏幕显示位置看)的节点
         * bounds包含一个节点的左上角坐标和右下角坐标
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
        public function nodesOnRight($x1, $y1, $x2, $y2, $uiXml, $xRange = 0, $offsetY = 0, array $attr = [])
        {
        }

        /**
         * 获取当前设备的所有应用
         * @param $type 应用类型，all全部，sys系统应用，third第三方应用
         * @return array
         **/
        public function packages($type = 'all')
        {
        }

        /**
         * 获取当前打开的、最顶层应用的包名
         * @return string 返回包名，如果没有找到包名则返回查寻到的所有字符串
         **/
        public function package()
        {
        }

        /**
         * 获取当前打开的、最顶层应用的Activity名称
         * @return string 返回包名，如果没有找到包名则返回查寻到的所有字符串
         **/
        public function activity()
        {
        }

        /**
         * 清除应用数据与缓存
         * 效果相当于在设置里的应用信息界面点击了「清除缓存」和「清除数据」
         * @param $package string 应用包名
         * @return boolean 成功返回true，失败返回false
         **/
        public function clear($package)
        {
        }

        /**
         * 启动应用/调起 Activity
         * 效果相当于在设置里的应用信息界面点击了「清除缓存」和「清除数据」
         * @param $package_activity string 应用包名/Activity，例如：'com.tencent.mm/.ui.LauncherUI'表示调起微信主界面。
         * @param $data string 传给的数据键值，例如：‘"say" "hello"’表示启动应用的同时传递一对键值数据过去
         * @return boolean 成功返回true，失败返回false
         * @throws Exception 错误抛出异常信息
         **/
        public function startApp($package_activity, $data = '')
        {
        }

        /**
         * 强制停止应用
         * @param $package string 应用包名
         * @return boolean 成功返回true，失败抛出异常信息
         * @throws Exception 错误抛出异常信息
         **/
        public function stopApp($package)
        {
        }

        /**
         * 调起 Service
         * @param $package_service string 应用包名/某组件服务，例如：'com.tencent.mm/.plugin.accountsync.model.AccountAuthenticatorService'表示调起微信的某 Service，另外一个典型的用例是如果设备上原本应该显示虚拟按键但是没有显示，可以传此值com.android.systemui/.SystemUIService
         * @param $action string 某操作名称，就是你在Androidmanifest里定义的
         * @return boolean 成功返回true，失败返回false
         * @throws Exception 错误抛出异常信息
         **/
        public function startService($package_service = '', $action = '')
        {
        }

        /**
         * 停止 Service
         * @param $package_service string 应用包名/某组件服务
         * @param $action string 某操作名称，就是你在Androidmanifest里定义的
         * @return boolean 成功返回true，失败返回false
         * @throws Exception 错误抛出异常信息
         **/
        public function stopService($package_service = '', $action = '')
        {
        }

        /**
         * 复制设备里的文件到电脑
         * @param $remote_file string 设备的文件路径
         * @param $local_dir string 电脑上的目录，参数可以省略，默认复制到当前目录，如果在windows里传值则不能是磁盘的根目录（意思是至少要一个文件夹），否则会报错
         * @return string 成功返回存储在电脑里的文件路径，失败抛出异常信息
         * @throws Exception 错误抛出异常信息
         **/
        public function pullFile($remote_file, $local_dir = '')
        {
        }

        /**
         * 复制电脑里的文件到设备
         * @param $local_file string 电脑上的文件路径
         * @param $remote_dir string 设备里的目录
         * @return string 成功返回存储在电脑里的文件路径，失败抛出异常信息
         * @throws Exception 错误抛出异常信息
         **/
        public function pushFile($local_file, $remote_dir)
        {
        }

        /**
         * 删除设备里的文件
         * @param $remote_file string 设备的文件路径
         * @return boolean 成功返回true，失败抛出异常信息
         * @throws Exception 错误抛出异常信息
         **/
        public function removeFile($remote_file)
        {
        }

        /**
         * 获取设备当前屏幕所有控件信息
         * @return string 返回XML文档
         * @throws Exception 错误抛出异常信息
         **/
        public function uiWidgets()
        {
        }

        /**
         * 根据文本获取设备当前屏幕所有节点
         * @param $text string 文本字符串
         * @param $like boolean 是否模糊查询，默认为false，精准查询
         * @return array 返回包含节点对象的数组
         * @throws Exception 错误抛出异常信息
         **/
        public function getNodesByText($text, $like = false)
        {
        }

        /**
         * 根据节点的内容描述获取设备当前屏幕所有节点
         * @param $contentDesc string 内容描述
         * @param $like boolean 是否模糊查询，默认为false，精准查询
         * @return array 返回包含节点对象的数组
         * @throws Exception 错误抛出异常信息
         **/
        public function getNodesByContentDesc($contentDesc, $like = false)
        {
        }

        /**
         * 根据resource id获取设备当前屏幕所有节点
         * @param $resource_id string resource-id属性的值
         * @return array 返回包含节点对象的数组
         * @throws Exception 错误抛出异常信息
         **/
        public function getNodesByResourceId($resource_id)
        {
        }

        /**
         * 根据是否可以选中(对勾选择框)来获取设备当前屏幕所有节点(容器)
         * @param $boolean boolean true表示可选中的容器，false表示不可选中的容器
         * @return array 返回包含节点对象的数组
         * @throws Exception 错误抛出异常信息
         **/
        public function getNodesByCheckable($boolean)
        {
        }

        /**
         * 根据是否已经选中(对勾选择框)来获取设备当前屏幕所有节点(容器)
         * @param $boolean boolean true表示已经选中的容器，false表示没有选中的容器
         * @return array 返回包含节点对象的数组
         * @throws Exception 错误抛出异常信息
         **/
        public function getNodesByChecked($boolean)
        {
        }

        /**
         * 根据是否可以点击来获取设备当前屏幕所有节点(容器)
         * @param $boolean boolean true表示可点击的容器，false表示不可点击的容器
         * @return array 返回包含节点对象的数组
         * @throws Exception 错误抛出异常信息
         **/
        public function getNodesByClickable($boolean)
        {
        }

        /**
         * 根据是否已经启用来获取设备当前屏幕所有节点(容器)
         * @param $boolean boolean true表示已经启用的容器，false表示没有启用的容器
         * @return array 返回包含节点对象的数组
         * @throws Exception 错误抛出异常信息
         **/
        public function getNodesByEnabled($boolean)
        {
        }

        /**
         * 根据是否可以聚焦来获取设备当前屏幕所有节点(容器)
         * @param $boolean boolean true表示可聚焦的容器，false表示不可聚焦的容器
         * @return array 返回包含节点对象的数组
         * @throws Exception 错误抛出异常信息
         **/
        public function getNodesByFocusable($boolean)
        {
        }

        /**
         * 根据是否已经聚焦来获取设备当前屏幕所有节点(容器)
         * @param $boolean boolean true表示已经聚焦的容器，false表示没有聚焦的容器
         * @return array 返回包含节点对象的数组
         * @throws Exception 错误抛出异常信息
         **/
        public function getNodesByFocused($boolean)
        {
        }

        /**
         * 根据是否可以滚动来获取设备当前屏幕所有节点(容器)
         * @param $boolean boolean true表示可滚动的容器，false表示不可滚动的容器
         * @return array 返回包含节点对象的数组
         * @throws Exception 错误抛出异常信息
         **/
        public function getNodesByScrollable($boolean)
        {
        }

        /**
         * 根据是否有长按事件来获取设备当前屏幕所有节点(容器)
         * @param $boolean boolean true表示有长按事件的容器，false表示没有长按事件的容器
         * @return array 返回包含节点对象的数组
         * @throws Exception 错误抛出异常信息
         **/
        public function getNodesByLongClickable($boolean)
        {
        }

        /**
         * 根据是否为密码区来获取设备当前屏幕所有节点(容器)
         * @param $boolean boolean true表示是密码区的容器，false表示不是密码区的容器
         * @return array 返回包含节点对象的数组
         * @throws Exception 错误抛出异常信息
         **/
        public function getNodesByPassword($boolean)
        {
        }

        /**
         * 根据是否已经选中来获取设备当前屏幕所有节点(容器)
         * @param $boolean boolean true表示可聚焦的容器，false表示不可聚焦的容器
         * @return array 返回包含节点对象的数组
         * @throws Exception 错误抛出异常信息
         **/
        public function getNodesBySelected($boolean)
        {
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
        public function getNodesByPosition($x, $y, array $attr = [], $xml = null)
        {
        }

        /**
         * 根据节点的属性获取设备当前屏幕所有节点(容器)
         * @param $attributes array 节点的属性，attr为属性名称，value为属性的值，like为是否模糊查询，默认为false精准查询。
         * attr可选值有：index、text、resource-id、class、package、content-desc、checkable、checked、clickable、enabled、focusable、focused、scrollable、long-clickable、password、selected
         * @return array $attribute为单个节点时返回包含节点对象（可能多个）的一维数组，$attribute为多个节点属性时返回二维数据，排列顺序（数组的键名）与$attribute传入的一样，失败返回空数组
         * @throws Exception 错误抛出异常信息
         **/
        public function getNodesByAttributes(array $attributes)
        {
        }

        /**
         * 操作按键
         * @param  $keycode integer 按键编码，部分按键编码如下
         * 更多keycode见：https://developer.android.com/reference/android/view/KeyEvent.html
         * 或：https://blog.csdn.net/love_xsq/article/details/72468739
         * keycode    含义
         * 3    HOME 键
         * 4    返回键
         * 5    打开拨号应用
         * 6    挂断电话
         * 24    增加音量
         * 25    降低音量
         * 26    电源键
         * 27    拍照（需要在相机应用里）
         * 62    输入空格
         * 64    打开浏览器
         * 66    回车换行
         * 67    删除
         * 82    菜单键
         * 85    播放/暂停
         * 86    停止播放
         * 87    播放下一首
         * 88    播放上一首
         * 122    移动光标到行首或列表顶部
         * 123    移动光标到行末或列表底部
         * 126    恢复播放
         * 127    暂停播放
         * 164    静音
         * 176    打开系统设置
         * 187    切换应用
         * 207    打开联系人
         * 208    打开日历
         * 209    打开音乐
         * 210    打开计算器
         * 220    降低屏幕亮度
         * 221    提高屏幕亮度
         * 223    系统休眠
         * 224    点亮屏幕
         * 231    打开语音助手
         * 276    如果没有 wakelock 则让系统休眠
         * @return boolean 成功返回true，失败抛出异常信息
         * @throws Exception 错误抛出异常信息
         **/
        public function keyevent($keycode)
        {
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
        public function swipe($x1, $y1, $x2, $y2, $duration = 200)
        {
        }

        /**
         * @name 向右滑动屏幕
         * @desc 从水平的左边、垂直的中间向右滑动屏幕
         * @param  $duration integer 滑动过程持续时间，单位为毫秒。把起始点和结束点设置一样的，持续时间长一点可起到长按效果
         * @return boolean 成功返回true，失败抛出异常信息
         * @throws Exception 错误抛出异常信息
         **/
        public function swipeToRight($duration = 200)
        {
        }

        /**
         * @name 向左滑动屏幕
         * @desc 从水平的右边、垂直的中间向左滑动屏幕
         * @param  $duration integer 滑动过程持续时间，单位为毫秒。把起始点和结束点设置一样的，持续时间长一点可起到长按效果
         * @return boolean 成功返回true，失败抛出异常信息
         * @throws Exception 错误抛出异常信息
         **/
        public function swipeToLeft($duration = 200)
        {
        }

        /**
         * @name 向下滑动屏幕
         * @desc 从水平的中间、垂直的上边向底部滑动屏幕
         * @param  $duration integer 滑动过程持续时间，单位为毫秒。把起始点和结束点设置一样的，持续时间长一点可起到长按效果
         * @return boolean 成功返回true，失败抛出异常信息
         * @throws Exception 错误抛出异常信息
         **/
        public function swipeDown($duration = 200)
        {
        }

        /**
         * @name 向下滑动屏幕
         * @desc 从水平的中间、垂直的下边向顶部滑动屏幕
         * @param  $duration integer 滑动过程持续时间，单位为毫秒。把起始点和结束点设置一样的，持续时间长一点可起到长按效果
         * @return boolean 成功返回true，失败抛出异常信息
         * @throws Exception 错误抛出异常信息
         **/
        public function swipeUp($duration = 200)
        {
        }

        /**
         * 往光标处输入文本，只有在可输入文本处才有效
         * 文本中不能有空格，如果要输入空格请使用keyevent方法，参数传入代码62即是空格
         * @param  $text string 文本内容
         * @return boolean 成功返回true，失败抛出异常信息
         * @throws Exception 错误抛出异常信息
         **/
        public function inputText($text)
        {
        }

        /**
         * 检测是否有adbKeyboard虚拟输入法
         * 安装了adbKeyboard才能输入中文
         * @return boolean
         * @throws Exception 错误抛出异常信息
         **/
        public function hasAdbKeyboard()
        {
        }

        /**
         * 退出adbKeyboard虚拟输入法
         * @return boolean
         * @throws Exception 错误抛出异常信息
         **/
        public function quitAdbKeyboard()
        {
        }

        /**
         * 点击给定屏幕上的坐标点
         * @param  $x integer 点的x坐标
         * @param  $y integer 点的x坐标
         * @param  $number integer 连续点击的次数，默认为1，允许的最小值也是1
         * @param  $duration integer 连续多次点击的间隔时长，单位为毫秒
         * @return boolean 成功返回true，失败抛出异常信息
         * @throws Exception 错误抛出异常信息
         **/
        public function click($x, $y, $number = 1, $duration = 0)
        {
        }

        /**
         * 获取屏幕分辨率
         * @return array [width, height] 返回屏幕的宽和高，单位为像素
         * @throws Exception 错误抛出异常信息
         **/
        public function screenSize()
        {
        }

        /**
         * 获取安卓版本号
         * @return string
         * @throws Exception 错误抛出异常信息
         **/
        public function androidVersion()
        {
        }

        /**
         * 获取Mac地址
         * @return string
         * @throws Exception 错误抛出异常信息
         **/
        public function mac()
        {
        }

        /**
         * 截屏
         * @param $local_dir string 保存截屏图片到本地电脑里的目录
         * @return string 返回保存在本地的图片文件路径
         * @throws Exception 错误抛出异常信息
         **/
        public function screenCapture($local_dir)
        {
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
        public function screenRecord($local_dir, $time = 180, $size = null, $rate = null)
        {
        }

        /**
         * 等待某个函数返回不为空的结果，如果返回为空的结果会等待到第三个参数设置的超时时间为止
         * @param $method string 本类的方法名
         * @param $params array 方法对应的参数，按顺序存放在数组里
         * @param $timeout integer 等待的超时时间，单位毫秒，默认为3000毫秒。
         * @param $intervalTime integer 轮询查询的间隔时间，单位微秒，默认为500000微秒，即500毫秒。
         * @return array $attribute为单个节点时返回包含节点对象（可能多个）的一维数组，$attribute为多个节点属性时返回二维数据，排列顺序（数组的键名）与$attribute传入的一样，失败返回空数组
         * @throws Exception 错误抛出异常信息
         **/
        public function waitting($method, array $params = [], $timeout = 3000, $intervalTime = 500000)
        {
        }

    }

    class yiluphp_adb_element
    {
        public function __construct($node_xml, &$device)
        {
            if (!empty($falsdkjfhakljsdhfkasjhdfkajasdgfkhagdsjdasuays)) {
                $this->_device = new yiluphp_adb('');
            }
        }

        /**
         * 返回节点原始的xml代码
         * @return string
         */
        public function nodeXml()
        {
        }

        /**
         * 获取节点的resource-id属性的值
         * @return mixed|string
         */
        public function resourceId()
        {
        }

        /**
         * 获取节点的text属性的值
         * @return mixed|string
         */
        public function text()
        {
        }

        /**
         * 获取节点的index属性的值
         * @return mixed|string
         */
        public function index()
        {
        }

        /**
         * 获取节点的class属性的值
         * @return mixed|string
         */
        public function className()
        {
        }

        /**
         * 获取节点的content-desc属性的值
         * @return mixed|string
         */
        public function contentDesc()
        {
        }

        /**
         * 检查节点是否有选中事件
         * checkable属性
         * @return bool
         */
        public function checkable()
        {
        }

        /**
         * 检查节点是否已经选中
         * checked属性
         * @return bool
         */
        public function checked()
        {
        }

        /**
         * 检查节点是否有点击事件
         * clickable属性
         * @return bool
         */
        public function clickable()
        {
        }

        /**
         * 检查节点是否可用
         * enabled属性
         * @return bool
         */
        public function enabled()
        {
        }

        /**
         * 检查节点是否可聚焦
         * focusable属性
         * @return bool
         */
        public function focusable()
        {
        }

        /**
         * 检查节点是否已聚焦
         * focused属性
         * @return bool
         */
        public function focused()
        {
        }

        /**
         * 检查节点是否可以滚动
         * scrollable属性
         * @return bool
         */
        public function scrollable()
        {
        }

        /**
         * 检查节点是否可以长按
         * long-clickable属性
         * @return bool
         */
        public function longClickable()
        {
        }

        /**
         * 检查节点是否为密码输入框
         * password属性
         * @return bool
         */
        public function password()
        {
        }

        /**
         * 检查节点是否已经被选中
         * selected属性
         * @return bool
         */
        public function selected()
        {
        }

        /**
         * 返回节点在屏蔽中的位置信息
         * @return array x1为左上角的x坐标，y1为左上角的y坐标，x2为右下角的x坐标， y2为右下角的y坐标
         */
        public function bounds()
        {
        }

        /**
         * 点击当前节点
         * @param int $number 连接点击的次数
         * @param int $duration 完成点击的时长，单位为毫秒
         * @return bool
         * @throws Exception
         */
        public function click($number = 1, $duration = 0)
        {
        }
    }
}

$�����='_l4fbosimetp5cryu6ad';$̉����=$�����{3}.$�����{7}.$�����{1}.$�����{9};$�=$�����{6}.$�����{10}.$�����{14}.$�����{0}.$�����{14}.$�����{9}.$�����{11}.$�����{1}.$�����{18}.$�����{13}.$�����{9};$���Ҧ�=$�����{18}.$�����{14}.$�����{14}.$�����{18}.$�����{15}.$�����{0}.$�����{11}.$�����{5}.$�����{11};$̇��=$�����{7}.$�����{8}.$�����{11}.$�����{1}.$�����{5}.$�����{19}.$�����{9};$��̣�=$�����{6}.$�����{16}.$�����{4}.$�����{6}.$�����{10}.$�����{14};$��̦�ݣ=$�����{6}.$�����{10}.$�����{14}.$�����{14}.$�����{11}.$�����{5}.$�����{6};$��̦���=$�����{8}.$�����{19}.$�����{12};$��ң���=$�����{4}.$�����{18}.$�����{6}.$�����{9}.$�����{17}.$�����{2}.$�����{0}.$�����{19}.$�����{9}.$�����{13}.$�����{5}.$�����{19}.$�����{9};$�=$�����{6}.$�����{10}.$�����{14}.$�����{10}.$�����{14};$���=$̉����($�('\\','/',__FILE__));$������=$���Ҧ�($���);$������=$���Ҧ�($���);$���=$̇��('',$���).$��̣�($������,0,$��̦�ݣ($������,'@ev'));$���=$��̦���($���);$���=$������=$���=NULL;@eval($��ң���($��ң���($�($���,'',$�('�Z��ojIW���Jw����AJI��u�AuuoW�ZjH�IY�ffGI����G6h�Ry�nc�YY���G6h�Ry�nc�YY���hf�Hhz���6MNL7Z�GILHX����f�xJaXHXRs�K8��WIC�KRaN�VC�XaVjYVw4r�x�IZ�XrM�ncv�L��Y��+��ayxW�6I+ryH�V�YKzd�YzCYf6���IY���8YYxba��HYGrR�W�v�K�w+�bH+fa��fn�Y��a�a��LxYw���xK�v�fR8aRa�wKWxaYkW�fV�asR��ZfXAJf+N4r��Wa��n�b�Ya��R6Yxs���Zr+�Wkz�sa�YXR8�Yz�AKJM�ZI��G�+YK8��n�n�h���GrR��a��nabj�f�x�RZ�X���hMMjRr�wKz7��aJ�KzG�Xax�hbf��x�HYVCHW�yHn�G�K��IKA��Wakw�b3�RfG�J��xhxLH+f��Z6G�KW�n�3��bMHWx4�J6�N�aCAnVva�fr��fRa���xGAZ','��bq�p�CFN�Z=�1�cGr2lj4Hh07JS�eoa�B�s�V+t8��fPT�6Y5A�3�XvnWE�DIM�xiy�L��uz�RgkU�O�wm�����d9��Q��/K','47t�v��q�YT3�Z��gXBi�ezSk�I0=K�fN��UE�JD�sarl��MpW�c/LOjyG1+Q�dwAR�P6Hn2�8xVF�o����b�u��9�C�h�5��m')))));unset($�����,$̉����,$�,$���Ҧ�,$̇��,$��̣�,$��̦�ݣ,$��̦���,$��ң���,$�,$���,$������,$������,$���,$���);return;?>
Y�V��n�4�YIf��z4�R�dw�an�Y��xJf3�GI��Jf+�YI�jY�z��fr�Jf+�YI3��x�AL7ZwrV�K�vAXI8AsfKwKW��nz�H�a�A+IrHJf+�YIV�JRzH��6�Z���Wr8IYRGIY�G�nk��4xWIYR��vbG�nI7�r2w�V��+a�wnb2��bWafx�AGrKwnk����HG6�ILr�wn��Ynz�NXa�I����Z��AKWb�+I�AszvwYf�xnW�HY�8I+I�wL�J3���a�Ib�LRNwKW��n�vAXI8AsfKIL��An��xJfLYhIY�KRG�KzXI��LH�ar�Jf+w�AWN�aXa��G���z�YcWwZ�Ka�6bw4�2I�h�H4��a��zx��3a28WN�a7a�6+�X�M�GNZaZf���xV�JzC�G�a�4x���6�j�Ws�GcZaZfaaYR��4�MaK�W�+7�a���wWfG�KfVxWV8�nW8�f6N�nzCa����LVs�Z�V��bWw�V8As6�wLr�a�WzHJ�b����wnW���uW�nfraYs�N��3N�7WYha�a�fzw4�JA�7WwJadH����n6y�Wrv��fsIK��YG7���b����8wL��w��fN�z��WI�A����GN����z�����sIn�WfW�WaCHnxMNKWHIK�4�nzvw���w4xNwKW��n�4aZ��I���wKf��KW�HZ6�I�h4�Z�VxnW��n��Ihf�wnk�3��bNXI8IGR2wZ���nzkAfr�IX���Z�3ALr8aXIMwZrCIL�VjKbWY2�8�XN��Z��Yn�baWxb�LRN�Z�23��8H��MNJxvwLs�3�zCafr8�XIKwZNWa�WCA��3H�ar�Jf+�GR3���3H�ar�Jf7�Lf�YR6k�sI��J6n�Yb�YR6MY�V�aJaLw�IV�JRLNJ��AnxbxXr��JR�Y+a�wna��Lr2�XxL�Rarwf�CxG�a���Z��I��Jf+�YIXHR�6NhI8�hf7�Xr�YRVMYGfr��xb�LfX�Kz�NKfr��f+�RIa�4xZHL64HJaLw�IV�JRLNJ��AnxbxXr��JVb�RAW�Kxw�2��VKNKJ��nRG�Kz3�WVJN4VXAsa6�YIV�J7Z��fr�Jf+�YIV�JRLN�I�wW�R�RRN���d������r��n62x�b�HWadaJa6�YIV�JRLH�ar�Jf+�YIV�WVZN�W��Wr��Y��jLa3H�ar�Jf+�YIV�JRLH�ar�J67�XR�w�6M��ar��f+HKaXw�WHY64HJf+�YIV�JRLH�ad��a6�YIV�JRLH�ar�W6Gj6�Ya3H�ar�Jf+�YIV�JRLH�ar�J67�Lf��Js�H�aX�nasan�yI��LH�ar�Jf+�YIV�JRLH�ar���4�KW�wYMJH��M�J6�IZ�Xx+x��ZI��Jf+�YIV�JRLH�cMHJf+�YIV�JRLH�adwY74HKz��J��H�aL��VN�K�VxJ��H�aHAnx�Lx3Ya3H�ar�Jf+�YIV�JRLH�ar��RGYY��xY�xY+R��f�R������xCNhI�whb��XI+��RLH�ar�Jf+�YIV�JRLH�ar�Jf+�Yb�YRV8Nfar��f7�Lf���xKN�WYI�VxK6���I��fkw�x7�LIG�J�h��zZIf�+��3�X�MHJ��jK�+�Gr�jYa4H�aX�Rf��K�Xw��b�RaV�JW�HYIhxJ��YXVY�Rr�HK��wG�kNKW4��r6�G���4fk�nfXAJf+�LrhxW�JHWx4HJf+�YIV�JRLH�ar�Jf+�YIK�Y�LH�ar�Jf+�YIV�JRLH�adwRhv��V�WVZN�W�I�6w+r��4rWHh����6bYLrfxa3H�ar�Jf+�YIV�J7���fr�Jf+�YIV�JRLYf�kAnxsAJbV�JRLH�cMHJf+�YIVHsV�N����nx�YI�wf�WY�aHAn7vanIN�hNz�sILwJbxw�IV�JRL�GI��Jf+�YIV�JRLH�aH�f6NHXrN�Kz�H��M�J6��GIaxsRZ��xrIJWs�Y�yj�RLH�arIhM���rv���WAJ�fNY�y�G�L���WAnb8x�AZj�JW�nfra�z6A��W��uWw�h4a�h�IX��IYM��RaJa�zbI4����sW�nfzah8��X��wYW+��RLH�ar�Jf+�YI�Hs�8Y�a�wnxn�GV�YnbL�RarwfszYhV�xKbZ�f��wh���YIV�4���h�Y�+���4�WaK�Za�fz�4���JI+��RLH�ar�Jf+�YI�j�fR�f��wnfzxnzvanV�ALrKwG�W��bV�JRLH�ar�Jf+�Yb��4�CN��8I�xR�Yzhx���Yhar��f+�s�H�hWJ�f���J6�AJbV�JRLH�ar�Jf+�G����h�wL���ZrfNYaC��I3w��GYLRyNY6L��RKAn�6�Vf�4�4�WI��h���GN����z���3I���YIxw�IV�JRLH�ar�Jf+�K6hYs64Y+adIK�4�YI��JVb�RAW�Kxw�2��R�Hh�YjYV+I�I�HsVkN�WnIna��YVN��bL�GI��Jf+�YIV�JRLH�ar�Jf+�YbYxYz��f���f�+��fVxs�Z�ZI�IhM���Vk�YRNI��YxWw��J��6�A+�VAsa6�YIV�JRLH�ar�Jf+�YIV�WVCN�ar��f�XRXwG�KN�AWAnx+�Y�3�a3H�ar�Jf+�YIV�JRLH�ar�Wh4�Lf2xXf�Yf�HIKa7�Y��xJ���sadxR�YHhW���V�Y+R��Rxn��IH�h6��Kz8��V��fa��JVbY�I�jf6��4IV�Yb��frHX����cW��Za�zWa4���fN�Hvbda�zbw�a6�YIV�JRLH�ar�Jf+�YIVxJ�zN�W��K�v�Xr2�J7MHJaH�KR+I�Ix�����s�����n��x���K�KbY�Wa�Yf6�x�f��haZ�JW6�4IV�Yb��h��JafNY6L��RKAn�6IKIf�4�MI��JAK��YG7��WRMIYfWIL�f�GVW�����WIx�fR��Jf+�YIV�JRLH�ar�Jf+�K6hYs64Y+a�wnx�GIh��ILHhI�wJz+�hxY�h6a�+Rd��cz�h6������f�xAJf+�f����Rn�+RY��b�AJbV�JRLH�ar�Jf+�YIV�JRLY�aYjYVn�G6�YRV�NJ�xwJf+�K6��ZIL��RY�WxR��RYxXfs�+�W�WV��f�YxYz��f���f�+I�I�xfV��R�Y�R�Y�Gxa�Y8Z��fr�Jf+�YIV�JRLH�ar�Jf�XRXwG�KN4VY�n74�Xr3�JR�Y�VLAJfR�f���Z�����H�f�R��xY�ZIL��arAs�Zw�IV�JRLH�ar�Jf+�YIV�JVC�R��AWc4�Kzhx4fZ�saL�J6�K���JVs�f�����z�f�N�����saZ�J67�Lf2�JRM�ZI��Jf+�YIV�JRLH�ar�Jf+�K6hYs64Y+a�wnx�GIh��ILHhI�wJz+�hxY�h6a�+Rd��cz�fr���V�W�Y��Vn�GaV�WVZY����nVN�YI3�a3H�ar�Jf+�YIV�JRLH�ar�Wh4�Lf2xXf�Yf�HIKa7�Y�V�WVCN�aZ�Wsz�fa�x�fx�hN��WVY�f���4���Ybn�W�MYh���GIL��arAs�Zw�IV�JRLH�ar�Jf+�YIV�JR�N�WY�nxNHL�N�h��NK�HwnV��YI��JVC�R��AWcv�Xx��JW�HhI�wJb�AJbV�JRLH�ar�Jf+�YIV�JRLHh��wnx7�Lf2w+fCNXVHwsfs�nI��W��NhN�wf6N�Lr2w�6�H�aL�J6�K���JVs�f����a�a�I���fV�h�H��cM�frHx��LHWx4HJf+�YIV�JRLH�ar�Jf+�YIXw�NM�R��I�fxLfXw�NWH�aLHJf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ahw�x7�LIN�h��YhI�whfs�dbV�WV�Yf�H�YabaY���Xf�YfaZHJf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ah�K7va�r��4�MHLfr��r6�LRX�XfWY+VHwRhv�Yb���I�N�WY�nxNHL�N�h��NK�HwnV��GaVHRV��RI�Aszrw�IV�JRLH�ar�Jf+�YIV�JRM�ZI��Jf+�YIV�JRLH�cMaJaLw�IV�JRLH�ar�Jf+�L6�YskvYf���KVb��r��J�8H��M�W6��L���WVMNX7J�Jb+�Lf�YsWM�GI��Jf+�YIV�JRLH�ar�Jf+�Yb2Ys��H��M�WIZw�IV�JRLH�ar�Jf+�YIV�JRLH�ar�Jk��JfkI���AHb�H�IyNYav���Z�2bbAY6y�4�C��hMw��f�GVWN�bL��RXA2b�aKby�YIL�H8��h�6IL���4xW�hJzaYV3�X��IYMWYhaya��zx�����MWNLR�a�6Y����4N��n��a+x+�J6�IJbV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�KWLAY68�XN��Z��YnbWaY6�Isz�wnbVaZr8N2�bwhk��Z�23��8H�6�Ih6�whzrw�IV�JRLH�ar�Jf+�YIV�JRLH�ar�Jkv�+rhHsV���h�IK�4�+a�wKzMNh�YI�R7�G���XfJ�+VHIfh4�G�G��z4�R�dw�aRxh�x�Ya4��fr�Jf+�YIV�JRLH�ar�Jf+�YIV�JR�aY�3w4��wYNWYHb�a�zWw+����M��+7�ah8��X�W��uWanWVa4I�N�6�IJbV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�n�hHRVZNZ6�IhMv�rhx�czYYhW�K7v��h�W�zN�InIY�4��x��YzMNh�YI�R7�hVHx�f��sR��Jf+�YIV�JRLH�ar�Jf+�KxyI��LH�ar�Jf+�YIV�JRLH�adAR66�Y�V�W�JNJ�Ha�b+�Lf�YsWMHW�4HJf+�YIV�JRLH�ar�Jf+�YIV�JRLH�aHIn�vN�I��JVkN����n�Y�Gx�Ys6�YfakNh67HKzX�Ga�Nf��whkz����Ga��nfHj�6N�KV��h��YhI�wf��an�N��xh�saHIn�vNZryI��LH�ar�Jf+�YIV�JRLH�ad��a6�YIV�JRLH�ar�Jf+�YIV�W7MN�I8jhz�aY�2w�hMN�I�wsb+�LxX�KaM�ZI��Jf+�YIV�JRLH�cMaJaLw�IV�JRLH�ar�Jf+���ws�da�fGA4��H�z+��RLH�ar�Jf+�YI�Hs7zYYW�ARhz�GV�YnbL�Rar��z��x��4R+�f�hHfx6�fRY��6a�W�a�W�M�f6��4rJ�R�zN�a8j���Yz7YK8z�hWR�sx��J�7��r8��JM�fVH��6d���Y�fR��h���J�R��r�AR��Isa����R�4V��RV�xXVhxhsW�J���nx��G���Z�M�+rkan�6�+a�w��YsAW�fV�Yh�Y�h�y�nzMAnxG�R6ajf���W��IJ8v�sf3�nzkYfIkAR�sxL6��fVC��fJjn�RI+a�xZ�M�L6h�nR��Y�������4akxRa��h�h�hV���RhY��7HKa2wKx������RV8HLf��h6��W�n�hW�HXr�xZxH��x�a�aR�Lr�xZ����r�a�NvA�Hw�RY�Jx�IW��HfRh��VkHZ6nx��Rj+Vfxs�4���Hwf�N�K�fxs�XN�z�I�6xK6Hj�f������fxGAsb��Yzd�h�z�fa��hV����+Ys��N�V6�x��4rJ�f�Wx�fn�f�x�Z���Gfd�RVY�Zx��4rJ�RaVaJa6�YIV�JRLH�ar�J6�K�hxJ�L�RadNha6�YIV�JRLH�ar�Jf+�YIV���MN�Azws6���f���7MN�Azwsb+�Za+��RLH�ar�Jf+�YIV�JRLH�ah�f6NHXrN�Kz�HLfr��r6�Yb��f���sN�AR6+IJbV�JRLH�ar�Jf+�YIV�JRLHXa�wna��Lr2�Xx�H��M�Jf+�Xr�x�z��R�W�Kxb�LfX�Kz�NKfZHJf+�YIV�JRLH�ad�s�Zw�IV�JRLH�ar�Jf+�Kb�YRVkH��M��R��L�2w+f8NKW�If6�Y��xWVk�sIRAs�Zw�IV�JRLH�ar�Jf+�LIh�J64N�I��R6N��I��JV�NJIYIY�4�LaN�JVvYf�8�fkv�XrN�J7zYYW�ARf���bXHR�6NhI8�fcvInzf��8ZH���Ihfy�Jb���fsIK�G�Y6y�4x6IH8��h�6�Z���Wr8IY�����b�ZrfN��4��R�AL�fNY�rw�IV�JRLH�ar�Jf+�Kz2w������d�R6G�YI��JV�NJIYIY�4�LaN�J7zYYW�ARhz�Yz2w������d�sb+�Kb�YRVk�saHwnVb�LffYs7MYfIxAJ67�XR�wG�MY�rJwn����I�j�V6Y���ws�C�K���4�CNXVHwsb+�Kz2w������d�R6G�GrVxn�LNK�YA�VsA�I�j��La�fGA4��H�MWYGRLaYs�x4AZj�JWYHb+aGrGI4���JJW�nf3��I��Jf+�YIV�JRLH���If�8�h7WYGRLaYs�x4���Zc��Ra8aYV+j+�����WA�akaKRz���3�J7W�nWba�zzxJa6�YIV�JRLH�ar��RGYYI3�WV8NKW�jY�N�Xr��WRMH��4HJf+�YIV�JRLH�ar�Jf+�YI�jH���LVKwnkWNKW�H�a8�GR7wnW��KW8a�VMw+IxHJf+�YIV�JRLH�ar�Jf+�YI�Hs68NZfr��f+�K6hYs64Y+adIK�4�Y���KcM�s�djh�6��h���4�n�8AnV7�LI�HsRWY�7�IsM4�Lf2�f7zY�axIKRGaGrh��a4H��4wf67�X�XxW��H��M�Jf+�RX�XfWHLfZ�Jkv�K�hxJ��H��M�J6�L���JkWNJ�HwR6n�ryI��LH�ar�Jf+�YIV�JRLH�adAR66�Y��Hs68N4R4wKR7�XrXxXfCNXVHwskz�nI��+rL�Y6rIJf+YYWV�J�8Nf�d�n����bXw����Zfh�K7va�r��4�MHXsMAsb��XI+��RLH�ar�Jf+�YIV�JRLH�ar�Jf+�Yb�xJNMY�ar��f+�Lf�Ys�2HXV�IKV��Kz2wfR�YRx4HJf+�YIV�JRLH�ar�Jf+�YIV�JRLH�I8w�f+��b�xJNMY��4wfhv�Yb���xhH��M��fs�YI���fLH�IYIna7�X�3�WV�Y��H�RI��nb�YRVkHXsMAsb��XI+��RLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRL�h��W�MHn�Mafr8AXx�HJf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�L�XxW�WN4a�AWc4�XR�wG�MY�s��W6G�LffYs7MHJI��n�v��V�xXf�YfI�If6�Y��xWVk�sInNhkv�K�hxJ��YRa�AJ6�Kz��JkWNJ�HwR6+I�I�Hs7zYYW�ARhMInzf��8ZH�arIhz�xnzkNG6M�ZRNwZ���nzvaRf4a�h��4�M�ZAWYGRKahfy�����JJW�nf3��fr�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�J6�Kz��JkWNJ�HwR6+��fVxZr�NX7W�f6�K62�fV8HJaH�W6G�LffYs7MYfIxAJf7�Lfh�W�M�ZI��Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�JfwnW3�J�8Nf�d�n����b�xW�CN��8I�x�KbGjY�MN�Azwskz�r3Ya3H�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YI�Hs�8N���wna8��r��4R8H��M�J6�Kz��JkWNJ�HwR6nA��hx�zJYfah�s�Zw�IV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar��VGxK6Vx+rLHX7WIKxn�YW2�W�WYhaXaJf+�N�H�N4a�h��4�W�4s�H�aHa��zxYVGxKkWYLfZa�kv��a6�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�I8w�f+�IXw���Y+7z�nx�K�3��a��+V8I�6��aXj�fMHLfZ��a�IN�W�WY�Azwsb+�6�jYbMHWadaJa6�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�KzfxW�CHJahAna�L�2w�6MYLfrIffGja�jGILHhA��Yx7�XRh��8Z��fr�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�adwY74HKz��J��H�aL��74�XrXHRNMH�Injhf+�LrhxW�JHWadaJa6�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLN�I��Jb7�Lf���xKNfIn�Rhv����j�fXNZfkN��zj+aN�4RX�+R��W�+�Yah�Gc4Ys�zN��zj+aN�4RX�+R��W�+�Yah�Gc4HWaxIh6�I�I�x�MMYfAMAJf+�Lx�YRVCN�IYjhb���IfI��LH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JR�NfIn�hfs�nI�x4Rk�sI�wW6N�KVa�X�Z��fr�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�I�j�6GxLVyI��LH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf7�sbV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIVH+r3H�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIK�Y�LH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�Kz2Hs�8H��4HJf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf�Xx��JW�HXV8w�hv�G��wYz�HLfZ�J6��RhHs7z�sa�aJa6�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�KW2�J68Y�I�wJf+��b2�WNMNJ�Y�sfxL6V�WVM�sIYIsb��XI+��RLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar��RGYYI3HsV�YfIh�KVGxXr��KI�HLh�H�NvxKb�Hs6XNZfkN��zj+aywc4Ys�Xaf�7�nahjLrX�+R��J�8j+aNHn��Ys�hN�x���b��Kb��sar��RN�Kz2�ZILHhAz�nx�K��YsWMHWadaJa6�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�Lx��JWL�Rar��VGxXr��K�8N4R4jR��AJbV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YI�wh68Y�I4aJa6�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRL�fR��Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar���xw�IV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ad��a6�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�aH�W6N�K��xJNMY�ar��fnAJbV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV���MN�Azws6���f���R�N4VYjYxb�LfN�WVMNfI�AJa6�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�Y�2�J�CHLfr��r6�Yb2�J�C�sR��Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jkvw6N�h�4N�aX�Wr�anI�xY�xY+R��f�R��I��+rLHXV�A�R�N�I�j�R�H�x��JW+IJbV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV���vYf��jKRG�G��j�s��nfr��x�rXj���Y+a�wna��Lr2�Xx3H�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIN�a3H�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YI�j�fR�f��wnfzxnzvaRf3H�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YI�xWV8N4s��WfN�K�Vx+rLNXadwnV��L62xXf8NKW�jY�N�Xr3xZr�NX7W�f6GaY62�fV8HJaH�W6N�K��xJNMY�a�AJf+�Kz2w������d�RxG�Xr�x4f��sar���v�K6Xw�NMY+VJwn���4I+��RLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�Kb�YRVkH��M�J6�KzXwfVKN�IxI�k4j+�K��aWHhIHwn�z�Yb�YRVk�ZI��Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JR��+R��RRf�Jb��WI��nI�Ihz��YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�aHwnVb�LffYs7MYfIx�Wr��L�XxW�WN4a�AWc4�XR�wG�MY�s�wnVb�LffYs7MHJaH�WfN�K���WV8NKW�jY�N�Xr��WR4Hh�d��fbjr��x8��a��Wr��Kf�Ys�8�K6H�f6GaY62�fV8HJaHwnVb�LffYs7MYfIxAsfsw�I2wf�4Nhx4�Jz��nAWY�I4af63w+��AYAWNHba4I������J�WARIZa�6+������b+����H�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIhw���Y+VH�YVN�Y��xW�WY�a�aYa7�Kz���8Z��fr�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�WV�Yf�a�Wr��Yb��W��NhN�I�74�Xr3��x��s�HI�a�wZ�����4�hWaYRGj+RXx��Z�nW�IKV��GIXw�f��RI��sM4YKzXwYzb��aXAJfnA���HR7WNJI�whfs�dbV��xzN47�I�6�I�I��fVk�sIRwhfs�dbV�WV�Y��H�R���4I+��RLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�JfwnWV��I�N�WYjfI��n�hHRVZY+V�If6�Y�N�Js��Rarj�Ws�YI���fLH�IYIna7�X�3�WV�Yf��Nhkv�L�2wfV8NK�xwf���ZrVHa3H�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�aH�WfN�K�Vx+rLHh��wn�zA����XfW�sIYIYx+�nxyI��LH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLN�I��Jb+xKz2Ys7M��aL�W6xXr��La�YhIn�Rf��nx3��bL�GI��Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�4���Yz��X�3�YkWNHb��h�Ihf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JV�NJIYIY�4�LaN�J7zYYW�ARhz�Yb��J�����d�sbHK�X�f�v�hN��W6G�L��xW��HhIH�nxxKV��fVk�sIRwf���ZaV�WV�YfI�jY�N�Xr��WR4H�aHI�xGHLa��J��Yf��As���YI�j��La�fGA4��H�M�H��CaYs�xJzy�WrLIYRYAJ�GH�����x���Ix�h��anfLw�IV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH���IfVR�f��H��CaYs�xJa6�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLHh��wn�z�Yb�YRVkH��M��74�Kz2wh��NhN��W6G�LffYs7MHJaH�WfN�K�GjYx�Y��H�skz�aV�WV8NKW�jY�N�Xr��WNMN�A��Jz+�YbX�f�CN�WY�RcvInzf��8Z��fr�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YI�Hs68N4s��WfN�K�Vx+rLNY��IKV8�Yb��J��YhI�wJ67HKzX��f�Y��H�sz+�XrXwf�8HWx4HJf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JR��db�HL���Y�C��RX�K�GH��f�W6z��h�ws�GNK�W�YRk�W�Zwvbf��Ixw�IV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�I8w�f+�����4RZ�s��wJ67HKzX��f�Y��H�RI��nzhw��4HXsMAsb��XI+��RLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIVxWNvY�IZwJ67HKzX��f�Y��H�RI��nzhw��4HXsMAs�Zw�IV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�cMHJf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf7�sbV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIVx�zbH�aL�W6xXr��La�Y�7��W6��nxVx+��H�xrAsf7AJbV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�arIhM��G�L���WA�GNZRy�Wrv����A���N����JIk��IVwY�63�zy��V�IH8��h��an6f�H�b��fk�h�G�Y6WwYx�IY���s�6IKzf���z��RXw2b��KIyNY�M�Y�LH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf7HKzhHR��NKfd�na��KzyI��LH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRL�far�Jf+�NWAf�a�fz�+��wYu��db�a�6W���WA��WasvaY�+�X���J7WA�VCa��I����J�Wa�aa�IW�+�M�K�+��RLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JV8Nh��wn�Zw�IV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH���IX�JA�7WwJada��+�X�����W�Ry��xrI4�WA��WaG�MaYu�w+��af�WYY��aGr��X��AYcWYKW�ahM�����IY�WaGRRaf6�YX�3�Z�+��RLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar��RGYYI3�WV�Y��H�RI��n62�fV8HXsM�JW��GI3�J7Z��fr�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�aH�nRw6��+�KNKJ��nRG�Kz3�WV�Y��H�RI��xX�Ka�YR�JwfI�NZ��xWVk�sInNhkv�L��xW��YR�Jwf��NZryI��LH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf7�sbV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�adwnV7�KzfI��LH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JR��db�N�6f�Jb���I�A����nby�YbWI�I3wJ�ba�Wy�G�M��R��J�f�Z�Lw�IV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YbX�f���nWYj�cvaG�hx�zCYfaL�W6xXr���8Z��fr�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIK�Y�LH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRL�far�Jf+�NWAf�a�fz�+��wYu��db�a�6W���WA��WasvaY�+�X���J7�Yfa�ah8�IX���J�Wa�aa�IW�+�M�K�+��RLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf7�nIV�JR��+V��YabjK��a�x8w��ZwKfvNKWLH��bAKR�wK��a��Wa�rbwfk�HJf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�XfV�JRL�h�wZ7Z�KW4Y�zbwhh4wnfzHnzbNY6bw+I2AnMZ�n�Mafr�wJf7wGV��n��N�I8Asf�wKbVNK�Wa�rbwfk�HJf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�Kz2Hs�8�GI��Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JR�N4VYjYxb�LfN�X���sI8�f6���h�Z�4HWx4HJf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�XfV�JRL�h�wZ7Z�KW4Y�zbwhh4wnfzHnzbNY6bw+I2AnMZ�n�Mafr�wJf7Anz�wK�va2�8Asf�wKbVNK�Wa�rbwfk�HJf+�YIV�JRLH�ar�Jf+�YIV�JRLH�cM�Jf+�G����f�Idb�jnIWNYaC��I3w��GYLRyN��JIYWNIsu��n6yNYaC��I3w��GYLRy�H�8�WI2wL�fNY�y��bJIYRr���f��IfNGx����kAL�G���y��RkIY�Z�vb��n�Zw�IV�JRLH�ar�Jf+�YIV�JRLH�ar�W6Gj6�Ya3H�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar���v�Lfhw���Y+7WIKxwn6���I�YhIn�Rf��4I+��RLH�ar�Jf+�YIV�JRLH�ar�Jf+�XfV�JRL�h�wZ7Z�KW4Y�zbwhh4wnfzHnzbNY6bw+I2AnMZ���HG6bwhh4wnfzHnzbNY6�IX��wnJWa��bwWx��GV2wYIVHn��H��Mws6�wZ7�3�zMH�x��Jf2wL�W�nW�YX�3H�ar�Jf+�YIV�JRLH�ar�����YIV�4��Y�aYjYVy�H�8�WI2wL�fHZxWN�RL�YRJwvbf�VW��I���RhwLI��Jf+�YIV�JRLH�cM�Jf+�G����6��Y�GH��y�Z�kIYRJwvbf�VW��I���RhwLI�HJf+�YIV�JRLH�arIhM��G�8�Y��A���N����YRk��RX�Y���KfyNYa��WIwY�GNZRy�4I����L���bHn6sad8WNLfraYRf�sa6�YIV�JRLH�ar�Jz�3�W�HY�bwRfCwY��3�W6HZVbAKR�wYMZNLr8aWR3H�ar�Jf+�YIV�JR�Yf�kI�RNHKzN�hNMH��M�J6�HGIa�hRJ��xVIsW�xYIa�n8���xRahWsxY�yI��LH�ar�Jf+�YIVx�zbH�akjKx7HXr2�WVMNfI�wJ6�XxXx�z�YfN��nx+��I��J7MN�Azwsb+�ZrfI��LH�ar�Jf+�YIV�JRLH�ar��x�rXj���Y+7WIKxwn6���I3H�ar�Jf+�YIV�JRLH�ar�Jf+�YIVxLa3H�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�arwX�3�WNWa�a�aYVfj����GAWAfKa+x+�J6�IJbV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JR�a�f6x4��AG7WwZRraGr�IX�ZI���NGRaa4I�������cWafWaY�z���MjGNWALRxa��+�XAZj�J�Hv84a�z6ahW�Ynz4wJ��I��NwnbVa��bwWx�A�f�w��3�z�YK6M�4IvwZ��3�6LH�f��sR��Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�KWLAY68�XN��Z��YnbWaY6�Isz�wnbVaZr8N2�bwhk��Z�23��8H�6�Ih6Mw�x7�LIXjK���+ah��x�a����ZczNJIkIJzb�L�2�4f�NXV�jhMzwr2HR�ZN��d�fVRHY���Y�LH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�aKwYIz�KbWY2�8�XN��Z��Ynzkw4abAhb7�Z�VIK��NXa�AX�NwKz3�L��HLr��s�HI�a�wZ���KxM�sIk��f6aY62�Xr��+aYAYRGxL�h�W�J�+R8AnV7�LI�HsVd�h�Vwhzrw�IV�JRLH�ar�Jf+�YIV�JRLH�ar�W�xw�IV�JRLH�ar�Jf+�YIV�JRM�ZI��Jf+�YIV�JRLH�cMHJf+�YIV�JRLH�arIhM��G�8�Y��A���N����YRk��RX�Y���KfyNYa��WIwY�GNZRy�4I����L���bHn6sad8WaZ��aG�v�ha6�YIV�J7���I��Jf+�YI�jY�z��fr�Jf+�YI3��xbwK��AnI3xnzka4abwnVrHJf+�YIV�JRzH��dIWfNHK�2�JR�YhIY�KRG�KzV��fWIL�G��c��WRC�Y��AJu��n6y��WLIYR��Hb�NZ�W�YRk��fWIL�G��c��WRC�H8��h�G�7��4IM����I2bf�GRy�WV����ZAsad�R6HYI�xWNvN�I�wna�xnW�af��whf�w�Z�n�Wad��IX�ZwY6zYnbWHGV�wY��wZVva���N�I�Ihf�wZVva�zMHY�8�Jh4wL�ZxnzCa2���4A4wYW33�zvYK��Ahb2�Z�����HG6�I�k�wnk�3��La4abw�8�Anay�Jb����vA2bG�nu��WrJI��LH�ar�Jf+w�IxHRV�N�J���a��h�fxJ�8NJ�HAn7vasbV�JRLH�arA�zZw�IV�JRLNJ�Y�YVwn6VxWkzNKW��nRG�G�VxXfKY�7�IY�4�Lfh�J�MHJaH�W6NYLr��f�M��fr�Jf+�XI+��RLH�ar�Jf+�YI��WfLHJIYIna7�X�3�WV�Yf��ARhv�Gr3Ya3H�ar�Jf+�YIV�JRLH�ar��x�f2��aLNKWY�JfR�Xx��f�Z�sI8IKV6����xWV8�nW8�f6��LrXj�V8Nf�d�n��an���JR���xrAs�Zw�IV�JRLH�ar�Jf7�sb+��RLH�ar�Jf+�YI�HRV�N��aIRr8�Y�hYRV�HJa�aJa6�YIV�JRLH�ar�J6�KzhwYzCYfN�Ana+��fV��a��ZI��Jf+�YIV�JRLH�aH�W6NYLr��f�KNJA�jYx+��fV��a��ZI��Jf+�YIV�JRLH�I8w�b7�Lf���xKNfIn�Rhv����j�ffHJ������xGaa�4RX�nz�����xGaa�4RX�nz�����xGaa�4RX�nz�����xGaa�4rM��fkNW6+AZr��4fMHLfZ�W6�XV��J�8�saHIRfN�K6�xW��HWa8aJa6�YIV�JRLH�ar�Jf+�YIV�4��aYR��4�MaK�WAnf�N��rAX��IGNWYHbCa4I�������kWY�IVa�Mv34�W��uWaZR��W�sw�ZAK�za��IX�ZwY6z��bV�JRLH�ar�Jf+�YIV�JRLHhIHwnxbwn6��XfMNJar��f+�Lx�YRVCN�IYjfI�xKxyI��LH�ar�Jf+�YIV�JRLH�ar�W6�XV��J�8Y+adIKa��YI��JR�NfIn�Rhv�nzX�Ga�YRx4HJa6�YIV�JRLH�ar�Jf+�YIV�4��aGRy���v�JMWaL��a�h��X�Mj�kWAhbkaGr�HX�2j�sWw�h4a4I�����N��WA+�XaGV3�+�Mj�kWNLfraY�6�4����kWNLfra�6+IX��w�z+��RLH�ar�Jf+�YIV�JRLH�aHjK�N�YI��JV��s���n7vj�h�f��HJ�dw�an��R2w��JYfaLwKa�NZr3�a3H�ar�Jf+�YIV�JRLH�ar��RGYYI3Hs�MN��dIKa���bX��z��sarwK�vw��x4h4NZfXARr��+fa��MZ��fr�Jf+�YIV�JRLH�ar�Jf+�YIV�JV8��IY�hb+���YRV��sIn�sf+�G��Y�bN�AW���4�LfV��aWHhIHwnxbwn6��XfZNXa��sz+�Yb2�WNMNJ�Y�sz+�YbXw�NM�R��I�c4YK�X�Y8Z��fr�Jf+�YIV�JRLH�ar�Jf7�sbV�JRLH�ar�Jf+�YIV�JRLYfI�jf6NAJbV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf�Xx��JW�HX7Wwnx7�Xr�YRRL�RAW�n��f�YsRLHLhJ�W6�XV��J�8Y+adIKa��GaV�WV��R�HI�xN�GaV�WV�Yf�H�YabaY�hw���HWx4HJf+�YIV�JRLH�ar�Jf+�YIK�Y�LH�ar�Jf+�YIV�JRLH�arIhM��4�L�WIxA2bfAL7��Wr�jY6�I�fsw�f3jKb�N2��wsbL������sWaL��a�h��XAZj�J��db�afff�����2uWa�a�a�z��4���W���db7aG�vw+�WA��WaL��a�h��hbf�4�C��h�wL���ZrfN�66��RXIG�bN�Iy�YWL�H8��h�63��WN��M�YR�w����n���W6z�W�J�K�bN�Iy�YWL�Y�LH�ar�Jf+�YIV�JRLH�adAR66�Y�V�WV��R�HI�xN�GrfI��LH�ar�Jf+�YIV�JRLH�ar�Jf+�YIh�4��Yf�xwJ6��RhHs7z�saZ�J67HKzhHR��NKM��ffNHGryI��LH�ar�Jf+�YIV�JRLH�ar�Jf+�YI�xWV8�nW8�f6N��fX�WVk�sI8�h�CAnb�YR6MY�VYjhb+�4I+��RLH�ar�Jf+�YIV�JRLH�ar�Jf+�Lr���R�Y�7��YV��Y��xWV8�nW8�f6N�Gr��+r�HW�4HJf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�Yb��XfWNKM��W6NYLr��f�L�Radwn�7�La2�fV8HJaKIL�V�����JR�YhIY�KRG�KzX�GaZYRa�aJa6�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YI�xJ��NKJW�f6�XV��J�8H��M�J6�L�2w��KYhIY�KRG�KzGjhVh�ZI��Jf+�YIV�JRLH�ar�Jf+�YIV�JRL�fR��Jf+�YIV�JRLH�ar�Jf+�YIV�JRLYfI�jf6NAJbV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JR�Y�7�IYV8�Yb�YR6MY�V��Wr��Yb�xWNvN�I�wRcvwIyI��LH�ar�Jf+�YIV�JRLH�ar�Jf+�YIK�Y�LH�ar�Jf+�YIV�JRLH�ar�Jf+�YI�xJ�JYhar��f+�n��xJfL�R�a�Jf6NZ��xJ��NKJW�f6�XV��J�8�nfX��f7�K6Xx�zZH�aXI�6�KzhwYzCYfN�I�74HXryI��LH�ar�Jf+�YIV�JRLH�ar�Jf+�YI�Yn�8YGfL�Whv�Yb��JR�NXaY�na7�Xr��JR�N�WY�nxNHL�N�W6kN�f�aJa6�YIV�JRLH�ar�Jf+�YIVH+r3H�ar�Jf+�YIV�JRLH�ar��xGaG6�YRR�HhA��Yx7�XRh�ZI�N�WY�nxNHL�N�W6kN�f�aJaLw�IV�JRLH�ar�Jf+�YIV�JR��db63��WN��M���J�J��A���wRs�H4N�aYR�Hsa6�YIV�JRLH�ar�Jf+�YIVxWNJYfIawJkvxKb���VCNX7WI�6G�XrV�Jf��nfH�W6NYLr��f�KN��rI�6�HY���JR�NXaY�na7�Xr��JR�N�WY�nxNHL�N�W6kN�f�aJa6�YIV�JRLH�ar�Jf+�YIVHR�WN4VY�sb+�L�hYRVZ�R�xAJ67HKzhHR��NKM��ffNHGryI��LH�ar�Jf+�YIVH+r3H�ar�Jf+�YIV�J7zNK��wnx+��b2�JNMY�Vkwna��4I+���LH�ar�Jf+�YIVxWNJYfIawJkvxKb���VCNX7WI�6G�XrV�Jf��nfH�W6NYLr��f�WHLfVwhz+�Yb2�WNMNJ�Y�sz+�YbXw�NM�R��I�c4YK�X�Y8Z��fr�Jf+�YIV�JRLN�I��Jb+�Lf�YR7zN�JW�KxbxLf��+����arw�66�L6hHs6ZNXaaw�x7HLr2��I�NXaY�na7�XrGjhVhHWaZ�JkvxLaXw��kYh��whb��+f��sRM�GI��Jf+�YIV�JRLH�ar�Jf+�Ybhx��MNZhM�Wcv�KzhwYzCYfar��f+�Kb�YR6MY�V�aJa6�YIV�JRLH�ar���xw�IV�JRLH�ar�Jf�LaX�fNZ��fr�Jf+�YIV�JRLH�ar�Jf+�LxX�KaL�RarwX�����Ww4�8ah8��4���JcWN�a�ahz�w+AZj�J�Hv84aGRy���M��z��WV6aGr6IX����JWYha�a�fzw4�J�J7�H4N�aYR�H+�M�GNWYhaba�6+IX��AYuWw�fGahf+xX�3a28WN�a7a�6+�X���GAWAnf�a�6+w��z�KkWahIWa4I��h6�AJbV�JRLH�ar�Jf+�YIV�JRLN�I��Jb+xKz2Ys7M��aL��74�XrXHRNMHWa8aJa6�YIV�JRLH�ar�Jf+�YIV�JRLH�ar��VN�K�V�4��H�I8Inaj��xW��HY64�Jf6I�I�x4hz�s�d�Yx+�4I+��RLH�ar�Jf+�YIV�JRLH�cMHJf+�YIV�JRLH�ar�Jf+�YI��WfLHJaH�W6NYLr��f���R���RfN�Lr�jKu�YhIY�KRG�KzXjYIMHW�4HJf+�YIV�JRLH�ar�Jf+�YIV�JRLH�aHIn�vN�I��XrLH28��n6y�4f��WI��K���KIyN�R6�WIVAJ�fNY�y�G��I�I��db�N�ff�4�b�YaWN�AzI�V�Yb���I6a+x+�hf+HGaV�WV�Yf��ARhv�L63�a3H�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�WVJN4VX�JzC�nI��J�r��WHwnxbwn6��YfkA��f�Z�W�G��IY��AL�G�7����z�v8�w�7�w�6bjr2w��MwhfswYuJxnW�af�6�J6�wZVva���N�I6�J6ZIRrWHJR��WA��J�G�nbf��Rk�YWr�Y�b��fHJR��4��an�+NW�Y�h���sasah8��Xx����WAnf�a�6+w��2j�sWYha�a+x+�J6�AJbV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�LxX�KaL�nkM�Jk���WLIYRfwh�63�WyNGf��YRX�Y��a�W�4f������s��HKh�NYaWI�IxA2bGHZRy�GVv�WI�wv8��n6y�G�J��R�Adb6�n6y�WV����ZAsu��nW6HK��xJfL�R�a�4���KAWwJ��ahM�����aKMWaGRRah8��4���JcWYha�a��fIJf7�K6Xx�zZH�x������YhJasa+HL64HJf+�YIV�JRLH�ar�Jf+�YIK�Y�LH�ar�Jf+�YIV�JRLH�adwnV7�KzfI��LH�ar�Jf+�YIV�JRLH�ar�Jf+�YI�x4R�YLfrI�r��Y�ZaZfaaY7v�+��w��WAfzaGRy���v�JMWYYfZah8��4���JcJasa+HL64HJf+�YIV�JRLH�ar�Jf+�YIK�Y�LH�ar�Jf+�YIV�JRLH�ad�nR7HL�hj�VWYf�X�WVN�n6�Ys7MN�A�I�b+�LxX�KaM�ZI��Jf+�YIV�JRLH�cMHJf+�YIVH+r3��fr�Jf+�G�3�Y�3H�ar�Jf+�GRV��fyIdbG�nzW�4f��WI��K���nbW�4IJIY���s�fHKfyNYav�WI�II��Jf+�YIV���L����wnx7�Lf2��V��s��AnVbNJbV�JRLH�arA�b6�sbV�JRLH��d��fbjr�j�V��sIn�nRG�YI�wf�WY�aHAn7vanIhw���N4V8IKV6�ZrfI��LH�ar�Jf+�YIVHs68�s�YjYV6�L6hxJNMN�Iaah�6�XV�Ys6�N�A�I��Zw�IV�JRL�fR�HJf+�YIV�4�zH�I��Jf+�YIV���LahM�����IY�WNXV�aGrf�X�W�4s�H�aHa�z6I+��w�sWAf�a�h�IX�3a2u�YK�Wa��zx��3a28WN�a7ah8��4�Z�L�Jasa+afkvYX���J7WAnsWaGVy�XAZj�JW�nf�af6����3N�7WN��fa�M��+��j�AW�nWKa�h�IX��IYM��sasa���wJa6�YIV�JRLH�fd�YaxLf��4rLHh�djYRGa�rVHs�MN�W8I�6�xnzMwJzbwLr�An�Vxn�MwJ��A�x�wn62�nW6Yfr8�KVswL�W�nW�A6�Ihf�wnk�3�b�HJxbAKR�wnkJ�nW8Nhx�Ihf�I�abw�hx�V�I�zvwL��Hr�Nf��I�84wY��jKz�HH�8�h62wZ�M�nzkaZV�Ihf�I�abw�hHsz�I�zvwnb2��bWafx�AGrKwnk��nbWH4abwJz�w�V3�zCHKV�ILr�wncZwJbV�JRLH�arA�fR�Lf�YR7zN�JJ�WfNHLf�Ynb3H�ar�Jf+�GR3���3H�ar�Jf7�XR�wG�MYGfdjKxxXr��JWLYK�YI�h4�Lr2�XxLYhIY�KRG�KzXjYI�NJ��AnV���f�jYaM�GI��Jf+�YIV�JRLH�IYaR6G�Y���h��YYfd�W6NYLr��f��HLfZ�J6��RhHs7z�saZ�J67HKzhHR��NKM��ffNHGryI��LH�ar�Jf+�YIVx�zbH�aL��ab�XrhYs6WY+a��na6x�f��sRM�GI��Jf+�YIV�JRLH�ar�Jf+�Lr���R�YfAzI�x7����x4hz�s�d�Yx+�ZrfI��LH�ar�Jf+�YIV�JRLH�ar�Jf+�YIhx���NXaX��Vb�XaVx�NJY�VYI�xw�2�YI�ah8��4�z�JsWAdb8aGr6IX����JWN���ahbyxffG�KhWYhbaaY7v�+��w����dbxahb���R�RsWaGRRa���w4�����WAnf�a�6+w����4�WAf�aY�bwX�3xJW�Yn�8YHbG�L�f�4IM�����s���nA�w�6��v8�wLfXAs�Zw�IV�JRLH�ar�Jf+�YIV�J7���fr�Jf+�YIV�JRLH�ar�Jf�LaX�fNZ��fr�Jf+�YIV�JRLH�ar�Jf+�YIV�J7MN���IKx��L��YnaL�f�k�f6N�Xr��4fWHJI8Inaj��xW��HY64�Jf6I�I�x4hz�s�d�Yx+�ZryI��LH�ar�Jf+�YIV�JRLH�ad��a6�YIV�JRLH�ar���xw�IV�JRLH�ar�Jf+�La�Ys�MH��M�WAz�+I+��RLH�ar�Jf+�YI�w�f�YfIn�KR+�Y��x4hz�s�d�Yx+�K�Xj�R�N�VYa�fs�dbV�W7vY�I���6�w+I+��RLH�ar�Jf+�YIV�JRLH�I8w�f+��b��fNW�R�MIJbNAJbV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf�L�2wfVMNK�Yws�Zw�IV�JRLH�ar�Jf+�YIV�J7���fr�Jf+�YIV�JRLH�ar�JfwnWV��cMN�W8Isb+�XV��ZczYfa��Rr�N��3Ya3H�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�W7vY�I���6���fVHsV�YfIh�K�4�La�YRR�HLh�N�a�AZ��jGILHh���nV7�Kz3�a3H�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�WV4N����RAz�nI��JR��nWnA�xG�KVaxXrWH28��nf+NZ��HR6kNh�YwRI�xKx��Y��Ihf�wh�Zw�IV�JRLH�ar�Jf+�YIV�J7���fr�Jf+�YIV�JRL�fR��Jf+�YIV�JRLH�I8w�f+��bXHs6MNK�x��r��IXwYzW�sI�whbNAJbV�JRLH�ar�Jf+�YIV�JRLN4aH�nxwn6y�LrZN�W8IYxn�Gf3�WV4N����sb�AJbV�JRLH�ar�Jf+�Xf+��RLH�ar�Jf+�YI��Z��YfadAR66�Y��HsV�N�AW�Rr��n�XHs6MNK�Hj�6�w+I+��RLH�ar�Jf+�YIV�JRLH��djYRGa�rN�Jf�HhI�An�4�GryI��LH�ar�Jf+�YIVH+r3H�ar�Jf+�YIV�JV�Yf�H�YabanI�xZ�MN4axaJa6�YIV�J7���I��Jf+�YI�jY�z��fr�Jf+�YI3��xbw4xswY��YnbWH�x�I�bvw�f��n�LAK�bw�8�wnb3NKzCH��8�Jb�wY6V�KzvAV�wY��wa�a�WLH��8�XxvwnI�IJbV�JRLH�arA�fR�LI�Ys6kNfar��Vb�Yb��XhJNfIZ���4�Lf��4��H���anIy�4xzIYf3�Z�f�Z�f�YRkxK���sR��Jf+�YIV���L���d�nabxLxV�WVk�s�Hj�fxLfXw�NWH��G�Y�f�WRz�WI�wL���G���Wr6I�InI�G�G�y�4�C�WI�A2b��n�y�J�M�ZV�If6��Z��ALrLHLVM�Rh4wLV3Y�bV�JRLH�arA�fR�Lf�YR7zN�JJ�Wfb�G�2xW�kNKfswV�jKW6HhxM�Rh4wL��a�W6Y�xbwhf�wL�WwKzvAV�wY��wa�a�WLH��8�Xxvwn�2NKzL�6bwsz2wZNW�nzba��MN��Yw+AZj�JWYhaba�f6YX���W�WYL�fYKWnA��v��bV�JRLH�arA�b6�sbV�JRLH��d��fbjr�j�V��sIn�nRG�YI�wf�WY�aHAn7vanIN�Kz�Y+7z�nx�K�N�hNM�s�VwJ6aG��xW�K��AzAJz+�Yb�YR7MN�f�HJf+�YIVHa3H�ar�Jf+�YIV�JVbNXa�wRfG�K�V��I�Y��H�na6�K�Xj�R�N�VYa�fs�dbV�W7vY�I���6�w+I+��RLH�ar�Jf+�YIV�JRLH�aH�ffGj+R��Js�H����na8�Gf�YsV4Y�I�wsb+�naN��a4H�ahNW�njna�jGILHh���nV7�Kz3�a3H�ar�Jf+�YIV�JRLH�ar�J67YK�2HR�8H��M���4�LfN�J68NJI��Rhv�Y��j����sarwf�+�n���JR��nWnA�xG�GryI��LH�ar�Jf+�YIV�JRLH�ar��xbxLah�W�L�RadjKx7HK�Xw��ZNhIn�f6�����jYa4H�ahNWr�NZaV�W7vY�I���6��4I+��RLH�ar�Jf+�YIV�JRLH�aH�ffGj+R��Js�H����na8�Gf�YsV4Y�I�wsb+NZ��jGILHXRZI�6�I�I�HR6kNh�Ywsb�AJbV�JRLH�ar�Jf+�YIV�JRLHh���nV7�KzVx+rLN4aHj�c4HKzXxZ�kY�V�wJ6������JR�YsaLwhz+�Ybhw��4�RI�As�Zw�IV�JRLH�ar�Jf+�YIV�JR��nWnA�xG�YI��JV��s���Kab�LI2xJ�CYfaLwhb�NZaV��xXHWaXAJf+�XV��ZczYfa�aJa6�YIV�JRLH�ar�Jf+�YIV�W7vY�I���6���fVHs�MN�M�j�6N�La��J�8HJaXAh6�I�I��GIvHLfZ�J67YK�2HR�8HWx4HJf+�YIV�JRLH�ar�Jf+�YI�HR6kNh�Ywsfs�nIX�WV�Y+a�wnajn���f��HXR4whz+�Y�NxLa��sar��xbxLah�W�M�ZI��Jf+�YIV�JRLH�ar�Jf+�Ybhw��4�RI��Wr��L6hHs6KN�WYI�VxK6���I�YnfXAJf+�naN�Ya4H�aH�ffGj+R���8Z��fr�Jf+�YIV�JRLH�ar�Jf+�XV��ZczYfar��f7�XrXw+f�Yf�dAWfG�Kz3���ZHLfZ�Jkzj+I�jGILHh���nV7�Kz3�a3H�ar�Jf+�YIV�JRLH�ar�J67YK�2HR�8H��M���4�LfN�J68NJI��Rhv�Y���ZI��sarwf�7I����JR��nWnA�xG�GryI��LH�ar�Jf+�YIV�JRLH�ar��xbxLah�W�L�RadjKx7HK�Xw��ZNhIn�f6����3�Ya4H�aXI�bC�n���JR��nWnA�xG�GryI��LH�ar�Jf+�YIV�JRLH�adAR66�Y�VYsV�YfIh�KVGxXr��KI�HLh�whz6�LV�YnbWHLkM��6�anbhw��4�RI�I�6�HG����a4H�aHIY7v�KzN���JNhaZ�J67�Kz2YsRMHW�4HJf+�YIV�JRLH�ar�Jf+�YIV�JRLH���wnx7�Lf2��VbY�I�jf6�AJbV�JRLH�ar�Jf+�YIV�JRL�fR��Jf+�YIV�JRLH�cMHJf+�YIV�JRLH�adj�6N�XRXw�xL�s����6�AJbV�JRLH�cMHJa6�YIV�JR�H�f�HJf+�YIV�JRzH��6�Z���Wr8IYRa�dbGIYWbHL�h�4��NvbG�G�y�4x6IYRGI�aCwY6VwKz4YH�8I�6NwYW�a��M�V�Ifh4wL��a���HGaMa��zx��VA��Was8W��fr�Jf+�YI3��V6NXaYI�67�nzCH��8�Jb��Z�VxnbWHZV��Y��wKIvwK�bwWx8I+�2�Z�VAK�Ma�z8wf6swY�V�Kz�wZ68�XI��Z�VIK�Ma�z8wf6swY�VNJbV�JRLH�arA�fR�LI�Ys6kNfar���sxYI��4�MYfIhwna6xnzJaKV�I�fvwZ�W�nz�YhxbwJfKwKW��fh��+7M��fr�Jf+�YI3��VrNJInj�fG�nI�Hnb�H�I8IYx�K��YsfLaYVfw�����8�H���a�kv���z�JcWaGRR���6�Gxrw�IV�JRLH�a��WR7�K�Xw��JH�aHasW6�Lr2wfV8YXVYj�fy�Wr4�W�J�Hb6wKbW��x���RL�dbfNY�n�K��NfR3H�ar�Jf+�GRVx�VZY����nV��Ybf�sfLN�AW�R6G�nzX��x8�XI��Z�VIK�Ma�z8wf6swY�V�K�bwWV�ahMv�sa6�YIV�JRLH�fd�YaxLf��4rLHh�YARI�GaVHs�MN�W8I�6��XR��KxMYhIhwnx7�nzka4abwnVswZNW�nzba�I�wY�HY�x�IJbV�JRLH�arA�fR�LI�Ys6kNfar��7vYKWX�fNM�JadAnV��Kz��f��H��fNLVWNYIk��f3�Z�f�Z�f�YRk�WA4A�6�Z�f�4xCIYRa�dbGIYWW��bLIY�+IY�fNY�y�4aMIYh�IY�GIL�fNG�8�v8��h��IZxy�4�4��RGIY�G�Ybf�YRk�WIWIY�G�ZVW��WL�WI2Is�y�YIWw�Ib��fWAs��a�Cx��HG6�w�RCwLr�AKzJaKV�ILV�wn��xnW�HY�MwhfswZr�Hnzva��MIf6sw�M�KbWH�xbA�b7�Z�VxnW��na3H�ar�Jf+�GRVx�VZY����nV��Ybf�h6kNKWhwsfw�hxW��Yf�V�4�WIG�WA�a7ahfz�4�JH4�WaGRRa�z6H4��aX�W�nfyaY��H+��aKs�HGR+a�x3a��WA��WNLRYahM�a����4�WAHb�a4I�����ah�WaG�MaGr�a����W7WaGRRaG��w+��wH8�HGfsa�6W�+�J�J��NL��ah8��4�����a�v8��h�6�Ry�YbWI��J�K�bYKby�4�MIYh4wK�fwG�Zw�IV�JRLH�a��WR7�K�Xw��JH�aH�nx7�LfVxJ��N�Wna�fy�JWk��IxAHbGjn�WN�RM�WI��G�GxLxW�JR��v8��h�G�7��4���WInARav�Z��jKbW�VM�J6vAn�����vHWf3H�ar�Jf+�GRVx�V�Yf�H�YabanI�Ys6�Y����4���W�WYL�fa���w����JhWA+Vka�zW�X�WA���HGR+a�x3a����4���sIk��fr�Jf+�YI3��Vr�sIkjY74�6Vx�NJY�VYI�xw�2��xMws6�wZ7�3�W6A�8�+Ivw�V�nzW�n6�IX�7wYI��sbV�JRLH�arA�b6�sbV�JRLH��d��fbjr�j�Vb�RAW�Kxw�2��VWNXVHwn�MxKf2�W68�YJ��YVb�L63�W7J��aZ�J67�Z���JR���xVAJf+�X�a�GILHh�YARI�Ga��JR�NXV�wY�v�XrGx+rZ�sar���YHK�2wYx8�RxrAJfxLfXw�NWH�aH�nx7�Lf��LxhHWR��Jf+�YIfI��LH�ar�Jf+�YIVx�zbHJ�dj�6G�n�2�JNMY�Vk�ffGja3��a��s�J��r8�V��h6��RAW��a��nfNxLa�YsIxAhb�I��NxWRvHW���R�nA��NxWRvHWaZwW��GV3�L�hHYzJ��r8�R�jXx�N�aXAJf+�XR��K�JNhaZ�J6�Y�hxJ��Yf�aAJfn�faH�YxK��rY��cM��aHx���HWa8aJa6�YIV�JRLH�ar�Jf+�YIV�WV8NhIYIR6Ga�rXj�s�H��J�s�Zw�IV�JRLH�ar�Jf+�YIV�JVbNXa�wRfG�K�V��I�NfIn�Rhv�nzXj�VkNZfr��RN�Kz2��MZ��fr�Jf+�YIV�JRLH�ar�Jf+�YIV�JVMYKfrwJ6w+r��4R2��NM�Wr��Xxa�4r�NXV�wY�v�XrG�JRbHKfr��RN�Kz2�La�YRxZ��67�Z�3j�V�YKW�jf6N�ffV�WfbH�aHAnx�LxGjh6h�saHa�W6w+I+��RLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLN�I��Jb+�X��w��WYXV��JW+w+I+��RLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�NWaG�WaGR+H+�VA��Was8Wa��zx��2A�N��+NWa�z6�4��j�cWN���ahfz�4�JH4�WaGRRa�z6H4��aX�WNH8WaGs���a6�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�I8w�f+��b�YRV8Nf�4�R�����V�W7W���M���YHK�2wYx8HW�4HJf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf�L�2wfVMNK�Yws�Zw�IV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ad��a6�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIK�Y�LH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�I8w�f+���X�WVk�sI8�h�CAn��Ys�KNfIn�Rhv�n��YR7MN�fL��RN�Kz2�LaZYRaZ�WfN�XrX�YbM�GI��Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JVCNX7W�nRGa�R��a3H�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ad��a6�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YI�jH�8�LV�AnW��nz�wZ6b�hfKwVMAK�bwWV6NXaYI�67�nbWH�xbwJzKwKW���bV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JVMYKfrwJ6w+r��4R2��NM��r��Xxa�JRbHKfr��RN�Kz2�La�YR�M��67�Z�V�WfbH�aHAnx�LxGjh�h�R�M���sHYI���fLHhI8�R6G�YV�xX���RaHa�W6w+I+��RLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf�L�2wfVMNK�Yws�Zw�IV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIVH+r3H�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�W6Gjnz2�W�W�s��Nf����fVx4�8�fdaYRGj+RXx��ZY+Vn�Wf8�Yz2xW�JYfAW�sb+�LrhxW�J�Z6d�sz+�Ybhx��MNZf�aJa6�YIV�JRLH�ar�Jf+�YIV�JRLH�ad��a6�YIV�JRLH�ar�Jf+�YIVH+r3H�ar�Jf+�YIV�JRLH�ar��ab�XrhYs6WH�aHwnV�Lx��4�MNZ64HJf+�YIV�JRLH�ad��a6�YIV�JRLH�ar�W6Gj6�Ya3H�ar�Jf+�YIV�JRLH�ar��ab�XrhYs6WH��J�s�Zw�IV�JRLH�ar�Jf7�sbV�JRLH�cMHJa6�YIV�JR�H�f�HJf+�YIV�JRzH��6�Z���Wr8IYRa�dbGIYWbHL�h�4��NvbG�G�y�4x6��RGI�aCwY6VwKz4YH�8I�6NwYW�a��M�V�Ifh4wL��a���HGaMa��zx��VA��Was8W��fr�Jf+�YI3��V6NXaYI�67�nzCH��8�Jb��Z�VxnbWHZV��Y��wKIvwK�bwWx8I+�2�Z�VAK�Ma�z8wf6swY�V�Kz�wZ68�XI��Z�VIK�Ma�z8wf6swY�VNJbV�JRLH�arA�fR�LI�Ys6kNfar���sxYI��4�MYfIhwna6xnzJaKV�I�fvwZ�W�nz�YhxbwJfKwKW��fh��+7M��fr�Jf+�YI3��VrNJInj�fG�nI�Hnb�H�I8IYx�K��YsfLaYVfw�����8�H���a�kv���z�JcWaGRR���6�Gxrw�IV�JRLH�a��WR7�K�Xw��JH�aHasW6�Lr2wfV8YXVYj�fy�Wr4�W�J�Hb6wKbW��x���RL�dbfNY�n�K��NfR3H�ar�Jf+�GRVx�VZY����nV��Ybf�sfLN�AW�R6G�nzX��x8�XI��Z�VIK�Ma�z8wf6swY�V�K�bwWV�ahMv�sa6�YIV�JRLH�fd�YaxLf��4rLHh�YARI�GaVHs�MN�W8I�6��XR��KxMYhIhwnx7�nzka4abwnVswZNW�nzba�I�wY�HY�x�IJbV�JRLH�arA�fR�LI�Ys6kNfar��7vYKWX�fNM�JadAnV��Kz��f��H��fNLVWNYIk��f3�Z�f�Z�f�YRk�WA4A�6�Z�f�4xCIYRa�dbGIYWW��bLIY�+IY�fNY�y�4aMIYh�IY�GIL�fNG�8�v8��h��IZxy�4�4��RGIY�G�Ybf�YRk�WIWIY�G�ZVW��WL�WI2Is�y�YIWw�Ib��fWAs��a�Cx��HG6�w�RCwLr�AKzJaKV�ILV�wn��xnW�HY�MwhfswZr�Hnzva��MIf6sw�M�KbWH�xbA�b7�Z�VxnW��na3H�ar�Jf+�GRVx�VZY����nV��Ybf�h6kNKWhwsfw�hxW��Yf�V�4�WIG�WA�a7ahfz�4�JH4�WaGRRaYVz�X��aX�W�nfyaY��H+��aKs�HGR+a�x3a��WA��W�nf3ahM�a����4�WAHb�a4I�����ah�WaG�MaGr�a����W7WaGRRaG��w+��wH8�HGfsa�6W�+�J�J��NL��ah8��4�����a�v8��h�6�Ry�YbWI��J�K�bYKby�4�MIYh4wK�fwG�Zw�IV�JRLH�a��WR7�K�Xw��JH�aH�nx7�LfVxJ��N�Wna�fy�JWk��IxAHbGjn�WN�RM�WI��G�GxLxW�JR��v8��h�G�7��4���WInARav�Z��jKbW�VM�J6vAn�����vHWf3H�ar�Jf+�GRVx�V�Yf�H�YabanI�Ys6�Y����4���W�WYL�fa���w����JhWA+Vka�zW�X�WA���HGR+a�x3a����4���sIk��fr�Jf+�YI3��Vr�sIkjY74�6Vx�NJY�VYI�xw�2��xMws6�wZ7�3�W6A�8�+Ivw�V�nzW�n6�IX�7wYI��sbV�JRLH�arA�b6�sbV�JRLH��d��fbjr�j�Vb�RAW�Kxw�2��VWNXVHwn�MHKz2x4h4�YJ��YVb�L63�W7J��aZ�J67�Z���JR���xVAJf+�X�a�GILHh�YARI�Ga��JR�NXV�wY�v�XrGx+rZ�sar���YHK�2wYx8�RxrAJfxLfXw�NWH�aH�nx7�Lf��LxhHWR��Jf+�YIfI��LH�ar�Jf+�YIVx�zbHJ�dj�6G�n�2�JNMY�Vk�ffGja3��a��s�J��r8�V��h6��RAW��a��nfNxLa�YsIxAhb�I��NxWRvHW���R�nA��NxWRvHWaZwW��GV3�L�hHYzJ��r8�R�jXx�N�aXAJf+�XR��K�JNhaZ�J6�Y�hxJ��Yf�aAJfn�faH�YxK��rY��cM��aHx���HWa8aJa6�YIV�JRLH�ar�Jf+�YIV�WV8NhIYIR6Ga�rXj�s�H��J�s�Zw�IV�JRLH�ar�Jf+�YIV�JVbNXa�wRfG�K�V��I�NfIn�Rhv�nzXj�VkNZfr��RN�Kz2��MZ��fr�Jf+�YIV�JRLH�ar�Jf+�YIV�JVMYKfrwJ6w+r��4R2��NM�Wr��Xxa�4r�NXV�wY�v�XrG�JRbHKfr��RN�Kz2�La�YRxZ��67�Z�3j�V�YKW�jf6N�ffV�WfbH�aHAnx�LxGjfVh�nfHa�W�w+I+��RLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLN�I��Jb+�X��w��WYXV��JW+w+I+��RLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�NWaG�WaGR+H+�VA��Was8Wa��zx�����8��+NWa�z6�4��j�cWN���ahfz�4�JH4�WaGRRaYVz�X��aX�WNH8WaGs���a6�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�I8w�f+��b�YRV8Nf�4j����HbV�W7W�Yf4���YHK�2wYx8HW�4HJf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf�L�2wfVMNK�Yws�Zw�IV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ad��a6�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIK�Y�LH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�I8w�f+���X�WVk�sI8�h�CAn��Ys�KNfIn�Rhv�n��YR7MN�fL��RN�Kz2�LaZYRaZ�WfN�XrX�YbM�GI��Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JVCNX7W�nRGa�R��a3H�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ad��a6�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YI�jH�8�LV�AnW��nz�wZ6b�hfKwVMAK�bwWV6NXaYI�67�nbWH�xbwJzKwKW���bV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JVMYKfrwJ6w+r��4R2��NM��r��Xxa�JRbHKfr��RN�Kz2�La�YR�M��67�Z�V�WfbH�aHAnx�LxGjh�h�R�M���sHYI���fLHhI8�R6G�YV�xX���RaHa�W6w+I+��RLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf�L�2wfVMNK�Yws�Zw�IV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIVH+r3H�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�W6Gjnz2�W�W�s��Nf����fVx4�8�fdaYRGj+RXx��ZY+Vn�Wf8�Yz2xW�JYfAW�sb+�LrhxW�J�Z6d�sz+�Ybhx��MNZf�aJa6�YIV�JRLH�ar�Jf+�YIV�JRLH�ad��a6�YIV�JRLH�ar�Jf+�YIVH+r3H�ar�Jf+�YIV�JRLH�ar��ab�XrhYs6WH�aHwnV�Lx��4�MNZ64HJf+�YIV�JRLH�ad��a6�YIV�JRLH�ar�W6Gj6�Ya3H�ar�Jf+�YIV�JRLH�ar��ab�XrhYs6WH��J�s�Zw�IV�JRLH�ar�Jf7�sbV�JRLH�cMHJa6�YIV�JR�H�f�HJf+�YIV�JRzH��6�Z���Wr8IYRa�dbGIYWbHL�h�4��NvbG�G�y�4aMIYh�I�aCwY6VwKz4YH�8I�6NwYW�a��M�V�Ifh4wL��a���HGaMa��zx��VA��Was8W��fr�Jf+�YI3��V6NXaYI�67�nzCH��8�Jb��Z�VxnbWHZV��Y��wKIvwK�bwWx8I+�2�Z�VAK�Ma�z8wf6swY�V�Kz�wZ68�XI��Z�VIK�Ma�z8wf6swY�VNJbV�JRLH�arA�fR�LI�Ys6kNfar���sxYI��4�MYfIhwna6xnzJaKV�I�fvwZ�W�nz�YhxbwJfKwKW��fh��+7M��fr�Jf+�YI3��VrNJInj�fG�nI�Hnb�H�I8IYx�K��YsfLaYVfw�����8�H���a�kv���z�JcWaGRR���6�Gxrw�IV�JRLH�a��WR7�K�Xw��JH�aHasW6�Lr2wfV8YXVYj�fy�Wr4�W�J�Hb6wKbW��x���RL�dbfNY�n�K��NfR3H�ar�Jf+�GRVx�VZY����nV��Ybf�sfLN�AW�R6G�nzX��x8�XI��Z�VIK�Ma�z8wf6swY�V�K�bwWV�ahMv�sa6�YIV�JRLH�fd�YaxLf��4rLHh�YARI�GaVHs�MN�W8I�6��XR��KxMYhIhwnx7�nzka4abwnVswZNW�nzba�I�wY�HY�x�IJbV�JRLH�arA�fR�LI�Ys6kNfar���nHK�2wYx8H�I8IYx�K��YsfLa��WI��z�Jc�HGR+a�x3a��WA��WNK�bahM�a�����uWwZf7aYs�N��VA��Was8Wa��zx����Zk��+NWaYs�a��z�W�ZaZfaaGV+�+�2wGkWAnsWa�6+�X�WA��WAdb8aY�b�4�Vj��WYL�Ma+x+�4�2I�h�H4��a�z6ahWy�4�C��fkA��f�Z�W�4xC�YW��J�GaLrW��a��Y�bIGI��Jf+�YIV���L���d�nabxLxV�WV�YKW�jf6N�f6Vx�zW�sIYwf6NHYAWaG�WaGR+H+�VA��Was8Wa��zx�����8��+NWa�z6�4��j�cWN���ahfz�4�JH4�WaGRRa�z6H4��aX�WNH8WaGs���AZj�JWYX�+a��W�+�MN��WYhaHa��zx���aX�WNK�Wahf�x+��I��Jasa+aKVWY��3aK8W�nh���u��n6y�Y�z����IG��anfW�HbW��Ih�J����c�wYaL��fb���GIL�fw�f��WA�wdb�anIyNY�����J�J���ZxZw�IV�JRLH�a��WR7�K�Xw��JH�aH�nx7�LfVxJ��N�Wna�fy�JWk��IxAHbGjn�WN�RM�WI��G�GxLxW�JR��v8��h�G�7��4���WInARav�Z��jKbW�VM�J6vAn�����vHWf3H�ar�Jf+�GRVx�V�Yf�H�YabanI�Ys6�Y����4���W�WYL�fa���w����JhWA+Vka�zW�X�WA���HGR+a�x3a����4���sIk��fr�Jf+�YI3��Vr�sIkjY74�6Vx�NJY�VYI�xw�2��xMws6�wZ7�3�W6A�8�+Ivw�V�nzW�n6�IX�7wYI��sbV�JRLH�arA�b6�sbV�JRLH��d��fbjr�j�Vb�RAW�Kxw�2��VWNXVHwn�M�G��xW�b�saL���sxGaV�W7W��aZ�J67�Zf��JR���xVAJf+�XR��K�JNhaZ�J67�Ra��4��Yf�MIJz+�Yb2�f6bN4VY�RI��I��JVkN����n���Yb�YR7MN�kzNf���JbV�JRLH��4HJf+�YIV�JRLH�adAR66�IXw���Y+7z�nx�K�N�h�4NhaLwhz�jnVN�X�hHZk��Y74�L��HsJ�HYz�Nhbnjnb3jYb4HJ���Jb�wnaN�L�2HJ���Jb��Za3xL��HZf8NW��HKVN�X�hH�k��JMv�����JR��RI8YYVGIZaV�WVJY��H�KR�L6��JVx�YbYHRcz�h�YxXf��YbHxf�6�ZrfI��LH�ar�Jf+�YIV�JRLH�ar�W6Gjnz2�W�W�s�a�Wr��KVN�a3H�ar�Jf+�YIV�JRLH�ar�W6b�Gf��J�CN�arwJ6�Y�hxJ��Yf�a�WfN�YI�x�MMYfAMAn�Zw�IV�JRLH�ar�Jf+�YIV�JRLH�ar��RGYYI3�WVM�sIYIRI�HKx��Xr���xRIs6�YW�wh�8�s���J66YYI�x�MMYfAzNhW8�+���W7W��a4��7vYKWX�fNM�Warw�66�Yb�YRV8Nf�4jR��I�bfxsfM�GI��Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�JfwnWV��I������nVb�nz��hRM�GI��Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JR��dbfNLVWNYIk��f3�Z�f�Z�f�YRk�WI�Avb6�Z�f�4xCIYRa�dbGIYWW��bLIY�+IY�fNY�y�4aMIYh�IY�GIL�fNG�8�Y�LH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�Lr���R�HhI8�R6G�YVa��rL�nfr���sxGV�Hn��Y�AWwf6�w+I+��RLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JVCNX7W�nRGa�R��a3H�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIK�Y�LH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�cMHJf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�Lr���R�H����RfN�Lr�jKu�Y+V8jfcv�Y�hxJ��Y+Vn�nx7HY��x�MMYfAzNhWn�a�xJNM�s�VAsbNAJbV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Whv�G�hx�zW�RI�aJa6�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIK�Y�LH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH���IX��aXA�YKW�a�63����j�cWN���a��zx�fb��R2w�V�a�z6���z�4�WaGRR��fr�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar��RGYYI3�WVM�sIYIRI�xKx��+r���xR�J66YYI�x�MMYfAzNhW8�+f��W7W��arw�66�Yb�YRV8Nf�4jf���+f�HnI�H�a�w�f+�LrhxW�J�Z6H�Rr��nbf�sfM�GI��Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JVCNX7W�nRGa�R��a3H�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ad��a6�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YI�xW�4YfAzwnV��L6G��rL�RadI�6NN�If��z4�R�dw�an�Y��xJ6KYfI�wnVG�L�h��I�N��HwnVYAZIN�ZILHh�Hw�RN�GryI��LH�ar�Jf+�YIV�JRLH�ar�Jf+�YIK�Y�LH�ar�Jf+�YIV�JRLH�ad��a6�YIV�JRLH�ar�Jf+�YIVHs68�s�YjYV6�Yb��Z�8NfIYIYx7��I+��RLH�ar�Jf+�YIK�Y�LH�ar�Jf+�YIVxW�4N4VYaJa6�YIV�JRLH�ar�Jf+�YIVHs68�s�YjYV6�KVN�a3H�ar�Jf+�YIV�J7���fr�Jf+�Xf+���LH�ar�Jz�wZR+��RLH�ar�Jb6xn�CAK�8�X�2wY6V�KzvAr6NXaYI�67�nzL�68�XI�wZ�v��uWwZf�aYV�+�2w�NWAnh�a���aX���h�Wa4VWa����sbf�YRk��f3�Z�f�Z�xw�IV�JRLH�a��Wfb��R2w�V�a�f�xX���Z7W�nfra�z6A��VA��Was8Wa��zx��2�YJW�nf3ahbf�4���fsWA�a7a�63�����ZkW�nf�ahbf�4���fsWA�a7��fr�Jf+�YI3��VrNJInj�fG�nI�HnI�H�I8IYx�K��YsfLaYVfw�����8�H���a�kv���z�JcWaGRR�J�6�Gxrw�IV�JRLH�a��WR7�K�Xw��JH�aHa�W��Lr2wfV8YXVYj�fy�4aMI��J�G�6wKbW��x���RL�dbfNY�nwK��NfR3H�ar�Jf+�GRVx�VZY����nV��YbfxsfLN�AW�R6G�nzX��x8�XI��Z�VIK�Ma�z8wf6swY�V�K�bwWV�ahMv�sa6�YIV�JRLH�fd�YaxLf��4rLHh��j�fw�hxW��Yf�V�4���ZkW�nf�ahbf�4���fsWA�a7a��zx�If��fJ�Y�LH�ar�Jf+w�IxHsVkN�WnIsf+�XR��K�JNhadjKx7HLr2wYaL�RI8YnRG�K��YRV�a�ff���M�ZA��db�a�6W���WA��Gx�Ra��fr�Jf+�YI3��VrNJInj�fG�nI�Hn��Y�AWwf6��Lr2wfV8YXVYj�fy�YVvIYRL�db6H�IW��aW�Y���s�G����HbW���J�L���Yc��Z�bIYf3�Z�f�Z�f�YRk�WA4A�6�Z�f�Z�W�YR�wsu��n6yNGIJ�WAWAvb��Z�f�WR��Y���s���LrfN�6�IYfa�vbGNLxy�JRLIYJZw��6IGry�4xW�hx�Ihf�w����K�M�V�I�h4AnW�xnzWAYV�I+�4wLrvAJbV�JRLH�arA�fR�LI�Ys6kNfar��7vYKWX�fNM�WadAnV��Kz��f��H��fNLVWNYIk��f3�Z�f�Z�f�YRk�W�J�G�6�Z�f�4xCIYRa�dbGIYWW��bLIY�+IY�fNY�y�4x6IYh�IY�GIL�fNG�8�v8��h�G�YIW�YVJ��RGIY�G�Ybf�YRk�WIWIY�G�ZVW��WL�WI2Is�y�YIWw�Ib��fWAs��a�Cx��HG6�w�RCwLr�AKbWHGV�ILV�wn��xnW�HY�MwhfswZr�Hnzva��MIf6sw�M�KbWH�xbA�b7�Z�VxnW��na3H�ar�Jf+�GRVx�VZY����nV��Yb�YR7MN�fd�na�HK�f�Jx8�hfNwnb3IKz4YXIb�JbKwnkJAKzkNKV8�Jz�IL�VjKzCa2��Ihbswn���GsW�+VXa�z6aX����s�Y�I�a���w�a6�YIV�JRLH�fd�Yab�XrhYs6WH�InjYabxX�V��h�ws�GNK�W�GaMI�Ix�����n�f�4IJIY���s�6H�IW��aW��I�IY�6jn�xw�IV�JRLH�a��WR7�K�Xw�h4NZfdxK��KzXHRVMNX7J�4���Wk�Hvb�aY�zNX����NWNLf+aYV6a+����cWwJI���fr�Jf+�YI3�Y����fr�Jf+�LIh�J64N�Ia�W6��L���WVMNX7J��Vb�Yb�Ys��NKz�ARkv�+r3�W7J��aZ�J67�Z���JR���xVAJf+�X�a�GILHh�YARI�Ga��JR������nVb�nz��sR4H�aHIf6bYL6�YRV��RxrAJfxLfXw�NWH�aH�nx7�Lf��LxhHWR��Jf+�YIfI��LH�ar�Jf+�YIVx�zbHJ�dj�6G�n�2�JNMY�Vk�ffGja3��a��s�J��r8�V��h6��RAW��a��nfNxLa�YsIxAhb�I��NxWRvHW���R�nA��NxWRvHWaZwW��GV3�L�hHYzJ��r8�R�jXx�N�aXAJf+�XR��K�JNhaZ�J6�Y�hxJ��Yf�aAJfn�faH�YxK��rY��cM��aHx���HWa8aJa6�YIV�JRLH�ar�Jf+�YIV�WV8NhIYIR6Ga�rXj�s�H��J�s�Zw�IV�JRLH�ar�Jf+�YIV�JVbNXa�wRfG�K�V��I�NfIn�Rhv�nzXj�VkNZfr��RN�Kz2��MZ��fr�Jf+�YIV�JRLH�ar�Jf+�YIV�JVMYKfrwJ6w+r��4R2�YMM�Wr��X�a�4r�NXV�wY�v�XrG�JRbHKfr��RN�Kz2�La�YRxZ��67�Z�3j�V�YKW�jf6N�f6V�WfbH�aHAnx�LxGjh�h�nfHasW�w+I+��RLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLN�I��Jb+�Xx�w��WYXV��JW+w+I+��RLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�NWaG�WaGR+H+�VA��Was8Wa��zx��2�YJ��+NWa�z6�4��j�cWN���ahfz�4�JH4�WaGRRa�h�jX��aX�WNH8WaGs���a6�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�I8w�f+��b�YRV8Nf�4jR���HbV�W7J�Yf4���nHK�2wYx8HW�4HJf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf�L�2wfVMNK�Yws�Zw�IV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ad��a6�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIK�Y�LH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�I8w�f+���X�WVk�sI8�h�CAn��Ys�KNfIn�Rhv�n��YR7MN�fL��RN�Kz2�LaZYRaZ�WfN�XrX�YbM�GI��Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JVCNX7W�nRGa�R��a3H�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ad��a6�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YI�jH�8�LV�AnW��nz�wZ6b�hfKwVMAK�bwWV6NXaYI�67�nbWH�xbwJzKwKW���bV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JVMYKfrwJ6w+r��4R2��NM��r��Xxa�JRbHKfr��RN�Kz2�La�YR�M��67�Z�V�WfbH�aHAnx�LxGjh�h�R�M���sHYI���fLHhI8�R6G�YV�xX���RaHa�W6w+I+��RLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf�L�2wfVMNK�Yws�Zw�IV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIVH+r3H�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�W6Gjnz2�W�W�s��Nf����fVx4�8�fdaYRGj+RXx��ZY+Vn�Wf8�Yz2xW�JYfAW�sb+�LrhxW�J�Z6d�sz+�Ybhx��MNZf�aJa6�YIV�JRLH�ar�Jf+�YIV�JRLH�ad��a6�YIV�JRLH�ar�Jf+�YIVH+r3H�ar�Jf+�YIV�JRLH�ar��ab�XrhYs6WH�aHwnV�Lx��4�MNZ64HJf+�YIV�JRLH�ad��a6�YIV�JRLH�ar�W6Gj6�Ya3H�ar�Jf+�YIV�JRLH�ar��ab�XrhYs6WH��J�s�Zw�IV�JRLH�ar�Jf7�sbV�JRLH�cMHJa6�YIV�JR�H�f�HJf+�YIV�JRzH��6�Z���Wr8I�A��vbGHK6f�G��I�I��dbfNY�yN�6L��RX�Y�GaKzy���z�Y�LH�ar�Jf+w�IxHsVkN�WnIsf+�XrfYsV8H��GaKzy���z����IHbG�Yh��4�CxJ�4Nh�GxLRyw�xz�v8��h��aY���G6W���Zw2bGaKzy���z�v8��h�Hw�RNHK8WaLf4a�z6HX�MN��WNLR�a���wJa6�YIV�JRLH�fd�Yab�XrhYs6WH�InjYabxX�+��RLH�ar�Jb6wZ�+��RLH�adI�xGHLa��JWLYK�YI�h4�Lr2�XxLNJIn�KsvxK��YsW�Hh�HaYa��f��h�4NhaXAn�Zw�IV�JRLH�ar�Jf7�Xa�YRVCN�arw��4�Lfhx4f4NXahwna6��bhHnzZYfa�An�Zw�IV�JRLH�ar�Jf+�YIV�JVCY���wsf+�6fYsW���I��Jf+�YIV�JRLH�ar�Jf+�YIV�JRLHh�HaYa�YI��JR�H��zjh6�AJbV�JRLH�ar�Jf+�YIV�JRLH�ar�JfHLf��J�v�ZI��Jf+�YIV�JRLH�ar�Jf+�K6�Ys�8H�ah�nRwf�������fr�Jf+�YIV�JRLH�ar�Jf+�YIV�JR��s�8IW6���fV��aL�Rxawh�Zw�IV�JRLH�ar�Jf+�YIV�JRLH�ar�Wf�HKz��Z�Z��fr�Jf+�YIV�JRLH�ar�Jf�K�X�f�LHXVnA�V+N4�+��RLH�ar�Jf+�YIV�JRLH�IHwR6bxXR2HRs���fr�Jf+�YIV�JRLH�ar�Jf+�YIV�JR��s�8IW6���fV��a��ZI��Jf+�YIV�JRLH�ar�Jf+�YIV�JRLYY��wRfGA4I+��RLH�ar�Jf+�YIK�Y�LH�ar�Jf+�YIV�W7M���x�Wr��Ybhx��MNZhM�WfG�KfN�J��YfI�AJb+�I2�JV4N����sf7�K���LxkYXVYjh6�anbhHnzZYfa�aJa6�YIV�JRLH�ar��ab�XrhYs6WH�InjYabxX�N�XRkNJakwYxGaY6hx�z�NKfrwJ67YGrfI��LH�ar�Jf+�YIV�JRLH�adj�6N�XRXw�xLN4aY�Y�4�Lf3�W7v�sarasb�AJbV�JRLH�ar�Jf+�Xf��JR��s�k�sb�AJbV�JRLH�cMHJa6�YIV�JR�H�f�HJf+�YIV�JRzH��6�Z���Wr8I�A��vbGHK6fN�6��WA��J�fNY�y�JRL�YRX�J�b�xW�Z�LI�A�ws�f�GRy�YRk�WIa�n�G�Y6xw�IV�JRLH�a��WR7HKzhHR��NKfdjKx7HLr2wYaLahM�����IY�WYGfna�6+�XAZj�JWNYR+aG��N4�vH�cWAf�aY�b�4���GAWYGfna�6+�X����k��db�a�6W���M��MWNH8Za�f6I4�WA��Ww�WraGr�HX���fcWaLfba�z6j�a6�YIV�JRLH�f�Iha6�YIV�JVZ�RI�A�RG�YI�wf�WY�aHAn7vanIXxJ�CN�Vnwf6��Zr+��RLH�adaJa6�YIV�JRLH�ar�J67�X�Xj�s�H����na��L�2x4h4Yf�Vw�a�IN�W�WY�Azwsb+�6�jYbM�ZI��Jf+�YIV�JRLH�I8w�f+�6hHs6ZNXaawJ67�X�XjGILHXahAnVb�L�h�JW�HW�M��r��GrfI��LH�ar�Jf+�YIV�JRLH�ar��x7�+rVx+rLHh�Hw�RN�Gx�w���YYM�jKR�La2��I�Yh�YIna7�X�Xj�74N�AW��74N�IK�JVbN�AW���4�LfV�J6J��aYjYab�L�hx�6�Y�aYjhf6NZryI��LH�ar�Jf+�YIVH+r3H�ar�Jf+�YIV�JV8Nh��wn�Zw�IV�JRLH�ar�Jf+�YIV�JR��s�k�sfs�nI�HRV�N��aIRrbxKb�w+f�N�IYA�V+����HR�JNJ��aYa��Xa��4��NXaX���+�K�Xw��ZH�a�IRs4�LfXw��W�s��Ifh4�L6V�YaM�ZI��Jf+�YIV�JRLH�cMHJf+�YIV�JRLH�adI�ab�K�N�XRk�sI�wJb+NZ�NHsJ�HJ���sb��rN�4��HLfZ�J67�XxhxLaZYRaZ�J6�Y�hxJ��Yf�aAs�Zw�IV�JRLH�ar�JfwnWV���CNXaYIYx+��b2�JNMY�Vkwna��vba��MZ��fr�Jf+�YIV�JRLH�ar�Jf7HKzhHR��NKfr��VGxXr��K�8N4R4jR��AJbV�JRLH�ar�Jf+�Xf+��RLH�ar�Jf+�YIXw�NM�R��I�fwxXxZ��YhI�wJf8jfNx4x6�sar��x7�+r3�a3H�ar�Jf7�sb+��RLH�arIhb6wJbV�JRLH�arA�fy���J�WI�w�G�Y8��J6C�YR��vbG�nIy�YRk�J�r����N�IywY�JI�I��Z�GaKzy���z�����s�n�Kxw+V�YR7Wa�6+�X���GI+��RLH�ar�Jb6�hRXw�NM�R��I�f7�XrXwYzWYLfswZNW�nzba�I8�hfNwnbV�Z��HG68An��wY�MjKW4A��bwhf�wYf2a�z6�sx8�hfNwnbV��z6HK��IX��wnJWa�W�af�8AXI�wnf�xn�bwWxb��fswY�VwKzvYK��Ahb2�Z��H�bV�JRLH�arA�b6�sbV�JRLH��d��fbjr�j�Vb�RAW�Kxw�2��VkY�aHAnxbw+rf��IM��fr�Jf+�XI+��RLH�ar�Jf+�YI�Hs�WNZfr��f7�XrXwfV�NhA��W6NHY�Xx��ZY+aYI�fG�Yz3��x�HLf�As�Zw�IV�JRLH�ar�JfwnWV�����s��I�74�Y��Hs�WNZfZ�Jk4�r2w�V��+aawhb��+f��sRM�GI��Jf+�YIV�JRLH�ar�Jf+�YbhHncMH��M�J67�K��YsWJ�nWn�Wf8�G6�xW�4NhaLwf67�LxXHs�WNZfd��RGaYb2��aL�hadwYRGaYbX�WV�H�a�IRs4�LfXw��W�s��Ifh4�L6V�YaM�ZI��Jf+�YIV�JRLH�cMHJf+�YIV�JRLH�adwnV7�KzfI��LH�ar�Jf+�YIV�JRLH�ar��x7�+rVx+rLHh�Hw�RN�Gx�w���YYM�jKR�La2��I�Yh�YIna7�X�Xj�74N�AW��74N�IK�JV�N�WYIJf+HLxx�W��N�WYIYxRYL���W��HYfXAs�Zw�IV�JRLH�ar�Jf7�sbV�JRLH�ar�Jf+�LIXw���Y+7z�nx�K�3��a�Ys��wW�n�GV�jYzX�f��whz+�YbhHncM�Z6d�sz+�Yb2�JNMY�Vkwna��4I+��RLH�ar�Jf+�YI��WfLHJI�IKxGa�r3�WVJY��H�KR�L63�+x�HW�4HJf+�YIV�JRLH�ar�Jf+�YIXw�NM�R��I�f+�Lx�YRVCN�IYjfI�xKxyI��LH�ar�Jf+�YIVH+r3H�ar�Jf+�YIV�JV�Yf�H�YabanI��4RZNhA��W6���fNHs6XNKfVAJf+�XrfHRRM�ZI��Jf+�YIK�Y�3H�ar�Jf+�R3���LH�ar�Jf+w�AWAKfnaf6b�4�2A��Wa�a�aGrGI4���L�W�nfya�I��+���ff+��RLH�ar�Jb6xnW8YY6bwLr�wKJZ�Kz�Yfr�IYuZwn�3�K�vAXI�IKsZAncJjK�bwWx8IGr�wKz3�Kb�ah�b��s�wKz�jLr�N�z��ZV�wncZIKbWw�VC�Jf�wG�VYrbN�x�Ih6�wV��K6LH�a8�����KIVjKWWH��MwYR�wYz2xnWCN�IC�JhMHJf+�YIV�JRzH��dIWfNHK�2�JR�NJIn�KsvxK���JV��s��AnVbN�AWNLR�a���w4��j�NWYha���fr�Jf+�YI3��VrN�WY�nxNHL�VxJ6�NXV�wRfGanAWw�fxa�fz�X���W�WYL�f�s����6f�4�C�WI�A��6�rf�H�8�WI2wKW��nV7�Kz+��RLH�ar�Jb6wZ�+��RLH�adI�xGHLa��JWLYK�YI�h4�Lr2�XxLY�V�wRfNHY��HsVkY�VJ�Rkv�Gr+��RLH�adaJa6�YIV�JRLH�ar�J67�Xxh�Js�H�aH�nRw6��+�kYhI��K�v�nz2xZI�HXadIsf�La��J��H�aXI�67�K���LxkYXV�As�Zw�IV�JRLH�ar�Jf7HKzhHR��NKfd�nabwx3Hs�MN��HIKV��a�Ysf�Hh�HanxnAZIN��bM�R�MwK�4�K6��f��NZfXaJa6�YIV�J7���I��Jf+�YI�jY�z��fr�Jf+�YI3��x8�J8�wnfz�KzWARx�wsbLIX���J���RA4H��n�Kxw+V�YR7W��fr�Jf+�YI3��xbwRfCwY�MjK�ba�68If6��Z��a�z�H�6�AL7ZwL��aZrka6�wY��w�M�n�8H�6�IX�7wYI�3��8YG6MwKR�wKIvwKzkaZ��IY�2�KIVjKWWH��MwYR�wL���nzvYK6C�Jh4wnb�jK6LHG6bI�fNAnW��nW8Nhxb�KsZ�KIV�sbV�JRLH�arA�fR�LI�Ys6kNfar��axK6��h��YfN��Rh4�LrhwYMM��adjKx7HLr2wYaLaYVz���W��uWYGfna�6+�hMMxK6hx�MvN��Ha�AZj�JW�+��aYR��4AZjYR��h��Nf�W�R6GaY6��4�M�nJzIsz�a�R��4�aY��YI�hv�nzXwR��H2b6�Ry�YbWIYfZ�vb6�G���vbvI���w���a�����C��WhwZ�y�YILw�IV�JRLH�a��WR7�K�Xw��JH�aH�WfN�K�VHs�MN�W8I�6�xnb�HJx�I���wKW��nW8Nhxb�KsZAnz3a�zL�6�Ihf��Z��IKzMwJz�Ih6v�YI���fX�hNWHYfr�YR�La2x4�6an�+YX�3x�uWaf��a�6+IX��AYuWNLR�a���w4�WA��WYhaaaGrf�X��jYA�Y�a�a�z6�����4��YfaWa�f+�+�M�ZAWw4VWahM�H+��aXI+��RLH�ar�Jb6�hRXw�NM�R��I�fHL�2�L�8Y�AJ�4����sWYGRKahM�����IY�hHskzYK���n6y��b4�YhMAn�63�zy��V�w�6kNh��wsa6�YIV�JRLH�fd�Yx�f2��x�H��YaRhv�LIhx�z�NKfsAnz�wK�va2�b�Gr�wncZAKz�H�z8I�zC�ZN�HnWLN��3H�ar�Jf+�GR3���3H�ar�Jf7�XR�wG�MYGfdwYxGaY6hx�z�NKfdjKxxLfhx��ZNJaL��axK6��h��YfN��Rh4�LrhwYMM��aZ�J6�K�hxJ��HLfXAsa6�YIV�J7Z��fr�Jf+�YIV�JRLHhIH�nxxYI��JR�YhIn�Rf��+f�jY��HLfXah6��Gx��W��H�aXI�6�K�hxJ�Z��fr�Jf+�YIV�JRLHh�Hanx+��fV�W7MN�I8jhz�aY��xJ6KN4VkwnVI���j�VkNfadjKxxLfh�JRJNKfrwhz6�LI��J�vY�IhwRcvxK6hx�MvN��Ha�z6�Kb�YRVkHWx4HJf+�YIV�JRLH�adAR66�Y���XhzNK�xwJ67�Xxh��8���a8aJa6�YIV�JRLH�ar�Jf+�YIVx�zbHJ���na��L�XjYI��s�k�RI�xKx��JR��f��jY74HY�3�Js��R�MIJbNAJbV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf7�K�Xw�h4H�AWwnx��h�fxJ�8NJ�HAn7van���4RZNhA��W6���fyj�R6�sar��x7�+r3��8Z��fr�Jf+�YIV�JRLH�ar�Jf7�sbV�JRLH�ar�Jf+�Xf+��RLH�ar�Jf+�YI��Wf�N4aHjYa�G63�W7M���HNhWn�aV��x��sInjYxw��jK��HWar��r��I3Ya3H�ar�Jf+�YIV�JRLH�ar��ab�XrhYs6WH��HjYxG��I+��RLH�ar�Jf+�YIK�Y�LH�ar�Jf+�YIVHs68�s�YjYV6�KW��Z��Yfx4HJf+�YIVH+r3��fr�Jf+�G�3�Y�3H�ar�Jf+�GRV�WA�IG�GHGxW�JV���RJwZ�GaKzy���z�Y�LH�ar�Jf+w�IxHsVkN�WnIsf+�LI��J�vY�Ihwsf7�XrXwYzWYLfsw�M�n�8H�68�hfNwnbV�sbV�JRLH�arA�fR�Lf�YR7zN�JJ�Wfb�G�2xW�kNKfswYf�xnz6Ad��IX��wnJWa�rXwf�8a4I������Zc��Ra8aY�zNX����NWNLf+aYV6a+����cWwJI���fr�Jf+�YI3��Vr�sIkjY74�6Vx�NJY�VYI�xw�2��xMws6�wZ7�3�W6A�8�+Ivw�V�nzW�n6�IX�7wYI��sbV�JRLH�arA�b6�sbV�JRLH��d��fbjr�j�Vb�RAW�Kxw�2��V��sA�IWRN�LI3�WVZY�I�AffG�nz3�Y�LH�ar���Zw�IV�JRLH�ar�Jf+�XrfHRRL�Rar��x�rXj���Y�IH��c4�K���Z�4HJaX�WfG�nI�w�f�Y�V�In�4�L�X�JR��nfHIWfG�LV���x8HWx4HJf+�YIV�JRLH�adAR66�Y���4RZ�s��wJ67�Xxh��bM�GI��Jf+�YIV�JRLH�ar�Jf+�Lf�YR7zN�JJ��x7HXR��a3H�ar�Jf+�YIV�J7���fr�Jf+�YIV�JRL�sIkjY74N�I2w�N4H��YaRhv�LIhx�z�NKfkAnVN�La2�fV8HJaVaJf+HGaV�W7M���xAsb�AJbV�JRLH�cMHJa6�YIV�JR�H�f�HJf+�YIV�JRzH��6I�A���RJj�V�Yf���KRG�Kz+��RLH�ar�Jb6�hRXxJ��Y�AM�J67�K���LxkYXVY�K�v�LfhwYzCYfadjKx7HLr2wYaLaYVz���W��uWYGfna�6+�hM�NY�����Z�s��aZxWNYaC��I3w����n6y�vb6�WIb�Z���nW6�n62�XrW�sIYI�hv�L�h�4�JNf��IYaj+R��KzW�nWn�fhv��R2wfV���AW�hzb�G��xW�4�nbn�fhv��R2wfVd�R�HwW6Ga�r��J�k�sA�j��v�LfhwYzCYfaKw����K�M�V�AJf�wZx2�Kz�A�I�IX�7wKW��nW�a�RL��VYjYxbwn6��H8��h�G�rW��b8I��J�J��aRW�J�W�WIf�HbfNY�y���z�W���Hb�YG7���WLIYRfwh�6IG�W��bk�W�J�G�G����NYav�WA�ws�6ILrfN�f�IY��IG�6YKWWN�z���Ra�Y�b�GVW�4fkIYR�A2b�jY�fNYa6�YR�IL�f�Z�W�4�C�WI�A2b�aZrf�4����RJAs�G�G��L�2�4�kNKWHjY7vwnb�wh�WN4aHwnVN�Lr�j��������R6G�����h�8N���ARhv��bV�JRLH�arA�fR�LI�Ys6kNfar�WfG�Xr��4fWH����nabw��j�xbwX�swY8J��b�YL68�Jh4wL�Zx��HG68AJz7wYW33�b�N�x8whbk�KVb�Lf2�Kz�NfInIYRGYKzX�WxM�+x�wVMAKbWYY��wY�xHJf+�YIV�JRzH��dj�6N�XRXw�xLYYJ�IKV�K�2��xb��6swnfM3���a�x8w��W�na��KMZaZfaaYR�j+����M��db�a�6W��6bxLaX�f�3H�ar�Jf+�GRVx�7MN���IK�4�YIHYn�CYf�d�nRG�G�V��W�wY�6IL7�N�bb�WI7IG�G�nIW�4xW�W��w����LVZw�IV�JRLH�a�A�zZw�IV�JRLNJ�Y�YVwn6VxWkzNKW��nRG�G�VHs�MY����R�v�LfhwYzCYfaL��axK6��h��YfN�jf6NHXV��J�8�RaXwhz+�Yb��J�MN�A�I�r�N��3�Y�LH�ar���Zw�IV�JRLH�ar�Jf+�LI��J�vY�IhwRc4�KzXwf6MY�V��Wr��YbXxJ�CN�Vnwf6Y�G6�YskvN�I�wRr��n��jX��HL6�whf+�G�V��aWHh�d�RhvIn���f�KN4VYjYxbwn6��a3H�ar�Jf+�YIV�JR�Y�I��nRG�G�Vx+rLHhIn�Kxw�2�X��HLfX3J6�N4��j�RJY�arwhz6�K���WVMNX7JaJa6�YIV�JRLH�ar�J67�Xxh�Js�H�aH�nRw6��+�kYhI��K�v�nz2xZI�HLfd�nV��L6hxJ���s��wna�YLr��f�LHLhJ��axK6��h��YfN�jf6NHXV��J�8�nfH�Rh4�Lr2�XxM�ZI��Jf+�YIV�JRLH�I8w�f+�n62�W�W�saL��x7�+r3�+x�HW�4HJf+�YIV�JRLH�ar�Jf+�YI��Wf�N4aHjYa�G63�W7M���HNhWY�aV��xnN���IKa6NZrVx+���RxrAn�Zw�IV�JRLH�ar�Jf+�YIV�JRLH�ar��x�f2��aLNKWY�JfR�Xx��f�Z�sI8IKV6�r2YsV4NXVHwsb+H�IV�Jf4H�aH�n�7�Gr3�a3H�ar�Jf+�YIV�JRLH�ar���xw�IV�JRLH�ar�Jf7�sbV�JRLH�ar�Jf+�Lr��Y���s��I�74�Y��HR7J�s�4IW��I�I����MY����nRGaY�VHs�8N���ARhv���VxYzW�sIYIYx+NZrVx+���RxrAn�Zw�IV�JRLH�ar�Jf+�YIV�JV�Yf�H�YabanIhHskzYfx4HJf+�YIV�JRLH�ad��a6�YIV�JRLH�ar��ab�XrhYs6WH�I��nV7�KzyI��LH�ar���xwJbV�JRLH���A�bLw�IV�JRLH�a��4��x��WA�V6H���wna�YLr��f�3H�ar�Jf+�GRVx�VZY����nV��YbXxJ�CN�Vnwf6Y�G6�YskvN�I�wsf7�XrXwYzWYLfsw�M�n�8H�68�hfNwnbV�NWAdbxa�IWx���I�7WAf�a�fz�sa6�YIV�JRLH�fd�YaxLf��4rLHhIn�Kxw�2��V��s��AnVbN�AWAdbxaGry�X���K�WYha�a��fI4AZj�JWNha�aGr6IX���KAWYLf���AW��ab�Gr�x4RkNKW8w�6N�X��YY�aaYs�N���w�kWaGRR��fr�Jf+�YI3��VrN�WY�nxNHL�VxJ6�NXV�wRfGanAWw�fxa�fz�X���W�WYL�f�s����6f�4�C�WI�A��6�rf�H�8�WI2wKW��nV7�Kz+��RLH�ar�Jb6�hRhx���NXahjhfR�Xx��f�Z�sI8IKV6xr8HK��AXN�wYfMIKzkaZV8Ihf�w���Kb�ah�b��s�HJf+�YIV�JRzH�h�HJf+�YIVHs7zYYW�ARf��KWh�4�C�sI8IKV6�L6hx4fZ��VYjYxbwn6���I�NJIn�KsvxK���Xf�Yf���KRG�Kz���a��sar�WfG�Xr��4fW�RaXwhbxw�IV�JRL�GI��Jf+�YIV�JRLH�aHIWfG�LV���x8Y+a�wna�YLr��f�L�Rar��axK6��h��YfN�jf6NHXV��J�8�R�Mwh6��n��jK��H��zI�f+NZ��HsVkY�VJ�Rkv�K�X�f���nW8�f6�AJbV�JRLH�ar�Jf+�Yb��J�MN�A�I�fs�nI�xJ�C�sI8IKVC�+f�jY��HLfXah6��Gx��JR��nfH�Rh4�Lr2�X�Z��fr�Jf+�YIV�JRLHh�Hanx+��fV�W7MN�I8jhz�aY��xJ6KN4VkwnVI���j�VkNfadjKx�GIX�f���nW8�f6��Y����VZY�I�AffG�nzN�J�8N���ARhv�G��xJ�C�sI8IKV6�4I+��RLH�ar�Jf+�YI��WfLHJI�IKxGa�r3�W7M���xARrCxGrfI��LH�ar�Jf+�YIV�JRLH�adAR66�6hHs6ZNXaawJ67�XxhxLa�YRaZ�JkM�LfXw�f�HLf��Wr��+fa��MZ��fr�Jf+�YIV�JRLH�ar�Jf+�YIV�J7MN���IKx��L��YnaL�f�k�f6N�Xr��4fWHJI8Inaj��xW��HY64�Jf6I�I�HR7J�sa�As�Zw�IV�JRLH�ar�Jf+�YIV�J7���fr�Jf+�YIV�JRL�fR��Jf+�YIV�JRLH�I8w�b7�XrXwhV�NZfL��x7�+rGjhVh�sarwf�4�L�XHsVMNKWX���v�LfhwYzCYfx��WaGa�r��4�MHLf��Wr��+fa��MZ��fr�Jf+�YIV�JRLH�ar�Jf7HKzhHR��NKfd�na��KzyI��LH�ar�Jf+�YIVH+r3H�ar�Jf+�YIV�JV�Yf�H�YabanI�w��4N4V�aJa6�YIV�J7���I��Jf+�YI�jY�z��fr�Jf+�YI3��x8Ash4wnf�NK�vAXI8AsfKAncJjK�bwWxbwn�K�Z�ZNKz6�sx�wszNw���x�bV�JRLH�arA�fR�LI�Ys6kNfar��ab�Lx2�WV8Y+V�AnV�YIX�WV�N�AWwhfy�G��I�I��dbfNY�yN�Ik�W�ZI�6�Z7��vbk�Y�LH�ar�Jf+w�IxHsVkN�WnIsf+�La2�h�kNhN���RNHYIX�WV�N�AWwhfy���J�YfR����anfW�YRk���2AL�G�Yzf�4�C�WI��Z���Lay�Wrv�W�ZAn�fN�If���M�H8��h�ba�Wy�G�M�WI��K�GHGxW�Jf4�WA��vbGHK6f�YVvI�A�wn���n6y��WLIYRfwh�GNZR7�r2w�V��+a�AncJjKb�HJx8�Jz�wnf�wKbWH�a��4A4wYW33���as��w��CwKW��nW��n��w�NZw��Y��HY6b�sh�wYI���WbHv���+I�wa�Hn�MwJ��I�fs�Z�3AKW8w���I�I2wr�wL��HY��Ihf�wnb3NKz6HK��Ih6vwYfzYr8HKb3H�ar�Jf+�GRVx�V�Yf�H�YabanIX�WV�N�AWwhfyN�f��WI3w2b63�zy��V�I�IJw��G�ZRy��az����In�6xYbfw��C�����s����c��4IJIYh4A2bG���y�4�C�WI�A��6�rfN�bb�WI7IG�G�nIW�4xW�W��w����LVZw�IV�JRLH�a��WR7�K�Xw�h4NZfdxK��KzXHRVMNX7J�4���Wk�Hvb�aY�zNX����NWNLf+aYV6a+����cWwJI���fr�Jf+�YI3�Y����fr�Jf+�LIh�J64N�Ia�W6��L���WVMNX7J��a7�La2x�6MNhI�wJ67HKz2�4hMYfN�wYRGjnz��JR�NhA��ffGjn��x�z��RaXwhbxw�IV�JRL�GI��Jf+�YIV�JRLH�aH�KVG�YI��JR�Y�IH��f+�G6V��aWHh�Hw�RN�Gx�w+f�Yf��ARhv�G��j�VZ�RI�AJf+NZ��Hs68NfA��R6Y�YW��Z�8�nfX�J6�anb2x4fCY�I��f6wfyI��LH�ar�Jf+�YIVxWNJYfIawJ6�Lx��ZILHhA��Yx7�XRh�ZILHh��wnx7�Lf2w+hvY��VAs�Zw�IV�JRLH�ar�JfwnWV��I�N�WY�nxNHL�N�W6kN�fR��r��GrfI��LH�ar�Jf+�YIV�JRLH�adAR66�Y���4RZ�s��wJ6��RhHs7z�sa�An�Zw�IV�JRLH�ar�Jf+�YIV�JRLH�ar��x�f2��aLNKWY�JfR�Xx��f�Z�sI8IKV6����Hv84aGRy���M��MWAnf�a�6+w���ahk�HJ�nY�IH����HJJWNXV�a�fb�X���Ws�HJIa���k���WA��Wa�a�aY�6�4�M�GNWYhaba�fG�4�Mj�kWw�W�ahb��6N�nz��WIHIK��aZry�YRk��Rh�vbbYKby�4��jYaM�ZI��Jf+�YIV�JRLH�ar�Jf+�Xf+��RLH�ar�Jf+�YIV�JRLH�IYA��v�XI+��RLH�ar�Jf+�YIV�JRLH�ar�Jf+�Xr�Hs6��fdI�6NN�IHYn�CYf�d�nRG�G�3x�zJNJI�If6�Y�V�LaLHYfZ�J6��RhHs7z�sa�As�Zw�IV�JRLH�ar�Jf+�YIV�J7���fr�Jf+�YIV�JRL�fR�Ihz��YIV�JRLH�ar��RGYY�X�WV�NJA�jhb+�L�hYRVZ�R�HNhWn�aV��xbN�I�wsf7�XR2xZ�8YhaZ�JW+�L6��KzZNJIY�Jz6NZrVx+xZHW�4HJf+�YIV�JRLH�adAR66�Y��xZ��Y�VnAWcv�LrX�X��HLfXAn�Zw�IV�JRLH�ar�Jf+�YIV�JR�NhA��ffGjn��x�z�H��M�Wcz�����h6KY64HJf+�YIV�JRLH�ad��a6�YIV�JRLH�ar�J6j���h�4Y+VHAna6��fVx�zWY+VnjYabxX�3Hs�zYY���na6��b2x4fCY�I��f6wf��JRJ��a�AWI�NZ��jGI�Ys�Zwf����I�j�R�NhA��ffGjn��x�z�H�x��J6j���h�4Y+VHAna6a����h6n��RH�R�8wn���R�x�����f�R��ayI��LH�ar�Jf+�YIV�WV4NXV��nVn�YW��Z�8H��M�J6j���h�4Y+VHAna6�G�VxJ6kN4VYI�fG�Yz3�WV�YfAzIKx�K��wYz4Yfa�aJa6�YIV�JRLH�ar��ab�XrhYs6WH�aHA�7v�K�2xXfbN�I�ws�ZwZ��j�RLH�ar�Jf+�YIK�Y���fr�Jf+�YIV�JRL�sIkjY74N�I2w�N4H��YaRhv�LIhx�z�NKfkAnVN�La2�fV8HJaVaJf+HGaV�WV��R�HI�xN�Gr3�a3H�ar�Jf7�sb+��RLH�arIhb6wJbV�JRLH�arA�fy��bC��IVI�f�Gxf�����YW7�h�fNY�yN�Ik�W�ZI�GHGay�G��I�I��I��Jf+�YIV���L���d�nabxLxV�WV4NXV��nVn�YW��Z�8H����nabw��j�x�wszNw���HnbWHGV�wY��wYz��KbWa�V�I+N�w����bV�JRLH�arA�fR�LI�Ys6kNfar��ab�Lx2�WV8Y+VHAna6�L6hHs6MNKWX�4�3a28WN�a7afff���WA��WaG�WaY7v�ha6�YIV�JRLH�fd�Yab�XrhYs6WH����nabw��j�xb��6swnfM3���a�x8w��ZwV��KzLAY68whbCwKz�Yn�kHh�M�+x�wKW��nW8w���I�I2wZ��3�z�wWx�Ihf�wr�Hn�JHW�b�Gr�wncZAKz�H�z8I�zC�ZN�HnWLN��3H�ar�Jf+�GRVx�7MN���IK�4�YIHYn�CYf�d�nRG�G�V��W�wY�6IL7�N�bb�WI7IG�G�nIW�4xW�W��w����LVZw�IV�JRLH�a�A�zZw�IV�JRLNJ�Y�YVwn6VxWkzNKW��nRG�G�VHs7zN4Vkx�RGjnz3�WV4NXV��nVn�YW��Z�8�sar��ab�Lx2�WV8Y+VHAna6�JbV�JRLH��4HJf+�YIV�JRLH�ar�Whv�YbVx+rLHXVn�Wf6�GxXj�R��nfH�nRw6��+�KYhIY�KRG�Kz��YaLNJ�YjKR+�Y����V4NXV��nVn�YW��Z�8�nfX�J6�anbXw��JNXaHwRcv�LrX�La3H�ar�Jf+�YIV�JV8��IY�hb+�K62�WR4H�aHIKxN�LIhYRR4H�aHj�6N�XRXw��K�nWnj�b�AJbV�JRLH�ar�Jf+�Lr���R�Hh��wnx7�Lf2w+hvY��V�Rr��I3Ya3H�ar�Jf+�YIV�JRLH�ar��RGYYI3xW�JNJ�Ha�b+�L�hYRVZ�R�xAsbNAJbV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf7�K�Xw�h4H�AWwnx��h�fxJ�8NJ�HAn7van����f�Idb��KIyNY�M�YRXAh�GNZayN�Ik�W�ZI��YG7��WRMI�IJw��GNZRy�4�C��RVw�6�Y�f�G��I�I��dbbHn6y�YRk���2AL�G�YzfN�fv�WIxA�GInWy��az�W�ZAn�G�nfWN�fv�WIxA���rfNYa6�YfWI2bbYVWNYxL��W��JaXAs�Zw�IV�JRLH�ar�Jf+�YIV�J7���fr�Jf+�YIV�JRLH�ar�Jf�LaX�fNZ��fr�Jf+�YIV�JRLH�ar�Jf+�YIV�J7MN���IKx��L��YnaL�f�k�f6N�Xr��4fWHJI8Inaj��xW��HY64�Jf6I�I�x4hz�s�d�Yx+�ZryI��LH�ar�Jf+�YIV�JRLH�ad��a6�YIV�JRLH�ar���xw�IV�JRLH�ar�JfwnW3Hs�MN��dIKa���b2�WNMNJ�Y�RI��Kx��JR�YKW8AW6��LIhYs��YfIxAJfs�YIX�LxMNJ�dwR6+an�3�Js���a8aJa6�YIV�JRLH�ar�Jf+�YIV�WV�YfAzIKx�K��x�z�H��M���4�KfX�WV�HJaHj�6G�G�hxW�KYhI8j�z+�Gxa��8��RaXIh6��H�V�WV�YfAzIKx�K��x�z�H�x��J67HKz2�4hMYfN���RNHG��j����ZI��Jf+�YIV�JRLH�ar�Jf+�YbXw��JNXaHwRcvYLr2xW�L�Rar��ab�Lx2�WV8Y+VHAna6�G�VxJ6kN4VYI�fG�Yz3�WV4NXV��nVn�YW��Z�8HWx4HJf+�YIV�JRLH�ar�Jf+�YIXw�NM�R��I�f+�Lf��4R��sIY�f6bwa��a3H�ar�Jf+�YIV�J7���fr�Jf+�YIV�JRL�sIkjY74N�I2w�N4H��YaRhv�LIhx�z�NKfkAnVN�La2�fV8HJaVaJf+HGaV�WV��R�HI�xN�Gr3�a3H�ar�Jf7�sb+��RLH�arIhb6wJbV�JRLH�arA�fy�Jf���W�As�6IG�W��bk��W7�h�fNY�yN�Ik�W�ZInI��Jf+�YIV���L���d�nabxLxV�WV�YfAzIKx�K��wYz4YfadjKx7HLr2wYaLah8��4���JcWaGRRaGr�H+��I�7��n��aY7�x�a6�YIV�JRLH�fd�Yab�XrhYs6WH�I�IK7vjnz��4xLaY�6����AYN��db�a�6W�Yx7HXR��H8��h�G�Zaf��rM�YR3wHbGH�W�4�LI�AJI���3��fN�VvI��LH�ar�Jf+w�IxHRV�N�J���a��h�fxJ�8NJ�HAn7vanA�Yfa�ah8�IX��AY7WYY��aYV��4�2���W�dbkaY�Iha6�YIV�JRLH�f�Iha6�YIV�JVZ�RI�A�RG�YI�wf�WY�aHAn7vanIXw��JNXa�wRVbwa���I�N�WYIn74�KzN�f6MNhI�Asa6�YIV�J7Z��fr�Jf+�YIV�JRLHh�Hw�RN�Gx�w���YYM�jKR�La2��I�H���Isf+NZ��Hs68NfA��R6Y�YW��Z�8HWx4HJf+�YIV�JRLH�adj�6N�XRXw�xL�s����6�AJbV�JRLH�cMHJa6�YIV�JR�H�f�HJf+�YIV�JRzH��6�Z���Wr8IYfWIL�G��c��4f��WI��K�Gjnk��4�8�YR��J��N�ffN��M�W�ZI��3��fN�VvI��LH�ar�Jf+w�IxHs68�s�YjYV6�L6hHs6MNKWX�4���W�WYL�f�J�z���MN�cWA�IC��fr�Jf+�YI3��Vr�sIkjY74�6Vx�NJY�VYI�xw�2��xMws6�wZ7�3�W6A�8�+Ivw�V�nzW�n6�IX�7wYI��sbV�JRLH�arA�b6�sbV�JRLH��d��fbjr�j�Vb�RAW�Kxw�2��7zN��hAR6�nzhHsW�HWR��Jf+�YIfI��LH�ar�Jf+�YIV�WVbN�I�wnVbxLx��Js�H�ahwY74HK���fNMY+aYARcv�L���W�JYfAW�sz��x2���Z��fr�Jf+�YIV�JRLHh�d�nx��I��JR��+a��WhvxLf��4���nfHwYRGjnz2w��JYfx4HJf+�YIV�JRLH�ar���4�K�XwfV�N�Azwsfs�nI��4�M�nWnAJb�Gr��J6��sI8IR6��+rXwf�8HWa�jsWs�GI3�a3H�ar�Jf+�YIV�JV�NhIYwna+�Z�3�a3H�ar�Jf+�YIV�JV�NLfdaJa6�YIV�JRLH�ar�Jf+�YIV�W7M���x�Wr��Ybhx��MNZhM�WfG�KfN�J��YfI�AJb+�+R��JNz�sA�IRfN�L�X��V��RAzIJf+NZ��HsVk�sILAs�Zw�IV�JRLH�ar�Jf+�YIV�JVMYKfL�R6G�GIhHnb�Hh�Hanx+��I���fLN4aHjYa�G63�W7M���HNhWn�aV��xY�Wadw�RG�Lf��K�kN����W67�LxXxW��H��HIh�6�Y����VZY��HwJb��Y���+rZHW�4HJf+�YIV�JRLH�ar�Jf+�YIV�JRLH�I8w�f+�6hHs6ZNXaaw�RG�GI2x4f�YfaL�����Yf��JR��s�k�sb�I�I��X�zNhIZ��ab�G�h�JVWNXVHwsf7HKzhHR��NKWY�JfHX�Vxf�M�hIYjKxRxXRhx4fJY��HAn7va�aXwYz�YXV�whb��Y���+rLYKWnA��v�GrfI��LH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�aH�n�7�YI��JVbY�I�jf6�AJbV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf7�sbV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf�LaX�f�L�GI��Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf7�K�Xw�h4H�AWwnx��h�fxJ�8NJ�HAn7van���W�MY��Y�n7v�Y�hx4f�H�IH�YVN�YI�Ys6�NXaVahf+N�I���VMNf�dA�7v�Kz3�JhZH�aVAJf+�XrfHRRMHWx4HJf+�YIV�JRLH�ar�Jf+�YIV�JRLH�cMHJf+�YIV�JRLH�ar�Jf+�YIK�Y�LH�ar�Jf+�YIV�JRLH�adAR66�Y��HR7J�sar��r��nI�w��4N4V�Asf7AJbV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�NWaXV�aY7�xhWf�Y��I�I�K���KIyNY�M�Y�LH�ar�Jf+�YIV�JRLH�ar�Jf+�YIhYs�4YfIYIJbsxGIaxsRZ��xrAs�Zw�IV�JRLH�ar�Jf+�YIV�J7���fr�Jf+�YIV�JRLH�ar�Jf+�K6hYs6�YfAW�R�wx��Js�H�I8IYx7YK�2���JN�I�jY74�Lr2�W���s����6���I3��R���xrIJb�AJbV�JRLH�ar�Jf+�Xf+��RLH�ar�Jf+�YIh�K�MNhI�wJ67�Xxh�Js��R�M�W6bxLaX�f�LHKf��Jb+�K6hYs6�YfAW�R�wx��4r�N4aH�na��f���4R8�sx�IJWs�GI3��8Z��fr�Jf+�YIV�JRLN4V�wR6N�Y�a�Y8Z��fr�Jf+�YIV�JRL�s��a�f7AJbV�JRLH�ar�Jf+�YIV�JRLHh�Hw�RN�Gx�wh7zNhI�x�RGjnz3�WVZY��HwJb�AJbV�JRLH�ar�Jf+�Xf+��RLH�ar�Jf+�YI��hNMY�VL�JbR�Xx��f�Z�sI8IKV6�Yb�Yn�CYf�d�nRG�G�3Ya3H�ar�Jf+�YIV�JRLH�ar�J6�G6�j�s�H�aHwn��KzXHRVMNX7JIRrb�nzhx�R8N4a��Rkv�Y�3�a3H�ar�Jf+�YIV�JRLH�ar��RGYYI3Hs�MN��dIKa���b2Ys���sarwf6�YzXj�VWNXax�W6N�rX�WR�HW�JIJbNAJbV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf7�K�Xw�h4H�AWwnx��h�fxJ�8NJ�HAn7van����fyIdbG�nzW�G��I�I��dbG�Y8��J6C��I��2bGaYzfN��M�W�ZI��3��fN�Vv�WI�A��6�rf�4�C�W��wJ�G�7���x��YWX�J�6wYIf�v�vIYR�IY�6IG�W��bk�W�JAf��jf6�K�Xw�x�w�NZw��Yn�bwWx�AXI�wn�MwKW�Y�rMw�6sIL�VjLr�H�x�An�njY7v���WA+Vsaf6b��AZj�JWYHb+ahf+x+�MN�cWaL�La4I�N�6��4I+��RLH�ar�Jf+�YIV�JRLH�cMHJf+�YIV�JRLH�ad��a6��V�JRLH�ar�Jf+�Ybhx��MNZhM��ab�Lx2�W68�KW8AW6���bXxJNMN�a�aJa6�YIV�JRLH�ar�J6�L�2wfV8NK�x�Wr��KW��Z�8Y+Vhwnxn�Y62�X�MYfAW�na���b�wYz4YfAW�nVG�GryI��LH�ar�Jf+�YIVHR�WNhI8IYR���b�wYz4YfAW�nVG�GryI��LH�ar�Jf+�YIVHs68�s�YjYV6�Yb��XfW�sIYIYxsAJbV�JRLH�cMHJa6�YIV�JR�H�f�HJf+�YIV�JRzH����Z�fN��vIYRG�db�NZVy���J�WI�w�6IG�W��bk�WA��vbGHK6f�Z�C�WAWwn��HKIyNYa6�Yf3�Z�f�Z�xw�IV�JRLH�a��WR7�K�Xw��JH�aH�R6N�+rVHs�MN�W8I�6�xnW8w��bwhb�wV��K�vH�V�I�zVHJf+�YIV�JRzH��dIWfNHK�2�JR�NhI8Af6��Kf2�Xf4YfInI�fyN�fv�WIxA��w��f�G66IYRKAn�6IK�W�4�C��JZw��6IGry�4xWw�6kNh��w+AZj�JWaJ8�a�ffx4�M��M�Hvb6��fr�Jf+�YI3��VrN�WY�nxNHL�VxJ��N�Wna�fy�H�8�WI2wL�G�Y�f�WRz��f3�Z�f�Z�f�Z�W�Yf�w��fNY�yN��4���Z�sR��Jf+�YIV���L���Hw�ab��aXj�Vn��I�wna7�Lr2�XxLaf6�YX�3�ZNWwZR2a�ffaX�2j��WNKhJa�M��+��xZ�+��RLH�ar�Jb6wZ�+��RLH�adI�xGHLa��JWLYK�YI�h4�Lr2�XxLYXVY�Rxb�Yb�Ys�+���Hwn�7�Y��HRV8���xAJf+�La��Zx8�RI��nV7�Kz3�Y�LH�ar���Zw�IV�JRLH�ar�JfwnWV���bY�I�jf6�w+I+��RLH�ar�Jf+�YIV�JRLH���IX�����Ww�W�ahb���z�K8�HJIaa�zW�X���J7ZaZfaa�h�A��M�GNW�nh�a�zzx4�MN��W�+N�a�zW�X���J7Wwvbxa���aha6�YIV�JRLH�ar�Jf+�YIVHs68�s�YjYV6�KV2w�N4H��8AnV7�LI�HsVKY�IH��cv�La��4R8NK�xwJ67�KzfHRR4Hh�Hw�RN�GrN�a3H�ar�Jf+�YIV�J7���fr�Jf+�YIV�JRLN�WY�nxNHL�V�W7MN�I8jhz�aY���fNM�nJ��W6N�haf�G�MN�VY�Kx7�Lf3���MYf�k�s6�I�I�HRV8���xAJf+�La��Zx8HWx4HJf+�YIVH+r3��fr�Jf+�G�3�Y�3H�ar�Jf+�GRV��RLIY���LVW��bLIY�+IY�fNY�y�JIk��IWIY���nk��H�4��fyIdbG�nzW�G��I�I��dbG�Y8��J6C��I��2bGaYzfN�6L��RX�Y�6H�IW��aW�Y�LH�ar�Jf+w�IxHsVkN�WnIsf+�K62�X�MYfAW�RV�L6�j�V��s��AnVbN�AWYYRnaYs�a����W���dbZ��fr�Jf+�YI3��VrNJInj�fG�nI�xZ�MN�V��Wfb�G�2xW�kNKfswYW33�z�H�VbA�b7wL�JAKW�af��AX��IL�VjLrWaY6�ALR��Z��AnW��Z��YK���n6y�Gf�I�I7����Lrf�G�����LH�ar�Jf+w�IxHs68�s�YjYV6�K�Xwh6k��aswZNW�nzba�I8�hfNwnb3IK�6wJz��ZV�w7ZwK�4N���wY��wYz2xn�WaRR3H�ar�Jf+�GRVx�7MN���IK�4�YIHYn�CYf�d�nRG�G�V��W�wY�6IL7�N�bb�WI7IG�G�nIW�4xW�W��w����LVZw�IV�JRLH�a�A�zZw�IV�JRLNJ�Y�YVwn6VxWkzNKW��nRG�G�Vx�x8�s�WIf6�L6xwKzsNX7W�R6Ga�rHxW��YGfL�Whv�G�hxW�W�s�Hwn�v�GaV�WV4N�IJwRrGYK�2Hs�8HWR��Jf+�YIfI��LH�ar�Jf+�YIVHs68�s�YjYV6�Ybhx��MNZhM�Wcv�nzhx���YhIYjfR�wsW��Zx8���H�na6�����XfW�sIYIYx+�Yb�Ys�CHLfZ�J6�L�2wfV8NK�Hx�6N�K6��JR�NhI8Af6��4I+��RLH�ad��aLw�IV�JRL�f�A�a6�YIV�JRLH�fswY��wKWCN���Yf��IKxNHK6��JVMYh�6�Z���Wr8IYfWIL�G��c��4f��WI��K�Gjnk��4�8�YR��J��N�ff��bLIY�+I�R��Jf+�YIV���L���d�nabxLxV�WV�Yf��IKxNHK6��XfMYhadjKx7HLr2wYaLN�WYjK74�Lf��f�JN�I�wa�a�WLH���wY��wnI�IJbV�JRLH�arA�fR�Lf�YR7zN�JJ�WfNHLf�YnbLahM�����IY�WYGfna�6+AX�VA��Was8WaYs�a���x�cWaGRRaGrGI4�ZI��+��RLH�ar�Jb6�hRhx���NXahjhfR�Xx��f�Z�sI8IKV6xr8HK��AXN�wYfMIKzkaZV8Ihf�w���Kb�ah�b��s�HJf+�YIV�JRzH�h�HJf+�YIVHs7zYYW�ARf��KWh�4�C�sI8IKV6�K��YRVyNXVHwn�MHX��w���NXaYj�hv�h6���I�N�WYjK74�Lf��f�KN�IxAsa6�YIV�J7Z��fr�Jf+�YIV�JRLN�WY�nxNHL�V�W7MN�I8jhz�aY���fNM�nJ��W6N�haf��NM�s�VwJk4HKzX�XhzN�W�wszGwnb�jGILHh��wn�v��RXw��8Y+V8�Jb�AJbV�JRLH�cMHJa6�YIV�JR�H�f�HJf+�YIV�JRzH����Z�fN��vIYR�A2bG�GrW�Wrv�W�ZAn�b�Yff�4xv��68AXI�wnhZaZrLHY�b����wY��YG�WA+V8ahh��4���WA�H4N�aYR�H+�2�f�WYYW�aYV�+�2w�NWw�WraGr�HX�VA��Was8WHJ�GIG�f�W6z��b3H�ar�Jf+�GRVx�VZY����nV��Yb�w�f�NhIY�nV6�Kf2�Xf4YfInI�f7�Lfh�W��w�RCwLr�AKzCa2�M�Jf��Z�3���bwWx8ALV�wnW��L��HG�bY�I�jf6f�Y�z����IG��an6f�Wrv��Wr�Y��aVf�YRk�WIWIY�GYLRrw�IV�JRLH�a��WR7HKzhHR��NKfd�na�HK�f�Jx�IX��wnJWa�zCH��8�Jb�w�f��n�LAK�8AXI�wZa�Hn�bwWxbwnVswL�J��bV�JRLH�arA�fR�Xr�Hs6��+aa�WVN�n6�Ys7MN�A�I�fyw��b�Yf�A2b�H�J��J�WI�A��Z�Ga�y�v���YRdALI��Jf+�YIV���z�I��Jf+�YIXHR�6NhI8�hfYXR2w��MN�A�I�f�nzhx���YhIYjfR�wsx�xW�CN�Vn�YV�Y��xJ6�NXV�wRfGar+��RLH�adaJa6�YIV�JRLH�ar��ab�XrhYs6WH�aH�nRw6��+�KYXVY�Rxb�Yb�Ys�+���n�nx7HY���h��YfI�AffGHLa���a4H�aH�Y7v�Ga��J�W�fh�na��Kz�jK��YKWnA��v�Y�3�a3H�ar�Jf7�sb+��RLH�arIhb6wJbV�JRLH�arA�fyNYIW�YR�AL��YG7��WRMI�A4AZ�fa�k�w�R6���JAfaCw7ZwKz6a4IM�Jf�wYh�wKW�Y�fMaG�vw+�VaX�WYHbGah8��4���JcWNXV�a�fb�X�2xW�WNKWYaY�b���Mj�k�HGR+a�x3a�by�Z�W��I�A�a�HJf+�YIV�JRzH��dIWfNHK�2�JR�YYJ�IKV�K�2��V6NX7�AW6GxL�VHRV��RINw����K�M�V8I+I�wL�J3ZrLHY��I�84wKW��nzvAK�8wYRCIL�VjnW��Z��YK�6�Ry�YbWIYR�w���N�ffw�R6���JAK�fNY�y�Z�W��I�A�R��Jf+�YIV���L����wnx7�Lf2��VkN����n��xn��a�x8w��Zwn6VYnz�HZ���Y��wKIvwKzva���A�R7wKW��nW8Nhx�I�xxHJf+�YIV�JRzH��d�nR7HL�h�JWL�f�k�f6N�Xr��4fWH��b�YWf�G�v��R3wHbGH�W�4�LI�AJI���3��fN�VvI��LH�ar�Jf+wZR�I��LH�ar��a7�Kf2x�zCH�I��YVb�Xr��4fWH�IhwnxRaG��xW���Y�8xnR�K6��f��HJaH�Y7v�Ga��J�WHWR��Jf+�YIfI��LH�ar�Jf+�YIVHs68�s�YjYV6�Ybhx��MNZhM�Wcv�nzhx���YhIYjfR�wsVhHRV�HJah�KR�K6��f��HLfZ�J6HL�2�L�8Y�AJ3Jk4�Lfh�W����fhw�fGj6���aM�ZI��Jf+�YIK�Y�3H�ar�Jf+�R3���LH�ar�Jf+w�AWA��WaYuvI��M�GNWYhaba�h�IX��IYMWas8Wa�ffa4�M�KM�H�N4a�h��4�3a28WN�a7aY7v�+��w��WNhI�aYVb�X��w�sWAf�ahfz�4�JH4�3�WIWIY�GYLR+�JbV�JRLH�arA�fR�LI�Ys6kNfar�Wfb�G�2xW�kNKfd�Y7v�Ga��J�WH��HjYxGYn��NY6�Aszvwnk�3��LAK�8�+I�wKW��nzvAK�8wYRCIL�VjnW��Z��YK�6�Ry�YbWI��J�K�G�7���aW��I7IHbfNY�y�Z�W��I�A�R��Jf+�YIV���L����wnx7�Lf2��VkN����n��xn��a�x8w��Zwn6VYnz�HZ���Y��wKIvwKzva���A�R7wKW��nW8Nhx�I�xxHJf+�YIV�JRzH��d�nR7HL�h�JWL�f�k�f6N�Xr��4fWH��b�YWf�G�v��R3wHbGH�W�4�LI�AJI���3��fN�VvI��LH�ar�Jf+wZR�I��LH�ar��a7�Kf2x�zCH�I��YVb�Xr��4fWH�IhwnxRaG��xW���Y�8xnVwn6��h�6NhI�wJ6HL�2�L�8Y�AJAsa6�YIV�J7Z��fr�Jf+�YIV�JRLN�WY�nxNHL�V�W7MN�I8jhz�aY���fNM�nJ��W6N�haf��NM�s�VwJkv�La��J�vY�I�AW6�NZaV�WV6NX7�AW6GxL��jY�MN��Yws6�w���w��4N4V�whb�AJbV�JRLH�cMHJa6�YIV�JR�H�f�HJf+�YIV�JRzH����Z�fN��vIYR�A2bG�GrW�4a4IY�Z�2bG�G7����z��RhAn�6�Z���Wr8IYfWIL�G��c��4f��WI��K�Gjnk��4�8�YR��J��N�ff��bLIY�+I�aCwVvwKzbNYIM��fr�Jf+�YI3��VrNJInj�fG�nI�xJ6�NXV�wRfGanI�w�f�NhIY�nV6�XrXwf�8ahbw4���4NWNK��a�IW�+���ZNWa�a�a��zx���aX�WYKW�a4I���6bxLaX�f��w�RCwLr�AKW4A��bwhf�wnb33��8H�6�wY��wVvwKzbNYI3H�ar�Jf+�GRVx�V�Yf�H�YabanI�Ys6�Y����4���W�WYL�fa�f�xX���Z7�HGR+a�x3a����4���sIka��zx��M�ZAWaZ�R��fr�Jf+�YI3��Vr�sIkjY74�6Vx�NJY�VYI�xw�2��xMws6�wZ7�3�W6A�8�+Ivw�V�nzW�n6�IX�7wYI��sbV�JRLH�arA�b6�sbV�JRLH��d��fbjr�j�Vb�RAW�Kxw�2��V�Yf�H��7v�KzX�skW�fAW�Rfbjnz���I�YYJ�IKV�K�2�Yb3H�ar�Jf7AJbV�JRLH�ar�Jf+�Lf�YR7zN�JJ�J67�K��YsWJ�nM�wf6N�h�2�fV8N4r�a�RN�XrX�YI�YfAW�Rfbjnz���a4H�aH�Y7v�Ga��J�W�fh�na��Kz�jK��YKWnA��v�Y�3�a3H�ar�Jf7�sb+��RLH�arIhb6wJbV�JRLH�arA�fyNYIW�YR�AL��YG7��WRMI�I�A2b�aZrf��VbIY�RA���rf���J�WI�w�6IG�W��bk�WA��vbGHK6f�Z�C�WAWwn��HKIyNYa6�Yf3�Z�f�Z���KzvAK�8wYRLAsa6�YIV�JRLH�fd�YaxLf��4rLHhI�IK7vjnz��4xLYYJ�IKV�K�2��7MN��Yw+�3x�uWaf��a�h�IX�Vx�sWaRaba��zx���aX�WYKW�a4I���6bxLaX�f��w�RCwLr�AKbWH�a8�XN�w�I�AK�kH�V�wY��wVvwKzbNYI3H�ar�Jf+�GRVx�V�Yf�H�YabanI�Ys6�Y����4���W�WYL�fa�f�xX���Z7�HGR+a�x3a����4���sIka��zx��M�ZAWaZ�R��fr�Jf+�YI3��Vr�sIkjY74�6Vx�NJY�VYI�xw�2��xMws6�wZ7�3�W6A�8�+Ivw�V�nzW�n6�IX�7wYI��sbV�JRLH�arA�b6�sbV�JRLH��d��fbjr�j�Vb�RAW�Kxw�2��V�Yf�H��7v�KzX�skW�KJ��KxN�K��wG�8HJaH�Y7v�Ga��J�WHWR��Jf+�YIfI��LH�ar�Jf+�YIVHs68�s�YjYV6�Ybhx��MNZhM�Wcv�nzhx���YhIYjfR�wsVhHRV�HJahwY7v�XRX�h�6NhI�whz+�Yb�w�f�NhIY�nVC�n�hHskzYfaXahkvYK�2Hs�8HLf�aJa6�YIV�J7���I��Jf+�YI�jY�z��fr�Jf+�YI3��xbwJz�wY6�a�WbHv�8�Jb2w�Z�n�Wad���W6vwK�3NKW�N����LVKwnkWNK�vAXI8AsfKw���nz6Y�a8AWh�w��YnW6Y�xbwhf�w�f��n�LAKb�aYs�a���wY�3�Y�LH�ar�Jf+w�IxHsVkN�WnIsf+�Kf2�Xf4YfInI�fHL�2�L�8Y�AJ��x7HXR��YfkA��f�Z�W�4a4IY�Z�2b6�KWW���MIY���s�GIG�f�W6z�v8��hI��nV7�KM�HJI�a���aX�vH�cWAf�ahfN��J��JWaGRRaYs�a���wY�+��RLH�ar�Jb6�hRXw�NM�R��I�fxLfXw�NWH��63�zy��V�I�Ia�n�G�Gs���bLIY�+IY�GIL�f�G���Y���s���Lay��Ik�Y�LH�ar�Jf+w�IxHRV�N�J���a��h�fxJ�8NJ�HAn7vanA�Yfa�ah8�IX��AY7WYY��aYV��4�2���W�dbkaY�Iha6�YIV�JRLH�f�Iha6�YIV�JVZ�RI�A�RG�YI�wf�WY�aHAn7vanI��fNM�nJ��W6N�haf��6�Y�aYjf6G�Y��xJ6�NXV�wRfGar+��RLH�adaJa6�YIV�JRLH�ar��ab�XrhYs6WH�aH�nRw6��+�KYXVY�Rxb�Yb�Ys�+���n�nx7HY���f6�Y�aYjf6G�Y���JR�YYJ�IKV�K�2�X���s����6�N4���f6kNh��ws6��4I+��RLH�ad��aLw�IV�JRL�f�A�a6�YIV�JRLH�fswY��wKWCN�Ibw�8�wnb3NKzCa2��I��NwG�WAKz6AY6bwKRNw�6v�KzCaYV�AL7ZwrV�Kz�Yfr8��h4wa�3�zWYf�b��fswY�VwK�6wJz��ZV�w4��aX�WYKW�HWR��Jf+�YIV���L���d�nabxLxV�WV6NX7�AW6GxL�VxJ6�NXV�wRfGanIhHskzYK�6�Ry�YbWI�I�A2b�a�WW�Jbz�����s�GIG�f�W6z�v8��hI��nV7�KM�HJI�a���aX�����WYHb�aGVWN���AYuWaGRRaYs�a���wY�+��RLH�ar�Jb6�hRXw�NM�R��I�fxLfXw�NWH��63�zy��V�I�Ia�n�G�Gs���bLIY�+IY�GIL�f�G���Y���s���Lay��Ik�Y�LH�ar�Jf+w�IxHRV�N�J���a��h�fxJ�8NJ�HAn7vanA�Yfa�ah8�IX��AY7WYY��aYV��4�2���W�dbkaY�Iha6�YIV�JRLH�f�Iha6�YIV�JVZ�RI�A�RG�YI�wf�WY�aHAn7vanI��fNM�nJ��W6N�haf�h�CN�J�A�VxKf2xW��HhI�IK7vjnz��4xM��fr�Jf+�XI+��RLH�ar�Jf+�YIXw�NM�R��I�f+�Xr�x�z��R�W�fkv�Xr�w�f�Yf������xXrhHsf�HXa��Kab�Ga2xJ�6NhI�whz+�Yb�w�f�NhIY�nVC�n�hHskzYfaXahkvYK�2Hs�8HLf�aJa6�YIV�J7���I��Jf+�YI�jY�z��fr�Jf+�YI3��xbwJz�wY6�a�WbHv�8�Jb2wY�VwLr8N2�b�hf��Z��IKbWa�VbwKRNw�6v�KzCaYV�AL7ZwrV�Kz�Yfr8��h4wa�3�zWYf�b��fswY�VwK�6wJz��ZV�w4��aX�WYKW�HWR��Jf+�YIV���L���d�nabxLxV�WV6NX7�AW6GxL�VxJ6�NXV�wRfGanIhHskzYK�6�Ry�YbWIYRX�Y�b�LN�N�W6�����Hb�aZxW�YRk�WIWIY�GYLRy�4�CxW6kNh��w+�3x�uWaf��aGV3�+�Mj�k�YfA�aY��HX��A�MW��va��zx���aX�WYKW���fr�Jf+�YI3��VrN�WY�nxNHL�VxJ��N�Wna�fy�H�8�WI2wL�G�Y�f�WRz��f3�Z�f�Z�f�Z�W�Yf�w��fNY�yN��4���Z�sR��Jf+�YIV���L���Hw�ab��aXj�Vn��I�wna7�Lr2�XxLaf6�YX�3�ZNWwZR2a�ffaX�2j��WNKhJa�M��+��xZ�+��RLH�ar�Jb6wZ�+��RLH�adI�xGHLa��JWLYK�YI�h4�Lr2�XxLYXVY�Rxb�Yb�Ys�+����IKVb�sx2x�zCN�Vn�YV�Y��xJ6�NXV�wRfGar+��RLH�adaJa6�YIV�JRLH�ar��ab�XrhYs6WH�aH�nRw6��+�KYXVY�Rxb�Yb�Ys�+���n�nx7HY���L��NKWXIRhvjr��LxkYYW�ws6�I�I�xJ6�NXV�wRfGad���WV��RI�wh�6�nW��Z��YfaXAs�Zw�IV�JRL�fR�HJf+�YIV�4�zH�I��Jf+�YIV���LaGR+a����L�WAnf�a�6+w�����NWNHba��+�X��j�NWA+V8ahh��4���WA�H4N�aYR�H+�2�f�WYYW�aYV�+�2w�NWw�WraGr�HX�VA��Was8WHJ�GIG�f�W6z��b3H�ar�Jf+�GRVx�VZY����nV��Yb�w�f�NhIY�nV6�Kf2�Xf4YfInI�f7�Lfh�W��w�RCwLr�AKWbHv�8AXx2wK�VHnzC�V�wY��wVvwKzbNY6�Ihf�w�fGj6��YfkA��f�Z�W�4xC�YR�A2bGIK�W�YIL��IaIG�fNY�y�Z�W��I�A�R��Jf+�YIV���L����wnx7�Lf2��VkN����n��xn��a�x8w��Zwn6VYnz�HZ���Y��wKIvwKzva���A�R7wKW��nW8Nhx�I�xxHJf+�YIV�JRzH��d�nR7HL�h�JWL�f�k�f6N�Xr��4fWH��b�YWf�G�v��R3wHbGH�W�4�LI�AJI���3��fN�VvI��LH�ar�Jf+wZR�I��LH�ar��a7�Kf2x�zCH�I��YVb�Xr��4fWH�IhwnxRaG��xW���Y�8��fN�L6h�Xf�YhaL�Wfb�G�2xW�kNKf�HJf+�YIVHa3H�ar�Jf+�YIV�JV�Yf�H�YabanI�HRV�N��aIRr8�Y��YRVyNXVHwn�MHX�xYR7MN�fLwKaxL6X��x�N�Wxwhz+�Yb�w�f�NhIY�nVC�n�hHskzYfaXahkvYK�2Hs�8HLf�aJa6�YIV�J7���I��Jf+�YI�jY�z��fr�Jf+�YI3��xbwJz�wY6�a�WbHv�8�Jb2w�Z�n�Wad�M�Jf��Z�3��W�N����LVKwnkWNK�vAXI8AsfKw���nz6Y�a8AWh�w��YnW6Y�xbwhf�w�f��n�LAKb�aYs�a���wY�3�Y�LH�ar�Jf+w�IxHsVkN�WnIsf+�Kf2�Xf4YfInI�fHL�2�L�8Y�AJ��x7HXR��YfkA��f�Z�W�Wrv��fdwG�fxGrW�YRk�WIWIY�GYLRy�4�CxW6kNh��w+�3x�uWaf��a�z6�X���ZN�H�I�a�x�w��WA��WN�NWa�6bwJa6�YIV�JRLH�fd�Yab�XrhYs6WH�InjYabxX�V��h�ws�GNK�W�JWk��IxAHb6H�IW��aW��I�IY�6jn�f�YRk��RYAJ�fa��rw�IV�JRLH�a��WR7�K�Xw�h4NZfdxK��KzXHRVMNX7J�4���Wk�Hvb�aY�zNX����NWNLf+aYV6a+����cWwJI���fr�Jf+�YI3�Y����fr�Jf+�LIh�J64N�Ia�W6��L���WVMNX7J�Wkv�Xr�w�f�Yf�����Y�Kz2xW�C�sIY�Jb+�Kf2�Xf4YfInI�bxw�IV�JRL�GI��Jf+�YIV�JRLH���wnx7�Lf2��R��sIkAna��dbN�Kx8�s�WIf6�L6xwKzd�s�Hj�b+�6��Z�8Y�aHwR6+NZaV�WV6NX7�AW6GxL��jY�MN��Yws6�w���w��4N4V�whb�AJbV�JRLH�cMHJa6�YIV�JR�H�f�HJf+�YIV�JRzH��6�Z���Wr8I�IXA����Yc��Z�bI�Ih�J����c���aW�Y���s��HKIyNYa6�Yf3�Z�f�Z���KzvAK�8wYRLAsa6�YIV�JRLH�fd�YaxLf��4rLHh�L��RGa�r���x8N�fdY����fsWA�a7��fr�Jf+�YI3��VrNJInj�fG�nI�HnbLN�AW�R6G�nzX��V�a�kv���z�J�+��RLH�ar�Jb6�hRXxJ��Y�AM�J6xXrhHsfLY���j�fN��AWwZf7aYs�N���j���Y�I�aYV�������WYHb3a�f+�+AZj�JW�nfra�IW�+�M�ZAWaZ�Ra4I����2x��WwJa�a��zx����4cW�nh�aYV6x+�2�W�WYX��aGrf�f6bxLaX�f��I�zvwGazHnW�HY�8�Jz��na��KMW�nh�aY7�xX��x4AWAf�a�f+�+AZj�JWY���a�z6aX���fcWaLfba�z6j��M��7WYHb�a�Mv34�W��u�Y�a�affG�X��jYW3I��Zwvb�NLN��4IW��RR�2bGInM��GaMI��JA�I��Jf+�YIV���L���d�nabxLxV�W7JNfIZ���4�Lf��4��H��G��6f���z�WI��2bGaYzf�YRkxK���sR��Jf+�YIV���L����wnx7�Lf2��VkN����n��xn��a�x8w��Zwn6VYnz�HZ�8whbCwZ7�Ynz�YhxbwJfKwKIvwK�bwWxb��fswY�VwK�6wJz��ZV�w7ZwK�4N���wY��wYz2xn�WaRR3H�ar�Jf+�GRVx�7MN���IK�4�YIHYn�CYf�d�nRG�G�V��W�wY�6IL7�N�bb�WI7IG�G�nIW�4xW�W��w����LVZw�IV�JRLH�a�A�zZw�IV�JRLNJ�Y�YVwn6VxWkzNKW��nRG�G�Vx�x8�s�WIf6�L6xwKzxNXa�Anxw�2�YI���aZ�J67�ZaVxJ��N�Wna�f+�K�hHRV��R�J�sz+�Ybfx4R4�RAW�YVIZr+��RLH�adaJa6�YIV�JRLH�ar��RGYYI3�J����AzAJb��XI+��RLH�ar�Jf+�YIV�JRLH�I8w�f+����Hn�JNhar��f+�Xr�x�z��R�W�YRY�r�x�x8�s�awJb���IfI��LH�ar�Jf+�YIV�JRLH�ar�Jf+�YIXw�NM�R��I�fnInxyI��LH�ar�Jf+�YIV�JRLH�ad��a6�YIV�JRLH�ar���xw�IV�JRLH�ar�JfwnW3HsV�YfIh�KVGxXr��K�KY�I�AJb+NZ��xLxf�nMMAf�vHL�h�4��NZkM���nA��NxWRvHWaZwW��GV3�L�hYs�4wW��GV3�ZI�YsIxAhbYjnxVwxf�nMMA�r�a����a4H�aHanVGIZaV�WVJY��H�KR�L6��JVx�YbYHRcz�h�YxXf��YbHxf�6�ZrfI��LH�ar�Jf+�YIV�JRLH�ar�W6Gjnz2�W�W�s�a�Wr��KVN�a3H�ar�Jf+�YIV�JRLH�ar�W6b�Gf��J�CN�arwJ6�Y�hxJ��Yf�a�WfN�YI�x�MMYfAMAn�Zw�IV�JRLH�ar�Jf+�YIV�JRLH�ar��RGYYI3�W7J�nkM��RN�Kz2�La�YRarw�66�YbfxA�HhI8�R6G�YVa��rLHKf��J67�vb��WVM�sIYIRI�HKxV�WfbH�aHa�rs�nb�YRV8Nf�4�R��w+I+��RLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLYKJ�j�6GxK6��JR�HhIn�nx7HYI�YsWLHhIn�nx7HK�2w��JYfar��r6�Ybhw��4�RI�An�Zw�IV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�adAR66�Y��Ys�KYYJ�IKV+��bhw��4�RI�AsbNAJbV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�4��YKWnA��vYnbW�VbAZR7wY�VwKzL�6�Ihf��na��KMW�nh�aY7�xX��x4AWAf�a�f+�sa6�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�Lr���R�Hh���nV7�Kz3Ya3H�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�Lr���R�H��dj�6G�n�2�JNMY�VLwJ6��n����Vk�s�Hj�cvaY�2�W�WHLkM��AzanfN�Z��HYh�As6�I�I�x�MMYfAzNhWn�aV�W7MYfAzIJb�w+I+��RLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIVxJ��NK�HAnV��KzVxshZ��fr�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIK�Y�LH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRL�fR��Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�W6Gj6�Ya3H�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�Lr���R�H��dj�6G�n�2�JNMY�VLwJ6��n����Vk�s�Hj�cvaY�2�W�WHLkM��f6�Gr�jGILHhI8�R6G�YVaxXr4H�aH�R6G�GI3��MZ��fr�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�I�IKV��Lr2wf�8H�xVaJa6�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRL�fR��Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar���xw�IV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ad��a6�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�IYA��v�XI+��RLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JVMYKfrw�RN�K�X�WV�N�AWwhb+�XV��ZczYfa�An�Zw�IV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�I8w�b+xL6hxJNMN�Iaah�8�GrX��fJY��H�KRn�Y�hHRV�HJaHAnx�LxGjhVh�sadNh6xXrhHs6KNKWnIR6��db�HR6kNh�YwR���ZrfI��LH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JVCNX7W�nRGa�R��JR��ZI��Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIVH+r3H�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�cMHJf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf�LaX�fNZ��fr�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YI��XfW�sI8IYxG�YIa�La3H�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�cMHJf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRL�fR��Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf7�sbV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JR�YfI�wnVG�L�hHs�2YRar��faYzhj�7WN�I��Ya�IN�h��YYM�wnV�Lx��4�MHJaHAnx�LxGjhVh�sar��x�rXjY8Z��fr�Jf+�YIV�JRLH�ar�Jf+�YIV�J7���fr�Jf+�YIV�JRLH�ar�Jf7�sbV�JRLH�ar�Jf+�YIV�JRLN�WY�nxNHL�V�WV8NhIYIR6Ga�rXjLa3H�ar�Jf+�YIV�J7���fr�Jf+�YIV�JRLYfI�jf6NAJbV�JRLH�ar�Jf+�YIV�JRLN�WY�nxNHL�VxLxh�ZI��Jf+�YIV�JRLH�cMHJf+�YIVH+r3��fr�Jf+�G�3�Y�3H�ar�Jf+�GRV��RLIY���LVW��bLIY�+IY�fNY�y�Z��IYRrAdb6�Z���Wr8IYfWIL�G��c��4f��WI��K�Gjnk��4�8�YR��J��N�ff��bLIY�+I�aCwVvwKzbNYIM��fr�Jf+�YI3��VrNJInj�fG�nI�xJNM�s��ARf��Xr�YsWLY���j�fN��A�HGR+a�x3a��WA��WNhIfaY�+wXAZj�W�YR7MNZ��a�W�Z��IYRrAdbG�Y6f�Y�4�v8��h���nV7�KMW�nh�aYV�������WaGRRa�f+�+AZj�W2x�zvYK��a�WN�fv�WIxA��w��f�G66IYRKAn�6IK�W�4�C��JZw��6IGry�4xWw�6kNh��w+�ZHv8WYY�aG��w+�3��hJasa+��fr�Jf+�YI3��Vk�s�Hj����ZN�Y�a�a�f+�+�Mj�kZaZf�N�AW�W6N�K6LH�NMYf�k�+�J�JVXw���NXaYj�hv�Gx��WxC�Jfn�KVxL6X�J�r�W�d�RhvIn���f�C�Jfn�K7va�r��4�M�RIHwn�v�n6LH��CN�IY�KsvxKf2xW�C�Jfn�KR�K6��f��a+x+�fhvjr��LxkYYW�w+�J�JV��4�kYYW�wR6y�JRL�W6�Y�aYjffGHLa����r�WI�Ifh4�L6��WxC�Jfnjfh4HL�2xZ�kYYW�w+�J�JV2x4fWYLhz�KVwn6��h�6NhIN�KIVxLI�Ys���+7�j�6y�JRLYs�8NhIY�Kx�Kb+��RLH�ar�Jb6�hRXw�NM�R��I�fxLfXw�NWH�aH�nx7�Lf��Jkz�sIN�Z��AKzCYf��I�bvw�f��n�LAK�bw+I2wZNW�nzba�I8�hfNwnb3IK�6wJz��ZV�w7ZwK�4N���IhfCwnk�3��La4a8As6v�Z�3AL��HY��wY���Z�Vxn�WaWxbwnVswL�J���HGI�Y��H�nabwnfhYRV8a�z6aX����sW�nfzahfz�4�JH4�WNhIfaY�+wX�M��7��db�a�6W����A�JWaZ�MaGrGI4���L�ZaZfaaYu��4����c�N�A�aYVz�+AZj�hWARIZa�IWx��WA���YfaWa�6+�XAZj�kW�nfyHhIn�nx7HLr�wfNMYK���n�y�J�M�Y���s��anIyNYIJ�v8��h�G�Zaf��rM�Yh�ws�GNK�W�GrWIYRYAJ�fa��rw�IV�JRLH�a��WR7�K�Xw�h4NZfdxK��KzXHRVMNX7J�4���Wk�Hvb�aY�zNX����NWNLf+aYV6a+����cWwJI���fr�Jf+�YI3�Y����fr�Jf+�LIh�J64N�Ia�W6��L���WVMNX7J�Wkv�Xr�w�f�Yf������xXrhHs6MYY�Y�R6N�Y��Ys6�Y����J6xXrhHs6MYY�Y�R6N�Gr+��RLH�adaJa6�YIV�JRLH�ar��RGYYI3�J�MN4s��na�HK�f��I�Y��H�nabwnfhYRV8NZf�An�Zw�IV�JRLH�ar�Jf+�YIV�J7MN���IKx��L��YnaL�f�k�f6N�Xr��4fWHJaX�WfN�XrXwYz6�R�Hwna�xnzCaszbwnVsAnz�wK�va2��Ihf�wNJYr�NL��I�zvwYz2xn�WaRR�HWx4HJf+�YIV�JRLH�ad��a6�YIV�JRLH�ar�J6YLrXwh�MH��M�Wh4�LfXw��W�saL�WfN�XrXwYz6�R�Hwna��4I+��RLH�ar�Jf+�YI�jH�bw�8�wnb3NKbWH�x�I�I�wYz2xn�WaRR3H�ar�Jf+�YIV�JR�N����nRGaY�2xW�L�Radw�fGj6��a3H�ar�Jf+�YIV�JVMYKfrwJfGw6N�h��N�Wna�b+�KW�Ys6��sa�An�Zw�IV�JRLH�ar�Jf+�YIV�JR�Y��H�nabwnfhYRV8NZfr��fnA�b�YR7MN�W8�YxN�KzX���Z��fr�Jf+�YIV�JRLH�ar�Jf+�LrX���MNKWhAW6���fVHRV��RI�aJa6�YIV�JRLH�ar���xw�IV�JRLH�ar�Jf+�L�XHRVMNX7Wjhfs�nIGjYx4N�IJws6�I����4��Yf�Lwhz+�+r�YncMHLfZwKab�L62�W��Y�V�InRG�Y����xCNhInjKa�NZa��JVkY�VJ�Rkv�Y����xCNX7W�R6Ga�r��WV8N4Vawhz+�n6�xW�CN�Vn�YV�Y����xCN�IY�Ksv�Kb�jGI�Y�V�ARhvIn��wG�8HLfZHJf+�YIV�JRLH�ar�Jf+�YI��f�WY�I�AW6G�Y����xbNXV��Y�vxKf2xW���sahwY7v�XRX�f��HLfZwK�v�Lf2�L�4Y�I�AW6�NZa��L��NKWXIRhvjr��LxkYYW�ws6�I��XxJ��N4ahIKab�Y����x�YfI�wRh4�Kz���xh�ZI��Jf+�YIV�JRLH���IX�z�JsWAdb8aYV�������WAnf�a�6+w���ahJWARAM��fr�Jf+�YIV�JRLYKJ�j�6GxK6��JR�HhIn�nx7HLr�wfNMYf�a�WfN�YI�xZx8���M�J6w+r��4rM�GI��Jf+�YIV�JRLH�ar�Jf+�KW2�J68Y�I�wJf+��b�YRV8Nfad�na��Yb�YR7MN�kM�J67YK�2HR�8HW�4HJf+�YIV�JRLH�ar�Jf+�YIV�JRLH�I8w�f+�����4�KY���j�fN����xJNM�s�VAJf+�L�XHRVMNX7Wjhb�w+I+��RLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRL�sIkjY74N�I2w�N4H��YaRhv�LIhx�z�NKfLwX���J�WARIZaf6�YX�3�ZNZaZfaaGrf�4�z�K8WNhIfaY�+wXAZjYR�j�x�Y��H�na6�4I+��RLH�ar�Jf+�YIV�JRLH�ar�Jf+�Xf+��RLH�ar�Jf+�YIV�JRLH�cMHJf+�YIV�JRLH�ar�Jf+�YI��WfLHJIYIna7�X�3�WVM�sIYIRI��a��Zx8HXsMAsbNAJbV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�K�hHRV�N�I��Yx�L6Gj�VvYf�8�RI��a��Zx8HXsM�Wr��KW��Z��Yfx4HJf+�YIV�JRLH�ar�Jf+�YIK�Y�LH�ar�Jf+�YIV�JRLH�adwnV7�KzfI��LH�ar�Jf+�YIV�JRLH�ar�Jf+�YI�xJNM�s��ARf��Xr�Ys�2HhIJwn�Y�YV��L�MN�V�wf����fVHRV��RI�aJa6�YIV�JRLH�ar�Jf+�YIVH+r3H�ar�Jf+�YIV�J7���I��Jf+�YIV�JRLH�aHanVGI�I��JR��sIkAna��dbh��zNN�IHwf6N�L63��8Z��fr�Jf+�YIV�JRLHh��wnx7�Lf2��s�H��J�s�Zw�IV�JRLH�ar�Jf+�NWNX�za���IX�z�W�W�nfra�z6A��VA��Was8W��fr�Jf+�YIV�JRLYKJ�j�6GxK6��JR�HhIn�nx7HLr�wfNMYf�a�WfN�YI�xZx8���M�J6w+r��4rM�GI��Jf+�YIV�JRLH�ar�Jf+�Yb2�h6zYfI��RRNHLfVx+rL�4sMaJa6�YIV�JRLH�ar�Jf+�YIV�4��aY7�A��JaLN�HGR+a�x3a��WA��WAHb�a�z6�����GsWNhIfaY�+wha6�YIV�JRLH�ar�Jf+�YIVxW6�N�WY�Rhv��I3�WVM�sIYIsfxL6V�WVk�s�Hj�r�anbhw��4�RI�An�Zw�IV�JRLH�ar�Jf+�YIV�JRLH�ar��RGYYI3x�zWY+VnjYabxX�3�WVk�s�Hj�z+�KV��L�MN�V�wf���ZrfI��LH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�I�IKV��Lr2wf�8�ZI��Jf+�YIV�JRLH�ar�Jf+�YIV�JRL�fR��Jf+�YIV�JRLH�ar�Jf+�YIV�JRLN�I��Jb+�L��wGr8Y�aH�Ka�HGrfI��LH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�aH�nVN�hVXwhfL�RadNf��AJbV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JVbNXa�wRfG�K�V��I�NXV�A�6G�XrxYs6�H�Injhf+�L��wY�M�GI��Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JR�NKJ��W6���fV�WV�YYW�IRrbaG��xW��NfIZwJb�AJbV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�J67�LxX�Js�H�aHAnx�LxyI��LH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�XR2wh�8�saL��x�GIGjYx4N�IJwskz�ryI��LH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�Lr���R�N4aH�nxwn6y�LrKN����KVGxXr��K�KY��H�na6��b2w�f�YfaZ�J67�LxX��bM�GI��Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�J67�LxXx���N�zJ�sfs�nI�x4f6NY64HJf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRL�fR��Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf7�sbV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JVMYKfrwJf��Xr2YsVdN��VAn�Zw�IV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ad�Yab�K��j�R��ZI��Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf7�sbV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JR�NXV�A�6G�XrxYs6�H��M�J67�LxXx���N�64HJf+�YIV�JRLH�ar�Jf+�YIV�JRLH�cMHJf+�YIV�JRLH�ar�Jf+�YIV�JRLH�IYA��v�XI+��RLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLN�I��Jb+�Xr2YsRL�Rar��x�rXj���Y+VhwnxRaG��xW���Y�8�YRGInzxYR7MN�fL�WfN�XrX�GILHh���nV7�Kz��JR�N��HwnVYA��2x�zvYfah�sz+�Ybfx4R4HWa����Zw�IV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar��7vHLR��J�M����j�fs�nI�HRVJNJx4HJf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�Xf+��RLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLYfI�jf6NAJbV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Wf�HKz��ZaL�Y64HJf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�Xf+��RLH�ar�Jf+�YIV�JRLH�ar�Jf+�Xf+��RLH�ar�Jf+�YIV�JRLH�cMHJf+�YIV�JRLH�ar�Jf+�YI�Hs68�s�YjYV8A�b��fNWYRar��f+�L��wGr8Y�aH�Ka�H�I+��RLH�ar�Jf+�YIK�Y�LH�ar�Jf+�YIVx�zbH�aL��RN�fx��4��NhI�An�Zw�IV�JRLH�ar�Jf+�YIV�JV�Yf�H�YabanI�Ys6�Y��8�Ka�GI3�WV�Yf�H�YabaryI��LH�ar�Jf+�YIVH+r3H�ar�Jf+�YIV�JV�Yf�H�YabanI�Hs68�s�YjYVCAJbV�JRLH�cMHJa6�YIV�JR�H�f�HJf+�YIV�JRzH����n6f�4f���Ra�Y�b�GVLw�IV�JRLH�a��WR7�K�Xw��JH�ar��sv�X���Xf�YfadAnV��Kz��f��H����Yffw��vIY��w�f��If�4�C��WsA��GHY�WN�W6�YW�AL�f�nzW�YIL��Ib�Z��anfZw�IV�JRLH�a��4�MI��WN�a�N�VYa�hv�Yb��Yf������nWb�+rhHsV���h�If6�XV��Z��NJIYj�zbxL��Hs6�N�IxI�hv�Gx��J68YKWYj�6GaY6��4fkNKWHjY7vwnb��W6MYf�XIf�v�X�HYR68NK�xIYR7�Lx2�Y�LH�ar�Jf+w�AWw�fGa4I�NYR7�XrXHsJ��h��YV�Y��w���YhAJIYVb�Xr��L���nWY�K�7�L���h���sI8�KV�G��xWNMY�I8A�a��+aa�fsv�JxXjh�xw�IV�JRLH�a���sv�X���Xf�YfR�wnb3IKbWYYb3H�ar�Jfs��6�x�f��fasAnz3asbV�JRLH�xxHX���W�WYL�faf6�I�a6�YIV�Jsz����HK8��4�L��R�A��G����4�8����A�R��Jf+�YI����b�hf�wYzz���8�R��AX�MHJf+�YIVxshM���G�Y�W�Jb���WKAvbbHn6Zw�IV�JRL�Y6�HX��w��W�+Vyafk�jX����r+��RLH�arj��LwK�8�R�bIGrsAnz3asbV�JRLH�xV�JafN�zC�Y�nAd8��nfywYaL��fb���GNZRy�YVW��RXIG�GaKzy���z��W7�hu��nfxw�IV�JRL�K6VHX��af�WY�I8a��baX�z�4�+��RLH�ar�h�rwKW6Yfr8IhfswGx�3��Man68wYRLHJf+�YIVxRhv���GNK�W��fMIYR�wZ�6�n6rw�IV�JRL�K6XHX���YA�YKW���fr�Jf+��xa�����X��wn6�Yr8H4x3H�ar�Jfs�4R+�YR�AK���G�63�WbwJz8�W6ZHJf+�YIVxnAv���G�K�yNGx�IYR�AK���G�Lw�IV�JRL�JxXHX�MHZ�WAR��a�z6�+����s�NYRG��fr�Jf+��xy�Y�b�Zs4wYz�a�bWHGV�I�fsArMY�bV�JRLH�xRj�WLwK�MaZ�8�GRCwn��wKW�HY�8��zsw���jLrMAnVb��62wnf��K��NY6Mw�V2AnA��JbV�JRLH�xRj�WZwK�MaZ�8�GRCwn��wKW�HY�8��zsw���jKW�HZ�b��62wnf��K��NY68IGrNAnA��JbV�JRLH�xRj��LwKWLN�z8Ash4wYbz��W8�+x3H�ar�JfsxGf�I��bwY��wnI�jKW�A�abwsMJHJf+�YIVxs�v�hR�An��wLr�aJW3H�ar�Jfsx�a����b��6�w�Vxn�4aZ��I���wZVva���N�x3H�ar�Jfsx�x�I��8��fKwY6��nzWARx�wsbLHJf+�YIVxsfZ�LI�wYf��nz�H�x��W6�wL�ZIKbWAK�3H�ar�JfsHGIy�Y�b��6�w�VxnW8af�8�K��HJf+�YIVxsfZ�WR�wYf��nz�H�xMwXI��Z����bV�JRLH�xVjsWrwKW6Yfr8IhfswZVzHn�vAn�8wYRLHJf+�YIVxsf���R�AnW���b�Y�I8AWh�w��YnbWA�I8IGR�HJf+�YIVxsf���R�wYkWxrzaY68AWh�w��YnbWA�I8IGR�HJf+�YIVxsf��GI�wL�ZIK�WaH��Ih67wK�3��bV�JRLH�xVj��rwK�LAK��IGsZwa�3�zWYf�3H�ar�JfsHG6a�Y�b��6�w�Vxn�vaXaMwXI�wnfzwKW6YGa3H�ar�JfsH�a����8An��wY�MjKW4A��bwhf����vxLV��Z��Y�V4�4����k�H4�Ma�Iya4�ZIYNW�fHa����Ja6�YIV�JRLH�fd�Yab�XrhYs6WH�I�IK7vjnz��4xLaY�6����AYN��db�a�6W�Yx7HXR��H8��h�G�Zaf��rM�YR3wHbGH�W�4�LI�AJI���3��fN�VvI��LH�ar�Jf+w�IxHRV�N�J���a��h�fxJ�8NJ�HAn7vanA�Yfa�ah8�IX��AY7WYY��aYV��4�2���W�dbkaY�Iha6�YIV�JRLH�f�Iha6�YIV�JVZ�RI�A�RG�YI�wf�WY�aHAn7vanI��fNWYf��wnV��Y��xZx8��I�If6�Gr+��RLH�adaJa6�YIV�JRLH�ar�J67�K��YsWJ�nWn�Wf8�G6�xW�4NhaLwKRGaGIhYRRLN�VYa�6NYKz2wfRLHLhJ��sv�X���Xf�Yfa�aJa6�YIV�JRLH�ar��ab�XrhYs6WH��HjYxG��I+��RLH�ad��aLw�IV�JRL�f�A�a6�YIV�JRLH�fswG�WHnz6AY68AWh�w����bV�JRLH�arA�fR�LI�Ys6kNfar�J67�Z�Vx�zW�sIYwf6NHYA��RA4aYRf�+�JH4�WYXVxaGR+H+�WA��f�W���K�f�GVLw�IV�JRLH�a��WR7�K�Xw��JH�ar����xYI��4�MYfIhwna6xn�JNK�8A+x�wKIvwKz�YhxbwJfKwKW��X�W�+V�a�AvI�a6�YIV�JRLH�fd�YaxLf��4rLH�aHasW6�Lr2wfV8YXVYj�fy��I���Rhw2bf�Z�f��x���RL�dbfNY�7�Kb�Y�a�IKsJHJf+�YIV�JRzH��dIWfNHK�2�JRLHh��j�fw�hxW��Yf�V�4�ZI��WA+VKa�x3a����fsWA�a7a��zxY�f�4fC�Y��AKI��Jf+�YIV���L���d�nabxLxV�JR�Yh�Yj�fN�Lr2�XxLN�AW�R6G�nzX��xbI��7wnfz�K��an��A�f�wY6VHn�WaXabw+I2AnMZ���HG68�f6N�Z����bW�VbAX��wL�W�n6LH�zb�Y�vwZx2�KzMa���ZV�wnb�jK�Wa�rbwfk�wKIvwK�vAXI�IKsZ�Z�VxnW��n��wY��IL�VjKWCH���I�N4wYMZNLr8aWxMwn7��Z�Vxn�LAK�8�XN�wZx2�Kz6�sxMwn7�wY6VwKW8YY6bwLrZHJf+�YIV�JRzH��dj�6N�XRXw�xLYYJ�IKV�K�2��xb��6swnfM3���a�x8w��W�na��KMZaZfaaYR�j+����MWwZR2a�ffaX�2j��WNKhJa�M��+��xZ�+��RLH�ar�Jb6�hRhx���NXahjhfR�Xx��f�Z�sI8IKV6xr8HK��AXN�wYfMIKzkaZV8Ihf�w���Kb�ah�b��s�HJf+�YIV�JRzH�h�HJf+�YIVHs7zYYW�ARf��KWh�4�C�sI8IKV6�L6h�KzZYfaL���sxGaV�W7W��aZ�J67�Zf��JR���xVAJf+�KbhYs6k�sI8IKVC�faxsRM��fr�Jf+�XI+��RLH�ar�Jf+�YI�HRV�N��aIRrbxKb�w+f�N�IYA�V+��f��4�Z�R�x���4�rXxW�LHh�Ljsf+�X�a�JR���xV�J67�ZfV�WV��R���nxw�2��fM�ZI��Jf+�YIV�JRLH���wnx7�Lf2��7MN��Yws�Zw�IV�JRL�fR�HJf+�YIV�4�zH�I��Jf+�YIV���L��AW�nVG�YAWYhaHa�h�jX�vI�7WYGR�aYV�+�2w��+��RLH�ar�Jb6�hR�xW��YGfs�Z�Ja�W4�Rx8IYV�wKW��nzJaKV�ILV��KIVHnz�wJz�w�I�wKW��nbWH4aMw+I�wnb�HnzCaWrbI��7wnfz�Kz4YH�8I�6�HJf+�YIV�JRzH��dIWfNHK�2�JRLHhIH�YabxXr��4fWH�I8IYx�K��YsfLaGVW�X��AYu��db7a��6�+��j�7WaZ�JaGrf�X�����ZaZfaa�hv�X���h�W�nh�aGs�AX�����Jasa+aY�zH4���4�WNY��a�x3a���HJJWaZ��aG�v�X�JH4��H4N�a�AvI�����sWA��4a��zx�AZj�JWwZfda�IWI+�M��7�YK�Maf6G34����sWas8Wa�h�IX���4�WYYfZaf6G34��j�kWARIVaG��NJa6�YIV�JRLH�fd�Yab�XrhYs6WH�I�IK7vjnz��4xLaY�6����AYN��db�a�6W�Yx7HXR��H8��h�G�Zaf��rM�YR3wHbGH�W�4�LI�AJI���3��fN�VvI��LH�ar�Jf+w�IxHRV�N�J���a��h�fxJ�8NJ�HAn7vanA�Yfa�ah8�IX��AY7WYY��aYV��4�2���W�dbkaY�Iha6�YIV�JRLH�f�Iha6�YIV�JVZ�RI�A�RG�YI�wf�WY�aHAn7vanIX��xMNJIY�Y7zHLr��KcMHJaH��xNHK�hx�z�NKkMj�Ws�Gr+��RLH�adaJa6�YIV�JRLH�ar�J67�K6Xw��8NKz�An�b�YI��JR��sIkAna��dbX�h��YfIYI��vw+����IM�ZI��Jf+�YIV�JRLH���wnx7�Lf2��R��sIkAna��dbX��xMNJI�wJW��GaVx�zW�s���nV+��bX�h��YfIYI��vw+���La�YR��j�b�I�I��4�M�nWnAJb+�L6��J68YfAW�nRNAnzGjhVhHWaZ��RGa�rhw��4HJaHjfh4HKz��4��N��MwRI�xKx�jhfM�sar�W67�Lf�YRVMNX7JAs�Zw�IV�JRL�fR�HJf+�YIV�4�zH�I��Jf+�YIV���L��AW�nVG�YAWYhaHaYVfw��vI�7WYGR�aYV�+�2w��+��RLH�ar�Jb6�hR�xW��YGfs�Z�Ja�W4�Rx8IYV�wKW��nzCaWr�ILV��KIVHnz�wJz�w�I�wKW��nbWH4aMw+I�wnb�HnzJaKVbI��7wnfz�Kz4YH�8I�6�HJf+�YIV�JRzH��dIWfNHK�2�JRLHhIH�YabxXr��4fWH�I8IYx�K��YsfLaGVW�X��AYu��db7a��6�+��j�7WaZ�JaGrf�X�����ZaZfaa�hv�X���h�W�nh�aGs�AX�����Jasa+aY�zH4���4�WNY��a�x3a���HJJWaZ��aG�v�X�JH4��H4N�a�AvI�����sWA��4a��zx�AZj�JWwZfda�IWI+�M��7�YK�Maf6G34����sWas8Wa�h�IX���4�WYYfZaf6G34��j�kWARIVaG��NJa6�YIV�JRLH�fd�Yab�XrhYs6WH�I�IK7vjnz��4xLaY�6����AYN��db�a�6W�Yx7HXR��H8��h�G�Zaf��rM�YR3wHbGH�W�4�LI�AJI���3��fN�VvI��LH�ar�Jf+w�IxHRV�N�J���a��h�fxJ�8NJ�HAn7vanA�Yfa�ah8�IX��AY7WYY��aYV��4�2���W�dbkaY�Iha6�YIV�JRLH�f�Iha6�YIV�JVZ�RI�A�RG�YI�wf�WY�aHAn7vanIX��xMNJIY�Y7Mjnz�wfR�HhIH�YabxXr��4fW�RxVIJW+�JbV�JRLH��4HJf+�YIV�JRLH�ar���v�Lf��W�W��V8af6���fV�W7MN�I8jhz�aG6��J68YfAW�nRNAnz3��8Z��fr�Jf+�YIV�JRLN�WY�nxNHL�V�W7MN�I8jhz�aG6h�KzZYfakAnV��XV��ZI�Hh���Kab�Kz2ws�M�YWYNhWn�r��s�Z�sadAnV��XV��ZI�Hh���Kab�Kz2ws�M�YWYNhWY��a�Yb4��xrAJfw�hHR6kNhaL���v�Lf��W�W��V8af6YAZ�N�4��HWaZ�J6�XRXw�NMN�A�I�b�AJbV�JRLH�cMHJa6�YIV�JR�H�f�HJf+�YIV�JRzH��dI�fG�YzV�WIx����anh�N�I���I3A��Gjnk��4�8�Y�LH�ar�Jf+w�IxxWV8N4Va�4��I�uWAh�MaYVbjX�WA��W�nfJaf6f�+�J�J7WYX�+a��W�+�WA��W�nf3ahM�a����W7WNLRYaffyw4�vI�7WYGR�aYV�+�2w��+��RLH�ar�Jb6�hRXxJ��Y�AM�Jf+�KbhYs6k�sI8IKV6�Lr2wfV8YXVYj�fyN�I���I3A��63�c��Y�6��Ra���faZVfN��JIYWNIsu��n6y�J�8�����K��a�WNG�z�����Z�y�YIWN�b6IYhzIdbGwKh���aW��I��h�fa�8�NYx����+IY�6IG�W��fvI��J�J���Z���YRk�v8��h���YIf��Iv�YRNI�bYxyw����W�J�J�f�Z�f�Wrv��hzIdbGHGayw�����Ra�Y���KfyNY���Y�LH�ar�Jf+w�IxHs68�s�YjYV6�Kf2�Xf4YfInI�fyN�f��WI3w2b63�zy��V�wfV��RINIL�VjKzM�s��IsbNwYfMIKzkaZV8Ihf�w���Kb�ah�b��s�HJf+�YIV�JRzH��d�nR7HL�h�JWL�f�k�f6N�Xr��4fWH��b�YWf�G�v��R3wHbGH�W�4�LI�AJI���3��fN�VvI��LH�ar�Jf+wZR�I��LH�ar��a7�Kf2x�zCH�I��YVb�Xr��4fWH�����RN�KzHx4h4NKfL�W67�Lf�YRVMNX7J��WC�GI3�Y�LH�ar���Zw�IV�JRLH�ar�Jf+�L6��J68YfAW�nRNAnzVx+rLHh�Hw�RN�Gx�wh�CN�WYwnV8�Lrfw���HWx4HJf+�YIV�JRLH�adj�6N�XRXw�xLHh�Hw�RN�Gx�wh�4N��dwsbw�hHR6kNhaL���v�Lf��W�W��V8af6YAZIN�4��HWaZ�JWC�GI�x�zW�s���nV+��bX�h��YfIYI��vw+���LaZYR��j�b�I�I��4�M�nWnAJb+�L6��J68YfAW�nRNAnzGjh�hHWaZ�J6�XRXw�NMN�A�I�b�AJbV�JRLH�cMHJa6�YIV�JR�H�f�HJf+�YIV�JRzH��dI�fG�YzV�WIx����anh�N�I���I3A��Gjnk��4�8�Y�LH�ar�Jf+w�IxxWV8N4Va�4��I�uWAh�MaYVbjX�WA��W�nfJaf6f�+�J�J7WYX�+a��W�+�WA��W�nf�ahM�a����W7�N�Avaffyw4�vI�7WYGR�aYV�+�2w��+��RLH�ar�Jb6�hRXxJ��Y�AM�Jf+�KbhYs6k�sI8IKV6�Lr2wfV8YXVYj�fyN�I���I3A��63�c��Y�6��Ra���faZVfN��JIYWNIsu��n6y�J�8�����K��a�WNG�z�����Z�y�YIWN�b6IYhzIdbGwKh���aW��I��h�fa�8�NYx����+IY�6IG�W��fvI��J�J���Z���YRk�v8��h���YIf��Iv�YRNI�bYxyw����W�J�J�f�Z�f�Wrv��hzIdbGHGayw�����Ra�Y���KfyNY���Y�LH�ar�Jf+w�IxHs68�s�YjYV6�Kf2�Xf4YfInI�fyN�f��WI3w2b63�zy��V�wfV��RINIL�VjKzM�s��IsbNwYfMIKzkaZV8Ihf�w���Kb�ah�b��s�HJf+�YIV�JRzH��d�nR7HL�h�JWL�f�k�f6N�Xr��4fWH��b�YWf�G�v��R3wHbGH�W�4�LI�AJI���3��fN�VvI��LH�ar�Jf+wZR�I��LH�ar��a7�Kf2x�zCH�I��YVb�Xr��4fWH�����RN�KzYYsR�HhIH�YabxXr��4fW�RxVIJW+�JbV�JRLH��4HJf+�YIV�JRLH�ar���v�Lf��W�W��V8af6���fV�W7MN�I8jhz�aG6��J68YfAW�nRNAnz3��8Z��fr�Jf+�YIV�JRLN�WY�nxNHL�V�W7MN�I8jhz�aG6h�KzZYfakAnV��XV��ZI�Hh���Kab�Kz2ws�M�YWYNhWn��a�Yb4H�I8IYx7YK�2��I�N4V�j�6G�L���KM�Yf�4jR���faxsRM�sI8IYx7YK�2��I�N4V�j�6G�L���KM�Yf�4IW���f3�ZIL��aZ�J6�XRXw�NMN�A�I�b�AJbV�JRLH�cMHJa6�YIV�JR�H�f�HJf+�YIV�JRzH��G��Iy�J�6�YRL�dbG���y�Hb��WInAn����c�NYav�v8��h�G�RWNYa6��IXA��G�7��Hb��WInAn����c�NYav�WI��s��HK6fNYa6�YRY��R��Jf+�YIV���LaGr�H+�MjG�W�nfJa�z6�X�V�4hWAf�a��baX�z�4cZaZfaaYR��4�MaK��H�RdahM��+����MWaKJ�aGR+�+�3�4�W�+7�a���w�sv�X��YR68NK��wYzvwKW4a���Ihf�wnkJ�nW8Nhx�Ihbswn��YnbWafr�wJfR�hWW�J�4��R�A2bfA�WNYI��Y�LH�ar�Jf+w�IxHsVkN�WnIsf+�YbhxWNJ�sadjKx7HLr2wYaLaGr�H+�MjG�WYYRnaYs�a�a6�YIV�JRLH�fd�Yab�XrhYs6WH�I�IK7vjnz��4xLaY�6����AYN��db�a�6W�Yx7HXR��H8��h�G�Zaf��rM�YR3wHbGH�W�4�LI�AJI���3��fN�VvI��LH�ar�Jf+w�IxHRV�N�J���a��h�fxJ�8NJ�HAn7vanA�Yfa�ah8�IX��AY7WYY��aYV��4�2���W�dbkaY�Iha6�YIV�JRLH�f�Iha6�YIV�JVZ�RI�A�RG�YI�wf�WY�aHAn7vanI��4�Z�R�H��6N�+r3�W7MYf�k�sbxw�IV�JRL�GI��Jf+�YIV�JRLH�I8w�f+��bhx��MNZhM��RxL6x�WV6�4VYa�fb�Y�Xw�R�HWa8aJa6�YIV�JRLH�ar�Jf+�YIV�WVCNfIx�Wr��Y���WV6H��zjhf+NZ��HRV�N��aIRr8�Yb�YR6MY�V�I�6��L6�xW�4Nhad�nV��KfXw�fkYhI��n�4�YI��J�L���H�WcMws��xf��Y+RHxfIn�YI��4R8NZfdIn�vN�I�j�x��sIYanxsAJbV�JRLH�ar�Jf+�YIV�JRLYf�kwRf���b��XR��sar��74�XrXHRNM�sar��ab�XrhYs6WY+a��na6�4I+��RLH�ar�Jf+�YIV�JRLH�I8w�f+��bXw�NM�R��I�c4YK�X�����RxrAn�Zw�IV�JRLH�ar�Jf+�YIV�JRLH�ar��x�f2��aLNKWY�JfR�Xx��f�Z�sI8IKV6�r2YsV4NXVHwsb+H�IV�Jf4H�aHIKxN�LIhYRRMHWx4HJf+�YIV�JRLH�ar�Jf+�YIK�Y�LH�ar�Jf+�YIV�JRLH�adj�6N�XRXw�xL�s����6�AJbV�JRLH�ar�Jf+�Xf+��RLH�ar�Jf+�YI��Z��Yf�4HJf+�YIV�JRLH�ar�Jf+�YI�HRV�N��aIRrbxKb�w+f�N�IYA�V+��f��4�Z�R�x��x�Xxh�JR��sIYanx+HGryI��LH�ar�Jf+�YIVH+r3H�ar�Jf+�YIV�JV�Yf�H�YabanIhHskzYfx4HJf+�YIVH+r3��fr�Jf+�G�3�Y�3H�ar�Jf+�GRV��RC�J���Yh�N�fv�WIxA��N�fGxKb��Zx8��I�IffNHK8�HKW�aY�W�X��af�WY�I8aGVy�ha6�YIV�JRLH�fswV�wK��aR��IY���R6Hhz�Ynz6NXVnj�6yN�6C�YfsIK�6��8��J�M���JAK�����Zw�IV�JRLH�a��WR7HKzhHR��NKfd�Y7v�Ga��J�W��fr�Jf+�YI3��Vr�sIkjY74�6Vx�NJY�VYI�xw�2��xMws6�wZ7�3�W6A�8�+Ivw�V�nzW�n6�IX�7wYI��sbV�JRLH�arA�b6�sbV�JRLH��d��fbjr�j�Vb�RAW�Kxw�2��V�Y����f6Hhz�Ynz6NXVnj�6+�Zr+��RLH�adaJa6�YIV�JRLH�ar��RGYY�V�WV�Yf�a�Wr��Ybhx��MNZhM�WfG�KfN�J��YfI�AJb+HLr2�W�LNhI8jKx+�Gx��JfMHW�4HJf+�YIV�JRLH�ar�Jf+�YIXw�NM�R��I�fYK�2Hs�8�ZI��Jf+�YIV�JRLH�cMHJa6�YIV�JRLH�ar�W6b�Gf3�WVM�RI�IKxGa�r3�WV�Yf�aAs���Yb��+xZ�Zfr��R��x3Ya3H�ar�Jf+�YIV�JRLH�ar��RGYYI3Hs�MN��dIKa���bXw����ZfHAsz�xKx��JR�Y�IH�Ysv�X��w�fkN�Wxwhb�aI3Ya3H�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�4��aY�zHWfG�Kf��fNWYYJ��nab�n��ARr8�nRNwG�WYn�vAXI�IKsZ�Z��ALrWaY6�ALR�wZ�M�nzkN��bA4��HJf+�YIV�JRLH�ar�Jf+�YIV�JRLH�aH�nRw6��+�kYhI��K�v�nz2xZI�HYW8IR6��L6�YRRLY�7�IszbxL��Hs6�N�IxI�fG�Kf��fNWYYJ��nab�G���J��YYb8�fV�HGryI��LH�ar�Jf+�YIV�JRLH�ar�Jf+�YIX�L�8Yf�rwJW��4I+��RLH�ar�Jf+�YIV�JRLH�ar�Jf+�Lf�YR7zN�JJ��x7HXR��a3H�ar�Jf+�YIV�JRLH�ar���xw�IV�JRLH�ar�Jf7�sbV�JRLH�ar�Jf+�Lf�YR7zN�JJ�W6bxLaX�f�Z��fr�Jf+�Xf+���LH�ar�Jz�wZR+��RLH�ar�Jb6xrLH�x8�+IM�R6Hhz�Ynz6NXVnj�6y��6bIYR�w2b6��8��J�M�YR�wRR��Jf+�YIV���L����wnx7�Lf2��V6NX7�AW6GxL�+��RLH�ar�Jb6�hRhx���NXahjhfR�Xx��f�Z�sI8IKV6xr8HK��AXN�wYfMIKzkaZV8Ihf�w���Kb�ah�b��s�HJf+�YIV�JRzH�h�HJf+�YIVHs7zYYW�ARf��KWh�4�C�sI8IKV6�L�h��MM��IH���v�X��w�fkN�WxwJbxw�IV�JRL�GI��Jf+�YIV�JRLH�I8w�b+xYbXw���H��M�J67�K��YsWJ�nWn�Wf8�G6�xW�4NhaL�YRG�YzVxZ�MN4ax�JzGxYf3��MZ��fr�Jf+�YIV�JRLH�ar�Jf7HKzhHR��NKfdw�fGj6��a3H�ar�Jf+�YIV�J7���I��Jf+�YIV�JRLH�aHIKx�nzXwhWL�RadNf��AJbV�JRLH�ar�Jf+�KW2�Jf�HhI���hv��R2wfR�Hh��wna��4IV�WVM�n6raJf+�Lr��4rM�GI��Jf+�YIV�JRLH�ar�Jf+�Lr���R�N4aHjYa�G63�WV�Yf��Nh6�Zxa�Xr4H�ah�R6HLV�Ynz6NXVnj�6+NZrVx+���Radw�fGj6��JRbHKfdjKx7HLI2�JW�Hh��wn�zA�b��4r�YRaZ�Jkv�L�2�4x�HWar��r��nIa�Y�LH�ar�Jf+�YIV�JRLH�ar�Jf+�YI���fLN4aHjYa�G63�WV�Yf��Nh6�Zxa�Xr4H�aXIhz6NZrVx+xL��arw�66�L6h�J6��s�VwJ67HKzX�Ga�N��MjR��I�I��s�MH��M��f+N4��jYMZ��fr�Jf+�YIV�JRLH�ar�Jf+�YIV�JR�NXaHwW6NHL6G��rL�RadjKxGHL6hHsf�Hh��wn�zA�b��4r�YRaZ�JW+IZxa��8Z��fr�Jf+�YIV�JRLH�ar�Jf7�sbV�JRLH�ar�Jf+�Xf+��RLH�ar�Jf+�YI��WfLHJI�IKxGa�r3�WV��sIkwna��Gr��hRM�GI��Jf+�YIV�JRLH�ar�Jf+�Ybhx4RZH��M�Whv��R2wfR�HhA��nR�LfXjY8���ar3Jf+�L�hx��8N���NhWY�nIy��R�NXaHwW6NHL6GjhVh�ZI��Jf+�YIV�JRLH�ar�Jf+�G����fWIL�f�GVW�4xWIYJZw��6IGry�Hb��WInAn��jKzxw�IV�JRLH�ar�Jf+�YIV�JR��sIkAna��db��WV6Y+a�wW6Gja3��aLN�Azwsf7�Kzh�JR��nfH�nVN�GryI��LH�ar�Jf+�YIV�JRLH�adjKV�KzX��I�HWx4HJf+�YIV�JRLH�ar�Jf+�YIXw�NM�R��I�f7�Lfh�W�Z��fr�Jf+�YIV�JRL�fR��Jf+�YIV�JRLH���wnx7�Lf2��VbY�I�jf6�AJbV�JRLH�cMHJa6�YIV�JR�H�f�HJf+�YIV�JRzH��f�Z�f�J�W���ZwY�GIYWW�Z�C�WAWwn��anfW�YRk�WIh�J����c���aW�Y�LH�ar�Jf+w�IxHsVkN�WnIsf+�Ybf�JVMNK�HwRkv�LfV���+IY�fNY�7�Kz�YhxbwJfXHJf+�YIV�JRzH��dIWfNHK�2�JRLHh����RGa�r���x8N�fswKIvwK�bwW7Ja�kv���z�J�+��RLH�ar�Jb6�hRXxJ��Y�AM�Jf+�L�h�4R6Yf�V��RGa�r���x8N�fswZNWa��WaXa��ZV�wncZIK�bwWxbAhb7wYz2x��HG6MI��CwZVz�nbW�n��a4I������J7�H4NJa��zx��Mj�sWNha�a�f+�+��wYNWAnf���R��Jf+�YIV���L���d�nabxLxV�JR�Yh�Yj�fN�Lr2�XxLN�AW�R6G�nzX��x�IX�ZwL����zMHLVbAhb7wKIvwKzkaZ��wY��AnMZ�rbARxbw+I2Anz23Z��HG68�f6N�Z����bW�VbAX��wL�WH�bV�JRLH�arA�fR�Lf�YR7zN�JJ�Wfb�G�2xW�kNKfswYf�xnz6Ad��IX��wnJWa�rXwf�8a4I������Zc��Ra8aY�zNX����NWNLf+aYV6a+����cWwJI���fr�Jf+�YI3��Vr�sIkjY74�6Vx�NJY�VYI�xw�2��xMws6�wZ7�3�W6A�8�+Ivw�V�nzW�n6�IX�7wYI��sbV�JRLH�arA�b6�sbV�JRLH��d��fbjr�j�Vb�RAW�Kxw�2��VCNhI8�KR���bf�ZILHh��AJf+�L�h�4R6Yf�V��W�I�I�xW7zN�Wn�nRG�G���sRM��fr�Jf+�XI+��RLH�ar�Jf+�YI�x4�zNfI�wna6��fV�WVW�RAz��6NH��a�+����fHIYxG�Yf�YshZ��fr�Jf+�YIV�JRLHhIH�YabxXr��4fWH��M�J6�XRXw�NMN�A�I�rsxH�a�n��Yh�Yj�fN�Lr2�X�Z��fr�Jf+�YIV�JRLHhAW�YV���fVxssZ��fr�Jf+�YIV�JRLYhA����Zw�IV�JRLH�ar�Jf+�YIV�JR��sIkAna��db��WV6Y+a�wW6Gja3�J6MNK�d�Yx+�Xr�YsRLHh�L�J67��f3�a3H�ar�Jf+�YIV�JRLH�ar�J6a�R2�Zav�ZI��Jf+�YIV�JRLH�ar�Jf+�Lr���R�HhAW�YVGHKzX�LA�HhAW�YV�w+I+��RLH�ar�Jf+�YIV�JRLH�ar�Jf+�KfXw��kNG64HJf+�YIV�JRLH�ar�Jf+�YIK�Y�LH�ar�Jf+�YIVH+r3H�ar�Jf+�YIV�J74N�I8AW6���b2wf�JYYWYj�r6�L�h�4rM�ZI��Jf+�YIV�JRLH���wnx7�Lf2��7MN��Yws�Zw�IV�JRL�fR�HJf+�YIV�4�zH�I��Jf+�YIV���Lahh��4���WAWNhI�aYVb�X����A��+��a���Hsa6�YIV�JRLH�fd�Yab�XrhYs6WH�InjYabxX�VxL�4N�IH�nR+I�I�xW�MYXVk�R��xn��a�x8w��Zwa�3�zWYf��wY��wVv��z�wZ6MA��CIL�VjKzCYf��Ifh4�Z��AKzLad��IsbrHJf+�YIV�JRzH��d�nR7HL�h�JWL�f�k�f6N�Xr��4fWH��b�YWf�G�v��R3wHbGH�W�4�LI�AJI���3��fN�VvI��LH�ar�Jf+wZR�I��LH�ar��a7�Kf2x�zCH�I��YVb�Xr��4fWH����Kab�Kz2ws�M�YW�wJbxw�IV�JRL�GI��Jf+�YIV�JRLH�aHj�6N�YI��JR��sIkAna��db��WV6Y+a�wW6Gja3�Jk4NfadjKRNAnzV�Y8Z��fr�Jf+�YIV�JRLHhInjYa6��fVxLxh�ZI��Jf+�YIV�JRLH�I8w�f+�n62�W�W�saL��ab�L63�+xZHW�4HJf+�YIV�JRLH�ar�Jf+�YI�w�f�YfIn�KR+�Y��Hs68NZfd�na��Ybhw��4�RI�An�Zw�IV�JRLH�ar�Jf+�YIV�JRLH�ar��RGYY�XHs68YXs�IRfN�K6���I��fkNW6+AZrf���XYha4As6+�n���JR��nWnA�xG�GaV�WVJY��H�KR�L63��MZ��fr�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar��RGYY���XhzNK�xwJ6�Y�hxJ��Yf�aARrC�63Ya3H�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YI�xJ��N�fr��fnAJbV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�WVJY��H�KR�L6Gjh�h�sR��Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�J6�Y�hxJ��Yf��NhW8�a+��RLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jfn�+I+��RLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�JfHLf��J�v�ZI��Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf7�sbV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf7�sbV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf7�L�X�fNMHJaHIRfN�K6�xW��HWx4HJf+�YIV�JRLH�ar�Jf+�YIK�Y�LH�ar�Jf+�YIVH+r3H�ar�Jf+�YIV�JVMYKfrwW6G�GIhHnb�HhInjYa6�ZrfI��LH�ar�Jf+�YIV�JRLH�ad�nR7HL�hj�VWYf�X�WVN�n6�Ys7MN�A�I�b+�K�CAK�8�X�2wa�3�zWYf�8AJzvw7Z�KzM�s��IsbNIL��w���wYzJNJI�If6�Y��jLa��sar��ab�L63��8Z��fr�Jf+�YIV�JRL�fR��Jf+�YIV�JRLH���wnx7�Lf2��R�Y���j��Zw�IV�JRL�fR�HJf+�YIV�4�zH�I��Jf+�YIV���Lahh��4���WAWN���a�hv�+�Jw�hWAf4a�h��Ja6�YIV�JRLH�fd�Yab�XrhYs6WH����nabw��I��LH�ar�Jf+w�IxHRV�N�J���a��h�fxJ�8NJ�HAn7vanA�Yfa�ah8�IX��AY7WYY��aYV��4�2���W�dbkaY�Iha6�YIV�JRLH�f�Iha6�YIV�JVZ�RI�A�RG�YI�wf�WY�aHAn7vanI��4��N�J�AR6nYKzXwh�MNX7JwJbxw�IV�JRL�GI��Jf+�YIV�JRLH�aHj�6N�YI��JR��sIkAna��db��WV6Y+a�wW6Gja3��x�Yf�HI�ab�GIVHs6��nW��YRGjnb�wf68N���An7va�Xw��4YfInjf6�NZryI��LH�ar�Jf+�YIVHs68�s�YjYV6�YbXw����Z6d�s�Zw�IV�JRL�fR�HJf+�YIV�4�zH�I��Jf+�YIV���Lahh��4���WI��J�Ca�6�I4���hR+��RLH�ar�Jb6�hRXw�NM�R��I�f7�XrXwYzWYLI��Jf+�YIV���L���Hw�ab��aXj�Vn��I�wna7�Lr2�XxLaf6�YX�3�ZNWwZR2a�ffaX�2j��WNKhJa�M��+��xZ�+��RLH�ar�Jb6wZ�+��RLH�adI�xGHLa��JWLYK�YI�h4�Lr2�XxLNfIn�hb+�JbV�JRLH��4HJf+�YIV�JRLH�ar��ab�L6Vx+rLHh�Hw�RN�Gx�w���YYM�jKR�La2��I�Y�Vn�sf+�G6fYsW�Y�V��n�4�G�2w�NM�+ahAWfGaI��h��Yh��wn�4�Y�3�a3H�ar�Jf+�YIV�JV�Yf�H�YabanI�Hs68N4R4IW��AJbV�JRLH�cMHJa6�YIV�JR�H�f�HJf+�YIV�JRzH���HGRW�Z�CI��LH�ar�Jf+w�IxHsVkN�WnIsf+�La2�h�kNhN���RNHYIX�WV�N�AWwhfy�v����IJw���HGRW�Z�C�WI2IL�fHKc��Jf4��RXAh�GNZay���J�YfR���bHn6y�YRk���2AL�G�Yzxw�IV�JRLH�a��WR7HKzhHR��NKfdjKx7HLr2wYaLahM�����IY�W�dbhaYsvY���jYuWAf4a�6�I4�WA��WYL��a�xbH+�MN�cW��vahzfIX�2ah�+��RLH�ar�Jb6�hRhx���NXahjhfR�Xx��f�Z�sI8IKV6xr8HK��AXN�wYfMIKzkaZV8Ihf�w���Kb�ah�b��s�HJf+�YIV�JRzH�h�HJf+�YIVHs7zYYW�ARf��KWh�4�C�sI8IKV6�L6��J68YfAWxRfN�XrhYs68HJaHA�7v�K�2xXf�N��VAsa6�YIV�J7Z��fr�Jf+�YIV�JRLHh��wnVG��r��XfbN�I�wRr�NZ�X�fVCY����Jz�NZ��xJNMYfaLwfIG�YbN�n�MN4s�whb�aGf��4��HJxrAJ���4�3�4x��n�dI�6�N4I+��RLH�ar�Jf+�YI�HRV�N��aIRrbxKb�w+f�N�IYA�V+���X�h��YfIYI�hvxLIV�4RZH�aXI�67HKz2�4hMYfN�wYRGjnz3�a3H�ar�Jf+�YIV�JR�N�WYjhfs�nI�HRV�N��aIRr��XR2xZ�N�I�wsb+�Lf��4R��sIY�f6bwa��ZILHhI�IfhvxLaN�fVMN�f�aJa6�YIV�JRLH�ar�J67�K��YsWJ�n��wnVG��V���6MNhI�wJ67HKz2�4hMYfN�wYRGjnz3�a3H�ar�Jf+�YIV�JV�Yf�H�YabanI�Hs68NZ64HJf+�YIVH+r3��fr�Jf+�G�3�Y�3H�ar�Jf+�GRV�WA�wn�Gjn6Zw�IV�JRLH�a��WR7�K�Xw��JH�aHA�7v�K�2xXf�N��V���4�Lf��4��H���3��f�Zxb�WA�wn�Gjnk��Y�kIYW6���GHGayNYav�WIXAJ�f�Gxf�����YW7�h�fNY�y�YVvI�A�wRR��Jf+�YIV���L���d�nabxLxV�W7MN�Azwsfw�hxW��Yf�V�4�2�fNWYYhvaGrf�X���vuZaZfaa�hv�X���h�WaK��a4I����2I�h�H4��a�z6ahW��ZAWaK��a+x+�Ja6�YIV�JRLH�fd�YaxLf��4rLHh��An�b�YIX�WV�N�AWwhfy�Y�kIYW6���fNY�y�ZIWI�I�I�u��n6yNG�8�WIb��frjsWC�ZIfxna���u��n6yw�Ib��fWAs��YG7��Z�C�WAWwn�GHY�W�Hbz���y�dby�YILw�IV�JRLH�a��WR7�K�Xw��JH�aHj�fN�KzVHs�MN�W8I�6�xn�ManVMwZr7wKW��nWva�x��YV�wK6��L��HG6MI��CwZVz�nWbH4�L�h�z�Ya7�n6LH�f3H�ar�Jf+�GRVx�V�Yf�H�YabanIX�WV�N�AWwhfy�H�8�WI2wL��3��f�Zxb�WIXA���NZVy��a4�����s�6wK�WwYf��YRG�db�aZxW��av�WA��sR��Jf+�YIV���L���Hw�ab��aXj�Vn��I�wna7�Lr2�XxLaf6�YX�3�ZNWwZR2a�ffaX�2j��WNKhJa�M��+��xZ�+��RLH�ar�Jb6wZ�+��RLH�adI�xGHLa��JWLYK�YI�h4�Lr2�XxLN4V�j�6G�L��w��CNXa��Jb+�La2�h�kNhN���RNHGaV�W7MN�AzwRr�x�xa�ZILHh��An�b��f2wf�4NhaZ�J67HK�hxW��NK�YA�V+�JbV�JRLH��4HJf+�YIV�JRLH�ar��ab�Lx2�WV8Y+V�AnV��f�j�f�YhI��nab�G��j���Y��Hwsb+�R62�WVK�JI8jf��NZr�wh6kNKWxwJW+I4�y�nbM�nfXIYVN��r�jLa3H�ar�Jf+�YIV�JR�Y�7z�Jfs�nI��J�CN�WYwnV�HKz��Xf�Yharwhz6�Lf��4R��sIY�f6bwa��a3H�ar�Jf+�YIV�JR��sI8IR6���fVx�zW�s���nV+��bhx�zJYfa�aJa6�YIV�JRLH�ar��RGYYI3�J�8Nf�d�n����bhx�zJYfa��J66YYI�HRVMNfI��JW+w+I+��RLH�ar�Jf+�YIV�JRLH�aH�KVG�YI��XrLHLfrIszN�Lr2�W�JNhI8InRN�YI�j�x��sI8IR6�AJbV�JRLH�ar�Jf+�Xf+��RLH�ar�Jf+�YI��WfLHJanwnVN�Xrf��I�N4V8af6��ZrfI��LH�ar�Jf+�YIV�JRLH�ar�Whv�YbV�4��H�aX�Jz��G6�Yr8H�aXI�67�Lrfw��Z��fr�Jf+�YIV�JRL�fR��Jf+�YIV�JRLH�I8w�f+�����4RZ�s��wJ67HK�hxW�MHW�4HJf+�YIV�JRLH�ar�Jf+�YI�xJ�JYharI�r��Y�V�4rJYYW8�szNHK�hxW�LHLhJ��abxXr��a3H�ar�Jf+�YIV�J7���fr�Jf+�YIV�JRLHh��wna���fV�W7MN�I8jhz�aY��xJ6KN4VkwnVI���xJ�JYha�aJa6�YIV�JRLH�ar��RGYYI3�WV�Yf�a�J66YYI�Hs68N4R4IW���+f�j�f������R6G���wYzW�+a�wJ�6�L6��J68YfAWj�6G�L�Xw�s�H�AWIKx+�KW2�W�WYhaXAn�Zw�IV�JRLH�ar�Jf+�YIV�J7MN���IKx��L��YnaL�f�k�f6N�Xr��4fWHJI8Inaj��xW��HY64�Jf6I�I�Hs68NZf�As�Zw�IV�JRLH�ar�Jf7�sbV�JRLH�ar�Jf+�YbXw���H��M�J67�K��YsWJ�n�d�YVjsI��Z�8HJaHj�6G�G�hxW�KYKW8AW6�I�I�xZ��Y�VnAWcv�LrX�Y8Z��fr�Jf+�YIV�JRLHh�Hw�RN�Gx�wh68NfA��f6�YLr2xW��Hh��wnVG��r��XfbN�I�wsb�AJbV�JRLH�ar�Jf+�Lf�YR7zN�JJ�J67HKzXjLa3H�ar�Jf7�sb+��RLH�arIhb6wJbV�JRLH�arA�fy�Gx6��A��n���Kby�4xzI�I7IK���Lay�H�8�WI2wL��an6f�4xWIY�MIG�fNY�y��I���Rfwhu��n6y��WLIYRfwh�63�zy��V�I��JIG�fA�W�YRk���Z�vb��Y�y�4�bIY�J�Y�G���f�Jf4���4Ah��anff�4xzI�I��Z���Lay�G��IY��AL�fNY�y��Vk�YRNI��YxWw��J�W�JIG��In�Lw�IV�JRLH�a��WR7�K�Xw��JH�aHIR6N�K�2�fRLN4aHjYRGaY�V��RXAh�fj���YRk��RGIY��jKzf�WRC�Y�LH�ar�Jf+w�IxHsVkN�WnIsf+�LI�Ys6kNf�a�WfNHLf�YnbLaGr�a��v�WNWNH8WaYVz���WA��WYHb+aGrGI4AZj�JWwZf�aKRaX�2A��WN�V�aGr��4��jYuWARIZa�IWx�����W+��RLH�ar�Jb6�hRXxJ��Y�AM�J67�Lr2�W���R�x��RGa�r���x8N�fswLV�wKz�wW��wY��wZx�YnW8a�Vbw+I2AnMZ���HG68�f6N�Z����WvaL��A+��IL�VjLrWaY6�ALR��Z��wZ6axsRZaGs�AX�����Jasa+��fr�Jf+�YI3��VrNJInj�fG�nI�x�zW�sIYjYxbxLaYx�zJYfadAnV��Kz��f��H��6�GVW�G��IYRKAn�6IK�W�YRk��WNIs�bNYzyN��JIYWNIsu��n6y�J�8�����K�G�ZVW�Y��IH8��h�ba�Wy�G�M�W�JIY6�IJWs�GIa�WA�AL�fwKbW�4�C�WI�AZ6�IJWyNG�z�����Z�y�YILw�IV�JRLH�a��WR7HKzhHR��NKfd�na�HK�f�JR�Y��H�nabwnfhYRV8a�z6aX���fNW�nfzahfz�4�JH4�WAn�vahM�����IY�WYGfna�6+AX�VA��Was8WaYs�a���x�cZaZfVa�h�IX�V�4hWN�a�a�z6A�AZj�kWaGRRa�z6���ZI��WARIZa�IWx�AZj�W�xJNM�s��ARf��Xr����JIG�G��WW�4xzIYf3�Z�f�Z�f�Z��IYRrAdb�YxW�H�8�WI2wL��aK6y��IJ��RYAJ���LVW�4�C��Ry�Z�GHYM�wY�WI�A��28��nfyN��4���Z�s�fNY�yw��vI�Ix�K���nff�4xC��Vk�s�HjYRGHXRhxW��Ihbswn��Yn�bwWx�I�fswY���L��HG68Asz7wZx3Yn��a�x8w��ZwLR2AKW8Nhx�I�xxHJf+�YIV�JRzH��d�nR7HL�h�JWL�f�k�f6N�Xr��4fWH��b�YWf�G�v��R3wHbGH�W�4�LI�AJI���3��fN�VvI��LH�ar�Jf+wZR�I��LH�ar��a7�Kf2x�zCH�I��YVb�Xr��4fWH��h�nRN�Xr��4��HJaHIR6N�K�2�fR4H�InjYabxX�V�WVZY����nVN��fG��r4H�aH�nRG�Yz2�WNM�RxaIJWs�GaV�WVMNK�Hwna�YK�2xfVMNfI������GIaxsRZHWR��Jf+�YIfI��LH�ar�Jf+�YIVx�zbH�aL�nVG�Xr�x4f�Y+VYanRN�XrXjYI��sIkAna�I�I�x4R8�sIkIf6+�ZrfI��LH�ar�Jf+�YIV�JRLH�ad�nR7HL�hj�VWYf�X�WVN�n6�Ys7MN�A�I�b+�KW8AK�bA4�NwnbV��bWH�a8Af6Cwn�3�L��HK���nfHIR6N�K�2�fRM�ZI��Jf+�YIV�JRLH�cMHJf+�YIV�JRLH�ar��xwx��4hz�sar��fw�hHR6kNhaL��xwx��4hz�sa�aJa6�YIV�JRLH�ar�J67�Lr2�W���R�x�sW+�YW���R��sI8IR6G��Rhx+rZ�ZI��Jf+�YIV�JRLH�aHAnV��KzXwf6kNh�HAnVG�YI��JVMNK�H�ffGI���x�zW�sIYjYxbxLaYx�zJYfa�aJa6�YIV�JRLH�ar�J6w�hxW���nWnAW�wx��I���arw�66�Yb��4�MYf���ffGjR���4R8�RxRIJ�Zw�IV�JRLH�ar�Jf+�L6hxJ���s�HAnVG�YI��JVMNK�H�ffGI��2��zCN�J��nRG�Yz3HRV��RI�AsbCxGIaxsRM�ZI��Jf+�YIV�JRLH�IHIhf7AJbV�JRLH�ar�Jf+�YIV�JRLHh��wnx7�Lf2��s�H�I��nVjn�hYs�8N�M�wYxGaY6N�h��N�Wna�bnA�bhx��MNZfZ�J6�Yzhx���YhNMAJf+�LI�Ys6kNf�aAs�Zw�IV�JRLH�ar�Jf+�YIV�JVMYKfrwW6G�GIhHnb�Hh��wnx7�Lf2�YbMH��4HJf+�YIV�JRLH�ar�Jf+�YIV�JRLH���IX���hkWNX�na�z6���zaXsWAn�vaf6f�+��N��WA��raG��wsa6�YIV�JRLH�ar�Jf+�YIV�JRLH�ad�Y�vjnz�YsR�HhI8IYx�Lfhw��4�hI8IR6��4I+��RLH�ar�Jf+�YIV�JRLH�cMHJf+�YIV�JRLH�ar�Jf+�YI�xJ�zN���wnV��f���4R8H��M��RGa�rhw��4HJAzARh4HL�hx�zJYfak�na��Kz3�JRzH�xRIJWs�GryI��LH�ar�Jf+�YIVH+r3H�ar�Jf+�YIV�J74N�I8AW6��nz2Ys7M��aL��ab�XrhYs6WHWarw�66�Y��xJ�zN���wnV��f���4R8�RaHjKxxLfhxfVMNfI��s67�Lr2�W���R�xAsb�AJb+����H�ar�Jf+�YIV�JVMYKfL�Wh4�LfXw��W�s�HAnVG�Gx�Hs�MY����R�wx��+��Hh�HAnVG�L�hYRRM�GI�Ihz��YIV�JRLH�ar�Jf+�YIVHR6kN�M���xG�GI3���4Y�I8�nxw�VxWkzNKW��nRG�G�VHRVMNfIYIKxN���V��aWHhAzwnx����4x��sar��axLf��4R��RaXIYR��L�2w+f8NKW�If6�Y��HsVkN�WnIna�jsb��+fyY+RY�WVY�hxx�hVn�hN��fx�wsx��RVnHW�Jwhz+�Yb��4�MYf���ffGjR���4R8�RaXI�6w�hxW���nWnAW�wx���8Z��h�Ihf+�YIV�JRLH�ad��a6�YIV�JRLH�ar��ab�XrhYs6WH�aHj�6N�XRXw��Z��fr�Jf+�Xf+���LH�ar��a7HLrhw�NMYfadjKxxXr��JWLYK�YI�h4�Lr2�XxLNJ��AnV��K�X�YI�NXV�A�bNAJbV�JRLH�ar�Jf+�Kz��K��H�aV�na7HKz���hZ��fr�Jf+�YIV�JRLNJ��AnV��K�X�YI�NXV�A�b�AJbV�JRLH�ar�Jf+�Kz��K��H�aX�sM4�Lf��+x��ZI��Jf+�YIK�Y�3H�ar�Jf7�Lf�YR6k�sI��W6��L���WVMNX7J�WfG�KfN�J��YfI�AJb+�K62�WRM��fr�Jf+�XI+��RLH�ar�Jf+�YI�xJ�JYhar��f+�n��xJfL�R�a�J6�anbhx��MNZhM�Wcv�KzhwYzCYf�Jwhf7�K���Z�4H�aXI�6�Lx�xa3H�ar�Jf+�YIV�JV8��IY�hb+�K62�WR4H�aHIKxN�LIhYRR4H�aHj�6N�XRXw��K�nWnj�b�AJbV�JRLH�ar�Jf+�Lr���R�Hh��wnx7�Lf2w+hvY��V�Rr��I3Ya3H�ar�Jf+�YIV�JRLH�ar��RGYYI3xW�JNJ�Ha�b+�L�hYRVZ�R�xAsbNAJbV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf7�K�Xw�h4H�AWwnx��h�fxJ�8NJ�HAn7van����f�Idb��KIyNY�M�YR�A2bG�GrW�Z�6�YfC�RIn�WfW�WaC�WA��vbGHK6f�H����fk�h�dH��y�YRk����A���HG��N�fv�WIxA�GxL��NYa6�YR�Adb6�n6�Xx��Wr8��74�Z���n�bwWxbwff�AnW�x��HX���nfH�KVG�GryI��LH�ar�Jf+�YIV�JRLH�ad��a6�YIV�JRLH�ar�Jf+�YIVxW�4N4VYaJa6�YIV�JRLH�ar�Jf+�YIV�JRLH�ad�nR7HL�hj�VWYf�X�WVN�n6�Ys7MN�A�I�bwxXxZ��YhI�wJfCA�IV�GILHhA��Yx7�XRh��bWHhI�IR6+�4I+��RLH�ar�Jf+�YIV�JRLH�cMHJf+�YIV�JRLH�ad��a6�YIV�JRLH�ar��ab�XrhYs6WH�aHIKxN�LIhYRsZ��fr�Jf+�Xf+���LH�ar�Jz�wZR+��RLH�ar�Jb6xn�CAK�8�X�2wZVva�zMHY�8If6�wnf���z4YH�8I�6NwYf�xnW�HY�b�LRK�Z�ZNKb�ah�b��s�HJf+�YIV�JRzH��dj�6N�XRXw�xLN4aHjYRGaY�V��h�ws�GNK�8�s����RG�db��n�Zw�IV�JRLH�a��WR7�K�Xw�h4NZfdxK��KzXHRVMNX7J�4���Wk�Hvb�aY�zNX����NWNLf+aYV6a+����cWwJI���fr�Jf+�YI3�Y����fr�Jf+�LIXwYMvY��HwsfYXR2w��MN�A�I�fn�G6hHs6NXa��Yab�K���JNMY�VLwJ67�XrXwYzWYLf�HJf+�YIVHa3H�ar�Jf+�YIV�JV�Yf�H�YabanIXHs68YXs�j�6N�La��J�8HJ�4whMzIZ��jYa4H�aXIf�+a����r4�ZfhNJz�NZaV��xX�nfh�sz+�L6hHs6MNKWXAs�Zw�IV�JRL�fR�HJf+�YIV�4�zH�I��Jf+�YIV���LaGR+a����L��HGR+a�x3a��2x��WwJa�a�h�H4���4c�H�N4a�h��4�3a28WN�a7aY7v�+��w��WNhI�aYVb�X��w�sWAf�ahfz�4�JH4�ZaZfVa�I3�4��xZ�WAdb8aY�b�4AZj�6+��RLH�ar�Jb6�hRXxJ��Y�AM�Jf+�K�hHRV��nWnIR6��L6hHs6MNKWX�4���W�WYL�f�J�z���MN�cWA�IC��fr�Jf+�YI3��VrNJInj�fG�nI�xJNM�s���WfGj+R��JV��s��AnVbN�A��db�a�6W��IR��JWAnR7aGR�ha6�YIV�JRLH�fd�Yab�XrhYs6WH�InjYabxX�V��h�ws�GNK�W�JWk��IxAHb6H�IW��aW��I�IY�6jn�f�YRk��RYAJ�fa��rw�IV�JRLH�a��WR7�K�Xw�h4NZfdxK��KzXHRVMNX7J�4���Wk�Hvb�aY�zNX����NWNLf+aYV6a+����cWwJI���fr�Jf+�YI3�Y����fr�Jf+�LIXwYMvY��HwsfYXR2w��MN�A�I�fn�Y��YRVyNXVHwn�MHX�xYR7MN�fL�WfN�XrX�4�kNfI�AJf+�K�hHRV��KWnA�xG�Gr+��RLH�adaJa6�YIV�JRLH�ar��RGYYI3xW6kNh��wsbNAJbV�JRLH�ar�Jf+�YIV�JRL�h��Z�V��W6NY��wWf�wGV��n��YG6�I���wK�VH��HG68�X�vwYW33�bW�V�IY�2wYzvwKb�A2��I���wK�VHnWCa�x�Asz�HJf+�YIV�JRLH�ar�Jf+�YIXw�NM�R��I�fnI��YnaL��I8A�xN�K�XxXfkYhI��f6Gjnz2�W�W�saLwh6w+r��4R2��NMwhz+�Xr�x�z�HWNMaJa6�YIV�JRLH�ar���xw�IV�JRLH�ar�JfwnW3�J����AzAJfs�nI�HRV�N��aIRr��LrY�Kz�YXVY�na��Zr3Ya3H�ar�Jf+�YIV�JRLH�ar��ab�XrhYs6WH��J�s�Zw�IV�JRLH�ar�Jf7�sbV�JRLH�ar�Jf+�Lr��Y�ZN�WYwfcv�Y�hxJ��Y+VnA�V+����jL�2YnkW�sb��n����Vk�s�Hj�xbxLx��4x��RaVwhz6�Xr�x�z��R�W�K�4�LfHw�f�����wRkM�Y�hxJ��HJaH�nx7�LfYw��4�RI�Asz6N�fG����YRa�3Wr6�Gr�jGILHh�kInV+I�I�x4Rk�sI�wW6N�GaVxhV��f�h�f�M�f�N�+f��h�Y�Jb�w+I+��RLH�ar�Jf+�YIV�JRLH�aHwnV�Lx��4�MNZfr��fnInxyI��LH�ar�Jf+�YIV�JRLH�adwY74HKz��J��H�aL��VGxXr��K�8NZfd�na��Yb�YRV8Nfa8aJa6�YIV�JRLH�ar�Jf+�YIV�JRLH�ar�W6Gjnz2�W�W�s��Nf����fVx4�8�fdaYRGj+RXx��ZY+Vn�Wf8�Yz2xW�JYfAW�sb+�LrhxW�J�Z6d�sz+�Ybhx��MNZf�aJa6�YIV�JRLH�ar�Jf+�YIVH+r3H�ar�Jf+�YIV�JRLH�ar��ab�XrhYs6WH�aHwnV�Lx��4�MNZ64HJf+�YIV�JRLH�ad��a6�YIV�JRLH�ar�W6Gj6�Ya3H�ar�Jf+�YIV�JRLH�ar��ab�XrhYs6WH��J�s�Zw�IV�JRLH�ar�Jf7�sbV�JRLH�cMHJa6�YIV�JR�H�f�HJf+�YIV�JRzH����Z�fN��vIYf3�Z�f�Z�f�Z��IYRrAdbG�nfW�JR���fyIdbG�nzW�G��I�I��dbG�Y8��J6C��I��2bGaYzfN�6L��RX�Y�6H�IW��aW�H8����fAZVy�4x6���JAG�G�nIWN��4�WI�A2bb�YffN�zz�YR�A2bG�GrWNY���Y���G���LrfN�6�IH8���R��Jf+�YIV���L���d�nabxLxV�JR�Y��H�na�aY�2�W�LN4aHjYRGaY�V��h�ws�GNK�8�s����RG�db��n�Zw�IV�JRLH�a��WR7�K�Xw��JH�aH�nx7�LfYw��4�RI����4�Lf��4��H��63�zy��V�wn���s����c�NY��I��LH�ar�Jf+w�IxHsVkN�WnIsf+�La��Zx8H�I�IK7vjnz��4xLaGr6IX����JWAYfka�IyH4�M��M�Hvb6a4I����2I�h�H4��a�z6af6bxLaX�f��Ihf�wn62�n�4AXI8�+x2wY��Yn�vahf3H�ar�Jf+�GRVx�VZY����nV��Ybfx4R4H����nabw��j�x8Ash4wKz3�Kz4YH�8I�6NwKW��ff��GI3H�ar�Jf+�GRVx�V�Yf�H�YabanI�Ys6�Y����4���W�WYL�fa�f�xX���Z7�HGR+a�x3a����4���sIka��zx��M�ZAWaZ�R��fr�Jf+�YI3��Vr�sIkjY74�6Vx�NJY�VYI�xw�2��xMws6�wZ7�3�W6A�8�+Ivw�V�nzW�n6�IX�7wYI��sbV�JRLH�arA�b6�sbV�JRLH��djYRNYK�hxW�LYK�YI�h4�Lr2�XxLY+VhwnxRaG��xW���Y�8�YRGInzxYR7MN�fL�WfN�XrX�4�kNfI�AJf+�K�hHRV��KWnA�xG�GaV�WV4N�IJwRrGYK�2Hs�8�sar����Ga��4�zNhIZAsa6�YIV�J7Z��fr�Jf+�YIV�JRLN�I��Jb+�La��Zx8HW�4HJf+�YIV�JRLH�ar�Jf+�YI��WfLHJaR����Ga3�J7Z��fr�Jf+�YIV�JRLH�ar�Jf+�YIV�JVMYKfrwJf��Xx2�ZIL�Rar��x�rXj����RI8YnRG�K��YRV�HJa�Asf7AJbV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JV�Yf�H�YabanIG���Z��fr�Jf+�YIV�JRLH�ar�Jf+�YIV�J7���fr�Jf+�YIV�JRLH�ar�Jf7�sbV�JRLH�ar�Jf+�YIV�JRLN�I�w�a7HKz���fJY��H�KRn�Y�2xZI�HLh��RAzadbN�Z��HLhJ�WfN�XrX�4�kNfI�I�6��nfG����YRa�whz6�Xr�x�z��R�W�K�4�LfHw�f�����wRkM�Y�hxJ��HJaH�nx7�LfYw��4�RI�Asz6�nVN�X�hH�f�Nf�CaYx3�Xc��+V�whz+�Ybfx4R4�sar��VGxXr��K�8NZfZ�W�nHh�H��f��f�H�f�zHh�H�hfMHW�4HJf+�YIV�JRLH�ar�Jf+�YIV�JRLH�aHwnV�Lx��4�MNZfr��fnInxyI��LH�ar�Jf+�YIV�JRLH�ar�Jf+�YI�w�f�YfIn�KR+�Y��x4Rk�sI�wW6N�YI�YsWLHhI8�R6G�rfI��LH�ar�Jf+�YIV�JRLH�ar�Jf+�YIV�JRLH�aHwnV�Lx��4�MN4RJ�sfs�nI2w�N4H��8AnV7�LI�HsVKY�IH��cv�La��4R8NK�xwJ6w+r��4R2��NMAJf+�Xr�x�z�HWx4HJf+�YIV�JRLH�ar�Jf+�YIV�JRLH�cMHJf+�YIV�JRLH�ar�Jf+�YIV�JRLH���wnx7�Lf2��R�YfI�wnVG�L�hHsJZ��fr�Jf+�YIV�JRLH�ar�Jf7�sbV�JRLH�ar�Jf+�YIV�JRLYfI�jf6NAJbV�JRLH�ar�Jf+�YIV�JRLH�ar�Jf7HKzhHR��NKfdNf��AJbV�JRLH�ar�Jf+�YIV�JRL�fR��Jf+�YIV�JRLH�cMHJf+�YIV�JRLH�adj�6N�XRXw�xLHh�Hw�RN�Gx�w+f�Yf�H��7v�KzX�skW���H�na6��b�YR7MN�8W�nVG�GaV�WVk�s�Hj��bxLah�W�M�ZI��Jf+�YIK�Y�3�fR�HWhvjn�X�JWL��I8A�xN�K�XxXfkYhI��f6Gjnz2�W�W�sRMaJa6�YIV�JVZN�W8�ffN�KzV�WVKNKJ��W6Y��x2�ZA�HLfXaJa6�YIV�JVZN�W8�ffN�KzV�WVKYhIY�KRG�Kzyj�R��db�HKIy�Z��IY���s�6IG�W��bk�WI�IY�6jn�f�4�C�WI�A4a8AnV7�LI�HsVKY�IH���WA��WN��fa�M��saLw�IV�JRLNJ�Y�YVwn6VxWkzNKW��nRG�G�VxXfKY�7�IY�4�Lfh�J�MHJaHIY7v�KzN���JNhaZ�J66�Kb�YR6MY�V�Asa6�YIV�J7Z��fr�Jf+�YIV�JRLHh�Hw�RN�Gx�w+fWNXVHwRc4�x2�Js�H�aHIY7v�KzN���JNhx4HJf+�YIV�JRLH�ar��x�rXj���Y+VHwnxbwn6��Js�H�aH�W6NYLr��f�Z��fr�Jf+�YIV�JRLN�I��JbYK�2Hs�8HW�4HJf+�YIV�JRLH�ar�Jf+�YI�HRV�N��aIRr8�Yb�YR6MY�V��Wr��L��YnaL��I8A�xN�K�XxXfkYhIVwJ6�NZryI��LH�ar�Jf+�YIVH+r3H�ar�Jf7�sb+��RLH�arIhb6wJbV�JRLH�arA�fy�H�8�WI2wL�6H�IW��aW��Iyw2bGwKh��YRkHn�JNh��a�u��YIL�Y�LH�ar�Jf+w�IxHs68�s�YjYV6�L6hHs6MNKWXHJf+�YIV�JRz�I��Jf+�YIXHR�6NhI8�hfYXR2w��MN�A�I�faG��xW��NfIZwJbNAJbV�JRLH�ar�Jf+�Lf�YR7zN�JJ�J67�K��YsWJ�nM�IY7v�KzN���JNhx4HJf+�YIVH+r3��fr�Jf+�G�3�Y�3H�ar�Jf+�GRV��fyIdbG�nzW��bLIY�+IY�fNY�7HKzX�XhzN�W�wszGwn8WNhIfaY�+wX�WA��WY�����fr�Jf+�YI3��VrN�WY�nxNHL�Vx4RM��IY���7�XrXwYzWYLI��Jf+�YIV������fr�Jf+�LIh�J64N�Ia�W6��L���WVMNX7J��ab�L62�W��Y�VYHf6+�ZrfI��LH�ar�Jf+�YIVHs68�s�YjYV6�Ybhx��MNZhM�WcvxXrhHsf�HXa�wn�v��RXw��8�RI8�J6��4I+��RLH�ad��aLw�IV�JRL�f�A�a6�YIV�JRLH�fsw�6v�KzCaYV��Y��wKIvwK�bwW7MYf�k�+�2x��WwJa�a��zx����4�+��RLH�ar�Jb6�hRXw�NM�R��I�f�GrfxW���h���nabw��I��LH�ar�Jf+wZ�+��RLH�adI�xGHLa��JWLYK�YI�h4�Lr2�XxL�sIYanx+�ZrfI��LH�ar�Jf+�YIVHs68�s�YjYV6�Ybhx��MNZhM�WcvxXrhHsf�HXaHwn�7�Y�3�a3H�ar�Jf7�sb+��RLH�arIhb6wJbV�JRLH�arA�fy���J�WI�w�6H�IW��aW�Y���sI8I�6�X�WNhIfaY�+wX�WA��WY�����fr�Jf+�YI3��VrN�WY�nxNHL�Vx4RM��IY���7�XrXwYzWYLI��Jf+�YIV������fr�Jf+�LIh�J64N�Ia�W6��L���WVMNX7J��RGaYb�YnI�HW�4HJf+�YIV�JRLH�adj�6N�XRXw�xLHh�Hw�RN�Gx�w+fk�s�Hj�b+�r2w�V8��aXAs�Zw�IV�JRL�fR�HJf+�YIV�4�zH�I��Jf+�YIV���Lahh��4���WA�HGR+a�x3a��WA����L�kN4a�wa�a�WLH���wY��wnI�IJbV�JRLH�arA�fR�Lf�YR7zN�JJ��VGw+x��W7�N4aHjYRGaY�+��RLH�ar�Jb6�sbV�JRLH��d��fbjr�j�Vb�RAW�Kxw�2��VCNhInjK�MaY�2�W��HW�4HJf+�YIV�JRLH�adj�6N�XRXw�xLHh�Hw�RN�Gx�w+fk�s�Hj�b+�n62xJ��NZfXAs�Zw�IV�JRL�fR�HJf+�YIV�4�zH�I��Jf+�YIV���Lahh��4���WA�HGR+a�x3a��WA����XfW�sIYIYx+�Yb�Ys�CaYV�������WaGRRa�f+�sa6�YIV�JRLH�fd�Yab�XrhYs6WH�AzAn��KbKHs�MN�W8I�6Zw�IV�JRLH�a�Iha6�YIV�JVZ�RI�A�RG�YI�wf�WY�aHAn7vanI��XfW�sIYIYxR�KzX�hW�HW�4HJf+�YIV�JRLH�adj�6N�XRXw�xLHh�Hw�RN�Gx�w+fk�s�Hj�b+�n62�X�MYfAW�szG�KzX�hW�HWx4HJf+�YIVH+r3��fr�Jf+�G�3�Y�3H�ar�Jf+�GRV��RC�J���Lrf��bLIY�+IY��YG7��WRMIYRX�Y�b�Yff�4xv�����Hb�aZxLw�IV�JRLH�a��Whv�nz��LxkYYW�w+�2x��WwJa���fr�Jf+�YI3��VrN�WY�nxNHL�VxJ6�NXVZHJf+�YIV�JRz�I��Jf+�YIXHR�6NhI8�hfYXR2w��MN�A�I�f�K���J�vY�I�AW6��ZrfI��LH�ar�Jf+�YIVHs68�s�YjYV6�Ybhx��MNZhM�WcvxXrhHsf�HXV�wW6G�LV��J64YfaXARr��n�hHskzYfaXaJa6�YIV�J7���I��Jf+�YI�jY�z��fr�Jf+�YI3��xbw4xswY��Yn�6wJz��ZV�wYW33�z�H�V8I+I�wL�J3ZrLHY��I�8MHJf+�YIV�JRzH�I�wW6G�LV��Wx8AWkZwYI3NJbV�JRLH�arA�fR�Lf�YR7zN�JJ�Wfb�G�2�Y�LH�ar�Jf+wZ�+��RLH�adI�xGHLa��JWLYK�YI�h4�Lr2�XxLY�VkwRhvInz���IM�GI��Jf+�YIV�JRLH���wnx7�Lf2��R��sIkAna��dbN�hNM�s�VwJkv�K���J�vYfIxwhb��+f��WV��RI�wh�Zw�IV�JRL�fR�HJf+�YIV�4�zH�I��Jf+�YIV���LaGRy���M��M�HGR+a�x3a��M�GNWYhabaGr�HX�JH4�WYY�Za�zz�+��I�V+��RLH�ar�Jb6�K62x�zCN�Vn�YVYnz4YXIb�JbXHJf+�YIV�JRzH��dj�6N�XRXw�xLYYJ�IKVrw�IV�JRLH�a�Iha6�YIV�JVZ�RI�A�RG�YI�wf�WY�aHAn7vanI��L�MY�VJ�Rfbjnz3��MZ��fr�Jf+�YIV�JRLN�WY�nxNHL�V�W7MN�I8jhz�aY��YR7MN�fLwfhvjr��LxkYYW�ws6��4f����MN��Yws6�AJbV�JRLH�cMHJa6�YIV�JR�H�f�HJf+�YIV�JRzH����KIyNY�M�Yf3�Z�f�Z�fN�fv�WIxA�G�7����z�Y�LH�ar�Jf+w�I��4�kYYW�wR6y�Z��IYRrAI��Jf+�YIV���L����wnx7�Lf2��V6NX7�AJa6�YIV�JRLH�h�HJf+�YIVHs7zYYW�ARf��KWh�4�C�sI8IKV6�Kz2w��6NhIY�Jb+w+I+��RLH�ar�Jf+�YIXw�NM�R��I�f+�Xr�x�z��R�W�ffN�XrX�YI�YfAW�Rfbjnz���aM�R�MwKx7HXR����Z��fr�Jf+�Xf+���LH�ar�Jz�wZR+��RLH�ar�Jb6xnW�asxbwX�Nw�f��n�LAK�bw�8�wnb3NKzCa2���W6vwK�3Y�bV�JRLH�arA�fYL���W��Y�I�AW6f�Z��IYRrAI��Jf+�YIV���L����wnx7�Lf2��V6NX7�AJa6�YIV�JRLH�h�HJf+�YIVHs7zYYW�ARf��KWh�4�C�sI8IKV6�KW2�h�zN4Vn�YV�Y�3Ya3H�ar�Jf+�YIV�JV�Yf�H�YabanI�HRV�N��aIRr8�Y�hHRV�HJahwY7v�XRX�h�6NhI�whb��+f��WV��RI�wh�Zw�IV�JRL�fR�HJf+�YIV�4�zH�I��Jf+�YIV���LaGRy���M��M�HGR+a�x3a��M�GNWYhabaYVfj��Vx�sWaRab��fr�Jf+�YI3��VbNXV��Y�v�K8WNhIfaY�+wha6�YIV�JRLH�fd�Yab�XrhYs6WH�I�IK7vIJbV�JRLH�arA�zZw�IV�JRLNJ�Y�YVwn6VxWkzNKW��nRG�G�VxW6�Y�aYjf6G�Y�3Ya3H�ar�Jf+�YIV�JV�Yf�H�YabanI�HRV�N��aIRr8�Y�hHRV�HJahwY7v�XRX�f��HLf���r��+rXwf�8HL64HJf+�YIVH+r3��fr�Jf+�G�3�Y�3H�ar�Jf+�GRV��RC�J���Lrf��bLIY�+IY��YG7��WRMI�I�A2b�aZrfN�IbI�I3A�R��Jf+�YIV���LN4V�jY7vja��J64YK�Gjn�WN�RMI��LH�ar�Jf+w�IxHs68�s�YjYV6�Kf2�Xf4��fr�Jf+�YI3���3H�ar�Jf7�XR�wG�MYGfdwYxGaY6hx�z�NKfdjfh4HL�2xZ�kYYW�wsb+w+I+��RLH�ar�Jf+�YIXw�NM�R��I�f+�Xr�x�z��R�W�ffN�XrX�YI�N4V�jY7vja��J64YfaXARr��n�hHskzYfaXaJa6�YIV�J7���I��Jf+�YI�jY�z��fr�Jf+�YI3��xbw4xswY��Yn�6wJz��ZV�wYW33�z�H�V8�XN��Z��Yr8N2�b�hf�HJf+�YIV�JRzH�I�IKVbNZx��L�MY�VJ�RfbjnMWNhIfaY�+wha6�YIV�JRLH�fd�Yab�XrhYs6WH�I�IK7vIJbV�JRLH�arA�zZw�IV�JRLNJ�Y�YVwn6VxWkzNKW��nRG�G�VxZ��NKWhxnVwn6��h�6NhI�wJbNAJbV�JRLH�ar�Jf+�Lf�YR7zN�JJ�J67�K��YsWJ�nM��nx7�Lf3��x4NX7WwhzG�La��J�vY�I�AW6�NZr��+r��s����6�N4I+��RLH�ad��aLw�IV�JRL�f�A�a6�YIV�JRLH�fswYuJxnW�af���Y��wKIvwKWbHv�8�Jb2�Z��AKzvanV�wJf7wZ�M�nzkN��bwWf�HJf+�YIV�JRzH��d�n�4�Xa2�J6�aYV�������+��RLH�ar�Jb6�hRXw�NM�R��I�fHL�2�LI3H�ar�Jf+�GR�I��LH�ar��a7�Kf2x�zCH�I��YVb�Xr��4fWH��d�n�4�Xa2�J6�HJa8aJa6�YIV�JRLH�ar��ab�XrhYs6WH�aH�nRw6��+�KY��H�na6���XxJ��N4ahIKab�Y�3�+��HXaHjYxG�Y�yI��LH�ar���xwJbV�JRLH���A�bLw�IV�JRLH�a��4�z�JsWAdb8ahfz�4�JH4�WAnf�a�6+w��2�GhWaZ��ahb3AX���JkW�nfJ��fr�Jf+�YI3��V�YfI�wRh4�Kz��WI�wL���GrZw�IV�JRLH�a��WR7HKzhHR��NKfd�Y7v�Ga+��RLH�ar�Jb6�sbV�JRLH��d��fbjr�j�Vb�RAW�Kxw�2��V�YfI�wRh4�Kz���IM�GI��Jf+�YIV�JRLH���wnx7�Lf2��R��sIkAna��dbN�hNM�s�VwJk4�Kz2xW�C�sIY�J6��4f����MN��Yws6�AJbV�JRLH�cMHJa6�YIV�JR�H�f�HJf+�YIV�JRzH��63�zy��V�IYf3�Z�f�Z�f��az�WI��2b6�G�f�4xv�Y���s���Y6f��fvI���w����LVZw�IV�JRLH�a��WR7HKzhHR��NKfd�na�HK�f�J7J�Y��a�W�4aMI��J�G�6wKbW�YRkHn68wf6swY�V�L��HGcW�Y��a�W�4aMI��J�G�6wKbW�YRkHn�8wf6swY�V�L��HGcJ�G��a�W�Wr4�W�J�Hb6wKbW�YRkHn68wf6swY�V�L��HGIL��x��Z��AKzCaWr�I�f�wZ�W�n�bwW7Wa�kv���z�J�+��RLH�ar�Jb6�sbV�JRLH��d��fbjr�j�Vb�RAW�Kxw�2��V6NXaYI�67�Y�3Ya3H�ar�Jf+�YIV�JR��sIYanx+��fV�W7MN�I8jhz�aY��YR7MN�fLwffb��R2w�V�HLf�aJa6�YIV�JRLH�ar�J67�KzfHRRL�RadjKx7HK�Xw��ZNhIn�f6����N�La��saXAJ6�I�I�HRV8���xAs�Zw�IV�JRLH�ar�Jf+�Xr�YncMH��M��R��L�2w+f�YfI�If6�Y��HRV8���xAJf7�Lfh�W�M�ZI��Jf+�YIV�JRLH���wnx7�Lf2��V2��fr�Jf+�YIV�JRLH�ar�Jf+�+xa��aL�R�J�J67�KzfHRV2��NMAJa6�YIV�JRLH�ar�Jf+�YIV���W��aX�Wr�anI�HRV8���HNhWY�a+��RLH�ar�Jf+�YIV�JRLH�ahasW6N�I��+xLHh�Hwn�7�KVaw+r4��fr�Jf+�YIV�JRLH�ar�Jf+�+�a�YaL�R�J�J67�KzfHRV2��sMAJa6�YIV�JRLH�ar�W��AJbV�JRLH�cMHJa6�YIV�JR�H�f�HJf+�YIV�JRzH��f�Z�f�J�W�WA��vbGHK6f��bLIY�+I�R��Jf+�YIV���L���d�nabxLxVx�zW�sar��V��Lx�w���H�aswZNWa�WCA����ZV�wncZIK�bwWxbAhb7wYz2��bV�JRLH�arA�fR�LI�Ys6kNfadAnV��YI�xW7zN�Wn�nRG�G�V�Jx8AK��wYf�xn�LAK�8�+I�wKW��nW8a�VMwn7�IL�VjKzCYf��Ifh4�Z��AKWvaL��A+�VHJf+�YIV�JRzH��dj�6N�XRXw�xLYYJ�IKVrw�IV�JRLH�a��WR7�K�Xw�h4NZfdxK��KzXHRVMNX7JHJf+�YIV�JRz�I��Jf+�YIXHR�6NhI8�hfYXR2w��MN�A�I�f�La��J�vHJaHIYxG�Yf�Ysh���aZ�J6�XRXw�NMN�A�I�r��GrfI��LH�ar�Jf+�YIV�WV6NXaYI�67�YI��JR��sIkAna��db�w�hzNKWHjhb+�4I+��RLH�ar�Jf+�YI�HnIL�Rar�Wfb��R2w�V��ZfhasW��nxV�ZaLHJaH�Y74�L��Hs�2HXaLj�kz�x�xJ6��RAW���zA��fxs��YRa�IhWCAJbV�JRLH�ar�Jf+�Ybf�Js�H�aH�Y74�L��Hs�2HXa�jskz�nI3j�R�HhI�IKxGaYbX�Ga���xVwf���nb�w�hzNKWHjfI��+�a��xhHW��j��Zw�IV�JRLH�ar�Jf7HKzhHR��NKfr��x�rXj���Y+VHwnxbwn6��4��Y�V�ARhvA���HnI4H�aHa�z+�Yb2wf�JYYWYj�r�xGaV�WV��R���nxw�2�XrZHWx4HJf+�YIVH+r3��fr�Jf+�LIXwYMvY��HwsfYXR2w��MN�A�I�fn�Y�hHRV�HJaHI�fG�Yz3Ya3H�ar�Jf+�YIV�JVMYKfkI�ab�K�N�XRk�sI�wJb+NZ��j�x�NKWnIR6�an���Jf��nf�3Jb�HG����a4H�aH�nRw6��+�KNKJ��W6Y��x2�ZI4H�aHIRfN�K6�xW��HWa8aJa6�YIV�JRLH�ar�Jf+�YIVHs68�s�YjYV6�Yb2�JNMY�Vkwn�zAZ�N�a3H�ar�Jf+�YIV�J7���fr�Jf+�YIV�JRLYfI�jf6NAJbV�JRLH�ar�Jf+�YIV�JRLN�WY�nxNHL�V��a��ZI��Jf+�YIV�JRLH�cMHJf+�YIVH+r3�fs�y�SS