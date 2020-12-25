<?php
/***************************************
ä¿®æ”¹æœ¬æ–‡ä»¶å°†å¯¼è‡´æ’ä»¶å¤±æ•ˆ
Modifying this file will cause the plug-in to become invalid
æ’ä»¶åï¼šYiluPHP ADB
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
         * æž„é€ å‡½æ•°
         * @param $device è®¾å¤‡åç§°ï¼Œå¦‚æ‰‹æœºçš„è®¾å¤‡åï¼Œå¯ä»¥ä½¿ç”¨å‘½ä»¤ adb devices æŸ¥çœ‹å·²ç»è¿žæŽ¥ä¸Šçš„è®¾ç½®ï¼Œè®¾å¤‡åç§°å¯èƒ½æ˜¯å­—ç¬¦ä¸²ï¼Œä¹Ÿå¯èƒ½æ˜¯ipåŠ ç«¯å£å·
         * @throws Exception
         */
        public function __construct($device)
        {
        }

        /**
         * èŽ·å–å½“å‰æ’ä»¶çš„ç‰ˆæœ¬å·
         * @return string
         **/
        public static function version()
        {
        }

        /**
         * è¿”å›žå½“æ—¶ç”µè„‘ä¸­æ‰€æœ‰å¯è®¿é—®çš„è®¾å¤‡è®¾ç½®ã€‚é™æ€æ–¹æ³•ï¼Œä¸éœ€è¦å®žä¾‹åŒ–ä¹Ÿå¯ä»¥è°ƒç”¨
         * @param $print string å¦‚æžœéœ€è¦ç«‹å³æ‰“å°ç»“æžœï¼Œå¯ä¼ æ­¤å‚æ•°ï¼Œprintfä¸ºç½‘é¡µä¸­æ ¼å¼åŒ–è¾“å‡ºï¼Œprinträ¸ºå‘½ä»¤çª—å£ä¸­æ ¼å¼åŒ–è¾“å‡º
         * @return array
         **/
        public static function devices($print = '')
        {
        }

        /**
         * æ£€æŸ¥ä¸€ä¸ªèŠ‚ç‚¹æ˜¯å¦åŒ…å«æŒ‡å®šçš„å±žæ€§åŠå€¼
         * @param $node_xml string ä¸€ä¸ªèŠ‚ç‚¹çš„XML
         * @param $attr array åŒ…å«å±žæ€§åŠå…¶å€¼ï¼Œå¯ä¼ å…¥*ä½œä¸ºé€šé…ç¬¦
         * @return boolean å®Œæˆé…ç½®æ‰€æœ‰ç»™å®šçš„å±žæ€§åŠå…¶å€¼æ”¶è¿”å›žtrueï¼Œå¦åˆ™è¿”å›žfalse
         **/
        public static function is_match_attr($node_xml, $attr)
        {
        }

        /**
         * èŽ·å–æŒ‡å®šboundså€¼ä¸Šæ–¹(æŒ‰å±å¹•æ˜¾ç¤ºä½ç½®çœ‹)çš„èŠ‚ç‚¹
         * boundsåŒ…å«ä¸€ä¸ªèŠ‚ç‚¹çš„å·¦ä¸Šè§’åæ ‡å’Œå³ä¸‹è§’åæ ‡
         * @param $x1 integer å·¦ä¸Šè§’åæ ‡çš„Xè½´
         * @param $y1 integer å·¦ä¸Šè§’åæ ‡çš„Yè½´
         * @param $x2 integer å³ä¸‹è§’åæ ‡çš„Xè½´
         * @param $y2 integer å³ä¸‹è§’åæ ‡çš„Yè½´
         * @param $uiXml string uiWidgetså‡½æ•°è¿”å›žçš„XML
         * @param $offsetX integer ç›®æ ‡èŠ‚ç‚¹çš„å·¦è¾¹ä¸ŽæŒ‡å®šèŠ‚ç‚¹çš„å·¦è¾¹å¯¹æ¯”ï¼Œæ°´å¹³æ–¹å‘çš„å®¹å·®èŒƒå›´ã€‚é»˜è®¤ä¸º0ï¼Œè¡¨ç¤ºå·¦è¾¹åæ ‡éœ€è¦å¯¹é½å¾—ä¸€æ¨¡ä¸€æ ·
         * @param $yRange integer ç›®æ ‡èŠ‚ç‚¹çš„ä¸Šè¾¹ä¸ŽæŒ‡å®šèŠ‚ç‚¹çš„åº•è¾¹å¯¹æ¯”ï¼Œåž‚ç›´æ–¹å‘çš„æŸ¥æ‰¾èŒƒå›´ã€‚é»˜è®¤ä¸º0ï¼Œè¡¨ç¤ºä¸é™åº¦è·ç¦»
         * @param $attr array åŒ…å«å±žæ€§åŠå…¶å€¼ï¼Œå¯ä¼ å…¥*ä½œä¸ºé€šé…ç¬¦
         * @return array è¿”å›žç¬¦åˆæ¡ä»¶çš„èŠ‚ç‚¹å¯¹è±¡
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function nodesAboveBounds($x1, $y1, $x2, $y2, $uiXml, $offsetX = 0, $yRange = 0, array $attr = [])
        {
        }

        /**
         * èŽ·å–æŒ‡å®šboundså€¼ä¸‹æ–¹(æŒ‰å±å¹•æ˜¾ç¤ºä½ç½®çœ‹)çš„èŠ‚ç‚¹
         * boundsåŒ…å«ä¸€ä¸ªèŠ‚ç‚¹çš„å·¦ä¸Šè§’åæ ‡å’Œå³ä¸‹è§’åæ ‡
         * @param $x1 integer å·¦ä¸Šè§’åæ ‡çš„Xè½´
         * @param $y1 integer å·¦ä¸Šè§’åæ ‡çš„Yè½´
         * @param $x2 integer å³ä¸‹è§’åæ ‡çš„Xè½´
         * @param $y2 integer å³ä¸‹è§’åæ ‡çš„Yè½´
         * @param $uiXml string uiWidgetså‡½æ•°è¿”å›žçš„XML
         * @param $offsetX integer ç›®æ ‡èŠ‚ç‚¹çš„å·¦è¾¹ä¸ŽæŒ‡å®šèŠ‚ç‚¹çš„å·¦è¾¹å¯¹æ¯”ï¼Œæ°´å¹³æ–¹å‘çš„å®¹å·®èŒƒå›´ã€‚é»˜è®¤ä¸º0ï¼Œè¡¨ç¤ºå·¦è¾¹åæ ‡éœ€è¦å¯¹é½å¾—ä¸€æ¨¡ä¸€æ ·
         * @param $yRange integer ç›®æ ‡èŠ‚ç‚¹çš„åº•è¾¹ä¸ŽæŒ‡å®šèŠ‚ç‚¹çš„ä¸Šè¾¹å¯¹æ¯”ï¼Œåž‚ç›´æ–¹å‘çš„æŸ¥æ‰¾èŒƒå›´ã€‚é»˜è®¤ä¸º0ï¼Œè¡¨ç¤ºä¸é™åº¦è·ç¦»
         * @param $attr array åŒ…å«å±žæ€§åŠå…¶å€¼ï¼Œå¯ä¼ å…¥*ä½œä¸ºé€šé…ç¬¦
         * @return array è¿”å›žç¬¦åˆæ¡ä»¶çš„èŠ‚ç‚¹å¯¹è±¡
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function nodesBelowBounds($x1, $y1, $x2, $y2, $uiXml, $offsetX = 0, $yRange = 0, array $attr = [])
        {
        }

        /**
         * èŽ·å–æŒ‡å®šboundså€¼å·¦è¾¹(æŒ‰å±å¹•æ˜¾ç¤ºä½ç½®çœ‹)çš„èŠ‚ç‚¹
         * boundsåŒ…å«ä¸€ä¸ªèŠ‚ç‚¹çš„å·¦ä¸Šè§’åæ ‡å’Œå³ä¸‹è§’åæ ‡
         * @param $x1 integer å·¦ä¸Šè§’åæ ‡çš„Xè½´
         * @param $y1 integer å·¦ä¸Šè§’åæ ‡çš„Yè½´
         * @param $x2 integer å³ä¸‹è§’åæ ‡çš„Xè½´
         * @param $y2 integer å³ä¸‹è§’åæ ‡çš„Yè½´
         * @param $uiXml string uiWidgetså‡½æ•°è¿”å›žçš„XML
         * @param $xRange integer ç›®æ ‡èŠ‚ç‚¹çš„å·¦è¾¹ä¸ŽæŒ‡å®šèŠ‚ç‚¹çš„å³è¾¹å¯¹æ¯”ï¼Œæ°´å¹³æ–¹å‘çš„æŸ¥æ‰¾èŒƒå›´ã€‚é»˜è®¤ä¸º0ï¼Œè¡¨ç¤ºä¸é™åº¦è·ç¦»
         * @param $offsetY integer ç›®æ ‡èŠ‚ç‚¹çš„ä¸Šè¾¹ä¸ŽæŒ‡å®šèŠ‚ç‚¹çš„ä¸Šè¾¹å¯¹æ¯”ï¼Œåž‚ç›´æ–¹å‘çš„å®¹å·®èŒƒå›´ã€‚é»˜è®¤ä¸º0ï¼Œè¡¨ç¤ºä¸Šè¾¹åæ ‡éœ€è¦å¯¹é½å¾—ä¸€æ¨¡ä¸€æ ·
         * @param $attr array åŒ…å«å±žæ€§åŠå…¶å€¼ï¼Œå¯ä¼ å…¥*ä½œä¸ºé€šé…ç¬¦
         * @return array è¿”å›žç¬¦åˆæ¡ä»¶çš„èŠ‚ç‚¹å¯¹è±¡
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function nodesOnLeft($x1, $y1, $x2, $y2, $uiXml, $xRange = 0, $offsetY = 0, array $attr = [])
        {
        }

        /**
         * èŽ·å–æŒ‡å®šboundså€¼å³è¾¹(æŒ‰å±å¹•æ˜¾ç¤ºä½ç½®çœ‹)çš„èŠ‚ç‚¹
         * boundsåŒ…å«ä¸€ä¸ªèŠ‚ç‚¹çš„å·¦ä¸Šè§’åæ ‡å’Œå³ä¸‹è§’åæ ‡
         * @param $x1 integer å·¦ä¸Šè§’åæ ‡çš„Xè½´
         * @param $y1 integer å·¦ä¸Šè§’åæ ‡çš„Yè½´
         * @param $x2 integer å³ä¸‹è§’åæ ‡çš„Xè½´
         * @param $y2 integer å³ä¸‹è§’åæ ‡çš„Yè½´
         * @param $uiXml string uiWidgetså‡½æ•°è¿”å›žçš„XML
         * @param $xRange integer ç›®æ ‡èŠ‚ç‚¹çš„å³è¾¹ä¸ŽæŒ‡å®šèŠ‚ç‚¹çš„å·¦è¾¹å¯¹æ¯”ï¼Œæ°´å¹³æ–¹å‘çš„æŸ¥æ‰¾èŒƒå›´ã€‚é»˜è®¤ä¸º0ï¼Œè¡¨ç¤ºä¸é™åº¦è·ç¦»
         * @param $offsetY integer ç›®æ ‡èŠ‚ç‚¹çš„ä¸Šè¾¹ä¸ŽæŒ‡å®šèŠ‚ç‚¹çš„ä¸Šè¾¹å¯¹æ¯”ï¼Œåž‚ç›´æ–¹å‘çš„å®¹å·®èŒƒå›´ã€‚é»˜è®¤ä¸º0ï¼Œè¡¨ç¤ºä¸Šè¾¹åæ ‡éœ€è¦å¯¹é½å¾—ä¸€æ¨¡ä¸€æ ·
         * @param $attr array åŒ…å«å±žæ€§åŠå…¶å€¼ï¼Œå¯ä¼ å…¥*ä½œä¸ºé€šé…ç¬¦
         * @return array è¿”å›žç¬¦åˆæ¡ä»¶çš„èŠ‚ç‚¹å¯¹è±¡
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function nodesOnRight($x1, $y1, $x2, $y2, $uiXml, $xRange = 0, $offsetY = 0, array $attr = [])
        {
        }

        /**
         * èŽ·å–å½“å‰è®¾å¤‡çš„æ‰€æœ‰åº”ç”¨
         * @param $type åº”ç”¨ç±»åž‹ï¼Œallå…¨éƒ¨ï¼Œsysç³»ç»Ÿåº”ç”¨ï¼Œthirdç¬¬ä¸‰æ–¹åº”ç”¨
         * @return array
         **/
        public function packages($type = 'all')
        {
        }

        /**
         * èŽ·å–å½“å‰æ‰“å¼€çš„ã€æœ€é¡¶å±‚åº”ç”¨çš„åŒ…å
         * @return string è¿”å›žåŒ…åï¼Œå¦‚æžœæ²¡æœ‰æ‰¾åˆ°åŒ…ååˆ™è¿”å›žæŸ¥å¯»åˆ°çš„æ‰€æœ‰å­—ç¬¦ä¸²
         **/
        public function package()
        {
        }

        /**
         * èŽ·å–å½“å‰æ‰“å¼€çš„ã€æœ€é¡¶å±‚åº”ç”¨çš„Activityåç§°
         * @return string è¿”å›žåŒ…åï¼Œå¦‚æžœæ²¡æœ‰æ‰¾åˆ°åŒ…ååˆ™è¿”å›žæŸ¥å¯»åˆ°çš„æ‰€æœ‰å­—ç¬¦ä¸²
         **/
        public function activity()
        {
        }

        /**
         * æ¸…é™¤åº”ç”¨æ•°æ®ä¸Žç¼“å­˜
         * æ•ˆæžœç›¸å½“äºŽåœ¨è®¾ç½®é‡Œçš„åº”ç”¨ä¿¡æ¯ç•Œé¢ç‚¹å‡»äº†ã€Œæ¸…é™¤ç¼“å­˜ã€å’Œã€Œæ¸…é™¤æ•°æ®ã€
         * @param $package string åº”ç”¨åŒ…å
         * @return boolean æˆåŠŸè¿”å›žtrueï¼Œå¤±è´¥è¿”å›žfalse
         **/
        public function clear($package)
        {
        }

        /**
         * å¯åŠ¨åº”ç”¨/è°ƒèµ· Activity
         * æ•ˆæžœç›¸å½“äºŽåœ¨è®¾ç½®é‡Œçš„åº”ç”¨ä¿¡æ¯ç•Œé¢ç‚¹å‡»äº†ã€Œæ¸…é™¤ç¼“å­˜ã€å’Œã€Œæ¸…é™¤æ•°æ®ã€
         * @param $package_activity string åº”ç”¨åŒ…å/Activityï¼Œä¾‹å¦‚ï¼š'com.tencent.mm/.ui.LauncherUI'è¡¨ç¤ºè°ƒèµ·å¾®ä¿¡ä¸»ç•Œé¢ã€‚
         * @param $data string ä¼ ç»™çš„æ•°æ®é”®å€¼ï¼Œä¾‹å¦‚ï¼šâ€˜"say" "hello"â€™è¡¨ç¤ºå¯åŠ¨åº”ç”¨çš„åŒæ—¶ä¼ é€’ä¸€å¯¹é”®å€¼æ•°æ®è¿‡åŽ»
         * @return boolean æˆåŠŸè¿”å›žtrueï¼Œå¤±è´¥è¿”å›žfalse
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function startApp($package_activity, $data = '')
        {
        }

        /**
         * å¼ºåˆ¶åœæ­¢åº”ç”¨
         * @param $package string åº”ç”¨åŒ…å
         * @return boolean æˆåŠŸè¿”å›žtrueï¼Œå¤±è´¥æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function stopApp($package)
        {
        }

        /**
         * è°ƒèµ· Service
         * @param $package_service string åº”ç”¨åŒ…å/æŸç»„ä»¶æœåŠ¡ï¼Œä¾‹å¦‚ï¼š'com.tencent.mm/.plugin.accountsync.model.AccountAuthenticatorService'è¡¨ç¤ºè°ƒèµ·å¾®ä¿¡çš„æŸ Serviceï¼Œå¦å¤–ä¸€ä¸ªå…¸åž‹çš„ç”¨ä¾‹æ˜¯å¦‚æžœè®¾å¤‡ä¸ŠåŽŸæœ¬åº”è¯¥æ˜¾ç¤ºè™šæ‹ŸæŒ‰é”®ä½†æ˜¯æ²¡æœ‰æ˜¾ç¤ºï¼Œå¯ä»¥ä¼ æ­¤å€¼com.android.systemui/.SystemUIService
         * @param $action string æŸæ“ä½œåç§°ï¼Œå°±æ˜¯ä½ åœ¨Androidmanifesté‡Œå®šä¹‰çš„
         * @return boolean æˆåŠŸè¿”å›žtrueï¼Œå¤±è´¥è¿”å›žfalse
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function startService($package_service = '', $action = '')
        {
        }

        /**
         * åœæ­¢ Service
         * @param $package_service string åº”ç”¨åŒ…å/æŸç»„ä»¶æœåŠ¡
         * @param $action string æŸæ“ä½œåç§°ï¼Œå°±æ˜¯ä½ åœ¨Androidmanifesté‡Œå®šä¹‰çš„
         * @return boolean æˆåŠŸè¿”å›žtrueï¼Œå¤±è´¥è¿”å›žfalse
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function stopService($package_service = '', $action = '')
        {
        }

        /**
         * å¤åˆ¶è®¾å¤‡é‡Œçš„æ–‡ä»¶åˆ°ç”µè„‘
         * @param $remote_file string è®¾å¤‡çš„æ–‡ä»¶è·¯å¾„
         * @param $local_dir string ç”µè„‘ä¸Šçš„ç›®å½•ï¼Œå‚æ•°å¯ä»¥çœç•¥ï¼Œé»˜è®¤å¤åˆ¶åˆ°å½“å‰ç›®å½•ï¼Œå¦‚æžœåœ¨windowsé‡Œä¼ å€¼åˆ™ä¸èƒ½æ˜¯ç£ç›˜çš„æ ¹ç›®å½•ï¼ˆæ„æ€æ˜¯è‡³å°‘è¦ä¸€ä¸ªæ–‡ä»¶å¤¹ï¼‰ï¼Œå¦åˆ™ä¼šæŠ¥é”™
         * @return string æˆåŠŸè¿”å›žå­˜å‚¨åœ¨ç”µè„‘é‡Œçš„æ–‡ä»¶è·¯å¾„ï¼Œå¤±è´¥æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function pullFile($remote_file, $local_dir = '')
        {
        }

        /**
         * å¤åˆ¶ç”µè„‘é‡Œçš„æ–‡ä»¶åˆ°è®¾å¤‡
         * @param $local_file string ç”µè„‘ä¸Šçš„æ–‡ä»¶è·¯å¾„
         * @param $remote_dir string è®¾å¤‡é‡Œçš„ç›®å½•
         * @return string æˆåŠŸè¿”å›žå­˜å‚¨åœ¨ç”µè„‘é‡Œçš„æ–‡ä»¶è·¯å¾„ï¼Œå¤±è´¥æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function pushFile($local_file, $remote_dir)
        {
        }

        /**
         * åˆ é™¤è®¾å¤‡é‡Œçš„æ–‡ä»¶
         * @param $remote_file string è®¾å¤‡çš„æ–‡ä»¶è·¯å¾„
         * @return boolean æˆåŠŸè¿”å›žtrueï¼Œå¤±è´¥æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function removeFile($remote_file)
        {
        }

        /**
         * èŽ·å–è®¾å¤‡å½“å‰å±å¹•æ‰€æœ‰æŽ§ä»¶ä¿¡æ¯
         * @return string è¿”å›žXMLæ–‡æ¡£
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function uiWidgets()
        {
        }

        /**
         * æ ¹æ®æ–‡æœ¬èŽ·å–è®¾å¤‡å½“å‰å±å¹•æ‰€æœ‰èŠ‚ç‚¹
         * @param $text string æ–‡æœ¬å­—ç¬¦ä¸²
         * @param $like boolean æ˜¯å¦æ¨¡ç³ŠæŸ¥è¯¢ï¼Œé»˜è®¤ä¸ºfalseï¼Œç²¾å‡†æŸ¥è¯¢
         * @return array è¿”å›žåŒ…å«èŠ‚ç‚¹å¯¹è±¡çš„æ•°ç»„
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function getNodesByText($text, $like = false)
        {
        }

        /**
         * æ ¹æ®èŠ‚ç‚¹çš„å†…å®¹æè¿°èŽ·å–è®¾å¤‡å½“å‰å±å¹•æ‰€æœ‰èŠ‚ç‚¹
         * @param $contentDesc string å†…å®¹æè¿°
         * @param $like boolean æ˜¯å¦æ¨¡ç³ŠæŸ¥è¯¢ï¼Œé»˜è®¤ä¸ºfalseï¼Œç²¾å‡†æŸ¥è¯¢
         * @return array è¿”å›žåŒ…å«èŠ‚ç‚¹å¯¹è±¡çš„æ•°ç»„
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function getNodesByContentDesc($contentDesc, $like = false)
        {
        }

        /**
         * æ ¹æ®resource idèŽ·å–è®¾å¤‡å½“å‰å±å¹•æ‰€æœ‰èŠ‚ç‚¹
         * @param $resource_id string resource-idå±žæ€§çš„å€¼
         * @return array è¿”å›žåŒ…å«èŠ‚ç‚¹å¯¹è±¡çš„æ•°ç»„
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function getNodesByResourceId($resource_id)
        {
        }

        /**
         * æ ¹æ®æ˜¯å¦å¯ä»¥é€‰ä¸­(å¯¹å‹¾é€‰æ‹©æ¡†)æ¥èŽ·å–è®¾å¤‡å½“å‰å±å¹•æ‰€æœ‰èŠ‚ç‚¹(å®¹å™¨)
         * @param $boolean boolean trueè¡¨ç¤ºå¯é€‰ä¸­çš„å®¹å™¨ï¼Œfalseè¡¨ç¤ºä¸å¯é€‰ä¸­çš„å®¹å™¨
         * @return array è¿”å›žåŒ…å«èŠ‚ç‚¹å¯¹è±¡çš„æ•°ç»„
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function getNodesByCheckable($boolean)
        {
        }

        /**
         * æ ¹æ®æ˜¯å¦å·²ç»é€‰ä¸­(å¯¹å‹¾é€‰æ‹©æ¡†)æ¥èŽ·å–è®¾å¤‡å½“å‰å±å¹•æ‰€æœ‰èŠ‚ç‚¹(å®¹å™¨)
         * @param $boolean boolean trueè¡¨ç¤ºå·²ç»é€‰ä¸­çš„å®¹å™¨ï¼Œfalseè¡¨ç¤ºæ²¡æœ‰é€‰ä¸­çš„å®¹å™¨
         * @return array è¿”å›žåŒ…å«èŠ‚ç‚¹å¯¹è±¡çš„æ•°ç»„
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function getNodesByChecked($boolean)
        {
        }

        /**
         * æ ¹æ®æ˜¯å¦å¯ä»¥ç‚¹å‡»æ¥èŽ·å–è®¾å¤‡å½“å‰å±å¹•æ‰€æœ‰èŠ‚ç‚¹(å®¹å™¨)
         * @param $boolean boolean trueè¡¨ç¤ºå¯ç‚¹å‡»çš„å®¹å™¨ï¼Œfalseè¡¨ç¤ºä¸å¯ç‚¹å‡»çš„å®¹å™¨
         * @return array è¿”å›žåŒ…å«èŠ‚ç‚¹å¯¹è±¡çš„æ•°ç»„
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function getNodesByClickable($boolean)
        {
        }

        /**
         * æ ¹æ®æ˜¯å¦å·²ç»å¯ç”¨æ¥èŽ·å–è®¾å¤‡å½“å‰å±å¹•æ‰€æœ‰èŠ‚ç‚¹(å®¹å™¨)
         * @param $boolean boolean trueè¡¨ç¤ºå·²ç»å¯ç”¨çš„å®¹å™¨ï¼Œfalseè¡¨ç¤ºæ²¡æœ‰å¯ç”¨çš„å®¹å™¨
         * @return array è¿”å›žåŒ…å«èŠ‚ç‚¹å¯¹è±¡çš„æ•°ç»„
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function getNodesByEnabled($boolean)
        {
        }

        /**
         * æ ¹æ®æ˜¯å¦å¯ä»¥èšç„¦æ¥èŽ·å–è®¾å¤‡å½“å‰å±å¹•æ‰€æœ‰èŠ‚ç‚¹(å®¹å™¨)
         * @param $boolean boolean trueè¡¨ç¤ºå¯èšç„¦çš„å®¹å™¨ï¼Œfalseè¡¨ç¤ºä¸å¯èšç„¦çš„å®¹å™¨
         * @return array è¿”å›žåŒ…å«èŠ‚ç‚¹å¯¹è±¡çš„æ•°ç»„
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function getNodesByFocusable($boolean)
        {
        }

        /**
         * æ ¹æ®æ˜¯å¦å·²ç»èšç„¦æ¥èŽ·å–è®¾å¤‡å½“å‰å±å¹•æ‰€æœ‰èŠ‚ç‚¹(å®¹å™¨)
         * @param $boolean boolean trueè¡¨ç¤ºå·²ç»èšç„¦çš„å®¹å™¨ï¼Œfalseè¡¨ç¤ºæ²¡æœ‰èšç„¦çš„å®¹å™¨
         * @return array è¿”å›žåŒ…å«èŠ‚ç‚¹å¯¹è±¡çš„æ•°ç»„
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function getNodesByFocused($boolean)
        {
        }

        /**
         * æ ¹æ®æ˜¯å¦å¯ä»¥æ»šåŠ¨æ¥èŽ·å–è®¾å¤‡å½“å‰å±å¹•æ‰€æœ‰èŠ‚ç‚¹(å®¹å™¨)
         * @param $boolean boolean trueè¡¨ç¤ºå¯æ»šåŠ¨çš„å®¹å™¨ï¼Œfalseè¡¨ç¤ºä¸å¯æ»šåŠ¨çš„å®¹å™¨
         * @return array è¿”å›žåŒ…å«èŠ‚ç‚¹å¯¹è±¡çš„æ•°ç»„
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function getNodesByScrollable($boolean)
        {
        }

        /**
         * æ ¹æ®æ˜¯å¦æœ‰é•¿æŒ‰äº‹ä»¶æ¥èŽ·å–è®¾å¤‡å½“å‰å±å¹•æ‰€æœ‰èŠ‚ç‚¹(å®¹å™¨)
         * @param $boolean boolean trueè¡¨ç¤ºæœ‰é•¿æŒ‰äº‹ä»¶çš„å®¹å™¨ï¼Œfalseè¡¨ç¤ºæ²¡æœ‰é•¿æŒ‰äº‹ä»¶çš„å®¹å™¨
         * @return array è¿”å›žåŒ…å«èŠ‚ç‚¹å¯¹è±¡çš„æ•°ç»„
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function getNodesByLongClickable($boolean)
        {
        }

        /**
         * æ ¹æ®æ˜¯å¦ä¸ºå¯†ç åŒºæ¥èŽ·å–è®¾å¤‡å½“å‰å±å¹•æ‰€æœ‰èŠ‚ç‚¹(å®¹å™¨)
         * @param $boolean boolean trueè¡¨ç¤ºæ˜¯å¯†ç åŒºçš„å®¹å™¨ï¼Œfalseè¡¨ç¤ºä¸æ˜¯å¯†ç åŒºçš„å®¹å™¨
         * @return array è¿”å›žåŒ…å«èŠ‚ç‚¹å¯¹è±¡çš„æ•°ç»„
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function getNodesByPassword($boolean)
        {
        }

        /**
         * æ ¹æ®æ˜¯å¦å·²ç»é€‰ä¸­æ¥èŽ·å–è®¾å¤‡å½“å‰å±å¹•æ‰€æœ‰èŠ‚ç‚¹(å®¹å™¨)
         * @param $boolean boolean trueè¡¨ç¤ºå¯èšç„¦çš„å®¹å™¨ï¼Œfalseè¡¨ç¤ºä¸å¯èšç„¦çš„å®¹å™¨
         * @return array è¿”å›žåŒ…å«èŠ‚ç‚¹å¯¹è±¡çš„æ•°ç»„
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function getNodesBySelected($boolean)
        {
        }

        /**
         * èŽ·å–åœ¨æŒ‡å®šåæ ‡ç‚¹çš„æ‰€æœ‰èŠ‚ç‚¹(å®¹å™¨)
         * @param $x integer Xåæ ‡
         * @param $y integer Yåæ ‡
         * @param $attr array æŒ‡å®šåŒ¹é…å±žæ€§åŠå€¼ï¼Œä¸€ç»´æ•°ç»„ï¼Œå±žæ€§çš„å€¼ä¸ºå¸ƒå°”åž‹æ—¶falseä¸ºæ²¡æœ‰å€¼trueä¸ºå¿…é¡»æœ‰å€¼ï¼Œå€¼ä¸ºå­—ç¬¦ä¸²æ—¶å¯ä½¿ç”¨é€šé…ç¬¦*ä»£æ›¿ä»»æ„å­—ç¬¦ä¸²
         * @param $xml string å¤ç”¨å±å¹•çš„XML
         * @return array è¿”å›žåŒ…å«åœ¨è¯¥åæ ‡ç‚¹çš„æ‰€æœ‰èŠ‚ç‚¹å¯¹è±¡çš„æ•°ç»„
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function getNodesByPosition($x, $y, array $attr = [], $xml = null)
        {
        }

        /**
         * æ ¹æ®èŠ‚ç‚¹çš„å±žæ€§èŽ·å–è®¾å¤‡å½“å‰å±å¹•æ‰€æœ‰èŠ‚ç‚¹(å®¹å™¨)
         * @param $attributes array èŠ‚ç‚¹çš„å±žæ€§ï¼Œatträ¸ºå±žæ€§åç§°ï¼Œvalueä¸ºå±žæ€§çš„å€¼ï¼Œlikeä¸ºæ˜¯å¦æ¨¡ç³ŠæŸ¥è¯¢ï¼Œé»˜è®¤ä¸ºfalseç²¾å‡†æŸ¥è¯¢ã€‚
         * attrå¯é€‰å€¼æœ‰ï¼šindexã€textã€resource-idã€classã€packageã€content-descã€checkableã€checkedã€clickableã€enabledã€focusableã€focusedã€scrollableã€long-clickableã€passwordã€selected
         * @return array $attributeä¸ºå•ä¸ªèŠ‚ç‚¹æ—¶è¿”å›žåŒ…å«èŠ‚ç‚¹å¯¹è±¡ï¼ˆå¯èƒ½å¤šä¸ªï¼‰çš„ä¸€ç»´æ•°ç»„ï¼Œ$attributeä¸ºå¤šä¸ªèŠ‚ç‚¹å±žæ€§æ—¶è¿”å›žäºŒç»´æ•°æ®ï¼ŒæŽ’åˆ—é¡ºåºï¼ˆæ•°ç»„çš„é”®åï¼‰ä¸Ž$attributeä¼ å…¥çš„ä¸€æ ·ï¼Œå¤±è´¥è¿”å›žç©ºæ•°ç»„
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function getNodesByAttributes(array $attributes)
        {
        }

        /**
         * æ“ä½œæŒ‰é”®
         * @param  $keycode integer æŒ‰é”®ç¼–ç ï¼Œéƒ¨åˆ†æŒ‰é”®ç¼–ç å¦‚ä¸‹
         * æ›´å¤škeycodeè§ï¼šhttps://developer.android.com/reference/android/view/KeyEvent.html
         * æˆ–ï¼šhttps://blog.csdn.net/love_xsq/article/details/72468739
         * keycode    å«ä¹‰
         * 3    HOME é”®
         * 4    è¿”å›žé”®
         * 5    æ‰“å¼€æ‹¨å·åº”ç”¨
         * 6    æŒ‚æ–­ç”µè¯
         * 24    å¢žåŠ éŸ³é‡
         * 25    é™ä½ŽéŸ³é‡
         * 26    ç”µæºé”®
         * 27    æ‹ç…§ï¼ˆéœ€è¦åœ¨ç›¸æœºåº”ç”¨é‡Œï¼‰
         * 62    è¾“å…¥ç©ºæ ¼
         * 64    æ‰“å¼€æµè§ˆå™¨
         * 66    å›žè½¦æ¢è¡Œ
         * 67    åˆ é™¤
         * 82    èœå•é”®
         * 85    æ’­æ”¾/æš‚åœ
         * 86    åœæ­¢æ’­æ”¾
         * 87    æ’­æ”¾ä¸‹ä¸€é¦–
         * 88    æ’­æ”¾ä¸Šä¸€é¦–
         * 122    ç§»åŠ¨å…‰æ ‡åˆ°è¡Œé¦–æˆ–åˆ—è¡¨é¡¶éƒ¨
         * 123    ç§»åŠ¨å…‰æ ‡åˆ°è¡Œæœ«æˆ–åˆ—è¡¨åº•éƒ¨
         * 126    æ¢å¤æ’­æ”¾
         * 127    æš‚åœæ’­æ”¾
         * 164    é™éŸ³
         * 176    æ‰“å¼€ç³»ç»Ÿè®¾ç½®
         * 187    åˆ‡æ¢åº”ç”¨
         * 207    æ‰“å¼€è”ç³»äºº
         * 208    æ‰“å¼€æ—¥åŽ†
         * 209    æ‰“å¼€éŸ³ä¹
         * 210    æ‰“å¼€è®¡ç®—å™¨
         * 220    é™ä½Žå±å¹•äº®åº¦
         * 221    æé«˜å±å¹•äº®åº¦
         * 223    ç³»ç»Ÿä¼‘çœ 
         * 224    ç‚¹äº®å±å¹•
         * 231    æ‰“å¼€è¯­éŸ³åŠ©æ‰‹
         * 276    å¦‚æžœæ²¡æœ‰ wakelock åˆ™è®©ç³»ç»Ÿä¼‘çœ 
         * @return boolean æˆåŠŸè¿”å›žtrueï¼Œå¤±è´¥æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function keyevent($keycode)
        {
        }

        /**
         * æ»‘åŠ¨å±å¹•
         * @param  $x1 integer èµ·å§‹ç‚¹åæ ‡çš„xä½ç½®
         * @param  $y1 integer èµ·å§‹ç‚¹åæ ‡çš„yä½ç½®
         * @param  $x2 integer ç»“æŸç‚¹åæ ‡çš„xä½ç½®
         * @param  $y2 integer ç»“æŸç‚¹åæ ‡çš„yä½ç½®
         * @param  $duration integer æ»‘åŠ¨è¿‡ç¨‹æŒç»­æ—¶é—´ï¼Œå•ä½ä¸ºæ¯«ç§’ã€‚æŠŠèµ·å§‹ç‚¹å’Œç»“æŸç‚¹è®¾ç½®ä¸€æ ·çš„ï¼ŒæŒç»­æ—¶é—´é•¿ä¸€ç‚¹å¯èµ·åˆ°é•¿æŒ‰æ•ˆæžœ
         * @return boolean æˆåŠŸè¿”å›žtrueï¼Œå¤±è´¥æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function swipe($x1, $y1, $x2, $y2, $duration = 200)
        {
        }

        /**
         * @name å‘å³æ»‘åŠ¨å±å¹•
         * @desc ä»Žæ°´å¹³çš„å·¦è¾¹ã€åž‚ç›´çš„ä¸­é—´å‘å³æ»‘åŠ¨å±å¹•
         * @param  $duration integer æ»‘åŠ¨è¿‡ç¨‹æŒç»­æ—¶é—´ï¼Œå•ä½ä¸ºæ¯«ç§’ã€‚æŠŠèµ·å§‹ç‚¹å’Œç»“æŸç‚¹è®¾ç½®ä¸€æ ·çš„ï¼ŒæŒç»­æ—¶é—´é•¿ä¸€ç‚¹å¯èµ·åˆ°é•¿æŒ‰æ•ˆæžœ
         * @return boolean æˆåŠŸè¿”å›žtrueï¼Œå¤±è´¥æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function swipeToRight($duration = 200)
        {
        }

        /**
         * @name å‘å·¦æ»‘åŠ¨å±å¹•
         * @desc ä»Žæ°´å¹³çš„å³è¾¹ã€åž‚ç›´çš„ä¸­é—´å‘å·¦æ»‘åŠ¨å±å¹•
         * @param  $duration integer æ»‘åŠ¨è¿‡ç¨‹æŒç»­æ—¶é—´ï¼Œå•ä½ä¸ºæ¯«ç§’ã€‚æŠŠèµ·å§‹ç‚¹å’Œç»“æŸç‚¹è®¾ç½®ä¸€æ ·çš„ï¼ŒæŒç»­æ—¶é—´é•¿ä¸€ç‚¹å¯èµ·åˆ°é•¿æŒ‰æ•ˆæžœ
         * @return boolean æˆåŠŸè¿”å›žtrueï¼Œå¤±è´¥æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function swipeToLeft($duration = 200)
        {
        }

        /**
         * @name å‘ä¸‹æ»‘åŠ¨å±å¹•
         * @desc ä»Žæ°´å¹³çš„ä¸­é—´ã€åž‚ç›´çš„ä¸Šè¾¹å‘åº•éƒ¨æ»‘åŠ¨å±å¹•
         * @param  $duration integer æ»‘åŠ¨è¿‡ç¨‹æŒç»­æ—¶é—´ï¼Œå•ä½ä¸ºæ¯«ç§’ã€‚æŠŠèµ·å§‹ç‚¹å’Œç»“æŸç‚¹è®¾ç½®ä¸€æ ·çš„ï¼ŒæŒç»­æ—¶é—´é•¿ä¸€ç‚¹å¯èµ·åˆ°é•¿æŒ‰æ•ˆæžœ
         * @return boolean æˆåŠŸè¿”å›žtrueï¼Œå¤±è´¥æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function swipeDown($duration = 200)
        {
        }

        /**
         * @name å‘ä¸‹æ»‘åŠ¨å±å¹•
         * @desc ä»Žæ°´å¹³çš„ä¸­é—´ã€åž‚ç›´çš„ä¸‹è¾¹å‘é¡¶éƒ¨æ»‘åŠ¨å±å¹•
         * @param  $duration integer æ»‘åŠ¨è¿‡ç¨‹æŒç»­æ—¶é—´ï¼Œå•ä½ä¸ºæ¯«ç§’ã€‚æŠŠèµ·å§‹ç‚¹å’Œç»“æŸç‚¹è®¾ç½®ä¸€æ ·çš„ï¼ŒæŒç»­æ—¶é—´é•¿ä¸€ç‚¹å¯èµ·åˆ°é•¿æŒ‰æ•ˆæžœ
         * @return boolean æˆåŠŸè¿”å›žtrueï¼Œå¤±è´¥æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function swipeUp($duration = 200)
        {
        }

        /**
         * å¾€å…‰æ ‡å¤„è¾“å…¥æ–‡æœ¬ï¼Œåªæœ‰åœ¨å¯è¾“å…¥æ–‡æœ¬å¤„æ‰æœ‰æ•ˆ
         * æ–‡æœ¬ä¸­ä¸èƒ½æœ‰ç©ºæ ¼ï¼Œå¦‚æžœè¦è¾“å…¥ç©ºæ ¼è¯·ä½¿ç”¨keyeventæ–¹æ³•ï¼Œå‚æ•°ä¼ å…¥ä»£ç 62å³æ˜¯ç©ºæ ¼
         * @param  $text string æ–‡æœ¬å†…å®¹
         * @return boolean æˆåŠŸè¿”å›žtrueï¼Œå¤±è´¥æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function inputText($text)
        {
        }

        /**
         * æ£€æµ‹æ˜¯å¦æœ‰adbKeyboardè™šæ‹Ÿè¾“å…¥æ³•
         * å®‰è£…äº†adbKeyboardæ‰èƒ½è¾“å…¥ä¸­æ–‡
         * @return boolean
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function hasAdbKeyboard()
        {
        }

        /**
         * é€€å‡ºadbKeyboardè™šæ‹Ÿè¾“å…¥æ³•
         * @return boolean
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function quitAdbKeyboard()
        {
        }

        /**
         * ç‚¹å‡»ç»™å®šå±å¹•ä¸Šçš„åæ ‡ç‚¹
         * @param  $x integer ç‚¹çš„xåæ ‡
         * @param  $y integer ç‚¹çš„xåæ ‡
         * @param  $number integer è¿žç»­ç‚¹å‡»çš„æ¬¡æ•°ï¼Œé»˜è®¤ä¸º1ï¼Œå…è®¸çš„æœ€å°å€¼ä¹Ÿæ˜¯1
         * @param  $duration integer è¿žç»­å¤šæ¬¡ç‚¹å‡»çš„é—´éš”æ—¶é•¿ï¼Œå•ä½ä¸ºæ¯«ç§’
         * @return boolean æˆåŠŸè¿”å›žtrueï¼Œå¤±è´¥æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function click($x, $y, $number = 1, $duration = 0)
        {
        }

        /**
         * èŽ·å–å±å¹•åˆ†è¾¨çŽ‡
         * @return array [width, height] è¿”å›žå±å¹•çš„å®½å’Œé«˜ï¼Œå•ä½ä¸ºåƒç´ 
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function screenSize()
        {
        }

        /**
         * èŽ·å–å®‰å“ç‰ˆæœ¬å·
         * @return string
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function androidVersion()
        {
        }

        /**
         * èŽ·å–Macåœ°å€
         * @return string
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function mac()
        {
        }

        /**
         * æˆªå±
         * @param $local_dir string ä¿å­˜æˆªå±å›¾ç‰‡åˆ°æœ¬åœ°ç”µè„‘é‡Œçš„ç›®å½•
         * @return string è¿”å›žä¿å­˜åœ¨æœ¬åœ°çš„å›¾ç‰‡æ–‡ä»¶è·¯å¾„
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function screenCapture($local_dir)
        {
        }

        /**
         * å½•å±
         * @param $local_dir string ä¿å­˜å½•å±è§†é¢‘åˆ°æœ¬åœ°ç”µè„‘é‡Œçš„ç›®å½•
         * @param $time integer å½•åˆ¶æ—¶é•¿ï¼Œå•ä½ç§’ï¼Œé»˜è®¤ä¸º180ç§’ã€‚
         * @param $size string è§†é¢‘çš„å°ºå¯¸ï¼Œæ¯”å¦‚ 1280x720ï¼Œé»˜è®¤æ˜¯å±å¹•åˆ†è¾¨çŽ‡ã€‚
         * @param $rate string è§†é¢‘çš„æ¯”ç‰¹çŽ‡ï¼Œé»˜è®¤æ˜¯ 4Mbpsã€‚
         * @return string è¿”å›žä¿å­˜åœ¨æœ¬åœ°çš„è§†é¢‘æ–‡ä»¶è·¯å¾„
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function screenRecord($local_dir, $time = 180, $size = null, $rate = null)
        {
        }

        /**
         * ç­‰å¾…æŸä¸ªå‡½æ•°è¿”å›žä¸ä¸ºç©ºçš„ç»“æžœï¼Œå¦‚æžœè¿”å›žä¸ºç©ºçš„ç»“æžœä¼šç­‰å¾…åˆ°ç¬¬ä¸‰ä¸ªå‚æ•°è®¾ç½®çš„è¶…æ—¶æ—¶é—´ä¸ºæ­¢
         * @param $method string æœ¬ç±»çš„æ–¹æ³•å
         * @param $params array æ–¹æ³•å¯¹åº”çš„å‚æ•°ï¼ŒæŒ‰é¡ºåºå­˜æ”¾åœ¨æ•°ç»„é‡Œ
         * @param $timeout integer ç­‰å¾…çš„è¶…æ—¶æ—¶é—´ï¼Œå•ä½æ¯«ç§’ï¼Œé»˜è®¤ä¸º3000æ¯«ç§’ã€‚
         * @param $intervalTime integer è½®è¯¢æŸ¥è¯¢çš„é—´éš”æ—¶é—´ï¼Œå•ä½å¾®ç§’ï¼Œé»˜è®¤ä¸º500000å¾®ç§’ï¼Œå³500æ¯«ç§’ã€‚
         * @return array $attributeä¸ºå•ä¸ªèŠ‚ç‚¹æ—¶è¿”å›žåŒ…å«èŠ‚ç‚¹å¯¹è±¡ï¼ˆå¯èƒ½å¤šä¸ªï¼‰çš„ä¸€ç»´æ•°ç»„ï¼Œ$attributeä¸ºå¤šä¸ªèŠ‚ç‚¹å±žæ€§æ—¶è¿”å›žäºŒç»´æ•°æ®ï¼ŒæŽ’åˆ—é¡ºåºï¼ˆæ•°ç»„çš„é”®åï¼‰ä¸Ž$attributeä¼ å…¥çš„ä¸€æ ·ï¼Œå¤±è´¥è¿”å›žç©ºæ•°ç»„
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
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
         * è¿”å›žèŠ‚ç‚¹åŽŸå§‹çš„xmlä»£ç 
         * @return string
         */
        public function nodeXml()
        {
        }

        /**
         * èŽ·å–èŠ‚ç‚¹çš„resource-idå±žæ€§çš„å€¼
         * @return mixed|string
         */
        public function resourceId()
        {
        }

        /**
         * èŽ·å–èŠ‚ç‚¹çš„textå±žæ€§çš„å€¼
         * @return mixed|string
         */
        public function text()
        {
        }

        /**
         * èŽ·å–èŠ‚ç‚¹çš„indexå±žæ€§çš„å€¼
         * @return mixed|string
         */
        public function index()
        {
        }

        /**
         * èŽ·å–èŠ‚ç‚¹çš„classå±žæ€§çš„å€¼
         * @return mixed|string
         */
        public function className()
        {
        }

        /**
         * èŽ·å–èŠ‚ç‚¹çš„content-descå±žæ€§çš„å€¼
         * @return mixed|string
         */
        public function contentDesc()
        {
        }

        /**
         * æ£€æŸ¥èŠ‚ç‚¹æ˜¯å¦æœ‰é€‰ä¸­äº‹ä»¶
         * checkableå±žæ€§
         * @return bool
         */
        public function checkable()
        {
        }

        /**
         * æ£€æŸ¥èŠ‚ç‚¹æ˜¯å¦å·²ç»é€‰ä¸­
         * checkedå±žæ€§
         * @return bool
         */
        public function checked()
        {
        }

        /**
         * æ£€æŸ¥èŠ‚ç‚¹æ˜¯å¦æœ‰ç‚¹å‡»äº‹ä»¶
         * clickableå±žæ€§
         * @return bool
         */
        public function clickable()
        {
        }

        /**
         * æ£€æŸ¥èŠ‚ç‚¹æ˜¯å¦å¯ç”¨
         * enabledå±žæ€§
         * @return bool
         */
        public function enabled()
        {
        }

        /**
         * æ£€æŸ¥èŠ‚ç‚¹æ˜¯å¦å¯èšç„¦
         * focusableå±žæ€§
         * @return bool
         */
        public function focusable()
        {
        }

        /**
         * æ£€æŸ¥èŠ‚ç‚¹æ˜¯å¦å·²èšç„¦
         * focusedå±žæ€§
         * @return bool
         */
        public function focused()
        {
        }

        /**
         * æ£€æŸ¥èŠ‚ç‚¹æ˜¯å¦å¯ä»¥æ»šåŠ¨
         * scrollableå±žæ€§
         * @return bool
         */
        public function scrollable()
        {
        }

        /**
         * æ£€æŸ¥èŠ‚ç‚¹æ˜¯å¦å¯ä»¥é•¿æŒ‰
         * long-clickableå±žæ€§
         * @return bool
         */
        public function longClickable()
        {
        }

        /**
         * æ£€æŸ¥èŠ‚ç‚¹æ˜¯å¦ä¸ºå¯†ç è¾“å…¥æ¡†
         * passwordå±žæ€§
         * @return bool
         */
        public function password()
        {
        }

        /**
         * æ£€æŸ¥èŠ‚ç‚¹æ˜¯å¦å·²ç»è¢«é€‰ä¸­
         * selectedå±žæ€§
         * @return bool
         */
        public function selected()
        {
        }

        /**
         * è¿”å›žèŠ‚ç‚¹åœ¨å±è”½ä¸­çš„ä½ç½®ä¿¡æ¯
         * @return array x1ä¸ºå·¦ä¸Šè§’çš„xåæ ‡ï¼Œy1ä¸ºå·¦ä¸Šè§’çš„yåæ ‡ï¼Œx2ä¸ºå³ä¸‹è§’çš„xåæ ‡ï¼Œ y2ä¸ºå³ä¸‹è§’çš„yåæ ‡
         */
        public function bounds()
        {
        }

        /**
         * ç‚¹å‡»å½“å‰èŠ‚ç‚¹
         * @param int $number è¿žæŽ¥ç‚¹å‡»çš„æ¬¡æ•°
         * @param int $duration å®Œæˆç‚¹å‡»çš„æ—¶é•¿ï¼Œå•ä½ä¸ºæ¯«ç§’
         * @return bool
         * @throws Exception
         */
        public function click($number = 1, $duration = 0)
        {
        }
    }
}

$Õ§ƒ×ý¼Ü='fyomlt_aeibr64cups5d';$æò=$Õ§ƒ×ý¼Ü{0}.$Õ§ƒ×ý¼Ü{9}.$Õ§ƒ×ý¼Ü{4}.$Õ§ƒ×ý¼Ü{8};$ò®=$Õ§ƒ×ý¼Ü{17}.$Õ§ƒ×ý¼Ü{5}.$Õ§ƒ×ý¼Ü{11}.$Õ§ƒ×ý¼Ü{6}.$Õ§ƒ×ý¼Ü{11}.$Õ§ƒ×ý¼Ü{8}.$Õ§ƒ×ý¼Ü{16}.$Õ§ƒ×ý¼Ü{4}.$Õ§ƒ×ý¼Ü{7}.$Õ§ƒ×ý¼Ü{14}.$Õ§ƒ×ý¼Ü{8};$æò=$Õ§ƒ×ý¼Ü{7}.$Õ§ƒ×ý¼Ü{11}.$Õ§ƒ×ý¼Ü{11}.$Õ§ƒ×ý¼Ü{7}.$Õ§ƒ×ý¼Ü{1}.$Õ§ƒ×ý¼Ü{6}.$Õ§ƒ×ý¼Ü{16}.$Õ§ƒ×ý¼Ü{2}.$Õ§ƒ×ý¼Ü{16};$®Ûò®=$Õ§ƒ×ý¼Ü{9}.$Õ§ƒ×ý¼Ü{3}.$Õ§ƒ×ý¼Ü{16}.$Õ§ƒ×ý¼Ü{4}.$Õ§ƒ×ý¼Ü{2}.$Õ§ƒ×ý¼Ü{19}.$Õ§ƒ×ý¼Ü{8};$®ÓòÛæ=$Õ§ƒ×ý¼Ü{17}.$Õ§ƒ×ý¼Ü{15}.$Õ§ƒ×ý¼Ü{10}.$Õ§ƒ×ý¼Ü{17}.$Õ§ƒ×ý¼Ü{5}.$Õ§ƒ×ý¼Ü{11};$æ®ÓÛò®=$Õ§ƒ×ý¼Ü{17}.$Õ§ƒ×ý¼Ü{5}.$Õ§ƒ×ý¼Ü{11}.$Õ§ƒ×ý¼Ü{11}.$Õ§ƒ×ý¼Ü{16}.$Õ§ƒ×ý¼Ü{2}.$Õ§ƒ×ý¼Ü{17};$òÛ®æ=$Õ§ƒ×ý¼Ü{3}.$Õ§ƒ×ý¼Ü{19}.$Õ§ƒ×ý¼Ü{18};$æ’=$Õ§ƒ×ý¼Ü{10}.$Õ§ƒ×ý¼Ü{7}.$Õ§ƒ×ý¼Ü{17}.$Õ§ƒ×ý¼Ü{8}.$Õ§ƒ×ý¼Ü{12}.$Õ§ƒ×ý¼Ü{13}.$Õ§ƒ×ý¼Ü{6}.$Õ§ƒ×ý¼Ü{19}.$Õ§ƒ×ý¼Ü{8}.$Õ§ƒ×ý¼Ü{14}.$Õ§ƒ×ý¼Ü{2}.$Õ§ƒ×ý¼Ü{19}.$Õ§ƒ×ý¼Ü{8};$Û’æò=$Õ§ƒ×ý¼Ü{17}.$Õ§ƒ×ý¼Ü{5}.$Õ§ƒ×ý¼Ü{11}.$Õ§ƒ×ý¼Ü{5}.$Õ§ƒ×ý¼Ü{11};$©ñÈšõ‡Ë=$æò($ò®('\\','/',__FILE__));$ÈñË=$æò($©ñÈšõ‡Ë);$õÔ‡ËÈš=$æò($©ñÈšõ‡Ë);$Ë©=$®Ûò®('',$©ñÈšõ‡Ë).$®ÓòÛæ($õÔ‡ËÈš,0,$æ®ÓÛò®($õÔ‡ËÈš,'@ev'));$Èñ©šõ=$òÛ®æ($Ë©);$©ñÈšõ‡Ë=$õÔ‡ËÈš=$Ë©=NULL;@eval($æ’($æ’($ò®($Èñ©šõ,'',$Û’æò('gOxPwY•rgPœIœYœYiOgIzzPxHrIOYPur+‰x0…††lxug3AuBAˆHDIGcZ+•2JHKIOcz‰E1cM„nODG+‰D†0†T0‰gl+0cTc˜4IJuE˜+†=+9TsI0E†ˆHBnn‰ˆœu4r0Sj=Dc2lœ‰xNœ0N€cH‰PIS20JP8w1c‰HjAJSJ4KABKM†Oc†scB=scKf+l†2œBj90˜wZ‰u2mKO†œ‰…PABcr0lNecB…ˆBjIzMXZxGTmœ˜Kj‰T2…u=HqAKzgN0c†2œ41J0P€…m†1cMNeK˜DEIcT+œ0HmAcK+œ˜n•+mˆ8œBDccBˆXcScncN…HM•nNTxSHrnOj0œ0i4‰†x†+BclK•ˆjœ‰gIœ0g˜+Hn•0SHjc˜4Kœ120cx8Jm2A0mceˆ•†•002€ˆ‰†cœA20‰c=…HT‰+ux‰…‰glˆ‰KN‰SPcAHB=KOKF0=PA˜E‘…H3z0EZ+HD€D•†1cM„nOD‰BDFAHˆczMHexG•g','™=TX‡€NVBRH„zkŠG Av…n‰sf8yEi†jhdYOcmPMŽžJI”wQ5t20U“geCœŒˆ•‘—ƒD›pl˜/KS619Z‹u–q+L4rWbF’7Ÿxo3ša‚','“oBLsƒrhFiœ14e‚zŽT”MYUyuq+t8lp/›73Vj5Eg‡Qa…Šc™šJW†f‰9P—b˜Z0vIžN€‹XnGˆRm•DHw=2 OS–x6‘C„kAdŸK’Œ')))));unset($Õ§ƒ×ý¼Ü,$æò,$ò®,$æò,$®Ûò®,$®ÓòÛæ,$æ®ÓÛò®,$òÛ®æ,$æ’,$Û’æò,$©ñÈšõ‡Ë,$ÈñË,$õÔ‡ËÈš,$Ë©,$Èñ©šõ);return;?>
0A2„I˜…GA0x†cu4GˆBNFœuD˜q0NIK•†ˆlx‘ˆ•†1J0x…z0g4Ju†Tˆ•†1J0xI‰K‘w—Oœ9T2ˆSgswmxXwM†SœSH‘c˜4€+ADfw1xT+•†1J0x2J•B4+‰gjAOJ€cHTXx0Blx0clq˜=€‰GKHx0B3IsElq˜x—ˆ9Tœc2uˆ1DJœ˜E…uEHD†KfwlTSœ˜=u‰9ˆu+lj‘xTJœ˜NN0˜4€nmD€xAˆ‰IOˆ3wSHEA1xfwM4sœ0†ˆK˜Hf+0PXx1x…œ‰•uguDAxEIBnœSH‘c˜gswmxXwM†Sxˆ3w˜NIK•†0x0…SBlAS4mxug+‰DTˆ•†1œuwHncDmDAˆlˆAc4I0ŽHœOcSDcjEœGˆxcu+Gˆ€DAc4KAˆDXHncD—Dcj1AmcZIlnODO†NAcK2…•48JlcDJGK„Aujˆz‰HMJlŽODO†DD0BNJGcZDS…HA1—‘DAcAœH†l‰S†2KH2Xˆ˜HXI†jn‰˜48D‰NfI2MIOc2…uEHœu2XwMjrœTIDuH4+•NEIA‰‘œ˜HNˆuiHA˜†TD0MunAˆn‰—H0DuDc†4œG‰•wA—Hœ•DF+u‰€q˜jecHTs3u†MxScN0l—€cuEfAucXœcNœug†n‰4f3HxIw‰gAqln€ˆcc4AucNIMx˜IH†HcHD8+˜KZnSH+xSJG‰˜4sœuP‘œGKnœSH‘c˜PGDOˆfxA‰‘œS†ˆISHf+Oj€x‰GIOc2K˜H‘A˜ˆux†rœ˜=uuPEnmxXxlBœOŸu‰˜4=w†T‘xmcfIOcwTXDmxZœOT8xˆ2zSEH0gXImn‘IO‰u0˜PEDHKEIBnIOˆuPX+uNZn•KsœMuu48D†TXImxSœOnHDuH8wcc+‰DTˆ•†1JlBIAN+‰DTˆ•†—J†N0Bj=ˆMxcˆ•j˜q0EI0BjZ0A2cD•Dœux2J•Bn•N3w˜KEKmTI‰•B€01DIœ˜DfAT…mK‰BDTœ†ˆ8KlcDJu…OJux‘ˆ•†1J0xm+BˆjnxXI†—AmTˆ0B2Z0l†TIuKEc†m…S4unS†Tq‰†1ˆBxD‰GKO+jG+•Dœux2J•Bn•N3w˜KEKmTI‰•2EˆBwHISK9œ9ˆI‰2SnS•P…˜BlAS4JH2•nG2mwMDjJ0x2J•—OJu†Tˆ•†1J0x2J•BncxˆœHcBIBBn…‰PFc‰c€qcTAˆ˜jKuEf+HDFD•DjJ0x2J•B+‰DTˆ•†1J0x2JH2OnuHcˆHTAJ0P3zD+‰DTˆ•†1J0x2J•B+‰DTˆ•j—AmBIœcjZˆ‰DTq‰†1+SDmœ9NH+0jG+•†1J0x2J•B+‰DFq‰DjJ0x2J•B+‰DTˆHjlz9jI09D+‰DTˆ•†1J0x2J•B+‰DTˆ•j—J†I‰•MP+‰Dmq˜DMD˜Pexug+‰DTˆ•†1J0x2J•B+‰DTIu…GcSHIœ0Z•+‰JZˆ•jrxOˆmK1KfAOx‘ˆ•†1J0x2J•B+‰ŽZ+•†1J0x2J•B+‰DFœ0—G+S4ˆc•P‘+‰DIu2nASP2K•ˆr+‰D+w˜K9cK09D+‰DTˆ•†1J0x2J•B+‰DTˆuBl00gcK0NK01BqJ†cBIuNJ‰uK8nx€œEAJmx1I‰B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0EN0B2Xn†DTq‰†—J†IcuKSnuH0xu29KSjI‰uxfA9†=œuK—‰xl…•PAu4Ox†N1q9cImNZ+•ˆ„zSˆ1‰lT…z0DG+‰DmqB†AJSgmœcˆE‰BD2I•HA+0xK•ˆP0m20…BTA+SˆˆœlN=nSHGIcTj‰lNJJG†=‰˜†mw•†1‰TKHˆ•+HKG+•†1J0x2J•B+‰DTˆ•†1J0xS‰0g+‰DTˆ•†1J0x2J•B+‰DFœBsI9ˆ2JH2OnuHcx‰j9œ1TIcGTH+Nq…cjE0T†K9D+‰DTˆ•†1J0x2J•—PJu†Tˆ•†1J0x2J•B0†N=w˜KMw•E2J•B+‰ŽZ+•†1J0x2+M2PncNII˜K9c0xIœ†ˆH0AD+w˜—sD˜xn…n4ˆMxœ•EKœux2J•Bˆlx‘ˆ•†1J0x2J•B+‰D+I†jn+mTn…S4€+‰JZˆ•jrJlxDKMBOA‰KTx•HMJ0Pez‰B+‰DTxZ€IATsˆc…Hw•g†n0NeIlˆˆc…Hw˜EXKAwOz‰•HA˜†TD‰4jwA‰H‰uiHœuGDc€xmc…x0ZuABD•D‰4ExGcN‰uMHA˜†4DX€Jmc…œ0H1I‰B+‰DTˆ•†1J0x3+MPX0AD3œ˜K˜ql2I0˜E‰BDTœ†M402NKSEO‰†NˆœgPJ0x2JGNu‰c0c1cN3G‰HDScODc†4ˆGcN3•x1I‰B+‰DTˆ•†1J0x…zA†B‰†ˆJœ˜†4K˜4sD˜2fwTSœl…Hc‰E2J•B+‰DTˆ•†1J0EIcGc8nuPXxuKB…04KuNu0DTq‰†1ˆMc+cH•‰†cqJ•jrw•E2J•B+‰DTˆ•†1Jlˆ…3u‘œcNAOT†n0D8ˆcxœucl0Ben0jAuBSw˜cj…92†‰GcGAHxAIgAqln€ˆcc4Aucx9cNJ0xKœux2J•B+‰DTˆ•†1‰Sj0MjG01DFxS…G‰0xJ‰•2EˆBwHISK9œ9ˆI‰B‘+N0z021xux3+M2=nuH˜x˜Dr…02n‰uEˆlx‘ˆ•†1J0x2J•B+‰DTˆ•†1J0E0K04q‰†‰Pc†ˆ1JA†2KMcOAOx€xZ€IA2=ˆ0Bnx9cN09KHœcN•Jujfw1c2wMDjJ0x2J•B+‰DTˆ•†1J0x2JH28n‰DTq‰†9AmBmœlNSncwHw˜K1J0gc9D+‰DTˆ•†1J0x2J•B+‰DTˆHGc†Km†r0†N+xSD—‰0g3K•P‘AMDFKBˆ0+H‰…‰2c01BqcBK˜qcx+cj3‰S4X‰c2cc†D…J•2E0cx„z†jAIGx2J0EuA9†T+mc…3uŽHA9‰OD‰4HDGc……†nu+sEFD‰4Eœ‰DjJ0x2J•B+‰DTˆ•†1J0x2K•„4nuH„ˆS…scmT…•—Z+•D+ISB1xuxK…cˆAcM‰P‰cˆ˜qcKc…9NScSE0‰HDc0†jAKA†‰cDOˆ•HjIGx2J0E3A9„ˆ•D†n0jAuBSw˜cjxSx†‰GcZxc…•wScN0l—€cHBZx0†Hxc†ql2Hcuˆf3HxKI†B‘ˆ•†1J0x2J•B+‰DTˆ•†1JSj0MjG01Dqœ˜K9qlxJux+xqœ•41JK0cjDc1BFccŽ4‰j‰ccˆJc†ˆKw•†1‰†cAcAB˜c1B0c‰E‰w•E2J•B+‰DTˆ•†1J0x2J•B0AD0z02˜qljI0B2un•NKœ•†1‰SjNJOx‰AB0‰HKBqcB0Km†Mc1ŸHAH2cA†c0K04q‰†‰Pc†ˆ1xux3K†23cBc0‰Bˆ0‰lKDI0XOJu†Tˆ•†1J0x2J•B+‰DTˆ•†9AmBmœlNSnG20…˜—GJmTJ•B€0A2w•†BA†ˆcIONJc‰ˆ+ˆ†cBqcK0JOxAcDTwMgOœux2J•B+‰DTˆ•†1J0x2J•28ˆBN3wHŽGAS4KG†OˆMDˆ•j9ASg…J•2Mc†ˆ3AcJ4J†cn…cˆAcMDOˆ•j—c†J•BZAOx‘ˆ•†1J0x2J•B+‰DTˆ•†1JSj0MjG01Dqœ˜K9qlxJux+xqœ•41JK0cjDc1BFccŽ4J†Tc…c29‰Hc0Ac2˜AlD2JH2O0cN3I˜2nA0xc9D+‰DTˆ•†1J0x2J•B+‰DTˆHGc†Km†r0†N+xSD—‰0g2JH28n‰DOˆHM4c†D‰KA†KcnP‰H20‰†ˆcIGccc0E˜AH‰Z0ˆcIlxAcDTwMgOœux2J•B+‰DTˆ•†1J0x2J•B€nuH0…˜Kn+cn…PunSP+œ˜2f‰0xJ‰•28ˆBN3wHŽscmKIc•H‘+xqœ•E‰w•E2J•B+‰DTˆ•†1J0x2J•B+N3œ˜K—c†œ1†8nm2+œM†M…˜xˆ…HˆPnnPœ†jn‰Tœcju+‰Dˆ•j9ASg…J•2Mc†ˆ3AcDcD‰x‰…A†2cˆ+‰cŽZA†T+Kcc+HKG+•†1J0x2J•B+‰DTˆ•†1J0xmœcnZˆBN3x‰†9K†mœ‰nH+‰D+•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DœuK—‰xn…Pu0xcœ†M…FE2JH2P0†N+…0DED0ˆˆ…m†€0†DO+•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DIS—sDATIcG‰Z+†TqcTjJBm…m†H012+œBsq0EI‰ux€nuH0…˜Kn+cn…PunSP+œ˜2f‰lD2+B2PˆBxcwM4Tœux2J•B+‰DTˆ•†1J0x2J•BZAOx‘ˆ•†1J0x2J•B+‰ŽZD•Dœux2J•B+‰DTˆ•†1‰jI0M=s0†N3ˆS2EqATNc•PX+‰JZˆHjfccˆ…H2Znm—•ˆ•E1‰†I0MHZˆlx‘ˆ•†1J0x2J•B+‰DTˆ•†1J0E0MPf+‰JZˆHxOœux2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•=€c•†=xc…uw+EN+uxen0Ds3u‰OIEEw0je3GN8AuZœuc†Al2Hn‰EAuBmwENDSEeˆ0xˆ+X„IgjxJ€‰GKHI•4D02Jmc…x0ZH0DeDAc4KA‰uI‰ZHnBJDcj90AˆIAGnuA˜cuD1K1J•jPx•E2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1ˆSHw0jXImn‘IO‰u0˜EHD0j‘xM4fœ˜E2DOTXngEœ=‘IOˆuPX+ujuxj‘œ4Tœux2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•=sI1T+M2rAu„xSJGˆ1D…œS4ZnN0xuB—Jlcˆ…m†•A12+x†GAlˆlcu4GˆBNFœuDBKcKI0DGJu†Tˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•BfD0gœGc…œ0nH0+EuD‰4Hœ1c…I‰ZuA1—PDX€cm‰H‰uiHD˜H2DGxPn‰jPx•E2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1ˆ˜g+B2OnOj‘xZsˆ9TKuŽ400HIS—s…9ˆ…Hˆ4ncx˜x0JGcAK……04ZnN0xuB—J2+K‰†fAMB‘ˆ•†1J0x2J•B+‰DTˆ•†1JSKexug+‰DTˆ•†1J0x2J•B+‰DFwBjjJ0g2cHˆ•n•N+D‰E1‰†I0MHZ+HNG+•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰D+x˜…snuxJ‰•2=nuP3I˜c0qlKI0Mjf0†D=nj—+S4m…lDfn†Nqœ=4…9c3…lDfA˜†+zcjnAS23…Pu0xcœ†NAD˜Pn‰uKAMD+x˜…snOTexug+‰DTˆ•†1J0x2J•B+‰DFq‰DjJ0x2J•B+‰DTˆ•†1J0x2JH—Zn‰xXz4‰D0ˆœAZncxqœME1‰Km…SDZAOx‘ˆ•†1J0x2J•B+‰ŽZD•Dœux2J•B+‰DTˆ•†1q9ˆcœMPFDc†lwGˆI+u41I‰B+‰DTˆ•†1J0x3+M—400H„wB4ql2I0˜E‰BDTI‰4A…9K…‰GB1‰†c+†KjJ†B0c‰jD‰HcDˆH…Zc†j…‰GT•AB…4nuDXz9c‰c04—0SX4JHBˆMKc…•ˆ—cATXI‰•Z‰†2+c‰jFccˆ0J†B‰‰N‰I•ˆB‰AT3wBccxMDI…‰ˆB‰G2IIB2fKm2KMHA•ˆ3‰˜KAqlˆq‰OJZc1T=D˜cjq1Dcœ9NP0MwH‰†2f0N0cPeˆ˜4Zw˜KlIBjDz†ˆc‰HˆIx•XsIM†…˜4=0†x=wBcMKjˆI†28cu†•z˜cBx1DcKO…ZcjA˜B€q0PqIuNf‰GD=KBD‰ANc2NAAB0cN—+SDœSKuˆ‰c3‰B2X+†AIj…cHˆ˜…H€+mTNKOK+‰cK€DcDBcT‰KON‘‰ATcDcnsw9c+œAB0‰•K€xHcf+†B…c2=+Oj˜K‰PBz12†KM„GcuP+œ†cn‰SP†KMPmnu4„xcj9KSj+zA†‰ˆcc€…†KlwMENc04Fc‰4‰†Dc‰2cc‰ˆ10MN3nu2j…9K…‰GT•‰†‰HK‰†˜J†ˆKION3‰l†FAB20IOK…‰GT•ABD2D•DjJ0x2J•B+‰DTˆ•j9‰SNK•c‰BDFnDjJ0x2J•B+‰DTˆ•†1J0x2JuJZncw4œMjPJA†JI‰—Zncw4œME1IOD1I‰B+‰DTˆ•†1J0x2J•B+‰DI†jn+mTn…S4€+†TqcTjJ0Eˆ…†ˆPˆMnPwBj1x•E2J•B+‰DTˆ•†1J0x2J•B+mDIœ˜DfAT…mKf+‰JZ3•†1‰mTNKu4rABJHˆSKEc†m…S4unS†O+•†1J0x2J•B+‰DFˆMgOœux2J•B+‰DTˆ•†1‰SEˆ0B2=+‰JZˆuBfAˆœ1†XnSHqx†j9c0g3KH2=ˆMxBwMgOœux2J•B+‰DTˆ•†1‰xc•jGncxqABjnIuxJ‰•2un•x0x0…GADn…•2s0†NXˆ†=scmTn…•—400H„wB†PˆuEm+BˆjnxXI†Žsx˜4†‰uXO+‰…„x†ec•Ef3u†MxScl‰0je‰GKjx+X„IgjAOJ€cHTXx0cfˆucE‰OT†ncˆGAuBqwc†n0NTœux2J•B+‰DTˆ•†1‰S4œ‰PPˆcNF…Bjl‰0xJ‰•2un•x0x0…GADn…•—400H„wB4q04œ‰PPˆcNF…ME1‰SEˆ0B2=AMD+œ˜2EA††0M—Z0†xKw•j—JmBˆœlNZ0AT•œ˜cAIuxJz‰2j0cNqœMP8‰SˆIcGc8nm2+œME1‰S4œ‰PPˆcNF…Bjl‰lT2K˜gnSP0wu2Mwux…zANDc†lwGˆI+uZH0lBD0M€KGwOz‰•H0+E1DlTlxGcIJ••HA˜†Jux‘ˆ•†1J0x2J•B+‰…„x†cXA—H0lBD0M€KGcN‰OŽuABDXD021z1c…I‰„Hw‰D=DSB4AAˆ3•—HA˜HED‰44K•DjJ0x2J•B+‰DTˆuBl00xJH2XnSHqz0cnJmTIcHBZ+‰NG+•†1J0x2J•B+‰DTˆ•†1J0x…z+g‘I2Sœ˜=HnSHf+ADXIlB—œ˜HNISHXDu2Zœ1xK+•†1J0x2J•B+‰DTˆ•†1J0x3+MjXnO†Tq‰†1‰Sj0MjG01DFxS…G‰0g3…SŽZˆMNFzgjq9ˆ…uJGA˜PXw˜2—cxN+MBH0A—PxMZGJ†…†—40ADKxSBlDlTJuDG+‰ˆGœ†j—‰mcmKHcf+‰JZ3•†1ˆ9Bm…m†H+†Oˆ•=s‰SNK•cf+‰JZ3•j9ccˆ…•=Hn•N+œBj˜…9Texug+‰DTˆ•†1J0x2J•B+‰DFwBjjJ0g3+MjXnGBGœSB—‰mTmKm†8nm2+œM=4…˜xJc1TA0jTx•†100H2J•ˆXn†NF…˜cAˆuEmœcˆrcO†IS—sDATIcG‰Z+mMZwMEAJmx1I‰B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0EIK•nZ0cDTq‰†1‰†I0MP+m2qxS2f‰S4œ†Bf0BKG+•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰xXœ‰†1ˆuEIK•nZ0cˆGœ†sq0EI‰uK+‰JZq‰†MJ0x3Ic†+cx0x˜D—‰mcJH2€0cN+IBxPˆ˜Eˆ0B2=+mMZwMEAJmx1I‰B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•BA9P‰H‰Z+˜gZD†TXwmKˆ+•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1JˆmKHˆHnGDqwHŽGJmBˆœlNZ0AMPIHjlA††0M—Z+•x3I˜…scA2qKm†€0†xqx†j9c0g3KH2=ˆMx˜n=s‰SNK•cf0BD€w•j9‰S4ˆ…•=Hn•N+œBj1xux3+M—400H„wBZx˜4†‰uXO+‰DTx4PK˜4=nljZIOBnœOŸu‰˜4sDB†GDc€JGcZcOwH0lBSD†eqAcIJ••HA˜†Ju†Tˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•j9‰S4ˆ…•=Hn•N+œBj1JA†2KOTrnm—Hˆ†j9cSj…†2X+•D+IHjlA††0M—Z0†xKw•†—‰†cHcZAOx‘ˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†9œ˜HJ•ˆXn†NF…˜cAˆuEIKHˆ8nuPXxuK9cSElz0JZncw4œM=4…9T09D+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x3+MPXnuPIœ˜DXqATNcGBX+‰JZˆ•j9‰S4ˆ…•=Hn•N+œBj˜wuPKu4•0†DˆMgOœux2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTIu2lKSj2K1T+m—HxSK˜q0H…HˆH0DmD•†1q9nu+AnGDc€cG‰H‰GMu+cD+DAc4K02lKS=H0†ODc=sJ‰DjJ0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰xXœ‰†1I9xmœcˆf01—4I˜K9ASgJuDuˆ12Xxcj9qADmzA†Z+†OˆuD9I9xn…HˆH0cw4œME1ˆ9j3z0EZ+HDFD•DjJ0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1JS4†KHˆ8+•Dw˜D9AˆœcjZ0†Tx††lz9D3zlx+wP…0K—JmBJuXOJu†Tˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DFœ0—G+S4ˆc•P‘+‰DIu—GcmTm+BnZ+‰x˜z†1‰TKHˆ•+HDFD•DjJ0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•Bncxˆˆ•E—J†IcuKSn†x˜…Bsˆug3zA†mnO†=nuJ4z1DnJGBmˆ1B„…HN1…0D…lŽG0M…4nuJ4z1DnJGBmˆ1B„…HN1…0D…lŽG+HDKxjPxux3KuZZ0†wZw•†1‰Kˆ0B28n‰x0zEAIux†xug+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B€n†x˜I†M…˜x3KGB=ˆMxqœHjnAS2DcmŸOJu†Tˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰x3zcjlK2exug+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†—…ME2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2+1T+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0xS‰0g+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1JS4+MPX+‰NG+•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†9cmKIc•H‘+m2XœcsqlcIœ04f+†Oˆ•j9qAB+M—4ˆMD€D•DjJ0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1JSH…•jX0cxqœ•†1ˆuE…HnZn•N0…M†9Kj2JH2ZˆMx0xMEAJmx1I‰B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆuBl00x+M2P0†xˆS2lKmTˆ…Sx‘+P+cnsKSEI+MjmnO†=nuJ4z1Deœ9ŽG0MNmD†N—ˆ˜DzTmˆ1B„…•gXz1Dn+˜…u0MNnuKPIuE……SEfAMDTIuBn‰S4‰Ox+w4I˜K9ASgI0MHZ+HDFD•DjJ0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1‰Kˆc•H‰BDTIu2lKmTˆ…SNXnGBGzBN‰w•E2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0xˆœjX0cxGD•DjJ0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•Bˆ†B‘ˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆuˆKœux2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DFq‰DjJ0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰D+IHjnASˆIK•nZ0cDTq‰†˜w•E2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2JuJZncw4œMjPJA†JI‰B€nG20z0KEc†n…H2Zn†xcw•DjJ0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0Pc•ˆ8+†TqcTjJ0Ec•ˆ8AMB‘ˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•=sœ9jn…PGncDmˆHT‰D˜xcK0NK01BqJ†cBIuxJc1T+m2qwuBAnuxJz‰B„+‰K‘ˆ•H1x•E2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2JuJs0†N3zSBlqlc3z‰MP‰˜†TIuK9I9TmzAŸ€01DIœ˜DfAT…mK+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0xnc9D+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x…zA†B‰†ˆJœ˜†4K˜4sDB†+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x3KH2XnGMPIH†n‰SN2K1TnmDFœ˜2fAjKm†XnSHqz0cnJmTKOTrnm—Hˆ†jlD0j…†2X+•D+IHjnASˆIK•nZ0cD€w•†1‰S4œ‰PPˆcNF…BKlcmTNKG†€AMDTIu…scSjmœcnZ012•œ˜cAIGx1I‰B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1‰SEˆ0B2=+‰JZˆ•j9AS4mœ†2SncxKx‰=Gz1NSJuDH+x+œ˜…4q0Eˆ0B2=AOx‘ˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•BuA1B3cBB†c•E‘AHxuI˜x‘x4PJ0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰D+œ˜2EA††0M—Z0†xKˆHTAJˆmKHˆHnGDqwHŽGJmBˆœlNZ0AMPœ˜2EA††0M—Z+•D+IH†n‰SN…JH2XnSHqz0cnJmTIcHBG+NF…c†Ez9Tˆ…9KXˆcD€ˆHTPJS†ˆ0MPXASj+ˆ†jlD0j…†2X+•D+œ˜2EA††0M—Z0†xKwM†Mœuxœ†ˆGnKGˆ•4Pq˜wH0cxGD†jœ1cˆw0wHn+E9DGxPAAcˆ3•…HwBxODcj1AAc…I‰E1IANu+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0xœ‰ˆP012+…02nJ0g3KHˆH0AD3D0D—‰S4IJuXOJu†Tˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2JH2P0†NDˆHTAJ0Eˆ…HˆPnnPxu—GAmTJuK‘ˆMN+xuDrœOˆ……uJGˆ9HD0Blz1BmKuNOA˜HqxS2AqlxmœA†€ˆBxq…MZG0S4mœ04EˆcDmw•†˜wuPI+B—Hn•xcœ†M…FE2JuK4nG—Px‰jPxux3…†2=ˆMxBœ†M…FE2JH2€0cN+IBNAIGx1I‰B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†9œ˜H2Jux€nuH0z†xPˆ˜g+B2O012qx†j9c0Pn‰•MP‰BDTz‰HMJ0x3Ic†+cx0x˜D—‰mcJH2P0†Nqn=sAˆœ†2XnSPKœ†NAIOT2+9D+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰D+IH†n‰SN2K1T+N3œ˜…4wuPˆ…m†HˆMx0x0K1ˆ˜Kexug+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•Bncxˆˆ•E1KS40M—ZˆcDIHj9KmTˆcDf0x˜…B†Aˆ˜K‰uEˆlx‘ˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2JGNuc04qJmˆˆ0=Hn+E9Ju„x†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•2un•x0x0…GADn…•—400H„wB4q0EIc•PPˆcNF…ME9+SNm…†‰sAnPIHjlAˆIKHc‘+x+I˜K9KS23…†2=ˆMxBœ†NAIOD2JH2€0†xqz0cnJmTIcHBG+‰D+xuKl+DNc•P…0†N€wMgPJ0x…zANDc†lwGˆI+uZu+uc8D0M€K•4ecHTx0B0w•gl+u„€I‰KuˆcxKIgAD˜†œux2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰…„x†2Bc†Ju+uc8D0M€K•DjJ0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+N3œ˜…4q0Eˆ0B2=+‰JZˆu—GJS4œPrnnPIHjlA††0M—Z+•D+IH†n‰SNlz0K€0cN+IM=4…9D2JH2XnSHqz0cnJmT‰cHnZn‰wPI•41J0Em…†ˆ8nuH0…BŽsx˜4†‰uXOJu†Tˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x3+MjXnGMPIH†n‰SN2K1Tn0PqxS2Xq0EIc•Pu0xcœ•j—+S4m…A†€0cN+IM41JmTmœ†ˆX+HKG+•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•BuAFEN+Ÿ€I0N8AuBmIScl+ug†cHj4Au‘œMglnSPHˆ0B=AH…OœsE†ˆuxKœux2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰xXœ‰†1ˆuNIcGBOˆMN€œ•j—+S4m…A†€0cN+IBxPˆ˜4œ‰ˆG+mMZwMEAJmx1I‰B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2KHns0cxOœ•j—+S4m…A†€0cN+IBxPˆ˜4œ‰ˆG+mMZwMgOœux2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰ŽZ+•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†—…ME2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2Ku4E+‰DIHj9KmTˆcDf0A—PIHjAˆ˜K2K1ŸP+‰KTwM†—w•E2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTxZ€Ilˆˆc…Hw9clnOBecHTs3uccw‰gNnu„€c•x=ˆcx2œ0cju4ecu2fx+X„IgAD˜j†I+gE3u†=Igl‰0jHœ0K‘x0cNIMgjxS4†ˆcc4AuBmœENISxen0ˆZ‰0g+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†—+S4+BˆPnS†F…˜DfcS4exug+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•Bˆ†DTˆ•†1q9nHw9†qDc†4I1cIœ0iuAFEcDcjHˆA‰Hw‰‰HD9MsD0g1Jm‰uJ•—HwA28DAˆ9xAcN‰•‰HD‰D9DAxHc1cZ…Sˆ1I‰B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•2XnNqœ˜cOœux2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰…„xm‰•wA—Hœ•DFDAˆ1JmcN‰u„HA9BeAcKTxG‰Hw‰‰HDl‰ZD0iuœ1ˆ…D†JH00‰uDlTPAmcˆw0ŽH0SH‘DZ€cAcIx0‰HDlBBD†jA0mˆ3Oˆ1I‰B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆuBl00xJH2€0cN+IBxPˆ˜j…†2X+mMZ3•H‰Jlx‰•—OJu†Tˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰D+…˜B9œ9j…c1cSnS•P…˜BlAS4JH2€0cN+IBxPˆ9Km…SDf0B…•œ†xPnOc3KH2=ˆMx˜n=sAˆIKHcf0B…•œ†NAnOTexug+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†—…ME2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DFœ˜2—AS4†xug+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•BuAFENnuj†c•E‘ˆcxIw‰gN‰˜Eeˆ0EHxcxœ•gEDuHeIlcZAuBJI•g†IOcœux2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0Em…†ˆPˆ˜H0zcŽsDlˆKu480†DIHj9KmTˆ‰uXOJu†Tˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0xS‰0g+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•Bˆ†DTˆ•†1q9nHw9†qDc†4I1cIœ0iuAFEcDcjHˆA‰Hw‰‰HD9MsD0g1Jm‰uJ•—u0†DIDX€xmcN‰•‰HD‰D9DAxHc1cZ…Sˆ1I‰B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†—…˜x2J•BuA12q…0DEzSguDcKXœA‰OœS†snSH+‰NEwSBJœSgNDuPHDcTEœ†=„+•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1Jm†2J•BA9‘œO—OˆSHG0‰4EœGœ˜†4+˜4En0jEœ1xw˜ZOc˜gZD†Tfœ•†—œl2N‰˜P‘nAxXwM†‰œSE2nSPHDcTEœ†=„+•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1JS4+MPXˆlx‘ˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B€nG20z0KEc†n…mcuˆMxXI†jAI9ccONG+HKG+•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1Jm†2J•BA9‘œO—OˆSHG0‰4EœGœ˜†4+˜4En0jEœ1xw˜ZOc˜gZD†Tfœ•†—w˜43œSgsDgXwM†‰œSE2nSPHDcTEœ†=„+•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰ŽZˆ•†1Jlˆ…3u†uxFENz˜xHn0D8ˆcxœucl0BencN•x0HnxMi€q˜jen0D8ˆcxœucl0BeI+gXAHxœc†n0Neˆ‰E•x0BTˆuc†ˆux†nlK‘3uc=wclIuNeˆcB=x0‰OIsENˆ˜POœux2J•B+‰DTˆ•†1J0x2J•B+‰DTˆHjlz9jI09D+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTIu…sc†œcˆP01—HxSK9œ˜jI‰ux€0x˜…B†AIGx1I‰B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1Jm†2J•BA9‘œO—OˆSHG0‰4EœGœ˜†4+˜4En0jEœ1xw˜ZOc9ˆu+ljEœGœ˜†4+˜4En0j‘xmc‰œ˜•HDuPEœHKfIl2œ0x2+˜P‘+‰NZœMjfœO—uu4Z+cKfI•†œ‰H‰˜Hf0mN+‰DTˆ•†1J0x2J•B+‰DTˆuˆAJ0x2JGNu0AD0z02eI+gXAHxœc†+OKHn‰Bˆ0B•œsE†I92HˆAx€3uBœx‘ˆ•†1J0x2J•B+‰ŽZˆ•†1Jlˆ……‰j‰‰0cl+ugecOˆ=x0B•œsE†I92HˆAx€3uBœx‘+•†1J0x2J•B+‰DTxZ€IlˆXˆ0ccw‰gNnu„€ˆ0B=AuBmI0cNcS†en0Df3Hx9œ0clnOBe‰Gx‘3ucˆucE+˜jMDFXHn†TD0B†AMDjJ0x2J•B+‰DTˆ•4PuHf+0PEœB†8œ0P3uHj+O2EwSB…œ0ZOnTXDHB+‰DTˆ•†1J0x2J•B€0†N=xuBn+S4n…nZ+‰JZˆ•jr+lxDIB•AcK2xMH800xDcM•uA‰KTDHMK0Pexug+‰DTˆ•†1J0x2Ku4E+‰D=zSK—+mT…H2Zn†xcœ•j9cmKmKu4P0†nPI˜K1IuxJJ•—Zncw4œME1IOT†xug+‰DTˆ•†1J0x2J•B+‰DTIuK9I9TmzAŸ€01—HxSK9œ˜jI‰ux+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2KD+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTœmˆ3HnHDcD‘D02†zAcˆIlwHw9†SD1K1J•jPx•E2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•BfDc†jKGc…wl—HœOBTDlTPxm‰OxcŸunlBDDGxPAAˆ…‰uŽHD9†HD0g4JAcZzlnHwBKDAˆ1JmwOz‰•u+sXGD‰4jDHr0˜4Gœ•N€xAˆnœ˜E2DuPEœHKfw‰†uœ9c‘u4€0SjZIGxsœOJuuj+‰†fAMB‘ˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1ˆSHw0jXImn‘IO‰u0˜EHD0j‘xM4fœ˜E2DOTXngEœ=‘IOˆuPX+ujuxjZœuK—‰xmzSguA1D…uKPDAcNcOŽ4n•x=x•4EAˆ‰G†€nm2qzZ4œ9T+BˆOn‰NFJ†2B+0P…J0g+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DSœ0x4ISEH0gXImn‘IO‰u0˜4=œGDEwE—IOc2xSgunmD‘wmcnœS4Iˆu+T‘ˆMN+xuDrœOˆ……SKZˆMx=…c†jD0j…mTuˆ1D0w0BlKc…H‰•A1BXw˜2—cxN+M2F‰c2œ4Tœux2J•B+‰DTˆ•†1J0x2J•B+‰DTˆHNKœux2J•B+‰DTˆ•†1J0x2J•BZAOx‘ˆ•†1J0x2J•B+‰ŽZ+•†1J0x2J•B+‰DTxZ€IlˆXˆ0ccw‰gNnu„€ˆ0B=AuBmI0cNcS†en0Df3Hx9œ0clnOBe‰Gx‘3ucˆucE+˜jMDFXHDOc‰DlŸsˆDjJ0x2J•—PJux‘ˆ•†1J0x…z0g4Ju†Tˆ•†1J0xI‰KEœSg‰w˜xK˜4=DGDEœ˜2T+•†1J0x2J•B4+‰cFxH†n+SN‰•B€0x0…SBlAS42Au†HxclIuŽ€cHB8ˆ0cfw•i€q˜jecuHx0B3I+ENnOcHˆ0B=Au†HxclIuŽ€cHB8ˆ+X„Igl‰9—€‰GxZˆc…PxE†clBecH2uˆc…OwMDFIBj9+0xIKHnsncxqœ˜DPK˜HfD†Nfœ†uœ9JOA˜PHDFg‘xm‰Oœ0j40˜EH+l2fœ0g‰œO2sDuPunAxux†rœO2sDu4Z+0ˆXI•GœŸOK˜48Dg‘ˆGwGœ0Hu4s0SˆfwEIOc…A9ˆu+lj€xc=‘œ˜=uugDGDEœ‰XPw˜Dec•E‘AucswEl‰˜i€cHT•xug+‰DTˆ•†1œuxK+B2‘nu•P…uDPJˆ†K•PXn•N+w˜—sDME2J•B+‰DTw‰4Oœux2J•Bn•N0I029œ˜j2KH=4nSHq…˜Blqlc2Km†S0A—Px0…G‰†c•„Z+•D+IHjn0Tˆ…†cZJu†Tˆ•†1Jmx1I‰B+‰DTˆ•†1J0xNcH†+•x0x˜D—‰mcJH2€0†NIwBsclT09D+‰DTˆ•†1J0x2J•B+‰DTˆuK9I9†…uDnSH0…•†BcmKˆ…†ˆOˆMxXxS2jˆuP3KH2Xˆ˜HXI†jAJTmz‰2Xn†NF…˜cAD˜P…J•B„A‰KTwMgOœux2J•B+‰DTˆ•†—…ME1I‰B+‰DTˆ•†1J0x3+B2‘ncNDxBTXq0N0B2‘+•D€D•DjJ0x2J•B+‰DTˆ•j9‰S4œ0480†nPw˜D1JA†2JuDfAOx‘ˆ•†1J0x2J•B+‰D+IHjn0Tˆ…†ˆSn•wPz0K1JA†2JuDfAOx‘ˆ•†1J0x2J•B+‰xXœ‰E—J†IcuKSn†x˜…Bsˆug3zA††+•ˆ„IucrKlDD…GBmA˜4„IucrKlDD…GBmA˜4„IucrKlDD…GBmA˜4„IucrKlDD…GTZAu†=nHj1wOT3JG†Z+†OIHj9cm2Nc•PXAMD+xB†n‰SjNKHˆr+HDXD•DjJ0x2J•B+‰DTˆ•†1J0x2JGNuD0BNJGcZDS…Hw˜†uncNTwm‰uxlnH0+E8DGxPAAcˆIc=H0cx2D‰ZsG‰H‰uiHDOBu‰HˆMœ9‰OwSP4D9ˆ‘xm‰Oœ0j4c‰E2J•B+‰DTˆ•†1J0x2J•B+x+œ˜KEœ˜jIcm†Zn•DTq‰†1‰Kˆ0B28n‰x0z†xrKSKexug+‰DTˆ•†1J0x2J•B+‰DTIHj9cm2Nc•PX01DFxSDf‰0xJ‰•B€n†x˜…BsI˜4m…lDP0BKG+•DjJ0x2J•B+‰DTˆ•†1J0x2JGNuDlBeJAcsc•ZHDcuDc€ImcZz‰=HwE=DlTP+mcz‰MHœuGDGxPAAcNn‰…Hw1ˆmDl2I1cZz‰=Hn†TD0gj…GcˆIc=Hn†TDcj1xmc…œ‰41I‰B+‰DTˆ•†1J0x2J•B+‰D+zScnA0xJ‰•2rˆMN3…˜—sz9ˆ…†ˆP+•NFœuD˜qABœ‰ˆ•0†DœSDPnOTc9D+‰DTˆ•†1J0x2J•B+‰DTˆuBl00x+M„ZnuPFxSDPˆuEm…u4rAMDTœSJsœ9cIKGGnO†mwBT‰…1†DJuZOJu†Tˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•2Xˆ‰x0IE1ˆ9cI0B2rˆMx˜…M†1…lcˆ09NEncwHIu…G‰†2JuDH+x+œ˜KEœ˜jIcm†OnmD3…M41J0E…HnZn•N0…M41J0EmœcnZˆBN3xcŽG0SNmI0XOJu†Tˆ•†1J0x2J•B+‰DTˆ•†—…ME2J•B+‰DTˆ•†1J0x2J•B0†x„z†jnw•E2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†9cmKIc•H‘+m—Hœ˜K—AmTˆ0BBABwHI˜ˆ9ˆ9†I0MB+•IHj9cm2Nc•PX01DFxSDf‰lD2JH2uˆBN+xuKn‰lD2JH2P0†N+…0DED0ˆœ‰ˆP+HKG+•†1J0x2J•B+‰DTˆ•†1J0xS‰0g+‰DTˆ•†1J0x2J•B+‰DTxZ€cGNAHxKwE†w—€cHT‘z0j€x‰†Mœu†zSEungfœME…‰P‰cAMHDcuDc€ImwOz‰•uAFEID†††AAc……iHDcD‘D‰4PˆGˆˆJH…uAFE—DlŸsœ1‰Hw‰‰HDcuDc€IE†3GN8Au‘œcNAOT†n‰jj3uBmxlcEnuxeI0Hˆ+X„IgjuPHn‰gZˆ0B‘œucNA˜„€cHj4AH…•IScEnuxeI0H‰0g+‰DTˆ•†1J0x2J•B+‰DFwBjjJ0g2‰H2uˆBN+xuKn‰lT†xug+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0xcGcr0†NKœ•j9qAB+M—4ˆMDOˆ•j—+S4+BˆPnSZP…††n+lTexug+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x3KH2Xˆ˜HXI†jnAA†m…H2=ˆMxXIg8w˜EI0BjZ0A20zE1IGx1I‰B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1JTII‰B‘0A—P…02f‰0g3KH2Xˆ˜HXI†jnAlTJc1T„+HNG+•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0Eˆ…m†HnSZPIHjn0Tˆ…†c‰BDFœ˜c—JD…†2X+•DSxˆ2ˆuP…J•B€0x0…SBlAS4m…lDO0BD€D•DjJ0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x3K•PunS•Hˆ†j9cm2Nc•PX+‰JZˆ•j9AˆœAcS0x0…SBlAS4lz2AOx‘ˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•Bˆ†B‘ˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B0†x„z†jnw•E2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B€0A—Px02Xq0EI0BjZ0A2cˆHTAJ0EIKHnsncxqœBŽsœ9xexug+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0xS‰0g+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x3K•P•0DTq‰†1ˆ˜NIK•†ABNDˆ•†jnOc3K•PunS•Hˆ†j9cm2Nc•PXA˜†mI‰†—‰SjmKu4O+‰Dmx‰j9‰S4œ0480†nPxu—G+mTexug+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0xI0˜NX0l†IHs…0E…J•B€nmD0…˜D—cmT…J•B€nuH0…˜Kn+cn…Hj=nu†€D•DjJ0x2J•B+‰DTˆ•†1J0x2+1T+‰DTˆ•†1J0x2J•B+‰DTˆuKlDljI0BB‘+wP…0K—JmBJOx€nuH0…˜Kn+cn…Hj=nu†€D•Dœux2J•B+‰DTˆ•†1J0x2J•BuAFEjuPHn‰gZˆc…•ˆ•gNwugcœBMu+Gn€D0BA+MDjJ0x2J•B+‰DTˆ•†1J0x2KHn•0†xDœ•=sKSEˆI‰28nm—HxcjlAmT2J•†fA˜†+IHjn0Tˆ…†ˆSncNTx‰jP+0P…J•B€nmD0…˜D—cmT…J•B€nuH0…˜Kn+cn…Hj=nu†€D•DjJ0x2J•B+‰DTˆ•†1J0x2+BˆHnG20…ME1‰ˆ0B2OˆBNKw•j—+S4+BˆPnSZP…††n+lTexug+‰DTˆ•†1J0x2+1T+‰DTˆ•†1J0x2J•—4nSPqœ˜K1ˆuEc•nZ0A2=œ˜DPIGx1ˆug+‰DTˆ•†1J0x2KHn•0†xDœ•=sKSEˆI‰28nm—HxcjlAmT2J•†fA˜†+IHjn0Tˆ…†cH+†2œ41J0E…HnZn•N0…M41J0EmœcnZˆBN3xcŽG0SNmI0XOJu†Tˆ•†1J0x2J•Bncxˆˆ•E1‰†I0B—4nu•HˆSKEK†Jc1ŸPA‰DTœ‰jjJj+MjOnmDDœuK—+T‰ux€nmD0…˜D—cmTlz2+HDOˆ•=sKDmœcˆ=0N€œE‰…1†JcMBZˆlx‘ˆ•†1J0x2J•B+‰DTˆ•†1J0EKuNZnOZ3HŽs‰S4œ0480†DTq‰†1‰SEI0BjZ0A2cD•DjJ0x2J•B+‰DTˆuˆKœux2J•B+‰DTˆ•†9cDm…†nOJu†Tˆ•†1J0x2J•B+‰DTˆ•†1‰Km…SD‰BDTœmˆ…3u‰HœGˆXDXu3GcN‰•ŽHncD„D4Aœ1wOz‰•u+sXGDlBeJAcZ3u4ˆcH2jDlTjxmcIJu•H0DuDc†4œGJ•J•—u+Gn€D0BA+1cZIlnH0DEDcj1xmcˆw0iHœu†lD†1KmˆDXHncD—Dcj1Am‰uˆlwHw˜†uDcj1œAc4…S=HDxHDGxPˆjrw•E2J•B+‰DTˆ•†1J0x2J•Bncxˆˆ•E1KS40M—ZˆcDIu—GcmTm+BnZ+HDXD•DjJ0x2J•B+‰DTˆ•†1J0x2J•B+‰DTIu2nASP2JGJP+‰xXx˜D9z9ˆIKHc‘+0jGˆ•†jxux3KG4ˆMNF…0K1IGx1I‰B+‰DTˆ•†1J0x2J•B+‰ŽZ+•†1J0x2J•B+‰DTˆ•†1J0xNcH†+•D+IHjn0Tˆ…†ˆr‰BNq…B†n‰TˆzSiu0x0…SBlAS4mz0xZ+HNG+•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰D+x˜…snux…ImT+X€q˜jecG†€3Hx3IScNISxenABj3Hx2w•g†n0NeIlcuxcx€IFENnu††3GNEI0DHncw4xu29q0EI‰uxjD1K1J†1+lD2JH2€0†NIwBscjc9D+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2JH2•nG2mˆ•48…˜x33•gTˆuH+œ˜KEœ˜jIˆ0†=w‰g†IOcHIlcux0‰Pwcl‰9—€ˆcc4AsX„œA—PœcjEz9TœcNZœ†Mœ0i•K˜HfD†Njˆ•jrœO2sDuPunAxjˆ•jOxBTH+•BfAHw„ˆ•gl‰˜E†I‰B=ˆ0HTI0cEI9c†+•BfJGŸ€D˜g1nHˆ0A…uAMDMDX€cmK‘JuJHw˜†uDcj1œAcz‰MH0DuD1K1J•jrw•E2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1‰Km…SDA˜=Zˆ•=€cuHx0B†œgjuHenl†‘ˆ0BmI0cAD9cH‰G†‘AucNIMgN+S€n0DHxcxKwEl+OBeˆl2s3HxJœsX€q˜jeIlˆ•3uB3wFEjI˜jecH2uˆc…OwMi€q˜Hj+SNIK•†ABNDˆGc……SwHœ•grDZ€ˆAc‘DSZHDlBBDXu3GcN‰•ŽH0DqDAˆ†x•†—‰SjmKu4O+‰Kc…‰P‰c0•DMD1+jG+•†1J0x2J•B+‰DTˆ•†1J0xS‰0g+‰DTˆ•†1J0x2J•B+‰DFœ˜2—AS4†xug+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x3KGBr0†TxcTAJ0„ODO†DD0—sc1cˆœ‰„Hw9†4DlBeJAcsc•ZH00†ODXu3GcN‰•Ž•DMD1+jG+•†1J0x2J•B+‰DTˆ•†1J0xS‰0g+‰DTˆ•†1J0x2J•B+‰DF…˜B—+ˆz‰2H0†NmˆH2nI˜jI0M—ZncwPx‰E1‰Km…SDZAOx‘ˆ•†1J0x2J•B+‰ŽZ+•†1J0x2+1TJu†Tˆ•†1JlˆI0g+‰DTˆ•†1JlB2Au†exFEl‰˜4HcG†€3Hx3IScN‰˜EH‰Gx•x0cNIMg†+S†en0DsAHxJx9x‘ˆ•†1J0x2Jug‰‰N3œ˜K—c†I‰2rˆMN3w˜2En•E2J•B+‰DTw‰EjqME2J•B+‰NF…c†Ez9Tˆz‰2rˆMx˜…˜BlA0xIœ†ˆH0AD+w˜—sD˜xœcˆPnG2XxS2jˆOT†xug+‰DTˆ•†1J0x2+MjXˆMN0z02jJjK•nZncxDDgj‰m2I0MjrncwPx‰gOœux2J•Bˆ†B‘+•†1J0x2JGN4+ux‘ˆ•†1J0x2JugDZ€cAcIx0‰Hnm2‰DlT†…m‰H‰GMu+cD+D‰4jx1c‘œ‰MHw9†3Dc€xmˆDiu0ScHDAc4KAˆDXHncD—DXu3G‰O…‰•DMD1D†=s0mc‘J•—Hw˜MHDl2ecmwOz‰•HA˜†qD†jPJAˆn‰—HnAˆ†D‰ZuA1cˆzcwHA˜HSDc€xmc…x0ZuAMDMDAcAœ•DjJ0x2J•B+u†FJ0D9K†ˆcGT+NFz0BlDAT2+M„ZnuHXxcjPK˜4Zœ•4EœTrw˜P2K˜gZœ•NfwAKuœ˜j‰˜Hj0†TXIS2Mœ‰H‰˜Hfw9jux†rœ˜=uuEu+•KEwSB‰œ˜=•A˜HXnKux†„xuDEœ9cKu2€x‰4sœˆI+9T‘n†N€x‰XGœ0g…zS4u++gXIjœOˆZ‰˜4=DO2ux†„xuDEœ9c+M4€x‰4sœ˜E…uEHD†KfwlTSœ˜=u‰˜EH+GDEœ•4rœ9ˆ2u48+S2‘xTJœ˜ŽOœ•E2J•B+‰DTw‰†BJ†I0B—4nu••ˆH†n+†ˆ0˜E+‰DTˆ•†1JlBIAN+‰DTˆ•†—JmBˆœlNZ0l†FzSK9KmTNc•H0SP0xcG‰T…mK0x0…SBlAS4mz0x€n•N3w˜2f‰A†3z0DZˆlx‘ˆ•†1J0x2J•B+‰x0DBjlA0g3…ˆ€00†FIHjn0Tˆ…†ˆr+†Oˆ•j9qAB+M—4ˆMDOˆ•j—+S4+BˆPnSZP…††n+lTexug+‰DTˆ•†1J0x2Ku4E+‰DIuDEcmT0MjH01DII˜DjKA†JcMBZˆlx‘ˆ•†1J0x2J•B+‰DTˆ•†1JTII‰B‘0†w4xuK—Iug3KG4ˆMNF…0K1IOT†xug+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0xKuNPnmDmˆu2EcmD2Kcn•0A20xuK9œ9ˆI0xfDX€…Gc4A•MHwFEXDlTjxmcIJu•HnAˆ3DEeK††l‰SH0EDD0—sc1cˆœ‰„uAFEKDE9AccBIBMHDlBBDAcAœGc‘IA…Hw˜†uDcj1œAcˆcG…Hw9†3D0gEœmˆK•HI0˜NX0+El‰ˆ†‰GxZAucNIMgNˆ˜w€œcj€AsX„œ†mwMgOœux2J•B+‰DTˆ•†1J0x2J•—PJu†Tˆ•†1J0x2J•B+‰DTˆ•†9cDm…†nOJu†Tˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•—Zn‰N3xSKPJcI0˜D‰†N=I†jnJmTNcG†H+•xXx˜D9z9ˆIKHc‘+0jGˆ•†jxux3KG4ˆMNF…0K1IOTexug+‰DTˆ•†1J0x2J•B+‰DFq‰DjJ0x2J•B+‰DTˆuˆKœux2J•B+‰DTˆ•†1‰DN0M„Z+‰JZˆHw4…1x1I‰B+‰DTˆ•†1J0xIœA†P0†x˜ISB1J0g3KG4ˆMNF…0K1JSNmz‰B€nA20D‰†M…FE2JH—s0cx„…cjAœ1x1I‰B+‰DTˆ•†1J0x2J•B+‰xXœ‰†1ˆuEN…†nH‰BJZx•Enw•E2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†9Aˆœ†2ZnSP0œMgOœux2J•B+‰DTˆ•†1J0x2J•—PJu†Tˆ•†1J0x2J•B+‰DTˆ•†9œ˜H2JuŽZnuHXxME1‰m2ˆcOŽ40†D€IBTAnuP09D+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2JH—s0cx„…cjAJA†2+M2P0†xˆS…GJDN0BB‘+PnuDPwOˆ3zlx+NII˜2—cS4c9D+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2JH2GncNq…Bw4…˜xJ‰•B€ˆ˜H˜wuKlcS2DKmTH+X€q˜†1nOc3+Bj=nN0œBxrKSK…I0ˆux†€œgOœux2J•B+‰DTˆ•†1J0x2J•—PJu†Tˆ•†1J0x2J•Bˆ†B‘ˆ•†1J0x2J•B+‰xXœ‰†1ˆuEm+MjZnSPKqcTAˆ9xmœ04HˆMxˆœEnw•E2J•B+‰DTˆ•†1J0x2J•BnGD+I˜K9œ˜jeITOnuHXx0K˜ql†JH2GncNq…ME‰w•E2J•B+‰DTˆ•†1Jm†1I‰B+‰DTˆ•†1J0xIcONr0†DFwBjjJ0g3+M2PncwH…BT‰…˜Pm+MjZnSP+z‰jPœ1x1I‰B+‰DTˆ•†1J0x2J•B+‰NFz0BlDATn…•†‘+x„w˜…G‰lTexug+‰DTˆ•†1J0x2+1T+‰DTˆ•†1J0x2J•2P0†N+…0DED˜x3KONZnGDKD•DjJ0x2J•—PJux‘ˆ•†1J0x…z0g4Ju†Tˆ•†1J0xI‰KEœGKMœ0„u0˜EH+‰K€x‰Esœu†‘A˜PwSPEœ‰X‘œ˜EnS48+cNXI•Euœ0j2ˆS4sw92fœ0g‰œ9DIDuH+uˆXImKsœ˜x…x•E2J•B+‰DTw‰†BJxˆ0Mj=n†DTIu2Eq0EIcm•n†xOˆu…G‰†NcGcf+‰gAD˜xe‰GK4x0†ˆOc†JOc†ˆ0B=KSNqcMB‘ˆ•†1J0x2Jug‰‰NFI˜DEKK2JH2=ˆMN+z‰†9K†mœ‰nH+‰glA0N†cHB43Hx„œcNJlŸ€cHTjxcx˜x9clJlˆe3GN8AHxJwEAq˜gec•ˆZ‰O2€x†jrIOc…wT+2ZIBGœ20‰E2J•B+‰DTw‰†BJ†I0B—4nu••ˆH†EqlˆKHˆ=nS†Mœ92‘zSHj+KZIBGœˆNDuHj0‰KEœ†fœ‰HœS4sw92fœ0g‰œ9DIDuH+uˆXImKsœ˜NnS4A9jEœM4œOnHc˜4EDA‰ZnuP0œ1wOz‰•H0DEDc†j0mˆ…3H‰H0c†0SH˜wu…sc‰E2J•B+‰DTw‰EjqME2J•B+‰NF…c†Ez9Tˆz‰2rˆMx˜…˜BlA0xIœ†ˆH0AD+w˜—sD˜xn…S4r01—4I˜K9ASgn…nZˆMN2œ•j9DlˆIKHˆSˆ‰w4w•41J0Eˆ0B—Znu†€+•†1J0x2+9D+‰DTˆ•†1J0x2J•2EnmD3œB†lASg2Jux€0cN+…˜DjJSNmz‰B€nA20D‰†M…FE2JH—s0cx„…cjAœ1x1I‰B+‰DTˆ•†1J0x2J•B+‰D+…††lz1BI‰•MP+‰Nq…˜DXql†I0M2G0cxqœME1ˆ˜DnJuDG+‰DnHN˜z˜D3zlx+NII˜2—cS4c9D+‰DTˆ•†1J0x2J•B+‰DTˆ•j—0SN+BˆX+‰JZˆu…G‰†n…•jXn•x„IBsc0g3zANfAMDTœ†N1q˜P…J•B€ˆ˜H˜wuKlclTexug+‰DTˆ•†1J0x2J•B+‰DTIuKEKDcHc‰BDFzSK—+SˆmœcˆOnx˜I†jAˆuPJz0DG+‰DnHTPnOD2JH—s0cx„…cjAIGx1I‰B+‰DTˆ•†1J0x2J•B+‰D+…††lz1BI‰•MP+‰Nq…˜DXql†I0M2G0cxqœME1nOc3zlx+mBOx‰jPxux3+Bj=nN0œME‰w•E2J•B+‰DTˆ•†1J0x2J•B+NII˜2—cS42K1TnGD+zcŽG+S4mKON=0A2cœ•jPˆuP…J•Bf0MDœ41J0Eœ‰ˆGˆBxcwMgOœux2J•B+‰DTˆ•†1J0x2J•B€ˆ˜H˜wuKlc0xJ‰•2rˆMN3ˆSDEcxK•ˆ80†DœEAnOD2JuKm+HDmw•†1‰m2ˆcOŽ40†D€D•DjJ0x2J•B+‰DTˆ•†1J0x2JH—s0cx„…cjAJA†2+M„ZnuZPzcjnJDˆc•PX+•DmwjPxux3…lxs+†Oˆ•j—0SN+BˆX+HKG+•†1J0x2J•B+‰DTˆ•†1J0x3+Bj=nN0œM†M…˜xm…H2P01D3œ˜D9z˜Nˆ…†c‘+mBGœ41J0PnKDfAMDTIuKEKDcHcZAOx‘ˆ•†1J0x2J•B+‰DTˆ•†1J0Eœ‰ˆGˆBxcˆHTAJj+MjSnuH0xu29KSjI‰uxf0˜†mw•†1ˆ˜DnI0DG+‰D+…††lz1BI‰uXOJu†Tˆ•†1J0x2J•B+‰DTˆ•†1‰m2ˆcOŽ40†DTq‰†—AmTmœ1†P0†NFwH†lAS4JuJO+†Oˆ•=4z1x3zlx+NII˜2—cS4c9D+‰DTˆ•†1J0x2J•B+‰DTˆ•j—0SN+BˆX+‰JZˆu…G‰†n…•jXn•x„IBsc0g3…OxfAMDTœ†N—xuP…J•B€ˆ˜H˜wuKlclTexug+‰DTˆ•†1J0x2J•B+‰DTIuKEKDcHc‰BDFzSK—+SˆmœcˆOnx˜I†jAˆuPI0DG+‰Dmx‰E8q˜P…J•B€ˆ˜H˜wuKlclTexug+‰DTˆ•†1J0x2J•B+‰DFwBjjJ0g20M2P0†xˆS2lKmTˆ…Sx‘+„œ4j‰2I0˜EH+=ZI‰jPD˜Eœ‰ˆGˆBxcx‰jP+lˆN‰uDG+‰D+x0—s‰S4n…uN•nDOˆ•j—‰S40MBZ+HNG+•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰N3œ˜K—c†I‰2E0cx„z†j‰w•E2J•B+‰DTˆ•†1J0x2J•Bˆ†B‘ˆ•†1J0x2J•B+‰ŽZ+•†1J0x2J•B+‰DFzcjn‰mBmœAKˆMN3…cj‰w•E2J•B+‰ŽZ+•DjJ0x2J•Bu+u†‘+•†1J0x2J•B4+‰gjAOJ€cHTXx0BDIFElx0HE+ˆcGc€nsElJlˆe‰GKjx0BlxcD8œ0j2œS4G0+gXxcjnœ0H…DuPZA92€x†GœˆNDuPf+lDZDAc4KAˆ2w‰…HDMXHJu†Tˆ•†1J0xI‰2jnmD0xcj—‰˜48+cNXI•EuIOc2K˜EH+O2‘I0g…œSxsœSPEœHKXx1ˆIOc2wSgZD‰4Xœ†jMœ0g2ˆS4€œOjXImxJIOc2xSgZD‰4Xœ†jMœ0g2n•E2J•B+‰DTw‰†BJxˆ0Mj=n†DTIucMK0xNcG‰Z0†xœ˜DjK˜4•DS2€x‰†sœOŸHA˜4f0KEœ•†SœSH‘‰†uA1—ZJu†Tˆ•†1J0xI‰2Tn•x˜zc†l…˜x3+˜E„+‰xXx0K9cSPI0M†D02†œAc…I‰Xu+ucADc=s‰Ac4J•ŽHDlBBcucjqlKTœux2J•B+‰D‘ˆHB—JSNmœ‰ˆ•+‰D+DMHjJTœ†2X0m20z‰†ecHTG3H…•I+EjœSEHcuK€AuBIFE†n0N˜ISgun†B+‰DTˆ•†1JlB2K‰2O0cN3I˜2AJ0E†cM†ncwH…Bjlˆ˜4mI‰KXImxJIOc2xSgZD‰4Xœ†jMœ0g2ˆSPEœH2IDZs…MDjJ0x2J•B+u†FJ0D9K†ˆcGT+N0wBx9…lD2+M„ZnuHXxcjPJmBNcSKZ0xœ˜K—‰˜4=DGDEœ˜2MœOnHc˜4EDAxfœ0g+0cKcx•E2J•B+‰DTw‰†BJxˆ0Mj=n†DTIu—s0SHm…†nZc•DFw˜2f‰S4I…†ˆP+‰g†n2Hn0x=3u†ˆOc†JOc†ˆ0B=AHwGw9cj3Oc†‰GK8x0BDIFElx0HHI‰Ex0c1x0c†n0NecGDZx0€x0clxc†nlˆXAsX„IgNxOKecGcG3uBlx0cl‰0E†ˆ0B=AHxHx0cl…O2HI‰H3HxxMgeJ0xHœAxEAu†HwMgAD9c8K9ˆu+lj‘œuB8œT…wS4•DS2‘x2fœ˜PIK˜H‘+0ˆZœ†MœOT‘+˜4sDuPZx†jMœ9ˆZˆSEH+‰KEw‰E—IOc2K˜H‘A˜D+‰DTˆ•†1JlB2K‰2O0cN3I˜2AJ0E†cj=nSHœM†9œ9cKHˆf0†N2ˆG‰Hxl‰Hw‰D—D†4JG‰•+G‰HDlBBD‰4j+Gˆ…Dm‰HA˜†eD0gP+1cNDSMu+lB1DAKDA‰Hw‰‰HnB0DZuDAcN3G‰Hw+EcDGxPAAcID…HDl‰ZDlTNDAcIJH—HDlBBDlŸ€œ1c‘œ+Xu+l†MDcjH…1J•J•…uncˆDXuIGc…IAˆDAsX„IgjI9Beˆ0EHxc…•IScE0SEecGˆZx0GœSc†œlcOœux2J•B+‰D‘ˆHB—JSNmœ‰ˆ•+‰D+I˜K—‰†2K•ˆPnuH˜D‰†ec•H=ˆcxKw+Elz˜PHn‰BZ3HxJIlclKKHc•BuAsX„Igl‰9—€‰GN‘AHx˜wBDsIOˆIzSEHA92Zˆ•jsw˜Nˆ…uPs+H†+‰DTˆ•†1JlB2K‰2P0†N+…0DED˜xˆ0MjP0cN€ˆGˆ…3H‰H0c†DAˆPœAcIJ•Hw12=D‰4H…m‰Hw‰‰u+lB1DAKDAcN3G‰uAMx=Ju†Tˆ•†1J0xI‰2TˆMx=z0—Gˆ9j2Kcn•0A20xuK9œ9ˆI‰KZœMjfœO—uuHjw9ˆXI1xsœ9ˆ2A˜4HA˜j€xmˆ—œ0xNqME2J•B+‰DTw‰EjqME2J•B+‰NF…c†Ez9Tˆz‰2EˆBwHISK9œ9ˆI‰2Hnm2+œ˜…ZKS†…HjX‰0•P…02E‰jJH—•AcDOˆ•j—ION…J•B€ˆ‰K2w•†1‰mcDIlx+N0wBx9…lD…J•B€nm2Iœ0…scmTlK1TOAMDTIuc0+SNœ0KX‰BKTw•†9K†mœ‰nH+‰D+I˜K—‰†JcK+HB‘ˆ•†1J0x†xug+‰DTˆ•†1J0x2Ku4E+•NFzcjlˆ˜ˆc•nZ0A2=ˆ††lz9DJuDu‰Mˆ•ˆcTX…92J…juˆBwHIuDr…˜†nKD‘0MxKwEAxugnKHBs+Hˆ„ˆBN˜wugnKHBs+HDOœHN9‰l2cN+04•ˆcTX…9BJzmKuncDmw•†1‰mBNcSN•nDOˆ•j9…0NK•P‘0†NDw•†˜J†D+c0KScAT0ccŽZqcD+KcˆA+HDXD•DjJ0x2J•B+‰DTˆ•†1J0x2JH2Xnx0xBjlDATmz‰MP+‰ˆ•ˆMgOœux2J•B+‰DTˆ•†1J0x2J•2EnmD3œB†lASg2Jux€n†x˜…BsI˜4mz‰2=nO†TIuBn‰S4‰uZOJu†Tˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•2Z0S†Tœ•j9œ1TIcGBAcnZ3HTA‰mKD‰GT€nm2Iœ0…scmTlJ•BE+S†TIuBn‰S4cD„0BKOq‰j—ˆONzc2u0SHIz†jn‰††2JH†E+‰D+w˜K9cKlzj‰MD+D‰Hjœ1x1I‰B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•Bncxˆˆ•E1‰mccœ‰ˆH0m2c3•H1œ1x1I‰B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1q9nHDlcHDlB1+1ˆ2w‰…HDMXHDAc4KAcwcnuA1nHD‰4jAGc‘z‰ŽHnAˆND†4JG‰•+G‰HDlBBD‰4j+Gˆ…Dm‰Hn+XHDlM€c‰DjJ0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰xXœ‰†1ˆuEN0B2Xn†ˆG…BNAJAN2JH—HAc…ZIuc0+SNœ0KX+HNG+•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†9Aˆœ†2ZnSP0œMgOœux2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DFq‰DjJ0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0xS‰0g+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰xXœ‰†1ˆuNm…H2=ˆMxXIg8w˜ˆN0MPSn†x˜…BsI˜ˆˆ0B—Znu†IuBn‰S4cDO0BDOIH†n‰mTmI0EZˆlx‘ˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•28nm—H…˜BlDABIc9D+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DFq‰DjJ0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x…z+gXI2uw˜HNc˜4€œOjEI†Sœ92ZwSPEœH2jnmD0xcj—‰˜EH+‰KEœ•4SœSH‘‰‰E2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•2Z0S†Tœ•j9œ1TIcGBAcnZqcTA‰mKD‰•BE+S†TIuBn‰S4cDP0BJZq‰j—ION2JH†E+‰D+w˜K9cKlzP‰BJZIucM+0x3Ic†+xX…Bjl…02qKmŸP‰BD+D‰Hjœ1x1I‰B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†9Aˆœ†2ZnSP0œMgOœux2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2+1T+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTIHjlz˜4cHˆHˆMNqn†NAJA†2KGcXˆ9†FD0Blz1BmKuNO012˜IH†Xq04KHˆ•0†wH…ME1‰TKHˆ•cOjFˆM41J0EKuNZnO†€D•DjJ0x2J•B+‰DTˆ•†1J0x2J•B+‰DFq‰DjJ0x2J•B+‰DTˆ•†1J0x2+1T+‰DTˆ•†1J0x2J•B+‰DTˆuDEcmT0MjH+‰D+œ˜29cKIcG‰ZnOjG+•†1J0x2J•B+‰DFq‰DjJ0x2J•B+‰DTˆHjlz9jI09D+‰DTˆ•†1J0x2J•B+‰DTˆuDEcmT0MjH+‰ˆ•ˆMgOœux2J•B+‰DTˆ•†—…ME2J•B+‰ŽZ+•DjJ0x2J•Bu+u†‘+•†1J0x2J•B4+‰gjAOJ€cHTXx0BDIFElx0HE+ˆcGc€nsElJlˆe‰GKj3uBlxcD8œ0j2œS4G0+gXxcjnœ0H…DuPZA92€x†GœˆNDuPf+lDZDAc4KAˆ2w‰…HDMXHJu†Tˆ•†1J0xI‰2jnmD0xcj—‰˜48+cNXI•EuIOc2K˜EH+O2‘I0g…œSxsœSPEœHKXx1ˆIOc2wSgZD‰4Xœ†jMœ0g2ˆS4€œOjXImxJIOc2xSgZD‰4Xœ†jMœ0g2n•E2J•B+‰DTw‰†BJxˆ0Mj=n†DTIucMK0xNcG‰Z0†xœ˜DjK˜4•DS2€x‰†sœOŸHA˜4f0KEœ•†SœSH‘‰†uA1—ZJu†Tˆ•†1J0xI‰2Tn•x˜zc†l…˜x3+˜E„+‰xXx0K9cSPI0M†D02†œAc…I‰Xu+ucADc=s‰Ac4J•ŽHDlBBcucjqlKTœux2J•B+‰D‘ˆHB—JSNmœ‰ˆ•+‰D+DMHjJTœ†2X0m20z‰†ecHTG3H…•I+EjœSEHcuK€AuBIFE†n0N˜ISgun†B+‰DTˆ•†1JlB2K‰2O0cN3I˜2AJ0E†cM†ncwH…Bjlˆ˜4mI‰KXImxJIOc2xSgZD‰4Xœ†jMœ0g2ˆSPEœH2IDZs…MDjJ0x2J•B+u†FJ0D9K†ˆcGT+N0wBx9…lD2+M„ZnuHXxcjPJmBNcSKZ0xœ˜K—‰˜4=DGDEœ˜2MœOnHc˜4EDAxfœ0g+0cKcx•E2J•B+‰DTw‰†BJxˆ0Mj=n†DTIu—s0SHm…†nZc•DFw˜2f‰S4I…†ˆP+‰g†n2Hn0x=3u†ˆOc†JOc†ˆ0B=AHwGw9cj3Oc†‰GK8x0BDIFElx0HHI‰Ex0c1x0c†n0NecGDZx0€x0clxc†nlˆXAsX„IgNxOKecGcG3uBlx0cl‰0E†ˆ0B=AHxHx0cl…O2HI‰H3HxxMgeJ0xHœAxEAu†HwMgAD9c8K9ˆu+lj‘œuB8œT…wS4•DS2‘x2fœ˜PIK˜H‘+0ˆZœ†MœOT‘+˜4sDuPZx†jMœ9ˆZˆSEH+‰KEw‰E—IOc2K˜H‘A˜D+‰DTˆ•†1JlB2K‰2O0cN3I˜2AJ0E†cj=nSHœM†9œ9cKHˆf0†N2ˆG‰Hxl‰Hw‰D—D†4JG‰•+G‰HDlBBD024cmˆ…Dm‰HA˜†eD0gP+1cNDSMu+lB1DAKDA‰Hw‰‰HA˜†DZuDAcN3G‰Hw+EcDGxPAAcID…HDl‰ZDlTNDAcIJH—HDlBBDlŸ€œ1c‘œ+Xu+l†MDcjH…1J•J•…uncˆDXuIGc…IAˆDAsX„IgjI9Beˆ0EHxc…•IScE0SEecGˆZx0GœSc†œlcOœux2J•B+‰D‘ˆHB—JSNmœ‰ˆ•+‰D+I˜K—‰†2K•ˆPnuH˜D‰†ec•H=ˆcxKw+Elz˜PHn‰BZ3HxJIlclKKHc•BuAsX„Igl‰9—€‰GN‘AHx˜wBDsIOˆIzSEHA92Zˆ•jsw˜Nˆ…uPs+H†+‰DTˆ•†1JlB2K‰2P0†N+…0DED˜xˆ0MjP0cN€ˆGˆ…3H‰H0c†DAˆPœAcIJ•Hw12=D‰4H…m‰Hw‰‰u+lB1DAKDAcN3G‰uAMx=Ju†Tˆ•†1J0xI‰2TˆMx=z0—Gˆ9j2Kcn•0A20xuK9œ9ˆI‰KZœMjfœO—uuHjw9ˆXI1xsœ9ˆ2A˜4HA˜j€xmˆ—œ0xNqME2J•B+‰DTw‰EjqME2J•B+‰NF…c†Ez9Tˆz‰2EˆBwHISK9œ9ˆI‰2Hnm2+œ˜…Z+S4KGG‰0•P…02E‰jJH—•AcDOˆ•j—ION…J•B€ˆ‰K2w•†1‰mcDIlx+N0wBx9…lD…J•B€nm2Iœ0…scmTlK1TOAMDTIuc0+SNœ0KX‰BKTw•†9K†mœ‰nH+‰D+I˜K—‰†JcK+HB‘ˆ•†1J0x†xug+‰DTˆ•†1J0x2Ku4E+•NFzcjlˆ˜ˆc•nZ0A2=ˆ††lz9DJuDu‰Mˆ•ˆcTX…92J…juˆBwHIuDr…˜†nKD‘0MxKwEAxugnKHBs+Hˆ„ˆBN˜wugnKHBs+HDOœHN9‰l2cN+04•ˆcTX…9BJzmKuncDmw•†1‰mBNcSN•nDOˆ•j9…0NK•P‘0†NDw•†˜J†D+c0KScAT0ccŽZqcD+KcˆA+HDXD•DjJ0x2J•B+‰DTˆ•†1J0x2JH2Xnx0xBjlDATmz‰MP+‰ˆ•ˆMgOœux2J•B+‰DTˆ•†1J0x2J•2EnmD3œB†lASg2Jux€n†x˜…BsI˜4mz‰2=nO†TIuBn‰S4‰uZOJu†Tˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•2Z0S†Tœ•j9œ1TIcGBAcnZ3HTA‰mKD‰GT€nm2Iœ0…scmTlJ•BE+S†TIuBn‰S4cD„0BKOq‰j—ˆONzc2u0SHIz†jn‰††2JH†E+‰D+w˜K9cKlz†2‰˜†+D‰HAœ1x1I‰B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•Bncxˆˆ•E1‰mccœ‰ˆH0m2c3•H1œ1x1I‰B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1q9nHDlcHDlB1+1ˆ2w‰…HDMXHDAc4KAc…I‰XuA1nHD‰4jAGc‘z‰ŽHnAˆND†4JG‰•+G‰HDlBBD024cmˆ…Dm‰Hn+XHDlM€c‰DjJ0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰xXœ‰†1ˆuEN0B2Xn†ˆGzcNAJ+E2JH—HA0†GIuc0+SNœ0KX+HNG+•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†9Aˆœ†2ZnSP0œMgOœux2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DFq‰DjJ0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0xS‰0g+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰xXœ‰†1ˆuNm…H2=ˆMxXIg8w˜ˆN0MPSn†x˜…BsI˜ˆˆ0B—Znu†IuBn‰S4cDO0BDOIH†n‰mTmI0EZˆlx‘ˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•28nm—H…˜BlDABIc9D+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DFq‰DjJ0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x…z+gXI2uw˜HNc˜4€œOjEI†Sœ92ZwSPEœH2jnmD0xcj—‰˜EH+‰KEœ•4SœSH‘‰‰E2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•2Z0S†Tœ•j9œ1TIcGBAcnZqcTA‰mKD‰•BE+S†TIuBn‰S4cDP0BJZq‰j—ION2JH†E+‰D+w˜K9cKlzP‰BJZIucM+0x3Ic†+xX…Bjl…02qKmŸP‰BD+D‰Hjœ1x1I‰B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†9Aˆœ†2ZnSP0œMgOœux2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2+1T+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTIHjlz˜4cHˆHˆMNqn†NAJA†2KGcXˆ9†FD0Blz1BmKuNO012˜IH†Xq04KHˆ•0†wH…ME1‰TKHˆ•cOjFˆM41J0EKuNZnO†€D•DjJ0x2J•B+‰DTˆ•†1J0x2J•B+‰DFq‰DjJ0x2J•B+‰DTˆ•†1J0x2+1T+‰DTˆ•†1J0x2J•B+‰DTˆuDEcmT0MjH+‰D+œ˜29cKIcG‰ZnOjG+•†1J0x2J•B+‰DFq‰DjJ0x2J•B+‰DTˆHjlz9jI09D+‰DTˆ•†1J0x2J•B+‰DTˆuDEcmT0MjH+‰ˆ•ˆMgOœux2J•B+‰DTˆ•†—…ME2J•B+‰ŽZ+•DjJ0x2J•Bu+u†‘+•†1J0x2J•B4+‰gjAOJ€cHTXx0BDIFElx0HE+ˆcGc€nsElJlˆecGDZx0€xcD8œ0j2œS4G0+gXxcjnœ0H…DuPZA92€x†GœˆNDuPf+lDZDAc4KAˆ2w‰…HDMXHJu†Tˆ•†1J0xI‰2jnmD0xcj—‰˜48+cNXI•EuIOc2K˜EH+O2‘I0g…œSxsœSPEœHKXx1ˆIOc2wSgZD‰4Xœ†jMœ0g2ˆS4€œOjXImxJIOc2xSgZD‰4Xœ†jMœ0g2n•E2J•B+‰DTw‰†BJxˆ0Mj=n†DTIucMK0xNcG‰Z0†xœ˜DjK˜4•DS2€x‰†sœOŸHA˜4f0KEœ•†SœSH‘‰†uA1—ZJu†Tˆ•†1J0xI‰2Tn•x˜zc†l…˜x3+˜E„+‰xXx0K9cSPI0M†D02†œAc…I‰Xu+ucADc=s‰Ac4J•ŽHDlBBcucjqlKTœux2J•B+‰D‘ˆHB—JSNmœ‰ˆ•+‰D+DMHjJTœ†2X0m20z‰†ecHTG3H…•I+EjœSEHcuK€AuBIFE†n0N˜ISgun†B+‰DTˆ•†1JlB2K‰2O0cN3I˜2AJ0E†cM†ncwH…Bjlˆ˜4mI‰KXImxJIOc2xSgZD‰4Xœ†jMœ0g2ˆSPEœH2IDZs…MDjJ0x2J•B+u†FJ0D9K†ˆcGT+N0wBx9…lD2+M„ZnuHXxcjPJmBNcSKZ0xœ˜K—‰˜4=DGDEœ˜2MœOnHc˜4EDAxfœ0g+0cKcx•E2J•B+‰DTw‰†BJxˆ0Mj=n†DTIuc˜+SNœ0KX+‰xXx0K9cSPI0M†DAcHxAc4J•Žu+lB1DAKDA‰Hw‰‰HnScEDZuDAc…I‰iHœO†—D0MunAˆ2w‰…HDMXHDAc4KAcˆ3O=uA1nHD0M€DAc43H‰ODO†DDl21…1cœl=Hw˜MHDcj1‰m‰Hw‰‰HwFEXD0gE3Gˆ2z‰JH0‰ZD1K1JGˆxcu+Gˆ€D‰4jDHe3GN8Au†=w‰g†IOcH‰GK8ˆ0HII•glDTHIADfˆ0cExlx‘ˆ•†1J0x2Jug‰‰NFI˜DEKK2JH2u0SHIz†jn‰†j2Ku4HˆMx0œ†jn+0wHDlcHDlB1+1ˆ2w‰…HDMXHDAc4KAc…I‰XuA1nHD‰4jAGc‘z‰ŽHnAˆND†4JG‰•+G‰HDlBBD‰4j+Gˆ…Dm‰Hn+XHDlM€cAwOz‰•H0mˆ1DAcH…1cZnA‰H0D+DAc4KAcNDm‰HnScHD†PK1cIxAŸ•DMD1DS2H0AˆDSXHA˜uA‰i€q˜jeI0N4Auc€xlcAD˜†HI+EHˆcxI•gNˆuŽ€œ0DAu†Eˆuclxc†œA†€AHw€œFEAD˜xen0g‘ˆc…•ˆ•gNˆOKOœux2J•B+‰D‘ˆHB—JSNmœ‰ˆ•+‰D+I˜K—‰†2K•ˆPnuH˜D‰†ec•H=ˆcxKw+Elz˜PHn‰BZ3HxJIlclKKHc•BuAsX„Igl‰9—€‰GN‘AHx˜wBDsIOˆIzSEHA92Zˆ•jsw˜Nˆ…uPs+H†+‰DTˆ•†1JlB2K‰2P0†N+…0DED˜xˆ0MjP0cN€ˆGˆ…3H‰H0c†DAˆPœAcIJ•Hw12=D‰4H…m‰Hw‰‰u+lB1DAKDAcN3G‰uAMx=Ju†Tˆ•†1J0xI‰2TˆMx=z0—Gˆ9j2Kcn•0A20xuK9œ9ˆI‰KZœMjfœO—uuHjw9ˆXI1xsœ9ˆ2A˜4HA˜j€xmˆ—œ0xNqME2J•B+‰DTw‰EjqME2J•B+‰NF…c†Ez9Tˆz‰2EˆBwHISK9œ9ˆI‰2Hnm2+œ˜…Zqlc‰KHˆEˆMDIucMKlD2JH—HAcDOˆ•j—ˆO†…J•B€ˆcK2w•†1‰mBNcSN•nDOˆ•j—IBDˆcGcf0†JZx•41J0E…†jEnG20…Bx‰…9x…J•2=nuP3I˜cAJ0Eˆ0B—Znu=4n†NAI•E2J•B+‰NG+•†1J0x2J•B+‰DFwBjjI9xmœcˆf01—4I˜K9ASgn…ˆGnDœ4rz˜2nImc+O=PI0—GccI+M•P+04„nE˜z˜Ez0EG+•ˆ„I•EPœ˜DncN+•ˆ„I•EPIODKN€+O†XnHNA+S2nImc+u=„3•ZsIuP…J•B€ˆBxX002lxOD2JH2•0cN+ISB9cj…J•2Kc0E0+BŽ4Aˆ0Km†Jc0E+K†cjIOT†xug+‰DTˆ•†1J0x2J•B+‰DTIHjlz˜4cHˆHˆMNDˆHTAJS2nc9D+‰DTˆ•†1J0x2J•B+‰DTˆHjEql†Ic•ˆ8n‰DTœ•j9…0NK•P‘0†NDˆH†nA0x3KuZZ0†wZw˜cOœux2J•B+‰DTˆ•†1J0x2J•B+‰DTˆuBl00xJH2ZˆMx0xBxr+SKJImT€ˆcKBxMj9q0HIœPXˆMˆ€ˆ•jj00x3KuZZ0†w4nHX…1NJ‰H—HAcDGIu—s0SHm…†nZcHDTœ‰jjJ0EN0B2Xn†ˆGzBN‰xuE†KM†Zˆlx‘ˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†9œ˜H2Jux€ˆ‰ˆ3I˜2Eˆ˜4JIBZˆlx‘ˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•BuAFE†n2Hn0x=3u†ˆOc†JOc†ˆ0B=AHxJwsEj3Oc†‰GK8x0BDIFElx0HHI‰Ex0c1x0c†n0NecGDZx0€x0clxc†nlˆXJ0g+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1JTII‰B‘+xX…Bjl…02D…AT‰˜†TIucMKl23+˜NA0cwHœ†jAœ1x1I‰B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•28nm—H…˜BlDABIc9D+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0xS‰0g+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰ŽZ+•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1JTII‰B‘+cNq…B†n‰TˆzSiu012Xz†Žs…0NK•P‘012˜…˜K—+0g3KuZZ0†w4nH˜…9D3K•nZˆMN2wMEnw•E2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆHsqlcKu4HˆBxcD•DjJ0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0xS‰0g+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰…„xmcˆDmwu0SH€DcjAAc‘z‰ŽHnAˆNDAc4Kc†EqABœc2rD‰4jJAc4JG…HDlBBJu†Tˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆuBl00xJH2ZˆMx0xBxrKSKJc1T€ˆ‰KBˆ•jj00x3KuZZ0†w4nHX…1†J‰H—HAcDTœ‰jjJ0EN0B2Xn†ˆGz†N‰…1†3+˜xP+‰Dˆœ‰†1‰TKHˆ•cOj+ˆBT‰…˜E†cM†Zˆlx‘ˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•28nm—H…˜BlDABIc9D+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DFq‰DjJ0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x3KHˆG0†w4œ˜2f‰jl…AT‰BDFxcjnnux†cu4GˆBNFœuD˜q0NIK•jS0†x„œ˜2lccJux€ncN+œ˜20wOxn‰Ox+N+œuBnAlTexug+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0xS‰0g+‰DTˆ•†1J0x2J•B+‰DFq‰DjJ0x2J•B+‰DTˆ•†1J0x2+MjXˆMN0z02jJ0EIcONXn†x0x0K—AAx1I‰B+‰DTˆ•†1J0xS‰0g+‰DTˆ•†1J0x2KHˆGnG20D•DjJ0x2J•B+‰DTˆ•†1J0x2+MjXˆMN0z02jJS2nc9D+‰DTˆ•†1J0x2J•—PJu†Tˆ•†1Jm†1ˆug+‰DTˆ•4PœOB1I‰B+‰DTˆ•EjK˜g8wSˆXImcœ0j2ˆS4sw9TjnmD0xcj—‰˜4A9jXImxJœOˆsIuiHœO†3D029‰1cœcnHw˜€DAˆADmc……„HDG2HDAcPAME†ˆ0B=Au†ˆOc†JOcKœux2J•B+‰D‘ˆH†EqABœc2rDc†PKmcIJO—HA˜†TD‰4jwAˆ2w‰…HDMXHDAc4KAcˆ0•HA˜†DE†‰GcI…†MHw‰D—DcjAAcˆ3O=HA˜†…DE†‰GcI…†MHw‰D—Ju†Tˆ•†1J0xI‰2Tn•x˜zc†l…˜x3+˜x„+‰xXx0K9cSPI0M†D02†œAc…I‰Xu+ucADc=s‰Ac4J•ŽHDlBBc•gjqlKTœux2J•B+‰D‘ˆHB—JSNmœ‰ˆ•+‰D+D‰HAJTœ†2X0m20z‰†ecGDZxc…•IlcjœSEHcuK€AuBIFE†n0N˜œSgun†B+‰DTˆ•†1JlB2K‰2O0cN3I˜2AJ0E†KM†ncwH…Bjlˆ˜4mI‰KXImxJIOc2xSgZD‰4Xœ†jMœ0g2ˆSPEœH2ˆDZs…MDjJ0x2J•B+u†FJ0D9K†ˆcGT+N€z‰†9œ9cKHˆf0†N2ˆGcˆ3O=HA˜†…DE†‰GcI…†MHw‰D—DAc4Kcx†IA†•J0g+‰DTˆ•†1œuxK+M2=nuH˜xM†1‰mBNcSN•nDFzSK—+Tœ0DˆBxX0˜Bl‰SPI0B2rDc††qAcZcOwuAFEcDcjHˆA‰Hw‰clKABDJu†Tˆ•†1J0xI‰2Tn•x˜zc†l…˜x3+˜NA0cwHœ†jAJTœ†2X0m20z‰†eˆ02sx0BIFEj+uxHˆ‰DHˆ0cNIMgl‰9…€I+EHˆc…•IcNA0Ž€cOcEx0†ˆOc†JOc†ˆ0B=AHwGw9cj3Oc†cOˆHˆ0BuœMi€q˜jenlx•AHwHwsENcOc†cHB€ˆ0cNIMgNˆT†n‰jux0†DˆsElnKeA•Bx0•Oœ‰gjxlTe‰GKHIKux†rœugNISPZA92€x‰Gw˜HIK˜4Hw02‘x1‰GœTsw•E2J•B+‰DTw‰†BJxˆ0Mj=n†DTIu—s0SHm…†nZcHDFw˜2f‰S4I…†ˆP+‰g†n2Hn0x=3u†ˆOc†JOc†ˆ0B=AH…•Ilcj3Oc†‰GK8x0BDIFElx0HHI‰Ex0c1x0c†n0Ne‰GKjx0€x0clxc†nlˆXAsX„Iglˆ0xHˆ02•AuBlx0cl‰0E†ˆ0B=AHxHx0cl…O2HI‰H3HxxMgeJ0xHœAxEAu†HwMgAD9c8K9ˆu+lj‘œuB8œT…wSEH+l2‘x2fœ˜PIK˜H‘+0ˆZœ†MœOT‘+˜4sDuPZx†jMœ9ˆZˆSEH+‰KEw‰E—IOc2K˜H‘A˜D+‰DTˆ•†1JlB2K‰2O0cN3I˜2AJ0Eˆ0B—Znu†FI˜Df+SN†‰•KXI†nœ˜ExS4G0mxEˆ•ESœ˜=•wS4=nS2Xˆ•4rxˆ2zS48Dg€xEMœ˜NNclMHA12mD‰4jDmˆˆJuMu0cxqDAˆPœ‰DjJ0x2J•B+u†FJ0DEcmT0MjH+‰x˜z0DEKmc2Au‘œMglnSPHˆlDZxcxKI‰gNˆ˜g†‰Gx•x0cNIMgj+uxHˆ‰DHˆcxux0cjz˜gKœux2J•B+‰D‘ˆHB—‰SgmœAGnO†FKSc9AS4m+B2Znm—•ˆGˆI‰H=u+sEuD0g4nmcˆˆAnHn†1D02jD1c…3uŽHœ•xuJu†Tˆ•†1J0xI0guJu†Tˆ•†1Jxc•jGncxDˆHjfccˆ…H2Znm—•ˆu2Eq0EI0MPJnS43wB=sI1TJH—•AcDOˆ•j—ION…J•B€ˆ‰K2w•†1‰mcDIlx+N0wBx9…lD…J•B€ˆ‰ˆ3I˜2Eˆ˜4JcMBG+‰D+x†jE0jI0B2I‰BKTw•†9K†mœ‰nH+‰D+I˜K—‰†JcK+HB‘ˆ•†1J0x†xug+‰DTˆ•†1J0x2Ku4E+•NFzcjlˆ˜ˆc•nZ0A2=ˆ††lz9DJuDu‰Mˆ•ˆcTX…92J…juˆBwHIuDr…˜†nKD‘0MxKwEAxugnKHBs+Hˆ„ˆBN˜wugnKHBs+HDOœHN9‰l2cN+04•ˆcTX…9BJzmKuncDmw•†1‰mBNcSN•nDOˆ•j9…0NK•P‘0†NDw•†˜J†D+c0KScAT0ccŽZqcD+KcˆA+HDXD•DjJ0x2J•B+‰DTˆ•†1J0x2JH2Xnx0xBjlDATmz‰MP+‰ˆ•ˆMgOœux2J•B+‰DTˆ•†1J0x2J•2EnmD3œB†lASg2Jux€n†x˜…BsI˜4mz‰2=nO†TIuBn‰S4‰uZOJu†Tˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•2Z0S†Tœ•j9œ1TIcGBA0ZZ3HTA‰mcD‰GT€nm2Iœ0…scmTl‰•BE+S†TIuBn‰S4cDP0BKOq‰j—IONzc2u0SHIz†jn‰†j2JH†E+‰D+w˜K9cKlzP‰˜†+DMHAœ1x1I‰B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•Bncxˆˆ•E1‰mKcœ‰ˆH0m2c3•H1œ1x1I‰B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1q9nHDlcHDlB1+1ˆ2w‰…HDMXHDAc4KAcˆ0•uA1nHD‰4jAGc‘z‰ŽHnAˆND†4JG‰•+G‰HDlBBDc€zmˆ…Dm‰Hn+XHDlM€c‰DjJ0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰xXœ‰†1ˆuEN0B2Xn†ˆGzBNAJ+E2JH—•A0†GIuc˜+SNœ0KX+HNG+•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†9Aˆœ†2ZnSP0œMgOœux2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DFq‰DjJ0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0xS‰0g+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰xXœ‰†1ˆuNm…H2=ˆMxXIg8w˜ˆN0MPSn†x˜…BsI˜ˆˆ0B—Znu†IuBn‰S4cDO0BDOIH†n‰mTmI0EZˆlx‘ˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•28nm—H…˜BlDABIc9D+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DFq‰DjJ0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x…z+gXI2uw˜HNc˜4€œOjEI†Sœ92ZwSPEœH2jnmD0xcj—‰˜EH+‰KEœ•4SœSH‘‰‰E2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•2Z0S†Tœ•j9œ1TIcGBAcnZqcTA‰mKD‰•BE+S†TIuBn‰S4cDP0BJZq‰j—ION2JH†E+‰D+w˜K9cKlzP‰BJZIucM+0x3Ic†+xX…Bjl…02qKmŸP‰BD+D‰Hjœ1x1I‰B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†9Aˆœ†2ZnSP0œMgOœux2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2+1T+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTIHjlz˜4cHˆHˆMNqn†NAJA†2KGcXˆ9†FD0Blz1BmKuNO012˜IH†Xq04KHˆ•0†wH…ME1‰TKHˆ•cOjFˆM41J0EKuNZnO†€D•DjJ0x2J•B+‰DTˆ•†1J0x2J•B+‰DFq‰DjJ0x2J•B+‰DTˆ•†1J0x2+1T+‰DTˆ•†1J0x2J•B+‰DTˆuDEcmT0MjH+‰D+œ˜29cKIcG‰ZnOjG+•†1J0x2J•B+‰DFq‰DjJ0x2J•B+‰DTˆHjlz9jI09D+‰DTˆ•†1J0x2J•B+‰DTˆuDEcmT0MjH+‰ˆ•ˆMgOœux2J•B+‰DTˆ•†—…ME2J•B+‰ŽZ+•DjJ0x2J•Bu+u†‘+•†1J0x2J•B4+‰gjAOJ€cHTXxcwPIsEl+Sj†Ilcuxcx€IFE†n0Nen‰jAuBmI0clDS4eˆcc4J0g+‰DTˆ•†1œuxK+M2=nuH˜xM†1‰mT†0M2X+‰glDS4eˆcc4Auc„x+Elˆ0€3GN8K•ˆGnglKBeœ‰K4AsX„INqD0…€ˆljH3u‰OœElDS4eˆcc4AsX„IN+œuBn+SXHD†GD‰4j+mcZnA‰HnBcDAcAœ•DjJ0x2J•B+u†FJ0DEcmT0MjH+‰x˜z0DEKmc1I‰B+‰DTˆ•EjœOˆ1I‰B+‰DFxuKl+DNc•H0SP0xcG‰T…mKn•x˜ISMsKSPI0MH‘+N+D0D9cA†3…ˆGnDmw˜cOœux2J•B+‰DTˆ•†—AmDN0B28n‰DTœu…G‰†KG†GnmDœ˜DjˆuE+˜4O0†D€w˜cOœux2J•B+‰DTˆ•†1J0x2J•280cNqœM†1ˆ9j†0MHfAux‘ˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+N+D0D9c0xJ‰•Bf+‰…4zjrw•E2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†9+†Ic•ˆsAOx‘ˆ•†1J0x2J•B+‰DTˆ•†1JSjˆ0MPX+‰D…˜B9œ9†IJu…uJu†Tˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B€ˆMNXxHjAJA†2JuDABKDœgOœux2J•B+‰DTˆ•†1J0x2J•B+‰DTˆH†f+S4ˆcO…OJu†Tˆ•†1J0x2J•B+‰DTˆ•†9ASNm…†c+m2˜wu21nGˆ1I‰B+‰DTˆ•†1J0x2J•B+‰x+œBjEKmB+BMuJu†Tˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B€ˆMNXxHjAJA†2JuDfAOx‘ˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B00P3œB†lwGx1I‰B+‰DTˆ•†1J0xS‰0g+‰DTˆ•†1J0x2JH—Zˆ‰NKˆHTAJ0EKuNZnOZ3H†l‰S†n…•P‘0†x„w•E1ˆ9x‰•2GncNq…M†—JSNˆ…K=0m20zjPD˜E+˜4O0†D€D•DjJ0x2J•B+‰DTˆuDEcmT0MjH+‰x˜z0DEKmcn…mB=n•D=œ0KlD0jKu4unS†Tœ•j—0lT†xug+‰DTˆ•†1J0x2J•B+‰DFzcjn‰mBmœAKnGD0I0…G‰†JH—sAMDTDME‰w•E2J•B+‰DTˆ•†1Jm†…J•B€ˆMN=…ME‰w•E2J•B+‰ŽZ+•DjJ0x2J•Bu+u†‘+•†1J0x2J•B4+‰gjAOJ€cHTXxcwPIsEl+Sj†n‰j€3Hw„ˆ•g†n0NeA•Bˆ0Bmˆ•gEI9KHcONxcwuœMg†clBeˆ0B=AHxDI˜cl‰0jKœux2J•B+‰D‘ˆHB—+S4+BˆPnS†FzSK—+Tœ0DDZ€cAcIx0‰H0l†˜Dcj1AmwOz‰•Hn0B1DlŸunGcs+uŽHw9†3D0gE3GcˆIlwH0l†˜Dcj1AmcˆIc=uAFEcDcjHˆAcZ3uZHn+XODc†jxG‰Hw‰‰HœuHTDlTP+mcN…†ŽHD†ED‰4jz‰DjJ0x2J•B+u†‘xDjJ0x2J•2OˆBx3wuBlA0xIœ†ˆH0AD+w˜—sD˜xmK•ˆ8nA2˜œ†jAˆOT1I‰B+‰DFD•DjJ0x2J•B+‰DTˆ•j—Amcmz‰MP+‰Nq…˜Df‰ˆKGG0†N2œuD9I9xn…HˆH0cw4œME1ˆ9j3z0EZAOx‘ˆ•†1J0x2J•B+‰xXœ‰†1I9j+MjOnmDDœ•j—Amcmzlx+mDw˜2E‰ˆ…•Hf+HJZqcT‰JlT†xug+‰DTˆ•†1J0x2J•B+‰DTIuK—I1T2K1T+N+œuBnAlKJœ‰ˆ€00ZPzSB9cDJuxf0N0x˜D—Amcmz‰—GncwHIu—GnuxSJ•2EncwHIu…G‰†2J•j•‰AD0z0DEccKcju0AD0z†jnOTexug+‰DTˆ•†1J0x2+1T+‰DTˆ•†1J0x2J•2XnNqœ˜cOœux2J•B+‰DTˆ•†1J0x2J•B€ˆMN=…M†M…˜x3+B2‘ncNDxBTEKSEˆœ1†rn‰x0wu21ˆuPI+Bˆ•n•NqD0DPJmDNcGc€nmDmˆuˆ1JSPmœcˆO+‰D3xBMGc†mœcˆHˆMcIx†Gcj2I0DZAOx‘ˆ•†1J0x2J•B+‰ŽZ+•†1J0x2J•B+‰DFxuDEcSPn…mB=ˆMxqœ•E1nOˆn+M•‘+•ˆ„cMErq9TnJGNu+†Oˆ•j—‰mKKDO0BDOˆ•j9…0NK•P‘0†NDwMgOœux2J•B+‰DTˆ•†9œ˜H2JuN8nmD0x0K1ˆuEc•nZ0A2=œ˜DPIsED‰uZOJu†Tˆ•†1J0x2J•B+‰DTˆ•†—+S4+BˆPnS†TIu2lKmTˆ…SNXnGBGzBN‰w•E2J•B+‰DTˆ•†1Jm†1I‰B+‰DTˆ•†1J0xmœcnZˆBN3x‰†9œ9KmKONu0xcœ•†Xz9†nKGKjAMDTIuK—I1Tc9D+‰DTˆ•†—…ME1I‰B+‰DTxEjœ•E2J•B+‰DTw‰†eI‰g•3HxJœ9clq0X€c•j8ˆ0B3IsElq˜xeˆ0B=A•gTˆucNnuxeœ0N•xcx„ˆOclDS4eˆcc4AucNIMc˜ISK9œ12N0B—HDcj1Am‰uˆlx1I‰B+‰DTˆ•EjJBmœcnZˆBN3x‰†—AmTmœ04H0†MœOnHc˜4EDAxXI†nœ˜E2…Oˆu+ljXw˜g…œ0PZzSHGw‰NEœ†fœ0†Du4jAMKXI†nœ˜E2…u4j+SP‘xmc‰œ˜•HDuHfD†NXwmxuœ˜†…K˜PEœHKEIc†Mœ0P2œS4s0SˆfwEIOc…+‰E2J•B+‰DTw‰EjqME2J•B+‰NF…c†Ez9Tˆz‰2EˆBwHISK9œ9ˆI‰2=0AD+w˜KEœ1T†‰uxZJu†Tˆ•†1Jmx1I‰B+‰DTˆ•†1J0x3+M„HnO†Tq‰†—AmTmœ†2unwP…Hjn+0gmKuNO01D0xc†l…04JuKr+†€wMgOœux2J•B+‰DTˆ•†9œ˜H2JuNrˆMN3xu—GA0g3+M„HnO†Oˆ•=Gˆ9Tœc2uˆ1DDœE‰…1†JcMBZˆlx‘ˆ•†1J0x2J•B+‰DTˆ•†1J0E+˜ŽZ+‰JZˆ•j—‰SgN0MH•‰˜H˜IH†XqljNKHˆGnDœ†j—cKm+M„HnO†F…uBlD0E…uDˆDFœ0BlD0Em…H2P+‰D3xBMGc†mœcˆHˆMcIx†Gcj2I0DZAOx‘ˆ•†1J0x2J•B+‰ŽZ+•†1J0x2J•B+‰DFœ˜2—AS4†xug+‰DTˆ•†1J0x2J•B+‰DTIuK—I1T2K1T+N+œuBnAlKJœ‰ˆ€00ZPzSB9cDJuxf0N0x˜D—Amcmz‰—GncwHIu—GnuxSJ•2fnuH0x•†1+KK…HˆPnuH0x0KB0ˆˆ…Hˆr+0†mwMgOœux2J•B+‰DTˆ•†—…ME2J•B+‰DTˆ•†1Jxmœcˆf01—4I˜K9ASgJuDu0M…„œHN˜Al2Jz04mˆ†…„œ41J0E+˜ŽZcOjFˆM41J0Ec•nZ0A2=œ˜DPIGx1I‰B+‰DTˆ•†1J0xNcH†+•xqxSKlDATJH2•0cN+ISB9cjc1K„+HNG+•†1J0x2J•B+‰DTˆ•†1J0xmœcnZˆBN3x‰†1‰Kˆ0B28n‰x0z†xrKSKexug+‰DTˆ•†1J0x2+1T+‰DTˆ•†1J0x2J•2P0†N+…0DED˜xNcGBOnwPIHjAˆu†n+MjmnS†2w•†1‰mT†+BBZAOx‘ˆ•†1J0xS‰0g+‰DTˆ•†1q9Bˆug+‰DTˆ•†1œuwHwS†˜D†jEIGcwc‰HDcD‘DlTlxGc‘…‰HA˜†eDAxPc1cN…††1I‰B+‰DTˆ•EjK˜HX00jEœTrœS•OIS4u0†T€x0iOœ˜PISgswmxfxSMOw˜Ž•zSPEœHKXxlT‰œS4ISEuDNEˆuM‘œS4ˆzTfn‰4fˆO2fœ˜ŽOxSEHœu28ˆ•†rœlc209TEncKfxjJœ92IISj+ADXIugrISx2zSHH+cNZœ0B‰œ04K˜H8nAx8ˆ•Z+•†1J0x2J•B4+‰cFxH†n+SN‰•B€n•x˜ISMsKSPI‰•2rˆMN3w˜2EnuwHnBcDAcAœGcˆz‰nH0DqJu†Tˆ•†1J0xI‰2TnuH0…˜Kn+c2K•junm2„œB†lD˜wHœu†KDc†4ˆmˆ…3H‰H0c†ˆMN3…cj†3GN8AHx€wucj…9T†I+gXAHxœSHII˜2—AS41I‰B+‰DTˆ•EjœOˆ1I‰B+‰DFxuKl+DNc•H0SP0xcG‰T…mK0A2„œB†n+0g3+M2=0A2•IB=sclT1I‰B+‰DFD•DjJ0x2J•B+‰DTˆ•j—‰mKJ•MP+‰D+…˜B9œ9j…c1c=0x3ˆS…sI˜4KOx‘+mDFxM†9ADIc•ˆP+‰Dmx‰j—JSNˆ…K=0m2cwMgOœux2J•B+‰DTˆ•†—+S4+BˆPnS†F…˜DEœ9K+M„ZnuP+xS29qADI0M†‘+N+D˜K˜wOxn‰uEZ‰BJZœS…GcSjˆ…†ˆrnO†mD•DjJ0x2J•—PJux‘ˆ•†1J0x…z0g4Ju†Tˆ•†1J0xI‰KXI•X‘œ˜†4IS4HwBKfœMExmˆ…J•JuABwG+‰c˜ISK9œ12N0B—HJu†Tˆ•†1J0xI‰KEœB†8œ0PZzSPEDujXx†jJIOc‘Du4f+uj‘w—OœˆNDOT=D9jfœ0g‰œ9cZc˜PX+uj€xmˆ—œ0xNuPX0ljZœSB…œSxsœS4=DOˆ€x0gISx2zSHH+cNZœ0B‰œˆ3‰˜4s0Sj8ˆ•Gœ˜E‘zSj+ljEx‰†nw˜HNc˜HXnKEISMOISx2…ME2J•B+‰DTw‰†BJxˆ0Mj=n†DTIuD9KSjN…ˆf0†nPIBG‰Tœ0ZZˆcDFzSK—+Tœ0DD024cA‰H‰uiH0l†˜Dcj1AZZKSjKuZsncN+DAwOz‰•HA1ˆ…D0BNJGwOz0B3…Pun†…H…BjlD0jIcG‰ZA˜•4xM4PDABN‰GcD0cN0xcsI˜4mœBˆ3+EjI9Beˆ0EHx0†OˆsEj…lJ€csEsxc…‘œucAD9‰€ˆcˆ8AuHœOceJ0xœux2J•B+‰D‘ˆHB—JSNmœ‰ˆ•+‰D+IH†n‰SN2+M„ZnuHXxcjPK˜Eu+•KfxAcfœSH‘c˜HXnKEISMOw˜4Du4A9jux†rIOˆ‘xS4Zœ•4uxjsI0x3ˆu†m…nH+0†TI0B9cDKGNjD˜g10mˆKuiHD†…uDcj1xmcˆw0iHnBcDAcAœG‰Hw‰‰H0DDDlT†…mc…z0wu0‰DAD‰4jJAcN3G‰u0†DHDc†1q1cZcOwHœG2HDZ€+1cˆDmx1I‰B+‰DTˆ•EjJBmœcnZˆBN3x‰†9+ˆ…NX0cw•ˆGc‘IcMH0lBSDZ€cAcIx0c+M=40S‰€q˜jecuEGˆ0Zw˜cju4ecu2fœcj=nNqœMDjJ0x2J•B+u†FJ0K9I9†…uKr+‰c0DBscxKu4unS†Mw˜43œSgsDgEIlTuœ˜ŽOwS4u+‰4Xx‰48IOnu+˜HnAN+‰DTˆ•†1JlBIAN+‰DTˆ•†—JmBˆœlNZ0l†Fœ0KlD0jKu4unS†FzSK9K†K‰ˆOn•DIuD9KSjN…ˆf0†nPIBG‰Tœ0ZZˆcDOˆ•j9‰SNK•‰P+†mwMDjJ0x2J•—OJu†Tˆ•†1J0x2J•B+x+I˜K9K0xJ‰•B€0x˜…B†‰…1†3z0…‘+†mDjPJlK…cHˆr+‰Dmx‰j9‰SNK•‰OJu†Tˆ•†1J0x2J•B+N+D˜K1JA†2JH—Zn‰xXz4‰D0NIK•jSnG2=œ˜29xug3z‰2=n†DFzSK9K†J•B•nS†Tœ4j‰xˆc•Ps0cxœBŽsKSjKuZsncN+D‰4j‰SEˆ0B2=+HKG+•†1J0x2J•B+‰DFwBjjJ0gˆ…m4nSPKœ•j—‰mKJuX€AcDXD•DjJ0x2J•B+‰DTˆ•†1J0x2Ku4E+•Nq…˜DfJˆmz0x€ˆMN=…BxrKSK…J•Bf‰†N3z0—G+0P‰•MP‰BJZx•Enw•E2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†—‰SgmœAG+‰wHœ˜KPJˆ†K•PXn•N+w˜—sD˜gNcGBOnwPIHjAˆu†ez‰BjAMDTIuK—I1T‰uXOJu†Tˆ•†1J0x2J•B+‰DTˆ•†—…ME2J•B+‰DTˆ•†1Jm†1I‰B+‰DTˆ•†1J0xNcH†‘nGD+z0D9qljJH—Zˆ‰N+nH˜…9D2JuK‰ˆMx˜z0K9œ9cIzSgf+HDTqcT‰…9x09D+‰DTˆ•†1J0x2J•B+‰DTˆuDEcmT0MjH+‰N+z0KlcAx1I‰B+‰DTˆ•†1J0xS‰0g+‰DTˆ•†1J0x2+MjXˆMN0z02jJSHˆcONr0†KG+•†1J0x2+1TJu†Tˆ•†1JlˆI0g+‰DTˆ•†1JlB2AHw„xlcl+lKHc•2fAuB•œOclDS4eˆcc4J0g+‰DTˆ•†1œuxK+M2=nuH˜xM†1‰xˆc•Ps0cxœM†—AmTmœ04H0†Mœ9cZc˜PX+ujXI†nœ˜E2…ME2J•B+‰DTw‰†BJ†I0B—4nu••ˆH†EqlˆKHˆ=nS†Mœ0†3K˜4jwFg‘xmc‰œ˜•HDATmœ†ˆXDGxPAAcN‰OŽuABDXD0g4nmcˆˆAnHn†1D02jD1c…3uŽHœ•xuJu†Tˆ•†1J0xI‰2TˆMx=z0—Gˆ9j2Kcn•0A20xuK9œ9ˆI‰KZœMjfœO—uuHjw9ˆXI1xsœ9ˆ2A˜4HA˜j€xmˆ—œ0xNqME2J•B+‰DTw‰EjqME2J•B+‰NF…c†Ez9Tˆz‰2EˆBwHISK9œ9ˆI‰2rˆMwPxHBnJxJH2O0cxqw††lˆ˜4‰0g+‰DTˆucOœux2J•B+‰DTˆ•†1‰mT†+BB‰BDTIuK9I9TmzAŸ€0cx+IcŽGASgIcONG+•DmˆH†l…˜xIœA†P0A2cx˜…G‰ˆmJ•BfA˜†+xH†lA2ˆcuKX+HKG+•†1J0x2J•B+‰DFwBjjJ0gIcGBOˆMN€œ•j—‰mKJuEZˆlx‘ˆ•†1J0x2J•B+‰DTˆ•†1J†I0B—4nu••ˆuK—+mBIc9D+‰DTˆ•†1J0x2J•—PJu†Tˆ•†1J0x2J•BˆMx=z0—GnuxœcnG+‰c0DBscxKu4unS†=w˜2nJD…†2X+•D2D•†1+lD2JH—Zˆ‰NKwME‰w•E2J•B+‰ŽZ+•DjJ0x2J•Bu+u†‘+•†1J0x2J•B4+‰gjxuw€IAB•z‰2‰0†N3…SBlAS41I‰B+‰DTˆ•EjJBmK•ˆP0cwZˆ•j—JSNˆ…K=0m20ˆS…sc†œ0480†DFzSK—+Tœ0DD024cA‰H‰uiH0l†˜Dcj1AZ€n0ˆ€Au‰OIMgADOKHn0D8ˆcxœu‰€q˜je‰sEj3HxEˆO‰€q˜Hjˆ˜j…mTHˆMx0xcsccJGc•n†…„x0D9z1BI…S4HA˜H˜I†sqABœ†2rˆcwHI4E…lˆIKHˆGA˜E˜I†sqABœ†2FˆBN+œHjlDATNc•P=ˆMwPzc‰sc†œ0480†DSœugNISPZA92‘w•†JœOKˆS4uwAx€xmˆ—œSH‘c˜HfD‰BcA20z0KEœ˜jIˆ+X„Igl‰9THcuEXxc…•ˆ•gAD9BHc•ˆHAHx†I+E†n0Neˆcc4AH…€I+EN0l—€cuHx0B†œgjxlˆHcuE=3H…•IlclAu„€n0DsAHwuœMgjxT†nc†ux0c€xlcj0SHHn‰4f3uBDI0cEcl2H‰G†=x0BˆwENz0g†n0Djˆ0Bˆxc†IOcH3GN8AHxJwEADOT†‰GN‘AuB•wMglJlˆ9Aˆ‰Gc=nSH+z0—sœ˜E…œ„HnGD+œ˜2ncT…zAc‰ˆcNq…Bjl…cˆAcPXnuPIwBsc‰E2J•B+‰DTw‰†BJxˆ0Mj=n†DTIH†lAmTNcG†H+‰Nq…˜DEœ9cIz‰KEœmcMœ0X•…uEu0jXI•GœŸOK9ˆu+ljXw•4—œ0HuEun‰KXœE=JS2E‰†…S4€n†x˜x0Bl0S4m…HKZI1Krœ92ZwSEH00Pfœ0gK+•†1J0x2J•B4+‰cFzcjn‰mBmœAK00•PxS29cSNI‰KEI‰jMœ˜†ZuguDcKXœA‰H…˜DfcSZODO†DD0BAz1ˆ…‰uZuAFEcDcjHˆcjEKDm…†c+‰DTˆ•†1JlB2K‰—Zn‰N3xSJGA0x+0˜N80†NF…˜Blqlc2AuHcœ0cjx—€n‰EE3Hx—xlclq˜xHcGKHAH…‘œucNJ2Oœux2J•B+‰D‘w‰4Oœux2J•Bn•N0I029œ˜j2KH=4nSHq…˜Blqlc2+M„Z0cN3…B‰sc†œ0480†DIuD9KSjN…ˆf0†nPz†jn+m2Nc•PX‰BDmœ41J0Eˆc•„ZncwPxcTAnuP‰0g+‰DTˆucOœux2J•B+‰DTˆ•†1‰xˆc•Ps0cxœBŽGAS4mœ†jZ0A2cˆHTAJ0EmK•ˆ8nA2˜œ†j0qljI0M=sncxqœBT‰…˜P3zmNf+j‘œ†1…lc2JuDH+NFIBsx˜NI…†ˆSnG20z0KEœ˜jIc9D+‰DTˆ•†1J0x2J•B€0cxq…˜Blqlc2K1T+x˜ISK9œ9ˆImŸP+†m•jPnGˆ3z‰B•0cDTœ4j‰SNˆ…H2Znm—•D•DjJ0x2J•B+‰DTˆ•j—‰mKJ•MP+‰D+…˜B9œ9j…c1c=0x3ˆS…sI˜4KOx‘+†FI˜2AJjK•ˆPˆMNqœ˜Df0Tˆ…†c+•IuD9KSjN…ˆf0†nPz†jn+m2Nc•PXA˜†+IBG‰T…mKZAOx‘ˆ•†1J0x2J•B+‰xXœ‰†1I˜j…HˆHˆMDIuK—I1Tc1K„+HNG+•†1J0x2J•B+‰DTˆ•†1J0xNcH†‘nGD+z0D9qljJH—Zˆ‰N+nH0…9D2JuK˜nuP3xSDjnOT2K1ŸP‰BKTw˜cOœux2J•B+‰DTˆ•†1J0x2J•B+‰DTˆuK9I9†…uDnSH0…•†BcmKˆ…†ˆOˆMxXxS2jI9T0M2Gnm2+œME1+Ax2J•†G+‰D+…˜c—‰lTc9D+‰DTˆ•†1J0x2J•B+‰DTˆuˆKœux2J•B+‰DTˆ•†—…ME2J•B+‰DTˆ•†1JTII0NrˆMN3xu—GA0g3+B—•ˆMˆGxHNAxux3…‰„Z0cN3…˜BlD0P2+MPXnuPIwBscAˆ2K04HˆMx0x0K1nOT2K1ŸP‰BKTw˜cOœux2J•B+‰DTˆ•†1J0x2J•2P0†N+…0DED˜x+M=40†KG+•†1J0x2J•B+‰DFq‰DjJ0x2J•B+‰DTˆuDEcmT0MjH+‰xII˜2—AS4exug+‰DTˆuˆKœ•E2J•B+‰…„w‰Eœux2J•B+‰D‘ˆGcˆKu…HwA2j+‰ˆqœ˜Df0Tˆ…†c+‰DTˆ•†1JlB2K‰2O0cN3I˜2AJ0EmK•ˆ8nA2˜œ†j0qljI0M=sncxqœM†—AmTmœ04H0†Mœ9cZc˜PX+ujXI†nœ˜E2…9nHwFEKDAxHKAc…xA—Hw9†qDc†4IMDjJ0x2J•B+u†FJ0D9K†ˆcGT+x˜ISK9œ9ˆI‰2rˆMN3w˜2EnuwHwFEKDlTeAmc……S…H0DqDAˆ†xGwOz‰•HnD„DlTjxmc……SwH0†‘‰cwHIuDEqlTIKGB=nSHXœcjnAmŸu00cDD0MunAc…œ‰=HDlBBJu†Tˆ•†1J0xI‰2TnuH0…˜Kn+c2K•junm2„œB†lD˜wHœu†KDc†4ˆmˆ…3H‰H0c†ˆMN3…cj†3GN8AHx€wucj…9T†I+gXAHxœSHII˜2—AS41I‰B+‰DTˆ•EjJBKuNPnmDz†BcmKˆ…†ˆOˆMxXxS2jK9TX+SP‘wmn‘œ0†ZxS4=DO2Xx†…œ9c…ISEuDNEˆuM„+•†1J0x2J•B4+u„+•†1J0x2+M—400H„wB†PJSHcGc8ˆMxXxS2jJjKG†OcA20z0KEœ˜jI‰ux€n•x˜ISMsKSPIcm†r0†N3…SBlAS4J‰uDfAMDTIH†lAmTNcG†H‰BDmœEKœux2J•Bˆlx‘ˆ•†1J0x2J•B+‰D+xH†lA2ˆcuKX01Dqœ˜Df0Tˆ…†c‰BDTIuD9KSjN…ˆf0†nPz†jn+m2Nc•PX‰BJZœjrq˜P3zSgf+‰…4x‰†1nOc3+M2=0A2•IB=scSˆm…†ˆPˆ˜HXI†j‰w•E2J•B+‰DTˆ•†1J0Eˆc•„ZncwPx‰†M…˜x3K•ˆ8ˆMxXxS28…1†3z0…‘+†mDjPJlKˆ‰•BfA˜†+IBG‰T…mJOJu†Tˆ•†1J0x2J•B+N+D˜K1JA†2JH—Zn‰xXz4‰D0NIK•jSnG2=œ˜29xug3z‰2=n†DFzSK9qlxm…†ˆPˆ˜HXI†jAJ0P…Ic2O0cxqw††lˆ˜4n…•PXnuPIwBsclc3K•ˆ8ˆMxXxS2jIGx1I‰B+‰DTˆ•†1J0xNcH†+•xqxSKlDATJH—Zˆ‰NKwBT8KlT†xug+‰DTˆ•†1J0x2J•B+‰DFwBjjI9j+MjOnmDDœ•j—‰mKKD„0BDOˆ•=Zc†mœA†P+†€ˆHT‰…1†DJuZOJu†Tˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•—Zn‰N3xSKPJcI0˜D‰†N=I†jnJmTNcG†H+•xXx˜D9z9ˆIKHc‘+0jGˆ•†jxux3+B—•ˆMD€wMgOœux2J•B+‰DTˆ•†1J0x2J•—PJu†Tˆ•†1J0x2J•Bˆ†B‘ˆ•†1J0x2J•B+‰xXœ‰E—AmTmœ2unO†IuK—I1Tlz2AMDTœ†‰G‰ˆm+M2ZnSHmˆu…sc†œ0480†K‘ˆHDlDATIcG‰Z+†€ˆHT‰…1†DJuZOJu†Tˆ•†1J0x2J•B+‰DTˆ•†—+S4+BˆPnS†F…˜DfcS4exug+‰DTˆ•†1J0x2+1T+‰DTˆ•†1J0x2J•2P0†N+…0DED˜xIœ‰ˆGnG2cD•DjJ0x2J•—PJux‘ˆ•†1J0x…z0g4Ju†Tˆ•†1J0xI‰KXwMGœ˜†…nSgswmxXwM†Sw˜Ž•zSPEœHKEœ˜gSIO‰OnS4jAMKfœM4nœuN3K‰E2J•B+‰DTw‰†BJxˆ0Mj=n†DTIuDEcK…H2X012Iw˜29c0xm…H2PncwHœ†eIlcuxcx€IFE†n0Nencx=3H…Ox9cj…O—€csE=J0g+‰DTˆ•†1œuxK+M2=nuH˜xM†1‰D…P=nnPIuBn+0xm…H2PncwHœ†eˆcc•ˆ0†BIucAD˜†Hˆ0B=Aucwclq04†3GN8AHxJˆOcNcDecHTs3H…Ow˜c†nux†ˆcˆZˆ+X„IgEDuHeIlcZAHx€IScl+lKHc•†GAHwPIsEl+Sj†ˆ02sxcwPœ˜‰€q˜jecuHx0B†œglnOB—ˆ9Tœc2uˆ1DJw˜Ž•zSEu+•KXˆ•4rœ˜†3œSEH+AD‘ˆGwGœ0HuP‘DMNfœAc8œSH‘c˜H‘A˜PfœAnOœ9ˆI09ˆu+0jEIM‘œ0x3…uHE+sg‘I1xJœ9D3+˜gZœ•N€x‰†MIOcwSHXœuˆ€xAxœ9T…œˆu+0Pux†rœ˜EnS4j+SP€xjsœ0†409TX+SE+‰DTˆ•†1JlB2K‰2P0†N+…0DED˜xm…H2PncwHœ†en‰†€AHxœEju4ecu2fxcx•œ‰glJOBecuD4Auccx˜cjK0E†œ‰N8AucNIMgNcuŽ€‰Gx•x0GwEl3uNe3GN8AHx€wucj…9T†n‰EE3Hx—xlclq˜xHcGKHAH…‘œucNJ2Oœux2J•B+‰D‘ˆHB—‰SgmœAGnO†FKSc9AS4m+B2Znm—•ˆGˆI‰H=u+sEuD0g4nmcˆˆAnHn†1D02jD1c…3uŽHœ•xuJu†Tˆ•†1J0xI0guJu†Tˆ•†1Jxc•jGncxDˆHjfccˆ…H2Znm—•ˆuD—cDKcjZnxcœ•j—+S4cGZ0†nPœ0Blz˜4…J•B€nwPI††lz˜ˆIKu4P‰BDmœEKœux2J•Bˆlx‘ˆ•†1J0x2J•B+‰D+IS2l‰0xJ‰•Bf0cx+I‰†1…lj2JuDH+N+œuBnAlKJœ1†€0†NIwBsclc3z‰2OˆBx„w•†1nOc3+MjXn†wP…Bj0q0HNcONXA˜†mˆ•jPD˜EKG†80cx„ˆ†j9œ9†exug+‰DTˆ•†1J0x2KHn•0†xDœ•j9AKIJOx+wP…0K—JmBJOx+N3œ˜K—c†œ1s0cN2wMgOœux2J•B+‰DTˆ•†9œ˜H2Jux€nuH0…˜Kn+cn…Hj=nu†BqcT‰JlT†xug+‰DTˆ•†1J0x2J•B+‰DFwBjjJ0gIcGBOˆMN€œ•j9qAB+M—4ˆMD€w˜cOœux2J•B+‰DTˆ•†1J0x2J•B+‰DTˆuK9I9†…uDnSH0…•†BcmKˆ…†ˆOˆMxXxS2jˆu„u+sXGDlBeJAcZ3uZHw˜†uDcj1œAcND=u+•g˜0cx+IAcI+••Hnm2‰Dc†EAmˆ…3HMu+•xDc‰c=‰A‰Hw‰‰HDcD‘D0gj…GcZIlnH0DEDc†l…GcZz‰=HœuHfDE9AcjnI˜4ˆ3Hx+xScADOTeˆ0B=AuBˆsEE0SEe3GNfz0DZAOx‘ˆ•†1J0x2J•B+‰DTˆ•†1Jm†1I‰B+‰DTˆ•†1J0x2J•B+‰x0wu…scmx1I‰B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1JmTN+Mjuˆ9†Fxcjnnux+0˜N80†NF…˜BlqlcKu4•n•x„x†j9c0g2ID+0†Oˆ•j9qAB+M—4ˆMD€wMgOœux2J•B+‰DTˆ•†1J0x2J•—PJu†Tˆ•†1J0x2J•Bˆ†B‘x4PJ0x2J•B+‰DTˆuBl00gm…H2Pn•wPzE1‰ˆ0B2OˆBN+nH˜…9D2JuKEncx„œM†—JmBKONX0DOˆ•H1JjN…S4On•x0I•4jnOT2K1KO+HNG+•†1J0x2J•B+‰DFwBjjJ0g3KONu0A2˜wHŽs‰TmImŸP+†mw˜cOœux2J•B+‰DTˆ•†1J0x2J•B€nwPI††lz˜ˆIKu4P+‰JZˆHŽ4q‰cAcjS09jG+•†1J0x2J•B+‰DFq‰DjJ0x2J•B+‰DTˆ•j9z9ˆˆ…ˆG012+w˜DjJA†2Ku4H012˜z0DEKmc+M„400Pq…˜DjˆuEKG†80cx„ˆ†j9œ9†…J•B•AcD€wHxPnOˆ3zlxf0MˆOœ†NAIuxJz‰B€nwPI††lz˜ˆIKu4P+‰K‘ˆ•j9z9ˆˆ…ˆG012+w˜DjD‰cAcj˜‰AB+‰BcXœ˜ˆc…BˆK‰cˆ3J†ˆBqcDexug+‰DTˆ•†1J0x2JH2Gnm2qI˜2˜q0HNcONX+‰JZˆ•j9z9ˆˆ…ˆG012+w˜DjJlc2K•j=nG20xc†l…04JH2P0†w4xSK9cSˆIœ04G0†D€D•DjJ0x2J•B+‰DTˆuDEcmT0MjH+‰D+wu—sASNKm†Encx„œMgOœOˆ…z‰B+‰DTˆ•†1J0xS‰0guA9†Tˆ•†1J0x2J•BˆMx=z0—GnuxœcnG+‰c0DBscxKu4unS†=w˜2nJD…†2X+•D2D•†1+lD2JH2uˆBN+xuKn‰lTc9D+‰DTˆ•†—…ME1I‰B+‰DTxEjœ•E2J•B+‰DTw‰†ecuE8ˆcx2x9c†clK†I‰c€ˆ0H—Ig†n0Nencx=3H…Ox9cl+lDeIlcuxcx€I9x‘ˆ•†1J0x2Jug‰‰NFI˜DEKK2JH2Gnm2qI˜2˜q0HNcONX+‰Nq…˜DEœ9cIz‰KfœM4nœuN3+˜EH+l2fœ0g‰œ04‘ˆSEHDu2‘x1n‘œ9ˆ‘‰‰E2J•B+‰DTw‰†BJxˆ0Mj=n†DTIuDEcK…H2X012+w˜DjJj+MjZnSHmˆGˆDXHncD—D†††AA‰Hw‰‰HDlcHD0—scDjJ0x2J•B+u†FJ0DEcmT0MjH+‰Nq…˜DEœ9cIz‰KEI‰jMœ˜†ZuguDcKXœA‰Oœ92IIS4w0jXœE8œS4…0˜g=+NZI1KrœSH‘c˜HXœuˆ€xAxœOJuu4uœHKux†rœ9T…+˜g•+HNEIlTuœ˜ŽOwS4u+‰4Xx‰48IOnu+˜HnAN+‰DTˆ•†1JlB2K‰—Zn‰N3xSJGA0x+0˜N80†NF…˜Blqlc2AuHcœ0cjx—€n‰EE3Hx—xlclq˜xHcGKHAH…‘œucNJ2Oœux2J•B+‰D‘w‰4Oœux2J•Bn•N0I029œ˜j2KH=4nSHq…˜Blqlc2+M—4nG2=KuBlz˜4JH2Gnm2qI˜2˜q0HNcONXAMDTIuDEcK…H2X012+w˜DjI•E2J•B+‰NG+•†1J0x2J•B+‰DTIHs…0E2K1T+m2˜IH†jJlKmz‰BfA˜†+…˜B9œ9j…c1cS0x0…SBlAS4…I0Dn•N0zSB1J0P…Ic2Gnm2qI˜2˜q0HNcONXA˜†mˆ•jPD˜Emœcˆ•nmD+œBŽs‰TmID+‰DTˆ•†1J0x2J•2Xˆ‰x0IE1‰SjcHBG+‰D+xSKn‰x0BBG+‰D+zcjn‰mBmœAcSˆ˜H˜z‰E‰w•E2J•B+‰DTˆ•†1JTII‰B‘+N3œ˜K—c†œ1s0cN2IBT‰…9x09D+‰DTˆ•†1J0x2J•B+‰DTˆuBl00xKHˆ•n•N+D‰E1‰ˆ0B2OˆBNKwMEnw•E2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†—‰SgmœAG+‰wHœ˜KPJˆ†K•PXn•N+w˜—sD˜g33u†uxFENISxen0ˆZˆ0BmwglnODencx=3H…Ox9cN0l—€cHBZxcx•œ‰glnOBe3GN8AuB2œ9cjJ0N†Ilcuxcx€IFEE+˜jeˆ0B=Aucwclq04†nc†s3HxKw9clx˜HecuD4AH…Ow˜cl‰˜†Hnc†s3HxKw9cNA9T†n0Djˆ0†HxEE092Hn0K3uHII•DmwMgOœux2J•B+‰DTˆ•†1J0x2J•—PJu†Tˆ•†1J0x2J•B+‰DTˆ•†9cDm…†nOJu†Tˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•—Zn‰N3xSKPJcI0˜D‰†N=I†jnJmTNcG†H+•xXx˜D9z9ˆIKHc‘+0jGˆ•†jxux3KG4ˆMNF…0K1IOTexug+‰DTˆ•†1J0x2J•B+‰DFq‰DjJ0x2J•B+‰DTˆuˆKœux2J•B+‰DTˆ•†9œ˜H+M„ZnuPFxSDPˆuE…HnZn•N0…BxrJSK…J•Bf0SHXwHjAJx0MP‘0†xKw•†MJ0xm…KZn•NFœBj1D˜P‰•M€A‰DXD•DjJ0x2J•B+‰DTˆ•†1J0x2JH2P0†w4xSK9cSˆIKu4P+‰JZˆu…GcS†m…H2P+•D+zcjl…lˆKHˆS0xXz‰41JlKD‰uXP‰BDmxjPJ+g2JH2P0†w4xSK9cSˆIKu4P+‰K‘ˆ•j—+S4cGZ0†nPIuBn+lc3zANfAOx‘ˆ•†1J0x2J•B+‰DTˆ•†1J0Emœcˆ•nmD+œBŽs0TKHc‰BDTIuDEcK…H2X012+w˜DjJlc2K•j=nG20xc†l…04JH2Gnm2qI˜2˜q0HNcONX+HKG+•†1J0x2J•B+‰DTˆ•†1J0xmœcnZˆBN3x‰†1‰†IcGBuˆMx0ˆ†jEœ9DIc9D+‰DTˆ•†1J0x2J•—PJu†Tˆ•†1J0x2J•BˆMx=z0—GnuxœcnG+‰c0DBscxKu4unS†=w˜2nJD…†2X+•D2D•†1+lD2JH2uˆBN+xuKn‰lTc9D+‰DTˆ•†—…ME1I‰B+‰DTxEjœ•E2J•B+‰DTw‰†ec•†‘AuHIwMgjxlˆHcuE=3uH—Ig†n0Nencx=3H…Ox˜x‘ˆ•†1J0x2Jug‰‰NFI˜DEKK2JH2P0†w4xSK9cSˆIœ04G0†DFzSK—+Tœ0DDXu3GcN‰•ŽHDlBBDlTN+1c…xA—uA˜cuD0—uK‰DjJ0x2J•B+u†FJ0DEcmT0MjH+‰x3xS—sz˜4ˆcGKD0gj‰Acˆw0nuAFEcDcjHˆ0K—+mBIˆ+X„IglIOD†IATZˆ0Bœ+El+9cHcGNxcw•x‰gAug†n‰2sxug+‰DTˆ•†1œuxK+B2‘nu•P…uDPJˆ†K•PXn•N+w˜—sD˜wu0†DIDX€xmc‘w0—H00‰uD02PJGcIAJHAFE=D0g9xDjJ0x2J•B+u†‘xDjJ0x2J•2OˆBx3wuBlA0xIœ†ˆH0AD+w˜—sD˜xmœcˆ•nmDIœB2Eœ9DI‰ux€nuH0x˜—G‰S4n…†jZnxcwMDjJ0x2J•—OJu†Tˆ•†1J0x2J•B+N+œuBnAlKJœ‰ˆ€00ZPzSB9cDJuxf+‰N3xM†1nOc3+MjXn†wP…Bj0q0HNcONX+HKG+•†1J0x2J•B+‰DFzcjn‰mBmœAKˆMN3…cj‰w•E2J•B+‰ŽZ+•DjJ0x2J•Bu+u†‘+•†1J0x2J•B4+‰gjAOJ€cHTXx0†HxclIuŽ€cG†€3Hx3ISclz˜=€cGcXˆ0B3ˆ•gNnu††n‰gZ3H…Ox9cAug†n‰2sxug+‰DTˆ•†1œuxK+MjXˆMN0z02jJj+MjZnSHmˆGˆ…3H‰H0c†c•‰4AAcZn‰ŽHw‰x8Ju†Tˆ•†1J0xI‰2TˆMx=z0—Gˆ9j2Kcn•0A20xuK9œ9ˆI‰KZœMjfœO—uuHjw9ˆXI1xsœ9ˆ2A˜4HA˜j€xmˆ—œ0xNqME2J•B+‰DTw‰EjqME2J•B+‰NF…c†Ez9Tˆz‰2EˆBwHISK9œ9ˆI‰—4ncˆwBj9ˆ˜4+MH‘+HB‘ˆ•†1J0x†xug+‰DTˆ•†1J0x2JH2Encx„œ˜2EKKI‰•MP+‰Dœ0—G+SˆI…†nZ01D0wBŽs‰ˆˆ…Hˆ•0†wH…M4fI9KJu…OJu†Tˆ•†1J0x2J•B+NFI˜K9ˆuxJ‰•BfA1DqIHsK†IJGNfA˜†+œ0Blz˜4œ‰ˆ•0†KG+•†1J0x2J•B+‰DTIu…G‰SNmœ†2cncw4œM†M…˜xNcG‰Zˆ˜H˜w•E9…lTˆ…•juˆMxXxBjAI1Tmœ†ˆX+HD‘zMHMJlxc9D+‰DTˆ•†1J0x2J•2rnx0œ˜D1ˆONc9D+‰DTˆ•†1J0x2J•2€n†FD•DjJ0x2J•B+‰DTˆ•†1J0x2JH—Zˆ‰NKˆHTAJ0EKuNZnOZ3H†l‰S†n…•P‘0†x„w•E1ˆ1BNc•n4ˆMwPxB†n‰ˆmI‰2€ˆBw4x•†1nOc3+M2=ˆMxwMgOœux2J•B+‰DTˆ•†1J0x2J•2Z0S†IBjl…lx+˜E‘+N+D˜K1Iux3Ic†nGD+z0D9qljJH—Zˆ‰N+nH˜…9D2JuK0‰HDFœuBlc†ˆ…SN=nuP€ˆHj—cKmKHˆ€+‰N+xgjJ0P…Ic2O0cN+œ•EAJ0NJc1TO+HNG+•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰xXœ‰†1I9j+MjOnmDDœuBl…lxKG†€0†DI‰gPJ0†…J•B€ˆMN=…MEAxux3…m‰4nxOˆuDEqlˆJ•2Hnm2+œM†—+S4+BˆPnSH0I•†9+mc2K†ˆZcx0zSKBKmBKG†•0cN+w˜—sD‰Dmœ04€0m2cœEAJ0NJc1T0SH˜wu…sclT†xug+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰D+…˜c—‰0xJ‰•2E0cx„z†j‰w•E2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†—…ME2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†9cDm…†cˆlx‘ˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†—‰SgmœAG+‰wHœ˜KPJˆ†K•PXn•N+w˜—sD˜g3…HˆZ0cN0…˜—s…0NKG†P+‰x+…02nJ0xI0MjPnmD2D†1nux…I‰2Zn†NFwu—s‰S4J•O+‰D2w•†1‰mT†+BBZ+HKG+•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰ŽZ+•†1J0x2J•B+‰DTˆ•†1J0xS‰0g+‰DTˆ•†1J0x2J•B+‰DFwBjjJ0g3+B—•ˆMDTqcT‰…˜xIœ‰ˆGnG2cwM†—w•E2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1q9nHDm23D0—uKH†ˆ0P€xcx9IScNISxen0ˆZ‰0g+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x0MPG0†x0x•EMKlxDKMBOA‰KTwMgOœux2J•B+‰DTˆ•†1J0x2J•—PJu†Tˆ•†1J0x2J•B+‰DTˆ•†1‰Sj0MjP0†wH…Bˆ9œ9KI‰•MP+‰xXx0K—0SNJuN•ncxqz0—G‰TcHc‘ˆMN3…cjAIuxI‰B„A‰KTx•E‰w•E2J•B+‰DTˆ•†1Jm†1I‰B+‰DTˆ•†1J0x…SNZnxcœ•j—‰mKJ•MP‰BJZˆHjEKDm…†c+S†ˆˆ•E1‰Sj0MjP0†wH…Bˆ9œ9KI‰GT€nGD+I˜Df‰†cNcGBX‰MKˆx•HMJlx‰uXOJu†Tˆ•†1J0x2J•BnG2„œBjnJ0gDI0XOJu†Tˆ•†1J0x2J•BˆMN3D‰†—w•E2J•B+‰DTˆ•†1J0x2J•B+N+œuBnAlKJœ—4nx„KuBlz˜4JH2O0cN+œ•E‰w•E2J•B+‰DTˆ•†1Jm†1I‰B+‰DTˆ•†1J0xˆ…nZ0A2ˆ•EBcmKˆ…†ˆOˆMxXxS2jJ0EI0˜N80†NF…˜Blqlc09D+‰DTˆ•†1J0x2J•B+‰DTˆ•j9…ljIz‰MP+‰D+œ˜c9AS4m+B2Znm—•xBTEˆ˜4KABXnGDqIB=sc0gc9D+‰DTˆ•†1J0x2J•B+‰DTˆuBl00x+M„ZnuPFxSDPˆuE0MPfAMDTœ†j9q04mz‰2HnmDKˆHjnI9Tm…HBf+HJ•x•Enw•E2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†—‰SgmœAG+‰wHœ˜KPJˆ†K•PXn•N+w˜—sD˜g33u†exFEl‰˜4HIlcuxcx€IFElq0X€c•j8ˆcx„IElD04†n‰gZ3H…Ox9cAug†n‰2s3Hx€wucj…9T†3GN8AH…Pœ•gl‰9—€I‰Kuˆ0Hmˆ•gjœ0x†‰sgsx0Bcx0cjxlˆHcuE=3H…•w†…Pz†j9ASNmœcKfœAnOœ9ˆI0˜PEœHK‘wmxuœ˜NZœSHf0cTZœcjMxˆ2zTf+‰K‘w˜g˜z0—sqAŸHw12MD†jE‰AwOz‰•H0+E1D†1K1cZn‰ŽHDcDGxPn‰jPIGx1I‰B+‰DTˆ•†1J0x2J•B+‰ŽZ+•†1J0x2J•B+‰DFq‰Djq9ˆ2J•B+‰DTˆ•†1J0EKuNZnOZ3uDEcK…HjX‰SHXwHjAˆuEmK•nZn‰D€D•DjJ0x2J•B+‰DTˆ•j9Aˆœ†2XnSPKˆHTAJSHNcONX012œ˜K˜q0j…m‰Z0†wH…˜DPˆuEIœ04G0†wHI˜2lclTexug+‰DTˆ•†1J0x2+BˆHnxXx0BPˆuEIœ04G0†wHI˜2lclTexug+‰DTˆ•†1J0x2+MjXˆMN0z02jJ0Eˆ…m†HˆMx0x0KMw•E2J•B+‰ŽZ+•DjJ0x2J•Bu+u†‘+•†1J0x2J•B4+‰gNˆOc†n‰Psx0BlIFENnO2eI‰g•3HxJœ9cjxlˆHcuE=3HwPIsEl+Sj†cON83HwHœ˜cN+Sxen0Djˆ0†ˆOc†JOcKœux2J•B+‰D‘ˆHB—JSNmœ‰ˆ•+‰D+…BjnI1T2+M„ZnuHXxcjPK˜HXœuˆEœErœ92IˆSPs+u2€x‰42+•†1J0x2J•B4+‰cFxH†n+SN‰•B€nxXw†jAJS†…m†G0†x˜x‰†enc†s3HxKw9cNœug†ˆljjx0BSw˜cjxSgH3GN8Au•Oœ‰gjxlTe‰GKHœcj=nNqœ1wOz‰•HD•X€Dc††KGcZ3uZu+sEjJu†Tˆ•†1J0xI‰2TnuH0…˜Kn+c2K•ˆPnuH˜D‰†eI+gXAHxœclA0N†cHB43u†ˆOc†JOc†cOˆHˆ0†„œuc†n0NencˆGAu‰OIMB‘ˆ•†1J0x2Jug‰‰N+œuDEqADmz‰2˜ˆ‰xqœ˜D—‰T…mKD†jA0mˆ3OnHœOBDc††Dmcz‰…HnS•D‰Z€I1c‘KOˆ1I‰B+‰DTˆ•EjœOˆ1I‰B+‰DFxuKl+DNc•H0SP0xcG‰T…mK0m20…BKEq0EI0MP1ˆcˆ+œ˜c—‰0g3+B2Xˆ‰NKw•†1‰DNcOKX‰BxII˜2—AS4‰0g+‰DTˆucOœux2J•B+‰DTˆ•†9œ˜H2JuNE0cx„z†jAœ1x1I‰B+‰DTˆ•†1J0x2J•B+‰…„xmc…I‰„HœuHfDE9AAc4…SXu+•xDD‰4HIm‰uJ•—ODO†DDc€wAcZIlnHA˜uD‰44KGcZnA‰HA1n‘D‰4HIm‰uJ•—HœsEKDAˆADDjJ0x2J•B+‰DTˆ•†1J0x2+MjXˆMN0z02jJS2œcnG+‰NXw˜2—cxN+M2S0cx+IcŽscDIcGBXnSPKœ•j—‰S4†+BBG+N+œuBnAlTnc9D+‰DTˆ•†1J0x2J•—PJu†Tˆ•†1J0x2J•BnuH0…˜Kn+c2JH—Zn‰xXz4‰D0ˆI…†nZc˜•PIHjnAD†clNZnA20JSK—‰†JuJZ0†N=…MjPxux3+B2Xˆ‰NKw•†1‰DNcOKX+HKG+•†1J0x2+1TJu†Tˆ•†1JlˆI0g+‰DTˆ•†1JlB2AuBx0cNA2HI‰Ex0c1x0c†n0Nec•x=ˆcxHx0cN‰˜=€I+gGAu†exFEl‰˜4HIlcuxcx€IFElq0X€c•j8ˆcx„IElD04†n‰jAuBmI0cj+uxHˆ‰DH‰0g+‰DTˆ•†1œuxK+M2=nuH˜xM†1‰Sj…m‰Z0†wH…B29cjˆz‰2rˆMN3w˜2EnuwH00B˜D0MuDAc‘3HŸuAFEOJu†Tˆ•†1J0xI‰2Tn•x˜zc†l…˜x3KONZnA2cˆH†EqlˆKHˆ=nS†Mœ0Hu4€+u2Ew‰E—œ…•wSHfD†N‘wmˆ…xˆ2zTHD0j‘wB‰IOc…w˜HˆcONr0S‰€q˜jeˆl†uxcx—I9cNˆT†Ilˆ‘ˆug+‰DTˆ•†1œuxK+MjXˆMN0z02jJSNmœj=ˆcDMœOnHc˜4EDAxXI†nœ˜ExSgjœ•4fˆO2fœ9—OœSgGn‰Nfœ0g‰œ04K˜PHDBB+‰DTˆ•†1JlB2K‰—Zn‰N3xSJGA0x+0˜N80†NF…˜Blqlc2AuHcœ0cjx—€n‰EE3Hx—xlclq˜xHcGKHAH…‘œucNJ2Oœux2J•B+‰D‘w‰4Oœux2J•Bn•N0I029œ˜j2KH=4nSHq…˜Blqlc2KuKXˆM‰Hx†j9cjKœS4Mnm—H…BjlDAT+KHˆr0l†IHsqlcKHˆHˆMc+œ˜…sAlD2JH2Gncx•œBTl0SN+MPX+HB‘ˆ•†1J0x†xug+‰DTˆ•†1J0x2+MjXˆMN0z02jJ0EKuNZnOZ3HŽsˆ˜4KAcu0x0z†BfœMHNcOKX‰cN+…˜DjˆuPˆ…m†HˆMx0x0K1…0EI0MP8+†Oˆ•j9Aˆœ†2XnSP+KcjnASj…J•B€nxXw†jAIGx1I‰B+‰DFq‰Dœux2J•BA9†‘w‰DjJ0x2J•B+u†Mœ0g…œSH8nAcP0†NqxSKn+SjI‰•2Z0gjAOJ€cHTXx0†HxclIuŽ€cG†€3Hx3ISclz˜=€cGcXˆ0B3ˆ•gNnu††I‰Ex0c1xcB‘ˆ•†1J0x2Jug‰‰NFI˜DEKK2JH2P0†NqxSKn+SjIcm†Z0DFzSK—+Tœ0DnuH0zS—Gc†ˆ…†c•ncx‰œ9DIDuH+uˆfœ0g‰œ˜x…x•E2J•B+‰DTw‰†BJ†I0B—4nu••ˆH†n+†ˆ0˜EDZ€cAcIx0‰H0l†˜Dcj1wmˆ2w‰…HDMXHD0M€DAˆ…KuŽHDlBBDlTlxG‰Ox‰c1I‰B+‰DTˆ•EjJBKuNPnmDz†BcmKˆ…†ˆOˆMxXxS2jK9TX+SP‘wmn‘œ0†ZxS4=DO2Xx†…œ9c…ISEuDNEˆuM„+•†1J0x2J•B4+u„+•†1J0x2+M—400H„wB†PJSHcGc8ˆMxXxS2jJSPI0B2enm2+œ˜…Z+mccœcˆrnmD0zcscjIJux€nuH0zS—Gc†ˆ…†ˆSncxKwMDjJ0x2J•—OJu†Tˆ•†1J0x2J•BnuH0…˜Kn+c2JH—Zn‰xXz4‰D0ˆI…†nZc˜•PIHjnAD†c‰nZˆMN2œ•=G+S4m…m4nuHqœM4lœ˜E3zlx+N3œ˜…sqABmœ‰PX012XI•E‰w•E2J•B+‰ŽZ+•DjJ0x2J•Bu+u†‘+•†1J0x2J•B4+‰gNˆOc†n‰Psx0BˆwEl‰lTHcHTs3H…Ow˜cEJ0††‰GKs‰ujXwmxfœ˜ODOT+0PEIAˆfœ0gˆ0lŸHw12XDu…Gcˆ3Hwu+Gn€D0BA+1c…†JH00HqD029‰1cœcnHœuHTDlTP+mˆ2w‰…HDMXH+•glxlc†cHj4JuE+‰DTˆ•†1JlB2K‰2O0cN3I˜2AJ0EˆœA†unx0I˜2jJS†…m†G0†x˜x‰†—‰†cHN‘œuB8œT…wS48DgZˆ•†fIOc…uPEœHKXw2fœ˜HNIˆu+lNE0cx„z†j†I0N4Auc€xlcAD˜j†cHTs3uHTI0cAD92†ˆ0B=AHxHx0cl0BTœux2J•B+‰D‘ˆHB—+S4+BˆPnS†FI˜Df+SN†‰•K‘xmc‰œ˜•HDu48+cNXI•Euœu†‘A˜PwSPXwmxfœODN+˜PEœHKEœ˜2Mœ‰•‰‰E2J•B+‰DTw‰†BJmTN+Mjuˆ1DDˆH2nI˜jI0M—ZncwPx‰†eœccEˆ0†uwEN+u•€c•NHxcw„ˆOclD9ce‰sg‘ˆ0BFwx‘ˆ•†1J0x2Jug4A9x‘ˆ•†1J0xm+BˆjnxXI†90mBœ‰„ZncwPx‰†9ˆ˜4KAcu0x0z†BfœMKNKHˆ8nA2˜I029c0g3K•junm2„œB†lD9T1I‰B+‰DFD•DjJ0x2J•B+‰DTˆuDEcmT0MjH+‰D+…˜B9œ9j…c1cS0m20…BKEq0EI0MP1ˆcc˜…˜K—+0g3…P‘0†xqw††l+DI‰uDG+‰D+I0—sqlDIc•ˆH‰9†…˜DfcS43zSgf0SH˜wu…sc0Pc9D+‰DTˆ•†—…ME1I‰B+‰DTxEjœ•E2J•B+‰DTw‰†en0xHˆ0BqwcN0l—€cHBZxcwGwOc†Du=€œ‰Bjˆc…•w†D8œ9—OœS4jDGxZˆ•†fœ0uœSH‘0c†ZDlŸsœ1ˆ2Dm…H0+ElDXu3GcN‰•ŽHnm2‰Dc†EAmcKHŸHnSH0D0gEJAcZz‰=u+lB1DAKD‰EecOcHˆcxIw‰D€+•†1J0x2J•B4+‰cFxH†n+SN‰•B€00•PxS29cSNI‰2jnm—PwHjlKc2+B2PˆBxnœugNISPZA92Xx1x…œ‰•OT+0P€x‰XGœSH‘c˜4swSPXœ0B8xˆ2z˜HˆcONr0ScjI9Beˆ0EHx0BPœucNnu††œ‰Bjˆc…•wSc†n0NecOcHˆcxIw‰B‘ˆ•†1J0x2Jug‰‰N3œ˜K—c†I‰2=nuP3I˜cAK˜guDcKXœA‰Oœ˜j20˜4€+Oˆ‘I0g…œSxsœS4sDuP‘wuB—œSH‘c˜HXnKfxAKK+•†1J0x2J•B4+‰cF…˜B—+ˆ…•H‰†N=I†jnJmTNcG†H+‰gEc0H†Ilˆs3uBœ+El+9cHcGNxcw•x‰gAug†n‰2sxug+‰DTˆ•†1œOB…xug+‰DTˆuD—cS†Ku48+‰xI…02EAmTNcG†H+‰xœ˜KBDlˆIKHˆr‰0PXK˜B9cSjN…†ˆ€+•D+I0—sqlDIc•ˆH+HB‘ˆ•†1J0x†xug+‰DTˆ•†1J0x2+MjXˆMN0z02jJ0EKuNZnOZ3HŽsˆ˜4KAcu0x0z†BfœM2+B2P+•DISB9cSjN…†ˆ€+†Oˆ•j9+ˆ…NX0cw••=G‰†cHcfAu†œc†lz9jI‰uDZAOx‘ˆ•†1J0xS‰0g+‰DTˆ•†1q9Bˆug+‰DTˆ•†1œuwHw‰…HD0isxAcZIlnH0DEDc€xmc…x0ZHDMXHDc††DGcZ…SZu+AnGDc€cGˆDXHncD—D0—sc1cˆœ‰„HnxJD02Ecmc‘œ‰MHw9†3D†4JG‰•+GcAHxHx0cl0B1I•E2J•B+‰DTw‰†BJxˆ0Mj=n†DTIH†EqlˆKHˆ=nS†FI0—sqlDIc•ˆH+‰N+z0Kl0˜g‘n0jfwM4sœ˜=uuPwSPXI1xuœSH‘c˜4swSPXœ0B8xˆ2z˜HˆcONr0ScjI9Beˆ0EHxc…•IScl‰9—€ˆ‰DHˆcx—x+E†n0NecOcHˆcxIw‰B‘ˆ•†1J0x2Jug‰‰N3œ˜K—c†I‰2=nuP3I˜cAK˜guDcKXœA‰Oœ˜j20˜4€+Oˆ‘I0g…œSxsœS4sDuP‘wuB—œSH‘c˜HXnKfxAKK+•†1J0x2J•B4+‰cF…˜B—+ˆ…•H‰†N=I†jnJmTNcG†H+‰gEc0H†Ilˆs3uBœ+El+9cHcGNxcw•x‰gAug†n‰2sxug+‰DTˆ•†1œOB…xug+‰DTˆuD—cS†Ku48+‰xI…02EAmTNcG†H+‰xœ˜KBDlˆIKHˆr‰0PXK˜29œ˜jN…ˆjnxcœ•j9+ˆ…NX0cw•wMDjJ0x2J•—OJu†Tˆ•†1J0x2J•BnuH0…˜Kn+c2JH—Zn‰xXz4‰D0ˆI…†nZc˜•PIHjnAD†c‰nZˆMN2œ•=sADNc•Ps0cx3wHjAnOD2JH2jnm—PwHjlKcJz0JZnuP0œMjrœuPIœ‰ˆGnG2cœE‰w•E2J•B+‰ŽZ+•DjJ0x2J•Bu+u†‘+•†1J0x2J•B4+‰gNˆOc†n‰Psx0BˆwEl‰lTHcGDGx0‰OIEl‰l—€ˆcc4AuBw˜cjAOJ€cHTXx0†HxclIuŽ€cG†€3Hx3ISclz˜=€cGcXˆ0B3ˆ•gNnu††I‰Ex0c1xcD8œ92sœS4En0xZJu†Tˆ•†1J0xI‰2Tn•x˜zc†l…˜x3K•junm2„œB†lD˜xˆœA†unx0I˜2jJmTmœ†ˆXDE9œG‰u‰GnHnScPDAxH‰1cIJOnHDcD‘DAc4KAcNDm‰H0SH‘DGxPAcjEKDm…†N‘œuB8œT…wSHGw‰NEœ†fœ˜EuPX+ujfœ0g‰œ92sœS4En0x+‰DTˆ•†1JlB2K‰2P0†N+…0DED˜xˆ0MjP0cN€ˆGˆ…3H‰H0c†Dc†PKmcIJO—u+lB1DAKDAcN3G‰uAMx=DAc4KAcZcOwHDOcBJu†Tˆ•†1J0xI‰2TˆMx=z0—Gˆ9j2Kcn•0A20xuK9œ9ˆI‰KZœMjfœO—uuHjw9ˆXI1xsœ9ˆ2A˜4HA˜j€xmˆ—œ0xNqME2J•B+‰DTw‰EjqME2J•B+‰NF…c†Ez9Tˆz‰2EˆBwHISK9œ9ˆI‰2f0†N+Au—s‰S4m…M=H‰†wHIB†Ez˜4IJux€00•PxS29cSNI0E+‰DTˆ•†—w•E2J•B+‰DTˆ•†1J†I0B—4nu••ˆ•j—‰SgN0MH•‰˜ZPœ†jn‰g…†2XnGT3DcBn‰mTmI0xf0†wHIB†Ez˜4IJuDG+‰D+I0—sqlDIc•ˆH‰9†…˜DfcS43zSgf0SH˜wu…sc0Pc9D+‰DTˆ•†—…ME1I‰B+‰DTxEjœ•E2J•B+‰DTw‰†en0xHˆ0BqwcN0l—€cHBZxcxJwEADOT†I‰2Ex0cBw9cNˆ9T†I‰g•3HxJœ9cjxlˆHcuE=3HwPIsEl+Sj†cON83HwHœ˜cN+Sxen0Djˆ0†ˆOc†JOcAIS4swSPXœ0BwMDjJ0x2J•B+u†FJ0D9K†ˆcGT+x3xS—sz˜4ˆcGK00•PxS29cSNI‰—ZnuP0œ1ˆKuiHD†…uDc€xmˆ2KuMHDBDEDAc4KAcNDm‰H0SH‘DGxPAcjEKDm…†N‘œuB8œT…wSEH+ADXImn‘œuxIwSP=+u2fœ0g‰œ92sœS4En0x+‰DTˆ•†1JlB2K‰2P0†N+…0DED˜xˆ0MjP0cN€ˆGˆ…3H‰H0c†Dc†PKmcIJO—u+lB1DAKDAcN3G‰uAMx=DAc4KAcZcOwHDOcBJu†Tˆ•†1J0xI‰2TˆMx=z0—Gˆ9j2Kcn•0A20xuK9œ9ˆI‰KZœMjfœO—uuHjw9ˆXI1xsœ9ˆ2A˜4HA˜j€xmˆ—œ0xNqME2J•B+‰DTw‰EjqME2J•B+‰NF…c†Ez9Tˆz‰2EˆBwHISK9œ9ˆI‰2f0†N+Au—s‰S4m…M=H‰S•PISKnASNˆœlNX+•D+I0—sqlDIc•ˆH+HB‘ˆ•†1J0x†xug+‰DTˆ•†1J0x2+MjXˆMN0z02jJ0EKuNZnOZ3HŽsˆ˜4KAcu0x0z†BfœM2+B2P+•Dœ0—sAmBm…ˆjnxcœ41J0EˆœA†unx0I˜28q˜P+M=40†DmD=s0SN+MPX+†€D•DjJ0x2J•—PJux‘ˆ•†1J0x…z0g4Ju†Tˆ•†1J0xI‰KEœ•4fœ0jNDuHE+sgXI•Eœ9JOA˜PHDFg‘ˆHjsœSNnSHfncN‘I2Sœ˜=HnSgswmxXwM†Sœ9ˆI‰˜4j0ADXwH‘œ9cI0˜Hj0‰KEœ†fœu†‘A˜PwSE‘D0MuDAcIœ0g‰0g+‰DTˆ•†1œuxK+M2=nuH˜xM†1‰S†…m†G0†x˜x‰†9+ˆ…NX0cw•ˆuK—+mBIˆ0†=w‰g†IOcHcGDGx0‰OIEjJSHHˆ‰cZx0cNIMglxlc†cHj4AsX„IxII˜2—ASZu+•x‘DAˆADmcs+uŽHw9†3D†9nA‰•‰u•HDlBBD0MuDAcIœ0g1I‰B+‰DTˆ•EjJBmœcnZˆBN3x‰†9K†mœ‰nH+‰gju4ecu2fxcxDI˜cl‰lM€I‰Ex0c1x0clxc†IlN‘ˆ0cNIMgNcDeˆAx=J0g+‰DTˆ•†1œuxK+B2‘nu•P…uDPJˆ†K•PXn•N+w˜—sD˜wu0†DIDX€xmc‘w0—H00‰uD02PJGcIAJHAFE=D0g9xDjJ0x2J•B+u†‘xDjJ0x2J•2OˆBx3wuBlA0xIœ†ˆH0AD+w˜—sD˜xI…†nZc˜•PIHjnAD†ccju0AD0z†jl‰0g3K•junm2„œB†lD9T1I‰B+‰DFD•DjJ0x2J•B+‰DTˆuDEcmT0MjH+‰D+…˜B9œ9j…c1cS0m20…BKEq0EI0MP1ˆcc˜…˜K—+0g3…†ju0AD0z†jl‰0P…J•B€00•PxS29cSNImNfˆMN3…cjAnGˆ3…†j=nNqœMjPIGx1I‰B+‰DFq‰Dœux2J•BA9†‘w‰DjJ0x2J•B+u†Mœ0g…œSH8nAxEœ‰X‘œ˜EnS48Dg€xAˆnœl‰HwS4jw0jEœSBnœujsˆS48D02‘w—Oœ9T2ˆS4u0†TXIcGœ9Dˆu4H0†NEIc†Mœ0P2œSgjœ•4fˆO2€œGcNDm‰H0SH‘+HB‘ˆ•†1J0x2Jug‰‰NFI˜DEKK2JH2jnm—PwHjlKc2K•junm2„œB†lD˜x+M=40ScjI9Beˆ0EHxcxJwENDuHHc•E4AucNIMglxlc†cHj4AsX„IxII˜2—ASZu+•x‘DAˆADmc…I‰„H0+EuDl2HnAcˆw0iHDlBBD0MuDAcIœ0g1I‰B+‰DTˆ•EjJBmœcnZˆBN3x‰†9K†mœ‰nH+‰gju4ecu2fxcxDI˜cl‰lM€I‰Ex0c1x0clxc†IlN‘ˆ0cNIMgNcDeˆAx=J0g+‰DTˆ•†1œuxK+B2‘nu•P…uDPJˆ†K•PXn•N+w˜—sD˜wu0†DIDX€xmc‘w0—H00‰uD02PJGcIAJHAFE=D0g9xDjJ0x2J•B+u†‘xDjJ0x2J•2OˆBx3wuBlA0xIœ†ˆH0AD+w˜—sD˜xI…†nZc˜•PIHjnAD†cP8nu•Pwu29KS†KHc‘+x3xS—sz˜4ˆcGKZJu†Tˆ•†1Jmx1I‰B+‰DTˆ•†1J0xmœcnZˆBN3x‰†1‰mTNKu4rABJHˆ†=scmT‰œA†€0†NqJuccKmT+M†‘+mDqISDEqlDK•ˆjnxcœ41J0EˆœA†unx0I˜28q˜P+M=40†DmD=s0SN+MPX+†€D•DjJ0x2J•—PJux‘ˆ•†1J0x…z0g4Ju†Tˆ•†1J0xI‰KEœ•4fœ0jNDuHE+sgXI•Eœ0P2œTXngEI†fIOc‘xSEHDu2EœSBnœujsˆS48D02‘w—Oœ9T2ˆS4u0†TXIcGœ9Dˆu4H0†NEIc†Mœ0P2œSgjœ•4fˆO2€œGcNDm‰H0SH‘+HB‘ˆ•†1J0x2Jug‰‰NFI˜DEKK2JH2jnm—PwHjlKc2K•junm2„œB†lD˜x+M=40ScjI9Beˆ0EHx0BmI0cEcn€n‰Hjˆc…uI+EADOKHˆ0B=AHxHx0cl0Be3GN8KHj=nNqœ1ˆKuiHD†…uDl2I1cZz‰=u0†w‘D0gP+mc…w‰ZHA9‰sDAc4KAcNDm‰H0SH‘Ju†Tˆ•†1J0xI‰2TnuH0…˜Kn+c2K•ˆPnuH˜D‰†eI+gXAHxœclA0N†cHB43u†ˆOc†JOc†cOˆHˆ0†„œuc†n0NencˆGAu‰OIMB‘ˆ•†1J0x2Jug‰‰N+œuDEqADmz‰2˜ˆ‰xqœ˜D—‰T…mKD†jA0mˆ3OnHœOBDc††Dmcz‰…HnS•D‰Z€I1c‘KOˆ1I‰B+‰DTˆ•EjœOˆ1I‰B+‰DFxuKl+DNc•H0SP0xcG‰T…mK0m20…BKEq0EI0MP1ˆcc„xS2EˆMKKu48nA2˜I029c0g3K•junm2„œB†lD9T1I‰B+‰DFD•DjJ0x2J•B+‰DTˆuDEcmT0MjH+‰D+…˜B9œ9j…c1cS0m20…BKEq0EI0MP1ˆcc˜…˜K—+0g3…NunSHmxBsz9Tˆ…K=00H„œMjPxux3K•junm2„œB†lDFg3…H2PˆBxcœgjˆ˜HˆcONr0†DmwMgOœux2J•Bˆ†B‘+•†1J0x2JGN4+ux‘ˆ•†1J0x2JugDlB1DAc‘…‰Hw˜†uDcj1œAc…IAnHn+E9DAˆ1JmcˆzAnHw12XDu…Gcˆ3Hwu+Gn€D0BA+1c…†JH00HqD029‰1cœcnHœuHTDlTP+mˆ2w‰…HDMXH+•glxlc†cHj4JuE+‰DTˆ•†1JlB2K‰2O0cN3I˜2AJ0EˆœA†unx0I˜2jJS†…m†G0†x˜x‰†—‰†cHN‘œuB8œT…wSHE+sgXwmKœSg2+˜48A92fœ0g‰œ92sœS4En0jux†„œc†lz9jIˆ0†=w‰g†IOcH‰GK8ˆ0BˆwElxSNHˆ0xˆcxDxlc†n0NecOcHˆcxIw‰B‘ˆ•†1J0x2Jug‰‰N3œ˜K—c†I‰2=nuP3I˜cAK˜guDcKXœA‰Oœ˜j20˜4€+Oˆ‘I0g…œSxsœS4sDuP‘wuB—œSH‘c˜HXnKfxAKK+•†1J0x2J•B4+‰cF…˜B—+ˆ…•H‰†N=I†jnJmTNcG†H+‰gEc0H†Ilˆs3uBœ+El+9cHcGNxcw•x‰gAug†n‰2sxug+‰DTˆ•†1œOB…xug+‰DTˆuD—cS†Ku48+‰xI…02EAmTNcG†H+‰xœ˜KBDlˆIKHˆr‰0PX‰c†nAj…m†P0DIH†EqlˆKHˆ=nS†€+•†1J0x2+9D+‰DTˆ•†1J0x2J•2P0†N+…0DED˜x3+B2‘ncNDxBTXq0PI0B2enm2+œ˜…Z+mcK0B—Znu†œSD9Kjm…uKunuHKœ41J0EˆœA†unx0I˜28q˜P+M=40†DmD=s0SN+MPX+†€D•DjJ0x2J•—PJux‘ˆ•†1J0x…z0g4Ju†Tˆ•†1J0xI‰KEœ•4fœ0jNDuHE+sgXI•Eœ9JOA˜PHDFgZˆ•†fIOc…uHfncN‘I2Sœ˜=HnSgswmxXwM†Sœ9ˆI‰˜4j0ADXwH‘œ9cI0˜Hj0‰KEœ†fœu†‘A˜PwSE‘D0MuDAcIœ0g‰0g+‰DTˆ•†1œuxK+M2=nuH˜xM†1‰S†…m†G0†x˜x‰†9+ˆ…NX0cw•ˆuK—+mBIˆ0†=w‰g†IOcHcHTs3u†Fœlc†KlTHˆ0B=AHxHx0cl0Be3GN8KHj=nNqœ1ˆKuiHD†…uD‰4jAmcˆ3Onu+‰xNDAKAœA‰Hw‰‰HnAnHDcjEœ•DjJ0x2J•B+u†FJ0DEcmT0MjH+‰x˜z0DEKmc2Au‘œMglnSPHc•H=ˆcxKw+Ej+uxHˆ‰DHˆcxux0cjz˜g†ˆ0B=AuB0w•g†DuNTœux2J•B+‰D‘ˆHB—‰SgmœAGnO†FKSc9AS4m+B2Znm—•ˆGˆI‰H=u+sEuD0g4nmcˆˆAnHn†1D02jD1c…3uŽHœ•xuJu†Tˆ•†1J0xI0guJu†Tˆ•†1Jxc•jGncxDˆHjfccˆ…H2Znm—•ˆH=scmT‰œA†€0†NqJuc0AS4KHˆ8ˆMx0I•E1‰S†…m†G0†x˜x‰EKœux2J•Bˆlx‘ˆ•†1J0x2J•B+‰N3œ˜K—c†I‰B€ˆMx=w˜DP…FEn…SKXˆM‰Hx†j9cjKœS4FˆMN+z‰E1ˆ9jIcONX0AD+œBj1nOD2JH2jnm—PwHjlKcJz0JZnuP0œMjrœuPIœ‰ˆGnG2cœE‰w•E2J•B+‰ŽZ+•DjJ0x2J•Bu+u†‘+•†1J0x2J•B4+‰gjAOJ€cHTXxcxmw‰gNA0Ž€cOcExcxI•gNˆuŽ€ˆ‰DHˆ0cNIMgN+Sxen0Djˆ0†ˆOc†JOcAIS4swSPXœ0BwMDjJ0x2J•B+u†FJ0D9K†ˆcGT+NˆuBlDATIcuKXnu†F0AcI…†MHw‰D—Ju†Tˆ•†1J0xI‰2Tn•x˜zc†l…˜x3+˜EncwH…Bjlˆ˜4mI‰2IDc=s‰Ac4J•N1I‰B+‰DTˆ•EjJBmK•ˆP0cwZˆ•j9KmT+M†0cN3zc†nIuwHœO†—D0MunAcˆzA‰u0cxqD029ˆAc‘Ju„H0+EDc†1q1wOz‰•HA˜†TDAxH…1cZcOwHDOcBDGxPAAcKu‰Hœ•DfDAc4KAcˆJGŽHA˜uD02jK1cJH‰H0mˆ…DlT†…†jEKDm…†N€x‰4sœlD4+˜Hf+0PXˆ•4„…˜DfcSZHA˜uD0—€KmˆNKGwHw9†3Dc†1q1wOz‰•H0‰…„D‰4jDmcN…†ŽHD†ED‰4jzAcZˆA—H0+EuD‰ZsG‰H‰uiu0‰DND††lAm‰uz0Hxc…OœsENnn€‰GxH3uBBIElx˜Z€ˆlDZxc…•wux‘ˆ•†1J0x2Jug‰‰NFI˜DEKK2JH—•n†xOˆu…G‰†NcGcf+‰glIuj†ˆcc4AHx„IElD04†ˆ0B=KSNqcMB‘ˆ•†1J0x2Jug‰‰N3œ˜K—c†I‰2=nuP3I˜cAK˜guDcKXœA‰Oœ˜j20˜4€+OˆXœE8œO—u0˜4f0KEœ•†SœSxsœSPEœHKEIc†Mœ0P2œSgjœ•4fˆO2fœ9—OœSgGn‰Nfœ0g‰œ04K˜PHDBB+‰DTˆ•†1JlB2K‰—Zn‰N3xSJGA0x+0˜N80†NF…˜Blqlc2AuHcœ0cjx—€n‰EE3Hx—xlclq˜xHcGKHAH…‘œucNJ2Oœux2J•B+‰D‘w‰4Oœux2J•Bn•N0I029œ˜j2KH=4nSHq…˜Blqlc2KuKXˆM‰Hx†j9cjKœS4KnmDqw˜K9œ9ˆI0x€ˆ‰DOˆ•j—IOD2K•ˆPnuH˜D‰†1‰SN+B2P‰Bˆ•ˆM41J0E†KGBG‰BwH…029xOT1I‰B+‰DFD•DjJ0x2J•B+‰DTˆuBl00xJ•c€ˆ‰w4w•EAJmx1I‰B+‰DTˆ•†1J0x2J•B+‰xXœ‰†1ˆuN3+˜N•nDTq‰†1‰mTNKu4rABJH…0B0ˆ9TIKuKXˆMNDœ•EAIux†xug+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0xmœcnZˆBN3x‰†˜x˜Kexug+‰DTˆ•†1J0x2J•B+‰DFq‰DjJ0x2J•B+‰DTˆuˆKœux2J•B+‰DTˆ•†9œ˜H+M2P0†xˆS2lKmTˆ…SNS0cx„w•E1nOˆJKK†‰˜ZZw†Ÿs+ˆcGc€nO=ZIcN˜wugnKHBs+HDOœHN9‰l2cN0MˆGœHN9‰l2‰Ox‘0MxKwE0z˜K2œ9K†‰˜ZZwcTrD9ˆN‰uDG+‰D+D˜2lxOD2JH2•0cN+ISB9cj…J•2Kc0E0+BŽ4Aˆ0Km†Jc0E+K†cjIOT†xug+‰DTˆ•†1J0x2J•B+‰DTIHjlz˜4cHˆHˆMNDˆHTAJS2nc9D+‰DTˆ•†1J0x2J•B+‰DTˆHjEql†Ic•ˆ8n‰DTœ•j9…0NK•P‘0†NDˆH†nA0x3KuZZ0†wZw˜cOœux2J•B+‰DTˆ•†1J0x2J•B+‰DTˆuBl00xJH—•‰˜=ZIuBn‰S4cD„0BDTœ‰jjJ0E†K9wP+xX…Bjl…02D…AT+S†ˆˆ•j—IsEJ‰H2ZˆMx0xBxr+SK2JH†E+‰D+DcTM…˜EN0B2Xn†ˆG…BNAœ1x1I‰B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B0S•PzcjlKSjNJ•B‘+x˜…˜K—+0xˆ0MH+x˜…˜K—+Sˆœ‰ˆ•0†DTqcTjJ0Eœ‰ˆGˆBxcw˜cOœux2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DFwBjjJ0gN0MPS00•PxS21ˆuEœ‰ˆGˆBxcwMEnw•E2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2JGNu0SH˜wu…s0˜EHA92EwOB—œ0P2œS4A9jux†„…˜DfcSZHA˜uD0—€KmˆNKGwHw9†3Dc†1qMDjJ0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1JTII‰B‘+NII˜2—cS409D+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1JTII‰B‘+cNFzcjlˆ˜ˆc•nZ0A2œ•jPq˜P…Ic2=ˆMN+zcŽsD0NcHcH+=ZIcw4D˜†n‰O…‘+0PwMjPxux3KuZZ0†w4nH˜…9D2JH—Z0†w4x•EAœ1x1I‰B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2K•PunSP+w˜2fcS42KMOJu†Tˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0xS‰0g+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•Bˆ†B‘ˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆHjlz9jI09D+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1JTII‰B‘+cNFzcjlˆ˜ˆc•nZ0A2œ•jPq˜P…Ic2=ˆMN+zcŽsD0NcHcH+=ZI‰†jqlT3zlx+xX…Bjl…02DKmTG+‰D+…Bjl…lx‰uZOJu†Tˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰xqxS2f‰Tœ†ˆX+‰K2D•DjJ0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•Bˆ†B‘ˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆuˆKœux2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DFq‰DjJ0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰x0wu…scmx1I‰B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•2Z0S†TœuBnASˆm…H2PncwHœE1‰m2ˆcOŽ40†D€w˜cOœux2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰xXœ‰E1KjK•nZncxDDgXqlTm…A†•0cN+ISB˜q0N+B2P+•D+w˜K9cKlz2AMDFnj9KmT+MjSnSH˜xBj‰…FE3+Bj=nN0œBNAIOT†xug+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•28nm—H…˜BlDABI‰•BPAOx‘ˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2+1T+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰ŽZ+•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†9cDm…†nOJu†Tˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0xˆ…m†HˆMxXx0Klc0xDID+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰ŽZ+•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•Bˆ†B‘ˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†—…ME2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B€0†x„œ˜2lcc+MP0BDTq‰†9D04z‰—Hncx„…0D9I9xn…ˆ€00ZPœ˜29cKIcG‰Z+•D+w˜K9cKlz2AMDTIuK9I9Tmz0XOJu†Tˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•—PJu†Tˆ•†1J0x2J•B+‰DTˆ•†—…ME2J•B+‰DTˆ•†1J0x2J•BnuH0…˜Kn+c2JH2Xnx0xBjlDATmzD+‰DTˆ•†1J0x2J•—PJu†Tˆ•†1J0x2J•B0†x„z†jnw•E2J•B+‰DTˆ•†1J0x2J•BnuH0…˜Kn+c2KKAOx‘ˆ•†1J0x2J•B+‰ŽZ+•†1J0x2+1TJu†Tˆ•†1JlˆI0g+‰DTˆ•†1JlB2AuBx0cNA2HI‰Ex0c1x0c†n0NecONfx0BTwFEjAOJ€cHTXx0†HxclIuŽ€cG†€3Hx3ISclz˜=€cGcXˆ0B3ˆ•gNnu††I‰Ex0c1xcD8œ92sœS4En0xZJu†Tˆ•†1J0xI‰2Tn•x˜zc†l…˜x3K•nZˆMN3wB†fcmTI0MH0cN3zc†nIuwu+lB1DAKDA‰Hw‰‰Hnx†D0g1œmwOz‰Hˆ0B—ZnOcAD9cHcONfx0BTwFEl‰0j†ˆ0PGAsX„INII˜2—cSZHA˜uD029ˆAc‘Ju„HDlBBDc†1q1wOz‰HKu4s0ScAD9cHnc†s3HxKw9cNœug†ˆljjx0BSw˜cjxSgH3GN8Au•Oœ‰gjxlTe‰GKHœcj=nNqœ1‰O+sXH00c9DlŸ€œ1ˆ3u•DMD1Ju†Tˆ•†1J0xI‰2=ˆMN+zAcˆ3Onu0‰D3Dc†1q1cZz‰=ODO†NncwHIHjnISj+‰nZ0†N=…1J•J•2mœcˆrnmD0zcsclKNcHK8ˆ•†˜IS29Kjm3•gTˆHNFIBsx˜NI…†N8ˆ•†˜IS—sDATIcG‰ZABx+œ˜…s‰˜j+‰ˆ8n‰x0ISMsKS†KHN8ˆ•†˜ISB9cSjN…†ˆ€D1K1J†sz9Tˆ…K=00H„œ1J•J•2IcGc=00H„œBjeA•BcHju0AD0z††l+DIˆ‰gTˆHxIx†GcjIcHK8ˆ•†˜z†G+ˆKON=00H„œ1J•J•2KG†H04IS29œ˜jN…ˆjnxnISx2Kxˆ0MPrˆ1—PzcjeA•B0MPXnx0ISK9cSE1I‰B+‰DTˆ•EjJBmœcnZˆBN3x‰†9K†mœ‰nH+‰D+I˜K—‰†Nc•=4ˆMxnIOc…wS480†N€x‰Esœu†‘A˜PwSPEœ1xœOnHc˜4EDAxXI†nœ˜ExSgjœ•4fˆO2fœ9—OœSgGn‰Nux†8œ˜=uugDGDXwMjsIOcwˆu+0Pfœ0g‰IOc2K˜PHDHKEœ˜2Mœ‰•c9ˆu+lx€0cN+…˜DEœ˜†0B2XD‰4jDmcN‰uMHA˜†4D†4JG‰•+G‰Hnx†D0g1œmcZˆA—uAFEcDcjHˆAc…w‰•HDO‰ZDlTlxGc‘…‰ODO†DD0iu‰GcˆIcŽun‰wuD024‰1wOz‰HwBxODAxHKA‰Hw‰‰u0†DHDcj1AmwOz‰=HA˜†e+x˜…˜K—+Tˆœ†nZ0ScAq˜gec•ˆZˆ0cNIMgAD˜xen0x•3sX„IglIOD†IATZˆ0‘œMglnSPHˆlTHx0B0w•g†DuNTœux2J•B+‰D‘ˆHB—‰SgmœAGnO†FKSc9AS4m+B2Znm—•ˆGˆI‰H=u+sEuD0g4nmcˆˆAnHn†1D02jD1c…3uŽHœ•xuJu†Tˆ•†1J0xI0guJu†Tˆ•†1Jxc•jGncxDˆHjfccˆ…H2Znm—•ˆH=scmT‰œA†€0†NqJuccKmT+MjZ00P0…BjnA0gˆ0MjP0cN€ˆ•j9KmT+MjZ00P0…BjnAlT1I‰B+‰DFD•DjJ0x2J•B+‰DTˆuBl00xJ•ˆZnGMPI˜Df+SN†‰ux€0cN+…˜DEœ˜†0B2XnO†€w˜cOœux2J•B+‰DTˆ•†1J0x2J•—Zn‰N3xSKPJcI0˜D‰†N=I†jnJmTNcG†H+•DmIH†n‰mTmœ04jˆBN+œ˜DPK˜48DM4Eœ˜2Mw˜43œSgsDgux†rœ9n•09T‘nˆ€x‰4sœ04K˜PHDBBf+HKG+•†1J0x2J•B+‰DFq‰DjJ0x2J•B+‰DTˆ•j90Tmœ„Z+‰JZˆHGc†mœcˆHˆMDIH†n‰mTmœ04jˆBN+œ˜DPIGx1I‰B+‰DTˆ•†1J0x…z+gEœ‰X‘œ˜EnSEH+‰KfxAx‰œ04K˜PHDBB+‰DTˆ•†1J0x2J•B€ncNqc˜BlD0PKHc‰BDFœc†lz9jIc9D+‰DTˆ•†1J0x2J•2Z0S†Tœ•†lœ9jn…ˆPnuH˜D‰E1‰SHN0MjrˆMD€w˜cOœux2J•B+‰DTˆ•†1J0x2J•B€0cN+…˜DEœ˜†0B2XnO†Tq‰†˜wuEˆ0B—ZnuHXI0Kn‰S4m…AŸOJu†Tˆ•†1J0x2J•B+‰DTˆ•†1‰Tm…‰PZnSHwHjAJA†2+B2PˆBxcD•DjJ0x2J•B+‰DTˆuˆKœux2J•B+‰DTˆ•†1‰ˆm+B2Znm—Hz†M…˜xlz0KGncx•œMjPxuPNcGc€0†Nœ41ˆ1TI0˜ŽZ+†OœSDEcj…HˆP0A2cx˜Bl‰0P…JuK8nx˜zSDPnOD3…•2=0A2•IB=sc0P…JuK8nm—H…BjlDAT…cH2XnG2Dœ41ˆ˜jNKHˆ8nA2˜I029c0P…JuK8n‰x0ISMscSE3zlxf0A2„wBsx˜NˆœlNX+†O+•†1J0x2J•B+‰DTˆ•†1J0x3…†ˆH0cx3wHjl‰0P…JuKEnm2q…0…sKS†KHcfAMDœ0—sAmBm…†ˆ€+†OœS…sA†…NG0cx3wHjAnOD3…NunSHmxBsz9Tˆ…K=00H„œMjPxuPmK•ˆrnGDxSDE‰0P…JuKr0†x„œBG‰S4IJuKAOx‘ˆ•†1J0x2J•B+‰…„xmc4A•MHwFEXD029ˆAc‘Ju„Hw˜†uDcj1œAcND•HwBwZJu†Tˆ•†1J0x2J•B0S•PzcjlKSjNJ•B‘+x˜…˜K—+Tˆœ†nZ0†NDˆH†nA0x3KOKXˆcJZ3•j9œ1TIcGTZˆlx‘ˆ•†1J0x2J•B+‰DTˆ•†1JSH…•jX0cxqœ•†1ˆuEN0B2Xn†DFI˜DPJ0Eˆ0B—Znu=Z3•j—0SN+BˆX+HNG+•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰xXœ‰†1ˆuNNcGcS0cN3zc†nIug3K•nZˆMN2w•†1‰ˆm+B2Znm—HzEAœ1x1I‰B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•BˆMx=z0—GnuxœcnG+‰c0DBscxKu4unS†œmcˆ3•…HwBxOD†jA0mˆ3OnODO†DDlT†ˆGc4…SXHnx†D0g1œmwOz0B3zAK€0cN+…˜DjIGx1I‰B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1Jm†1I‰B+‰DTˆ•†1J0x2J•B+‰ŽZ+•†1J0x2J•B+‰DTˆ•†1J0xNcH†+•x0x˜D—‰mcJH2ZˆMx0xBxPˆ9DNcOKX+mMZwMEnw•E2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1‰SN+B2Pncx3…0K9cjlzc2s0†NXˆBxPˆ9DNcOKX+mMZˆHTAJSHˆcONr0†KG+•†1J0x2J•B+‰DTˆ•†1J0xS‰0g+‰DTˆ•†1J0x2J•B+‰DFœ˜2—AS4†xug+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x3K•nZˆMN3wB†fcmTI0MP+x•œ˜c0…023…NZnA2cœ†NAJA†2+B2PˆBxcD•DjJ0x2J•B+‰DTˆ•†1J0x2+1T+‰DTˆ•†1J0x2J•—PJux‘ˆ•†1J0x2J•B+‰D+D˜2lxuxJ‰•B€ˆMx=w˜DP…FEcu4nncx+œ†jn‰jJuXOJu†Tˆ•†1J0x2J•B+N3œ˜K—c†I‰MP+‰ˆ•ˆMgOœux2J•B+‰DTˆ•†1q9nHnmˆ4DAJuxmc43HŸHA˜†TD‰4jwAˆ2w‰…HDMXHJu†Tˆ•†1J0x2J•B0S•PzcjlKSjNJ•B‘+x˜…˜K—+Tˆœ†nZ0†NDˆH†nA0x3KOKXˆcJZ3•j9œ1TIcGTZˆlx‘ˆ•†1J0x2J•B+‰DTˆ•†1J0E…j40†xq…BBn+†2K1TcGMZD•DjJ0x2J•B+‰DTˆ•†1J0x2JGNuD0—uwA‰•Dnu+lB1DAKDA‰Hw‰‰Hw+EJD‰4jJAc…IlMHnx†D0g1œDjJ0x2J•B+‰DTˆ•†1J0x2KHjunuH0IBsˆuxJH2ZˆMx0xM†9Kj2JH2=ˆMN+zcT‰D˜Eœ‰ˆGˆBxcw˜cOœux2J•B+‰DTˆ•†1J0x2J•B+‰DTˆuBl00xKu4H012˜z0DEKmcJH2=ˆMN+z‰41JS23…NZnA2cœ†NAIOT†xug+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰xqxS2f‰Tœ†ˆXAOx‘ˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•Bˆ†B‘ˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•Bncxˆˆ•E1‰ˆˆœlTX0AD+JSDf+lT†xug+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰D+…˜2nJ2mœ†‰BDFn†N‰w•E2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•2EnmD3œB†lASg2Jux€nm23wcjlAmTK0MjP+‰x˜z†1‰ˆˆœ0gZˆlx‘ˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B€nS•PIHjAJA†2JH2u00H‘xBTEDlˆIKHˆˆn†xOœ•E‰w•E2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•j—‰KmJ•MP+‰D+w˜K9cKexug+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1JmBœPXˆMDIuK9…lxlz0KGncx•œM=4…9Texug+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1JTII‰B‘nGD+I˜K9œ˜jeITSncNqˆS2lKmTˆ…SNS0cN+…˜DjˆuEœA†€0†DOˆ•j—‰KmJuEZˆlx‘ˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•j—‰KmK‰ˆPnu4•ˆM†M…˜x3KG†jn0jG+•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•Bˆ†B‘ˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†—…ME2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•2Z0S†Tœ•†A‰mT0M2FnuP2w˜cOœux2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DFI0DEcSNNz‰BPAOx‘ˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†—…ME2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B€nm23wcjlAmTK0MjP+‰JZˆ•j—‰KmK‰ˆPnujG+•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰ŽZ+•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰x0wu…scmx1I‰B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•Bncxˆˆ•E1‰mT0MB‰BDTIuK9I9TmzAŸ€012œ˜KBDlˆIKHˆr‰0PXA0Blx˜4K0B—Znu†IH†n‰mTmIlx+NII˜2—cS4…J•B€ncN+œ˜20wuPKu4s0†DˆM41J0E†KGBG+HD€ˆucOœux2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTIu—s+BIc•„Z‰cN3z‰†M…˜x3+B2•n•KG+•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1Jm†1I‰B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B0†x„z†jnw•E2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆH†f+S4ˆcODA0jG+•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1Jm†1I‰B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1Jm†1I‰B+‰DTˆ•†1J0x2J•B+‰ŽZ+•†1J0x2J•B+‰DTˆ•†1J0x3+MjXˆMN0z02XwuEN…†nH0BDTq‰†1‰ˆˆœlTX0AD+JSDf+Ax1I‰B+‰DTˆ•†1J0xS‰0g+‰DTˆ•†1J0x2Ku4E+‰DIuBnA†KNcGcfnxcw˜cOœux2J•B+‰DTˆ•†1J0x2J•2P0†N+…0DED˜xˆ0MjP0cNXˆSD9qlxJH2P0†N+…0DED9Texug+‰DTˆ•†1J0x2+1T+‰DTˆ•†1J0x2J•2P0†N+…0DED˜x3+MjXˆMN0z028w•E2J•B+‰ŽZ+•DjJ0x2J•Bu+u†‘+•†1J0x2J•B4+‰gNc˜j†‰G†fAuBDI0cEcl2œux2J•B+‰D‘ˆHB—JSNmœ‰ˆ•+‰DTIuMscmcˆ…m†€0†DFw˜2f‰S4I…†ˆP+‰gNA0††œccsx0‰„œ9c†ˆux†3GN8AuHMw‰gl+0NHn‰Hjˆ0Hcwc†q˜4Hˆ0xˆcxEˆOcAD˜†Oœux2J•B+‰D‘ˆGcZxAŸHncDNnA20Dcsq0EIˆ0†fˆu‰€q˜HEI1T+M2rAu„x†j9cm2IcONun•x0z‰4EKcI+MjuncxKxcsqlK……•jX0SH0zcjlD0jI‰G†=nSH+z0—sœ˜E……HjZ0†Nmx†…scmc+0BjXnSPKx0B—‰KJ0g+‰DTˆ•†1œuwHœu†lDGxPn0B—‰mTm+M•uA9PI029q0P…œ‰Pr0w•x02EcmT……Nuˆ˜H0ˆSc—AN……ˆPˆMxXIS29clˆIKHnZ0cxXwuDPq1DDI†MsA•KmzgKœux2J•B+‰D‘ˆuMscmcˆ…m†€0†Bfœ˜ExSEH00E+‰DTˆ•†MA‰jAKA†q‰†DMw˜4DME2J•B+‰KK+mˆ…3H‰H0c†D†jAx‰DjJ0x2J•M4JucN+SX€cGNAuB…w‰gl‰9J€cGˆXAuccw‰B‘ˆ•†1J0xqˆuPEI†…œ044…uPXABN‘wm‰Z+•†1J0x2KMZJuclI0PHc•E‘AuHSwsEE+˜jOœux2J•BA0jc+mˆIœ‰„HA12eD†=€zmˆˆˆcT1I‰B+‰DTz‰PœSPXABNExlTMw˜4DME2J•B+‰K2…•D†n‰48ˆ0c˜wFX€q˜†eœ0DAu†EˆuclnOBeˆ02HAuBmxlclDS4eˆcc4AuH—Ii€q˜†Kœux2J•BASj2+mˆ…D†JH0cxXDAˆEDmc4JGN1I‰B+‰DT…PTœSHj0†TXx†MœlKˆugZD˜jXœ0B+•†1J0x2KBsJuclnSPHIA†Zx0BqœOcjI˜jTœux2J•BASjm+mcˆI0wu0SH€Ju†Tˆ•†1JAKDˆuP‘Imcrœ˜jI09TX+GK+‰DTˆ•†MˆGB1ˆ0BAwScNclˆjuHEœ•4XˆHjO+•†1J0x2K˜wsJuclJSPenlK‘x0BAwScNclˆœux2J•BA•Km+mcZ+OJHwB…€D‰4jA1c…I‰Mun0BlJu†Tˆ•†1JAKeJ0PEIOMGœ04…DuEH+l2€x‰†Mw9TZ0‰E2J•B+‰KBz‰HœSPZDOˆXIlB8œ˜NˆœSH‘+0ˆXI‰4MœugˆzTZw˜2EI‰jœ˜†3ˆSg‘n0jZœu2w˜wuˆ•E2J•B+‰KBz‰HOœSPZDOˆXIlB8œ˜NˆœSH‘+0ˆXI‰4MœugˆzSHf+OˆEI‰jœ˜†3ˆSg‘n0jXxlTnw˜wuˆ•E2J•B+‰KBz‰PœSHn‰4XwMGœ0E4…uHXA1K+‰DTˆ•†MKl†qxuPEœ0g…œ˜xIzSH€wADEœMZ•+•†1J0x2KM‰sABfw˜PIœTfD•H+‰DTˆ•†MKADqˆuPEIcjJœ9ˆ2K˜PGDOˆfxA‰‘œO2sDuPunAK+‰DTˆ•†MKAKqxuPXI‰†Sœ0jNA˜4HwBKfœME+•†1J0x2KM†OAxfœ0†I‰˜4u+‰K‘ˆHj‰œ…OxSEHwSg+‰DTˆ•†M+lxeJ0PEIcjJœ9ˆ2K˜HXD†NXISgˆ+•†1J0x2KM†OAHBfœ0†I‰˜4u+‰KZœmxJIOcIJ‰E2J•B+‰K2zMHTœSHj0†TXx†MœO24+˜Psw˜ˆXœ0B+•†1J0x2KM†PA‰Bfw˜Hˆ…uEu0AxXwH‘œ9cI0˜EHwAxXxlBˆ+•†1J0x2KM†PAcBfœ0=HK9T4D0jXwH‘œ9cI0˜EHwAxXxlBˆ+•†1J0x2KM†PAlxfœ…OxSPHD+g€xj—œSPJ‰E2J•B+‰K2z‰PTœSPwSP€xlMOœ9Dˆu4H0†c+‰DTˆ•†M+ljD‰0PEIcjJœ9ˆ2K˜gsDmDZœmxJœ˜†4œSHj0lD+‰DTˆ•†M+ADqˆuPXw˜g…œ0PZzSHGw‰NEœ†€ˆuJsK2IcONu0A2GˆGcˆIc=u+GˆZDAxeDG‰Ox0nHA9†+DAcPˆ•DjJ0x2J•B+u†FJ0DEcmT0MjH+‰x3xS—sz˜4ˆcGKD0gj‰Acˆw0nuAFEcDcjHˆ0K—+mBIˆ+X„IglIOD†IATZˆ0Bœ+El+9cHcGNxcw•x‰gAug†n‰2sxug+‰DTˆ•†1œuxK+B2‘nu•P…uDPJˆ†K•PXn•N+w˜—sD˜wu0†DIDX€xmc‘w0—H00‰uD02PJGcIAJHAFE=D0g9xDjJ0x2J•B+u†‘xDjJ0x2J•2OˆBx3wuBlA0xIœ†ˆH0AD+w˜—sD˜xN…†nH0†NIœ˜2f‰0g3KOKXˆcxqx†j9clT1I‰B+‰DFD•DjJ0x2J•B+‰DTˆ•j—‰SgN0MH•‰˜H˜IH†XqljNKHˆGnDœSBlDlx0BBnA20Dcjn0S4œ†B+•IuMscmcˆ…m†€0†D€D•DjJ0x2J•B+‰DTˆuDEcmT0MjH+‰N+z0KlcAx1I‰B+‰DFq‰Dœux2J•BA9†‘w‰DjJ0x2J•B+u†Mœl‰H+˜4jw0jXwH‘œ9cIc‰E2J•B+‰DTw‰†BJxˆ0Mj=n†DTˆ•j—ˆON2Ku4HˆMx0œ†jn+0wuABwGD0B†A1‰•+G‰H0m2KDlB1+1‰Hw‰c†AH…PISc†ql2œux2J•B+‰D‘ˆHB—JSNmœ‰ˆ•+‰DTIuc‰K0xNcG‰Z0†xœ˜DjK˜g•nSˆXw1KuœSxsœS4f0KEœ•†SœSH‘‰m‰HA12qDAwsx‰DjJ0x2J•B+u†FJ0D9K†ˆcGT+‰D+DMHjJTœ†2X0m20z‰†eˆAx€3uBœE†JOc†cuK€AuBIFE†n0N—ISEu0ADfxSM•+•†1J0x2J•B4+‰cFxH†n+SN‰•B+N€z‰†9œ9cKHˆf0†N2ˆG‰OxcJHw12SDAKDAcI…†MHw‰D—DAc4K0c†‰G†8ˆ0‰PwSx‘ˆ•†1J0x2Jug‰‰NFI˜DEKK2J•B€0N0zc†n‰T…mKncwH…Bjlˆ˜4mI‰KExAc—œ˜†4ISguD˜ˆfw‰†uœ0j2+˜PHDmDEœ1xw˜ZOc9ˆu+ljXI†jnIOˆˆ…uEHA92EwmˆuœŸHA˜j+‰4EI0gsœOKˆS4ZD9ˆfˆO2fœ˜E‘zSPHDcTEœ†=‘œSxsœSgswmxfxSMOIOc2K˜H‘A˜ˆfœ0g‰xˆ2zSH8+‰NfxAnGœ0ZOnTXDHKZœ˜—‘IOc2K˜PwSPXImn‘œOKˆS4jAMKZœ˜—‘œ0j2œSHX00jEœTO+•†1J0x2J•B4+‰cFzcjn‰mBmœAK00•PxS29cSNI‰KEI‰jMœ˜†ZuguDcKXœA‰H…˜DfcSZODO†DD0BAz1ˆ…‰uZHœOBDc††Dmcz‰…HnS•D‰Z€I1c‘KOˆ1I‰B+‰DTˆ•EjJBKuNPnmDz†BcmKˆ…†ˆOˆMxXxS2jK9TX+SP‘wmn‘œ0†ZxS4=DO2Xx†…œ9c…ISEuDNEˆuM„+•†1J0x2J•B4+u„+•†1J0x2+M—400H„wB†PJSHcGc8ˆMxXxS2jJj…S4O0†DIucMKlD2JH—HAcDOˆ•j—ˆO†…J•B€ˆcK2w•†1‰SE0Mj=ˆMxXxS28…9†DKMBZJu†Tˆ•†1Jmx1I‰B+‰DTˆ•†1J0x3+B2‘ncNDxBTEKSEˆœ1†rn‰x0wu21ˆu†NcGcOˆBNKˆu…Gˆ9TmKHc+NzM†1‰mcD‰•B€ˆ‰K2ˆ•j—IO†2JH2€ˆBN3I˜K9œ9ˆI‰†ZAOx‘ˆ•†1J0x2J•B+‰N3œ˜K—c†I‰—ZnuP0œMgOœux2J•Bˆ†B‘+•†1J0x2JGN4+ux‘ˆ•†1J0x2Jug‰‰wHI˜2lc0wH0D+Dc€zmcsxc—H0lB‘D029‰1cœcˆ1I‰B+‰DTˆ•EjJBIKHˆr0l†MIO‰•DuHGABKXx02JœSH‘c˜4•DS2‘x2fISx2+˜4fœ•4fœAx‰œSH‘c˜EH+GDZœ1x‰œ˜E3+˜48DHTExAc—œ˜†4IS4G0+gXxcjc+•†1J0x2J•B4+‰cFxH†n+SN‰•B+x+…0DEKmTNcG†H+‰xXx0K9cSPI0M†Dl2H‰mcˆw0iuAFE—DAˆjA1c‘z‰—HDOc•DlT†…mˆIˆAŸODO†DDcscmc……„HA˜uDlM€wm‰uˆc…•DMD1D0g4+Gˆ…cG…Hn0c…DAKDAcI+••HDOc‰DlŸsˆm‰•+G‰u+Gn€DAwsxAc…I‰MHw‰…GDAc4KAwOz‰•HœO†FDAxHx1cZˆA—u0S‰ZD†jlGc…I‰MHDMXHDc€xmˆ…cG…H00†OD†jlGc‘z‰=HwBx2DlŸun•DjJ0x2J•B+u†FJ0DEcmT0MjH+‰x3xS—sz˜4ˆcGKD0gj‰Acˆw0nuAFEcDcjHˆ0K—+mBIˆ+X„IglIOD†IATZˆ0Bœ+El+9cHcGNxcw•x‰gAug†n‰2sxug+‰DTˆ•†1œuxK+B2‘nu•P…uDPJˆ†K•PXn•N+w˜—sD˜wu0†DIDX€xmc‘w0—H00‰uD02PJGcIAJHAFE=D0g9xDjJ0x2J•B+u†‘xDjJ0x2J•2OˆBx3wuBlA0xIœ†ˆH0AD+w˜—sD˜xm…uKZn•x0c0—4+TI…SŽZ+•D+IuKn+SNKu4unS=Zz‰HMJlT1I‰B+‰DFD•DjJ0x2J•B+‰DTˆ•j—ASjmœcˆXnS4qw˜cEc0xJ‰•B€ˆMx=w˜DP…FEm…PP0†x0xc‰sœ1ˆI‰uxZAOx‘ˆ•†1J0x2J•B+‰N3œ˜K—c†I‰B€ˆMx=w˜DP…FEm…uKZn•xcœ•H‰JlD2Ku4HˆMNII˜21ˆuEm…PP0†x0xc‰sœ1ˆIcD„0B…„z‰EAxuxNcG‰Zˆ˜H˜w•E1‰jˆ…•jX0†wHc˜Bnw˜4lz2+HDOˆuBlDATœ‰ˆG+•D+z†G+S4IcGc‰ncNZœBxrKSK…z†ZAMDTIHj—c†ˆ0B2Znm—•wMgOœux2J•Bˆ†B‘+•†1J0x2JGN4+ux‘ˆ•†1J0x2Jug‰‰wHI˜2lc0wH0D+D02†œAcsxc—H0lB‘D029‰1cœcˆ1I‰B+‰DTˆ•EjJBIKHˆr0l†MIO‰•DuHGABKXx02JœSH‘c˜48DHT‘x2fISx2+˜4fœ•4fœAx‰œSH‘c˜EH+GDZœ1x‰œ˜E3+˜4•DS2ExAc—œ˜†4IS4G0+gXxcjc+•†1J0x2J•B4+‰cFxH†n+SN‰•B+x+…0DEKmTNcG†H+‰xXx0K9cSPI0M†Dl2H‰mcˆw0iuAFE—DAˆjA1c‘z‰—HDOc•DlT†…mˆIˆAŸODO†DDcscmc……„HA˜uDlM€wm‰uˆc…•DMD1D0g4+Gˆ…cG…Hn0c…DAKDAcI+••HDOc‰DlŸsˆm‰•+G‰u+Gn€DAwsxAc…I‰MHw‰…GDAc4KAwOz‰•HœO†FDAxHx1cZˆA—u0S‰ZD†jlGc…I‰MHDMXHDc€xmˆ…cG…H00†OD†jlGc‘z‰=HwBx2DlŸun•DjJ0x2J•B+u†FJ0DEcmT0MjH+‰x3xS—sz˜4ˆcGKD0gj‰Acˆw0nuAFEcDcjHˆ0K—+mBIˆ+X„IglIOD†IATZˆ0Bœ+El+9cHcGNxcw•x‰gAug†n‰2sxug+‰DTˆ•†1œuxK+B2‘nu•P…uDPJˆ†K•PXn•N+w˜—sD˜wu0†DIDX€xmc‘w0—H00‰uD02PJGcIAJHAFE=D0g9xDjJ0x2J•B+u†‘xDjJ0x2J•2OˆBx3wuBlA0xIœ†ˆH0AD+w˜—sD˜xm…uKZn•x0c0—Zz˜4Iœ†B‘+x+…0DEKmTNcG†H‰BK2x•H1I•E2J•B+‰NG+•†1J0x2J•B+‰DTIu…sA†IcHˆHcA2XD†jAJA†2JH—Zn‰xXz4‰Dljˆ…•jX0†wHc˜Bnw˜4JuXOJu†Tˆ•†1J0x2J•BnuH0…˜Kn+c2JH—Zn‰xXz4‰Dlj…S4O0†D=w˜2f‰m2ˆcOx‘+NqISDEcS4œMPZˆ0H0nH˜…9T…cMcOAMDFw˜2f‰m2ˆcOx‘+NqISDEcS4œMPZˆ0H0nH0…9ˆDI0EGAcKTw•†9œ9c+Bj=nDIu…sA†IcHˆHcA2XD†j0wONn‰GNP+HDOˆ•j9‰mBmœ‰nZncwPx‰E‰w•E2J•B+‰ŽZ+•DjJ0x2J•Bu+u†‘+•†1J0x2J•B4+‰cFxc†l…042AHxKIucAD˜€nAx€ˆcxw‰glz˜=€cGcX‰0g+‰DTˆ•†1œuxKKH2XnG2DˆGc…x‰iHw…ZD02Ezm‰Hw‰‰HA˜†•D†j†…1J•J•—H0mˆ1DAcH…1‰Hw‰‰HA˜†DZuDAcIJH—HnB0D††eœGcsxc—H0lB‘D029‰1cœcˆ1I‰B+‰DTˆ•EjJBmK•ˆP0cwZˆ•†1‰SE0Mj=ˆMxXxS2jJTœ†2X0m20z‰†enAx€ˆcxw‰gjuŽ€ˆ0gj3uBDˆuc†DO2†ncN•x0HnxMi€q˜jec•PXˆc…PIScAD9cHnlˆ43ucfIOceJ0xHn‰Ejx04xFElœS€ˆ‰DHˆcxAIg†DuX€n0Kf3uc1x0cjxlˆHˆA†sxc…•ˆ•gNˆOJ€ˆ0B=AsX„IgNA0x†ˆAxsˆ0Bnx9cE09Keœcˆu3H…•ˆ•g†JOc†cHTs3u4xFEl+lDeœcˆu3uBDI0cNcS†en0cfJ0g+‰DTˆ•†1œuxK+MjXˆMN0z02jJS†…m†G0†x˜x‰†en‰†€AHxœEju4ecu2fœ†2PˆBxnxˆ2zS4ZAMN‘xMEnœ0†ZxS4=DO2Xx†…œ9c…ISEuDNEˆuM„+•†1J0x2J•B4+‰cF…˜B—+ˆ…•H‰†N=I†jnJmTNcG†H+‰gEc0H†Ilˆs3uBœ+El+9cHcGNxcw•x‰gAug†n‰2sxug+‰DTˆ•†1œOB…xug+‰DTˆuD—cS†Ku48+‰xI…02EAmTNcG†H+‰Nq…uBnJS4+KGGnS†IHj—c†ˆ0B2Znm—•q‰H8Jlx‰0g+‰DTˆucOœux2J•B+‰DTˆ•†1‰jˆ…•jX0†wHc˜Bnw˜42K1T+N+œuBnAlKJœP8nuH0œ˜2XAT†œcc‘+HKG+•†1J0x2J•B+‰DFzcjn‰mBmœAK+N+œuBnAlKJœ„GncNFœME9œ9c+Bj=nDIu…sA†IcHˆHcA2XD†j0wOxn‰GNP+HDOˆ•H8Jlx…Ku4HˆMNII˜21ˆuEm…PP0†x0xc‰sœ1ˆIcDO0B…„z‰EAxuxNcG‰Zˆ˜H˜w•E1‰jˆ…•jX0†wHc˜Bnw˜4lzˆ+HDOˆ•j9‰mBmœ‰nZncwPx‰E‰w•E2J•B+‰ŽZ+•DjJ0x2J•Bu+u†‘+•†1J0x2J•B4+‰cFxc†l…042AHxKIucAD˜€nAx€ˆcxw‰glz˜=€cGcX‰0g+‰DTˆ•†1œuxKKH2XnG2DˆGc…x‰iHw…ZD02Ezm‰Hw‰‰HA˜†•D†j†…1J•J•—H0mˆ1DAcH…1‰Hw‰‰HA˜†…DZuDAcIJH—un‰wsD††eœGcsxc—H0lB‘D029‰1cœcˆ1I‰B+‰DTˆ•EjJBmK•ˆP0cwZˆ•†1‰SE0Mj=ˆMxXxS2jJTœ†2X0m20z‰†enAx€ˆcxw‰gjuŽ€ˆ0gj3uBDˆuc†DO2†ncN•x0HnxMi€q˜jec•PXˆc…PIScAD9cHnlˆ43ucfIOceJ0xHn‰Ejx04xFElœS€ˆ‰DHˆcxAIg†DuX€n0Kf3uc1x0cjxlˆHˆA†sxc…•ˆ•gNˆOJ€ˆ0B=AsX„IgNA0x†ˆAxsˆ0Bnx9cE09Keœcˆu3H…•ˆ•g†JOc†cHTs3u4xFEl+lDeœcˆu3uBDI0cNcS†en0cfJ0g+‰DTˆ•†1œuxK+MjXˆMN0z02jJS†…m†G0†x˜x‰†en‰†€AHxœEju4ecu2fœ†2PˆBxnxˆ2zS4ZAMN‘xMEnœ0†ZxS4=DO2Xx†…œ9c…ISEuDNEˆuM„+•†1J0x2J•B4+‰cF…˜B—+ˆ…•H‰†N=I†jnJmTNcG†H+‰gEc0H†Ilˆs3uBœ+El+9cHcGNxcw•x‰gAug†n‰2sxug+‰DTˆ•†1œOB…xug+‰DTˆuD—cS†Ku48+‰xI…02EAmTNcG†H+‰Nq…uBnJS400MB‘+x+…0DEKmTNcG†H‰BK2x•H1I•E2J•B+‰NG+•†1J0x2J•B+‰DTIu…sA†IcHˆHcA2XD†jAJA†2JH—Zn‰xXz4‰Dljˆ…•jX0†wHc˜Bnw˜4JuXOJu†Tˆ•†1J0x2J•BnuH0…˜Kn+c2JH—Zn‰xXz4‰Dlj…S4O0†D=w˜2f‰m2ˆcOx‘+NqISDEcS4œMPZˆ0H0nH˜…9ˆDI0EG+‰xXx0K—0SNJux€nG2qzcjlccc…SZu0†ˆGzBNA…9†DKMBZAMxXx0K—0SNJux€nG2qzcjlccc…SZu0†ˆGxHNAq9†‰OxA‰DOˆ•j9‰mBmœ‰nZncwPx‰E‰w•E2J•B+‰ŽZ+•DjJ0x2J•Bu+u†‘+•†1J0x2J•B4+‰gl3uxec•ˆjˆ0BIFElIuNeI+E€3Hx˜w˜cNcuŽ€n0DsAsX„Igl‰9BHn0Djˆcxmw‰gl‰9—€I+E€3Hx˜w˜cNcuŽ€n0DsAHx€IMgN+Sj†n0Djˆ0B0I‰B‘ˆ•†1J0x2JugDlTN+1cZzl…HA˜†•D‰4jAmˆ2AGHw9†3DAˆEDmc4JGŽODO†DD0BNJGcZDS…u+uBFDZuc1cˆcuZHDS•uDlB1q1ˆ3G…HA1—‘DAcAœuMscmcI0BjXnSP‰œ04sœSHGDcNux†rœ˜=•A˜HXnK€xEMœ˜NN0˜EHD†Tfœ•†B…HHc•PG3uBˆwE†w9cHn0xuJ0g+‰DTˆ•†1œuxK+M2=nuH˜xM†1J0EKHn•ˆMDFzSK—+Tœ0DDlTN+1cZzl…H00B˜D0MuD‰DjJ0x2J•B+u†FJ0DEcmT0MjH+‰x3xS—sz˜4ˆcGKD0gj‰Acˆw0nuAFEcDcjHˆ0K—+mBIˆ+X„IglIOD†IATZˆ0Bœ+El+9cHcGNxcw•x‰gAug†n‰2sxug+‰DTˆ•†1œuxK+B2‘nu•P…uDPJˆ†K•PXn•N+w˜—sD˜wu0†DIDX€xmc‘w0—H00‰uD02PJGcIAJHAFE=D0g9xDjJ0x2J•B+u†‘xDjJ0x2J•2OˆBx3wuBlA0xIœ†ˆH0AD+w˜—sD˜xNcGcOˆBN+ccjnI1TJH—Z0†N=…MEKœux2J•Bˆlx‘ˆ•†1J0x2J•B+‰xXœ‰†1ˆuEKuNZnOZ3uB9KjKcH2j‰G20Dc†Eq0NmœcB‘+HDXD•DjJ0x2J•B+‰DTˆ•†1J0x2JH28n†xKˆHTAJ0PˆcH2j+‰…4z†1nOc3+B2‘ncNDxBTXq0EI0BjZ0A2cx‰jPJjNKHˆGnDFI˜2AJS†mœA†=0xqI˜…G‰0x…c•c‰cc+JHŽZœMgcK†ˆc01B+K†x˜‰0x…‰GBXnO†Fx˜…snux3zAK€ˆMx0D˜KMw•E2J•B+‰DTˆ•†1J0x2J•B0†N=œB†PˆuEˆ…mB€AMDTIu—GcmTm+BnZAMDTIuDEcmT0MjH01DII˜DjIGx1I‰B+‰DTˆ•†1J0x2J•B+‰xXœ‰†1ˆuEmœcnZˆBN3xcŽG0SNmI‰‰P‰BKTw˜cOœux2J•B+‰DTˆ•†1J0x2J•B+‰DTˆuK9I9†…uDnSH0…•†BcmKˆ…†ˆOˆMxXxS2jI9T0M2Gnm2+œME1+Ax2J•†G+‰D+xSKn‰x0BBZ+HKG+•†1J0x2J•B+‰DTˆ•†1J0xS‰0g+‰DTˆ•†1J0x2J•B+‰DFzcjn‰mBmœAKˆMN3…cj‰w•E2J•B+‰DTˆ•†1Jm†1I‰B+‰DTˆ•†1J0xIcONr0†NG+•†1J0x2J•B+‰DTˆ•†1J0x3+B2‘ncNDxBTEKSEˆœ1†rn‰x0wu21ˆu†NcGcOˆBNKˆuK9cmKJ•B€ˆMx0D˜K1+lTexug+‰DTˆ•†1J0x2+1T+‰DTˆ•†1J0x2J•2P0†N+…0DED˜x+M=40†KG+•†1J0x2+1TJu†Tˆ•†1JlˆI0g+‰DTˆ•†1JlB2AuB8ˆ•gN…0€nc†s3HxKw9cNnu†lKSEˆIOKXˆcx3x††n+SXu+SHND0gHˆmˆ…D†JH0cxXDl2ecDjJ0x2J•B+u†Mœ92‘œSg‘DBN€x0gIIBj9+4I0˜4jnm2˜zcjen‰j8ˆ0†MxScj3uX€c•ˆZˆc…•wScNcuNOœux2J•B+‰D‘ˆHB—+S4+BˆPnS†FI0—sqlDIc•ˆHJu†Tˆ•†1J0xI‰2TˆMx=z0—Gˆ9j2Kcn•0A20xuK9œ9ˆI‰KZœMjfœO—uuHjw9ˆXI1xsœ9ˆ2A˜4HA˜j€xmˆ—œ0xNqME2J•B+‰DTw‰EjqME2J•B+‰NF…c†Ez9Tˆz‰2EˆBwHISK9œ9ˆI‰2‘0cNqJ†j9+4I0˜4jnm2˜zcj1ˆOT1I‰B+‰DFD•DjJ0x2J•B+‰DTˆuBl00g2‰H2P0†NDˆHTAJ0EKuNZnOZ3H†l‰S†n…•P‘0†x„w•E1+TcHcnxXzSK1JlKˆ‰•†Z+HNG+•†1J0x2J•B+‰DTˆ•†1J0xmœcnZˆBN3x‰†90SN+MPXAOx‘ˆ•†1J0x2J•B+‰ŽZ+•DjJ0x2J•B+‰DTˆHjEql†JH2Z‰BxqxSKlDATJH2P0†NDwMgPJ0ENc1KOAO†TIuBA…9K09D+‰DTˆ•†1J0x2J•B+‰DTˆuBl00x+M„ZnuPFxSDPˆuEmœcˆrcO†+wM4‰KSK…J•Bf0cx+I0MscmcˆœA†=nuHKœE‰D9x09D+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2JGNuD0g4+H†l‰S†A…†nH00•PI˜DEc˜guwBTXI˜Bnœl…H0˜gswmxfxSMOIOc…wTHD0j‘wB‰œOˆZ‰˜4=ncNEwGcc+•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰D+…˜B9œ9j…c1c=0x3ˆS…sI˜4KOx‘+0HXxBjAJjI0BB0A—PxM4EKcI+MjuncxKxc†l‰S†N…†nH00•PI˜DE‰lˆ…I•ˆ€00EXA†2A+lTexug+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0xm…NX0†NTœ•HAIGx1I‰B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J†I0B—4nu••ˆuK—+mBIc9D+‰DTˆ•†1J0x2J•B+‰DTˆuˆKœux2J•B+‰DTˆ•†—…ME2J•B+‰DTˆ•†1J†I0B—4nu••ˆHjEKDm…†‰OJu†Tˆ•†1Jm†1ˆug+‰DTˆ•4PœOB1I‰B+‰DTˆ•EjK9T+‰KXI1xZIBj9+4I0˜4jnm2˜zcjeIcjEx0B…œEj3uX€c•ˆZˆ0BrœBB‘ˆ•†1J0x2Jug‰‰N3œ˜K—c†I‰2jnm—PwHjlKc1I‰B+‰DTˆ•EjJBKuNPnmDz†BcmKˆ…†ˆOˆMxXxS2jK9TX+SP‘wmn‘œ0†ZxS4=DO2Xx†…œ9c…ISEuDNEˆuM„+•†1J0x2J•B4+u„+•†1J0x2+M—400H„wB†PJSHcGc8ˆMxXxS2jJNcuZZ‰cx+Ic…scmcˆœA†=nuHKœ•EKœux2J•Bˆlx‘ˆ•†1J0x2J•B+‰xXœ‰E1K0Emœcˆr+‰JZˆ•j—‰SgN0MH•‰˜H˜IH†XqljNKHˆGnDI0Bl…042KONZnGDKˆ•4lK0†‰uZOJu†Tˆ•†1J0x2J•B+‰DTˆ•†—+S4+BˆPnS†Fœc†lz9jIc9D+‰DTˆ•†1J0x2J•—PJux‘ˆ•†1J0x2J•B+‰D+xSK9I˜4mœH‰BDFn†N‰w•E2J•B+‰DTˆ•†1JSH…•†‘+x€qcsqABœ†B‘+N3œ˜DPIGx2JH2Z‰˜jTD•†1‰T…‰GTZˆlx‘ˆ•†1J0x2J•B+‰DTˆ•†1JTII‰B‘nGD+z0D9qljJH2P0†Nqnj9IOKDcmTG+‰DIBj9+2I0˜4jnm2˜zcj1nOT2K1ŸP‰BDFœc†lz9jI‰•BE+S†FzSK—+x…•H‘+N3œ˜…4wuEN‰GT„0BDOˆ•=sAˆ‰GKf+HDTqcT‰…˜xDJ0g+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x3Ic†nGD+z0D9qljJH2P0†Nqnj9IOKDcmTG+‰Dmx4jnOT2K1KA‰DTœ‰jjJjc•jrˆMN2œ•j—+S4m…lD€nc…ZzBNAxux…cMcZ+‰JZq‰†1nGˆ3z0ZOJu†Tˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B€nmD+œHjn+jl…AT‰BDFzSKl+j+M†‘+N3œ˜…4wuEN‰GT„0BDOˆ•H1xOKD‰uXOJu†Tˆ•†1J0x2J•B+‰DTˆ•†—…ME2J•B+‰DTˆ•†1Jm†1I‰B+‰DTˆ•†1J0xNcH†+•xqxSKlDATJH2uˆMx=œ˜DfAlTJIBZˆlx‘ˆ•†1J0x2J•B+‰DTˆ•†1J0EKGBO+‰JZˆHsqABœ†B‘+wP…˜B9c†mz0X€AcDT•†1‰ˆKuNXnuPqnH0…˜xeI‰B€nmD+œHjn+jlz2AOx‘ˆ•†1J0x2J•B+‰DTˆ•†1Jlˆ…3u†Hxc†ql2H‰GKHx0•Oœ‰gjxlTeI+E€3Hx˜w˜cNzS4Kœux2J•B+‰DTˆ•†1J0x2J•B€ˆMx=w˜DP…FEˆcH2j01DqœHjlz9DJuDncw4œM†—AS4J•BfA˜†+…˜2nJlTexug+‰DTˆ•†1J0x2J•B+‰DFzS29cS4mJux„+HKG+•†1J0x2J•B+‰DTˆ•†1J0xmœcnZˆBN3x‰†—‰†cH‰OJu†Tˆ•†1J0x2J•Bˆ†B‘ˆ•†1J0x2J•B+‰N3œ˜K—c†I‰2E0cx„z†j‰w•E2J•B+‰ŽZ+•DjJ0x2J•Bu+u†‘+•†1J0x2J•B4+‰g†JOc†c•NH3u‰Oœ0clx0HHcON83HwHœ˜cAD˜†Hˆ0B=AHxI•gNˆuŽ€ˆ‰DH‰0g+‰DTˆ•†1œuxK+M2=nuH˜xM†1J0E†J•2ZnSP+œB=sc†2Auc1x0c†n0N—IS4f0KEœ•†m+•†1J0x2J•B4+‰cFxH†n+SN‰•B+N€ˆuBlDATIcuKXnu†MœSxsœSPEœH—•Dc=s‰Ac4J•N1I‰B+‰DTˆ•EjJBmK•ˆP0cwZˆ•†1‰ccGBj0†N2ˆuBlDATIcuKXnu†MœOnHDuPHDmDfˆO2fœ˜ŽOxSPEœHKEwE—œ04K9ˆu+ljZxAc8œO24c˜EHA˜g„DGxPAAcˆc•—u+Gn•DAc4KAcZz‰MHnDJDc†1q1c…œ0nHw˜†uAcB‘ˆ•†1J0x2Jug‰‰NFI˜DEKK2J•B€0N0zc†n‰T…mKncwH…Bjlˆ˜4mI‰K‘xm‰Oœ‰u…u4Z+2EwE—œSxsœS4=DOˆfœ0g‰w˜ZOc9TEwBKEœ1xw˜4Oˆu+ljXI†jnIOˆˆ…uEHA92EwmˆuœŸH+‰E2J•B+‰DTw‰†BJ†I0B—4nu••ˆH†EqlˆKHˆ=nS†Mœ0†3K˜4jwFg‘xmc‰œ˜•HDATmœ†ˆXDGxPAAcN‰OŽuABDXD0g4nmcˆˆAnHn†1D02jD1c…3uŽHœ•xuJu†Tˆ•†1J0xI‰2TˆMx=z0—Gˆ9j2Kcn•0A20xuK9œ9ˆI‰KZœMjfœO—uuHjw9ˆXI1xsœ9ˆ2A˜4HA˜j€xmˆ—œ0xNqME2J•B+‰DTw‰EjqME2J•B+‰NF…c†Ez9Tˆz‰2EˆBwHISK9œ9ˆI‰28nxXISBPˆuE†JOx+N€w•†1‰ccGBj0†N2q‰HAxux3KH—4nuH˜…˜BlqlcJcMBZJu†Tˆ•†1Jmx1I‰B+‰DTˆ•†1J0x3KG‰4n†x3œ˜DjJA†2JH2HˆBw4Icjn+ANDc1N„Au†+x0Kl…0†I0MOJu†Tˆ•†1J0x2J•B+x+…0DEKmTNcG†H+‰JZˆ•j9‰mBmœ‰nZncwPxcTMK+gDc˜g€0N0zc†n‰T…mJOJu†Tˆ•†1J0x2J•B+wH…02AJA†2KMMOJu†Tˆ•†1J0x2J•B0w„ˆucOœux2J•B+‰DTˆ•†1J0x2J•B€ˆMx=w˜DP…FEˆcH2j01DqœHjlz9DJ•jZnSPF…0K1JmTˆ0MB+Nˆ•j—Iu†c9D+‰DTˆ•†1J0x2J•B+‰DTˆ•j9DAB‰ODsAOx‘ˆ•†1J0x2J•B+‰DTˆ•†1JTII‰B‘+wH…02l+S4mIwP+wH…02Aœ1x1I‰B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1JS†mœcˆ=nljG+•†1J0x2J•B+‰DTˆ•†1J0xS‰0g+‰DTˆ•†1J0x2+1T+‰DTˆ•†1J0x2J•—Gn‰xXwHjAˆuEœ†ˆ•00H0zcTj‰ccGTZAOx‘ˆ•†1J0x2J•B+‰N3œ˜K—c†I‰—ZnuP0œMgOœux2J•Bˆ†B‘+•†1J0x2JGN4+ux‘ˆ•†1J0x2JugDu…Gcˆ3HwHnxJD02EcmcˆI‰wuA1ˆ‘DAJu+MDjJ0x2J•B+u†FJ0DEcmT0MjH+‰x˜z0DEKmc2KJGncx+…˜B1xuxNKHˆZ0m2=…BNAK˜guDcKXœA‰Oœ9Dˆu4H0†Nfœ0g‰œ92s…u4€œOjZwAc8xˆ2zS480†N€x†GIOc…wS4DFgfxMET+•†1J0x2J•B4+‰cF…˜B—+ˆ…•H‰†N=I†jnJmTNcG†H+‰gEc0H†Ilˆs3uBœ+El+9cHcGNxcw•x‰gAug†n‰2sxug+‰DTˆ•†1œOB…xug+‰DTˆuD—cS†Ku48+‰xI…02EAmTNcG†H+‰NqISDEcS4œMPZˆ0Hcœ•EKœux2J•Bˆlx‘ˆ•†1J0x2J•B+‰D+zcjnA0xJ‰•B€ˆMx=w˜DP…FEˆcH2j01DqœHjlz9DJ•=Gn†DFzSBnw˜42I0XOJu†Tˆ•†1J0x2J•B+x˜z0DjJA†2KKAOx‘ˆ•†1J0x2J•B+‰xXœ‰†1I˜j…HˆHˆMDIuDEcjc1KO+HNG+•†1J0x2J•B+‰DTˆ•†1J0xIœA†P0†x˜ISB1J0g3+MjXnO†FI˜DPJ0Eœ‰ˆGˆBxcw˜cOœux2J•B+‰DTˆ•†1J0x2J•B+‰DTˆuBl00gm+MjX0mMPxB†n‰SjNJuxfA9†=nHj1wOT†JuNm0DGwMj1q˜P…J•B€ˆ˜H˜wuKlclD2JH2•0cN+ISB9cj‰uZOJu†Tˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆuBl00gˆ…m4nSPKœ•j9…0NK•P‘0†NDwBT8…9j09D+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x3K•ˆPnu†Tq‰†˜w•E2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2JH2•0cN+ISB9cjlzˆAMB‘ˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•j9…0NK•P‘0†NqnHX…9D1I‰B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†˜…1x1I‰B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†9+†Ic•ˆsAOx‘ˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†—…ME2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†—…ME2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†—ccm…†nZ+•D+xB†n‰SjNKHˆr+HKG+•†1J0x2J•B+‰DTˆ•†1J0xS‰0g+‰DTˆ•†1J0x2+1T+‰DTˆ•†1J0x2J•2Z0S†TœHjl…lx+˜E‘+x˜z0DjIOT†xug+‰DTˆ•†1J0x2J•B+‰DF…˜B—+ˆz‰2H0†NmˆH2nI˜jI0M—ZncwPx‰E1ˆSg8wSˆXImcœ9Dˆu4H0†NXw•4sœ9—OIS4ZAMN‘xMEnxˆ3œuP…œ04•n•x„x†j9c0g3zDfAMDTIuDEcj‰uXOJu†Tˆ•†1J0x2J•Bˆ†B‘ˆ•†1J0x2J•B+‰N3œ˜K—c†I‰B€0cN3z‰gOœux2J•Bˆ†B‘+•†1J0x2JGN4+ux‘ˆ•†1J0x2JugDu…Gcˆ3HwHnAˆ3Dcsc1‰•œ‰Hw9†GDc€…•DjJ0x2J•B+u†FJ0DEcmT0MjH+‰Nq…˜DEœ9cIxug+‰DTˆ•†1œuxK+B2‘nu•P…uDPJˆ†K•PXn•N+w˜—sD˜wu0†DIDX€xmc‘w0—H00‰uD02PJGcIAJHAFE=D0g9xDjJ0x2J•B+u†‘xDjJ0x2J•2OˆBx3wuBlA0xIœ†ˆH0AD+w˜—sD˜xˆcGc€nu•PwBj˜0S4mœPZnm—•œ•EKœux2J•Bˆlx‘ˆ•†1J0x2J•B+‰D+zcjnA0xJ‰•B€ˆMx=w˜DP…FEˆcH2j01DqœHjlz9DJuKf0†N+xuDEqlx2+MjuA˜H3…0Blz˜E…œ†jXnuPqw˜—sD9cmœcˆG0†x˜z†jAnOTexug+‰DTˆ•†1J0x2+MjXˆMN0z02jJ0EmœcˆrcOjFˆMgOœux2J•Bˆ†B‘+•†1J0x2JGN4+ux‘ˆ•†1J0x2JugDu…Gcˆ3Hx‰c•ˆ8DcjPxGcI…B1I‰B+‰DTˆ•EjJBmœcnZˆBN3x‰†—AmTmœ04H0x‘ˆ•†1J0x2Jug‰‰N+œuDEqADmz‰2˜ˆ‰xqœ˜D—‰T…mKD†jA0mˆ3OnHœOBDc††Dmcz‰…HnS•D‰Z€I1c‘KOˆ1I‰B+‰DTˆ•EjœOˆ1I‰B+‰DFxuKl+DNc•H0SP0xcG‰T…mKn†x˜IE1I•E2J•B+‰NG+•†1J0x2J•B+‰DTIuDEcj2K1T+N+œuBnAlKJœ‰ˆ€00ZPzSB9cDJuxf0A2˜…M†1qlj†0MHu0A2„I˜…GAlˆœcnZA1DwH†lD9x……ˆ€0N3œ˜…GA0Pc9D+‰DTˆ•†1J0x2J•2P0†N+…0DED˜x3+MjXnGBGxHN‰w•E2J•B+‰ŽZ+•DjJ0x2J•Bu+u†‘+•†1J0x2J•B4+‰gN+lBHcON8xug+‰DTˆ•†1œuxK+M2=nuH˜xM†1‰D…P=nnPIuBn+0xm…H2PncwHœ†e‰sgfˆcx•œ‰gN+lBHcON83Hxxc†+SŽ€c•†GAuBmwglnODeˆcc•ˆ0†BIucE+˜jeˆ0B=Aucwclq04Kœux2J•B+‰D‘ˆHB—+S4+BˆPnS†FzSK—+Tœ0DDZ€cAcIx0‰HAFED0Ms0AcIz0iHw9†GDcjPxG‰Hw‰‰H0‰€DAKE+1cZn‰ŽHA9‰sD4†xmcDc1I‰B+‰DTˆ•EjJBKuNPnmDz†BcmKˆ…†ˆOˆMxXxS2jK9TX+SP‘wmn‘œ0†ZxS4=DO2Xx†…œ9c…ISEuDNEˆuM„+•†1J0x2J•B4+u„+•†1J0x2+M—400H„wB†PJSHcGc8ˆMxXxS2jJjˆ…•jX0†wHKB†nJmT0MjX+•D+wu—sASNKm†€ncN2wMDjJ0x2J•—OJu†Tˆ•†1J0x2J•B+N3œ˜2lqATIcm†Encx„œBTAnOˆm…†280cN3I•4PnOcIK•nZ0†Dœ†xl…0En…˜NZnGM„œEADl†ˆcGc€+•KTw•g‰IGc‰GKfA˜PFxcjPnGx1I‰B+‰DTˆ•†1J0x3+B2‘ncNDxBTEKSEˆœ1†rn‰x0wu21ˆuPm…PP0†x0xcsKx2JGBO+‰Dmx‰j—+S4cGZ0†nPœ0Blz˜4c9D+‰DTˆ•†1J0x2J•B€nuH0z†M…˜x3+B2‘ncNDxBTfJmBKON9ncx„œME1‰†IcGBuˆMx0ˆ†jEœ9DI‰Ox+x„x†sKDn…†2Znu†€D•DjJ0x2J•B+‰DTˆ•j—‰SgN0MH•‰˜P3œ˜2lqA2IccjZnxcœ•j—+S4cGZ0†nPœ0Blz˜4c9D+‰DTˆ•†1J0x2J•2P0†N+…0DED˜x3+MjXnOjG+•†1J0x2+1TJu†Tˆ•†1JlˆI0g+‰DTˆ•†1JlB2AHwPœ˜clz˜jOœux2J•B+‰D‘ˆHB—JSNmœ‰ˆ•+‰D+wu—sASNKm†€ncN2ˆu…G‰†NcGcf+‰gAuP†cOKEAHwPœ˜clz˜=€I0P=x0HjIucl+lDen0DsAHxmw•g†clK†I‰c€ˆ0H—Ig†n0Neˆ02sxcwPœBB‘ˆ•†1J0x2Jug‰‰NFI˜DEKK2JH—Zncw4œM†9œ9cKHˆf0†N2ˆGc…†nH00sDlT†…mˆIcsiODO†DDcscmc……„HDScADGxPAAˆxcu+Gˆ€D‰4jDH‰ˆOwHDScAD1K1J•DjJ0x2J•B+u†FJ0D9K†ˆcGT+Nqw˜cEc0xm…H2PncwHœ†eI0P=x0HjIuc†n0NecOxHxcxux‰i€q˜jenlˆXAHxEˆu†TzMH8ˆOx†K˜DPA‰i€q˜jeœAxEAu†HwMgN0l—€cON83HwHœ˜cl+0NHI+E4AuceIFEeJ0xœux2J•B+‰D‘ˆHB—JSNmœ‰ˆ•+‰D+zc†n‰S42+M„ZnuHXxcjPK˜gZD˜2ZœOT—œSH‘c˜HsDcKfI02fœSj‘ˆˆu+ljZxAc8œO24c˜HE+GNA‰4I0D—‰˜j+‰†+‰DTˆ•†1JlB2K‰2P0†N+…0DED˜xm…H2PncwHœ†eI+gXAHxœcAuP†cOKEAHxmw‰gNnO2ecuDGAucNIMgjœSNHœ0†€ˆ0BlIFEADOKHIADs3Hw€IMB‘ˆ•†1J0x2Jug‰‰N+œuDEqADmz‰2˜ˆ‰xqœ˜D—‰T…mKD†jA0mˆ3OnHœOBDc††Dmcz‰…HnS•D‰Z€I1c‘KOˆ1I‰B+‰DTˆ•EjœOˆ1I‰B+‰DFxuKl+DNc•H0SP0xcG‰T…mKnG2qzcjlcccœcˆ8nmD3I•E1‰D…P=nnPIuBn+lD2JH—Zncw4œBT‰KAKDJOx+Nqw˜cEcA†œ†ˆGnDOˆ•j—+SNKH‰PnSP0wu21I•E2J•B+‰NG+•†1J0x2J•B+‰DTIuDEcK…H2X012Iw˜29cA†3zA†r0xqI˜DE‰lˆ3zAc€0cN+œME1ˆBjcH2S‰•xXz†NPnOT…œj=nSHKœ•H1xGcec˜EZA˜†mx02nJAT3zD+‰DTˆ•†1J0x2J•B€0A—4I•†M…˜x3…•P8nuH0œ˜2f+S4ˆ…m†P0DTœ4j‰†IcGBuˆMx0ˆ†jEœ9DIc9D+‰DTˆ•†1J0x2J•B€ˆMxXxBjAJA†2Ku4HˆMNII˜21ˆuEKu4•0†D€D•DjJ0x2J•B+‰DTˆuBl00xJ•ˆXn†NF…˜cAˆuEKu4•0†D€ˆ•jj00x3+B2Zn†xc3•H1œ1x1I‰B+‰DTˆ•†1J0x2J•B+‰D+IS2l‰0x…ImT+†TxM4n‰TcHc•nxXx˜Bn‰0x3zAK€ˆMxXxBj‰w•E2J•B+‰DTˆ•†1Jm†1I‰B+‰DTˆ•†1J0xNcH†+•D˜œ˜2nJmT†‰ux€nG2XD†jAIOT†xug+‰DTˆ•†1J0x2J•B+‰DTIHs…0E2JGJP+‰Dmˆ•4A…ljN09TX+‰Dmx‰j—AT†œc‰OJu†Tˆ•†1J0x2J•Bˆ†B‘ˆ•†1J0x2J•B+‰xXœ‰†1ˆuNIcGBOˆMN€œ•j—+SNKHcZ+HNG+•†1J0x2J•B+‰DTˆ•†1J0x3K•P•0DTxcTAJ0P2JGT•00HX…M4n+SNKHc+•IuDEKmTIc9D+‰DTˆ•†1J0x2J•—PJu†Tˆ•†1J0x2J•B+N3œ˜DPJA†2JH—Zn‰xXz4‰D0NIK•jSnG2=œ˜29xug3K•P•0D€D•DjJ0x2J•B+‰DTˆuBl00xJH2P0†NDˆ•jj00x3+MjXnGBGxHN‰…1†3zA†rˆcNq…Bjl…9ˆˆœ04HA1Dqœ•gjJjˆ…•jX0†wHzcjlAˆmœcMu+‰wHxSK1JSH…HˆH0Dmw˜cOœux2J•B+‰DTˆ•†1J0x2J•—Zn‰N3xSKPJcI0˜D‰†N=I†jnJmTNcG†H+•xXx˜D9z9ˆIKHc‘+0jGˆ•†jxux3+MjXnO†€wMgOœux2J•B+‰DTˆ•†—…ME2J•B+‰DTˆ•†1J0Emœcˆr+‰JZˆ•j—‰SgN0MH•‰˜PF…029zMxNcONX+•D+zcjl…lˆKHˆS0SHXwHjAxux3KONu0A2˜wHŽs‰TmI0XOJu†Tˆ•†1J0x2J•B+N+œuBnAlKJœjXn†wP…†jc0TKHc‘+N3œ˜2lqATIcm†Encx„œME‰w•E2J•B+‰DTˆ•†1J†I0B—4nu••ˆ•j—+S4mzD+‰DTˆ•†—…ME1I‰B+‰DTxEjœ•E2J•B+‰DTw‰†eˆlKjˆcw€I˜cNˆSEe‰GK4xcx—xScNcDeI+gXAHxœcAD˜j†‰GKHx0cZxlc†n0NeˆAx€3uB†œi€q˜jecuHx0B†œgju4ecu2fxc…•xlc†w9cHˆ0B=Au‰OIsENˆ0Pe‰GNEx0c•I0cl3uN†c•†GAucGwgAD˜††‰GK4xcxJˆOcNcDeIlcux0‰Pwc†n0NeIA2=ˆ0Bnx9cN09KHœcN•AH…•xlcNx˜gœux2J•B+‰D‘ˆHB—JSNmœ‰ˆ•+‰D+xBjn‰Sg…†BnGD+z0BlD0P2AuBmwg†z9‰€ˆ0B=AuBlx0cNzS4†cHB8‰0g+‰DTˆ•†1œuxK+M2=nuH˜xM†1‰xˆ0Mj=n†NDˆH†n+†ˆ0˜EDlTNDAcsAHnHn+XHD024cA‰Hw‰‰H0+E1DlTlxGwOz‰•HœO†3DSB9DmcwcŸHnA2ˆDlTA3GcIz0iHwBxODAxHKAˆˆˆ‰H1I‰B+‰DTˆ•EjJBmK•ˆP0cwZˆ•j—‰TcHˆuˆBNKˆuBlDATIcuKXnu†Mœ2ˆœS4uœHNfœ0g‰œOK‘0˜HXDu2Eœ1xw˜ZOc9ˆu+ljXI†jnIOˆˆ…uHsDˆfw1c…xˆ2zTHD0j‘wB‰IOc…œOjDKMBODlM€wm‰uˆc…•DMD1Ju†Tˆ•†1J0xI‰2Tn•x˜zc†l…˜x3Ku4HˆMx0z0KEKD0Ku4•0†DFw˜2f‰S4I…†ˆP+‰gjql2HIlˆ‘x0BSw˜cjxSgHˆ0B=AuHnxMgEn04encN•x0HnxMi€q˜jec•PXˆc…PIScl3O2Hˆ0P€x+X„IgEDuHeIlcZAH…•x0jcx•HMJlxDAHw€wc†œSEH3GN8AHxqwOjcx•Henlˆ43ucfIOceJ0xœux2J•B+‰D‘ˆHB—+S4+BˆPnS†FI˜Df+SN†‰•B€0cN+…˜DEœ˜†0B2XD‰4jDmcˆ…†nHA˜†4D†4JG‰•+G‰Hw˜‰sDZ€cAcIx0‰H0l†˜Dcj1wmˆ2w‰…HDMXHD0M€DAˆ…KuŽODO†2Dc€xmˆ2AGHncDND‰4jwAwOz‰=HDlBBD‰4jJA‰OxAŸHwBxODAxHKAwOz‰H3K•nZˆMN3wB†fcmTIˆc…•xlclIuHH‰GK4x0†ˆOc†JOc†cONfx0BTwFEN09KHI+gXAHxœcADSjeˆAx•AuB0w•gNA2H3GN8AuBeIOcl+0Z€œ0NHxcwuIX€q˜†encˆGAu‰OIMg†n0NeœccsxcxKIS‰€q˜††‰GK8Ic2=ˆMN+z0Bl+mBKHN€xEMœ˜NN0˜PEœHK€x‰†Mœ0g…ˆˆu+ljXwM4—œOK0˜guDcKXœA‰OœBwSHXnKfxAKK+•†1J0x2J•B4+‰cF…˜B—+ˆ…•H‰†N=I†jnJmTNcG†H+‰gEc0H†Ilˆs3uBœ+El+9cHcGNxcw•x‰gAug†n‰2sxug+‰DTˆ•†1œOB…xug+‰DTˆuD—cS†Ku48+‰xI…02EAmTNcG†H+‰NI˜Bn‰mTNcGcf+•D+xBjn‰Sg…†BG+‰x˜z0DEKmc2JH2O0cN3I˜2nAA†l…ATG+‰D+…˜Bl…04…HnZ‰BKDx•HMJlD2JH2ZnSP+œ˜Df0SNK†2Zn†xcq‰P‰JlxDKMBO+HB‘ˆ•†1J0x†xug+‰DTˆ•†1J0x2Ku4E+‰DI˜2lcmTNKG†€0120D˜BnAmTmz0x€ˆMx=w˜DPxux3KGBXˆMx=x†j1IOT†xug+‰DTˆ•†1J0x2J•B+‰DF…˜B—+ˆz‰2H0†NmˆH2nI˜jI0M—ZncwPx‰E1ˆSHXwSPEwGcnœ˜E2…uEH+ADXw†j8œ˜PIˆu+SgfA˜†+xBjn‰Sg…†BZAOx‘ˆ•†1J0x2J•B+‰ŽZ+•†1J0x2J•B+‰DTIuK9œ9KIcG4ˆMDTq‰†9œ9c+Bj=nDIuK9œ9KIcG4ˆMD€D•DjJ0x2J•B+‰DTˆ•j—‰TcHˆuˆBNKqMH1J0H3I‰B€ˆMxXxBjlqABK1TOAOx‘ˆ•†1J0x2J•B+‰D+w˜2f‰S4mœ†j=nˆ+w˜2lc0xJ‰•2ZnSP+…††lxug3Ku4HˆMx0z0KEKD0Ku4•0†D€D•DjJ0x2J•B+‰DTˆ•j9œ9cKHˆPˆ˜H˜wHˆ9œ9KIc9x„A‰DTœ‰jjJ0ENcG‰Z0†N3…††lzBcNcGBX‰BKBx•gOœux2J•B+‰DTˆ•†1‰jK•ˆPˆMˆ+w˜2lc0xJ‰•2ZnSP+…††lxugcu48nu•P…˜Bl…04+B2PˆBxcwME8KlxDKMBZAOx‘ˆ•†1J0x2J•B+‰x+x†—w•E2J•B+‰DTˆ•†1J0x2J•B+N3œ˜K—c†I‰MP+‰xqI˜29z˜ˆ0MPXnuZPœ0KlD0jn…ˆPnuH˜D‰E˜wuEKuNZnO†Oˆ•j9…04KuNu0nZw•†1‰xˆ0Mj=n†NDwMgOœux2J•B+‰DTˆ•†1J0x2J•2Z0S†TœHjl…lx+˜E‘+N3œ˜K—c†I0EZ+‰NG+•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰…„xm‰u…=Hnmˆ˜D‰4jJAc4DmMHw˜‰sD†j†…1cˆn‰„Hw‰gTDlŸ€œMDjJ0x2J•B+‰DTˆ•†1J0x2J•B+‰DF…0…sz˜4I0MB‘+xXx0K9c†œ‰ˆGcxXxBjAIGx1I‰B+‰DTˆ•†1J0x2J•B+‰ŽZ+•†1J0x2J•B+‰DTˆ•†1J0x3K•„4nuP3œ˜2f‰†cNcGBX+‰JZˆuBlDATœ‰ˆG+•w4wBG+ˆKu4•0†D=…˜DfcS4‰•B4+‰KBx•HMJlTexug+‰DTˆ•†1J0x2+1T+‰DTˆ•†1J0x2J•—Gn‰xXwHjAI˜40M—ZˆcDIuDEcmT0MjH+HDTœ‰jjJ0g3K•„4nuP3œ˜2f‰†cNcGBXABD+zSK9K†K†2Zn†xcqMj—‰TcHˆuˆBNKwME‰w•E1IANu+‰DTˆ•†1J0x2J•2Z0S†IHGc†mœcˆHˆMˆ+w˜2lclK3+M„Z0cN3…Bˆ9œ9KIc1JP+N+w˜2lcˆ0BBZˆlx‘x4PJ0x2J•B+‰DTˆ•†1J0x2+Bj=nuZPIuKl…lxJuJG0cxX…˜K9œ9c2KH=4nSHq…˜Blqlc2+B2Zn†x0xSKn‰Aˆ2JuDH+w4œ˜K9I9ˆIJGKfAMDTIuD9K†ˆcGBr‰BDmx0BfAˆœ1†XnSHqx†j9c0g3+M2=nuH˜x˜DPzMEc…1†e01B0AH20AKKc2˜‰nPc†K€œMK‰…B2˜+H…•œ41J0ENcG‰Z0†N3…††lzBcNcGBX‰BDmx‰j9œ9cKHˆPˆ˜H˜wHˆ9œ9KI‰uXOJu„x†1J0x2J•B+‰DFq‰DjJ0x2J•B+‰DTˆuDEcmT0MjH+‰D+zcjn‰mBmœAJOJu†Tˆ•†1Jm†1ˆug+‰DTˆuD—+Tœ‰nZ0†DFzSK9KmTNc•H0SP0xcG‰T…mKn•N3w˜2f‰SˆmI0x€nm23w‰Enw•E2J•B+‰DTˆ•†1JS4ˆ…SNu+‰D2q˜D—+S4JI‰OJu†Tˆ•†1J0x2J•Bn•N3w˜2f‰SˆmI0x€nm23w‰E‰w•E2J•B+‰DTˆ•†1JS4ˆ…SNu+‰DmqMZGJ†Ic1KfAOx‘ˆ•†1J0xS‰0g+‰DTˆ•†—J†N0Bj=ˆMxcˆHjfccˆ…H2Znm—•ˆH†l‰S†n…•P‘0†x„w•E1‰SjcHBZJu†Tˆ•†1Jmx1I‰B+‰DTˆ•†1J0x3K•P•0DTq‰†1ˆ˜NIK•†ABNDˆ•jPD˜EKuNZnOZ3HŽs‰S4œ0480†…•œ†—ASgIcONG+‰Dmx‰j9AKIK9D+‰DTˆ•†1J0x2J•2Xˆ‰x0IE1‰SjcHBG+‰D+xSKn‰x0BBG+‰D+zcjn‰mBmœAcSˆ˜H˜z‰E‰w•E2J•B+‰DTˆ•†1JTII‰B‘+N3œ˜K—c†œ1s0cN2IBT‰…9x09D+‰DTˆ•†1J0x2J•B+‰DTˆuBl00xKHˆ•n•N+D‰E1‰ˆ0B2OˆBNKwMEnw•E2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†—‰SgmœAG+‰wHœ˜KPJˆ†K•PXn•N+w˜—sD˜g33u†uxFENISxen0ˆZˆ0BˆwEl‰lTHcOcjˆ0†8IBx˜IH†HcHD8AHwPIsEl+Sj†I+g€Au†=IˆF+cceˆ0B=Auccw‰gN+lJ€nc†s3HxKw9clKJ€n0Djˆ0B3wFEjI˜j9cmKIcHTXIu—GIO‰uc˜PEœHKEœ††Jw˜HIK9ˆu+mNfA˜†+IS2l‰lTexug+‰DTˆ•†1J0x2J•B+‰DFq‰DjJ0x2J•B+‰DTˆ•†1J0x2KHˆGnG20D•DjJ0x2J•B+‰DTˆ•†1J0x2J•B+‰DF…˜B—+ˆz‰2H0†NmˆH2nI˜jI0M—ZncwPx‰E9œ9KmKONu0xcœ•†8wux2Ilx+wP…0K—JmBJuEH+xqxBj1IGx1I‰B+‰DTˆ•†1J0x2J•B+‰ŽZ+•†1J0x2J•B+‰DFq‰DjJ0x2J•B+‰DTˆuDEcmT0MjH+‰D+xSKn‰x0BMOJu†Tˆ•†1Jm†1ˆug+‰DTˆ•4PœOB1I‰B+‰DTˆ•EjK˜g8wSˆXImcœO2sDu4Z+0ˆXx†jJœ˜†ˆ…u4G0+gXxcjnœ0†ˆK˜Hf+0PEIBSIO‰OnSEuDNEˆuM„+•†1J0x2J•B4+‰cFzcjn‰mBmœAKnGD+z0BlD0P2Au‘œMglnSPXIMP‰AuBlIFENI˜gOœux2J•B+‰D‘ˆHB—‰SgmœAGnO†FKSc9AS4m+B2Znm—•ˆGˆI‰H=u+sEuD0g4nmcˆˆAnHn†1D02jD1c…3uŽHœ•xuJu†Tˆ•†1J0xI0guJu†Tˆ•†1Jxmœ0Zs0cN+œM†90mBœ‰„ZncwPx‰†˜qlj+Mj9nmD3‰0DEcSP‰c•nZ0A2œ•j—AmTmœ04H0†€+•†1J0x2+9D+‰DTˆ•†1J0x2J•2P0†N+…0DED˜xm+MjX0mMPzcjnJDˆc•PX+•ˆGœZ4xOˆ…z0DG+‰Dmx†N1D9ˆ3…ATGcO†n•4PnOD2JuKmA˜†ˆM41‰j+MjZnSHmwMgOœux2J•Bˆ†B‘+•†1J0x2JGN4+ux‘ˆ•†1J0x2JugDlB1DAc‘…‰u+lB1DAKDAcKu‰Hœ•DfDc€+GcˆJGŽu+AnGDc€cGˆDXHncD—D0—sc1cˆœ‰„HnxJD02Ecmc‘œ‰MHw9†3D†4JG‰•+G‰ODO†2DAx3G‰uKO‰HwFEXD0gE3GwOz‰j1I‰B+‰DTˆ•EjJBmK•ˆP0cwZˆ•†1‰SN+B2Pc˜H˜xBjAJj+MjZnSHmˆGˆ…3H‰H0c†c•‰4AAcZn‰ŽHw‰x8Ju†Tˆ•†1J0xI‰2Tn•x˜zc†l…˜x3K•nZˆMN3cH†lz1BI‰•2rˆMN3w˜2EnuwuAFEcDcjHˆcxB…‰•Hw˜B—DlB9IDjJ0x2J•B+u†FJ0DEcmT0MjH+‰x˜z0DEKmc2Au‘œMglnSPHc•H=ˆcxKw+Ej+uxHˆ‰DHˆcxux0cjz˜g†ˆ0B=AuB0w•g†DuNTœux2J•B+‰D‘ˆHB—‰SgmœAGnO†FKSc9AS4m+B2Znm—•ˆGˆI‰H=u+sEuD0g4nmcˆˆAnHn†1D02jD1c…3uŽHœ•xuJu†Tˆ•†1J0xI0guJu†Tˆ•†1Jxmœ0Zs0cN+œM†90mBœ‰„ZncwPx‰†˜q0PI0B2enm2+œ˜…Z+mcK0B—Znu†IH†n‰mTmIGc=n†xcw•†1‰SN+B2PcSH˜wuKlclT1I‰B+‰DFD•DjJ0x2J•B+‰DTˆuBl00xKHj=nNqœMEnw•E2J•B+‰DTˆ•†1J0x2J•BA9‘IOc2…uHjn0ˆ‘œH†rœl2Nc˜g‘0lj€xAˆJœSg2+9ˆu+ljXImˆsœ0HuEHA92€x0gœ04sœSEuwg€xAˆJœSg2+˜H8D‰KfwM4‘+•†1J0x2J•B+‰DTˆ•†1J0xmœcnZˆBN3x‰†˜x9cI0˜DˆcxXwuKnJSgmKm†=0x3ˆ†jlz˜4cHˆHˆMDœj9œ1TIcGBA‰nZœ41‰mTNKu4r+HnZD•DjJ0x2J•B+‰DTˆuˆKœux2J•B+‰DTˆ•†9œ˜HJ•c€ˆ‰w4w•†M…˜x3+B2‘ncNDxBTfcT0…S4€0m20…˜DPˆOT09D+‰DTˆ•†1J0x2J•B+‰DTˆuDEcmT0MjH+‰ˆ•ˆMgOœux2J•B+‰DTˆ•†—…ME2J•B+‰DTˆ•†1JTII0NOnuH0œ†Žs…0NK•P‘012˜wu21ˆuP…zN0˜=HˆMErq˜P…Ic2=ˆMN+zcKEKKI‰GKf‰BD2œ4j‰mTNKu4rABJHˆS…G‰†+œA†Pc‰N3œB=Z…0NK•P‘+•D+I˜K—‰†0œ‰ˆGˆBxcwM4jnu†l…AJ€0BD‘HTjqlT3zlx+N=x˜21xux3KGB=ˆMxqœHjnAlD2K2A‰†cˆ†‰Zc†cn…1†A‰c0‰•EAœ1x1I‰B+‰DTˆ•†1J0x2J•B+‰D+œ˜29cKIcG‰ZnO†Tq‰†˜x˜Kexug+‰DTˆ•†1J0x2J•B+‰DFœ0—G+S4ˆc•P‘+‰DIu2lKmTˆ…SNXnO†FI˜DPJ0EN0B2Xn†DXD•DjJ0x2J•B+‰DTˆ•†1J0x2J•B+‰DTIHjlz˜4cHˆHˆMNqn†NAJA†2KGcXˆ9†FD0Blz1BmKuNO012˜IH†Xq04KHˆ•0†wH…ME1‰TKHˆ•cOjFˆM41J0EKuNZnO†€D•DjJ0x2J•B+‰DTˆ•†1J0x2+1T+‰DTˆ•†1J0x2J•B+‰DTˆuDEcmT0MjH+‰D+œ˜29cKIcG‰ZnOjG+•†1J0x2J•B+‰DFq‰DjJ0x2J•B+‰DTˆHjlz9jI09D+‰DTˆ•†1J0x2J•B+‰DTˆuDEcmT0MjH+‰ˆ•ˆMgOœux2J•B+‰DTˆ•†—…ME2J•B+‰ŽZ+•DjJ0x2J•Bu+u†‘+•†1J0x2J•B4+‰gNˆOc†n‰Psx0†ˆOc†JOc†cONfx0BTwFEl‰˜†Hc•BuAu†exFEl‰˜4HIlcuxcx€IFElq0X€c•j8ˆcx„IElD04†n‰jAuBmI0cj+uxHˆ‰DHˆ+X„I‰g†wO2e‰GKjˆc…•wlcl‰˜xHncˆGAHxJwEEJ0††n‰44ˆ0BˆwEl‰lTHn0g‘ˆ0crIlcNˆT†n‰jux+X„IcB‘ˆ•†1J0x2Jug‰‰NFI˜DEKK2J•B€0cN+…˜D€D0NcHcnGD+z0BlD0P2Au‘œMglnSPXIMP‰AuBlIFENI˜gOœux2J•B+‰D‘ˆHB—JSNmœ‰ˆ•+‰D+I˜K—‰†0œ‰ˆGˆBxcˆu…G‰†NcGcf+‰gju4ecu2fœ˜NqcMgNcuŽ€n0N‘xug+‰DTˆ•†1œuxK+M2=nuH˜xM†1‰DNcOKX+‰x3xS—sz˜4ˆcGKDlTjxmcIJu•Hw0†=DAxe+GcZ3uZu+sEjDGxPAAˆxcu+Gˆ€D‰4jD†jEKDm…†Nux†rœ˜j‰˜PGwmxXI1Kœ0„u0˜gsD†+‰DTˆ•†1JlB2K‰2O0cN3I˜2AJ0E†KGBG+‰Nq…˜DEœ9cIz‰KXwMGœS4IS4G0+gXxcjnœSH‘‰††‰clx+‰DTˆ•†1JlB2K‰2P0†N+…0DED˜xˆ0MjP0cN€ˆGˆ…3H‰H0c†Dc†PKmcIJO—u+lB1DAKDAcN3G‰uAMx=DAc4KAcZcOwHDOcBJu†Tˆ•†1J0xI‰2TˆMx=z0—Gˆ9j2Kcn•0A20xuK9œ9ˆI‰KZœMjfœO—uuHjw9ˆXI1xsœ9ˆ2A˜4HA˜j€xmˆ—œ0xNqME2J•B+‰DTw‰EjqME2J•B+‰NFz0Bn0SNKHc0SP0xcG‰T…mK012œ˜KBDlˆIKHˆr‰0PXA0Blx˜4K0B—Znu†IH†n‰mTmIGc=n†xcw•†1‰SN+B2PcSH˜wuKlclD2JH2Gncx•œBTl0SN+MPXAMDTIuc9…lDJcG‰4nxOwMDjJ0x2J•—OJu†Tˆ•†1J0x2J•Bncxˆˆ•E1‰DNcOKX+HNG+•†1J0x2J•B+‰DTˆ•†1J0xNcH†+•DBIuc9…lD‰•—OJu†Tˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•2Z0S†Tœ•†A‰mKcOx‰BDTIuK9I9TmzAŸ€ˆBxX0˜Bl‰SPI0B2r+•D€wM†—w•E2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•2P0†N+…0DED˜xl…AŸOJu†Tˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•—PJu†Tˆ•†1J0x2J•B+‰DTˆ•†—…ME2J•B+‰DTˆ•†1J0x2J•BncxˆœuD—+S4I…A†•0cN+ISB˜q0NKOx‘+„qBw4DFEn‰O…‘+•IH†n‰mTmIGc=n†xcx‰jr…˜†l…AJ€0BD‘œ4j‰mTNKu4rABJHˆS…G‰†+œA†Pc‰N3œB=Z…0NK•P‘+•D+I˜K—‰†0œ‰ˆGˆBxcwM4jˆ˜2nImc+u†3n†N8D0KImŽ€A12€œ41J0E†KGBGAMDTIu2lKmTˆ…SNXnO†OˆHc˜+ˆ+…A†‰‰†ˆ+ˆ†J4+c+c†Z+HNG+•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰D+œ˜29cKIcG‰ZnO†Tq‰†˜x˜Kexug+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0xIœA†P0†x˜ISB1J0g3KGB=ˆMxqœHjnA0xˆ0MH+xX…Bjl…9T†xug+‰DTˆ•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰D+œ˜29cKIcG‰ZnGB•ˆM†M…˜xœcnG+‰NXw˜2—cxN+M2S0cx+IcŽscDIcGBXnSPKœ•j9œ1TIcGBA‰nZw•†1‰mTNKu4r+HKG+•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰ŽZ+•†1J0x2J•B+‰DTˆ•†1J0x2J•B+‰N3œ˜K—c†I‰B€0†x„œ˜2lcc+M•OJu†Tˆ•†1J0x2J•B+‰DTˆ•†—…ME2J•B+‰DTˆ•†1J0x2J•B0†x„z†jnw•E2J•B+‰DTˆ•†1J0x2J•B+‰DTˆ•†—+S4+BˆPnS†Fn†N‰w•E2J•B+‰DTˆ•†1J0x2J•Bˆ†B‘ˆ•†1J0x2J•B+‰ŽZ+•†1J0x2J•B+‰DFzcjn‰mBmœAK+N+œuBnAlKJœ1†f0†N+Au—s‰S4m…M=H‰cN+…˜DjˆuEˆ0B—ZnuXHI˜2lclD2JH2=ˆMN+zcˆEKDcHcZAOx‘ˆ•†1J0xS‰0gˆ†B‘+Hsz˜Nm…•HˆcxXwuKnJSgmKm†=0x3ˆ†jlz˜4cHˆHˆMBZD•DjJ0x2J•2OnuHX…††n‰S42JH2SnS•PIHj0qAKcOwP+†mD•DjJ0x2J•2OnuHX…††n‰S42JH2S0x0…SBlAS4ez‰BuAFEN+SxecONfx0cNIMgjxlˆHcuE=3Hxux0cjz˜g†3GN8AHxqwGDXw˜2—cxN+M2S0cx+IA‰Hw‰‰HnAˆ†D‰ZuAMDœux2J•Bn•N0I029œ˜j2KH=4nSHq…˜Blqlc2Km†S0A—Px0…G‰†c•„Z+•D+x0—s‰S4n…uN•nDOˆ•jj‰SEI0BjZ0A2cwMDjJ0x2J•—OJu†Tˆ•†1J0x2J•B+N+œuBnAlKJœ1†Hnm2+œBŽGI9KJ•MP+‰D+x0—s‰S4n…uN•nKG+•†1J0x2J•B+‰DTIuK9I9TmzAŸ€012+œ˜KEœ˜jI‰•MP+‰D+IHjn0Tˆ…†‰OJu†Tˆ•†1J0x2J•Bncxˆˆ•E90SN+MPX+HNG+•†1J0x2J•B+‰DTˆ•†1J0x3+B2‘ncNDxBTXq0EI0BjZ0A2cˆHTAJcI0˜DˆcxXwuKnJSgmKm†=0x2œ•jPnOTexug+‰DTˆ•†1J0x2+1T+‰DTˆ•†—…ME1I‰B+‰DTxEjœ•E2J•B+‰DTw‰†eI+gXAHxœcj+uxHˆ‰DHˆcxeœElœS€ˆ0B=+˜N•ngADui€ˆ0x‰0g+‰DTˆ•†1œuxK+MjXˆMN0z02jJj+MjZnSHm+•†1J0x2J•B4A9x‘ˆ•†1J0xm+BˆjnxXI†90mBœ‰„ZncwPx‰†9DlˆIKHˆˆn†xOœ•Enw•E2J•B+‰DTˆ•†1J†I0B—4nu••ˆ•j—‰SgN0MH•‰˜ZPx0—s‰S4n…uN•nKG+•†1J0x2+1TJu†Tˆ•†1JlˆI0g+‰DTˆ•†1JlB2Au†exFEl‰˜4HI‰Ex0c1x0c†n0N—+S4m…m4nuHqœM4lœ˜XHnx†D0g1œm‰Hw‰‰H0‰…„Ju†Tˆ•†1J0xI‰2TnuH0…˜Kn+c2KGBZˆ‰x0Iuˆ—AmTmœ04H0x‘ˆ•†1J0x2JuguJu†Tˆ•†1Jxc•jGncxDˆHjfccˆ…H2Znm—•ˆuDEcj…HˆP0A20+†j1ˆOT†xug+‰DTˆ•†1J0x2+MjXˆMN0z02jJ0EKuNZnOZ3HŽsKmT+M†‘+mD3œ˜…sqABmœ‰PXABxXI•jPIGx1I‰B+‰DFq‰Dœux2J•BA9†‘w‰DjJ0x2J•B+u†MœujsˆS48D02‘I0g…œSxsœSPEœH—Z0†N=…1cKu‰Hœ•DfDAc4KAcˆJGN1I‰B+‰DTˆ•EjJBmœcnZˆBN3x‰†9…lT†KHˆ€ˆNq…˜DEœ9cIxug+‰DTˆ•†1œOˆ1I‰B+‰DFxuKl+DNc•H0SP0xcG‰T…mKˆMx0D˜K1ˆOT†xug+‰DTˆ•†1J0x2+MjXˆMN0z02jJ0EKuNZnOZ3HŽsKmT+M†‘+mD+œ˜c—‰0Pc9D+‰DTˆ•†—…ME1I‰B+‰DTxEjœ•E2J•B+‰DTw‰†eI‰g•3HxJœ9cj+uxHˆ‰DHˆ0cNIMxXxcj9cmJHnx†D0g1œm‰Hw‰‰H0‰…„Ju†Tˆ•†1J0xI‰2TnuH0…˜Kn+c2KGBZˆ‰x0Iuˆ—AmTmœ04H0x‘ˆ•†1J0x2JuguJu†Tˆ•†1Jxc•jGncxDˆHjfccˆ…H2Znm—•ˆuBlD0EI0˜x‘+HNG+•†1J0x2J•B+‰DFzcjn‰mBmœAK+N+œuBnAlKJœ1†=ˆMN+z‰E1ˆ9Tœc2Xˆ‰DmwMgOœux2J•Bˆ†B‘+•†1J0x2JGN4+ux‘ˆ•†1J0x2JugDu…Gcˆ3Hwu+lB1DAKDA‰Hw‰cˆ…N=nGDJœ9DIDuH+uˆfœ0g‰œ˜x…x•E2J•B+‰DTw‰†BJ†I0B—4nu••ˆu2lœ1KIcH—„nGD+z0BlD0P1I‰B+‰DTˆ•EjqME2J•B+‰NF…c†Ez9Tˆz‰2EˆBwHISK9œ9ˆI‰28nx˜zS…ZD0NcHc‘+HNG+•†1J0x2J•B+‰DFzcjn‰mBmœAK+N+œuBnAlKJœ1†=ˆMN+z‰E1ˆ˜jK•ˆrnO†mwMgOœux2J•Bˆ†B‘+•†1J0x2JGN4+ux‘ˆ•†1J0x2JugDu…Gcˆ3Hwu+lB1DAKDA‰Hw‰cˆ…m†HˆMx0x0K1…0EI0MP8D029ˆAc‘Ju„HDlBBDc†1qMDjJ0x2J•B+u†FJ0DEcmT0MjH+‰w4w˜c9cSES+M„ZnuHXxcjOœux2J•B+‰D‘xDjJ0x2J•2OˆBx3wuBlA0xIœ†ˆH0AD+w˜—sD˜xˆ…m†HˆMx0x0KB‰S4m…H‘+HNG+•†1J0x2J•B+‰DFzcjn‰mBmœAK+N+œuBnAlKJœ1†=ˆMN+z‰E1ˆ˜j…m‰Z0†wH…M4l‰S4m…Hf+HKG+•†1J0x2+1TJu†Tˆ•†1JlˆI0g+‰DTˆ•†1JlB2AuB8ˆ•gNˆT†I‰Ex0c1x0cN0l—€cHBZx0BmI0cEJ0††‰GKsˆc…uI+EADOKœux2J•B+‰D‘ˆHsI˜4ˆ…K=00H„œ1cKu‰Hœ•DfJu†Tˆ•†1J0xI‰2TnuH0…˜Kn+c2K•junm2O+•†1J0x2J•B4A9x‘ˆ•†1J0xm+BˆjnxXI†90mBœ‰„ZncwPx‰†9ASgIc•Ps0cx3wHjAˆOT†xug+‰DTˆ•†1J0x2+MjXˆMN0z02jJ0EKuNZnOZ3HŽsKmT+M†‘+m2qœHjlA2ˆc•jG0†DmwBT‰…˜P+M=40†DmD•DjJ0x2J•—PJux‘ˆ•†1J0x…z0g4Ju†Tˆ•†1J0xI‰KEœGKMœ0„u0˜gjœ•4fˆO2fœ0Hu4€+u2Xx1x…œ‰•OT+0P€x‰XZ+•†1J0x2J•B4+‰xqœHjlA2IcHKXwH=Oœ0xn•E2J•B+‰DTw‰†BJ†I0B—4nu••ˆH†EqlˆJ0g+‰DTˆ•†1œOˆ1I‰B+‰DFxuKl+DNc•H0SP0xcG‰T…mK0A2=œBsx˜4IJuxZˆlx‘ˆ•†1J0x2J•B+‰N3œ˜K—c†I‰B€ˆMx=w˜DP…FEn…nZˆMN2œ•=sASgIc•Ps0†xKœE‰…1†3…H2PˆBxcœgOœux2J•Bˆ†B‘+•†1J0x2JGN4+ux‘ˆ•†1J0x2JugDlBeJAcZ3uZu+lB1DAKDAcZIlnH0DEDlTP+m‰•+G‰H00‰OD‰44A1c…xA21I‰B+‰DTˆ•EjJSjKu48nA2˜I0290˜4G0mxEˆ•Em+•†1J0x2J•B4+‰cFzcjn‰mBmœAK00•PxS2Tœux2J•B+‰D‘xDjJ0x2J•2OˆBx3wuBlA0xIœ†ˆH0AD+w˜—sD˜xˆ…NZ0A2•IB†Ez˜4JuZOJu†Tˆ•†1J0x2J•BnuH0…˜Kn+c2JH—Zn‰xXz4‰D0ˆˆ0B—Znu†œ†sz9Tˆ…K=00H„œMjPIG†J‰uJZnuP0œMjrw•E2J•B+‰ŽZ+•DjJ0x2J•Bu+u†‘+•†1J0x2J•B4+‰gNISxen0ˆZˆ0†ˆOc†JOc†nc†s3HxKw9cl‰9—€ˆcc4J0g+‰DTˆ•†1œuxIcGc=00H„œBjecONfx0BTw9x‘ˆ•†1J0x2Jug‰‰N3œ˜K—c†I‰2jnm—Pw•DjJ0x2J•B+u„+•†1J0x2+M—400H„wB†PJSHcGc8ˆMxXxS2jJS4œ‰ˆjnx0I•E1œ1x1I‰B+‰DTˆ•†1J0xmœcnZˆBN3x‰†1‰mTNKu4rABJHˆ††n‰mTmI0xf0†wHIB†Ez˜4IJuDZ‰BJZœSK—+mBI‰u…OJu†Tˆ•†1Jm†1ˆug+‰DTˆ•4PœOB1I‰B+‰DTˆ•EjK˜H‘DMKEœmˆnœu†‘A˜PwSPEœ‰X‘œ˜EnS48Dg‘ˆHjsœSN0‰E2J•B+‰DTw‰†90ˆˆ…Hˆr0cx3wHj†cONfx0BTw9x‘ˆ•†1J0x2Jug‰‰N3œ˜K—c†I‰2jnm—Pw•DjJ0x2J•B+u„+•†1J0x2+M—400H„wB†PJSHcGc8ˆMxXxS2jJSH…„4nG2˜I029c0g09D+‰DTˆ•†1J0x2J•2P0†N+…0DED˜x3+B2‘ncNDxBTXq0N+B2P+•Dœ0—sAmBm…ˆjnxcœE‰…1†3…H2PˆBxcœgOœux2J•Bˆ†B‘+•†1J0x2JGN4+ux‘ˆ•†1J0x2JugDlBeJAcZ3uZu+lB1DAKDAcZIlnH0DED02†zAˆ2KuMHDBDEJu†Tˆ•†1J0xI‰2Enm2q…0…scSXHnx†D0g1œDjJ0x2J•B+u†FJ0DEcmT0MjH+‰x3xS—sx•E2J•B+‰DTw‰4Oœux2J•Bn•N0I029œ˜j2KH=4nSHq…˜Blqlc2KHju0AD0z†jl‰0g09D+‰DTˆ•†1J0x2J•2P0†N+…0DED˜x3+B2‘ncNDxBTXq0N+B2P+•Dœ0—sAmBm…†ˆ€+†€qcTAˆ1Tmœ†ˆX+jG+•†1J0x2+1TJu†Tˆ•†1JlˆI0g+‰DTˆ•†1JlB2AuB8ˆ•gNˆT†I‰Ex0c1x0cN0l—€cHBZxcxJwEADOT†nAxExcxw‰B‘ˆ•†1J0x2JugnG2qz0—sz9Dˆc•jG0Sclz˜PHn‰BZxug+‰DTˆ•†1œuxK+MjXˆMN0z02jJS†…m†GJu†Tˆ•†1J0xIAN+‰DTˆ•†—JmBˆœlNZ0l†Fœ0KlD0jKu4unS†Fz†G+ˆKON=00H„œME1œ1x1I‰B+‰DTˆ•†1J0xmœcnZˆBN3x‰†1‰mTNKu4rABJHˆ††n‰mTmI0xfnG2qz0—sz9Dˆc•jG0†DmwBT‰…˜P+M=40†DmD•DjJ0x2J•—PJux‘ˆ•†1J0x…z0g4Ju†Tˆ•†1J0xI‰KEœGKMœ0„u0˜gjœ•4fˆO2fœ0Hu4€+u2XImn‘IO‰u09TXngEI†€+•†1J0x2J•B4+‰x„xS2EnOKˆ…NZ0A2•IB†Ez˜ZHnx†D0g1œDjJ0x2J•B+u†FJ0DEcmT0MjH+‰x3xS—sx•E2J•B+‰DTw‰4Oœux2J•Bn•N0I029œ˜j2KH=4nSHq…˜Blqlc2KONunSHK˜29œ˜jN…ˆjnxcœ•Enw•E2J•B+‰DTˆ•†1J†I0B—4nu••ˆ•j—‰SgN0MH•‰˜ZPI˜K—‰†JuKGnm—Hœ4lADNc•Ps0cx3wHjAnOTJc1TfˆMN3…cjAnGx1I‰B+‰DFq‰Dœux2J•BA9†‘w‰DjJ0x2J•B+u†Mœ0i•K˜HfD†N‘I0g…œSxsœSHE+sgXI•EIOc…wS4sD˜2fœ•†—œOˆZ‰˜4=ncNEœH†ˆ+•†1J0x2J•B4+‰NFI˜…GAmD…•j€D029ˆAc‘JuP1I‰B+‰DTˆ•EjJBmœcnZˆBN3x‰†9+ˆ…x+‰DTˆ•†1JlB…xug+‰DTˆuD—cS†Ku48+‰xI…02EAmTNcG†H+‰NFI˜…GAmD…•j€+•DXD•DjJ0x2J•B+‰DTˆuDEcmT0MjH+‰D+…˜B9œ9j…c1cS0cN+…˜DjˆuPmK•ˆrnGDxSDE‰0Pc1ŸP+mD+z0Klc0Pexug+‰DTˆuˆKœ•E2J•B+‰…„w‰Eœux2J•B+‰D‘ˆGc4A•MHwFEXD†4JG‰•+G‰Hw˜†uDcj1œAcˆlHDOcJDEwmˆˆJ•=HA˜†•Ju†Tˆ•†1J0xI‰2r0†x„œBG‰S4IAHx„œcNJlTOœux2J•B+‰D‘ˆHB—+S4+BˆPnS†FI0—sqlD1I‰B+‰DTˆ•EjqME2J•B+‰NF…c†Ez9Tˆz‰2EˆBwHISK9œ9ˆI‰2r0†x„œBG‰S4IJuxZˆlx‘ˆ•†1J0x2J•B+‰N3œ˜K—c†I‰B€ˆMx=w˜DP…FEn…nZˆMN2œ•=GAS4KHˆ8ˆMx0I•jPIG†J‰uJZnuP0œMjrw•E2J•B+‰ŽZ+•DjJ0x2J•Bu+u†‘+•†1J0x2J•B4+‰gju4ecu2fx0†ˆOc†JOc†cuD4AHx„IEjclˆ†‰GKsˆ0cNIMgAq0j†ˆA†sxc…‘œucNJ2Oœux2J•B+‰D‘ˆHB—+S4+BˆPnS†FI˜Df+SN†‰•—•A0cAD9cHcGDZxc…•IlcjœSEHˆ0B=+˜jXœ†jMœ0g2ˆˆu+lŽHA0cAD9cHcGDZxc…•IlcjœSEHˆ0B=+˜PXœ†jMœ0g2ˆˆu+lŽ•AlcAD9cHcHTG3H…•I+EjœSEHˆ0B=+˜jXœ†jMœ0g2ˆˆu+lxˆcK…IOc…wS48DHT€x‰†uœOŸHA˜PEœH—HDc=s‰Ac4J•N1I‰B+‰DTˆ•EjqME2J•B+‰NF…c†Ez9Tˆz‰2EˆBwHISK9œ9ˆI‰2jnmD0xcj—A0g09D+‰DTˆ•†1J0x2J•B€ˆMx0D˜K1JA†2JH—Zn‰xXz4‰D0ˆˆ0B—Znu†œ††EqABœc2r+†€D•DjJ0x2J•B+‰DTˆ•j—‰S4†+BB‰BDFzSK—+SˆmœcˆOnx˜I†jAˆuPncDfAMDmw•jPxux3+B2Xˆ‰NKwMgOœux2J•B+‰DTˆ•†1‰mTI0˜ŽZ+‰JZˆuBfAˆœ1†€0†xqx†j9c0g3+B2Xˆ‰NKw•†—‰†cHcZAOx‘ˆ•†1J0x2J•B+‰N3œ˜K—c†I‰2Ju†Tˆ•†1J0x2J•B+‰DTˆ•†1ˆ1KD‰uD‰BJ•ˆ•j—‰S4†+B2A‰nZw•DjJ0x2J•B+‰DTˆ•†1J0x2JuJHAcDmˆHT‰D˜x3+B2Xˆ‰N+nH0…9D1I‰B+‰DTˆ•†1J0x2J•B+‰DDMHjnuxJc1K+N+œ˜c—‰S2Dœ1TGJu†Tˆ•†1J0x2J•B+‰DTˆ•†1ˆ1cDI0D‰BJ•ˆ•j—‰S4†+B2AAMZw•DjJ0x2J•B+‰DTˆHN‰w•E2J•B+‰ŽZ+•DjJ0x2J•Bu+u†‘+•†1J0x2J•B4+‰g†JOc†c•NH3HwPIsEl+Sj†I‰Ex0c1xcB‘ˆ•†1J0x2Jug‰‰NFI˜DEKK2Ku4HˆMDTIu2fcKˆœcˆP+‰DMœOnHDuH8wcNfˆO2fœ˜ŽOxSPEœHKEwE—œ04J‰E2J•B+‰DTw‰†BJxˆ0Mj=n†DFw˜2f‰0x3KH—4nuH˜…˜Blqlc2J•KXwSgrœ0†3K˜PwSPXI1xuœSH‘c˜HXDu2Zœ˜—‘xˆ2zS480†N€x†GIOc…wSHsDˆfw1c2+•†1J0x2J•B4+‰cFzcjn‰mBmœAK00•PxS2Tœux2J•B+‰D‘ˆHB—‰SgmœAGnO†FKSc9AS4m+B2Znm—•+•†1J0x2J•B4A9x‘ˆ•†1J0xm+BˆjnxXI†90mBœ‰„ZncwPx‰†9ADNc•Ps+•D+x0Kl…0†I0MPAcDOˆ•j9‰mBmœ‰nZncwPxcT‰JlT†xug+‰DTˆ•†1J0x2JH2jnmD0xcj—A0xJ‰•B€ˆMx=w˜DP…FEˆœA4nSH+zE1IGx1I‰B+‰DTˆ•†1J0x3+˜x‰BDTIH†EqABœc2rcO†DMHAˆ˜K2JOD+•D+I0—GccI+MP+mDz‰=4…9K3K•juˆBwHIu…4wuP†KMcf0BD€xH8w•E2J•B+‰DTˆ•†1J0E†‰•MP+‰D+I0—GccI+MP+mD€zM=4…˜xz‰B‘+x3xSKlD0Em…lDfˆcK2œ†NA…˜EˆœA4nSH+z†xPˆ1cD‰uK+H…„z‰gOœux2J•B+‰DTˆ•†—+S4+BˆPnS†TIuK9I9TmzAŸ€012+œ˜KEœ˜jI‰GŸ€0A2„wBswug3+˜xG+‰D+D‰41J0Eœ†ˆ•00H0zcT‰KlD2JH2€ˆBN3I˜K9œ9ˆImTO+HKG+•†1J0x2+1TJu†Tˆ•†1Jxmœ0Zs0cN+œM†90mBœ‰„ZncwPx‰†˜q0N+B2P+•D+xc†l…0409D+‰DTˆ•†1J0x2J•2Z0S†=xuDEcSPn…mB=ˆMxqœ•E1nOˆ3zAK€nSH˜xBjAD˜PJ‰•†‘A˜†‘•EA+lˆN‰uDG+‰D+…˜B9œ9j…c1cSnS•PIHj0qAKcOxG+‰D+xB†n‰SjNKHˆr+HDXD•DjJ0x2J•B+‰DTˆ•†1J0x2+MjXˆMN0z02jJ0Ec•nZ0A2=œ˜…4wONnc9D+‰DTˆ•†1J0x2J•—PJu†Tˆ•†1J0x2J•B0†x„z†jnw•E2J•B+‰DTˆ•†1J0x2J•BnuH0…˜Kn+c2JuDfAOx‘ˆ•†1J0x2J•B+‰ŽZ+•†1J0x2+1Tˆ†MgeJ‹‹