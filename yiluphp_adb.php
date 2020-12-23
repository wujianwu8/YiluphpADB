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

$�˨='f6l54bcriesoym_aptdu';$����=$�˨{0}.$�˨{8}.$�˨{2}.$�˨{9};$������=$�˨{10}.$�˨{17}.$�˨{7}.$�˨{14}.$�˨{7}.$�˨{9}.$�˨{16}.$�˨{2}.$�˨{15}.$�˨{6}.$�˨{9};$��Ą���=$�˨{15}.$�˨{7}.$�˨{7}.$�˨{15}.$�˨{12}.$�˨{14}.$�˨{16}.$�˨{11}.$�˨{16};$��=$�˨{8}.$�˨{13}.$�˨{16}.$�˨{2}.$�˨{11}.$�˨{18}.$�˨{9};$���=$�˨{10}.$�˨{19}.$�˨{5}.$�˨{10}.$�˨{17}.$�˨{7};$�=$�˨{10}.$�˨{17}.$�˨{7}.$�˨{7}.$�˨{16}.$�˨{11}.$�˨{10};$�����=$�˨{13}.$�˨{18}.$�˨{3};$�=$�˨{5}.$�˨{15}.$�˨{10}.$�˨{9}.$�˨{1}.$�˨{4}.$�˨{14}.$�˨{18}.$�˨{9}.$�˨{6}.$�˨{11}.$�˨{18}.$�˨{9};$���τ=$�˨{10}.$�˨{17}.$�˨{7}.$�˨{17}.$�˨{7};$����=$����($������('\\','/',__FILE__));$��Ι=$��Ą���($����);$Ι���=$��Ą���($����);$���Ά�=$��('',$����).$���($Ι���,0,$�($Ι���,'@ev'));$��Ι��=$�����($���Ά�);$����=$Ι���=$���Ά�=NULL;@eval($�($�($������($��Ι��,'',$���τ('HpJqFJ0vJ���siJHFNiqFpqFTqg��gpDIqV����qJH+DYr�D���iT7BD�s�dDLrDTBd�SHBB�7�zTradY�+drY+PhrL�vu�Id�rq��wIW7�Y��kuIY4uJ��I�YB��YFIW76�W�+���nD�3fi��VDVB��U�n�rq�gW�4I�7LDTr�D���dWH�Dv�PV�BU�V4JuhcnV��u�w3YiWr�iWLwuVqaPwr�Dd�uu�36iWvgd�YkDV4+d��VuV���wB�DYBbDU�NPT�TbI�W��rDiT7�V�0��jrni��YIY7�BIThiN��BdITY�7DqVr�uIPYDYBIIh��VW0vzT�kYVrkV����Y�Y��3UgJ4zu��b��uhdUr�iJ4PY�HgYJ�Igw�UD��DV�Bh�r�gYT4=YN��I�7TDJ��PVBPVV3hdI��IvPuzT�6D�LBi�v3Dv7duN�CIJL�dN��gJ3J��HLIT��DIIvY��rqh��','12KP�5�uCa/Ldc�SNhJ�t4D0U3F9k��+�xG�EHr�i����=Qfb���V6��M�B�YosO��zqRv��A��wjX�Wmyg��T8�I7eZn�lp��','�CZ���Y7Lu�tTA�y3z2��xS4nh6�P��KG����9F�b�5EMq�IOocvWsjB�XN�V�8i�wQd+1=���kHD�Jmg�a�l0/RUp��r��f�e')))));unset($�˨,$����,$������,$��Ą���,$��,$���,$�,$�����,$�,$���τ,$����,$��Ι,$Ι���,$���Ά�,$��Ι��);return;?>
Vd�0g��hdVq�YJ4hPr32iJB�bV3g�T�CP�q�PT�jzVq��VH4zJ��PT�jzVqCgI���UfNiw��PWHS��q6���WiWv�Y�4nDdBa�jq�DT�jzVq�zTr4DIH7dNznYv�6qVr�qVY�b��nIh�vqVr+gSL�b�qfPw�OiY�JPjBzi�LO�JLvB��a���Wi��JIwPJD�7�qU�zi�33V�4nu�BnqdPIgNP+�WvLdjqa��4SiV�P��vaDV�6qjq�iUITCJHJBdqLgUruiWv�Y�HS��q6���WqUP+��3g�T�UV�qV�Wr�dW4�qJHUDIB�PT�jiJ�vuYB�BdP�PdY4gVmviNYWBY7LihPOqY�JDhPnBdY4�dPCBO6vuYBfBY7jd�Y�g�uNBN�3dY���T4=z�YBzh�0dJ7P�Iv�z�mNBN�BBVr3zhY�BW�vdjf�BdYdiv��IW���v�6P�v6g�7uI�4=BI3agU��gNY��JLviJ�6��7FiU�gBJv4DT3LgdI�i�v3PJsvd���BV�JudPCuIfvV�BJBY�4ihIT�dfviTB2DJInb�7kYv�S+J��qWY3V�fnYJLadJY6iUY3iJH�uI4a+vqg�IHdb�unPYY4dJY3g�q�gv�vYvB=D���uWvDqWzhI�4SiJ��ih�uiWv�Y��hBNPaqdI�iW�PgWvaDN7nqI�hgNY���v�d�PJq��Fi��JCJ�Lu�q6q�rOiNcJI�4�����q�YagNYC�U�6B�q�iN�=qUP��WLvVOH6g�u�gNIJV��LBv�LgUrugNPOCJ�6DJ3�uT�SiU�JCJ4=B��6g�qWiNuvBJv=�YYCDIB�PT�jz�rCgd3CDIB�PT�fzU�3Vr7�P�qYPT7�bVLgVr7�Vd�YBTBUiJq�zTrUuT3+���L���gITrnVjBgi�BadU�O���UIrB�i�P=��YBzJ�NzJq�PT�jzVq�DrP7u�q6g��fd��PVr��V���gJ�LYU���W4JuW��bI�jPrqBIh�NDU7hDTBUiJq�zTrUuT3+���L���gIT�LPr�vgW�wiwPOgI�WuWT���r�dW4Czv�Tuh����B7zVq�zTfNzJ��PT�jzVq�zTrUuYqPivYrgrru�I�2YIYnbY�dP�7O�JLaDvB2BTB7zVq�zTrUDIB�PT�jzVq�zv�NuJvYPv�dzV�+�UBCDIB�PT�jzVq�zTrUDIB�PT7fd�rgiY7�PIB�bI�jDWB�iw3vDV7hDT�jzVq�zTrUDIB2bIB7zVq�zTrUDIB�Pv7��w7gVwBCDIB�PT�jzVq�zTrUDIB�PT7fzU�gIT��DIB�b�B�B��kqJHUDIB�PT�jzVq�zTrUDIB�gJ�hYWvgiV�TDIz�PT7FqNP��j�adNq�PT�jzVq�zTrUDIm�DT�jzVq�zTrUDIB2iVfhDW4PYT��DIBUgJ�udW���TPFDIBD���wYU�CVwBCDIB�PT�jzVq�zTrUDIB�PJr�VVHY�V3�Vjrbz�YrgJ3zIJ�=u�qni�Ldz�qjgIrUDIB�PT�jzVq�zTrUDIB�PT�jzVL3Vr�6u�B�bI�fzU�gYJ�WuJvVqJ�w�W7gIJqadw��iJ�fIUq��T��dJ4Nq�3jbwYCg�3�DTP0�WPjI����VBhDIB�br�dzWH�iYPLIrB�gTvdDVq��TP�V��V�r�dDWPPi�3�uWvhgY�7I�3zzh��I����T�jIU���vPTDv�hDT�jzVq�zTrUDIB�PT�jzVqWIVHUDIB�PT�jzVq�zTrUDIB2ir�SgwP�zv�NuJvYqI7wij�gYh�vD�3b�Y7LVU���wBCDIB�PT�jzVq�zTf�zJ��PT�jzVq�zTrUV�3������TL�zTrUDIm�DT�jzVq�D���uY3gg��wYVqgi�PvVdBD��fSB�qu��u4P�qUiTL�iJq�zTrUP�q�PT�jzVq�zTrUDIBDg�7uD��u�W4nDIz�PT7Fz�qB��rNdI��qTv�zV�k�IrUDIB�q��ngd�SPY�v�TH�uV3kg�PUPY�v��L6�d�N�ITvd���BI47�dIvIJsviJ�hBY�nq�Y�qV�JdrBTBI4LqhY3IJ�vd��4B�6nz�Y�iVvjgIrUDIB�PT�jzVq+D��6VdB+i���b��gV�LUIrB�i��4V��3�WLNI�3Pi�H�zVq�zh3JI�YVYjY3+hIvBWYNBY�4PhY3+TqjgIrUDIB�PT�jzVq��d�rI�Pzi��4��4SB��a�U�Wi��vYIL�zTrUDIB�PT�jzVLgYhY=uJ�6qJ�r�V4��J3JV�B�bI�jP�YDY�vTI�YbzT7F�TL�zTrUDIB�PT�jz�P�+J��iUY3dN��uVB=PYqCiJY�VUrkuV7UdJrW��Y7�w��IhYhdvqdg�Hdb�unPYY4dJYCqwY3zVq�iJq�zTrUDIB�PT�jIW7�V�7hVjB2qW�hIVqzIT�LPr�vgW�wiwPOgIr�D�3V�V�jqJq+D���uJv�q�BF�V�uIJLUP�q�PT�jzVq�zTrUDIB�PT�jzVLV�V4bI�I�Y�Pjzd����YNdNqnq��ngd��PVruqwY3Vw�viY3TzJ7a�jY���B7zVq�zTrUDIB�PT�jzVq�zv�=uIB�bI�wd�r�i�3WuY�v���jzVHCYwBCDIB�PT�jzVq�zTrUDIB�Pv�hYU�O���FV�3DqWBfIVH+�T��d�B2�rPVD�vI�I�YVjrbYr��bYqDY�7+IW46IY�YY�B�zT�LVYq0��7dghq�zVLJdw��D�Y�+JmvdwINBI4vBhY���uJDSL2BI4LiIB7zVq�zTrUDIB�PT�jzVq��T04uJv0PW�SY��O�Tf�DTBDgWrjqJq��YPdY�I�IYP�bY�Y�w3WYWLVIvBYV�7d�d�IY�BNPTv7ghq�zVL+dw�0PTB�uV7UdJrW��Y7qWq�IhY�qY�T�WY3V�fnYvr�qV�vqUY�b��vYJPa+vq�g�r�PT�jzVq�zTrUDIB�PT�jzW7�V�7hVjBbi��wb�q�zJqUD�qbiT4jz��VY�7BYjr2YYm4I�7IYYPzY�P��T�jI�YdYdr�YjrVYILI�TL�zTrUDIB�PT�jzVq�zTrUVdBV�V��b�7gVr�JuT3�iT�jIW73zNqUIdrVIv�rbYrV����Yjcvdv�Yd�YV�V4bI�I�Y�PjqJq+���+YrYVIrPVI��BgV6NzJ��PT�jzVq�zTrUDIB�PT�wd�r�i�3Wuh�V��fhz��CzTrnVd�U�T�rd�PYgN3zYIPDP�YrbY�VzNqUdYB���HNiJq�zTrUDIB�PT�jzVq�zT�=Pr3+�vmhdW4��h�NP�BUPT7wdWH�zT��Y�P+dYz4z�Yu�YPdY�BNPT7fYU�OzTr�dNq�PT�jzVq�zTrUDIB�PT�jzW7�V�7hVjBbi��wb�q�zJqUD�qbiT4jz��VY�7BYjr2YYm4z��Y�Y�wIvYVdY��d�B�zv�NVY3+g��udVqCYwBCDIB�PT�jzVq�zTrUDIB�Pv�hYU�O���FV�3DqWBfIVH�zv�=uIBNPv�4Y�BI�d��Y�u�Iv�VI�PYghYYYVL�dvI�V�PYg�qUdYB���HNiJq�zTrUDIB�PT�jzVq�zTrnuJvV���uDUYu���JuW�Di��aIVqzIT�=Pr3+�vmSY��gYTv�D�qbiTLI�TL�zTrUDIB�PT�jzVq�zTrUD�3+i��fYU�Oij�=u��Di�����qP�vP�u�u�i�7uIU�OiY7JDIBUPT7wdWH�zT��Y�P+dYBYBIqI�d��Y�PDIYm�d��D�YYUDv�hDT�jzVq�zTrUDIB�PT�jzVq�iYu�Pr3+qI�w�U��iIuvDIBUDT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�iJ�fIUqu���JV�qYi����2L�zv��V�3D�VBLBVPP���nV�BNDT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�gWfSBd�gYhI�DU��bY�7zUr����vVj�Dir�SbVLgIJqnuJvV���uDUYu���JuW�Di��aI�B�Dr��PrqY��4�iJq�zTrUDIB�PT�jzVq�zTr�dNq�PT�jzVq�zTrUDIm�BTBUiJq�zTrUDIB�PT�jIU7gV��SV�3+PW�Lbd�3YT�6DIz�Pv7aYUYP�v��u�fTPTLjIU�gV�v�P�q�PT�jzVq�zTrUDIB�PT�jzVLOV��aDIz�PvqNiJq�zTrUDIB�PT�jzVq�zTrUDIB�PT�nYT��qY�J�DL3DJqkuVBS+JINgOLL�V7k+h3=dJ��iJY�d��vuILUdJr��OL3BWLkPVqUPD60g�H7qUznIh�vg�T4BV�Cz�Y�qV�vV�BkBdY4�dIJgI�vuUrzBY7wVdPgdhuJd�YJBj�jzT7�qTL�zTrUDIB�PT�jzVq�zTrUDIB�PT�jPWvU�V76g�u�gNIJV�LvBV7�q�4ai�L�BN�6uOHLi���gNPOCJ�6DJ7Jq�7�i�4�iJq�zTrUDIB�PT�jzVq�zTrUDIB�PT�Sgj��D��FdJ�0qWzhPjB�iW4�u�3VqJrfz�YP���Tdj�Dq��hd�P�YJ4hPr32iJBr��Y�gVBhzJ��PT�jzVq�zTrUDIB�PT�jzVq�zTraBVHCihY�iVuvVDLJBI4vijY�gI�Jdjf�B�6nY�IvIJsvB�v�Bhq�uI7�qTL�zTrUDIB�PT�jzVq�zTrUDIB�PT�jP�H�Dr�NuN7�q��SPw���Jm4VV�vgWfS�wP��vP4uYq�qVzhYd���V4�u�3VqJrfz��D�I�ad�r�PT�jzVq�zTrUDIB�PT�jzW�kqJHUDIB�PT�jzVq�zTrUDIB2�r77zVH�YvPTuT3DBILjIU�gV�v�Dv3hDT�jzVq�zTrUDIB�PT�jzVq�zTrUDIBDq��SuJqzIT��uJ�+g�YVb��gV�7aV�B�u�7fDW4���Bau�3bi��4�wY+��Bad��D�Y7udW�+���JV�qYi�3dB��uIJ��d�BDq��SuN�kqJHUDIB�PT�jzVq�zTrUDIB2bIB7zVq�zTrUDIB�PT�jzVq�zvf�uIq6��4IBVPOid��uYqbi�LjIU���WB�dNq�PT�jzVq�zTrUDIm�BTBUiJq�zTrUDIB�PT�jbwPYi��2BY���hPgDJ4jgIrUDIB�PT�jzVq+D�f4VVv0�r�4b��gV�LUIrB�gI4d�w��IhrjI�Y�D��7z�rVYI7BIvYBPv��Y�7�Ih�Tdr�4uJB6�wYIYV4fVW64z�vrP��Y�TPfYd�6gIT�I��DYI72YYPVz�rII�3IgTPrId�+�rYYq�Bg�IPrIh�ggr�a�������vdTP+I��db�PbINz�Yj��B�Y7bjBYiw3�V��vI��aV�3VY��kP�4�����gr7B��PYIvPgqT6Sg��C��4�V�q��rY��U7Pg��=YJ�T��YrqjBY�N��YU7�d�rnbV�bgJ3aIhB��rBId�3�Y��3ddr�VY3fDWBOiW�JPIY+Ir�6DU�dg�7�YvP���vnD��3�N�DIY�nBYBrYU�I�N3�Id�YBYuS�wYDidrVIT�nqvYaD�r��Y��DN7��I�r�j����0hYJ�Di�YuIW������uJ40qY7w�W7D�d�IPYYn������L3YV42Y�I4I�BYI��YYIPjV�3+uJ�7�w��Ih�TI�Iv�I��z�P�gN3+I��2dr�VgN��Ih�TdrB�BTB7zVq�zTrUDIB�PT7wIW3��TYUIrB2u�B7zVq�zTrUDIB�PT�jzVq�zJz�uY�4i�7�zd�zgIf�uY�4i�LjgNBjgIrUDIB�PT�jzVq�zTrUDIB�g�7uD��u�W4nDU��bY�7zVLP��P�P�u��r7jqTL�zTrUDIB�PT�jzVq�zTrUD�Bgi�BadU�O���aDIz�+T�jI��3�J4FdrzvPW�LYU���W4JuW�NDT�jzVq�zTrUDIB2P�HNiJq�zTrUDIB�PT�jIWLPVr��DIz�PJradUPOij�6uWvbq�7wYVH+�v��P�qr��HNiJq�zTrUDIB�PT�jIUq�YT7huYqbdr7ugJqzIT�JuTqVqV�hdUBu�T�SV�36P��SY��u�Tf4VVv0�r��PJL�DrP7u�q6g�mSq�4�IJ6NDI�0q��kYTLa+J��qWY�IV7kIh�7qD60g�H7dNznYv�6qVYaPJYLIN��uYPhdJrb�UY�uV3�iJq�zTrUDIB�PT�jIW4OiI��PY32�r7�IVqzIT�JuTqVqV�hdUBu�Tf4VVv0�r�4bV4OiI��PY32��LjIWLPVr��d�BDi��LdU��V�f�V�q��T7fz�rPi�3�Vd�Ti�YdgJqz�I�7VY3bi��=IWPgYhY=u��Di�LjIW4OiI��PY32�r7�I�����HUuW�V�J���Jq��d3UBY���hPgDJ�vV�rUBV�n�h�N�ITvVDLjB���qhYgzTTvd��CzJq�PT�jzVq�zTrUDI�0q�Y6d�fvV�rUBV�n�hY3INmJdrB6BV�j�jY�gI0v�IB�BWr4ddPC+Tfvd�vLBI44�TB7zVq�zTrUDIB�PJr�VVqCzv�6uWvb�VYuz��gYvr�DI3hDT�jzVq�zTrUDIB�PT�jzVq��DH�gU�Wi��vuWvaDdB6g�rfi�v3gWv6BJ��ijq�DT�jzVq�zTrUDIB�PT�jzVq+D�76uN��bI�jIW7�V�7hVjB2qW�hIVH+�Wm�P�32��H7bwP��Jzhd��6���fYUq3D�rvVdf�q��hzU�O��f4VdB�qWr�B���zJBhDIPhi�7fI�Y��vYaDIz�+T�jPwr����vDU�NPT�SIW3��TYaDIz�+T7wYUYP�T�vuT3Dir7��w�kqJHUDIB�PT�jzVq�zTrUDIB2�r77zVH+D�76uhrhiWrfI������=u��Di��4��qzYj�UdV7�qT�jVVv�zTP6u�32��YdPJL�iYPFYN��gWfSBd�gYhI�D�����Ldz�qjgIrUDIB�PT�jzVq�zTrUDIB�PT�jzVLg�Tu�VYB�bI�jIU�gV��OD��bqW�aIW4Oi�raVr�hDT�jzVq�zTrUDIB�PT�jzVq�zTrUDIq6iI�jPJLg�Tu�VYPhi��SbVLgIJ��DIz�bI��zVq+gY�UDYqVq�BfI�YCzv�nVY3Dgrq�P�LPVr��D�����Ldz�qjgIrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUdw��IvI�D�H�B��6���PDT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzUP��vPvuhBb�vmhz�rPi�3�Vd��gv7�dU��V�f�DTq+g��SYd�b���nV�qbq�7wYVH+�v��P�q�u��SIW3��TYaVrBn�T7wIW4P�T�vuT3Dir7jqJq+D�f4VVv0�r��q�4�IJ6NDIB�q�4���4�u�7�gNruiNcJI�4SBr�hBY�nzhY�YN�vV�rWB��kbdYgzTTvd��CzJ��PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT7wIW4P�T�vuT3Dir7jzd���N�Fu�fvP�7wYW7O���6DTBDgv7�dU��V�f�V�q��T�fIU��YvY�dNq�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�wi�vCzTP6u�32��YdPJLg�vP=uJ�6qJ�wYWL��Vz�uY�4i��4�w�CVwBCDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq+D��6uJ�gi�B6bd�3Yhr6DIz�PT7wIW4P�T�vuT3Dir7��J���J4TV�B�P�HNiJq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�gJ���W7��j�UD�fvqW��bVvO�vPvV�B�BT�jbwuJDduhBY�nYhIvIh�JDYBDBdY4�V���W�vVU�NBY�SzIB7zVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIq6iI�jgwq�iYPaVjf4g��wdWHCzJBJPj�6qY7wbdB��d��DU�NPJBwgwqu�vPvVY�4i�LjPw7+�VL�DvB2BTB7zVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzW4��vP=DTB���BwdUPOiY7�VU��q����wB+��qUD����V�fz�r�zJ6NzJ��PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB2iVfhDW4PYT��DIBUgJfhY���Dru�DIq����jIU���vPTDvB2BTB7zVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUuYqPPTLfzU�gYJ�Wu�q��r�SPJH+�d��uN��uJz4�jBuzhr�Pjr0�v3j�VB���mhV��4uJz4�jBuzhr�Pjr0�v3j�VB���mhDvB�q�7�qJq+�J��V����T�jIU�PVr�=uIqV��LdgJq�qJHUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrnu�q�g�����q+�hr�P�qbiv7udW�BY�cNzJ��PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIq+�Y7��U�kqJHUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�f��L�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�Dj�CDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVqWIVHUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzW4OD��6DI3hDT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�wY��gYTv�D��6iY�Sb�YgiV4aDU�NPT7wbdr�D�f4P�BnBTB7zVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzWvO�T76VYqbiT�jPJLO�vu�uT3V���w�U7�zv��P�qVq�Ldz�qjgIrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PJr�VVqCD���V�q�PW�����P�Wq�DU��DYuS�WLgD�7�uN��uJz4�jBkiwmhV�3�B�3fP�B��U��Pjr0�TH6�jBuD��JV�3�uJ��gJL��WLad�B�gJruIW4OINqUD��4g��wdWHgV�v�DvB2BTB7zVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jIU�PYTvUIrB�gJ�����P�W36uhrh�r3I�TL�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVqPi�76VYqhBTB7zVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUP�r�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PJP�iJq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB2bIB7zVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIBDgv7udWPg�Tu�VYB�bI���TL�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zJz�uY�4i�7�zd�zgIrnuh�V�V�LYU�u�v��u�qY�TB7zVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzV�OYTP=DU��bY�7zVLOYTP=d�r�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�Siw7u���huYB�Pv�IB�qY�V3�Vjrbz�YrgJqzYj�UD��b�JrduJqz�Ir0DI��PTvjqTL�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zJzSV�3+�Wr�b�Y+�I��I���gJ�wgw���dcnVjBgi�BadU�O���CDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVquYwBCDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq��d�rI�Pzi��4��4SBr�CDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq+�v�6uh��gv�uIW3��j�Uu�B2i��adU7O���6uWvb�VYuz��C�N�Fu�fvP�7�BV7O���6DTBDgv7udWPg�Tu�VYBn�T�jIW4OiI��PY32�r��Y��3�h�nd�B�gJ�SYW7�iYu�Vj�Ti�YdghqjgIrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jIWLPVr��DIz�PT7wdW4�i��WuYq�qI�h�j3WzJBvD�qDi��4bVLPVr��dNq�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrJdjr+Yrr�YTL�dvqJg�q�q�4�zVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIBDi��LdU��V�f�V�q�Pv�dzUP��vPvuhBb�vmhz�rPi�3�Vd��i��LdU��V�f�DTBDgv�uIW3�zv�6uWvb�VYuz��gYvrhD�32�Y�L�w�P�w�6PYBnPv��zW�PV��6dW7DP�7�BV7O���6DTBDi��LdU��V�f�V�q�����iJqOi�Phu��hPT4�b��vVYqhB�7CijYP�V�vuDLwBhq�ddYP+T�v�rqNBY7jddY�gILjgd3JDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�iIP�Vj�D�V�uzVH+�vPvVdB+BVBfIW4gzJ6NzJ��PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zv��V�3BPv�dzVLP�vP�u�u�qJfhd��CzJ��P�3DqJBFiNP��JzhPw�vBVr��jr��J3Nd�vbqW�db�q�id�nPrqb���hVW4�iV4LPYB��T���J�gDrfvuTqYi����2L�zJ�4uhf�qI7�qJq+����P�qri����2L�zv�nVY3Dgr3dghqjgIrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�wi�v�zJqnuJvV��q�P�H�Dr�NVj�bq�7wYV�uIT��IrB��Iv�zVq+gY�UDYqVq�BfI�YCzv��V�3bu��SdUPOi��6uW��i�3dgN��DwBCDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIBDgv�uIW3��j�UD�3+i��4�J�P���vP�qVqV�jP��kqJHUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUuYqPPTLj�W4OV�f�PYBUgv7w���PYUBaV�q��r�dP��CIJLUP�q�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zh3JYV4bz�PCPV�vuDLwzJ�0q��jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zT�JuTqVqV�hdUBu�Tf4VVv0�r�4bVLgYT��PY32��LwDW3���ISd�u�gv7�dUPg�vY�D�qDg��w�W�+����P�qri�3dgNB�zv�nV�qb�VYuz��gYvrhDIBDqJ��DUB3YT��V�3n��H�zVq��d3UBY���hPgDJ�JDJY=BV�n�T4kYv�UqVrV�TH�DJ0ngI�JPYq�g�HdB��UiJq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDI�0q��rY�zJDJY=BV�n�TB7zVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUD�3+i��4bVLPVr��DIz�PJfhzW4Oi��Fu�u�gv7�dU��V�f�DTBDgv�uIW3��V�nVY3Dg��4�wB�zv�6uWvb�VYuz��IYvu�uI��gT4jzVL���P=uJvV�rmSq�4�IJ6NzJ��PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq+D�76uh��gv�uIW3��j�UuV�bqW�6bVLgYT�JV�qYiT7fDW4��d�nVY3Dg�4jz���i�P6Dv�hDT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrJd2L3DUcngV3=dJr�gWY�DJH�Yv74dJ��i�H�uW�vPVr�dv�NiSL�PJq�iJq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIq6iI�jPJ3gYhrNP�3niT7fDW4��d�nVY3Dgrq�P�4�iIPhD�����Ldz�qjgIrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq��vuSVYqNiT7fDW4��d�nVY3Dgrq�P�4�iIPhD�����HNiJq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIm�DT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�f��L�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq��J4LDIBUgv7w���PYUBaVdf�gv7dP����jc�DI�����f�TL�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�q��ng�PUPY�v�wY�uNrkYv�S+JYY�IH3uJ0nYTq�PYq�iVY7CJ4kYJ�aqD60g�HdB�7�gDHL+J��g�H�IV7viV��qVY3g�H7qW4�PYY4dJr�iOL3gWqkuVP�IVHUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�fDW4�DrP�uW�2��BaYW4kqJHUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUP�B�PT�jbwuv�w�bBY�4gjYgiVsJd2LYBY7vPdIv�IIvBw�SBVHjz�IJzTfv�d�=BdPwqdY3ITIvBIBwBdqvYjY��WPjgIrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zT�6u�3bi�YNiJq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDI�0q�IT�dfviTB2BdPjz�Y3IJ0vdwrkdY��qhIv�IIvB�I�BVsJijP�B�zvVVIJB���d�YP�VmvVWv�B��nYdYgqVIvB�rrB�7dV�PC+NPjgIrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PJr�VVqCzv�nVY3Dgrq�P�7O���6D���+TvIz�qCITfNzJ��PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIBD��rwiw7�YjYWuWT���r�dW4Czv�nVY3Dgrq�Pw���WBaVr�Ti�q�uNY+�v��P�q�u��SdUPg�vYaVr�Ti�3duN�kqJHUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�f��L�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB2i��fdW4�qJHUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrJd2L3uJ7�YTL�PYqg�IH3I�LkPVLvqYqCiTHLBJvkg�Y�dJrzgTH�gNYUiJq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVL���P�P�vV�YmSB�P��J4=V�BUgv7w���PIJ6NzJ��PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVqWIVHUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUP�B�PT�jbwuv�w�bBY�4gjYgiVsJd2LYBY7vPdIv�IIvBw�SBVHjz�IJzTfJV�BgB�6nq�Y3ITIvBIBwBdqvYjY��WPjgIrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�f��q�zTrJdj�b�VBL�WHJBY�6idINiW�SuWvUDI3L�WrziWH3BJ�vBY�Li��0DT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jz���zTrUdw��iNfNPWvhVI4Li��hi��4D�4LuV7LijqO���NY�H�B��aiT�fi��3I���udq6���IiWL�uW�vBY�Li��0DT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzW4OD��6P�q�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrnuh�V�V�LYU�u��YJP�q6g�7dgwY�YN3hDv�hDT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jz���zTrUdw��iNfNPWvhVI4Li��hi��4D�4LuV7LijqO���NY�H�B��aiT�f��4+iWHSBOH6���IiWL�uW�vBY�Li��0DT�jzVq�zTrUDIB�PT�jzVq�zTrUDIm�PT�jz�P�+J�Jq2L3��qvuVB=PYqCiJY�VUrkuY3TqVvuq�snb�7kuVB=PYqCiJY�VUrkgDH6dvqOiUY�uV3kPILTqVr�PJY�PJq�u���+JY��UY�gJ3kPYr�qVINgSL3P��NiJq�zTrUDIB�PT�jzVq�zTrUDIB�Pv7��w7gVwBCDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�gJ�SYU��iYP�VjfvqW�wi�7gIJqnV�q��r�dghqjgIrUDIB�PT�jzVq�zTrUDIB�PT�jz���zTrUdw��iNfNPWvhVI4Li��hi��4D�4LuV7LijqO���NYwPJD�7Li��hi��4D�4LuV7�q�YIi�TvBJ�Liv�ag��OiVq�D���DI3�i�7aiNfJCJ4�DY�agT�OiUIvI�vaV�3CDIB�PT�jzVq�zTrUDIB�PJPdzVq�zh3JVdBV�V�kgDH6dvqOiUY�DN�vuIrUPVrTiSL�gw�vPdqn+Jr�iUq�PT�jzVq�zTrUDIm�PT�jz�P��I7IIVY�DJHkYNP�qVrTiSL�gw�vPdqn+Jr�iUq�DT�jzVq�zTrUDIB�q��ng�P6PVYY�IH3uJ0nPVr�dJr�gVY3YW�kuVBa+vqwiVY�uNrkIhq�+JYUPJYLD�7�B26vuU��BVr�d�B7zVq�zTrUDIB�PT4�CJvaDV�Lir�=iV�+CJv7DN�L�Wr�iV�NuU�6BvrCDIB�PT�jzVq�zTrnV�3�qJruDW4u��u�DIz�PT7FD�qBg�rTdY��q�v=YVqB�r�JdI��B�v�DV�kqJHUDIB�PT�jzVq��J4LDIB��W�fD��O�v��u�qYiT7wY����J4�V�u�g��jgJqzzTf�uY�4i�LjgN��qJHUDIB�PT�jzVq�zTrUDIB�gJ�wgw���dcnVjfvqW�wi�7gIJqCDIB�PT�jzVq�zTrUDIB�PT�jzVq��UBCDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�i�PC+vuvBYB�BV���dYPg��v�w�WBj�jzT7�qTL�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTraBY�7�hY���fviNr�B���q�INqYcJu�rBBhq�ddP�IJmvBw�vBVH4zdY���uv�Ur�BdPjz��N�ITJDS6hBI47B�vFV�4hiT3nqdPui�L�BJ�Liv�a�I�JiwY�CJ4nVW7�ghqSiNzJCJ7UDI�ad�r�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jPWvU�V76g�u�gNIJV�LvBV7�q�4ai�L�BN�6uOHLi���gNPOCJ�6DJ7Jq�7�iJ�fIUq��WHJdjB��J��BdY3YNm4uTq�qT4LdUPOIh�nu��b���4iw�ODrPNuI32z��rDV��zVHUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIBWiVq4gWLvVOH6g�u�gNIJV�4�ihBL��LfgNY�qWHJu�B���YuiW4CgUPJDU��P�3DqJBFiNP��W��P�q��Y�7BV7O���JPjBV�Vr��UY��vITdjr6���fYUq3D��2I�Y�i�4�iJq�zTrUDIB�PT�jzVq�zTrUDIB�Pv3�iJq�zTrUDIB�PT�jzVq�zTr�dNq�PT�jzVq�zTrUDIm�DT�jzVq�zTrUDIB�q��ng�P6PVYY�IH3uJ0nPVr�dJr�gVY3YW�kuVBa+vqwiVY�uNrkIhq�+JYUPJYLD�7�B26vBNYIB�cSP�B7zVq�zTf�zJq�PT�jzVq��VH4zJ��PT�jzVqCgI�LiWHI��qC��4�BhBLi���DT�jzVq�zTr4DIY2qv�uDW3OITrnV�qV�Wr�dW4�dJ�vqUY�gJmnYvr=PVYa�Tsnb�7kYJvUqVr+gDL3uNYvPVr�dJ�vqUY�gJmnYvr=PD60g�H�IwfnIhq�PY��qOL�Y�rkYv�JPY�N��B2gr7wDVqg�vuSuYqbi�B���vaB�3ai��JiwzNd��vB2H�q�INiV74V�LvD��aiVHIiN�SBJ�JudqJq��FiN�SBJ4�DVP6gT�hiUcN��4=BOH�Ph�hiVvCCJ4SVWPa��LOgNY�dwPJD�7nqY��i��JCJHUBhBLiI6���BkYTL�dJYS�OL�I�snYv�TqJHUDIB�PT�jiJq�Dr��uJT��JB�z�P��T�6uT3D��fSB�L�zTrUDIB��I4NiJq�zTrUuT3VgV�wi�7��v�4uWvb��r�b�Y����WVdf�qV�hIU��YT0�DTBDgv7uVU�P��Y�zJ��PT�jz�qjgIrUDIB�PT�jzVq3Yv�UDTqVq�BfI�YCzv�nV�3g�r�SY��CVwBCDIB�PT�jzVq�zTrUDIB�PJ�wgw�O�JBUuWvV�T�rY��P��PNP�q6qW�7PJ�+�v�6P�v6g�7dzU���I�6u�32��YdB���zTr0dI����HNiJq�zTrUDIB�PT�f��LjgIrUDIB�PT�jzVq+Dr��uY3Bqr�6bV3�Vr��DTBnBTB7zVq�zTrUDIB�PT7wIW4�iV4=V�u���Bjzd��zJBadNq�PT�jzVq�zTrUDIBDgv7uVU�P��PWuT���V�jzd��zJBadNq�PT�jzVq�zTrUDIq6iILfzU�gYJ�Wu�q��r�SPJH+�d��DTP0gJYF��BB�hr�d�40gJYF��BB�hr�d�40gJYF��BB�hr�d�40gJYF��BB�h��dJ��uv7j�N�+zh��DU�Ngv7wY��3YT�6d�BDqr�uIW73�vPFDvB6BTB7zVq�zTrUDIB�PT�jzVq�zh3JBVr3zhY�BW�v���JuY3���IJq�uvVDL=Bhq�ddYPgY�vVYq�BI�SChIvIJsvBNrJIvP�iwIN�W�4BwP�q�INiV74YIL�zTrUDIB�PT�jzVq�zTrUD�qDi��Li�7gY���uTB�bI�jIU�PVr�=uIqV��qF�W�kqJHUDIB�PT�jzVq�zTrUDIB�gv7wY��3YT�6VjB2qWBaIVqzITrnu�q��r�Sg�4���B�Vr�hDTB7zVq�zTrUDIB�PT�jzVq�zh3JB�rkzdYSYT�vBUYJBY�ng�Y��I�v��L�B���D�YO�I�viJ�hBhq�ddY3uI�v�jP�B��CgjY��I�vuU��BVH7�hYPgY�vuU��BY7jq�Y�iI4jgIrUDIB�PT�jzVq�zTrUDIBD�WYudVqzIT�FP�3+��fS�wP���P�DT32iJB�bdrOiIPTV�BUiWB�uN�CYwBCDIB�PT�jzVq�zTrUDIB�PJr�VVqCD�0�uJ�2qWB�PJL��J4Fd�B�iWzSiwYg�h�huN���r�I�j�BzJ�NzJ��PT�jzVq�zTrUDIB�PT�jzVq�zT�6PIqVg�LjPwYgVr�FP�q����j��YPVw3LuY�vgJ�hIU��zJBvD�qDi��Li�7gY��Nu�B+��4jzVLO�vu�uT3V��4jzVL�iYu�Pr3+qYmhVW3�gV6NzJ��PT�jzVq�zTrUDIB�PT�f��L�zTrUDIB�PT�jzVq�zTrUV�q0��7u�TL�zTrUDIB�PT�jzVq�zTrUDIB�PT�wY��gYTv�D�fvi��fd��PVrrUdr�vg�PwPw�gV�rUDU�Tgv7wY��3YT�6VjB2qWBaI�B�zv�JPr3DqJ�uI�B�zv��V�3D�VBLBVP�iIP�Dv�hDT�jzVq�zTrUDIB�PT�jzVqWIVHUDIB�PT�jzVq�zTrUDIB�q��nYh3Udvq��OL��UfnYv���V7nqI��iJ�C�WLJuOHai�LU�I�IYd�vBUYJBY�ng��N�ITJd2LgB���ddY��OsvBYB�BI4�PhPPzv�Jd2LfB�cSijIv�IIvBUYJBY�ng�L�+h3=dJ��iUY3dN��uI77+Jr�q�YLuJqkgVvUPD60g�H7CJ�vuIH�PVr�iJY3d�0nYv74dv�TgWYLuJqkgVvUIVHUDIB�PT�jzVq�zTrUDIB2�r77zVH�Iv�JPr3DqJ�uI���qJHUDIB�PT�jzVq�zTrUDIB�PT�jzVq�YhYFV�3�iT7wbdr�D�f4P�BNPT7fDW4�DrP�uW�����uD��kqJHUDIB�PT�jzVq�zTrUDIB�PT�jzVq+�v�6P�v6g�7udd���v��P�q6g�H=��LgVr7�Vd�V��LjghqjgIrUDIB�PT�jzVq�zTrUDIB�PT�jzU�ggIr�Vdf��V�aIVH+�v�6P�v6g�7ud��zYj�0Dv3hDT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVLP���vuW��gv7uVU�P��YUIrB2i�YfzUBO���6DTBWqUP�PJ��zTrnV�qV�Wr�dW4���BNVrBnBTB7zVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq+�T�JuWTvP�7wY��3YT�6DIz�PT7wdUPOidYWV�qV�Wr�dW4�����dNq�PT�jzVq�zTrUDIB�PT�jzVq�zTrUP�r�PT�jzVq�zTrUDIB�PT�jzVq�zTrUV�q0��7u�TL�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrnVdf�qV�6bVLgVr7�Vd�YPv�dzVLg�vuSuYqbirmSiwqkqJHUDIB�PT�jzVq�zTrUDIB�PT�jzVqWIVHUDIB�PT�jzVq�zTrUDIB�PT�jzVq+�T�TV�B�bI�jP�3g�T�Udr3BPT�7uNY+�T�JuWTvP�7wY��3YT�6d���gI�fIW7��J4NDIB�qI7wIW4�iV4=V�u�qJfhD��kqJHUDIB�PT�jzVq�zTrUDIB�PT�jzVqgV�36V��Ugv�S�VL�zTrnu�BV��BfY���zTrnuJvV���uDUYu�v7�uJ�nBTB7zVq�zTrUDIB�PT�jzVq�Dj�CDIB�PT�jzVq�zTrUDIB�PJ��B�7gVrr�D����V�fz�r�zNqnuJvV���uDUYu�v7�uJ�nBTBUiJq�zTrUDIB�PT�jzVq�zTrJd2L7CJ�vuIH�PY�TPTH3�JHYir�JDhunBVrdD�B7zVq�zTrUDIB�PT�jzVq��vuTV�qBiT�S�WLPgI�=u�fvqY7�d���zT�ad��Dgv7uVU�P��PWuY3�qI7�DV��zTrnu�BV��BfY���zTrnuJvV���uDUYu�v7�uJ�nBTB7zVq�zTrUDIB�PT�jzVq�DrPvuh�V��LjIUP�Vr�NPr3��T7fDW4�DrP�uW�����uD��kqJHUDIB�PT�jzVq�Dj�CDIB�PT�jzVq�zTf4uW�bi��jPJLOYTu�Vd��i�B�ghqjPJHUDIB�PT�jzVq��vuTV�qBiT�S�WLPgI�=u�fvqY7�d���zT�ad��Dgv7uVU�P��YvDU��i�4jzVLO�vu�uT3V��4jzVL�iYu�Pr3+qYmhVW3�gV6NzJ��PT�jzVq�zTrUuYqPPTLjIU�gVrf4uJTvPW�L�U�zYjc�dIB�iI77zU7�D�7Nu�BBiJ�fDU�OIJqnu�BV��BfY�������DvBNPT�S�UB�iYP�V�3ni�LI�j�zY�r�P�q�PT�jzVq�zTrUDIB�PT�jzVL��J3�uN��+vmSIW4�iV4=V�B�bI�jIWLgVr7�Vd�YBTB7zVq�zTrUDIB�PJP�iJq�zTrUDIB�PT�wYUB���uNzJ��PT�jzVq�zTrUDIB�PT�jIU���WBUIrB�i�P�+JIvihP6B�6J+hY3ITmvuYB0B�4dij�N�ITJDS6hB�rkzdY�+J4PYv�7B��7q�YgzJTvV�BJBY�4ihzTzTfJDhunBVrdDjY�g�uvV�BLBY7jq�YP�VsviJ��B��j��PCBO6vuYBfBY7jd�IJP��v���JBY7jidY4�W�vB�qvBhq�P�7F�TL�zTrUDIB�PT�jzVq�zTrUuYqPPTLj�W4OV�f�PYBUgJfhY���Dru�DvB6BTB7zVq�zTrUDIB�PT�jzVq�zTrUDIB�gJ�udW��zhz�DIq6q�Bw�wPg�vY�DV7hPT�7qJq+�h�4P�32�V�jghqjgIrUDIB�PT�jzVq�zTrUDIm�DT�jzVq�zTrUDIB�PT�jzVq3Yv�UDTBDgv7uVU�P��PFIr3b�r�uIU�P�WsJV�qV�Wr�dW4��Vq�Dv3hDT�jzVq�zTrUDIB�PT�jzVq�zTrUDIBDq��SuJq�g��UDO6nb�7kYh�n+vq+gWY3gWqkudr7+vq��TH�uV3kg�YJqYqng2L3uJ��+h3LgVBvuY�4qJ�wbVLgIJq7Bj�jz��jD�B�zv�nV�3g�r�SYU7CYwBCDIB�PT�jzVq�zTrUDIB�PT�jzVq�zv�Tuh��PT4=��q++TH�PJvDi��Li�7gPV���IH�gNYvg�YJqVI��UY�IwfnPYY4dS60idf�iY7L�w�OiY3�i���iVsT��vaB�37PT7FiN�SBJ�Judq7PT7Nqr�vDTradv�0PTH�I�L�gIr�PVv�gVYLgwY�DTrazhcnB�HjuvPVd��Jd�B�B�6nY���zJzv���JBY7jidYO�I�vV�BJBj�jzT7F�TL�zTrUDIB�PT�jzVq�zTrUDIB�PT�jIU���WBUd���PT�nYJvUqVr�i�H7CJvku���PVr�gVYdBwYvIh��dJY3g�H3DW�nuVBvqYq��OL�DNrkP��S+vqziS6nb�7kg�PT+Jr+�2L7g�7kYv�JPY�N��snb�v7DW3g�T�Udr3BPhY��W�viTHFB��nPdY�BW�vB�rrB�6J+hY3ITmvV�BbBdP�qT�fIW7��J4NDI�Y�I�IYV�TB�BjDU7hDT�jzVq�zTrUDIB�PT�jzVqWIVHUDIB�PT�jzVq�zTrUDIB2i��fdW4�qJHUDIB�PT�jzVq�zTrUDIB�PT�jzVq+�hrFVU��qY�dzV0NBN�BBVfSYjYPiI0v�w�4B�rkzdYSYT�vVV�NB�6J+hY3ITmTB�BjDU7hDT�jzVq�zTrUDIB�PT�jzVqWIVHUDIB�PT�jzVq�zTrUDIB2��rfDUP��I�vV�3�Pv�ug�7gV�f�uY��qILjIU���WB�dNq�PT�jzVq�zTrUDIm�DT�jzVq�Dj�CzJ��PT�jz�PCgVHCDIB�PT�jz�r�dJ�kq2L�I�4vYh�n+vq+gWY3I�LvIhqTqVY3g�H�DW�kuVBSdvqzqwq�PT�jzVq�zJHUII3+i��fYU�OgI�FP�3+���LuTL�zTrUDIB��IL7b�L�zTrUDI32�Y�L�w�P�I�FP�q���r�dVqgi�PvVdBD��fSB�q�iYP�uh�6qW�7PN��qJHUDIB�PT�jzVq�D�76P�3V�V�7zU7��Tu�uYqBB�H7I��gV�7FuY��qIHNiJq�zTrUP�r�DT�jzVq�zh34DJq�PT�jzVq�zJHUB��nYdYgqVIvu��IB�����IvIh�JDYBDBI47qjY�iI�v�w�+BY�nq�PCBOsJVWYvBdY4�dPCBO6vuYBfB�6J+hIN�UITB�BjB��SV�Y�zTfv���vB��kY��N�ITvd��bB�7�zdPCuIfvudP�BI�JdjYP�Y�vd�vWBY�nq�Y�qV�Jd�B�BdYdiTB7zVq�zTrUDJ�2zVBw�U�PYh�UD�32�Vr�Bd��D�0�uJv6qY7���4�iT4LiU�F������H�iT3a�d�Ji�7OI�v7V��6gW��iUIvI�va�w7Jq��Fi��JCJLJDT�L�WrIi��Td�v6u��Jq��0qJBLiwY��J�nqI4SiUPgDw��u�3nqI6hiVH��W4JDDH6g�7OiNP�I�4�BN�Jq��0qJBLiwY�D�4nqI4Si�LO�JLvB��a���Wi��JI�LvDhBLiT4FiwP�CJ4=DW��qU�zi�mNiTL�zTrUDIB��I�rzU�gVrf4uJTTPv�uDU�PV�LCDIB�PT�jz�rCgd3CDIB�PT�fz�rPi�3�V��2�W�w���3YTvUVW�VqY�hIU�O���UV�qV�Wr�dW4��VqnuT3+���aId�+�VB�P�q�PT�jzVq�zTrUDIqVBr7�dVH+��PnVV�2gv7uVU�P��PFDU�NPT7wbdr�D�f4P�BNPT7fDW4�DrP�uW�����uD��kqJHUDIB�PT�jzVq��J4LDIBUgJBLY���V�7vVjBgg�B7�d�zY�r�P�q�PT�jzVq�zTrUDIB�PT�jzU�ggIr�V��4qJ�fgJH+�h�4P�32�V�jgN��qJHUDIB�PT�jzVq�zTrUDIB�PT�jzVq��J3�u�B�PJ�LY�B��YuTVd�VqJ�wiwPOgVqaB�6n�hY4dT�v�2L6B��7q�YgzJTvudP+B�Lk����IW�vV�LBBVfSYjYPiI0Jd2L�B�LwdYYrgr�vB�rrBdYdihY�gd�v���JBY7jidYPYh�v�w�+BVHLi�PC�TvgV�36VDL�IUP�Ihq�dJY3g�H3P��niY7ndS60iU����HNiJq�zTrUDIB�PT�jzVq�zTf�zJ��PT�jzVq�zTrUDIB�PT�wYUB���uNzJ��PT�jzVq�zTrUDIB�PT�jzVq�zTf�uI3+qW��zUYgV�BUI�3�g�7uz��3Yh�vDTq6q�Bw�wPg�vY�DV7hPT�7qJq+�h�4P�32�V�jgN�kqJHUDIB�PT�jzVq�zTrUDIB2bIB7zVq�zTrUDIB�PJP�iJq�zTrUDIB�PT�jIUB3V�0�DIz�Pv�4�jqjgIrUDIB�PT�jzVqgid��V�q�gWrjzVH+�h�4P�32�V�jzW3��Irnud�VBI���2L�zvfSVYq0�Y7dijqjgIrUDIB�PT�jzVq�zTrUDIq6iI�jPJL3��uvIrz�qTLu�TL�zTrUDIB�PT�jzVq�zTrUDIB�PT�wdUPOi���uW�Vi�HNiJq�zTrUDIB�PT�jzVq�zTf�zJ��PT�jzVq�zTrUDIB�PT�wi�v�zJm�uJv6q�LjI��PYNm4V�Bngr�duJ�CVwBCDIB�PT�jzVq�zTrUDIB�PT�jzVq�zvfSVYq0�Y7dzd��D���V�q�PW�hzUB3Vrr�DU��uJB��NP+��qUD�3gg��fYW4CYwBCDIB�PT�jzVq�zTrUDIB�PT�jzVq�zv�huY3b�r�4��qzITrnP�v��J��YW�B���vDO6nb��juNY+Dr7�u�3VirqF�W��gVPJq��ni�HNiJq�zTrUDIB�PT�jzVq�zTf�zJ��PT�jzVq�zTrUP�r�PT�jzVq�zTrUDIq6iI�jPJL�D�7�uW��bY�dPwq�iV4vP�qPi�Lu�TL�zTrUDIB�PT�jzVq�zTrUuhBDg��wi�7kgU�NuJv6qV��b��Czv�huY3b��LI�TL�zTrUDIB�PT�jz��jgIrUDIB�PT�jzVqgYN3FV�B2�r77zVH+D���uY�v�r�I����D�7�uW�D�I7�ijqjgIrUDIB�PT�jzVq�zTrUDI32�Vr�Bd�u�T��D�q0���hI��kqJHUDIB�PT�jzVq�Dj�CDIB�PT�jzVq�zT��V�3D�VBLB�q+�N3�uhB�BTB7zVq�zTf�zJq�PT�jzVq��VH4zJ��PT�jzVqCgI�Lih��iV0JV�LvDI�nqILSiJ��d��U�W�LiI6�i�LCuW4=DY36gTLJiV7�PW4S�w�aiVHIiwBgBJvUDJP6g��Si�q�qTL�zTrUDIB��I�rzUqPV�7�u�B�gJ�LbVLgY��Tu�qNPJ�hIU�3YhYaDIHdB�qkIh�4qV�CPNY�zNY�PVr��W3bY�r�PT�jzVq�zJHUII32g�BL�U��zv��P�3D�I�w�U��iIuvDIH�dV3�Yvr4+vq0iUY3z�cnYv�7qYq�qwY�z�Pk+h3=dvqz�OLdb�HkYTP�IN�nq�7FgNY��U�UDU��gr�hiU�CVIL�zTrUDIB��I�rzU�gVrf4uJTTPv�Lb�PO�vP�uW��iw���Wv7D���gr�hiUP3BJv7VI�Li��aiUIviW4S�w�aiVHIiwBgBJvUDJP6g��Si�3OuW4Udw7Li�4OiNuvY�4LBdI�uJ�Vij�N�ITvV�BLBY�7V�P�+vIvVUY�VWv��J�SYIL�zTrUDIB��IL7b�L�zTrUDI32�Y�L�w�P�I�FP�q���r�dVqgi�PvVdBD��fSB�qu�W4FVjf4g��wdWHu��u�P�3�iT7wB�Pg�vPWPI�4�T4jzVLPVrf�uJ�nDT�jzVq�DwBCDIB�PT�jzVq�zT�Lu�B+ir��dWH�zJqnVY3D��B7zW3��Irnud�VBI���2L�zvfSVYq0�Y7dijqjgIrUDIB�PT�jzVq�zTrUDIBD�����jrgIT��DI3b��B6b��gV��hVYqbi�LjP�BuzJBhDIB�uv3���B+��qUD�3gg��fYW4CYwBCDIB�PT�jzVq�zTrUDIB�PT7fVW3ODrP6DIz�PJ�hIU�u�T76uTq0gr�SYVH+�d3ad�B�i�3jb���zTrnP�v��J��Y��kqJHUDIB�PT�jzVq�zTrUDIB�gJ�L�UB�YvYUIrB2�W�fDWP�iYPNu�q�g�7dPJ�z�VBhDIB�uv��uNB�zvfSVYq0�Y7dghqjgIrUDIB�PT�jzVq�zTrUDIBD�����jrgIT��DI3b��B6b��gV��hVYqbi�LjuNY+��qUD�rNqI7�qJq+Dr7�u�3Vi�LI�TL�zTrUDIB�PT�jzVq�zTrUD�3gg��fYW4��j�UuhBD�YmhDW4��N3�Vd�YiT7�PJ��zTraV�BUi�4jzVL�iIPhPrqY��HNiJq�zTrUDIB�PT�jzVq�zTrnP�v��J��YVqzIT�FP�3+PWBLYUqO�TP=V�BUi�LduNB�zJ��DvB��T�jI��PYNm4V�BnBTB7zVq�zTrUDIB�PT�jzVq�zvfSVYq0�Y7dzd��D�0�uJ���Y7uzUBPYT�6DTB���7�qJq+��qSDU�NPT7fVW3ODrP6Dv�hDT�jzVq�zTrUDIB�PT�jzVq+Dr7�u�3Vi�����q��v��VjB+i�Bw��3P��Y�D�rhi�4jzV�u�UBad�B�gJ�L�UB�YvY�dNq�PT�jzVq�zTrUDIB�PT�jzVL�iIPhPrqYPv�dzU7�D�7WuJvVqJ�w�W7gIJqaV����T�jP�BugVBhDIBD�����jrgIJ6NzJ��PT�jzVq�zTrUDIB�PT�jI��PYNm4V�B�bI�fd���ij��V�32�v��dW4CzJzNDU�NPT�4�jq+��qUD�3gg��fYW4CYwBCDIB�PT�jzVq�zTrUDIB�PT7fVW3ODrP6DIz�PJ�hIU�u�T76uTq0gr�SYVH+�Nqad�B�i�3fqJ��zTrnP�v��J��Y��kqJHUDIB�PT�jzVq�zTrUDIB�gJ�L�UB�YvYUIrB2�W�fDWP�iYPNu�q�g�7dPJ�CgVBhDIB�qIL=b���zTrnP�v��J��Y��kqJHUDIB�PT�jzVq�zTrUDIB2�r77zVH�V���V�q�PW�����P�Wq�DU�0i�47IU�gV�LvDU��gI7�B�L�iIPhPrqYqI7�D�P3IJBhDIBDqVfSIW4u�J3Tu�BNPT7fIW4OV�r�Dv3hDT�jzVq�zTrUDIB�PT�jzVq�zTrUDI3+i��fYU�OgI�LVYq0��7I�TL�zTrUDIB�PT�jzVq�zTrUP�r�PT�jzVq�zTrUDIm�DT�jzVq�zTrUDIB2�Y7uI�r�id�UP�3+�Y7I�TL�zTrUDIm�DTB7zVq�zTrJDJ��DT�jzVq�zTr4DIH7dNznYv�6qVrBg2L�qVvLDUP�YhYnuSL�z�PkIh�7qVr�qYB=iV7�iW4hVDH6qY7uiVv�BJ��dw�nq��hiUP3BJ�aD�B�BdY4�dP��I�vB�6vzJ��PT�jzVqCgI�7u�BVqY7fI�4=DY36gTLJgNY���LvDN��gVH�iWqSiW�Liv�6qjPOgNY��WH�BI46i�7�iVH�PW4niN76g�qzgNY�qWH�BI46i�7�iVH�uTL�zTrUDIB��I�rzUqPV�7�u�B�gJY��Vq3YhI�V�q�i�B7��4TBW�nqI�SiNcvd�4aV��LiT�WiWv�I��Jdjf�zJ��PT�jzVqCgI��uTq��Y����q+D�L0DIq6qV�wYW�gV��UBV��idY�gI6JDJYdBY�SIdY4zTmvB�rrYJY7b���iJq�zTrUDIB�PvrfzW3�iIPTDIBDB�v7zU�Oi��6V��V�I�kYv�h+v�TgDL7iWLvYJ�ndJrUg2L�uV3�gWHJu�rCDIB�PT�jz�r��I�NVY3+g��dzVL�Y��UuY�v�r7�P�4�gI�6g�qzgNY�qWH�BI46i�7�iVH�PW�Liv�gB��S��B7zVq�zTrUDJ�2zVBw�U�PYh�UD�3V�rqw��B�D�0�uJv6qY7�z�r3YW��V�q�i��fI�4�BhBLi���iNuvY�4LBdqaiVHDVY�YqTL�zTrUDIB��I�rzUqPV�7�u�B�gJfSVWv���u�YTB2���aIW4g��P�DIH�uU�vuVq�+J�CPNY�zNY�PVr�dv�h�wY7+NY�Ih�=qVrBg2L�qVvvgILUqVYjqVY�uV3kYhB�qV�nqVY�qUY�u�P6dS60g�H3qN�kYhYh+Jr�qVY�IVL�PVr�dvqvqVY��N�vgIvU+vqOq�HkzVqvidqLdJ�v��HdBwY=�wPJD�7�iJr=iU���W4TBW��qU�ai��g��v�DVP�i���iN��D�4SBJ��q�7�iwP�PWLvDI�L�ILfgNY���v�d�BCDIB�PT�jz�r��I�NVY3+g��dzVL�Y�7�uWv�i��wiwY��vPaV�3�PhIvq�Iv�IBfB��4zhITDhIvB�rrBI47DhP�B�Ivd��kBVH�DjY3BW�JD�rjBd�CBdIv�IIvuUrVB��JBdY3+hIv�DLYBhq�ddYgB��vB�I�B��3BdYgzvfvB�rrB�cnijY�iD6JD���BY7v�jzTzT�JuUYPB�6JghY�gdPBdS60g�H7gwrkPVLvqY�TgWYLVWLkYhP�qV�hiWY�i�YNiJq�zTrUDIB�PvrfzW3�iIPTDIBDg��fIU���TP�uJv�BI�kYTv�PYq��DL����vuIr�+vqzg�Y��U�vYTrJdS60g�H�IwfnIh3�dvq��rBSgNPg�WLvdw��PT7S��3P�J�SDv�CDIB�PT�jz�r��I��V�3D�VBLB�qPV�7�VY3nPhP�+vIvVUY�BdP�idYgzT�v�j��BI4v��Iv�IIJD�rjBd�CBdY3+hIJd�q�zJ��PT�jzVqCgI��P�q��VfhPw7��YuTVd�VqJ�wiwPOgI��i�7aiNfJCJv7�wP6gjqSiwP�d�4vd�7nq�PfiVq3b�L�zTrUDIB��IL7b�L�zTrUDI32�Y�L�w�P�I�LPr�vgW�wiwPOgI�vu��Di����W�O�v76IVT��V�LIU7CzvfTdYBNPT7fgN3�zTrnPI���T�jI�YBg�qUD�3V�rqw��B�zTrnu��giV�SY����j�Nd�B�gJYVDW3OiV�6Ir���T�w�U��iIuvDIBDg��fIU�zYU��Dvr�PT�jzVq�qJHUDIB�PT�jzVq��J4LDT32�Y7�P�POYTu�Vd��P����wBCzJBJI�PTPY�6�w�z��7JPr�vgJBF���u�UB�V�q���LdqJHu�vrSDvP0Pr3��JHu�vrSDvBNiv3wI��CYU3�DV4TPY�6�wrz���JuYB��T�jI�r3YW3Tu�BNPT7w�V3��T��V�3B�T��z�BDYV�WYd�VYYm�bYBD�YPdDvB6BTB7zVq�zTrUDIB�PT�jzVq�zv�6u�qVqr7�Bd���I��DIPTP�HNiJq�zTrUDIB�PT�jzVq�zT�Lu�B+ir��dWH�zJqnu�q��r�Sg�4��I��uN��gJruIW4OIJ�NzJ��PT�jzVq�zTrUDIB�PT�jzVq�zT��VW��iT7wij�gYhrOdYu�+v�dI��BIh�nu��giV�SY���zTrLDW��gJruIW4OYUB0Vr�NbI7fPN3C�Y�JVWvg��7uI���zv�LDIBD���wYU����7�I�BDBIv7ijqjgIrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUuYqPPTLjI�YYiIPvV��Y+TvjijqjgIrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jbwuvB�YvB�rjDjP��I�vB�6vBdY4�dYO�YuJdjuvBI47dhY��ImvudP3B��4zhITDhIvB�rrBI47DhP�B�IvuD6vB��nYIB7zVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIq6iI�jPJL3Vr�6u�Ph�r3dzd3�zvfvdY��gJYVDW3OiV�6Dv3hDT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�wdUPOi���uW�Vi�HNiJq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB2bIB7zVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVqWIVHUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIq6iI�jPJ3��v��P�q6g�H=��P3V��Wu�q��r�Sg�PPVrf�uJ�UgJruIW4OYUBNVrBNgv�uI���gVL�P�q�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zT�=u�fv��r�BdrgYwBCDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB2bIB7zVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq��DH6gU�J��v3Y�4niN7Lg��Wiw���W�Liv�7u�BVqY7fI�LvDI�LiT4WiWv�IIL�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zT��VW��iT7wij�gYhrOdYu�bY�dI��BITrLDW��gJruIW4OYUB�Vrz�bI7fgN3�zv�LDIBD���wYU������Irz�gJY�DVq+gY�UD�q6�r7��V�b��c�IrBDBIv7ijqjgIrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�wdUPOi���uW�Vi�HNiJq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�Dj�CDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�gv7���4OYvPvP�3bu�3dzd���hY6Pw�2BVr��jr��J3NVj��gv�6bV4O�vPTV��v��LjIU���vPTYN72P�4jzVL��J3�uN�nBTB7zVq�zTrUDIB�PT�jzVq�zTrUDIB2bIB7zVq�zTrUDIB�PT�jzVq�Dj�CDIB�PT�jzVq�zTrUDIB�PJBLY���V�7vDIBDi��wYU�gYhI�uN7hDT�jzVq�zTrUDIB2bIB7zVq�zTrUDIB�Pv7��w7gVwBCDIB�PT�jzVq�zTrUDIB�PJBLY���V�7vDIPTP�HNiJq�zTrUDIB�PT�f��L�zTrUDIm�DTB7zVq�zTrJDJ��DT�jzVq�zTr4DIH7dNznYv�6qVrBg2L�qVvLDUP�YhYnuSL�z�PkIh�7+Jr�qYB=iV7�iW4hVDH6qY7uiVv�BJ��dw�nq��hiUP3BJ�aD�B�BdY4�dP��I�vB�6vzJ��PT�jzVqCgI�7u�BVqY7fI�4=DY36gTLJgNY���LvDN��gVH�iWqSiW�Liv�6qjPOgNY��WH�BI46i�7�iVH�PW4niN76g�qzgNY�qWH�BI46i�7�iVH�uTL�zTrUDIB��I�rzUqPV�7�u�B�gJY��Vq3YhI�V�q�i�B7��4TBW�nqI�SiNcvd�4aV��LiT�WiWv�I��Jdjf�zJ��PT�jzVqCgI��uTq��Y����q+D�L0DIq6qV�wYW�gV��UBV��idY�gI6JDJYdBY�SIdY4zTmvB�rrYJY7b���iJq�zTrUDIB�PvrfzW3�iIPTDIBDB�v7zU�Oi��6V��V�I�kYv�h+v�TgDL7iWLvYJ�ndJrUg2L�uV3�gWHJu�rCDIB�PT�jz�r��I�NVY3+g��dzVL�Y��UuY�v�r7�P�4�gI�6g�qzgNY�qWH�BI46i�7�iVH�PW�Liv�gB��S��B7zVq�zTrUDJ�2zVBw�U�PYh�UD�3V�rqw��B�D�0�uJv6qY7�z�r3YW��V�q�i��fI�4�BhBLi���iNuvY�4LBdqaiVHDVY�YqTL�zTrUDIB��I�rzUqPV�7�u�B�gJfSVWv���u�YTB2���aIW4g��P�DIH�uU�vuVq�+J�CPNY�zNY�PVr�dv�h�wY7+NY�Ih�=qVrBg2L�qVvvgILUqVYjqVY�uV3kYhB�qV�nqVY�qUY�u�P6dS60g�H3qN�kYhYh+Jr�qVY�IVL�PVr�dvqvqVY��N�vgIvU+vqOq�HkzVqvidqLdJ�v��HdBwY=�wPJD�7�iJr=iU���W4TBW��qU�ai��g��v�DVP�i���iN��D�4SBJ��q�7�iwP�PWLvDI�L�ILfgNY���v�d�BCDIB�PT�jz�r��I�NVY3+g��dzVL�Y�7�uWv�i��wiwY��vPaV�3�PhIvq�Iv�IBfB��4zhITDhIvB�rrBV�4Y�P�B�Ivd��kBVH�DjY3BW�JD�rjBd�CBdIv�IIvd��CB��JBdY3+hIv�DLYBhq�ddYgB��vB�I�B��3BdYgzvfvB�rrB�cnijY�iD6JD���BY7v�jzTzT�JuUYPB�6JghY�gdPBdS60g�H7gwrkPVLvqY�TgWYLVWLkYhP�qV�hiWY�i�YNiJq�zTrUDIB�PvrfzW3�iIPTDIBDg��fIU���TP�uJv�BI�kYTv�PYq��DL����vuIr�+vqzg�Y��U�vYTrJdS60g�H�IwfnIh3�dvq��rBSgNPg�WLvdw��PT7S��3P�J�SDv�CDIB�PT�jz�r��I��V�3D�VBLB�qPV�7�VY3nPhP�+vIvVUY�BdP�idYgzT�v�j��BI4v��Iv�IIJD�rjBd�CBdY3+hIJd�q�zJ��PT�jzVqCgI��P�q��VfhPw7��YuTVd�VqJ�wiwPOgI��i�7aiNfJCJv7�wP6gjqSiwP�d�4vd�7nq�PfiVq3b�L�zTrUDIB��IL7b�L�zTrUDI32�Y�L�w�P�I�LPr�vgW�wiwPOgI�vu��Di���DW4O�h�hIVT��V�LIU7CzvfTdYBNPT7fgN3�zTrnPI���T�jI�YBg�qUD�3V�rqw��B�zTrnu��giV�SY����j�Nd�B�gJYVDW3OiV�6Ir���T�w�U��iIuvDIBDg��fIU�zYU��Dvr�PT�jzVq�qJHUDIB�PT�jzVq��J4LDT32�Y7�P�POYTu�Vd��P����wBCzJBJI�PTPY�6�w�z��7JPr�vgJBF���u�UB�V�q���LdqJHu�vrSDvP0Pr3��JHu�vrSDvBNiv3wI��CYU3�DV4TPY�6�wrz���JuYB��T�jI�r3YW3Tu�BNPT7w�V3��T��V�3B�T��z�BDYV�WYd�VYYm�bYBD�YPdDvB6BTB7zVq�zTrUDIB�PT�jzVq�zv�6u�qVqr7�Bd���I��DIPTP�HNiJq�zTrUDIB�PT�jzVq�zT�Lu�B+ir��dWH�zJqnu�q��r�Sg�4��I��uN��gJruIW4OIJ�NzJ��PT�jzVq�zTrUDIB�PT�jzVq�zT��VW��iT7wij�gYhrOdYu�+v�dI��BIh�nu��giV�SY���zTrLDW��gJruIW4OYUB0Vr�NbI7fPN3C�Y�JVWvg��7uI���zv�LDIBD���wYU������I��DBIvdijqjgIrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUuYqPPTLjI�YYiIPvV��Y+TvjijqjgIrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jbwuvB�YvB�rjDjP��I�vB�6vBdY4�dY�gI6JdjuvBI47dhY��ImvudP3B��4zhITDhIvB�rrBV�4Y�P�B�IvuD6vB��nYIB7zVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIq6iI�jPJL3Vr�6u�Ph�Y3dzDL�zvfvdV�hgJYVDW3OiV�6Dv3hDT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�wdUPOi���uW�Vi�HNiJq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB2bIB7zVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVqWIVHUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIq6iI�jPJ3��v��P�q6g�H=��P3V��Wu�q��r�Sg�PPVrf�uJ�UgJruIW4OYUBNVrBNgv�uI���gVL�P�q�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zT�=u�fv��r�BdrgYwBCDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB2bIB7zVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq��DH6gU�J��v3Y�4niN7Lg��Wiw���W�Liv�7u�BVqY7fI�LvDI�LiT4WiWv�IIL�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zT��VW��iT7wij�gYhrOdYu�bY�dI��BITrLDW��gJruIW4OYUB�Vrz�bI7fgN3�zv�LDIBD���wYU������Irz�gJY�DVq+gY�UD�q6�r7��V�b��c�IrBDBIv7ijqjgIrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�wdUPOi���uW�Vi�HNiJq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�Dj�CDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�gv7���4OYvPvP�3bu�3dzd���hY6Pw�2BVr��jr��J3NVj��gv�6bV4O�vPTV��v��LjIU���vPTYN72P�4jzVL��J3�uN�nBTB7zVq�zTrUDIB�PT�jzVq�zTrUDIB2bIB7zVq�zTrUDIB�PT�jzVq�Dj�CDIB�PT�jzVq�zTrUDIB�PJBLY���V�7vDIBDi��wYU�gYhI�uN7hDT�jzVq�zTrUDIB2bIB7zVq�zTrUDIB�Pv7��w7gVwBCDIB�PT�jzVq�zTrUDIB�PJBLY���V�7vDIPTP�HNiJq�zTrUDIB�PT�f��L�zTrUDIm�DTB7zVq�zTrJDJ��DT�jzVq�zTr4DIH7dNznYv�6qVrBg2L�qVvLDUP�YhYnuSL�z�PkYhB�qV�nqYB=iV7�iW4hVDH6qY7uiVv�BJ��dw�nq��hiUP3BJ�aD�B�BdY4�dP��I�vB�6vzJ��PT�jzVqCgI�7u�BVqY7fI�4=DY36gTLJgNY���LvDN��gVH�iWqSiW�Liv�6qjPOgNY��WH�BI46i�7�iVH�PW4niN76g�qzgNY�qWH�BI46i�7�iVH�uTL�zTrUDIB��I�rzUqPV�7�u�B�gJY��Vq3YhI�V�q�i�B7��4TBW�nqI�SiNcvd�4aV��LiT�WiWv�I��Jdjf�zJ��PT�jzVqCgI��uTq��Y����q+D�L0DIq6qV�wYW�gV��UBV��idY�gI6JDJYdBY�SIdY4zTmvB�rrYJY7b���iJq�zTrUDIB�PvrfzW3�iIPTDIBDB�v7zU�Oi��6V��V�I�kYv�h+v�TgDL7iWLvYJ�ndJrUg2L�uV3�gWHJu�rCDIB�PT�jz�r��I�NVY3+g��dzVL�Y��UuY�v�r7�P�4�gI�6g�qzgNY�qWH�BI46i�7�iVH�PW�Liv�gB��S��B7zVq�zTrUDJ�2zVBw�U�PYh�UD�3V�rqw��B�D�0�uJv6qY7�z�r3YW��V�q�i��fI�4�BhBLi���iNuvY�4LBdqaiVHDVY�YqTL�zTrUDIB��I�rzUqPV�7�u�B�gJY�DW3OiV�6DIq6qV�wYW�gV��UBdYvqdY4zTmJD�rjBd�CBdIv�IIvuWYLB��JBdY�gIsviN�fBV�JudP��I�vB�6vBdY4�dYP+N�JdjuvBV�nBdY4+vINBN�BB��j�jYOi��v���vBY7jI�Iv�IIv�2L6BVHL+hP��IzvVUI�Bj�jzhPOqY�JDhPnBI47B�vk+h3=dJ���IH�gNYvIh�=PVvggTH�BU�vgdBaPVYLq�q�PT�jzVq�zJHUII32g�BL�U��zv�JVWvg��7uI�7��J4vP�qVi�7uDV�vB�YvB�rjDjP��I�vB�6vBdY4�dY�gI6JdjuvBI47dhY��ImvudP3B��4zhITDhIvB�rrBI47DhP�B�IvuD6vB��nYd�N�ITvV�PjBdYv�jY�udIvV�BDBdY4�dY3B�IvuWYvB����jYgqdcTB�BjBW�vVdPCBW6vd��JdIsnb�7kgV34dJYnq�YdB��vgDLvPYq�gTH3PJmniVBUdJ�LPJY�qUY�id�ndv�ni2LdB�qkuVH�PY�TPTH3PN�NiJq�zTrUDIB�PvrfzW3�iIPTDIBDg��fIU���TP�uJv�BI�kYTv�PYq��DL����vuIr�+vqzg�Y��U�vYTrJdS60g�H�IwfnIh3�dvq��rBSgNPg�WLvdw��PT7S��3P�J�SDv�CDIB�PT�jz�r��I��V�3D�VBLB�qPV�7�VY3nPhP�+vIvVUY�BdP�idYgzT�v�j��BI4v��Iv�IIJD�rjBd�CBdY3+hIJd�q�zJ��PT�jzVqCgI��P�q��VfhPw7��YuTVd�VqJ�wiwPOgI��i�7aiNfJCJv7�wP6gjqSiwP�d�4vd�7nq�PfiVq3b�L�zTrUDIB��IL7b�L�zTrUDI32�Y�L�w�P�I�LPr�vgW�wiwPOgI�vu��Di���b�YI�vPLP�BUgJY���B�zvfvdYBNPT7fPN��zTrnPY���T�jI�r3YW3Tu�BNPT7fgrBPYhYaV�z�qT4jzVLO��7Luh�V�rqI�wq�zT��uJ�+g�YdzVLPVrf�uJ�4u�3dgTL�zTrUDI3hDT�jzVq�zTrUDIB2�r77gwq�iYPaVjf4g��wdWHu��Phu�BUi�4F���ug�Y�DN��gVfhYUYgD�T�DV40u�L���LC�VLhDTP0gTL�i�BuYU3ODTP0gTL�gNBC�U3nDN�6uv3dDW�ug�Y�DJ�0+T�SgJ��zTrnPrq6VV��qNB�zv�TVY3DgWrwYU7�zT��YVLVDrm4d�PV���zYVLD��Y7gN��qJHUDIB�PT�jzVq�zTrUDIB�gv7���4OYvPvP�3BPv�dzW�uYwBCDIB�PT�jzVq�zTrUDIB�Pv7Lb��gYTP=uIB�iT7w�V3��T��V�3BPv�udVq+�J��V�����YNiJq�zTrUDIB�PT�jzVq�zTrUDIB�PJr�VVqCzv��P�qVqrqFDW�zg��nPY�rq�7wbVvgi��6P�PnPT77VVq+�J��V��4u�v6�j3zIvfvdYBhgJfSVWv���u�YvB�iI77zVL3Vr�6u�Ph�r3IqJL�����P�q�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�wi�v�zJqnPIP+g��LP�4zg�r�P�q�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrJd2L�uU�vuVq�+J�CPNY�zNY�PVr�dvqz�SL7+NY�Ih�=qVrBg2L�qVvvgILUqVYjqVY�uV3kYhB�qV�nqVY�qUY�u�P6zVHUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzU�ggIr�D�q6�r7��V�B�d�UI���gJY����+D�3dVY�vi�7dijqjgIrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zT�=u�fv��r�BdrgYwBCDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVqWIVHUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIm�DT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzU�ggIr�DY3b�r�uIU�P�WsJVj�6��mS�V3��T��Vj�����fDVH+�J��V��4u�v��wB+�Tu�P�3���Lu�TL�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�Pv�Sb�Y��J4vPrqYBTB7zVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVqWIVHUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDI�0q�YPB��JVWvnBY7CddY��ImvudP3BdY4�Y�LbdrOiY�FBI47zdY4zh�vB�rrzJ��PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PJr�VVqCzv��P�qVqrqF�W�zYj�nPI�rPT77VVq+�J��V��4u�v6�j�zIvfvdYB�iI77zVL3Vr�6u�Ph��3I�j�+D�q�DIBPiI�jIU���vPTYN7DPr�I��L�Y���P�q�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zT�=u�fv��r�BdrgYwBCDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB2bIB7zVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq+�vPhV��4i��aIU7��d�UIrB2qY7uuJq�YJ4hPr32iJB�bV3g�T7WV�q0i���YUY�zJqnuY3Di��V�NquINqUD�3DiJrud��kqJHUDIB�PT�jzVq�zTrUDIB�PT�jzVqWIVHUDIB�PT�jzVq�zTrUDIB2bIB7zVq�zTrUDIB�PT�jzVq�D�76P�3V�V�7zVLgYN36u�qVqV�fddqjgIrUDIB�PT�jzVqWIVHUDIB�PT�jzVq��vPhuh�VBTB7zVq�zTrUDIB�PT�jzVq�D�76P�3V�V�7zW�uYwBCDIB�PT�jzVq�zTf�zJ��PT�jz��jPJHUDIB�PT4�iNrjgIrUDIB�PTL7��H=�WP6g�YOiV7�PW4S�w�7u�BVqY7fI�4Udw76g�qziNPSgJsviN�+BV�wIjYOiYuv���nBdPdB�Y���0vBh�vBdY�d�L�PVr�dJ�CPNY�zNY�iJq�zTrUDIB�Pv�LbdrOiY�FBY����YgzNfvd���BI47�dP��I�vB�6vBdY4�dYOPVTvd��CB�L�IhYg���v�IBfBY7CddYP+N�vd���B�L�IhYg���v�IBfzJ��PT�jzVqCgI��uTq��Y����q+D�q0DIq6qV�wYW�gV��UBV��idY�gI6JDJYdBY�SIdY4zTmvB�rrYTH7b���iJq�zTrUDIB�PvrfzW3�iIPTDIBDBIvdzU�Oi��6V��V�I�kYhB�qY�Tg�Y7iWLvYJ�ndJrUg2L�uV3�iWHJu�rCDIB�PT�jz�r��I�NVY3+g��dzVL����UuY�v�r7�P�4�gI�6g�qzgNY�qWH�BI46i�7�iVH�PW�Liv�PB��S��B7zVq�zTrUDJ�2zVBw�U�PYh�UD�3n�I�wiwY��vPaV�3�PhYP+N�vd���B�L�IhYg���v�IBfBdY4�Yq�gd�TzVHUDIB�PT�jiJq�D���uJv�q��jI�r3YW3Tu�B2�W�fDU�OiVBUPrq6V�r�IW�gVr�FBY��bdY�YN�Jd2LYBY7vPdIv�IY��drBzJ��PT�jzVqCgI��uTq��Y����q+D�3dVY�vi�7dzU�Oi��6V��V�I�kPV�SqVrUg2L7DJqvPIBvPVY3g�H�Iw�ngDLvPY�TgUY3dVmnYNYLqV�CPNY�zNY�PVr�dv�h�wY7+NY�YNPvPVrJi�snb�7ku�qTdv�v�SL3YNY�YvrnPVY3g�H3PU��uI7JqV�BPSL�uU�kdTrUqVTNiIH7q��kIh�vg��Jq��FiJH3gW��dw�nqI�h��vg��4v�V��qjIhiU�S�TL�zTrUDIB��I�rzUqPV�7�u�B�gJfSVWv���u�YvB2���aIW4g��P�DIH�uU�vuVq�+J�CPNY�zNY�PVr�dv�Tg�Y7+NY�Ih�=qVrBg2L�qVvvgILUqVYjqVY�uV3kIh�7qV�nqVY�qUY�u�P6dS60g�H�PVqvPV�TdJr�qVY�IVL�PVr�dvqvqVY��N�vgIvU+vqOq�HkzVqvidqLdJ�v��HdBwY=�wPJD�7�iJr=iU���WLvD���qU�ai��g��v�DVP�i���iN��D�4SBJ��q�7�iwP�PWLvDI�L�ILfgNY���v�d�BCDIB�PT�jz�r��I�NVY3+g��dzVLPVrf�uJ�2g�BaDW3�IT�6g��ui�LCqW4hV�qLPTLWi��T�W4�uW�6PT4FqUP��W4=BOHnq�L�i�33Y��vdj��BI47B�PPzJ�JVYqbBdP�iIB7zVq�zTrUDJ�2zVBLY���V�7vDIq��VBL��Y�dJ��i�H�uW�vP�B�qYq�gIH3P�H�IhqTqVY3g�H7DJqvPIBvPYqJqVY7��H�iJq�zTrUDIB�PvrfIWH�id�huN�2�WYwdW4�Dr��u�fTPhPgIv�JDSLJBVH4u�YPPduvuU�jBV�7BjY�+JmviTqJzJ��PT�jzVqCgVHJzJ��PT�jzUq�YT7huYqBPv7aYUYP�v��u�fTPJ�LbVLgV��zuW4+�r�Sgj�CzvfTdYBNPT7fgN3�zTrnPI���T�jI�YBg�qUD�3V�rqw��B�zTrnPIP+g��LP�4zY�rhDIBDq�7LVU7gVr�gIr���T�w�U��iIuvDIBDg��fIU�zYU��Dvr�PT�jzVq�qJHUDIB�PT�jzVq��J4LDT32�Y7�P�POYTu�Vd��P����wBCzJBJI�PTPY�6�w�z��7JPr�vgJBF���u�UB�V�q���LdqJHu�vrSDvP0Pr3��JHu�vrSDvBNiv3wI��CYU3�DV4TPY�6�wrz���JuYB��T�jI�r3YW3Tu�BNPT7w�V3��T��V�3B�T��z�BDYV�WYd�VYYm�bYBD�YPdDvB6BTB7zVq�zTrUDIB�PT�jzVq�zv�6u�qVqr7�Bd���I��DIPTP�HNiJq�zTrUDIB�PT�jzVq�zT�Lu�B+ir��dWH�zJqnu�q��r�Sg�4��I��uN��gJruIW4OIJ�NzJ��PT�jzVq�zTrUDIB�PT�jzVq�zT��VW��iT7wij�gYhrOdV��+v�dI�YBIh�nu��giV�SY���ITrLDW��gJruIW4OYUB�Vr�NbI7fgN3C�Y�JVWvg��7uI�7�zv�LDIBD���wYU������I��DB�vdijqjgIrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUuYqPPTLjI��YiIPvV��Y+TvjijqjgIrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jbwuvB�YvB�rjDjP��I�vB�6vBdY4�dYOPVTJdjuvBI47dhY��ImvudP3B��4zhITDhIvB�rrBY�n��P�B�IvuD6vB��nYIB7zVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIq6iI�jPJL3Vr�6u�Ph�r3dzDL�zvfTdV�hgJY�DW3OiV�6Dv3hDT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�wdUPOi���uW�Vi�HNiJq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB2bIB7zVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVqWIVHUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIq6iI�jPJ3��v��P�q6g�H=��P3V��Wu�q��r�Sg�PPVrf�uJ�UgJruIW4OYUBNVrBNgv�uI���gVL�P�q�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zT�=u�fv��r�BdrgYwBCDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB2bIB7zVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq��DH6gU�J��v3Y�4niN7Lg��Wiw���W�Liv�7u�BVqY7fI�LvDI�LiT4WiWv�IIL�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zT��VW��iT7wij�gYhrOdYu�bY�dI��BITrLDW��gJruIW4OYUB�Vrz�bI7fgN3�zv�LDIBD���wYU������Irz�gJY�DVq+gY�UD�q6�r7��V�b��c�IrBDBIv7ijqjgIrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�wdUPOi���uW�Vi�HNiJq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�Dj�CDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�gv7���4OYvPvP�3bu�3dzd���hY6Pw�2BVr��jr��J3NVj��gv�6bV4O�vPTV��v��LjIU���vPTYN72P�4jzVL��J3�uN�nBTB7zVq�zTrUDIB�PT�jzVq�zTrUDIB2bIB7zVq�zTrUDIB�PT�jzVq�Dj�CDIB�PT�jzVq�zTrUDIB�PJBLY���V�7vDIBDi��wYU�gYhI�uN7hDT�jzVq�zTrUDIB2bIB7zVq�zTrUDIB�Pv7��w7gVwBCDIB�PT�jzVq�zTrUDIB�PJBLY���V�7vDIPTP�HNiJq�zTrUDIB�PT�f��L�zTrUDIm�DTB7zVq�zTrJDJ��DT�jzVq�zTr4DIH7dNznYv�6qY��gSL�DW7�g�YJqYqng2L�uV3kuI7UdJr�gVY�BW4kPYY4zVHUDIB�PT�jiJq�D���uJv�q��jI���V��6DIH�BW4kPYY4dJY0qDL�PV�n+h3=�TPhu�H��UrkiI�4dS60g�3bBV�nP�7v+JINiOL�BW4kPYY4dS60g�3DiJruDW6vBU�hBI47D�Y�udIvuUrYBdYdiTB7zVq�zTrUDJ�2zVBLY���V�7vDIq��VBL��YjgIrUDIB�PTL7iNPjgIrUDIB2qJ��DUB3YTvUVW�VqY�hIU�O���UuTq�gW�S�W�gV�v�D�3DBVBwYd�+��Phu�B���YNiJq�zTrUDIB�PT�fd�B3Vr�=uIB�iJ�hIU���h�hu�B�i�B7PJL�D�4NV�Bn��YNiJq�zTrUDIB�PT�jzVq�zT�=VY3bi��jPw7�V�vadJq�PT�jzVq�zTrUDIB�PT�jzVq�zTrUD�3DBVBwYVqzITraDI�4��7F�TL�zTrUDIB�PT�jzVq�zTrUDIB�PT�wDU�gYTPSdNq�PT�jzVq�zTrUDIB�PT�jzW7PV��6DIB���rwiw�gzJ�JzJ��PT�jzVq�zTrUDIB�PT�jzVq�zTrnP�36qv7dzd��zJBUdr�Bi�HNiJq�zTrUDIB�PT�jzVq�zTrUDIB�Pv�aDW4PYN�NzJ��PT�jzVq�zTrUDIB�PT�wdW3���YUD����J�juhPjgIrUDIB�PT�jzVq�zTrUDIqDir7L��rODr�JzJ��PT�jzVq�zTrUDIB�PT�jzVq�zTrnP�36qv7dzd��zJBadNq�PT�jzVq�zTrUDIB�PT�jzVq�zTrUVV�+ir���hqjgIrUDIB�PT�jzVqWIVHUDIB�PT�jzVq�zvf�PI3�Pv�dzVL��J3�uN��+v��IW�u�T��V�q0�TLjPwqOIT�huY3b���fzW3P�U��V��V��7�B�L�D�4NV�BnBTB7zVq�zTrUDIB�PJBLY���V�7vDIq��VBL��Yu��r�uTB�iV��BV7��J4JuW��iT7fV���qJHUDIB�PT�jzVq�zTrUDIB2�Y7uI�r�id�UuhBVgV�hIU�CzvfSd�B�B�LI�TL�zTrUDIB�PT�jz���zTrnP�3���LI�TL�zTrUDIm�DTB7zVq�zTrJDJ��DT�jzVq�zTr4DIH7dNznYv�6qY��gSL�DW7�uI7n+v�0PTH�uV3kdTrUPVr�PTHLgw�vYN3UqY�Ji�H�Y�rkPVr�dvqBg�Y�IV7�iJq�zTrUDIB�PvrfDW4�DrP�uW�2�W�fDU�OiVBUB��nYdYgqVIvV���BY7jd��N�ITvuVrjB�cJuhYSDJmv�w�+BVHL+hYPg��vV���BY7jd�YPgY�Jd2LYBY7vPdY�+J�vuD6NBY�7qhIv�IIviJv�B���D�Y3��mvBU�LBI47�IB7zVq�zTrUDJ��q�B7zVq�zT�NPrq+�Jr�dVqgi�PvVdBD��fSB�q��TP=ud��i�7dPN�jgIrUDIB2BTB7zVq�zTrUDIB�PT7fd�Y��I��DI3b��BaIUPO�h�hV�3�iJBwgwqu�vPvVY�4i�LjPw7+�VL�dNq�PT�jzVq�zTrUDIq6iI�jgw7�D�7Nu�BBiT7fd�Y���qUD�B����LIUP��TvaDvz�bY�Iz���qJHUDIB�PT�jzVq�zTrUDIB�gJ�fgj���j�UD�3DiJrud��ziIPnVV���WrwYUBOzJqaV�3Vq�Bfd�Y��IfhuY�vgJfhuJqWzT�LuY�vgJ�hIU��zT7TIdBV�VBLYUY��Y7JVdBV���7uN�kqJHUDIB�PT�jzVq�Dj�CDIB�PT�jzVq�zT�6u�3bi�YNiJq�zTrUDIB�PT�jzVq�zTrnP�3�������q+Dr��uY3Bqr�L�WLPij�FuIqV�J�jPJ�gDrPTuT3bBVB�z�B3YhYnu�B�PJPjzW��iYPNDIB+qr�hYU��iYPvP�Ygq��hYU7�gVB�dNq�PT�jzVq�zTrUDIm�DT�jzVq�zTrUDIB2qJBLYW�u��r�P�qbiTLjuNPuD�T�DTP0Y�LFbw�uzh3JDU�NPT7fI����UBNVrBNPT7w�V3��T��V�3B��HNiJq�zTrUDIB�PT�wi�v�zJ3=u�BVqV�jPJLOYTu�Vd��i�B�gSLBIJ�NzJ��PT�jzVq�zTrUDIB�PT�fDW4�DrP�uW��gJ�����P�W36uhrh�r3I�TL�zTrUDIB�PT�jz��jgIrUDIB�PT�jzVq�iYu�Pr3+qI�wiw���N3JV�qYiT�6�w�u�h�7d�B�gJ�fgj�CYwBCDIB�PT�f��LjgIrUDIB�q�L7iTL�zTrUDIB��I�kgIHT+vqziwY�bV6nYT7=PVr+gSL�b�qkPVr�dTH�PJY3uJqkiV3TqYq0PNY�BW4kPYY4dJY3g�Y�gW�wij�3VrfvBY7jd�IJP�qjgIrUDIB�PTL7z�r�iYu�Pr3+qI�fd���iV4vVU��iNuvY�4LBdq6g��ui�L��NPJD�76��H�iV���Wvh�I3Li��aiV�OBJ47d��6g��ui�L��J47DW��q�YIi�TvBJvaB�36��qJi������Liv�LgY��iV��iW4SVWPa��LOgNY�DIL�zTrUDIB��IL7b�L�zTrUDI32�Y�L�w�P�I�LPr�vgW�wiwPOgI��VdBD���Lij��IJq�zJ��PT�jz�qjgIrUDIB�PT�jzVq+D�0vuN��bI�fd���i��Ju����v7uDVH��J3NVjBVqY���V4CzJ�FDU�n��HNiJq�zTrUDIB�PT�wi�v�zJ3FP�3+qJfhdVH+D�0vuN�NPT�hPw�OiY�JPjBBi�LI�j�zY�r�P�q�PT�jzVq�zTrUDIB�PT�jzVL�D�m�DIz�PT7fIWH3V�vTI�v�gv�6b�73�vPhu�BUi�7fYU��D�0vuN�2�Jr�BVLO�JBUP�B2iVr�BVL��v��DIB+qr�hYU��iYPvP�Ygq��hYU7�gVB�dNq�PT�jzVq�zTrUDIm�DT�jzVq�zTrUDIB2i��fdW4�qJHUDIB�PT�jzVq�zTrUDIB�gJ�fgj���j�UD�3DiJrud��ziIPnVV���WrwYUBOzJqaV�3Vq�Bfd�Y��IfhuY�vgJfhuJqWzT�auJvVqT�jDU���vP�uJvVqV�rVUPP�vPFDV����HNiJq�zTrUDIB�PT�f��L�zTrUDIB�PT�jzUq�iYPaVjf4g��wdWHCzJBJV��0iv3�d��z�V4�P��0i�4jzVL�D�m�YN72P�4jzVLOYTu�Vd��i�B�ghqjgIrUDIB�PT�jzVq3Yv�UDTqbqW��Bd�Czv�TVY3DgWrwYU7CYj�0Dv3hDT�jzVq�zTrUDIB�PT�jzVq�iYu�Pr3+qI�jIU�PVr�=uIqV��qF�W�kqJHUDIB�PT�jzVq�Dj�CDIB�PT�jzVq�zT��V�3D�VBLB�q3YhrNu���gv7dPJ�uD�7�uW���T�jI���Drr�dNq�PT�jzVqWIVHCDIB�PT�jbwrCPJHUDIB�PT�jiJ�v�W��B�7LghYO�YIvBYB�B���qhY��UIvd��kBdq�YjY3���jgIrUDIB�PTL7��v6VV7LiU�FiWTNgW4JV��nqVsNi��CgWHS��qaqW�N��mT�W�Liv�6q��IiW4CgWLJB�3LPJ��iW4P�U�auI4aPN�ai�mNqWLviJ�=PT�Fi�Y�Vw�LuY�aq�7ziw�ggW7UDdB6gJHFgWq��WvvDY3�iVrIiV4O��v=udq=PT��DT�jzVq�zTr4DIY2qv�uDW3OITrnuTq�gW�S�W�gIT�FP�3+���LuJ�vuUrYBdYdihYP�IuvV�BbzJ��PT�jzVqCgI��uJvV���uDUY��T7Ju��0ir��B��viJ��BY�4P�P�+vIvVUY�P�3+�Y7�+h3=dvqn�JY7�w��gDH6dvqOiWvgg��fdW4jgIrUDIB�PTL7iNPjgIrUDIB2qJ��DUB3YTvUVW�VqY�hIU�O���UVd�0ir�uDVH+D���Vd�Tgr�SY��jgIrUDIB2BTB7zVq�zTrUDIB�PT7fI���zT��DIBD��rwiw7�YjY�V�q+PW�Sg�4O�Nq�D�B2q��wdUBgYTP�DIB�qI7fzW3P�U��V��Y��HNiJq�zTrUDIB�PT�fDW4�DrP�uW�2��BLiw�CD�0�uJ�DqW�wbdBgV���D�3DB����NquIJL�Irz�iW�hYW7P��PFuN��BTB7zVq�zTf�zJq�PT�jzVq��VH4zJ��PT�jzVqCgI�6gT6�i��4gW4v�r�ai�LUq�P�zTzJdr�hDIY�gW�wij�3VrfvzJ��PT�jzVqCgI�Lir�=iV���W�LBJ76q�7zgNY�BJ4aDJ7��UfNiUP3BN��Bw7aiVHIiwY�Y��6DJ7nq�PfiVq3CJ�6V�7�iWr�iWqSiW4�BNPnqVHOgWq��WvvDY3�iVrIiUP+I�4SVW7=PT�hi�L��W7UD�7LqI�u��v3Y�v6u��LgW�NgWq���L�zTrUDIB��I�rzUqPV�7�u�B�gJBw�W73��PaV�u�gr�hIU��iV��PYB2�W�fDU�OiVBUBV�4YdIvIJsvV���BY7jd����W7��J�SuY3DBd�N�ITvdjP�BVr3zh�N�Vr+���Ju��v�r7�BV7gYhI�d�T4q�4�Bdr3IhYBVY3VqY�Sg�4�irP+DOL7gwrkPVLvqV�NPSL7��znYSLSqY��iJYdBwInPYP=dJv�iNYkzVqUiJq�zTrUDIB�PvrfzW3�iIPTDIBDgv�uIW3�D�0�uJv6qY7���LJDT�aqdYaiWv�Y�v6u��LgW�N��4CBJ4Udw7Jq��FgNP�qW4�iT4Jq�7SgVq+PJ����uvDV��gVrwYUBO�h37B�HjV�PC�JsvB��JBY7jq�YP�VsvuUrYBdYdihIv�IIvV�BBB�����Y��V�JVIBdBI47zdY3+hIJV�BvBY�jbjY�YN�vih�vB��nDjYPB�qjgIrUDIB�PTL7z�r�iYu�Pr3+qI�wDUPO�U36VY�TPhY�gY�vV�rWB��nYdYgqVY�D��4VWInb�7kYJLhPV����Y7CJ4kYJ�aiY7�u�3bi�B7zVq�zTrUDJ�2zV�wgw�O�J�FDIYVBr�SYUq��J4JuW����4+iWHSBOHLg��Ji�mN�W4JDI46qI4=gNuJD�vUud3CDIB�PT�jz�rCgd3CDIB�PT�fz�rPi�3�V��2iV��BV7��J4JuW�2�W�w�U���IPNuTBUgJBw�W73��PaV�u�gr�hIU��iV��PYBNPT7wIW3��TI�DU����B7zVq�zTfNzJ��PT�jzVq�zTrUD�qDg��w�VqzITrnV�q��r�I�j�+�V��DU��B�7�z���YvPFDIB�qI7wIW3��TINzJ��PT�jzVq�zTrUD�3DB��jzd��zvf�uIq6��4IBV3g�T7Wuh��i��wqJH+�I��u�B2�W�w�U��zTrTuW��i�47IUqPYT�SVYq�irmS�W7��J�SuY3DBI47IWLPVr��Dv�hDT�jzVq�zTrUDIB2�r77zVHP���4uW��iT7fI���zJ6ndYB6BTB7zVq�zTrUDIB�PT�jzVq��J4LDT3b��BazUP��VqnP�3��rqF�W��zTraI�3+�VfhDV�CIT��Irz�qTLu�TL�zTrUDIB�PT�jzVq�zTrUDIB�PT�fIWH�id�hDI�vi���z�P��T�6uT3D��fSB�H3YhrNu���gv7dPJ�k�Ir7d�B�gJ�fgj�CIJ6NzJ��PT�jzVq�zTrUDIB�PT�f��L�zTrUDIB�PT�jz��jgIrUDIB�PT�jzVq3Yv��uhBD�VBwb�7Czvf�PI3Du�v��wB�zJ�IP�q��V�wiwYg�WHaDvB�bY�I�wqCVwBCDIB�PT�jzVq�zTrUDIB�PJBLY���V�7vDI3D�V��YdqjgIrUDIB�PT�jzVqWIVHUDIB�PT�jzVq�D�76P�3V�V�7zWvPYN3FV��hDT�jzVq�Dj�CzJ��PT�jz�PCgVHCDIB�PT�jz�r�dv�0q�Y�D��vYT�adJrTiNY�BW4kPYY4zVHUDIB�PT�jiJq�D���uJv�q��jIUqPYT�SVYq�i��fd���iV4vVU��iwY�Y��6DJ76g��ui�L���L�zTrUDIB��I�rzU�gVrf4uJTTPv�Lb�PO�vP�uW��iV�+��47�2H�q�YIi�TvBd��i�P6Bhq�ddY3INmJdrB6BVH4u�YPPduvuU�jBV�7BjY�+JmviTqJzJ��PT�jzVqCgI��P�q��VfhPw7��YuTVd�VqJ�wiwPOgI��i�7aiNfJCJv7�wP6gjqSiwP�d�4vd�7nq�PfiVq3b�L�zTrUDIB��IL7b�L�zTrUDI32�Y�L�w�P�I�LPr�vgW�wiwPOgI�FP���qvruzUqCzv�NVYqb����P�4CIVHUDIB�PJYNiJq�zTrUDIB�PT�jI���DrrUIrB�gJ�wgw���dcnVYqDgYmhdWHgYN3hDTB�Pv����qgid��Vd�Yq��hIUP�zTrad��Dqv��dU�PYJ�6Dv�hDT�jzVq�zTrUDIB2�r77zVHgYhrNP�3niT7fI���zJL�P�q�PT�jzVq�zTrUDIB�PT�jzU�gVrf4uJTTPJ�fD�rgYwBCDIB�PT�jzVq�zTf�zJ��PT�jzVq�zTrUP�q��VfhuJqOiYuhDIYVBr�SYUq��J4JuW�����uzUBO���6DTB�BT�jD�B�zvf�PI3���LI�TL�zTrUDIm�DTB7zVq�zTrJDJ��DT�jzVq�zTr4DIH7qJ�ngdrT�I�IV�3+�Wr�dW4jgIrUDIB�PTL7z�r��TP�VY��PT7fzW3P�U��V��VPW�SYU��iV4=V�B2�W�fDU�OiVBUBV�4YdIvIJsvV���BY7jd��nuVPndJINg�HdBN�vuVB=PYqCiJInb�7kISL7+vqLPNInb�v7P�7O���vP�qVqY�SYUY�zhYTu��0qVBw�jrg�W4vd�v�g��SbdrOi��FPY�vg�4L��Pg�vPhd�L�g��SbdrOi��2Pr3Div7�Bd�3YT��P����YISYU��iV4=V�BWiJH3gW��dw���T�ziN�OPW4J�dqnq�PfiWv�Y�vaBIrUYd�V�V�Li�7gPD60g�H�Iw�vYJL6qY�TPTHdBwrvYTPvdvq�gDL�uV3kPYY4dv�ngDL3V�fnYJvUqVr�i�H7q�PvYJL�+v�Tg�Y�dJ0nuVBSdv�Ji�H7qU��uY�JqVYnq�Y7VWvvuI4a+JrBgVYLY��vIh��qVrP�OL3�VH�uVB7PVrPqUY�gNYv+h3=dvqz�OLdBN��Ih3�dJrT��H�z�PwdUPOIhY�uWvD�VfSi�L�i�0vuhBDi��uYU���dYIPY3b�r7��YPdY��6uJ�g�r�SYIL�zTrUDIB��I�rzUqPV�7�u�B�gv��d��3Yh�vDI3b��BLiwYg�I�Li�Y�iV6T�JLJVU76gT�hiUcN�wPJD�76�T4fiVvCCJLJuI�6i�L�zW�LIU�O�W4nu�q�qVr�VW4��v��gj�Fiw���WLvVV�aiVH�DT�jzVq�zTr4DIY2�Y7uI�r�id�UVVT�qW�wYW3OgI�LgI7�i���CJHJBY�6idIv��BaYW�NBN�BBVrd�jP�IJ�Jd2LYBY7vPY7L�UB���YCDIB�PT�jz�r��If�uI3+qWzhdVqDV�3=V�32��r�b�Y�dJvYiVY7qUfnuILL+vqfq�Y�b�qvYh�vdv��iJY3zU�NiJq�zTrUDIB��I4NiJq�zTrUuT3VgV�wi�7��v�4uWvb��r�b�Y�D�0�VY3+�rISYU��iV4=V�BUgJBw�W73��PaV�u���7uD��3YT�6IrB�i�4jzVLPYT0�uY��qY�duJ�CIVHUDIB�PJYNiJq�zTrUDIB�PT�jIUqPYT�SVYq�irmhdW4�i�7�Vd�YPv�dzVL��TP=ud��i�7Vb�7gV��SuYqbir�I���+��3aDU7�i��j��Y�zJBvD�32gr�Sq�3g��PWuh�V�V�Li�7gYwBCDIB�PT�jzVq�zTrnVYqb��r�b�Y��j�UD�q�gW�wiwPOg�c�DU��CT7�uhP+�IrTVYB�i�47IW3P�v��u�fTBTB7zVq�zTrUDIB�PT7fI���zT��DIBD��rwiw7�YjY�V�q+PW�Sg�4O�Nq�DU�2g��dzU7��TP�P�3bi�BaVU�P��YUDU�TgJBw�W73��PaV�u���7uD��3YT�6d��Dgr�hIU�O����dNq�PT�jzVq�zTrUDIq6iI�jg�7O�vPvP�BUgJ�fgj�CYj�0Dv3hDT�jzVq�zTrUDIB�PT�jzVq3Yv��uhBD�VBwb�7Czvf�PI3Du�vV�wB�zJ��uJ�+qWB7uN���jc�Ir����YNiJq�zTrUDIB�PT�jzVq�zTrUDIB�PJ�wgw�O�JBUuWvV�T�rY��P��PNP�q6qW�7gw�OV��hu��Di�LjDdq�zT�hDIBD��YfI��CYwBCDIB�PT�jzVq�zTrUDIB�PJP�iJq�zTrUDIB�PT�f��L�zTrUDIB�PT�jzU�ggV3FP�3+qJfhdVH+DrfTP�Phqv3dqJq+�I0�VY3+��r�BV��D��6uJ�g�r�SYdP��V4vP�qVqV�juN���jc�Ir����YNiJq�zTrUDIB�PT�jzVq�zT��V�3D�VBLB�q�D��4V��hDT�jzVq�zTrUDIB2bIB7zVq�zTrUDIB�PJBLY���V�7vDIqgg��fdW4kqJHUDIB�PJP�iTL�zTrUDI�0�ILUiJq�zTrUDIB�PhYP�J�v�d�7DIPbi�BaVU�P��YCDIB�PT�jz�r��I�NVY3+g��dzVL��TP=ud��i�7Vb�7gV��SuYqbi��fd���iV4vVU��iwY�Y��6DJ76g��ui�L��wuv�2L�Bdqv�dY�qdfv�w�bBY�4g�B7zVq�zTrUDJ�2zVBw�U�PYh�UD�q�gW�wiwPOgI�FP�3+���LuJ�v�2L�B��kd�Y��W�vV�BbBdP�qh�N�ITvu�B0B��7q�Y��W�vVU��IY�vgJBLb��g�hr�uWv6iY7ud�cJVVYBBV�JudY�iI�vB�rrzJ��PT�jzVqCgI��uJvV���uDUY��T7Ju��0ir��B��viJ��BY�4P�P�+vIvVUY�P�3+�Y7�+h3=dvqn�JY7�w��gDH6dvqOiWvgg��fdW4jgIrUDIB�PTL7z�r��J3�u�B����rY��P��PNP�q6qW�7�w�6DW����u�iV��qW4�BN�6q���iwY�gWLJB�3LPJ�0DT�jzVq�zTr4DJ�0DT�jzVq�D�f4VVv0�r��zWv�YhY=P�q6qW�7zU7��h�NYd�V�V�Li�7gIJqnuTq�gW�S�W�gY��FV�3+�Wr�dW4zIJBad�B�gv��d��3Yh�vIrB�i�L�iJq�zTrUP�q�PT�jzVq�zTrUDIBDqv��dU�PYJ�6VjBbi�BaVU�P��YUIrB�gJBw�W73��PaV�u���7uD��3YT�6Irz�i�7Fb��+�WHaDI�4qI�juNY+D���Vd�Tgr�SYWP���P�P�v6g�7I�TL�zTrUDIB�PT�jzVLPYT0�uY��qI����q+�TP=P�q6qW�=�j�+�V��DU��B�7�z��PITrad��Dgr�hIU�O��zNzJ��PT�jzVq�zTrUD�3DB��jzd��zvf�uIq6��4IBV3g�T7Wuh��i��wqJH+�I��u�B2�W�wb�q���P�P�v6g�7dzV��gY�NVYqb����P�4u�T�6uJ�g�r�SY�Y+�TP=P�q6qW�7ghqjgIrUDIB�PT�jzVq3Yv�UDTqbqW��Bd�Czvf�PI3��r�=����qJHUDIB�PT�jzVq�zTrUDIB2�r77gw7�D�7Nu�BBiT7fI����UB0VrBNPT��YU��id��DU�nPv�I�j�BzJ�NzJ��PT�jzVq�zTrUDIB�PT�jzVq�zTf�uI3+qW��zUYgV�BUI�3�g�7uz��3Yh�vDTq6q�Bw�wPg�vY�DV7hPT�7qJq+DrfTP�Bn��HNiJq�zTrUDIB�PT�jzVq�zTf�zJ��PT�jzVq�zTrUP�r�PT�jzVq�zTrUDIq6iILfd���i��JuN�UgJ�fgj������d�B�i�IhIUP�D���uWv�PJ�SYU��iV4=V���PvB�Bd�gYhI�DU�nPv�I�j�BzJ�NzJ��PT�jzVq�zTrUDIB�PT�fDW4�DrP�uW�2��BaYW4kqJHUDIB�PT�jzVq�Dj�CDIB�PT�jzVq�zT��V�3D�VBLB�qgiIPhuh�YBTB7zVq�zTf�zJq�PT�jzVq��VH4zJ��PT�jzVqCgI�6���hi���uWHS��q6���W��mT�W�Liv�Li�HWgNINuW47d��ai�4uiJ3+�IL�zTrUDIB��I�rzUqPV�7�u�B�gJBLYU�O�v�6Vj�g���wYVq��v��uY�vi��kg�YJqYqng2L�uV3kuYq�+v�NqwY7�NfnYSL�zVHUDIB�PT�jiJq�D���uJv�q��jIUBO����u�u�gJruDVq��v��uY�vi��kPYYTPV�rgJYdB��vPVr�dJYO�UY�bV4�+h3=dvqzPNY3YUBkYv�S+v�N��Y�uJq�PYP�PD60g�HLBJvkg�Y�dvqngWY�D��vYT�hdv��gSL�DW7�PV�SqY��i�Inb�7kYJvUqVr�i�H�uNrfPw�OiY�JPjBz��mT�WLJDT�6PT4Fi��+iWLvDdB�Ph�hiVvCCJ��B�3aidY=iWv�Y�v�d��aiduNiwPgVwPJDV7Lg���iVq+�JvLDSH�gjqziwB+D�H�iT3nqI��gNYC�Wv6iJPnqdqOiw��iUPJDV�Jq��Fi�LCuW47DW�nq�7SiV�4Vw�6DWLCDIB�PT�jz�r��I��V�3D�VBLB�q��v��uY�vi��kuI�ndvqCiOL7CJ4kYJ�aqYqTiIH�zNrkYJB4dJYYq�Y7�VL�iI3=dJY3g�H3YJmnIhqTqV�h�OL�+J3k+h3=dvqn�JY7�w��uILL+vqfq�Y�b�qvYh�vdv��iJY3zU�NiJq�zTrUDIB�PvrfIWH�id�huN�2�WYwdW4�Dr��u�fTPhPgIv�JDSLJBVH4u�YPPduvuU�jBV�7BjY�+JmviTqJzJ��PT�jzVqCgVHJzJ��PT�jzUq�YT7huYqBPv7aYUYP�v��u�fTPJBfYUBO�Y7�u�qYiT7fDW4OYh��V�u�iVr���4�zTrnu���g�����Pg�J4�IrB�i�L�iJq�zTrUP�q�PT�jzVq�zTrUDIBDgW��IVqzITraVYqDgI�j��7�zJBvD�3DiJrud��zij�nV�3g�r�SY�Y+�I�NPrq0�T�juNY+D�76u����r7VbVv3YN36d���PT7�B�LO�h�=VYq0P�7wiw�kqJHUDIB�PT�jzVq��vuTV�qBiT7wdU�gzNqUD����V�fz�r�zNqUD�3+i��fYU�Oij�SVY3���HNiJq�zTrUDIB�PT�wi�v�zJqnuJvV���uDUYu�v7�uJ�rbY�Iz���qJHUDIB�PT�jzVq�zTrUDIB2�r77zVHgYhrNP�3niT7wbdr�D�f4P�Bn��YNiJq�zTrUDIB�PT�jzVq�zTrUDIB�PJ�wgw�O�JBUuWvV�T�rY��P��PNP�q6qW�7PJ0JDS6hB�rkzdY�+J�v���JBY7jidY3B��JDTH�VYqDgdYgDTTvu��IBY�Ld�P�+v�JDTqBYIY�IdIv�IIvBYB�BVH7�hY�g�uvV�BLBY���hY��I�viJvaB�LwdY7ug�4P+vqDqWYdBN�kPVr�dJr�PSLLVWLk+h3a�VB�dNq�PT�jzVq�zTrUDIB�PT�jz��jgIrUDIB�PT�jzVq�zTrUDIqV�J�SY�qjgIrUDIB�PT�jzVq�zTrUDIB�PT�jz��3D�7JPw�2qY7uuJqDV�3=V�32��r�b�YC�J4TuTq0q�7wYVH�gUBUDV�NPT7wbdr�D�f4P�Bn��HNiJq�zTrUDIB�PT�jzVq�zTf�zJ��PT�jzVq�zTrUP�r�q�4�zVq�zTrUDIB�PJr�VVH��v��uT����LjIUP�Vr�NPr3Du�v��wB�zJ�LuYq0i��fz�rO�N36V�BNPTvjzU73�W4NuTqVgT47uN���j�NDv3hDT�jzVq�zTrUDIB2�r77zVH+�N3JVd���vmSIU��g�c�DU����YNiJq�zTrUDIB�PT�jzVq�zTrnu���g�����Pg�J4�DIz�Pvm4bIYdY�7WVw7hDT�jzVq�zTrUDIB2bIB7zVq�zTrUDIB�PT7w�wPP��PhVj�D��B7zd���J4vVj���VBL��YCD�04VV�b��B7PJLO�h�=VYq0P�7wiw��zTrTdYBn�vq�uNP+��qaV�PNi�3dgJqz�Irnu���g�����Pg�J4�DI��PT7w�wPP��PhVj�D��B7BIYdY�7�IdrDIrY6i�PY�rP�IYP+z�PrbYBkqJHUDIB�PT�jzVq�zv�hu��bg���bVv3YN36DIz�PT7w�wPP��PhVj�D��B7z�Y��T7�uh�VqY���V4Czv��V��4qW�wYWPgiV4hV�BnBTB7zVq�zTrUDIB�PJBLY���V�7vDIBD�JfSdW3O���LuYq0i�HNiNP��IrUDIB�PT�jzVqWIVHJdw��PT�jzVq�zTrUP�q��VfhuJqOiYuhDIYVBr�SYUq��J4JuW�����uzUBO���6DTB�BT�jD�B�zv�JPr3DqJ�uI��CYwBCDIB�PT�f��LjgIrUDIB�q�L7iTL�zTrUDIB��I�kYJL=PYq�qwY�Y���gIYnPVvfg�H�uV3kuYq�+v�NqwY�D�Bkg�YJqYqngwq�PT�jzVq�zJHUII32g�BL�U��zv�hu��bg���bVv3YN36DI3b��BLiwYg�I�ai�4uiJ3+D�LvD��aiVHIiV4�PWLvBJ��qju�iwP�IIL�zTrUDIB��I�rzUqPV�7�u�B�gJBLYU�O�v�6Vj�D��B7zU7�D�7�uWv�PhPCBO6vuYBfB���ddIv�IIvB�YvBVfSY�B7zVq�zTrUDJ�2zVBLY���V�7vDI3b��BLiwYg�I�LgI7�i���CJHJBY�6idINiw�ggW4U�V76i�L=iW4�V�H�D�3�gj�FiWv�Y�v6iJPnqdqOiNzJCJ4Jiv�Jq��Fiw��D�HTDv3Lg��Ji�mN�W4JDI46qI4=gNuJD�vUud3CDIB�PT�jz�r��If�uI3+qWzhdVqDV�3=V�32��r�b�Y�dJvYiVY7qUfnuILL+vqfq�Y�b�qvYh�vdv��iJY3zU�NiJq�zTrUDIB��I4NiJq�zTrUuT3VgV�wi�7��v�4uWvb��r�b�Y�D�f4uh���Jr���4Czv�hu��bg���bVv3YN36d�B�gJBLYU�O�v�6Vj�D��B7gTL�zTrUDI3hDT�jzVq�zTrUDIB�gv�S�VL��j�UD���gv�7z����Irad��D��rwiw7�YjYWV�qV�Wr�dW4�gVBUuT3V�WrjzV��gY�hu��bg���bVv3YN36d���PT7�B�L�iYPTu�BDirmSIU��gUBCDIB�PT�jzVq�zT�6PIqVg�LjIW7OYvrhDIBDqW�uIUq�VrrhDIBD�Y7uI�r�idYWP�v��ILI�TL�zTrUDIB�PT�jzU�ggIr�D�3+i��fYU�Oij�SVY3�gr�I�wqCVwBCDIB�PT�jzVq�zTrUDIB�PJr�VVqC�vPTuT3DBILjIUP�Vr�NPr3���Lu�TL�zTrUDIB�PT�jzVq�zTrUDIB�PT�fIWH�id�hDI�vi���z�P��T�6uT3D��fSB�H++J�Jq2L3gWqkuVP�PVr���H�uNBkuYq�+v�NqwY3V�fnYvr�qYqTiIH�uNrk+h3=dJr�iwY7zV3�g�YJqYqng2LLD�7kPVr�dJYO�UY�bV4�uY�S+vq��wY�q�vkYJB4dv�N��Y�I��vuY�S+vq��wY3dw��uVB7PV�vqOLLVw�vuV�U+JvggTB���HNiJq�zTrUDIB�PT�jzVq�zTf�zJ��PT�jzVq�zTrUDIB�PT�wYUB���uNzJ��PT�jzVq�zTrUDIB�PT�jzVq�zTf�uI3+qW��zUYgV�BUI�3�g�7uz��3Yh�vDTq6q�Bw�wPg�vY�DV7hPT�7qJq+�h�4P�32�V�jgN�kqJHUDIB�PT�jzVq�zTrUDIB2bIB7zVq�zTrUDIB�PJP�iJq�zTrUDIB�PT�wi�vCD�0�uJ�2qWB�PJLO�vu�uT3V�rqFzW��zTraVWv6�v7dzUq�V���V�q��T��zVq��U��uT32ir7jB��CIT�ndIB6BTB7zVq�zTrUDIB�PT�jzVq�zv��V��4qW�wYWPg�J4�DIz�PJ�hYW���v��DTBD�Y7���P��vPWV�q6�I4jz��BIJ6�IrB�q�7�zDH�zv��V��4qW�wYWPg�J4�DI��PT7fDW4OYh��V�u�gJruD�Y+�d3adNq�PT�jzVq�zTrUDIB�PT�jzVL�iYPTu�BDirmSVU�O�vYUIrB�gJBLYU�O�v�6Vj�D��B7z�Y��T7�uh�VqY���V4Czv�hu��bg���bVv3YN36Dv�hDT�jzVq�zTrUDIB�PT�jzVq�iYu�Pr3+qI�jIU�gYhrJP�qVP�7LiwBgYwBCDIB�PT�jzVq�zTf�zJ��PT�jzVq�zTrUP�q��VfhuJqOiYuhDIYVBr�SYUq��J4JuW�����uzUBO���6DTB�BT�jD�B�zv�JPr3DqJ�uI��CYwBCDIB�PT�f��LjgIrUDIB�q�L7iTL�zTrUDIB��I�kYT��dJvg��H7q�PvYJL�+Jvfg�H�uV3kuYq�+v�Nq�q�PT�jzVq�zJHUII32g�BL�U��zv��V��4qW�wYWPgiV4hV�B2�W�fDU�OiVBUB�6J+hY3ITmvB�rrB��3DjY�qdfJd�YJBVfJ�IB7zVq�zTrUDJ�2zVBLY���V�7vDIq+qWfS��4PYh�UBVH7IdYP�VuJd2LYBY7vPV�fD�rgPD60g�H�gNB�gd��PVrCiDL�DwYvYh3UqY�TqIHdCJH�uI�SqJHUDIB�PT�jiJq�Dr��uJT��JB�z�P��T�6uT3D��fSB��JV�BgB�6nq�Y��VfvVVIJBV��zhYOgdzvd2L�BVHwq�B7zVq�zTrUDJ��q�B7zVq�zT�NPrq+�Jr�dVqgi�PvVdBD��fSB�q�iYPTu�Bgir�LiwBgIJqnuJvVq�fhIW4u��7�u�qY��B7zVq�zTfNzJ��PT�jzVq�zTrUD�3DiJrud��ziIPnVV���WrwYUBOzJqaDI3+q��juNY+D�76u����r7VbVv3YN36Dv�hDT�jzVq�zTrUDIB2�Y7uI�r�id�UP�3+�Y7I�TL�zTrUDIm�DTB7zVq�zTrJDJ��DT�jzVq�zTr4DIH7dNznYv�6qV�vqUY�gJmnYh�n+vq+gWY����nYhY6PVr+PTH3uJ��uIH�+v�NqwYdCJH�uI�SqJHUDIB�PT�jiJq�D�76P�3V�V�7zU7�D�7�uWv�PhP�+vIvVUY�YTI4ddY�uImv�Iq=zJ��PT�jzVqCgI��P�q��VfhPw7��YuTVd�VqJ�wiwPOgI��i�7aiNfJCJv7�wP6gjqSiwP�d�4vd�7nq�PfiVq3b�L�zTrUDIB��IL7b�L�zTrUDI32�Y�L�w�P�I�LPr�vgW�wiwPOgIf4uYP��r7wP�4�D�v�Dvr�PT�jzVq�qJHUDIB�PT�jzVq�zv�LuYq0i��L�U�gIT��DIB�iVfhDWPg��u�VjBV�rmSIUPP�vPTV��v��4agw�OzJ�NzJ��PT�jzVq�zTrUD�32g��wPJqzITradjBbgv�S�U�gzh3ad��DiVr���4OiIPTV��hDT�jzVq�zTrUDIB�gJ�hIW3�i��YuY�4i�����q3YhI�P�v��TLw���P�T7JP�q6qr7dgj��i�P6DvB���v�z�qCYwBCDIB�PT�jzVq�zT�Fu�qVi�BjPN3CYwBCDIB�PT�jzVq�zT�nuU�2BTB7zVq�zTrUDIB�PT�jzVq�zvf�PI3�Pv�dzVL��J3�uN��+v��IW�u�T��V�q0�TLjPjr3YTu4P���qr�uIUP�gI�nPr�4qT�juNY+D���P�qU��HNiJq�zTrUDIB�PT�jzVq�zT��VW�Ugr7���q�D�L�D�3DB��jgJq+gY�UuhBD�VBwb�7Czvf�PI3Du�v��wB�zJ�VIvB2iJr�YU�P�W3�uJ�nPv7fYU���vPnDI3Dq�H7zV��gY�NVY3DiTLdzV3zYj�NDv3hDT�jzVq�zTrUDIB�PT�jzVq�zTrUDIq6iI�jgw7�D�7Nu�BBiJr���qO�h�nV�BUgIH�zV��zTrnP�3���LdqJq+��I4u�qNPJBLb�P�zT�vu��Di��fDW4�DrP�uWvVgT�wD�Y���P�Y�qV�W�r��r��h�TVY3D��fSBIB�iV4nV��Yi�LdzV3zYj�UVWv��J�SY���qJHUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIBD��YfIVqzIT�LVYq0��7I�TL�zTrUDIB�PT�jzVq�zTrUDIB�PT�f��L�zTrUDIB�PT�jzVq�zTrUDIB�PT�wYUB���YUP�q�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�fIWH�id�hDI�vi���z�P��T�6uT3D��fSB�H+�vP�VY3V��fS�V3��h��DIqD�V�uzVqgV�7�u�B�B��juJq�gI��u�32�JfSIW4CzT�NDIB��T�jI���Drr�Dv�hDT�jzVq�zTrUDIB�PT�jzVq�zTrUDIm�DT�jzVq�zTrUDIB�PT�jzVqWIVHUDIB�PT�jzVq�zTrUDIB2�r77zVH+DrfTP�B�bY�I��qgiIPhuh�Y���f�TL�zTrUDIB�PT�jzVq�zTrUDIB�PT�jbwuvB��+BVfJ��v�PV�nqYqwgWY3gWqkuVP�IVHUDIB�PT�jzVq�zTrUDIB�PT�jzVq�V��hV�qVqTL���qB��rNdI����HNiJq�zTrUDIB�PT�jzVq�zTf�zJ��PT�jzVq�zTrUDIB�PT�jIW7�V�7�V��v�rPwiw�gIT��DIq6qV�fVW3OzJ3TuYqb�VfhIU�OYvY�P�3+�Y7dgJqCgIr0dI��qTLI�TL�zTrUDIB�PT�jz��jgIrUDIB�PT�jzVq��W3�u�qYiT7fI���zT��Irz�Pv7L�UB���YUDW�PPTLjIW7�V�7�V��v�rPwiw�gIh�nuhBDg�BaI�Y3Yhr6I��PqTv�z�qCIJ6NzJ��PT�jzVq�zTrUuh�0ir7uzVHBgV6NzJ��PT�jzVq�zTrUP�3+BI�f�TL�zTrUDIB�PT�jzVq�zTrUD�3DiJrud��zi�f4u�q0�Jr���4Czv�NVY3DiTLI�TL�zTrUDIB�PT�jz��jgIrUDIB�PT�jzVqP��u�Vd�UPTLrY��P��PNP�q6qW�7zVLgV�3=V�32��r�b�YCVwBCDIB�PT�jzVq�zTrUDIB�PT7w��7g�I��DIBDi�YwdW4�Dr��u�fTqr�LP�4��dr6uhBbgr�SYVHCYwBCDIB�PT�jzVq�zTrUDIB�PJr�VVqCD�0�uJ�2qWB�PJLOV��ad�B�i�7wbV4��I�vu�B�Pv7ugw���vraDvzTqTLu�TL�zTrUDIB�PT�jzVq�zTrUDIB�PT�fIWH�id�hDI�vi���z�P��T�6uT3D��fSB�H++J�kq2L�I�4vg�YJqYqng2L�bV6nYT7=PYq0gOL�BV4�uIH�+v�NqwYdCJH�uI�S+vqn�JY7�w��+h3=dv��iTH�IwfngI�JPVv�PTH7iVq�ISHSqVrYqVY7q�PvYJL�+v�T������7wdW3�iY�aiduNiwPgV��Liv����qJi�3�iWvaVY��iY7�qUP��U�aDI����H��VfSbdcv�j��B�7LId�N�ITvVDLjB��j�jY�uImvBUYUBhq�uI7�ghqjgIrUDIB�PT�jzVq�zTrUDIm�DT�jzVq�zTrUDIB2bIB7bwP�zTrUDIB�PT�jzVL��J3�uN��+JBLYU�O�v76IWv6�v7dPJL��Tu�uIBnBTB7zVq�zTrUDIB�PT7wdUPOi��6uW��Pv�dzWv3YN36Vj��i���bV7O��I�V��v��B�PJLgiV4hV��vg���Y��kqJHUDIB�PT�jzVq�DrPvu�q6qVr�PJLgiV4hV��vg���Y��kqJHUDIB�PT�jzVq�D�76P�3V�V�7zVLP���vP�qVqV���TL�zTrUDIm�DTB7zVq�zTrJDJ��DT�jzVq�zTr4DIH3PNY�uI�SqVr�g2L3uN�kgIHT+vqziwY7q�PvYJL�+v��gSL�DW7�YN3=+v�vi�Y3DWqkuVB7PV�CPNY�zNY�iJq�zTrUDIB�PvrfzW3�iIPTDIBD�r7ugj��D�0�uJv6qY7���v6iJPLi�LFiw�gPW�SDJ�nqI4�DT�jzVq�zTr4DIY2qv�uDW3OITrnu�q6��7dzW�O���hV�q�qI�kuY�S+vq��wY3iJH�P�77qVrW��Y7qWHv+h3=dJTNiIH7q��kIh�viY7�u�3bij�N�ITvBT6nBY���hY�+J�JDSL7zJ��PT�jzVqCgI��uJvV���uDUY��TP�uJv�BI�kgDH6dvqOiUY�dV3�Yvr4+J�CPNY�zNY�YNPvPV�0iJY�uV3kuYPhdJINg�r�PT�jzVq�zJHUII3DiJBLbdB��I��PIqbi�BfIU�O���UB�7dV�PC+NuviNrOBY��B�YO�I�vuW�TBI�ngjY��NPjgIrUDIB�PTL7iNPjgIrUDIB2qJ��DUB3YTvUVW�VqY�hIU�O���UV��V�r�LbVLgV��jPYPDi�YfIVH+Dr�6PI3��T�jIUB3YN�6Irqgg��fdW4CIVHUDIB�PJYNiJq�zTrUDIB�PT�wi�v�zJ3LVYq0��7dijqjgIrUDIB�PT�jzVq�zTrUDI�0q�Y�gI0viJvaB�LwddY4�W6JDTqBBI4vg�IJzTfNBN�BBY�n�dY�g�uvd��JBI44�hY�udIvdju�BI4vg�IJzTfviSL�BdPdB�B7zVq�zTrUDIB�PT�jzVq�D�76P�3V�V�7zW�OiYuhDI36���fYUq3D��WVYqDgYmSYUBgYhr6uW��iT7fIW4�DrrhD�3DiJrud��uYwBCDIB�PT�jzVq�zTf�zJ��PT�jzVq�zTrUuJvV���uDUY�zvf�uIq6��4IBVPg��u�Y�T�gv7ud�B�Y�3�ud�VzW�fIU�CzJz�V�3���7�qJq+Dr�6PI3��T�jIUB3YN�6Dv�hDT�jzVq�Dj�CzJ��PT�jz�PCgVHCDIB�PT�jz�r�dJrUqVY3dU�vgILUqVYjqVY�uV3kYTq�PYqvqVY3I��ngDHhdJ�kq2L�I�4vg�YJqYqng2L�bV6nYT7=PYq0gOL�BV4�uI7UdJr�gVY7DJqvPIBvIVHUDIB�PT�jiJq�D���uJv�q��jIW7O��I�V��v�r�wYU7P�I�FP�3+���LuJ�vVVr�BV�JBdY�+vcJd2LNzJ��PT�jzVqCgI��uTq��Y����q+�N3�ud�YPv�Lb�PO�vP�uW��iVvCCJ4nDJ�L�ILfiU�T�WvaB�3���P�qUP��U�vBV7��UrIgNY���vPYN3FVWInb�7kP��JqYqfgwY3PU��g�P�PJHUDIB�PT�jiJq�D�76P�3V�V�7zW3�i�7�PYB�iNuvY�4LBdq6g��ui�LCqWH7iT4aPN�aiwfNiWHhuI3aiVHIiV4O���vBrrCDIB�PT�jz�r��If�uI3+qWzhdVqDV�3=V�32��r�b�Y�dJvYiVY7qUfnuILL+vqfq�Y�b�qvYh�vdv��iJY3zU�NiJq�zTrUDIB��I4NiJq�zTrUuT3VgV�wi�7��v�4uWvb��r�b�Y��J�6P�Ivq�7wYU7�iW4�u�fv�r7�Bd�D�vPFV��Ugv�Sb�Y��vPvP�YDi��Sd�B�zv�huYqTir��VW3OD��6Dvr�PT�jzVq�qJHUDIB�PT�jzVq�D�76P�3V�V�7zVL��J3�uN��+vmSP�4��dYJV�qV��rai�v3YN�6IY3D��B7PJ�P���vP�qVqV�j�VLgV��=DU�NPT7wdUPOi��6uW�D�Y7udW7�zTrnu�q6��7dghqjgIrUDIB2bIBUiJq�zTrUdw���IB7zVq�zTrUDJ��iVH�iWv=udY�V�3bqW�uDW7gIT��V�H7dNznYv�6qV�vqUY�gJmnYh�n+vq+gWY����nYhY6PVr+PTH3uJ��gILUqVYjqYr�PT�jzVq�zJHUII32g�BL�U��zv��V�3bqW�uDW7gY���V�B2�W�fDU�OiVBUuJvV�WfhYU�P��YTuYqIiwBgBJvUDJPaiVHIi�q�qTL�zTrUDIB��I�rzU�gVrf4uJTTPv�uDU�PV�LUB��nYdYgqVIvV���BY7j��P��I�vB�6vBV�nBdP��JmvB�rrB���qhINqIYjgIrUDIB�PTL7z�r��J3�u�B����rY��P��PNP�q6qW�7�w�6DW����u�iV��qW4�BN�6q���iwY�gWLJB�3LPJ�0DT�jzVq�zTr4DJ�0DT�jzVq�D�f4VVv0�r��zWv�YhY=P�q6qW�7zW�gVr�ku��Di���D�YYiYPFu�BV�Y�SY�7gzJqnuJvV�WfhYU�P��PWuYq���B7zVq�zTfNzJ��PT�jzVq�zTrUuJvV���uDUY�zvf�uIq6��4IBVPg��u�Y�T�gv7ud�B�YIu�P�3�iT�hDW4����4uJvbi�4�i�L+��qUD�3+i��Sbdr�iI�6Vj�6gTLI�TL�zTrUDIm�DTB7zVq�zTrJDJ��DT�jzVq�zTr4DIH3PNY�uI�SqVrP�OL�I��vYv�S+v�N��YLzV��Ih�SIJ76��qai��NBN�UDV�LgdPaiVHPV�cv�j�6B��J�hYP+v�JDhunBVrdDjYO��zvVVvbBV�wIjYOiYuviJv�B���D�P��I�vB�6vDTH�q�Y�Yv74zJLCDIB�PT�jz�r��I�NVY3+g��dzVLPid�Ju�qVg��7zW�O���hV�q�qI�fIU��Yv3�iJr=iU���W4=BOH�PT�agNYC�J�Liv�6�U�ai�v3gUPJD�3LVYq0��7�gV34dJYnq�YdB�7�Yv�S+Jv�gVYdBw��PVr�dvqvqVY�VUr�iJq�zTrUDIB�PvrfDW4�DrP�uW�2g�BaDW3�IT��q�YIi�TvBJ4=DY36gTLJiJ��d��U�W�6��qaiNB3D��Liv�Li���iUITIIL�zTrUDIB��I�rz��3D�7JPjBBPv�ug�7gV�f�uY��qI�kiYYLPV�J�OL3DJTnYT3vqY�0PNY�BwYkISH�PVr2�Uq�PT�jzVq�zJH4dwq�PT�jzVq�DrP7u�q6g��wV�rOiI0�uY��qI�wP�4��dYJV�qV��rai��3�vP=ud��gV�wYVH+�T7Ju��0ir��Bw�jgIrUDIB2BTB7zVq�zTrUDIB�PJBLY���V�7vDIBD��rwiw7�YjYWV��V�r�LbVLgV��jPYY����fDVH+����V�qb����DUBgIJBhDIBDgVfSb�BgYTPvIw����BaYW4+�WHaVWv��J�SYV�CYwBCDIB�PT�f��LjgIrUDIB�q�L7iTL�zTrUDIB��I�kuVqvPVrb�UY3V�fnYvr�qY�h�NY�BJ�niIr7PY�T��B=iwfNiW47Bhq�PT�aiV�JiWv�VY��B�cSijP�B��vVDL�B�6J+hY3ITmvu��IBY�Ld�YO�vcvuWvVBVHLzdY��I�JD�rjBd�CBILkYNYvPYqg�IBnDT�jzVq�zTr4DIY2qv�uDW3OITrnVVT�qW�wYW3OgI�7u�f��v7��UY�Dr��PrquiJH3gW��dw�6qjq�iUITCN�UDV�nqI6hiWv�Y�4S�W�6iVr=qUP���vPYN3FVWY7gwrkPVLvqVr�iJY3uJ��iIr7PY�T�WY�uV3kYNYvPYqg�Ir�PT�jzVq�zJHUII3+i��fYU�OgI��uJ�+g�Yd��HJBY�6idINi�7�V�4nDNP�gVH�iWqSiW4SBJ���JrfiWv�Y�v6u��aqd��DT�jzVq�zTr4DIY2��rfDUP��TvUI�3�g�7uz��3Yh�vDIHLYVv�g�PS+JrCiDL�DwYvYh3UqY�TqIHdCJH�uI�SqJHUDIB�PT�jiNr�qJHUDIB�PJBfYW�O�J4=DIqg�V�Ld��3Yh�vDIq�i��rB�Pg�vPFIV�6��rwYW73��PnDTBDgVfSb�BgYTPvDvr�PT�jzVq�qJHUDIB�PT�jzVq�D�76P�3V�V�7zVL��J3�uN��+vmSP�4��dYJV�qV��rai���Dr��DTB�gWrwYW73��PnDU�NPT7wDUPO�U36VY�TCT�hIU��YvYadJ��iY���w7gIJB�dNq�PT�jzVqWIVHCDIB�PT�jbwrCPJHUDIB�PT�jiJ�v�I�vBVsSqdY�g�uvV�BLBY�nq�Y�qV�vB�6vBY��BhY��W�JDduhBY�nYhPCBO6vuYBfBVfSYjYPiI0vu�qzBV�LY�Y�iI�v�w�+B��4zhITDhYCdvqvqVY�VUrjgTL�zTrUDIB��I�rzUqPV�7�u�B�gv�Lb�PO�vP�uW�2gVfSb�BgYTPvDI3D�V��V�H�uV7a��4Si��JCJ�U�W�6gjqJiWv�Y�4S�W�6iVr=qUP���vPYN3FVWY7gwrkPVLvqY�TgWY�IwfnPIBvPYqfqDL�uV3kYNYvPYqg�Ir�PT�jzVq�zJHUII3+i��fYU�OgI��uJ�+g�Yd��HJBY�6idINi�7�V�4nDNP�gVH�iWqSiW4SBJ���JrfiWv�Y�v6u��aqd��DT�jzVq�zTr4DIY2��rfDUP��TvUI�3�g�7uz��3Yh�vDIHLYVv�g�PS+JrCiDL�DwYvYh3UqY�TqIHdCJH�uI�SqJHUDIB�PT�jiNr�qJHUDIB�PJBfYW�O�J4=DIqg�V�Ld��3Yh�vDIq�i��rB�Pg�vPFIV�6���wi�73��P7u�qYiT7wDUPO�U36VY�T��B7zVq�zTfNzJ��PT�jzVq�zTrUuJvV���uDUY�zvf�uIq6��4IBVPg��u�Y�T�gv7ud�B�YIu�P�3�iT�SdUB3YT�SVYq+�v7duNB�zv�7u�f��v7��UYz�Vz�uJ�Vi�7FiJ�giIPhuh�Yi�LI�TL�zTrUDIm�DTB7zVq�zTrJDJ��DT�jzVq�zTr4DIH3PNY�uI�SqVrP�OL�I��vYhBhqVINgOL�I�fnPYY4dJr���Y7dNznYv�6qV�vqUY�gJmnYh�n+vq+gWY����nYhY6PVr+PTH3uJ��gILUqVYjqYB=iw�SiW4LuVq�zJ��PT�jzVqCgI��uTq��Y����q+�T7Ju��0ir��B�qPid�Ju�qVg��7z���i�P6B�LwihIJIhuvuWY�BdqvIjYgzNuvBYB�BdY4�dY3B�IvVWv�Bhq�dY7L�UB���3�iJr=iU���Wvh�I3Li��ai�LCCJ�6DJ7aiVHIiw�SiW4LuVqCDIB�PT�jz�r��I��V�3D�VBLB�qPV�7�VY3nPhP�+vIvVUY�BY����YgzNfJD�rjBd�CBdY3+hIJd�q�BdY4�dY�YN�vBNYrzJ��PT�jzVqCgI��P�q��VfhPw7��YuTVd�VqJ�wiwPOgI��i�7aiNfJCJv7�wP6gjqSiwP�d�4vd�7nq�PfiVq3b�L�zTrUDIB��IL7b�L�zTrUDI32�Y�L�w�P�I�LPr�vgW�wiwPOgI�aV�3DdJfSIW4����vI��vgr�L��4gzJqnVVT�qW�wYW3OgVLCDIB�PT�f�TL�zTrUDIB�PT�jzU�gVrf4uJTTPT7fIWH3V�vTI���i�7uI�HO���6uh�+BYruI���gVqaV��vgr�L��4gzJBhDIBDgVfSb�BgYTPvIw����BaYW4+�WHaVWv��J�SYV�CYwBCDIB�PT�f��LjgIrUDIB�q�L7iTL�zTrUDIB��I�kuVqvPVrb�UY3V�fnYvr�qYqz�OLdBN��gI�LqVYr�wY3Pw��gIHT+vqziwY7q�PvYJL�+v��gSL�DW7�YN3=+v�vi�Y3DWqkuVB7PV�CPNY�zNYdgW4S�W�6iVrU��B7zVq�zTrUDJ�2zVBw�U�PYh�UD�q+qWfS��4PYh�UVVT�qW�wYW3OgIf�uJ�VijPC�JsvB��JBY�nq�P��J�vBrBLBdY4�dY3B�IvVWv�Bhq�dY7L�UB���3�iJr=iU���WLvDdB6g�u�iJqg�W��DJ�aiVHIiw�SiW4LuVqCDIB�PT�jz�r��I��V�3D�VBLB�qPV�7�VY3nPhP�+vIvVUY�BY����YgzNfJD�rjBd�CBdY3+hIJd�q�BdY4�dY�YN�vBNYrzJ��PT�jzVqCgI��P�q��VfhPw7��YuTVd�VqJ�wiwPOgI��i�7aiNfJCJv7�wP6gjqSiwP�d�4vd�7nq�PfiVq3b�L�zTrUDIB��IL7b�L�zTrUDI32�Y�L�w�P�I�LPr�vgW�wiwPOgI�aV�3DdJfSIW4����vIWT�gW�udW3Pi�36DTBDgVfSb�BgYTPvDvr�PT�jzVq�qJHUDIB�PT�jzVq�D�76P�3V�V�7zVL��J3�uN��+vmSP�4��dYJV�qV��rai���Dr��DTB�iVfSd�r���P7u�qYi�4jzVLPid�Ju�qVg��=b���D��4V�B�B��SVW3OD��6DU�nBTB7zVq�zTf�zJq�PT�jzVq��VH4zJ��PT�jzVqCgI�LiT4aiV73BJvLDSH6gTLOiwzNd��vB2H�Pv7SiW3CuWvauY3�gU�Wi��vuWHS��q6���WiwPgI�47VdB6�v��iwYgV�v7VI�Li��aiJ��d��U�WL�BV�JBdYgiVHCIVHUDIB�PT�jiJq�D���uJv�q��jIW�O���hV�q�qI�wDUPO�U36VY�TPJ�fD�rgPV���IH�gNYvYhBhqVINgOL7zWvvPIY�qVY3g�H�q�Y�Yv74dS60g�qgg��fdW�JDTq�BdPdB�YSDJmv�w�+B��wudITIJTvB�rrBV�JBdYgiVHjgIrUDIB�PTL7z�r�iYu�Pr3+qI�w�U��iIuvDIH7CJ4kYJ�aqYqBg�Y�I��ngILUqVYjqVY�qUY�g�3�PVY3g�H3YUBkPdq�zVHUDIB�PT�jiJq�Dr��uJT��JB�z�P��T�6uT3D��fSB��JV�BgB�6nq�Y��VfvVVIJBV��zhYOgdzvd2L�BVHwq�B7zVq�zTrUDJ��q�B7zVq�zT�NPrq+�Jr�dVqgi�PvVdBD��fSB�qg��u�Y�T�gv7ud�B�YY7JVdBV��7�IVH+�T7Ju��0ir��Bw�jgIrUDIB2BTB7zVq�zTrUDIB�PJBLY���V�7vDIBD��rwiw7�YjYWV��V�r�LbVLgV��jPYY����fDVH+��7JVdBV��7�IV��zTrnVVT�qW�wYW3Og�3aP�3+�Y7duhP+��7�u�3bi�7�ghqjgIrUDIB2bIBUiJq�zTrUdw���IB7zVq�zTrUDJ��iVH�iWv=udqLiI6�i�LCuW4=BOHnqdPui�Iv�W47�V7LiWruiJ7SPW4=BV���UfNiw��PW4JV��6gY�hiwBPCJ4vV�3LgY��iV��iWH7iT4aPN�nihY3B�IvVWv�Dvr�PT�jzVq�zJHUII32g�BL�U��zv�7u�f��v7��UY��T7Ju��0ir��B�q�D��4VWY7gwrkPVLvqYqz�OL3BJvvYTL4dJY3g�H�q�Y�Yv74dS60g�qgg��fdW�JDTq�BdPdB�Y�gI0vVDLJB��vudYP�VsvB�rrBV�JBdYgiVHjgIrUDIB�PTL7z�r�iYu�Pr3+qI�w�U��iIuvDIH7CJ4kYJ�aqYqBg�Y�I��ngILUqVYjqVY�qUY�g�3�PVY3g�H3YUBkPdq�zVHUDIB�PT�jiJq�Dr��uJT��JB�z�P��T�6uT3D��fSB��JV�BgB�6nq�Y��VfvVVIJBV��zhYOgdzvd2L�BVHwq�B7zVq�zTrUDJ��q�B7zVq�zT�NPrq+�Jr�dVqgi�PvVdBD��fSB�qg��u�Y�T�gv7ud�B�Y��=uJT��J�w�W�O�vY�D�q+qWfS��4PYh��zJ��PT�jz�qjgIrUDIB�PT�jzVq�iYu�Pr3+qI�jI��3�J4FdrzvP��SY��Iid�nV�3bzJYY����D���D�BbgWBLb�BO�TP7u�qYi�4jzVLPid�Ju�qVg��=b���D��4V�B�B��SVW3OD��6DU�nBTB7zVq�zTf�zJq�PT�jzVq��VH4zJ��PT�jzVqCgI�LiT4aiV73BJvLDSH6gTLOiV��iU�6uOHLg��agNY�qWLvBJ�LiWruiJ7SPW4=BV���UfNiw��PW4JV��6gY�hiwBPCJ4vV�3LgY��iV��iWH7iT4aPN�nihY3B�IvVWv�Dvr�PT�jzVq�zJHUII32g�BL�U��zv�7u�f��v7��UY��T7Ju��0ir��B�q�D��4VWY7gwrkPVLvqVr�gVYLYUunuIv7PY�JgDLdBN�vPVr�dvqvqVY�VUrk+h3=�v7�u�3bijPC�JsvB��JB��CgjY��I�JV���BVH�D�Y��I�vdwISBdY4�dY3B�IvVWv�zJ��PT�jzVqCgI��uJvV���uDUY��TP�uJv�BI�kgDH6dvqOiUY�dV3�Yvr4+J�CPNY�zNY�YNPvPV�0iJY�uV3kuYPhdJINg�r�PT�jzVq�zJHUII3DiJBLbdB��I��PIqbi�BfIU�O���UB�7dV�PC+NuviNrOBY��B�YO�I�vuW�TBI�ngjY��NPjgIrUDIB�PTL7iNPjgIrUDIB2qJ��DUB3YTvUVW�VqY�hIU�O���UV��V�r�LbVLgV��jPYY0qW�LP��O�J4=ud��gV�wYVH+�T7Ju��0ir��Bw�jgIrUDIB2BTB7zVq�zTrUDIB�PJBLY���V�7vDIBD��rwiw7�YjYWV��V�r�LbVLgV��jPYY����fDVH+�U3JuWv�qr�S�w�P�U��VVv0i�7�qJq+�T7Ju��0ir��B2H+�v��PrqYi�H7P�vPYN3FV�B���HNiJq�zTrUP�r�DT�jzVq�zh34DJq�PT�jzVq�zJHUB�rjBdY��UIv���JBY7jidY�gduvuDLwBdPjz�YP�duv�j�6B��J�hYP+v�JDhunBVrdDjYO��zvVVvbBV�wIjYOiYuviJv�B���D�P��I�vB�6vDTH�q�Y�Yv74zJLCDIB�PT�jz�r��I�NVY3+g��dzVLPid�Ju�qVg��7zW�O���hV�q�qI�fIU��Yv3�iJr=iU���WvLDSH6���OiWH�D�4=dw�aiVHIiw�SiW4LuV7Jq��0iY���w7gPV���IH�gNYvIh�=PVrP�OL�qW3vPVqUPYqBq�Y�uV3kYNYvPYqg�Ir�PT�jzVq�zJHUII3+i��fYU�OgI��uJ�+g�Yd��HJBY�6idINi�7�V�4nDNP�gVH�iWqSiW4SBJ���JrfiWv�Y�v6u��aqd��DT�jzVq�zTr4DIY2��rfDUP��TvUI�3�g�7uz��3Yh�vDIHLYVv�g�PS+JrCiDL�DwYvYh3UqY�TqIHdCJH�uI�SqJHUDIB�PT�jiNr�qJHUDIB�PJBfYW�O�J4=DIqg�V�Ld��3Yh�vDIq�i��rB�Pg�vPFIV�6IY�udU7�����V�BUgv�Lb�PO�vP�uW�nDT�jzVq�DwBCDIB�PT�jzVq�zT��V�3D�VBLB�q+Dr��uY3Bqr�6bV�gVr�ku��Di���D�Y�Vrf�uJ�UiWBw�U7��J�JuJv�i�4jzVLPid�Ju�qVg��=b���D��4V�B�B��SVW3OD��6DU�nBTB7zVq�zTf�zJq�PT�jzVq��VH4zJ��PT�jzVqCgI�LiT4aiV73BJvLDSH6gTLOiwzNd��vB2H�PT�agNYC�JvauY3�gU�Wi��vuWHS��q6���WiwPgI�47VdB6�v��iwYgV�v7VI�Li��aiJ��d��U�WL�BV�JBdYgiVHCIVHUDIB�PT�jiJq�D���uJv�q��jIW�O���hV�q�qI�wDUPO�U36VY�TPJ�fD�rgPV���IH�gNYvYv�S+J�2i�Y����vPVr�dvqvqVY�VUrk+h3=�v7�u�3bijPC�JsvB��JBI47d�YP+NuJDIq3Bd�didIv�IIvuduvBY7LiTB7zVq�zTrUDJ�2zVBLY���V�7vDIq��VBL��Y�dJ��i�H�uW�vYTv�PYq��DL7DJqvPIBvPYqJqVY7��H�PVr�dJrV�TH�BJ3�iJq�zTrUDIB�PvrfIWH�id�huN�2�WYwdW4�Dr��u�fTPhPgIv�JDSLJBVH4u�YPPduvuU�jBV�7BjY�+JmviTqJzJ��PT�jzVqCgVHJzJ��PT�jzUq�YT7huYqBPv7aYUYP�v��u�fTPv�SY��Iid�nV�3bzJYVdW4O�vP=P�qVgTLjIW�O���hV�q�qIL�iJq�zTrUP�q�PT�jzVq�zTrUDI3+i��fYU�OgIrnP�q���B��2Lu�W�6P�Ivq�7wYU7�iW42P�3D�ILjPw7gYN36VdBDir7juNB�zv�7u�f��v7��UYz�Vz�uJ�Vi�7FiJ�giIPhuh�Yi�LI�TL�zTrUDIm�DTB7zVq�zTrJDJ��DT�jzVq�zTr4DIH7dNznYv�6qYq��IH3dVmnYNYLqYq�gTH3PJmnPIBvPVY3g�H3DWqkuVB7PV�CPNY�zNYdgW4S�W�6iVrU��B7zVq�zTrUDJ�2zVBw�U�PYh�UD�3UPJr�Bd�gYJ�6uJ�2VdYg���v�IBfzJ��PT�jzVqCgI��uTq��Y����q+D�LUuY�v�r7�P�4�gI�gBY�SIdY4zT3jgIrUDIB�PTL7z�r��TP�VY��PT7w����D��UVY3+�Y�ugJ�viN�fBV�JudYP�dIJVYqbBV�wPdY�zJ0vVDLCBY�jbj�N�ITvd���Bdqv�jY�YN�vBNYrBhq�ddYO�JIviTBaBdY4�dYPzhmvd��JBV�7�jYOzvIvV�P�B�����7L�UB���3nqI4Si�B4D�vaDV�6PT40��BaYW�vd��JBVfn��P3�h�v�w�+BY�jbj�N�ITvVI�0BI47B�Y3��mvBU�LBI47�dY�PdfvVDLJBI�SChIvIJsJVIB3B���d�IJ�VvCqY�NiSL3uUunIhqv+JrrgOL�q��nP�B�qY�T�Jq�PT�jzVq�zJHUII32g�BL�U��zvfTu�qNPJ�hIU�3YhYaDIH�gJ7�PYY4dvq0gOL�BV4�PVr��W3bY�r�PT�jzVq�zJHUII3+i��fYU�OgI��uJ�+g�Yd��HJBY�6idINi�7�V�4nDNP6i�L=iNfJV�4aV��LiT�WiWqSiW�Liv�LgY��iV��iWH7iT4aPN�aiwfNiWHhuI3aiVHIiV4O���vBrrCDIB�PT�jz�r��If�uI3+qWzhdVqDV�3=V�32��r�b�Y�dJvYiVY7qUfnuILL+vqfq�Y�b�qvYh�vdv��iJY3zU�NiJq�zTrUDIB��I4NiJq�zTrUuT3VgV�wi�7��v�4uWvb��r�b�Y��J�6P�Ivq�7wYU7�iW4�u�Bb���wiwPOgVqnPIBNPT7fgNB��TP�uJv�BI�jIW3�Dr��IrPTP�4jzVL��hrhIr�v�V�wqN�jgIrUDIB2BTB7zVq�zTrUDIB�PJr�VVqCzTYnPI�4�TLdz�qjgIrUDIB�PT�jzVq�zTrUDIq6iI�jPJ3+D�3Tu�B�bI�jI��3�J4Fdrzv�VrVPw�g�J�6P�3BiTLdgJq�qJHUDIB�PT�jzVq�zTrUDIB�PT�jzVq�iYu�Pr3+qI��q��kqJHUDIB�PT�jzVq�zTrUDIB2bIB7zVq�zTrUDIB�PJP�iJq�zTrUDIB�PT�wi�vCD���V�q�PW�����P�W3WVYq0�TLjuNPz�U��I�����cSDUP�YhYnuN��gY3��JHu�vrSDvBNiv3wI��CYU3�V�Phiv3wI��CINq�V�q���LV����iw��I����Y�FBwP3IJBhDIBDB���qNB�zv�TVY3DgWrwYU7�zT��YVLVDrm4d�PV���zYVLD��Y7gN��qJHUDIB�PT�jzVq�zTrUDIB�gv7���4OYvPvP�3BPv�dzW�uYwBCDIB�PT�jzVq�zTrUDIB�Pv7Lb��gYTP=uIB�iT7w�V3��T��V�3BPv�udVq+�J��V�����YNiJq�zTrUDIB�PT�jzVq�zTrUDIB�PJr�VVqCzvfTI���gJruIW4OYUB0VrB�iI77zVL��w��D�q6�r7��V�B�d�UDW�PPT7fgSLzIv��P�qVqrqFDW��zv�LDIBDBY����L3Vr�6u�Ph�r3dijqjgIrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUVWT��Y7��W73zTr�D�q����fDVqPV�vUD�q����fDWPOiIPTV�B�bY�7zVL�iIPhPrqY��YNiJq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB2�r77zVH3V��WVVT�qW�jPJL�iIPhPrqY��Lu�TL�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zh3JVWv��J�SV�Lvdw�L�NrfiV��iW4Udw7Jq��0��BaYW�vd��JBVfn��P3�h�v�w�+BY�jb�B7zVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzU�ggIr�D�3gg��fYW4CVwBCDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzU�ggIr�DY32�Y7�P�POYTu�Vd�UiT7�b���gY��P�3D�YmSBV3OYvYvDU��gY�4B��uIN��DV����7�qJq+�J��V��4u�v��wB�zvf�V��4qTLdijqjgIrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq��T�JuW�D���aYW4����NzJ��PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVqWIVHUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUP�r�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�Pv7��w7gVwBCDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzU�ggIr�DY32�Y7�P�POYTu�Vd�UiT7�b���gY��P�3D�YmSBV3OYvYvDU��gI�7b��+��qUD�q6�r7��V�B���hDIBD�r7���qCIJ�NzJ��PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIqbqW�aIU�Oi�P6DI��BTB7zVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUP�r�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PJP�iJq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB2bIB7zVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIqV�J�SY�qjgIrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zT��VW��iJrudWP��v��uY�vi�LjI��PYNm4V�Bn��YNiJq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIq6iILj�U7��Tu�uYqBB�H6b����d�TVY3DgWr�bV3�Dr��DTBD���wYU������d�B2u�7w����D�7WuWv�qr7I�2L+Dr7�u�3Vir3dgN��qJHUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zT�=u�fv��r�BdrgITr�dNq�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�Dj�CDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIm�DT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�wYUB���uNzJ��PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVqP���vP�q6qV��YVqBgUBCDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIm�DT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUP�r�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�f��L�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrnV�q0i���YUY�D��OVrB�bI�wBV4��IfvuYq0�VBwgwqu��PnVV��i��wYU�gYhI�DTBD���wYU������d�B�gJ�wgw���V6NzJ��PT�jzVq�zTrUDIB�PT�jzVq�zTf�zJ��PT�jzVq�zTrUDIB�PT�f��L�zTrUDIB�PT�jzVq�zTrUuJvV���uDUY�zv�6u�qVqr7�Bd���UBCDIB�PT�jzVq�zTf�zJ��PT�jzVq�zTrUV�q0��7u�TL�zTrUDIB�PT�jzVq�zTrUuJvV���uDUY��U��dNq�PT�jzVq�zTrUDIm�DT�jzVq�Dj�CzJ��PT�jz�PCgVHCDIB�PT�jz�r�dJrUqVY3dU�vgILUqVYjqVY�uV3kYN3aqVr��2L7dNznYv�6qV�vqUY�gJmnYh�n+vq+gWY����nYhY6PVr+PTH3uJ��gILUqVYjqYB=iw�SiW4LuVq�zJ��PT�jzVqCgI��uTq��Y����q+�Tu�P�3+�r�aY��gV�vUVY3+�Y�ugJ�JD�rjBd�CBdIv�IIvu�q�BVHji��N�IvPVrf�uNYdBwYvYN3aqVr��2L�IV7�PV�hdS60g�3gg��fYW�vd��JBV�wPdY�zJ0vB�rrBY�jbj�N�IvO�J4SVWYdBwYvuY�S+vq��wY3iJH�P�77qVrW��Y7qWHv+h3=dJTNiIH7q��kIh�viY7�u�3bijINDS6vVVYwB�cnijPC+J�TB�BjzJ��PT�jzVqCgI��P�3D�dYP+NuJVIB+BY�jbjY��I�NBN�3uY�vgv7ugW7UDIu�V�3��jzTzT��iYPFu�BV�Y�SY��3Yv�=PT��gW�w�U7�+TH�Pv32gr�Sq�3g��3=PT��gWfSBd�gYhI�drqDi��SI�7UDIP=uIqVgW�S�W�O�v3=PT��gWrwYW73��PnBj�jz��S�w�P�U��VVv0ijzTzT�gYhY�VVv0ir7kdTrUYv7JVdBV����DUBgPIH�Pvqgq��hYU7gYv�=PT�����hDUPO�N3�VVv0ijzTzT�O�h�vVU�4gW�wi�73��P7u�qugWq��UqPV��FPjf��Y7kdTrUV��6u�qVgW�wYWLjgIrUDIB�PTL7z�r�iYu�Pr3+qI�w�U��iIuvDIBDg��fIU�3YT�4P�qugNY��W4=V�3nqILSiJ��d��U�W�LijqOiNuvY�4LBdq6g��ui�LCqWH7iT4aPN�aiwfNiWHhuI3Jq��=i��JCJHUBhB6��7SgNYC�UPJDV�aiVHIgNY����vBv�Li���iUITYwPJD�qnVY3D��BLi���Vr�6BI47B�Y3IJ�vd��4B��4zhITDhIvu�q�BVHji�Y�PdfJd2LYBY7vPdY��ITvBNI�B���qhY��UINBN�BBVsJIhYPgYmJuI�JBV�4Ij�N�I�v�rqNBdqv�dIv�IIJV�BvBY7jd��N�I�vd��kD�q����fDU�Pi�u�VWYdb�HkYTP�PVY3g�HdB�qkuVqT+S60g�H�gNB�gd��PV��i�H�uW�vP��vqVrV�TH�BJ3�iJq�zTrUDIB�PvrfIWH�id�huN�2�WYwdW4�Dr��u�fTPhPgIv�JDSLJBVH4u�YPPduvuU�jBV�7BjY�+JmviTqJzJ��PT�jzVqCgVHJzJ��PT�jzUq�YT7huYqBPv7aYUYP�v��u�fTPv�SY��Iid�nV�3bzJYY����D�7�VV�V�r7udVHPV�7�VY3nPT7w����D�7�VV�V�r7ud��jgIrUDIB2BTB7zVq�zTrUDIB�PJr�VVqCzTP�uh��g�BaDW3�IJqnVY3D��BLi���Vr�6uN�n��YNiJq�zTrUDIB�PT�jzVq�zTf�uI3+qW��zUYgV�BUI�3�g�7uz��3Yh�vDTB�gv�uI���iV47Pr3Di�B���4=B�4Li�����4+iWHSBOHJq��FiwuTVw��uUPnqI4SiV4O���vBrraDv�hDT�jzVq�zTrUDIB2bIB7zVq�zTrUDIB�PT7wVU��i�0�DIz�Pv�hYU��iYPvP�BUgv�uI���iV47Pr3Di�B�ghqjgIrUDIB�PT�jzVq��DHLiI6�i�LCuWLvDI�aqdqIiV4O���vBrrCDIB�PT�jzVq�zTrnuY3bY�r�BV�O�vYUIrB2iY���w7gYwBCDIB�PT�jzVq�zT��VW��iT��iw7u��P�uJv�BILjIWv3V�7FP�Bn��YNiJq�zTrUDIB�PT�jzVq�zTrnVY3D��BLi���Vr�6uN��bI���JLPVrf�uJv6gV�uIW4��dcNzJ��PT�jzVq�zTrUDIB�PT�jIU���I��uWv��v7dzd��Dr��PrqYBTB7zVq�zTrUDIB�PJP�iJq�zTrUDIB�PT�jIUP�Dr��u�fv������q��V�huYqTi�7�qJ�3YhYnV�3Ui�4jPj�gV�m�DU�NiWBLYU7O�vP�Vd�Yq�r�IV��zJ�=u�q��WB�uNB+�T��Vd�Tgr�SYV��zJ�=u�fv�r7�Bd��Yv�6uh�Bi�4jP�73�vP=ud��gV�wYV��zJ�=uIqVgW�SYWL+��qaVd�0�r�Sq�3Pi�36DU�NDT�jzVq�zTrUDIB�PT�jzVq+��PvVYq+�v7�IV��zJ�Lu��b�V�S�W�O�vYad�B�iVfSd�r���PnDU�NiW�SdU�O�U3hVYq+�v7duNB+�U3JuWv�qr�S�w�P�U��VVv0i�7�qJ���TPFuhB�qWBLIV��zJ�FV�q0ir�hIW4gzJ��dNq�PT�jzVq�zTrUDI�0q�Y4dT�v�2L6BV�wPdY�zJ0v���JBY7jidY3B�Tv�r��zJ��PT�jzVq�zTrUVWT��Y7��W73zTr�D�q����fDU�Pi�u�V�3BPv�udVq+�N�6PYz�+T7wij�gYh��P�q�PT�jzVq�zTrUDIB�PT�jzWvO�T76VYqbiT�jPJL3Vr�6u�B2g�B�zVLPVrf�uJ��+T7fVW3ODrP6Dv3hDT�jzVq�zTrUDIB�PT�jzVq�zTrUDIq6iI�jPJ33YhYWVY3+�Y�ugJH+�Tu�P�3��T�jIUP�Dr��u�fv��LdijqjgIrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUP�q��VfhuJqOiYuhDIYVBr�SYUq��J4JuW�Ui�YP+T�v�rqNB�7dV�PC+NuNBN�BB���PhY4�W6vu�q�BVHji��N�Vr+�d�nVY3D��B7ghqjgIrUDIB�PT�jzVq�zTrUDIB�PT�jz��jgIrUDIB�PT�jzVq�zTrUDIm�DT�jzVq�zTrUDIB�PT�jzVq3Yv�UDTqVq�BfI�YCzv��P�qVqrq�PwB3YN�6D�����Lu�TL�zTrUDIB�PT�jzVq�zTrUDIB�PT�jIW3�Dr��uYq+�V�wYU7��Y�SV�36Prq�PwB3YN�6D���Pv�dzWvPYN3FV��hDT�jzVq�zTrUDIB�PT�jzVqWIVHUDIB�PT�jzVq�zTrUDIB2i��fdW4�qJHUDIB�PT�jzVq�zTrUDIB�PT�jzVq+�Tu�P�3+�r�aY��gV��OD�qTi�YV�V�+�U3�ud�Yi�3dzd��Dr��PrqYBTB7zVq�zTrUDIB�PT�jzVq�Dj�CDIB�PT�jzVq�zTf�zJq�PT�jzVq�zTrUDIBDB���qJqzITrnP�q���B��2L�YJ4uuYqDi�7uIU7CzJ6NzJ��PT�jzVq�zTrUD�3+i��fYU�OgI��DIPTP�HNiJq�zTrUDIB�PT�jbwuvu�P4BdzJq�Y4+vcvd���BI47�dP��I�vB�6vzJ��PT�jzVq�zTrUVWT��Y7��W73zTr�D�q����fDU�Pi�u�V�3BPv�udVq+�N�6PYz�+T7wij�gYh��P�q�PT�jzVq�zTrUDIB�PT�jzVLO��74V�qb�rruDU���j�UYh��BTB7zVq�zTrUDIB�PT�jzVq�zh3JBVfJ�dITBUuJD�rjBd�CBdIv�IIv�DLzBI47zdY�g��vu�q�BVHji�B7zVq�zTrUDIB�PT�jzVq��v7JuJvVgr�SPJqCzv��P�qVq��w�U7�zv��P�3D�Y�IB�L�iIPhPrqY��YNiJq�zTrUDIB�PT�jzVq�zTrUDIB�PJr�VVqC�J4vVj���VBL��YCzv��P�3D�I4jzW�+�U3�ud�Yi�3dgN��qJHUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIqbqW�aIU�Oi�P6dNq�PT�jzVq�zTrUDIB�PT�jzVq�zTrUP�r�PT�jzVq�zTrUDIB�PT�jzVq�zTrUuYqPPTLjIUPPi��6VdBDzWBaD���qJHUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIBD���uz���i��UIrB2u�3I�TL�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zT�Lu�B+ir��dWH�zJqnu��+�Y7�d���V�7�DIq����jIUPPiVH�P�q�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrnuWT�gv7dzd��zv�JVVv�qr�LB�Pg�vPPu�qNiTLI�TL�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT7fIU��zT��DIBD���wYU�kqJHUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jz�rOi��6P�BUgJ�w��q��V�huYqTi��4�w�kqJHUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzU�ggIr�uhBDg��wi�7kgU�WuY3bPW�����P�W3WVY3D��B7PJLOid�nV�BNPT7fIU��zJL�P�q�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT7fIU���IP�uJ4TP�����q+�h�7uV7hDT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUP�r�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�f��L�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zT��VW��iT�dI��OV��2uJ����YNiJq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB2gVBLYW33�Ir�dNq�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�f��L�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrnu��+�Y7�d���V�7�DIz�PT7fIU���IP�uJ7hDT�jzVq�zTrUDIB�PT�jzVq�zTrUDIm�DT�jzVq�zTrUDIB�PT�jzVq�zTrUDIqV�J�SY�qjgIrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUuYqPPTLjI��OV�rUIrB�gJ�wgw���dcnVj��i��rB�Pg�vPFIV�6dVr�q�4�Vrf�uJ�Ugv�uI���g�qUD�3gg��fYW4�zTrnuY3Di��V�J�O�J4SV�B�P�4jzVL��hrhDvBnPJYNiJq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�gJfSDUrgYT0�IY3+�I����q+Dr�TuT�hDT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jz��jgIrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUV�q0��7u�TL�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�Pv�aDW4PYNBUdV7hDT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jz��jgIrUDIB�PT�jzVq�zTrUDIB�PT�jz��jgIrUDIB�PT�jzVq�zTrUDIm�DT�jzVq�zTrUDIB�PT�jzVq+D�76P�3V�V�6�JL3��uvVrB�bI�jIUPPi��6VdBDzWBaDdqjgIrUDIB�PT�jzVqWIVHUDIB�PT�jzVq��J4LDIBUgJrud��3YhYau�qY��YNiJq�zTrUDIB�PT�jzVq�zT��V�3D�VBLB�qPV�7�VY36PWBwb�qCzv��V�3D�VBLBw�kqJHUDIB�PT�jzVq�Dj�CDIB�PT�jzVq�zT��V�3D�VBLB�q+D�76P�3V�V�=�TL�zTrUDIm�DTB7zVq�zTrJDJ��DT�jzVq�zTr4DIH3Y�7�Ih�adJrBgVYLY��UiJq�zTrUDIB�PvrfzW3�iIPTDIB�gJ�SY�YP���nV�B2���aIW4g��P�DIH3dV��iYYSqVI0iwY�PJq�+h3=dJv��IH�DV3vuIv7PVvY�UY�b�4vPVqUPYqLPNYdB��NiJq�zTrUDIB�PhY�qdcvuYB3ud�VBY�SbVLgPV�aPJInb�vLgj��D��FdJ�0q�7wY��gYN3JuTqV�I4L�UYgD�7JuYq�qY�Sb����T76VWvV�Y7�BV7gIh��uWvD�VfSi�L��v7�V�3�q��SY�YDVr76uW��qVrfIU�OzVHUDIB�PT�jiJ�viJ��Bhq�uVrfI���D�TJdw��gV�wbV��iI�FV��TqV�LY����U3JP�vVPWYfdU3���P�P�q6gW�wY�Pg�vu�VYq6�JB�bjBBg��SdT����H�iJq�zTrUDIB�PJ�SY�YP���nV�rai�LCqWLvVVLCDIB�PT��dI7d�d�bI�B���4CB�L�zTrUDI��D�P�+vIvVUY�B�7dqIB7zVq�zT�4zJY3DW6nYh3UdJr��IH�IwznYhP6dJYY�Ir�PT�jzVqbPJ�Lg���iV44�J�6dr3���I�DT�jzVq�����zJY�gV�vYTL�dJvW�SLLD�7NiJq�zTrUdV7YD�PgiI0vdj�kB��n��PPPY�jgIrUDIB��I�UiW�6dr3Lq�����4CB�L�zTrUDI���TB�uI4=PVY��26nb��kiVBUdJ�LPJY�uNrkPV�vdJr�q�Y�BW4kPYY4dJvfg�snb���iJq�zTrUdW7�D�P�B�zvVYq6BdPLB�Y4zh3jgIrUDIB�����iWv7V��6q���i��PCJH�B�76iVrUDT�jzVq��r�SzJY�uW�vgd��qVrbiNY7g�7�iJq�zTrUdW7�D�YPgV�JVWvnzJ��PT�jzd�BPJ��g�YFi�7gVw�6Dh�CDIB�PT��PhrjPVrd�WY3Y�P7CJvLiT46Pv7NDT�jzVq����SzJY�zW�ku���qVrd�WY3Y�PUiJq�zTrUdT��D�Y�DNzv�r�nBI47djY�gI�JuVr�zJ��PT�jzd�kzV�LgN�hiV4�BJLvD��nqI���w��VIL�zTrUDI�r�IvUiW��BNP6g�r=i�3PiWv�DVP6gI4�iJHP�U�����LgI7Oi��+PWH�uV7�iJ�O���JPTL�zTrUDI�r�IvNiW��BNP6g�r=i�3PiWv�DVP6gI4�iJHP�WvaDNPLgI7Oi��+PWH�uV76q��u���JPTL�zTrUDI�r�I�UiWvUuI46���hiVL4�Jv6dj�CDIB�PT�����bqJ�LiVH�i�qg�Wvn�dBLi��TDT�jzVq���ISd�ra���giU�aBTvCDIB�PT���dBbPJ�LgY7ziwP����hBNPaqdI�iN�SBJ�Jud�CDIB�PT���d�bqJ�6gI�WiV73d�4v�r�ai�LUDT�jzVq����NdUqaiV�gI�4JDI��Pv7IiU�NqWLv�WHCDIB�PT��D�qkzV�LgY7ziwP���v6B�36gWHPDT�jzVq����NdvraiV�gI�4JDI��i�qzgNYgzIL�zTrUDI����v�iWv7V��6q���iN�4D��S��P6iVrUDT�jzVq�����dIra��vP�JLJVdq6�v��iwYgV�Lv�dq6q�rPDT�jzVq�����dYraiV�v�w�4BV76�v��iwYgV�Lv�dq6q�rPDT�jzVq�����d�qaiU�NqW�vBDHnq�7fiW�CzIL�zTrUDI���I��iW�U�W�nq��NiwBPCJ4vV�YCDIB�PT��D�7BIV�LgY7ziwP���HSB�B�i�qzi��4iWv7V�BCDIB�PT��DdBbPJ�6��H�iV���Wvh�I3Li��nPJzS�U�gYN3JVd�hPhYPgY�JDhP�BdqkBhINqVuvdw�DBdY�PTB7zVq�zTrUDJ�2zVBLY���V�7vDIq+qWfS��4PYh�UBVH7IdYP�VuJd2LYBY7vPV�fD�rgPD60g�H�gNB�gd��PVrCiDL�DwYvYh3UqY�TqIHdCJH�uI�SqJHUDIB�PT�jiJq�Dr��uJT��JB�z�P��T�6uT3D��fSB��JV�BgB�6nq�Y��VfvVVIJBV��zhYOgdzvd2L�BVHwq�B7zVq�zTrUDJ��q�B7zVq�zT�NPrq+�Jr�dVqgi�PvVdBD��fSB�q3��uvV�3gi��aIVH+�N�6PYqbq�7wY��jgIrUDIB2BTB7zVq�zTrUDIB�PT7fIWH3V�vTI�v�gv�6b�73�vPhu�BUiWr�B�q�VrrUud�VBY7uVW4Oi�rUDU�TgJ�SY�YP���nV�BnBTB7zVq�zTrUDIB�PJBLY���V�7vDI3D�V��YdqjgIrUDIB2bIBUiJq�zTrUdw���IB7zVq�zTrUDJ��i�IvD�47�V76�v��iwYgYIL�zTrUDIB��I�rzUqPV�7�u�B�PT7fPN3��J4vP�qVi�7uDV�Jdr�hBVr�djITDhIvV���B�rjDjIv�IY�dv��gWY�b��UiJq�zTrUDIB�PvrfzW3�iIPTDIB�gJYI�Vq3YhI�V�q�i�B7��HTuWP6�j�JiWqSiW4aV��LiT�WiWv�I�Ivdj�bBd�SqIB7zVq�zTrUDJ�2zVBw�U�PYh�UDIBDB�v7zU�Oi��6V��V�I�kPdqn+Jr�iOL�zNY�YJ�ndJrUg2L�uV3fgWLJVdBaqW�TDT�jzVq�zTr4DIY2qv�uDW3OITrUD�3n�I�wiwY��vPaV�3�PhINqYzv�j�WBd�CBdYg���v�IBfBdY4�VY�Ih�=PVI��Wq�PT�jzVq�zJHUII32g�BL�U��zTrnV�3V�Y�uIU�O���UuY�v�r7�P�4�gI�LqdYfi��4gWHJB�Pa�I�JiV7�D��vB�BLijqO���NYwPJD�76g�7ugNPP�JLvdw�L��PJiUcvd�7UDI4LgVHSiN�OPW4�BwPaPN�ai�L��W�vBY�Li���iWqSiWHS��qaqW�NgNY���v�d�PaiVHIqUP��Wv=DI3aqduhiV�NuU�6Bv��i�f�gNY����U�W�6g�u�iN�OPW47d���i�f�iV7�iWv6VV7LiU�NDT�jzVq�zTr4DIY2�Y7uI�r�id�UVVT�qW�wYW3OgI�LgI7�i���CJHJBY�6idIv��BaYW�NBN�BBVrd�jP�IJ�viNrOBY��B�YO�I�vuW�TBI�ngjY��NPjgIrUDIB�PTL7z�r��J3�u�B����rY��P��PNP�q6qW�7�w�6DW����u�iV��qW4�BN�6q���iwY�gWLJB�3LPJ�0DT�jzVq�zTr4DJ�0DT�jzVq�D�f4VVv0�r��zWv�YhY=P�q6qW�7zU7��W4NV�BUgJY���B�zvfvdYBNPT7fPN��zTrnPY���T�jIWL�V�7�P�q6qW�=�w�B��r�zJ��PT�jz�qjgIrUDIB�PT�jzVq+Dr��uY3Bqr�L�WLPij�FuIqV�J�jPJ�3YhYNPr3�PJ�hPw���vYUD�3U���jI�YBITrnPI��PT7fgN��zv�nPr3+g��wiwPOgI��dNq�PT�jzVq�zTrUDI3+i��fYU�OgIf�uJ�Vi�HNiJq�zTrUP�r�DT�jzVq�zh34DJq�PT�jzVq�zJHUII�vg���YV�vV�BDBY�n��YSqYfvV�r�BV�wIjYOiYPjgIrUDIB�PTL7z�rg�vPFV���gNITBJvhdr�6qV�ziWv�Y�4TBW��qU�agWq�D�4aiT4aidqIiWv�Y�LvDhB�ijqIi�L+D�4=Bv�LqdYfi��4gW4hVDH6qY7YDT�jzVq�zTr4DIY2qv�uDW3OITrUD�qD�VBL���3Yh�vDIq6qV�wYW�gV��UB��vI�YP�VsJd2LfBdP7djY��IfvBNYTB�����PgPdcNBN�BBY�SY�Y���0vd��JB��n��IJPY�TB�BjBVH4DhP�Yh�vuVY�Bd�CBdYgDTTvBNYIB�cSP�ITDhIJDhunBd�SqdY�gI�v�I�hBdY4�d�N�ITviN�2BdqvqjY�PdfJVWI�B�7�ChY�gI�vB�6vBY�nq�P�Yh�vVV�NB�7�ChY��I�v�rq�B�cJuTB7zVq�zTrUDJ�2zVBLY���V�7vDIq+qWfS��4PYh�UBVH7IdYP�VuJd2LYBY7vPV�fD�rgPD60g�H�gNB�gd��PVrCiDL�DwYvYh3UqY�TqIHdCJH�uI�SqJHUDIB�PT�jiJq�Dr��uJT��JB�z�P��T�6uT3D��fSB��JV�BgB�6nq�Y��VfvVVIJBV��zhYOgdzvd2L�BVHwq�B7zVq�zTrUDJ��q�B7zVq�zT�NPrq+�Jr�dVqgi�PvVdBD��fSB�q��J��uTqVYVf4DU�g�Wm�DTBDgJ�uDW3��J4JuW���Iv�z��jgIrUDIB2BTB7zVq�zTrUDIB�PT7fdW7�iYP6uW4b��YLYVqzITrnP�q���B��2L�����V�qVqYISijPgIJq�dNq�PT�jzVq�zTrUDI3+i��fYU�OgIrnP�q���B��2L��J��uTqYiTvIz�B��J4vP�3gg��jPJL�����V�qVqYISijPgYUB0Vr�0�ILdqJq3YhI�P�v��TLjIU7P�T76V��vY�ru��4�����DvBNPJr�Bd��iIPhDTBD���hDW4gYhYIuY3�irqF�W������d�B�gv7fYU�PVr��u�fT��HNiJq�zTrUP�r�DT�jzVq�zh34DJq�PT�jzVq�zJHUII�vg���YV�vV�BDBV��idYSqYfvV�r�BV�wIjYOiYPjgIrUDIB�PTL7z�rg�vPFV���gNITBJvhdr�6qV�ziWv�Y�4=Bv��qU�agWq�D�4aiT4aidqIiWv�Y�LvDhB�ijqIi�L+D�4TBW�LqdYfi��4gW4hVDH6qY7YDT�jzVq�zTr4DIY2qv�uDW3OITrUD�qD�VBL���3Yh�vDIq6qV�wYW�gV��UB��vI�YP�VsJd2LfBdP7djY��IfvBNYTB�����PgPdcNBN�BBY�SY�Y���0vd��JB��n��IJPY�TB�BjBVH4DhP�Yh�vuVY�Bd�CBdYgDTTvBNYIB�cSP�ITDhIJDhunBd�SqdY�gI�v�I�hBdY4�d�N�ITviN�2BdqvqjY�PdfJVWI�B�7�ChY�gI�vB�6vBY�nq�P�Yh�vVV�NB�7�ChY��I�v�rq�B�cJuTB7zVq�zTrUDJ�2zVBLY���V�7vDIq+qWfS��4PYh�UBVH7IdYP�VuJd2LYBY7vPV�fD�rgPD60g�H�gNB�gd��PVrCiDL�DwYvYh3UqY�TqIHdCJH�uI�SqJHUDIB�PT�jiJq�Dr��uJT��JB�z�P��T�6uT3D��fSB��JV�BgB�6nq�Y��VfvVVIJBV��zhYOgdzvd2L�BVHwq�B7zVq�zTrUDJ��q�B7zVq�zT�NPrq+�Jr�dVqgi�PvVdBD��fSB�q��J��uTqVYVf���4gi�r�D�qD�VBL���3Yh�vIr��qTvjgTL�zTrUDI3hDT�jzVq�zTrUDIB�gJ�SdU�gYvPvYd�6B�7dzd��zvf�uIq6��4IB�7P�T76V��vY�ru��4CzJ6NzJ��PT�jzVq�zTrUuJvV���uDUY�zvf�uIq6��4IB�7��W4NV�B����aI��PYNq�D�3bgWBLYW4Oi���PVvVu�v��w��Y�YNd�B2���aI��PYNq�D�3bgWBLYW4Oi���PVvVu�vV�wPBgVLhdY���T�wiwY�Dr7�u�BUgJ�SdU�gYvPvYd�6B�7V�N3uIh3�DvBNPT7wI�r�iIu�uY��qILI�TL�zTrUDIm�DTB7zVq�zTrJDJ��DT�jzVq�zTr4DIY2qY���V4�dvq�gJYdB��nudqnPYqC�IH����nYhY6IVHUDIB�PT�jiJq��v�6uh�BPhY�qIsv����BV�L��Iv�IIvd��TB�7��jzTzTfvV�PjBdYv�jIv�IIvd��CB��JBdYgzvfvuUrVB��kihYSqYfvV�r�BV�wIjYOiYPjgIrUDIB�PTL7z�r��TP�VY��PT�jIWL�V�7�P�q6qW�7zU�Oi��6V��V�I�kudqnPYqC�IH7CJmnPVH7+JrBPJY�BN��uY3TqVvuq�snb�7kYT�6PY��gWYdBwYvu�P4+JYagNYkzVqvuIL7qV�4q2L�iW�nPIBvPYqdg�H�BJ6nuV�a+JYjqVY7q�PvPd�SqY�TPTH3PNznPVr�dS60g�H3dVq�PdqSPVruqwYLVw�kiYPJ+v�TPTH�zNY�Yv�S+J�4q2L�D�BkiYPJ+JrBgVY3YW�kuVYazVHUDIB�PT�jiJq�D�76P�3V�V�7zW�O���hV�q�qI�kuI�ndvqCiOL7CJ4kYJ�ai���PrquqUP��W4�d�3�q�LuiV��qW4�BN�6q���iwY�gWLJB�3LPJ�0DT�jzVq�zTr4DIY2��rfDUP��TvUI�3�g�7uz��3Yh�vDIHLYVv�g�PS+JrCiDL�DwYvYh3UqY�TqIHdCJH�uI�SqJHUDIB�PT�jiNr�qJHUDIB�PJBfYW�O�J4=DIqg�V�Ld��3Yh�vDI3b�JruzW4D�h�huW�Ugv7fYU�PVr��u�fTbIv=z�qCIVHUDIB�PJYNiJq�zTrUDIB�PT�jIU7P�T76V��vY�ru��4��j�UD�3DiJrud��zi��=uJvVi��6dU��iYY�Dv�hDT�jzVq�zTrUDIB2�Y7uI�r�id�UD�3DiJrud��zi�0huY32i�LwiwY�Dr7�u�BUgJ�SdU�gYvPvYd�6B�7V�NquIh3�DvBNPTv=z�q��J4vP�3gg��jPJL�����V�qVqYISijPgYUBNVr�0�ILdqJq3YhI�P�v��TLjIU7P�T76V��vY�ru��4���P�DvBNPT7wI�r�iIu�uY��qILI�TL�zTrUDIm�DTB7zVq�zTrJDJ��DT�jzVq�zTr4DIY2qY���V4�dvq�gJYdB��nudqnPYqC�IH����nYhY6IVHUDIB�PT�jiJq��v�6uh�BPhY�qIsv����BV�L��Iv�IIvd��TB�7��jzTzTfvV�PjBdYv�jIv�IIvd���B��JBdYgzvfJuI�SB��kihYSqYfvV�r�BV�wIjYOiYPjgIrUDIB�PTL7z�r��TP�VY��PT�jIWL�V�7�P�q6qW�7zU�Oi��6V��V�I�kudqnPYqC�IH7CJmnPVH7+JrBPJY�BN��uY3TqVvuq�snb�7kYT�6PY��gWYdBwYvu�P4+JYagNYkzVqvuIL7qV�4q2L�iW�nPIBvPYqdg�H�BJ6nuV�a+JYjqVY7q�PvPd�SqY�TPTH3PNznPVr�dS60g�H3dVq�PdqSPVruqwYLVw�kiYPJ+v�TPTH�zNY�Yv�S+J�4q2L�D�BkiYPJ+JrBgVY3YW�kuVYazVHUDIB�PT�jiJq�D�76P�3V�V�7zW�O���hV�q�qI�kuI�ndvqCiOL7CJ4kYJ�ai���PrquqUP��W4�d�3�q�LuiV��qW4�BN�6q���iwY�gWLJB�3LPJ�0DT�jzVq�zTr4DIY2��rfDUP��TvUI�3�g�7uz��3Yh�vDIHLYVv�g�PS+JrCiDL�DwYvYh3UqY�TqIHdCJH�uI�SqJHUDIB�PT�jiNr�qJHUDIB�PJBfYW�O�J4=DIqg�V�Ld��3Yh�vDI3b�JruzW4VV�r�D�qD�VBL���3Yh�vIr��qTvjgTL�zTrUDI3hDT�jzVq�zTrUDIB�gJ�SdU�gYvPvYd�6B�7dzd��zvf�uIq6��4IB�7P�T76V��vY�ru��4CzJ6NzJ��PT�jzVq�zTrUuJvV���uDUY�zvf�uIq6��4IB�7��W4NV�B����aI��PYNq�D�3bgWBLYW4Oi���PVvVu�v��wPBgVLhDIq6qV�fVW3OzJqnuh�b�Y7�YUYY�W�JV�Ph�r3d�w�B��r�d�q6qV�fVW3OzJqnuh�b�Y7�YUYY�W�JV�Phqv3dbw�CINqUdIBNPT7wI�r�iIu�uY��qILI�TL�zTrUDIm�DTB7zVq�zTrJDJ��DT�jzVq�zTr4DIH�+JqkYTP7PVrUg2L�gJ3kgDLn+vq���Y3YJmnuVBSdS60g�H�IwrvuVB7PYq��IH�IwfngDLn+vq���Y3YJmnuVBSdvqng�H3DW7�uVB7PVrVgIr�PT�jzVq�zJHUB��3DjY����vd��TBI47d�P�dh�v�w�+BdPLB�Y4zhmNBN�BBVr3zhY�BW�JDJr2B��JYjYPYJ�vBWTJB�rjbjPC+h�vdjf�BdYdiJ�SY�YgVr76uW�IiV4SiWvhBY3Jq��Fi��Td�v6u��nq�L�i�33V�LvB��aiT�r��vvYT�h+JrP�OL��wYvuVqJzVHUDIB�PT�jiJq�D���uJv�q��jzVL��vuTP�B2�W�fDU�OiVBUB��3DjY����vVVr�BV�JBIB7zVq�zTrUDJ�2zVBLY���V�7vDIq+qWfS��4PYh�UBVH7IdYP�VuJd2LYBY7vPV�fD�rgPD60g�H�gNB�gd��PVrCiDL�DwYvYh3UqY�TqIHdCJH�uI�SqJHUDIB�PT�jiJq�Dr��uJT��JB�z�P��T�6uT3D��fSB��JV�BgB�6nq�Y��VfvVVIJBV��zhYOgdzvd2L�BVHwq�B7zVq�zTrUDJ��q�B7zVq�zT�NPrq+�Jr�dVqgi�PvVdBD��fSB�q3YhYNPr3DYY7ugj�Czvf�V�3���L�iJq�zTrUP�q�PT�jzVq�zTrUDIq6iI�jPJL��J3�uN��+Jrw�U7�Yv�7Ih�VBY�LbV3�iYr�DvB6BTB7zVq�zTrUDIB�PT�jzVq�zv�=u�q�Pv�dzV�PYv�7DI�4���juNY+Dr��uY3Bqr�6bVLgVr7�Vd�YqI7�zU73�vPhu�B2g��dzW��id��V�qbg��hIVq�YTYUIYYDzvm�i�HY��PYVjrD��q�IVq�Ihr6uN�2q��SuJq+�d�nP�qVB����TL�zTrUDIB�PT�jzVq�zTrUV�3�ir��PJLP��rnd�B�gJfhY���Dru�d�B�gJBLY���V�7vVjBgg�B7ghqjgIrUDIB�PT�jzVq�zTrUDIq6iI�jPJL�iYu�Pr3+qYmhVW3�gII�Ir����YNiJq�zTrUDIB�PT�jzVq�zTrUDIB�PJ�wgw�O�JBUuWvV�T�rY��P��PNP�q6qW�7gw�OV��hu��Di�LjDdq�zT�hDIBDqW�uIUq�Vrr�Dv�hDT�jzVq�zTrUDIB�PT�jzVqWIVHUDIB�PT�jzVq�zTrUDIB2�Y7uI�r�id�UP�3+�Y7I�TL�zTrUDIB�PT�jz��jgIrUDIB�PT�jzVqgYN3FV�3hDT�jzVq�zTrUDIB�PT�jzVq+Dr��uY3Bqr�L�WLPij�FuIqV�J�jPJ�3YhYNPr3�PJ�wY���zTrnP�qVB��jD��kqJHUDIB�PT�jzVq�Dj�CDIB�PT�jzVq�zT��V�3D�VBLB�q�D��4V��hDT�jzVq�Dj�CzJ��PT�jz�PCgVHCDIB�PT�jz�r�dJr=PTH3�V�nuY�S+vq��wY3uJ���WLPgN�6PYq+q��uDW6JDWv3BVHvP�P�B�zvVYq6B��kY�B7zVq�zTrUDJ��iw��iWH�Br3nqVHggr7wD�4gV�47u����Y7kuI7=PV��qWY7+J6nYTP�PY�T�WY3YJ3NiJq�zTrUDIB�PvrfDW4�DrP�uW�2gVfSb�BgYTPvzJ��PT�jzVqCgI��P�q��VfhPw7��YuTVd�VqJ�wiwPOgI��i�7aiNfJCJv7�wP6gjqSiwP�d�4vd�7nq�PfiVq3b�L�zTrUDIB��IL7b�L�zTrUDI32�Y�L�w�P�I�LPr�vgW�wiwPOgI��VY3bz�7wD�4gV�47u����Y7jPN�jgIrUDIB2BTB7zVq�zTrUDIB�PJr�VVH�Iv��V�3BPv�dzVL��J3�uN��+v��IW�u�T��V�q0�TLjDU�OYvYUu�q6�W�jz��PIT��Dv3hDT�jzVq�zTrUDIB�PT�jzVq�iYu�Pr3+qI�wVW3OD��6dNq�PT�jzVq�zTrUDIm�DTB7zVq�zTrUDIB�Pv7Lb��Czv��IrqbqW��Bd�Czv��V�3B��H�zVL3Yj�NdN��gJrd�w�CVwBCDIB�PT�jzVq�zTrUDIB�PJr�VVqCD�0�uJ�2qWB�PJL�iYPFYN�D��4I�W��zTraVYqDgV�SY�YPid��uJv�i�LIBwqCVwBCDIB�PT�jzVq�zTrUDIB�PT�jzVq�zh3JBVH4Dv��IW�d��uvVVT�g�BLY�HJ�r�6g�rui��vV�HS��qaqW�NgNY��U�vBV7��UrIiNP�I�4�uY3L�hYYDT�jzVq�zTrUDIB�PT�jzVq�zTrUDIBD��rwiw7�YjY�V�q+PW�Sg�4O�Nq�DVv6qr7dzU7gVrrUVdf�q�4L�UYgD�7JuYq�qY��IW�3��uvVVT�g�BLI�P�gTPnVVL6d��dD��kqJHUDIB�PT�jzVq�zTrUDIB�PT�jzVq��U36V�3�iTvdghqjgIrUDIB�PT�jzVq�zTrUDIB�PT�jzU�gVrf4uJTTPJ�fD�rgYwBCDIB�PT�jzVq�zTrUDIB�PJP�iJq�zTrUDIB�PT�f��L�zTrUDIB�PT�jzU�gVrf4uJTTPv7L�UB���INzJ��PT�jz��jPJHUDIB�PT4�iNrjgIrUDIB�PTL7�w�UDI�6gjq�gr7wD�4gV�47u����Y7kgY7LqVr�iOL7+J6nYTP�PVrFirr�PT�jzVq�zJHUII3+i��fYU�OgI�7u�f��v7��UYjgIrUDIB�PTL7z�r��J3�u�B����rY��P��PNP�q6qW�7�w�6DW����u�iV��qW4�BN�6q���iwY�gWLJB�3LPJ�0DT�jzVq�zTr4DJ�0DT�jzVq�D�f4VVv0�r��zWv�YhY=P�q6qW�7zU3�YJ��IYqDgY�SY�YPid��uJv�iTL�iJq�zTrUP�q�PT�jzVq�zTrUDIq6iILj�VL�iYPFDIz�PT7fIWH3V�vTI�v�gv�6b�73�vPhu�BUgVr��V4��N3�uhB�PT4��V�CIJ�NzJ��PT�jzVq�zTrUDIB�PT�fDW4�DrP�uW�2iY���w7gYwBCDIB�PT�jzVq�zTf�zJq�PT�jzVq�zTrUDIBDqW�wg�4�i�vUIrB2u�3I�TL�zTrUDIB�PT�jzWvO�T��D�qnbY�SbdrOi�r�D�3+i�B�ghq�zv��I�7�BT�jIU��Ih��P�q�PT�jzVq�zTrUDIB�PT�jzU�ggIr�uhBD�VBwb�7Czv��V�3bu�7wgN�BY��hDIB�gr7wDU�gV�47u����Y7juN���jc�IrB2iY���w7gITrLDW�2�W�fDUqO�Tv�D�3+i��4�JL3Ih�0VrBNPT�SdUPOIh�aDvB�bY�I��qBzVHUDIB�PT�jzVq�zTrUDIB�PT�jzVq+gY�UuhBD�VBwb�7Czv��V�3bu�7wgN�BY��hDIB�q�47uN���j�UdIB�iI77zU7�YT7FP�3�iT7fDW4���BnuY���r3dqJq�Y�Y�DIz�bI�juhP+�V�NzJ��PT�jzVq�zTrUDIB�PT�jzVq�zTrnu�BDiv7uDU7��d�UIrB2�W��DU7�D���D�3+i��4�JL3Ih�0VrBNPTvjqN�BIJ6NzJ��PT�jzVq�zTrUDIB�PT�f��L�zTrUDIB�PT�jz��jgIrUDIB�PT�jzVq3Yv�UDTqbqW��Bd�Czv�JP�q�i�Bad��zg�r�P�q�PT�jzVq�zTrUDIB�PT�jzVL��hrNDIz�Pv�SbdrOi�r�D�����rwYU���V6ndYB�CT�jIUP��J36uJ�bu�vV��qkgIrnu�BDiv7uDU7�����dNq�PT�jzVq�zTrUDIB�PT�jz�P�+J�vqUY�b��vIh�vqVTNiIH7q��kgDLn+vq���Y3�W4�iJq�zTrUDIB�PT�jzVq�zTrnP�q���B��2LPYv�7VjBbiv7��wBCzJBUuY�4i��fdW4�zTrad��D���uz��kqJHUDIB�PT�jzVq�zTrUDIB2�W�wYW4�zJq0Dv�hDT�jzVq�zTrUDIB�PT�jzVq�iYu�Pr3+qI�fIU��YvINzJ��PT�jzVq�zTrUP�r�PT�jzVq�zTrUDI3+i��fYU�OgI�LVYq0��7I�TL�zTrUDIm�DTB7zVq�zTrJDJ��DT�jzVq�zTr4DIH�zNY�YT3v+JINiVY�qVvvYN3=+v�vi�YdB��vPVr�dvq�gTH3PJmnPIBvIVHUDIB�PT�jiJq�D���uJv�q��jzVL�zT��uW�Dir�SYU��dJYjqVY�uV3fgW4aV��LiT��DT�jzVq�zTr4DIY2qv�uDW3OITrUD�3nPJr�Bd�gYJ�6uJ��iWqSiW�LivfTBY�SIdY4zT3jgIrUDIB�PTL7z�r��TP�VY��PT�jIUY�Yhr7V�3�PJr�Bd�gYJ�6uJ��iNuvBJ�vB�BaPN�ai�mNqW�Liv�L��LfiV4O�wPJD�7�qdY=iN�4Y�Lvd�H0Bhq�ddYPYTfJDhuTBdY4�dY��I�vu�BzBY�jbjY�iVuv���JdYr�PT�jzVq�zJHUII32g�BL�U��zTrnV�3V�Y�uIU�O���UuY�v�r7�P�4�gI��q�INiUIJ�J4�DU�L��LfiWqSiW4�BNPaiVHI���NYw�L�r�LijqO��4OCNPJD�76g�7ugNPP�JLvdw�L��PJiUcvDIL�zTrUDIB��I�rzU�gVrf4uJTTPv�Lb�PO�vP�uW��iV�+��47�2H�q�YIi�TvBd��i�P6Bhq�ddY3INmJdrB6BVH4u�YPPduvuU�jBV�7BjY�+JmviTqJzJ��PT�jzVqCgI��P�q��VfhPw7��YuTVd�VqJ�wiwPOgI��i�7aiNfJCJv7�wP6gjqSiwP�d�4vd�7nq�PfiVq3b�L�zTrUDIB��IL7b�L�zTrUDI32�Y�L�w�P�I�LPr�vgW�wiwPOgI�=u�q6gWr�PJL�zNqUD�3n�T�jIUY�Yhr7V�3�bIvdqJq+�vf4uJv���r�b�YzY�r�zJ��PT�jz�qjgIrUDIB�PT�jzVq+�hI4u�q+i�B7zd��zv�vPr�4gY7uDd3BYj30dJ�DqV���V�gV��NzJ��PT�jzVq�zTrUD�qD�VBL���3Yh�vDIz�PT7wI�r�iIu�uY��qY���DHBY�HnV�3V�Y�uIU�O��zNzJ��PT�jzVq�zTrUD��v�V�dzd�����NzJ��PT�jzVq�zTrUV��0PJYNiJq�zTrUDIB�PT�jzVq�zTrnP�q���B��2LPYv�7VjBbiv7��wBCzT7�uW�2�V�jz��PV�rUD�3UPT7fgJ�CYwBCDIB�PT�jzVq�zTrUDIB�PT7wBdrOINBSdNq�PT�jzVq�zTrUDIB�PT�jzU�ggIr�D��v�V��DW4�gU��D��v�V�dijqjgIrUDIB�PT�jzVq�zTrUDIB�PT�jzW��iYP�u�7hDT�jzVq�zTrUDIB�PT�jzVqWIVHUDIB�PT�jzVq�Dj�CDIB�PT�jzVq�zTfhuIq6�v7dPJLOi�PTVVvV�Y�7IUY�Yh��dNq�PT�jzVq�zTrUDI3+i��fYU�OgIf�uJ�Vi�HNiJq�zTrUP�r�DT�jzVq�zh34DJq�PT�jzVq�zJHUB��J�hYP+v�vu�qzBV�LY�YPgI�JdjP�BdzJD�B7zVq�zTrUDJ�2zVBLY���V�7vDIq��VBL��Y��UzhuYqD��rjqJq3�vP�V����r3d��HJBY�6idINiwBPCJ4vV�3aiVHIiw�S�J4niN7��dY=qUP��W4=V�3nq��hgNY��W4UB2Haq�L�DT�jzVq�zTr4DIY2��rfDUP��TvUI�3�g�7uz��3Yh�vDIHLYVv�g�PS+JrCiDL�DwYvYh3UqY�TqIHdCJH�uI�SqJHUDIB�PT�jiNr�qJHUDIB�PJBfYW�O�J4=DIqg�V�Ld��3Yh�vDI3bgWBLYW4Oi���PVvYiTL�iJq�zTrUP�q�PT�jzVq�zTrUDIBD�Y7udVqzITrnP�q���B��2LPYv�7VjBbiv7��wBCzT�hu�B2�Wru��4�gV6NzJ��PT�jzVq�zTrUD�q��VB7zd���U��dNq�PT�jzVq�zTrUDIq6iI�jg�7O�vPvP�BUgJBLYU7CYj�NDv3hDT�jzVq�zTrUDIB�PT�jzVqgid��V�q�gWrjzVH+D�76uN�2g�B�zVL�iIPhPrqY��YNiJq�zTrUDIB�PT�jzVq�zTrUDIB�PJr�VVH�D�76V���qr�uIW73zJqadw��uv7j�N��zJ3�V�Bh��7jb���zTrnP�v��J��Y�B�zv�TVY3DgWrwYU7CIJ�NzJ��PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PJr�VVHP���4uW��iT7w�V3��T��V�3B�r�=�w7CVwBCDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq+�TP�uJ��bI���TL�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zv�TVY3DgWrwYU7���P�d�r�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT7w�V3��T��V�3bu�v6�wBjgIrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT���jqjgIrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�wDU�gYTPSdNq�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIB�PT�f��L�zTrUDIB�PT�jzVq�zTrUDIB�PT�f��L�zTrUDIB�PT�jzVq�zTrUDIB�PT�fYUY���u�DTBDqr�uIW73�vPFDv�hDT�jzVq�zTrUDIB�PT�jzVqWIVHUDIB�PT�jzVq�Dj�CDIB�PT�jzVq�zT��VW��iv7���q�D�L�D�q��VB7gN��qJHUDIB�PT�jzVq�zTrUDIB2��rfDUP��I�vV�3�Pv�ug�7gV�f�uY��qILjPWH=�WP6g�YOiwBPCJ4vV�36�T4SiwfNgW4�d�3�q�LuqUP+iJ��iV4TuTq0q�7wYVH+�UBad�B�gJBLYU7CIJ6NzJ��PT�jzVq�zTrUP�r�PT�jzVq�zTrUDI3+i��fYU�OgIrnVY3+�IHNiJq�zTrUP�r�DT�jzVq�zh34DJq�PT�jzVq�zJHUB��J�hYP+v�vudP+BY�SYjITiI�v�w�hBY�n�TB7zVq�zTrUDJ�2zVBLY���V�7vDI3b��BLiwYgqJHUDIB�PT�jiJq�Dr��uJT��JB�z�P��T�6uT3D��fSB��JV�BgB�6nq�Y��VfvVVIJBV��zhYOgdzvd2L�BVHwq�B7zVq�zTrUDJ��q�B7zVq�zT�NPrq+�Jr�dVqgi�PvVdBD��fSB�qPYhYnuJT��r7�VW4�i���u�fTiTL�iJq�zTrUP�q�PT�jzVq�zTrUDIBD�Y7udVqzITrnP�q���B��2LPYv�7VjBbiv7��wBCzJ�aV�3DqJBLb�q�D�7Jd�v+�Vr���L�i�76uJ�b��fSBwY�iYPhV�q���7duN�kqJHUDIB�PT�jzVq�D�76P�3V�V�7zVL�iYPFYN72P�HNiJq�zTrUP�r�DT�jzVq�zh34DJq�PT�jzVq�zJHUB��J�hYP+vqIYTP=BY7�qhYg��rjgIrUDIB�PTL7z�r�iYu�Pr3+qI�fd���iV4vVUq�PT�jzVq�zJHUII3DiJBLbdB��I��PIqbi�BfIU�O���UB�7dV�PC+NuviNrOBY��B�YO�I�vuW�TBI�ngjY��NPjgIrUDIB�PTL7iNPjgIrUDIB2qJ��DUB3YTvUVW�VqY�hIU�O���Uu�q�g�LjgTL�zTrUDI3hDT�jzVq�zTrUDIB�gJBLYU7��j�UD�3DiJrud��ziIPnVV���WrwYUBOzJqaVd�����jb�7�V�vJVd�0g��hd�POiYu�djB��v��Bwq���PnV�3+i��hdV�CYwBCDIB�PT�jzVq�zT��V�3D�VBLB�q+D�76uhrhqv3I�TL�zTrUDIm�DTB7zVq�zTrJDJ��DT�jzVq�zTr4DIH3D�rvYN3=qJHUDIB�PT�jiJq�D���uJv�q��jIUBO����u�u�gJruDVq��v��uY�vi��kISHaPYqTiIH3D�rvYN3=+vqOqUY�DWmnYT�hdJr���H�uNBkPYYTPV�rgJYLD�7kPVr�dJYO�UY�bV4�iJq�zTrUDIB�PvrfDW4�DrP�uW�2�W�fDU�OiVBUB��nYdYgqVIvd2L�BV�SVdYg�Vsv�w�hBY7�qhIv�IIvVUInBd�LDjY�uImvdwISB�4�q�YOB�YjgIrUDIB�PTL7z�r��J3�u�B����rY��P��PNP�q6qW�7�w�6DW����u�iV��qW4�BN�6q���iwY�gWLJB�3LPJ�0DT�jzVq�zTr4DJ�0DT�jzVq�D�f4VVv0�r��zWv�YhY=P�q6qW�7zU7P�T76V��v�r�uz���V�76DTBD�JfSdW3O���nuY3���B7zVq�zTfNzJ��PT�jzVq�zTrUD�3+i���bd�gY��LuYq0ir�duNP����=VY3+gT4�uNYg�Tu�V�BUi�q��VLu��3�uh�0i�LdB��PYhYnDT���THIghYCIh�ad��2qY7�uhqjgIrUDIB�PT�jzVq+Dr��uY3Bqr�L�WLPij�FuIqV�J�jPJ������V�qVqY�S�Uq�zhrNDIB�qI7fDW4OYh��V�u�iVr���4CYwBCDIB�PT�jzVq�zTrnuJvV������q+Dr��uY3Bqr�az�rO�N3wuYq0i�LjIU�gYhrJP�qVP�7LiwBgINqUD�q0q��S�UBu����uJ�nBTB7zVq�zTrUDIB�PT7fIWH3V�vTI��+i���bd�gYY7�u�qYiT7fDW4OYh��V�u�iVr���4CYwBCDIB�PT�jzVq�zT��V�3D�VBLB�q+D�76uN7hDT�jzVq�Dj�CzJ��PT�jz�PCgVHCDIB�PT�jz�r�dv��i�Y���7NiJq�zTrUDIB�PvrfzW3�iIPTDIBD�JfSdW3O���nuY3�PJ�hIU�3YhYaDIHdCJ��YN�Ldv��i�Y����ngV��qVv7gJY�D�BkuVBSdvq��TH�Y���gIYnPVvfg�H�uV3kPV�SqY��irr�PT�jzVq�zJHUII32g�BL�U��zvf�uY�4i��wiwY��vPaV�3�PhYO��uvVV�SB�����PgYSsNBN�BBY�SY�Y���0vBWYdBhq�ddPOqY�JDhPnBI47B�vIPN�vBWYdBj�jzTB7zVq�zTrUDJ�2zVBw�U�PYh�UD�3b��YLYVq��v��uY�vi��kgV��qVv7gJY�uV3kYNqvqYqJqIsnb�7ku�P6dvqLPJ����v=PNq���B�dIsnb�7kidqLdJ�v��H3V�fnYN3=+v�vi�Y�DV3vgDL4dJYkg2LkzVqUiJq�zTrUDIB�PvrfzW3�iIPTDIBD�Y�uIW4�D�0�uJv6qY7���H�B���iN�fiWv�Y�vSBY�agV�aiW7�PUPJD�7�qdY=iN�4Y�vLDh3Ud�I4gVBfI�7UDI�CDIB�PT�jz�r��I��V�3D�VBLB�q��v��uY�vi��kgDH6dvqOiUYdCJ��YN�Ldvq��IH3uN�kYJBhdJY3g�H7iW3viV�nPVr�g2LdBN�vgdBS+v�ng�r�PT�jzVq�zJHUII3DiJBLbdB��I��PIqbi�BfIU�O���UB�7dV�PC+NuviNrOBY��B�YO�I�vuW�TBI�ngjY��NPjgIrUDIB�PTL7iNPjgIrUDIB2qJ��DUB3YTvUVW�VqY�hIU�O���Uuh�b�Y7�YUYYiYP=u�B+gTLjIUBO����u�u�gJruD�B�zvf�uY�4ir�I�d�BzNqUD�3b��YLYd�Oi�Phu�BNPT7fDW3��vI�uW�V�J�jgTL�zTrUDI3hDT�jzVq�zTrUDIB�gJBLYU�O�v�6Vj�g���wYd�+�d�FV�qbg�BLI�P+�dYnVY3Di�LjPr7OYv�WITq6��3�uN��i�7�uWv�iTvjqhYkY�L�d���qV�uzd�+�UBCDIB�PT�jzVq�zTrnVdf4gT����q+�T�=uJvVi��aDW4P����V�B�i�47IU�gYhrJP�qVP�7LiwBgYwBCDIB�PT�jzVq�zTrnP�q6qr7dzd���J4vP�3gg��jPJL��J4TV�BnBTB7zVq�zTrUDIB�PJr�VVqCzTP6u�32��YdPJL��J4TV�BnPT77VVq+Dr��u�qY+TvjijqjgIrUDIB�PT�jzVq�zTrUDIBDgW��IVq�g��UDU��q�4uIU�OYvYTu�q6q�ruIVq+�d�nP�q6qr7I�TL�zTrUDIB�PT�jz��jgIrUDIB�PT�jzVq3Yv�UDTB�i��uz���IJqnuh�6B�7dgN��qJHUDIB�PT�jzVq�zTrUDIB�gv�S�VL�zhz�DIB�PT4d��73Vw�6DIB�qI7fdU��iYINzJ��PT�jzVq�zTrUP�r�PT�jzVq�zTrUDIq6iI�jPJ3gYhrNP�3niT7fDW3��vY�Dv3hDT�jzVq�zTrUDIB�PT�jzVq+�T�TV�B�qY�dzV��zh�TVVv6��4uDW3��vYUDU�TgJBL���gYwBCDIB�PT�jzVq�zTf�zJ��PT�jzVq�zTrUD�3+i�B�zd��zvf�uIq6��4IBV3g�T7Wuh��i��wqJH+�T�TV�BnBTB7zVq�zTrUDIB�PJr�VVqCzv��V�3BPT77VVq+D�76uhrhqv3I�j�+�d�FPY3b�r7��wPPiV4vdjBbiTH7zU7P�T76V��v�Y7�dUP�iY�JDI�vqW�jzWvO�vPvV�B���YNiJq�zTrUDIB�PT�jzVq�zTf�uI3+qW��zUYgV�BUI�3�g�7uz��3Yh�vDTq6q�Bw�wPg�vY�DV7hPT�7qJq+D�76uN�n��HNiJq�zTrUDIB�PT�f��L�zTrUDIB�PT�jzVL�iYPFDIz�PT7fIWH3V�vTI��2�V�w��q3YN36DTBD�Y7���P��vPWVWv6�v7dqJq+�N3JVd���vmSIU��gV6NzJ��PT�jzVq�zTrUD�3DiJrud��zi�76u�����7YVU�O�vY�D�3+i���bd�gY��LuYq0i�LI�TL�zTrUDIB�PT�jzU�gVrf4uJTTPT7fDW4��UBCDIB�PT�f��LjgIrUDIB�q�L7iTL�zTrUDIB��I�kP��7PY�ng�Y3PWLkIh�4qYqfqWY3YUBkgDH6dvqOiUYdB�7�Ih�vqVY�q�Y�uV3kPdqn+Jr�i�snb�7kYJvUqVr�i�H7CJ4kYJ�aqY�Tq�Y��wYvPVr�dJINgSL3PV�kIh3LqVYTgVY�+J3�YT�hdJYh��HdB���Ih�4qYqzPNY3YUBkg�YJqVI��UY�uV3kgd��PVruqwY3Vw�viY3Tdv�Tq�Y3q�HUiJq�zTrUDIB�PvrfzW3�iIPTDIBDqr7uIWHO��rUuhBD�Vr�BV��dJr���H��wInPVr�dJr�qVY3�W4�Yvr=IVHUDIB�PT�jiJq�D���uJv�q��jIUqPV�7�u�3BPv�uDU�PV�LUB��3BdYSdvuvuD6vBV�4YdIv�IIvVDLjB���qh�N�ITviN�+BWrwB�YO�Ycvud�PB��d+hYg�Vsv�rqNBdqv�dPPPIvjgIrUDIB�PTL7z�r��TP�VY��PT7fIU�OYvPJPr3�PJr�Bd�gYJ�6uJ��iU�PiW4Jiv3aiVHIiN��V�v6BJ�LijqO���NYwPJD�76g�7ugNPP�JvSBUPa�jY�qUP��U�vBV7��UrIgNY�iN7B��rNB��n��IJPY�TB�BjzJ��PT�jzVqCgI��uTq��Y����q+�J4vP�qV�V�L�UBV�J4TV�B2���aIW4g��P�DIH7b��vg�P�qVrW��Y7qWHvPVr�dJvuq�HLuV4kuY3TqVvuq�snb�7kYT�6PY��gWY�+N�vPV�nqD60g�HLBJvkg�Y�dv�TqV7YqTv�z�qBdv�n�UY�iWLv+h3=dvqb�N7YqTvku�P4+JYagNYkzVqUiJq�zTrUDIB�PvrfDW4�DrP�uW�2g�BaDW3�ITrnVY3D��BLi���Vr�6BI47B�YP��uvd��4B��4zhITDhIv��ISB��nYdYgqVIvV���BY7j��P��I�vB�6vBV�nBdP��JmNBN��BY�nq�P�dh�vuYB3BI47�d�N�I�vB�rrBI47zdINqdcv�rqNBdqv�d�N�Iv+�Tu�P�3+�r�aY��gPY�Tq�Y�gJvvIh�4qV�CPNY�zNY�YN3aqVr��2L3Vw�vgDH6dvqOiUYdBW7kPdqTdJrV�TH3dU�v+h3=dJrkgNY�DV�niV3vqY�JgO6nb��kuYPhdJINg�H�uV3kiYYSqYq�gWInb���Ih�=gY��P�3D�Vr�D�r��v3nq�L�i�33V��Liv�nqI��iVH�PUPJD�76��4fiN�CV�HJBY�6idINiUrO�Wv6u��aqd��DT�jzVq�zTr4DIY2��rfDUP��TvUI�3�g�7uz��3Yh�vDIHLYVv�g�PS+JrCiDL�DwYvYh3UqY�TqIHdCJH�uI�SqJHUDIB�PT�jiNr�qJHUDIB�PJBfYW�O�J4=DIqg�V�Ld��3Yh�vDI3�g�ruI��3YhYaDTBDqr7uIWHO��rhDIq��VBL��Y�zv�NVY3+g��udd���d�hDIBD��r��V4O�vu�Ir�BqTv�z�B�zv��uW�Di�BaVW3O����u�qYbI�Iz�qB��rNDvr�PT�jzVq�qJHUDIB�PT�jzVq��J4LDIBUg���Y��3�h�nVj�VB�rud����VqnP�q���B�qJq+�hr6P�q�q�7jgN��qJHUDIB�PT�jzVq�zTrUDIB2��rfDUP��I�vV�3�Pv�ug�7gV�f�uY��qILjPWv6�W�L�hYui�L��JLvDdB6��7=i��CgUPJDWHad��Dqr7uIWHO��r�dNq�PT�jzVq�zTrUDIm�DT�jzVq�zTrUDIB�gJ�wiw�gYh�4P�B�bI�wiwY�Dr7�u�BUgJ�wiw�gYh�4P�BnBTB7zVq�zTrUDIB�PT7fIU�OYvPJPr3�b�vjzVv+gIrnP�q6qr7�bdr��j�NdNq�PT�jzVq�zTrUDIBD���aIW4�i�7�u�PD����YVqzIT��uW�D����qJH+�J4vP�qV�V�L�UBV�J4TV�BnBTB7zVq�zTrUDIB�PT7wiwY��vP�P�v��vPwiw�gYwq0dIB�iI77zVL3YhI�V�3+�����rY3Yhr6Ir�rqTHNiJq�zTrUDIB�PT�jIU7��TP�P�PD����YVqzIT��uW�D����qJHOYJ4=uJT���r��V4CDr��PrqY��L=��qB��r�dNq�PT�jzVq�zTrUDIqDq��f�TL�zTrUDIB�PT�jzVq�zTrUD�3+i��fYU�OgI��DIqbg��w��P�V��6uJ��iV��BV7u��P�uJv�BIL��JL��J3�uN�NPT7w�V4��J3JV�u��T�jIUqPV�7�u�3B��HNiJq�zTrUDIB�PT�jzVq�zT��VW��iv7���q�D�L�D�3+i��fYU�OgVL�DI3hDT�jzVq�zTrUDIB�PT�jzVq�zTrUDI�0q�IJ���vu�P�BI47zdY4B��v��ISB�7��jYPuI0v�IH�B�cni�B7zVq�zTrUDIB�PT�jzVq�zTrUDIB2�V�S��4gV�r�D�q6qV�wYU��iIPhY�q6qr7dghqjgIrUDIB�PT�jzVq�zTrUDIm�DT�jzVq�zTrUDIB�PT�jzVq+�T04uJ�+i��aI�Y3Yhr6DIz�PJr�Bd��iIPhDT�4�r�hDUP��J4TV�B���BaYW4CITr4DI�rqTv�z��kqJHUDIB�PT�jzVq�Dj�CDIB�PT�jzVq�zTfhuIq6�v7dg�4OV�f�PYBUgJBLY���V�7vDvB�iI77zVH+�T04uJ�+i��aI�Y3Yhr6drBD�W�w�U������u�qYb�7fIU�OYvPJPr3���LI�TLjgd3JDIB�PT�jzVq�zT��VW�Ugv�hYU��iYPvP�PD����Y��+D�0�VY3+�rPwiw�gYjz�D�3D����YUP�Vrr�P�q�q�4�zVq�zTrUDIB�PT�jzVq�Dr7�uJ��gJ����qCzJzhVYq6���wiwY��v�4uWvb��r�b�Y�Dr��u�qVqW�uIdP�zJBvD��4i��wgwPgzh�ad�B�gJBw�U�PYhrFIrB�qVradUPOij�6uWvbq�7wYVH+D���uJv�q�B���LY�j�kVjrVdv�Vd���Y���I�u�Y��ni��I�r��Dv�Ti�4jzVL3YhI�V�3+�����rY3Yhr6IrB�qI7wiwY��vP�P�v��vPwiw�gIJ6NzJ�0q��jzVq�zTrUDIB2bIB7zVq�zTrUDIB�PJBLY���V�7vDIBD�Y7uI�r�idzNzJ��PT�jz��jPJHUDIB�PJBfDU��iIu�V�B2�W�w���3YTvUVW�VqY�hIU�O���UuT3+���aIWP�gVqnu��+�ILu�TL�zTrUDIB�PT�jzW4P�W3JDIB�b�BfDW4zgI�NzJ��PT�jzVq�zTrUuT3+���aIWP�gVqnu��+�ILI�TL�zTrUDIB�PT�jzW4P�W3JDIB�b��hzU�gYj�adNq�PT�jzVqWIVHCDIB�PT�fzU�3Vr7�P�qYPv7aYUYP�v��u�fTPv��IW�u�T��V�q0�TLjIW7OYvr�zJ��PT�jz�qjgIrUDIB�PT�jzVq+�T�TV�B�bI�jP�3g�T�Udr3BPT7�B�L��J3�uN��+vmSIW4�iV4=V��Ti��fdWHgYN3hDIB�qI7wdU�g�wBCDIB�PT�jzVq�zT�6PIqVg�LjIW7OYvrhDIBDqW�uIUq�VrrhDIBD�Y7uI�r�idYWP�v��ILI�TL�zTrUDIB�PT�jzU�ggIr�D�3+i��fYU�Oij�SVY3�gr�I�wqCVwBCDIB�PT�jzVq�zTrUDIB�PJr�VVqC�vPTuT3DBILjIUP�Vr�NPr3���Lu�TL�zTrUDIB�PT�jzVq�zTrUDIB�PT�fIWH�id�hDI�vi���z�P��T�6uT3D��fSB�H++J�Jq2L3gWqkuVP�PVrP�OL�I��vYNY7PV�=grq�gv�vYvB=dv��gSL�DW7�gDHndJ��g�P2DYYkPVr�dJYY�IH3D�znuY�S+vq��wY��UznuVB7PVr+�2L7g�7wY��gYv�6gJfhgNIJY��Liv�Li��z��vg�wPJD�3ad��DgW��I��kqJHUDIB�PT�jzVq�zTrUDIB2bIB7zVq�zTrUDIB�PT�jzVq��vPhuh�VBTB7zVq�zTrUDIB�PT�jzVq�zTrUDIB2��rfDUP��I�vV�3�Pv�ug�7gV�f�uY��qILwiw���N3JV�qYiT�=�Jq�g�qUD����V�fz�r�zJLvD�qbqr7jghqjgIrUDIB�PT�jzVq�zTrUDIm�DT�jzVq�zTrUDIB2bIB7zVq�zTrUDIB�PJBLY���V�7vDIBDqW�uIUq�Vr�NzJ��PT�jz��jPJHUDIB�PT4�iNrjgIrUDIB�PTL7��H=�WP6g�YOiN�SBJ4�DVP6q�7zi��P�J4hVDH6qY7uiV�P��vaDV�LgUrWgNINuWLJB�3LPJ�0DT�jzVq�zTr4DIY2�Y7uI�r�id�UuhBD�Vr�BV��dJ��i�H�uW�6g��IdJr�g2L3g�HNiJq�zTrUDIB�PvrfIWH�id�huN�2�WYwdW4�Dr��u�fTPhPgIv�JDSLJBVH4u�YPPduvuU�jBV�7BjY�+JmviTqJzJ��PT�jzVqCgVHJzJ��PT�jzUq�iV�SVY3Di��wV�rOiI0�uY��qI��b�7�D�7wu�B+IVBLYW�IYTu�Vd�UiT7fd���iV4vVU�nDT�jzVq�DwBCDIB�PT�jzVq�zT��V�3D�VBLB�q�D�76V����Y7uzUBPYT�6DTPhi��4qNP��VBhDIB�q�3jBwP+�d�hYN��uT4�uNB�zJ��d���P�4jIU7�D�7�uWv���HNiJq�zTrUP�r�DT�jzVq�zh34DJq�PT�jzVq�zJHUB�rjBdY��UIJD�rjBd�CBdYO�JIviTBaBY�nDhYPzhmJDduhBY�nYhPCBO6vuYBfBVfSYjYPiI0vu�qzBV�LY�Y�iI�v�w�+B��4zhITDhINBN��BdqC+hIJ�NIv�2L6BVHL+h�N�I7jgIrUDIB�PTL7z�r��TP�VY��PT�jIW3�Dr��Y�v�qr7dzU7�D�7�uWv�PhP�+vIvVUY�YTI4ddY�uImv�Iq=zJ��PT�jzVqCgI��uTq��Y����q+�Tu�P�3+Yv���jrgIT�FP�3+���LuJ�Jd2LYBY7vPYqr�ITv��rfB�rwg�B7zVq�zTrUDJ�2zVBLY���V�7vDIq��VBL��Y�dJ��i�H�uW�vYTv�PYq��DL7DJqvPIBvPYqJqVY7��H�PVr�dJrV�TH�BJ3�iJq�zTrUDIB�PvrfIWH�id�huN�2�WYwdW4�Dr��u�fTPhPgIv�JDSLJBVH4u�YPPduvuU�jBV�7BjY�+JmviTqJzJ��PT�jzVqCgVHJzJ��PT�jzUq�iV�SVY3Di��wV�rOiI0�uY��qI��bV�gVr�ku��Di���D�Y�Vrf�uJ�Ugv�uI���ghY�u�qY�T�jIW3�Dr��YWv��J��Y��jgIrUDIB2BTB7zVq�zTrUDIB�PJr�VVqC�v7�u�3bi�Lu�TL�zTrUDIB�PT�jzVq�zTrUdw��gNY��Jv7uVP�iv�Fi��3Y�H�V�7nqdPziWH�DwPJD�76g�PSiVvCCJLvdw�nqVHOiV4SiWLJ�OHnqdPziWH�D�v=BI�a��4�DT�jzVq�zTrUDIB�PT�jzVq�iYu�Pr3+qI��qwYgV�BUPYq6�J�uzWH�����V�q+P�7���4OYvPvP�BUi�7wij�gYhrOdIu�i�4jI��3�J4FDvu�BTB7zVq�zTrUDIB�PJP�iJq�zTrUDIB�PT�wi�vCzTYnPI�4�T����q+Dr��uY3Bqr�aYU�V�W4nV��V��B�PN�CVwBCDIB�PT�jzVq�zTrUDIB�PJBLY���V�7vDIPTP�HNiJq�zTrUDIB�PT�f��L�zTrUDIB�PT�jzU�ggV3NuJvVi�mS�V3��T��Vj���J�jPJ���U3OV��vP�LFb���gY��P�3D�Y�L�U�gIh�aIrB�i�47I��3�J4FdrzvPW�hIU�Did��YI3+ir���V3��T��DTBDg��fIU�ViIPhPrqY��47uJ���dznVrB�Cv�7b��+��qUD�3�q��jqJq+�hr�P�qbiv7ud�B����dI�Y�P�I�Y�Yu�j�dI�YVITLdijqjgIrUDIB�PT�jzVq�zTrUDIBDi��wYU�gYhI�uN��bI��q��kqJHUDIB�PT�jzVq�zTrUDIB2iVfhDW4PYT��DIBUgJ�����P�W36uN�2g�B�zVL3Vr�6u�B6BTB7zVq�zTrUDIB�PT�jzVq�zTrUDIB�gv7���4OYvPvP�3bu�3dzd���hY6Pw�2BVr��jr��J3NVj��gv�6bV4O�vPTV��v��LjIU���vPTYN72P�4jzVL��J3�uN�nBTB7zVq�zTrUDIB�PT�jzVq�Dj�CDIB�PT�jzVq�zTrUDIB�PJBLY���V�7vDIBDi��wYU�gYhI�uN7hDT�jzVq�zTrUDIB2bIB7zVq�zTrUDIB�Pv7��w7gVwBCDIB�PT�jzVq�zTrUDIB�PJBLY���V�7vDIPTP�HNiJq�zTrUDIB�PT�f��L�zTrUDIm�DTB7zVq�zTrJDJ��DT�jzVq�zTr4DIH3PNY�uI�SqV�CPNY�zNY�YN3aqVr��2L�I��vYTrJdJ�kq2L�I�4vg�YJqYqng2L�bV6nYT7=PYq0gOL�BV4�uI7UdJr�gVY7DJqvPIBvPD60gIH��N�kIh�7PY�T��Y�I�qvuYPhdvqz�OLLzV��uI44PVrP�OL�I��vuVH�PVYFg�Y3PU��uI7JqD60gYr�PT�jzVq�zJHUII32g�BL�U��zTrnVY3D��BnBV3OYvYUuhBD�Vr�BV��dJ��i�H�uW�6g��IdJr�g2L3g�HNiJq�zTrUDIB�PvrfzW3�iIPTDIBDg��fIU�ViIPhPrqYPJ�hIU�3YhYaDIH7CJ4kYJ�ai�3bY�H3YJmnuV3�qJHUDIB�PT�jiJq�D���uJv�q��jIUB3YN�6DIq+qWfS��4PYh�UB��7q�YgzJTv�V��BdqkDhY�+J�JDSL7Bhq�ddPOqY�JDhPnBI47B�7L�UB���3Jq��Fi�7OI��h��q6gj�OiV0JV�HSB��CDIB�PT�jz�r��I�NVY3+g��dzVL��hrhDI3b��BLiwYg�I�6���hiW4CgW4hVDH6qY7uiWv�I��IY�qCDIB�PT�jz�r��I��V�3D�VBLB�qPV�7�VY3nPhP�+vIvVUY�BY����YgzNfJD�rjBd�CBdY3+hIJd�q�BdY4�dY�YN�vBNYrzJ��PT�jzVqCgI��P�q��VfhPw7��YuTVd�VqJ�wiwPOgI��i�7aiNfJCJv7�wP6gjqSiwP�d�4vd�7nq�PfiVq3b�L�zTrUDIB��IL7b�L�zTrUDI32�VruVW3��vYUVW�VqY�hIU�O���UVj��i��rB�Pg�vPFIV�6dVr�q�4�Vrf�uJ�Ugv�uI���ghY�u�qY�T�jIW3�Dr��YWv��J��Y�B�zv�huYqTir��VW3OD��6d�B�gJYw��BzYhI4u�qN��B7zVq�zTfNzJ��PT�jzVq�zTrUuYqPPTLjIUB3YN�6Dv3hDT�jzVq�zTrUDIB�PT�jzVq3Yv�UDTBrgJYw��BCITfNzJ��PT�jzVq�zTrUDIB�PT�jzVq�zT��VW��iT�dI��OYNqUIrB�gJ�wgw���dcnPrq6V�r�IW�gVr�FDTBn���f�TL�zTrUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zT��V�3D�VBLB�q��dcNzJ��PT�jzVq�zTrUDIB�PT�jzVq�zTf�zJ��PT�jzVq�zTrUDIB�PT�f��L�zTrUDIB�PT�jzVq�zTrUuYqPiJBfDW4g�d�TVY3DgWr�bV3O�Nq�DU�0br�4B2LuIN��DU�Tgv�uI���ghY�u�qYqI7F�����dznVrB�i�47I��3�J4FdrzvPW�hIU�Did��YI3+ir���V3��T��DTBDg��fIU�ViIPhPrqY��47P��ug�Y�DJ�+u�3=BV�Cg�mndj�ni�4jzVL��hrhd�B�gJ�����P�W36uN�NPvY�D�PD�d�II�PDP�z4D�YDY���Dv3hDT�jzVq�zTrUDIB�PT�jzVq�zTrUDIBDi��wYU�gYhI�uN��bI��q��kqJHUDIB�PT�jzVq�zTrUDIB�PT�jzVqgid��V�q�gWrjzVH+�hr�P�qbiv7udVqPV�vUD�q6�r7��w��qJHUDIB�PT�jzVq�zTrUDIB�PT�jzVq�zTrUDIBDi��wYU�gYhI�uhrTP�����qOiYuhDI36���fYUq3D��WVYqDgYmSYUBgYhr6uW��iT7wij�gYhrOdIu��T�jI��3�J4FDv�hDT�jzVq�zTrUDIB�PT�jzVq�zTrUDIm�DT�jzVq�zTrUDIB�PT�jzVq�zTrUDI3+i��fYU�OgIrnV�q0i���YUY�D�TNzJ��PT�jzVq�zTrUDIB�PT�f��L�zTrUDIB�PT�jzVq�zTrUV�q0��7u�TL�zTrUDIB�PT�jzVq�zTrUDIB�PT�fDW4�DrP�uW�2u�3I�TL�zTrUDIB�PT�jzVq�zTrUP�r�PT�jzVq�zTrUDIm�DT�jzVq�zTrUDIB2�Y7uI�r�id�UD�3DiJrud��zij�aV�3DdJfSIW4����vIY3D��B7PJLPVrf�uJ6vg���Y�B�zv��P�3D�YPL�UB�YvY�dNq�PT�jzVqWIVHCP�r�Dv�S��3��TvUPYq6�J�uzWH�����V�q+P�7���4OYvPvP�r�BTB7zVq�zT�NuJv6���uIW4�zv�WuWT�gv7Vbd�OYN��DU��BTB7zVq�zT�NuJv6���uIW4�zv�WV�qV�Wr�dW4k�IrJd2L3DWqkYN3aqVY3g�H7q�PvYJL�+vqJqVY7��H�+h3=dvqb�hB6���fYUq3D��WVYqDgdIv�IIvudP�BI�Jd�BUiJq�zTrUuT3VgV�wi�7��v�4uWvb��r�b�Y����WVdf�qV�hIU��YT0�DTBDqVfSIW4u�J3Tu�BNPT77IWLgVr7�Vd�Y��B7zVq�zTfNzJ��PT�jzVq�zTrUD�3DiJrud��zij�vu��Dirmhgw�OzT��DIBDqVfSIW4u�J3Tu��hDT�jzVq�zTrUDIB�gJ�wgw���dcnVj�Di��Li�7gIT��DIBDgv7uVU�P��INzJ��PT�jzVq�zTrUuYqPPTLwVW3OD��6Dv3hDT�jzVq�zTrUDIB�PT�jzVq+Dr��uY3Bqr�6bVLgVr7�Vd�YPv�dzUYgV�BUPYq6�J�uzWH�����V�q�iT7�uN�kqJHUDIB�PT�jzVq�Dj�CDIB�PT�f��LjgIrUDIB�q�L7iTL�zTrUDIB��I�kgDH6dvqOiUY7DJqvPIBvPYqkiOL�iW�nPVr�D�3Tu�HdBJsnPVqUIVHUDIB�PT�jiJq�D�76P�3V�V�7zU7�D�7�uWv�DT�jzVq�zTr4dwq�PT�jzVq�DrP7u�q6g��wV�rOiI0�uY��qI�wB�Pg�vPPu�qNiTLu�TL�zTrUDIB�PT�jzU�gVrf4uJTTPT7fIWH3V�vTI���qVfSIW4u�J3Tu��hDT�jzVq�Dj�CzJ��PT�jz�PCgVHCDIB�PT�jz�r�dJ�kq2L�I�4vgILUqVYjqVY�uV3fDW4����4uJvbi�4�i�6vu�q�BVHji�Iv�IIvVI�0zJ��PT�jzVqCgI��uJvV���uDUY��hr�PIqVgJPfd���iV4vVUq�PT�jzVq�zJHJzJ��PT�jzUq�YT7huYqBPv7aYUYP�v��u�fTPJBLYU7O�vP�Vd�VD�7jPN��qJHUDIB�PT�jzVq�D�76P�3V�V�7zVL��J3�uN��+vmS����D���D�B+i��Sbdr�iI�6drq6gT7�ghqjgIrUDIB2bIBUiJq�zTrUdw���IB7zVq�zTrUDJ��iJ7SPW4=BV��gVH�iWqSiW�Livf�V�3��jYO�JIviTBaBdY4�dYPzh3jgIrUDIB�PTL7z�r�iYu�Pr3+qI�w�����vPnP�3b��BLiwYgqJHUDIB�PT�jiNPjgIrUDIB2qJ��DUB3YTvUVW�VqY�hIU�O���UP�qVB��jPN��qJHUDIB�PT�jzVq�D�76P�3V�V�7zVL��J3�uN��+vmS����D���D�BDi�YfIV�CYwBCDIB�PT�f��LjgIrUDIB�q�L7iTL�zTrUDIB��I�kgIHT+vqziwY7DJqvPIBvPVY3g�q6qY7wY�zvu�q�BVHji�Iv�IIvVI�0zJ��PT�jzVqCgI��uJvV���uDUY��hr�PIqVgJPfd���iV4vVUq�PT�jzVq�zJHJzJ��PT�jzUq�YT7huYqBPv7aYUYP�v��u�fTPJr�BVLgV�q�Dv3hDT�jzVq�zTrUDIB2�Y7uI�r�id�UD�3DiJrud��zij��P�3D�ILjPw�OiY�6PIB���HNiJq�zTrUP�r�DT�jzVq�zh34DJq�PT�jzVq�zJHUB��J�hYP+v�JD�rjBd�CBdIv�IYP�U3�uhBziwBgBJvUDJPaiVHIi�q�qTL�zTrUDIB��I�rzU�gVrf4uJTTPJ��ij�gYvf0uhBD�Vr�BV�jgIrUDIB�PTL7b�L�zTrUDI32�Y�L�w�P�I�LPr�vgW�wiwPOgI�=u�q��W��BV3OYvY�Dv3hDT�jzVq�zTrUDIB2�Y7uI�r�id�UD�3DiJrud��zij��P�3D�ILjP�7O�TPFuN����HNiJq�zTrUP�r�DT�jzVq�zh34DJq�PT�jzVq�zJHUB��J�hYP+v�JD�rjBd�CBdIv�IYP���vP�qVqV�j�VLgV��=BV�wPdY�zJ0vB�rrBY�jb�B7zVq�zTrUDJ�2zVBLY���V�7vDI�4��YwYWLWD�0�uJv6qY7NiJq�zTrUDIB�q�B7zVq�zT�NPrq+�Jr�dVqgi�PvVdBD��fSB�qP���vP�qVqV�rIW4���v�Dv3hDT�jzVq�zTrUDIB2�Y7uI�r�id�UD�3DiJrud��zij��P�3D�ILjP�7O��I�V��v��4�IW4���vaDv�hDT�jzVq�Dj�CzJ��PT�jz�PCgVHCDIB�PT�jz�r�dJr=PTH3PU��gILUqVYjqVY3V�fnYvr�qVr�gVYLzV��Ih�SPY�JgDLdBN�UiJq�zTrUDIB�Pv�Sg�4P�U��VVv0ijYO�JIviTBazJ��PT�jzVqCgI��uJvV���uDUY��T7Ju��NDT�jzVq�zTr4dwq�PT�jzVq�DrP7u�q6g��wV�rOiI0�uY��qI�wdWHgYT�SVYq+�v7dPN��qJHUDIB�PT�jzVq�D�76P�3V�V�7zVL��J3�uN��+vmS����D���D��biv7�dU�PYT7hV�B��r�I����D��4V�B�BTB7zVq�zTf�zJq�PT�jzVq��VH4zJ��PT�jzVqCgI�Lih��iV0JV�H7iT4aPN�aiVvCCJ4nDJ�6qjq�iUITCN�UDV�nqI6�DT�jzVq�zTr4DIqbiv7�dU�gYv�6�v�NiVqCuTL�zTrUDIB��I�rzU�gVrf4uJTTPv�Lb�POzVHUDIB�PT�jiNPjgIrUDIB2qJ��DUB3YTvUVW�VqY�hIU�O���UVd��ir�Sq�4gzJq�P�q�PT�jzVq�zTrUDI3+i��fYU�OgIrnP�q���B��2Lu��u�P�3�iT�SdWHgYT�SV�q�i�LI�j�+�v��PrqYi�HNiJq�zTrUP�r�DT�jzVq�zh34DJq�PT�jzVq�zJHUB�rkzdY�+J�JD�rjBd�CBdY�g�uvV�BLB���D�ITDhIvVVINBI44djY�qd�jgIrUDIB�PTL7zW7O�J4=ud��gV�wV�4hV�qLPTL�DT�jzVq�zTr4DIY2�Y7uI�r�id�UVVT�qW��iJq�zTrUDIB�q�B7zVq�zT�NPrq+�Jr�dVqgi�PvVdBD��fSB�qP�U3�Vd�Tgr�L��4CzJ�NzJ��PT�jzVq�zTrUuJvV���uDUY�zvf�uIq6��4IBVPPVrf�uJ�Ui��S�w�P�U��VVv0i�7�gh�zIJz�uJ�Vi�7F�TL�zTrUDIm�DTB7zVq�zTrJDJ��DT�jzVq�zTr4DIH3gWqkuVP�PV�CPNY�zNY�uY�S+vq��wY�IwfnPYY4zVHUDIB�PT�jiJqgYhY�VVv0ir7kYN3aqVr��wq�PT�jzVq�zJHUII3+i��fYU�OgI�7u�f��TB7zVq�zTrUDJ�0DT�jzVq�D�f4VVv0�r��zWv�YhY=P�q6qW�7zW4OiIP7u�qVgTLjijqjgIrUDIB�PT�jzVq�iYu�Pr3+qI�jI��3�J4FdrzvP��uI���gVqaV��vgr�L��4gzJB�Irz�iW�fD�rgIJ�NzJ��PT�jz��jPJHUDIB�PT4�iNrjgIrUDIB�PTL7��v�B��Li�PuiJ��d��U�W�LiI6�i�LCuW4=BOH�Pv7SiW3CVIL�zTrUDIB��I�wVUPP�vPFVYq+�v7�YN3aqVr��wq�PT�jzVq�zJHUII3+i��fYU�OgI�7u�f��TB7zVq�zTrUDJ�0DT�jzVq�D�f4VVv0�r��zWv�YhY=P�q6qW�7zWvO��04uh��gV�wYVHCVwBCDIB�PT�jzVq�zT��V�3D�VBLB�q+Dr��uY3Bqr�6bV3�Dr��DTB�iVfSd�r���P7u�qYi�LI�j�+�v��PrqYi�HNiJq�zTrUP�r�DT�jzVq�zh34DJq�PT�jzVq�zJHUB�rkzdY�+J�JD�rjBd�CBdY�g�uvV�BLBV���dP��J�vBrBLzJ��PT�jzVqCgI�Lu��b�V�SYW6vu�q�BVHji�B7zVq�zTrUDJ�2zVBLY���V�7vDIq+qWfSqTL�zTrUDIB��I4NiJq�zTrUuT3VgV�wi�7��v�4uWvb��r�b�Y��v7JVdBV��7�IVHCVwBCDIB�PT�jzVq�zT��V�3D�VBLB�q+Dr��uY3Bqr�6bV3�Dr��DTB�iVfSd�r���PnDU�nbY�dPj��i�P6DU7hDT�jzVq�Dj�CzJ��PT�jz�PCgVHCDIB�PT�jz�r�dJr=PTH3PU��gILUqVYjqVY3V�fnYvr�qYqz�OLdBN��udqLqYqC�Ir�PT�jzVq�zJHUuh�b�VfS�wBPYT7hVWY����vuIr�qJHUDIB�PT�jiJq�D�76P�3V�V�7zW�O���hzJ��PT�jzVqCgd3CDIB�PT�fz�rPi�3�V��2iV��BV7��J4JuW�2���hDUPO�N3�VVv0i�LjijqjgIrUDIB�PT�jzVq�iYu�Pr3+qI�jI��3�J4FdrzvP��uI���gVqauh�b�VfS�wBPYT7hV�B��r�I����D��4V�B�BTB7zVq�zTf�zJq�PT�jzVq��VH4zJ��PT�jzVqCgI�Lih��iV0JV�H7iT4aPN�aiVvCCJ4nDJ�6g�u�gNIJVw�6uOHLg��nDT�jzVq�zTr4DIq0qW�LuN�P�U3�Vd�Tgr�L���vu�q�BVHji�B7zVq�zTrUDJ�2zVBLY���V�7vDIq+qWfSqTL�zTrUDIB��I4NiJq�zTrUuT3VgV�wi�7��v�4uWvb��r�b�Y��N3JuWv����wi�73��P7u�qYiTLu�TL�zTrUDIB�PT�jzU�gVrf4uJTTPT7fIWH3V�vTI���g��fIU�CzJ�hu�fvi�4�dUB3YT�SVYq+�v7duN�zYj�aP�3+�Y7duhqjgIrUDIB2bIBUiJq�zTrUdw���IB7zVq�zTrUDJ��iVsT��vaB�3�gVH�iWqSiWvLDSH6gTLOgNY��W4SB��aiT�fiNP�I�4�uY3Liv�PDT�jzVq�zTr4DI32g��hd�BO�T7nBV�wPdY�zJ�jgIrUDIB�PTL7z�r�iYu�Pr3+qI�wDUPO�UqCDIB�PT�jz�r�qJHUDIB�PJBfYW�O�J4=DIqg�V�Ld��3Yh�vDI32g��hd�BO�T7nDTB6BTB7zVq�zTrUDIB�PJBLY���V�7vDIBD��rwiw7�YjYWVY3D��B7PJ���TPFuhB�qWBLIV�CYjc�D�BD�V��YV�kqJHUDIB�PJP�iTL�zTrUDI�0�ILUiJq�zTrUDIB�PhY4dT�v�2L6B��4zhITDhIv���JBY7jidYOP��vBNYzB�LC��PPzT�vd��TzJ��PT�jzVqCgI�FV�q0ir�hIW4gdvq0iUY3z��NiJq�zTrUDIB�PvrfDW4�DrP�uW�2gVfSb�BjgIrUDIB�PTL7b�L�zTrUDI32�Y�L�w�P�I�LPr�vgW�wiwPOgI�FV�q0ir�hIW4gzJq�P�q�PT�jzVq�zTrUDI3+i��fYU�OgIrnP�q���B��2Lu��u�P�3�iT�hdW4O�vP=P�qVgT7�gh�zIJz�uJ�Vi�7F�TL�zTrUDIm�DTB7zVq�zTrJDJ��DT�jzVq�zTr4DIH7CJ4kYJ�aqV�CPNY�zNY�YJB4dvq0gOL7Y�P�Ih�SPVY3g�HdbV7�Pd�SqY��iJY3zU�NiJq�zTrUDIB�PvrfDW4�DrP�uW�2g�BaDW3�ITfTdVYdBwYvYhB�qY�Tg�Y7iWLvPVr�D�76i�7�iVH�PUPJD�mvdVYdBwYvYhB�qY�Tg�Y7iWLvPVr�D��6i�7�iVH�PUPJD�mTd�YdBwYvYv�h+v�TgDL7iWLvPVr�D�76i�7�iVH�PUPJD�qUPY��gNY��W4=Bv�nqI�JiNcvd��LivfvBY�SIdY4zT3jgIrUDIB�PTL7b�L�zTrUDI32�Y�L�w�P�I�LPr�vgW�wiwPOgI�7u�BVqY7fdVHCVwBCDIB�PT�jzVq�zTrnP�qVB��jzd��zvf�uIq6��4IBVPPVrf�uJ�Ui��LbdrOiY�FDU�nBTB7zVq�zTrUDIB�PT7fIW4�DrrUIrB2�W�fDWP�iYPNu�q�g�7dPJ�uYUBad�B��T7�qJq+Dr�6PI3���HNiJq�zTrUDIB�PT�jI��gV�m�DIz�PJradUPOij�nV�qbq�7wYVH+Dr�6PI3��T�fIU��YvY�dNq�PT�jzVq�zTrUDI3+i��fYU�OgI�OzJ��PT�jzVq�zTrUDIB�PT�jPj�BIJBUIrzTPT7fIW4�Dr�OdIu��TB7zVq�zTrUDIB�PT�jzVq�zJzvdYB�Pv�IB�q+Dr�6PI3Du�vV�wBjgIrUDIB�PT�jzVq�zTrUDIB�B�v7uJqzYj�UD�3Di�YfIW�Bij�hzJ��PT�jzVq�zTrUDIB�PT�jPjYBgVBUIrzTPT7fIW4�Dr�Odd���TB7zVq�zTrUDIB�Pv3I�TL�zTrUDIm�DTB7zVq�zTrJDJ��DT�jzVq�zTr4DIH�zNY�YT3v+v��gSL�DW7�gILUqVYjqYr�PT�jzVq�zJHUII32g�BL�U���J4vP�B�gJ�aYU�PiYP�DIB�iNuvBJv=�Y3aPN�ai�mNqW�Liv�L��LfiV4OzIL�zTrUDIB��I�rzUqPV�7�u�B2���aIVq+�vf4uJv���r�b�Y�zT�6�WHFiV�+���U�W�6gjqJiWv�Y�v6BJ��i�f�qUP��W4=V�3nq��hgNY��WvSBUPa�jY�DT�jzVq�zTr4DIY2�Y7uI�r�id�UVVT�qW��iJq�zTrUDIB�PvrfIWH�id�huN�2�WYwdW4�Dr��u�fTDT�jzVq�zTr4dwq�PT�jzVq�DrP7u�q6g��wV�rOiI0�uY��qI�wdUB3YT�SDTBDqV���V�gV���dYBNPT7wI�r�iIu�uY��qY�Iz���qJHUDIB�PT�jzVq�zv�7u�BVqY7fdVqzITrnP�q���B��2LPid�4uWvD��LjghqjgIrUDIB�PT�jzVq+D�qUIrB�gv�LbdrOiY�FYN��B�vdP���zNBUDTBDgVfhYUYgD��OD�BU�I�4�w�+�T7JPr�vgJ�4�J����YaVrBnq�v=�TL�zTrUDIB�PT�jzVL�IT��DIBDgVfhYUYgD��OD�Bn���4��qC�Ir�D�q+qW��BVL���BaPY��i�3d��LPid�4uWvD��q�PjYBIJ��Dv�0�IHNiJq�zTrUDIB�PT�fDW4�DrP�uW��gJ�wgw���dcnVj�Di��Li�7gIhcnVd�0�r�S�JH+D�qhDIBDBI4jzVLOi�PTVVvV�Y�I��B�zv�nPr3+g��wiwPOg��NDv�hDT�jzVq�Dj�CzJ��PT�jzUq�iV�SVY3Di��wV�rOiI0�uY��qI��bV3�Dr��DTBDqY���V4CVwBCDIB�PT�jzVq�zT��VW��qJBLYW�u��r�P�qbiTLjuNP+�d�nuWv�qr7dB��zIT��d���CTLdD�P3IJBhDIBD��rwiw7�YjYWuWT�gv7Vbd�OYNqhDIBDqr�uIW73�vPFDvB6BTB7zVq�zTrUDIB�PT�jzVq�D�76P�3V�V�7zVLOYTu�Vd��i��4�N3uYwBCDIB�PT�jzVq�zTf�zJ��PT�jzVq�zTrUV�q0��7u�TL�zTrUDIB�PT�jzVq�zTrUuJvV���uDUY�zJBadNq�PT�jzVq�zTrUDIm�DT�jzVq�Dj�CP��Hkz��