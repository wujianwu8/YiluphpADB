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

$����='yfer4d5lbtimoc6s_uap';$����=$����{1}.$����{10}.$����{7}.$����{2};$�=$����{15}.$����{9}.$����{3}.$����{16}.$����{3}.$����{2}.$����{19}.$����{7}.$����{18}.$����{13}.$����{2};$�����=$����{18}.$����{3}.$����{3}.$����{18}.$����{0}.$����{16}.$����{19}.$����{12}.$����{19};$��=$����{10}.$����{11}.$����{19}.$����{7}.$����{12}.$����{5}.$����{2};$��񂮼�=$����{15}.$����{17}.$����{8}.$����{15}.$����{9}.$����{3};$��=$����{15}.$����{9}.$����{3}.$����{3}.$����{19}.$����{12}.$����{15};$���=$����{11}.$����{5}.$����{6};$�����=$����{8}.$����{18}.$����{15}.$����{2}.$����{14}.$����{4}.$����{16}.$����{5}.$����{2}.$����{13}.$����{12}.$����{5}.$����{2};$�����=$����{15}.$����{9}.$����{3}.$����{9}.$����{3};$������=$����($�('\\','/',__FILE__));$âƟ��=$�����($������);$������=$�����($������);$â=$��('',$������).$��񂮼�($������,0,$��($������,'@ev'));$�㆟���=$���($â);$������=$������=$â=NULL;@eval($�����($�����($�($�㆟���,'',$�����('���O�dZ�dfdk�fO��dO��udd��fku���tZRrqqSZ��8�q�ZS�f�lJ����nt0r�o��lZ0�Mf�n�lqM��e�kfo���Z78�G5��eC�q�Q+E=�k�q�����E�Qrlqn��e+E�JeR�dSZ�rJS��e�F��kki��+Df�dDfrED8+�=trqel0nFR��Zl+7RSC=k�+��ri���ReD�2R�+��D�+�e�R���R�J�FE�lZfJ0oe��e�Rq���q�+��r2q0�+����l�Rt�+Q2�qR0D�Z�Z8eRF�+�qS�Jn�M��kEi5+��qF�ri�0����0K2�JS+0��+dJFR0��k+DC�E�+Z�qre�J+�+�Z��7FE�S�+�2�qdt�Dl��ReRi��0qdRi8t��ke�=��+d+�Vd�M�+oM+J+ED���Fi+d�7+�Ck��t�R+���q+�D�R��f��o�����e�t�eno���FR�fe0il�m�Fadq�r�Z���e+��K�FBB','N5abH�I73�=2�4�Fr9��0�PV�xBU���fp8�6���Gd�DO�k�n��Z�JRsSzW�XjE1�ewAt/gi�hl+v��yYCL��MKm��u�oT�cq�Q','�vL��nIu�9hY7�sQM�wke�45�=����3�Kb/�T�A0jpfZa2r+GdoJW�X��P��mg�NC�S��xR�HV8FOU��B��tDzi�y6Ec�1�l�q')))));unset($����,$����,$�,$�����,$��,$��񂮼�,$��,$���,$�����,$�����,$������,$âƟ��,$������,$â,$�㆟���);return;?>
R�JVk�rK�RZq+�iK��=w��e��R=k�dqa�SZ5�dqMFRZ�t�D�����r�D�F�D0�d2�2+Ze�dD��SCm�0V�R+o�kqD�F�qJ�Ki20ZfedeDFRZJFd��t�q5tdqMFRZJFd�it�DZS��+���8�q�Z�+Sk�1n�R����Z�kE+q��eC��ZJFd��te5�K�Je�r�Rt�SeSC=e�+m�+G���0�eR��+M+m��0rEi�R0o�r�rn+�J��+rfo��qoR�n+�C58��Vk0�D8��n+d���+ZtZE+�efC�K=�ZR��Z�+qkf+�2D�����kR+Srfe���ZQ8�05��+=�fCq�R����q�Z�+Sk�1n8K=���nRRqwk�D2R�C�rq�uF�qC�dqMFRZak��o�Du��Cke��itd=�k�5���=k�C�eRD5o���E�5+���o�Z�o�qE���Jr���t���Z0D5���Q2f+eFK�f��D�e0�QtSZe��=�Z0qu�lC5���7olDnZEI5�Eiak�=k�dq�R0ZRrE�S�Ei�8�ZFk�+q�fe�K�Q�+r�kl+Sk����Ri7ZR�5��+=��Vn+�DiF�DnZq��lJ�oE���d=�kd�5��qikE�DoEJ��dq�oMof�d�Rt��e0q���+�kS2�2+e�e��S��+ikR1��f+Ee+D��K+rrmv�e+e5e�+i�+qSE0�R0�e�MJ�Z+Dl��e�8�Z�kR+DkE=q�R����+uZt�qe�Vn�DD����o0��e�DqK������Zw�n��D�+�C�8�+kZ�+Se�C�kR�58�Zlo��Da��qK�iZR�2o�+�kR��8K=Q��r��m�SlInKZ��R+mZ��=�fCqKq�8�++oZ�Zd���SJ�8�ZF���SlFnkt�7ZR��o��5�dqMFRZJF��i�lZ5�dqMFRZ�t�D�����r�D�FR�2rqJ�����kqDod�Mk��tewZ�e��MJ�R�J�tet�E��+�q�rEi�2EqC�qM��ZeK�ft�DKtdeDFRZJFdJf��Z8o��S�RZ�r�J���Z�k0qM�JkR�Du2+o�Zq�r�Z8r+qV��DC�0�f�d�JFd��trVo����ZJFd��te5�K�r8��R�+qe+0�+�+re0iMk��teC�d�DF0���d��R+o��dDlEi0�RiQRqe��fJ�e�i�tR��kd0K��Gf�l��tSD�o��r�Rq�ZE�7�lJ7�R��fJ�e�i�tR��kd0KZ��J�EiQem�nZ��2kf�ma���t�D�k�IKkf�RZ�+�JDtZt������DkR���eSGn�M����2E+�e�Z�M�r8���K��eiDtK�o�tK2ne�o�Z�of�d�tK2neR��tM+kFdV�eE+fe+0nZ��J�K0�o�q�eR��RM��Rd���q�eKZ���+r�R2�Rt��e0q���+�kS�=R���kS������a�iQeqC�k�Z�tdqMFRZJFd�it+wr��It��0rd��q=�kqD2F�C=+Kq�F�qC�dqMFRZak�=ateC�dqIF����S=�RSqw�E�l��C=+d��RE�RZ+0K�Cmr����e�k�Dl+�J=+d��t�=KtdqMFRZJFd��tewo�DDFR�JR�V�R+=to�qu�K�8��q�2E��r�qSeRDk��fF�qC�dqMFRZJFd��teC�dqItEi0t���2Eqw�E�l��C=+dd���qt�E�SeSD0�d��R�J+��C�F�+kR�e�2KJRo�DD���k��2�2+Z����od�JFd��teC�dqMF�qMk��teC�dqMFRZ��+2���=8ZqI��C�R�J�RSD5e0D��SCm�0V�R+o�kqDod�JFd��t1�tdeDFRZJFdJf2���rqq2EiJ���i2E��r��S�S+J��q�2�eto�0�+R�8�K�uR�qntdqMFRZJtleateC�dqMFRZJFdJ�REq�+e�FE�+r����F������e=�e�t=KtdqMFRZJFd��teC�dqMFRZ8t�J�RqeC�qM2���Z���teC�dqMFRZJFd��teCk�rK+E�k�R�dtF��dq��lq2�K�D�fZ5�dqMFRZJFd��t1�tdqMFRZJFd��tew��JI�EiqZ���teC�dqMFRZJFd��teCk�eItEiJ�MC�t�DVZ�CD2KZMk��teC�dqMFRZJFd��tet�E�SRE�=R�Z��eC�qCM�SZFkRrfF�qC�dqMFRZJFd���q�5�dqMFRZJFd��tZkZEe�+E=�rEZ�tdetZ�r�2�Z�R���t0Z�r�DSrlCqZ���teC�dqMFRZJFd��tewo�DDk����0JE+�C�+e���q8r0�K2+e�o�qIod�JFd��teC�dqMFRZJFd��teC�dqM�C0���dtF���eItEikr�q�Rq=wo�qS�EiaF�e�tdZ�r��IFEJ�r�G�R�r�2di�el�F�R�5R�=���DMkf�8�SZ�t�DVk�qlklqk+�0�tRq���qDF�C�R�D7Rq=��q��Rqm�d��2SqJ8dD���=rr0nt�qf�dDl�MCk+KC��fZ5�dqMFRZJFd��teC�dqMF�qMk��teC�dqMFRZJFd��tZRkE�l��Z8t�J�Rqrdk��2EimK�n2KeR�+D��M��Z���teC�dqMFRZJtMCateC�dqMFRZJFdJ��Z�r��f��ZJFd���q�5�dqMFRZ�t�D�����r�D�FE�0+K+Q��Z�ZEJDFE��R�2�2e�o�eDFRZJFdIfF�qC�dqMFRZJFd��t0Z���e7E�=+����eC�0��FSZe���f��CZd�M2KZJFd��trVZ��rfF����fe�+i���a8dI������+Z��J�E��t�nZ���EiakE�D����k�25kf�R��dtKenZRJ��lC8oE��tfJ5o��Ikf+=R�JFd��teC�dqMFR��rq�Q2��Rr�1�Z�iqd��te0���n�E�S+�J���q�edqMFRZr��q�q�F�lIf�E��ed��kS���lIdR�JFd��teC�dqMFS�rr�J�+t�St���+f��ZR+��w�=�Ei���ZJFd��teC�dqMEim����+=wr��S+�C=�KqntF��d��0�+�����CJ�0�f��ZJFd��teC�dqM�l2��w�qeRv��M+��V�RS��e+D��K+i�d��ow��e0i�ZM+r�So�R0�ee��aK��v�el��eR�MF0eDFRZJFd��teC�dDl�����S=E2do��E�MF�qJ���i2E��r��S�S+JF�Zn��=8odiMFR���d��R+oi�qCRZ��adIfF�qC�dqMFRZJFd��teC�dqMq+�+���+M�R+q�r�Ze+��fF�rVZ��r22�o��eSCqr��k��Ca��+7k�qntdqMFRZJFd��teC�dqMFRZ8�d�5tF���0K+�qm��q�2E��r�qM�fC�Z���teC�dqMFRZJFd��tewkE�2t�e2rd����o�Z��M����rEZKt+�+q+n��C+�qJE+����+1iR0�+k�il+��w�qJRtSeJ��D�20=����o�ZMK=�t�7kf2�t���ef�nZ�Z�kf�kR���e�=nZR��tdqMFRZJFd��teC�dqMFRZ�r���202��qD2���t��5t0Z��diMF0�R+0De+M�w++1i�q���qSq�8tqJ���qr�+��eC��o�ZMR���lqCt�+i�d��ow��e0�nF�+r�Rd���qdeSCDZ�+kF�d�tK2ne�o�Z�+k8�2�R0e�F�qC�dqMFRZJFd��teC�dql�����S=E2KJRr�IKF�CaFd�nR�J�odq��q�+kf=F+�t�q�����t+�qR+0ef�dD�0D++�F+q��o��f��ZJFd��teC�dqMFRZJFdJQ��=8o�1K�Ei0�Kqf��e��dDl�E�rFdJ�+q�8�+FiFq+2r��F+����q�iq+�+���+M�R+iMFR�R�Ri�q�+q�Mrlqa+leateC�dqMFRZJFd��teC��0K+�qm��quRq=tZEeIR�JF�JQ2ef���i+qe��q�+02�+Fi�q+rFd�VtenedeDFRZJFd��teC�dqMFRZJ�dVi2��V�Er�+�CmrdI�tdeCk�0��feJ��R+R�V�+�E�R+0De��eCk��2t�eJF��fF�qC�dqMFRZJFd��teC�dql�����S=E2KJRr�IKF�CaFd�nR�J�odq��q�+kf=F+�t�q+��+�R�+D8q+V�++�Z�Z8t�J�2���Z�e�FSC�Z���teC�dqMFRZJFd��tewkE�2t�e2rd����o�Z��M��Z8�d�5��ew���Rt0�rJ+RM�8�q��+qe��J�+�+�Jn+qerFd�VtenedeDFRZJFd��teC�dqMFRZJF�J�Rq=trRe�eR��r�q���ZRZR�MF�qJ�dVi2��V�qD2k�i��RZnR�J�o��f��ZJFd��teC�dqMFRZJFd�n2��Rr��2t�+2r0��R0Z+��C�FED0R�DKRMJ0���l�l+k��=�tdeCk�0��feJ��R+R�Vtq�nRqC2r�=++0�w�q���+td���fZ5�dqMFRZJFd��teC�dqMF�qkR�Ii2�dd��q2t�q�R���td�5�dqMFRZJFd��teC�dqMFRZJFd��t�J�r��IFE��r�qnRqe���Ce�Z8t�D���=R�RJ��RDmrqJ����5�dqMFRZJFd��teC�dqMFRZJFd��t�J�ZEJ7Eim�q�7tF�8dqlolDmr�+ER0ZRkEI�EiaF�J�Rq=trRe�eR��r�q���ZRZR�MZ�Z0t��iRqenodeDFRZJFd��teC�dqMFRZJF��fF�qC�dqMFRZJFd���q�KtdeDFRZJFd��teC�dDI�Ei��qD�2���ZRIK�C�rq+��ew�R�SeRD0��i�2EqC�dDItEi��R�fF�qC�dqMFRZJFd��teC�dqM���rEe��ew20eDFRZJFd��teC�dqMFRZJFd��teC��+�ko��l��eR�iF�+��S2�ef+FeE�i��of�d���e�e���Z�+5o��olq�eSJi��FdIfefqee0�nrK+rk��e�q=�o��Ikf�R�int�Z7�R����JZEi�����k�DQo��foE�dem�Q�dqJ�0iC��ZJFd��teC�dqMFRZJFd��teC�d�n2ei��ZFom��efCqKZ���0�ZR+SRD��+��8����m���S2n�++i���V�Rq�odeDFRZJFd��teC�dqMFRZJFd��teC�E�I�C�t�d��l0�r�FK2f+q+�iK��=w��eMeRDmr�C�R0o�kEe��+D=+f1i2dZ�Z��+0e8�SZateC�dqMFRZJFd��teC�dqMFRZJF����f�Qkf+ka�iQem�nZ��2kf+JZE��2�e5o�+2�EiakE�DRRD�Z0D5�0iC��ZJFd��teC�dqMFRZJFd��teC�d��kMC0t�Ju��0VZq���MC=t��D����ZEJ���e0+fC�R+o�r���f�S+�iK��=w��e��0+�kReKF�qC�dqMFRZJFd��teC�dq�rMZMk��teC�dqMFRZJFd��tZ��qM��=k+K�f��=n�dDItEi��R���SZ5�dqMFRZJFd��teC�dqMFRZJFd��t0oi�qD�F�qJ�d��2���e+1�rRi��R��td�Kk�e�+�DS�R�d2KJ��q=�e��S�Re�t0=8��rio���r�qnRqe0��iD���8r�CKt0oi�qD�kKZMk��teC�dqMFRZJFd��t1�tdqMFRZJFd��teC�dqMFRZ8t�J52+=eZ�C��S+mr�J�R�J+�dDlrSDk�R�fF�qC�dqMFRZJFd���q�KtdeDFRZJFd��teC�di��+e+r�=�k��uo��i+�JFd��teC�dqMFR��t��D20Z�kq1�Z�iqd��teJZ�i�rl�r+D��C��dq�Fq��kf=8Sqw��JRkf�rKCd���V�+=le��+R��+�+�Z�I��q��+R��ZJ�qJ��0��kd�t+q+�F0������++J�R��qr�tE�+++JrRE����e2R�C+���d+R��r���M�ar�JFd=�e0iu��e2t�D�2Ei����n���+rM�+���rR��kfD�+qJ8+E�CoE���fJ�+d��2Z��2�Eq��d�=tKe�e�rK���=�qJ2��Cdo+F�2KJ����r�+�t0d��M�+�E�u+���2�e��l+0r�0dR����+7t0�ekf�k++=��+�7E�=r�w����t+JS���m��=�q��R���eZm+q�J���w�e�F�eR�d+��++�r��IR��er��=��Z0E�l�M�erS=�R�o�k�qS�0=rrV���k�E�nolC�+�++���tqJ��qJ�+D�2�iVZi�rl�rK��+�����+�+0e�Ri�t+d�qZ�rl�rKCdtRDKtdqMFRZJFd��teCk�Dl��C�d��t�KtdqMFRZJFd��teC�dqMFRZ8r�J�2qZ+�0q�rw�Jt�J�2qZ+�d��Zd�JFd��teC�dqMFRZJFd��t�J���e7E�=+��7tF�8dqMEDkR���RMJ�kdiC��ZJFd��teC�dqMFRZJFd�7���R�Rr��l�mkRe��Fd�dDIE�=R��d���rqD2t�D=+Kq����5�dqMFRZJFd��t2�edeDFRZJFd��teC�dDlE=0�d+��ewoRr��S+2rq��R�I�k�D����k�d2�R+enedeDFRZJFd��teC�dDIF����S=�R�Cd��+�F�qJ�KqfRqo��Er������f���+2��qD2E��t��D20Z�k0�M�Z0+dDK2+Z��E��+�+a+le��l0V�K+�oR2�tv�e+DM��+rk�fefqee00�rK+�8�o�eE+weqDa�M+�+fo��KJ�e�+i�eDFRZJFd��teC�dDl+�+�rd��2d=t��DMF�qJ�KqfRqo��Er�����t��D20Z�kq1�+�+�rd��2d=��dDlE=0�d+Kt0ZRZ+0Kt�+�t�J�R0efk�eI+Eqm��iQKJRe��Ft�J�dD�2KJ+r0���Rim���R0Z+�dDl+�+�rd��2d=t��DMk�Z�kJ���ZVod��FS�r���k��uo��iR�iDo��o��mZ��J�EiQe�i���J����J�E��tR�aF�qC�dqMFRZJFd���l0���t�iDo��o��m�lCrt��dt�=�odiIkf+Jr��5td=�oR�u�fIdt���2RJnZR��tdqMFRZJFd��tewo�DDFR�8����R�e8eReIEikF����SZ5�dqMFRZJFd��teC�dqMFS�r8�q�Zw�S�i�2ReQ�+Za��+SR���2+=dZR�2Z��5�dqMFRZJFd��teC�dqMFR���+�utF��dDl�����S=E2do��E�M���=t�I�2d=ee0i���e0r�e��+Z�o��2FE��FK+Q2�I�ZEeIt��kt��Q��r�o�J��MC8�SZ�+fq0k��I�lZk�e��Fd�d��olDmr��7��eC�qDl��C��e��Fdk�DSeRD��Eif��ZRk�=�kKZMk��teC�dqMFRZJFd��tZ��qM�����+�u+fq0���I�Z2r0��R0Z+�q=�F�qFd����C�dDDRRZJ+��d2d=te�M�qkR��mt�J�ZEJ7Eim�q�7R�eno�qIod�JFd��teC�dqMFRZJFd��teC�dqME��R�J�tF��dDItEi�rSe7R�I�ZR�l+�+0F��0�fZ5�dqMFRZJFd��teC�dqMFRZJFd��2+Z��d�ME��R�J�+fq0kEI�Ei8r�C��F��d�MFR�8k��RqoiZ��Ik��8��J���Z�20��E=0�d+7R�eno�qIod�JFd��teC�dqMFRZJFd��teC�dqMFRZJFd���M�8+��qkR�58�Z�k�Z5�dqMFRZJFd��teC�dqMFRZJFd��teC�dql�SZk+K+u2KJV�EeI+Eqm��iQRMJt��0Kt�+�t��5RR���qDR�C2rqJ�R�I�k�D����k�d2�R+�K�qDl��C���0t�efk�Dl+ED��Eif��ZRkdiMFR��t��D20Z�kqr�+�+a+le�trVZ0q�+d������o�+D�Evn+f��kSD�k��r�Rim��iDow�5�KoK���J�E��tR�ateC�dqMFRZJFd��teC�dqMFRZJFd��teCk�Dl+ED��Eif��ZRkdq�r�Z=�0��2E��k�DS���k��+5t0Zt��0Kt�+�t�J�R0ef���It��k��fF�qC�dqMFRZJFd��teC�dqMFRZJFd��teC���SRR�J+��d2d=te�ME�k+d���+=wr�DSEJ8r�J�2qZ+�q=�kfCqZ���teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFR��rq�����R�+1K�Cm+�+��eCk�Dl+ED��Eif��ZRk�Z��MC=+K��t���edeDFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��tetZ�qS�RZFd�72Ed�r�1�R��0+K+nt�DK�di�a��QoE��k�+m�EirR���t0=7�R�tZ�qS�i7�����qqCtdqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��2+Z��d�IF�qk+��E2qZ�r�0����8��0K2+o�k�IK�lDrrE�7��ewZ��IFE�0+K+�2qZ+�d�K�R�a���t=KtdqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dql+��k+d�5t�J�Z�0��S+k�Ri7tr�k�JlZ��rFd�n2�eRr�eI+�Ca+leateC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��tZkZEe�+E=�rEZ�tdetZE�2�Z0R���R+=e�dDl�MCk+KC�t=KtdqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFdJ�REqC��eItEikr�qdR+=tkE�M���rrS=utd�Vr�=I��er+�1KR�=02diR�Me2t������Vr�=I��er+�1KR�=02diR�Me2t�e�t0rV�0iMFR�=R�J�2qef�dDlrR=0�d�5Rq=eo���F�ZMk��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJF�JdR+Ze��C�FR�m+d2�R�J���riof=2+leateC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��RR�8��qSoKZMk��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC������ZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZER��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMF�qMk��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dql+�e�rq+��SZ5�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC��D2k�i��RZ72+ZkkEI�eR�=+�e7��eCk�IK+�C�t�2�t��KtdqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqlR����+��R�J��d�M��0R�Jf��=���q2�RZ8����Rqo�o�qIod�JFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��tewo�DDFR��t�D�R���Z�q2ED=F�Z7�MC�R�qSE���l=utd�Vr�=I2K�2t����lD�2�Fi�Me��l1KR�=�eq=I��e0��C��M�Vrd��S�=�eKteto��l+��rFd�n2qZ�r�0�k�i��R��t=KtdqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dDlrR=����tetZ�q2ED=���u+fD����f��ZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFEq��+��2SDKtdqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFdI�F�qC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��tew�eDFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��t1�tdqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��t0Zt��ri�R��R�J�tF���Zf��ZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZ8r�J�2qZ+�0q�rw�JF�JuRq=8rqD2tE�0��idRqeftdqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqM�l��+d�7tF�8dqM���+d�KF�qC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�E�2�E��r�=�t�qC�+CDFq���0JE+�C�+e�F�qFd�7R�JVo�D�Ft�J��+���qCZdiC��ZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZ8r�D�2���o�I�e��J�MGntetr��l�lDr+M+E���R�Rr��l�m����teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFE��Z���teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFS�rr�J�+t�St���+f������teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFR�k���uRMJtk��l�RZFdJ�2dZRZRrK��e2rq��R�e8eReIR�=�0��2E����J����k��+5t0Zt��ri�R��R�J�t�ef�dDl+�+�rd��2d=t�qD2E�mrq�Ktet�qDS��qkR�JE2�JRe�od�JFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dDlE=0�d+��eCk�0�+�q0��q�R0rd�E�I�M=8���nR0ZR�q1�E=0�dfF�qC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFK=�+Ri�F�+�oRo�2t�lF�0VZ0qMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��t0ZRZ+0Kt�+�t�J�R0eC�ql�SZk+K+u2KJV�EeI+Eqm��iQRMJRZ+0Kt�+�t��5t0Ztk��l�Se8����R�e8eReIEikFfZn2d=RkRJl��D�rq2�t�eCadqltE=�rq��02���J����k��+5t0ZRZ+0Kt�+�t�J�R0en�d�DF�+0+f=K�fqCZ0i���i�2SD�kf�2��qi��i�e�J�Z0qu���d����20��kdqukf+J�d�r��=�teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMF�J�R�DER0=RZ�eM���k+K+Q2���Z��l+E�a+leateC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZ8t�D�2fqC�qMED0R�DKRMewZErKR�8rE1���=w�0�D�l�0r�FK����o�JI+�Z=t���R�I�Z��KF�qmrqIiR�e�ZE��+�q=+���t�qf��Z����0t�ifRqe���Ce�Z8r�Cu2�Id�0iMFR�k�d2�R+e���Ce�Z8��J���Z����od�JFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC���SRRZaF�J�Rq=�20��kMC0t�JER�I�k�D����J�MG�t�JZd�MFR�8k��RqoiZ��Ik��8t�D�2K�K�q0��S+0������e0����k�ZqZ���teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��t0Ztk��l�RZFd�n2��R�qZ���Dmr��Rqo�r��irMZMk��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFdJ�REqC�dqS+���t�I�tdetk�q2E=S�R�nR+=tk��irlCadIfF�qC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZr��q�+�CI�fG��i�e�qa�l0V�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJ�KqfRqo��Er�����t��D20Z�kq1�Ei�rd��2d=���q���Dk+�0�RMJt��0��R�k�ZnR0Z�r�qRo��k�d2�R+e0����Z�Z8��J�R�e8eReIEikFfZ�t0=wr+q��lC�rl���+enedqMFS�r���k��uo��iR���eqC�o���oK+�8dr�o�Zfe+qi���J�K0�R0eeeiDtdeDFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd���l0��+JR���eqC�o���tdqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd�n2��R�q1�E=0�d+��ewZEel+�+�rd�KRMJt��0Kt�+�t��5t0Ztk��l�EJ8rqJ���Z��q=�Z�Z8����R�e8eReI0�kR�J52�J�odqM�Dk+d��Rq=t�E��+�+a+leateC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFR���+�uRMJtk��l�RZFdJi2KI�Z+1�Ei�r�qnRqe�k�e�+�D2rqJ���Z�odqI�q0+�+��fZ5�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFK=�eR�����a�dd�olq�e+qikM+k�Rv��w�+e+D����o��l+Qe��MF0eDFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��2+Z��d�M�EimR�I��+e�k�e�+�D2rqJ���Z�20��+�J�+fZ7R�eno�qIod�JFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZkR�D�20e�k�e�+�D2rqJ���Z�20��+�J�+fZ7R�enedeDFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd���q�5�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC������ZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZ=+�q�tdetk�q2E=S�R�Q2�Jt���ir�ZF+MC��en��+f��ZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��trVZ��a8dI�����e+D��K+�8f2�e+e5eSC���+�22�RRqke0�n+�+kZRfefqeeiD���r8�I�tdZee+DM�K�krE0�eS��e0�n+���v�olqEeS��F�+�8�iMk��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC��e�+�C0R�D�t=t�R�S+�ZMk��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFdI�teC�di�a��7t�e�kS�I���=kE��e+����f�E�5+��DoEJ��dqI�E�Jt���2+C7���f�lCJ+��ntRJ7Z�+F�R�k���JFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJ���K2KJRedeDFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd���l05�Eq�2E��t=7�dqI�lCa�E���K�V����E�5+���e���k��2�f���i�efJ��00K��qit�i�2RD5Z�+��d�e���������D7�fI����JFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��tewo�DDFR�8��J���Z�20�����k��+7R�Fd����FSCJtleateC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��t0=t���2�S�F�Mq�2�eto�0�+R�8��J���Z�20��rSDk�R�0��q020D�e��k�d2�R+�K�q0��R�k��0��q0��D�kKZMk��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC������ZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��tZRo�r�+�ZMk��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFK=�eSC���+�oR1�RE�5eRvn��K2�RS��eEJ�R��aeE������e���e0eDFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqM�DkR���Rq=8�EJ���C=+d��tdetk�q2E=a+leateC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMF�qMk��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFdI�teC�di�a��7t�e�kS�I���=kE��e+����f�E�5+��DoEJ��dqI�E�JtlC�tE�5o�25�lCJ+��ntRJ7Z�+F�R�k���JFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC����FRZJFK=�R�eR�RJ�kt����Zm��+qtf��2���R�d���qklJ���Zn8��0��Z5�dqMFRZJFd��teC�dqMFRZJFd��teC�dqIr�ZJFd���w�DZ�Fn2S=�ZR��kE+St��q+�Di���2Zl+�Rl��kR�58�+���+=Z�vn�R=�Z+Znk��qR=���Zn8��0��Z5�dqMFRZJFd��teC�dqMFRZJFd��teC�dql+�e�rq2fF�qC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJF�JuRq=8rqD2tE�m��0�2+Z����le��m�fZ��fZ5�dqMFRZJFd��teC�dqMFRZJFd��teC�dqIr�ZJFd���w�DZ�Fn2S=�ZR��kE+St��q+�Di���2Zl+�Rl��kR�58�+���+�+R�qkS��8�Znk��qR=���Zn8��0��Z5�dqMFRZJFd��teC�dqMFRZJFd���qeC�dqM�l2�t��KeSJlFK+��V�RS��e+D��K+���I�RE�eKZ���+��V�RS��e+D��K�r8��R�+qe�+i��do�I��dewe��MF�+irE��e0Z�eR�����Fdo�ef+eSG��0eDFRZJFd��teC�dqMFRZJFd��tew��JI�EiqZ���teC�dqMFRZJFd��teC�dqMFRZJFd��tet�qD2t�JkR�DE2Ed�r��S�EiaF�JnR+=tk��od�JFd��teC�dqMFRZJFd��teC�dqIr�ZJFd���w�DZ�Fn2S=�ZR��kE+St��q+�Di���2Zl+�Rl��8K=Q����kE+St��q+�Di��05���S2E���R����+aZl+=FRZq�RZ��R�+�R+DZ�In+�����+�kl+qe��n2R�7Z���teC�dqMFRZJFd��tew�qMFRZr��qQ��=8oK�r8��R�+qe��ir�+5FdI�o�JQe��lZ�fZ+F�oMJEF�qC�dqMFRZJFd���qeC�dqM�l�+���we+qi�K+=8do�o�JQe��lZ�fZ+F�oMJEF�Z5�dqMFRZJFd��trVZ��a8�2�e+e5eSC����o�olq8eSCSt�+��R2�RR�ke+D��K+rZR��e0eweqqq�+CQe�i�t��oM�KtdqMFRZJFd��teCZ0�n2ReD�R�Rk�=2�Vn2qiZR�d�f+=Rl���+=dFR��teC�dqMFRZJF�J��=wo�e�+E��R����eC�0�QFSqeKCf�+r�Zd��FSqe�E�f�+�5Zd��2KZMk��teC�dqMFRZ=+�q�td=�r�e7��0��idRqe�k�D2klZ=R�D�RMJ�r���F�=Jt�J�2qZ+�d���MZMk��teC�dqMFRZJFd��tetr��l�lDr+M+E2Ed�r��S�EiaFR��teC�dqMFRZJFd��teC�dqMFRZSZ���teC�dqMFRZJFd��teC�dqMFRZJFd��teE�fI�R���t�D�ZMZr��qr���7tm�Q�dqJ�0iC��ZJFd��teC�dqMFRZJFd��teC�dqMFRZJF���kqmkf+iZE�D�d���0�5��dafCi�fD�Z0qu�f�at��QtKZ�kR���R�aa���o��7�dqIZ��J�E��e��nZi5�0�q+fq��+rfo�+SRD��R����+5kt�SeE�n+�J����ZS+DrfIn�d��kReKF�qC�dqMFRZJFd��teC�dqMFRZJFd��teC�d�n2ei��ZFom��efCqKZ���0�ZR+SRD��+��8����m���S2n�++i���V�R��r��IF�D�k�=��Me0rdi7�lCmt��f2=CZ+0��S�rrqJ�R�eeZqZS�le0R�J52d+��+�D2feMk��teC�dqMFRZJFd��teC�dqMFRZJFd��tm�=Ff��K+78�ZFom��efCq+dZQ�R�K��+�e�0nk�q��Rq���+q+S��8K=��R1���=w�0�D�l�krE��2=Rki����mK0K��Z�o�qSe�e0+�Z�+�Z�o��2FE�����Rq�odeDFRZJFd��teC�dqMFRZJFd��tew��eDFRZJFd��teC�dqMFRZJF��fF�qC�dqMFRZJFd���q�5�dqMFRZJFd��trVZ��a8�2�e+e5eSC����o�olq8eSCSt�+��R2�RR�ke+D��K+rZR��e0eweqqq�+CQe���e+C��q�VtdqMFRZJtMCaF�qC�dqMFS�akR�ateC�dqMFS�J���qk���FR��+d=��R�Rod�5�dqMFRZJF���=wk�e����JF�JnRq=ko�0�+Ro�tK2neR��tM+kFdV�eE+feKZ���+=2r����reSC�e��o�tK2neR��tM+kFdVfefqee+0nZ�+rZR���MI5e�+��K+k�K0��l+ntZ�k�qDFE�kR�D�R�JR�0q�2R���R+�kt�Srfe���ZQ8�05��+=�fCqK�DZR+=k��DZS����q�Zt�Vk0�DZS��+���8�Z�kE+q��e�+�C�8�q�ZE+=RSIn+f��8�+Kol+�ele�8K=Q��r��m�SlInk���R��o�J�ZK+�oRo�e�+�e+0nk�+�8KeMk��teC�d�DF0�0��=�2�e0�0q�+���rq�f��Z�ZEJ���ZJFd��te5Z0eDFRZJFdJf��Z8o��S�RZk�q��R�eto�I�e�Z2r�qQ2�I��E�It���r��5t0Zt������Dk��ateC�dqIod�JFd��teC�dqMF�Ckk�5RqoiZ��Ik��8��J�����kqD�kfCqZ���teC�dqMFRZJFd��tewr��It��0�J�Rq=���J2k�DkR�I�2+o�Z�M2��k��2�2+Z���ql�lDJ���d2d=teiD2feJ��+f�enedeDFRZJFd��teC�����d�JFd��teC�dqMFR�0��=�2f0�8�1����0��Z5t��KtdqMFRZJFd��teCk�Dl+�J=+d��RMJ�Zdq�r�Z8�RrfF�qC�dqMFRZJFd��t0Zt������Dk+�qf2�e8r�q�r�Z8�RrfF�qC�dqMFRZJFd��2+Z���eItEikr�qdR+=tkE�M���rr��5R�Zted��ZfDE+�Z�R�Zted��ZfDE+�Z�R�Zted��ZfDE+�Z�R�Zted��ZfDE���td�Vkd��k��rrE�7��etk�D2R�C�rq+Kt0oik��l�E�kR���t�=KtdqMFRZJFd��teC�dqMFRZr�t��o��r�R���E��tKq�2de�����a�iQeqC�Z0qu��q8�Ei�RRDnZEI5�EiakE��o�q8+�Sef+��SJD8�05��+=�fC���ZJFd��teC�dqMFRZJFd�nR0ZRrE�S�Ei2rEiftF��dDlrR=0�d�5Rq=�20�RrMZMk��teC�dqMFRZJFd��tetk�D2R�C�rq�E2do��R�MF�qJF�JdR+=tkE�l+�DS�0D0�fZ5tdqMFRZJFd��teC�dqMFRZr�t���K���S��ZE�iem��k��F�R�J�E�Ko=��0q7�l�J���D����Z0qu�lC5���7olD�of�I�R�J�Ei�t��kiE��q8�Ei�t��kd�5kf+�od�JFd��teC�dqMFRZJFd��t0=�eRe�F�qJt�V�2��tZEJl��ekR�q52dZ�Z�1K+�+�+K��tde0�0D�kfC�Z���teC�dqMFRZJFd��tewo�DDFR��r�J�2do��0�M�DqR��Kte0r��SeR�mr��ut�qn�+CrlZaRleateC�dqMFRZJFd��teC�dqMFRZJ��2dRqZe�d��eRi0t�V�R+=��diSeR=E��D�2E�t�E�ItRZ8���nR0ZRrE�S�Ei2rdJ�2���odqM��0R�Jf��=�odqM�qkR�Ii2�d��E����qa+leateC�dqMFRZJFd��teC������ZJFd��teC�dqMFRZJFdJ�20=���+f��ZJFd��teC�dqMFRZJFd��teC��D2k�i��RZ72E�Rr�rKE=0Fd�d2E�����KtEi�Fd�7��qtk�D2R�C�rq�E2do��R�MZ�Z8�K0i��=wrR�MZ�Z8t�D���=R�RJ���J�R�q��fZ5�dqMFRZJFd��teC�dqMF�qMk��teC�dqMFRZJFd��trVZ�+m���R0e�e���Z�+�8�Da��rd�d�DtSJ�Kq�8�++o�+r�R��iem��k��FZ��J�E��eR��kM�ukf�ma���t�DnZ0��o�Z8����e����E�2�E�5+��iem��k��eoMof�d��w�qeRv��M+5���ol0�eqD�F��a2Ifefqee0�n��+5eE��oRq�eR����+k�Rv���q�eqD�F��a2JMk��teC�dqMFRZJFd��tZ��qM��=8�K0i��=wrR�M�MZMk��teC�dqMFRZJFd��teC�dqMF��m�0����e�k�IK+�C�t�2���eCk�e�+�C0R�D�RMekk�eDkKZMk��teC�dqMFRZJFd��teC�dqMFR�k��2�2+Z���eurSD0�d2�2+Zee0��Ei0�RiQRq=e�d�od�JFd��teC�dqMFRZJFd��teC�dql���JF�=Q2�eRZR�M���k��2�2+Z���e�kKqF+�+��SZ5�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMEDmr�+�RMJt������Dkd��tZRe�el�l�k��+5tm�n��qM2feJF�JnRq=ko�0�+�DS�0J0t��KtdqMFRZJFd��teC�dqMFRZJFd��teC�dqMFR��r�q�2E��k�D2R�C�rq+��eCk�0��S+m�MqnRq=ko�0�+EJe��GfF�qC�dqMFRZJFd��teC�dqMFRZJFdI�F�qC�dqMFRZJFd��teC�dqMFRZJFdJ�20=���+f��ZJFd��teC�dqMFRZJFd��teC�dqMFRZJF�JQ2�I�Z+1�Ei0�RiQRqeC�qME�kR�D�R�JR�E�2F�ZMk��teC�dqMFRZJFd��teC�dqMF�qMk��teC�dqMFRZJFd��teC�dqMFR��r��ntF��d���E��k�d2fqCkD�e���r�q�2E��k�D2R�C�rq+�t�qJ���l��Z=R���t�0dk�Dl+�J=+d��RMewZEe7�ZMk��teC�dqMFRZJFd��teC�dqMFEiq���QtdetkEJSSeJF�J���=tZ��2SeJF�J�Rq=trRe�eR�0���t��KtdqMFRZJFd��teC�dqMFRZER��teC�dqMFRZJFd��tewrRJ7�Ei0F�Zn2�eRr�eI+�CrF�J�Rq=trRe�eR�0���t��KtdeDFRZJFd��teC�dqMFRZJFK=�e0�n��+5eE����qCeS��k�eR����o�Z�o�q�tdqMFRZJFd��teC�dqMFRZkR�=�RSq��qqSEqJ�d��2Ed���0KRZJkRe�t0Zt������Dk+�q�2drd�0qD2feJF�J���=tZ��2SeJF�J�Rq=trRe�eR�0���t��KtdqMFRZJFd��teC�dqMFRZ0+K+uRq=��dDl���0t�Ii��efk�e�+�C0R�D�RMekk�eDkKZMk��teC�dqMFRZER��teC�dqMFRZJt���2KJRr��M���R�JQ2ZR�0�od�Mk��teC�dqMFRZkR�=�RSq��qqSEqJ�d��2Ed���0KRZJkRe�t0Zt������DkK�7tRq�odqM��0R�Jf��=�odqM�qkR�Ii2�d��E����qa+leateC�dqMFRZJFdJ�REqC�dDItEi0t���2E��rqq2t�qF+MCfte��qI��C��0J�2fq�r�e��l�aF�J���=tZ��2EJe��C���eC�qqS�lqk+d�n�+e�o�CrMqeF��fF�qC�dqMFRZJFd��teC�dqM�C=��iu��F��qDl+�J=+d��tF��dDlEi0�RiQRq�KtdqMFRZJFd��tew�eDFRZJFd��teC��DS�lDkRleateC�dqMFRZJFd��teC�dDlrSDk���teE�f2�e��Qo+=5o�If�lCJ�Ei���=5Z��2Z��J�E��e����K���RV�+E=k�di���5���a2Eint���kS�QkEZJt���o�Z�o�qE�R�aa�int�J�kd�5��qikE�DtEJ5�dq2�fJ�e�i�tR��kd0K��Gf����t���kd�m�SJ=��52�Z�Z0�V�0�f��ZJFd��teC�dqMFRZJFdJ�REqC�dqS+���t�I�tdetZE�2�Z0R���t�=KtdqMFRZJFd��teC�dqMFRZJFd��tetZ�r�2�Zrk�C�2+oiZ�Jl�R�k�ZD�fqCkiMFR�mr�2�2d=Rr��od�JFd��teC�dqMFRZJFd���q�5�dqMFRZJFd��teC�dqMF�Ckk�5t0Zt������DkR�d�2Ketk��l��D�k�CnRq=ko�0�+�DaF����SZ5�dqMFRZJFd��teC�dqMFRZJFd��t0oi�qD�FS+Fd�7eKZ���+mrqF�RR��eS��F�+�+d��RRqfe�+i���aem��2+eIeSC�t�of�R�8��+�2q=wo�I�EiaFdiQ�dq��dqDZ�Z8��J�����kqD2�SC�Z���teC�dqMFRZJFd��teC�dqMFRZ8�K�uR�qCZ+C�FRVde�eMR0ZRrE�S�E��tdZ5e���e��aem��eKJ�e+0nZ���vfefqm2�Jk�RJl�l+k�R���d�=kEZ�2R����C�0�DZS����q�Z�C�0r�8K�5F�r�2�qCe+0n��JFd2�Re8eE�le��5F�er+MZD�dDV+q����Kt+C5o�+2kRZ8r���t���kd�m�l�J��int��Q�dqJ�0�f��ZJFd��teC�dqMFRZJFd��teC�dDlrSDk����eC��+=2r�oM��e0�nR�+�t�1�olq8eiDe�+rrEo�eS��eR���M+���2�R0e�e+qi�K�ZS2�Rt�QeKZ����a8Kr����7e0�l��+k�K0��l+neKZ�2q��E��k�d2fq�kf�=����e�C5Z�f�RDiR������5o�If�lCJ�Eint�e7oMZC���l��Z=R����q�+r����D�tq7�fZ5�dqMFRZJFd��teC�dqMF�qMk��teC�dqMFRZJFd��tZRo�r�+�ZMk��teC�dqMFRZJFd��teC�dqMFR�mR��7trd�qM����tSD�ZqDF��q�r��7tfJ��K���S��ZEiD���5o�If�lCJ�ED�tq7�fZ5�dqMFRZJFd��teC�dqMF�qMk��teC�dqMFRZJFd��t=t��e���eJ�K+��lqw�E+l�Ei�t�J�2�Id�dDlrSDk�R�fF�qC�dqMFRZJFd���q�5�dqMFRZER�ateC�dqM�l�a����teC�dqM��o�t�2Ke+0n+K+mrqF�RR��eRvnK+rZ�I�eS��e���t�+��Sr�Rt�KF�qC�dqMFRZakJC2��Rr��2t�+Jt�V�2���Z+Df��ZJFd��te5oif��ZJFd��2d=RkRJl��DJt�V�R+=to�q�FE�0+K+Q��Z�ZEJDF�JkR�Du2+o�Z�M�MZMk��teC�dqMFRZ��+2���=8ZqI��C�R�J�RSD5e0DIREi��0��2�IdedeDFRZJFdI�F�Z5�dqMFRZr�R�iF�qC�dqMFRZak�5Z�+��d�e�i�RqC��MZm�EirR���t0=nZ�K�Rq����7tR��k�25�fJ�afC�e�Z7�R��fJ�e�i�tR�5o�If���=e�D�ti��qD7�RZJt���oE��oK+2Z��J�E��t�e��0q��fC5t�i�oMZnZE����D82E��Rm��k�25kf�R��Kt+C7����tdqMFRZJFd�it+wZ�q2tE=md�n2d=8o�J7RZ�r�J�2+o��0q�+���ZR�q�0��2�Z�kR���R+�kt�S��rn2Dn8�Z�od�qe��n2R+7���Vk0�SlInK=5���do��S�Z�2+�K���Vk0=w�R�Se�CkZ+rdZS+q�R�q�R=d�+rdoE+=�f��+K=Q8�Ze�l+D8��n+d=�Zt�Vk0=w�R�Se�C�Z+rdZS+S��qKZ���+i�w�S�vnK���R��Z0�S���n+d��ZR0nk��Stl+���ZJFd��te5���ItEi0t���2Eqwk�e7tE=qR��teC�dqM�f�rZ���teC��eI+Eqm��iQt=�r�q2�C��J���o�kE�l�l�mkJnRq=ko�0�+�DaF�Jf2���ZR��r��8�R�fF�qC�dqMFRZJFd��Rq=���q�����+�JDtZt������DkR��7��eCk�IK+�C�t�2���eCk�e�+�C0R�D�RMekk�eDkKZMk��teC�dqMFRZ=+�q�tdet�+D2�����+E�����qrMqeF��fF�qC�dqMFRZJFd��teC�dql���JF�=�2q=wr�+����mr�2�2d=Rr����MZMk��teC�dqMFRZJFd��teC�dqMF�C=t�D��lqwZ+D22�ZtR�=QRq=wr��S�S+aF��5o�ZE�Rvd���7eq=���5���a2Ei����5�K�Rk�Dl��in�fD�ZqDF��q�r���e�5��qV+e��������7���Q�Rqr�E��t���kd�m��=m�E�7tR��kR�E������iq���Qe+Dl��+rZR��eS��eSG��M�k�+�fefqEt�qnedeDFRZJFd��teC�dqMFRZJtMCateC�dqMFRZJFd��teC��DS�lDkRleateC�dqMFRZJFd��teC�dqMFRZJt�J52�d�rdqleRi0�J��Z���eI�Cmr��52+oiZ�Jl�R�k�ZD�fqCkiMFR�mr�2�2d=Rr���kKZMk��teC�dqMFRZJFd��t1�tdqMFRZJFd��tew�eDFRZJFd��teC�dDl�lC�r����ew2q=od�JFd��teC�dqMFE�mrdD�R+Z��dqM���mr�2�2d=Rr�ql��DJF�J�Rq=n��Ce�Z8t�D�20=R���2od�JFd��teC�dqMFRZJFd��2+Z��d�M�JkR�����Co�+f��ZJFd��teC�dqMFRZJFd��teC��0��S+0��i���Z+edeDFRZJFd��teC�dqMFRZJtMCateC�dqMFRZJFd��teC���SRRZat�J�2+o��dDIRE=mt���t�e��D�2fCqZ���teC�dqMFRZJFd��teC�dqMFRZ8t�D�20=R��q�r�Z�t�D�R����Eel�lC0F�Z7�M�V�0�����rFd�n����o��S+SC�Z���teC�dqMFRZJFd��teC�dqMFRZ8�f=�2Ket2q=�F�qJF�I�R+ZVr+DRofZ2K�7eKZ�tD�e��0��K��ZR20�Rrl+88��Vk+e�edeDFRZJFd��teC�dqMFRZJtMCateC�dqMFRZJFdI�F�qC�dqMFRZJFd��2+Z��d�M�Z��Ri���F���KF�q=+K�REq�o�+f��ZJFd��teC�dqMFRZJFdJu��Z�r��S�����0J�2+o�r�1KtR�8�f=�2Ke�o��f��ZJFd��teC�dqIr��JFd��teC�dqMFEimt���tZ��qM����t�D�2E���+C��lZ��Ri���=J�0�2od�JFd��teC�dqMFRZJFd��2d=8o�J7E��kRZn20Z��E�MkKZMk��teC�dqMFRZER��teC�dqMFRZJt�D���=R�RJDFR�m��iu���KtdqMFRZJtMCaF�qC�dqMFS�akR�ateC�dqMFS�J���Q�d�=��CqK����rdoS+Dt�Z��e��R��om�SSC�+d���+Z�ot�=�R1n+f+�ZR+=k��S����2��8�ZFkS+SFS�C��ZJFd��te5���IFE=���dtetZRI�Ei2r�=d20ew�E�It�Cm�Re�eiDF�+rkS��tS�Me��ae��o+S���eF�qC�dqMFRZakJC2dZ��+qSr�Z8�d2���=J��q2t�q�R���e+q���+kFfI�20ZqeR�M��+�8d��R+o�e+qM�Mof�d�Rt��ei��K+�+�iaZ+r��0��el+����ZR��kE+qofC���ZJFd��te5���ItEi0t���2EqwkRI��Sek+d��t�SZRD�2qn����kE+q�SJ�2D�����kR+qe��q+f+�ZR+=k��S����2��8�ZFkS+S����+d�����+Zl+Da�i�+�J7�qJ���Z2Z��J�Eint�J�kD7�f2�+�i�e�+�R+ZV�qD���ZJFd��te5oif��ZJFd��2d=RkRJl��DJt�V�R+=to�q�FE�0+K+Q��Z�ZEJDFE�=R��E2qZ�r�0�k���R�I�2�q�k�J��R�k+�0d2qZfodqME=0t�J�t��5�dqMFRZqZ���teC�dqMFRZJ��D�2��Rk�0���ZaF�J���=t�ql��DJF�J�Rq=n��Ce�Z8t�D�20=R���2od�JFd��teC�dqMFRZJFd��t0=kk�JI+EiJ�MC�2Ket�+1KtEi��f=�R�J+�d�i��e8�SZ�t��V2�=�Z��rFd�n����o��S+SC�Z���teC�dqMFRZJFd��teCk�����e0+�+��ew�E�ItE���+�f20Z�kqD����r�ReKte02di�2feJF�I�R+ZVr+D�kKZMk��teC�dqMFRZJFd��tetrqqS�M�kd��t=�r�e��SqkR�JKR+Z����M2��8�SZ�t��fadD�Z�Z8t�D�20=R���od�JFd��teC�dqMFRZJFd��t0=kk�JI+EiJ�MC�2Ket�+1KtEi��f=�R�J+�dD�e��rFd�7R�rd�0iMFR�0��K��Z+o��f��ZJFd��teC�dqMFRZJFd�n����o��S+RZFdJu��=8�Ee�+�Zm�d�QRqe��0�M2feJF���tde�odqM�J�+f1iRqenedeDFRZJFd��teC�dqMFRZJF�I�R+ZVr+D�F�qJt�V�2����+D2F�e�+d��tde�o�D�Z�Z8rSZ�t�qf�dDIRE=mt���t��KtdqMFRZJFd��teC�dqMFRZ8t�D�20=R��q�r�Z�r�J�RMe8��el��=�rq+5t�qK�0iMFR�2Ffe7��eCk�����e0+�+��fZ5�dqMFRZJFd��teC�dqMFR�0��K��Z+��C�F�D0t�DE2��RZ�Jl�EDk�Z7+fq�odqM��eS�ReKtetrqqS�M�k��fF�qC�dqMFRZJFd��teC�dqM�J�+f1iRqeC�qI��C��Mq�Rq=wo�qS�EiaF��qt�qf�d�i��+8�SZ�t0=kk�JI+Eia+leateC�dqMFRZJFd��teC�dDIRE=mt���tF���rK�q2rdD�2dZVk�0�+R�8rfe7��eC�q=Io��rFd�n����o��S+SC�Z���teC�dqMFRZJFd��teCk�����e0+�+��ew�E�ItE���+�f20Z�kqD����EF�eKte02��M2feJF�I�R+ZVr+D�kKZMk��teC�dqMFRZJFd��tetrqqS�M�kd��t=�r�e��SqkR�JKR+Z����M2f�8�SZ�t�0do+C�2feJF�I�R+ZVr+D�kKZMk��teC�dqMFRZJFd��tZ��qM��=�t�D�R���Z�q2ED=F�Z7�lq�ZDlZ�iqK�7�eJ�0iD�J�+f1iRqrd�0qD�SC8�SZ�t0o�ZqDl+E�q�K�K��eCk��l+���F����SZ5�dqMFRZJFd��teC�dqMFRZJFd��2��Rr��2t�+J��D�20=����f��ZJFd��teC�dqMFRZJFdI�F�qC�dqMFRZJFd���q�5�dqMFRZJFd��t=8���I+�qmkI�2��R���f��ZJFd���q�5tdqMFRZJFK=it�Z5�dqMFRZJF���e00�rK+�8�o��fqIeR��2+q����m�+Jue+qM�M+rk��o���td�=�Rqq+f=Q8�o���+=RS���R��Z+r�kE+q�SJ��ReD�R�7�R���q5����oE�ateC�dqMFS�J�dD���o�k�rn+d���+Z�ot��e�Z�K�iZRqa�f+qFf+q�R����oKol+�e�q�kR�nZ+Z0kd�=��1n+�eQ��ZFo���e�0nkR�nZ+Z0kd�=��=f��ZJFd��te5���IFE=���dtete���F�Cm�qJ�R�JR�q�+Ke�Z+rdkS+D�E��+��n����kw�q2R=�kE��2q�ateC�dqMFS�J�JfR+=8k�J�FR�q+�+�2+o�r�DS��i�k��ZM�mkf+JoE��ei��qD��R�J�E����Jke0��r�eDFRZJFd��t�qwFRel��q�+KC�t0=��ql�l+0���7Rq=J�K+�8f����qre0�qK+krq��oeIe�+i�+Z�k�qdFR��teC�dqM��Z�t�J�2���Z�qM�+ekJ�2E�t����+�qJ��ZFo���e�0nkR�nZ+Z0kd�=��1n�R���E�5ZEJ�tdqMFRZJFd�it+wZ�q2tE=md�n��Z�RRJSZ�Z�r�J�2+o��0qI+�CRrEinR�JRr�rn+d=��R�Rod�Da�i�+�J7ZR+=k����q�C��ZJFd��te5���IFE=���dtetZqD�R�DkR�J�tZ�ZR�l+E�kR�q�e�+�Z�+iFd1�tS�Me��ae��o�2E+�e0��e�+rkv��fqIeR��2��Jor�e���e�+i��+m�Rd��M2�eR�ne�+i8�fefqeeSJMrM+m�S��o���e+DM��o�2�2�eRJqZ��J�F�R��eM�MFK�mZ+0�tK�neiDe0��8K=Q��q�o�qkf+�+Ke�ZR0nZR+S����2RZ�8����d�D�RZq+f���Rd�kd�S8��nK�����5��+�e�Z�2RZdZ���teC�dqM��Z�t�J�2���Z�qM�++���R�J+���Se�Ck+���2�q��Ed�e��5tR�5kR�r�EZ��E�����nZq��f���E��t�Z�k0qE�lJ�oE�D�di7�fJ7�E�5+�i�o�=5Z�J7�lIf�E��e+��Z0qu���5����e����lJ7���8t����������2�Rqme��Qt+C���ZkEZJ�lC�eRD5o��kf+r�fofefqee0�l�K�K2���q�eqD��+moRd���+0e��=edeDFRZJFd��t�qwFRel��q�+KC�t0Z�r��ItRZ�R�D�R+=n�K+��2�R0e�eRJl��+5F�V�Rt�ae+qSr�+�FK1fefqee+0nZ�+r�Ro�R+Z�tf+��R��K��ZR�C�S+��EDq�Se�����teC�dqM��Z�t�D���=R�RJDFE=��0D��+e��f2�+�i�e�Z7o0�m���JkE�72=nZ�Zm�E�5+��D�di7�fJ7�lIf�E�K2+ateC�dqMFS�J�I�2=8ZEFK�RZtR�=QRq=wr��S�S+J���+�R+DZ�In2��8�ZIZS+S��Z�+K����r5��+=F�Jf��ZJFd��te5oif��ZJFd��2d=RkRJl��DJ���i2E��r��S�S+J�K+�R0ZR�q�St��0�+�M2�eRZ+DI�R�8t�ZV��eCk�+�SeJF�Id�Rqf�dDIkfqrFd�n��Z�RRJSZfeJF�J�RE�k�qD2qqF+��Ktete++���+krq��ef��q2t�q�R���t0Z�r��It�qSr�C�F�qC�dqMF�ZMk��teC�dqMFRZ=+�q52d=8���i�S��R�JQ22�k�JlZ��8��1V+K�d8�=�o�����0i2E�t�qC�tEeS�R=�R0eKo�iMk�ekFfe�R�2i2�Z�k�ekFfe���e�2�DMofC2��CD+K�d8�=����Fk�q�t�qf�dDI+�CS�K�K��eCk�JS��C�rE=�2fqf��+�t0�tr�qq�t�qFit0+t+0q�t�=KtdqMFRZJFd��teC�dqMFRZ8���KRqoi��J7�DJ�MC�+K��edeDFRZJFd��teC�dqMFRZJ��D�2��Rk�0���ZaF�JdR+=tkE�l+�DJ�d�uteto��l+��aRleateC�dqMFRZJFd��teC�dqMFRZJ��i�te�k��2Eim+�eVR�Fd�DI�f=r�J�RE�k�qD2qqJF�q�teto��l+��S�0�0�F�k�+��SJ8�Kq�RE��������Z8k+q�t0Z�r�DSrRJe�MGVt0=n��2od�JFd��teC�dqMFRZJFd��teC�dqMFRZJFdJ�REqC�dDI��e�+K+7RqFdZd�2od�JFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�di�a���e�Z��dqE��q5����oE�7�R��l+�R���oE�nZ0f�RDJ�Ei�olJ5kR�r�EZ��E�����nZq��f���Ei�e���o�+�tdqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��2+Z��d�M�C0���d+fDt��q�Z�Z8t��V��ete++���+krq+��SZ5�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC��0��S+0��i���Z+edeDFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��t1�tdqMFRZJFd��teC�dqMFRZJFd��teC�dqMF�qMk��teC�dqMFRZJFd��teC�dqMFRZJFd��2+Z��d�M��D0�d2�2+Zee0���SC�r�qdR+=tkE���R=0t�J�tdeto��l+��S�0J0��etk��I�qa��fF�qC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJ�d��2E�to�J7+Ei�Z���teC�dqMFRZJFd��teC�dqMFRZJFd��t1�tdqMFRZJFd��teC�dqMFRZJFd��teC�dqMFS�r8�Z�Zt��R�C�+�eQ���ekw�SZR���R���dD���o�k�rnK������Zw�q2R=C��ZJFd��teC�dqMFRZJFd��teC�dqMFRZJ��i�te�k��2Eim+�eVR�F��DI�f=JF�q�teto��l+��S�0D0�F�k�+�RZ8k+q�t0Z�r�DSrRJer�G��ete��DFR�8k�n2+=t��JRoKC2+MG�t0=n��2od�JFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC��0��S+0��i���Z+edeDFRZJFd��teC�dqMFRZJFd��teC�dqMFRZER��teC�dqMFRZJFd��teC�dqMFRZJFd��tet��Jl+��k+K�2K�d��q�r�Zm�+2Kt=�o�JI+�Z=t�JER+Ztk+1�+�ek+K��2E���dDl�MCk+K�m�2�odqM�C=��iut��KtdqMFRZJFd��teC�dqMFRZJFd��t1�tdqMFRZJFd��teC�dqMFRZER��teC�dqMFRZJFd��tew�+D2�������t0ZRo�DSrRim�qJu�fZ5�dqMFRZJFd��t1�tdqMFRZJFd��tew��JI�EiqZ���teC�dqMFRZJFd��tew�+D2�������+K��edeDFRZJFd��teC������ZJFd���q�5tdqMFRZJFK=it�Z5�dqMFRZJF���e00�rK+�8�o��fqIeR��2+q����m�+Jue+qM�M+rk��o���td�=�Rqq+f=Q8�o���+=RS���R��Z+r�kE+q�SJ��ReD�R�7�R���q5����oE�ateC�dqMFS�J�dD���o�k�rn+d���+Z�ot��e�Z�K�iZRqa�f+qFf+q�R����oKol+�e�q�kR�nZ+Z0kd�=��1n+�eQ��ZFo���e�0nkR�nZ+Z0kd�=��=f��ZJFd��te5���IFE=���dtete���F�Cm�qJ�R�JR�q�+Ke�Z+rdkS+D�E��+��n����kw�q2R=�kE��2q�ateC�dqMFS�J�JfR+=8k�J�FR�q+�+�2+o�r�DS��i�k��ZM�mkf+JoE��ei��qD��R�J�E����Jke0��r�eDFRZJFd��t�qwFRel��q�+KC�t0=��ql�l+0���7Rq=J�K+�8f����qre0�qK+krq��oeIe�+i�+Z�k�qdFR��teC�dqM��Z�t�J�2���Z�qM�+ekJ�2E�t����+�qJ��ZFo���e�0nkR�nZ+Z0kd�=��1n�R���E�5ZEJ�tdqMFRZJFd�it+wZ�q2tE=md�n��Z�RRJSZ�Z�r�J�2+o��0qI+�CRrEinR�JRr�rn+d=��R�Rod�Da�i�+�J7ZR+=k����q�C��ZJFd��te5���IFE=���dtetZqD�R�DkR�J�tZ�ZR�l+E�kR�q�e�+�Z�+iFd1�tS�Me��ae��o�2E+�e0��e�+rkv��fqIeR��2��Jor�e���e�+i��+m�Rd��M2�eR�ne�+i8�fefqeeSJMrM+m�S��o���e+DM��o�2�2�eRJqZ��J�F�R��eM�MFK�mZ+0�tK�neiDe0��8K=Q��q�o�qkf+�+Ke�ZR0nZR+S����2RZ�8����d�D�RZq+f���Rd�kd�S8��nK�����5��+�e�Z�2RZdZ���teC�dqM��Z�t�J�2���Z�qM�++���R�J+���Se�Ck+���2�q��Ed�e��5tR�5kR�r�EZ��E������ZSC2�f���E��t�Z�k0qE�lJ�oE�D�di7�fJ7�E�5+���tSJ5Z�J7�lIf�E��e+��Z0qu���5����e����lJ7���8t����������2�Rqme��Qt+C���ZkEZJ�lC�eRD5o��kf+r�fofefqee0�l�K�K2���q�eqD��+moRd���+0e��=edeDFRZJFd��t�qwFRel��q�+KC�t0Z�r��ItRZ�R�D�R+=n�K+��2�R0e�eRJl��+5F�V�Rt�ae+qSr�+�FK1fefqee+0nZ�+r�Ro�R+Z�tf+��R��K��ZR�C�S+��EDq�Se�����teC�dqM��Z�t�D���=R�RJDFE=��0D��+e��f2�+�i�e�Z7o0�m���JkE�72=nZ�Zm�E�5+��D�di7�fJ7�lIf�E�K2+ateC�dqMFS�J�I�2=8ZEFK�RZtR�=QRq=wr��S�S+J���+�R+DZ�In2��8�ZIZS+S��Z�+K����r5��+=F�Jf��ZJFd��te5oif��ZJFd��2d=RkRJl��DJ���i2E��r��S�S+J�K+�R0ZR�q��+�emr��M2�eRZ+DI�R�8t�ZV��eCk�+�SeJF�Id�Rqf�dDIkfqrFd�n��Z�RRJSZfeJF�J�RE�k�qD2qqF+��Ktete++���+krq��ef��q2t�q�R���t0Z�r��It�qSr�C�F�qC�dqMF�ZMk��teC�dqMFRZ=+�q52d=8���i�S��R�JQ22�k�JlZ��8��1V+K�d8�=�o�����0i2E�t�qC�tEeS�R=�R0eKo�iMk�ekFfe�R�2i2�Z�k�ekFfe���e�2�DMofC2��CD+K�d8�=����Fk�q�t�qf�dDI+�CS�K�K��eCk�JS��C�rE=�2fqf��+�t0�tr�qq�t�qFit0+t+0q�t�=KtdqMFRZJFd��teC�dqMFRZ8���KRqoi��J7�DJ�MC�+K��edeDFRZJFd��teC�dqMFRZJ��D�2��Rk�0���ZaF�JdR+=tkE�l+�DJ�d�uteto��l+��aRleateC�dqMFRZJFd��teC�dqMFRZJ��i�te�k��2Eim+�eVR�Fd�DI�f=r�J�RE�k�qD2qqJF�q�teto��l+��S�0�0�F�k�+��SJ8�Kq�RE��������Z8k+q�t0Z�r�DSrRJ���Gnt0=n���2od�JFd��teC�dqMFRZJFd��teC�dqMFRZJFdJ�REqC�dDI��e�+K+7RqFdZd�2od�JFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�di�a���e�Z��dqE��q5����oE�7�R�kf+JoE��oE�nZ0f�RDJ�Ei�olJ5kR�r�EZ��E������ZSC2�f���Ei�e���o�+�tdqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��2+Z��d�M�C0���d+fD8��q�e�Z8t���tfqte++���+krq+��SZ5�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC��0��S+0��i���Z+edeDFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��t1�tdqMFRZJFd��teC�dqMFRZJFd��teC�dqMF�qMk��teC�dqMFRZJFd��teC�dqMFRZJFd��2+Z��d�M��D0�d2�2+Zee0���SC�r�qdR+=tkE���R=0t�J�tdeto��l+��S�0J0��etk��I�qa��fF�qC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJ�d��2E�to�J7+Ei�Z���teC�dqMFRZJFd��teC�dqMFRZJFd��t1�tdqMFRZJFd��teC�dqMFRZJFd��teC�dqMFS�r8�Z�Zt��R�C�+�eQ���ekw�SZR���R���dD���o�k�rnK������Zw�q2R=C��ZJFd��teC�dqMFRZJFd��teC�dqMFRZJ��i�te�k��2Eim+�eVR�F��DI�f=JF�q�teto��l+��S�0D0�F�k�+�RZ8k+q�t0Z�r�DSrRJer�G��ete��DFR�8k�n2+=t��JRoKC2+MG�t0=n��2od�JFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC��0��S+0��i���Z+edeDFRZJFd��teC�dqMFRZJFd��teC�dqMFRZER��teC�dqMFRZJFd��teC�dqMFRZJFd��tet��Jl+��k+K�2K�d��q�r�Zm�+2Kt=�o�JI+�Z=t�JER+Ztk+1�+�ek+K��2E���dDl�MCk+K�m�2�odqM�C=��iut��KtdqMFRZJFd��teC�dqMFRZJFd��t1�tdqMFRZJFd��teC�dqMFRZER��teC�dqMFRZJFd��tew�+D2�������t0ZRo�DSrRim�qJu�fZ5�dqMFRZJFd��t1�tdqMFRZJFd��tew��JI�EiqZ���teC�dqMFRZJFd��tew�+D2�������+K��edeDFRZJFd��teC������ZJFd���q�5tdqMFRZJFK=it�Z5�dqMFRZJF���e00�rK+�8�o��fqIeR��2+q����m�+Jue+qM�M+m�Rd��M2�td�=�Rqq+f=Q8�o���+=RS���R��Z+r�kE+q�SJ��ReD�R�7�R���q5����oE�ateC�dqMFS�J�dD���o�k�rn+d���+Z�ot��e�Z�K�iZRqa�f+qFf+q�R����oKol+�e�q�kR�nZ+Z0kd�=��1n+�eQ��ZFo���e�0nkR�nZ+Z0kd�=��=f��ZJFd��te5���IFE=���dtete���F�Cm�qJ�R�JR�q�+Ke�Z+rdkS+D�E��+��n����kw�q2R=�kE��2q�ateC�dqMFS�J�JfR+=8k�J�FR�q+�+�2+o�r�DS��i�k��ZM�mkf+JoE��ei��qD��R�J�E����Jke0��r�eDFRZJFd��t�qwFRel��q�+KC�t0=��ql�l+0���7Rq=J�K+�8f����qre0�qK+krq��oeIe�+i�+Z�k�qdFR��teC�dqM��Z�t�J�2���Z�qM�+ekJ�2E�t����+�qJ��ZFo���e�0nkR�nZ+Z0kd�=��1n�R���E�5ZEJ�tdqMFRZJFd�it+wZ�q2tE=md�n��Z�RRJSZ�Z�r�J�2+o��0qI+�CRrEinR�JRr�rn+d=��R�Rod�Da�i�+�J7ZR+=k����q�C��ZJFd��te5���IFE=���dtete�+���+krq+�2+o�r�DS��i�k�7��2f�R�J�E�D�di7�fJ7�E�5+�ideEJ5Z�J7kf+Je��QtR��o�C���q5����oE�7�R����f���oE��o�Z7�SI�+l��tSD�odi�l+m���oE��kdDI�E�5+��7eq=�kRIf��DJ�i�e��Q�dqrol�kE��o+�nZi5ZKof�d�tdZ5e���e�+rkV�RE��eRJi���r�RF�eE�fF�qC�dqMFRZakJC2dZ��+qSr�Z8�Kq�RE������k�Z=+K�RqZ0��eD����e�Z��dqE��q5����oE�7�R�kf+JoE��oE�nZ0f�RDJ�Ei�olJ5kR�r�EZ��E�����nZq��f���Ei�e���o�+Z��J�Ei7�di7��Z�Ri��Eint0=7�R��lJ��Eide�Z5k0qF��df+�D�ti�Z�+Q�fJi+������feKZ����a��v�eqr�eiDtK�re��R�J�eS�MtM�k���t��weR�ne��mrq��2��2eiDF�+ikR1���qCeS�MrdeDFRZJFd��t�qwFRel��q�+KC�t0Z�r��ItRZ�R�D�R+=n�K+��2�R0e�eRJl��+5F�V�Rt�ae+qSr�+�FK1fefqee+0nZ�+r�Ro�R+Z�tf+��R��K��ZR�C�S+��EDq�Se�����teC�dqM��Z�t�D���=R�RJDFE=��0D��+e��f2�+�i�e�Z7o0�m���JkE�72=nZ�Zm�E�5+��D�di7�fJ7�lIf�E�K2+ateC�dqMFS�J�I�2=8ZEFK�RZtR�=QRq=wr��S�S+J���+�R+DZ�In2��8�ZIZS+S��Z�+K����r5��+=F�Jf��ZJFd��te5oif��ZJFd��2d=RkRJl��DJ���i2E��r��S�S+J�K+�R0ZR�qF�e�k+���tdete���Z�Z8t��V��eCk�+�tSeJF�I��Rqf�dDI+�CS�K�K��eCk�+�tE=m�R����CodqM��k�+DuRq=tRqCFSeJ�d��2���eqME=0t�J���d������ZJFd���SZ5�dqMFRZJFd��tZ���IF�qk+��E2qZ�r�0�k���+f=Ktde�ZqC�Z�+F�MC�MJ8ZE�SeR����CDR��K��=lSJafZ5R�Z�o0�R���2��e5R�Z�o0��Z��2����t��V��q�Z�+F�MCil�dZE��2feJF�Ii2+��Z�JMZ�Z8�K����Z���D2�SeJ�0J�q+0�q�+q+2rMq�0+Rd���MZMk��teC�dqMFRZJFd��tet��Jl+��k+K�2fqC�q�Z���Z���teC�dqMFRZJFd��tew�RIKtEi�+d�5te�k�JS��C�rE=�2fqwk�e�FR�=R�J�2qe�edeDFRZJFd��teC�dqMFRZJFd��tewo�DDFR�8����Rqoi20��rw�F�I��+r�k�I�RE��rq2�+�eC�DDFR�=R�J�2q�K�+=ZKq8t��VtfqtZqD�R�DkR�Jkte��qM�C0���d+fD���CM��ekR�fF�qC�dqMFRZJFd��teC�dqMFRZJFd��teC���SRRZaF�Id+R��Z+��+t�eF��fF�qC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFK=�e�+�Z�+iFd1�tS�Me��ae��o�Rt�ue0��e�+rkv��fqIeR��2��Jor�e���e�+i��+m�Rd��M2�eR�ne�+i8�+Mk��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dql���JF�Zn2+=t��JRofD2d�ntete���o��q�0D�2E�0���2od�JFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJ�d��2E�to�J7+Ei�Z���teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMF�qMk��teC�dqMFRZJFd��teC�dqMFRZJFd���q�5�dqMFRZJFd��teC�dqMFRZJFd��teC�dql���JF�Z�2Ketk��l��D�k�CE2+=��EJS��C�rE=ER+=tr�eD���=R�J�2q�KZ�=�Z���R�I�2�qno�+f��ZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��tewkEI�e�C=+KiRq�KtdqMFRZJFd��teC�dqMFRZJFd��teC�dqMF�qMk��teC�dqMFRZJFd��teC�dqMFRZJFd���l05��D�Z�C�2+��k��u�RDJ�Ei�olJ7�R�tkRIK+�+kt�CnZq��R�r�E�����ateC�dqMFRZJFd��teC�dqMFRZJFd��tewo�DDFR�8����Rqoi20�RrMqF�Id�+eC�DDFR�=R�J�2q�K�+=rMq8t��Vte��qM�C0���d+fD���Cr��q��q�tEq��dDl�MCk+K�m�02��+C��+ekR�fF�qC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJ�d��2E�to�J7+Ei�Z���teC�dqMFRZJFd��teC�dqMFRZJFd��t1�tdqMFRZJFd��teC�dqMFRZJFd��teC�dqMFR�k+f=�2qZRZR�I�EJ2d��to�����F�+=+f1i2dZ�Z�1��E���Mq�20ZRZ�DSe�CaF�J���ZRZ�ZuFE�rFd�n��Z�o�e�kKZMk��teC�dqMFRZJFd��teC�dqMF�qMk��teC�dqMFRZJFd��t1�tdqMFRZJFd��teC�dqMFRZ��+2���=8ZqMEim���dRqo�r�euod�JFd��teC�dqMF�qMk��teC�dqMFRZk+f=uRq=KtdqMFRZJFd��teC�dqMFRZ��+2���=8Zq�Z���Z���teC�dqMFRZJtMCateC�dqIr��Mk��teCZ0�D�d�JFd��teCoq�k�d8�ZF�l+=�R1n+f+��D���o�k�rn+d����ZFo��D8f+�kE�QtR��o�05�l+kR����MZ7o�i�kf��r���2�Z7�0qKoM�o�tS�Me��aeeDFRZJFd��t�qwkRIK+�+kt�C�k0q2���aZE��t�nZ����q5����oE�7�R��lF�2E��tSJ5oM+r���k���5tR��k��u���f���tS�5oM+r���k���5tReateC�dqMFS�J�JfR+=8k�J�FR�q��+�2+o�r�DS��i�k��ZM�mkf+JoE��ei��qD��R�J�E����J�e0��r�eDFRZJFd��t�qwFRel��q�+KC�t0=n��ql�l+0���7Rq=J�K+m�Rd���qae0�qK+krq��oeIe�+i�+Zqk�qdFR��teC�dqM��Z�t�J�2���Z�qM��ekJ�2E�t����+�qJ��ZFo���e�0nkR�nZ+Z0kd�=��1n�R���ED5ZEJ�tdqMFRZJFd�it+wZ�q2tE=md�n�+�J���Se�Ck+���2�q����f���tS�5oM+r���k���5tR�7�R�tR��rr�CMk��teC�d�DF0���d��R+o��dDI+�CS�K�Kt=�r�e��l+k�Ii2+�0o�Dl��i0t�C�kMoK�Rim����e+����f�E�5qq+SZateC�dqMFS�J�JfR+=8k�J�FR�q�0D�2E�0��ql�l+0���7Rq=J�K�ZS�oeIe0qiFKdtK�eS��e+0n���re����q�eR��tM+=eE��tS�Me��ae��o�2E+�e0��e�+=8K�ot�+eKZ���+�FKG�2E�ueSC=e�+kF�I�eS��eSGn�M+5�t��tSq�e+D�rMFdFdr�2�+�e0��kK+rk��e���Vk0�Dkl���R��Z+rdkE+�RE��+K��ZR0K�E+q�S+f��ZJFd��te5���IFE=���dtetZqD�R�DkR�JktZ�ZR�l+E�kR�q�e�+�Z�+iFd1�tS�Me��ae��o���qae0��e�+rkv��fqIeR��2��Jor�e���e�+i��+rk���M2�eR�ne�+i8�fefqee+��FK�Z�G�o���e+DM��o�2�2�eRJqZ��J�F�R��eM�MFK�mZ+0�tK�neiDe0��8K=Q��q�o�qkf+�K�DZR0nZR+S����2RZ�8����d�D�RZq+f���Rd�kd�S8��nK�����5��+�e�Z�2RZdZ���teC�dqM��Z�t�J�2���Z�qME=0t�J�tZ��Re���+J��Zek�+SS�n+f=7ZR�Cow�S�q�+d�dZ+ZCZ0vn��D�+�C�8�rV�d�S��C�oE��R�DnZi�o�Z8o�C�R�e7o0��tdqMFRZJFd�it+w�+D2�������R+=8�+q2k�o��w�+e+D�����Rd�R0eJeSG�kM+rZ�I�eS��e0qiFKdtK�2t��e0ilk�eDFRZJFd��t�qwFR�lklqmr��ut+Re�0�+�Z0��i�2Eq�o�i8�E��em��kSC���1foEi�ti�ZiQkf2�t���2�=ateC�dqMFS�ak�=ateC�dqIF����S=�RSqw�R�SeRD0��i�2EqwZRI�Ei�rMq�+R���E�IR�8t�ZV��eCk�+�SeJF�Id�Rqf�dDIkfqrFd�n��Z�RRJSZfeJF�Id+R��Z+��+�qeFfZ�t0o��+D7�Ei0�E���ef��q2t�q�R���t0Z�r��It�qSr�C�F�qC�dqMF�ZMk��teC�dqMFRZ=+�q52d=8���i�S��R�JQ22�k�JlZ��8��1V+K�d8�=�o�����0i2E�t�qC�tEeS�R=�R0eKo�iMk�ekFfe�R�2i2�Z�k�ekFfe���e�2�DMofC2��CD+K�d8�=����Fk�q�t�qf�dDI+�CS�K�K��eCk�JS��C�rE=�2fqf��+�t0�tr�qq�t�qFit0+t+0q�t�=KtdqMFRZJFd��teC�dqMFRZ8���KRqoi��J7�DJ�MC�+K��edeDFRZJFd��teC�dqMFRZJ��D�2��Rk�0���ZaF�JdR+=tkE�l+�DJ�d�uteto��l+��aRleateC�dqMFRZJFd��teC�dqMFRZJ��i�te�k��2Eim+�e�R�Fd�DIkf=r�J�RE�k�qD2qDJF�q�teto��l+��S�0D0�F�k�+�SJ8�Kq�RE������k�Z8k+q�t0Z�r�DSrRJer�Gnt0=����2od�JFd��teC�dqMFRZJFd��teC�dqMFRZJFdJ�REqC�dDIk�e�+K+7RqFdZd�2od�JFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�di�a���e�Z��dqE��q5����oE�7�R��lF�2E��oE�nZ0f�RDJ�Ei�olJ5kR�r�EZ��E������k�ZF�f���Ei�e���o�+�tdqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��2+Z��d�M�C0���d+fD���q�e�Z8t�Z�tfqte�+���+krq+��SZ5�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC��0��S+0��i���Z+edeDFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��t1�tdqMFRZJFd��teC�dqMFRZJFd��teC�dqMF�qMk��teC�dqMFRZJFd��teC�dqMFRZJFd��2+Z��d�M��D0�d2�2+Zee0���SC�r�qdR+=tkE���R=0t�J�tdeto��l+��S�0J0��etk��I�qa��fF�qC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJ�d��2E�to�J7+Ei�Z���teC�dqMFRZJFd��teC�dqMFRZJFd��t1�tdqMFRZJFd��teC�dqMFRZJFd��teC�dqMFS�r8�Z�Zt��R�C�+�eQ���ekw�SZR���R���dD���o�k�rnK������Zw�q2R=C��ZJFd��teC�dqMFRZJFd��teC�dqMFRZJ��i�te�k��2Eim+�eVR�F��DI�f=JF�q�teto��l+��S�0D0�F�k�+�RZ8k+q�t0Z�r�DSrRJer�G��ete��DFR�8k�n2+=t��JRoKC2+MG�t0=n��2od�JFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC��0��S+0��i���Z+edeDFRZJFd��teC�dqMFRZJFd��teC�dqMFRZER��teC�dqMFRZJFd��teC�dqMFRZJFd��tet��Jl+��k+K�2K�d��q�r�Zm�+2Kt=�o�JI+�Z=t�JER+Ztk+1�+�ek+K��2E���dDl�MCk+K�m�2�odqM�C=��iut��KtdqMFRZJFd��teC�dqMFRZJFd��t1�tdqMFRZJFd��teC�dqMFRZER��teC�dqMFRZJFd��tew�+D2�������t0ZRo�DSrRim�qJu�fZ5�dqMFRZJFd��t1�tdqMFRZJFd��tew��JI�EiqZ���teC�dqMFRZJFd��tew�+D2�������+K��edeDFRZJFd��teC������ZJFd���q�5tdqMFRZJFK=it�Z5�dqMFRZJF���e00�rK+�8�o�2�Je+q����aem��2+eIe�+i��+5���olq8eRJi+����Mk��teC�d�DF0���d��R+o��dDI�+���+�eRJi+���v�edofe+���Mof���+f=Ke+qS�K����vfefqe2Ke���f�Ko�ef+EeRJi+���vfefqe��Z�o�e�+���tfDnZq7�Ri��Ei�o��7����tdqMFRZJFd�it+w�+D2�������R+=8�+q2kd�JFd��teCo�D���JFd��t=wr+q��lC��J���o�kE�l�l�mkJfR+Z�oqqS��i��RZn��=�Z�Dr���+f=Kt�q�edeDFRZJFd��teC��rK�lC0�d�5te��E�It�Cmr�=��MJR��M�CqR�J�t�e�edeDFRZJFd��teC�dqMFRZJ�d��2KJ+�d�K��+��Rr�F�qC�dqMFRZJFd��teC�dqMFRZJFd�n��=�Z�D�F�qJF�e���=e�0�f��ZJFd��teC�dqMFRZJFd��teC��q7tEi�+frfF�qC�dqMFRZJFd��teC�dql�E=�rq+�t�et���2tE�8�E�ateC�dqMFRZJFd��teC�dqMFRZJF�I��+=w��q�r�Z8��d�Sq�edeDFRZJFd��teC�dqMFRZJFd��tewkRe�+E==��eateC�dqMFRZJFd��teC��0���Dkd�7R+ZVodDu�d�JFd��teC�dqMFRZJFd��R0ZR�+q2+�e0���ateC�dqMFRZJFd��teC�dqMFRZJF�I��+=w��q�r�Z8�RrfF�qC�dqMFRZJFd��teC�dqMFRZJFdJD2��Rk��uod�JFd��teC�dqMF�qMk��teC�dqMFRZ8t�Id��eC�qM�C=��iu��F�k�DltE��rE=�20Zf�d�KF��J�f=�2Ke���el�ED=r0�7Rq=e�0iD�CqR�J�t��KtdqMFRZJFd��tew�+D2�������R+=8�+q2���m+d�ftdZkrRJ���C=+Kq�te�k��D�MZMk��teC�dqMFRZJFd��t=8���I+�qmkJu��Z8�E�ItR�8t�qKt��o��f��ZJFd��teC�dqIrleJF�I��=�o��f��ZJFd���q�5tdqMFRZJFK=it�Z5�dqMFRZJF���e00�rK+�8�o�2�Je+q���+5�+F�2�qCe�+i��FdFdI�olqCeE�lr�+m�dr�2��+e�+��K�o�RSq�e+DM�0eDFRZJFd��t�qwFRe�+�C0R�D�t=�r�e��l+k��5Z�+��d�e�iQt+=�kd0KZ��J�Ei��di���Cu�Seit��7tR��kRIf��qr��iQt+=�kd0K��q8�E��e+����f�RV�R�i�ef��ki��E�5+��DR���0q7�lJk�E��t�JnZiJtdqMFRZJFd�it�0VtdqMFRZJt�IiRR�Vo�q�FE�0+K+Q��Z�ZEJDF�Z�+d��R+Z0���Mkd�JFd��t=KtdqMFRZJFd��teCk�rK�lDJ�MC�2Ket�R�l�Semr���2�q�Z��IFE�0+K+�2qZ+�d�K�R�a��fF�qC�dqMFRZJFd��2+Z��d�I��C��0J�2fq�k�rK�lDrFd�7�MJ�Z+Dl��e��Re��F���M�MZMk��teC�dqMFRZJFd��tetr�+IRZFd�n��Z�o�e�rw��+�JDRMe���DS�leaF��n��oiZ�rK�lDJt���2E�tZE��F�=J��D�2E�t�E�ItRZJ������=8�+DSe�Ct��qQ��=ekD�kKZMk��teC�dqMFRZER��teC�dqMFRZJ���K2KJRedeDFRZJFd��teC�dqMFRZJF�I��=���C�FR�0��=�2f0�8�qSEq2rd�5RqZVod�M���0+K�f2Ke��0qI�lCm�+J��lqw��ql�lqkR���tRdi���2t�qk+K�Ed�kE�2�Rq8�R�fF�qC�dqMFRZJFd���q�5�dqMFRZJFd��t=w�+DS���m+d2�R�J��dD��Re���=5R��eoqC���er��=7��eCk��IkMCS�0J0��eCk�JS��C�rE=�2fqnedeDFRZJFd��teC���SRRZa�d����o�r��M���R�JQ2ZR�0�el=aRleateC�dqMFRZJFd��teC��e�+�C0R�D�tetZ�q2ED=���u+fD����f��ZJFd��teC�dqIr��JFd��teC�dqMF�qkR�Ii2�dd���SrSZm�KqnRqe�k+=ItEemkqKtetr�+ISC�Z���teC�����d�JFd��trVo����ZJFd��te5�K�Je�r�Rt�SeRI�+M+��V����eRJ�F��ode�eweSC�F��=�KI�20ZMeRJi+���v�eS��+Z�r��2R�C0t���kd0K��GfF�JFd��teCoq�F�qkR�Ii2�dd��rK�q=+K+7t�Da�i�+�J7Z+Zek�+SRDq8K=Q��Z��f+=�R��2Sq5�R��kR+=t���+dqK��Zek�+SRDq+dq��R05���S2E��2R���+Z�Zt�StSe��R�����8�d�=2�qq+f��8�+Kol+�ele���ZJFd��te5oif��ZJFd��2d=RkRJl��DJ���i2E��r��S�S+J�d�Q��Z�rE�2�+aF��ateC�dqIod�JFd��teC�dqMFR��r�iutF���rK�q0�KqK2�e0��eDklZ=t�JE��o�k�JS+R�8rd�7t�enedeDFRZJFd��teC���SRRZat�V�2��wZEe�����r�iu��eC�EF��l+k�K0K2fq�o�CrMqeF��fF�qC�dqMFRZJFd��teC�dqM�Cqt����eCk��lklC���GnR+Ztk+1K�E�k+f=Ktde0k��SrSZ�r�iut=0o�J���0�IVtZko�J��D0t�q�tRdi���2t�qk+K�Ed�kE�2�Rq8�R�fF�qC�dqMFRZJFd���q�5�dqMFRZJFd��tZRo�r�+�ZMk��teC�dqMFRZJFd��tetr�+IRZFd�n��Z�o�e�rw��+�JDRMe���DS�leaF��n��oiZ�rK�lDJt���2E�tZE��F�=J����Rq=C�dq�r�0R�D�Rqo�r�J��RD0R��Dt�qnedeDFRZJFd��teC������ZJFd��teC�dqIF�qk+��E2qZ�r�0����8��q��lq�2�+�o��a+�1��lq�odqM�Cqt�Jm�2�odqM���R�JQ2ZR�0�od�JFd��teC�dqMF�Ckk�5R�I�rRJ7R�8�K����Z���D2�SCFk0+��SZ5�dqMFRZJFd��teC�dqMF�qkR�Ii2�dd�dDlrR=0�d�5Rq=�20�RrMZMk��teC�dqMFRZER��teC�dqMFRZJt�D���=R�RJDF�CmR�JK2�Jt���MtEe��l=�tRqf�dDI��0F��fF�qC�dqMF�qM����teC�di��f�Mk��teC�d�D����t+=��R��l+�+���t�D���J��RD=e���t�Z7Z0DF�lJk�d�JFd��teCoq�2+�D���q�0�q2�+�+Kqn8�r�k�+S2f��kS+�ZR�o�+�t�D��R����o����q+S����5�R�wom�q+ED��R�5ZR+MZR+StlnK��Z�Ck0�=e�=q�+D���Vk��SZ����d�Q�+Z�k0��FRD�2����R�ko��=+�e�2��Z�Ckq�5�dqMFRZJF���=wk�e����JF�JfR+Z�oqqS��iJt�V�2���Z+D���i�o��7���Q��DJR�int�CateC�dqMFS�J�J�Rq=trRe�e�Z���q�20ZRk�JD���Dt0��kSG5�f2�+�i�e��2��R�Mof�d�2+eVe0i��M�r8��R�+qRE��o�r�+�JFd��teCo�D���JFd��t=wr+q��lC��J���o�kE�l�l�mkJQ20ZRk�eD�����d�Q2�J��qD�kd�JFd��t=KtdqMFRZJFd��teCk��IkMCJ�MC�t0=t���2�S�F��nRR���E�l+�emF�Z72do���0���i�R�q�t�0dk�el�ED=r0�7RqenedeDFRZJFd��teC��e�+�C0R�D�t=t�R�Sr���r�J���o�o�IK��i�kRZn��=�r�ZuFE�a����e0�E�S�EDkR��ut�DKtdqMFRZJtMCaF�qC�dqMFS�akR�ateC�dqMFS�J��Z�om�Stf��+K����++or5�feJ��d2Ee�+Z�r��2R�C0t��ateC�dqMFS�J���Rk�=�R���RJ���o�k���eED�+�ei��q�Z�+q�SJ��=Q��+=k��SeEi��++i��r5��+=F�In�+�Q���0�f+qFf+q+d=�8�r�kl+�FRD�2����R�ko��q���n+f���d�CkE+S�D��d�Q���dk�+�R�C�2+�K����o�+�FRD���ZJFd��te5���IFE=���dtetZ�qS��J�+���RMJ�kE�l�MJ=R�I�t=�r�e��l+k���ZSC�EiakEiQt+=�kd0�Zq�S��C=R�D���=7Z��J�E���f��o��rZ��8����r�qd���t��J��Eim�q��2qo�Z0i7+�Crkf=���o�kE�l+�qR+R�7e0�l�K�K2���e�e0iSrK+me���w��eiDeK�+dd�R�JDeM�MFdeDFRZJFd��t�qwFRel��q�+KC�t0Ztk��l�RZ�r�J�2+o��0q�K=5��f�R+q2R=�2+�K����o�+�+SJ�+d�����Vk0��8�0n+���Zt�V�S+aFR�Mt�D�R��Dte8��DS�lem�iD�dD7���=kE���lJ�kd�5��qikEi�o��7���Q�E�5+�intSD��MZmkf�a�lC�t0inZq��lIf��C�tKZ��diu�Rim���Q2�Z5Z��E��D�od�JFd��teCoq�F�qkR�Ii2�dd��q��S�m����2Eq��Rq8��iDow�5Z�+��d�e�C��q��eKZ���+=f1���e�e0�n+�+kZR+k��K2KJ+tdqMFRZJFd�it+wr��It��0rd��q=�kqD2F�C=+Kq�t��+R�qkS��8��a�t�Stl+�+K=�Z+odZ��a��q2J�Z���teC�dqM�f�rZ���teC��eI+Eqm��iQtZkrRJ���C=+Kq�t=�r�q2t�C�R�JftdetZ�qS��J�+���RMJ�kE�l�MJ=R�I���eCk�Dl��C�+MC7t�qntdqMFRZJtleateC�dqMFRZJFd�nR0Z�r�q�F�qJF�JnR+=tk�Cr��8��=7t�D5�0qMrl�kR���t�0dk�Dl��C�+leateC�dqMFRZJFd�n��=�r�q�r�Z8t�J52+=eZ�C��E���Mqu2ZRo�JM���J�d�dt=�r�q2t�CJFK��te�ZDIFE=�r���R�JR�qqS��C=R�D���=nZDlE=0�d+��fZ5�dqMFRZJFd��tZ��qMk�Dmr�����e�k��IkMCa+M�Vt�=KtdqMFRZJFd��teC�dqMFRZ=+�q52Ket�Rel�SDaF�I��=t20�RrleJF���2��8ZEeD2fCJ�MG���Co�+f��ZJFd��teC�dqMFRZJFd��teC���lklqmr�e�2E�Rrdq�+���rq�f��Z�ZEJDklCmR�JK2�Jt���Mt�ZJFdqKtetr�+ISCa+leateC�dqMFRZJFd��teC������ZJFd��teC�dqIr��JFd��teC�dqMF�CkkR=u��=8Z�IK�R�8t�Id���KZ�=�Z�Z8rV�R+=8r��SeR��kRe�tF��+CFSCqZ���teC�dqMFRZJFd��tew�+D2���������=8r+Dod�JFd��teC�dqMF�qMk��teC�dqMFRZ��+2���=8ZqlRE=mt����fZ5�dqMFRZER�ateC�dqM�l�a����teC�dqM��o�2�0�e+qDr�+���r�o�JDeRJi+����Mk��teC�d�DF0���d��R+o��dDIFE=�r���R�J+��rK�q=+K+7t�SeEi��++i��Zek�+SRD���ZJFd��te5���ItEi0t���2EqwkRI��Sek+d��t�=tR��+d�78�05���S2E�7�q0+�=�Z0qu�lCrt��dt�=�kSC���1foEi�ti�ZiQkf2�t���2�=ateC�dqMFS�J�I�2=8ZEFK�RZtR�=QRq=wr��S�S+J���+�R+DZ�In2��8�ZIZS+S��Z�+K����r5��+=F�Jf��ZJFd��te5oif��ZJFd��2d=RkRJl��DJ���i2E��r��S�S+Jt�V�2�ewFEeIFR�8t�J�R�Jdk���+SCMk��tewedeDFRZJFd��teC�dDI��0Fd��tetr��l�lDr+M+�R0Z8�Er�k�im�fZ5t�qwk�J�FE�mrdDQRqri�E�l�SZJF�e�t0=wk�0�Z�=krq+��fZ5�dqMFRZJFd��tZ��qMk�imR�I��+e�k��IkMCa��fF�qC�dqMFRZJFd��teC�dqItEi0t���2Eqwr�e7+Ei�Z���teC�dqMFRZJtMCateC�dqMFRZJFdI�2=8ZE��F�+kR�e�q=�kqD2F�C=+Kq�tdZ�Z�el�l�k��+5tRDK�dqDZ�Z8t�Id��eno��f��ZJFd���q�5tdqMFRZJFK=it�Z5�dqMFRZJF���e0iM�M�r+KeJ�0��2��ko�0�+�JFd��teCoq�F�Z�R�D�2qeCk�el�ED=r0�7Rq2��qD2t�J=+d��t=�r�e��l+k���ZSC�EiakEiQt+=�kd0�Z�+�8���ef+�ei�r�+��V�RS��eKZ���+re0��2R�MeKZ�2�����mK�Rqo�kqDSe�Cr���d�l0�Z�JI+E�=+K��R+Z�kEIK+�+0t�V�2E�eZRJS�R�k+fZ�+Z�kEIK+�+0�2i��Z���J7�C�r02�2�e8+�D2t�J=+d��tm�Dkl���R��ZRqf���DrSFn+���Z+r5��+q2R=�2R�nFdJRq=8rE�S�E�fefqee+0n��+=�o���qCeiDo�+�+KF�R��re�+i����v��M�reSCDZ�+=2r�oM��e0��8K+=d1���qae+0���+��Sr�2��+e0�n�M+�kt��eqr�e0D�2�+5ZR2��fq8eqD�Z�+rr0o�o�q�eSJakM+����o�0ne���e�of�d�Rt��ei��M+r�Ro�o�Jne+qM��0��S�r���R0=8ZE�SS+�r�iu��ZRZ��Skf�r��V�2Ket��JR+0D+rq������kqD���ZJFd��te5���IFE=���dtetk�0K�Cmr���2Ket�R�SeR�J���Ekd�=+�DqKq7��Z�kE+q��e�8K=Q��Zfo�+=RSInKq5��Z�o+�Z+DIt��=+�JdR+o�o�D�+�D0���Ik0�SZR��K+D�R+=k��5�dqMFRZJF���=8���I+�qmkJD2�I�o�DS��+J���Jkd�St�Vnkt����Zm�E�t�R�SRl��tSD�o�iI�f�aR���e+������+qS�lDkR��teC�dqM��Z�t�J52�d�r�e�F0�q�d��2d=to�I�e�o�Rqeke0�nZ�+5oRI�RR�eRJ�FK+mk�F��w��eR�lZ0eDFRZJFd��t�q5Z0eDFRZJFdJf��Z8o��S�RZk�q��R�eto�I�e�Z�r�J�2��t+�D2t�J=+d��tdetZ�qS��J�+���RMe���e7R�C�rq�t�q�odqME=�r�J�2�Id�D�2fCMk��tewedeDFRZJFd��teC�dDIFE=�r���R�JR�Er�+�q0�RiQRqeC�qM�Z�+d��R+Z0��1K�Ei��qD�R�J+�+C�2��F�Re7��q��diSe�Z8���n2dZ�kE���E�k+�quRq=8rE�S�Ei�Z���teC�dqMFRZJF�J�R�eto�I�e�ZFd�nR+Z�r��S�S+F+MC7t��V�0Du���JFK��te�ZDl�ED0��i�2EDKtdqMFRZJFd��teCk��IkMCJ�MC�t0=t���2�S�F��nRR���E�l+�emF�Z7tZ�Z�qI��C�R���2KJR�R����Dkd�7��qtZ�qS��J�+���RMe���e7R�C�rq+�t0Z�kE�l�l�mkR�fF�qC�dqMFRZJFd��2+Z��d�l���0+K�tdetr�+ISCFk0+��SZ5�dqMFRZJFd��teC�dqMF�CkkR=u��=8Z�IK�R�8t�Id���K��=�Z�Z8r���2�d��D�k�ZF+MG��e�edeDFRZJFd��teC�dqMFRZJFd��tewr��It��0�J�Rq=���J2k�DkR�I�2+o�Z�l�l���f=�R0Z+�dqQo�ZJkSZ�t0=te��MkfC�Z���teC�dqMFRZJFd��tew�eDFRZJFd��teC������ZJFd��teC�dql���at�V�2��wZEe����0t�1�+fDw��iMFR�+r�J�2��to�J�2�Z�rq������kqD��Z�+K�Rqo�r�D�k�ZF+MG��e�edeDFRZJFd��teC�dqMFRZJt�D���=R�RJDF�C��q���fZ5�dqMFRZJFd��t1�tdqMFRZJFd��tew�+D2�������RE��o�r�+�ZMk��tew�e���ZJFd���lq5oeDFRZJFd��t�q���Zk�E��2q�+�JR�R����DkR��teC�dqM��Z�t�J�2���Z�qM�Z�+d��R+Z0��1K�Ei��qD�R�J+��rK�q=+K+7t�SeEi��++i��Zek�+SRD�a��7e�7Z��kff2E�7t�e�kS��tdqMFRZJFd�it+wZ�q2tE=md�nR+Z�r��S�S+Jt�V�2���Z+D����7e��kKFKkf�k�Eint�e7oMZ�Z��J�EiK��=���5kf�=��i7t�=w2E�t�RI����m+d��2+Zk��rK+lC�elD�o�C�kf+��E�����ateC�dqMFS�J�J�Rq=trRe�e�Z���q�20ZRk�JD���Dt0��kSG5�f2�+�i�e��2��R�Mof�d�2+eVe0i��M�r8��R�+qRE��o�r�+�JFd��teCoq�F�C=t�D��Mee��J2k�DkR�I�2+o�Zq��++��Rq�om�=t�dn+d=�Z+oV�f+Sel+���5�R�wo�Z5�dqMFRZJF��i�lZ5�dqMFRZ�t��D20Z�k0qlR��m�V�2+o�ZqI��CmrdJRq=8rE�S�EiaF�JfR+Z�oqqS��i2rd��2��ko�0�+�q8�ReKtetk�0K�Cmr�F�t�q�o�eDFRZJFdIfF�qC�dqMFRZJFd��t0=wk�0�Z�=krq�E2KJR�R����Dkd��tetZ�qS��J�+���RMe���e7R�C�rq��e��qC�2���kRe���od�dD�e����d�Q2�J��qDR�SDkR���2+Z����f��ZJFd��teC�dqME=�r�J�2�Id��C�FR��+dV�2+o�Z+Cr��8��=7t�D5�0qMrR=JF�e�t0Z�kE�l�l�mk�eateC�dqMFRZJFd�n��=�r�q�r�Z8t�J52+=eZ�C��E���Mqu2ZRo�JM���J�d�dt=�r�IKF�DkR���2+Z���qM2f+8t�J�R�Jdk���+E��rq������kqD�e���+dV�2+o�Z�od�JFd��teC�dqMF�Ckk�5R�I�rRJ7R�8t�Id��en8d���MZMk��teC�dqMFRZJFd��tZ���I��C��0J�2fq�k��IkMCS�0�0��eC�qJ2t�qmrdq7t�eC�+CrlZaRleateC�dqMFRZJFd��teC�dqMFRZJt�J52�d�rdqleRi0�J��Z���eI�Cmr��52+oiZ�Jl�R�k�ZD�fqCkiMFR�0t�1�t�enedeDFRZJFd��teC�dqMFRZJtMCateC�dqMFRZJFdI�F�qC�dqMFRZJFd��2+Z���rK�q��Kqutdetr�+IEJe��CKte0+��l�SZ���i�R�qw�qD2t�J=+d����qwtEJ7Eim�q�7t�eC�+CrlZaRleateC�dqMFRZJFd��teC��e�+�C0R�D�t=t�R�S+�ZMk��teC�dqMFRZER��teC�dqMFRZJt�D���=R�RJDFE��+f=uRq�KtdqMFRZJtMCaF�qC�dqMFS�akR�ateC�dqMFS�J��ZnkE+StS��kS+�Z+Znkw��t�D��R�����Skw��ef��+dqK��++Z�+D�R����ZJFd��te5���IFE=���dtet�+DSrS�0���ERE��o�D�F�D0t�D�2E���K�aem��2+eIe�+i��+�21��l�e0iqZ�+me0+Mk��teC�d�DF0���d��R+o��dDl�l��r0�KRMJto�eDF�D0t�D�2E���K�K��t+eteiDtK�o�eS+�eRI�+�of�d�Rt�MeSCSZK+�8f2��l+�e�+�F��+��fefqeeEJ�R��aeE��2+e�e+qDr�+�kSo�2�Je+q����ZS�2�JReKZ���+=2r�oM��e+D���F��l+k�K0K2���t�D�K=5��ZCZ0�StR�qK�Q�Rq�ZE+=RSIn�RD��R+m��q2R=�2RZ��R+mo�+S�Riq8K=D����km�=FR�q2+q�8�qIo��SZ��qkR���+rd�d��el��2+Z�8�rfZl+Skf+q8K=D�t�Vk0�SSC�+dq��+rV�S+=tfCq�++�R��teC�dqM��Z�t�D���=R�RJDF�D0t�D�2E���K+5k+��RS�Ee0�n+�+kZR�2�J�e+qa�K+k�Rv�e+rie0q�����d�eS��eSC=tM+rZ�I���+�eRI���of�d�2+eVe0i��M+5oRI�RR�eRJ�FK+mk�F��w��eR�lZ0eDFRZJFd��t�qwFR�lklqmr��ut+Re�0�+�Z0��i�2Eq�o�i8�E��em��kSC���1foEi�ti�ZiQkf2�t���2�=ateC�dqMFS�ak�=ateC�dqIF����S=�RSqw�R�SeRD0��i�2EqwZ��S�let�RiKRqe�k�e�+��mr�J�RMJko�Jl+SeJF�JK2�J�k�J��R�=R�0�t�q�o�eDFRZJFdIfF�qC�dqMFRZJFd��t0Z�Z�DMF�qJF���R0ZJ�di2�RZ8���n��Z�o�e�rw�2rqJ�����kqD�e��Jt�Ii20Zf�dD�e����+�d2�et��1�R�Cm��+�t�qC�0iD�emr0��202�k��2t�ZMk��teC�dqMFRZkR�=�RSq�k�0�rR�rFd�n2�eRr�eI+�CrFd�n2��Rr��2t�+2r�D�2�qnedeDFRZJFd��teC���SRRZaF�J�Rq=trRe�eR�0���t+F���M�MZMk��teC�dqMFRZJFd��tZ��qMk�imR�I��+e�k�IK+�C�t�2�t�e�edeDFRZJFd��teC�dqMFRZJFd��tewr��It��0�J�Rq=���J2k�DkR�I�2+o�Z�M�E��e����K���RV�R���t���kd�m�lJ5�E�5e���R0Zr���5�Ei�RqC�k+0K�f2����5RS=�d���E�5+���t�D�kiE�R�aa�int�J�k�JE�R�J�E�D2R�5��qV��+l+E��R0o�ei�kK�o�oMJ�eqD��of�R�8�R�fF�qC�dqMFRZJFd��teC�dqIr��JFd��teC�dqMFRZJFd��RqZV�qD2od�JFd��teC�dqMFRZJFd��teC�dqIE����0Kto�����F0�q�d��2d=to�I�e��=+K�f20o�k�D���q���D��eCk�IK+�C�t�2�t�enedeDFRZJFd��teC�dqMFRZJtMCateC�dqMFRZJFdI�F�0VZ0qMFRZJFd��tewo�DDklD0t�Df2�ee�dDl���0t�Ii���KZ�=�Z�Z8rqD�20Z+��eI+�em���n��eCZdqI��J=R�JfRqZ�ZD�k�ZFk0���SZ5�dqMFRZJFd��tZ��qM���m�KqQR+ZV�qDl�lqF+MC7t�q�edeDFRZJFd��teC�dqMFRZJF�JK2�J�k�J��R�=R�q��ew�q1�0D+�MqE�fZ5�dqMFRZJFd��t1�tdqMFRZJFd��teCk�Jl�RD�+f=ER0Z��q�r�Z=+K+ER+=8�+q2k���r��D2Ket��M�emr0��202�k��2tSeJFKCVt�eV20D����rF���R�e0����Ft�JF�JK2�J�k�J��R�=R�q���qCk�Jl�RD�+f=ER0Z��in0D+k���+0��ZR�+�t+0Jw+R��++Fit�ZMk��teC�dqMFRZ8�f=�R�J�o�1�R�Cm��+��eCk�Jl�RD�+f=ER0Z��qMe�Z���uRqo�k�JS+R�8t�D�2qo�r�DR�R�=+f=�t��KtdqMFRZJFd��tew�+D2�������t0ZVZq0���e2rqD�20Z+edeD�l�JFd��teC�dqMF�qMk�=�teC�dqMFRZJFdI�2=8ZE��F�+kR�e�q=�kqD2F�C=+Kq�tdZ�Z�el�l�k��+5tRDK�dqDZ�Z8�K0i��=wrR�MkfC�Z���teC�����d�JFd��trVo����ZJFd��te5�K+=dV�RR0�e�+�r��J�I�RR+ee�+i��+�21��l�e+qDZK�aem��2+eIF�qC�dqMFRZakJC2dZ��+qSr�Z8�f=�R�J�o�1�R�Cm��+�2Ket�R�SeR�J��++Z�+D�R�qK�DZR+=k��=+�1nKZdZR0Kom�S8�=C��ZJFd��te5���IFE=���dtet�+DSrS�0���ER0Z��qI��C��Ri�R�q��fJ�e�i�tR��kM�u�E�5+���e�Z�ZqD+tdqMFRZJFd�it+w�+D2�������2Ket�R�SeR�J���Jkd�St�Vnkt����Zm��+SZ���+dei��Z�o�q+S�qk+n�R�Ik0�q2R=�2+Z�8�rfZl+DrfIn+������Vk0�Skfeqk�C��R�a�t�Stl+�+K=�Z+odZ��a��q2J�Z���teC�dqM��Z�t�J52�d�r�e�F0�q�d��2d=to�I�e�o�Rqeke0�nZ�+5oRI�RR�eRJ�FK+mk�F��w��eR�lZ0eDFRZJFd��t�q5Z0eDFRZJFdJf��Z8o��S�RZk�q��R�eto�I�e�Z�t��u2+ko�Jl+R�8�f=�R�J�o�1�R�Cm��+Ktet�+DSrS�0���ER0Z������ZJFd���SZ5�dqMFRZJFd��tetkEJSRZFd�7R+ZtkqMrSDJF�e�t0=t���2�S�F�MqnRq=ko�0�+S+8�Jf��=��dqM2f+8�f=�R�J�o�1�R�Cm��+�t�qC�0iD�qk+K����ZR�qDl�lq�Z���teC�dqMFRZJ��2dRqZe�dDl���kFfZ�t0o�rR�IF��0FfZ�t0=8���I+�qm�M0�R+=Jo��f��ZJFd��teC�dql���JF�Zn2��Rr��2t�+2r�D�2�q��+CFSCqZ���teC�dqMFRZJFd��tewo�DDFR�k+K�f��=n�dDl���0t�Ii��eno�+f��ZJFd��teC�dqMFRZJFd��teC���lklqmr�e�2E�Rrdq�+���rq�f��Z�ZEJD��V�t��KeS��F�+�8���olqKe+D�ZK+�21��l�eSCDZ�+kF�d�2�J�e+D��Kof�d���qSe0qM���aem��2+eIeqqq���o�eS+�eRI�+�+�kS2�R0e�eR��R�+k�Rv��l+�e+0ntK+�kS2�R0e�eR���M+����tK25eqDqZ�+�r0F�RE��t�qnedeDFRZJFd��teC�dqMFRZJtMCateC�dqMFRZJFd��teC��DS�lDkRleateC�dqMFRZJFd��teC�dqMFRZJt�J52�d�rdqleRi0�J��Z���eI�Cmr��52+oiZ�Jl�R�k�ZD�fqCkiMFR�mr�2�2d=Rr���kKZMk��teC�dqMFRZJFd��t1�tdqMFRZJFd��tew�eDFRZJFd��teC���SRR��r�J�2do��0�M��0R�Jf��=t20��rleJF���2+ZV��qIF���rE=�R0ef�d�MF�D=rEif2dZRkdiD2fCJ�M�ft�=KtdqMFRZJFd��teC�dqMFRZ8t�D�2qo�r�DR�R�=R�q��ew�E�St�D0t�q5t0=8��JS��Ck+�qn2+=JodqMrl=a+MG�t�0V�0q���Z8t�D�2qo�r�DR�R�=R�q���qCk�e�+��mr�J�RMJto�eDe��r�RrfF�qC�dqMFRZJFd��teC�dqM�qk+K����ZR�qD��lekd��tet�+DSrS�0���ER0Z��qMe�Z���uRqo�k�JS+R�8�f=�R�J�o�1�R�Cm��+��fZ5�dqMFRZJFd��teC�dqMF�qkR�Ii2�dd�dDItEim+K0�Rq2��R�S��i�Z���teC�dqMFRZJtMCateC�dqMFRZJFdI�2=8ZE��F�+kR�e�q=�kqD2F�C=+Kq�tdZ�Z�el�l�k��+5tRDK�dqDZ�Z8�K0i��=wrR�MkfC�Z���teC�����d�JFd��trVo����ZJFd��te5�K+�kRo�RE�ne0��8K+=d1�RR+ee�+i��+�21��l�F�qC�dqMFRZakJC2dZ��+qSr�Z8t�D�2qo�r�DR�R�=+f=�t=�r�e��l+k��5o�If�lCJ�E���������Ekff2E�dem��ZE��tdqMFRZJFd�it+w�+D2�������RRd�ZEJl+E=mk��kD���q�a���e+�����r�e7+E�fefqeeR���M�r����f�me+qqe�+m�r�2E0de�nkM+5�f�Mk��teC�d�DF0�0��=�2�e0�0q�+���rq�f��Z�ZEJD�lC�tE�5o�25�Rq�ZEi�efJ�Z0qr�l+rkE��e0=����VtdqMFRZJFd�it�0VtdqMFRZJt�IiRR�Vo�q�FE�0+K+Q��Z�ZEJDF�qk+K�����R���S��iaF�J�RqoiZE�l+E�k�RiKRqentdqMFRZJtleateC�dqMFRZJFd�n��Z�o�e�rw��+�JDRMe���DS�leaF�e�2�d��dD�e����+�d2�et��1�R�Cm��+��fZ5�dqMFRZJFd��t=8���I+�qmkI�2��R���f��ZJFd���q�5tdqMFRZJFK=it�Z5�dqMFRZJF���e00�rK+�8�o�tK2neR��tM+mrqF�RR��eRJlM+m�+2����CeSC�t�+5eEV��l�e�nkM+5�f�Mk��teC�d�DF0���+2���=8ZqI��C��Ri�R�q��f2�+�i�e�+�+�+u�Ri5�E�52�ateC�dqMFS�J�I�2=8ZEFK�RZtR�=QRq=wr��S�S+J���+�R+DZ�In2��8�ZIZS+S��Z�+K����r5��+=F�Jf��ZJFd��te5oif��ZJFd��2d=RkRJl��DJ���i2E��r��S�S+Jt���+�J�k���+�C��RZ�F�qC�dqMF�ZMk��teC�dqMFRZ8��D�20ZRZ+qSrRiJ�MC�t�JkZEe��R�kR�JE��Z��qDl�RD0+K��2E��ZR+lrSe8��eateC�dqMFRZJFd�n2dZ�r��MF�qJF�e�2KJtkqq2tE�r�Re�t0Zko�Jl+�+�+K���fZ5�dqMFRZJFd��tet�E�l��q0�qJ�2qZ+��C�F�Cm�qI�R+Zf��JS��D���0�2+oi���I�q0+�+�t�D�Zd��FSC�Z���teC�dqMFRZJt��KRqZRZd���SC�Z���teC�dqMFRZJ��J�t=KtdqMFRZJFd��teC�dqMFRZ8t�Id��eC�qM�C=��iu��F�k�DltE��rE=�20Zf�d�K+�C�R�2�2�Iik��l�SqJ��Ii2q=C�dD�e����d2�2enedeDFRZJFd��teC�dqMFRZJ��i�tde���J2F�Cq�Zn��=�r���FR�8kJu��=8Z�IK�R�8t�Id���KZ�=�Z�Z8r+�8tZ�o�D2tED=�d���+ewk��SrSZk+�����oVe0qM2f+8t�J���Z�o�qM��qF+����SZ5�dqMFRZJFd��teC�dqMFRZJFd��2+Z��d�I��C��0J�2fq�o�J2F�emrqJ�tdeJedqMtSeJF�I��=�o�iMFR�m�q�K20ew�RI���CJ�K+�R0Z+��e�+�C0R�D�RqZ���q7k�ZR+�i+Rq=�r��2+�Cmr�����Z�ZEJnt�q=+�J7Rqe�o�qM��qFdJ�R+ZV�qD��MZMk��teC�dqMFRZJFd��teC�dqMFRZJFd��t0=te��MF�qJ��D�20=����f��ZJFd��teC�dqMFRZJFd��teC������ZJFd��teC�dqMFRZJFd��teC��DS�lDkdIfF�qC�dqMFRZJFd��teC�dqMFRZJFd��teC���lklqmr�e�2E�Rrdq�+���rq�f��Z�ZEJD���0+�i���=tZEJS��Cmrdq�R0=RZ�eMFEi��0D�2�D5�dD�FS+J��id2dZVZqDl+R�Jk�e�tRqf�dDI��0F����fZ5�dqMFRZJFd��teC�dqMFRZJFd���q�5�dqMFRZJFd��teC�dqMF�qMk��teC�dqMFRZJFd��tZ��qM���0t�1�tF��+C�FE��+f=uRqen��+f��ZJFd��teC�dqMFRZJFd��teC�di�a���RR��ZE�+�M��+r�RR��eS��F�+�8�iMk��teC�dqMFRZJFd��teC�dqMF���r�=�Rq=C�d�FSZe���f�enedeDFRZJFd��teC�dqMFRZJtMCateC�dqMFRZJFd��teC�dDl�����0D�2E�t+R�SrRiJ�MC�2+o�r�����ea�K��R�e8ZE�l�l�k�1�2��R����FS�J��+f��Co��f��ZJFd��teC�dqIr��JFd��teC�dqMF�e=��iKRqe�k��IkMCJ�MG��ew�+qS�lDkd��tEqC�dDl�����0D�2E�t+R�SrRir�Ju��Z��R���Cm+�V�EDCZd��FSCa+leateC�dqMFRZJFdJu20ZR��eM�fqa+leateC�dqMFRZJFdI�2��n��+f��ZJFd��teC�dqMFRZJFd�n��Z�o�e�rw��t��K20+ko�Jl+R�8t�J���Z�o��f��ZJFd��teC�dqIr��JFd��teC�dqMFED�R�JQ2eC��J2k�DkR�I�2+o�ZqMEiq�d��2d=to�I�elCqZ���teC�dqMFRZJFd��teCk�J2�E�J�MC�t0ZRe�0�+�Z0��i�2E0�8���+�C+��u2KJ��qD��fC�Z���teC�dqMFRZJFd��tewo�DDFR��r�J�2do��0�M���rEeKte0k�I�+�DJ�K+���ew��+l�lD0F�e��DCo�+f��ZJFd��teC�dqMFRZJFd��teC���lklqmr�e�2E�Rrdq�+���rq�f��Z�ZEJD��V�t�2Ke+0n+K�aem��2+eIeRI�+M+��V�20ZFeRJ�+�+5eEV��l�e�nkM+5�f2�2+eVe0i��Mof�d��MJ�e+0nZ��J�K0�R�qCe0�=F�+r8f�o�r�e0��8K+=d1���qd�Me�k�0���qk��+mo�+S�Riq�R����q�Zt�S���q2R��8��kkdvn��D��Re���q���=8ZEIK+��7R+C��+D�Z��J�EiQe�i5�dqF�Ri5�E�ie0��Z0D5�0�od�JFd��teC�dqMFRZJFd���q�5�dqMFRZJFd��t1�tdi���ZJFd��teC�dqM�C=��iu��F��+DSrS�0�+�l2+ZV���M�Z�R�J5t��KtdqMFRZJFd��teCk�0��S+0������eC�qlR�Cm���ER�JRr�1����m�qJ�2E�t�0�ME�=+f=�2E��Z�D�kKZMk��teC�dqMFRZ0+K+K2+o�o0�ME�=+f=�2E��Z�D�kKZMk��teC�dqMFRZ��+2���=8ZqMEDmr��Rqo�r��f��ZJFd���q�5tdqMFRZJFK=it�Z5�dqMFRZJF���eS�Me�+5r��o��IeSC�oK�Je�r�Rt�Se0��8K+=d1�2�Je+q���+m��G�2E�ReR��F�+����tS�Me��aeeDFRZJFd��t�qwFRel��q�+KC�t0=t��+IRZ�r�J�2+o��0q�2+Z�8���o0�SZ��n�Se�Z+rdo�Z5�dqMFRZJF���=wk�e����JF�JK2+Zd��qlt��mr�=�R+od�K+�kS2�R0e�eS�DkMf�d��ow��e0�nk�of�d�2�+�e0��kK+rk��k��K2KJ2Z��J�E�Ko�Z�kM�m�RV�R���e0qateC�dqMFS�J�J�Rq=trRe�e�Z�R�D�R+=n�K�r8��R�+qe+q���+kFfI�tS�Me��ae�+=8K���Z�e�+i��+�+fo�ef+�F�qC�dqMFRZakJC��Z��RIK�lDJ�+2dR�JRZ��l�l�mk����D7�fI�a��Dol��kMZ��l�J��i���DnZ��I�RZ=���JFd��teCo�D���JFd��t=wr+q��lC��J���o�kE�l�l�mkJ7Rq=t��I�Ei�r���+0ZRe��M���0��2d��ef�dDl�lC=rq�RE��o�r�+SCMk��tewedeDFRZJFd��teC���SRRZa��D�20=����2od�JFd��teC�dqMFRZJFd���l05kf+Jr��D2R�5��qu�SJ=+��5RSDnZ��F�E�Jtl��tSD�k����R�aa����lJnZR�m�Ri��E��om�nZ��F�E�Jt��Qe�7o�i5tdqMFRZJFd��teC�dqMFRZ��+2���=8Zq�Zl+kR�e��+Z�o��2FE����q�R0Z8�qDS��im+�����e�k��l+��0FfZn��Z�o�e�����Z���teC�dqMFRZJtMCateC�dqMFRZJFdJ�Rq=trRe�e�Z8t�J52+=eZ�C��R�kR�J�2�Jt��r�t�+��i�Rq+�r��ItR�8r�J��=��0iMFR�0��2d��ef�dDl�lC=rq+��fZ5�dqMFRZER�ateC�dqM�l�a����teC�dqM��o�or�eRv�Z��Jor�e���e�+i��+�22�2�2�eRvnM�r8fo�t�2Ke+0n+K�aem��2+eIeRI�+M+��V�20ZFeRJ�+�+5���olq8e0qiFKdtK+Mk��teC�d�DF0���d��R+o��dDl���m�qJ�2E�t�+D2�EDJt�V�2���Z+D���i���=�o�J7�R�da���ed�ateC�dqMFS�J�JfR+=8k�J�FR�m��i�RqewkRI��Sek+d��t�=RSIn+���ZR�5��+q�Eq�2R���Rq��fn��D���Z���q�o���el+�RE=mt���eKZ���ft���RR+leSGn�M�a8�qMk��teC�d�DF0���+2���=8Zql��q��2�t�Da�i�+�J7Z+Zek�+SS�nk��ZR+MZR+SZ�+qkS=5�R+=k��=+�e���Z�FR��teC�dqM��Z�t�J52�d�r�e�F0�q�d��2d=to�I�e�o�Rqeke0�nZ�+5oRI�RR�eRJ�FK+mk�F��w��eR�lZ0eDFRZJFd��t�q5Z0eDFRZJFdJf��Z8o��S�RZk�q��R�eto�I�e�Zkrq2�+�d�k�D2�0eq+��2E�t��J70+kR��QtdetkEI�e�Ck+K�0ZR�qq�Z�Z8�f=�2�J+�+D���e�rq+�F�qC�dqMF�ZMk��teC�dqMFRZ��+2���=8ZqM�C=��iu��F��q��+�C��qnRq=�F�++�lC=rq�w��=t��M��Dmr��Rqo�r�iSEi�r0�7��eCk�0��S+0������+t��r��SeJF�JK2+Zd���od�JFd��t1�tdeDFRZJFd��t�q5tdqMFRZJFd�it�=�f+q2���0D�2KI�rRe��EiJ��ine00�rK+�8�o�tK2neR��tM+mrqF�RR��eRJlM+m�+2����CeSC�t��Jor�e���F�qC�dqMFRZakJC2dZ��+qSr�Z8t�D�2KI�rRe��Ei2rEint=�r�e��l+k�J�Rq=�ZE�2tEDkK��R0�S����2��8�+=k��SFS�C��ZJFd��te5���ItEi0t���2Eqwk�e7tE=qd�5Z�+��d�e�iQt+=�kd����q5����oE��o�Z7�fe=t���������J���d�JFd��teCoq�F�C=t�D��Mee��J2k�DkR�I�2+o�Zq��++��Rq�om�=t�dn+d=�Z+oV�f+Sel+���5�R�wo�Z5�dqMFRZJF��i�lZ5�dqMFRZ�t��D20Z�k0qlR��m�V�2+o�Zql��i0��+�R0ZR�q�7��ekR�����=8kqD+���aF�J�Rq=�ZE�2tEDk+�q�R0entdqMFRZJtleateC�dqMFRZJFdJ�Rq=trRe�e�Z8t�J52+=eZ�C��R�kR�J�2�Jt��r�t�+�R�I�2�q��Ee�+�Dmr���R�J+Z��SR�rFd�n2��R�EIK+�q�rq�E2+Z�o��f��ZJFd���q�5tdqMFRZJFK=it�Z5�dqMFRZJF���eS�Me�+5r��o�q�e+DM��+�8f2��l+�eqqMt�+rkS�a��Z�ZR+S�l����D�R�roR+=k�=D�E�72+=5k�JE����2E��o�Z�o�qE�l�k�iDR�e�o�05�l+kR��DR���0q7��q5����oE�5eR��e�+k�R�aR��teC�dqM��Z�t�J�2���Z�qMEqmr�qKRqZ�Zqlt��mr�=�R+od���It��k�Rq�o�qkf+�+�C�8��CkR+�elJq�R����Z�ZR+SR���8K=Q��D�20=��M�a��v�eqr�eiD��+�8f2�Re8eiDZM�o�2�2�e+D��deDFRZJFd��t�qwFRe�+�C0R�D�tZ��Re���+J��05���S2E��+d���+Z�ot�Dt�Z��e��+Z�ZR+D���q�R�����Rod�qe�=C��ZJFd��te5���IE����0K2fqw�E+l�Ei�t�J�2�Id�K�k���t���eR�i2�+���2�2�qMeRJDeM+r8�1��dZ�F�qC�dqMFRZakR��F�qC�dqMF�Z0+dDK2+Ze��D7+�+�r�J�2�Id����+�C��qnRq=�F�++�E�k+d��R+Z8o�D�������q�20ZRk�JDkd�JFd��t=KtdqMFRZJFd��tew�+D2�������t0=t���2�S�F�Mq7Rq=t��I�Ei�r���+=tr�eD����rE=�R�Jdk�q���i8�SZ�t0Z8ZEI���i�+KF5t�et�R�S+R��kR��R+ZV�qD�2fC�Z���teC�����d�JFd��trVo����ZJFd��te5�K+iFK��KJ�eSCDZ�+kF�d�2E+�e�Z�M��Fd����qdtd�SZ�+q+di�ZR�CkR+=�l�q2R=�kR���E�2��D��EiQeRJ5o�If�lCJ�Ei�RqC�k+0K�le�a�i�Rq=�k+q��R�J�E�D�di7�fJn�K+=e��RE�5t��5�dqMFRZJF���=wk�e����JF�JD2�I�o�DS��+J�dD�2�JV��qSe�Z0t��iRE+Dkl���R��Z+oKof+qe��n��D�+rdoE+q2R=�+f+��+Zkovn��DlRE=mt���e0�l�K�K2�o0��eSC�t���Fd����qde�+i��+=e��RE�5F�qC�dqMFRZakJC2��Rr��2t�+J�d��2���eq�kt����Zm��+S�R=q+��i8�qa�f+qFf+q+f���RqV��+q2R=�2+�K��fk��5�dqMFRZJF���=t��e���e��J��Z���eI�Cmr���eqD�R��a8f2��f�me+qqe�+m�r�2E0de�nkM+5�f�Mk��teC�d�D�f�Mk��tewZ��St�e=+d��RE�RZ+0K�Cmr���R�JRr����R�kR��M�++���DS��Jk+��5t0Z8ZEI���i�+K��F�qC�dqMF�ZMk��teC�dqMFRZ��+2���=8ZqM�C=��iu��F��q��+�C��qnRq=�F�++��C0t�q5t�J���DS��Jk+��7��eCk�q��S�m����2E�V�E�It��k�r�t�Jkk�JI�Ei8�R�fF�qC�dqMF�qM����teC�di��f�Mk��teC�d�D���5����kE�f�R�aa�int�J�k�25kf�R���oE��kMZ��R�=R��QoE��k�+m�fJ�e�i�tR��ZqDF��q�r�iKRt��Z+D2�Rq����7tR�5kR�r�EZ�k�v�2�2�e+D��d����ZJFd��te5���IFE=���dtetkRI��Sek+d��tZ8ZEI���i�+K����=8r+DqkR=i��+nZS+SlIn�e��+ZIZt�q2R=�+f+��+Zkovn��DlRE=mt���e0�l�K�K2���q�e+0nZ�dtK�RRfe�+i��+=e��RE�5F�qC�dqMFRZakJC2��Rr��2t�+J�d��2���eq�kt����Zm��+S�R=q+��i8�qa�f+qFf+q+f���RqV��+q2R=�2+�K��fk��5�dqMFRZJF���=t��e���e��J��Z���eI�Cmr���eqD�R��a8f2��f�me+qqe�+m�r�2E0de�nkM+5�f�Mk��teC�d�D�f�Mk��tewZ��St�e=+d��RE�RZ+0K�Cmr���R�JRr����R�kR��M�++�o��S��J�+dDKRqe�k�q��S�m����2EqntdqMFRZJtleateC�dqMFRZJFdJ�Rq=trRe�e�Z8t�J52+=eZ�C��R�kR�J�2�Jt��r�t�+�R�I�2�q��q0��lC�r���RR�V��D�Z�Z8�dD�2�JV��qSew�8r�J���Z+�0�D����+f=uRqe�o��f��ZJFd���q�5tdqMFRZJFK=it�Z5�dqMFRZJF���eS�Me�+5r��o�q�e+DM��+m�S0�ef+Fe+DMZ���v�oMJ�e00�rK+�8�o�tK2neR��tM+mrqF�RR��eRJlM+m�+2����CeSC�t��Jor�e���td�SZS+q+�DiF��ateC�dqMFS�J�JfR+=8k�J�FR����q�20ZRk�JDFEqmr�qKRqZ�ZqI�q0+�=5���Q��CroEidedi7Z�F5���aa���t�D7�R��lJ��Ei�2RD�Z0qV�+qS�lDk�Rq�o�qkf+�2Sq5�R��kR+SSIn�++i��+=k��SZS+q+�DiFR��teC�dqM��Z�t�D���=R�RJDFE=��0D��+e��f2�+�i�e�Z�k0q2���aZE�D�di7�fJ7�lIf�E�K2=7�R��Rim����e��ateC�dqMFS�J�I�2=8ZEFK�RZtR�=QRq=wr��S�S+J���+�R+DZ�In2��8�ZIZS+S��Z�+K����r5��+=F�Jf��ZJFd��te5oif��ZJFd��2d=RkRJl��DJ���i2E��r��S�S+J�������ZqDl+�D��Ei�2E��kRJl+E�aF�JD2�I�o�DS��+aR��teC��+f��ZJFd��teC�dqItEi0t���2EqCk��lklC���GnRMJ0����eS�k���uR��FE�I�qaF���2E��kRJl+E�8�SZ�t0Z8ZEI���i�+KF5t�et�R�S+R��kR��R+ZV�qD�2fC�Z���teC�����d�JFd��trVo����ZJFd��te5�K+iFK��KJ�eSCDZ�+kF�d�Rt��ei��M�J����e�e�eSG��M�Je�r�Rt�Se0��8K+=d1�2�Je+q���+m��G�2E�ReR��F�+����tS�Me��ae��+f+��+ZkoentdqMFRZJFd�it+wZ�q2tE=md�nRRd�ZEJl+E=mkJD2�I�o�DS��+Jt�J���Z2���=kE���lJ�k�25��ZkoE��t�J7�R��lJ��Ei�2RD�Z0qV�+qS�lDk�Rq�o�qkf+�K�Q�+ZFom�DFE���+�ZR+=k��SZS+q+�DiFR��teC�dqM��Z�t�D���=R�RJDFE=��0D��+e��f2�+�i�e�Z�k0q2���aZE�D�di7�fJ7�lIf�E�K2=7�R��Rim����e��ateC�dqMFS�J�I�2=8ZEFK�RZtR�=QRq=wr��S�S+J���+�R+DZ�In2��8�ZIZS+S��Z�+K����r5��+=F�Jf��ZJFd��te5oif��ZJFd��2d=RkRJl��DJ���i2E��r��S�S+J�������ZqDl+�D��Eil2�J�rRr��Eqm��+5t0Z8ZEI���i�+K��F�qC�dqMF�ZMk��teC�dqMFRZ��+2���=8ZqM�C=��iu��F��q��+�C��qnRq=�F�++��C0t�q5t�JkZq0K+�D�+dDKRqe�odqMEqmr�qKRqZ�Z+C��MC��q��t�D5�qD���e�rq+7t��KtdqMFRZJtMCaF�qC�dqMFS�akR�ateC�dqMFS�J����ZR+=��J�2+q�8�Z�ol+Srfe���ZQ8�qw�S+q�SC�2R���Rq�Zw�S�i�kS+�Z+Znkw�S�R�n+dDQ�+ZVkm�SeRiq2D�����kR+Dt�Z��e��D�o�J7���=�fCMk��teC�d�DF0���d��R+o��dDlt��mr�=�R+od��q��S�m����2Eqwr�e7+E��tdZ5e���e�+m�S0�ef+Fe0ql2�d�d�eS��eR��e�+k�RvfefqeRE��o�r�R��52RD7o�i��Seit��7tR�5��D��E=a2E������o�J7���=�d�JFd��teCoq�F�qkR�Ii2�dd��q2t�q�R���e0�n+�+kZR�RSq�e+DMo��Jor�e���eR�ne��r��1�eS��eSCSZKfZ+Mk��teC�d�DF0�0��=�2�e0�0q�+���rq�f��Z�ZEJD�lC�tE�5o�25�Rq�ZEi�efJ�Z0qr�l+rkE��e0=����VtdqMFRZJFd�it�0VtdqMFRZJt�IiRR�Vo�q�FE�0+K+Q��Z�ZEJDFE�kR�J�2�Jt��r�t�+t��qQ��=���DM������q�20ZRk�JDkd�JFd��t=KtdqMFRZJFd��tew�+D2�������t0=t���2�S�F�Mq7Rq=t��I�Ei�r���+=tr�eD���k��qQ��=���DM2feJF�JD2�I�o�DS��+F�RF�2��R��Du���k��K2KJ+�0�od�JFd��t1�tdeDFRZJFd��t�q5tdqMFRZJFd�it�=�f+q2��ZR��om�SSC�+�C�8�rfo�+=e���+d�i���0o�+D�fFn+�C�ZRq�Z�+Sk�1n+Kqn8�Z8kE+S���n+K+��R�8�d�=2�qqk��ZR+MZ+eQ�lJ��Ei�2RZ�F�qC�dqMFRZakJC2dZ��+qSr�Z8�dD�2�JV��qSe�Z���q�20ZRk�JDF�C��q��e0�l�K�K2�Rt��eSJ�2�+�oRv�eS��eR��e�+k�RvfefqeRE��o�r�R��52RD7o�i�kf+Jr�iQem��Z�+���qikE������o�J7���=�d�JFd��teCoq�F�qkR�Ii2�dd��q2t�q�R���e0�n+�+kZR�RSq�e+DMo��Jor�e���eR�ne��r��1�eS��eSCSZKfZ+Mk��teC�d�DF0�0��=�2�e0�0q�+���rq�f��Z�ZEJD�lC�tE�5o�25�Rq�ZEi�efJ�Z0qr�l+rkE��e0=����VtdqMFRZJFd�it�0VtdqMFRZJt�IiRR�Vo�q�FE�0+K+Q��Z�ZEJDFE�kR�J�2�Jt��r�t�++r0��2�JVo�qSt�ek�ZnRRd�ZEJl+E=mkR�ateC�dqIod�JFd��teC�dqMF�qkR�Ii2�dd�dDIE�=R��d����qD20�mrqJ�2KC8e+�2�C�kRZ72KJ��RI��le�+dDKRqe�odqMEqmr�qKRqZ�Z+C��MC��q��t�D5�qD���e�rq+7t��KtdqMFRZJtMCaF�qC�dqMFS�akR�ateC�dqMFS�J����ZR+=��J�2+q�8�Z�ol+=2�qq�+��8��ekR+�eE0nKZdZR�0o�+D�fFn+�C�ZRq�Z�+Sk�1n+Kqn8�Z8kE+S���n+K+��R�8�d�=2�qqk��ZR+MZ+eQ�lJ��Ei�2RZ�F�qC�dqMFRZakJC2dZ��+qSr�Z8�dD�2�JV��qSe�Z���q�20ZRk�JDF�C��q��e0�l�K�K2�olq8eqDSaK+5����l�rei�r��o�2�2�e+D��Kof��k��K2KJ2���=kE���lJ�of�I�R�J��C�2m��k0q7kf+5ZE��e�J7�R��lJ��Ei�2RZateC�dqMFS�J�J�Rq=trRe�e�Z�R�D�R+=n�K�r8��R�+qe+q���+kFfI�tS�Me��ae�+=8K���Z�e�+i��+�+fo�ef+�F�qC�dqMFRZakJC��Z��RIK�lDJ�+2dR�JRZ��l�l�mk����D7�fI�a��Dol��kMZ��l�J��i���DnZ��I�RZ=���JFd��teCo�D���JFd��t=wr+q��lC��J���o�kE�l�l�mkJ7Rq=t��I�Ei�r���+�o�Z+����e=+d��R+Z8o�D�������q�20ZRk�JDkd�JFd��t=KtdqMFRZJFd��tew�+D2�������t0=t���2�S�F�Mq7Rq=t��I�Ei�r���+=tr�eD���m�Kq�R�0ikEJl��D=r0�D20Z+�0iMFR����q�20ZRk�JQ���0t��iRqe�e0��RE=mt���t�qnedeDFRZJFdI�F�Z5�dqMFRZr�R�iF�qC�dqMFRZak���di7�RD=e���t���kd�mkf+roEi�e�J7�dqI��DroE�72+=5k�JE����2E��o�Z�o�qE�l�k�iDR�e�o�05�l+kR��DR���0q7��q5����oE�5eR��e�+k�R�aR��teC�dqM��Z�t�J�2���Z�qMEqmr�qKRqZ�Zqlt��mr�=�R+od���It��k�Rq�o�qkf+�2+q�8�Z�kl+q��Zq+d��ZR+=k��SZS+q+�Di���Vk0Zkk�JI�E��tdZ5e���e�+rkV�o�q�eR�n�K�FdI�RS0�e�+i��+=e��RE�5F�qC�dqMFRZakJC2��Rr��2t�+J�d��2���eq�kt����Zm��+S�R=q+��i8�qa�f+qFf+q+f���RqV��+q2R=�2+�K��fk��5�dqMFRZJF���=t��e���e��J��Z���eI�Cmr���eqD�R��a8f2��f�me+qqe�+m�r�2E0de�nkM+5�f�Mk��teC�d�D�f�Mk��tewZ��St�e=+d��RE�RZ+0K�Cmr���R�JRr����R�kR��M�+�wk�rK��emrdDntdetkRI��Sek+d��t��5�dqMFRZqZ���teC�dqMFRZJt�D���=R�RJDFR�0��=�2f0�8�1���i0��+�R0ZR�q�7��J0t�J�tde0Z�q2��D0r�q�R0e�odqMEqmr�qKRqZ�Z+C��MC��q��t�D5�qD���e�rq+7t��KtdqMFRZJtMCaF�qC�dqMFS�akR�ateC�dqMFS�J����ZR+=��J�2+q�8�Z�ol+Srfe���ZQ8��CkR+�elJq2R���Rq�Zw�S�i�kS+�Z+Znkw�S�R�n+dDQ�+ZVkm�SeRiq2D�����kR+Dt�Z��e��D�o�J7���=�fCMk��teC�d�DF0���d��R+o��dDlt��mr�=�R+od��q��S�m����2Eqwr�e7+E��tdZ5e���e�+�8f2�tZ=e������o�2�2�e+D��Kof��k��K2KJ2���=kE���lJnZ0K����a���R�J7k��m�E�5+�i�oE���R��tdqMFRZJFd�it+w�+D2�������R+=8�+q2k�o��w�+e+D���+��2�R0e�e0qiFKdtK�2t��e0ilkM�o�o�Zfe�Z��eDFRZJFd��t�qwFR�lklqmr��ut+Re�0�+�Z0��i�2Eq�o�i8�E��em��kSC���1foEi�ti�ZiQkf2�t���2�=ateC�dqMFS�ak�=ateC�dqIF����S=�RSqw�R�SeRD0��i�2Eqw�qD20�mrqJ�2KC8e+�+�ek+dV�RqZ��dDlt��mr�=�R+odo�eDFRZJFdIfF�qC�dqMFRZJFd��2��Rr��2t�+JF�I�2Z��0ieR�krq2�+�d�k�D2�0eq+2���=J�d�K�Eim���Q��ZRkdD�Z�Z8�dD�2�JV��qSew�8r�J���Z+�0�D����+f=uRqe�o��f��ZJFd���q�5tdqMFRZJFK=it�Z5�dqMFRZJF���e00�rK+�8�o�R�q5eR��tM+=eE��R�J�eS�MtMdtK�eS��eR��F�+����tS�Me��ae��+f+��+ZkoentdqMFRZJFd�it+wZ�q2tE=md�n�ewo�J7Eikrq��t�Q���k���5tReateC�dqMFS�J�JfR+=8k�J�FR�qdJ�2E�t����+�qJ�E���qD��R�J2d�JFd��teCoq�F�Z�R�D�2qeCk�q2�C�kJ�2��8k�+����QtR��o�C���Dr��C�R�e�o��f�RZa�EiQelJ��diuZ��J�E��t�7Z�Z�Rim����e���Z0qu�leke���t��7�R���Zr�E���lJ�ZqF�le8+�i7�f���MZk�+qS�lDk�+rdZS+=�R�q2ReD�+ZCZ0=t�R�SR����lJ�Z��2o��mZE�7tR���diuZ��J�Ei��lDnZi��lJk�E��t�JnZir�R�f2EiQem�nZEI5�Eiak�C�t�J�k�0K��JaRS���l+QeSC�aK+rZ�o���eFeR��RM��Rd���q�F�qC�dqMFRZakJC2dZ��+qSr�Z8t�=d20ew�E�It�Cm�Re�eR������v�20ZFeRJ�+��o+S���eF�qC�dqMFRZakJC2��Rr��2t�+J�d��2���eq�kt����Zm��+S�R=q+��i8�Z�o�DZ�Cq+��n����kw�qFf+q�R�����8�d�=2�qqk��ZR+MZR+SZ�+qkS=5�R+=k��=+�e���Z�FR��teC�dqM��Z�t�J52�d�r�e�F0�q�d��2d=to�I�e�o�Rqeke0�nZ�+5oRI�RR�eRJ�FK+mk�F��w��eR�lZ0eDFRZJFd��t�q5Z0eDFRZJFdJf��Z8o��S�RZk�q��R�eto�I�e�Zkrq2�+�d�k�D2�0eq+0J�2KJ�r��S�S+aF�Id��eCk�+�Z�Z�R�D�R+=n�dDl��C0t�0�+K��odqM��m+fo�2E�Ro�JMkd�JFd��t=KtdqMFRZJFd��tewo�DDFR�J�Id2qZfo�qIod�JFd��teC�dqMFRZJFd��2+Z��d�M�R�q�K�KtF��dDIE�=R��d��Ro�2����krq2�2fq�o���F�ZMk��teC�dqMFRZJFd��teC�dqMF�qkR�Ii2�dd��oirMZMk��teC�dqMFRZJFd��t1�tdqMFRZJFd��tew�eDFRZJFd��teC���SRR��t�D�R���Z�q2ED=��q�20Zf�dD��M=Sr�FnR�eKa�q����m�+Ju�e82�Z�k�ekFfe���e�2�DMofC2����+fq�2�DMofCrF�=�R0eKo�=�r�qSr�FnR�e5a�CD�SC8�SZ�t0=�Z�JMZ�Z8�K����Z���D2�SeJ�0J�q+0�q�+q+2rMq�0+Rd���MZMk��teC�dqMFRZJFd��tet��Jl+��k+K�2fqC�q�Z���Z���teC�dqMFRZJFd��tew�RIKtEi�+d�5te�k�JS��C�rE=�2fqwk�e�FR�=R�J�2qe�edeDFRZJFd��teC�dqMFRZJFd��tewo�DDFR�8t�on�eto��l+��S�0�0te��qM��F�MCn2+=t��JRofD2d��tEqCk�+eMq8����Rqoi20��r�Z8k+q�t0=n��C��C0���d+fDt���2od�JFd��teC�dqMFRZJFd��teC�dqMFRZJFdJ�2�e8��qS�E�JF�ZnR+=tr�eDFE=���nR+=tr�e��S+�+K��tF�8dqM�J�+f1iRqe�edeDFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��tZ��qMklC�r�qD2�I�od�M�J�+f1iRqeno�+f��ZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZr��q�R+ZV�qDqK��ZR����+=2�qq+d�����Vk0=t�R�SR����lJ�Z��2o��mZE�7tR���diftdqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dql���JF�Zn����o��S+SCqZ���teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dql���JF�Z�2d=8���i�S��R�JQ2e��0i�2f+8�d2���=8�EJ����kK�7�e82q=DtE�a��=D�MJn�0iMFR�=R�J�2q�KZ�=�Z�Z8t�J�2q=Co��2od�JFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZ�r�q���Z�ZR�S+RZek�eateC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMF�qMk��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFdI�F�qC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��tew��JI�EiqZ���teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dql���JF�Z�2d=8���i�S��R�JQ2e��0i�2f+8�d2���=8�EJ����kK�7�eJk��k��rFd�n2+=t��JRofZ2fZ�t0=t��J2FSCaRleateC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��R�I�ZR�l�l+0+�+��RDKtdqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFdI�F�qC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��tew�eDFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��t1�tdqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��RqZV�qD2od�JFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJ��i�te�o�ri�SD0t�D�2E���dDIRE=mt���t�e�edeDFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��2+Z��dq2��C�R�J�RSD5eq1��lD2r�����Z���1���C0t�q5t0Z�r�DSrRJe��CKt�Kk�q2�C��Mq�R+oi��Ce��0��K��ZR�����MZMk��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJ�d��2E�to�J7+EiJ��0fF�qC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZER��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd���q�5�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC��DS�lDkRleateC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFEDmr��2+o�r+D�FSq�Z���teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd���q�5�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFdI�F�qC�dqMFRZJFd��teC�dqMFRZJFd��teC������ZJFd��teC�dqMFRZJFd��teC�dqMFRZJF�J�20ZRZ�DSe�C�rS�0tF���J�+�eJt�i�20=RZ��IFE��+�JDRMJRo�DSrRim�q�5t0Z�r�DSrRJe��CKtetr��l�lDa+leateC�dqMFRZJFd��teC�dqMFRZJtMCateC�dqMFRZJFd��teC������ZJFd��teC�dqMFRZJFdJ�Rq=trRe�e�Z8���KRqoi��J7�D�Z���teC�dqMFRZJtMCateC�dqMFRZJFdJ�20=���+f��ZJFd��teC�dqMFRZJFdJ�Rq=trRe�e�ZSr�GfF�qC�dqMFRZJFd���q�5�dqMFRZER�ateC�dqM�l�a����teC�dqM��o�or�eRv�Z��Jor�e���e�+i��+m����de7e00�rK+�8�o�tK2neR��tM+mrqF�RR��eRJlM+m�+2����CeSC�t��Jor�e���td�SZS+q+�DiF��ateC�dqMFS�J�JfR+=8k�J�FR��R�I�2���kR�2Ei��J�2��8k�+����D�di7�fJ7�E�5+�iKR�Z��d�EZ��J��=0t�J�eiDe�+m����de7e+DM����Sofefqe����o��SR����lJ�o��f�RZa�E�������diuZ��J�le=+f��eiDe�+�kS2�R0e�eS�DkMf�d��ow��e0�nk�of�d�2�+�e0��kK+rk��k��K2KJ2��e�e�i�e�J����2�fI���D�tqateC�dqMFS�J�d2���=r����afC�tR���diu�R�J����t�C�2E�t��+��d��R�J��=kEZJ��qkR�����=8kqD�rSCk�d�C��Z�o�q2���de�ew2dZ�kE���E�k��C��Z�ZEJ7Eim�q�dR0ZR�q0n�d��+d�5RqZ�oqqSt�ek��C��Z���DS��Jk+��Q�dq�kEJl��D=r0�D20Z2kEZJ�Eim��D20ZRkKFdFdJk��qQ��=�k�q����de�ewREd�kE�2�Eik�d�C��=�kEe��Sem�d�D20Z2kEZJ��emr�+7��Z�o��S��J�+dDKRE+�FRZ2FE=�rdVK2�e8kKFdFdJ�rq�KRqZ�r�DS�JFd��teCoq�F�qkR�Ii2�dd��q2t�q�R���t0Z�r��It�C��q2�RE+�el+�+d���+rdoS+Dt�Z��e��R�2Zl+Da�i�+�J7Z+Zek�+SS�nk��ZR+MZR+SZ�+qkS=5�t�Vk�SlInk���+Zn�S+�el��8K=D�R+=k���e�Z���Zd���Rod�qe�=�8K=QF�J���=t�R�St��0��=nZi��lC8oE��tfJ5kR�r�EZ��EiKR�Z��d�E�R�f2E��e+����fkf+5�E��e�����J��RD=ef��tSD�k�Cr��q8��C52�J�ZRv5Z��JkE��20�7Z���E�5+lC�tKZ�kd0KZ��J�E��t��nR+=tr�e���q0R�J�ei��K+�+���eS��eiDF�+iFKrfefqeeR���M�r����w�+e+D������2�o�Zfe�Z��eDFRZJFd��t�qwFR�lklqmr��ut+Re�0�+�Z0��i�2Eq�o�i8�E��em��kSC���1foEi�ti�ZiQkf2�t���2�=ateC�dqMFS�ak�=ateC�dqIF����S=�RSqw�R�SeRD0��i�2Eqw�qD20�mrqJ�2KC8e+�2�C��RiD��=t��e�k�=��0D��+eCk�q2�C��RiD��=t��e�kd�JFd��t=KtdqMFRZJFd��tewo�DDFR�J+�iuRMJ��Re���+aF�J���=t�R�St��0���ut�e�edeDFRZJFd��teC�dqMFRZJt�J52�d�rdqleRi0�J��Z���eI�Cmr��5t�qtk��I�q=+d�i��ZR�0q�+�C�ZR�Rod��+R�qkS��8��Vk0�Sa�=q�R=�8�rdZS+=+�e���Z�F�e��fZ5�dqMFRZJFd��t1�tdqMFRZJFd��teCk�D��lq�r����ewkE�2t�qk+K�tdetk��I�q=+d�i��ZR�0�od�JFd��teC�dqMFS�r8���om�SSC�K����fZ��=+�e���Z�FR��teC�dqMFRZJF�J�2K��o�J��lekd��tZkk�JI�Ei�Z���teC�dqMFRZJ��i�te�k��2�E��R�D�R+=n�dDlR�C��0V�t�e�edeDFRZJFd��teC�dqMFRZJF�J���=t�R�St��0���utF���Z�E=0t�J�2+Z8rR�l+�D2+leateC�dqMFRZJFd��teC�dDl�lD+rEi�R�JV��q�r�Z0t��iRq�KtdqMFRZJFd��tew�eDFRZJFd��teC�dDl�SZ0��i�2E�e��C�FEJ8r�=�2�J+�0iM�lCm�+J��e�od�KEiqt��7��e0�+D2���0R�DQRqrio�DM2fe8r0�KR+=��0D�Z����d�Q2�J��qD�2fe8r0��2E�t��J7S�k���uRSq�od���E�k+d��R+Z8o�D�2fe8r0�5RqZ�oqDSR�rF��Q20Z�kE���Eqm��+7���5�dqMFRZJFd��teC�dqMFR�k+K+�RR�V��DM2fe8rqD�R�eR�qqSt�ek�eKt�JkZq0K+�Dk+��7��e0�q0Kt��m�f=�RR�V��D�Z��m�Kq�R�0ikEJl��D=r0�D20Z+�0iM�lZ�R��u�MI��+DM2fe8rd��20ZRkE�l+E�8r�GfF�qC�dqMFRZJFd���l05�Rvd���7eq=�o��f�RZa�E��t���kd�m�lJ5�E��2q�ateC�dqMFRZJFdJ�2�e8��qS�E�JF�ZnR+=tr�e���q0R�J�2fqwk�e�FR�=rq2��Fdk��2Eim��fF�qC�dqMFRZJFd��teC�dqlR����+��R�J��d�M�C0���dtZ��0qME=0t�J��Fdk�����e0+�+��SZ5�dqMFRZJFd��teC�dqMFRZJFd��2+Z��d�M��Cm�Mq�2��8k�+�����R�I�2�qf�dDl�SZ0��i�2E�eo��2od�JFd��teC�dqMFRZJFd��teC�dqMFRZJFdI�2=8ZE��F�+kR�e�q=�kqD2F�C=+Kq�tdeE���d����20����D7�fI�af��tSD��M���SJ=+�iKR�Z��d�EZ��8���rk+J���=t��od�JFd��teC�dqMFRZJFd��teC�dqIr��JFd��teC�dqMFRZJFd���q�5�dqMFRZJFd��teC�dqMF�Ckk�5RqoiZ��Ik��8����Rqoi20���lC=rq+7R�eno�+f��ZJFd��teC�dqMFRZJFd��teC�dDl��C0t�D�RR�Rr�D2�EJ8�f���+2i20���lC=rq+7R�eC�qlRE=mt����fZ5�dqMFRZJFd��teC�dqMF�qMk��teC�dqMFRZJFd��tZRo�r�+�ZMk��teC�dqMFRZJFd��teC�dqMFR��R�I�2���kR�2Ei�rSen2�JRe+=Ro��m��i�Rqe0��q�r�Z0t��iRq�KtdqMFRZJFd��teC�dqMFRZER��teC�dqMFRZJtMCaF�qC�dqMFRZJFd��t0=�Z�JMF�qJF�I�2Z��0ie��=+E��R0Z0���I�R�a+leateC�dqMFRZJFd�n2��Rr��2t�+J�MC�+K��edeDFRZJFd��teC�di�a�i�oSJ7k��5�SIda���t�nZ����q5����oE�ateC�dqMFRZJFdJ�2�e8��qS�E�JF�ZnR+=tr�e���q0R�J�2fqwk�e�FR�=rq2��Fdk��2Eim��fF�qC�dqMFRZJFd��teC�dqM����SC�R�etFEe7tRZFdJmR��KtdqMFRZJFd��teC�dqMFRZr�t��Z����EDia��D�di7�fJ7�E�5+���ew�nZq�kf+aoEiKR�Z��d��tdqMFRZJFd��teC�dqMFRZk��q�RqZ�kE�MFR�8����Rqo���q2�RZ8�d2���=J�+CD�J�+f1iRqe�edeDFRZJFd��teC�dqMFRZJFd��tewo�DDFR�=+K+ER+=8�+q2k��8�d2���=Jodq�o��m��i�Rqe0�����MZMk��teC�dqMFRZJFd��teC�dqMFRZJFd��R�I�ZR�l�l+0+�fF�qC�dqMFRZJFd��teC�dqMFRZJFdI�F�qC�dqMFRZJFd��teC�dqMFRZJFdJ�REqC�dDl�Rq=�+�Q��+��ReD�MZMk��teC�dqMFRZJFd��teC�dqMFRZJFd��t0=tZ�e���q�k��t�d���f��ZJFd��teC�dqMFRZJFd��teC�dqMFRZJ��D�2��Rk�0���ZaF�J�RR����0K0J��0q�R+=e�dDl�Rq=kR�fF�qC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJF�J�2�Jt��q�r�Z8�KqD2R0�8�J��R�k+E=d20e�o��f��ZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teCk��lrSZJ�MC�t0Z�r�DSrMZMk��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqI+�+�rq2�tdetr�J2FEJ8r�=�2�J+�q=�kKZMk��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dql���JF�=u��Z�r��S�����Mq�2K��Z�q2ED=��q���=t��M�+mrqJ���eCk��lrSZa��fF�qC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teCk��lrSZ�R�D�+K����C�FR�mr0Di�fZ5�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFdI�F�qC�dqMFRZJFd��teC�dqMFRZJFd��teC������ZJFd��teC�dqMFRZJFd��teC�dqMFRZJ��i�te�k�DI������2�q�edeDFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��tZ8�+DS��JJ��0fF�qC�dqMFRZJFd��teC�dqMFRZJFd��teC������ZJFd��teC�dqMFRZJFd��teC�dqMFRZJF�J�RR����0K0J��0q��eCk��lrSZ�R�D��fZ5�dqMFRZJFd��teC�dqMFRZJFd���q�5�dqMFRZJFd��teC�dqMFRZJFd��RqZV�qD2od�JFd��teC�dqMFRZJFd��teC�dqMFRZJFdJ�REqC�dDI���Fd��tetr��l�lDr+M+ER�JRr����R�kR��M�++Vo���+0J0t�J�tdetk��I�qrFd�n����o��S+SeJF�J���ZRZ�Z��le=+f��t���odqM��m+fZ�t�ewedeDFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��tetZqq�o�i�r�Jw2��J��C�FR�0�K�f�fZ5�dqMFRZJFd��teC�dqMFRZJFd��teC�dqIr��JFd��teC�dqMFRZJFd��teC�dqMFRZJFdJ�20=���+f��ZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��tewkRe�+E==����fZ5�dqMFRZJFd��teC�dqMFRZJFd��teC�dqIr��JFd��teC�dqMFRZJFd��teC�dqIr��JFd��teC�dqMFRZJFd���q�5�dqMFRZJFd��teC�dqMFR���+2���=8Z+Z��JkR�i0tF��dDl�Rq=�+�Q��+��ReQod�JFd��teC�dqMF�qMk��teC�dqMFRZ=+�q�tdeto�ri��Cm�R�KRqe�edeDFRZJFd��teC�dqMFRZJt�D���=R�RJDFE=��0D��+2�Z�IKFR�8t�D���=R�RJDkKZMk��teC�dqMFRZER��teC�dqMFRZJt�D���=R�RJDFR���+2���=8Z�f��ZJFd���q�5tdqMFRZJFK=it�Z5�dqMFRZJF���eSC���+rrEr��fq8eqD�ZeDFRZJFd��t�qwFRel��q�+KC�tetoqD2��DmrqJ�tZ�ZR�l+E�kR�q�eR��t��kf�efqSe��MF�of�d�R�5e+qD�K+5���Rqe�e�Z�+K�FdI�2R�MeiD��eDFRZJFd��t�q��Rdf+�i�t�C�Rq=�kEI�E��t�+weKZ�2R�I�C�t�d��l0�k�D2REim�KqfRq=JZ+qSeR����q�R0r�kEI�rl���+��Rq=8��J��Eirr0��R0=8ZE�SS�0�Ri��l0���D2���0�+����r����lrSeMk��teC�d�D���DtEJ�Z0D����I�Z��E���MJ8o�I�2f+�rd�n2E0�Z+D2S�m�K0�Rq2�e�rK�S��R���2+Z�o�D��R�kR�J�2+ZV�0iu2fq���0d��DeeeDFRZJFd��t�qwoqD2��DmrqJ�F�+SS�nK+DR��teC�d�f��qrM��t��+SJ���ZJFd���0�7�f2�+�i�e�Z����dtdqMFRZJ��+8eR��+M+m����f+5e+0nrK+mo+�e+e5F�qC�dqMF�JM�R�e�f+=+fJq�++d�Rq��q�5�dqMFRZekq�8eR�a��+�oRo�Rm�ueqqq�eDFRZJFd���q�7o���r���R�Z���ZFo�1d���JFd��t�Jr0eq�++d�R��kd��+SJ���ZJFd���RD�t�+5ZV�e�Z7eKZ�t��k���t��we+D��K�Z�F�ol0�eRJi+���v�RR+eeKZ�t0eDFRZJFd���RZ7�f���i�2+=7oRJ��R�rZd�JFd��t��r�eq2Dn8�oV�d�=rR�nkR�D��Zko�5�dqMFRZ�kqq8e+D����rrEd��KJDe0�l�eDFRZJFd����Z7��qa�lC�2+�ateC�dq��fqM�RqF�0�S�Eiq�++�����teC�d��+��o��deSC�8d�n2R��Z+Zw�0�5�dqMFRZ���q8e+ql2K+irE0�o��deSC�8deDFRZJFd�d��Z7�R�ir����MZnZq�kf+J�lC�o�qateC�dq��K�M�R��oE+=+S��K�DZ+rd�d���Ri���ZJFd���+�J�eq�R��8�Zao�S�Eqq2RZ�8�ZJod�Dk�D��R��ZR�J�l+StR�nkR=i����Zl+��l�C��ZJFd���+�J�0eq�R��8�Zao�S�Eqq2RZ�8�ZJod�Dk�D�2Rei8��J�l+StR�nkR=i��o���+��l�C��ZJFd���+�Jr0eq2J5Z+ZnkE+=fJq2++�����teC�d�t�eM�R�=�f+SFE��2+e��R�+ZEZ5�dqMFRZe+�0�F�+����q�R�KZ���teC�d�2KJM�R�8k��S��Z��SD�8�f�m�DZS����q�����teC�d��KeM�+ZJkw�=�E��+K����++o�5�dqMFRZek0�KF�+=tE�n+K=���qw���q��nK������teC�d�QF��M�R�8k��S��Z�2+=��+Z�k�Z5�dqMFRZek0��F�+=tE�n+K=����Eo���eR�C��ZJFd���RD�Zdeq2Dn8�oV�d�DZR�q�S+�8�Zko�5�dqMFRZek0qfF�+�REDqKqQZ+ZVkm�SeRiqK��Z+o�o�Z5�dqMFRZek0qVF�+=����SJ���ZVkm�SeRiqK��Z+o�o�Z5�dqMFRZek0quF�+q��n��Z78�rVk�+q2��C��ZJFd���RDJr�eq�e��+r�o�+S���n+K+�R��teC�d�Q�S=M�R�8k��S��Z�kS���R�Eo��Stf�q2DDZ���teC�d�Q2KJM�+Z��f+=�R��2Sq5�R��k+ewr�qSZ�im�KqQ2Sq���q8�E��oR�7oKZ����a���t0=7�0�CtdqMFRZJFd�it+w�+D2�������RRd�ZEJl+E=mk��kD���q�a���e+�����r�e7+E�fefqeeR���M�r����f�me+qqe�+m�r�2E0de�nkM+5�f�Mk��teC�d�DF0�0��=�2�e0�0q�+���rq�f��Z�ZEJD�lC�tE�5o�25�Rq�ZEi�efJ�Z0qr�l+rkE��e0=����VtdqMFRZJFd�it�0VtdqMFRZJt�IiRR�Vo�q�FE�0+K+Q��Z�ZEJDF�JkR�i����RZR�M���=rq2�R�I�k�D�kd�JFd��t=KtdqMFRZJFd��teCk��lklC���GnR+Ztk+1K�E�k+f=Ktde0o�J7F��0FdJ�Rq=�����+�+0Fd�7��qtoqD2��DmrqJ�t��KtdqMFRZJFd��tew�+D2���������=8r+Dod�JFd��t1�tdeDFRZJFd��t�q5tdqMFRZJFd�it�=e��q+d�i��ZVkm�SeRi���ZJFd��te5���IFE=���dteCk�+��RZ=+K�RqZ0��eD���d2E��oM���EZ��Ei7R0���dqE�E�5�F��MJ�e�o�ZeDFRZJFd��t�qwFRel��q�+KC�tete��F�Cm�qJ�R�JR�q�k��d8�Z7kt�qFf+q+��n����kw�q2R=I�E��R�e7ZE�dtdqMFRZJFd�it+wZ�q2tE=md��t0=��ql�l+0���7Rq=J�KfZ+F�oMJEe��ae�+krq��oeIe�+i�R+�KqQ�R�oEZ5�dqMFRZJF���=wk�e����JFd�n�+�J���Se�Ck+���2�q������7Rm�7�fJ7���k���5tR�7�R�te�+rr0V�eKJ�F�qC�dqMFRZakJC2dZ��+qSr�ZJF�Jn��=8k��l�l�mkJ�2E�t����+�qJ���fk�+Stf��kt��8�+5kt�=�RZq��Z��R�2Zl+�Rl��8K=Q��Z���+��RDqK��ZR��ot�q�E���d��ZR�akS+DrSFn+��D8�+MZR+S�D���Zn8��0�m�qFf+qkS+�ZR�o�+�e�Z�2RZd8�+=k�vn��D�2���RfoE+=Rl���+=d���RZm��e�Z��e��+ZFom�DrSFn+dqK���RZm�=�Rqq2+�D���q�0�5�dqMFRZJF���=8���I+�qmkJD2�I�o�DS��+J���Jkd�St�Vnkt����Zm�E�t�R�SRl��tSD�o�iI�f�aR��Dol��kMZ��l�J��i���DnZ��I�RZ=���JFd��teCoq�F�C=t�D��Mee��J2k�DkR�I�2+o�Zq��++��Rq�om�=t�dn+d=�Z+oV�f+Sel+���5�R�wo�Z5�dqMFRZJF��i�lZ5�dqMFRZ�t��D20Z�k0qlR��m�V�2+o�ZqI��e=R�J�tdete���Z�Z8t��V��eCk�+�tSeJF�I��Rqf�dDl����2�2+o�Z+CtSZeF��ateC�dqIod�JFd��teC�dqMFR�0��=�2f0�8�qSEq2rd�5RqZVod�Mt�Cm�0Ii��ew�EF��lZkd�n����dDIkf=JF�Id�RqCk�+tRZ8��Ii2���r��S�S+JkR�fF�qC�dqMFRZJFd��2��Rr��2t�+Jt�J���Z+edeDFRZJFdI�F�Z5�dqMFRZr�R�iF�qC�dqMFRZakJC2E��Z�D���int0=�k�ZF�S�t�iDoRD�o�05�l+k+�JFd��teCoq�FE�kR��Qt��e�D�2SZd��o�o��q2R=�+Ke�ZR0nZR+�FRZq+�+�ZR+mZ��q2R=�K���R�2Z��SR�q+�CK8��fk�+Stf��+f=Q8�o����5�dqMFRZJF���=wk�e����JFd�nR0=R�+q2�Cmr���2+o�r�DS��i�k��Z�+I��qikE��e��7oq��RDJt���e�e��MZmo��f+l��tSD�kqD2kf��r����lJ�o�����G���D�ti�kR���f�m�Ei�el�7�fJ7���5�E��e+C��q�5�EZ��E��o�Z7ZE�fkf+J���5���7�R�Z��J�E�Qt=7Z�2K�R�f2�C�e�����I5kf+J����oE��k�25�f�m�EiD������I5�RDJ�E��RRD���CftdqMFRZJFd�it+w�+D2�������RRd�ZEJl+E=mk��kD���q�a���e+�����r�e7+E�fefqeeR���M�r����f�me+qqe�+m�r�2E0de�nkM+5�f�Mk��teC�d�DF0�0��=�2�e0�0q�+���rq�f��Z�ZEJD�lC�tE�5o�25�Rq�ZEi�efJ�Z0qr�l+rkE��e0=����VtdqMFRZJFd�it�0VtdqMFRZJt�IiRR�Vo�q�FE�0+K+Q��Z�ZEJDF�D0rEifRq�tZq+����=t��5t0ZtrRe���C=+Kq���JZd�Mkd�JFd��t=KtdqMFRZJFd��teCk�r���qk+���+�J�eqD�F�qJF�I�2Z��0ieSD�rdD�Rqo�+��2o�iaF��fF�qC�dqMFRZJFd��2��Rr��2t�+JF�I�2Z��0ieSD0rEifRqe����MZ�Z=+K�����od�M�D�rdD�Rqo�+��2o�iS�0�0�lDJo�iMF�Cm�qI�R+Zf�dDI�ED��+��2Ei�o�+�+EJe��C���ewo�J7�J�+fZ5t0=�kEe�+Eim�����R�R20�Rrl�ekR�Ktetk��2tE=0��i�2EqnedeDFRZJFdI�F�Z5�dqMFRZr�R�iF�qC�dqMFRZakJC2E��Z�D���int0=�ZM�m�S�t�iDoRD�o�05�l+k+�JFd��teCoq�FE�kR��Qt��e�D�2SZd��o�o��q2R=�+�CK8�0nZR+�FRZq+�+�ZR+mZ��q2R=�K���R�2Z��SR�q+Ke�ZR�fk�+Stf��+f=Q8�o����5�dqMFRZJF���=wk�e����JFd�nR0=R�+q2�Cmr���2+o�r�DS��i�k��Z�+I��qikE��e��7oq��RDJt���e�e��MZmo��f+l��tSD�kqD2kf��r����lJ�o�����G���D�ti�kR���f�m�Ei�el�7�fJ7���5�E��e+C��q�5�EZ��E��o�Z7ZE�fkf+J���5���7�R�Z��J�E�Qt=7Z�2K�R�f2�C�e�����I5kf+J����oE��k�25�f�m�EiD������I5�RDJ�E��RRD���CftdqMFRZJFd�it+w�+D2�������RRd�ZEJl+E=mk��kD���q�a���e+�����r�e7+E�fefqeeR���M�r����f�me+qqe�+m�r�2E0de�nkM+5�f�Mk��teC�d�DF0�0��=�2�e0�0q�+���rq�f��Z�ZEJD�lC�tE�5o�25�Rq�ZEi�efJ�Z0qr�l+rkE��e0=����VtdqMFRZJFd�it�0VtdqMFRZJt�IiRR�Vo�q�FE�0+K+Q��Z�ZEJDF�D0rEifRq�tZq�l+E�0F�ZnR0=R�+q2�Cmr�F��RDCZd����ZJFd���SZ5�dqMFRZJFd��tet�q0KtEik+K+2+=���q�r�Z8t�J52+=eZ�C7�ED��+��2Ei�o�+�+R�a+leateC�dqMFRZJFdJ�Rq=trRe�e�Z8t�J52+=eZ�C7��e=R�J�tdZ�ZR�IRE=mF�Zn2KJ��+DS+�++rE��Rq�KZ�=�kf�e+��KtZ�ZR�IRE=mF�Zn2KJ��+DS+�++rE��Rq�K��=��lqafZV�ef���Se�C0��Ktdet�q0KtEik+K+2+=���Zu�E�r�0q���eCk�DI+�q�R�J�2�Ido��f��ZJFd���q�5tdqMFRZJFK=it�Z5�dqMFRZJF���o�k�JS+Ro�R0eteiD�M+�Z+I�RS�5eRJlM+m�+�Mk��teC�d�DF0�k���uRSq�kfde��K����ZRJF�E�5+���tKe��MZkEZJt�i7�di7��Z�E�5+���tSJ5Z�J7���8t�i�o�=��K�Q�S�t�iDoRD�o�05�l+k+�JFd��teCoq�F�Z�R�D�2qeC�dDl����2�2+o�Zql�l+0���7Rq=J�K+�Z+I�RS�5e0�ntM�k���fqwe�Z�ZM+���I�RE�eKZ���+�rq2��MJ�eiDe�+i8fI�eE+�eM�MFK+5o����oKeR�q�MdtK�R0�ee�Z�+M+�rE2�e���e0��8Kfr����qCeS�MrK�ofefqeeR��F�fZSF�o��eqDqrM�k+�v���qCe��ae�+�8f2���oKe+qDZK�k+�v��fq8eSCSt�+�eEeMk��teC�d�DF0���+2���=8Zqlt��mr�=�R+od�K+5k+��RS�Ee0�n+�+kZR+0t��iREn��D�+��K�R0�o�+=t�dn+d=�Z+oV�f+Sel+���5�R�wo�Z5�dqMFRZJF���=t��e���e��J��Z���eI�Cmr���eqD�R��a8f2��f�me+qqe�+m�r�2E0de�nkM+5�f�Mk��teC�d�D�f�Mk��tewZ��St�e=+d��RE�RZ+0K�Cmr���2Ke0o�el+0+mr���tdetk��2tE=0��i�2E�����FSCMk��tewedeDFRZJFd��teC�dDI�ED��+��2Ei�o�+�+RZFd�n��Z�o�e�rw��r0��RqZRZ+��M�k�Z��fZ5�dqMFRZJFd��t=8���I+�qmk�n��Z�o�e�rw��r���2dZ+���Se�C0��Ktdet�q0KtEik+K+2+=���ZuFE�r�0q���eC���FSe=+K�����od�M�D�rdD�Rqo�+��2o�iS�0J0�lDJo�iMF�Cm�qI�R+Zf�dDI�ED��+��2Ei�o�+�+EJe+�C���eCk�DI+�q�R�J�2�Ido��f��ZJFd���q�5tdqMFRZJFK=it�Z5�dqMFRZJF���o�k�JS+Ro�R0eteiD�M+�Z+I�RS�5eRJlM+m�+�Mk��teC�d�DF0�k���uRSq�kfde��K����ZRJF�E�5+���tKe��MZkEZJt�i7�di7��Z�E�5+���tS�5Z�J7���8tlC52EJ��K�Q�S�t�iDoRD�o�05�l+k+�JFd��teCoq�F�Z�R�D�2qeC�dDl����2�2+o�Zql�l+0���7Rq=J�K+�Z+I�RS�5e0�ntM�k���fqwe�Z�ZM+���I�RE�eKZ���+�rq2��MJ�eiDe�+i8fI�eE+�eM�MFK+5o����oKeR�q�MdtK�R0�ee�Z�+M+�rE2�e���e0��8Kfr����qCeS�MrK�ofefqeeR��F�fZSF�o��eqDqrM�k+�v���qCe��ae�+�8f2���oKe+qDZK�k+�v��fq8eSCSt�+�eEeMk��teC�d�DF0���+2���=8Zqlt��mr�=�R+od�K+5k+��RS�Ee0�n+�+kZR+0t��iREn��D�+��K�R0�o�+=t�dn+d=�Z+oV�f+Sel+���5�R�wo�Z5�dqMFRZJF���=t��e���e��J��Z���eI�Cmr���eqD�R��a8f2��f�me+qqe�+m�r�2E0de�nkM+5�f�Mk��teC�d�D�f�Mk��tewZ��St�e=+d��RE�RZ+0K�Cmr���2Ke0o�el+q��F�ZnR0=R�+q2�Cmr�F��RDCZd����ZJFd���SZ5�dqMFRZJFd��tet�q0KtEik+K+2+=���q�r�Z8t�J52+=eZ�C7�ED��+��2Ei�o�+�+R�a+leateC�dqMFRZJFdJ�Rq=trRe�e�Z8t�J52+=eZ�C7��e=R�J�tdZ�ZR�IRE=mF�Zn2KJ��+DS+�++rE��Rq�KZ�=��lqafZ�2+o�r�����eaF�JuR�e8��DSe+�=RlC�+fD���itSZeF��K2+o�r�����eaF�JuR�e8��DSe+�=RlC�+fDw��iutSCrFd�f��eCk�DI+�q�R�J�2�Ido��f��ZJFd���q�5tdqMFRZJFK=it�Z5�dqMFRZJF���eRI�F�+�+d��oeIeR�����reqF�R+Z�eSC=tM+��Srfefqee+0no�+����R�q5e+0nZ��reqF�R+Z�eSC=tM+��Sr�2+e�eR����+����o�ZJF�qC�dqMFRZak�����E�R�a�E��tKenZ0K��ofr��7tR�7oRJ��R�r����tSD�o��r�R���E���d=5Z�CF��==R��i2�J��diu�fIf�E��2m�7����oqD2��i0�+�����=+f+q2SD��t�Vk0�S�Z�2+�K��rV�d�S��CqKZ58�+�������+�r���o�q�e���e�+iFK=Mk��teC�d�DF0���d��R+o��dqM�CkR�1�t=�r�e��l+k������E�R�a�Ei���=�o�JntdqMFRZJFd�it+w�+D2�������RRd�ZEJl+E=mk��kD���q�a���e+�����r�e7+E�fefqeeR���M�r����f�me+qqe�+m�r�2E0de�nkM+5�f�Mk��teC�d�DF0�0��=�2�e0�0q�+���rq�f��Z�ZEJD�lC�tE�5o�25�Rq�ZEi�efJ�Z0qr�l+rkE��e0=����VtdqMFRZJFd�it�0VtdqMFRZJt�IiRR�Vo�q�FE�0+K+Q��Z�ZEJDF�Cm�0Ii���t��+IR�8t�J��=�o�eDFRZJFdIfF�qC�dqMFRZJFd��2+Z��d�M�C=��iu��F���q2�0Jk�dDrRq=�kRI���qkF�Z�t�=KtdqMFRZJFd��teC�dqMFRZ8�d�dR0eC�qM��=k�dq���=e�dD�e��0��=�2f0�8�1�Ei0�RiQRqrd�0qI�E�k+f=KtZ�Z�qlt�qmr0�nR�J��E�MFS��dJw0+8�qe+e+�R+qJE+0+RR+�MFS�r+��utoi�qD�FR�rk+I�Rq=�r��f��ZJFd��teC�dqMFRZJFdJ��ZRk0�MEDm+��KtetZE�2�Z0R��Ktet�+D2�����+E������od�JFd��teC�dqMFRZJFd��2+Z��d�M�qkR�Ii2�d��E����qJ+MG��e�edeDFRZJFd��teC�dqMFRZJFd��tewr��It��0�J�Rq=���J2k�DkR�I�2+o�Z�l�l���f=�R0Z+�dqQo�ZJkSZ�t0o�rR�IF��0F����fZ5�dqMFRZJFd��teC�dqMF�qMk��teC�dqMFRZJFd��t=8���I+�qmkI�2��R���f��ZJFd��teC�dqIr��JFd��teC�dqMFEimt����SZ5�dqMFRZJFd��teC�dqMFR�0��=�2f0�8�qSEq2rd�5RqZVod�Mt�Cm�0Ii��ewr�D2kMCJF�I�Rq=�r�qDkKZMk��teC�dqMFRZER��teC�dqMFRZJt�D���=R�RJDF�C��q���fZ5�dqMFRZER�ateC�dqM�l�a����teC�dqM��o�o�CeSJS�M+�kS2�R0e�eSC�tqqSEq�rq2�RRd�k�e�+���R�J�k�5�f���i�2+=�oK++tdqMFRZJFd�it�SZRqqkRD��+r�k���k�qnZ�iq+dD�R+=8kK+5�V�tv�e0��+M+�+�����qdeSC=t�eDFRZJFd��t�qwFRe�+�C0R�D�tZ8ZEI���i�+K�ateC�dqMFS�J�I�2=8ZEFK�RZtR�=QRq=wr��S�S+J���+�R+DZ�In2��8�ZIZS+S��Z�+K����r5��+=F�Jf��ZJFd��te5oif��ZJFd��2d=RkRJl��DJ���i2E��r��S�S+J��=�2KC�k�qnZ�iq+dD�R+=8kd�Mkd�JFd��t=KtdqMFRZJFd��tewo�DD��=8t�D�2fqC�qM�C=��iu��F�k�DltE��rE=�20Zf�dq��l�kdJK2+=�r�qMrR=JkR���SZ5�dqMFRZJFd��teC�dqMF�qkR�Ii2�dd��D���e�rqfF�qC�dqMFRZJFd���q�5tdqMFRZJFd��tew�RIKtR�8����R�I�rRJ7R�8t�D�2fqnedqM�CFk0�fteto�i�rlCqZ���teC�dqMFRZJFd��tewo�DDFR��r�J�2do��0�M�qkR��mt0ZnZ��RrleJF���R0Z8oqD2��qmr0��R0e�o�CQFSCqZ���teC�dqMFRZJFd��teC�dqMFRZr�t��kR��k�Dlt0ikR�iD2�J��+D�kt�n8�Z�o�+=�EiqkS+�ZR�o�+�el+���Z���q�o��D8��n+d���R�u���5�dqMFRZJFd��teC�dqMFRZJFd��t0=t���2�S�F��nRR���E�l+�emF�ZD2+oi��qI�Ei0FdJQ2�I�Z+qSeR����q�R0r�k�Dlt�JkR�iD2�J��+DM�l+�+�JD�i�0qDkKZMk��teC�dqMFRZJFd��teC�dqMF�Dm����2de����od�JFd��teC�dqMFRZJFd��teC�dqItEi0t���2Eqwr�e7+Ei�Z���teC�dqMFRZJFd��tew�eDFRZJFd��teC������ZJFd��teC�dqItEi0t���2Eqw�+qS�lDk+leateC�dqIr��Mk��teCZ0�D�d�JFd��teCoq������ZIZR��k�qnZ�iq+dD�R+=8kK�8�R���f+Ee0��+M+�+���o0�RF�qC�dqMFRZakJC2��Rr��2t�+J�dD�2�JV��qSe��JFd��teCoq�F�C=t�D��Mee��J2k�DkR�I�2+o�Zq��++��Rq�om�=t�dn+d=�Z+oV�f+Sel+���5�R�wo�Z5�dqMFRZJF��i�lZ5�dqMFRZ�t��D20Z�k0qlR��m�V�2+o�ZqI���=R�JwR0Z8��D2��qmr0��R0e�o�eDFRZJFdIfF�qC�dqMFRZJFd��2+Z��dq��qkR����eCk��lklC���GnR+Ztk+1K�E�k+f=Ktde8o�JS+RZm��iu��eCZ�q�tSCaRleateC�dqMFRZJFd��teC��e�+�C0R�D�tZkk�JI�Ei�Z���teC�dqMFRZJtMCaF�qC�dqMFRZJFd��t0o�r��l+�q����t�d���f��ZJFd��teC�dqlR���kRZn2+FikEIK+�+0F�Zn2��R�0�o�Z8���n��K�dDlkf�r��fF�qC�dqMFRZJFd��teC�dql���JF�=u��=8Z�IK�R�8t�D�2K�Kk���rl=2fZ�t�J�k�q�Z�iq+dD�R+=8kdD�k�ZF+MG�tZkk�JI�EiJF�q�t=�r�e7F����RZn2��R�qZ��Cr+��0��eC�q0��S�rkRe�tF��+C�FSZMk��teC�dqMFRZJFd��teC�dqMFR�8kJu��=8Z�IK�R�8t�D�2K�Kk���rl=2fZ�t�0VZD�k�ZFk�fte��qI�����0V�2�q�k�e�+�DS�+J�������iMFS�e����F��dDu���aRleateC�dqMFRZJFd��teC�dqMFRZJF�J���Z���e7�EJ2d��t=�r+q7��C�kRZn2��R�qZ��Cr+��0��eCZdiMrl=a+leateC�dqMFRZJFd��teC������ZJFd��teC�dqIr��JFd��teC�dqMF�Ckk�5R�I�rRJ7R�8�K0�2ZR�Re�k��eF��fF�qC�dqMFRZJFd��teC�dqM�CmR����ewkEIK+�+0F�Zn2�et��D2t�Da+M�VtFV�dDl��C=����2K�K��=�F��JF�J���Z���e7�EJe��GfF�qC�dqMFRZJFd��teC�dqM�l2�tK2ne�o�Z�+rk�2�2�+�e0��kK�reqF�R+Z�eSJ�+0eDFRZJFd��teC�dqMFRZJF�I�2Z��0ieR=k�dDE2KJ���JlZ��8�J�2qZ+��r�+�CJF�e�t0=tZ�eMkKZMk��teC�dqMFRZJFd��t=�o�DS+�Za��+��fZ5�dqMFRZJFd��teC�dqMF�qkR�Ii2�dd���It��k+leateC�dqMFRZJFdI�F�qC�dqMFRZJFd��2��Rr��2t�+J��D�20=����f��ZJFd���q�5tdqMFRZJFK=it�Z5�dqMFRZJF���e��ae�+���o�ef+keR��2�+m��G�2E�ReiDtK�o�R�J�eS�MtMdtK+Mk��teC�d�DF0���d��R+o��dqM��J��i���ZR�qD2tRo�e���e�+i�R+�+��n����klZ5�dqMFRZJF���=wk�e����JFd�n�+ewo�J7Eikrq��t�qFf+q�R��t�D��qD��R�J2d�JFd��teCoq�F�Z�R�D�2qeC�dDle��m+dD�2�qwo�J7Eikrq��t�Da�����Z��R+MZR+Stln�R�����K��+=+�e�8K=Q��df��DZSC�K��k0=�Z0qu��=�t���oED7�R��R�J��iKtt���diukf+ka���tK=VF�qC�dqMFRZakJC2dZ��+qSr�ZJF�Jn��=8k��l�l�mkJ�2E�t����+�qJ��05��+qefJq+���ZR�K��+qFf+q+d=�8�+=k���Rl���R�����2Zl+�+�2n8K=Q��Z���+��RDqK��ZR��ot�q�E����ZJFd��te5���ItEi0t���2EqwkRI��Sek+d��t�=tR��+d�78�05���S2E�7�q0+�=�Z0qu�lCrt��dt�=�kSC���1foEi�ti�ZiQkf2�t���2�=ateC�dqMFS�J�I�2=8ZEFK�RZtR�=QRq=wr��S�S+J���+�R+DZ�In2��8�ZIZS+S��Z�+K����r5��+=F�Jf��ZJFd��te5oif��ZJFd��2d=RkRJl��DJ���i2E��r��S�S+J�d�K2+Z�o0�M��rFd�n�+ef�dDle��m+dD�2�����iMFR�kt���R+=to�I�eMqeF��ateC�dqIod�JFd��teC�dqMFR�m�q�dRR�R�q�r�Z8�Ki2qZ8��eQZf=F�0�t0o�rRJStEi�k�eateC�dqMFRZJFd�nR0=R�+q2�Cmr����eCk�DI+�q�R�J�2�Id����l=�k+Jn��=8k��l�l�mk�eateC�dqMFRZJFd�n2E�RZ�q�r�Ze�leateC�dqMFRZJFdJn2�qwedeDFRZJFd��teC�dqMFRZJF�I�2Z��0ieR=k�dDE2KJ���JlZ��J�Ri�2d=Rr�qIE=�Fd�n�eCk�+�tSC�Z���teC�dqMFRZJFd��teCk�J7+��a�SrfF�qC�dqMFRZJFd��teC�dql���JF�Zn2E�RZ�q�+�qF�MCn2E�RZ��2od�JFd��teC�dqMFRZJFd��teC�dqlt�qk+d���fZ5�dqMFRZJFd��teC�dqMF�qMk��teC�dqMFRZER��teC�dqMFRZJt��52+ZV���M�+0+K�DRq=J8dDle��m��fF�qC�dqMFRZJFd��2��Rr��2t�+Jt�J���Z+edeDFRZJFdI�F�Z5�dqMFRZr�R�iF�qC�dqMFRZak�5k�JE����2EiKRt��Z+D2��qJ2E��oRD7kE��tdqMFRZJFd�it+w�+D2�������R+=8�+q2k�ZSr���R0=t�diMFE�k+�i72=t��q�kt����Zm��+S���n+K+��R+=k��SZS�q+�eQ�����vn��D�+d���+r�kE+�el+�+d�Q8���d�5�dqMFRZJF���=t��e���e��J��Z���eI�Cmr���eqD�R��a8f2��f�me+qqe�+m�r�2E0de�nkM+5�f�Mk��teC�d�D�f�Mk��tewZ��St�e=+d��RE�RZ+0K�Cmr���2KJ��+DS+�++rE��Rqe�o�eDFRZJFdIfF�qC�dqMFRZJFd��t0=8��e�F�qJF�I�2Z��0ieR=k�dDE2KJ���JlZ��J�E�dt=�o�+�+Rqa+leateC�dqMFRZJFd�nR+=8�q�r�ZSr�GfF�qC�dqMFRZJFd��2+Z��d�l���0+K�tdet�+D2�SCFk0���SZ5�dqMFRZJFd��teC�dqMFE�mrdD�R+Z��dqM�����+�utZ��0qM�J�+f1iRqe�edeDFRZJFd��teC�dqMFRZJFd��tewo�DDklZ��+�7RMIik��l�E�aF�e�td�Vkd���M�a��=ntfqnkdi�2feJF�I�R+ZVr+D�Z�Z8�K����Z���D2�SCaRleateC�dqMFRZJFd��teC�dqMFRZJFd��tewo�DDk�Dmr�����e�k�JS��C�rE=�2fqn8�C�SCqZ���teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFR��R�D�tF���Zf��ZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZ8�K����Z���D2�EJe+�CKF�qC�dqMFRZJFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teCk�JS��C�rE=�2K�K�+=�Zd�JFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC��=od�JFd��teC�dqMFRZJFd��teC�dqMFRZJFd��teC��q7tEi�+frfF�qC�dqMFRZJFd��teC�dqMFRZJFd��teC������ZJFd��teC�dqMFRZJFd��teC������ZJFd��teC�dqMFRZJFd��teC���SeSDkR��5t0oik��l�E�kR����fZ5�dqMFRZJFd��teC�dqMF�qMk��teC�dqMFRZER��teC�dqMFRZJ��i�te���J2F�Cq�ZnR+=8����MZMk��teC�dqMFRZJFd��t=t��e���eJ�K+��lqw�E+l�Ei�t�J�2�Id�d�nk�d8�ZF�l+S���n+K+��+ZfZS+SZ�+�+��K�R0�o�n���D2f+=+K�f20o�k�D������ReKtet�+D2�SCa+leateC�dqMFRZJFdI�F�qC�dqMFRZJFd��2��Rr��2t�+JF�J�2��JedeDFRZJFdI�F�Z5�dqMFRZr�R�iF�qC�dqMFRZak�5k�JE����2Ei�����kqDF�Eq�kE�7tfD�k�Z�tdqMFRZJFd�it+w�+D2�������2Ket�R�SeR�Mk��teC�d�DF0�0��=�2�e0�0q�+���rq�f��Z�ZEJD�lC�tE�5o�25�Rq�ZEi�efJ�Z0qr�l+rkE��e0=����VtdqMFRZJFd�it�0VtdqMFRZJt�IiRR�Vo�q�FE�0+K+Q��Z�ZEJDFE=m�+J�2�J�k���+�q�rEi�2Eq�o�eDFRZJFdIfF�qC�dqMFRZJFd��t0=8��e�F�qJF�I�2Z��0ieR=k�dDE2KJ���JlZ��8rE����=w�RIKFRZ���=�RR�Ro�JlS+0�+��2KJ�ZEJDeSqk+f=�R+=���D�kKZMk��teC�dqMFRZ��+2���=8ZqM�qkR��m�2�edeDFRZJFdI�F�Z5�dqMFRZr�R�iF�qC�dqMFRZak�5k�JE����R0��+�C��0i�����F�JFd��teCoq�F�qkR�Ii2�dd��rK�q=+K+7F�qC�dqMFRZakJC��Z��RIK�lDJ�+2dR�JRZ��l�l�mk����D7�fI�a��Dol��kMZ��l�J��i���DnZ��I�RZ=���JFd��teCo�D���JFd��t=wr+q��lC��J���o�kE�l�l�mkJdR+Ze�d����ZJFd���SZ5�dqMFRZJFd��tet�+D2�RZFd�n��Z�o�e�rw��+�JDRMe���DS�leaF��QR+=��d�K��+���qQ20Z��Ee��S+kR����MJVk�JQFS��+�Jn2��R�Ee�2fC�Z���teC�dqMFRZJt�D���=R�RJDFR���+�u+fDw���f��ZJFd���q�5tdqMFRZJFK=it�Z5�dqMFRZJF���eR�Do�+m��CMk��teC�d�DF0���d��R+o��dDl�l��r0�KRMJto�eDF�D0t�D�2E���K+r8�F�2�J�eR�Do�+m��G�R�ne���tM+�kSo�olqKe+D�ZK�K��t+eteqqq���o�eS+�eRI�+0eDFRZJFd��t�qwFRe�+�C0R�D�t=�r�e��l+k��5Z�+��d�e���e�e�oqDQ���akE�7tfD��0i��E�5+�i�eKZ7k+qE�Ri5�E��e�J5ZM25�l�5�JFd��teCoq�F�C=t�D��Mee��J2k�DkR�I�2+o�Zq��++��Rq�om�=t�dn+d=�Z+oV�f+Sel+���5�R�wo�Z5�dqMFRZJF��i�lZ5�dqMFRZ�t��D20Z�k0qlR��m�V�2+o�ZqI�ED��+��2E��k�eI����++5t0ZVZq0���e2rqJ�2�qntdqMFRZJtleateC�dqMFRZJFd�n2��RZ�IKEi2rqD�20Z+�D��SDk�d��2���Z0D�eR��R�J�tde0REJSE����iuRlq�o�i7tE=m�+�5�efe�kfCrkRe�2do��0Duod�JFd��teC�dqMFR�0��=�2f0�8�qSEq2rd�5RqZVod�M�lD�rdD�Rqo�kqq2FRZrR���t�0dk�e�+��mr�J�RMJko�Jl+SC�Z���teC�dqMFRZJF�J�Rq=e��C�FR�0��=�2f0�8�eI+�em�+D�20Z+�dDItEim+K0�Rq2��R�S��irFd�n20o�kqqS���k��i�t��KtdqMFRZJFd��teCk��lklC���Gn2��RZ�IKREit�RiKRqe�k�e�+��mr�J�RMJko�Jl+SC�Z���teC�dqMFRZJt�D���=R�RJDFR���+�u�fZ5�dqMFRZER�ateC�dqM�l�a����teC�dqM��o�2�JReRJl�eDFRZJFd��t�qwFRel��q�+KC�t0ZVZq0���e2rqJ�2�qw�E�It�Cm�Re�e�n�M+=rq0�2�JReRJlM�a�o�2�te+qDZK+��Sr�R�qfe�+�r��J�I�RR+ee�+i���ZS�2�JRF�qC�dqMFRZakJC2dZ��+qSr�Z8t�J�2qZ+���Se�Ck+���2�q��l�kR�iD��J��MZmo�imaf��tSD�kqD2kf��r���ei�Z0quol�kE��o+�nZi5��������eiQ�dqJtdqMFRZJFd�it+wZ�q2tE=md�n2KJ�eqD�F�D0t�D�2E���K�a�o�2�te�+i��+mFK2�2t�deKZ���+i8��2R�Mt�����F����0qfeKZ����mZ+0�tK�neSCDZ�+m��G�2E�Re+qD�K�reEv�eM�IeM�MFdeDFRZJFd��t�qwFRel��q�+KC�t0=8k��l+RZ�r�J�2+o��0q�kR��ZR�Dk�+q2R=�2S����+8ZR+q��1n8K=Q��df��DZSC�2+q����+�Z8Z�rn�d������teC�dqM��Z�t�D���=R�RJDF�D0t�D�2E���K�r8��R�+qe�n�M+=rq0�R�q5eSC�oK+k�So�eS��e0�q�K�=t�I�o��Iei�r��r�S2�2���F�qC�dqMFRZakJC��Z��RIK�lDJ�+2dR�JRZ��l�l�mk����D7�fI�a��Dol��kMZ��l�J��i���DnZ��I�RZ=���JFd��teCo�D���JFd��t=wr+q��lC��J���o�kE�l�l�mkJuR�e8��DSe+ek+d��2����dDl�l��r0�KRMJto�eDZ�Z8t�J�2qZ+���fZrFd�n2KJ�eqDrS+0+f=K��eCk�e���Ck+M����ZVod����ZJFd���SZ5�dqMFRZJFd��tet�+DSrS�0���ERE��o�Dr��rrd�nR�J��+DM���r�+J���Z+�d�i�l�k��qJ2+=��0D�kf+����R0e�Zdi�kK+����t�0�Z�e�R��Z���teC�dqMFRZJF�JQ2qZ���C�FR��r0��RqZRZRe�+EDmrdDnte�ZDItEim+K0�Rq2��R�S��i�Z���teC�dqMFRZJF�I�2+oi��q�r�Z=+K�����od�M�C=+K��t��KtdqMFRZJFd��tewo�DDFR�J+��d2d=te�M�C=+K��t�eC�DDFR�0��idRqFdZd�2od�JFd��teC�dqMFRZJFd��t0Z�Z�DMFS+Fd�7tr�Z��l�l�kK�K2+oio��MFR�rk+I�2+oi���f��ZJFd��teC�dqIr��JFd��teC�dqMF�Ckk�5t+ZRZ�eI�+aF�Ju2+=������MZMk��teC�dqMFRZJFd��tetkEJSRZrk�C�t�qCZ�i2��Cq�++�t�0dk�r��M�k+leateC�dqMFRZJFdI�F�qC�dqMFRZJFd��2+Z��d�M�EimR�I��+e�k�e���Ck����SZ5�dqMFRZJFd��teC�dqMFR��r��ntrd�qM2�ZrK�D2+=�Z�e���Ckd�7��qt�+q2Ei�Z���teC�dqMFRZJtMCateC�dqMFRZJFd�n2��R�0q�r�Z8t�J52+=eZ�C��E���Mqu2ZRo�JM����r��nt��KtdqMFRZJFd��tewo�DDFR�8t�D�2fqC�DDFR���+�u+fDw��Cr��rrdV�2Ket��J��Rq=+K��2KJ�e0qI�ED��+��2E�8��0��Sqk����2Ed�r�qlR��0+K+nt�q�edeDFRZJFd��teC�dqMFRZJt�J52�d�rdqleRi0�J��Z���eI�Cmr��52+oiZ�Jl�R�k�ZD�fqCkiMFR���+�ut�enedeDFRZJFd��teC������ZJFd��teC�dqM�qkR����eCk��lklC���Gn2d=Ro�J�R�Cm��+5t0=8��JS��Ck+�q�2+ZV��iMFR�m�KqQR+ZV�qDl�lqa+leateC�dqMFRZJFd�n��Z�o�e�rw���+�d2�ek��J��lek�Zn2��RZ�IKEi2rqD�20Z+o��f��ZJFd��teC�dqItEi0t���2EqCk�e�+�D�Z���teC�����d�JFd��trVo����ZJFd��te5�K�r0��2���eSGn�+rkS��RR�eSCSZK�r8��R�+qeiD��+rk�2�eEd�e�+i��fZ+F�oM��eKZ���+=2r�oM��e0�n+�+kZR���0�e���e��o�ef+eSG�2K+r�R��e�J8eRI���+�kSo�e�qKeiDt�+rkS��Rt�MeSCSZK�aem��eKJ�e�+i���r22�o��eSCqr��k��G���0�eS��keDFRZJFd��t�qwFRel��q�+KC�t0oi���lkl�kFdJu��=8o�J�2�o�olqKe�ZleK�o�o���eSJ�+�+kFd�Mk��teC�d�DF0���d��R+o��dDIFE=���d2fqwk�e7tE=qd���lJ7�Sr�R�i�e���ZSC�E�5+�iQe�i���J�Z��J�E�QtR����J��l+5a�i�RED����f���akE��20�7Z��o�1dZd�JFd��teCoq�F�Z�R�D�2qeCk��l�l�k+K0i��ewo�J7Eikrq��t�qZ�qq+����R+=k��DrE=q2+=dZR�2Zl+�Rl��8K=Q��Z���+��RDq2S�i8�+7kfn��D���Z���q�o���el+Q�SZe����o�����G���D�tqateC�dqMFS�J�JfR+=8k�J�FR�=+K�Rq=8rqqS��+=+K��tZ�ZR�l+E�kR�q�e0��Z��a8�0�ow��e0�nk��o�RE�eqDi+�+���I�RE�eKZ���+�rq2��MJ�eRI�Z���+rfefqeeEJ�R��aeE����0��q�CZd��FSo�2���e��qKof�d�R�Ju�q�CZK+i8fI�eE+�eM�MFdeDFRZJFd��t�qwFRe�+�C0R�D�tZ��Re���+JF�J���=t�R�St��0��=nZi���DkR���tfJ5kR�r�EZ��E��e�J5Z�+��d�e�iQt+=�kd����q5����oE��o�Z7�fe=tl��tRD�k�25��ofr�i�t�JnZ��Z��J�E�����nZq���f+���20�7Z��Z��JZ���R�I�2���kR�2E����0�eR��2�+rkS��tS�Me��ae�+m����de7eSCqr��r8��R�+qeii��fZ�G�o�ZfeRv�Z�of�d��K��e+qDRM�=�K2�2��FeKZ�t�+�+fo�ef+�e�+i���kf�R0e�eKZ�t�+rk�8�d2���=8o�q7+�Ck�+rV�d�S��Cq�R����rd�d�=�fFn8K=Q��Zno�+DrlCqkt����Zm��+qol+�2+�K��fk��5�dqMFRZJF���=t��e���e��J��Z���eI�Cmr���eqD�R��a8f2��f�me+qqe�+m�r�2E0de�nkM+5�f�Mk��teC�d�D�f�Mk��tewZ��St�e=+d��RE�RZ+0K�Cmr����MJ�o��I�Cm�Re5t0oi���lkl�kFfZ�R+=8�+q2k�Z8t�J�2���Z�eurRJ2fZ�t0=to�JS+��0R����SDCZd�MZ�Z8��i���ZR�R����eR��idRqF�r��FSZe����F�qC�dqMF�ZMk��teC�dqMFRZ=+�q�tde�Z�D2E�mrqJERq=�o�rK�DaF�I�2Z��0iMFR�m+�2�2o�kd���MZMk��teC�dqMFRZJFd��t=t��e���eJ�K+��lqw�E+l�Ei�t�J�2�Id�d�n2+Z��R�u��+SRDqK�Q�+Zd��S2f��8K=�kRe�t0oi���lkl�kF��fF�qC�dqMFRZJFd���q�5�dqMFRZJFd��tetr��SrRimr�2�tF����Se�C0��Ktdetr��SrRimr�2�t��KtdqMFRZJFd��teCk��l�l�k+K0i���fZdqMRR�JF�I�2+oi��IK+�CF+��fF�qC�dqMFRZJFd��t0Z�ZR�l+�q0��K+0Z�Z�D�F�qJ��i���=kk�JM���=+K�Rq=8rqqS��+=+K��t��KtdqMFRZJFd��teCk��Se�CkR���R+ZV+R�SrRiF��+fte��qM�Cm�qJ�2��kk�J��Cm+���+�CedeDFRZJFd��teC�dDI��C�R���+0Z�Z�D�F�qJ��i���=kk�JMkl�=+d��2�eto�JS+R�0t��iRqeno�FSZeF��fF�qC�dqMFRZJFd��R0oV��+f��ZJFd��teC�dqMFRZJFd�n2��Rr��2t�+J�MC�R�J�o�J�����rq��RMJkrRJ��E��R�D�R+=n��Z��C=��iu��eCk�JS+�C=�KqnR�ef�dDIFE=���d2fqnedeDFRZJFd��teC�dqMFRZJ��i�te���J2F�Cq�Zn2��Rr��2t�+a����SZ5�dqMFRZJFd��teC�dqMFRZJFd���l05��J��Ei���=nZq��SJ�R���e�J��MZ��=5r��5e������+tdqMFRZJFd��teC�dqMFRZJFd��t=R�EJl+Ei�F�Zn2+o�r�D2t�J�+f=+2+oi���od�JFd��teC�dqMFRZJFd���q�5�dqMFRZJFd��teC�dqMFR��r���2��RZR���Cm+�+��ewo�J7�J�+fZ52qZ�kEe���C=+K��td=t�R�S+SCJF����+�CZd�MkKZMk��teC�dqMFRZER��teC�dqMFRZJt��52+ZV���l+���t�I�tdet�+D2�������te��qM����r���2��RZR���Cm+�+dt0=�r�q2t�CR��idRq�fk��l�l�k+K0i��eno��f�d�r��=�teC�dqMFRZJ��i�tdetkE�2t�qk+K�+0Z�Z�D�r���r�J�2��t+R�SrRiFk�Cn��Z�Z�DS���0F��fF�0VZ0qMFRZJFd��teC�dqMFRZ0���RMJtrRJ2FR�8r���2+=tr��Se�Zk�q��R�eto�I�e�Z0��idRqo�rR����Z8���n2qZRr��l�R�rkReKtetZ�q2tE=mR�d�t�0�oRr��S+2rq��R�I�k�D������d��R+oi�0i�o��rM+E+q��q��0J+�+��RM�R��e+�qCt�++���q�odqM�Cm�qJ�2��kk�J��Cm+��t�0dk��Se�CkR���R+ZV+R�SrRia+lea�l0V�dqMFRZJFd��t1�tdqMFRZJFd��tew�+D2�������t0=8���I+�qmk�eateC�dqIr��Mk��tewZ�e��MJ�R�J�t=�r�q2�C��J���o�kE�l�l�mkJf2���ZR���SqaF�J�RR�5o�+f��ZJFd��teC�dql+ED=�K=�tRDVZ�e�+t�Jk�eateC�dqMFRZJFdJf2���ZR���SqaF�J�RR�5o��f��ZJFd��teC�dql+ED=�K=�t�DfZEeItEiFkRrfF�qC�dqMF�qM����teC��eIt�C0�2�Rqew�R�SeRD0��i�2Eqwk�DltE��rE=�20Zf�dDl���kF��ateC�dqIod�JFd��teC�dqMFR��r��ntF��d���E��k�d2fqC�0iD�C=��iu��F��qDl+�J=+d����q���r�k�im�fZ�t�0dk�0�rR��Z���teC�dqMFRZJ��2dRqZe�dDl���kFfZ�t0o�rR�IF��0FfZ�t0=8���I+�qm�M0�R+=Jo��f��ZJFd��teC�dql���JF�Zn2��Rr��2t�+2r�D�2�q��+CFSCqZ���teC�dqMFRZJFd��tewo�DDFR�k+K�f��=n�dDl���0t�Ii��eno�+f��ZJFd��teC�dqMFRZJFd��teC���lklqmr�e�2E�Rrdq�+���rq�f��Z�ZEJD��V�t��KeS��F�+�8���o�q�e+DM��+=e0��td��R+Ztk�+ktdd�2�Je+q����r8���tdZe++���o�e+e5eR�DrK+�kS2�R0e�e+qSrK+�������7e0�l�+D2k�i�8�ZtZE+�efC��R�����0����RE��8K=7�Re�t0Z�Z�DMkKZMk��teC�dqMFRZJFd��t1�tdqMFRZJFd��teC�dqMFRZk+f=uRq=KtdqMFRZJFd��teC�dqMFRZJFd��t=t��e���eJ�K+��lqw�E+l�Ei�t�J�2�Id���SrSZm�KqnRqe�k��FRqrFd�n2�eRr�eI+�CaK�nR�Iikd�od�JFd��teC�dqMFRZJFd���q�5�dqMFRZJFd��t1�tdqMFRZJFd��tew�+D2�������t0o�rR�IF��0�leateC�dqIr��Mk��teCZ0�D�d�JFd��teCoq�k�d8�ZF�l+DZS��+���8�o�k��StEDq+f=Q8�o���+=tEZ�2ReD�R��ow��ef����5�R�wo�Z5�dqMFRZJF���=8���I+�qmkJu��=8o�J�2�o��w�+e+D��+Z�rd�o��IeS�lk0eDFRZJFd��t�qwFR�lklqmr��ut+Re�0�+�Z0��i�2Eq�o�i8�E��em��kSC���1foEi�ti�ZiQkf2�t���2�=ateC�dqMFS�ak�=ateC�dqIF�q=R�D���Z+��D7+�+�r�J�2�Id��1K��C�k�D�2�iw�+DS����R�JQ2e�k�rK�q=+K+7t��5�dqMFRZqZ���teC�dqMFRZJt�D���=R�RJDF�Z��+�7RMe8��el��=�rq+5+fq�Zq=M�l�8�SZ�t�0�2diD���2f=mt��fZ0D�Z�Z8rSZ�t���odDI��C��Ri�R�qnedeDFRZJFdI�F�Z5�dqMFRZr�R�iF�qC�dqMFRZak���di7�RD=e��D�di7�fJ7�leke���t���k�����Zr�E�QoE��k�+m�fJ�e�i�tR��ZqDF��q�r�iKRt��Z+D2�Rq����7tR�5kR�r�EZ�����tRD7ofIf�E�=e��7eq=�kRIfZ��Jkd�JFd��teCoq�F�Z�R�D�2qeC�dDl��C0t�D�R+oi��qI��C��Ri�R�q��f2�+�i�e�+�+�+u�Ri5�E�52�ateC�dqMFS�J�JfR+=8k�J�FR��R�I�2�ikk�JI+EiJt�V�2���Z+D�����e+�����R+�+�E���������etdqMFRZJFd�it+w�+D2�������R+=8�+q2k�o��w�+e+D���+��2�R0e�e0qiFKdtK�2t��e0ilkM�o�o�Zfe�Z��eDFRZJFd��t�qwFR�lklqmr��ut+Re�0�+�Z0��i�2Eq�o�i8�E��em��kSC���1foEi�ti�ZiQkf2�t���2�=ateC�dqMFS�ak�=ateC�dqIF�q=R�D���Z+��D7+�+�r�J�2�Id��1���i0��+�R0ZR�q�7��J0t�J�tdetk��I�q��dRqef�dDl��C0t�DSR+ZVr+D�kd�JFd��t=KtdqMFRZJFd��tewo�DDFR�k��K2KJ+o�+f��ZJFd��teC�dqMFRZJFd���w��e�Dq2D�8�q�k0�=ZlC�kR=Q��rf���q��Zq8K=Q��ZFoS+=RSInK��Z+r�kl+=+f+q���8�rf���q��Zq2+Cn��+nZRZ5�dqMFRZJFd��teC�dqMF�qkR�Ii2�dd��o�eRi0�I�2+ZVrRelklZ2r0�nRR����Jl+��k+K�tde�k��2Eim+�efR�e�odDIE�=R���R��KtdqMFRZJFd��tew�eDFRZJFd��teC���SRR�J�Id2qZf��C�FR�0��=�2f0�8��S��==+�J7Rq=t�0�MkfCqZ���teC�dqMFRZJFd��tew�+D2�������+K��edeDFRZJFd��teC������ZJFd��teC�dql���at�J�RqZ0�EJS��C�rE=ER+ZVod�M2f�F���q���oqC�2f+8�d2���=8��qSrRirkRr�tRq�ZDIE�=R��d����E�It0ZmrdD�2��R�q�S��C�rEZ5t0Z�r��ItqZ�+f1iRqenZD�tEJ2k�+0t��V8d��k��rFd�n�oiodiMFR�m+d2�R�J���e�Z�Z+�0D����+�JRE�rD�q�Jo��2od�JFd��teC�dqMFRZJFd��t0ZRo�DSrRim�qJutF���oirMZMk��teC�dqMFRZJFd��tZkZEe�+E=�rEZ�tdetZ�q2ED=���utZ��0qM�C0���dt�=KtdqMFRZJFd��teC�dqMFRZJFd��tet��Jl+��k+K�2K�d��q�r�Zm�+2Kt=�o�JI+�Z=t�JER+Ztk+1�+�ek+K��2E���dDl�MCk+K�m�2�odqM�C=��iut��KtdqMFRZJFd��teC�dqMFRZER��teC�dqMFRZJFd��tew�+D2�������t0ZRo�DSrRim�qJu�fZ5�dqMFRZJFd��t1�tdqMFRZJFd��tew��JI�EiqZ���teC�dqMFRZJFd��tew�+D2�������+K��edeDFRZJFd��teC������ZJFd���q�5tdqMFRZJFK=it�Z5�dqMFRZJF���eS�Me�+5r��tS�Me��ae�+m����de7e+0ntK+�FK1�t�2Ke+0n+K�aem��2+eIeRI�+M+��V�20ZFeRJ�+�+5���olq8e0qiFKdtKfefqJe���oK+rk����qie+0nFK+�+fo�Rt��eqqMt�+5ZSG�o�q�e+DM��+ikR1�ed�aeSGn�M+5�t�fefq8F�qC�dqMFRZakJC2dZ��+qSr�ZJF�J���=t�+�����kdJu��=8o�J�2�o��w�+e+D��+Z�rd�o��IeS�lk0eDFRZJFd��t�qwFRel��q�+KC�t0Z�r��ItqZ�+f1iRqew�E�It�Cm�Re�e0�n+�+kZR+S���eeSC=tM+i��DMk��teC�d�DF0���d��R+o��dDl�lC=rq+�RRd�ZEJl+E=mk����5���a2E�itd=7oK���RV�R���e0i�Z0quol�kE��o+�nZi��+qS�lDk�t�Vk0�S��rn�Sq�Z+ZIkl+=��CqkS�5����teC�dqM��Z�t�J�2���Z�qM��m+fZ�2Ket�R�SeR�J��ZnkE+q+S��+f=Q8�o���+q2R=�k��FR��teC�dqM��Z�t�D���=R�RJDFE=��0D��+e��f2�+�i�e�Z�k0q2���aZE�D�di7�fJ7�lIf�E�K2=7�R��Rim����e��ateC�dqMFS�J�I�2=8ZEFK�RZtR�=QRq=wr��S�S+J���+�R+DZ�In2��8�ZIZS+S��Z�+K����r5��+=F�Jf��ZJFd��te5oif��ZJFd��2d=8o�����CkdJ���o�kE�l�l�mkJER�JRr����R�kR��M�++Vo���+0J0t�J�tdetk��I�q��dRqef�dDl��C0t�DSR+ZVr+D�Z�Z8�f=�2�J+�+D���e�rq+Ktete�JSZKqm�q�K20entdqMFRZJtleateC�dqMFRZJFdJ�REqC�dDl�lC=rq+��SZ5�dqMFRZJFd��teC�dqMF�Ckk�5t+ete�JSZfCJtleateC�dqMFRZJFd��teC�dqMFRZJ��i�te�k�DIkl�mFd��tetr��l�lDr+Mi2+�0o�Dl��i0t��5t�en��+f��ZJFd��teC�dqMFRZJFd��teC�dqMFRZJt�D���=R�RJDFEJ2+leateC�dqMFRZJFd��teC�dqMFRZJtMCateC�dqMFRZJFd��teC������ZJFd��teC�dqMFRZJFdJ�REq�Z�e�+E�2r�����Z���1���emF�Z7�lDV2q=QeR�a��=7��qtk��I�q��dRqrd�qC�tEJ2k�+0t�q�ZDIE�=R��d����E�It0ZmrdD�2��R�q�S��C�rEZ5t0Z�r��ItqZ�+f1iRqenZ�iZ�+F�MCitRid�+C�rl�F����2+e�odqM��m+fZKtetZ�q2ED=���u��ew++n+0=2r��+02��+n0�+kR���SZ5�dqMFRZJFd��teC�dqMFRZJFd��t0ZRo�DSrRim�qJutF���oirMZMk��teC�dqMFRZJFd��teC�dqMFE�mrdD�R+Z��dqM���m+d2�R�J���e�FE=���n2+=t��J��MZMk��teC�dqMFRZJFd��teC�dqMFRZJFd��t0ZRo�DSrRim�qJu+K����C�F�+kR�e��+Z�o��2FE����q�R0Z8�qDS��im+�����e�k��2Eim+�efR�ef�dDIE�=R����fZ5�dqMFRZJFd��teC�dqMFRZJFd���q�5�dqMFRZJFd��teC�dqMFRZJFd��2��Rr��2t�+JF�J�20ZRZ�DSe�C���eateC�dqMFRZJFd��teC������ZJFd��teC�dqMFRZJFdJ�20=���+f��ZJFd��teC�dqMFRZJFd��teC��e�+�C0R�D�t�d���f��ZJFd��teC�dqMFRZJFdI�F�qC�dqMFRZJFd���q�5�dqMFRZJFd��t=8���I+�qmk�n��Z�o�e�rw�2rE�����ZqDl+�D��Eiw��=t��ME=0t�J�+���Z�D�Z�Z8�d2���=8+�qS�M�k��fF�qC�dqMF�qM�fG�F�Z�kEJl��D��I�2+ZVrRelklZ2r0�nRR����Jl+��k+K�F��KtdqMFRZJt�J�2+=kk��l+RZ8��q�2�Jt��1Kkl�m�MC7t�DKtdqMFRZJt�J�2+=kk��l+RZ8��qnRq=ko�0�+�ZJFK=�eR��F�+m���eS��e0��8K+=d1�2t��e0ilkMof�d�R�Ju�+Z�o��2FE����q�R0Zr�E�5+�i�oMZnZE�KtdeDFRZJFdJf��Z8o��S�RZk�q��R�eto�I�e�Z2r�qQ2�I��E�It���r��5t0o�ZqDl+E�q�K�K��eC�DlEi0�RiQRqentdqMFRZJtleateC�dqMFRZJFd�n��Z�o�e�rw�2r�+�R0ZR�E+lrSeJ�MC�t0o�ZqDl+E�q�K�K�fZ5�dqMFRZJFd��tetr��l�lDr+M+ER0ZRrE�S�EiJ�MC�t0Zt������Dk+leateC�dqMFRZJFdJ�REqC��D���e�rq+��SZ5�dqMFRZJFd��teC�dqMFR�0��=�2f0�8�1�Ei0�RiQRqeC�qleRi0�I�2+ZVrRelklZ2r0�nRRq��0D�kKZMk��teC�dqMFRZER��teC�����d�JFd��trVo����ZJFd��te5�K�r8��R�+qe0qiFKdtK�R��EeR�q�M�o+q�K�Kei�k��FdJMk��teC�d�DF0���+2���=8ZqI��C��Ri�R�Z5�dqMFRZJF���F�qC�dqMF�Z0+dDK2+Ze��D7+�+�r�J�2�Id��J��R�k+E=d20e�o�+f��ZJFd��teC�dqItEi0t���2EqCk��lklC���GnRMI�ZqDl+E�q�K�K�fZ5�dqMFRZER�ateC�dqM�l�a����teC�dqM��o�t�2Ke+0n+K�Jor�e���e�+i�Re�+�Dmr���R�J+Z��S+�iKR�Z��d�E�E�5+�i��lZateC�dqMFS�J�J�Rq=trRe�e�Zm+��dRqZt��rK�q=+K+7F�qC�dqMFRZak�=ateC�dqIF����S=�RSqw�R�SeRD0��i�2Eqw�+D2���0R�DQRq+�kd�M�MZMk��teC�dqMFRZ��+2���=8ZqM�C=��iu��F��qq2�C�kRZ72��R�EIK+�q�rq+d2+Z��0�od�JFd��t1�tdeDFRZJFd��t�q5tdqMFRZJFd�it�D�fFn+�C�ZRqa�f+qFf+q�R��t�J��=�leke���t��7�R���ZrZd�JFd��teCoq�F�qkR�Ii2�dd��JS�M�k+�IV2Ket�R�SeR�Mk��teC�d�D���JFd��t=wr+q��lC��J���o�kE�l�l�mkI�Rq=�r��M�MZMk��teC�dqMFRZ��+2���=8ZqM�C=��iu��F��qq2�C�kRZ7��ZRe��M2fC�Z���teC�����d�JFd��trVo����ZJFd��te5�K�Je�r�Rt�Se0qiFKdtK�eS��2+o�k�D2kEiKR�Z��d�E�E�5+�i��lZateC�dqMFS�J�J�Rq=trRe�e�Zm+��dRqZt��rK�q=+K+7F�qC�dqMFRZak�=ateC�dqIF����S=�RSqw�R�SeRD0��i�2Eqwo�J�EiqF�Z��SZ5�dqMFRZJFd��t=8���I+�qmk�n��Z�o�e�rw�2r02���=J�d���l+k��2dt�qnedeDFRZJFdI�F�Z5�dqMFRZr�R�iF�qC�dqMFRZak�5k�JE����2E�D�di7�fJ7�E�5EDm�d�u2��S����2��8�+=k��SFS�C��ZJFd��te5���ItEi0t���2EqwZ��2k�iktl=u��=8o�J�2d�JFd��teCoif��ZJFd��2d=RkRJl��DJ���i2E��r��S�S+J�d�KR+=��q�����k�Z��SZ5�dqMFRZJFd��t=8���I+�qmk�n��Z�o�e�rw�2r02���=J�d����e�R��ut�qnedeDFRZJFdI�F�Z5�dqMFRZr�R�iF�qC�dqMFRZak�5k�JE����2E�D�di7�fJ7�E�5EDmr��Rqo�r�iSEi�rqC�o��f�RZa�E�������diftdqMFRZJFd�it+w�+D2�������2qZ�e�DS�=�r�J�2+o��0eDFRZJFd��t�0VtdqMFRZJt�IiRR�Vo�q�FE�0+K+Q��Z�ZEJDFEDmr��Rqo�r�Jl+�D��RZ��SZ5�dqMFRZJFd��t=8���I+�qmk�n��Z�o�e�rw�2r02���=J�d�����m�qJ�2E��Z�Dl+�D��Re��fZ5�dqMFRZER�ateC�dqM�l�a����teC�dqM��o�o�CeSGn�M�Jor�e���eSCDZ�+kF�d�olq8eqqMt�+rkSF��l�rei�r0eDFRZJFd��t�qwkE�l+ED=r0�D20Z2�leke���t�eateC�dqMFS�J�J�Rq=trRe�e�Z���q�20�5�dqMFRZJF���F�qC�dqMF�Z0+dDK2+Ze��D7+�+�r�J�2�Id��0�k�i�r���RR�V���M�MZMk��teC�dqMFRZ��+2���=8ZqM�C=��iu��F��qq2�C�kRZ7R�J���0�Z�=��S=�t�qn�+C��MC��q��t�DKtdqMFRZJtMCaF�qC�dqMFS�akR�ateC�dqMFS�J���Q�d�=��Cqk��ZR+MZR+=RSIn+���Z+oKof+qe��n��D�+rdoq�5�dqMFRZJF���R�J���0�Z�ik��ZV��+=FSCf��ZJFd��te5���ItEi0t���2EqwkRI��SeMk��teC�d�D���JFd��t=wr+q��lC��J���o�kE�l�l�mkJQ2ZRkE��+E�aF��fF�qC�dqMFRZJFd��2��Rr��2t�+JF�I�2Z��0ieR��R�I�2�q��q0�k�i�r���R0e�o�Cr��0t��iRqe�edeDFRZJFdI�F�Z5�dqMFRZr�R�iF�qC�dqMFRZak���K���RV�R��D�di7�fJ7�R�aa�int�J��0q7�EZ��Ei�ef�nZR��kffR�JFd��teCoql��e=+d��R+Z8o�Dq+f=7ZR�ColZ5�dqMFRZJF���=8���I+�qmkJD2�I�odeDFRZJFd��t�0VtdqMFRZJt�IiRR�Vo�q�FE�0+K+Q��Z�ZEJDFEDm��iQ2�J�kRJl+R�aRleateC�dqMFRZJFdJ�Rq=trRe�e�Z8t�J52+=eZ�C��R=0t�J�tde0kEJl��D=r0�D20Z+�0�rMq8r�J���Z+�0�f��ZJFd���q�5tdqMFRZJFK=it�Z5�dqMFRZJF���eS��F�+�8���tS�Me��ae�+�kS2�R0e�e+0nZ����Mk��teC�d�DFEim��D20ZRkK+m����de7F�qC�dqMFRZakJC2��Rr��2t�+J�dD�2�JftdqMFRZJFd�i�lZ5�dqMFRZ�t��D20Z�k0qlR��m�V�2+o�Zql+�+�+dDKRqZ��d�2od�JFd��teC�dqMF�qkR�Ii2�dd�dDIE�=R��d���k��I�qaF���2E��kRJl+E�8�R���e0r�e7+Ei8��eateC�dqIr��Mk��teCZ0�D�d�JFd��teCoq�2RD����Eo�+Dt�Z��e��R��om�SSC�+�C�8�qw�S+q�SC���ZJFd��te5��D��RD0R���RR�V�M+m����de7F�qC�dqMFRZakJC2��Rr��2t�+J�dD�2�JftdqMFRZJFd�i�lZ5�dqMFRZ�t��D20Z�k0qlR��m�V�2+o�ZqlR���r��uR+Z8o�D��fCqZ���teC�dqMFRZJt�D���=R�RJDFR�0��=�2f0�8�1���C0t�q5t�JkZq0K+�D�+dDKRqe�o�Cr��0t��iRqe�edeDFRZJFdI�F�Z5�dqMFRZr�R�iF�qC�dqMFRZak���K���RV�R��D�di7�fJ7�R�aa�int�J�ZMZr��ZkoE��t�qateC�dqMFS�J��D�R�eR�qDS+�iKR�Z��d��tdqMFRZJFd�it+w�+D2�������RRd�ZEJC��ZJFd��te5Z0eDFRZJFdJf��Z8o��S�RZk�q��R�eto�I�e�Zk��qQ��=���DM�fCqZ���teC�dqMFRZJt�D���=R�RJDFR�0��=�2f0�8�1���C0t�q5t�JkZq0K+�Dk+��7t�F���K�q0+�+7�fZ5�dqMFRZER�ateC�dqM�l�a����teC�dqM��o�o�CeSGn�M�Jor�e���eSCDZ�+kF�d�Rt��ei��M+�ZR��RS�5F�qC�dqMFRZakJuR�e8ZEJl��=��S=�eRJl��+5F��Mk��teC�d�DF0���+2���=8Zqlt��mr�ZateC�dqMFS�rZ���teC��eI+Eqm��iQtZkrRJ���C=+Kq�t=�kEe��Sem�d�D20Z+�d�2od�JFd��teC�dqMF�qkR�Ii2�dd�dDIE�=R��d���k��I�qaF��uR�e8ZEJl��=��S=�t�qn�+C��MC��q��t�DKtdqMFRZJtMCaF�qC�dqMFS�akR�ateC�dqMFS�J���Q�d�=��Cqk��ZR+MZR+=RSIn+���Z+ZFom��efCq�+��8��ek+�5�dqMFRZJF���20o�Z+D�rRDm��iQ2�J�kRJlR�iKR�Z��d��tdqMFRZJFd�it+w�+D2�������RRd�ZEJC��ZJFd��te5Z0eDFRZJFdJf��Z8o��S�RZk�q��R�eto�I�e�Zm�Kq�R�C�o��S��J�+dDKRqe�o�+f��ZJFd��teC�dqItEi0t���2EqCk��lklC���GnRMJ�r��ItR�8r�=�2E��Z�0��lC�r���RR�V��D�kKqF�F�2��R��Duod�JFd��t1�tdeDFRZJFd��t�q5tdqMFRZJFd�it�=kEZ�2R���Rqa�f+qFf+q2+q�8�Z�ol+�el+�+f��ZR+���+D8��n+d���R��k�Z5�dqMFRZJF���2dZ��ErK�l���+��o��f�RZa2d�JFd��teCoq�F�qkR�Ii2�dd��q��S�mFR��teC�dqM�f�Mk��tewZ��St�e=+d��RE�RZ+0K�Cmr���2dZ��ErK�l���+�5t�=KtdqMFRZJFd��tew�+D2�������t0=t���2�S�F�Mq���=t��M�lZ�R��u�MI��+DM2fCF+MC7��=8r+D�2KZMk��tew�e���ZJFd���lq5oeDFRZJFd��t�q��Rvd���7eq=5kR�r�EZ��E��t���kd�m�lFf����ew�5�f��o�ZJ�E��tKCateC�dqMFS�Jt���20ZRkE�l+E��20ZqeR�M�0eDFRZJFd��t�qwFRe�+�C0R�D�tZ8ZEI�Zd�JFd��teCoif��ZJFd��2d=RkRJl��DJ���i2E��r��S�S+Jt���20ZRkE�l+E�aF��fF�qC�dqMFRZJFd��2��Rr��2t�+JF�I�2Z��0ieR��R�I�2�q��Er�+�ek+dV�RqZ��0�rMq8r�J���Z+�0�f��ZJFd���q�5tdqMFRZJFK=it�Z5�dqMFRZJF���e0�n+�+kZR�tS�Me��ae�+k�Rv�20ZFe0D���+rkSF�eS��e����fr���w��eR�lZ0eDFRZJFd��t�qwFRe�+�C0R�D�tZ��Re���+Jt�ZVeiDe�+m�Rd���qae0�qK�o+q��Z0kd�=��1n8K=Qt��VeiDe�+m�Rd���qae0�qK�o+q�+Z0kd�=��1n8K=Qt�Z�eiDe�+�8f����qre0�qK�o+q��Z0kd�=��1n8K=QFdI��S+�el+�+�CK8�rdkt�D�E���R��t����qD��R�J2d�JFd��teCoif��ZJFd��2d=RkRJl��DJ���i2E��r��S�S+J�dD���o�k�e��fCqZ���teC�dqMFRZJF�I�Rq=�r�q�r�Z8t�J52+=eZ�C��R=0t�J�tde0kRIK+�+kt��7t��KtdqMFRZJFd��teCk��l+��0Fd��t=�r�e��SqkR�JKR+Z����M���S�ReKt�qf�0iMFR�0��2d��enedeDFRZJFd��teC�dDIEiqt����ewoRr��S+2rqJ�R�I�k�D����0��2d��ef���It��k��fF�qC�dqMFRZJFd��2��Rr��2t�+J��eateC�dqMFRZJFd��teC�d�K�f=8����qCk��l+��0��efR�eftdqMFRZJFd��teC�dqMFRZ8r��Vt�qC�+CDFR�0��2d���K��=�Zd�JFd��teC�dqMFRZJFd��t�e��D�F�qFk�n��ZRe���ofq2fZateC�dqMFRZJFd��teC�d�Kkfq8����qCk��l+��0��euR�eftdqMFRZJFd��tew���f��ZJFd���q�5tdqMFRZJFK=it�Z5�dqMFRZJF���e��ae�+���o�2�Je+q����Jor�e���F�qC�dqMFRZakJC2dZ��+qSr�Z=+K�tetZR�SrRqkR�q�t�Da���2���R+MZR+Stln�R�����K��+=+�eC��ZJFd��te5���IFE=���dtZ�ZR�MFR�kt���R+=to�I�e�ZJ��Z�k0�=tR���e��+ZIZt�q2R=�2+=dZR�RZm�n��D�+d���+r�kE+�el+�2S�i8�+7k�Z5�dqMFRZJF���=8���I+�qmkJD2�I�odeDFRZJFd��t�qwFR�lklqmr��ut+Re�0�+�Z0��i�2EZ5�dqMFRZJF���F�qC�dqMF�Z0+dDK2+Ze��D7+�+�r�J�2�Id��0��lC�r�e5t0o�rRJStEi�k�CV��eCk�DI+�q�R�J�2�Id��M�MZMk��teC�dqMFRZ8�dD���o�k�e�F�qJF�I�2Z��0ieRqmr���R0=e�d�od�JFd��teC�dqMFR�qFd��tetkRIK+�+kt��mt�e����ir�Za��5t0Z8ZE�SeR��rSe7��J�q=�r�����0i2E�t�qZ��M�e��0t�rV��f��ZJFd��teC�dqM�+J�MC�t0Z8ZE�SeR��rSe7�+���q=�FSJJF�ZnRRd�rRJ��DS�RF��Rq0��i�Eqmr���R0=�20�Kkf=8r�C��lDJedeDFRZJFd��teC��e�+�C0R�D�tetr��l�lDr+M+ER0ZRrE�S�Eir+M+Q20Z�kE�����qFfZ�t0=nodqM�+0+K�DRq=J���Z�Z8��Ii2���r��S�S+F+����fZ5�dqMFRZER�ateC�dqIF�q=R�D���Z+��D7+�+�r�J�2�Id��1���C0t�q5t0o�k�JS+SCqZ���teC�dqMFRZJ��i�td=w�+DS���m+d2�R�J��dD����rk+J�R+oi��iD2KqJkRZ�t��Vo�qD�SC8�SZ�t0=t���2�S�F�Mq�2�Jt��1Kkl�mFfZ�t0oik��l�E�kR���t�=KtdqMFRZJFd��teC�dqMFRZ��+2���=8ZqM���R�JQ2ZR�qZu�E��Z���teC�dqMFRZJtMCateC�dqMFRZJFdJ�20=���+f��ZJFd��teC�dqMFRZJFdJ�Rq=trRe�e�Z8�RrfF�qC�dqMFRZJFd���q�5�dqMFRZESG�